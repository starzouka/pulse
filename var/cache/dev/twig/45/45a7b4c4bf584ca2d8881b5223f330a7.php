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

/* admin/pages/products.html.twig */
class __TwigTemplate_8b4829af4209ae17c2a50ebc9c1f5581 extends Template
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
            'admin_content' => [$this, 'block_admin_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/products.html.twig"));

        // line 14
        $macros["sorter"] = $this->macros["sorter"] = $this;
        // line 1
        $this->parent = $this->load("admin/base_admin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
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

        yield "PULSE - Gestion produits";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        // line 19
        yield "  <div class=\"pageHeader\">
    <div>
      <h2>Gestion produits</h2>
      <div class=\"pageSub\">CRUD + filtres DB + export.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), ["format" => "pdf"])), "html", null, true);
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), ["format" => "excel"])), "html", null, true);
        yield "\">Exporter Excel</a>
    </div>
  </div>

  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 31
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                yield "      <div class=\"listItem\">
        <span>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 34
                yield ((($context["label"] == "error")) ? ("badge--danger") : ("badge--success"));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">";
        // line 41
        yield (((($tmp = (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("MODIFIER PRODUIT #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 41, $this->source); })()), "productId", [], "any", false, false, false, 41)), "html", null, true)) : ("NOUVEAU PRODUIT"));
        yield "</h3>
    </div>

    <form method=\"post\">
      <input type=\"hidden\" name=\"_token\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_product_form"), "html", null, true);
        yield "\" />
      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 46
        yield (((($tmp = (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 46, $this->source); })()), "productId", [], "any", false, false, false, 46), "html", null, true)) : (""));
        yield "\" />

      <div class=\"formGrid\">
        <div class=\"field\">
          <label for=\"product_team_id\">Equipe *</label>
          <select id=\"product_team_id\" name=\"team_id\" required>
            <option value=\"\">Selectionner</option>
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 54
            yield "              ";
            $context["teamId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 54)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 54)) : (0));
            // line 55
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\" ";
            yield (((((isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 55, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 55, $this->source); })()), "teamId", [], "any", false, false, false, 55)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 55, $this->source); })()), "teamId", [], "any", false, false, false, 55), "teamId", [], "any", false, false, false, 55) == (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 55, $this->source); })())))) ? ("selected") : (""));
            yield ">
                ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 56), "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "          </select>
        </div>

        <div class=\"field\">
          <label for=\"product_name\">Nom produit *</label>
          <input id=\"product_name\" type=\"text\" name=\"name\" required value=\"";
        // line 64
        yield (((($tmp = (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"product_price\">Prix *</label>
          <input id=\"product_price\" type=\"number\" min=\"0\" step=\"0.01\" name=\"price\" required value=\"";
        // line 69
        yield (((($tmp = (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 69, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 69, $this->source); })()), "price", [], "any", false, false, false, 69), "html", null, true)) : ("0.00"));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"product_stock_qty\">Stock *</label>
          <input id=\"product_stock_qty\" type=\"number\" min=\"0\" step=\"1\" name=\"stock_qty\" required value=\"";
        // line 74
        yield (((($tmp = (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 74, $this->source); })()), "stockQty", [], "any", false, false, false, 74), "html", null, true)) : (0));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"product_sku\">SKU</label>
          <input id=\"product_sku\" type=\"text\" name=\"sku\" value=\"";
        // line 79
        yield (((($tmp = (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 79, $this->source); })()), "sku", [], "any", false, false, false, 79), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"product_is_active\">Actif</label>
          <select id=\"product_is_active\" name=\"is_active\">
            ";
        // line 85
        $context["activeSelected"] = (((($tmp = (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 85, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 85, $this->source); })()), "isActive", [], "any", false, false, false, 85)) : (true));
        // line 86
        yield "            <option value=\"1\" ";
        yield (((($tmp = (isset($context["activeSelected"]) || array_key_exists("activeSelected", $context) ? $context["activeSelected"] : (function () { throw new RuntimeError('Variable "activeSelected" does not exist.', 86, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">Oui</option>
            <option value=\"0\" ";
        // line 87
        yield (((($tmp =  !(isset($context["activeSelected"]) || array_key_exists("activeSelected", $context) ? $context["activeSelected"] : (function () { throw new RuntimeError('Variable "activeSelected" does not exist.', 87, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">Non</option>
          </select>
        </div>

        <div class=\"field\">
          <label for=\"product_image_url\">Image URL</label>
          <input id=\"product_image_url\" type=\"url\" name=\"image_url\" placeholder=\"https://...\" value=\"";
        // line 93
        yield (((($tmp = (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 93, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["editingPrimaryImageUrl"]) || array_key_exists("editingPrimaryImageUrl", $context) ? $context["editingPrimaryImageUrl"] : (function () { throw new RuntimeError('Variable "editingPrimaryImageUrl" does not exist.', 93, $this->source); })()), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\" style=\"grid-column: 1 / -1;\">
          <label for=\"product_description\">Description</label>
          <textarea id=\"product_description\" name=\"description\">";
        // line 98
        yield (((($tmp = (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 98, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 98, $this->source); })()), "description", [], "any", false, false, false, 98), "html", null, true)) : (""));
        yield "</textarea>
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 103
        yield (((($tmp = (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 103, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer produit"));
        yield "</button>
        ";
        // line 104
        if ((($tmp = (isset($context["editingProduct"]) || array_key_exists("editingProduct", $context) ? $context["editingProduct"] : (function () { throw new RuntimeError('Variable "editingProduct" does not exist.', 104, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "          <a class=\"btn btnGhost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
            yield "\">Annuler edition</a>
        ";
        }
        // line 107
        yield "      </div>
    </form>
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 112, $this->source); })()), "sort", [], "any", false, false, false, 112), "created_at")) : ("created_at")), "html", null, true);
        yield "\" />
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 113, $this->source); })()), "direction", [], "any", false, false, false, 113), "desc")) : ("desc")), "html", null, true);
        yield "\" />

    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 117, $this->source); })()), "q", [], "any", false, false, false, 117), "html", null, true);
        yield "\" placeholder=\"name, sku, team\" />
    </div>

    <div class=\"filterGroup\">
      <label>Equipe</label>
      <select name=\"team_id\">
        <option value=\"\" ";
        // line 123
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 123, $this->source); })()), "team_id", [], "any", false, false, false, 123) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 125
            yield "          ";
            $context["teamId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", true, true, false, 125) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 125)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 125)) : (0));
            // line 126
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 126, $this->source); })()), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 126, $this->source); })()), "team_id", [], "any", false, false, false, 126) == (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 126, $this->source); })()))) ? ("selected") : (""));
            yield ">
            ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 127), "html", null, true);
            yield "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Actif</label>
      <select name=\"is_active\">
        <option value=\"\" ";
        // line 136
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 136, $this->source); })()), "is_active", [], "any", false, false, false, 136) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        <option value=\"1\" ";
        // line 137
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 137, $this->source); })()), "is_active", [], "any", false, false, false, 137) == "1")) ? ("selected") : (""));
        yield ">Oui</option>
        <option value=\"0\" ";
        // line 138
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 138, $this->source); })()), "is_active", [], "any", false, false, false, 138) == "0")) ? ("selected") : (""));
        yield ">Non</option>
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE PRODUITS</h3>
      <span class=\"listMeta\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 151, $this->source); })())), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Image</th>
            <th>";
        // line 159
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 159, $this->getSourceContext())->macro_sort_link(...["admin_products", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 159, $this->source); })()), "id", "ID"]);
        yield "</th>
            <th>";
        // line 160
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 160, $this->getSourceContext())->macro_sort_link(...["admin_products", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 160, $this->source); })()), "name", "Nom"]);
        yield "</th>
            <th>";
        // line 161
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 161, $this->getSourceContext())->macro_sort_link(...["admin_products", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 161, $this->source); })()), "team", "Equipe"]);
        yield "</th>
            <th>";
        // line 162
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 162, $this->getSourceContext())->macro_sort_link(...["admin_products", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 162, $this->source); })()), "price", "Prix"]);
        yield "</th>
            <th>";
        // line 163
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 163, $this->getSourceContext())->macro_sort_link(...["admin_products", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 163, $this->source); })()), "stock_qty", "Stock"]);
        yield "</th>
            <th>";
        // line 164
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 164, $this->getSourceContext())->macro_sort_link(...["admin_products", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 164, $this->source); })()), "is_active", "Actif"]);
        yield "</th>
            <th>";
        // line 165
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 165, $this->getSourceContext())->macro_sort_link(...["admin_products", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 165, $this->source); })()), "updated_at", "Maj"]);
        yield "</th>
            <th>";
        // line 166
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 166, $this->getSourceContext())->macro_sort_link(...["admin_products", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 166, $this->source); })()), "created_at", "Cree le"]);
        yield "</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 171, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 172
            yield "            ";
            $context["productId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", true, true, false, 172) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 172)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 172)) : (0));
            // line 173
            yield "            ";
            $context["image"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["primaryImagesByProductId"] ?? null), (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 173, $this->source); })()), [], "array", true, true, false, 173)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["primaryImagesByProductId"]) || array_key_exists("primaryImagesByProductId", $context) ? $context["primaryImagesByProductId"] : (function () { throw new RuntimeError('Variable "primaryImagesByProductId" does not exist.', 173, $this->source); })()), (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 173, $this->source); })()), [], "array", false, false, false, 173), null)) : (null));
            // line 174
            yield "            <tr>
              <td>
                ";
            // line 176
            if ((($tmp = (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 176, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 177
                yield "                  ";
                $context["imageUrl"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 177, $this->source); })()), "fileUrl", [], "any", false, false, false, 177);
                // line 178
                yield "                  <img src=\"";
                yield (((is_string($_v0 = (isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 178, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 178, $this->source); })()), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 178, $this->source); })())), "html", null, true)));
                yield "\" alt=\"product\" style=\"width:34px;height:34px;border-radius:8px;object-fit:cover;\" />
                ";
            } else {
                // line 180
                yield "                  <span class=\"avatarSmall\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 180), 0, 1)), "html", null, true);
                yield "</span>
                ";
            }
            // line 182
            yield "              </td>
              <td>#";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 183, $this->source); })()), "html", null, true);
            yield "</td>
              <td>";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 184), "html", null, true);
            yield "</td>
              <td>";
            // line 185
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "teamId", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "teamId", [], "any", false, false, false, 185), "name", [], "any", false, false, false, 185), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 186), "html", null, true);
            yield "</td>
              <td>";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 187), "html", null, true);
            yield "</td>
              <td>";
            // line 188
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
              <td>";
            // line 189
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "updatedAt", [], "any", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "updatedAt", [], "any", false, false, false, 189), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 190
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "createdAt", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "createdAt", [], "any", false, false, false, 190), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products", ["edit" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 193, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_delete", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 194, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce produit ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_product_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 195, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 201
        if (!$context['_iterated']) {
            // line 202
            yield "            <tr>
              <td colspan=\"10\" class=\"listMeta\">Aucun produit trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "        </tbody>
      </table>
    </div>
  </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    public function macro_sort_link($route_name = null, $filters = null, $field = null, $label = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "route_name" => $route_name,
            "filters" => $filters,
            "field" => $field,
            "label" => $label,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sort_link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sort_link"));

            // line 4
            yield "  ";
            $context["current_sort"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 4, $this->source); })()), "sort", [], "any", false, false, false, 4), "created_at")) : ("created_at"));
            // line 5
            yield "  ";
            $context["current_direction"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 5, $this->source); })()), "direction", [], "any", false, false, false, 5), "desc")) : ("desc"));
            // line 6
            yield "  ";
            $context["is_current"] = ((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 6, $this->source); })()) == (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()));
            // line 7
            yield "  ";
            $context["next_direction"] = ((((isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new RuntimeError('Variable "is_current" does not exist.', 7, $this->source); })()) && ((isset($context["current_direction"]) || array_key_exists("current_direction", $context) ? $context["current_direction"] : (function () { throw new RuntimeError('Variable "current_direction" does not exist.', 7, $this->source); })()) == "asc"))) ? ("desc") : ("asc"));
            // line 8
            yield "  ";
            $context["marker"] = (((($tmp = (isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new RuntimeError('Variable "is_current" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((((isset($context["current_direction"]) || array_key_exists("current_direction", $context) ? $context["current_direction"] : (function () { throw new RuntimeError('Variable "current_direction" does not exist.', 8, $this->source); })()) == "asc")) ? (" (ASC)") : (" (DESC)"))) : (""));
            // line 9
            yield "  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 9, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 9, $this->source); })()), ["sort" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "direction" => (isset($context["next_direction"]) || array_key_exists("next_direction", $context) ? $context["next_direction"] : (function () { throw new RuntimeError('Variable "next_direction" does not exist.', 9, $this->source); })())])), "html", null, true);
            yield "\" style=\"color:inherit;text-decoration:none;\">
    ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 10, $this->source); })()), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["marker"]) || array_key_exists("marker", $context) ? $context["marker"] : (function () { throw new RuntimeError('Variable "marker" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "
  </a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/pages/products.html.twig";
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
        return array (  582 => 10,  577 => 9,  574 => 8,  571 => 7,  568 => 6,  565 => 5,  562 => 4,  541 => 3,  526 => 206,  517 => 202,  515 => 201,  504 => 195,  500 => 194,  496 => 193,  490 => 190,  486 => 189,  482 => 188,  478 => 187,  474 => 186,  470 => 185,  466 => 184,  462 => 183,  459 => 182,  453 => 180,  447 => 178,  444 => 177,  442 => 176,  438 => 174,  435 => 173,  432 => 172,  427 => 171,  419 => 166,  415 => 165,  411 => 164,  407 => 163,  403 => 162,  399 => 161,  395 => 160,  391 => 159,  380 => 151,  370 => 144,  361 => 138,  357 => 137,  353 => 136,  345 => 130,  336 => 127,  329 => 126,  326 => 125,  322 => 124,  318 => 123,  309 => 117,  302 => 113,  298 => 112,  294 => 111,  288 => 107,  282 => 105,  280 => 104,  276 => 103,  268 => 98,  260 => 93,  251 => 87,  246 => 86,  244 => 85,  235 => 79,  227 => 74,  219 => 69,  211 => 64,  204 => 59,  195 => 56,  188 => 55,  185 => 54,  181 => 53,  171 => 46,  167 => 45,  160 => 41,  155 => 38,  149 => 37,  138 => 34,  134 => 33,  131 => 32,  126 => 31,  122 => 30,  115 => 26,  111 => 25,  103 => 19,  90 => 18,  67 => 16,  56 => 1,  54 => 14,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% macro sort_link(route_name, filters, field, label) %}
  {% set current_sort = filters.sort|default('created_at') %}
  {% set current_direction = filters.direction|default('desc') %}
  {% set is_current = current_sort == field %}
  {% set next_direction = is_current and current_direction == 'asc' ? 'desc' : 'asc' %}
  {% set marker = is_current ? (current_direction == 'asc' ? ' (ASC)' : ' (DESC)') : '' %}
  <a href=\"{{ path(route_name, filters|merge({sort: field, direction: next_direction})) }}\" style=\"color:inherit;text-decoration:none;\">
    {{ label }}{{ marker }}
  </a>
{% endmacro %}

{% import _self as sorter %}

{% block title %}PULSE - Gestion produits{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion produits</h2>
      <div class=\"pageSub\">CRUD + filtres DB + export.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_products_export', filters|merge({format: 'pdf'})) }}\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_products_export', filters|merge({format: 'excel'})) }}\">Exporter Excel</a>
    </div>
  </div>

  {% for label, messages in app.flashes %}
    {% for message in messages %}
      <div class=\"listItem\">
        <span>{{ message }}</span>
        <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
      </div>
    {% endfor %}
  {% endfor %}

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">{{ editingProduct ? 'MODIFIER PRODUIT #' ~ editingProduct.productId : 'NOUVEAU PRODUIT' }}</h3>
    </div>

    <form method=\"post\">
      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_product_form') }}\" />
      <input type=\"hidden\" name=\"product_id\" value=\"{{ editingProduct ? editingProduct.productId : '' }}\" />

      <div class=\"formGrid\">
        <div class=\"field\">
          <label for=\"product_team_id\">Equipe *</label>
          <select id=\"product_team_id\" name=\"team_id\" required>
            <option value=\"\">Selectionner</option>
            {% for team in teams %}
              {% set teamId = team.teamId ?? 0 %}
              <option value=\"{{ teamId }}\" {{ editingProduct and editingProduct.teamId and editingProduct.teamId.teamId == teamId ? 'selected' : '' }}>
                {{ team.name }}
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"field\">
          <label for=\"product_name\">Nom produit *</label>
          <input id=\"product_name\" type=\"text\" name=\"name\" required value=\"{{ editingProduct ? editingProduct.name : '' }}\" />
        </div>

        <div class=\"field\">
          <label for=\"product_price\">Prix *</label>
          <input id=\"product_price\" type=\"number\" min=\"0\" step=\"0.01\" name=\"price\" required value=\"{{ editingProduct ? editingProduct.price : '0.00' }}\" />
        </div>

        <div class=\"field\">
          <label for=\"product_stock_qty\">Stock *</label>
          <input id=\"product_stock_qty\" type=\"number\" min=\"0\" step=\"1\" name=\"stock_qty\" required value=\"{{ editingProduct ? editingProduct.stockQty : 0 }}\" />
        </div>

        <div class=\"field\">
          <label for=\"product_sku\">SKU</label>
          <input id=\"product_sku\" type=\"text\" name=\"sku\" value=\"{{ editingProduct ? editingProduct.sku : '' }}\" />
        </div>

        <div class=\"field\">
          <label for=\"product_is_active\">Actif</label>
          <select id=\"product_is_active\" name=\"is_active\">
            {% set activeSelected = editingProduct ? editingProduct.isActive : true %}
            <option value=\"1\" {{ activeSelected ? 'selected' : '' }}>Oui</option>
            <option value=\"0\" {{ not activeSelected ? 'selected' : '' }}>Non</option>
          </select>
        </div>

        <div class=\"field\">
          <label for=\"product_image_url\">Image URL</label>
          <input id=\"product_image_url\" type=\"url\" name=\"image_url\" placeholder=\"https://...\" value=\"{{ editingProduct ? editingPrimaryImageUrl : '' }}\" />
        </div>

        <div class=\"field\" style=\"grid-column: 1 / -1;\">
          <label for=\"product_description\">Description</label>
          <textarea id=\"product_description\" name=\"description\">{{ editingProduct ? editingProduct.description : '' }}</textarea>
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">{{ editingProduct ? 'Mettre a jour' : 'Creer produit' }}</button>
        {% if editingProduct %}
          <a class=\"btn btnGhost\" href=\"{{ path('admin_products') }}\">Annuler edition</a>
        {% endif %}
      </div>
    </form>
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"{{ path('admin_products') }}\">
    <input type=\"hidden\" name=\"sort\" value=\"{{ filters.sort|default('created_at') }}\" />
    <input type=\"hidden\" name=\"direction\" value=\"{{ filters.direction|default('desc') }}\" />

    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"name, sku, team\" />
    </div>

    <div class=\"filterGroup\">
      <label>Equipe</label>
      <select name=\"team_id\">
        <option value=\"\" {{ filters.team_id == '' ? 'selected' : '' }}>ALL</option>
        {% for team in teams %}
          {% set teamId = team.teamId ?? 0 %}
          <option value=\"{{ teamId }}\" {{ filters.team_id == teamId ? 'selected' : '' }}>
            {{ team.name }}
          </option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Actif</label>
      <select name=\"is_active\">
        <option value=\"\" {{ filters.is_active == '' ? 'selected' : '' }}>ALL</option>
        <option value=\"1\" {{ filters.is_active == '1' ? 'selected' : '' }}>Oui</option>
        <option value=\"0\" {{ filters.is_active == '0' ? 'selected' : '' }}>Non</option>
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_products') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE PRODUITS</h3>
      <span class=\"listMeta\">{{ products|length }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Image</th>
            <th>{{ sorter.sort_link('admin_products', filters, 'id', 'ID') }}</th>
            <th>{{ sorter.sort_link('admin_products', filters, 'name', 'Nom') }}</th>
            <th>{{ sorter.sort_link('admin_products', filters, 'team', 'Equipe') }}</th>
            <th>{{ sorter.sort_link('admin_products', filters, 'price', 'Prix') }}</th>
            <th>{{ sorter.sort_link('admin_products', filters, 'stock_qty', 'Stock') }}</th>
            <th>{{ sorter.sort_link('admin_products', filters, 'is_active', 'Actif') }}</th>
            <th>{{ sorter.sort_link('admin_products', filters, 'updated_at', 'Maj') }}</th>
            <th>{{ sorter.sort_link('admin_products', filters, 'created_at', 'Cree le') }}</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for product in products %}
            {% set productId = product.productId ?? 0 %}
            {% set image = primaryImagesByProductId[productId]|default(null) %}
            <tr>
              <td>
                {% if image %}
                  {% set imageUrl = image.fileUrl %}
                  <img src=\"{{ imageUrl starts with 'http' ? imageUrl : asset(imageUrl) }}\" alt=\"product\" style=\"width:34px;height:34px;border-radius:8px;object-fit:cover;\" />
                {% else %}
                  <span class=\"avatarSmall\">{{ product.name|slice(0, 1)|upper }}</span>
                {% endif %}
              </td>
              <td>#{{ productId }}</td>
              <td>{{ product.name }}</td>
              <td>{{ product.teamId ? product.teamId.name : '-' }}</td>
              <td>{{ product.price }}</td>
              <td>{{ product.stockQty }}</td>
              <td>{{ product.isActive ? 'Oui' : 'Non' }}</td>
              <td>{{ product.updatedAt ? product.updatedAt|date('d/m/Y H:i') : '-' }}</td>
              <td>{{ product.createdAt ? product.createdAt|date('d/m/Y H:i') : '-' }}</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_products', {edit: productId}) }}\">Update</a>
                  <form method=\"post\" action=\"{{ path('admin_product_delete', {id: productId}) }}\" onsubmit=\"return confirm('Supprimer ce produit ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_product_' ~ productId) }}\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"10\" class=\"listMeta\">Aucun produit trouve.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/products.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\products.html.twig");
    }
}
