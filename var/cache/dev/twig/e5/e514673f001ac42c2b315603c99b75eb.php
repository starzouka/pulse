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

/* front/pages/checkout.html.twig */
class __TwigTemplate_4a18430b0ac0db07a791ff513fc0c6cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/checkout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/checkout.html.twig"));

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

        yield "PULSE - Checkout";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Checkout", "hero_sub" => "Confirmer votre commande.", "breadcrumb_current" => "Checkout"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "cart"]));
        // line 17
        yield "
        <div class=\"socialShell\">
          <div class=\"socialStack\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 21
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                yield "                <div class=\"listItem\">
                  <span>";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                  <span class=\"badge ";
                // line 24
                yield ((($context["label"] == "error")) ? ("badge--danger") : (((($context["label"] == "info")) ? ("badge--info") : ("badge--success"))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
            <section class=\"panel\">
              <h3 class=\"panel__title\">RECAPITULATIF</h3>

              <div class=\"list\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            yield "                  ";
            $context["product"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 34);
            // line 35
            yield "                  <div class=\"listItem\">
                    <span>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
            yield " x";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                    <span class=\"listItem__meta\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "line_total", [], "any", false, false, false, 37), 2, ".", " "), "html", null, true);
            yield " DT</span>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "              </div>

              <div class=\"listItem\" style=\"margin-top:8px;\">
                <span>Total</span>
                <span class=\"badge badge--success\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["cart_subtotal"]) || array_key_exists("cart_subtotal", $context) ? $context["cart_subtotal"] : (function () { throw new RuntimeError('Variable "cart_subtotal" does not exist.', 44, $this->source); })()), 2, ".", " "), "html", null, true);
        yield " DT</span>
              </div>
            </section>

            <form class=\"panel\" method=\"post\" action=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_checkout");
        yield "\">
              <input type=\"hidden\" name=\"_token\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("checkout_confirm"), "html", null, true);
        yield "\">

              <div class=\"formGrid\">
                <label class=\"field\">
                  <span class=\"field__label\">Adresse de livraison</span>
                  <textarea class=\"textarea\" name=\"shipping_address\" rows=\"3\" placeholder=\"Adresse complete...\"></textarea>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Telephone</span>
                  <input class=\"input\" type=\"tel\" name=\"phone_for_delivery\" value=\"";
        // line 59
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["viewer_user"] ?? null), "phone", [], "any", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 59, $this->source); })()), "phone", [], "any", false, false, false, 59)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 59, $this->source); })()), "phone", [], "any", false, false, false, 59), "html", null, true)) : (""));
        yield "\" placeholder=\"+216...\" />
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Methode de paiement</span>
                  <select class=\"input\" name=\"payment_method\">
                    <option value=\"CARD\">CARD</option>
                    <option value=\"CASH\">CASH</option>
                    <option value=\"OTHER\">OTHER</option>
                  </select>
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Confirmer la commande</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart");
        yield "\">Retour panier</a>
              </div>
            </form>
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">INFO</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Nombre d'articles</span><span class=\"listItem__meta\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 83, $this->source); })())), "html", null, true);
        yield "</span></div>
                <div class=\"listItem\"><span>Montant</span><span class=\"listItem__meta\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["cart_subtotal"]) || array_key_exists("cart_subtotal", $context) ? $context["cart_subtotal"] : (function () { throw new RuntimeError('Variable "cart_subtotal" does not exist.', 84, $this->source); })()), 2, ".", " "), "html", null, true);
        yield " DT</span></div>
              </div>
            </section>
          </aside>
        </div>
      </div>

      ";
        // line 91
        yield from $this->load("front/partials/_footer.html.twig", 91)->unwrap()->yield($context);
        // line 92
        yield "    </section>
  </main>

  ";
        // line 95
        yield from $this->load("front/partials/_auth_modal.html.twig", 95)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/checkout.html.twig";
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
        return array (  262 => 95,  257 => 92,  255 => 91,  245 => 84,  241 => 83,  229 => 74,  211 => 59,  198 => 49,  194 => 48,  187 => 44,  181 => 40,  172 => 37,  166 => 36,  163 => 35,  160 => 34,  156 => 33,  149 => 28,  143 => 27,  132 => 24,  128 => 23,  125 => 22,  120 => 21,  116 => 20,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Checkout{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Checkout',
    hero_sub: 'Confirmer votre commande.',
    breadcrumb_current: 'Checkout'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'cart' } %}

        <div class=\"socialShell\">
          <div class=\"socialStack\">
            {% for label, messages in app.flashes %}
              {% for message in messages %}
                <div class=\"listItem\">
                  <span>{{ message }}</span>
                  <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'info' ? 'badge--info' : 'badge--success') }}\">{{ label|upper }}</span>
                </div>
              {% endfor %}
            {% endfor %}

            <section class=\"panel\">
              <h3 class=\"panel__title\">RECAPITULATIF</h3>

              <div class=\"list\">
                {% for item in cart_items %}
                  {% set product = item.product %}
                  <div class=\"listItem\">
                    <span>{{ product.name }} x{{ item.quantity }}</span>
                    <span class=\"listItem__meta\">{{ item.line_total|number_format(2, '.', ' ') }} DT</span>
                  </div>
                {% endfor %}
              </div>

              <div class=\"listItem\" style=\"margin-top:8px;\">
                <span>Total</span>
                <span class=\"badge badge--success\">{{ cart_subtotal|number_format(2, '.', ' ') }} DT</span>
              </div>
            </section>

            <form class=\"panel\" method=\"post\" action=\"{{ path('front_checkout') }}\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('checkout_confirm') }}\">

              <div class=\"formGrid\">
                <label class=\"field\">
                  <span class=\"field__label\">Adresse de livraison</span>
                  <textarea class=\"textarea\" name=\"shipping_address\" rows=\"3\" placeholder=\"Adresse complete...\"></textarea>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Telephone</span>
                  <input class=\"input\" type=\"tel\" name=\"phone_for_delivery\" value=\"{{ viewer_user.phone ?? '' }}\" placeholder=\"+216...\" />
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Methode de paiement</span>
                  <select class=\"input\" name=\"payment_method\">
                    <option value=\"CARD\">CARD</option>
                    <option value=\"CASH\">CASH</option>
                    <option value=\"OTHER\">OTHER</option>
                  </select>
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Confirmer la commande</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_cart') }}\">Retour panier</a>
              </div>
            </form>
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">INFO</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Nombre d'articles</span><span class=\"listItem__meta\">{{ cart_items|length }}</span></div>
                <div class=\"listItem\"><span>Montant</span><span class=\"listItem__meta\">{{ cart_subtotal|number_format(2, '.', ' ') }} DT</span></div>
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
", "front/pages/checkout.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\checkout.html.twig");
    }
}
