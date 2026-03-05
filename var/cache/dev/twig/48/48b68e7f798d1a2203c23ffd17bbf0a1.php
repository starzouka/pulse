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

/* front/pages/cart.html.twig */
class __TwigTemplate_60cb2510674a3943a3909978319f7037 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/cart.html.twig"));

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

        yield "PULSE - Mon panier";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Mon panier", "hero_sub" => "Gerer les produits et finaliser la commande.", "breadcrumb_current" => "Mon panier"]));
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
              <div class=\"panel__head\">
                <div>
                  <h3 class=\"panel__title\">ARTICLES DU PANIER</h3>
                  <div class=\"panel__desc\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_visible_quantity", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_visible_quantity"]) || array_key_exists("cart_visible_quantity", $context) ? $context["cart_visible_quantity"] : (function () { throw new RuntimeError('Variable "cart_visible_quantity" does not exist.', 33, $this->source); })()), ((array_key_exists("cart_total_quantity", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_total_quantity"]) || array_key_exists("cart_total_quantity", $context) ? $context["cart_total_quantity"] : (function () { throw new RuntimeError('Variable "cart_total_quantity" does not exist.', 33, $this->source); })()), 0)) : (0)))) : (((array_key_exists("cart_total_quantity", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_total_quantity"]) || array_key_exists("cart_total_quantity", $context) ? $context["cart_total_quantity"] : (function () { throw new RuntimeError('Variable "cart_total_quantity" does not exist.', 33, $this->source); })()), 0)) : (0)))), "html", null, true);
        yield " article(s) affiches</div>
                </div>
                ";
        // line 35
        if (((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 35, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35))) {
            // line 36
            yield "                  <span class=\"badge ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 36, $this->source); })()), "status", [], "any", false, false, false, 36) == "OPEN")) ? ("badge--success") : ("badge--warning"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 36, $this->source); })()), "status", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                ";
        }
        // line 38
        yield "              </div>

              <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart");
        yield "\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 41, $this->source); })()), "q", [], "any", false, false, false, 41), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un article...\" />
                <div class=\"select\">
                  <select name=\"team\">
                    <option value=\"\">Toutes les equipes</option>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("team_filter_options", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["team_filter_options"]) || array_key_exists("team_filter_options", $context) ? $context["team_filter_options"] : (function () { throw new RuntimeError('Variable "team_filter_options" does not exist.', 45, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["teamOption"]) {
            // line 46
            yield "                      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamOption"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "team", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })()), "team", [], "any", false, false, false, 46), null)) : (null)) == CoreExtension::getAttribute($this->env, $this->source, $context["teamOption"], "id", [], "any", false, false, false, 46))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamOption"], "name", [], "any", false, false, false, 46), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['teamOption'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"added_asc\" ";
        // line 52
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 52, $this->source); })()), "sort", [], "any", false, false, false, 52), "added_asc")) : ("added_asc")) == "added_asc")) ? ("selected") : (""));
        yield ">Ajout ancien</option>
                    <option value=\"added_desc\" ";
        // line 53
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 53, $this->source); })()), "sort", [], "any", false, false, false, 53), "added_asc")) : ("added_asc")) == "added_desc")) ? ("selected") : (""));
        yield ">Ajout recent</option>
                    <option value=\"name\" ";
        // line 54
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 54, $this->source); })()), "sort", [], "any", false, false, false, 54), "added_asc")) : ("added_asc")) == "name")) ? ("selected") : (""));
        yield ">Nom A-Z</option>
                    <option value=\"price_high\" ";
        // line 55
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })()), "sort", [], "any", false, false, false, 55), "added_asc")) : ("added_asc")) == "price_high")) ? ("selected") : (""));
        yield ">Prix DESC</option>
                    <option value=\"price_low\" ";
        // line 56
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 56, $this->source); })()), "sort", [], "any", false, false, false, 56), "added_asc")) : ("added_asc")) == "price_low")) ? ("selected") : (""));
        yield ">Prix ASC</option>
                    <option value=\"qty_high\" ";
        // line 57
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 57, $this->source); })()), "sort", [], "any", false, false, false, 57), "added_asc")) : ("added_asc")) == "qty_high")) ? ("selected") : (""));
        yield ">Quantite DESC</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart");
        yield "\">Reset</a>
              </form>

              ";
        // line 64
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 64, $this->source); })()))) {
            // line 65
            yield "                <div class=\"emptyState\">
                  ";
            // line 66
            if ((((array_key_exists("cart_total_quantity", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_total_quantity"]) || array_key_exists("cart_total_quantity", $context) ? $context["cart_total_quantity"] : (function () { throw new RuntimeError('Variable "cart_total_quantity" does not exist.', 66, $this->source); })()), 0)) : (0)) > 0)) {
                // line 67
                yield "                    Aucun article ne correspond aux filtres.
                    <div style=\"margin-top:10px;\">
                      <a class=\"btn btn--ghost\" href=\"";
                // line 69
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart");
                yield "\">Reinitialiser les filtres</a>
                    </div>
                  ";
            } else {
                // line 72
                yield "                    Votre panier est vide.
                    <div style=\"margin-top:10px;\">
                      <a class=\"btn btn--primary\" href=\"";
                // line 74
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
                yield "\">Aller a la boutique</a>
                    </div>
                  ";
            }
            // line 77
            yield "                </div>
              ";
        } else {
            // line 79
            yield "                <div class=\"tableWrap\">
                  <table class=\"table\">
                    <thead>
                      <tr>
                        <th>Produit</th>
                        <th>Equipe</th>
                        <th>Prix</th>
                        <th>Quantite</th>
                        <th>Total</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 92, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 93
                yield "                        ";
                $context["product"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 93);
                // line 94
                yield "                        ";
                $context["productId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "productId", [], "any", true, true, false, 94) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 94, $this->source); })()), "productId", [], "any", false, false, false, 94)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 94, $this->source); })()), "productId", [], "any", false, false, false, 94)) : (0));
                // line 95
                yield "                        <tr>
                          <td>
                            ";
                // line 97
                if (((isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 97, $this->source); })()) > 0)) {
                    // line 98
                    yield "                              <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 98, $this->source); })())]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98), "html", null, true);
                    yield "</a>
                            ";
                } else {
                    // line 100
                    yield "                              ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 100, $this->source); })()), "name", [], "any", false, false, false, 100), "html", null, true);
                    yield "
                            ";
                }
                // line 102
                yield "                          </td>
                          <td>";
                // line 103
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 103, $this->source); })()), "teamId", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 103, $this->source); })()), "teamId", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true)) : ("-"));
                yield "</td>
                          <td>";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unit_price", [], "any", false, false, false, 104), 2, ".", " "), "html", null, true);
                yield " DT</td>
                          <td>
                            ";
                // line 106
                if ((($tmp = (isset($context["cart_is_editable"]) || array_key_exists("cart_is_editable", $context) ? $context["cart_is_editable"] : (function () { throw new RuntimeError('Variable "cart_is_editable" does not exist.', 106, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 107
                    yield "                              <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_item_update", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 107, $this->source); })())]), "html", null, true);
                    yield "\" class=\"inlineQtyForm\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_item_update_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 108, $this->source); })()))), "html", null, true);
                    yield "\">
                                <input class=\"input\" type=\"number\" min=\"0\" name=\"quantity\" value=\"";
                    // line 109
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 109), "html", null, true);
                    yield "\" style=\"max-width:90px;\">
                                <button class=\"btn btn--ghost\" type=\"submit\">OK</button>
                              </form>
                            ";
                } else {
                    // line 113
                    yield "                              ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 113), "html", null, true);
                    yield "
                            ";
                }
                // line 115
                yield "                          </td>
                          <td>";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "line_total", [], "any", false, false, false, 116), 2, ".", " "), "html", null, true);
                yield " DT</td>
                          <td>
                            ";
                // line 118
                if ((($tmp = (isset($context["cart_is_editable"]) || array_key_exists("cart_is_editable", $context) ? $context["cart_is_editable"] : (function () { throw new RuntimeError('Variable "cart_is_editable" does not exist.', 118, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 119
                    yield "                              <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_item_remove", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 119, $this->source); })())]), "html", null, true);
                    yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 120
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_item_remove_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 120, $this->source); })()))), "html", null, true);
                    yield "\">
                                <button class=\"btn btn--ghost\" type=\"submit\">Retirer</button>
                              </form>
                            ";
                } else {
                    // line 124
                    yield "                              <span class=\"listItem__meta\">Verrouille</span>
                            ";
                }
                // line 126
                yield "                          </td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "                    </tbody>
                  </table>
                </div>
              ";
        }
        // line 133
        yield "            </section>

            ";
        // line 135
        yield from $this->load("front/partials/_pagination.html.twig", 135)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 136
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 136, $this->source); })()), "route_name" => "front_cart"]));
        // line 139
        yield "          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">RESUME</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Articles</span><span class=\"listItem__meta\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_total_quantity", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_total_quantity"]) || array_key_exists("cart_total_quantity", $context) ? $context["cart_total_quantity"] : (function () { throw new RuntimeError('Variable "cart_total_quantity" does not exist.', 145, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</span></div>
                <div class=\"listItem\"><span>Sous-total</span><span class=\"listItem__meta\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((array_key_exists("cart_subtotal", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_subtotal"]) || array_key_exists("cart_subtotal", $context) ? $context["cart_subtotal"] : (function () { throw new RuntimeError('Variable "cart_subtotal" does not exist.', 146, $this->source); })()), 0)) : (0)), 2, ".", " "), "html", null, true);
        yield " DT</span></div>
                <div class=\"listItem\"><span>Articles affiches</span><span class=\"listItem__meta\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_visible_quantity", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_visible_quantity"]) || array_key_exists("cart_visible_quantity", $context) ? $context["cart_visible_quantity"] : (function () { throw new RuntimeError('Variable "cart_visible_quantity" does not exist.', 147, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</span></div>
                <div class=\"listItem\"><span>Sous-total affiche</span><span class=\"listItem__meta\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((array_key_exists("cart_visible_subtotal", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_visible_subtotal"]) || array_key_exists("cart_visible_subtotal", $context) ? $context["cart_visible_subtotal"] : (function () { throw new RuntimeError('Variable "cart_visible_subtotal" does not exist.', 148, $this->source); })()), 0)) : (0)), 2, ".", " "), "html", null, true);
        yield " DT</span></div>
              </div>

              ";
        // line 151
        if ((($tmp = (isset($context["locked_reason"]) || array_key_exists("locked_reason", $context) ? $context["locked_reason"] : (function () { throw new RuntimeError('Variable "locked_reason" does not exist.', 151, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 152
            yield "                <div class=\"emptyState\" style=\"margin-top:12px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locked_reason"]) || array_key_exists("locked_reason", $context) ? $context["locked_reason"] : (function () { throw new RuntimeError('Variable "locked_reason" does not exist.', 152, $this->source); })()), "html", null, true);
            yield "</div>
              ";
        } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(        // line 153
(isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 153, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 154
            yield "                <div class=\"panel__actions\" style=\"margin-top:12px;\">
                  <a class=\"btn btn--primary\" href=\"";
            // line 155
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_checkout");
            yield "\">Passer commande</a>
                </div>
              ";
        }
        // line 158
        yield "            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
        yield "\"><span>Retour boutique</span><span class=\"listItem__meta\">Produits</span></a>
                <a class=\"listItem\" href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\"><span>Mes commandes</span><span class=\"listItem__meta\">Historique</span></a>
                <a class=\"listItem\" href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\"><span>Notifications</span><span class=\"listItem__meta\">Suivi</span></a>
              </div>
            </section>
          </aside>
        </div>
      </div>

      ";
        // line 172
        yield from $this->load("front/partials/_footer.html.twig", 172)->unwrap()->yield($context);
        // line 173
        yield "    </section>
  </main>

  ";
        // line 176
        yield from $this->load("front/partials/_auth_modal.html.twig", 176)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/cart.html.twig";
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
        return array (  477 => 176,  472 => 173,  470 => 172,  460 => 165,  456 => 164,  452 => 163,  445 => 158,  439 => 155,  436 => 154,  434 => 153,  429 => 152,  427 => 151,  421 => 148,  417 => 147,  413 => 146,  409 => 145,  401 => 139,  399 => 136,  398 => 135,  394 => 133,  388 => 129,  380 => 126,  376 => 124,  369 => 120,  364 => 119,  362 => 118,  357 => 116,  354 => 115,  348 => 113,  341 => 109,  337 => 108,  332 => 107,  330 => 106,  325 => 104,  321 => 103,  318 => 102,  312 => 100,  304 => 98,  302 => 97,  298 => 95,  295 => 94,  292 => 93,  288 => 92,  273 => 79,  269 => 77,  263 => 74,  259 => 72,  253 => 69,  249 => 67,  247 => 66,  244 => 65,  242 => 64,  236 => 61,  229 => 57,  225 => 56,  221 => 55,  217 => 54,  213 => 53,  209 => 52,  203 => 48,  190 => 46,  186 => 45,  179 => 41,  175 => 40,  171 => 38,  163 => 36,  161 => 35,  156 => 33,  149 => 28,  143 => 27,  132 => 24,  128 => 23,  125 => 22,  120 => 21,  116 => 20,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Mon panier{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Mon panier',
    hero_sub: 'Gerer les produits et finaliser la commande.',
    breadcrumb_current: 'Mon panier'
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
              <div class=\"panel__head\">
                <div>
                  <h3 class=\"panel__title\">ARTICLES DU PANIER</h3>
                  <div class=\"panel__desc\">{{ cart_visible_quantity|default(cart_total_quantity|default(0)) }} article(s) affiches</div>
                </div>
                {% if cart and cart.status %}
                  <span class=\"badge {{ cart.status == 'OPEN' ? 'badge--success' : 'badge--warning' }}\">{{ cart.status }}</span>
                {% endif %}
              </div>

              <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_cart') }}\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Rechercher un article...\" />
                <div class=\"select\">
                  <select name=\"team\">
                    <option value=\"\">Toutes les equipes</option>
                    {% for teamOption in team_filter_options|default([]) %}
                      <option value=\"{{ teamOption.id }}\" {{ (filters.team|default(null)) == teamOption.id ? 'selected' : '' }}>{{ teamOption.name }}</option>
                    {% endfor %}
                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"added_asc\" {{ (filters.sort|default('added_asc')) == 'added_asc' ? 'selected' : '' }}>Ajout ancien</option>
                    <option value=\"added_desc\" {{ (filters.sort|default('added_asc')) == 'added_desc' ? 'selected' : '' }}>Ajout recent</option>
                    <option value=\"name\" {{ (filters.sort|default('added_asc')) == 'name' ? 'selected' : '' }}>Nom A-Z</option>
                    <option value=\"price_high\" {{ (filters.sort|default('added_asc')) == 'price_high' ? 'selected' : '' }}>Prix DESC</option>
                    <option value=\"price_low\" {{ (filters.sort|default('added_asc')) == 'price_low' ? 'selected' : '' }}>Prix ASC</option>
                    <option value=\"qty_high\" {{ (filters.sort|default('added_asc')) == 'qty_high' ? 'selected' : '' }}>Quantite DESC</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_cart') }}\">Reset</a>
              </form>

              {% if cart_items is empty %}
                <div class=\"emptyState\">
                  {% if cart_total_quantity|default(0) > 0 %}
                    Aucun article ne correspond aux filtres.
                    <div style=\"margin-top:10px;\">
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_cart') }}\">Reinitialiser les filtres</a>
                    </div>
                  {% else %}
                    Votre panier est vide.
                    <div style=\"margin-top:10px;\">
                      <a class=\"btn btn--primary\" href=\"{{ path('front_shop') }}\">Aller a la boutique</a>
                    </div>
                  {% endif %}
                </div>
              {% else %}
                <div class=\"tableWrap\">
                  <table class=\"table\">
                    <thead>
                      <tr>
                        <th>Produit</th>
                        <th>Equipe</th>
                        <th>Prix</th>
                        <th>Quantite</th>
                        <th>Total</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for item in cart_items %}
                        {% set product = item.product %}
                        {% set productId = product.productId ?? 0 %}
                        <tr>
                          <td>
                            {% if productId > 0 %}
                              <a href=\"{{ path('front_product_detail', {id: productId}) }}\">{{ product.name }}</a>
                            {% else %}
                              {{ product.name }}
                            {% endif %}
                          </td>
                          <td>{{ product.teamId ? product.teamId.name : '-' }}</td>
                          <td>{{ item.unit_price|number_format(2, '.', ' ') }} DT</td>
                          <td>
                            {% if cart_is_editable %}
                              <form method=\"post\" action=\"{{ path('front_cart_item_update', {id: productId}) }}\" class=\"inlineQtyForm\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_item_update_' ~ productId) }}\">
                                <input class=\"input\" type=\"number\" min=\"0\" name=\"quantity\" value=\"{{ item.quantity }}\" style=\"max-width:90px;\">
                                <button class=\"btn btn--ghost\" type=\"submit\">OK</button>
                              </form>
                            {% else %}
                              {{ item.quantity }}
                            {% endif %}
                          </td>
                          <td>{{ item.line_total|number_format(2, '.', ' ') }} DT</td>
                          <td>
                            {% if cart_is_editable %}
                              <form method=\"post\" action=\"{{ path('front_cart_item_remove', {id: productId}) }}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_item_remove_' ~ productId) }}\">
                                <button class=\"btn btn--ghost\" type=\"submit\">Retirer</button>
                              </form>
                            {% else %}
                              <span class=\"listItem__meta\">Verrouille</span>
                            {% endif %}
                          </td>
                        </tr>
                      {% endfor %}
                    </tbody>
                  </table>
                </div>
              {% endif %}
            </section>

            {% include 'front/partials/_pagination.html.twig' with {
              pagination: pagination,
              route_name: 'front_cart'
            } %}
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">RESUME</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Articles</span><span class=\"listItem__meta\">{{ cart_total_quantity|default(0) }}</span></div>
                <div class=\"listItem\"><span>Sous-total</span><span class=\"listItem__meta\">{{ cart_subtotal|default(0)|number_format(2, '.', ' ') }} DT</span></div>
                <div class=\"listItem\"><span>Articles affiches</span><span class=\"listItem__meta\">{{ cart_visible_quantity|default(0) }}</span></div>
                <div class=\"listItem\"><span>Sous-total affiche</span><span class=\"listItem__meta\">{{ cart_visible_subtotal|default(0)|number_format(2, '.', ' ') }} DT</span></div>
              </div>

              {% if locked_reason %}
                <div class=\"emptyState\" style=\"margin-top:12px;\">{{ locked_reason }}</div>
              {% elseif cart_items is not empty %}
                <div class=\"panel__actions\" style=\"margin-top:12px;\">
                  <a class=\"btn btn--primary\" href=\"{{ path('front_checkout') }}\">Passer commande</a>
                </div>
              {% endif %}
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"{{ path('front_shop') }}\"><span>Retour boutique</span><span class=\"listItem__meta\">Produits</span></a>
                <a class=\"listItem\" href=\"{{ path('front_orders') }}\"><span>Mes commandes</span><span class=\"listItem__meta\">Historique</span></a>
                <a class=\"listItem\" href=\"{{ path('front_notifications') }}\"><span>Notifications</span><span class=\"listItem__meta\">Suivi</span></a>
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
", "front/pages/cart.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\pages\\cart.html.twig");
    }
}
