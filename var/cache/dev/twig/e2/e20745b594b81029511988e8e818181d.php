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
            'pdf_content' => [$this, 'block_pdf_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/pdf/_export_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournament_requests_export.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournament_requests_export.html.twig"));

        $this->parent = $this->load("admin/pdf/_export_layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pdf_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pdf_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pdf_content"));

        // line 4
        yield "  <div class=\"panel\">
    <div class=\"panelHeader\">
      <h2 class=\"panelTitle\">Liste des demandes de tournoi</h2>
      <div class=\"panelSub\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("counter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 7, $this->source); })()), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 7, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 7, $this->source); })())))), "html", null, true);
        yield " element(s) exporte(s)</div>
    </div>

    ";
        // line 10
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 10, $this->source); })()))) {
            // line 11
            yield "      <div class=\"emptyState\">Aucune demande trouvee pour les filtres selectionnes.</div>
    ";
        } else {
            // line 13
            yield "      <table class=\"dataTable\">
        <thead>
          <tr>
            <th style=\"width: 4%;\">ID</th>
            <th style=\"width: 20%;\">Demande</th>
            <th style=\"width: 10%;\">Organisateur</th>
            <th style=\"width: 9%;\">Jeu</th>
            <th style=\"width: 12%;\">Dates</th>
            <th style=\"width: 10%;\">Parametres</th>
            <th style=\"width: 10%;\" class=\"textRight\">Prize Pool</th>
            <th style=\"width: 8%;\">Status</th>
            <th style=\"width: 17%;\">Suivi admin</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["requestItem"]) {
                // line 29
                yield "            ";
                $context["requestId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "requestId", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "requestId", [], "any", false, false, false, 29)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "requestId", [], "any", false, false, false, 29)) : (0));
                // line 30
                yield "            ";
                $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "status", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "status", [], "any", false, false, false, 30), "PENDING")) : ("PENDING"));
                // line 31
                yield "            ";
                $context["photoSrc"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["photoUris"] ?? null), (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 31, $this->source); })()), [], "array", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["photoUris"]) || array_key_exists("photoUris", $context) ? $context["photoUris"] : (function () { throw new RuntimeError('Variable "photoUris" does not exist.', 31, $this->source); })()), (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 31, $this->source); })()), [], "array", false, false, false, 31), null)) : (null));
                // line 32
                yield "            ";
                $context["statusClass"] = ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 32, $this->source); })()) == "ACCEPTED")) ? ("status-success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 32, $this->source); })()) == "REFUSED")) ? ("status-danger") : ("status-warning"))));
                // line 33
                yield "
            <tr>
              <td class=\"nowrap\">#";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 35, $this->source); })()), "html", null, true);
                yield "</td>
              <td>
                ";
                // line 37
                if ((($tmp = (isset($context["photoSrc"]) || array_key_exists("photoSrc", $context) ? $context["photoSrc"] : (function () { throw new RuntimeError('Variable "photoSrc" does not exist.', 37, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 38
                    yield "                  <img class=\"thumb\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["photoSrc"]) || array_key_exists("photoSrc", $context) ? $context["photoSrc"] : (function () { throw new RuntimeError('Variable "photoSrc" does not exist.', 38, $this->source); })()), "html", null, true);
                    yield "\" alt=\"\">
                ";
                } else {
                    // line 40
                    yield "                  <div class=\"thumbPlaceholder\">No photo</div>
                ";
                }
                // line 42
                yield "                <div class=\"rowTitle\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "title", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "title", [], "any", false, false, false, 42), "-")) : ("-")), "html", null, true);
                yield "</div>
                <div class=\"muted\">
                  Cree le ";
                // line 44
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "createdAt", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "createdAt", [], "any", false, false, false, 44), "d/m/Y H:i"), "html", null, true)) : ("-"));
                yield "
                </div>
              </td>
              <td>
                <div class=\"rowTitle\">";
                // line 48
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "organizerUserId", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "organizerUserId", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48), "html", null, true)) : ("-"));
                yield "</div>
                <div class=\"muted\">";
                // line 49
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "organizerUserId", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "organizerUserId", [], "any", false, false, false, 49), "email", [], "any", false, false, false, 49), "html", null, true)) : (""));
                yield "</div>
              </td>
              <td>
                <div class=\"rowTitle\">";
                // line 52
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "gameId", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "gameId", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true)) : ("-"));
                yield "</div>
              </td>
              <td>
                <div class=\"nowrap\">";
                // line 55
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "startDate", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "startDate", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</div>
                <div class=\"muted nowrap\">au ";
                // line 56
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "endDate", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "endDate", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</div>
                ";
                // line 57
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "registrationDeadline", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 58
                    yield "                  <div class=\"muted nowrap\">DL: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "registrationDeadline", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
                    yield "</div>
                ";
                }
                // line 60
                yield "              </td>
              <td>
                <span class=\"chip\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "format", [], "any", true, true, false, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "format", [], "any", false, false, false, 62), "-")) : ("-")), "html", null, true);
                yield "</span>
                <span class=\"chip\">";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "registrationMode", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "registrationMode", [], "any", false, false, false, 63), "-")) : ("-")), "html", null, true);
                yield "</span>
                <div class=\"muted\">Max teams: ";
                // line 64
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "maxTeams", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "maxTeams", [], "any", false, false, false, 64)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "maxTeams", [], "any", false, false, false, 64), "html", null, true)) : (0));
                yield "</div>
              </td>
              <td class=\"textRight nowrap\">
                <div class=\"rowTitle\">";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "prizePool", [], "any", true, true, false, 67) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "prizePool", [], "any", false, false, false, 67)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "prizePool", [], "any", false, false, false, 67)) : (0)), 2, ".", " "), "html", null, true);
                yield " DT</div>
                ";
                // line 68
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "prizeDescription", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "                  <div class=\"muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "prizeDescription", [], "any", false, false, false, 69), 0, 36), "html", null, true);
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "prizeDescription", [], "any", false, false, false, 69)) > 36)) ? ("...") : (""));
                    yield "</div>
                ";
                }
                // line 71
                yield "              </td>
              <td>
                <span class=\"statusPill ";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 73, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 73, $this->source); })()), "html", null, true);
                yield "</span>
              </td>
              <td>
                ";
                // line 76
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "reviewedAt", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 77
                    yield "                  <div class=\"rowTitle\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "reviewedAt", [], "any", false, false, false, 77), "d/m/Y H:i"), "html", null, true);
                    yield "</div>
                  <div class=\"muted\">Par: ";
                    // line 78
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "reviewedByAdminId", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "reviewedByAdminId", [], "any", false, false, false, 78), "username", [], "any", false, false, false, 78), "html", null, true)) : ("-"));
                    yield "</div>
                ";
                } else {
                    // line 80
                    yield "                  <div class=\"muted\">En attente de revue</div>
                ";
                }
                // line 82
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "adminResponseNote", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 83
                    yield "                  <div class=\"muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "adminResponseNote", [], "any", false, false, false, 83)), 0, 72), "html", null, true);
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "adminResponseNote", [], "any", false, false, false, 83)) > 72)) ? ("...") : (""));
                    yield "</div>
                ";
                }
                // line 85
                yield "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['requestItem'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "        </tbody>
      </table>
    ";
        }
        // line 91
        yield "  </div>
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
        return array (  274 => 91,  269 => 88,  261 => 85,  254 => 83,  251 => 82,  247 => 80,  242 => 78,  237 => 77,  235 => 76,  227 => 73,  223 => 71,  216 => 69,  214 => 68,  210 => 67,  204 => 64,  200 => 63,  196 => 62,  192 => 60,  186 => 58,  184 => 57,  180 => 56,  176 => 55,  170 => 52,  164 => 49,  160 => 48,  153 => 44,  147 => 42,  143 => 40,  137 => 38,  135 => 37,  130 => 35,  126 => 33,  123 => 32,  120 => 31,  117 => 30,  114 => 29,  110 => 28,  93 => 13,  89 => 11,  87 => 10,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/pdf/_export_layout.html.twig' %}

{% block pdf_content %}
  <div class=\"panel\">
    <div class=\"panelHeader\">
      <h2 class=\"panelTitle\">Liste des demandes de tournoi</h2>
      <div class=\"panelSub\">{{ counter|default(requests|length) }} element(s) exporte(s)</div>
    </div>

    {% if requests is empty %}
      <div class=\"emptyState\">Aucune demande trouvee pour les filtres selectionnes.</div>
    {% else %}
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th style=\"width: 4%;\">ID</th>
            <th style=\"width: 20%;\">Demande</th>
            <th style=\"width: 10%;\">Organisateur</th>
            <th style=\"width: 9%;\">Jeu</th>
            <th style=\"width: 12%;\">Dates</th>
            <th style=\"width: 10%;\">Parametres</th>
            <th style=\"width: 10%;\" class=\"textRight\">Prize Pool</th>
            <th style=\"width: 8%;\">Status</th>
            <th style=\"width: 17%;\">Suivi admin</th>
          </tr>
        </thead>
        <tbody>
          {% for requestItem in requests %}
            {% set requestId = requestItem.requestId ?? 0 %}
            {% set status = requestItem.status|default('PENDING') %}
            {% set photoSrc = photoUris[requestId]|default(null) %}
            {% set statusClass = status == 'ACCEPTED' ? 'status-success' : (status == 'REFUSED' ? 'status-danger' : 'status-warning') %}

            <tr>
              <td class=\"nowrap\">#{{ requestId }}</td>
              <td>
                {% if photoSrc %}
                  <img class=\"thumb\" src=\"{{ photoSrc }}\" alt=\"\">
                {% else %}
                  <div class=\"thumbPlaceholder\">No photo</div>
                {% endif %}
                <div class=\"rowTitle\">{{ requestItem.title|default('-') }}</div>
                <div class=\"muted\">
                  Cree le {{ requestItem.createdAt ? requestItem.createdAt|date('d/m/Y H:i') : '-' }}
                </div>
              </td>
              <td>
                <div class=\"rowTitle\">{{ requestItem.organizerUserId ? requestItem.organizerUserId.username : '-' }}</div>
                <div class=\"muted\">{{ requestItem.organizerUserId ? requestItem.organizerUserId.email : '' }}</div>
              </td>
              <td>
                <div class=\"rowTitle\">{{ requestItem.gameId ? requestItem.gameId.name : '-' }}</div>
              </td>
              <td>
                <div class=\"nowrap\">{{ requestItem.startDate ? requestItem.startDate|date('d/m/Y') : '-' }}</div>
                <div class=\"muted nowrap\">au {{ requestItem.endDate ? requestItem.endDate|date('d/m/Y') : '-' }}</div>
                {% if requestItem.registrationDeadline %}
                  <div class=\"muted nowrap\">DL: {{ requestItem.registrationDeadline|date('d/m/Y') }}</div>
                {% endif %}
              </td>
              <td>
                <span class=\"chip\">{{ requestItem.format|default('-') }}</span>
                <span class=\"chip\">{{ requestItem.registrationMode|default('-') }}</span>
                <div class=\"muted\">Max teams: {{ requestItem.maxTeams ?? 0 }}</div>
              </td>
              <td class=\"textRight nowrap\">
                <div class=\"rowTitle\">{{ (requestItem.prizePool ?? 0)|number_format(2, '.', ' ') }} DT</div>
                {% if requestItem.prizeDescription %}
                  <div class=\"muted\">{{ requestItem.prizeDescription|slice(0, 36) }}{{ requestItem.prizeDescription|length > 36 ? '...' : '' }}</div>
                {% endif %}
              </td>
              <td>
                <span class=\"statusPill {{ statusClass }}\">{{ status }}</span>
              </td>
              <td>
                {% if requestItem.reviewedAt %}
                  <div class=\"rowTitle\">{{ requestItem.reviewedAt|date('d/m/Y H:i') }}</div>
                  <div class=\"muted\">Par: {{ requestItem.reviewedByAdminId ? requestItem.reviewedByAdminId.username : '-' }}</div>
                {% else %}
                  <div class=\"muted\">En attente de revue</div>
                {% endif %}
                {% if requestItem.adminResponseNote %}
                  <div class=\"muted\">{{ requestItem.adminResponseNote|striptags|slice(0, 72) }}{{ requestItem.adminResponseNote|length > 72 ? '...' : '' }}</div>
                {% endif %}
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    {% endif %}
  </div>
{% endblock %}
", "admin/pdf/tournament_requests_export.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pdf\\tournament_requests_export.html.twig");
    }
}
