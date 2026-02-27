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

/* front/pages/tournaments.html.twig */
class __TwigTemplate_06db2d6104d4c68a6dd38b169f278afc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/tournaments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/tournaments.html.twig"));

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

        yield "PULSE - Catalogue des tournois";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "TOURNOIS", "hero_title" => "Catalogue des tournois", "hero_sub" => "Recherche dynamique sur la base de donnees.", "breadcrumb_current" => "Catalogue des tournois"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des tournois</h1>
          <p>La recherche et les filtres sont traites au back-end puis affiches depuis la base.</p>
        </div>
        <div class=\"formActions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments_export", ["format" => "pdf", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["filters"] ?? null), "q", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 23, $this->source); })()), "q", [], "any", false, false, false, 23), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["filters"] ?? null), "game", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 24, $this->source); })()), "game", [], "any", false, false, false, 24), "")) : ("")), "category" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["filters"] ?? null), "category", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 26
($context["filters"] ?? null), "status", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26), "")) : ("")), "format_filter" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["filters"] ?? null), "format", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })()), "format", [], "any", false, false, false, 27), "")) : ("")), "registration_mode" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["filters"] ?? null), "registration_mode", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 28, $this->source); })()), "registration_mode", [], "any", false, false, false, 28), "")) : ("")), "date_from" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["filters"] ?? null), "date_from", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "date_from", [], "any", false, false, false, 29), "")) : ("")), "date_to" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["filters"] ?? null), "date_to", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 30, $this->source); })()), "date_to", [], "any", false, false, false, 30), "")) : ("")), "prize_min" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["filters"] ?? null), "prize_min", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 31, $this->source); })()), "prize_min", [], "any", false, false, false, 31), "")) : ("")), "prize_max" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["filters"] ?? null), "prize_max", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 32, $this->source); })()), "prize_max", [], "any", false, false, false, 32), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["filters"] ?? null), "sort", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 33, $this->source); })()), "sort", [], "any", false, false, false, 33), "latest")) : ("latest"))]), "html", null, true);
        // line 34
        yield "\">PDF</a>
          <a class=\"btn btn--ghost\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments_export", ["format" => "excel", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 37
($context["filters"] ?? null), "q", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 37, $this->source); })()), "q", [], "any", false, false, false, 37), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["filters"] ?? null), "game", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 38, $this->source); })()), "game", [], "any", false, false, false, 38), "")) : ("")), "category" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["filters"] ?? null), "category", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 39, $this->source); })()), "category", [], "any", false, false, false, 39), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["filters"] ?? null), "status", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 40, $this->source); })()), "status", [], "any", false, false, false, 40), "")) : ("")), "format_filter" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["filters"] ?? null), "format", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 41, $this->source); })()), "format", [], "any", false, false, false, 41), "")) : ("")), "registration_mode" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["filters"] ?? null), "registration_mode", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 42, $this->source); })()), "registration_mode", [], "any", false, false, false, 42), "")) : ("")), "date_from" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["filters"] ?? null), "date_from", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 43, $this->source); })()), "date_from", [], "any", false, false, false, 43), "")) : ("")), "date_to" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["filters"] ?? null), "date_to", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 44, $this->source); })()), "date_to", [], "any", false, false, false, 44), "")) : ("")), "prize_min" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["filters"] ?? null), "prize_min", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 45, $this->source); })()), "prize_min", [], "any", false, false, false, 45), "")) : ("")), "prize_max" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["filters"] ?? null), "prize_max", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })()), "prize_max", [], "any", false, false, false, 46), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["filters"] ?? null), "sort", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 47, $this->source); })()), "sort", [], "any", false, false, false, 47), "latest")) : ("latest"))]), "html", null, true);
        // line 48
        yield "\">Excel</a>
        </div>
      </div>

      <section class=\"panel\">
        <form method=\"get\" action=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\" data-auto-submit=\"1\">
          <div class=\"filtersRow\">
            <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })()), "q", [], "any", false, false, false, 55), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un tournoi...\" />

            <div class=\"select\">
              <select name=\"game\">
                <option value=\"\">Jeu</option>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["available_games"]) || array_key_exists("available_games", $context) ? $context["available_games"] : (function () { throw new RuntimeError('Variable "available_games" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 61
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 61), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 61, $this->source); })()), "game", [], "any", false, false, false, 61)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 61, $this->source); })()), "game", [], "any", false, false, false, 61) == CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 61)))) ? ("selected") : (""));
            yield ">
                    ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 62), "html", null, true);
            yield "
                  </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "              </select>
            </div>

            <div class=\"select\">
              <select name=\"category\">
                <option value=\"\">Categorie</option>
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["available_categories"]) || array_key_exists("available_categories", $context) ? $context["available_categories"] : (function () { throw new RuntimeError('Variable "available_categories" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 72
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 72), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 72, $this->source); })()), "category", [], "any", false, false, false, 72)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 72, $this->source); })()), "category", [], "any", false, false, false, 72) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 72)))) ? ("selected") : (""));
            yield ">
                    ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 73), "html", null, true);
            yield "
                  </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "              </select>
            </div>

            <div class=\"select\">
              <select name=\"status\">
                <option value=\"\">Statut</option>
                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_options"]) || array_key_exists("filter_options", $context) ? $context["filter_options"] : (function () { throw new RuntimeError('Variable "filter_options" does not exist.', 82, $this->source); })()), "statuses", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["statusValue"]) {
            // line 83
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 83, $this->source); })()), "status", [], "any", false, false, false, 83) == $context["statusValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statusValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "              </select>
            </div>

            <div class=\"select\">
              <select name=\"format\">
                <option value=\"\">Format</option>
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_options"]) || array_key_exists("filter_options", $context) ? $context["filter_options"] : (function () { throw new RuntimeError('Variable "filter_options" does not exist.', 91, $this->source); })()), "formats", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["formatValue"]) {
            // line 92
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["formatValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 92, $this->source); })()), "format", [], "any", false, false, false, 92) == $context["formatValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["formatValue"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formatValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "              </select>
            </div>

            <div class=\"select\">
              <select name=\"registration_mode\">
                <option value=\"\">Inscription</option>
                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_options"]) || array_key_exists("filter_options", $context) ? $context["filter_options"] : (function () { throw new RuntimeError('Variable "filter_options" does not exist.', 100, $this->source); })()), "registration_modes", [], "any", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["modeValue"]) {
            // line 101
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["modeValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 101, $this->source); })()), "registration_mode", [], "any", false, false, false, 101) == $context["modeValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["modeValue"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['modeValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "              </select>
            </div>

            <input class=\"input\" type=\"date\" name=\"date_from\" value=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 106, $this->source); })()), "date_from", [], "any", false, false, false, 106), "")) : ("")), "html", null, true);
        yield "\" />
            <input class=\"input\" type=\"date\" name=\"date_to\" value=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 107, $this->source); })()), "date_to", [], "any", false, false, false, 107), "")) : ("")), "html", null, true);
        yield "\" />
            <input class=\"input\" type=\"number\" min=\"0\" step=\"0.01\" name=\"prize_min\" value=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "prize_min", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 108, $this->source); })()), "prize_min", [], "any", false, false, false, 108), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Prize min\" />
            <input class=\"input\" type=\"number\" min=\"0\" step=\"0.01\" name=\"prize_max\" value=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "prize_max", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 109, $this->source); })()), "prize_max", [], "any", false, false, false, 109), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Prize max\" />

            <div class=\"select\">
              <select name=\"sort\">
                <option value=\"latest\" ";
        // line 113
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 113, $this->source); })()), "sort", [], "any", false, false, false, 113) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
                <option value=\"prize\" ";
        // line 114
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 114, $this->source); })()), "sort", [], "any", false, false, false, 114) == "prize")) ? ("selected") : (""));
        yield ">Prize pool</option>
                <option value=\"progress\" ";
        // line 115
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 115, $this->source); })()), "sort", [], "any", false, false, false, 115) == "progress")) ? ("selected") : (""));
        yield ">Progression</option>
              </select>
            </div>

            <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
            <a class=\"btn btn--ghost\" href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\">Reset</a>
          </div>
        </form>
      </section>

      <section class=\"panel\">
        <div class=\"panel__head\">
          <h3 class=\"panel__title\">RESULTATS</h3>
          <div class=\"panel__desc\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "total_items", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 128, $this->source); })()), "total_items", [], "any", false, false, false, 128), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournaments_data"]) || array_key_exists("tournaments_data", $context) ? $context["tournaments_data"] : (function () { throw new RuntimeError('Variable "tournaments_data" does not exist.', 128, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournaments_data"]) || array_key_exists("tournaments_data", $context) ? $context["tournaments_data"] : (function () { throw new RuntimeError('Variable "tournaments_data" does not exist.', 128, $this->source); })())))), "html", null, true);
        yield " tournoi(s) trouves</div>
        </div>
      </section>

      ";
        // line 132
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["tournaments_data"]) || array_key_exists("tournaments_data", $context) ? $context["tournaments_data"] : (function () { throw new RuntimeError('Variable "tournaments_data" does not exist.', 132, $this->source); })()))) {
            // line 133
            yield "        <section class=\"panel\">
          <div class=\"emptyState\">Aucun tournoi ne correspond aux filtres selectionnes.</div>
        </section>
      ";
        } else {
            // line 137
            yield "        <div class=\"cardsGrid\">
          ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournaments_data"]) || array_key_exists("tournaments_data", $context) ? $context["tournaments_data"] : (function () { throw new RuntimeError('Variable "tournaments_data" does not exist.', 138, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 139
                yield "            ";
                $context["tournament"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tournament", [], "any", false, false, false, 139);
                // line 140
                yield "            ";
                $context["tournamentId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "tournamentId", [], "any", true, true, false, 140) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 140, $this->source); })()), "tournamentId", [], "any", false, false, false, 140)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 140, $this->source); })()), "tournamentId", [], "any", false, false, false, 140)) : (0));
                // line 141
                yield "            ";
                $context["game"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 141, $this->source); })()), "gameId", [], "any", false, false, false, 141);
                // line 142
                yield "            ";
                $context["category"] = (((($tmp = (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 142, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 142, $this->source); })()), "categoryId", [], "any", false, false, false, 142)) : (null));
                // line 143
                yield "            ";
                $context["photoPath"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "photoPath", [], "any", true, true, false, 143) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 143, $this->source); })()), "photoPath", [], "any", false, false, false, 143)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 143, $this->source); })()), "photoPath", [], "any", false, false, false, 143)) : (""));
                // line 144
                yield "            ";
                $context["photoUrl"] = (((($tmp = (isset($context["photoPath"]) || array_key_exists("photoPath", $context) ? $context["photoPath"] : (function () { throw new RuntimeError('Variable "photoPath" does not exist.', 144, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["photoPath"]) || array_key_exists("photoPath", $context) ? $context["photoPath"] : (function () { throw new RuntimeError('Variable "photoPath" does not exist.', 144, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["photoPath"]) || array_key_exists("photoPath", $context) ? $context["photoPath"] : (function () { throw new RuntimeError('Variable "photoPath" does not exist.', 144, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["photoPath"]) || array_key_exists("photoPath", $context) ? $context["photoPath"] : (function () { throw new RuntimeError('Variable "photoPath" does not exist.', 144, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_tournament_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 144, $this->source); })())) . "/1200/800")));
                // line 145
                yield "            ";
                $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "status", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 145, $this->source); })()), "status", [], "any", false, false, false, 145), "DRAFT")) : ("DRAFT"));
                // line 146
                yield "            ";
                $context["statusClass"] = ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 146, $this->source); })()) == "OPEN")) ? ("chip--status") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 146, $this->source); })()) == "ONGOING")) ? ("chip--format") : (""))));
                // line 147
                yield "
            <article class=\"card card--tournament\">
              <div class=\"card__media\" data-bg=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["photoUrl"]) || array_key_exists("photoUrl", $context) ? $context["photoUrl"] : (function () { throw new RuntimeError('Variable "photoUrl" does not exist.', 149, $this->source); })()), "html", null, true);
                yield "\">
                <div class=\"card__chips\">
                  <span class=\"chip ";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 151, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 151, $this->source); })()), "html", null, true);
                yield "</span>
                  <span class=\"chip\">";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 152, $this->source); })()), "format", [], "any", false, false, false, 152), "html", null, true);
                yield "</span>
                  <span class=\"chip\">";
                // line 153
                yield (((($tmp = (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 153, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 153, $this->source); })()), "name", [], "any", false, false, false, 153), "html", null, true)) : ("Jeu"));
                yield "</span>
                </div>
              </div>
              <div class=\"card__body\">
                <h4 class=\"card__title\">";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 157, $this->source); })()), "title", [], "any", false, false, false, 157), "html", null, true);
                yield "</h4>
                <p class=\"card__desc\">
                  Dates: <b>";
                // line 159
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 159, $this->source); })()), "startDate", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 159, $this->source); })()), "startDate", [], "any", false, false, false, 159), "d/m/Y"), "html", null, true)) : ("-"));
                yield " - ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 159, $this->source); })()), "endDate", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 159, $this->source); })()), "endDate", [], "any", false, false, false, 159), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</b>
                  · Prize pool: <b>";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 160, $this->source); })()), "prizePool", [], "any", false, false, false, 160), 2, ".", " "), "html", null, true);
                yield " DT</b>
                </p>
                <div class=\"card__metaRow\">
                  <span class=\"metaPill\">Jeu: <b>";
                // line 163
                yield (((($tmp = (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 163, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 163, $this->source); })()), "name", [], "any", false, false, false, 163), "html", null, true)) : ("-"));
                yield "</b></span>
                  <span class=\"metaPill\">Categorie: <b>";
                // line 164
                yield (((($tmp = (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 164, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 164, $this->source); })()), "name", [], "any", false, false, false, 164), "html", null, true)) : ("-"));
                yield "</b></span>
                </div>
                <div class=\"card__metaRow\" style=\"margin-top:8px;\">
                  <span class=\"metaPill\">Equipes: <b>";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "accepted_count", [], "any", false, false, false, 167), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 167, $this->source); })()), "maxTeams", [], "any", false, false, false, 167), "html", null, true);
                yield "</b></span>
                  <span class=\"metaPill\">Matchs: <b>";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "matches_finished", [], "any", false, false, false, 168), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "matches_total", [], "any", false, false, false, 168), "html", null, true);
                yield "</b></span>
                </div>
                <div class=\"progress\"><div class=\"progress__bar\" style=\"width: ";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "progress_percent", [], "any", false, false, false, 170), "html", null, true);
                yield "%\"></div></div>
                <div class=\"card__actions\">
                  ";
                // line 172
                if (((isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 172, $this->source); })()) > 0)) {
                    // line 173
                    yield "                    <a class=\"btn btn--ghost\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 173, $this->source); })())]), "html", null, true);
                    yield "\">Voir detail</a>
                  ";
                }
                // line 175
                yield "                </div>
              </div>
            </article>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            yield "        </div>
      ";
        }
        // line 181
        yield "
      ";
        // line 182
        yield from $this->load("front/partials/_pagination.html.twig", 182)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 183
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 183, $this->source); })()), "route_name" => "front_tournaments"]));
        // line 186
        yield "
      ";
        // line 187
        yield from $this->load("front/partials/_footer.html.twig", 187)->unwrap()->yield($context);
        // line 188
        yield "    </section>
  </main>

  ";
        // line 191
        yield from $this->load("front/partials/_auth_modal.html.twig", 191)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/tournaments.html.twig";
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
        return array (  491 => 191,  486 => 188,  484 => 187,  481 => 186,  479 => 183,  478 => 182,  475 => 181,  471 => 179,  462 => 175,  456 => 173,  454 => 172,  449 => 170,  442 => 168,  436 => 167,  430 => 164,  426 => 163,  420 => 160,  414 => 159,  409 => 157,  402 => 153,  398 => 152,  392 => 151,  387 => 149,  383 => 147,  380 => 146,  377 => 145,  374 => 144,  371 => 143,  368 => 142,  365 => 141,  362 => 140,  359 => 139,  355 => 138,  352 => 137,  346 => 133,  344 => 132,  337 => 128,  326 => 120,  318 => 115,  314 => 114,  310 => 113,  303 => 109,  299 => 108,  295 => 107,  291 => 106,  286 => 103,  273 => 101,  269 => 100,  261 => 94,  248 => 92,  244 => 91,  236 => 85,  223 => 83,  219 => 82,  211 => 76,  202 => 73,  195 => 72,  191 => 71,  183 => 65,  174 => 62,  167 => 61,  163 => 60,  155 => 55,  150 => 53,  143 => 48,  141 => 47,  140 => 46,  139 => 45,  138 => 44,  137 => 43,  136 => 42,  135 => 41,  134 => 40,  133 => 39,  132 => 38,  131 => 37,  130 => 35,  127 => 34,  125 => 33,  124 => 32,  123 => 31,  122 => 30,  121 => 29,  120 => 28,  119 => 27,  118 => 26,  117 => 25,  116 => 24,  115 => 23,  114 => 21,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Catalogue des tournois{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'TOURNOIS',
    hero_title: 'Catalogue des tournois',
    hero_sub: 'Recherche dynamique sur la base de donnees.',
    breadcrumb_current: 'Catalogue des tournois'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des tournois</h1>
          <p>La recherche et les filtres sont traites au back-end puis affiches depuis la base.</p>
        </div>
        <div class=\"formActions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_tournaments_export', {
            format: 'pdf',
            q: filters.q|default(''),
            game: filters.game|default(''),
            category: filters.category|default(''),
            status: filters.status|default(''),
            format_filter: filters.format|default(''),
            registration_mode: filters.registration_mode|default(''),
            date_from: filters.date_from|default(''),
            date_to: filters.date_to|default(''),
            prize_min: filters.prize_min|default(''),
            prize_max: filters.prize_max|default(''),
            sort: filters.sort|default('latest')
          }) }}\">PDF</a>
          <a class=\"btn btn--ghost\" href=\"{{ path('front_tournaments_export', {
            format: 'excel',
            q: filters.q|default(''),
            game: filters.game|default(''),
            category: filters.category|default(''),
            status: filters.status|default(''),
            format_filter: filters.format|default(''),
            registration_mode: filters.registration_mode|default(''),
            date_from: filters.date_from|default(''),
            date_to: filters.date_to|default(''),
            prize_min: filters.prize_min|default(''),
            prize_max: filters.prize_max|default(''),
            sort: filters.sort|default('latest')
          }) }}\">Excel</a>
        </div>
      </div>

      <section class=\"panel\">
        <form method=\"get\" action=\"{{ path('front_tournaments') }}\" data-auto-submit=\"1\">
          <div class=\"filtersRow\">
            <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Rechercher un tournoi...\" />

            <div class=\"select\">
              <select name=\"game\">
                <option value=\"\">Jeu</option>
                {% for game in available_games %}
                  <option value=\"{{ game.gameId }}\" {{ filters.game is not null and filters.game == game.gameId ? 'selected' : '' }}>
                    {{ game.name }}
                  </option>
                {% endfor %}
              </select>
            </div>

            <div class=\"select\">
              <select name=\"category\">
                <option value=\"\">Categorie</option>
                {% for category in available_categories %}
                  <option value=\"{{ category.categoryId }}\" {{ filters.category is not null and filters.category == category.categoryId ? 'selected' : '' }}>
                    {{ category.name }}
                  </option>
                {% endfor %}
              </select>
            </div>

            <div class=\"select\">
              <select name=\"status\">
                <option value=\"\">Statut</option>
                {% for statusValue in filter_options.statuses %}
                  <option value=\"{{ statusValue }}\" {{ filters.status == statusValue ? 'selected' : '' }}>{{ statusValue }}</option>
                {% endfor %}
              </select>
            </div>

            <div class=\"select\">
              <select name=\"format\">
                <option value=\"\">Format</option>
                {% for formatValue in filter_options.formats %}
                  <option value=\"{{ formatValue }}\" {{ filters.format == formatValue ? 'selected' : '' }}>{{ formatValue }}</option>
                {% endfor %}
              </select>
            </div>

            <div class=\"select\">
              <select name=\"registration_mode\">
                <option value=\"\">Inscription</option>
                {% for modeValue in filter_options.registration_modes %}
                  <option value=\"{{ modeValue }}\" {{ filters.registration_mode == modeValue ? 'selected' : '' }}>{{ modeValue }}</option>
                {% endfor %}
              </select>
            </div>

            <input class=\"input\" type=\"date\" name=\"date_from\" value=\"{{ filters.date_from|default('') }}\" />
            <input class=\"input\" type=\"date\" name=\"date_to\" value=\"{{ filters.date_to|default('') }}\" />
            <input class=\"input\" type=\"number\" min=\"0\" step=\"0.01\" name=\"prize_min\" value=\"{{ filters.prize_min|default('') }}\" placeholder=\"Prize min\" />
            <input class=\"input\" type=\"number\" min=\"0\" step=\"0.01\" name=\"prize_max\" value=\"{{ filters.prize_max|default('') }}\" placeholder=\"Prize max\" />

            <div class=\"select\">
              <select name=\"sort\">
                <option value=\"latest\" {{ filters.sort == 'latest' ? 'selected' : '' }}>Plus recents</option>
                <option value=\"prize\" {{ filters.sort == 'prize' ? 'selected' : '' }}>Prize pool</option>
                <option value=\"progress\" {{ filters.sort == 'progress' ? 'selected' : '' }}>Progression</option>
              </select>
            </div>

            <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
            <a class=\"btn btn--ghost\" href=\"{{ path('front_tournaments') }}\">Reset</a>
          </div>
        </form>
      </section>

      <section class=\"panel\">
        <div class=\"panel__head\">
          <h3 class=\"panel__title\">RESULTATS</h3>
          <div class=\"panel__desc\">{{ pagination.total_items|default(tournaments_data|length) }} tournoi(s) trouves</div>
        </div>
      </section>

      {% if tournaments_data is empty %}
        <section class=\"panel\">
          <div class=\"emptyState\">Aucun tournoi ne correspond aux filtres selectionnes.</div>
        </section>
      {% else %}
        <div class=\"cardsGrid\">
          {% for item in tournaments_data %}
            {% set tournament = item.tournament %}
            {% set tournamentId = tournament.tournamentId ?? 0 %}
            {% set game = tournament.gameId %}
            {% set category = game ? game.categoryId : null %}
            {% set photoPath = tournament.photoPath ?? '' %}
            {% set photoUrl = photoPath ? (photoPath starts with 'http' ? photoPath : asset(photoPath)) : 'https://picsum.photos/seed/pulse_tournament_' ~ tournamentId ~ '/1200/800' %}
            {% set status = tournament.status|default('DRAFT') %}
            {% set statusClass = status == 'OPEN' ? 'chip--status' : (status == 'ONGOING' ? 'chip--format' : '') %}

            <article class=\"card card--tournament\">
              <div class=\"card__media\" data-bg=\"{{ photoUrl }}\">
                <div class=\"card__chips\">
                  <span class=\"chip {{ statusClass }}\">{{ status }}</span>
                  <span class=\"chip\">{{ tournament.format }}</span>
                  <span class=\"chip\">{{ game ? game.name : 'Jeu' }}</span>
                </div>
              </div>
              <div class=\"card__body\">
                <h4 class=\"card__title\">{{ tournament.title }}</h4>
                <p class=\"card__desc\">
                  Dates: <b>{{ tournament.startDate ? tournament.startDate|date('d/m/Y') : '-' }} - {{ tournament.endDate ? tournament.endDate|date('d/m/Y') : '-' }}</b>
                  · Prize pool: <b>{{ tournament.prizePool|number_format(2, '.', ' ') }} DT</b>
                </p>
                <div class=\"card__metaRow\">
                  <span class=\"metaPill\">Jeu: <b>{{ game ? game.name : '-' }}</b></span>
                  <span class=\"metaPill\">Categorie: <b>{{ category ? category.name : '-' }}</b></span>
                </div>
                <div class=\"card__metaRow\" style=\"margin-top:8px;\">
                  <span class=\"metaPill\">Equipes: <b>{{ item.accepted_count }}/{{ tournament.maxTeams }}</b></span>
                  <span class=\"metaPill\">Matchs: <b>{{ item.matches_finished }}/{{ item.matches_total }}</b></span>
                </div>
                <div class=\"progress\"><div class=\"progress__bar\" style=\"width: {{ item.progress_percent }}%\"></div></div>
                <div class=\"card__actions\">
                  {% if tournamentId > 0 %}
                    <a class=\"btn btn--ghost\" href=\"{{ path('front_tournament_detail', {id: tournamentId}) }}\">Voir detail</a>
                  {% endif %}
                </div>
              </div>
            </article>
          {% endfor %}
        </div>
      {% endif %}

      {% include 'front/partials/_pagination.html.twig' with {
        pagination: pagination,
        route_name: 'front_tournaments'
      } %}

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/tournaments.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\tournaments.html.twig");
    }
}
