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
class __TwigTemplate_df610bd1eaee5b71c2ac5088a13241be extends Template
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
        yield "  ";
        $context["stats"] = ((array_key_exists("userStats", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 19, $this->source); })()), [])) : ([]));
        // line 20
        yield "  ";
        $context["charts"] = ((array_key_exists("userCharts", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["userCharts"]) || array_key_exists("userCharts", $context) ? $context["userCharts"] : (function () { throw new RuntimeError('Variable "userCharts" does not exist.', 20, $this->source); })()), [])) : ([]));
        // line 21
        yield "
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion utilisateurs</h2>
      <div class=\"pageSub\">Recherche/filtre DB + CRUD + exports.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnPrimary\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_create");
        yield "\">+ Creer utilisateur</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), ["format" => "pdf"])), "html", null, true);
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 30, $this->source); })()), ["format" => "excel"])), "html", null, true);
        yield "\">Exporter Excel</a>
    </div>
  </div>

  <div class=\"kpiRow\">
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Utilisateurs affiches</div>
      <div class=\"kpiValue\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 37, $this->source); })()), "total", [], "any", false, false, false, 37), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 37, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 37, $this->source); })())))), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">Apres filtres en cours</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Actifs</div>
      <div class=\"kpiValue\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 42, $this->source); })()), "active", [], "any", false, false, false, 42), 0)) : (0)), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">Inactifs: ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inactive", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 43, $this->source); })()), "inactive", [], "any", false, false, false, 43), 0)) : (0)), "html", null, true);
        yield "</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Emails verifies</div>
      <div class=\"kpiValue\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "verified", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 47, $this->source); })()), "verified", [], "any", false, false, false, 47), 0)) : (0)), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">Non verifies: ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "unverified", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 48, $this->source); })()), "unverified", [], "any", false, false, false, 48), 0)) : (0)), "html", null, true);
        yield "</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Nouveaux comptes</div>
      <div class=\"kpiValue\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "newLast30d", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 52, $this->source); })()), "newLast30d", [], "any", false, false, false, 52), 0)) : (0)), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">Derniers 30 jours: ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "newLast7d", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 53, $this->source); })()), "newLast7d", [], "any", false, false, false, 53), 0)) : (0)), "html", null, true);
        yield " sur 7 jours</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Connexions recentes</div>
      <div class=\"kpiValue\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "loggedLast7d", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 57, $this->source); })()), "loggedLast7d", [], "any", false, false, false, 57), 0)) : (0)), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">Jamais connectes: ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "neverLoggedIn", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "neverLoggedIn", [], "any", false, false, false, 58), 0)) : (0)), "html", null, true);
        yield "</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Pays distincts</div>
      <div class=\"kpiValue\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "countriesCount", [], "any", true, true, false, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 62, $this->source); })()), "countriesCount", [], "any", false, false, false, 62), 0)) : (0)), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">Sur la selection affichee</div>
    </div>
  </div>

  <div class=\"chartGrid\">
    <section class=\"panel\">
      <div class=\"panelHeader\">
        <h3 class=\"panelTitle\">Inscriptions utilisateurs</h3>
        <span class=\"listMeta\">Evolution sur 6 mois</span>
      </div>
      <div class=\"chartWrap\">
        <canvas id=\"usersRegistrationsChart\"></canvas>
      </div>
    </section>

    <section class=\"panel\">
      <div class=\"panelHeader\">
        <h3 class=\"panelTitle\">Repartition des roles</h3>
        <span class=\"listMeta\">Selection courante</span>
      </div>
      <div class=\"chartWrap chartWrap--sm\">
        <canvas id=\"usersRolesChart\"></canvas>
      </div>
    </section>

    <section class=\"panel\">
      <div class=\"panelHeader\">
        <h3 class=\"panelTitle\">Comportement de connexion</h3>
        <span class=\"listMeta\">Delai depuis la derniere connexion</span>
      </div>
      <div class=\"split\">
        <div class=\"chartWrap chartWrap--sm\">
          <canvas id=\"usersLoginsChart\"></canvas>
        </div>
        <div>
          <div class=\"panelHeader\">
            <h4 class=\"panelTitle\">Top pays</h4>
          </div>
          <div class=\"list\">
            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "topCountries", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 102, $this->source); })()), "topCountries", [], "any", false, false, false, 102), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 103
            yield "              ";
            $context["topCount"] = ((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "topCountries", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 103, $this->source); })()), "topCountries", [], "any", false, false, false, 103), [])) : ([]))), "count", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "topCountries", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 103, $this->source); })()), "topCountries", [], "any", false, false, false, 103), [])) : ([]))), "count", [], "any", false, false, false, 103), 0)) : (0));
            // line 104
            yield "              ";
            $context["percent"] = ((((isset($context["topCount"]) || array_key_exists("topCount", $context) ? $context["topCount"] : (function () { throw new RuntimeError('Variable "topCount" does not exist.', 104, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "count", [], "any", false, false, false, 104) / (isset($context["topCount"]) || array_key_exists("topCount", $context) ? $context["topCount"] : (function () { throw new RuntimeError('Variable "topCount" does not exist.', 104, $this->source); })())) * 100), 0, "floor")) : (0));
            // line 105
            yield "              <div class=\"listItem\">
                <span>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 106), "html", null, true);
            yield "</span>
                <span class=\"listMeta\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["country"], "count", [], "any", false, false, false, 107), "html", null, true);
            yield "</span>
              </div>
              <div class=\"progressBar\" style=\"margin-top:-4px; margin-bottom:8px;\">
                <div class=\"progressFill\" style=\"width:";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 110, $this->source); })()), "html", null, true);
            yield "%;\"></div>
              </div>
            ";
            $context['_iterated'] = true;
        }
        // line 112
        if (!$context['_iterated']) {
            // line 113
            yield "              <div class=\"listItem\">
                <span>Aucune donnee pays</span>
                <span class=\"listMeta\">--</span>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "          </div>

          <div class=\"progressWrap\">
            <div class=\"progressLabel\">
              <span>Taux actifs</span>
              <strong>";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "activeRate", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 123, $this->source); })()), "activeRate", [], "any", false, false, false, 123), 0)) : (0)), "html", null, true);
        yield "%</strong>
            </div>
            <div class=\"progressBar\">
              <div class=\"progressFill\" style=\"width:";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "activeRate", [], "any", true, true, false, 126)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 126, $this->source); })()), "activeRate", [], "any", false, false, false, 126), 0)) : (0)), "html", null, true);
        yield "%;\"></div>
            </div>
          </div>
          <div class=\"progressWrap\">
            <div class=\"progressLabel\">
              <span>Taux verifies</span>
              <strong>";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "verifiedRate", [], "any", true, true, false, 132)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 132, $this->source); })()), "verifiedRate", [], "any", false, false, false, 132), 0)) : (0)), "html", null, true);
        yield "%</strong>
            </div>
            <div class=\"progressBar\">
              <div class=\"progressFill\" style=\"width:";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "verifiedRate", [], "any", true, true, false, 135)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 135, $this->source); })()), "verifiedRate", [], "any", false, false, false, 135), 0)) : (0)), "html", null, true);
        yield "%; background: linear-gradient(90deg, rgba(48, 216, 135, 1), rgba(24, 178, 110, 1)); box-shadow: 0 0 16px rgba(48, 216, 135, .35);\"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "flashes", [], "any", false, false, false, 143));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 144
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 145
                yield "      <div class=\"listItem\">
        <span>";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 147
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
            // line 150
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "
  <form class=\"filtersBar\" method=\"get\" action=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 153)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 153, $this->source); })()), "sort", [], "any", false, false, false, 153), "created_at")) : ("created_at")), "html", null, true);
        yield "\" />
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 154)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 154, $this->source); })()), "direction", [], "any", false, false, false, 154), "desc")) : ("desc")), "html", null, true);
        yield "\" />
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 157, $this->source); })()), "q", [], "any", false, false, false, 157), "html", null, true);
        yield "\" placeholder=\"username, email, display name\" />
    </div>

    <div class=\"filterGroup\">
      <label>Role</label>
      <select name=\"role\">
        <option value=\"\">ALL</option>
        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roleOptions"]) || array_key_exists("roleOptions", $context) ? $context["roleOptions"] : (function () { throw new RuntimeError('Variable "roleOptions" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 165
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 165, $this->source); })()), "role", [], "any", false, false, false, 165) == $context["role"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Actif</label>
      <select name=\"active\">
        <option value=\"\" ";
        // line 173
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 173, $this->source); })()), "active", [], "any", false, false, false, 173) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        <option value=\"1\" ";
        // line 174
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 174, $this->source); })()), "active", [], "any", false, false, false, 174) == "1")) ? ("selected") : (""));
        yield ">Oui</option>
        <option value=\"0\" ";
        // line 175
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 175, $this->source); })()), "active", [], "any", false, false, false, 175) == "0")) ? ("selected") : (""));
        yield ">Non</option>
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Email verifie</label>
      <select name=\"verified\">
        <option value=\"\" ";
        // line 182
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 182, $this->source); })()), "verified", [], "any", false, false, false, 182) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        <option value=\"1\" ";
        // line 183
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 183, $this->source); })()), "verified", [], "any", false, false, false, 183) == "1")) ? ("selected") : (""));
        yield ">Oui</option>
        <option value=\"0\" ";
        // line 184
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 184, $this->source); })()), "verified", [], "any", false, false, false, 184) == "0")) ? ("selected") : (""));
        yield ">Non</option>
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE</h3>
      <span class=\"listMeta\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 197, $this->source); })())), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Photo</th>
            <th>";
        // line 205
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 205, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 205, $this->source); })()), "id", "ID"]);
        yield "</th>
            <th>";
        // line 206
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 206, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 206, $this->source); })()), "username", "Username"]);
        yield "</th>
            <th>";
        // line 207
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 207, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 207, $this->source); })()), "email", "Email"]);
        yield "</th>
            <th>";
        // line 208
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 208, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 208, $this->source); })()), "role", "Role"]);
        yield "</th>
            <th>";
        // line 209
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 209, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 209, $this->source); })()), "active", "Actif"]);
        yield "</th>
            <th>";
        // line 210
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 210, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 210, $this->source); })()), "verified", "Email verifie"]);
        yield "</th>
            <th>";
        // line 211
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 211, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 211, $this->source); })()), "country", "Country"]);
        yield "</th>
            <th>";
        // line 212
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 212, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 212, $this->source); })()), "created_at", "Created"]);
        yield "</th>
            <th>";
        // line 213
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 213, $this->getSourceContext())->macro_sort_link(...["admin_users", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 213, $this->source); })()), "last_login_at", "Last login"]);
        yield "</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 218, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 219
            yield "            ";
            $context["userId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", true, true, false, 219) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 219)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 219)) : (0));
            // line 220
            yield "            <tr>
              <td>
                ";
            // line 222
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profileImageId", [], "any", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 223
                yield "                  <img src=\"";
                yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profileImageId", [], "any", false, false, false, 223), "fileUrl", [], "any", false, false, false, 223)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profileImageId", [], "any", false, false, false, 223), "fileUrl", [], "any", false, false, false, 223), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profileImageId", [], "any", false, false, false, 223), "fileUrl", [], "any", false, false, false, 223)), "html", null, true)));
                yield "\" alt=\"avatar\" style=\"width:28px;height:28px;border-radius:999px;object-fit:cover;\" />
                ";
            } else {
                // line 225
                yield "                  <span class=\"avatarSmall\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 225), 0, 1)), "html", null, true);
                yield "</span>
                ";
            }
            // line 227
            yield "              </td>
              <td>#";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 228, $this->source); })()), "html", null, true);
            yield "</td>
              <td>";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 229), "html", null, true);
            yield "</td>
              <td>";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 230), "html", null, true);
            yield "</td>
              <td><span class=\"badge badge--info\">";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 231), "html", null, true);
            yield "</span></td>
              <td>";
            // line 232
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 232)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
              <td>";
            // line 233
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "emailVerified", [], "any", false, false, false, 233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
              <td>";
            // line 234
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 234)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 234), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 235
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 235)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 235), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 236
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLoginAt", [], "any", false, false, false, 236)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLoginAt", [], "any", false, false, false, 236), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_detail", ["id" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 239, $this->source); })())]), "html", null, true);
            yield "\">Voir</a>
                  <a class=\"btn btnTiny\" href=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 240, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 241, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer cet utilisateur ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_user_" . (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 242, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 248
        if (!$context['_iterated']) {
            // line 249
            yield "            <tr>
              <td colspan=\"11\" class=\"listMeta\">Aucun utilisateur trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        yield "        </tbody>
      </table>
    </div>
  </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 259
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

        // line 260
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
        // line 268
        yield json_encode(((array_key_exists("userCharts", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["userCharts"]) || array_key_exists("userCharts", $context) ? $context["userCharts"] : (function () { throw new RuntimeError('Variable "userCharts" does not exist.', 268, $this->source); })()), [])) : ([])));
        yield ";
      const textColor = 'rgba(255,255,255,.78)';
      const gridColor = 'rgba(255,255,255,.10)';

      const registrationsCtx = document.getElementById('usersRegistrationsChart');
      if (registrationsCtx && charts.registrationsByMonth) {
        new Chart(registrationsCtx, {
          type: 'line',
          data: {
            labels: charts.registrationsByMonth.labels || [],
            datasets: [{
              label: 'Nouveaux utilisateurs',
              data: charts.registrationsByMonth.data || [],
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

      const rolesCtx = document.getElementById('usersRolesChart');
      if (rolesCtx && charts.roles) {
        new Chart(rolesCtx, {
          type: 'doughnut',
          data: {
            labels: charts.roles.labels || [],
            datasets: [{
              data: charts.roles.data || [],
              backgroundColor: ['#20d4a8', '#4da3ff', '#ffd166', '#ff6b6b'],
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

      const loginsCtx = document.getElementById('usersLoginsChart');
      if (loginsCtx && charts.lastLoginBuckets) {
        new Chart(loginsCtx, {
          type: 'bar',
          data: {
            labels: charts.lastLoginBuckets.labels || [],
            datasets: [{
              label: 'Utilisateurs',
              data: charts.lastLoginBuckets.data || [],
              backgroundColor: ['rgba(32,212,168,.45)', 'rgba(77,163,255,.45)', 'rgba(255,209,102,.45)', 'rgba(255,107,107,.45)'],
              borderColor: ['#20d4a8', '#4da3ff', '#ffd166', '#ff6b6b'],
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
        return array (  780 => 10,  775 => 9,  772 => 8,  769 => 7,  766 => 6,  763 => 5,  760 => 4,  739 => 3,  636 => 268,  624 => 260,  611 => 259,  596 => 253,  587 => 249,  585 => 248,  574 => 242,  570 => 241,  566 => 240,  562 => 239,  556 => 236,  552 => 235,  548 => 234,  544 => 233,  540 => 232,  536 => 231,  532 => 230,  528 => 229,  524 => 228,  521 => 227,  515 => 225,  509 => 223,  507 => 222,  503 => 220,  500 => 219,  495 => 218,  487 => 213,  483 => 212,  479 => 211,  475 => 210,  471 => 209,  467 => 208,  463 => 207,  459 => 206,  455 => 205,  444 => 197,  434 => 190,  425 => 184,  421 => 183,  417 => 182,  407 => 175,  403 => 174,  399 => 173,  391 => 167,  378 => 165,  374 => 164,  364 => 157,  358 => 154,  354 => 153,  350 => 152,  347 => 151,  341 => 150,  330 => 147,  326 => 146,  323 => 145,  318 => 144,  314 => 143,  303 => 135,  297 => 132,  288 => 126,  282 => 123,  275 => 118,  265 => 113,  263 => 112,  256 => 110,  250 => 107,  246 => 106,  243 => 105,  240 => 104,  237 => 103,  232 => 102,  189 => 62,  182 => 58,  178 => 57,  171 => 53,  167 => 52,  160 => 48,  156 => 47,  149 => 43,  145 => 42,  137 => 37,  127 => 30,  123 => 29,  119 => 28,  110 => 21,  107 => 20,  104 => 19,  91 => 18,  68 => 16,  57 => 1,  55 => 14,  42 => 1,);
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
  {% set stats = userStats|default({}) %}
  {% set charts = userCharts|default({}) %}

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

  <div class=\"kpiRow\">
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Utilisateurs affiches</div>
      <div class=\"kpiValue\">{{ stats.total|default(users|length) }}</div>
      <div class=\"listMeta\">Apres filtres en cours</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Actifs</div>
      <div class=\"kpiValue\">{{ stats.active|default(0) }}</div>
      <div class=\"listMeta\">Inactifs: {{ stats.inactive|default(0) }}</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Emails verifies</div>
      <div class=\"kpiValue\">{{ stats.verified|default(0) }}</div>
      <div class=\"listMeta\">Non verifies: {{ stats.unverified|default(0) }}</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Nouveaux comptes</div>
      <div class=\"kpiValue\">{{ stats.newLast30d|default(0) }}</div>
      <div class=\"listMeta\">Derniers 30 jours: {{ stats.newLast7d|default(0) }} sur 7 jours</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Connexions recentes</div>
      <div class=\"kpiValue\">{{ stats.loggedLast7d|default(0) }}</div>
      <div class=\"listMeta\">Jamais connectes: {{ stats.neverLoggedIn|default(0) }}</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Pays distincts</div>
      <div class=\"kpiValue\">{{ stats.countriesCount|default(0) }}</div>
      <div class=\"listMeta\">Sur la selection affichee</div>
    </div>
  </div>

  <div class=\"chartGrid\">
    <section class=\"panel\">
      <div class=\"panelHeader\">
        <h3 class=\"panelTitle\">Inscriptions utilisateurs</h3>
        <span class=\"listMeta\">Evolution sur 6 mois</span>
      </div>
      <div class=\"chartWrap\">
        <canvas id=\"usersRegistrationsChart\"></canvas>
      </div>
    </section>

    <section class=\"panel\">
      <div class=\"panelHeader\">
        <h3 class=\"panelTitle\">Repartition des roles</h3>
        <span class=\"listMeta\">Selection courante</span>
      </div>
      <div class=\"chartWrap chartWrap--sm\">
        <canvas id=\"usersRolesChart\"></canvas>
      </div>
    </section>

    <section class=\"panel\">
      <div class=\"panelHeader\">
        <h3 class=\"panelTitle\">Comportement de connexion</h3>
        <span class=\"listMeta\">Delai depuis la derniere connexion</span>
      </div>
      <div class=\"split\">
        <div class=\"chartWrap chartWrap--sm\">
          <canvas id=\"usersLoginsChart\"></canvas>
        </div>
        <div>
          <div class=\"panelHeader\">
            <h4 class=\"panelTitle\">Top pays</h4>
          </div>
          <div class=\"list\">
            {% for country in stats.topCountries|default([]) %}
              {% set topCount = (stats.topCountries|default([])|first).count|default(0) %}
              {% set percent = topCount > 0 ? (country.count / topCount * 100)|round(0, 'floor') : 0 %}
              <div class=\"listItem\">
                <span>{{ country.name }}</span>
                <span class=\"listMeta\">{{ country.count }}</span>
              </div>
              <div class=\"progressBar\" style=\"margin-top:-4px; margin-bottom:8px;\">
                <div class=\"progressFill\" style=\"width:{{ percent }}%;\"></div>
              </div>
            {% else %}
              <div class=\"listItem\">
                <span>Aucune donnee pays</span>
                <span class=\"listMeta\">--</span>
              </div>
            {% endfor %}
          </div>

          <div class=\"progressWrap\">
            <div class=\"progressLabel\">
              <span>Taux actifs</span>
              <strong>{{ stats.activeRate|default(0) }}%</strong>
            </div>
            <div class=\"progressBar\">
              <div class=\"progressFill\" style=\"width:{{ stats.activeRate|default(0) }}%;\"></div>
            </div>
          </div>
          <div class=\"progressWrap\">
            <div class=\"progressLabel\">
              <span>Taux verifies</span>
              <strong>{{ stats.verifiedRate|default(0) }}%</strong>
            </div>
            <div class=\"progressBar\">
              <div class=\"progressFill\" style=\"width:{{ stats.verifiedRate|default(0) }}%; background: linear-gradient(90deg, rgba(48, 216, 135, 1), rgba(24, 178, 110, 1)); box-shadow: 0 0 16px rgba(48, 216, 135, .35);\"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  {% for label, messages in app.flashes %}
    {% for message in messages %}
      <div class=\"listItem\">
        <span>{{ message }}</span>
        <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
      </div>
    {% endfor %}
  {% endfor %}

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

{% block javascripts %}
  {{ parent() }}
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js\"></script>
  <script>
    (() => {
      if (typeof Chart === 'undefined') {
        return;
      }

      const charts = {{ userCharts|default({})|json_encode|raw }};
      const textColor = 'rgba(255,255,255,.78)';
      const gridColor = 'rgba(255,255,255,.10)';

      const registrationsCtx = document.getElementById('usersRegistrationsChart');
      if (registrationsCtx && charts.registrationsByMonth) {
        new Chart(registrationsCtx, {
          type: 'line',
          data: {
            labels: charts.registrationsByMonth.labels || [],
            datasets: [{
              label: 'Nouveaux utilisateurs',
              data: charts.registrationsByMonth.data || [],
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

      const rolesCtx = document.getElementById('usersRolesChart');
      if (rolesCtx && charts.roles) {
        new Chart(rolesCtx, {
          type: 'doughnut',
          data: {
            labels: charts.roles.labels || [],
            datasets: [{
              data: charts.roles.data || [],
              backgroundColor: ['#20d4a8', '#4da3ff', '#ffd166', '#ff6b6b'],
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

      const loginsCtx = document.getElementById('usersLoginsChart');
      if (loginsCtx && charts.lastLoginBuckets) {
        new Chart(loginsCtx, {
          type: 'bar',
          data: {
            labels: charts.lastLoginBuckets.labels || [],
            datasets: [{
              label: 'Utilisateurs',
              data: charts.lastLoginBuckets.data || [],
              backgroundColor: ['rgba(32,212,168,.45)', 'rgba(77,163,255,.45)', 'rgba(255,209,102,.45)', 'rgba(255,107,107,.45)'],
              borderColor: ['#20d4a8', '#4da3ff', '#ffd166', '#ff6b6b'],
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
", "admin/pages/users.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\users.html.twig");
    }
}
