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

/* front/pages/organizer-matches.html.twig */
class __TwigTemplate_354b13dd442d54edb83889d9a93b924c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-matches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-matches.html.twig"));

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

        yield "PULSE - Gestion matchs";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ORGANISATEUR", "hero_title" => "Gestion matchs", "hero_sub" => "Creation et suivi des matchs avec plusieurs equipes.", "breadcrumb_current" => "Gestion matchs"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_organizer_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "matches"]));
        // line 17
        yield "
        <div>
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                yield "              <div class=\"listItem\">
                <span>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                <span class=\"badge ";
                // line 23
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
            // line 26
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
          <div class=\"panel\">
            <div class=\"panel__head\">
              <form method=\"get\" action=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_matches");
        yield "\" class=\"filtersBar\">
                <div class=\"filterGroup\">
                  <label for=\"tournament\">Tournoi</label>
                  <select id=\"tournament\" name=\"tournament\" class=\"input\" onchange=\"this.form.submit()\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 35
            yield "                      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 35), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 35, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 35, $this->source); })()), "tournamentId", [], "any", false, false, false, 35) == CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 35)))) ? ("selected") : (""));
            yield ">
                        #";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 36), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "title", [], "any", false, false, false, 36), "html", null, true);
            yield "
                      </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tournament'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                  </select>
                </div>
                <noscript><button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button></noscript>
              </form>
              <div class=\"panel__actions\">
                <a class=\"btn btn--primary\" href=\"";
        // line 44
        yield (((($tmp = (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 44, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_match_create", ["tournament" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 44, $this->source); })()), "tournamentId", [], "any", false, false, false, 44)]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_match_create")));
        yield "\">Creer match</a>
              </div>
            </div>

            <div class=\"tableWrap\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Round</th>
                    <th>Tournoi</th>
                    <th>Participants</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 62, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 63
            yield "                    ";
            $context["participants"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchTeamsByMatchId"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 63), [], "array", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchTeamsByMatchId"]) || array_key_exists("matchTeamsByMatchId", $context) ? $context["matchTeamsByMatchId"] : (function () { throw new RuntimeError('Variable "matchTeamsByMatchId" does not exist.', 63, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 63), [], "array", false, false, false, 63)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchTeamsByMatchId"]) || array_key_exists("matchTeamsByMatchId", $context) ? $context["matchTeamsByMatchId"] : (function () { throw new RuntimeError('Variable "matchTeamsByMatchId" does not exist.', 63, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 63), [], "array", false, false, false, 63)) : ([]));
            // line 64
            yield "                    ";
            $context["statusClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 64) == "ONGOING")) ? ("badge--info") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 66
$context["match"], "status", [], "any", false, false, false, 66) == "FINISHED")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 66) == "CANCELLED")) ? ("badge--danger") : (""))))));
            // line 68
            yield "                    <tr>
                      <td>#";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                      <td>";
            // line 70
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 70)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 70), "html", null, true)) : ("-"));
            yield "</td>
                      <td>";
            // line 71
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 71), "title", [], "any", false, false, false, 71), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        ";
            // line 73
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 73, $this->source); })()))) {
                // line 74
                yield "                          -
                        ";
            } else {
                // line 76
                yield "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 76, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 77
                    yield "                            ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "teamId", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "teamId", [], "any", false, false, false, 77), "name", [], "any", false, false, false, 77), "html", null, true)) : ("-"));
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "score", [], "any", false, false, false, 77))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "score", [], "any", false, false, false, 77), "html", null, true);
                        yield ")";
                    }
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield ", ";
                    }
                    // line 78
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
                unset($context['_seq'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                yield "                        ";
            }
            // line 80
            yield "                      </td>
                      <td>";
            // line 81
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 81), "Y-m-d H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td><span class=\"badge ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 82, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 82), "html", null, true);
            yield "</span></td>
                      <td>
                        <a class=\"btn btn--ghost\" href=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_match_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\">Editer</a>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 87
        if (!$context['_iterated']) {
            // line 88
            yield "                    <tr>
                      <td colspan=\"7\" class=\"muted\">
                        ";
            // line 90
            if ((($tmp = (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 91
                yield "                          Aucun match pour ce tournoi.
                        ";
            } else {
                // line 93
                yield "                          Aucun tournoi disponible.
                        ";
            }
            // line 95
            yield "                      </td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "                </tbody>
              </table>
            </div>
          </div>

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Donnees extraites depuis le schema reel.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\">
                <span><b>matches</b></span>
                <span class=\"listItem__meta\">match_id, tournament_id, round_name, best_of, status, scheduled_at</span>
              </div>
              <div class=\"listItem\">
                <span><b>match_teams</b></span>
                <span class=\"listItem__meta\">match_id, team_id, score, is_winner</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 124
        yield from $this->load("front/partials/_footer.html.twig", 124)->unwrap()->yield($context);
        // line 125
        yield "    </section>
  </main>

  ";
        // line 128
        yield from $this->load("front/partials/_auth_modal.html.twig", 128)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/organizer-matches.html.twig";
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
        return array (  371 => 128,  366 => 125,  364 => 124,  336 => 98,  328 => 95,  324 => 93,  320 => 91,  318 => 90,  314 => 88,  312 => 87,  304 => 84,  297 => 82,  293 => 81,  290 => 80,  287 => 79,  273 => 78,  262 => 77,  244 => 76,  240 => 74,  238 => 73,  233 => 71,  229 => 70,  225 => 69,  222 => 68,  220 => 66,  218 => 64,  215 => 63,  210 => 62,  189 => 44,  182 => 39,  171 => 36,  164 => 35,  160 => 34,  153 => 30,  148 => 27,  142 => 26,  131 => 23,  127 => 22,  124 => 21,  119 => 20,  115 => 19,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Gestion matchs{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'ORGANISATEUR',
    hero_title: 'Gestion matchs',
    hero_sub: 'Creation et suivi des matchs avec plusieurs equipes.',
    breadcrumb_current: 'Gestion matchs'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_organizer_side_nav.html.twig' with {active: 'matches'} %}

        <div>
          {% for label, messages in app.flashes %}
            {% for message in messages %}
              <div class=\"listItem\">
                <span>{{ message }}</span>
                <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
              </div>
            {% endfor %}
          {% endfor %}

          <div class=\"panel\">
            <div class=\"panel__head\">
              <form method=\"get\" action=\"{{ path('front_organizer_matches') }}\" class=\"filtersBar\">
                <div class=\"filterGroup\">
                  <label for=\"tournament\">Tournoi</label>
                  <select id=\"tournament\" name=\"tournament\" class=\"input\" onchange=\"this.form.submit()\">
                    {% for tournament in tournaments %}
                      <option value=\"{{ tournament.tournamentId }}\" {{ selectedTournament and selectedTournament.tournamentId == tournament.tournamentId ? 'selected' : '' }}>
                        #{{ tournament.tournamentId }} - {{ tournament.title }}
                      </option>
                    {% endfor %}
                  </select>
                </div>
                <noscript><button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button></noscript>
              </form>
              <div class=\"panel__actions\">
                <a class=\"btn btn--primary\" href=\"{{ selectedTournament ? path('front_organizer_match_create', {tournament: selectedTournament.tournamentId}) : path('front_organizer_match_create') }}\">Creer match</a>
              </div>
            </div>

            <div class=\"tableWrap\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Round</th>
                    <th>Tournoi</th>
                    <th>Participants</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {% for match in matches %}
                    {% set participants = matchTeamsByMatchId[match.matchId] ?? [] %}
                    {% set statusClass = match.status == 'ONGOING'
                      ? 'badge--info'
                      : (match.status == 'FINISHED' ? 'badge--success' : (match.status == 'CANCELLED' ? 'badge--danger' : ''))
                    %}
                    <tr>
                      <td>#{{ match.matchId }}</td>
                      <td>{{ match.roundName ?: '-' }}</td>
                      <td>{{ match.tournamentId ? match.tournamentId.title : '-' }}</td>
                      <td>
                        {% if participants is empty %}
                          -
                        {% else %}
                          {% for participant in participants %}
                            {{ participant.teamId ? participant.teamId.name : '-' }}{% if participant.score is not null %} ({{ participant.score }}){% endif %}{% if not loop.last %}, {% endif %}
                          {% endfor %}
                        {% endif %}
                      </td>
                      <td>{{ match.scheduledAt ? match.scheduledAt|date('Y-m-d H:i') : '-' }}</td>
                      <td><span class=\"badge {{ statusClass }}\">{{ match.status }}</span></td>
                      <td>
                        <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_match_edit', {id: match.matchId}) }}\">Editer</a>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"7\" class=\"muted\">
                        {% if selectedTournament %}
                          Aucun match pour ce tournoi.
                        {% else %}
                          Aucun tournoi disponible.
                        {% endif %}
                      </td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </div>

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Donnees extraites depuis le schema reel.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\">
                <span><b>matches</b></span>
                <span class=\"listItem__meta\">match_id, tournament_id, round_name, best_of, status, scheduled_at</span>
              </div>
              <div class=\"listItem\">
                <span><b>match_teams</b></span>
                <span class=\"listItem__meta\">match_id, team_id, score, is_winner</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/organizer-matches.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\organizer-matches.html.twig");
    }
}
