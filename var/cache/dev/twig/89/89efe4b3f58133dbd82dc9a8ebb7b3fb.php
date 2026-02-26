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

/* admin/pages/match-detail.html.twig */
class __TwigTemplate_3af54fb58136dcdab11726ccbb76d0be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/match-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/match-detail.html.twig"));

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

        yield "PULSE - Detail match";
        
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
      <h2>Detail match #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 8, $this->source); })()), "matchId", [], "any", false, false, false, 8), "html", null, true);
        yield "</h2>
      <div class=\"pageSub\">Lecture detaillee + lien vers edition.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ai_ollama_test");
        yield "\">Test Ollama</a>
      <a class=\"btn btnPrimary\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches", ["edit" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 13, $this->source); })()), "matchId", [], "any", false, false, false, 13)]), "html", null, true);
        yield "\">Modifier</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">Retour liste</a>
    </div>
  </div>

  <div class=\"tabs\" data-tabs=\"match\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
    <button class=\"tab\" data-tab=\"teams\">Participants</button>
    <button class=\"tab\" data-tab=\"ai\">IA Assistant</button>
  </div>

  <div class=\"tabPanels\" data-panels=\"match\">
    <div class=\"tabPanel isActive\" data-panel=\"info\">
      <section class=\"panel\">
        <div class=\"list\">
          <div class=\"listItem\"><span>match_id</span><span class=\"listMeta\">#";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 28, $this->source); })()), "matchId", [], "any", false, false, false, 28), "html", null, true);
        yield "</span></div>
          <div class=\"listItem\"><span>tournament</span><span class=\"listMeta\">";
        // line 29
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 29, $this->source); })()), "tournamentId", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 29, $this->source); })()), "tournamentId", [], "any", false, false, false, 29), "title", [], "any", false, false, false, 29), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>game</span><span class=\"listMeta\">";
        // line 30
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 30, $this->source); })()), "tournamentId", [], "any", false, false, false, 30) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 30, $this->source); })()), "tournamentId", [], "any", false, false, false, 30), "gameId", [], "any", false, false, false, 30))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 30, $this->source); })()), "tournamentId", [], "any", false, false, false, 30), "gameId", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>organizer</span><span class=\"listMeta\">";
        // line 31
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 31, $this->source); })()), "tournamentId", [], "any", false, false, false, 31) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 31, $this->source); })()), "tournamentId", [], "any", false, false, false, 31), "organizerUserId", [], "any", false, false, false, 31))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 31, $this->source); })()), "tournamentId", [], "any", false, false, false, 31), "organizerUserId", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>round_name</span><span class=\"listMeta\">";
        // line 32
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 32, $this->source); })()), "roundName", [], "any", false, false, false, 32)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 32, $this->source); })()), "roundName", [], "any", false, false, false, 32), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>best_of</span><span class=\"listMeta\">";
        // line 33
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 33, $this->source); })()), "bestOf", [], "any", false, false, false, 33)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 33, $this->source); })()), "bestOf", [], "any", false, false, false, 33), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>scheduled_at</span><span class=\"listMeta\">";
        // line 34
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 34, $this->source); })()), "scheduledAt", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 34, $this->source); })()), "scheduledAt", [], "any", false, false, false, 34), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>status</span><span class=\"listMeta\"><span class=\"badge\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35), "html", null, true);
        yield "</span></span></div>
          <div class=\"listItem\"><span>created_at</span><span class=\"listMeta\">";
        // line 36
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 36, $this->source); })()), "createdAt", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 36, $this->source); })()), "createdAt", [], "any", false, false, false, 36), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>updated_at</span><span class=\"listMeta\">";
        // line 37
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 37, $this->source); })()), "updatedAt", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 37, $this->source); })()), "updatedAt", [], "any", false, false, false, 37), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</span></div>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"teams\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>Team</th>
                <th>Score</th>
                <th>Winner</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matchTeams"]) || array_key_exists("matchTeams", $context) ? $context["matchTeams"] : (function () { throw new RuntimeError('Variable "matchTeams" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["relation"]) {
            // line 55
            yield "                ";
            $context["team"] = CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "teamId", [], "any", false, false, false, 55);
            // line 56
            yield "                <tr>
                  <td>";
            // line 57
            yield (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 57, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 58
            yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 58))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 58), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 59
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "isWinner", [], "any", false, false, false, 59) === true)) ? ("Oui") : ("Non"));
            yield "</td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 61
        if (!$context['_iterated']) {
            // line 62
            yield "                <tr>
                  <td colspan=\"3\" class=\"listMeta\">Aucune equipe participante.</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['relation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"ai\">
      ";
        // line 73
        $context["ai"] = ((array_key_exists("matchAi", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["matchAi"]) || array_key_exists("matchAi", $context) ? $context["matchAi"] : (function () { throw new RuntimeError('Variable "matchAi" does not exist.', 73, $this->source); })()), null)) : (null));
        // line 74
        yield "      ";
        $context["aiRisk"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "anomalyRisk", [], "any", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 74, $this->source); })()), "anomalyRisk", [], "any", false, false, false, 74), "LOW")) : ("LOW"));
        // line 75
        yield "      ";
        $context["aiBadge"] = ((((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 75, $this->source); })()) == "HIGH")) ? ("badge--danger") : (((((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 75, $this->source); })()) == "MEDIUM")) ? ("badge--warning") : ("badge--success"))));
        // line 76
        yield "      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Analyse integrite match (locale)</h3>
          ";
        // line 79
        if ((($tmp = (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "            <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiBadge"]) || array_key_exists("aiBadge", $context) ? $context["aiBadge"] : (function () { throw new RuntimeError('Variable "aiBadge" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "integrityScore", [], "any", true, true, false, 80)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 80, $this->source); })()), "integrityScore", [], "any", false, false, false, 80), 0)) : (0)), "html", null, true);
            yield "/100 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "</span>
          ";
        } else {
            // line 82
            yield "            <span class=\"listMeta\">N/A</span>
          ";
        }
        // line 84
        yield "        </div>

        ";
        // line 86
        if ((($tmp = (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 86, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 87
            yield "          <div class=\"list\">
            <div class=\"listItem\"><span>Resume local</span><span class=\"listMeta\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "localSummary", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 88, $this->source); })()), "localSummary", [], "any", false, false, false, 88), "-")) : ("-")), "html", null, true);
            yield "</span></div>
            <div class=\"listItem\"><span>Scoreboard</span><span class=\"listMeta\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "scoreboardSummary", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 89, $this->source); })()), "scoreboardSummary", [], "any", false, false, false, 89), "-")) : ("-")), "html", null, true);
            yield "</span></div>
            <div class=\"listItem\"><span>Problemes detectes</span><span class=\"listMeta\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "issuesCount", [], "any", true, true, false, 90)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 90, $this->source); })()), "issuesCount", [], "any", false, false, false, 90), 0)) : (0)), "html", null, true);
            yield "</span></div>
            <div class=\"listItem\"><span>Penalites</span><span class=\"listMeta\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "penaltyPoints", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 91, $this->source); })()), "penaltyPoints", [], "any", false, false, false, 91), 0)) : (0)), "html", null, true);
            yield " pts</span></div>
            <div class=\"listItem\"><span>Resultat data</span><span class=\"listMeta\">";
            // line 92
            yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "hasResultData", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 92, $this->source); })()), "hasResultData", [], "any", false, false, false, 92), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</span></div>
          </div>

          <div class=\"panel\" style=\"margin-top:12px;\">
            <div class=\"panelHeader\">
              <h3 class=\"panelTitle\">Anomalies detectees</h3>
              <span class=\"listMeta\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "findings", [], "any", true, true, false, 98)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 98, $this->source); })()), "findings", [], "any", false, false, false, 98), [])) : ([]))), "html", null, true);
            yield " finding(s)</span>
            </div>
            <div class=\"list\">
              ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "findings", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 101, $this->source); })()), "findings", [], "any", false, false, false, 101), [])) : ([])));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["finding"]) {
                // line 102
                yield "                <div class=\"listItem\">
                  <span>";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 103), "html", null, true);
                yield ".</span>
                  <span class=\"listMeta\">";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["finding"], "html", null, true);
                yield "</span>
                </div>
              ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            // line 106
            if (!$context['_iterated']) {
                // line 107
                yield "                <div class=\"listItem\">
                  <span>Aucune anomalie majeure</span>
                  <span class=\"badge badge--success\">LOW</span>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['finding'], $context['_parent'], $context['_iterated'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "            </div>
          </div>

          <div class=\"panel\" style=\"margin-top:12px;\">
            <div class=\"panelHeader\">
              <h3 class=\"panelTitle\">Signaux litige (local)</h3>
              <span class=\"listMeta\">Pre-check</span>
            </div>
            <div class=\"list\">
              ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "disputeSignals", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 121, $this->source); })()), "disputeSignals", [], "any", false, false, false, 121), [])) : ([])));
            foreach ($context['_seq'] as $context["_key"] => $context["signal"]) {
                // line 122
                yield "                <div class=\"listItem\">
                  <span>";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["signal"], "html", null, true);
                yield "</span>
                  <span class=\"listMeta\">Dispute</span>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['signal'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "            </div>
          </div>

          ";
            // line 130
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "ollamaAssistant", [], "any", true, true, false, 130)) {
                // line 131
                yield "            ";
                $context["ollama"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 131, $this->source); })()), "ollamaAssistant", [], "any", false, false, false, 131);
                // line 132
                yield "            ";
                $context["ollamaStatus"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "status", [], "any", true, true, false, 132)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 132, $this->source); })()), "status", [], "any", false, false, false, 132), "ERROR")) : ("ERROR"));
                // line 133
                yield "            ";
                $context["ollamaBadge"] = ((((isset($context["ollamaStatus"]) || array_key_exists("ollamaStatus", $context) ? $context["ollamaStatus"] : (function () { throw new RuntimeError('Variable "ollamaStatus" does not exist.', 133, $this->source); })()) == "READY")) ? ("badge--success") : (((((isset($context["ollamaStatus"]) || array_key_exists("ollamaStatus", $context) ? $context["ollamaStatus"] : (function () { throw new RuntimeError('Variable "ollamaStatus" does not exist.', 133, $this->source); })()) == "DISABLED")) ? ("badge--warning") : ("badge--danger"))));
                // line 134
                yield "            <div class=\"panel\" style=\"margin-top:12px;\">
              <div class=\"panelHeader\">
                <h3 class=\"panelTitle\">Assistant IA local (Ollama)</h3>
                <span class=\"badge ";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ollamaBadge"]) || array_key_exists("ollamaBadge", $context) ? $context["ollamaBadge"] : (function () { throw new RuntimeError('Variable "ollamaBadge" does not exist.', 137, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ollamaStatus"]) || array_key_exists("ollamaStatus", $context) ? $context["ollamaStatus"] : (function () { throw new RuntimeError('Variable "ollamaStatus" does not exist.', 137, $this->source); })()), "html", null, true);
                yield "</span>
              </div>

              <div class=\"list\">
                <div class=\"listItem\"><span>Modele</span><span class=\"listMeta\">";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "model", [], "any", true, true, false, 141)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 141, $this->source); })()), "model", [], "any", false, false, false, 141), "n/a")) : ("n/a")), "html", null, true);
                yield "</span></div>
                <div class=\"listItem\"><span>API locale</span><span class=\"listMeta\">";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "baseUrl", [], "any", true, true, false, 142)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 142, $this->source); })()), "baseUrl", [], "any", false, false, false, 142), "n/a")) : ("n/a")), "html", null, true);
                yield "</span></div>
                <div class=\"listItem\"><span>Latence</span><span class=\"listMeta\">";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "latencyMs", [], "any", true, true, false, 143)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 143, $this->source); })()), "latencyMs", [], "any", false, false, false, 143), 0)) : (0)), "html", null, true);
                yield " ms</span></div>
                ";
                // line 144
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 144, $this->source); })()), "disputeDecisionHint", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 145
                    yield "                  <div class=\"listItem\"><span>Decision litige suggeree</span><span class=\"listMeta\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 145, $this->source); })()), "disputeDecisionHint", [], "any", false, false, false, 145), "html", null, true);
                    yield "</span></div>
                ";
                }
                // line 147
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 147, $this->source); })()), "matchSummary", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 148
                    yield "                  <div class=\"listItem\"><span>Resume match</span><span class=\"listMeta\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 148, $this->source); })()), "matchSummary", [], "any", false, false, false, 148), "html", null, true);
                    yield "</span></div>
                ";
                }
                // line 150
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 150, $this->source); })()), "anomalySummary", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 151
                    yield "                  <div class=\"listItem\"><span>Resume anomalies</span><span class=\"listMeta\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 151, $this->source); })()), "anomalySummary", [], "any", false, false, false, 151), "html", null, true);
                    yield "</span></div>
                ";
                }
                // line 153
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 153, $this->source); })()), "disputeHelper", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 154
                    yield "                  <div class=\"listItem\"><span>Aide litige</span><span class=\"listMeta\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 154, $this->source); })()), "disputeHelper", [], "any", false, false, false, 154), "html", null, true);
                    yield "</span></div>
                ";
                }
                // line 156
                yield "              </div>

              <div class=\"dataTableWrap\" style=\"margin-top:10px;\">
                <table class=\"dataTable\">
                  <thead>
                    <tr>
                      <th>Checklist litige</th>
                      <th>Actions admin</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
                // line 167
                $context["checklist"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "disputeChecklist", [], "any", true, true, false, 167)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 167, $this->source); })()), "disputeChecklist", [], "any", false, false, false, 167), [])) : ([]));
                // line 168
                yield "                    ";
                $context["actions"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "adminActions", [], "any", true, true, false, 168)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 168, $this->source); })()), "adminActions", [], "any", false, false, false, 168), [])) : ([]));
                // line 169
                yield "                    ";
                $context["maxRows"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::sort($this->env, [Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["checklist"]) || array_key_exists("checklist", $context) ? $context["checklist"] : (function () { throw new RuntimeError('Variable "checklist" does not exist.', 169, $this->source); })())), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 169, $this->source); })()))]));
                // line 170
                yield "                    ";
                if (((isset($context["maxRows"]) || array_key_exists("maxRows", $context) ? $context["maxRows"] : (function () { throw new RuntimeError('Variable "maxRows" does not exist.', 170, $this->source); })()) && ((isset($context["maxRows"]) || array_key_exists("maxRows", $context) ? $context["maxRows"] : (function () { throw new RuntimeError('Variable "maxRows" does not exist.', 170, $this->source); })()) > 0))) {
                    // line 171
                    yield "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(0, ((isset($context["maxRows"]) || array_key_exists("maxRows", $context) ? $context["maxRows"] : (function () { throw new RuntimeError('Variable "maxRows" does not exist.', 171, $this->source); })()) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 172
                        yield "                        <tr>
                          <td>";
                        // line 173
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["checklist"] ?? null), $context["i"], [], "array", true, true, false, 173)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["checklist"]) || array_key_exists("checklist", $context) ? $context["checklist"] : (function () { throw new RuntimeError('Variable "checklist" does not exist.', 173, $this->source); })()), $context["i"], [], "array", false, false, false, 173), "-")) : ("-")), "html", null, true);
                        yield "</td>
                          <td>";
                        // line 174
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["actions"] ?? null), $context["i"], [], "array", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 174, $this->source); })()), $context["i"], [], "array", false, false, false, 174), "-")) : ("-")), "html", null, true);
                        yield "</td>
                        </tr>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    yield "                    ";
                } else {
                    // line 178
                    yield "                      <tr>
                        <td colspan=\"2\" class=\"listMeta\">Aucune suggestion detaillee retournee.</td>
                      </tr>
                    ";
                }
                // line 182
                yield "                  </tbody>
                </table>
              </div>

              ";
                // line 186
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 186, $this->source); })()), "error", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 187
                    yield "                <div class=\"listItem\" style=\"margin-top:10px;\">
                  <span>Erreur</span>
                  <span class=\"listMeta\">";
                    // line 189
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 189, $this->source); })()), "error", [], "any", false, false, false, 189), "html", null, true);
                    yield "</span>
                </div>
              ";
                }
                // line 192
                yield "            </div>
          ";
            }
            // line 194
            yield "        ";
        }
        // line 195
        yield "      </section>
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
        return "admin/pages/match-detail.html.twig";
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
        return array (  543 => 195,  540 => 194,  536 => 192,  530 => 189,  526 => 187,  524 => 186,  518 => 182,  512 => 178,  509 => 177,  500 => 174,  496 => 173,  493 => 172,  488 => 171,  485 => 170,  482 => 169,  479 => 168,  477 => 167,  464 => 156,  458 => 154,  455 => 153,  449 => 151,  446 => 150,  440 => 148,  437 => 147,  431 => 145,  429 => 144,  425 => 143,  421 => 142,  417 => 141,  408 => 137,  403 => 134,  400 => 133,  397 => 132,  394 => 131,  392 => 130,  387 => 127,  377 => 123,  374 => 122,  370 => 121,  359 => 112,  349 => 107,  347 => 106,  332 => 104,  328 => 103,  325 => 102,  307 => 101,  301 => 98,  292 => 92,  288 => 91,  284 => 90,  280 => 89,  276 => 88,  273 => 87,  271 => 86,  267 => 84,  263 => 82,  253 => 80,  251 => 79,  246 => 76,  243 => 75,  240 => 74,  238 => 73,  229 => 66,  220 => 62,  218 => 61,  211 => 59,  207 => 58,  203 => 57,  200 => 56,  197 => 55,  192 => 54,  172 => 37,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  152 => 32,  148 => 31,  144 => 30,  140 => 29,  136 => 28,  119 => 14,  115 => 13,  111 => 12,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Detail match{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Detail match #{{ match.matchId }}</h2>
      <div class=\"pageSub\">Lecture detaillee + lien vers edition.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_ai_ollama_test') }}\">Test Ollama</a>
      <a class=\"btn btnPrimary\" href=\"{{ path('admin_matches', {edit: match.matchId}) }}\">Modifier</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_matches') }}\">Retour liste</a>
    </div>
  </div>

  <div class=\"tabs\" data-tabs=\"match\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
    <button class=\"tab\" data-tab=\"teams\">Participants</button>
    <button class=\"tab\" data-tab=\"ai\">IA Assistant</button>
  </div>

  <div class=\"tabPanels\" data-panels=\"match\">
    <div class=\"tabPanel isActive\" data-panel=\"info\">
      <section class=\"panel\">
        <div class=\"list\">
          <div class=\"listItem\"><span>match_id</span><span class=\"listMeta\">#{{ match.matchId }}</span></div>
          <div class=\"listItem\"><span>tournament</span><span class=\"listMeta\">{{ match.tournamentId ? match.tournamentId.title : '-' }}</span></div>
          <div class=\"listItem\"><span>game</span><span class=\"listMeta\">{{ match.tournamentId and match.tournamentId.gameId ? match.tournamentId.gameId.name : '-' }}</span></div>
          <div class=\"listItem\"><span>organizer</span><span class=\"listMeta\">{{ match.tournamentId and match.tournamentId.organizerUserId ? match.tournamentId.organizerUserId.username : '-' }}</span></div>
          <div class=\"listItem\"><span>round_name</span><span class=\"listMeta\">{{ match.roundName ?: '-' }}</span></div>
          <div class=\"listItem\"><span>best_of</span><span class=\"listMeta\">{{ match.bestOf ?: '-' }}</span></div>
          <div class=\"listItem\"><span>scheduled_at</span><span class=\"listMeta\">{{ match.scheduledAt ? match.scheduledAt|date('d/m/Y H:i') : '-' }}</span></div>
          <div class=\"listItem\"><span>status</span><span class=\"listMeta\"><span class=\"badge\">{{ match.status }}</span></span></div>
          <div class=\"listItem\"><span>created_at</span><span class=\"listMeta\">{{ match.createdAt ? match.createdAt|date('d/m/Y H:i') : '-' }}</span></div>
          <div class=\"listItem\"><span>updated_at</span><span class=\"listMeta\">{{ match.updatedAt ? match.updatedAt|date('d/m/Y H:i') : '-' }}</span></div>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"teams\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>Team</th>
                <th>Score</th>
                <th>Winner</th>
              </tr>
            </thead>
            <tbody>
              {% for relation in matchTeams %}
                {% set team = relation.teamId %}
                <tr>
                  <td>{{ team ? team.name : '-' }}</td>
                  <td>{{ relation.score is not null ? relation.score : '-' }}</td>
                  <td>{{ relation.isWinner is same as(true) ? 'Oui' : 'Non' }}</td>
                </tr>
              {% else %}
                <tr>
                  <td colspan=\"3\" class=\"listMeta\">Aucune equipe participante.</td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"ai\">
      {% set ai = matchAi|default(null) %}
      {% set aiRisk = ai.anomalyRisk|default('LOW') %}
      {% set aiBadge = aiRisk == 'HIGH' ? 'badge--danger' : (aiRisk == 'MEDIUM' ? 'badge--warning' : 'badge--success') %}
      <section class=\"panel\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Analyse integrite match (locale)</h3>
          {% if ai %}
            <span class=\"badge {{ aiBadge }}\">{{ ai.integrityScore|default(0) }}/100 {{ aiRisk }}</span>
          {% else %}
            <span class=\"listMeta\">N/A</span>
          {% endif %}
        </div>

        {% if ai %}
          <div class=\"list\">
            <div class=\"listItem\"><span>Resume local</span><span class=\"listMeta\">{{ ai.localSummary|default('-') }}</span></div>
            <div class=\"listItem\"><span>Scoreboard</span><span class=\"listMeta\">{{ ai.scoreboardSummary|default('-') }}</span></div>
            <div class=\"listItem\"><span>Problemes detectes</span><span class=\"listMeta\">{{ ai.issuesCount|default(0) }}</span></div>
            <div class=\"listItem\"><span>Penalites</span><span class=\"listMeta\">{{ ai.penaltyPoints|default(0) }} pts</span></div>
            <div class=\"listItem\"><span>Resultat data</span><span class=\"listMeta\">{{ ai.hasResultData|default(false) ? 'Oui' : 'Non' }}</span></div>
          </div>

          <div class=\"panel\" style=\"margin-top:12px;\">
            <div class=\"panelHeader\">
              <h3 class=\"panelTitle\">Anomalies detectees</h3>
              <span class=\"listMeta\">{{ ai.findings|default([])|length }} finding(s)</span>
            </div>
            <div class=\"list\">
              {% for finding in ai.findings|default([]) %}
                <div class=\"listItem\">
                  <span>{{ loop.index }}.</span>
                  <span class=\"listMeta\">{{ finding }}</span>
                </div>
              {% else %}
                <div class=\"listItem\">
                  <span>Aucune anomalie majeure</span>
                  <span class=\"badge badge--success\">LOW</span>
                </div>
              {% endfor %}
            </div>
          </div>

          <div class=\"panel\" style=\"margin-top:12px;\">
            <div class=\"panelHeader\">
              <h3 class=\"panelTitle\">Signaux litige (local)</h3>
              <span class=\"listMeta\">Pre-check</span>
            </div>
            <div class=\"list\">
              {% for signal in ai.disputeSignals|default([]) %}
                <div class=\"listItem\">
                  <span>{{ signal }}</span>
                  <span class=\"listMeta\">Dispute</span>
                </div>
              {% endfor %}
            </div>
          </div>

          {% if ai.ollamaAssistant is defined %}
            {% set ollama = ai.ollamaAssistant %}
            {% set ollamaStatus = ollama.status|default('ERROR') %}
            {% set ollamaBadge = ollamaStatus == 'READY' ? 'badge--success' : (ollamaStatus == 'DISABLED' ? 'badge--warning' : 'badge--danger') %}
            <div class=\"panel\" style=\"margin-top:12px;\">
              <div class=\"panelHeader\">
                <h3 class=\"panelTitle\">Assistant IA local (Ollama)</h3>
                <span class=\"badge {{ ollamaBadge }}\">{{ ollamaStatus }}</span>
              </div>

              <div class=\"list\">
                <div class=\"listItem\"><span>Modele</span><span class=\"listMeta\">{{ ollama.model|default('n/a') }}</span></div>
                <div class=\"listItem\"><span>API locale</span><span class=\"listMeta\">{{ ollama.baseUrl|default('n/a') }}</span></div>
                <div class=\"listItem\"><span>Latence</span><span class=\"listMeta\">{{ ollama.latencyMs|default(0) }} ms</span></div>
                {% if ollama.disputeDecisionHint %}
                  <div class=\"listItem\"><span>Decision litige suggeree</span><span class=\"listMeta\">{{ ollama.disputeDecisionHint }}</span></div>
                {% endif %}
                {% if ollama.matchSummary %}
                  <div class=\"listItem\"><span>Resume match</span><span class=\"listMeta\">{{ ollama.matchSummary }}</span></div>
                {% endif %}
                {% if ollama.anomalySummary %}
                  <div class=\"listItem\"><span>Resume anomalies</span><span class=\"listMeta\">{{ ollama.anomalySummary }}</span></div>
                {% endif %}
                {% if ollama.disputeHelper %}
                  <div class=\"listItem\"><span>Aide litige</span><span class=\"listMeta\">{{ ollama.disputeHelper }}</span></div>
                {% endif %}
              </div>

              <div class=\"dataTableWrap\" style=\"margin-top:10px;\">
                <table class=\"dataTable\">
                  <thead>
                    <tr>
                      <th>Checklist litige</th>
                      <th>Actions admin</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set checklist = ollama.disputeChecklist|default([]) %}
                    {% set actions = ollama.adminActions|default([]) %}
                    {% set maxRows = [checklist|length, actions|length]|sort|last %}
                    {% if maxRows and maxRows > 0 %}
                      {% for i in 0..(maxRows - 1) %}
                        <tr>
                          <td>{{ checklist[i]|default('-') }}</td>
                          <td>{{ actions[i]|default('-') }}</td>
                        </tr>
                      {% endfor %}
                    {% else %}
                      <tr>
                        <td colspan=\"2\" class=\"listMeta\">Aucune suggestion detaillee retournee.</td>
                      </tr>
                    {% endif %}
                  </tbody>
                </table>
              </div>

              {% if ollama.error %}
                <div class=\"listItem\" style=\"margin-top:10px;\">
                  <span>Erreur</span>
                  <span class=\"listMeta\">{{ ollama.error }}</span>
                </div>
              {% endif %}
            </div>
          {% endif %}
        {% endif %}
      </section>
    </div>
  </div>
{% endblock %}

", "admin/pages/match-detail.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pages\\match-detail.html.twig");
    }
}
