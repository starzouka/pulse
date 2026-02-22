<?php

declare(strict_types=1);

namespace App\Service\Payment;

final class StripeService
{
    private readonly \Stripe\StripeClient $client;
    private readonly ?string $webhookSecret;

    public function __construct()
    {
        $secret = $_ENV['STRIPE_SECRET'] ?? getenv('STRIPE_SECRET');
        $this->webhookSecret = $_ENV['STRIPE_WEBHOOK_SECRET'] ?? getenv('STRIPE_WEBHOOK_SECRET');

        if (empty($secret)) {
            throw new \RuntimeException('STRIPE_SECRET not configured in environment');
        }

        $this->client = new \Stripe\StripeClient($secret);
    }

    /**
     * Create a Stripe Checkout Session.
     * Returns the session object as returned by stripe-php.
     *
     * @param array $lineItems
     * @param string $successUrl
     * @param string $cancelUrl
     * @param array $metadata
     * @param string|null $customerEmail
     * @return object
     */
    public function createCheckoutSession(array $lineItems, string $successUrl, string $cancelUrl, array $metadata = [], ?string $customerEmail = null): object
    {
        return $this->client->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'mode' => 'payment',
            'line_items' => $lineItems,
            'success_url' => $successUrl,
            'cancel_url' => $cancelUrl,
            'metadata' => $metadata,
            'customer_email' => $customerEmail,
        ]);
    }

    /**
     * Construct event from Stripe webhook payload and signature header.
     * Throws when verification fails.
     *
     * @param string $payload
     * @param string|null $sigHeader
     * @return \Stripe\Event
     */
    public function constructEvent(string $payload, ?string $sigHeader): \Stripe\Event
    {
        if (empty($this->webhookSecret)) {
            throw new \RuntimeException('STRIPE_WEBHOOK_SECRET not configured in environment');
        }

        return \Stripe\Webhook::constructEvent($payload, (string) $sigHeader, $this->webhookSecret);
    }
}
