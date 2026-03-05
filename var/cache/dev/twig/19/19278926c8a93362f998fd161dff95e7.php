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

/* admin/pages/carts.html.twig */
class __TwigTemplate_dd866a7590ba2860c005c080c4251941 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/carts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/carts.html.twig"));

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

        yield "PULSE - Gestion paniers";
        
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
      <h2>Gestion paniers</h2>
      <div class=\"pageSub\">CRUD + filtres DB + export.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carts_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), ["format" => "pdf"])), "html", null, true);
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carts_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), ["format" => "excel"])), "html", null, true);
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
        yield (((($tmp = (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("MODIFIER PANIER #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 41, $this->source); })()), "cartId", [], "any", false, false, false, 41)), "html", null, true)) : ("NOUVEAU PANIER"));
        yield "</h3>
    </div>

    <form method=\"post\">
      <input type=\"hidden\" name=\"_token\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_cart_form"), "html", null, true);
        yield "\" />
      <input type=\"hidden\" name=\"cart_id\" value=\"";
        // line 46
        yield (((($tmp = (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 46, $this->source); })()), "cartId", [], "any", false, false, false, 46), "html", null, true)) : (""));
        yield "\" />

      <div class=\"formGrid\">
        <div class=\"field\">
          <label for=\"cart_user_id\">Utilisateur *</label>
          <select id=\"cart_user_id\" name=\"user_id\" required>
            <option value=\"\">Selectionner</option>
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 54
            yield "              ";
            $context["userId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 54)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 54)) : (0));
            // line 55
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\" ";
            yield (((((isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 55, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 55, $this->source); })()), "userId", [], "any", false, false, false, 55)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 55, $this->source); })()), "userId", [], "any", false, false, false, 55), "userId", [], "any", false, false, false, 55) == (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 55, $this->source); })())))) ? ("selected") : (""));
            yield ">
                ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 56), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 56), "html", null, true);
            yield ")
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "          </select>
        </div>

        <div class=\"field\">
          <label for=\"cart_status\">Statut *</label>
          <select id=\"cart_status\" name=\"status\" required>
            ";
        // line 65
        $context["selectedStatus"] = (((($tmp = (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 65, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 65, $this->source); })()), "status", [], "any", false, false, false, 65)) : ("OPEN"));
        // line 66
        yield "            <option value=\"OPEN\" ";
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 66, $this->source); })()) == "OPEN")) ? ("selected") : (""));
        yield ">OPEN</option>
            <option value=\"LOCKED\" ";
        // line 67
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 67, $this->source); })()) == "LOCKED")) ? ("selected") : (""));
        yield ">LOCKED</option>
            <option value=\"ORDERED\" ";
        // line 68
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 68, $this->source); })()) == "ORDERED")) ? ("selected") : (""));
        yield ">ORDERED</option>
          </select>
        </div>

        <div class=\"field\">
          <label for=\"cart_locked_at\">Locked at</label>
          <input id=\"cart_locked_at\" type=\"datetime-local\" name=\"locked_at\" value=\"";
        // line 74
        yield ((((isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 74, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 74, $this->source); })()), "lockedAt", [], "any", false, false, false, 74))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 74, $this->source); })()), "lockedAt", [], "any", false, false, false, 74), "Y-m-d\\TH:i"), "html", null, true)) : (""));
        yield "\" />
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 79
        yield (((($tmp = (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer panier"));
        yield "</button>
        ";
        // line 80
        if ((($tmp = (isset($context["editingCart"]) || array_key_exists("editingCart", $context) ? $context["editingCart"] : (function () { throw new RuntimeError('Variable "editingCart" does not exist.', 80, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "          <a class=\"btn btnGhost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carts");
            yield "\">Annuler edition</a>
        ";
        }
        // line 83
        yield "      </div>
    </form>
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carts");
        yield "\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 88, $this->source); })()), "sort", [], "any", false, false, false, 88), "updated_at")) : ("updated_at")), "html", null, true);
        yield "\" />
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 89, $this->source); })()), "direction", [], "any", false, false, false, 89), "desc")) : ("desc")), "html", null, true);
        yield "\" />

    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 93, $this->source); })()), "q", [], "any", false, false, false, 93), "html", null, true);
        yield "\" placeholder=\"username, email\" />
    </div>

    <div class=\"filterGroup\">
      <label>Status</label>
      <select name=\"status\">
        <option value=\"\" ";
        // line 99
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 99, $this->source); })()), "status", [], "any", false, false, false, 99) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        <option value=\"OPEN\" ";
        // line 100
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 100, $this->source); })()), "status", [], "any", false, false, false, 100) == "OPEN")) ? ("selected") : (""));
        yield ">OPEN</option>
        <option value=\"LOCKED\" ";
        // line 101
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 101, $this->source); })()), "status", [], "any", false, false, false, 101) == "LOCKED")) ? ("selected") : (""));
        yield ">LOCKED</option>
        <option value=\"ORDERED\" ";
        // line 102
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 102, $this->source); })()), "status", [], "any", false, false, false, 102) == "ORDERED")) ? ("selected") : (""));
        yield ">ORDERED</option>
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carts");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE</h3>
      <span class=\"listMeta\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["carts"]) || array_key_exists("carts", $context) ? $context["carts"] : (function () { throw new RuntimeError('Variable "carts" does not exist.', 115, $this->source); })())), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>";
        // line 122
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 122, $this->getSourceContext())->macro_sort_link(...["admin_carts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 122, $this->source); })()), "id", "ID"]);
        yield "</th>
            <th>";
        // line 123
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 123, $this->getSourceContext())->macro_sort_link(...["admin_carts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 123, $this->source); })()), "user", "User"]);
        yield "</th>
            <th>";
        // line 124
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 124, $this->getSourceContext())->macro_sort_link(...["admin_carts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 124, $this->source); })()), "status", "Status"]);
        yield "</th>
            <th>";
        // line 125
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 125, $this->getSourceContext())->macro_sort_link(...["admin_carts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 125, $this->source); })()), "items", "Items"]);
        yield "</th>
            <th>";
        // line 126
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 126, $this->getSourceContext())->macro_sort_link(...["admin_carts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 126, $this->source); })()), "created_at", "Created"]);
        yield "</th>
            <th>";
        // line 127
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 127, $this->getSourceContext())->macro_sort_link(...["admin_carts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 127, $this->source); })()), "updated_at", "Updated"]);
        yield "</th>
            <th>";
        // line 128
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 128, $this->getSourceContext())->macro_sort_link(...["admin_carts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 128, $this->source); })()), "locked_at", "Locked"]);
        yield "</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carts"]) || array_key_exists("carts", $context) ? $context["carts"] : (function () { throw new RuntimeError('Variable "carts" does not exist.', 133, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
            // line 134
            yield "            ";
            $context["cartId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "cartId", [], "any", true, true, false, 134) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "cartId", [], "any", false, false, false, 134)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "cartId", [], "any", false, false, false, 134)) : (0));
            // line 135
            yield "            <tr>
              <td>#";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cartId"]) || array_key_exists("cartId", $context) ? $context["cartId"] : (function () { throw new RuntimeError('Variable "cartId" does not exist.', 136, $this->source); })()), "html", null, true);
            yield "</td>
              <td>";
            // line 137
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "userId", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "userId", [], "any", false, false, false, 137), "username", [], "any", false, false, false, 137), "html", null, true)) : ("-"));
            yield "</td>
              <td><span class=\"badge badge--info\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "status", [], "any", false, false, false, 138), "html", null, true);
            yield "</span></td>
              <td>";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["itemsByCartId"] ?? null), (isset($context["cartId"]) || array_key_exists("cartId", $context) ? $context["cartId"] : (function () { throw new RuntimeError('Variable "cartId" does not exist.', 139, $this->source); })()), [], "array", true, true, false, 139)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["itemsByCartId"]) || array_key_exists("itemsByCartId", $context) ? $context["itemsByCartId"] : (function () { throw new RuntimeError('Variable "itemsByCartId" does not exist.', 139, $this->source); })()), (isset($context["cartId"]) || array_key_exists("cartId", $context) ? $context["cartId"] : (function () { throw new RuntimeError('Variable "cartId" does not exist.', 139, $this->source); })()), [], "array", false, false, false, 139), 0)) : (0)), "html", null, true);
            yield "</td>
              <td>";
            // line 140
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "createdAt", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "createdAt", [], "any", false, false, false, 140), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 141
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "updatedAt", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "updatedAt", [], "any", false, false, false, 141), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 142
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "lockedAt", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "lockedAt", [], "any", false, false, false, 142), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carts", ["edit" => (isset($context["cartId"]) || array_key_exists("cartId", $context) ? $context["cartId"] : (function () { throw new RuntimeError('Variable "cartId" does not exist.', 145, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cart_delete", ["id" => (isset($context["cartId"]) || array_key_exists("cartId", $context) ? $context["cartId"] : (function () { throw new RuntimeError('Variable "cartId" does not exist.', 146, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce panier ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_cart_" . (isset($context["cartId"]) || array_key_exists("cartId", $context) ? $context["cartId"] : (function () { throw new RuntimeError('Variable "cartId" does not exist.', 147, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 153
        if (!$context['_iterated']) {
            // line 154
            yield "            <tr>
              <td colspan=\"8\" class=\"listMeta\">Aucun panier trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cart'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
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
            $context["current_sort"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 4, $this->source); })()), "sort", [], "any", false, false, false, 4), "updated_at")) : ("updated_at"));
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
        return "admin/pages/carts.html.twig";
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
        return array (  484 => 10,  479 => 9,  476 => 8,  473 => 7,  470 => 6,  467 => 5,  464 => 4,  443 => 3,  428 => 158,  419 => 154,  417 => 153,  406 => 147,  402 => 146,  398 => 145,  392 => 142,  388 => 141,  384 => 140,  380 => 139,  376 => 138,  372 => 137,  368 => 136,  365 => 135,  362 => 134,  357 => 133,  349 => 128,  345 => 127,  341 => 126,  337 => 125,  333 => 124,  329 => 123,  325 => 122,  315 => 115,  305 => 108,  296 => 102,  292 => 101,  288 => 100,  284 => 99,  275 => 93,  268 => 89,  264 => 88,  260 => 87,  254 => 83,  248 => 81,  246 => 80,  242 => 79,  234 => 74,  225 => 68,  221 => 67,  216 => 66,  214 => 65,  206 => 59,  195 => 56,  188 => 55,  185 => 54,  181 => 53,  171 => 46,  167 => 45,  160 => 41,  155 => 38,  149 => 37,  138 => 34,  134 => 33,  131 => 32,  126 => 31,  122 => 30,  115 => 26,  111 => 25,  103 => 19,  90 => 18,  67 => 16,  56 => 1,  54 => 14,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% macro sort_link(route_name, filters, field, label) %}
  {% set current_sort = filters.sort|default('updated_at') %}
  {% set current_direction = filters.direction|default('desc') %}
  {% set is_current = current_sort == field %}
  {% set next_direction = is_current and current_direction == 'asc' ? 'desc' : 'asc' %}
  {% set marker = is_current ? (current_direction == 'asc' ? ' (ASC)' : ' (DESC)') : '' %}
  <a href=\"{{ path(route_name, filters|merge({sort: field, direction: next_direction})) }}\" style=\"color:inherit;text-decoration:none;\">
    {{ label }}{{ marker }}
  </a>
{% endmacro %}

{% import _self as sorter %}

{% block title %}PULSE - Gestion paniers{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion paniers</h2>
      <div class=\"pageSub\">CRUD + filtres DB + export.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_carts_export', filters|merge({format: 'pdf'})) }}\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_carts_export', filters|merge({format: 'excel'})) }}\">Exporter Excel</a>
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
      <h3 class=\"panelTitle\">{{ editingCart ? 'MODIFIER PANIER #' ~ editingCart.cartId : 'NOUVEAU PANIER' }}</h3>
    </div>

    <form method=\"post\">
      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_cart_form') }}\" />
      <input type=\"hidden\" name=\"cart_id\" value=\"{{ editingCart ? editingCart.cartId : '' }}\" />

      <div class=\"formGrid\">
        <div class=\"field\">
          <label for=\"cart_user_id\">Utilisateur *</label>
          <select id=\"cart_user_id\" name=\"user_id\" required>
            <option value=\"\">Selectionner</option>
            {% for user in users %}
              {% set userId = user.userId ?? 0 %}
              <option value=\"{{ userId }}\" {{ editingCart and editingCart.userId and editingCart.userId.userId == userId ? 'selected' : '' }}>
                {{ user.username }} ({{ user.email }})
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"field\">
          <label for=\"cart_status\">Statut *</label>
          <select id=\"cart_status\" name=\"status\" required>
            {% set selectedStatus = editingCart ? editingCart.status : 'OPEN' %}
            <option value=\"OPEN\" {{ selectedStatus == 'OPEN' ? 'selected' : '' }}>OPEN</option>
            <option value=\"LOCKED\" {{ selectedStatus == 'LOCKED' ? 'selected' : '' }}>LOCKED</option>
            <option value=\"ORDERED\" {{ selectedStatus == 'ORDERED' ? 'selected' : '' }}>ORDERED</option>
          </select>
        </div>

        <div class=\"field\">
          <label for=\"cart_locked_at\">Locked at</label>
          <input id=\"cart_locked_at\" type=\"datetime-local\" name=\"locked_at\" value=\"{{ editingCart and editingCart.lockedAt ? editingCart.lockedAt|date('Y-m-d\\\\TH:i') : '' }}\" />
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">{{ editingCart ? 'Mettre a jour' : 'Creer panier' }}</button>
        {% if editingCart %}
          <a class=\"btn btnGhost\" href=\"{{ path('admin_carts') }}\">Annuler edition</a>
        {% endif %}
      </div>
    </form>
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"{{ path('admin_carts') }}\">
    <input type=\"hidden\" name=\"sort\" value=\"{{ filters.sort|default('updated_at') }}\" />
    <input type=\"hidden\" name=\"direction\" value=\"{{ filters.direction|default('desc') }}\" />

    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"username, email\" />
    </div>

    <div class=\"filterGroup\">
      <label>Status</label>
      <select name=\"status\">
        <option value=\"\" {{ filters.status == '' ? 'selected' : '' }}>ALL</option>
        <option value=\"OPEN\" {{ filters.status == 'OPEN' ? 'selected' : '' }}>OPEN</option>
        <option value=\"LOCKED\" {{ filters.status == 'LOCKED' ? 'selected' : '' }}>LOCKED</option>
        <option value=\"ORDERED\" {{ filters.status == 'ORDERED' ? 'selected' : '' }}>ORDERED</option>
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_carts') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE</h3>
      <span class=\"listMeta\">{{ carts|length }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>{{ sorter.sort_link('admin_carts', filters, 'id', 'ID') }}</th>
            <th>{{ sorter.sort_link('admin_carts', filters, 'user', 'User') }}</th>
            <th>{{ sorter.sort_link('admin_carts', filters, 'status', 'Status') }}</th>
            <th>{{ sorter.sort_link('admin_carts', filters, 'items', 'Items') }}</th>
            <th>{{ sorter.sort_link('admin_carts', filters, 'created_at', 'Created') }}</th>
            <th>{{ sorter.sort_link('admin_carts', filters, 'updated_at', 'Updated') }}</th>
            <th>{{ sorter.sort_link('admin_carts', filters, 'locked_at', 'Locked') }}</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for cart in carts %}
            {% set cartId = cart.cartId ?? 0 %}
            <tr>
              <td>#{{ cartId }}</td>
              <td>{{ cart.userId ? cart.userId.username : '-' }}</td>
              <td><span class=\"badge badge--info\">{{ cart.status }}</span></td>
              <td>{{ itemsByCartId[cartId]|default(0) }}</td>
              <td>{{ cart.createdAt ? cart.createdAt|date('d/m/Y H:i') : '-' }}</td>
              <td>{{ cart.updatedAt ? cart.updatedAt|date('d/m/Y H:i') : '-' }}</td>
              <td>{{ cart.lockedAt ? cart.lockedAt|date('d/m/Y H:i') : '-' }}</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_carts', {edit: cartId}) }}\">Update</a>
                  <form method=\"post\" action=\"{{ path('admin_cart_delete', {id: cartId}) }}\" onsubmit=\"return confirm('Supprimer ce panier ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_cart_' ~ cartId) }}\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"8\" class=\"listMeta\">Aucun panier trouve.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/carts.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pages\\carts.html.twig");
    }
}
