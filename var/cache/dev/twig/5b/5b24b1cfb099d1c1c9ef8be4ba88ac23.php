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

/* admin/pages/tournaments.html.twig */
class __TwigTemplate_0bf0fe50c4691699cf29a0bf2a23663f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournaments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournaments.html.twig"));

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

        yield "PULSE - Gestion tournois";
        
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
        yield "  <div class=\"pageHeader\">
    <div>
      <h2>Gestion tournois</h2>
      <div class=\"pageSub\">Creation, mise a jour, suppression et suivi des tournois.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnPrimary\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_create");
        yield "\">+ Nouveau tournoi</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournaments_export", ["format" => "pdf", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["filters"] ?? null), "q", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 15, $this->source); })()), "q", [], "any", false, false, false, 15), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 16
($context["filters"] ?? null), "status", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 16, $this->source); })()), "status", [], "any", false, false, false, 16), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 17
($context["filters"] ?? null), "game", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 17, $this->source); })()), "game", [], "any", false, false, false, 17), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["filters"] ?? null), "sort", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 18, $this->source); })()), "sort", [], "any", false, false, false, 18), "latest")) : ("latest"))]), "html", null, true);
        // line 19
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournaments_export", ["format" => "excel", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 22
($context["filters"] ?? null), "q", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "q", [], "any", false, false, false, 22), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["filters"] ?? null), "status", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["filters"] ?? null), "game", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 24, $this->source); })()), "game", [], "any", false, false, false, 24), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["filters"] ?? null), "sort", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), "sort", [], "any", false, false, false, 25), "latest")) : ("latest"))]), "html", null, true);
        // line 26
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
                yield ((($context["label"] == "error")) ? ("badge--danger") : (((($context["label"] == "warning")) ? ("badge--warning") : ("badge--success"))));
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
  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournaments");
        yield "\">
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 42, $this->source); })()), "q", [], "any", false, false, false, 42), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Titre, jeu, organisateur...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Status</label>
      <select name=\"status\">
        <option value=\"\">ALL</option>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusOptions"]) || array_key_exists("statusOptions", $context) ? $context["statusOptions"] : (function () { throw new RuntimeError('Variable "statusOptions" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statusValue"]) {
            // line 50
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50) == $context["statusValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statusValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Game</label>
      <select name=\"game\">
        <option value=\"\">ALL</option>
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableGames"]) || array_key_exists("availableGames", $context) ? $context["availableGames"] : (function () { throw new RuntimeError('Variable "availableGames" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 60
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 60), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 60, $this->source); })()), "game", [], "any", false, false, false, 60)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 60, $this->source); })()), "game", [], "any", false, false, false, 60) == CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 60)))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 60), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Tri</label>
      <select name=\"sort\">
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new RuntimeError('Variable "sortOptions" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortValue"]) {
            // line 69
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sortValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 69, $this->source); })()), "sort", [], "any", false, false, false, 69) == $context["sortValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["sortValue"]), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sortValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournaments");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE DES TOURNOIS</h3>
      <span class=\"listMeta\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("counter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 83, $this->source); })()), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 83, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 83, $this->source); })())))), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Jeu</th>
            <th>Organisateur</th>
            <th>Status</th>
            <th>Dates</th>
            <th>Inscriptions</th>
            <th>Matchs</th>
            <th>Prize pool</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 103, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 104
            yield "            ";
            $context["tournamentId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", true, true, false, 104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 104)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 104)) : (0));
            // line 105
            yield "            ";
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "status", [], "any", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "status", [], "any", false, false, false, 105), "DRAFT")) : ("DRAFT"));
            // line 106
            yield "            ";
            $context["statusBadge"] = (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 106, $this->source); })()) == "OPEN") || ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 106, $this->source); })()) == "ONGOING"))) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 106, $this->source); })()) == "FINISHED")) ? ("badge--info") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 106, $this->source); })()) == "CANCELLED")) ? ("badge--danger") : ("badge--warning"))))));
            // line 107
            yield "            ";
            $context["registrationCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["registrationsByTournamentId"] ?? null), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 107, $this->source); })()), [], "array", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationsByTournamentId"]) || array_key_exists("registrationsByTournamentId", $context) ? $context["registrationsByTournamentId"] : (function () { throw new RuntimeError('Variable "registrationsByTournamentId" does not exist.', 107, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 107, $this->source); })()), [], "array", false, false, false, 107), 0)) : (0));
            // line 108
            yield "            ";
            $context["acceptedCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["acceptedByTournamentId"] ?? null), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 108, $this->source); })()), [], "array", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["acceptedByTournamentId"]) || array_key_exists("acceptedByTournamentId", $context) ? $context["acceptedByTournamentId"] : (function () { throw new RuntimeError('Variable "acceptedByTournamentId" does not exist.', 108, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 108, $this->source); })()), [], "array", false, false, false, 108), 0)) : (0));
            // line 109
            yield "            ";
            $context["matchesCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchesByTournamentId"] ?? null), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 109, $this->source); })()), [], "array", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchesByTournamentId"]) || array_key_exists("matchesByTournamentId", $context) ? $context["matchesByTournamentId"] : (function () { throw new RuntimeError('Variable "matchesByTournamentId" does not exist.', 109, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 109, $this->source); })()), [], "array", false, false, false, 109), 0)) : (0));
            // line 110
            yield "
            <tr>
              <td>#";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 112, $this->source); })()), "html", null, true);
            yield "</td>
              <td>
                <strong>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "title", [], "any", false, false, false, 114), "html", null, true);
            yield "</strong>
                ";
            // line 115
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "photoPath", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 116
                yield "                  <div class=\"listMeta\"><a href=\"";
                yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "photoPath", [], "any", false, false, false, 116)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "photoPath", [], "any", false, false, false, 116), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "photoPath", [], "any", false, false, false, 116)), "html", null, true)));
                yield "\" target=\"_blank\" rel=\"noopener\">Photo</a></div>
                ";
            }
            // line 118
            yield "              </td>
              <td>";
            // line 119
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "gameId", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "gameId", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 120
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "organizerUserId", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "organizerUserId", [], "any", false, false, false, 120), "username", [], "any", false, false, false, 120), "html", null, true)) : ("-"));
            yield "</td>
              <td><span class=\"badge ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusBadge"]) || array_key_exists("statusBadge", $context) ? $context["statusBadge"] : (function () { throw new RuntimeError('Variable "statusBadge" does not exist.', 121, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 121, $this->source); })()), "html", null, true);
            yield "</span></td>
              <td>";
            // line 122
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "startDate", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "startDate", [], "any", false, false, false, 122), "d/m/Y"), "html", null, true)) : ("-"));
            yield " -> ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "endDate", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "endDate", [], "any", false, false, false, 122), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["acceptedCount"]) || array_key_exists("acceptedCount", $context) ? $context["acceptedCount"] : (function () { throw new RuntimeError('Variable "acceptedCount" does not exist.', 123, $this->source); })()), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "maxTeams", [], "any", false, false, false, 123), "html", null, true);
            yield " <span class=\"listMeta\">(total: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["registrationCount"]) || array_key_exists("registrationCount", $context) ? $context["registrationCount"] : (function () { throw new RuntimeError('Variable "registrationCount" does not exist.', 123, $this->source); })()), "html", null, true);
            yield ")</span></td>
              <td>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchesCount"]) || array_key_exists("matchesCount", $context) ? $context["matchesCount"] : (function () { throw new RuntimeError('Variable "matchesCount" does not exist.', 124, $this->source); })()), "html", null, true);
            yield "</td>
              <td>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "prizePool", [], "any", false, false, false, 125), 2, ".", " "), "html", null, true);
            yield " DT</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_detail", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 128, $this->source); })())]), "html", null, true);
            yield "\">Voir detail</a>
                  <a class=\"btn btnTiny\" href=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_edit", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 129, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_delete", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 130, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce tournoi ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_tournament_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 131, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                  <a class=\"btn btnTiny\" href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 134, $this->source); })())]), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">Front</a>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 138
        if (!$context['_iterated']) {
            // line 139
            yield "            <tr>
              <td colspan=\"10\" class=\"listMeta\">Aucun tournoi trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tournament'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "        </tbody>
      </table>
    </div>
  </section>
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
        return "admin/pages/tournaments.html.twig";
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
        return array (  416 => 143,  407 => 139,  405 => 138,  396 => 134,  390 => 131,  386 => 130,  382 => 129,  378 => 128,  372 => 125,  368 => 124,  360 => 123,  354 => 122,  348 => 121,  344 => 120,  340 => 119,  337 => 118,  331 => 116,  329 => 115,  325 => 114,  320 => 112,  316 => 110,  313 => 109,  310 => 108,  307 => 107,  304 => 106,  301 => 105,  298 => 104,  293 => 103,  270 => 83,  260 => 76,  253 => 71,  240 => 69,  236 => 68,  228 => 62,  215 => 60,  211 => 59,  202 => 52,  189 => 50,  185 => 49,  175 => 42,  169 => 39,  166 => 38,  160 => 37,  149 => 34,  145 => 33,  142 => 32,  137 => 31,  133 => 30,  127 => 26,  125 => 25,  124 => 24,  123 => 23,  122 => 22,  121 => 20,  118 => 19,  116 => 18,  115 => 17,  114 => 16,  113 => 15,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Gestion tournois{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion tournois</h2>
      <div class=\"pageSub\">Creation, mise a jour, suppression et suivi des tournois.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnPrimary\" href=\"{{ path('admin_tournament_create') }}\">+ Nouveau tournoi</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_tournaments_export', {
        format: 'pdf',
        q: filters.q|default(''),
        status: filters.status|default(''),
        game: filters.game|default(''),
        sort: filters.sort|default('latest')
      }) }}\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_tournaments_export', {
        format: 'excel',
        q: filters.q|default(''),
        status: filters.status|default(''),
        game: filters.game|default(''),
        sort: filters.sort|default('latest')
      }) }}\">Exporter Excel</a>
    </div>
  </div>

  {% for label, messages in app.flashes %}
    {% for message in messages %}
      <div class=\"listItem\">
        <span>{{ message }}</span>
        <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'warning' ? 'badge--warning' : 'badge--success') }}\">{{ label|upper }}</span>
      </div>
    {% endfor %}
  {% endfor %}

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"{{ path('admin_tournaments') }}\">
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Titre, jeu, organisateur...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Status</label>
      <select name=\"status\">
        <option value=\"\">ALL</option>
        {% for statusValue in statusOptions %}
          <option value=\"{{ statusValue }}\" {{ filters.status == statusValue ? 'selected' : '' }}>{{ statusValue }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Game</label>
      <select name=\"game\">
        <option value=\"\">ALL</option>
        {% for game in availableGames %}
          <option value=\"{{ game.gameId }}\" {{ filters.game is not null and filters.game == game.gameId ? 'selected' : '' }}>{{ game.name }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Tri</label>
      <select name=\"sort\">
        {% for sortValue in sortOptions %}
          <option value=\"{{ sortValue }}\" {{ filters.sort == sortValue ? 'selected' : '' }}>{{ sortValue|upper }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_tournaments') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE DES TOURNOIS</h3>
      <span class=\"listMeta\">{{ counter|default(tournaments|length) }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Jeu</th>
            <th>Organisateur</th>
            <th>Status</th>
            <th>Dates</th>
            <th>Inscriptions</th>
            <th>Matchs</th>
            <th>Prize pool</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for tournament in tournaments %}
            {% set tournamentId = tournament.tournamentId ?? 0 %}
            {% set status = tournament.status|default('DRAFT') %}
            {% set statusBadge = status == 'OPEN' or status == 'ONGOING' ? 'badge--success' : (status == 'FINISHED' ? 'badge--info' : (status == 'CANCELLED' ? 'badge--danger' : 'badge--warning')) %}
            {% set registrationCount = registrationsByTournamentId[tournamentId]|default(0) %}
            {% set acceptedCount = acceptedByTournamentId[tournamentId]|default(0) %}
            {% set matchesCount = matchesByTournamentId[tournamentId]|default(0) %}

            <tr>
              <td>#{{ tournamentId }}</td>
              <td>
                <strong>{{ tournament.title }}</strong>
                {% if tournament.photoPath %}
                  <div class=\"listMeta\"><a href=\"{{ tournament.photoPath starts with 'http' ? tournament.photoPath : asset(tournament.photoPath) }}\" target=\"_blank\" rel=\"noopener\">Photo</a></div>
                {% endif %}
              </td>
              <td>{{ tournament.gameId ? tournament.gameId.name : '-' }}</td>
              <td>{{ tournament.organizerUserId ? tournament.organizerUserId.username : '-' }}</td>
              <td><span class=\"badge {{ statusBadge }}\">{{ status }}</span></td>
              <td>{{ tournament.startDate ? tournament.startDate|date('d/m/Y') : '-' }} -> {{ tournament.endDate ? tournament.endDate|date('d/m/Y') : '-' }}</td>
              <td>{{ acceptedCount }}/{{ tournament.maxTeams }} <span class=\"listMeta\">(total: {{ registrationCount }})</span></td>
              <td>{{ matchesCount }}</td>
              <td>{{ tournament.prizePool|number_format(2, '.', ' ') }} DT</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_tournament_detail', {id: tournamentId}) }}\">Voir detail</a>
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_tournament_edit', {id: tournamentId}) }}\">Update</a>
                  <form method=\"post\" action=\"{{ path('admin_tournament_delete', {id: tournamentId}) }}\" onsubmit=\"return confirm('Supprimer ce tournoi ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_tournament_' ~ tournamentId) }}\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                  <a class=\"btn btnTiny\" href=\"{{ path('front_tournament_detail', {id: tournamentId}) }}\" target=\"_blank\" rel=\"noopener\">Front</a>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"10\" class=\"listMeta\">Aucun tournoi trouve.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/tournaments.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\tournaments.html.twig");
    }
}
