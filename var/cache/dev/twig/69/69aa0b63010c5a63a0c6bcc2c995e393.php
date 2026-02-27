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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournaments_export.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/tournaments_export.html.twig"));

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
      <h2 class=\"panelTitle\">Liste des tournois</h2>
      <div class=\"panelSub\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("counter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 7, $this->source); })()), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 7, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 7, $this->source); })())))), "html", null, true);
        yield " element(s) exporte(s)</div>
    </div>

    ";
        // line 10
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 10, $this->source); })()))) {
            // line 11
            yield "      <div class=\"emptyState\">Aucun tournoi trouve pour les filtres selectionnes.</div>
    ";
        } else {
            // line 13
            yield "      <table class=\"dataTable\">
        <thead>
          <tr>
            <th style=\"width: 4%;\">ID</th>
            <th style=\"width: 20%;\">Tournoi</th>
            <th style=\"width: 10%;\">Jeu</th>
            <th style=\"width: 10%;\">Organisateur</th>
            <th style=\"width: 7%;\">Status</th>
            <th style=\"width: 12%;\">Dates</th>
            <th style=\"width: 8%;\">Equipes</th>
            <th style=\"width: 7%;\">Matchs</th>
            <th style=\"width: 10%;\">Format</th>
            <th style=\"width: 12%;\" class=\"textRight\">Prize Pool</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
                // line 30
                yield "            ";
                $context["tournamentId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 30)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 30)) : (0));
                // line 31
                yield "            ";
                $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "status", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "status", [], "any", false, false, false, 31), "DRAFT")) : ("DRAFT"));
                // line 32
                yield "            ";
                $context["photoSrc"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["photoUris"] ?? null), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 32, $this->source); })()), [], "array", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["photoUris"]) || array_key_exists("photoUris", $context) ? $context["photoUris"] : (function () { throw new RuntimeError('Variable "photoUris" does not exist.', 32, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 32, $this->source); })()), [], "array", false, false, false, 32), null)) : (null));
                // line 33
                yield "            ";
                $context["acceptedCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["acceptedByTournamentId"] ?? null), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 33, $this->source); })()), [], "array", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["acceptedByTournamentId"]) || array_key_exists("acceptedByTournamentId", $context) ? $context["acceptedByTournamentId"] : (function () { throw new RuntimeError('Variable "acceptedByTournamentId" does not exist.', 33, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 33, $this->source); })()), [], "array", false, false, false, 33), 0)) : (0));
                // line 34
                yield "            ";
                $context["registrationCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["registrationsByTournamentId"] ?? null), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 34, $this->source); })()), [], "array", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationsByTournamentId"]) || array_key_exists("registrationsByTournamentId", $context) ? $context["registrationsByTournamentId"] : (function () { throw new RuntimeError('Variable "registrationsByTournamentId" does not exist.', 34, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), 0)) : (0));
                // line 35
                yield "            ";
                $context["matchesCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchesByTournamentId"] ?? null), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 35, $this->source); })()), [], "array", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchesByTournamentId"]) || array_key_exists("matchesByTournamentId", $context) ? $context["matchesByTournamentId"] : (function () { throw new RuntimeError('Variable "matchesByTournamentId" does not exist.', 35, $this->source); })()), (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 35, $this->source); })()), [], "array", false, false, false, 35), 0)) : (0));
                // line 36
                yield "            ";
                $context["statusClass"] = ((CoreExtension::inFilter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 36, $this->source); })()), ["OPEN", "ONGOING"])) ? ("status-success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 36, $this->source); })()) == "FINISHED")) ? ("status-info") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 36, $this->source); })()) == "CANCELLED")) ? ("status-danger") : ("status-warning"))))));
                // line 37
                yield "
            <tr>
              <td class=\"nowrap\">#";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 39, $this->source); })()), "html", null, true);
                yield "</td>
              <td>
                ";
                // line 41
                if ((($tmp = (isset($context["photoSrc"]) || array_key_exists("photoSrc", $context) ? $context["photoSrc"] : (function () { throw new RuntimeError('Variable "photoSrc" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 42
                    yield "                  <img class=\"thumb\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["photoSrc"]) || array_key_exists("photoSrc", $context) ? $context["photoSrc"] : (function () { throw new RuntimeError('Variable "photoSrc" does not exist.', 42, $this->source); })()), "html", null, true);
                    yield "\" alt=\"\">
                ";
                } else {
                    // line 44
                    yield "                  <div class=\"thumbPlaceholder\">No photo</div>
                ";
                }
                // line 46
                yield "                <div class=\"rowTitle\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "title", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "title", [], "any", false, false, false, 46), "-")) : ("-")), "html", null, true);
                yield "</div>
                <div class=\"muted\">
                  ";
                // line 48
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "description", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "description", [], "any", false, false, false, 48)), 0, 62) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "description", [], "any", false, false, false, 48)) > 62)) ? ("...") : (""))), "html", null, true)) : ("Aucune description"));
                yield "
                </div>
              </td>
              <td>
                <div class=\"rowTitle\">";
                // line 52
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "gameId", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "gameId", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true)) : ("-"));
                yield "</div>
              </td>
              <td>
                <div class=\"rowTitle\">";
                // line 55
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "organizerUserId", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "organizerUserId", [], "any", false, false, false, 55), "username", [], "any", false, false, false, 55), "html", null, true)) : ("-"));
                yield "</div>
              </td>
              <td>
                <span class=\"statusPill ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 58, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 58, $this->source); })()), "html", null, true);
                yield "</span>
              </td>
              <td>
                <div class=\"nowrap\">";
                // line 61
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "startDate", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "startDate", [], "any", false, false, false, 61), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</div>
                <div class=\"muted nowrap\">au ";
                // line 62
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "endDate", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "endDate", [], "any", false, false, false, 62), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</div>
                ";
                // line 63
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "registrationDeadline", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    yield "                  <div class=\"muted nowrap\">DL: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "registrationDeadline", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
                    yield "</div>
                ";
                }
                // line 66
                yield "              </td>
              <td>
                <div class=\"rowTitle\">";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["acceptedCount"]) || array_key_exists("acceptedCount", $context) ? $context["acceptedCount"] : (function () { throw new RuntimeError('Variable "acceptedCount" does not exist.', 68, $this->source); })()), "html", null, true);
                yield "/";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "maxTeams", [], "any", true, true, false, 68) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "maxTeams", [], "any", false, false, false, 68)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "maxTeams", [], "any", false, false, false, 68), "html", null, true)) : (0));
                yield "</div>
                <div class=\"muted\">Total: ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["registrationCount"]) || array_key_exists("registrationCount", $context) ? $context["registrationCount"] : (function () { throw new RuntimeError('Variable "registrationCount" does not exist.', 69, $this->source); })()), "html", null, true);
                yield "</div>
              </td>
              <td class=\"nowrap\">
                <div class=\"rowTitle\">";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchesCount"]) || array_key_exists("matchesCount", $context) ? $context["matchesCount"] : (function () { throw new RuntimeError('Variable "matchesCount" does not exist.', 72, $this->source); })()), "html", null, true);
                yield "</div>
              </td>
              <td>
                <span class=\"chip\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "format", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "format", [], "any", false, false, false, 75), "-")) : ("-")), "html", null, true);
                yield "</span>
                <span class=\"chip\">";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "registrationMode", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "registrationMode", [], "any", false, false, false, 76), "-")) : ("-")), "html", null, true);
                yield "</span>
              </td>
              <td class=\"textRight nowrap\">
                <div class=\"rowTitle\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "prizePool", [], "any", true, true, false, 79) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "prizePool", [], "any", false, false, false, 79)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "prizePool", [], "any", false, false, false, 79)) : (0)), 2, ".", " "), "html", null, true);
                yield " DT</div>
                ";
                // line 80
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "prizeDescription", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 81
                    yield "                  <div class=\"muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "prizeDescription", [], "any", false, false, false, 81), 0, 36), "html", null, true);
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "prizeDescription", [], "any", false, false, false, 81)) > 36)) ? ("...") : (""));
                    yield "</div>
                ";
                }
                // line 83
                yield "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tournament'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "        </tbody>
      </table>
    ";
        }
        // line 89
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
        return array (  264 => 89,  259 => 86,  251 => 83,  244 => 81,  242 => 80,  238 => 79,  232 => 76,  228 => 75,  222 => 72,  216 => 69,  210 => 68,  206 => 66,  200 => 64,  198 => 63,  194 => 62,  190 => 61,  182 => 58,  176 => 55,  170 => 52,  163 => 48,  157 => 46,  153 => 44,  147 => 42,  145 => 41,  140 => 39,  136 => 37,  133 => 36,  130 => 35,  127 => 34,  124 => 33,  121 => 32,  118 => 31,  115 => 30,  111 => 29,  93 => 13,  89 => 11,  87 => 10,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/pdf/_export_layout.html.twig' %}

{% block pdf_content %}
  <div class=\"panel\">
    <div class=\"panelHeader\">
      <h2 class=\"panelTitle\">Liste des tournois</h2>
      <div class=\"panelSub\">{{ counter|default(tournaments|length) }} element(s) exporte(s)</div>
    </div>

    {% if tournaments is empty %}
      <div class=\"emptyState\">Aucun tournoi trouve pour les filtres selectionnes.</div>
    {% else %}
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th style=\"width: 4%;\">ID</th>
            <th style=\"width: 20%;\">Tournoi</th>
            <th style=\"width: 10%;\">Jeu</th>
            <th style=\"width: 10%;\">Organisateur</th>
            <th style=\"width: 7%;\">Status</th>
            <th style=\"width: 12%;\">Dates</th>
            <th style=\"width: 8%;\">Equipes</th>
            <th style=\"width: 7%;\">Matchs</th>
            <th style=\"width: 10%;\">Format</th>
            <th style=\"width: 12%;\" class=\"textRight\">Prize Pool</th>
          </tr>
        </thead>
        <tbody>
          {% for tournament in tournaments %}
            {% set tournamentId = tournament.tournamentId ?? 0 %}
            {% set status = tournament.status|default('DRAFT') %}
            {% set photoSrc = photoUris[tournamentId]|default(null) %}
            {% set acceptedCount = acceptedByTournamentId[tournamentId]|default(0) %}
            {% set registrationCount = registrationsByTournamentId[tournamentId]|default(0) %}
            {% set matchesCount = matchesByTournamentId[tournamentId]|default(0) %}
            {% set statusClass = status in ['OPEN', 'ONGOING'] ? 'status-success' : (status == 'FINISHED' ? 'status-info' : (status == 'CANCELLED' ? 'status-danger' : 'status-warning')) %}

            <tr>
              <td class=\"nowrap\">#{{ tournamentId }}</td>
              <td>
                {% if photoSrc %}
                  <img class=\"thumb\" src=\"{{ photoSrc }}\" alt=\"\">
                {% else %}
                  <div class=\"thumbPlaceholder\">No photo</div>
                {% endif %}
                <div class=\"rowTitle\">{{ tournament.title|default('-') }}</div>
                <div class=\"muted\">
                  {{ tournament.description ? (tournament.description|striptags|slice(0, 62) ~ (tournament.description|length > 62 ? '...' : '')) : 'Aucune description' }}
                </div>
              </td>
              <td>
                <div class=\"rowTitle\">{{ tournament.gameId ? tournament.gameId.name : '-' }}</div>
              </td>
              <td>
                <div class=\"rowTitle\">{{ tournament.organizerUserId ? tournament.organizerUserId.username : '-' }}</div>
              </td>
              <td>
                <span class=\"statusPill {{ statusClass }}\">{{ status }}</span>
              </td>
              <td>
                <div class=\"nowrap\">{{ tournament.startDate ? tournament.startDate|date('d/m/Y') : '-' }}</div>
                <div class=\"muted nowrap\">au {{ tournament.endDate ? tournament.endDate|date('d/m/Y') : '-' }}</div>
                {% if tournament.registrationDeadline %}
                  <div class=\"muted nowrap\">DL: {{ tournament.registrationDeadline|date('d/m/Y') }}</div>
                {% endif %}
              </td>
              <td>
                <div class=\"rowTitle\">{{ acceptedCount }}/{{ tournament.maxTeams ?? 0 }}</div>
                <div class=\"muted\">Total: {{ registrationCount }}</div>
              </td>
              <td class=\"nowrap\">
                <div class=\"rowTitle\">{{ matchesCount }}</div>
              </td>
              <td>
                <span class=\"chip\">{{ tournament.format|default('-') }}</span>
                <span class=\"chip\">{{ tournament.registrationMode|default('-') }}</span>
              </td>
              <td class=\"textRight nowrap\">
                <div class=\"rowTitle\">{{ (tournament.prizePool ?? 0)|number_format(2, '.', ' ') }} DT</div>
                {% if tournament.prizeDescription %}
                  <div class=\"muted\">{{ tournament.prizeDescription|slice(0, 36) }}{{ tournament.prizeDescription|length > 36 ? '...' : '' }}</div>
                {% endif %}
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    {% endif %}
  </div>
{% endblock %}
", "admin/pdf/tournaments_export.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pdf\\tournaments_export.html.twig");
    }
}
