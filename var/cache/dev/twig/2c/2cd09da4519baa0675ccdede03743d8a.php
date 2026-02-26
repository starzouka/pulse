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

/* front/pages/captain-tournaments.html.twig */
class __TwigTemplate_10da32116620697ec112b850694990f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-tournaments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-tournaments.html.twig"));

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

        yield "PULSE - Tournois equipe";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Tournois", "hero_sub" => "Inscription et suivi des tournois pour l'equipe active.", "breadcrumb_current" => "Tournois"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "tournaments", "active_team" =>         // line 18
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 18, $this->source); })())]));
        // line 20
        yield "
        <div>
          ";
        // line 22
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 23
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 23, $this->source); })()), "active_team" =>         // line 24
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 24, $this->source); })()), "selector_route" => "front_captain_tournaments"]));
        // line 27
        yield "
          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">INSCRIPTIONS DE L'EQUIPE</h3>
                <div class=\"panel__desc\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["team_participations"]) || array_key_exists("team_participations", $context) ? $context["team_participations"] : (function () { throw new RuntimeError('Variable "team_participations" does not exist.', 32, $this->source); })())), "html", null, true);
        yield " participation(s)</div>
              </div>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Tournoi</th>
                    <th>Statut inscription</th>
                    <th>Check-in</th>
                    <th>Progression</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["team_participations"]) || array_key_exists("team_participations", $context) ? $context["team_participations"] : (function () { throw new RuntimeError('Variable "team_participations" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 49
            yield "                    ";
            $context["tournament"] = CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "tournamentId", [], "any", false, false, false, 49);
            // line 50
            yield "                    ";
            $context["tournamentId"] = (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 50, $this->source); })()), "tournamentId", [], "any", false, false, false, 50)) : (0));
            // line 51
            yield "                    ";
            $context["matchesTotal"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["matches_total_by_tournament_id"] ?? null), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 51, $this->source); })()), [], "array", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matches_total_by_tournament_id"]) || array_key_exists("matches_total_by_tournament_id", $context) ? $context["matches_total_by_tournament_id"] : (function () { throw new RuntimeError('Variable "matches_total_by_tournament_id" does not exist.', 51, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 51, $this->source); })()), [], "array", false, false, false, 51)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["matches_total_by_tournament_id"]) || array_key_exists("matches_total_by_tournament_id", $context) ? $context["matches_total_by_tournament_id"] : (function () { throw new RuntimeError('Variable "matches_total_by_tournament_id" does not exist.', 51, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 51, $this->source); })()), [], "array", false, false, false, 51)) : (0));
            // line 52
            yield "                    ";
            $context["matchesFinished"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["matches_finished_by_tournament_id"] ?? null), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 52, $this->source); })()), [], "array", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matches_finished_by_tournament_id"]) || array_key_exists("matches_finished_by_tournament_id", $context) ? $context["matches_finished_by_tournament_id"] : (function () { throw new RuntimeError('Variable "matches_finished_by_tournament_id" does not exist.', 52, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 52, $this->source); })()), [], "array", false, false, false, 52)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["matches_finished_by_tournament_id"]) || array_key_exists("matches_finished_by_tournament_id", $context) ? $context["matches_finished_by_tournament_id"] : (function () { throw new RuntimeError('Variable "matches_finished_by_tournament_id" does not exist.', 52, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 52, $this->source); })()), [], "array", false, false, false, 52)) : (0));
            // line 53
            yield "                    <tr>
                      <td>
                        <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 55, $this->source); })())]), "html", null, true);
            yield "\">";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Tournoi #" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 55, $this->source); })())), "html", null, true)));
            yield "</a>
                      </td>
                      <td>
                        ";
            // line 58
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "status", [], "any", false, false, false, 58)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "status", [], "any", false, false, false, 58)) : ("PENDING"));
            // line 59
            yield "                        <span class=\"badge ";
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 59, $this->source); })()) == "ACCEPTED")) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 59, $this->source); })()) == "REFUSED")) ? ("badge--danger") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 59, $this->source); })()) == "PENDING")) ? ("badge--info") : (""))))));
            yield "\">
                          ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 60, $this->source); })()), "html", null, true);
            yield "
                        </span>
                      </td>
                      <td>
                        ";
            // line 64
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "checkedIn", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "                          <span class=\"badge badge--success\">OK</span>
                        ";
            } else {
                // line 67
                yield "                          <span class=\"badge\">NON</span>
                        ";
            }
            // line 69
            yield "                      </td>
                      <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchesFinished"]) || array_key_exists("matchesFinished", $context) ? $context["matchesFinished"] : (function () { throw new RuntimeError('Variable "matchesFinished" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchesTotal"]) || array_key_exists("matchesTotal", $context) ? $context["matchesTotal"] : (function () { throw new RuntimeError('Variable "matchesTotal" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "</td>
                      <td>
                        <div class=\"postCard__actions\">
                          ";
            // line 73
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "status", [], "any", false, false, false, 73), ["PENDING", "ACCEPTED"])) {
                // line 74
                yield "                            <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_tournaments_cancel", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 74, $this->source); })())]), "html", null, true);
                yield "\">
                              <input type=\"hidden\" name=\"_token\" value=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("captain_tournament_cancel_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 75, $this->source); })()))), "html", null, true);
                yield "\">
                              <input type=\"hidden\" name=\"team_id\" value=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 76, $this->source); })()), "teamId", [], "any", false, false, false, 76), "html", null, true);
                yield "\">
                              <button class=\"btn btn--ghost\" type=\"submit\">Annuler</button>
                            </form>
                          ";
            }
            // line 80
            yield "
                          ";
            // line 81
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "status", [], "any", false, false, false, 81) == "ACCEPTED") &&  !CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "checkedIn", [], "any", false, false, false, 81))) {
                // line 82
                yield "                            <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_tournaments_checkin", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 82, $this->source); })())]), "html", null, true);
                yield "\">
                              <input type=\"hidden\" name=\"_token\" value=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("captain_tournament_checkin_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 83, $this->source); })()))), "html", null, true);
                yield "\">
                              <input type=\"hidden\" name=\"team_id\" value=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 84, $this->source); })()), "teamId", [], "any", false, false, false, 84), "html", null, true);
                yield "\">
                              <button class=\"btn btn--primary\" type=\"submit\">Check-in</button>
                            </form>
                          ";
            }
            // line 88
            yield "                        </div>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 91
        if (!$context['_iterated']) {
            // line 92
            yield "                    <tr>
                      <td colspan=\"5\">Aucune inscription pour cette equipe.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['participation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                </tbody>
              </table>
            </div>
          </section>

          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TOURNOIS OUVERTS</h3>
                <div class=\"panel__desc\">Inscription directe ou demande selon le mode du tournoi.</div>
              </div>
            </div>

            <div class=\"cardsGrid\" style=\"margin-top:10px;\">
              ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["open_tournaments_data"]) || array_key_exists("open_tournaments_data", $context) ? $context["open_tournaments_data"] : (function () { throw new RuntimeError('Variable "open_tournaments_data" does not exist.', 110, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 111
            yield "                ";
            $context["tournament"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tournament", [], "any", false, false, false, 111);
            // line 112
            yield "                ";
            $context["participation"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "participation", [], "any", false, false, false, 112);
            // line 113
            yield "                ";
            $context["tournamentId"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 113, $this->source); })()), "tournamentId", [], "any", false, false, false, 113);
            // line 114
            yield "                ";
            $context["progress"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "matches_total", [], "any", false, false, false, 114) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "matches_finished", [], "any", false, false, false, 114) / CoreExtension::getAttribute($this->env, $this->source, $context["row"], "matches_total", [], "any", false, false, false, 114)) * 100))) : (0));
            // line 115
            yield "                ";
            $context["tournamentPhotoPath"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 115, $this->source); })()), "photoPath", [], "any", false, false, false, 115)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 115, $this->source); })()), "photoPath", [], "any", false, false, false, 115)) : (""));
            // line 116
            yield "                ";
            $context["tournamentPhotoUrl"] = (((($tmp = (isset($context["tournamentPhotoPath"]) || array_key_exists("tournamentPhotoPath", $context) ? $context["tournamentPhotoPath"] : (function () { throw new RuntimeError('Variable "tournamentPhotoPath" does not exist.', 116, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["tournamentPhotoPath"]) || array_key_exists("tournamentPhotoPath", $context) ? $context["tournamentPhotoPath"] : (function () { throw new RuntimeError('Variable "tournamentPhotoPath" does not exist.', 116, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["tournamentPhotoPath"]) || array_key_exists("tournamentPhotoPath", $context) ? $context["tournamentPhotoPath"] : (function () { throw new RuntimeError('Variable "tournamentPhotoPath" does not exist.', 116, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["tournamentPhotoPath"]) || array_key_exists("tournamentPhotoPath", $context) ? $context["tournamentPhotoPath"] : (function () { throw new RuntimeError('Variable "tournamentPhotoPath" does not exist.', 116, $this->source); })()))))) : ((("https://picsum.photos/seed/captain_tournament_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 116, $this->source); })())) . "/1200/800")));
            // line 117
            yield "                <article class=\"card card--tournament\">
                  <div class=\"card__media\" data-bg=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentPhotoUrl"]) || array_key_exists("tournamentPhotoUrl", $context) ? $context["tournamentPhotoUrl"] : (function () { throw new RuntimeError('Variable "tournamentPhotoUrl" does not exist.', 118, $this->source); })()), "html", null, true);
            yield "\">
                    <div class=\"card__chips\">
                      <span class=\"chip chip--status\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 120, $this->source); })()), "status", [], "any", false, false, false, 120), "html", null, true);
            yield "</span>
                      <span class=\"chip chip--format\">";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 121, $this->source); })()), "format", [], "any", false, false, false, 121), "html", null, true);
            yield "</span>
                      <span class=\"chip\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 122, $this->source); })()), "registrationMode", [], "any", false, false, false, 122), "html", null, true);
            yield "</span>
                    </div>
                  </div>
                  <div class=\"card__body\">
                    <h4 class=\"card__title\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 126, $this->source); })()), "title", [], "any", false, false, false, 126), "html", null, true);
            yield "</h4>
                    <p class=\"card__desc\">
                      Deadline: <b>";
            // line 128
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 128, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 128, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 128), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</b>
                      - Prize: <b>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 129, $this->source); })()), "prizePool", [], "any", false, false, false, 129), "html", null, true);
            yield " DT</b>
                    </p>
                    <div class=\"card__metaRow\">
                      <span class=\"metaPill\">Inscrits: <b>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "registered_count", [], "any", false, false, false, 132), "html", null, true);
            yield "</b></span>
                      <span class=\"metaPill\">Acceptes: <b>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "accepted_count", [], "any", false, false, false, 133), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 133, $this->source); })()), "maxTeams", [], "any", false, false, false, 133), "html", null, true);
            yield "</b></span>
                    </div>
                    <div class=\"progress\"><div class=\"progress__bar\" style=\"width:";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 135, $this->source); })()), "html", null, true);
            yield "%\"></div></div>
                    <div class=\"card__actions\">
                      <a class=\"btn btn--ghost\" href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 137, $this->source); })())]), "html", null, true);
            yield "\">Voir detail</a>
                      ";
            // line 138
            if (((isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 138, $this->source); })()) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 138, $this->source); })()), "status", [], "any", false, false, false, 138), ["PENDING", "ACCEPTED"]))) {
                // line 139
                yield "                        <span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 139, $this->source); })()), "status", [], "any", false, false, false, 139) == "ACCEPTED")) ? ("badge--success") : ("badge--info"));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 139, $this->source); })()), "status", [], "any", false, false, false, 139), "html", null, true);
                yield "</span>
                      ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 140
$context["row"], "registration_open", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 141
                yield "                        <form method=\"post\" action=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_tournaments_register");
                yield "\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("captain_tournament_register"), "html", null, true);
                yield "\">
                          <input type=\"hidden\" name=\"team_id\" value=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 143, $this->source); })()), "teamId", [], "any", false, false, false, 143), "html", null, true);
                yield "\">
                          <input type=\"hidden\" name=\"tournament_id\" value=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 144, $this->source); })()), "html", null, true);
                yield "\">
                          <button class=\"btn btn--primary\" type=\"submit\">
                            ";
                // line 146
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 146, $this->source); })()), "registrationMode", [], "any", false, false, false, 146) == "OPEN")) ? ("Inscrire equipe") : ("Envoyer demande"));
                yield "
                          </button>
                        </form>
                      ";
            } else {
                // line 150
                yield "                        <span class=\"badge badge--danger\">Inscriptions fermees</span>
                      ";
            }
            // line 152
            yield "                    </div>
                  </div>
                </article>
              ";
            $context['_iterated'] = true;
        }
        // line 155
        if (!$context['_iterated']) {
            // line 156
            yield "                <div class=\"emptyState\">Aucun tournoi OPEN actuellement.</div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "            </div>
          </section>
        </div>
      </div>

      ";
        // line 163
        yield from $this->load("front/partials/_footer.html.twig", 163)->unwrap()->yield($context);
        // line 164
        yield "    </section>
  </main>

  ";
        // line 167
        yield from $this->load("front/partials/_auth_modal.html.twig", 167)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/captain-tournaments.html.twig";
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
        return array (  434 => 167,  429 => 164,  427 => 163,  420 => 158,  413 => 156,  411 => 155,  404 => 152,  400 => 150,  393 => 146,  388 => 144,  384 => 143,  380 => 142,  375 => 141,  373 => 140,  366 => 139,  364 => 138,  360 => 137,  355 => 135,  348 => 133,  344 => 132,  338 => 129,  334 => 128,  329 => 126,  322 => 122,  318 => 121,  314 => 120,  309 => 118,  306 => 117,  303 => 116,  300 => 115,  297 => 114,  294 => 113,  291 => 112,  288 => 111,  283 => 110,  267 => 96,  258 => 92,  256 => 91,  249 => 88,  242 => 84,  238 => 83,  233 => 82,  231 => 81,  228 => 80,  221 => 76,  217 => 75,  212 => 74,  210 => 73,  202 => 70,  199 => 69,  195 => 67,  191 => 65,  189 => 64,  182 => 60,  177 => 59,  175 => 58,  167 => 55,  163 => 53,  160 => 52,  157 => 51,  154 => 50,  151 => 49,  146 => 48,  127 => 32,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Tournois equipe{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'CAPITAINE',
    hero_title: 'Tournois',
    hero_sub: \"Inscription et suivi des tournois pour l'equipe active.\",
    breadcrumb_current: 'Tournois'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_captain_side_nav.html.twig' with {
          active: 'tournaments',
          active_team: active_team
        } %}

        <div>
          {% include 'front/partials/_captain_team_selector.html.twig' with {
            captain_teams: captain_teams,
            active_team: active_team,
            selector_route: 'front_captain_tournaments'
          } %}

          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">INSCRIPTIONS DE L'EQUIPE</h3>
                <div class=\"panel__desc\">{{ team_participations|length }} participation(s)</div>
              </div>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Tournoi</th>
                    <th>Statut inscription</th>
                    <th>Check-in</th>
                    <th>Progression</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {% for participation in team_participations %}
                    {% set tournament = participation.tournamentId %}
                    {% set tournamentId = tournament ? tournament.tournamentId : 0 %}
                    {% set matchesTotal = matches_total_by_tournament_id[tournamentId] ?? 0 %}
                    {% set matchesFinished = matches_finished_by_tournament_id[tournamentId] ?? 0 %}
                    <tr>
                      <td>
                        <a href=\"{{ path('front_tournament_detail', {id: tournamentId}) }}\">{{ tournament.title ?: ('Tournoi #' ~ tournamentId) }}</a>
                      </td>
                      <td>
                        {% set status = participation.status ?: 'PENDING' %}
                        <span class=\"badge {{ status == 'ACCEPTED' ? 'badge--success' : (status == 'REFUSED' ? 'badge--danger' : (status == 'PENDING' ? 'badge--info' : '')) }}\">
                          {{ status }}
                        </span>
                      </td>
                      <td>
                        {% if participation.checkedIn %}
                          <span class=\"badge badge--success\">OK</span>
                        {% else %}
                          <span class=\"badge\">NON</span>
                        {% endif %}
                      </td>
                      <td>{{ matchesFinished }}/{{ matchesTotal }}</td>
                      <td>
                        <div class=\"postCard__actions\">
                          {% if participation.status in ['PENDING', 'ACCEPTED'] %}
                            <form method=\"post\" action=\"{{ path('front_captain_tournaments_cancel', {id: tournamentId}) }}\">
                              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_tournament_cancel_' ~ tournamentId) }}\">
                              <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
                              <button class=\"btn btn--ghost\" type=\"submit\">Annuler</button>
                            </form>
                          {% endif %}

                          {% if participation.status == 'ACCEPTED' and not participation.checkedIn %}
                            <form method=\"post\" action=\"{{ path('front_captain_tournaments_checkin', {id: tournamentId}) }}\">
                              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_tournament_checkin_' ~ tournamentId) }}\">
                              <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
                              <button class=\"btn btn--primary\" type=\"submit\">Check-in</button>
                            </form>
                          {% endif %}
                        </div>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"5\">Aucune inscription pour cette equipe.</td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </section>

          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TOURNOIS OUVERTS</h3>
                <div class=\"panel__desc\">Inscription directe ou demande selon le mode du tournoi.</div>
              </div>
            </div>

            <div class=\"cardsGrid\" style=\"margin-top:10px;\">
              {% for row in open_tournaments_data %}
                {% set tournament = row.tournament %}
                {% set participation = row.participation %}
                {% set tournamentId = tournament.tournamentId %}
                {% set progress = row.matches_total > 0 ? ((row.matches_finished / row.matches_total) * 100)|round : 0 %}
                {% set tournamentPhotoPath = tournament.photoPath ?: '' %}
                {% set tournamentPhotoUrl = tournamentPhotoPath ? (tournamentPhotoPath starts with 'http' ? tournamentPhotoPath : asset(tournamentPhotoPath)) : 'https://picsum.photos/seed/captain_tournament_' ~ tournamentId ~ '/1200/800' %}
                <article class=\"card card--tournament\">
                  <div class=\"card__media\" data-bg=\"{{ tournamentPhotoUrl }}\">
                    <div class=\"card__chips\">
                      <span class=\"chip chip--status\">{{ tournament.status }}</span>
                      <span class=\"chip chip--format\">{{ tournament.format }}</span>
                      <span class=\"chip\">{{ tournament.registrationMode }}</span>
                    </div>
                  </div>
                  <div class=\"card__body\">
                    <h4 class=\"card__title\">{{ tournament.title }}</h4>
                    <p class=\"card__desc\">
                      Deadline: <b>{{ tournament.registrationDeadline ? tournament.registrationDeadline|date('d/m/Y') : '-' }}</b>
                      - Prize: <b>{{ tournament.prizePool }} DT</b>
                    </p>
                    <div class=\"card__metaRow\">
                      <span class=\"metaPill\">Inscrits: <b>{{ row.registered_count }}</b></span>
                      <span class=\"metaPill\">Acceptes: <b>{{ row.accepted_count }}/{{ tournament.maxTeams }}</b></span>
                    </div>
                    <div class=\"progress\"><div class=\"progress__bar\" style=\"width:{{ progress }}%\"></div></div>
                    <div class=\"card__actions\">
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_tournament_detail', {id: tournamentId}) }}\">Voir detail</a>
                      {% if participation and participation.status in ['PENDING', 'ACCEPTED'] %}
                        <span class=\"badge {{ participation.status == 'ACCEPTED' ? 'badge--success' : 'badge--info' }}\">{{ participation.status }}</span>
                      {% elseif row.registration_open %}
                        <form method=\"post\" action=\"{{ path('front_captain_tournaments_register') }}\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_tournament_register') }}\">
                          <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
                          <input type=\"hidden\" name=\"tournament_id\" value=\"{{ tournamentId }}\">
                          <button class=\"btn btn--primary\" type=\"submit\">
                            {{ tournament.registrationMode == 'OPEN' ? 'Inscrire equipe' : 'Envoyer demande' }}
                          </button>
                        </form>
                      {% else %}
                        <span class=\"badge badge--danger\">Inscriptions fermees</span>
                      {% endif %}
                    </div>
                  </div>
                </article>
              {% else %}
                <div class=\"emptyState\">Aucun tournoi OPEN actuellement.</div>
              {% endfor %}
            </div>
          </section>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}

", "front/pages/captain-tournaments.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\captain-tournaments.html.twig");
    }
}
