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

/* front/pages/match-detail.html.twig */
class __TwigTemplate_09e1aecc711748d7e7fd36b360ecbcf2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/match-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/match-detail.html.twig"));

        // line 3
        $context["matchId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["match"] ?? null), "matchId", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 3, $this->source); })()), "matchId", [], "any", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 3, $this->source); })()), "matchId", [], "any", false, false, false, 3)) : (0));
        // line 4
        $context["tournamentId"] = (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "tournamentId", [], "any", true, true, false, 4) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 4, $this->source); })()), "tournamentId", [], "any", false, false, false, 4)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 4, $this->source); })()), "tournamentId", [], "any", false, false, false, 4)) : (0))) : (0));
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
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

        yield "PULSE - Detail match";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "  ";
        yield from $this->load("front/partials/_hero_mini.html.twig", 9)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "MATCH", "hero_title" => "Detail match", "hero_sub" => "Scores, statut et equipes participantes.", "breadcrumb_current" => "Detail match"]));
        // line 15
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        <section class=\"panel\">
          <h3 style=\"margin:0;\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["match_label"]) || array_key_exists("match_label", $context) ? $context["match_label"] : (function () { throw new RuntimeError('Variable "match_label" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "</h3>
          <p class=\"muted\">
            Tournoi: ";
        // line 22
        yield (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true)) : ("-"));
        yield "
            · Round: ";
        // line 23
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 23, $this->source); })()), "roundName", [], "any", false, false, false, 23)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 23, $this->source); })()), "roundName", [], "any", false, false, false, 23), "html", null, true)) : ("-"));
        yield "
            ";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 24, $this->source); })()), "bestOf", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " · BO";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 24, $this->source); })()), "bestOf", [], "any", false, false, false, 24), "html", null, true);
        }
        // line 25
        yield "          </p>

          ";
        // line 27
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["match_teams"]) || array_key_exists("match_teams", $context) ? $context["match_teams"] : (function () { throw new RuntimeError('Variable "match_teams" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield "            <div class=\"emptyState\" style=\"margin-top:10px;\">Aucune equipe renseignee pour ce match.</div>
          ";
        } else {
            // line 30
            yield "            <div class=\"list\" style=\"margin-top:10px;\">
              ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["match_teams"]) || array_key_exists("match_teams", $context) ? $context["match_teams"] : (function () { throw new RuntimeError('Variable "match_teams" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["relation"]) {
                // line 32
                yield "                ";
                $context["team"] = CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "teamId", [], "any", false, false, false, 32);
                // line 33
                yield "                ";
                $context["score"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 33))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 33)) : ("-"));
                // line 34
                yield "                <div class=\"listItem\">
                  <span>
                    <b>";
                // line 36
                yield (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true)) : ("Equipe"));
                yield "</b>
                    ";
                // line 37
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "isWinner", [], "any", false, false, false, 37) === true)) {
                    // line 38
                    yield "                      <span class=\"badge badge--success\">WINNER</span>
                    ";
                }
                // line 40
                yield "                  </span>
                  <span class=\"badge ";
                // line 41
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "isWinner", [], "any", false, false, false, 41) === true)) ? ("badge--success") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 41, $this->source); })()), "html", null, true);
                yield "</span>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['relation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "            </div>
          ";
        }
        // line 46
        yield "        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">INFOS</h3>
          ";
        // line 50
        $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["match"] ?? null), "status", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50), "SCHEDULED")) : ("SCHEDULED"));
        // line 51
        yield "          ";
        $context["statusClass"] = ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 51, $this->source); })()) == "ONGOING")) ? ("badge--warning") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 51, $this->source); })()) == "FINISHED")) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 51, $this->source); })()) == "CANCELLED")) ? ("badge--danger") : ("badge--info"))))));
        // line 52
        yield "          <div class=\"list\">
            <div class=\"listItem\"><span>Status</span><span class=\"badge ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"listItem\"><span>Heure</span><span class=\"listItem__meta\">";
        // line 54
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 54, $this->source); })()), "scheduledAt", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 54, $this->source); })()), "scheduledAt", [], "any", false, false, false, 54), "d/m/Y H:i"), "html", null, true)) : ("Non planifie"));
        yield "</span></div>
            <div class=\"listItem\"><span>Jeu</span><span class=\"listItem__meta\">";
        // line 55
        yield (((($tmp = (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 55, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), "html", null, true)) : ("-"));
        yield "</span></div>
            <div class=\"listItem\"><span>Categorie</span><span class=\"listItem__meta\">";
        // line 56
        yield ((((isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 56, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 56, $this->source); })()), "categoryId", [], "any", false, false, false, 56))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 56, $this->source); })()), "categoryId", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true)) : ("-"));
        yield "</span></div>
            <div class=\"listItem\"><span>Resultat soumis par</span><span class=\"listItem__meta\">";
        // line 57
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 57, $this->source); })()), "resultSubmittedByUserId", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["match"] ?? null), "resultSubmittedByUserId", [], "any", false, true, false, 57), "displayName", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 57, $this->source); })()), "resultSubmittedByUserId", [], "any", false, false, false, 57), "displayName", [], "any", false, false, false, 57)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 57, $this->source); })()), "resultSubmittedByUserId", [], "any", false, false, false, 57), "displayName", [], "any", false, false, false, 57), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 57, $this->source); })()), "resultSubmittedByUserId", [], "any", false, false, false, 57), "username", [], "any", false, false, false, 57), "html", null, true)))) : ("N/A"));
        yield "</span></div>
            <div class=\"listItem\"><span>Match ID</span><span class=\"listItem__meta\">#";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 58, $this->source); })()), "html", null, true);
        yield "</span></div>
          </div>

          ";
        // line 61
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["winner_team_names"]) || array_key_exists("winner_team_names", $context) ? $context["winner_team_names"] : (function () { throw new RuntimeError('Variable "winner_team_names" does not exist.', 61, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "            <div class=\"listItem\" style=\"margin-top:10px;\">
              <span>Gagnant(s)</span>
              <span class=\"listItem__meta\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["winner_team_names"]) || array_key_exists("winner_team_names", $context) ? $context["winner_team_names"] : (function () { throw new RuntimeError('Variable "winner_team_names" does not exist.', 64, $this->source); })()), ", "), "html", null, true);
            yield "</span>
            </div>
          ";
        }
        // line 67
        yield "
          <div class=\"postCard__actions\" style=\"margin-top:10px;\">
            <a class=\"btn btn--ghost\" href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_matches");
        yield "\">Retour matchs</a>
            ";
        // line 70
        if (((isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 70, $this->source); })()) > 0)) {
            // line 71
            yield "              <a class=\"btn btn--ghost\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 71, $this->source); })())]), "html", null, true);
            yield "\">Voir tournoi</a>
            ";
        }
        // line 73
        yield "          </div>
        </aside>
      </div>

      ";
        // line 77
        yield from $this->load("front/partials/_footer.html.twig", 77)->unwrap()->yield($context);
        // line 78
        yield "    </section>
  </main>

  ";
        // line 81
        yield from $this->load("front/partials/_auth_modal.html.twig", 81)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/match-detail.html.twig";
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
        return array (  271 => 81,  266 => 78,  264 => 77,  258 => 73,  252 => 71,  250 => 70,  246 => 69,  242 => 67,  236 => 64,  232 => 62,  230 => 61,  224 => 58,  220 => 57,  216 => 56,  212 => 55,  208 => 54,  202 => 53,  199 => 52,  196 => 51,  194 => 50,  188 => 46,  184 => 44,  173 => 41,  170 => 40,  166 => 38,  164 => 37,  160 => 36,  156 => 34,  153 => 33,  150 => 32,  146 => 31,  143 => 30,  139 => 28,  137 => 27,  133 => 25,  128 => 24,  124 => 23,  120 => 22,  115 => 20,  108 => 15,  105 => 9,  92 => 8,  69 => 6,  58 => 1,  56 => 4,  54 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% set matchId = match.matchId ?? 0 %}
{% set tournamentId = tournament ? (tournament.tournamentId ?? 0) : 0 %}

{% block title %}PULSE - Detail match{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'MATCH',
    hero_title: 'Detail match',
    hero_sub: 'Scores, statut et equipes participantes.',
    breadcrumb_current: 'Detail match'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        <section class=\"panel\">
          <h3 style=\"margin:0;\">{{ match_label }}</h3>
          <p class=\"muted\">
            Tournoi: {{ tournament ? tournament.title : '-' }}
            · Round: {{ match.roundName ?: '-' }}
            {% if match.bestOf %} · BO{{ match.bestOf }}{% endif %}
          </p>

          {% if match_teams is empty %}
            <div class=\"emptyState\" style=\"margin-top:10px;\">Aucune equipe renseignee pour ce match.</div>
          {% else %}
            <div class=\"list\" style=\"margin-top:10px;\">
              {% for relation in match_teams %}
                {% set team = relation.teamId %}
                {% set score = relation.score is not null ? relation.score : '-' %}
                <div class=\"listItem\">
                  <span>
                    <b>{{ team ? team.name : 'Equipe' }}</b>
                    {% if relation.isWinner is same as(true) %}
                      <span class=\"badge badge--success\">WINNER</span>
                    {% endif %}
                  </span>
                  <span class=\"badge {{ relation.isWinner is same as(true) ? 'badge--success' : '' }}\">{{ score }}</span>
                </div>
              {% endfor %}
            </div>
          {% endif %}
        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">INFOS</h3>
          {% set status = match.status|default('SCHEDULED') %}
          {% set statusClass = status == 'ONGOING' ? 'badge--warning' : (status == 'FINISHED' ? 'badge--success' : (status == 'CANCELLED' ? 'badge--danger' : 'badge--info')) %}
          <div class=\"list\">
            <div class=\"listItem\"><span>Status</span><span class=\"badge {{ statusClass }}\">{{ status }}</span></div>
            <div class=\"listItem\"><span>Heure</span><span class=\"listItem__meta\">{{ match.scheduledAt ? match.scheduledAt|date('d/m/Y H:i') : 'Non planifie' }}</span></div>
            <div class=\"listItem\"><span>Jeu</span><span class=\"listItem__meta\">{{ game ? game.name : '-' }}</span></div>
            <div class=\"listItem\"><span>Categorie</span><span class=\"listItem__meta\">{{ game and game.categoryId ? game.categoryId.name : '-' }}</span></div>
            <div class=\"listItem\"><span>Resultat soumis par</span><span class=\"listItem__meta\">{{ match.resultSubmittedByUserId ? (match.resultSubmittedByUserId.displayName ?? match.resultSubmittedByUserId.username) : 'N/A' }}</span></div>
            <div class=\"listItem\"><span>Match ID</span><span class=\"listItem__meta\">#{{ matchId }}</span></div>
          </div>

          {% if winner_team_names is not empty %}
            <div class=\"listItem\" style=\"margin-top:10px;\">
              <span>Gagnant(s)</span>
              <span class=\"listItem__meta\">{{ winner_team_names|join(', ') }}</span>
            </div>
          {% endif %}

          <div class=\"postCard__actions\" style=\"margin-top:10px;\">
            <a class=\"btn btn--ghost\" href=\"{{ path('front_matches') }}\">Retour matchs</a>
            {% if tournamentId > 0 %}
              <a class=\"btn btn--ghost\" href=\"{{ path('front_tournament_detail', {id: tournamentId}) }}\">Voir tournoi</a>
            {% endif %}
          </div>
        </aside>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/match-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\match-detail.html.twig");
    }
}
