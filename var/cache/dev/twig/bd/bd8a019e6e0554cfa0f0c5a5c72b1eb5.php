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

/* admin/index.html.twig */
class __TwigTemplate_61f0b5e99a672e13d04d68b3d1544883 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->load("admin/base_admin.html.twig", 1);
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

        yield "PULSE - Dashboard Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "  ";
        $context["kpi"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard"] ?? null), "kpi", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 6, $this->source); })()), "kpi", [], "any", false, false, false, 6), [])) : ([]));
        // line 7
        yield "  ";
        $context["lists"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard"] ?? null), "lists", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 7, $this->source); })()), "lists", [], "any", false, false, false, 7), [])) : ([]));
        // line 8
        yield "  ";
        $context["charts"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard"] ?? null), "charts", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 8, $this->source); })()), "charts", [], "any", false, false, false, 8), [])) : ([]));
        // line 9
        yield "
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "    <section class=\"panel\">
      <div class=\"badge badge--warning\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    </section>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
  <div class=\"pageHeader\">
    <div>
      <h2>Dashboard Admin</h2>
      <div class=\"pageSub\">Vue globale en temps reel basee sur la base de donnees.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">Reinitialiser</a>
      <a class=\"btn btnPrimary\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "query", [], "any", false, false, false, 23), "all", [], "any", false, false, false, 23)), "html", null, true);
        yield "\">Actualiser</a>
    </div>
  </div>

  <form class=\"filtersBar\" method=\"get\" action=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 30, $this->source); })()), "q", [], "any", false, false, false, 30), "html", null, true);
        yield "\" placeholder=\"username, email, order, tournoi...\" />
    </div>
    <div class=\"filterGroup\">
      <label>Periode</label>
      <select name=\"period\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 35, $this->source); })()), "periodOptions", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 36
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "period", [], "any", false, false, false, 36) == $context["value"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield " jours</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "      </select>
    </div>
    <div class=\"filterGroup\">
      <label>Commandes</label>
      <select name=\"orderStatus\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 43, $this->source); })()), "orderStatusOptions", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 44
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 44, $this->source); })()), "orderStatus", [], "any", false, false, false, 44) == $context["value"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "      </select>
    </div>
    <div class=\"filterGroup\">
      <label>Signalements</label>
      <select name=\"reportStatus\">
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "reportStatusOptions", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 52
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 52, $this->source); })()), "reportStatus", [], "any", false, false, false, 52) == $context["value"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "      </select>
    </div>
    <div class=\"filterGroup\">
      <label>Demandes tournoi</label>
      <select name=\"requestStatus\">
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 59, $this->source); })()), "requestStatusOptions", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 60
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 60, $this->source); })()), "requestStatus", [], "any", false, false, false, 60) == $context["value"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "      </select>
    </div>
    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Appliquer</button>
    </div>
  </form>

  <div class=\"kpiRow\">
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Total utilisateurs</div>
      <div class=\"kpiValue\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "totalUsers", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 72, $this->source); })()), "totalUsers", [], "any", false, false, false, 72), 0)) : (0)), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">+";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "newUsers", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 73, $this->source); })()), "newUsers", [], "any", false, false, false, 73), 0)) : (0)), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 73, $this->source); })()), "period", [], "any", false, false, false, 73), "html", null, true);
        yield " jours</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Commandes</div>
      <div class=\"kpiValue\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "ordersCount", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 77, $this->source); })()), "ordersCount", [], "any", false, false, false, 77), 0)) : (0)), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">En attente: ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "pendingOrders", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 78, $this->source); })()), "pendingOrders", [], "any", false, false, false, 78), 0)) : (0)), "html", null, true);
        yield "</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Chiffre d affaires</div>
      <div class=\"kpiValue\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "revenue", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 82, $this->source); })()), "revenue", [], "any", false, false, false, 82), 0)) : (0)), 2, ".", " "), "html", null, true);
        yield " DT</div>
      <div class=\"listMeta\">Paiements valides sur la periode</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Signalements ouverts</div>
      <div class=\"kpiValue\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "openReports", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 87, $this->source); })()), "openReports", [], "any", false, false, false, 87), 0)) : (0)), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">OPEN + IN_REVIEW</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Demandes tournois en attente</div>
      <div class=\"kpiValue\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "pendingRequests", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 92, $this->source); })()), "pendingRequests", [], "any", false, false, false, 92), 0)) : (0)), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">Statut PENDING</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Tournois en cours</div>
      <div class=\"kpiValue\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "ongoingTournaments", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 97, $this->source); })()), "ongoingTournaments", [], "any", false, false, false, 97), 0)) : (0)), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">Statut ONGOING</div>
    </div>
  </div>

  <div class=\"split\">
    <div class=\"chartGrid\">
      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Commandes par jour</h3>
          <span class=\"listMeta\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 107, $this->source); })()), "period", [], "any", false, false, false, 107), "html", null, true);
        yield " derniers jours</span>
        </div>
        <div class=\"chartWrap\">
          <canvas id=\"ordersByDayChart\"></canvas>
        </div>
      </section>
      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Repartition des statuts</h3>
          <span class=\"listMeta\">Commandes</span>
        </div>
        <div class=\"chartWrap chartWrap--sm\">
          <canvas id=\"ordersStatusChart\"></canvas>
        </div>
      </section>
      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Inscriptions par tournoi</h3>
          <span class=\"listMeta\">Top tournois</span>
        </div>
        <div class=\"chartWrap\">
          <canvas id=\"registrationsChart\"></canvas>
        </div>
      </section>
    </div>

    <div>
      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Dernieres commandes</h3>
          <a class=\"btn btnTiny\" href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\">Voir tout</a>
        </div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>Commande</th>
                <th>User</th>
                <th>Status</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["lists"] ?? null), "recentOrders", [], "any", true, true, false, 150)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new RuntimeError('Variable "lists" does not exist.', 150, $this->source); })()), "recentOrders", [], "any", false, false, false, 150), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 151
            yield "                <tr>
                  <td>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_number", [], "any", false, false, false, 152), "html", null, true);
            yield "</td>
                  <td>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "username", [], "any", false, false, false, 153), "html", null, true);
            yield "</td>
                  <td>
                    ";
            // line 155
            $context["orderBadge"] = ((((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 155) == "PAID") || (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 155) == "DELIVERED"))) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 155) == "PENDING")) ? ("badge--warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 155) == "CANCELLED")) ? ("badge--danger") : ("badge--info"))))));
            // line 156
            yield "                    <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["orderBadge"]) || array_key_exists("orderBadge", $context) ? $context["orderBadge"] : (function () { throw new RuntimeError('Variable "orderBadge" does not exist.', 156, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 156), "html", null, true);
            yield "</span>
                  </td>
                  <td>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total_amount", [], "any", false, false, false, 158), 2, ".", " "), "html", null, true);
            yield " DT</td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 160
        if (!$context['_iterated']) {
            // line 161
            yield "                <tr>
                  <td colspan=\"4\" class=\"listMeta\">Aucune commande sur cette periode.</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "            </tbody>
          </table>
        </div>
      </section>

      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Demandes tournois</h3>
          <a class=\"btn btnTiny\" href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_requests");
        yield "\">Voir tout</a>
        </div>
        <div class=\"list\">
          ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["lists"] ?? null), "recentRequests", [], "any", true, true, false, 176)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new RuntimeError('Variable "lists" does not exist.', 176, $this->source); })()), "recentRequests", [], "any", false, false, false, 176), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
            // line 177
            yield "            ";
            $context["requestBadge"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 177) == "ACCEPTED")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 177) == "REFUSED")) ? ("badge--danger") : ("badge--warning"))));
            // line 178
            yield "            <div class=\"listItem\">
              <span>
                #";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "request_id", [], "any", false, false, false, 180), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "title", [], "any", false, false, false, 180), "html", null, true);
            yield " <span class=\"listMeta\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "game_name", [], "any", false, false, false, 180), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "organizer_name", [], "any", false, false, false, 180), "html", null, true);
            yield ")</span>
              </span>
              <div class=\"formActions\">
                <a class=\"btn btnTiny\" href=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_request_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "request_id", [], "any", false, false, false, 183)]), "html", null, true);
            yield "\">Detail</a>
                ";
            // line 184
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 184) == "PENDING")) {
                // line 185
                yield "                  <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_request_review", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "request_id", [], "any", false, false, false, 185)]), "html", null, true);
                yield "\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("review_tournament_request_" . CoreExtension::getAttribute($this->env, $this->source, $context["request"], "request_id", [], "any", false, false, false, 186))), "html", null, true);
                yield "\" />
                    <input type=\"hidden\" name=\"decision\" value=\"ACCEPTED\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Accepter</button>
                  </form>
                  <form method=\"post\" action=\"";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_request_review", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "request_id", [], "any", false, false, false, 190)]), "html", null, true);
                yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Refuser cette demande ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("review_tournament_request_" . CoreExtension::getAttribute($this->env, $this->source, $context["request"], "request_id", [], "any", false, false, false, 191))), "html", null, true);
                yield "\" />
                    <input type=\"hidden\" name=\"decision\" value=\"REFUSED\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Refuser</button>
                  </form>
                ";
            } else {
                // line 196
                yield "                  <span class=\"badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["requestBadge"]) || array_key_exists("requestBadge", $context) ? $context["requestBadge"] : (function () { throw new RuntimeError('Variable "requestBadge" does not exist.', 196, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 196), "html", null, true);
                yield "</span>
                ";
            }
            // line 198
            yield "              </div>
            </div>
          ";
            $context['_iterated'] = true;
        }
        // line 200
        if (!$context['_iterated']) {
            // line 201
            yield "            <div class=\"listItem\">
              <span>Aucune demande recente</span>
              <span class=\"listMeta\">--</span>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['request'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "        </div>
      </section>

      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Derniers utilisateurs</h3>
          <a class=\"btn btnTiny\" href=\"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\">Voir tout</a>
        </div>
        <div class=\"list\">
          ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["lists"] ?? null), "recentUsers", [], "any", true, true, false, 215)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new RuntimeError('Variable "lists" does not exist.', 215, $this->source); })()), "recentUsers", [], "any", false, false, false, 215), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 216
            yield "            <div class=\"listItem\">
              <span>@";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 217), "html", null, true);
            yield "</span>
              <span class=\"listMeta\">";
            // line 218
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 218)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 218), "html", null, true)) : ("N/A"));
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 218), "html", null, true);
            yield "</span>
            </div>
          ";
            $context['_iterated'] = true;
        }
        // line 220
        if (!$context['_iterated']) {
            // line 221
            yield "            <div class=\"listItem\">
              <span>Aucun utilisateur</span>
              <span class=\"listMeta\">--</span>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        yield "        </div>
      </section>

      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Derniers signalements</h3>
          <a class=\"btn btnTiny\" href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reports");
        yield "\">Voir tout</a>
        </div>
        <div class=\"list\">
          ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["lists"] ?? null), "recentReports", [], "any", true, true, false, 235)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new RuntimeError('Variable "lists" does not exist.', 235, $this->source); })()), "recentReports", [], "any", false, false, false, 235), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 236
            yield "            ";
            $context["reportBadge"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "status", [], "any", false, false, false, 236) == "OPEN")) ? ("badge--danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "status", [], "any", false, false, false, 236) == "IN_REVIEW")) ? ("badge--warning") : ("badge--success"))));
            // line 237
            yield "            <div class=\"listItem\">
              <span>#";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "report_id", [], "any", false, false, false, 238), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "target_type", [], "any", false, false, false, 238), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "username", [], "any", false, false, false, 238), "html", null, true);
            yield "</span>
              <span class=\"badge ";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reportBadge"]) || array_key_exists("reportBadge", $context) ? $context["reportBadge"] : (function () { throw new RuntimeError('Variable "reportBadge" does not exist.', 239, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "status", [], "any", false, false, false, 239), "html", null, true);
            yield "</span>
            </div>
          ";
            $context['_iterated'] = true;
        }
        // line 241
        if (!$context['_iterated']) {
            // line 242
            yield "            <div class=\"listItem\">
              <span>Aucun signalement recent</span>
              <span class=\"listMeta\">--</span>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['report'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        yield "        </div>
      </section>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 254
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js\"></script>
  <script>
    (() => {
      if (typeof Chart === 'undefined') {
        return;
      }

      const charts = ";
        // line 262
        yield json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard"] ?? null), "charts", [], "any", true, true, false, 262)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 262, $this->source); })()), "charts", [], "any", false, false, false, 262), [])) : ([])));
        yield ";
      const textColor = 'rgba(255,255,255,.78)';
      const gridColor = 'rgba(255,255,255,.10)';

      const ordersByDayCtx = document.getElementById('ordersByDayChart');
      if (ordersByDayCtx && charts.ordersByDay) {
        new Chart(ordersByDayCtx, {
          type: 'line',
          data: {
            labels: charts.ordersByDay.labels || [],
            datasets: [{
              label: 'Commandes',
              data: charts.ordersByDay.data || [],
              borderColor: '#ff9d2e',
              backgroundColor: 'rgba(255,157,46,.22)',
              tension: 0.35,
              fill: true,
              pointRadius: 3,
              pointHoverRadius: 5,
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { labels: { color: textColor } }
            },
            scales: {
              x: { ticks: { color: textColor }, grid: { color: gridColor } },
              y: { ticks: { color: textColor, precision: 0 }, grid: { color: gridColor } }
            }
          }
        });
      }

      const ordersStatusCtx = document.getElementById('ordersStatusChart');
      if (ordersStatusCtx && charts.orderStatuses) {
        new Chart(ordersStatusCtx, {
          type: 'doughnut',
          data: {
            labels: charts.orderStatuses.labels || [],
            datasets: [{
              data: charts.orderStatuses.data || [],
              backgroundColor: ['#ff9d2e', '#20d4a8', '#ff6b6b', '#4da3ff', '#9d87ff', '#ffd166'],
              borderColor: 'rgba(16,14,24,.95)',
              borderWidth: 2
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                position: 'bottom',
                labels: { color: textColor, boxWidth: 10, boxHeight: 10 }
              }
            }
          }
        });
      }

      const registrationsCtx = document.getElementById('registrationsChart');
      if (registrationsCtx && charts.registrationsByTournament) {
        new Chart(registrationsCtx, {
          type: 'bar',
          data: {
            labels: charts.registrationsByTournament.labels || [],
            datasets: [{
              label: 'Inscriptions',
              data: charts.registrationsByTournament.data || [],
              backgroundColor: 'rgba(255,157,46,.45)',
              borderColor: '#ff9d2e',
              borderWidth: 1.5,
              borderRadius: 8
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { labels: { color: textColor } }
            },
            scales: {
              x: { ticks: { color: textColor }, grid: { color: gridColor } },
              y: { ticks: { color: textColor, precision: 0 }, grid: { color: gridColor } }
            }
          }
        });
      }
    })();
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/index.html.twig";
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
        return array (  656 => 262,  644 => 254,  631 => 253,  616 => 247,  606 => 242,  604 => 241,  595 => 239,  587 => 238,  584 => 237,  581 => 236,  576 => 235,  570 => 232,  562 => 226,  552 => 221,  550 => 220,  541 => 218,  537 => 217,  534 => 216,  529 => 215,  523 => 212,  515 => 206,  505 => 201,  503 => 200,  497 => 198,  489 => 196,  481 => 191,  477 => 190,  470 => 186,  465 => 185,  463 => 184,  459 => 183,  447 => 180,  443 => 178,  440 => 177,  435 => 176,  429 => 173,  419 => 165,  410 => 161,  408 => 160,  401 => 158,  393 => 156,  391 => 155,  386 => 153,  382 => 152,  379 => 151,  374 => 150,  358 => 137,  325 => 107,  312 => 97,  304 => 92,  296 => 87,  288 => 82,  281 => 78,  277 => 77,  268 => 73,  264 => 72,  252 => 62,  239 => 60,  235 => 59,  228 => 54,  215 => 52,  211 => 51,  204 => 46,  191 => 44,  187 => 43,  180 => 38,  167 => 36,  163 => 35,  155 => 30,  149 => 27,  142 => 23,  138 => 22,  129 => 15,  120 => 12,  117 => 11,  113 => 10,  110 => 9,  107 => 8,  104 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Dashboard Admin{% endblock %}

{% block admin_content %}
  {% set kpi = dashboard.kpi|default({}) %}
  {% set lists = dashboard.lists|default({}) %}
  {% set charts = dashboard.charts|default({}) %}

  {% for message in app.flashes('warning') %}
    <section class=\"panel\">
      <div class=\"badge badge--warning\">{{ message }}</div>
    </section>
  {% endfor %}

  <div class=\"pageHeader\">
    <div>
      <h2>Dashboard Admin</h2>
      <div class=\"pageSub\">Vue globale en temps reel basee sur la base de donnees.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_dashboard') }}\">Reinitialiser</a>
      <a class=\"btn btnPrimary\" href=\"{{ path('admin_dashboard', app.request.query.all) }}\">Actualiser</a>
    </div>
  </div>

  <form class=\"filtersBar\" method=\"get\" action=\"{{ path('admin_dashboard') }}\">
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"username, email, order, tournoi...\" />
    </div>
    <div class=\"filterGroup\">
      <label>Periode</label>
      <select name=\"period\">
        {% for value in filters.periodOptions %}
          <option value=\"{{ value }}\" {{ filters.period == value ? 'selected' : '' }}>{{ value }} jours</option>
        {% endfor %}
      </select>
    </div>
    <div class=\"filterGroup\">
      <label>Commandes</label>
      <select name=\"orderStatus\">
        {% for value in filters.orderStatusOptions %}
          <option value=\"{{ value }}\" {{ filters.orderStatus == value ? 'selected' : '' }}>{{ value }}</option>
        {% endfor %}
      </select>
    </div>
    <div class=\"filterGroup\">
      <label>Signalements</label>
      <select name=\"reportStatus\">
        {% for value in filters.reportStatusOptions %}
          <option value=\"{{ value }}\" {{ filters.reportStatus == value ? 'selected' : '' }}>{{ value }}</option>
        {% endfor %}
      </select>
    </div>
    <div class=\"filterGroup\">
      <label>Demandes tournoi</label>
      <select name=\"requestStatus\">
        {% for value in filters.requestStatusOptions %}
          <option value=\"{{ value }}\" {{ filters.requestStatus == value ? 'selected' : '' }}>{{ value }}</option>
        {% endfor %}
      </select>
    </div>
    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Appliquer</button>
    </div>
  </form>

  <div class=\"kpiRow\">
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Total utilisateurs</div>
      <div class=\"kpiValue\">{{ kpi.totalUsers|default(0) }}</div>
      <div class=\"listMeta\">+{{ kpi.newUsers|default(0) }} sur {{ filters.period }} jours</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Commandes</div>
      <div class=\"kpiValue\">{{ kpi.ordersCount|default(0) }}</div>
      <div class=\"listMeta\">En attente: {{ kpi.pendingOrders|default(0) }}</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Chiffre d affaires</div>
      <div class=\"kpiValue\">{{ kpi.revenue|default(0)|number_format(2, '.', ' ') }} DT</div>
      <div class=\"listMeta\">Paiements valides sur la periode</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Signalements ouverts</div>
      <div class=\"kpiValue\">{{ kpi.openReports|default(0) }}</div>
      <div class=\"listMeta\">OPEN + IN_REVIEW</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Demandes tournois en attente</div>
      <div class=\"kpiValue\">{{ kpi.pendingRequests|default(0) }}</div>
      <div class=\"listMeta\">Statut PENDING</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Tournois en cours</div>
      <div class=\"kpiValue\">{{ kpi.ongoingTournaments|default(0) }}</div>
      <div class=\"listMeta\">Statut ONGOING</div>
    </div>
  </div>

  <div class=\"split\">
    <div class=\"chartGrid\">
      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Commandes par jour</h3>
          <span class=\"listMeta\">{{ filters.period }} derniers jours</span>
        </div>
        <div class=\"chartWrap\">
          <canvas id=\"ordersByDayChart\"></canvas>
        </div>
      </section>
      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Repartition des statuts</h3>
          <span class=\"listMeta\">Commandes</span>
        </div>
        <div class=\"chartWrap chartWrap--sm\">
          <canvas id=\"ordersStatusChart\"></canvas>
        </div>
      </section>
      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Inscriptions par tournoi</h3>
          <span class=\"listMeta\">Top tournois</span>
        </div>
        <div class=\"chartWrap\">
          <canvas id=\"registrationsChart\"></canvas>
        </div>
      </section>
    </div>

    <div>
      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Dernieres commandes</h3>
          <a class=\"btn btnTiny\" href=\"{{ path('admin_orders') }}\">Voir tout</a>
        </div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>Commande</th>
                <th>User</th>
                <th>Status</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              {% for order in lists.recentOrders|default([]) %}
                <tr>
                  <td>{{ order.order_number }}</td>
                  <td>{{ order.username }}</td>
                  <td>
                    {% set orderBadge = order.status == 'PAID' or order.status == 'DELIVERED' ? 'badge--success' : (order.status == 'PENDING' ? 'badge--warning' : (order.status == 'CANCELLED' ? 'badge--danger' : 'badge--info')) %}
                    <span class=\"badge {{ orderBadge }}\">{{ order.status }}</span>
                  </td>
                  <td>{{ order.total_amount|number_format(2, '.', ' ') }} DT</td>
                </tr>
              {% else %}
                <tr>
                  <td colspan=\"4\" class=\"listMeta\">Aucune commande sur cette periode.</td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>

      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Demandes tournois</h3>
          <a class=\"btn btnTiny\" href=\"{{ path('admin_tournament_requests') }}\">Voir tout</a>
        </div>
        <div class=\"list\">
          {% for request in lists.recentRequests|default([]) %}
            {% set requestBadge = request.status == 'ACCEPTED' ? 'badge--success' : (request.status == 'REFUSED' ? 'badge--danger' : 'badge--warning') %}
            <div class=\"listItem\">
              <span>
                #{{ request.request_id }} - {{ request.title }} <span class=\"listMeta\">({{ request.game_name }} - {{ request.organizer_name }})</span>
              </span>
              <div class=\"formActions\">
                <a class=\"btn btnTiny\" href=\"{{ path('admin_tournament_request_detail', {id: request.request_id}) }}\">Detail</a>
                {% if request.status == 'PENDING' %}
                  <form method=\"post\" action=\"{{ path('admin_tournament_request_review', {id: request.request_id}) }}\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('review_tournament_request_' ~ request.request_id) }}\" />
                    <input type=\"hidden\" name=\"decision\" value=\"ACCEPTED\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Accepter</button>
                  </form>
                  <form method=\"post\" action=\"{{ path('admin_tournament_request_review', {id: request.request_id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Refuser cette demande ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('review_tournament_request_' ~ request.request_id) }}\" />
                    <input type=\"hidden\" name=\"decision\" value=\"REFUSED\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Refuser</button>
                  </form>
                {% else %}
                  <span class=\"badge {{ requestBadge }}\">{{ request.status }}</span>
                {% endif %}
              </div>
            </div>
          {% else %}
            <div class=\"listItem\">
              <span>Aucune demande recente</span>
              <span class=\"listMeta\">--</span>
            </div>
          {% endfor %}
        </div>
      </section>

      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Derniers utilisateurs</h3>
          <a class=\"btn btnTiny\" href=\"{{ path('admin_users') }}\">Voir tout</a>
        </div>
        <div class=\"list\">
          {% for user in lists.recentUsers|default([]) %}
            <div class=\"listItem\">
              <span>@{{ user.username }}</span>
              <span class=\"listMeta\">{{ user.country ?: 'N/A' }} - {{ user.role }}</span>
            </div>
          {% else %}
            <div class=\"listItem\">
              <span>Aucun utilisateur</span>
              <span class=\"listMeta\">--</span>
            </div>
          {% endfor %}
        </div>
      </section>

      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Derniers signalements</h3>
          <a class=\"btn btnTiny\" href=\"{{ path('admin_reports') }}\">Voir tout</a>
        </div>
        <div class=\"list\">
          {% for report in lists.recentReports|default([]) %}
            {% set reportBadge = report.status == 'OPEN' ? 'badge--danger' : (report.status == 'IN_REVIEW' ? 'badge--warning' : 'badge--success') %}
            <div class=\"listItem\">
              <span>#{{ report.report_id }} - {{ report.target_type }} - {{ report.username }}</span>
              <span class=\"badge {{ reportBadge }}\">{{ report.status }}</span>
            </div>
          {% else %}
            <div class=\"listItem\">
              <span>Aucun signalement recent</span>
              <span class=\"listMeta\">--</span>
            </div>
          {% endfor %}
        </div>
      </section>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js\"></script>
  <script>
    (() => {
      if (typeof Chart === 'undefined') {
        return;
      }

      const charts = {{ dashboard.charts|default({})|json_encode|raw }};
      const textColor = 'rgba(255,255,255,.78)';
      const gridColor = 'rgba(255,255,255,.10)';

      const ordersByDayCtx = document.getElementById('ordersByDayChart');
      if (ordersByDayCtx && charts.ordersByDay) {
        new Chart(ordersByDayCtx, {
          type: 'line',
          data: {
            labels: charts.ordersByDay.labels || [],
            datasets: [{
              label: 'Commandes',
              data: charts.ordersByDay.data || [],
              borderColor: '#ff9d2e',
              backgroundColor: 'rgba(255,157,46,.22)',
              tension: 0.35,
              fill: true,
              pointRadius: 3,
              pointHoverRadius: 5,
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { labels: { color: textColor } }
            },
            scales: {
              x: { ticks: { color: textColor }, grid: { color: gridColor } },
              y: { ticks: { color: textColor, precision: 0 }, grid: { color: gridColor } }
            }
          }
        });
      }

      const ordersStatusCtx = document.getElementById('ordersStatusChart');
      if (ordersStatusCtx && charts.orderStatuses) {
        new Chart(ordersStatusCtx, {
          type: 'doughnut',
          data: {
            labels: charts.orderStatuses.labels || [],
            datasets: [{
              data: charts.orderStatuses.data || [],
              backgroundColor: ['#ff9d2e', '#20d4a8', '#ff6b6b', '#4da3ff', '#9d87ff', '#ffd166'],
              borderColor: 'rgba(16,14,24,.95)',
              borderWidth: 2
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                position: 'bottom',
                labels: { color: textColor, boxWidth: 10, boxHeight: 10 }
              }
            }
          }
        });
      }

      const registrationsCtx = document.getElementById('registrationsChart');
      if (registrationsCtx && charts.registrationsByTournament) {
        new Chart(registrationsCtx, {
          type: 'bar',
          data: {
            labels: charts.registrationsByTournament.labels || [],
            datasets: [{
              label: 'Inscriptions',
              data: charts.registrationsByTournament.data || [],
              backgroundColor: 'rgba(255,157,46,.45)',
              borderColor: '#ff9d2e',
              borderWidth: 1.5,
              borderRadius: 8
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { labels: { color: textColor } }
            },
            scales: {
              x: { ticks: { color: textColor }, grid: { color: gridColor } },
              y: { ticks: { color: textColor, precision: 0 }, grid: { color: gridColor } }
            }
          }
        });
      }
    })();
  </script>
{% endblock %}
", "admin/index.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\admin\\index.html.twig");
    }
}
