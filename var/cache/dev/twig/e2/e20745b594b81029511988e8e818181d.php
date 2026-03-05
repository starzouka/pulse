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

/* admin/pdf/tournament_requests_export.html.twig */
class __TwigTemplate_1af00a7017488a60c65a6b7e63e1e62f extends Template
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
            'report_table' => [$this, 'block_report_table'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/pdf/_list_export_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournament_requests_export.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournament_requests_export.html.twig"));

        $this->parent = $this->load("admin/pdf/_list_export_base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_report_table(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report_table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report_table"));

        // line 4
        yield "  <div class=\"panelHeader\">
    <h3 class=\"panelTitle\">LISTE DES DEMANDES</h3>
    <span class=\"listMeta\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 6, $this->source); })())), "html", null, true);
        yield " resultat(s)</span>
  </div>

  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead>
        <tr>
          <th style=\"width: 6%;\">ID</th>
          <th style=\"width: 22%;\">Titre</th>
          <th style=\"width: 12%;\">Organisateur</th>
          <th style=\"width: 11%;\">Jeu</th>
          <th style=\"width: 13%;\">Dates</th>
          <th style=\"width: 10%;\">Prize Pool</th>
          <th style=\"width: 10%;\">Status</th>
          <th style=\"width: 16%;\">Creation</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            yield "          ";
            $context["badgeClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 25) == "ACCEPTED")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 25) == "REFUSED")) ? ("badge--danger") : ("badge--warning"))));
            // line 26
            yield "          <tr>
            <td>#";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
            <td>
              <div class=\"strong\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 29), "html", null, true);
            yield "</div>
              ";
            // line 30
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "photoPath", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 31
                yield "                <div class=\"listMeta\">Photo: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "photoPath", [], "any", false, false, false, 31), "html", null, true);
                yield "</div>
              ";
            } else {
                // line 33
                yield "                <div class=\"listMeta\">Photo: -</div>
              ";
            }
            // line 35
            yield "            </td>
            <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "organizer", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
            <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "game", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
            <td>
              <div>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "startDate", [], "any", false, false, false, 39), "html", null, true);
            yield "</div>
              <div class=\"listMeta\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "endDate", [], "any", false, false, false, 40), "html", null, true);
            yield "</div>
            </td>
            <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "prizePool", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
            <td><span class=\"badge ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 43, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 43), "html", null, true);
            yield "</span></td>
            <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "createdAt", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 46
        if (!$context['_iterated']) {
            // line 47
            yield "          <tr>
            <td colspan=\"8\" class=\"emptyState\">Aucune demande trouvee.</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "      </tbody>
    </table>
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
        return "admin/pdf/tournament_requests_export.html.twig";
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
        return array (  182 => 51,  173 => 47,  171 => 46,  164 => 44,  158 => 43,  154 => 42,  149 => 40,  145 => 39,  140 => 37,  136 => 36,  133 => 35,  129 => 33,  123 => 31,  121 => 30,  117 => 29,  112 => 27,  109 => 26,  106 => 25,  101 => 24,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/pdf/_list_export_base.html.twig' %}

{% block report_table %}
  <div class=\"panelHeader\">
    <h3 class=\"panelTitle\">LISTE DES DEMANDES</h3>
    <span class=\"listMeta\">{{ rows|length }} resultat(s)</span>
  </div>

  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead>
        <tr>
          <th style=\"width: 6%;\">ID</th>
          <th style=\"width: 22%;\">Titre</th>
          <th style=\"width: 12%;\">Organisateur</th>
          <th style=\"width: 11%;\">Jeu</th>
          <th style=\"width: 13%;\">Dates</th>
          <th style=\"width: 10%;\">Prize Pool</th>
          <th style=\"width: 10%;\">Status</th>
          <th style=\"width: 16%;\">Creation</th>
        </tr>
      </thead>
      <tbody>
        {% for row in rows %}
          {% set badgeClass = row.status == 'ACCEPTED' ? 'badge--success' : (row.status == 'REFUSED' ? 'badge--danger' : 'badge--warning') %}
          <tr>
            <td>#{{ row.id }}</td>
            <td>
              <div class=\"strong\">{{ row.title }}</div>
              {% if row.photoPath %}
                <div class=\"listMeta\">Photo: {{ row.photoPath }}</div>
              {% else %}
                <div class=\"listMeta\">Photo: -</div>
              {% endif %}
            </td>
            <td>{{ row.organizer }}</td>
            <td>{{ row.game }}</td>
            <td>
              <div>{{ row.startDate }}</div>
              <div class=\"listMeta\">{{ row.endDate }}</div>
            </td>
            <td>{{ row.prizePool }}</td>
            <td><span class=\"badge {{ badgeClass }}\">{{ row.status }}</span></td>
            <td>{{ row.createdAt }}</td>
          </tr>
        {% else %}
          <tr>
            <td colspan=\"8\" class=\"emptyState\">Aucune demande trouvee.</td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", "admin/pdf/tournament_requests_export.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pdf\\tournament_requests_export.html.twig");
    }
}
