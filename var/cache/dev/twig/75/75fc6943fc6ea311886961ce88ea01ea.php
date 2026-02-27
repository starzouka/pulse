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

/* admin/pdf/tournament_requests.html.twig */
class __TwigTemplate_5342afbeb987cd7f32c39f80830a4a9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournament_requests.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournament_requests.html.twig"));

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
    .status-pending { background: #fef3c7; color: #92400e; border-color: #fde68a; }
    .status-accepted { background: #e6f8ee; color: #065f46; border-color: #a7f3d0; }
    .status-refused { background: #fee2e2; color: #991b1b; border-color: #fecaca; }
    .muted { color: #64748b; font-style: italic; text-align: center; }
    .titleCell strong { display: block; margin-bottom: 3px; }
    .titleMeta { color: #64748b; font-size: 9px; }
  </style>
</head>
<body>
  <section class=\"reportHeader\">
    <div class=\"brand\">PULSE ADMIN EXPORT</div>
    <h1>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "</h1>
    <div class=\"metaRow\">
      <span>Lignes: ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["requestRows"]) || array_key_exists("requestRows", $context) ? $context["requestRows"] : (function () { throw new RuntimeError('Variable "requestRows" does not exist.', 35, $this->source); })())), "html", null, true);
        yield "</span>
      <span>Genere le: ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["generatedAt"]) || array_key_exists("generatedAt", $context) ? $context["generatedAt"] : (function () { throw new RuntimeError('Variable "generatedAt" does not exist.', 36, $this->source); })()), "Y-m-d H:i"), "html", null, true);
        yield "</span>
    </div>
  </section>

  <table>
    <thead>
      <tr>
        <th class=\"photoCell\">Photo</th>
        <th>ID</th>
        <th>Titre</th>
        <th>Organisateur</th>
        <th>Jeu</th>
        <th>Dates</th>
        <th>Status</th>
        <th>Prize pool</th>
        <th>Cree le</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["requestRows"]) || array_key_exists("requestRows", $context) ? $context["requestRows"] : (function () { throw new RuntimeError('Variable "requestRows" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 56
            yield "        ";
            $context["requestItem"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "request", [], "any", false, false, false, 56);
            // line 57
            yield "        ";
            $context["requestId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["requestItem"] ?? null), "requestId", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 57, $this->source); })()), "requestId", [], "any", false, false, false, 57)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 57, $this->source); })()), "requestId", [], "any", false, false, false, 57)) : (0));
            // line 58
            yield "        ";
            $context["photoUrl"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "photoSrc", [], "any", false, false, false, 58);
            // line 59
            yield "        ";
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["requestItem"] ?? null), "status", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 59, $this->source); })()), "status", [], "any", false, false, false, 59), "PENDING")) : ("PENDING"));
            // line 60
            yield "        <tr>
          <td class=\"photoCell\">
            ";
            // line 62
            if ((($tmp = (isset($context["photoUrl"]) || array_key_exists("photoUrl", $context) ? $context["photoUrl"] : (function () { throw new RuntimeError('Variable "photoUrl" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "              <img class=\"photoThumb\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["photoUrl"]) || array_key_exists("photoUrl", $context) ? $context["photoUrl"] : (function () { throw new RuntimeError('Variable "photoUrl" does not exist.', 63, $this->source); })()), "html", null, true);
                yield "\" alt=\"demande #";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 63, $this->source); })()), "html", null, true);
                yield "\">
            ";
            } else {
                // line 65
                yield "              -
            ";
            }
            // line 67
            yield "          </td>
          <td>#";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 68, $this->source); })()), "html", null, true);
            yield "</td>
          <td class=\"titleCell\">
            <strong>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["requestItem"] ?? null), "title", [], "any", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 70, $this->source); })()), "title", [], "any", false, false, false, 70), "-")) : ("-")), "html", null, true);
            yield "</strong>
            <div class=\"titleMeta\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["requestItem"] ?? null), "format", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 71, $this->source); })()), "format", [], "any", false, false, false, 71), "-")) : ("-")), "html", null, true);
            yield "</div>
          </td>
          <td>";
            // line 73
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 73, $this->source); })()), "organizerUserId", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 73, $this->source); })()), "organizerUserId", [], "any", false, false, false, 73), "username", [], "any", false, false, false, 73), "html", null, true)) : ("-"));
            yield "</td>
          <td>";
            // line 74
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 74, $this->source); })()), "gameId", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 74, $this->source); })()), "gameId", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true)) : ("-"));
            yield "</td>
          <td>
            ";
            // line 76
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 76, $this->source); })()), "startDate", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 76, $this->source); })()), "startDate", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true)) : ("-"));
            yield "
            ->
            ";
            // line 78
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 78, $this->source); })()), "endDate", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 78, $this->source); })()), "endDate", [], "any", false, false, false, 78), "d/m/Y"), "html", null, true)) : ("-"));
            yield "
          </td>
          <td>
            <span class=\"badge status-";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 81, $this->source); })())), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 81, $this->source); })()), "html", null, true);
            yield "</span>
          </td>
          <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 83, $this->source); })()), "prizePool", [], "any", false, false, false, 83), 2, ".", " "), "html", null, true);
            yield " DT</td>
          <td>";
            // line 84
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 84, $this->source); })()), "createdAt", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestItem"]) || array_key_exists("requestItem", $context) ? $context["requestItem"] : (function () { throw new RuntimeError('Variable "requestItem" does not exist.', 84, $this->source); })()), "createdAt", [], "any", false, false, false, 84), "Y-m-d H:i"), "html", null, true)) : ("-"));
            yield "</td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        // line 86
        if (!$context['_iterated']) {
            // line 87
            yield "        <tr>
          <td class=\"muted\" colspan=\"9\">Aucune demande disponible.</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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
        return "admin/pdf/tournament_requests.html.twig";
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
        return array (  214 => 91,  205 => 87,  203 => 86,  196 => 84,  192 => 83,  185 => 81,  179 => 78,  174 => 76,  169 => 74,  165 => 73,  160 => 71,  156 => 70,  151 => 68,  148 => 67,  144 => 65,  136 => 63,  134 => 62,  130 => 60,  127 => 59,  124 => 58,  121 => 57,  118 => 56,  113 => 55,  91 => 36,  87 => 35,  82 => 33,  48 => 1,);
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
    .status-pending { background: #fef3c7; color: #92400e; border-color: #fde68a; }
    .status-accepted { background: #e6f8ee; color: #065f46; border-color: #a7f3d0; }
    .status-refused { background: #fee2e2; color: #991b1b; border-color: #fecaca; }
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
      <span>Lignes: {{ requestRows|length }}</span>
      <span>Genere le: {{ generatedAt|date('Y-m-d H:i') }}</span>
    </div>
  </section>

  <table>
    <thead>
      <tr>
        <th class=\"photoCell\">Photo</th>
        <th>ID</th>
        <th>Titre</th>
        <th>Organisateur</th>
        <th>Jeu</th>
        <th>Dates</th>
        <th>Status</th>
        <th>Prize pool</th>
        <th>Cree le</th>
      </tr>
    </thead>
    <tbody>
      {% for row in requestRows %}
        {% set requestItem = row.request %}
        {% set requestId = requestItem.requestId ?? 0 %}
        {% set photoUrl = row.photoSrc %}
        {% set status = requestItem.status|default('PENDING') %}
        <tr>
          <td class=\"photoCell\">
            {% if photoUrl %}
              <img class=\"photoThumb\" src=\"{{ photoUrl }}\" alt=\"demande #{{ requestId }}\">
            {% else %}
              -
            {% endif %}
          </td>
          <td>#{{ requestId }}</td>
          <td class=\"titleCell\">
            <strong>{{ requestItem.title|default('-') }}</strong>
            <div class=\"titleMeta\">{{ requestItem.format|default('-') }}</div>
          </td>
          <td>{{ requestItem.organizerUserId ? requestItem.organizerUserId.username : '-' }}</td>
          <td>{{ requestItem.gameId ? requestItem.gameId.name : '-' }}</td>
          <td>
            {{ requestItem.startDate ? requestItem.startDate|date('d/m/Y') : '-' }}
            ->
            {{ requestItem.endDate ? requestItem.endDate|date('d/m/Y') : '-' }}
          </td>
          <td>
            <span class=\"badge status-{{ status|lower }}\">{{ status }}</span>
          </td>
          <td>{{ requestItem.prizePool|number_format(2, '.', ' ') }} DT</td>
          <td>{{ requestItem.createdAt ? requestItem.createdAt|date('Y-m-d H:i') : '-' }}</td>
        </tr>
      {% else %}
        <tr>
          <td class=\"muted\" colspan=\"9\">Aucune demande disponible.</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</body>
</html>
", "admin/pdf/tournament_requests.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pdf\\tournament_requests.html.twig");
    }
}
