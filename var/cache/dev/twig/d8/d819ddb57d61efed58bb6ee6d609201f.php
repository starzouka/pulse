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

/* front/pages/captain-products.html.twig */
class __TwigTemplate_4d7d25dd1bdd03f501e75062cb60cf01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-products.html.twig"));

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

        yield "PULSE - Produits equipe";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Produits", "hero_sub" => "Gestion des produits de l'equipe active.", "breadcrumb_current" => "Produits"]));
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
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 24, $this->source); })()), "selector_route" => "front_captain_products"]));
        // line 27
        yield "
          <form class=\"panel\" method=\"get\" action=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_products");
        yield "\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 30, $this->source); })()), "teamId", [], "any", false, false, false, 30), "html", null, true);
        yield "\">
              <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 31, $this->source); })()), "q", [], "any", false, false, false, 31), "html", null, true);
        yield "\" placeholder=\"Rechercher nom, description ou SKU\">
              <label class=\"field\" style=\"display:flex;align-items:center;gap:8px;\">
                <input type=\"checkbox\" name=\"inactive\" value=\"1\" ";
        // line 33
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 33, $this->source); })()), "inactive", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                <span class=\"field__label\">Inclure inactifs</span>
              </label>
              <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
              <a class=\"btn btn--primary\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_product_create", ["team" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 37, $this->source); })()), "teamId", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\">Nouveau produit</a>
            </div>
          </form>

          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">PRODUITS DE ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44)), "html", null, true);
        yield "</h3>
                <div class=\"panel__desc\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 45, $this->source); })())), "html", null, true);
        yield " produit(s)</div>
              </div>
            </div>

            <div class=\"cardsGrid\" style=\"margin-top:10px;\">
              ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            yield "                ";
            $context["primaryImage"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["product_primary_images"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 51), [], "array", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_primary_images"]) || array_key_exists("product_primary_images", $context) ? $context["product_primary_images"] : (function () { throw new RuntimeError('Variable "product_primary_images" does not exist.', 51, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 51), [], "array", false, false, false, 51)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_primary_images"]) || array_key_exists("product_primary_images", $context) ? $context["product_primary_images"] : (function () { throw new RuntimeError('Variable "product_primary_images" does not exist.', 51, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 51), [], "array", false, false, false, 51)) : (null));
            // line 52
            yield "                ";
            $context["imagePath"] = (((($tmp = (isset($context["primaryImage"]) || array_key_exists("primaryImage", $context) ? $context["primaryImage"] : (function () { throw new RuntimeError('Variable "primaryImage" does not exist.', 52, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["primaryImage"]) || array_key_exists("primaryImage", $context) ? $context["primaryImage"] : (function () { throw new RuntimeError('Variable "primaryImage" does not exist.', 52, $this->source); })()), "fileUrl", [], "any", false, false, false, 52)) : (""));
            // line 53
            yield "                ";
            $context["imageUrl"] = (((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 53, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 53, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 53, $this->source); })()))))) : ((("https://picsum.photos/seed/captain_product_" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 53)) . "/1000/700")));
            // line 54
            yield "                <article class=\"card card--product\">
                  <div class=\"card__media\" data-bg=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\">
                    <div class=\"card__chips\">
                      <span class=\"chip chip--price\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57), "html", null, true);
            yield " DT</span>
                      <span class=\"chip\">Stock: ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 58), "html", null, true);
            yield "</span>
                      <span class=\"chip\">";
            // line 59
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
            yield "</span>
                    </div>
                  </div>
                  <div class=\"card__body\">
                    <h4 class=\"card__title\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63), "html", null, true);
            yield "</h4>
                    <p class=\"card__desc\">";
            // line 64
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 64)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 64), "html", null, true)) : ("Sans description."));
            yield "</p>
                    <div class=\"card__metaRow\">
                      <span class=\"metaPill\">SKU: <b>";
            // line 66
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 66)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 66), "html", null, true)) : ("-"));
            yield "</b></span>
                      <span class=\"metaPill\">Maj: <b>";
            // line 67
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "updatedAt", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "updatedAt", [], "any", false, false, false, 67), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</b></span>
                    </div>
                    <div class=\"card__actions\">
                      <a class=\"btn btn--ghost\" href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\">Voir detail</a>
                      <a class=\"btn btn--ghost\" href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 71), "team" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 71, $this->source); })()), "teamId", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\">Modifier</a>
                      <form method=\"post\" action=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_product_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("captain_product_delete_" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 73))), "html", null, true);
            yield "\">
                        <input type=\"hidden\" name=\"team_id\" value=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 74, $this->source); })()), "teamId", [], "any", false, false, false, 74), "html", null, true);
            yield "\">
                        <button class=\"btn btn--ghost\" type=\"submit\">Supprimer</button>
                      </form>
                    </div>
                  </div>
                </article>
              ";
            $context['_iterated'] = true;
        }
        // line 80
        if (!$context['_iterated']) {
            // line 81
            yield "                <div class=\"emptyState\">Aucun produit pour cette equipe.</div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "            </div>
          </section>
        </div>
      </div>

      ";
        // line 88
        yield from $this->load("front/partials/_footer.html.twig", 88)->unwrap()->yield($context);
        // line 89
        yield "    </section>
  </main>

  ";
        // line 92
        yield from $this->load("front/partials/_auth_modal.html.twig", 92)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/captain-products.html.twig";
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
        return array (  272 => 92,  267 => 89,  265 => 88,  258 => 83,  251 => 81,  249 => 80,  238 => 74,  234 => 73,  230 => 72,  226 => 71,  222 => 70,  216 => 67,  212 => 66,  207 => 64,  203 => 63,  196 => 59,  192 => 58,  188 => 57,  183 => 55,  180 => 54,  177 => 53,  174 => 52,  171 => 51,  166 => 50,  158 => 45,  154 => 44,  144 => 37,  137 => 33,  132 => 31,  128 => 30,  123 => 28,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Produits equipe{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'CAPITAINE',
    hero_title: 'Produits',
    hero_sub: \"Gestion des produits de l'equipe active.\",
    breadcrumb_current: 'Produits'
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
            selector_route: 'front_captain_products'
          } %}

          <form class=\"panel\" method=\"get\" action=\"{{ path('front_captain_products') }}\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"{{ active_team.teamId }}\">
              <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"Rechercher nom, description ou SKU\">
              <label class=\"field\" style=\"display:flex;align-items:center;gap:8px;\">
                <input type=\"checkbox\" name=\"inactive\" value=\"1\" {{ filters.inactive ? 'checked' : '' }}>
                <span class=\"field__label\">Inclure inactifs</span>
              </label>
              <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
              <a class=\"btn btn--primary\" href=\"{{ path('front_captain_product_create', {team: active_team.teamId}) }}\">Nouveau produit</a>
            </div>
          </form>

          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">PRODUITS DE {{ active_team.name|upper }}</h3>
                <div class=\"panel__desc\">{{ products|length }} produit(s)</div>
              </div>
            </div>

            <div class=\"cardsGrid\" style=\"margin-top:10px;\">
              {% for product in products %}
                {% set primaryImage = product_primary_images[product.productId] ?? null %}
                {% set imagePath = primaryImage ? primaryImage.fileUrl : '' %}
                {% set imageUrl = imagePath ? (imagePath starts with 'http' ? imagePath : asset(imagePath)) : 'https://picsum.photos/seed/captain_product_' ~ product.productId ~ '/1000/700' %}
                <article class=\"card card--product\">
                  <div class=\"card__media\" data-bg=\"{{ imageUrl }}\">
                    <div class=\"card__chips\">
                      <span class=\"chip chip--price\">{{ product.price }} DT</span>
                      <span class=\"chip\">Stock: {{ product.stockQty }}</span>
                      <span class=\"chip\">{{ product.isActive ? 'ACTIF' : 'INACTIF' }}</span>
                    </div>
                  </div>
                  <div class=\"card__body\">
                    <h4 class=\"card__title\">{{ product.name }}</h4>
                    <p class=\"card__desc\">{{ product.description ?: 'Sans description.' }}</p>
                    <div class=\"card__metaRow\">
                      <span class=\"metaPill\">SKU: <b>{{ product.sku ?: '-' }}</b></span>
                      <span class=\"metaPill\">Maj: <b>{{ product.updatedAt ? product.updatedAt|date('d/m/Y') : '-' }}</b></span>
                    </div>
                    <div class=\"card__actions\">
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail', {id: product.productId}) }}\">Voir detail</a>
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_captain_product_edit', {id: product.productId, team: active_team.teamId}) }}\">Modifier</a>
                      <form method=\"post\" action=\"{{ path('front_captain_product_delete', {id: product.productId}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_product_delete_' ~ product.productId) }}\">
                        <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
                        <button class=\"btn btn--ghost\" type=\"submit\">Supprimer</button>
                      </form>
                    </div>
                  </div>
                </article>
              {% else %}
                <div class=\"emptyState\">Aucun produit pour cette equipe.</div>
              {% endfor %}
            </div>
          </section>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}

", "front/pages/captain-products.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\captain-products.html.twig");
    }
}
