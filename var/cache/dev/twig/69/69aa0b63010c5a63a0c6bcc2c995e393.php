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

/* admin/pdf/tournaments_export.html.twig */
class __TwigTemplate_fd8c691aa95c224f6f2758cc5031acb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournaments_export.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournaments_export.html.twig"));

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
    <h3 class=\"panelTitle\">LISTE DES TOURNOIS</h3>
    <span class=\"listMeta\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 6, $this->source); })())), "html", null, true);
        yield " resultat(s)</span>
  </div>

  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead>
        <tr>
          <th style=\"width: 5%;\">ID</th>
          <th style=\"width: 20%;\">Titre</th>
          <th style=\"width: 11%;\">Jeu</th>
          <th style=\"width: 12%;\">Organisateur</th>
          <th style=\"width: 9%;\">Status</th>
          <th style=\"width: 13%;\">Dates</th>
          <th style=\"width: 14%;\">Inscriptions</th>
          <th style=\"width: 7%;\">Matchs</th>
          <th style=\"width: 9%;\">Prize Pool</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            yield "          ";
            $context["badgeClass"] = ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 26), ["OPEN", "ONGOING"])) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 26) == "FINISHED")) ? ("badge--info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 26) == "CANCELLED")) ? ("badge--danger") : ("badge--warning"))))));
            // line 27
            yield "          <tr>
            <td>#";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
            <td>
              <div class=\"strong\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 30), "html", null, true);
            yield "</div>
              ";
            // line 31
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "photoPath", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "                <div class=\"listMeta\">Photo: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "photoPath", [], "any", false, false, false, 32), "html", null, true);
                yield "</div>
              ";
            } else {
                // line 34
                yield "                <div class=\"listMeta\">Photo: -</div>
              ";
            }
            // line 36
            yield "            </td>
            <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "game", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
            <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "organizer", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
            <td><span class=\"badge ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 39, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 39), "html", null, true);
            yield "</span></td>
            <td>
              <div>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "startDate", [], "any", false, false, false, 41), "html", null, true);
            yield "</div>
              <div class=\"listMeta\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "endDate", [], "any", false, false, false, 42), "html", null, true);
            yield "</div>
            </td>
            <td>
              <div class=\"strong\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "acceptedTeams", [], "any", false, false, false, 45), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "maxTeams", [], "any", false, false, false, 45), "html", null, true);
            yield "</div>
              <div class=\"listMeta\">total: ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "registrationsTotal", [], "any", false, false, false, 46), "html", null, true);
            yield "</div>
            </td>
            <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "matchesCount", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
            <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "prizePool", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 51
        if (!$context['_iterated']) {
            // line 52
            yield "          <tr>
            <td colspan=\"9\" class=\"emptyState\">Aucun tournoi trouve.</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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
        return "admin/pdf/tournaments_export.html.twig";
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
        return array (  195 => 56,  186 => 52,  184 => 51,  177 => 49,  173 => 48,  168 => 46,  162 => 45,  156 => 42,  152 => 41,  145 => 39,  141 => 38,  137 => 37,  134 => 36,  130 => 34,  124 => 32,  122 => 31,  118 => 30,  113 => 28,  110 => 27,  107 => 26,  102 => 25,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/pdf/_list_export_base.html.twig' %}

{% block report_table %}
  <div class=\"panelHeader\">
    <h3 class=\"panelTitle\">LISTE DES TOURNOIS</h3>
    <span class=\"listMeta\">{{ rows|length }} resultat(s)</span>
  </div>

  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead>
        <tr>
          <th style=\"width: 5%;\">ID</th>
          <th style=\"width: 20%;\">Titre</th>
          <th style=\"width: 11%;\">Jeu</th>
          <th style=\"width: 12%;\">Organisateur</th>
          <th style=\"width: 9%;\">Status</th>
          <th style=\"width: 13%;\">Dates</th>
          <th style=\"width: 14%;\">Inscriptions</th>
          <th style=\"width: 7%;\">Matchs</th>
          <th style=\"width: 9%;\">Prize Pool</th>
        </tr>
      </thead>
      <tbody>
        {% for row in rows %}
          {% set badgeClass = row.status in ['OPEN', 'ONGOING'] ? 'badge--success' : (row.status == 'FINISHED' ? 'badge--info' : (row.status == 'CANCELLED' ? 'badge--danger' : 'badge--warning')) %}
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
            <td>{{ row.game }}</td>
            <td>{{ row.organizer }}</td>
            <td><span class=\"badge {{ badgeClass }}\">{{ row.status }}</span></td>
            <td>
              <div>{{ row.startDate }}</div>
              <div class=\"listMeta\">{{ row.endDate }}</div>
            </td>
            <td>
              <div class=\"strong\">{{ row.acceptedTeams }}/{{ row.maxTeams }}</div>
              <div class=\"listMeta\">total: {{ row.registrationsTotal }}</div>
            </td>
            <td>{{ row.matchesCount }}</td>
            <td>{{ row.prizePool }}</td>
          </tr>
        {% else %}
          <tr>
            <td colspan=\"9\" class=\"emptyState\">Aucun tournoi trouve.</td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", "admin/pdf/tournaments_export.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pdf\\tournaments_export.html.twig");
    }
}
