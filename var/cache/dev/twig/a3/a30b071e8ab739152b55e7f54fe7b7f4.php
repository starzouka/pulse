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

/* front/pages/organizer-requests.html.twig */
class __TwigTemplate_c2daf455b25f465be36daedb1769e44b extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-requests.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-requests.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "PULSE - Mes demandes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "  ";
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ORGANISATEUR", "hero_title" => "Mes demandes", "hero_sub" => "Suivi detaille des demandes de tournoi envoyees.", "breadcrumb_current" => "Mes demandes"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_organizer_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "requests"]));
        // line 17
        yield "
        <div>
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                yield "              <div class=\"listItem\">
                <span>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                <span class=\"badge ";
                // line 23
                yield ((($context["label"] == "error")) ? ("badge--danger") : ("badge--success"));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
          <div class=\"panel\">
            <div class=\"panel__head\">
              <h3 class=\"panel__title\">DEMANDES ENVOYEES</h3>
              <div class=\"panel__actions\">
                <span class=\"panel__desc\">Total: ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("counter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 32, $this->source); })()), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournamentRequests"]) || array_key_exists("tournamentRequests", $context) ? $context["tournamentRequests"] : (function () { throw new RuntimeError('Variable "tournamentRequests" does not exist.', 32, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournamentRequests"]) || array_key_exists("tournamentRequests", $context) ? $context["tournamentRequests"] : (function () { throw new RuntimeError('Variable "tournamentRequests" does not exist.', 32, $this->source); })())))), "html", null, true);
        yield " demande(s)</span>
                <a class=\"btn btn--ghost\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests_export", ["format" => "pdf", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["filters"] ?? null), "q", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 35, $this->source); })()), "q", [], "any", false, false, false, 35), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["filters"] ?? null), "status", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "status", [], "any", false, false, false, 36), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 37
($context["filters"] ?? null), "game", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 37, $this->source); })()), "game", [], "any", false, false, false, 37), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["filters"] ?? null), "sort", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 38, $this->source); })()), "sort", [], "any", false, false, false, 38), "latest")) : ("latest"))]), "html", null, true);
        // line 39
        yield "\">PDF</a>
                <a class=\"btn btn--ghost\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests_export", ["format" => "excel", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["filters"] ?? null), "q", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 42, $this->source); })()), "q", [], "any", false, false, false, 42), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["filters"] ?? null), "status", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["filters"] ?? null), "game", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 44, $this->source); })()), "game", [], "any", false, false, false, 44), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["filters"] ?? null), "sort", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 45, $this->source); })()), "sort", [], "any", false, false, false, 45), "latest")) : ("latest"))]), "html", null, true);
        // line 46
        yield "\">Excel</a>
                <a class=\"btn btn--primary\" href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_request_create");
        yield "\">Nouvelle demande</a>
              </div>
            </div>

            <form method=\"get\" action=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests");
        yield "\">
              <div class=\"filtersRow\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 53, $this->source); })()), "q", [], "any", false, false, false, 53), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher une demande...\" />

                <div class=\"select\">
                  <select name=\"status\">
                    <option value=\"\">Statut</option>
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusOptions"]) || array_key_exists("statusOptions", $context) ? $context["statusOptions"] : (function () { throw new RuntimeError('Variable "statusOptions" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statusValue"]) {
            // line 59
            yield "                      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 59, $this->source); })()), "status", [], "any", false, false, false, 59) == $context["statusValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statusValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                  </select>
                </div>

                <div class=\"select\">
                  <select name=\"game\">
                    <option value=\"\">Jeu</option>
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableGames"]) || array_key_exists("availableGames", $context) ? $context["availableGames"] : (function () { throw new RuntimeError('Variable "availableGames" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 68
            yield "                      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 68), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 68, $this->source); })()), "game", [], "any", false, false, false, 68)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 68, $this->source); })()), "game", [], "any", false, false, false, 68) == CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 68)))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 68), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "                  </select>
                </div>

                <div class=\"select\">
                  <select name=\"sort\">
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new RuntimeError('Variable "sortOptions" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortValue"]) {
            // line 76
            yield "                      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sortValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 76, $this->source); })()), "sort", [], "any", false, false, false, 76) == $context["sortValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["sortValue"]), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sortValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "                  </select>
                </div>

                <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests");
        yield "\">Reset</a>
              </div>
            </form>

            <div class=\"tableWrap\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Jeu</th>
                    <th>Periode</th>
                    <th>Statut</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournamentRequests"]) || array_key_exists("tournamentRequests", $context) ? $context["tournamentRequests"] : (function () { throw new RuntimeError('Variable "tournamentRequests" does not exist.', 99, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["requestItem"]) {
            // line 100
            yield "                    ";
            $context["statusClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "status", [], "any", false, false, false, 100) == "ACCEPTED")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 102
$context["requestItem"], "status", [], "any", false, false, false, 102) == "REFUSED")) ? ("badge--danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "status", [], "any", false, false, false, 102) == "CANCELLED")) ? ("badge--muted") : (""))))));
            // line 104
            yield "                    <tr>
                      <td>#";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "requestId", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
                      <td>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "title", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
                      <td>";
            // line 107
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "gameId", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "gameId", [], "any", false, false, false, 107), "name", [], "any", false, false, false, 107), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        ";
            // line 109
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "startDate", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "startDate", [], "any", false, false, false, 109), "Y-m-d"), "html", null, true)) : ("-"));
            yield "
                        -
                        ";
            // line 111
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "endDate", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "endDate", [], "any", false, false, false, 111), "Y-m-d"), "html", null, true)) : ("-"));
            yield "
                      </td>
                      <td><span class=\"badge ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 113, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "status", [], "any", false, false, false, 113), "html", null, true);
            yield "</span></td>
                      <td>
                        <a class=\"btn btn--ghost\" href=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_request_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "requestId", [], "any", false, false, false, 115)]), "html", null, true);
            yield "\">Voir</a>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 118
        if (!$context['_iterated']) {
            // line 119
            yield "                    <tr>
                      <td colspan=\"6\" class=\"muted\">Aucune demande pour le moment.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['requestItem'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                </tbody>
              </table>
            </div>
          </div>

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Donnees extraites depuis le schema reel.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\">
                <span><b>tournament_requests</b></span>
                <span class=\"listItem__meta\">request_id, organizer_user_id, game_id, title, status, reviewed_at</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 145
        yield from $this->load("front/partials/_footer.html.twig", 145)->unwrap()->yield($context);
        // line 146
        yield "    </section>
  </main>

  ";
        // line 149
        yield from $this->load("front/partials/_auth_modal.html.twig", 149)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/organizer-requests.html.twig";
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
        return array (  381 => 149,  376 => 146,  374 => 145,  350 => 123,  341 => 119,  339 => 118,  331 => 115,  324 => 113,  319 => 111,  314 => 109,  309 => 107,  305 => 106,  301 => 105,  298 => 104,  296 => 102,  294 => 100,  289 => 99,  269 => 82,  263 => 78,  250 => 76,  246 => 75,  239 => 70,  226 => 68,  222 => 67,  214 => 61,  201 => 59,  197 => 58,  189 => 53,  184 => 51,  177 => 47,  174 => 46,  172 => 45,  171 => 44,  170 => 43,  169 => 42,  168 => 40,  165 => 39,  163 => 38,  162 => 37,  161 => 36,  160 => 35,  159 => 33,  155 => 32,  148 => 27,  142 => 26,  131 => 23,  127 => 22,  124 => 21,  119 => 20,  115 => 19,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Mes demandes{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'ORGANISATEUR',
    hero_title: 'Mes demandes',
    hero_sub: 'Suivi detaille des demandes de tournoi envoyees.',
    breadcrumb_current: 'Mes demandes'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_organizer_side_nav.html.twig' with {active: 'requests'} %}

        <div>
          {% for label, messages in app.flashes %}
            {% for message in messages %}
              <div class=\"listItem\">
                <span>{{ message }}</span>
                <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
              </div>
            {% endfor %}
          {% endfor %}

          <div class=\"panel\">
            <div class=\"panel__head\">
              <h3 class=\"panel__title\">DEMANDES ENVOYEES</h3>
              <div class=\"panel__actions\">
                <span class=\"panel__desc\">Total: {{ counter|default(tournamentRequests|length) }} demande(s)</span>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_requests_export', {
                  format: 'pdf',
                  q: filters.q|default(''),
                  status: filters.status|default(''),
                  game: filters.game|default(''),
                  sort: filters.sort|default('latest')
                }) }}\">PDF</a>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_requests_export', {
                  format: 'excel',
                  q: filters.q|default(''),
                  status: filters.status|default(''),
                  game: filters.game|default(''),
                  sort: filters.sort|default('latest')
                }) }}\">Excel</a>
                <a class=\"btn btn--primary\" href=\"{{ path('front_organizer_request_create') }}\">Nouvelle demande</a>
              </div>
            </div>

            <form method=\"get\" action=\"{{ path('front_organizer_requests') }}\">
              <div class=\"filtersRow\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Rechercher une demande...\" />

                <div class=\"select\">
                  <select name=\"status\">
                    <option value=\"\">Statut</option>
                    {% for statusValue in statusOptions %}
                      <option value=\"{{ statusValue }}\" {{ filters.status == statusValue ? 'selected' : '' }}>{{ statusValue }}</option>
                    {% endfor %}
                  </select>
                </div>

                <div class=\"select\">
                  <select name=\"game\">
                    <option value=\"\">Jeu</option>
                    {% for game in availableGames %}
                      <option value=\"{{ game.gameId }}\" {{ filters.game is not null and filters.game == game.gameId ? 'selected' : '' }}>{{ game.name }}</option>
                    {% endfor %}
                  </select>
                </div>

                <div class=\"select\">
                  <select name=\"sort\">
                    {% for sortValue in sortOptions %}
                      <option value=\"{{ sortValue }}\" {{ filters.sort == sortValue ? 'selected' : '' }}>{{ sortValue|upper }}</option>
                    {% endfor %}
                  </select>
                </div>

                <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_requests') }}\">Reset</a>
              </div>
            </form>

            <div class=\"tableWrap\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Jeu</th>
                    <th>Periode</th>
                    <th>Statut</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {% for requestItem in tournamentRequests %}
                    {% set statusClass = requestItem.status == 'ACCEPTED'
                      ? 'badge--success'
                      : (requestItem.status == 'REFUSED' ? 'badge--danger' : (requestItem.status == 'CANCELLED' ? 'badge--muted' : ''))
                    %}
                    <tr>
                      <td>#{{ requestItem.requestId }}</td>
                      <td>{{ requestItem.title }}</td>
                      <td>{{ requestItem.gameId ? requestItem.gameId.name : '-' }}</td>
                      <td>
                        {{ requestItem.startDate ? requestItem.startDate|date('Y-m-d') : '-' }}
                        -
                        {{ requestItem.endDate ? requestItem.endDate|date('Y-m-d') : '-' }}
                      </td>
                      <td><span class=\"badge {{ statusClass }}\">{{ requestItem.status }}</span></td>
                      <td>
                        <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_request_detail', {id: requestItem.requestId}) }}\">Voir</a>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"6\" class=\"muted\">Aucune demande pour le moment.</td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </div>

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Donnees extraites depuis le schema reel.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\">
                <span><b>tournament_requests</b></span>
                <span class=\"listItem__meta\">request_id, organizer_user_id, game_id, title, status, reviewed_at</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/organizer-requests.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\organizer-requests.html.twig");
    }
}
