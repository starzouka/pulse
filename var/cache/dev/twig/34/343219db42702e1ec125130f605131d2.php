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

/* admin/pdf/matches_export.html.twig */
class __TwigTemplate_eafa6f384046a2f83760e282f1db3452 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/matches_export.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/matches_export.html.twig"));

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
    <h3 class=\"panelTitle\">LISTE MATCHS</h3>
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
          <th style=\"width: 20%;\">Tournoi</th>
          <th style=\"width: 13%;\">Jeu</th>
          <th style=\"width: 13%;\">Round</th>
          <th style=\"width: 28%;\">Participants</th>
          <th style=\"width: 12%;\">Horaire</th>
          <th style=\"width: 9%;\">Status</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            yield "        ";
            $context["badgeClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 24) == "ONGOING")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 24) == "SCHEDULED")) ? ("badge--info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 24) == "FINISHED")) ? ("") : ("badge--danger"))))));
            // line 25
            yield "          <tr>
            <td>#";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
            <td>
              <div class=\"strong\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tournament", [], "any", false, false, false, 28), "html", null, true);
            yield "</div>
              <div class=\"listMeta\">#";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tournamentId", [], "any", false, false, false, 29), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "game", [], "any", false, false, false, 29), "html", null, true);
            yield "</div>
            </td>
            <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "game", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
            <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "round", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
            <td>
              ";
            // line 34
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "participants", [], "any", false, false, false, 34))) {
                // line 35
                yield "                <span class=\"listMeta\">Aucun participant</span>
              ";
            } else {
                // line 37
                yield "                <ul class=\"participantsList\">
                  ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "participants", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 39
                    yield "                    <li>
                      <span class=\"strong\">";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "team", [], "any", false, false, false, 40), "html", null, true);
                    yield "</span>
                      <span class=\"listMeta\">score: ";
                    // line 41
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "score", [], "any", false, false, false, 41), "html", null, true);
                    yield "</span>
                      ";
                    // line 42
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "isWinner", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 43
                        yield "                        <span class=\"badge badge--success badge--mini\">WINNER</span>
                      ";
                    }
                    // line 45
                    yield "                    </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['participant'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "                </ul>
              ";
            }
            // line 49
            yield "            </td>
            <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "scheduledAt", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
            <td><span class=\"badge ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 51, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 51), "html", null, true);
            yield "</span></td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 53
        if (!$context['_iterated']) {
            // line 54
            yield "          <tr>
            <td colspan=\"7\" class=\"emptyState\">Aucun match trouve.</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        return "admin/pdf/matches_export.html.twig";
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
        return array (  204 => 58,  195 => 54,  193 => 53,  184 => 51,  180 => 50,  177 => 49,  173 => 47,  166 => 45,  162 => 43,  160 => 42,  156 => 41,  152 => 40,  149 => 39,  145 => 38,  142 => 37,  138 => 35,  136 => 34,  131 => 32,  127 => 31,  120 => 29,  116 => 28,  111 => 26,  108 => 25,  105 => 24,  100 => 23,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/pdf/_list_export_base.html.twig' %}

{% block report_table %}
  <div class=\"panelHeader\">
    <h3 class=\"panelTitle\">LISTE MATCHS</h3>
    <span class=\"listMeta\">{{ rows|length }} resultat(s)</span>
  </div>

  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead>
        <tr>
          <th style=\"width: 5%;\">ID</th>
          <th style=\"width: 20%;\">Tournoi</th>
          <th style=\"width: 13%;\">Jeu</th>
          <th style=\"width: 13%;\">Round</th>
          <th style=\"width: 28%;\">Participants</th>
          <th style=\"width: 12%;\">Horaire</th>
          <th style=\"width: 9%;\">Status</th>
        </tr>
      </thead>
      <tbody>
        {% for row in rows %}
        {% set badgeClass = row.status == 'ONGOING' ? 'badge--success' : (row.status == 'SCHEDULED' ? 'badge--info' : (row.status == 'FINISHED' ? '' : 'badge--danger')) %}
          <tr>
            <td>#{{ row.id }}</td>
            <td>
              <div class=\"strong\">{{ row.tournament }}</div>
              <div class=\"listMeta\">#{{ row.tournamentId }} - {{ row.game }}</div>
            </td>
            <td>{{ row.game }}</td>
            <td>{{ row.round }}</td>
            <td>
              {% if row.participants is empty %}
                <span class=\"listMeta\">Aucun participant</span>
              {% else %}
                <ul class=\"participantsList\">
                  {% for participant in row.participants %}
                    <li>
                      <span class=\"strong\">{{ participant.team }}</span>
                      <span class=\"listMeta\">score: {{ participant.score }}</span>
                      {% if participant.isWinner %}
                        <span class=\"badge badge--success badge--mini\">WINNER</span>
                      {% endif %}
                    </li>
                  {% endfor %}
                </ul>
              {% endif %}
            </td>
            <td>{{ row.scheduledAt }}</td>
            <td><span class=\"badge {{ badgeClass }}\">{{ row.status }}</span></td>
          </tr>
        {% else %}
          <tr>
            <td colspan=\"7\" class=\"emptyState\">Aucun match trouve.</td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", "admin/pdf/matches_export.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pdf\\matches_export.html.twig");
    }
}
