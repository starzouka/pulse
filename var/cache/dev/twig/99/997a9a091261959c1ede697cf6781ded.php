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

/* front/pages/captain-product-create.html.twig */
class __TwigTemplate_1c3420bbbd92a8fe4464a19d33f70f71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-product-create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-product-create.html.twig"));

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

        yield "PULSE - Creer produit";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Creer produit", "hero_sub" => "Ajout d'un nouveau produit dans l'equipe active.", "breadcrumb_current" => "Creer produit"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "products", "active_team" =>         // line 18
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 18, $this->source); })())]));
        // line 20
        yield "
        <div>
          ";
        // line 22
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 23
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 23, $this->source); })()), "active_team" =>         // line 24
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 24, $this->source); })()), "selector_route" => "front_captain_product_create"]));
        // line 27
        yield "
          <form class=\"panel\" method=\"post\" action=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_product_create", ["team" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 28, $this->source); })()), "teamId", [], "any", false, false, false, 28)]), "html", null, true);
        yield "\" enctype=\"multipart/form-data\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">NOUVEAU PRODUIT</h3>
                <div class=\"panel__desc\">Tous les champs relies a la table products + upload images.</div>
              </div>
            </div>

            <div class=\"formGrid\" style=\"margin-top:12px;\">
              <label class=\"field\">
                <span class=\"field__label\">Nom *</span>
                <input class=\"input\" type=\"text\" name=\"name\" required maxlength=\"150\">
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Prix (DT) *</span>
                <input class=\"input\" type=\"number\" name=\"price\" min=\"0\" step=\"0.01\" required>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Stock *</span>
                <input class=\"input\" type=\"number\" name=\"stock_qty\" min=\"0\" step=\"1\" value=\"0\" required>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">SKU</span>
                <input class=\"input\" type=\"text\" name=\"sku\" maxlength=\"64\">
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Statut</span>
                <select class=\"input\" name=\"is_active\">
                  <option value=\"1\">Actif</option>
                  <option value=\"0\">Inactif</option>
                </select>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Description</span>
                <textarea class=\"textarea\" name=\"description\" rows=\"5\"></textarea>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Images produit</span>
                <input class=\"input\" type=\"file\" name=\"images[]\" accept=\"image/png,image/jpeg,image/webp,image/gif\" multiple>
              </label>
            </div>

            <div class=\"formActions\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"_token\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("captain_product_create"), "html", null, true);
        yield "\">
              <input type=\"hidden\" name=\"team_id\" value=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 78, $this->source); })()), "teamId", [], "any", false, false, false, 78), "html", null, true);
        yield "\">
              <button class=\"btn btn--primary\" type=\"submit\">Creer produit</button>
              <a class=\"btn btn--ghost\" href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_products", ["team" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 80, $this->source); })()), "teamId", [], "any", false, false, false, 80)]), "html", null, true);
        yield "\">Retour liste</a>
            </div>
          </form>
        </div>
      </div>

      ";
        // line 86
        yield from $this->load("front/partials/_footer.html.twig", 86)->unwrap()->yield($context);
        // line 87
        yield "    </section>
  </main>

  ";
        // line 90
        yield from $this->load("front/partials/_auth_modal.html.twig", 90)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/captain-product-create.html.twig";
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
        return array (  200 => 90,  195 => 87,  193 => 86,  184 => 80,  179 => 78,  175 => 77,  123 => 28,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Creer produit{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'CAPITAINE',
    hero_title: 'Creer produit',
    hero_sub: \"Ajout d'un nouveau produit dans l'equipe active.\",
    breadcrumb_current: 'Creer produit'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_captain_side_nav.html.twig' with {
          active: 'products',
          active_team: active_team
        } %}

        <div>
          {% include 'front/partials/_captain_team_selector.html.twig' with {
            captain_teams: captain_teams,
            active_team: active_team,
            selector_route: 'front_captain_product_create'
          } %}

          <form class=\"panel\" method=\"post\" action=\"{{ path('front_captain_product_create', {team: active_team.teamId}) }}\" enctype=\"multipart/form-data\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">NOUVEAU PRODUIT</h3>
                <div class=\"panel__desc\">Tous les champs relies a la table products + upload images.</div>
              </div>
            </div>

            <div class=\"formGrid\" style=\"margin-top:12px;\">
              <label class=\"field\">
                <span class=\"field__label\">Nom *</span>
                <input class=\"input\" type=\"text\" name=\"name\" required maxlength=\"150\">
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Prix (DT) *</span>
                <input class=\"input\" type=\"number\" name=\"price\" min=\"0\" step=\"0.01\" required>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Stock *</span>
                <input class=\"input\" type=\"number\" name=\"stock_qty\" min=\"0\" step=\"1\" value=\"0\" required>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">SKU</span>
                <input class=\"input\" type=\"text\" name=\"sku\" maxlength=\"64\">
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Statut</span>
                <select class=\"input\" name=\"is_active\">
                  <option value=\"1\">Actif</option>
                  <option value=\"0\">Inactif</option>
                </select>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Description</span>
                <textarea class=\"textarea\" name=\"description\" rows=\"5\"></textarea>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Images produit</span>
                <input class=\"input\" type=\"file\" name=\"images[]\" accept=\"image/png,image/jpeg,image/webp,image/gif\" multiple>
              </label>
            </div>

            <div class=\"formActions\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_product_create') }}\">
              <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
              <button class=\"btn btn--primary\" type=\"submit\">Creer produit</button>
              <a class=\"btn btn--ghost\" href=\"{{ path('front_captain_products', {team: active_team.teamId}) }}\">Retour liste</a>
            </div>
          </form>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}

", "front/pages/captain-product-create.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\captain-product-create.html.twig");
    }
}
