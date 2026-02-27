<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* front/pages/order-detail.html.twig */
class __TwigTemplate_a0e2e1228e36e16e0831fe48f1a6973f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/order-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/order-detail.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "PULSE - Detail commande";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "  ";
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Detail commande", "hero_sub" => "Vue complete de la commande et de ses lignes.", "breadcrumb_current" => "Detail commande"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "order_detail"]));
        // line 17
        yield "
        <div class=\"socialShell\">
          <div class=\"socialStack\">
            <section class=\"panel\">
              <div class=\"panel__head\">
                <div>
                  <h3 class=\"panel__title\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()), "orderNumber", [], "any", false, false, false, 23), "html", null, true);
        yield "</h3>
                  <div class=\"panel__desc\">
                    Creee le ";
        // line 25
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "createdAt", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "createdAt", [], "any", false, false, false, 25), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "
                    ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "paymentMethod", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " · Paiement ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "paymentMethod", [], "any", false, false, false, 26), "html", null, true);
        }
        // line 27
        yield "                  </div>
                </div>
                ";
        // line 29
        $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "status", [], "any", false, false, false, 29), "PENDING")) : ("PENDING"));
        // line 30
        yield "                ";
        $context["statusClass"] = (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 30, $this->source); })()) == "PAID") || ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 30, $this->source); })()) == "DELIVERED"))) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 30, $this->source); })()) == "SHIPPED")) ? ("badge--warning") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 30, $this->source); })()) == "CANCELLED")) ? ("badge--danger") : (""))))));
        // line 31
        yield "                <span class=\"badge ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "</span>
              </div>

              ";
        // line 34
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["line_items"]) || array_key_exists("line_items", $context) ? $context["line_items"] : (function () { throw new RuntimeError('Variable "line_items" does not exist.', 34, $this->source); })()))) {
            // line 35
            yield "                <div class=\"emptyState\">Aucune ligne de commande disponible.</div>
              ";
        } else {
            // line 37
            yield "                <div class=\"tableWrap\">
                  <table class=\"table\">
                    <thead>
                      <tr>
                        <th>Produit</th>
                        <th>Quantite</th>
                        <th>Prix unitaire</th>
                        <th>Sous-total</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["line_items"]) || array_key_exists("line_items", $context) ? $context["line_items"] : (function () { throw new RuntimeError('Variable "line_items" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
                // line 49
                yield "                        <tr>
                          <td>";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lineItem"], "product_name", [], "any", false, false, false, 50), "html", null, true);
                yield "</td>
                          <td>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lineItem"], "quantity", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>
                          <td>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lineItem"], "unit_price", [], "any", false, false, false, 52), 2, ".", " "), "html", null, true);
                yield " DT</td>
                          <td>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lineItem"], "line_total", [], "any", false, false, false, 53), 2, ".", " "), "html", null, true);
                yield " DT</td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lineItem'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                    </tbody>
                  </table>
                </div>
              ";
        }
        // line 60
        yield "            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">SUIVI</h3>
              <div class=\"socialQuickList\">
                <div class=\"listItem\"><span>Commande creee</span><span class=\"badge badge--success\">OK</span></div>
                <div class=\"listItem\"><span>Paiement</span><span class=\"badge ";
        // line 66
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 66, $this->source); })()), "paymentStatus", [], "any", false, false, false, 66) == "PAID")) ? ("badge--success") : (""));
        yield "\">";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", true, true, false, 66) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 66, $this->source); })()), "paymentStatus", [], "any", false, false, false, 66)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 66, $this->source); })()), "paymentStatus", [], "any", false, false, false, 66), "html", null, true)) : ("UNPAID"));
        yield "</span></div>
                <div class=\"listItem\"><span>Expedition</span><span class=\"badge ";
        // line 67
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 67, $this->source); })()), "shippedAt", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge--success") : (""));
        yield "\">";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 67, $this->source); })()), "shippedAt", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 67, $this->source); })()), "shippedAt", [], "any", false, false, false, 67), "d/m/Y"), "html", null, true)) : ("En attente"));
        yield "</span></div>
                <div class=\"listItem\"><span>Livraison</span><span class=\"badge ";
        // line 68
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "deliveredAt", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge--success") : (""));
        yield "\">";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "deliveredAt", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "deliveredAt", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true)) : ("En attente"));
        yield "</span></div>
              </div>
            </section>
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">RESUME</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Sous-total</span><span class=\"listItem__meta\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["items_subtotal"]) || array_key_exists("items_subtotal", $context) ? $context["items_subtotal"] : (function () { throw new RuntimeError('Variable "items_subtotal" does not exist.', 77, $this->source); })()), 2, ".", " "), "html", null, true);
        yield " DT</span></div>
                <div class=\"listItem\"><span>Livraison</span><span class=\"listItem__meta\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["shipping_amount"]) || array_key_exists("shipping_amount", $context) ? $context["shipping_amount"] : (function () { throw new RuntimeError('Variable "shipping_amount" does not exist.', 78, $this->source); })()), 2, ".", " "), "html", null, true);
        yield " DT</span></div>
                <div class=\"listItem\"><span>Total</span><span class=\"listItem__meta\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["order_total"]) || array_key_exists("order_total", $context) ? $context["order_total"] : (function () { throw new RuntimeError('Variable "order_total" does not exist.', 79, $this->source); })()), 2, ".", " "), "html", null, true);
        yield " DT</span></div>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">LIVRAISON</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Adresse</span><span class=\"listItem__meta\">";
        // line 86
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "shippingAddress", [], "any", true, true, false, 86) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 86, $this->source); })()), "shippingAddress", [], "any", false, false, false, 86)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 86, $this->source); })()), "shippingAddress", [], "any", false, false, false, 86), "html", null, true)) : ("Non renseignee"));
        yield "</span></div>
                <div class=\"listItem\"><span>Telephone</span><span class=\"listItem__meta\">";
        // line 87
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phoneForDelivery", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 87, $this->source); })()), "phoneForDelivery", [], "any", false, false, false, 87)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 87, $this->source); })()), "phoneForDelivery", [], "any", false, false, false, 87), "html", null, true)) : ("Non renseigne"));
        yield "</span></div>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">ACTIONS</h3>
              <div class=\"postCard__actions\">
                <a class=\"btn btn--ghost\" href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\">Retour commandes</a>
                <a class=\"btn btn--ghost\" href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\">Voir notifications</a>
              </div>
            </section>
          </aside>
        </div>
      </div>

      ";
        // line 102
        yield from $this->load("front/partials/_footer.html.twig", 102)->unwrap()->yield($context);
        // line 103
        yield "    </section>
  </main>

  ";
        // line 106
        yield from $this->load("front/partials/_auth_modal.html.twig", 106)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/order-detail.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  291 => 106,  286 => 103,  284 => 102,  274 => 95,  270 => 94,  260 => 87,  256 => 86,  246 => 79,  242 => 78,  238 => 77,  224 => 68,  218 => 67,  212 => 66,  204 => 60,  198 => 56,  189 => 53,  185 => 52,  181 => 51,  177 => 50,  174 => 49,  170 => 48,  157 => 37,  153 => 35,  151 => 34,  142 => 31,  139 => 30,  137 => 29,  133 => 27,  128 => 26,  124 => 25,  119 => 23,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Detail commande{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Detail commande',
    hero_sub: 'Vue complete de la commande et de ses lignes.',
    breadcrumb_current: 'Detail commande'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'order_detail' } %}

        <div class=\"socialShell\">
          <div class=\"socialStack\">
            <section class=\"panel\">
              <div class=\"panel__head\">
                <div>
                  <h3 class=\"panel__title\">{{ order.orderNumber }}</h3>
                  <div class=\"panel__desc\">
                    Creee le {{ order.createdAt ? order.createdAt|date('d/m/Y H:i') : '-' }}
                    {% if order.paymentMethod %} · Paiement {{ order.paymentMethod }}{% endif %}
                  </div>
                </div>
                {% set status = order.status|default('PENDING') %}
                {% set statusClass = status == 'PAID' or status == 'DELIVERED' ? 'badge--success' : (status == 'SHIPPED' ? 'badge--warning' : (status == 'CANCELLED' ? 'badge--danger' : '')) %}
                <span class=\"badge {{ statusClass }}\">{{ status }}</span>
              </div>

              {% if line_items is empty %}
                <div class=\"emptyState\">Aucune ligne de commande disponible.</div>
              {% else %}
                <div class=\"tableWrap\">
                  <table class=\"table\">
                    <thead>
                      <tr>
                        <th>Produit</th>
                        <th>Quantite</th>
                        <th>Prix unitaire</th>
                        <th>Sous-total</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for lineItem in line_items %}
                        <tr>
                          <td>{{ lineItem.product_name }}</td>
                          <td>{{ lineItem.quantity }}</td>
                          <td>{{ lineItem.unit_price|number_format(2, '.', ' ') }} DT</td>
                          <td>{{ lineItem.line_total|number_format(2, '.', ' ') }} DT</td>
                        </tr>
                      {% endfor %}
                    </tbody>
                  </table>
                </div>
              {% endif %}
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">SUIVI</h3>
              <div class=\"socialQuickList\">
                <div class=\"listItem\"><span>Commande creee</span><span class=\"badge badge--success\">OK</span></div>
                <div class=\"listItem\"><span>Paiement</span><span class=\"badge {{ order.paymentStatus == 'PAID' ? 'badge--success' : '' }}\">{{ order.paymentStatus ?? 'UNPAID' }}</span></div>
                <div class=\"listItem\"><span>Expedition</span><span class=\"badge {{ order.shippedAt ? 'badge--success' : '' }}\">{{ order.shippedAt ? order.shippedAt|date('d/m/Y') : 'En attente' }}</span></div>
                <div class=\"listItem\"><span>Livraison</span><span class=\"badge {{ order.deliveredAt ? 'badge--success' : '' }}\">{{ order.deliveredAt ? order.deliveredAt|date('d/m/Y') : 'En attente' }}</span></div>
              </div>
            </section>
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">RESUME</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Sous-total</span><span class=\"listItem__meta\">{{ items_subtotal|number_format(2, '.', ' ') }} DT</span></div>
                <div class=\"listItem\"><span>Livraison</span><span class=\"listItem__meta\">{{ shipping_amount|number_format(2, '.', ' ') }} DT</span></div>
                <div class=\"listItem\"><span>Total</span><span class=\"listItem__meta\">{{ order_total|number_format(2, '.', ' ') }} DT</span></div>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">LIVRAISON</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Adresse</span><span class=\"listItem__meta\">{{ order.shippingAddress ?? 'Non renseignee' }}</span></div>
                <div class=\"listItem\"><span>Telephone</span><span class=\"listItem__meta\">{{ order.phoneForDelivery ?? 'Non renseigne' }}</span></div>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">ACTIONS</h3>
              <div class=\"postCard__actions\">
                <a class=\"btn btn--ghost\" href=\"{{ path('front_orders') }}\">Retour commandes</a>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_notifications') }}\">Voir notifications</a>
              </div>
            </section>
          </aside>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/order-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\order-detail.html.twig");
    }
}
