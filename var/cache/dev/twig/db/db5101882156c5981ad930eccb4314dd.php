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

/* front/pages/matches.html.twig */
class __TwigTemplate_84a517f990d9050c44bfe22d91786927 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/matches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/matches.html.twig"));

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

        yield "PULSE - Liste des matchs";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "MATCHS", "hero_title" => "Liste des matchs", "hero_sub" => "Recherche dynamique via la base de donnees.", "breadcrumb_current" => "Liste des matchs"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"pageHeader\">
        <div>
          <h1>Liste des matchs</h1>
          <p>Filtres back-end: tournoi, statut, jeu, equipe et periode.</p>
        </div>
      </div>

      <section class=\"panel\">
        <form method=\"get\" action=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_matches");
        yield "\" data-auto-submit=\"1\">
          <div class=\"filtersRow\">
            <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), "q", [], "any", false, false, false, 25), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher round/tournoi/jeu\" />

            <div class=\"select\">
              <select name=\"tournament\">
                <option value=\"\">Tournoi</option>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["available_tournaments"]) || array_key_exists("available_tournaments", $context) ? $context["available_tournaments"] : (function () { throw new RuntimeError('Variable "available_tournaments" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 31
            yield "                  ";
            $context["tournamentGame"] = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "gameId", [], "any", false, false, false, 31);
            // line 32
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 32), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 32, $this->source); })()), "tournament", [], "any", false, false, false, 32)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 32, $this->source); })()), "tournament", [], "any", false, false, false, 32) == CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 32)))) ? ("selected") : (""));
            yield ">
                    ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "title", [], "any", false, false, false, 33), "html", null, true);
            if ((($tmp = (isset($context["tournamentGame"]) || array_key_exists("tournamentGame", $context) ? $context["tournamentGame"] : (function () { throw new RuntimeError('Variable "tournamentGame" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentGame"]) || array_key_exists("tournamentGame", $context) ? $context["tournamentGame"] : (function () { throw new RuntimeError('Variable "tournamentGame" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
            }
            // line 34
            yield "                  </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tournament'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "              </select>
            </div>

            <div class=\"select\">
              <select name=\"status\">
                <option value=\"\">Statut</option>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_options"]) || array_key_exists("filter_options", $context) ? $context["filter_options"] : (function () { throw new RuntimeError('Variable "filter_options" does not exist.', 42, $this->source); })()), "statuses", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["statusValue"]) {
            // line 43
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43) == $context["statusValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statusValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "              </select>
            </div>

            <div class=\"select\">
              <select name=\"game\">
                <option value=\"\">Jeu</option>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["available_games"]) || array_key_exists("available_games", $context) ? $context["available_games"] : (function () { throw new RuntimeError('Variable "available_games" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 52
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 52), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 52, $this->source); })()), "game", [], "any", false, false, false, 52)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 52, $this->source); })()), "game", [], "any", false, false, false, 52) == CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 52)))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 52), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "              </select>
            </div>

            <input class=\"input\" type=\"date\" name=\"date_from\" value=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 57, $this->source); })()), "date_from", [], "any", false, false, false, 57), "")) : ("")), "html", null, true);
        yield "\" />
            <input class=\"input\" type=\"date\" name=\"date_to\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 58, $this->source); })()), "date_to", [], "any", false, false, false, 58), "")) : ("")), "html", null, true);
        yield "\" />
            <input class=\"input\" type=\"search\" name=\"team\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "team", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 59, $this->source); })()), "team", [], "any", false, false, false, 59), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Equipe participante\" />

            <div class=\"select\">
              <select name=\"sort\">
                <option value=\"upcoming\" ";
        // line 63
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 63, $this->source); })()), "sort", [], "any", false, false, false, 63) == "upcoming")) ? ("selected") : (""));
        yield ">Prochains matchs</option>
                <option value=\"latest\" ";
        // line 64
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 64, $this->source); })()), "sort", [], "any", false, false, false, 64) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
              </select>
            </div>

            <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
            <a class=\"btn btn--ghost\" href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_matches");
        yield "\">Reset</a>
          </div>
        </form>
      </section>

      <section class=\"panel\">
        <div class=\"panel__head\">
          <h3 class=\"panel__title\">MATCHS</h3>
          <div class=\"panel__desc\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "total_items", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 77, $this->source); })()), "total_items", [], "any", false, false, false, 77), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matches_data"]) || array_key_exists("matches_data", $context) ? $context["matches_data"] : (function () { throw new RuntimeError('Variable "matches_data" does not exist.', 77, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matches_data"]) || array_key_exists("matches_data", $context) ? $context["matches_data"] : (function () { throw new RuntimeError('Variable "matches_data" does not exist.', 77, $this->source); })())))), "html", null, true);
        yield " match(s) trouve(s)</div>
        </div>

        ";
        // line 80
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["matches_data"]) || array_key_exists("matches_data", $context) ? $context["matches_data"] : (function () { throw new RuntimeError('Variable "matches_data" does not exist.', 80, $this->source); })()))) {
            // line 81
            yield "          <div class=\"emptyState\">Aucun match ne correspond aux filtres selectionnes.</div>
        ";
        } else {
            // line 83
            yield "          <div class=\"tableWrap\">
            <table class=\"table\">
              <thead>
                <tr>
                  <th>Match</th>
                  <th>Tournoi</th>
                  <th>Round</th>
                  <th>Statut</th>
                  <th>Horaire</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matches_data"]) || array_key_exists("matches_data", $context) ? $context["matches_data"] : (function () { throw new RuntimeError('Variable "matches_data" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 97
                yield "                  ";
                $context["match"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "match", [], "any", false, false, false, 97);
                // line 98
                yield "                  ";
                $context["tournament"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tournament", [], "any", false, false, false, 98);
                // line 99
                yield "                  ";
                $context["game"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "game", [], "any", false, false, false, 99);
                // line 100
                yield "                  ";
                $context["matchId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["match"] ?? null), "matchId", [], "any", true, true, false, 100) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 100, $this->source); })()), "matchId", [], "any", false, false, false, 100)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 100, $this->source); })()), "matchId", [], "any", false, false, false, 100)) : (0));
                // line 101
                yield "                  ";
                $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["match"] ?? null), "status", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 101, $this->source); })()), "status", [], "any", false, false, false, 101), "SCHEDULED")) : ("SCHEDULED"));
                // line 102
                yield "                  ";
                $context["statusClass"] = ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 102, $this->source); })()) == "ONGOING")) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 102, $this->source); })()) == "SCHEDULED")) ? ("badge--info") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 102, $this->source); })()) == "FINISHED")) ? ("") : ("badge--danger"))))));
                // line 103
                yield "                  ";
                $context["detailUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_match_detail", ["id" => (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 103, $this->source); })())]);
                // line 104
                yield "
                  <tr>
                    <td>
                      <div><b>";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "teams_label", [], "any", false, false, false, 107), "html", null, true);
                yield "</b></div>
                      ";
                // line 108
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "teams", [], "any", false, false, false, 108))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 109
                    yield "                        <div class=\"listItem__meta\">
                          ";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "teams", [], "any", false, false, false, 110));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["relation"]) {
                        // line 111
                        yield "                            ";
                        $context["relationTeam"] = CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "teamId", [], "any", false, false, false, 111);
                        // line 112
                        yield "                            ";
                        yield (((($tmp = (isset($context["relationTeam"]) || array_key_exists("relationTeam", $context) ? $context["relationTeam"] : (function () { throw new RuntimeError('Variable "relationTeam" does not exist.', 112, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["relationTeam"]) || array_key_exists("relationTeam", $context) ? $context["relationTeam"] : (function () { throw new RuntimeError('Variable "relationTeam" does not exist.', 112, $this->source); })()), "name", [], "any", false, false, false, 112), "html", null, true)) : ("Equipe"));
                        yield "
                            ";
                        // line 113
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 113))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " (";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 113), "html", null, true);
                            yield ")";
                        }
                        // line 114
                        yield "                            ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "isWinner", [], "any", false, false, false, 114) === true)) {
                            yield " W";
                        }
                        // line 115
                        yield "                            ";
                        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " · ";
                        }
                        // line 116
                        yield "                          ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['relation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 117
                    yield "                        </div>
                      ";
                }
                // line 119
                yield "                    </td>
                    <td>
                      <div>";
                // line 121
                yield (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 121, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 121, $this->source); })()), "title", [], "any", false, false, false, 121), "html", null, true)) : ("-"));
                yield "</div>
                      <div class=\"listItem__meta\">";
                // line 122
                yield (((($tmp = (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 122, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 122, $this->source); })()), "name", [], "any", false, false, false, 122), "html", null, true)) : ("-"));
                yield "</div>
                    </td>
                    <td>";
                // line 124
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 124, $this->source); })()), "roundName", [], "any", false, false, false, 124)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 124, $this->source); })()), "roundName", [], "any", false, false, false, 124), "html", null, true)) : ("-"));
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 124, $this->source); })()), "bestOf", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " · BO";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 124, $this->source); })()), "bestOf", [], "any", false, false, false, 124), "html", null, true);
                }
                yield "</td>
                    <td><span class=\"badge ";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 125, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 125, $this->source); })()), "html", null, true);
                yield "</span></td>
                    <td>
                      ";
                // line 127
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 127, $this->source); })()), "scheduledAt", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 128
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 128, $this->source); })()), "scheduledAt", [], "any", false, false, false, 128), "d/m/Y H:i"), "html", null, true);
                    yield "
                      ";
                } else {
                    // line 130
                    yield "                        -
                      ";
                }
                // line 132
                yield "                    </td>
                    <td>
                      <a class=\"btn btn--ghost\" href=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["detailUrl"]) || array_key_exists("detailUrl", $context) ? $context["detailUrl"] : (function () { throw new RuntimeError('Variable "detailUrl" does not exist.', 134, $this->source); })()), "html", null, true);
                yield "\">Detail</a>
                    </td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            yield "              </tbody>
            </table>
          </div>
        ";
        }
        // line 142
        yield "      </section>

      ";
        // line 144
        yield from $this->load("front/partials/_pagination.html.twig", 144)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 145
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 145, $this->source); })()), "route_name" => "front_matches"]));
        // line 148
        yield "
      ";
        // line 149
        yield from $this->load("front/partials/_footer.html.twig", 149)->unwrap()->yield($context);
        // line 150
        yield "    </section>
  </main>

  ";
        // line 153
        yield from $this->load("front/partials/_auth_modal.html.twig", 153)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/matches.html.twig";
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
        return array (  451 => 153,  446 => 150,  444 => 149,  441 => 148,  439 => 145,  438 => 144,  434 => 142,  428 => 138,  418 => 134,  414 => 132,  410 => 130,  404 => 128,  402 => 127,  395 => 125,  387 => 124,  382 => 122,  378 => 121,  374 => 119,  370 => 117,  356 => 116,  351 => 115,  346 => 114,  340 => 113,  335 => 112,  332 => 111,  315 => 110,  312 => 109,  310 => 108,  306 => 107,  301 => 104,  298 => 103,  295 => 102,  292 => 101,  289 => 100,  286 => 99,  283 => 98,  280 => 97,  276 => 96,  261 => 83,  257 => 81,  255 => 80,  249 => 77,  238 => 69,  230 => 64,  226 => 63,  219 => 59,  215 => 58,  211 => 57,  206 => 54,  193 => 52,  189 => 51,  181 => 45,  168 => 43,  164 => 42,  156 => 36,  149 => 34,  143 => 33,  136 => 32,  133 => 31,  129 => 30,  121 => 25,  116 => 23,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Liste des matchs{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'MATCHS',
    hero_title: 'Liste des matchs',
    hero_sub: 'Recherche dynamique via la base de donnees.',
    breadcrumb_current: 'Liste des matchs'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"pageHeader\">
        <div>
          <h1>Liste des matchs</h1>
          <p>Filtres back-end: tournoi, statut, jeu, equipe et periode.</p>
        </div>
      </div>

      <section class=\"panel\">
        <form method=\"get\" action=\"{{ path('front_matches') }}\" data-auto-submit=\"1\">
          <div class=\"filtersRow\">
            <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Rechercher round/tournoi/jeu\" />

            <div class=\"select\">
              <select name=\"tournament\">
                <option value=\"\">Tournoi</option>
                {% for tournament in available_tournaments %}
                  {% set tournamentGame = tournament.gameId %}
                  <option value=\"{{ tournament.tournamentId }}\" {{ filters.tournament is not null and filters.tournament == tournament.tournamentId ? 'selected' : '' }}>
                    {{ tournament.title }}{% if tournamentGame %} - {{ tournamentGame.name }}{% endif %}
                  </option>
                {% endfor %}
              </select>
            </div>

            <div class=\"select\">
              <select name=\"status\">
                <option value=\"\">Statut</option>
                {% for statusValue in filter_options.statuses %}
                  <option value=\"{{ statusValue }}\" {{ filters.status == statusValue ? 'selected' : '' }}>{{ statusValue }}</option>
                {% endfor %}
              </select>
            </div>

            <div class=\"select\">
              <select name=\"game\">
                <option value=\"\">Jeu</option>
                {% for game in available_games %}
                  <option value=\"{{ game.gameId }}\" {{ filters.game is not null and filters.game == game.gameId ? 'selected' : '' }}>{{ game.name }}</option>
                {% endfor %}
              </select>
            </div>

            <input class=\"input\" type=\"date\" name=\"date_from\" value=\"{{ filters.date_from|default('') }}\" />
            <input class=\"input\" type=\"date\" name=\"date_to\" value=\"{{ filters.date_to|default('') }}\" />
            <input class=\"input\" type=\"search\" name=\"team\" value=\"{{ filters.team|default('') }}\" placeholder=\"Equipe participante\" />

            <div class=\"select\">
              <select name=\"sort\">
                <option value=\"upcoming\" {{ filters.sort == 'upcoming' ? 'selected' : '' }}>Prochains matchs</option>
                <option value=\"latest\" {{ filters.sort == 'latest' ? 'selected' : '' }}>Plus recents</option>
              </select>
            </div>

            <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
            <a class=\"btn btn--ghost\" href=\"{{ path('front_matches') }}\">Reset</a>
          </div>
        </form>
      </section>

      <section class=\"panel\">
        <div class=\"panel__head\">
          <h3 class=\"panel__title\">MATCHS</h3>
          <div class=\"panel__desc\">{{ pagination.total_items|default(matches_data|length) }} match(s) trouve(s)</div>
        </div>

        {% if matches_data is empty %}
          <div class=\"emptyState\">Aucun match ne correspond aux filtres selectionnes.</div>
        {% else %}
          <div class=\"tableWrap\">
            <table class=\"table\">
              <thead>
                <tr>
                  <th>Match</th>
                  <th>Tournoi</th>
                  <th>Round</th>
                  <th>Statut</th>
                  <th>Horaire</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {% for item in matches_data %}
                  {% set match = item.match %}
                  {% set tournament = item.tournament %}
                  {% set game = item.game %}
                  {% set matchId = match.matchId ?? 0 %}
                  {% set status = match.status|default('SCHEDULED') %}
                  {% set statusClass = status == 'ONGOING' ? 'badge--success' : (status == 'SCHEDULED' ? 'badge--info' : (status == 'FINISHED' ? '' : 'badge--danger')) %}
                  {% set detailUrl = path('front_match_detail', {id: matchId}) %}

                  <tr>
                    <td>
                      <div><b>{{ item.teams_label }}</b></div>
                      {% if item.teams is not empty %}
                        <div class=\"listItem__meta\">
                          {% for relation in item.teams %}
                            {% set relationTeam = relation.teamId %}
                            {{ relationTeam ? relationTeam.name : 'Equipe' }}
                            {% if relation.score is not null %} ({{ relation.score }}){% endif %}
                            {% if relation.isWinner is same as(true) %} W{% endif %}
                            {% if not loop.last %} · {% endif %}
                          {% endfor %}
                        </div>
                      {% endif %}
                    </td>
                    <td>
                      <div>{{ tournament ? tournament.title : '-' }}</div>
                      <div class=\"listItem__meta\">{{ game ? game.name : '-' }}</div>
                    </td>
                    <td>{{ match.roundName ?: '-' }}{% if match.bestOf %} · BO{{ match.bestOf }}{% endif %}</td>
                    <td><span class=\"badge {{ statusClass }}\">{{ status }}</span></td>
                    <td>
                      {% if match.scheduledAt %}
                        {{ match.scheduledAt|date('d/m/Y H:i') }}
                      {% else %}
                        -
                      {% endif %}
                    </td>
                    <td>
                      <a class=\"btn btn--ghost\" href=\"{{ detailUrl }}\">Detail</a>
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
        route_name: 'front_matches'
      } %}

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/matches.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\matches.html.twig");
    }
}
