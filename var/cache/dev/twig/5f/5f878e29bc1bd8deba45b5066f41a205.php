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

/* front/pages/shop.html.twig */
class __TwigTemplate_08fdb3cb2492eead1d9ce8ecbb283062 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/shop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/shop.html.twig"));

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

        yield "PULSE - Boutique";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "BOUTIQUE", "hero_title" => "Boutique", "hero_sub" => "Catalogue des produits vendus par les equipes.", "breadcrumb_current" => "Boutique"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 16
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                yield "          <div class=\"listItem\">
            <span>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
            <span class=\"badge ";
                // line 19
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
            // line 22
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
      <div class=\"pageHeader\">
        <div>
          <h1>Boutique</h1>
          <p>Recherche backend sur la base de donnees: nom, equipe, prix, stock.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart");
        yield "\">Panier (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_items_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_items_count"]) || array_key_exists("cart_items_count", $context) ? $context["cart_items_count"] : (function () { throw new RuntimeError('Variable "cart_items_count" does not exist.', 30, $this->source); })()), 0)) : (0)), "html", null, true);
        yield ")</a>
          <a class=\"btn btn--ghost\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\">Mes commandes</a>
        </div>
      </div>

      <section class=\"panel\">
        <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
        yield "\" data-auto-submit=\"1\">
          <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 37, $this->source); })()), "q", [], "any", false, false, false, 37), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un produit...\" />

          <div class=\"select\">
            <select name=\"team\">
              <option value=\"\">Toutes les equipes</option>
              ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 43
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 43), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 43, $this->source); })()), "team", [], "any", false, false, false, 43) == CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 43))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 43), "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "            </select>
          </div>

          <input class=\"input\" type=\"number\" step=\"0.01\" min=\"0\" name=\"min\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "min", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 48, $this->source); })()), "min", [], "any", false, false, false, 48), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Prix min\" />
          <input class=\"input\" type=\"number\" step=\"0.01\" min=\"0\" name=\"max\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "max", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 49, $this->source); })()), "max", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Prix max\" />

          <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
            <input type=\"checkbox\" name=\"stock\" value=\"1\" ";
        // line 52
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 52, $this->source); })()), "stock", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield " />
            En stock
          </label>

          <div class=\"select\">
            <select name=\"sort\">
              <option value=\"latest\" ";
        // line 58
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 58, $this->source); })()), "sort", [], "any", false, false, false, 58), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
              <option value=\"oldest\" ";
        // line 59
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 59, $this->source); })()), "sort", [], "any", false, false, false, 59), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
              <option value=\"name\" ";
        // line 60
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 60, $this->source); })()), "sort", [], "any", false, false, false, 60), "latest")) : ("latest")) == "name")) ? ("selected") : (""));
        yield ">Nom A-Z</option>
              <option value=\"price_high\" ";
        // line 61
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 61, $this->source); })()), "sort", [], "any", false, false, false, 61), "latest")) : ("latest")) == "price_high")) ? ("selected") : (""));
        yield ">Prix DESC</option>
              <option value=\"price_low\" ";
        // line 62
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 62, $this->source); })()), "sort", [], "any", false, false, false, 62), "latest")) : ("latest")) == "price_low")) ? ("selected") : (""));
        yield ">Prix ASC</option>
              <option value=\"stock_high\" ";
        // line 63
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 63, $this->source); })()), "sort", [], "any", false, false, false, 63), "latest")) : ("latest")) == "stock_high")) ? ("selected") : (""));
        yield ">Stock DESC</option>
            </select>
          </div>

          <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
          <a class=\"btn btn--ghost\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
        yield "\">Reset</a>
        </form>
      </section>

      <section class=\"cardsGrid\">
        ";
        // line 73
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 73, $this->source); })()))) {
            // line 74
            yield "          <div class=\"panel emptyState\" style=\"grid-column: 1 / -1;\">
            Aucun produit ne correspond aux filtres.
          </div>
        ";
        } else {
            // line 78
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 79
                yield "            ";
                $context["productId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", true, true, false, 79) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 79)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 79)) : (0));
                // line 80
                yield "            ";
                $context["primaryImage"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["product_primary_images"] ?? null), (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 80, $this->source); })()), [], "array", true, true, false, 80)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_primary_images"]) || array_key_exists("product_primary_images", $context) ? $context["product_primary_images"] : (function () { throw new RuntimeError('Variable "product_primary_images" does not exist.', 80, $this->source); })()), (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 80, $this->source); })()), [], "array", false, false, false, 80), null)) : (null));
                // line 81
                yield "            ";
                $context["imagePath"] = (((($tmp = (isset($context["primaryImage"]) || array_key_exists("primaryImage", $context) ? $context["primaryImage"] : (function () { throw new RuntimeError('Variable "primaryImage" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["primaryImage"]) || array_key_exists("primaryImage", $context) ? $context["primaryImage"] : (function () { throw new RuntimeError('Variable "primaryImage" does not exist.', 81, $this->source); })()), "fileUrl", [], "any", false, false, false, 81)) : (""));
                // line 82
                yield "            ";
                $context["imageUrl"] = (((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 82, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 82, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 82, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 82, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_shop_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 82, $this->source); })())) . "/1200/800")));
                // line 83
                yield "
            <article class=\"card card--product\">
              <div class=\"card__media\" data-bg=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 85, $this->source); })()), "html", null, true);
                yield "\">
                <div class=\"card__chips\">
                  <span class=\"chip chip--price\">";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87), 2, ".", " "), "html", null, true);
                yield " DT</span>
                  <span class=\"chip\">Stock: ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 88), "html", null, true);
                yield "</span>
                  <span class=\"chip\">";
                // line 89
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "teamId", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "teamId", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true)) : ("Equipe"));
                yield "</span>
                </div>
              </div>

              <div class=\"card__body\">
                <h4 class=\"card__title\">";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 94), "html", null, true);
                yield "</h4>
                <p class=\"card__desc\">";
                // line 95
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 95), 0, 90) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 95)) > 90)) ? ("...") : (""))), "html", null, true)) : ("Produit equipe PULSE."));
                yield "</p>

                <div class=\"card__actions\">
                  ";
                // line 98
                if (((isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 98, $this->source); })()) > 0)) {
                    // line 99
                    yield "                    <a class=\"btn btn--ghost\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 99, $this->source); })())]), "html", null, true);
                    yield "\">Detail</a>
                  ";
                } else {
                    // line 101
                    yield "                    <a class=\"btn btn--ghost\" href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
                    yield "\">Detail</a>
                  ";
                }
                // line 103
                yield "
                  ";
                // line 104
                $context["productTeam"] = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "teamId", [], "any", false, false, false, 104);
                // line 105
                yield "                  ";
                if (((isset($context["productTeam"]) || array_key_exists("productTeam", $context) ? $context["productTeam"] : (function () { throw new RuntimeError('Variable "productTeam" does not exist.', 105, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["productTeam"]) || array_key_exists("productTeam", $context) ? $context["productTeam"] : (function () { throw new RuntimeError('Variable "productTeam" does not exist.', 105, $this->source); })()), "teamId", [], "any", false, false, false, 105))) {
                    // line 106
                    yield "                    <a class=\"btn btn--ghost\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["productTeam"]) || array_key_exists("productTeam", $context) ? $context["productTeam"] : (function () { throw new RuntimeError('Variable "productTeam" does not exist.', 106, $this->source); })()), "teamId", [], "any", false, false, false, 106)]), "html", null, true);
                    yield "\">Equipe</a>
                  ";
                }
                // line 108
                yield "
                  ";
                // line 109
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 110
                    yield "                    <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_add", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 110, $this->source); })())]), "html", null, true);
                    yield "\">
                      <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_add_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 111, $this->source); })()))), "html", null, true);
                    yield "\">
                      <input type=\"hidden\" name=\"quantity\" value=\"1\">
                      <button class=\"btn btn--primary\" type=\"submit\" ";
                    // line 113
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 113) <= 0)) ? ("disabled") : (""));
                    yield ">
                        ";
                    // line 114
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 114) <= 0)) ? ("Rupture") : ("Ajouter au panier"));
                    yield "
                      </button>
                    </form>
                  ";
                } else {
                    // line 118
                    yield "                    <a class=\"btn btn--primary\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "request", [], "any", false, false, false, 118), "uri", [], "any", false, false, false, 118)]), "html", null, true);
                    yield "\">Ajouter au panier</a>
                  ";
                }
                // line 120
                yield "                </div>
              </div>
            </article>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "        ";
        }
        // line 125
        yield "      </section>

      ";
        // line 127
        yield from $this->load("front/partials/_pagination.html.twig", 127)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 128
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 128, $this->source); })()), "route_name" => "front_shop"]));
        // line 131
        yield "
      ";
        // line 132
        yield from $this->load("front/partials/_footer.html.twig", 132)->unwrap()->yield($context);
        // line 133
        yield "    </section>
  </main>

  ";
        // line 136
        yield from $this->load("front/partials/_auth_modal.html.twig", 136)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/shop.html.twig";
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
        return array (  402 => 136,  397 => 133,  395 => 132,  392 => 131,  390 => 128,  389 => 127,  385 => 125,  382 => 124,  373 => 120,  367 => 118,  360 => 114,  356 => 113,  351 => 111,  346 => 110,  344 => 109,  341 => 108,  335 => 106,  332 => 105,  330 => 104,  327 => 103,  321 => 101,  315 => 99,  313 => 98,  307 => 95,  303 => 94,  295 => 89,  291 => 88,  287 => 87,  282 => 85,  278 => 83,  275 => 82,  272 => 81,  269 => 80,  266 => 79,  261 => 78,  255 => 74,  253 => 73,  245 => 68,  237 => 63,  233 => 62,  229 => 61,  225 => 60,  221 => 59,  217 => 58,  208 => 52,  202 => 49,  198 => 48,  193 => 45,  180 => 43,  176 => 42,  168 => 37,  164 => 36,  156 => 31,  150 => 30,  141 => 23,  135 => 22,  124 => 19,  120 => 18,  117 => 17,  112 => 16,  108 => 15,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Boutique{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'BOUTIQUE',
    hero_title: 'Boutique',
    hero_sub: 'Catalogue des produits vendus par les equipes.',
    breadcrumb_current: 'Boutique'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      {% for label, messages in app.flashes %}
        {% for message in messages %}
          <div class=\"listItem\">
            <span>{{ message }}</span>
            <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'info' ? 'badge--info' : 'badge--success') }}\">{{ label|upper }}</span>
          </div>
        {% endfor %}
      {% endfor %}

      <div class=\"pageHeader\">
        <div>
          <h1>Boutique</h1>
          <p>Recherche backend sur la base de donnees: nom, equipe, prix, stock.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_cart') }}\">Panier ({{ cart_items_count|default(0) }})</a>
          <a class=\"btn btn--ghost\" href=\"{{ path('front_orders') }}\">Mes commandes</a>
        </div>
      </div>

      <section class=\"panel\">
        <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_shop') }}\" data-auto-submit=\"1\">
          <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Rechercher un produit...\" />

          <div class=\"select\">
            <select name=\"team\">
              <option value=\"\">Toutes les equipes</option>
              {% for team in teams %}
                <option value=\"{{ team.teamId }}\" {{ filters.team == team.teamId ? 'selected' : '' }}>{{ team.name }}</option>
              {% endfor %}
            </select>
          </div>

          <input class=\"input\" type=\"number\" step=\"0.01\" min=\"0\" name=\"min\" value=\"{{ filters.min|default('') }}\" placeholder=\"Prix min\" />
          <input class=\"input\" type=\"number\" step=\"0.01\" min=\"0\" name=\"max\" value=\"{{ filters.max|default('') }}\" placeholder=\"Prix max\" />

          <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
            <input type=\"checkbox\" name=\"stock\" value=\"1\" {{ filters.stock ? 'checked' : '' }} />
            En stock
          </label>

          <div class=\"select\">
            <select name=\"sort\">
              <option value=\"latest\" {{ (filters.sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recents</option>
              <option value=\"oldest\" {{ (filters.sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciens</option>
              <option value=\"name\" {{ (filters.sort|default('latest')) == 'name' ? 'selected' : '' }}>Nom A-Z</option>
              <option value=\"price_high\" {{ (filters.sort|default('latest')) == 'price_high' ? 'selected' : '' }}>Prix DESC</option>
              <option value=\"price_low\" {{ (filters.sort|default('latest')) == 'price_low' ? 'selected' : '' }}>Prix ASC</option>
              <option value=\"stock_high\" {{ (filters.sort|default('latest')) == 'stock_high' ? 'selected' : '' }}>Stock DESC</option>
            </select>
          </div>

          <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
          <a class=\"btn btn--ghost\" href=\"{{ path('front_shop') }}\">Reset</a>
        </form>
      </section>

      <section class=\"cardsGrid\">
        {% if products is empty %}
          <div class=\"panel emptyState\" style=\"grid-column: 1 / -1;\">
            Aucun produit ne correspond aux filtres.
          </div>
        {% else %}
          {% for product in products %}
            {% set productId = product.productId ?? 0 %}
            {% set primaryImage = product_primary_images[productId]|default(null) %}
            {% set imagePath = primaryImage ? primaryImage.fileUrl : '' %}
            {% set imageUrl = imagePath ? (imagePath starts with 'http' ? imagePath : asset(imagePath)) : 'https://picsum.photos/seed/pulse_shop_' ~ productId ~ '/1200/800' %}

            <article class=\"card card--product\">
              <div class=\"card__media\" data-bg=\"{{ imageUrl }}\">
                <div class=\"card__chips\">
                  <span class=\"chip chip--price\">{{ product.price|number_format(2, '.', ' ') }} DT</span>
                  <span class=\"chip\">Stock: {{ product.stockQty }}</span>
                  <span class=\"chip\">{{ product.teamId ? product.teamId.name : 'Equipe' }}</span>
                </div>
              </div>

              <div class=\"card__body\">
                <h4 class=\"card__title\">{{ product.name }}</h4>
                <p class=\"card__desc\">{{ product.description ? product.description|slice(0, 90) ~ (product.description|length > 90 ? '...' : '') : 'Produit equipe PULSE.' }}</p>

                <div class=\"card__actions\">
                  {% if productId > 0 %}
                    <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail', {id: productId}) }}\">Detail</a>
                  {% else %}
                    <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail') }}\">Detail</a>
                  {% endif %}

                  {% set productTeam = product.teamId %}
                  {% if productTeam and productTeam.teamId %}
                    <a class=\"btn btn--ghost\" href=\"{{ path('front_team_detail', {id: productTeam.teamId}) }}\">Equipe</a>
                  {% endif %}

                  {% if app.user %}
                    <form method=\"post\" action=\"{{ path('front_cart_add', {id: productId}) }}\">
                      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_add_' ~ productId) }}\">
                      <input type=\"hidden\" name=\"quantity\" value=\"1\">
                      <button class=\"btn btn--primary\" type=\"submit\" {{ product.stockQty <= 0 ? 'disabled' : '' }}>
                        {{ product.stockQty <= 0 ? 'Rupture' : 'Ajouter au panier' }}
                      </button>
                    </form>
                  {% else %}
                    <a class=\"btn btn--primary\" href=\"{{ path('front_login', {'_target_path': app.request.uri}) }}\">Ajouter au panier</a>
                  {% endif %}
                </div>
              </div>
            </article>
          {% endfor %}
        {% endif %}
      </section>

      {% include 'front/partials/_pagination.html.twig' with {
        pagination: pagination,
        route_name: 'front_shop'
      } %}

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/shop.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\shop.html.twig");
    }
}
