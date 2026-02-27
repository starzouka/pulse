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

/* admin/pdf/matches.html.twig */
class __TwigTemplate_7ca0d271919fa1d1b08124103da004bd extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/matches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/matches.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <style>
    @page { margin: 18px; }
    * { box-sizing: border-box; }
    body { margin: 0; font-family: DejaVu Sans, sans-serif; font-size: 10px; color: #0f172a; background: #eef2f8; }
    .reportHeader { margin-bottom: 12px; padding: 12px 14px; border: 1px solid #d9e2ef; border-top: 4px solid #ff9d2e; background: #ffffff; }
    .brand { display: inline-block; font-size: 9px; font-weight: 700; letter-spacing: 1px; color: #ff9d2e; margin-bottom: 4px; }
    h1 { margin: 0; font-size: 18px; color: #0b1220; }
    .metaRow { margin-top: 6px; font-size: 9px; color: #475569; }
    .metaRow span { display: inline-block; margin-right: 12px; }
    table { width: 100%; border-collapse: collapse; table-layout: fixed; }
    thead { display: table-header-group; }
    th, td { border: 1px solid #d9e2ef; padding: 6px; text-align: left; vertical-align: top; word-wrap: break-word; }
    th { background: #1f2937; color: #f8fafc; font-size: 9px; }
    tbody tr:nth-child(even) td { background: #f8fafc; }
    .photoCell { width: 120px; }
    .photoThumb { width: 110px; height: 62px; object-fit: cover; border: 1px solid #d9e2ef; }
    .badge { display: inline-block; padding: 2px 6px; font-size: 9px; font-weight: 700; border-radius: 999px; border: 1px solid #d9e2ef; background: #f8fafc; color: #0f172a; }
    .status-scheduled { background: #e8f1ff; color: #1d4ed8; border-color: #bfdbfe; }
    .status-ongoing { background: #e6f8ee; color: #065f46; border-color: #a7f3d0; }
    .status-finished { background: #f1f5f9; color: #0f172a; border-color: #d9e2ef; }
    .status-cancelled { background: #fee2e2; color: #991b1b; border-color: #fecaca; }
    .teamList { margin: 0; padding: 0; list-style: none; }
    .teamList li { margin: 0 0 2px; }
    .winner { font-weight: 700; color: #065f46; }
    .muted { color: #64748b; font-style: italic; text-align: center; }
  </style>
</head>
<body>
  <section class=\"reportHeader\">
    <div class=\"brand\">PULSE ADMIN EXPORT</div>
    <h1>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "</h1>
    <div class=\"metaRow\">
      <span>Lignes: ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchRows"]) || array_key_exists("matchRows", $context) ? $context["matchRows"] : (function () { throw new RuntimeError('Variable "matchRows" does not exist.', 37, $this->source); })())), "html", null, true);
        yield "</span>
      <span>Genere le: ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["generatedAt"]) || array_key_exists("generatedAt", $context) ? $context["generatedAt"] : (function () { throw new RuntimeError('Variable "generatedAt" does not exist.', 38, $this->source); })()), "Y-m-d H:i"), "html", null, true);
        yield "</span>
    </div>
  </section>

  <table>
    <thead>
      <tr>
        <th class=\"photoCell\">Photo tournoi</th>
        <th>ID</th>
        <th>Tournoi</th>
        <th>Round</th>
        <th>Participants</th>
        <th>Horaire</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matchRows"]) || array_key_exists("matchRows", $context) ? $context["matchRows"] : (function () { throw new RuntimeError('Variable "matchRows" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 56
            yield "        ";
            $context["match"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "match", [], "any", false, false, false, 56);
            // line 57
            yield "        ";
            $context["matchId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["match"] ?? null), "matchId", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 57, $this->source); })()), "matchId", [], "any", false, false, false, 57)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 57, $this->source); })()), "matchId", [], "any", false, false, false, 57)) : (0));
            // line 58
            yield "        ";
            $context["tournament"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 58, $this->source); })()), "tournamentId", [], "any", false, false, false, 58);
            // line 59
            yield "        ";
            $context["photoUrl"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "photoSrc", [], "any", false, false, false, 59);
            // line 60
            yield "        ";
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["match"] ?? null), "status", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 60, $this->source); })()), "status", [], "any", false, false, false, 60), "SCHEDULED")) : ("SCHEDULED"));
            // line 61
            yield "        ";
            $context["teams"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchTeamsByMatchId"] ?? null), (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 61, $this->source); })()), [], "array", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchTeamsByMatchId"]) || array_key_exists("matchTeamsByMatchId", $context) ? $context["matchTeamsByMatchId"] : (function () { throw new RuntimeError('Variable "matchTeamsByMatchId" does not exist.', 61, $this->source); })()), (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 61, $this->source); })()), [], "array", false, false, false, 61), [])) : ([]));
            // line 62
            yield "        <tr>
          <td class=\"photoCell\">
            ";
            // line 64
            if ((($tmp = (isset($context["photoUrl"]) || array_key_exists("photoUrl", $context) ? $context["photoUrl"] : (function () { throw new RuntimeError('Variable "photoUrl" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "              <img class=\"photoThumb\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["photoUrl"]) || array_key_exists("photoUrl", $context) ? $context["photoUrl"] : (function () { throw new RuntimeError('Variable "photoUrl" does not exist.', 65, $this->source); })()), "html", null, true);
                yield "\" alt=\"tournoi match #";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 65, $this->source); })()), "html", null, true);
                yield "\">
            ";
            } else {
                // line 67
                yield "              -
            ";
            }
            // line 69
            yield "          </td>
          <td>#";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "</td>
          <td>
            <strong>";
            // line 72
            yield (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 72, $this->source); })()), "title", [], "any", false, false, false, 72), "html", null, true)) : ("-"));
            yield "</strong><br>
            <span>";
            // line 73
            yield ((((isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 73, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 73, $this->source); })()), "gameId", [], "any", false, false, false, 73))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 73, $this->source); })()), "gameId", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true)) : ("-"));
            yield "</span>
          </td>
          <td>";
            // line 75
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 75, $this->source); })()), "roundName", [], "any", false, false, false, 75)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 75, $this->source); })()), "roundName", [], "any", false, false, false, 75), "html", null, true)) : ("-"));
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 75, $this->source); })()), "bestOf", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " BO";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 75, $this->source); })()), "bestOf", [], "any", false, false, false, 75), "html", null, true);
            }
            yield "</td>
          <td>
            ";
            // line 77
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 77, $this->source); })()))) {
                // line 78
                yield "              -
            ";
            } else {
                // line 80
                yield "              <ul class=\"teamList\">
                ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 81, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["relation"]) {
                    // line 82
                    yield "                  ";
                    $context["relationTeam"] = CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "teamId", [], "any", false, false, false, 82);
                    // line 83
                    yield "                  <li class=\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "isWinner", [], "any", false, false, false, 83) === true)) ? ("winner") : (""));
                    yield "\">
                    ";
                    // line 84
                    yield (((($tmp = (isset($context["relationTeam"]) || array_key_exists("relationTeam", $context) ? $context["relationTeam"] : (function () { throw new RuntimeError('Variable "relationTeam" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["relationTeam"]) || array_key_exists("relationTeam", $context) ? $context["relationTeam"] : (function () { throw new RuntimeError('Variable "relationTeam" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84), "html", null, true)) : ("-"));
                    yield "
                    ";
                    // line 85
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 85))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 85), "html", null, true);
                        yield ")";
                    }
                    // line 86
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "isWinner", [], "any", false, false, false, 86) === true)) {
                        yield " W";
                    }
                    // line 87
                    yield "                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['relation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                yield "              </ul>
            ";
            }
            // line 91
            yield "          </td>
          <td>";
            // line 92
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 92, $this->source); })()), "scheduledAt", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 92, $this->source); })()), "scheduledAt", [], "any", false, false, false, 92), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
          <td><span class=\"badge status-";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 93, $this->source); })())), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 93, $this->source); })()), "html", null, true);
            yield "</span></td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        // line 95
        if (!$context['_iterated']) {
            // line 96
            yield "        <tr>
          <td class=\"muted\" colspan=\"7\">Aucun match disponible.</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "    </tbody>
  </table>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/pdf/matches.html.twig";
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
        return array (  254 => 100,  245 => 96,  243 => 95,  234 => 93,  230 => 92,  227 => 91,  223 => 89,  216 => 87,  211 => 86,  205 => 85,  201 => 84,  196 => 83,  193 => 82,  189 => 81,  186 => 80,  182 => 78,  180 => 77,  171 => 75,  166 => 73,  162 => 72,  157 => 70,  154 => 69,  150 => 67,  142 => 65,  140 => 64,  136 => 62,  133 => 61,  130 => 60,  127 => 59,  124 => 58,  121 => 57,  118 => 56,  113 => 55,  93 => 38,  89 => 37,  84 => 35,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <style>
    @page { margin: 18px; }
    * { box-sizing: border-box; }
    body { margin: 0; font-family: DejaVu Sans, sans-serif; font-size: 10px; color: #0f172a; background: #eef2f8; }
    .reportHeader { margin-bottom: 12px; padding: 12px 14px; border: 1px solid #d9e2ef; border-top: 4px solid #ff9d2e; background: #ffffff; }
    .brand { display: inline-block; font-size: 9px; font-weight: 700; letter-spacing: 1px; color: #ff9d2e; margin-bottom: 4px; }
    h1 { margin: 0; font-size: 18px; color: #0b1220; }
    .metaRow { margin-top: 6px; font-size: 9px; color: #475569; }
    .metaRow span { display: inline-block; margin-right: 12px; }
    table { width: 100%; border-collapse: collapse; table-layout: fixed; }
    thead { display: table-header-group; }
    th, td { border: 1px solid #d9e2ef; padding: 6px; text-align: left; vertical-align: top; word-wrap: break-word; }
    th { background: #1f2937; color: #f8fafc; font-size: 9px; }
    tbody tr:nth-child(even) td { background: #f8fafc; }
    .photoCell { width: 120px; }
    .photoThumb { width: 110px; height: 62px; object-fit: cover; border: 1px solid #d9e2ef; }
    .badge { display: inline-block; padding: 2px 6px; font-size: 9px; font-weight: 700; border-radius: 999px; border: 1px solid #d9e2ef; background: #f8fafc; color: #0f172a; }
    .status-scheduled { background: #e8f1ff; color: #1d4ed8; border-color: #bfdbfe; }
    .status-ongoing { background: #e6f8ee; color: #065f46; border-color: #a7f3d0; }
    .status-finished { background: #f1f5f9; color: #0f172a; border-color: #d9e2ef; }
    .status-cancelled { background: #fee2e2; color: #991b1b; border-color: #fecaca; }
    .teamList { margin: 0; padding: 0; list-style: none; }
    .teamList li { margin: 0 0 2px; }
    .winner { font-weight: 700; color: #065f46; }
    .muted { color: #64748b; font-style: italic; text-align: center; }
  </style>
</head>
<body>
  <section class=\"reportHeader\">
    <div class=\"brand\">PULSE ADMIN EXPORT</div>
    <h1>{{ title }}</h1>
    <div class=\"metaRow\">
      <span>Lignes: {{ matchRows|length }}</span>
      <span>Genere le: {{ generatedAt|date('Y-m-d H:i') }}</span>
    </div>
  </section>

  <table>
    <thead>
      <tr>
        <th class=\"photoCell\">Photo tournoi</th>
        <th>ID</th>
        <th>Tournoi</th>
        <th>Round</th>
        <th>Participants</th>
        <th>Horaire</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      {% for row in matchRows %}
        {% set match = row.match %}
        {% set matchId = match.matchId ?? 0 %}
        {% set tournament = match.tournamentId %}
        {% set photoUrl = row.photoSrc %}
        {% set status = match.status|default('SCHEDULED') %}
        {% set teams = matchTeamsByMatchId[matchId]|default([]) %}
        <tr>
          <td class=\"photoCell\">
            {% if photoUrl %}
              <img class=\"photoThumb\" src=\"{{ photoUrl }}\" alt=\"tournoi match #{{ matchId }}\">
            {% else %}
              -
            {% endif %}
          </td>
          <td>#{{ matchId }}</td>
          <td>
            <strong>{{ tournament ? tournament.title : '-' }}</strong><br>
            <span>{{ tournament and tournament.gameId ? tournament.gameId.name : '-' }}</span>
          </td>
          <td>{{ match.roundName ?: '-' }}{% if match.bestOf %} BO{{ match.bestOf }}{% endif %}</td>
          <td>
            {% if teams is empty %}
              -
            {% else %}
              <ul class=\"teamList\">
                {% for relation in teams %}
                  {% set relationTeam = relation.teamId %}
                  <li class=\"{{ relation.isWinner is same as(true) ? 'winner' : '' }}\">
                    {{ relationTeam ? relationTeam.name : '-' }}
                    {% if relation.score is not null %} ({{ relation.score }}){% endif %}
                    {% if relation.isWinner is same as(true) %} W{% endif %}
                  </li>
                {% endfor %}
              </ul>
            {% endif %}
          </td>
          <td>{{ match.scheduledAt ? match.scheduledAt|date('d/m/Y H:i') : '-' }}</td>
          <td><span class=\"badge status-{{ status|lower }}\">{{ status }}</span></td>
        </tr>
      {% else %}
        <tr>
          <td class=\"muted\" colspan=\"7\">Aucun match disponible.</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</body>
</html>
", "admin/pdf/matches.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pdf\\matches.html.twig");
    }
}
