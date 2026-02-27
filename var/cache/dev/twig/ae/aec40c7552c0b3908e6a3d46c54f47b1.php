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

/* admin/pages/users.html.twig */
class __TwigTemplate_29aa677a919c3bdaf3ed8bc67ca44b75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/users.html.twig"));

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

        yield "PULSE - Gestion utilisateurs";
        
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
      <h2>Gestion utilisateurs</h2>
      <div class=\"pageSub\">Recherche/filtre DB + CRUD + exports.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnPrimary\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_create");
        yield "\">+ Creer utilisateur</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), ["format" => "pdf"])), "html", null, true);
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })()), ["format" => "excel"])), "html", null, true);
        yield "\">Exporter Excel</a>
    </div>
  </div>

  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 32
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                yield "      <div class=\"listItem\">
        <span>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 35
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
            // line 38
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
  <section class=\"panel adminUsersStats\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">STATISTIQUES UTILISATEURS</h3>
      <span class=\"listMeta\">Liste courante: ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 43, $this->source); })()), "total", [], "any", false, false, false, 43), "html", null, true);
        yield " utilisateur(s)</span>
    </div>

    <div class=\"kpiRow\">
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">Total</div>
        <div class=\"kpiValue\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 49, $this->source); })()), "total", [], "any", false, false, false, 49), "html", null, true);
        yield "</div>
      </div>
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">Actifs</div>
        <div class=\"kpiValue\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 53, $this->source); })()), "active", [], "any", false, false, false, 53), "html", null, true);
        yield "</div>
        <div class=\"listMeta\">Inactifs: ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 54, $this->source); })()), "inactive", [], "any", false, false, false, 54), "html", null, true);
        yield "</div>
      </div>
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">Email verifies</div>
        <div class=\"kpiValue\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "verified", [], "any", false, false, false, 58), "html", null, true);
        yield "</div>
      </div>
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">2FA active</div>
        <div class=\"kpiValue\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 62, $this->source); })()), "twoFactor", [], "any", false, false, false, 62), "html", null, true);
        yield "</div>
      </div>
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">Nouveaux (30j)</div>
        <div class=\"kpiValue\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 66, $this->source); })()), "newUsers30d", [], "any", false, false, false, 66), "html", null, true);
        yield "</div>
      </div>
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">Connexions (7j)</div>
        <div class=\"kpiValue\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 70, $this->source); })()), "recentLogin7d", [], "any", false, false, false, 70), "html", null, true);
        yield "</div>
      </div>
    </div>

    <div class=\"adminUsersStatsGrid\">
      <div class=\"adminUsersStatsBox\">
        <h4>Repartition par role</h4>
        <div class=\"adminUsersBars\">
          ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 78, $this->source); })()), "roles", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 79
            yield "            <div class=\"adminUsersBarRow\">
              <div class=\"adminUsersBarHead\">
                <span>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "label", [], "any", false, false, false, 81), "html", null, true);
            yield "</span>
                <span class=\"listMeta\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "count", [], "any", false, false, false, 82), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "percent", [], "any", false, false, false, 82), "html", null, true);
            yield "%)</span>
              </div>
              <div class=\"adminUsersBar\">
                <span style=\"width: ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "percent", [], "any", false, false, false, 85), "html", null, true);
            yield "%\"></span>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "        </div>
      </div>

      <div class=\"adminUsersStatsBox\">
        <h4>Top pays</h4>
        <div class=\"adminUsersBars\">
          ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 95, $this->source); })()), "countries", [], "any", false, false, false, 95));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 96
            yield "            <div class=\"adminUsersBarRow\">
              <div class=\"adminUsersBarHead\">
                <span>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 98), "html", null, true);
            yield "</span>
                <span class=\"listMeta\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["country"], "count", [], "any", false, false, false, 99), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["country"], "percent", [], "any", false, false, false, 99), "html", null, true);
            yield "%)</span>
              </div>
              <div class=\"adminUsersBar\">
                <span style=\"width: ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["country"], "percent", [], "any", false, false, false, 102), "html", null, true);
            yield "%\"></span>
              </div>
            </div>
          ";
            $context['_iterated'] = true;
        }
        // line 105
        if (!$context['_iterated']) {
            // line 106
            yield "            <div class=\"listMeta\">Aucune donnee pays disponible.</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "        </div>
      </div>
    </div>
  </section>

  <form class=\"filtersBar\" method=\"get\" action=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 114, $this->source); })()), "sort", [], "any", false, false, false, 114), "created_at")) : ("created_at")), "html", null, true);
        yield "\" />
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 115, $this->source); })()), "direction", [], "any", false, false, false, 115), "desc")) : ("desc")), "html", null, true);
        yield "\" />
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 118, $this->source); })()), "q", [], "any", false, false, false, 118), "html", null, true);
        yield "\" placeholder=\"username, email, display name\" />
    </div>

    <div class=\"filterGroup\">
      <label>Role</label>
      <select name=\"role\">
        <option value=\"\">ALL</option>
        ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roleOptions"]) || array_key_exists("roleOptions", $context) ? $context["roleOptions"] : (function () { throw new RuntimeError('Variable "roleOptions" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 126
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 126, $this->source); })()), "role", [], "any", false, false, false, 126) == $context["role"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Actif</label>
      <select name=\"active\">
        <option value=\"\" ";
        // line 134
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 134, $this->source); })()), "active", [], "any", false, false, false, 134) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        <option value=\"1\" ";
        // line 135
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 135, $this->source); })()), "active", [], "any", false, false, false, 135) == "1")) ? ("selected") : (""));
        yield ">Oui</option>
        <option value=\"0\" ";
        // line 136
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 136, $this->source); })()), "active", [], "any", false, false, false, 136) == "0")) ? ("selected") : (""));
        yield ">Non</option>
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Email verifie</label>
      <select name=\"verified\">
        <option value=\"\" ";
        // line 143
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 143, $this->source); })()), "verified", [], "any", false, false, false, 143) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        <option value=\"1\" ";
        // line 144
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 144, $this->source); })()), "verified", [], "any", false, false, false, 144) == "1")) ? ("selected") : (""));
        yield ">Oui</option>
        <option value=\"0\" ";
        // line 145
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 145, $this->source); })()), "verified", [], "any", false, false, false, 145) == "0")) ? ("selected") : (""));
        yield ">Non</option>
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE</h3>
      <span class=\"listMeta\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 158, $this->source); })())), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Photo</th>
            <th>";
        // line 166
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 166, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 166, $this->source); })()), "id", "ID"]);
        yield "</th>
            <th>";
        // line 167
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 167, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 167, $this->source); })()), "username", "Username"]);
        yield "</th>
            <th>";
        // line 168
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 168, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 168, $this->source); })()), "email", "Email"]);
        yield "</th>
            <th>";
        // line 169
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 169, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 169, $this->source); })()), "role", "Role"]);
        yield "</th>
            <th>";
        // line 170
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 170, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 170, $this->source); })()), "active", "Actif"]);
        yield "</th>
            <th>";
        // line 171
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 171, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 171, $this->source); })()), "verified", "Email verifie"]);
        yield "</th>
            <th>";
        // line 172
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 172, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 172, $this->source); })()), "country", "Country"]);
        yield "</th>
            <th>";
        // line 173
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 173, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 173, $this->source); })()), "created_at", "Created"]);
        yield "</th>
            <th>";
        // line 174
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 174, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 174, $this->source); })()), "last_login_at", "Last login"]);
        yield "</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 179, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 180
            yield "            ";
            $context["userId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", true, true, false, 180) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 180)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 180)) : (0));
            // line 181
            yield "            <tr>
              <td>
                ";
            // line 183
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profileImageId", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 184
                yield "                  <img src=\"";
                yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profileImageId", [], "any", false, false, false, 184), "fileUrl", [], "any", false, false, false, 184)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profileImageId", [], "any", false, false, false, 184), "fileUrl", [], "any", false, false, false, 184), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profileImageId", [], "any", false, false, false, 184), "fileUrl", [], "any", false, false, false, 184)), "html", null, true)));
                yield "\" alt=\"avatar\" style=\"width:28px;height:28px;border-radius:999px;object-fit:cover;\" />
                ";
            } else {
                // line 186
                yield "                  <span class=\"avatarSmall\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 186), 0, 1)), "html", null, true);
                yield "</span>
                ";
            }
            // line 188
            yield "              </td>
              <td>#";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 189, $this->source); })()), "html", null, true);
            yield "</td>
              <td>";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 190), "html", null, true);
            yield "</td>
              <td>";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 191), "html", null, true);
            yield "</td>
              <td><span class=\"badge badge--info\">";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 192), "html", null, true);
            yield "</span></td>
              <td>";
            // line 193
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
              <td>";
            // line 194
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "emailVerified", [], "any", false, false, false, 194)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
              <td>";
            // line 195
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 195)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 195), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 196
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 196), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 197
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLoginAt", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLoginAt", [], "any", false, false, false, 197), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_detail", ["id" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 200, $this->source); })())]), "html", null, true);
            yield "\">Voir</a>
                  <a class=\"btn btnTiny\" href=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 201, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 202, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer cet utilisateur ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_user_" . (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 203, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 209
        if (!$context['_iterated']) {
            // line 210
            yield "            <tr>
              <td colspan=\"11\" class=\"listMeta\">Aucun utilisateur trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
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
        return "admin/pages/users.html.twig";
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
        return array (  609 => 10,  604 => 9,  601 => 8,  598 => 7,  595 => 6,  592 => 5,  589 => 4,  568 => 3,  553 => 214,  544 => 210,  542 => 209,  531 => 203,  527 => 202,  523 => 201,  519 => 200,  513 => 197,  509 => 196,  505 => 195,  501 => 194,  497 => 193,  493 => 192,  489 => 191,  485 => 190,  481 => 189,  478 => 188,  472 => 186,  466 => 184,  464 => 183,  460 => 181,  457 => 180,  452 => 179,  444 => 174,  440 => 173,  436 => 172,  432 => 171,  428 => 170,  424 => 169,  420 => 168,  416 => 167,  412 => 166,  401 => 158,  391 => 151,  382 => 145,  378 => 144,  374 => 143,  364 => 136,  360 => 135,  356 => 134,  348 => 128,  335 => 126,  331 => 125,  321 => 118,  315 => 115,  311 => 114,  307 => 113,  300 => 108,  293 => 106,  291 => 105,  283 => 102,  275 => 99,  271 => 98,  267 => 96,  262 => 95,  254 => 89,  244 => 85,  236 => 82,  232 => 81,  228 => 79,  224 => 78,  213 => 70,  206 => 66,  199 => 62,  192 => 58,  185 => 54,  181 => 53,  174 => 49,  165 => 43,  159 => 39,  153 => 38,  142 => 35,  138 => 34,  135 => 33,  130 => 32,  126 => 31,  119 => 27,  115 => 26,  111 => 25,  103 => 19,  90 => 18,  67 => 16,  56 => 1,  54 => 14,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'admin/base_admin.html.twig' %}

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

{% block title %}PULSE - Gestion utilisateurs{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion utilisateurs</h2>
      <div class=\"pageSub\">Recherche/filtre DB + CRUD + exports.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnPrimary\" href=\"{{ path('admin_user_create') }}\">+ Creer utilisateur</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_users_export', filters|merge({format: 'pdf'})) }}\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_users_export', filters|merge({format: 'excel'})) }}\">Exporter Excel</a>
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

  <section class=\"panel adminUsersStats\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">STATISTIQUES UTILISATEURS</h3>
      <span class=\"listMeta\">Liste courante: {{ stats.total }} utilisateur(s)</span>
    </div>

    <div class=\"kpiRow\">
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">Total</div>
        <div class=\"kpiValue\">{{ stats.total }}</div>
      </div>
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">Actifs</div>
        <div class=\"kpiValue\">{{ stats.active }}</div>
        <div class=\"listMeta\">Inactifs: {{ stats.inactive }}</div>
      </div>
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">Email verifies</div>
        <div class=\"kpiValue\">{{ stats.verified }}</div>
      </div>
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">2FA active</div>
        <div class=\"kpiValue\">{{ stats.twoFactor }}</div>
      </div>
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">Nouveaux (30j)</div>
        <div class=\"kpiValue\">{{ stats.newUsers30d }}</div>
      </div>
      <div class=\"kpiCard\">
        <div class=\"kpiLabel\">Connexions (7j)</div>
        <div class=\"kpiValue\">{{ stats.recentLogin7d }}</div>
      </div>
    </div>

    <div class=\"adminUsersStatsGrid\">
      <div class=\"adminUsersStatsBox\">
        <h4>Repartition par role</h4>
        <div class=\"adminUsersBars\">
          {% for role in stats.roles %}
            <div class=\"adminUsersBarRow\">
              <div class=\"adminUsersBarHead\">
                <span>{{ role.label }}</span>
                <span class=\"listMeta\">{{ role.count }} ({{ role.percent }}%)</span>
              </div>
              <div class=\"adminUsersBar\">
                <span style=\"width: {{ role.percent }}%\"></span>
              </div>
            </div>
          {% endfor %}
        </div>
      </div>

      <div class=\"adminUsersStatsBox\">
        <h4>Top pays</h4>
        <div class=\"adminUsersBars\">
          {% for country in stats.countries %}
            <div class=\"adminUsersBarRow\">
              <div class=\"adminUsersBarHead\">
                <span>{{ country.name }}</span>
                <span class=\"listMeta\">{{ country.count }} ({{ country.percent }}%)</span>
              </div>
              <div class=\"adminUsersBar\">
                <span style=\"width: {{ country.percent }}%\"></span>
              </div>
            </div>
          {% else %}
            <div class=\"listMeta\">Aucune donnee pays disponible.</div>
          {% endfor %}
        </div>
      </div>
    </div>
  </section>

  <form class=\"filtersBar\" method=\"get\" action=\"{{ path('admin_users') }}\">
    <input type=\"hidden\" name=\"sort\" value=\"{{ filters.sort|default('created_at') }}\" />
    <input type=\"hidden\" name=\"direction\" value=\"{{ filters.direction|default('desc') }}\" />
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"username, email, display name\" />
    </div>

    <div class=\"filterGroup\">
      <label>Role</label>
      <select name=\"role\">
        <option value=\"\">ALL</option>
        {% for role in roleOptions %}
          <option value=\"{{ role }}\" {{ filters.role == role ? 'selected' : '' }}>{{ role }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Actif</label>
      <select name=\"active\">
        <option value=\"\" {{ filters.active == '' ? 'selected' : '' }}>ALL</option>
        <option value=\"1\" {{ filters.active == '1' ? 'selected' : '' }}>Oui</option>
        <option value=\"0\" {{ filters.active == '0' ? 'selected' : '' }}>Non</option>
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Email verifie</label>
      <select name=\"verified\">
        <option value=\"\" {{ filters.verified == '' ? 'selected' : '' }}>ALL</option>
        <option value=\"1\" {{ filters.verified == '1' ? 'selected' : '' }}>Oui</option>
        <option value=\"0\" {{ filters.verified == '0' ? 'selected' : '' }}>Non</option>
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_users') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE</h3>
      <span class=\"listMeta\">{{ users|length }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Photo</th>
            <th>{{ sorter.sort_link('admin_users', filters, 'id', 'ID') }}</th>
            <th>{{ sorter.sort_link('admin_users', filters, 'username', 'Username') }}</th>
            <th>{{ sorter.sort_link('admin_users', filters, 'email', 'Email') }}</th>
            <th>{{ sorter.sort_link('admin_users', filters, 'role', 'Role') }}</th>
            <th>{{ sorter.sort_link('admin_users', filters, 'active', 'Actif') }}</th>
            <th>{{ sorter.sort_link('admin_users', filters, 'verified', 'Email verifie') }}</th>
            <th>{{ sorter.sort_link('admin_users', filters, 'country', 'Country') }}</th>
            <th>{{ sorter.sort_link('admin_users', filters, 'created_at', 'Created') }}</th>
            <th>{{ sorter.sort_link('admin_users', filters, 'last_login_at', 'Last login') }}</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for user in users %}
            {% set userId = user.userId ?? 0 %}
            <tr>
              <td>
                {% if user.profileImageId %}
                  <img src=\"{{ user.profileImageId.fileUrl starts with 'http' ? user.profileImageId.fileUrl : asset(user.profileImageId.fileUrl) }}\" alt=\"avatar\" style=\"width:28px;height:28px;border-radius:999px;object-fit:cover;\" />
                {% else %}
                  <span class=\"avatarSmall\">{{ user.username|slice(0, 1)|upper }}</span>
                {% endif %}
              </td>
              <td>#{{ userId }}</td>
              <td>{{ user.username }}</td>
              <td>{{ user.email }}</td>
              <td><span class=\"badge badge--info\">{{ user.role }}</span></td>
              <td>{{ user.isActive ? 'Oui' : 'Non' }}</td>
              <td>{{ user.emailVerified ? 'Oui' : 'Non' }}</td>
              <td>{{ user.country ?: '-' }}</td>
              <td>{{ user.createdAt ? user.createdAt|date('d/m/Y H:i') : '-' }}</td>
              <td>{{ user.lastLoginAt ? user.lastLoginAt|date('d/m/Y H:i') : '-' }}</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_user_detail', {id: userId}) }}\">Voir</a>
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_user_edit', {id: userId}) }}\">Update</a>
                  <form method=\"post\" action=\"{{ path('admin_user_delete', {id: userId}) }}\" onsubmit=\"return confirm('Supprimer cet utilisateur ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_user_' ~ userId) }}\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"11\" class=\"listMeta\">Aucun utilisateur trouve.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/users.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\users.html.twig");
    }
}
