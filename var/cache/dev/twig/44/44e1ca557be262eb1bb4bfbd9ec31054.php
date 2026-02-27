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

/* admin/pages/tournament-detail.html.twig */
class __TwigTemplate_4138a953ed3ebc4945e7248c9d64cb99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-detail.html.twig"));

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

        yield "PULSE - Detail tournoi";
        
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
        $context["tournamentId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "tournamentId", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 6, $this->source); })()), "tournamentId", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 6, $this->source); })()), "tournamentId", [], "any", false, false, false, 6)) : (0));
        // line 7
        yield "
  <div class=\"pageHeader\">
    <div>
      <h2>Detail tournoi #";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "</h2>
      <div class=\"pageSub\">Infos, inscriptions, matchs et classement.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournaments");
        yield "\">Retour liste</a>
      <a class=\"btn btnPrimary\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_edit", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 15, $this->source); })())]), "html", null, true);
        yield "\">Update tournoi</a>
    </div>
  </div>

  <div class=\"tabs\" data-tabs=\"tournament\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
    <button class=\"tab\" data-tab=\"teams\">Inscriptions</button>
    <button class=\"tab\" data-tab=\"matches\">Matchs</button>
    <button class=\"tab\" data-tab=\"results\">Classement</button>
  </div>

  <div class=\"tabPanels\" data-panels=\"tournament\">
    <div class=\"tabPanel isActive\" data-panel=\"info\">
      <section class=\"panel\">
        <div class=\"list\">
          <div class=\"listItem\"><span>Titre</span><span class=\"listMeta\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), "html", null, true);
        yield "</span></div>
          <div class=\"listItem\"><span>Jeu</span><span class=\"listMeta\">";
        // line 31
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 31, $this->source); })()), "gameId", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 31, $this->source); })()), "gameId", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>Organisateur</span><span class=\"listMeta\">";
        // line 32
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 32, $this->source); })()), "organizerUserId", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 32, $this->source); })()), "organizerUserId", [], "any", false, false, false, 32), "username", [], "any", false, false, false, 32), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>Status</span><span class=\"listMeta\"><span class=\"badge\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33), "html", null, true);
        yield "</span></span></div>
          <div class=\"listItem\"><span>Format</span><span class=\"listMeta\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 34, $this->source); })()), "format", [], "any", false, false, false, 34), "html", null, true);
        yield "</span></div>
          <div class=\"listItem\"><span>Mode inscription</span><span class=\"listMeta\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 35, $this->source); })()), "registrationMode", [], "any", false, false, false, 35), "html", null, true);
        yield "</span></div>
          <div class=\"listItem\"><span>Dates</span><span class=\"listMeta\">";
        // line 36
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 36, $this->source); })()), "startDate", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 36, $this->source); })()), "startDate", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true)) : ("-"));
        yield " -> ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 36, $this->source); })()), "endDate", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 36, $this->source); })()), "endDate", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>Deadline inscription</span><span class=\"listMeta\">";
        // line 37
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 37, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 37, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>Prize pool</span><span class=\"listMeta\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 38, $this->source); })()), "prizePool", [], "any", false, false, false, 38), 2, ".", " "), "html", null, true);
        yield " DT</span></div>
          <div class=\"listItem\"><span>Equipes</span><span class=\"listMeta\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["acceptedCount"]) || array_key_exists("acceptedCount", $context) ? $context["acceptedCount"] : (function () { throw new RuntimeError('Variable "acceptedCount" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 39, $this->source); })()), "maxTeams", [], "any", false, false, false, 39), "html", null, true);
        yield " (total: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["registeredCount"]) || array_key_exists("registeredCount", $context) ? $context["registeredCount"] : (function () { throw new RuntimeError('Variable "registeredCount" does not exist.', 39, $this->source); })()), "html", null, true);
        yield ")</span></div>
          <div class=\"listItem\"><span>Matchs</span><span class=\"listMeta\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchesCount"]) || array_key_exists("matchesCount", $context) ? $context["matchesCount"] : (function () { throw new RuntimeError('Variable "matchesCount" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "</span></div>
          ";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 41, $this->source); })()), "photoPath", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "            <div class=\"listItem\"><span>Photo</span><span class=\"listMeta\"><a href=\"";
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 42, $this->source); })()), "photoPath", [], "any", false, false, false, 42)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 42, $this->source); })()), "photoPath", [], "any", false, false, false, 42), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 42, $this->source); })()), "photoPath", [], "any", false, false, false, 42)), "html", null, true)));
            yield "\" target=\"_blank\" rel=\"noopener\">Voir image</a></span></div>
          ";
        }
        // line 44
        yield "        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"teams\">
      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Inscriptions equipes</h3>
          <span class=\"listMeta\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 52, $this->source); })())), "html", null, true);
        yield " ligne(s)</span>
        </div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>Equipe</th>
                <th>Status</th>
                <th>Seed</th>
                <th>Registered at</th>
                <th>Checked in</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 67
            yield "                ";
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 67), "PENDING")) : ("PENDING"));
            // line 68
            yield "                ";
            $context["badge"] = ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 68, $this->source); })()) == "ACCEPTED")) ? ("badge--success") : ((((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 68, $this->source); })()) == "REFUSED") || ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 68, $this->source); })()) == "CANCELLED"))) ? ("badge--danger") : ("badge--warning"))));
            // line 69
            yield "                <tr>
                  <td>";
            // line 70
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "teamId", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "teamId", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true)) : ("-"));
            yield "</td>
                  <td><span class=\"badge ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 71, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 71, $this->source); })()), "html", null, true);
            yield "</span></td>
                  <td>";
            // line 72
            yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["row"], "seed", [], "any", false, false, false, 72))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "seed", [], "any", false, false, false, 72), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 73
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "registeredAt", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "registeredAt", [], "any", false, false, false, 73), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 74
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "checkedIn", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 76
        if (!$context['_iterated']) {
            // line 77
            yield "                <tr><td colspan=\"5\" class=\"listMeta\">Aucune inscription pour ce tournoi.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"matches\">
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">Matchs en cours</h3><span class=\"listMeta\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchesByStatus"]) || array_key_exists("matchesByStatus", $context) ? $context["matchesByStatus"] : (function () { throw new RuntimeError('Variable "matchesByStatus" does not exist.', 87, $this->source); })()), "ONGOING", [], "any", false, false, false, 87)), "html", null, true);
        yield "</span></div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead><tr><th>ID</th><th>Round</th><th>Scheduled</th><th>Best of</th><th>Status</th></tr></thead>
            <tbody>
              ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchesByStatus"]) || array_key_exists("matchesByStatus", $context) ? $context["matchesByStatus"] : (function () { throw new RuntimeError('Variable "matchesByStatus" does not exist.', 92, $this->source); })()), "ONGOING", [], "any", false, false, false, 92));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 93
            yield "                <tr>
                  <td>#";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                  <td>";
            // line 95
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 95)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 95), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 96
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 96), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 97
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 97)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 97), "html", null, true)) : ("-"));
            yield "</td>
                  <td><span class=\"badge badge--info\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 98), "html", null, true);
            yield "</span></td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 100
        if (!$context['_iterated']) {
            // line 101
            yield "                <tr><td colspan=\"5\" class=\"listMeta\">Aucun match en cours.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "            </tbody>
          </table>
        </div>
      </section>

      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">Matchs programmes</h3><span class=\"listMeta\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchesByStatus"]) || array_key_exists("matchesByStatus", $context) ? $context["matchesByStatus"] : (function () { throw new RuntimeError('Variable "matchesByStatus" does not exist.', 109, $this->source); })()), "SCHEDULED", [], "any", false, false, false, 109)), "html", null, true);
        yield "</span></div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead><tr><th>ID</th><th>Round</th><th>Scheduled</th><th>Best of</th><th>Status</th></tr></thead>
            <tbody>
              ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchesByStatus"]) || array_key_exists("matchesByStatus", $context) ? $context["matchesByStatus"] : (function () { throw new RuntimeError('Variable "matchesByStatus" does not exist.', 114, $this->source); })()), "SCHEDULED", [], "any", false, false, false, 114));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 115
            yield "                <tr>
                  <td>#";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 116), "html", null, true);
            yield "</td>
                  <td>";
            // line 117
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 117)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 117), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 118
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 118), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 119
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 119)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 119), "html", null, true)) : ("-"));
            yield "</td>
                  <td><span class=\"badge\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 120), "html", null, true);
            yield "</span></td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 122
        if (!$context['_iterated']) {
            // line 123
            yield "                <tr><td colspan=\"5\" class=\"listMeta\">Aucun match programme.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "            </tbody>
          </table>
        </div>
      </section>

      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">Matchs termines</h3><span class=\"listMeta\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchesByStatus"]) || array_key_exists("matchesByStatus", $context) ? $context["matchesByStatus"] : (function () { throw new RuntimeError('Variable "matchesByStatus" does not exist.', 131, $this->source); })()), "FINISHED", [], "any", false, false, false, 131)), "html", null, true);
        yield "</span></div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead><tr><th>ID</th><th>Round</th><th>Scheduled</th><th>Best of</th><th>Status</th></tr></thead>
            <tbody>
              ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchesByStatus"]) || array_key_exists("matchesByStatus", $context) ? $context["matchesByStatus"] : (function () { throw new RuntimeError('Variable "matchesByStatus" does not exist.', 136, $this->source); })()), "FINISHED", [], "any", false, false, false, 136));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 137
            yield "                <tr>
                  <td>#";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 138), "html", null, true);
            yield "</td>
                  <td>";
            // line 139
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 139)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 139), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 140
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 140), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 141
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 141)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 141), "html", null, true)) : ("-"));
            yield "</td>
                  <td><span class=\"badge badge--success\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 142), "html", null, true);
            yield "</span></td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 144
        if (!$context['_iterated']) {
            // line 145
            yield "                <tr><td colspan=\"5\" class=\"listMeta\">Aucun match termine.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"results\">
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">Classement</h3></div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead><tr><th>Equipe</th><th>Played</th><th>Wins</th><th>Losses</th><th>Points</th></tr></thead>
            <tbody>
              ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["scoreboardRows"]) || array_key_exists("scoreboardRows", $context) ? $context["scoreboardRows"] : (function () { throw new RuntimeError('Variable "scoreboardRows" does not exist.', 160, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 161
            yield "                <tr>
                  <td>";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "team_name", [], "any", false, false, false, 162), "html", null, true);
            yield "</td>
                  <td>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "played", [], "any", false, false, false, 163), "html", null, true);
            yield "</td>
                  <td>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "wins", [], "any", false, false, false, 164), "html", null, true);
            yield "</td>
                  <td>";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "losses", [], "any", false, false, false, 165), "html", null, true);
            yield "</td>
                  <td>";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "points", [], "any", false, false, false, 166), "html", null, true);
            yield "</td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 168
        if (!$context['_iterated']) {
            // line 169
            yield "                <tr><td colspan=\"5\" class=\"listMeta\">Classement indisponible.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        yield "            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>
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
        return "admin/pages/tournament-detail.html.twig";
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
        return array (  495 => 171,  488 => 169,  486 => 168,  479 => 166,  475 => 165,  471 => 164,  467 => 163,  463 => 162,  460 => 161,  455 => 160,  440 => 147,  433 => 145,  431 => 144,  424 => 142,  420 => 141,  416 => 140,  412 => 139,  408 => 138,  405 => 137,  400 => 136,  392 => 131,  384 => 125,  377 => 123,  375 => 122,  368 => 120,  364 => 119,  360 => 118,  356 => 117,  352 => 116,  349 => 115,  344 => 114,  336 => 109,  328 => 103,  321 => 101,  319 => 100,  312 => 98,  308 => 97,  304 => 96,  300 => 95,  296 => 94,  293 => 93,  288 => 92,  280 => 87,  270 => 79,  263 => 77,  261 => 76,  254 => 74,  250 => 73,  246 => 72,  240 => 71,  236 => 70,  233 => 69,  230 => 68,  227 => 67,  222 => 66,  205 => 52,  195 => 44,  189 => 42,  187 => 41,  183 => 40,  175 => 39,  171 => 38,  167 => 37,  161 => 36,  157 => 35,  153 => 34,  149 => 33,  145 => 32,  141 => 31,  137 => 30,  119 => 15,  115 => 14,  108 => 10,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Detail tournoi{% endblock %}

{% block admin_content %}
  {% set tournamentId = tournament.tournamentId ?? 0 %}

  <div class=\"pageHeader\">
    <div>
      <h2>Detail tournoi #{{ tournamentId }}</h2>
      <div class=\"pageSub\">Infos, inscriptions, matchs et classement.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_tournaments') }}\">Retour liste</a>
      <a class=\"btn btnPrimary\" href=\"{{ path('admin_tournament_edit', {id: tournamentId}) }}\">Update tournoi</a>
    </div>
  </div>

  <div class=\"tabs\" data-tabs=\"tournament\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
    <button class=\"tab\" data-tab=\"teams\">Inscriptions</button>
    <button class=\"tab\" data-tab=\"matches\">Matchs</button>
    <button class=\"tab\" data-tab=\"results\">Classement</button>
  </div>

  <div class=\"tabPanels\" data-panels=\"tournament\">
    <div class=\"tabPanel isActive\" data-panel=\"info\">
      <section class=\"panel\">
        <div class=\"list\">
          <div class=\"listItem\"><span>Titre</span><span class=\"listMeta\">{{ tournament.title }}</span></div>
          <div class=\"listItem\"><span>Jeu</span><span class=\"listMeta\">{{ tournament.gameId ? tournament.gameId.name : '-' }}</span></div>
          <div class=\"listItem\"><span>Organisateur</span><span class=\"listMeta\">{{ tournament.organizerUserId ? tournament.organizerUserId.username : '-' }}</span></div>
          <div class=\"listItem\"><span>Status</span><span class=\"listMeta\"><span class=\"badge\">{{ tournament.status }}</span></span></div>
          <div class=\"listItem\"><span>Format</span><span class=\"listMeta\">{{ tournament.format }}</span></div>
          <div class=\"listItem\"><span>Mode inscription</span><span class=\"listMeta\">{{ tournament.registrationMode }}</span></div>
          <div class=\"listItem\"><span>Dates</span><span class=\"listMeta\">{{ tournament.startDate ? tournament.startDate|date('d/m/Y') : '-' }} -> {{ tournament.endDate ? tournament.endDate|date('d/m/Y') : '-' }}</span></div>
          <div class=\"listItem\"><span>Deadline inscription</span><span class=\"listMeta\">{{ tournament.registrationDeadline ? tournament.registrationDeadline|date('d/m/Y') : '-' }}</span></div>
          <div class=\"listItem\"><span>Prize pool</span><span class=\"listMeta\">{{ tournament.prizePool|number_format(2, '.', ' ') }} DT</span></div>
          <div class=\"listItem\"><span>Equipes</span><span class=\"listMeta\">{{ acceptedCount }}/{{ tournament.maxTeams }} (total: {{ registeredCount }})</span></div>
          <div class=\"listItem\"><span>Matchs</span><span class=\"listMeta\">{{ matchesCount }}</span></div>
          {% if tournament.photoPath %}
            <div class=\"listItem\"><span>Photo</span><span class=\"listMeta\"><a href=\"{{ tournament.photoPath starts with 'http' ? tournament.photoPath : asset(tournament.photoPath) }}\" target=\"_blank\" rel=\"noopener\">Voir image</a></span></div>
          {% endif %}
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"teams\">
      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Inscriptions equipes</h3>
          <span class=\"listMeta\">{{ participants|length }} ligne(s)</span>
        </div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>Equipe</th>
                <th>Status</th>
                <th>Seed</th>
                <th>Registered at</th>
                <th>Checked in</th>
              </tr>
            </thead>
            <tbody>
              {% for row in participants %}
                {% set status = row.status|default('PENDING') %}
                {% set badge = status == 'ACCEPTED' ? 'badge--success' : (status == 'REFUSED' or status == 'CANCELLED' ? 'badge--danger' : 'badge--warning') %}
                <tr>
                  <td>{{ row.teamId ? row.teamId.name : '-' }}</td>
                  <td><span class=\"badge {{ badge }}\">{{ status }}</span></td>
                  <td>{{ row.seed is not null ? row.seed : '-' }}</td>
                  <td>{{ row.registeredAt ? row.registeredAt|date('d/m/Y H:i') : '-' }}</td>
                  <td>{{ row.checkedIn ? 'Oui' : 'Non' }}</td>
                </tr>
              {% else %}
                <tr><td colspan=\"5\" class=\"listMeta\">Aucune inscription pour ce tournoi.</td></tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"matches\">
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">Matchs en cours</h3><span class=\"listMeta\">{{ matchesByStatus.ONGOING|length }}</span></div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead><tr><th>ID</th><th>Round</th><th>Scheduled</th><th>Best of</th><th>Status</th></tr></thead>
            <tbody>
              {% for match in matchesByStatus.ONGOING %}
                <tr>
                  <td>#{{ match.matchId }}</td>
                  <td>{{ match.roundName ?: '-' }}</td>
                  <td>{{ match.scheduledAt ? match.scheduledAt|date('d/m/Y H:i') : '-' }}</td>
                  <td>{{ match.bestOf ?: '-' }}</td>
                  <td><span class=\"badge badge--info\">{{ match.status }}</span></td>
                </tr>
              {% else %}
                <tr><td colspan=\"5\" class=\"listMeta\">Aucun match en cours.</td></tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>

      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">Matchs programmes</h3><span class=\"listMeta\">{{ matchesByStatus.SCHEDULED|length }}</span></div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead><tr><th>ID</th><th>Round</th><th>Scheduled</th><th>Best of</th><th>Status</th></tr></thead>
            <tbody>
              {% for match in matchesByStatus.SCHEDULED %}
                <tr>
                  <td>#{{ match.matchId }}</td>
                  <td>{{ match.roundName ?: '-' }}</td>
                  <td>{{ match.scheduledAt ? match.scheduledAt|date('d/m/Y H:i') : '-' }}</td>
                  <td>{{ match.bestOf ?: '-' }}</td>
                  <td><span class=\"badge\">{{ match.status }}</span></td>
                </tr>
              {% else %}
                <tr><td colspan=\"5\" class=\"listMeta\">Aucun match programme.</td></tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>

      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">Matchs termines</h3><span class=\"listMeta\">{{ matchesByStatus.FINISHED|length }}</span></div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead><tr><th>ID</th><th>Round</th><th>Scheduled</th><th>Best of</th><th>Status</th></tr></thead>
            <tbody>
              {% for match in matchesByStatus.FINISHED %}
                <tr>
                  <td>#{{ match.matchId }}</td>
                  <td>{{ match.roundName ?: '-' }}</td>
                  <td>{{ match.scheduledAt ? match.scheduledAt|date('d/m/Y H:i') : '-' }}</td>
                  <td>{{ match.bestOf ?: '-' }}</td>
                  <td><span class=\"badge badge--success\">{{ match.status }}</span></td>
                </tr>
              {% else %}
                <tr><td colspan=\"5\" class=\"listMeta\">Aucun match termine.</td></tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"results\">
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">Classement</h3></div>
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead><tr><th>Equipe</th><th>Played</th><th>Wins</th><th>Losses</th><th>Points</th></tr></thead>
            <tbody>
              {% for row in scoreboardRows %}
                <tr>
                  <td>{{ row.team_name }}</td>
                  <td>{{ row.played }}</td>
                  <td>{{ row.wins }}</td>
                  <td>{{ row.losses }}</td>
                  <td>{{ row.points }}</td>
                </tr>
              {% else %}
                <tr><td colspan=\"5\" class=\"listMeta\">Classement indisponible.</td></tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>
{% endblock %}
", "admin/pages/tournament-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\tournament-detail.html.twig");
    }
}
