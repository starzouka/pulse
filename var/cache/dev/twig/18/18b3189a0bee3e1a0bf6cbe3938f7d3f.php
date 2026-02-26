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

/* front/pages/tournament-detail.html.twig */
class __TwigTemplate_b3a7069716f70133b25150f53f5d8a8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/tournament-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/tournament-detail.html.twig"));

        // line 3
        $context["tournamentId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "tournamentId", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 3, $this->source); })()), "tournamentId", [], "any", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 3, $this->source); })()), "tournamentId", [], "any", false, false, false, 3)) : (0));
        // line 4
        $context["game"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 4, $this->source); })()), "gameId", [], "any", false, false, false, 4);
        // line 5
        $context["organizer"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 5, $this->source); })()), "organizerUserId", [], "any", false, false, false, 5);
        // line 6
        $context["photoPath"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "photoPath", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 6, $this->source); })()), "photoPath", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 6, $this->source); })()), "photoPath", [], "any", false, false, false, 6)) : (""));
        // line 7
        $context["photoUrl"] = (((($tmp = (isset($context["photoPath"]) || array_key_exists("photoPath", $context) ? $context["photoPath"] : (function () { throw new RuntimeError('Variable "photoPath" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["photoPath"]) || array_key_exists("photoPath", $context) ? $context["photoPath"] : (function () { throw new RuntimeError('Variable "photoPath" does not exist.', 7, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["photoPath"]) || array_key_exists("photoPath", $context) ? $context["photoPath"] : (function () { throw new RuntimeError('Variable "photoPath" does not exist.', 7, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["photoPath"]) || array_key_exists("photoPath", $context) ? $context["photoPath"] : (function () { throw new RuntimeError('Variable "photoPath" does not exist.', 7, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_tournament_detail_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 7, $this->source); })())) . "/1200/800")));
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
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

        yield "PULSE - Detail tournoi";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "  ";
        yield from $this->load("front/partials/_hero_mini.html.twig", 12)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "TOURNOI", "hero_title" => CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "hero_sub" => "Progression, classement, matchs et equipes.", "breadcrumb_current" => "Detail tournoi"]));
        // line 18
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 22
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                yield "          <div class=\"listItem\">
            <span>";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
            <span class=\"badge ";
                // line 25
                yield ((($context["label"] == "error")) ? ("badge--danger") : (((($context["label"] == "info")) ? ("badge--info") : ("badge--success"))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
      <div class=\"layout\">
        <section class=\"panel\">
          <div class=\"coverBlock\" data-bg=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["photoUrl"]) || array_key_exists("photoUrl", $context) ? $context["photoUrl"] : (function () { throw new RuntimeError('Variable "photoUrl" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\"></div>
          <h3 style=\"margin:12px 0 0;\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        yield "</h3>
          <p class=\"muted\">
            Organisateur: ";
        // line 35
        yield (((($tmp = (isset($context["organizer"]) || array_key_exists("organizer", $context) ? $context["organizer"] : (function () { throw new RuntimeError('Variable "organizer" does not exist.', 35, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["organizer"] ?? null), "displayName", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["organizer"]) || array_key_exists("organizer", $context) ? $context["organizer"] : (function () { throw new RuntimeError('Variable "organizer" does not exist.', 35, $this->source); })()), "displayName", [], "any", false, false, false, 35)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organizer"]) || array_key_exists("organizer", $context) ? $context["organizer"] : (function () { throw new RuntimeError('Variable "organizer" does not exist.', 35, $this->source); })()), "displayName", [], "any", false, false, false, 35), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organizer"]) || array_key_exists("organizer", $context) ? $context["organizer"] : (function () { throw new RuntimeError('Variable "organizer" does not exist.', 35, $this->source); })()), "username", [], "any", false, false, false, 35), "html", null, true)))) : ("-"));
        yield "
            · Jeu: ";
        // line 36
        yield (((($tmp = (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true)) : ("-"));
        yield "
            · Format: ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 37, $this->source); })()), "format", [], "any", false, false, false, 37), "html", null, true);
        yield "
            · Prize pool: ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 38, $this->source); })()), "prizePool", [], "any", false, false, false, 38), 2, ".", " "), "html", null, true);
        yield " DT
          </p>
          <div class=\"list\" style=\"margin-top:10px;\">
            <div class=\"listItem\"><span>Dates</span><span class=\"listItem__meta\">";
        // line 41
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 41, $this->source); })()), "startDate", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 41, $this->source); })()), "startDate", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true)) : ("-"));
        yield " - ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 41, $this->source); })()), "endDate", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 41, $this->source); })()), "endDate", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</span></div>
            <div class=\"listItem\"><span>Deadline</span><span class=\"listItem__meta\">";
        // line 42
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 42, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 42, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true)) : ("Aucune"));
        yield "</span></div>
            <div class=\"listItem\"><span>Max equipes</span><span class=\"listItem__meta\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 43, $this->source); })()), "maxTeams", [], "any", false, false, false, 43), "html", null, true);
        yield "</span></div>
            <div class=\"listItem\"><span>Statut</span><span class=\"badge ";
        // line 44
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44) == "OPEN")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44) == "ONGOING")) ? ("badge--warning") : (""))));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44), "html", null, true);
        yield "</span></div>
            <div class=\"listItem\"><span>Mode inscription</span><span class=\"listItem__meta\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 45, $this->source); })()), "registrationMode", [], "any", false, false, false, 45), "html", null, true);
        yield "</span></div>
          </div>
          <div class=\"progress\" style=\"margin-top:10px;\"><div class=\"progress__bar\" style=\"width:";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress_percent"]) || array_key_exists("progress_percent", $context) ? $context["progress_percent"] : (function () { throw new RuntimeError('Variable "progress_percent" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "%\"></div></div>
          <div class=\"muted\" style=\"margin-top:6px;\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matches_finished_count"]) || array_key_exists("matches_finished_count", $context) ? $context["matches_finished_count"] : (function () { throw new RuntimeError('Variable "matches_finished_count" does not exist.', 48, $this->source); })()), "html", null, true);
        yield " match(s) termine(s) / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matches_total"]) || array_key_exists("matches_total", $context) ? $context["matches_total"] : (function () { throw new RuntimeError('Variable "matches_total" does not exist.', 48, $this->source); })()), "html", null, true);
        yield "</div>
        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">INSCRIPTIONS</h3>
          <div class=\"list\">
            <div class=\"listItem\"><span>Equipes acceptees</span><span class=\"listItem__meta\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accepted_count"]) || array_key_exists("accepted_count", $context) ? $context["accepted_count"] : (function () { throw new RuntimeError('Variable "accepted_count" does not exist.', 54, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 54, $this->source); })()), "maxTeams", [], "any", false, false, false, 54), "html", null, true);
        yield "</span></div>
            <div class=\"listItem\"><span>Total inscriptions</span><span class=\"listItem__meta\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["registered_count"]) || array_key_exists("registered_count", $context) ? $context["registered_count"] : (function () { throw new RuntimeError('Variable "registered_count" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"listItem\"><span>Mode</span><span class=\"listItem__meta\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 56, $this->source); })()), "registrationMode", [], "any", false, false, false, 56), "html", null, true);
        yield "</span></div>
          </div>

          ";
        // line 59
        if ((($tmp =  !(isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 59, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "            <a class=\"btn btn--primary\" style=\"margin-top:10px;\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "uri", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\">Se connecter pour participer</a>
          ";
        } elseif (Twig\Extension\CoreExtension::testEmpty(        // line 61
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 61, $this->source); })()))) {
            // line 62
            yield "            <div class=\"emptyState\" style=\"margin-top:10px;\">Seul un capitaine peut participer. Ce compte ne dirige aucune equipe.</div>
          ";
        } elseif ((($tmp =  !        // line 63
(isset($context["registration_open"]) || array_key_exists("registration_open", $context) ? $context["registration_open"] : (function () { throw new RuntimeError('Variable "registration_open" does not exist.', 63, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "            <div class=\"emptyState\" style=\"margin-top:10px;\">Les inscriptions sont fermees pour ce tournoi.</div>
          ";
        } else {
            // line 66
            yield "            <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_participate", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 66, $this->source); })())]), "html", null, true);
            yield "\" style=\"margin-top:10px;\">
              <input type=\"hidden\" name=\"_token\" value=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("tournament_participate_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 67, $this->source); })()))), "html", null, true);
            yield "\">

              ";
            // line 69
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 69, $this->source); })())) > 1)) {
                // line 70
                yield "                <label class=\"field\">
                  <span class=\"field__label\">Choisir l'equipe capitaine</span>
                  <select class=\"input\" name=\"team_id\" required>
                    <option value=\"\">Selectionner...</option>
                    ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 74, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                    // line 75
                    yield "                      ";
                    $context["teamId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", true, true, false, 75) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 75)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 75)) : (0));
                    // line 76
                    yield "                      ";
                    $context["participationStatus"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["captain_participations_by_team_id"] ?? null), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 76, $this->source); })()), [], "array", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain_participations_by_team_id"]) || array_key_exists("captain_participations_by_team_id", $context) ? $context["captain_participations_by_team_id"] : (function () { throw new RuntimeError('Variable "captain_participations_by_team_id" does not exist.', 76, $this->source); })()), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 76, $this->source); })()), [], "array", false, false, false, 76)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain_participations_by_team_id"]) || array_key_exists("captain_participations_by_team_id", $context) ? $context["captain_participations_by_team_id"] : (function () { throw new RuntimeError('Variable "captain_participations_by_team_id" does not exist.', 76, $this->source); })()), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 76, $this->source); })()), [], "array", false, false, false, 76)) : (null));
                    // line 77
                    yield "                      <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 77, $this->source); })()), "html", null, true);
                    yield "\">
                        ";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 78), "html", null, true);
                    if ((($tmp = (isset($context["participationStatus"]) || array_key_exists("participationStatus", $context) ? $context["participationStatus"] : (function () { throw new RuntimeError('Variable "participationStatus" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["participationStatus"]) || array_key_exists("participationStatus", $context) ? $context["participationStatus"] : (function () { throw new RuntimeError('Variable "participationStatus" does not exist.', 78, $this->source); })()), "html", null, true);
                        yield ")";
                    }
                    // line 79
                    yield "                      </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                yield "                  </select>
                </label>
              ";
            } else {
                // line 84
                yield "                ";
                $context["uniqueTeam"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 84, $this->source); })()), 0, [], "array", false, false, false, 84);
                // line 85
                yield "                <input type=\"hidden\" name=\"team_id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uniqueTeam"]) || array_key_exists("uniqueTeam", $context) ? $context["uniqueTeam"] : (function () { throw new RuntimeError('Variable "uniqueTeam" does not exist.', 85, $this->source); })()), "teamId", [], "any", false, false, false, 85), "html", null, true);
                yield "\">
                <div class=\"listItem\" style=\"margin-top:8px;\">
                  <span>Equipe selectionnee</span>
                  <span class=\"listItem__meta\">
                    ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uniqueTeam"]) || array_key_exists("uniqueTeam", $context) ? $context["uniqueTeam"] : (function () { throw new RuntimeError('Variable "uniqueTeam" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), "html", null, true);
                yield "
                    ";
                // line 90
                $context["singleStatus"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["captain_participations_by_team_id"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["uniqueTeam"] ?? null), "teamId", [], "any", true, true, false, 90) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["uniqueTeam"]) || array_key_exists("uniqueTeam", $context) ? $context["uniqueTeam"] : (function () { throw new RuntimeError('Variable "uniqueTeam" does not exist.', 90, $this->source); })()), "teamId", [], "any", false, false, false, 90)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["uniqueTeam"]) || array_key_exists("uniqueTeam", $context) ? $context["uniqueTeam"] : (function () { throw new RuntimeError('Variable "uniqueTeam" does not exist.', 90, $this->source); })()), "teamId", [], "any", false, false, false, 90)) : (0)), [], "array", true, true, false, 90) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain_participations_by_team_id"]) || array_key_exists("captain_participations_by_team_id", $context) ? $context["captain_participations_by_team_id"] : (function () { throw new RuntimeError('Variable "captain_participations_by_team_id" does not exist.', 90, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, ($context["uniqueTeam"] ?? null), "teamId", [], "any", true, true, false, 90) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["uniqueTeam"]) || array_key_exists("uniqueTeam", $context) ? $context["uniqueTeam"] : (function () { throw new RuntimeError('Variable "uniqueTeam" does not exist.', 90, $this->source); })()), "teamId", [], "any", false, false, false, 90)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["uniqueTeam"]) || array_key_exists("uniqueTeam", $context) ? $context["uniqueTeam"] : (function () { throw new RuntimeError('Variable "uniqueTeam" does not exist.', 90, $this->source); })()), "teamId", [], "any", false, false, false, 90)) : (0)), [], "array", false, false, false, 90)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain_participations_by_team_id"]) || array_key_exists("captain_participations_by_team_id", $context) ? $context["captain_participations_by_team_id"] : (function () { throw new RuntimeError('Variable "captain_participations_by_team_id" does not exist.', 90, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, ($context["uniqueTeam"] ?? null), "teamId", [], "any", true, true, false, 90) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["uniqueTeam"]) || array_key_exists("uniqueTeam", $context) ? $context["uniqueTeam"] : (function () { throw new RuntimeError('Variable "uniqueTeam" does not exist.', 90, $this->source); })()), "teamId", [], "any", false, false, false, 90)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["uniqueTeam"]) || array_key_exists("uniqueTeam", $context) ? $context["uniqueTeam"] : (function () { throw new RuntimeError('Variable "uniqueTeam" does not exist.', 90, $this->source); })()), "teamId", [], "any", false, false, false, 90)) : (0)), [], "array", false, false, false, 90)) : (null));
                // line 91
                yield "                    ";
                if ((($tmp = (isset($context["singleStatus"]) || array_key_exists("singleStatus", $context) ? $context["singleStatus"] : (function () { throw new RuntimeError('Variable "singleStatus" does not exist.', 91, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["singleStatus"]) || array_key_exists("singleStatus", $context) ? $context["singleStatus"] : (function () { throw new RuntimeError('Variable "singleStatus" does not exist.', 91, $this->source); })()), "html", null, true);
                    yield ")";
                }
                // line 92
                yield "                  </span>
                </div>
              ";
            }
            // line 95
            yield "
              <button class=\"btn btn--primary\" type=\"submit\" style=\"margin-top:10px;\">Participer</button>
            </form>
          ";
        }
        // line 99
        yield "        </aside>
      </div>

      <section class=\"panel\">
        <div class=\"tabs\" data-tabs=\"tourn-tabs\">
          <button class=\"tab is-active\" data-tab=\"overview\">Apercu</button>
          <button class=\"tab\" data-tab=\"scores\">Classement</button>
          <button class=\"tab\" data-tab=\"matches\">Matchs</button>
          <button class=\"tab\" data-tab=\"teams\">Equipes</button>
        </div>

        <div class=\"tabPanels\" data-panels=\"tourn-tabs\">
          <section class=\"tabPanel is-active\" data-panel=\"overview\">
            <div class=\"list\">
              <div class=\"listItem\"><span>Description</span><span class=\"listItem__meta\">";
        // line 113
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 113, $this->source); })()), "description", [], "any", false, false, false, 113)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 113, $this->source); })()), "description", [], "any", false, false, false, 113), "html", null, true)) : ("Aucune description."));
        yield "</span></div>
              <div class=\"listItem\"><span>Regles</span><span class=\"listItem__meta\">";
        // line 114
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 114, $this->source); })()), "rules", [], "any", false, false, false, 114)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 114, $this->source); })()), "rules", [], "any", false, false, false, 114), "html", null, true)) : ("Aucune regle specifiee."));
        yield "</span></div>
              <div class=\"listItem\"><span>Recompense</span><span class=\"listItem__meta\">";
        // line 115
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 115, $this->source); })()), "prizeDescription", [], "any", false, false, false, 115)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 115, $this->source); })()), "prizeDescription", [], "any", false, false, false, 115), "html", null, true)) : ("Prize pool uniquement"));
        yield "</span></div>
            </div>
          </section>

          <section class=\"tabPanel\" data-panel=\"scores\">
            ";
        // line 120
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["scoreboard_rows"]) || array_key_exists("scoreboard_rows", $context) ? $context["scoreboard_rows"] : (function () { throw new RuntimeError('Variable "scoreboard_rows" does not exist.', 120, $this->source); })()))) {
            // line 121
            yield "              <div class=\"emptyState\">Aucun score disponible pour le moment.</div>
            ";
        } else {
            // line 123
            yield "              <div class=\"tableWrap\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th>Equipe</th>
                      <th>MJ</th>
                      <th>V</th>
                      <th>D</th>
                      <th>Points</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["scoreboard_rows"]) || array_key_exists("scoreboard_rows", $context) ? $context["scoreboard_rows"] : (function () { throw new RuntimeError('Variable "scoreboard_rows" does not exist.', 135, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 136
                yield "                      <tr>
                        <td>";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "team_name", [], "any", false, false, false, 137), "html", null, true);
                yield "</td>
                        <td>";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "played", [], "any", false, false, false, 138), "html", null, true);
                yield "</td>
                        <td>";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "wins", [], "any", false, false, false, 139), "html", null, true);
                yield "</td>
                        <td>";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "losses", [], "any", false, false, false, 140), "html", null, true);
                yield "</td>
                        <td>";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "points", [], "any", false, false, false, 141), "html", null, true);
                yield "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "                  </tbody>
                </table>
              </div>
            ";
        }
        // line 148
        yield "          </section>

          <section class=\"tabPanel\" data-panel=\"matches\">
            <h4 style=\"margin:0 0 8px;\">Matchs termines</h4>
            ";
        // line 152
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["matches_finished"]) || array_key_exists("matches_finished", $context) ? $context["matches_finished"] : (function () { throw new RuntimeError('Variable "matches_finished" does not exist.', 152, $this->source); })()))) {
            // line 153
            yield "              <div class=\"emptyState\">Aucun match termine.</div>
            ";
        } else {
            // line 155
            yield "              <div class=\"cardsGrid\">
                ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matches_finished"]) || array_key_exists("matches_finished", $context) ? $context["matches_finished"] : (function () { throw new RuntimeError('Variable "matches_finished" does not exist.', 156, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 157
                yield "                  <article class=\"card card--tournament\">
                    <div class=\"card__body\">
                      <h4 class=\"card__title\">";
                // line 159
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 159)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 159), "html", null, true)) : ("Round"));
                yield "</h4>
                      <p class=\"card__desc\">Statut: ";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 160), "html", null, true);
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " · BO";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 160), "html", null, true);
                }
                yield "</p>
                      <div class=\"card__metaRow\">
                        <span class=\"metaPill\">Planifie: <b>";
                // line 162
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 162), "d/m/Y H:i"), "html", null, true)) : ("-"));
                yield "</b></span>
                      </div>
                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_match_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 165)]), "html", null, true);
                yield "\">Detail match</a>
                      </div>
                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            yield "              </div>
            ";
        }
        // line 172
        yield "
            <h4 style=\"margin:14px 0 8px;\">Matchs en cours</h4>
            ";
        // line 174
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["matches_ongoing"]) || array_key_exists("matches_ongoing", $context) ? $context["matches_ongoing"] : (function () { throw new RuntimeError('Variable "matches_ongoing" does not exist.', 174, $this->source); })()))) {
            // line 175
            yield "              <div class=\"emptyState\">Aucun match en cours.</div>
            ";
        } else {
            // line 177
            yield "              <div class=\"cardsGrid\">
                ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matches_ongoing"]) || array_key_exists("matches_ongoing", $context) ? $context["matches_ongoing"] : (function () { throw new RuntimeError('Variable "matches_ongoing" does not exist.', 178, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 179
                yield "                  <article class=\"card card--tournament\">
                    <div class=\"card__body\">
                      <h4 class=\"card__title\">";
                // line 181
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 181)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 181), "html", null, true)) : ("Round"));
                yield "</h4>
                      <p class=\"card__desc\">Statut: ";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 182), "html", null, true);
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " · BO";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 182), "html", null, true);
                }
                yield "</p>
                      <div class=\"card__metaRow\">
                        <span class=\"metaPill\">Planifie: <b>";
                // line 184
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 184), "d/m/Y H:i"), "html", null, true)) : ("-"));
                yield "</b></span>
                      </div>
                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_match_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 187)]), "html", null, true);
                yield "\">Detail match</a>
                      </div>
                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            yield "              </div>
            ";
        }
        // line 194
        yield "
            <h4 style=\"margin:14px 0 8px;\">Matchs a venir</h4>
            ";
        // line 196
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["matches_upcoming"]) || array_key_exists("matches_upcoming", $context) ? $context["matches_upcoming"] : (function () { throw new RuntimeError('Variable "matches_upcoming" does not exist.', 196, $this->source); })()))) {
            // line 197
            yield "              <div class=\"emptyState\">Aucun match a venir.</div>
            ";
        } else {
            // line 199
            yield "              <div class=\"cardsGrid\">
                ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matches_upcoming"]) || array_key_exists("matches_upcoming", $context) ? $context["matches_upcoming"] : (function () { throw new RuntimeError('Variable "matches_upcoming" does not exist.', 200, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 201
                yield "                  <article class=\"card card--tournament\">
                    <div class=\"card__body\">
                      <h4 class=\"card__title\">";
                // line 203
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 203)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 203), "html", null, true)) : ("Round"));
                yield "</h4>
                      <p class=\"card__desc\">Statut: ";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 204), "html", null, true);
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " · BO";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 204), "html", null, true);
                }
                yield "</p>
                      <div class=\"card__metaRow\">
                        <span class=\"metaPill\">Planifie: <b>";
                // line 206
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 206), "d/m/Y H:i"), "html", null, true)) : ("-"));
                yield "</b></span>
                      </div>
                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_match_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 209)]), "html", null, true);
                yield "\">Detail match</a>
                      </div>
                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            yield "              </div>
            ";
        }
        // line 216
        yield "          </section>

          <section class=\"tabPanel\" data-panel=\"teams\">
            ";
        // line 219
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 219, $this->source); })()))) {
            // line 220
            yield "              <div class=\"emptyState\">Aucune equipe inscrite pour le moment.</div>
            ";
        } else {
            // line 222
            yield "              <div class=\"cardsGrid\">
                ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 223, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 224
                yield "                  ";
                $context["team"] = CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "teamId", [], "any", false, false, false, 224);
                // line 225
                yield "                  ";
                $context["teamId"] = (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 225, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", true, true, false, 225) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 225, $this->source); })()), "teamId", [], "any", false, false, false, 225)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 225, $this->source); })()), "teamId", [], "any", false, false, false, 225)) : (0))) : (0));
                // line 226
                yield "                  ";
                $context["logoPath"] = ((((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 226, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 226, $this->source); })()), "logoImageId", [], "any", false, false, false, 226))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 226, $this->source); })()), "logoImageId", [], "any", false, false, false, 226), "fileUrl", [], "any", false, false, false, 226)) : (""));
                // line 227
                yield "                  ";
                $context["logoUrl"] = (((($tmp = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 227, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v2 = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 227, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) ? ((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 227, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 227, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_team_detail_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 227, $this->source); })())) . "/800/600")));
                // line 228
                yield "                  <article class=\"card card--team\">
                    <div class=\"card__media\" data-bg=\"";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logoUrl"]) || array_key_exists("logoUrl", $context) ? $context["logoUrl"] : (function () { throw new RuntimeError('Variable "logoUrl" does not exist.', 229, $this->source); })()), "html", null, true);
                yield "\">
                      <div class=\"card__chips\">
                        <span class=\"chip\">";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "status", [], "any", false, false, false, 231), "html", null, true);
                yield "</span>
                        <span class=\"chip\">Inscrit le ";
                // line 232
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "registeredAt", [], "any", false, false, false, 232)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "registeredAt", [], "any", false, false, false, 232), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</span>
                      </div>
                    </div>
                    <div class=\"card__body\">
                      <h4 class=\"card__title\">";
                // line 236
                yield (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 236, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 236, $this->source); })()), "name", [], "any", false, false, false, 236), "html", null, true)) : ("Equipe"));
                yield "</h4>
                      <p class=\"card__desc\">";
                // line 237
                yield ((((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 237, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 237, $this->source); })()), "region", [], "any", false, false, false, 237))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 237, $this->source); })()), "region", [], "any", false, false, false, 237), "html", null, true)) : ("Region non renseignee"));
                yield "</p>
                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"";
                // line 239
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
                yield "\">Detail equipe</a>
                      </div>
                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['participant'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            yield "              </div>
            ";
        }
        // line 246
        yield "          </section>
        </div>
      </section>

      ";
        // line 250
        yield from $this->load("front/partials/_footer.html.twig", 250)->unwrap()->yield($context);
        // line 251
        yield "    </section>
  </main>

  ";
        // line 254
        yield from $this->load("front/partials/_auth_modal.html.twig", 254)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/tournament-detail.html.twig";
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
        return array (  689 => 254,  684 => 251,  682 => 250,  676 => 246,  672 => 244,  661 => 239,  656 => 237,  652 => 236,  645 => 232,  641 => 231,  636 => 229,  633 => 228,  630 => 227,  627 => 226,  624 => 225,  621 => 224,  617 => 223,  614 => 222,  610 => 220,  608 => 219,  603 => 216,  599 => 214,  588 => 209,  582 => 206,  573 => 204,  569 => 203,  565 => 201,  561 => 200,  558 => 199,  554 => 197,  552 => 196,  548 => 194,  544 => 192,  533 => 187,  527 => 184,  518 => 182,  514 => 181,  510 => 179,  506 => 178,  503 => 177,  499 => 175,  497 => 174,  493 => 172,  489 => 170,  478 => 165,  472 => 162,  463 => 160,  459 => 159,  455 => 157,  451 => 156,  448 => 155,  444 => 153,  442 => 152,  436 => 148,  430 => 144,  421 => 141,  417 => 140,  413 => 139,  409 => 138,  405 => 137,  402 => 136,  398 => 135,  384 => 123,  380 => 121,  378 => 120,  370 => 115,  366 => 114,  362 => 113,  346 => 99,  340 => 95,  335 => 92,  328 => 91,  326 => 90,  322 => 89,  314 => 85,  311 => 84,  306 => 81,  299 => 79,  292 => 78,  287 => 77,  284 => 76,  281 => 75,  277 => 74,  271 => 70,  269 => 69,  264 => 67,  259 => 66,  255 => 64,  253 => 63,  250 => 62,  248 => 61,  243 => 60,  241 => 59,  235 => 56,  231 => 55,  225 => 54,  214 => 48,  210 => 47,  205 => 45,  199 => 44,  195 => 43,  191 => 42,  185 => 41,  179 => 38,  175 => 37,  171 => 36,  167 => 35,  162 => 33,  158 => 32,  153 => 29,  147 => 28,  136 => 25,  132 => 24,  129 => 23,  124 => 22,  120 => 21,  115 => 18,  113 => 14,  111 => 12,  98 => 11,  75 => 9,  64 => 1,  62 => 7,  60 => 6,  58 => 5,  56 => 4,  54 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% set tournamentId = tournament.tournamentId ?? 0 %}
{% set game = tournament.gameId %}
{% set organizer = tournament.organizerUserId %}
{% set photoPath = tournament.photoPath ?? '' %}
{% set photoUrl = photoPath ? (photoPath starts with 'http' ? photoPath : asset(photoPath)) : 'https://picsum.photos/seed/pulse_tournament_detail_' ~ tournamentId ~ '/1200/800' %}

{% block title %}PULSE - Detail tournoi{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'TOURNOI',
    hero_title: tournament.title,
    hero_sub: 'Progression, classement, matchs et equipes.',
    breadcrumb_current: 'Detail tournoi'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      {% for label, messages in app.flashes %}
        {% for message in messages %}
          <div class=\"listItem\">
            <span>{{ message }}</span>
            <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'info' ? 'badge--info' : 'badge--success') }}\">{{ label|upper }}</span>
          </div>
        {% endfor %}
      {% endfor %}

      <div class=\"layout\">
        <section class=\"panel\">
          <div class=\"coverBlock\" data-bg=\"{{ photoUrl }}\"></div>
          <h3 style=\"margin:12px 0 0;\">{{ tournament.title }}</h3>
          <p class=\"muted\">
            Organisateur: {{ organizer ? (organizer.displayName ?? organizer.username) : '-' }}
            · Jeu: {{ game ? game.name : '-' }}
            · Format: {{ tournament.format }}
            · Prize pool: {{ tournament.prizePool|number_format(2, '.', ' ') }} DT
          </p>
          <div class=\"list\" style=\"margin-top:10px;\">
            <div class=\"listItem\"><span>Dates</span><span class=\"listItem__meta\">{{ tournament.startDate ? tournament.startDate|date('d/m/Y') : '-' }} - {{ tournament.endDate ? tournament.endDate|date('d/m/Y') : '-' }}</span></div>
            <div class=\"listItem\"><span>Deadline</span><span class=\"listItem__meta\">{{ tournament.registrationDeadline ? tournament.registrationDeadline|date('d/m/Y') : 'Aucune' }}</span></div>
            <div class=\"listItem\"><span>Max equipes</span><span class=\"listItem__meta\">{{ tournament.maxTeams }}</span></div>
            <div class=\"listItem\"><span>Statut</span><span class=\"badge {{ tournament.status == 'OPEN' ? 'badge--success' : (tournament.status == 'ONGOING' ? 'badge--warning' : '') }}\">{{ tournament.status }}</span></div>
            <div class=\"listItem\"><span>Mode inscription</span><span class=\"listItem__meta\">{{ tournament.registrationMode }}</span></div>
          </div>
          <div class=\"progress\" style=\"margin-top:10px;\"><div class=\"progress__bar\" style=\"width:{{ progress_percent }}%\"></div></div>
          <div class=\"muted\" style=\"margin-top:6px;\">{{ matches_finished_count }} match(s) termine(s) / {{ matches_total }}</div>
        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">INSCRIPTIONS</h3>
          <div class=\"list\">
            <div class=\"listItem\"><span>Equipes acceptees</span><span class=\"listItem__meta\">{{ accepted_count }} / {{ tournament.maxTeams }}</span></div>
            <div class=\"listItem\"><span>Total inscriptions</span><span class=\"listItem__meta\">{{ registered_count }}</span></div>
            <div class=\"listItem\"><span>Mode</span><span class=\"listItem__meta\">{{ tournament.registrationMode }}</span></div>
          </div>

          {% if not viewer_user %}
            <a class=\"btn btn--primary\" style=\"margin-top:10px;\" href=\"{{ path('front_login', {'_target_path': app.request.uri}) }}\">Se connecter pour participer</a>
          {% elseif captain_teams is empty %}
            <div class=\"emptyState\" style=\"margin-top:10px;\">Seul un capitaine peut participer. Ce compte ne dirige aucune equipe.</div>
          {% elseif not registration_open %}
            <div class=\"emptyState\" style=\"margin-top:10px;\">Les inscriptions sont fermees pour ce tournoi.</div>
          {% else %}
            <form method=\"post\" action=\"{{ path('front_tournament_participate', {id: tournamentId}) }}\" style=\"margin-top:10px;\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('tournament_participate_' ~ tournamentId) }}\">

              {% if captain_teams|length > 1 %}
                <label class=\"field\">
                  <span class=\"field__label\">Choisir l'equipe capitaine</span>
                  <select class=\"input\" name=\"team_id\" required>
                    <option value=\"\">Selectionner...</option>
                    {% for team in captain_teams %}
                      {% set teamId = team.teamId ?? 0 %}
                      {% set participationStatus = captain_participations_by_team_id[teamId] ?? null %}
                      <option value=\"{{ teamId }}\">
                        {{ team.name }}{% if participationStatus %} ({{ participationStatus }}){% endif %}
                      </option>
                    {% endfor %}
                  </select>
                </label>
              {% else %}
                {% set uniqueTeam = captain_teams[0] %}
                <input type=\"hidden\" name=\"team_id\" value=\"{{ uniqueTeam.teamId }}\">
                <div class=\"listItem\" style=\"margin-top:8px;\">
                  <span>Equipe selectionnee</span>
                  <span class=\"listItem__meta\">
                    {{ uniqueTeam.name }}
                    {% set singleStatus = captain_participations_by_team_id[uniqueTeam.teamId ?? 0] ?? null %}
                    {% if singleStatus %} ({{ singleStatus }}){% endif %}
                  </span>
                </div>
              {% endif %}

              <button class=\"btn btn--primary\" type=\"submit\" style=\"margin-top:10px;\">Participer</button>
            </form>
          {% endif %}
        </aside>
      </div>

      <section class=\"panel\">
        <div class=\"tabs\" data-tabs=\"tourn-tabs\">
          <button class=\"tab is-active\" data-tab=\"overview\">Apercu</button>
          <button class=\"tab\" data-tab=\"scores\">Classement</button>
          <button class=\"tab\" data-tab=\"matches\">Matchs</button>
          <button class=\"tab\" data-tab=\"teams\">Equipes</button>
        </div>

        <div class=\"tabPanels\" data-panels=\"tourn-tabs\">
          <section class=\"tabPanel is-active\" data-panel=\"overview\">
            <div class=\"list\">
              <div class=\"listItem\"><span>Description</span><span class=\"listItem__meta\">{{ tournament.description ?: 'Aucune description.' }}</span></div>
              <div class=\"listItem\"><span>Regles</span><span class=\"listItem__meta\">{{ tournament.rules ?: 'Aucune regle specifiee.' }}</span></div>
              <div class=\"listItem\"><span>Recompense</span><span class=\"listItem__meta\">{{ tournament.prizeDescription ?: 'Prize pool uniquement' }}</span></div>
            </div>
          </section>

          <section class=\"tabPanel\" data-panel=\"scores\">
            {% if scoreboard_rows is empty %}
              <div class=\"emptyState\">Aucun score disponible pour le moment.</div>
            {% else %}
              <div class=\"tableWrap\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th>Equipe</th>
                      <th>MJ</th>
                      <th>V</th>
                      <th>D</th>
                      <th>Points</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for row in scoreboard_rows %}
                      <tr>
                        <td>{{ row.team_name }}</td>
                        <td>{{ row.played }}</td>
                        <td>{{ row.wins }}</td>
                        <td>{{ row.losses }}</td>
                        <td>{{ row.points }}</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            {% endif %}
          </section>

          <section class=\"tabPanel\" data-panel=\"matches\">
            <h4 style=\"margin:0 0 8px;\">Matchs termines</h4>
            {% if matches_finished is empty %}
              <div class=\"emptyState\">Aucun match termine.</div>
            {% else %}
              <div class=\"cardsGrid\">
                {% for match in matches_finished %}
                  <article class=\"card card--tournament\">
                    <div class=\"card__body\">
                      <h4 class=\"card__title\">{{ match.roundName ?: 'Round' }}</h4>
                      <p class=\"card__desc\">Statut: {{ match.status }}{% if match.bestOf %} · BO{{ match.bestOf }}{% endif %}</p>
                      <div class=\"card__metaRow\">
                        <span class=\"metaPill\">Planifie: <b>{{ match.scheduledAt ? match.scheduledAt|date('d/m/Y H:i') : '-' }}</b></span>
                      </div>
                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"{{ path('front_match_detail', {id: match.matchId}) }}\">Detail match</a>
                      </div>
                    </div>
                  </article>
                {% endfor %}
              </div>
            {% endif %}

            <h4 style=\"margin:14px 0 8px;\">Matchs en cours</h4>
            {% if matches_ongoing is empty %}
              <div class=\"emptyState\">Aucun match en cours.</div>
            {% else %}
              <div class=\"cardsGrid\">
                {% for match in matches_ongoing %}
                  <article class=\"card card--tournament\">
                    <div class=\"card__body\">
                      <h4 class=\"card__title\">{{ match.roundName ?: 'Round' }}</h4>
                      <p class=\"card__desc\">Statut: {{ match.status }}{% if match.bestOf %} · BO{{ match.bestOf }}{% endif %}</p>
                      <div class=\"card__metaRow\">
                        <span class=\"metaPill\">Planifie: <b>{{ match.scheduledAt ? match.scheduledAt|date('d/m/Y H:i') : '-' }}</b></span>
                      </div>
                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"{{ path('front_match_detail', {id: match.matchId}) }}\">Detail match</a>
                      </div>
                    </div>
                  </article>
                {% endfor %}
              </div>
            {% endif %}

            <h4 style=\"margin:14px 0 8px;\">Matchs a venir</h4>
            {% if matches_upcoming is empty %}
              <div class=\"emptyState\">Aucun match a venir.</div>
            {% else %}
              <div class=\"cardsGrid\">
                {% for match in matches_upcoming %}
                  <article class=\"card card--tournament\">
                    <div class=\"card__body\">
                      <h4 class=\"card__title\">{{ match.roundName ?: 'Round' }}</h4>
                      <p class=\"card__desc\">Statut: {{ match.status }}{% if match.bestOf %} · BO{{ match.bestOf }}{% endif %}</p>
                      <div class=\"card__metaRow\">
                        <span class=\"metaPill\">Planifie: <b>{{ match.scheduledAt ? match.scheduledAt|date('d/m/Y H:i') : '-' }}</b></span>
                      </div>
                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"{{ path('front_match_detail', {id: match.matchId}) }}\">Detail match</a>
                      </div>
                    </div>
                  </article>
                {% endfor %}
              </div>
            {% endif %}
          </section>

          <section class=\"tabPanel\" data-panel=\"teams\">
            {% if participants is empty %}
              <div class=\"emptyState\">Aucune equipe inscrite pour le moment.</div>
            {% else %}
              <div class=\"cardsGrid\">
                {% for participant in participants %}
                  {% set team = participant.teamId %}
                  {% set teamId = team ? (team.teamId ?? 0) : 0 %}
                  {% set logoPath = team and team.logoImageId ? team.logoImageId.fileUrl : '' %}
                  {% set logoUrl = logoPath ? (logoPath starts with 'http' ? logoPath : asset(logoPath)) : 'https://picsum.photos/seed/pulse_team_detail_' ~ teamId ~ '/800/600' %}
                  <article class=\"card card--team\">
                    <div class=\"card__media\" data-bg=\"{{ logoUrl }}\">
                      <div class=\"card__chips\">
                        <span class=\"chip\">{{ participant.status }}</span>
                        <span class=\"chip\">Inscrit le {{ participant.registeredAt ? participant.registeredAt|date('d/m/Y') : '-' }}</span>
                      </div>
                    </div>
                    <div class=\"card__body\">
                      <h4 class=\"card__title\">{{ team ? team.name : 'Equipe' }}</h4>
                      <p class=\"card__desc\">{{ team and team.region ? team.region : 'Region non renseignee' }}</p>
                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"{{ path('front_team_detail') }}\">Detail equipe</a>
                      </div>
                    </div>
                  </article>
                {% endfor %}
              </div>
            {% endif %}
          </section>
        </div>
      </section>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/tournament-detail.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\tournament-detail.html.twig");
    }
}
