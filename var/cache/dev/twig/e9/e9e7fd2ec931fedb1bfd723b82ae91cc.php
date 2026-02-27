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

/* admin/pdf/tournaments.html.twig */
class __TwigTemplate_f5952ab1c0789544faff4afe9ecf706c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournaments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournaments.html.twig"));

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
    .status-open, .status-ongoing { background: #e6f8ee; color: #065f46; border-color: #a7f3d0; }
    .status-finished { background: #e8f1ff; color: #1d4ed8; border-color: #bfdbfe; }
    .status-cancelled { background: #fee2e2; color: #991b1b; border-color: #fecaca; }
    .status-draft { background: #fef3c7; color: #92400e; border-color: #fde68a; }
    .muted { color: #64748b; font-style: italic; text-align: center; }
    .titleCell strong { display: block; margin-bottom: 3px; }
    .titleMeta { color: #64748b; font-size: 9px; }
  </style>
</head>
<body>
  <section class=\"reportHeader\">
    <div class=\"brand\">PULSE ADMIN EXPORT</div>
    <h1>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "</h1>
    <div class=\"metaRow\">
      <span>Lignes: ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournamentRows"]) || array_key_exists("tournamentRows", $context) ? $context["tournamentRows"] : (function () { throw new RuntimeError('Variable "tournamentRows" does not exist.', 36, $this->source); })())), "html", null, true);
        yield "</span>
      <span>Genere le: ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["generatedAt"]) || array_key_exists("generatedAt", $context) ? $context["generatedAt"] : (function () { throw new RuntimeError('Variable "generatedAt" does not exist.', 37, $this->source); })()), "Y-m-d H:i"), "html", null, true);
        yield "</span>
    </div>
  </section>

  <table>
    <thead>
      <tr>
        <th class=\"photoCell\">Photo</th>
        <th>ID</th>
        <th>Titre</th>
        <th>Jeu</th>
        <th>Organisateur</th>
        <th>Status</th>
        <th>Dates</th>
        <th>Equipes</th>
        <th>Matchs</th>
        <th>Prize pool</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournamentRows"]) || array_key_exists("tournamentRows", $context) ? $context["tournamentRows"] : (function () { throw new RuntimeError('Variable "tournamentRows" does not exist.', 57, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 58
            yield "        ";
            $context["tournament"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tournament", [], "any", false, false, false, 58);
            // line 59
            yield "        ";
            $context["tournamentId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "tournamentId", [], "any", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 59, $this->source); })()), "tournamentId", [], "any", false, false, false, 59)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 59, $this->source); })()), "tournamentId", [], "any", false, false, false, 59)) : (0));
            // line 60
            yield "        ";
            $context["photoUrl"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "photoSrc", [], "any", false, false, false, 60);
            // line 61
            yield "        ";
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "status", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 61, $this->source); })()), "status", [], "any", false, false, false, 61), "DRAFT")) : ("DRAFT"));
            // line 62
            yield "        <tr>
          <td class=\"photoCell\">
            ";
            // line 64
            if ((($tmp = (isset($context["photoUrl"]) || array_key_exists("photoUrl", $context) ? $context["photoUrl"] : (function () { throw new RuntimeError('Variable "photoUrl" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "              <img class=\"photoThumb\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["photoUrl"]) || array_key_exists("photoUrl", $context) ? $context["photoUrl"] : (function () { throw new RuntimeError('Variable "photoUrl" does not exist.', 65, $this->source); })()), "html", null, true);
                yield "\" alt=\"tournoi #";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 65, $this->source); })()), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "</td>
          <td class=\"titleCell\">
            <strong>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "title", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 72, $this->source); })()), "title", [], "any", false, false, false, 72), "-")) : ("-")), "html", null, true);
            yield "</strong>
            <div class=\"titleMeta\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "format", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 73, $this->source); })()), "format", [], "any", false, false, false, 73), "-")) : ("-")), "html", null, true);
            yield "</div>
          </td>
          <td>";
            // line 75
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 75, $this->source); })()), "gameId", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 75, $this->source); })()), "gameId", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true)) : ("-"));
            yield "</td>
          <td>";
            // line 76
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 76, $this->source); })()), "organizerUserId", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 76, $this->source); })()), "organizerUserId", [], "any", false, false, false, 76), "username", [], "any", false, false, false, 76), "html", null, true)) : ("-"));
            yield "</td>
          <td>
            <span class=\"badge status-";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 78, $this->source); })())), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 78, $this->source); })()), "html", null, true);
            yield "</span>
          </td>
          <td>
            ";
            // line 81
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 81, $this->source); })()), "startDate", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 81, $this->source); })()), "startDate", [], "any", false, false, false, 81), "d/m/Y"), "html", null, true)) : ("-"));
            yield "
            ->
            ";
            // line 83
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 83, $this->source); })()), "endDate", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 83, $this->source); })()), "endDate", [], "any", false, false, false, 83), "d/m/Y"), "html", null, true)) : ("-"));
            yield "
          </td>
          <td>
            ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["acceptedByTournamentId"] ?? null), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 86, $this->source); })()), [], "array", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["acceptedByTournamentId"]) || array_key_exists("acceptedByTournamentId", $context) ? $context["acceptedByTournamentId"] : (function () { throw new RuntimeError('Variable "acceptedByTournamentId" does not exist.', 86, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 86, $this->source); })()), [], "array", false, false, false, 86), 0)) : (0)), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 86, $this->source); })()), "maxTeams", [], "any", false, false, false, 86), "html", null, true);
            yield "
          </td>
          <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["matchesByTournamentId"] ?? null), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 88, $this->source); })()), [], "array", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchesByTournamentId"]) || array_key_exists("matchesByTournamentId", $context) ? $context["matchesByTournamentId"] : (function () { throw new RuntimeError('Variable "matchesByTournamentId" does not exist.', 88, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 88, $this->source); })()), [], "array", false, false, false, 88), 0)) : (0)), "html", null, true);
            yield "</td>
          <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 89, $this->source); })()), "prizePool", [], "any", false, false, false, 89), 2, ".", " "), "html", null, true);
            yield " DT</td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        // line 91
        if (!$context['_iterated']) {
            // line 92
            yield "        <tr>
          <td class=\"muted\" colspan=\"10\">Aucun tournoi disponible.</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
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
        return "admin/pdf/tournaments.html.twig";
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
        return array (  224 => 96,  215 => 92,  213 => 91,  206 => 89,  202 => 88,  195 => 86,  189 => 83,  184 => 81,  176 => 78,  171 => 76,  167 => 75,  162 => 73,  158 => 72,  153 => 70,  150 => 69,  146 => 67,  138 => 65,  136 => 64,  132 => 62,  129 => 61,  126 => 60,  123 => 59,  120 => 58,  115 => 57,  92 => 37,  88 => 36,  83 => 34,  48 => 1,);
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
    .status-open, .status-ongoing { background: #e6f8ee; color: #065f46; border-color: #a7f3d0; }
    .status-finished { background: #e8f1ff; color: #1d4ed8; border-color: #bfdbfe; }
    .status-cancelled { background: #fee2e2; color: #991b1b; border-color: #fecaca; }
    .status-draft { background: #fef3c7; color: #92400e; border-color: #fde68a; }
    .muted { color: #64748b; font-style: italic; text-align: center; }
    .titleCell strong { display: block; margin-bottom: 3px; }
    .titleMeta { color: #64748b; font-size: 9px; }
  </style>
</head>
<body>
  <section class=\"reportHeader\">
    <div class=\"brand\">PULSE ADMIN EXPORT</div>
    <h1>{{ title }}</h1>
    <div class=\"metaRow\">
      <span>Lignes: {{ tournamentRows|length }}</span>
      <span>Genere le: {{ generatedAt|date('Y-m-d H:i') }}</span>
    </div>
  </section>

  <table>
    <thead>
      <tr>
        <th class=\"photoCell\">Photo</th>
        <th>ID</th>
        <th>Titre</th>
        <th>Jeu</th>
        <th>Organisateur</th>
        <th>Status</th>
        <th>Dates</th>
        <th>Equipes</th>
        <th>Matchs</th>
        <th>Prize pool</th>
      </tr>
    </thead>
    <tbody>
      {% for row in tournamentRows %}
        {% set tournament = row.tournament %}
        {% set tournamentId = tournament.tournamentId ?? 0 %}
        {% set photoUrl = row.photoSrc %}
        {% set status = tournament.status|default('DRAFT') %}
        <tr>
          <td class=\"photoCell\">
            {% if photoUrl %}
              <img class=\"photoThumb\" src=\"{{ photoUrl }}\" alt=\"tournoi #{{ tournamentId }}\">
            {% else %}
              -
            {% endif %}
          </td>
          <td>#{{ tournamentId }}</td>
          <td class=\"titleCell\">
            <strong>{{ tournament.title|default('-') }}</strong>
            <div class=\"titleMeta\">{{ tournament.format|default('-') }}</div>
          </td>
          <td>{{ tournament.gameId ? tournament.gameId.name : '-' }}</td>
          <td>{{ tournament.organizerUserId ? tournament.organizerUserId.username : '-' }}</td>
          <td>
            <span class=\"badge status-{{ status|lower }}\">{{ status }}</span>
          </td>
          <td>
            {{ tournament.startDate ? tournament.startDate|date('d/m/Y') : '-' }}
            ->
            {{ tournament.endDate ? tournament.endDate|date('d/m/Y') : '-' }}
          </td>
          <td>
            {{ acceptedByTournamentId[tournamentId]|default(0) }}/{{ tournament.maxTeams }}
          </td>
          <td>{{ matchesByTournamentId[tournamentId]|default(0) }}</td>
          <td>{{ tournament.prizePool|number_format(2, '.', ' ') }} DT</td>
        </tr>
      {% else %}
        <tr>
          <td class=\"muted\" colspan=\"10\">Aucun tournoi disponible.</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</body>
</html>
", "admin/pdf/tournaments.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pdf\\tournaments.html.twig");
    }
}
