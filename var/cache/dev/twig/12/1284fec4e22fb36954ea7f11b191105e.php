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

/* front/pages/game-detail.html.twig */
class __TwigTemplate_8b5c185074fd17a807a7feb703e988ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/game-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/game-detail.html.twig"));

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

        yield "PULSE - Detail jeu";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JEU", "hero_title" => CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "hero_sub" => "Fiche complete du jeu et tournois relies.", "breadcrumb_current" => "Detail jeu"]));
        // line 12
        yield "
  ";
        // line 13
        $context["gameId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["game"] ?? null), "gameId", [], "any", true, true, false, 13) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 13, $this->source); })()), "gameId", [], "any", false, false, false, 13)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 13, $this->source); })()), "gameId", [], "any", false, false, false, 13)) : (0));
        // line 14
        yield "  ";
        $context["imagePath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 14, $this->source); })()), "coverImageId", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 14, $this->source); })()), "coverImageId", [], "any", false, false, false, 14), "fileUrl", [], "any", false, false, false, 14)) : (""));
        // line 15
        yield "  ";
        $context["imageUrl"] = (((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 15, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 15, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 15, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 15, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_game_detail_" . (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 15, $this->source); })())) . "/400/400")));
        // line 16
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        <section class=\"panel\">
          <div style=\"display:flex; gap:14px; align-items:center; flex-wrap:wrap;\">
            <div class=\"avatarLg\" data-avatar=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "\"></div>
            <div>
              <h3 style=\"margin:0;\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        yield "</h3>
              <div class=\"muted\">
                Categorie: ";
        // line 26
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 26, $this->source); })()), "categoryId", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 26, $this->source); })()), "categoryId", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true)) : ("-"));
        yield "
                ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 27, $this->source); })()), "publisher", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " · Publisher: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 27, $this->source); })()), "publisher", [], "any", false, false, false, 27), "html", null, true);
        }
        // line 28
        yield "              </div>
              <div class=\"badge badge--info\" style=\"margin-top:8px;\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_tournaments", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 29, $this->source); })()), "active_tournaments", [], "any", false, false, false, 29), 0)) : (0)), "html", null, true);
        yield " tournoi(s) actif(s)</div>
            </div>
          </div>

          <p class=\"muted\" style=\"margin-top:12px;\">";
        // line 33
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["game"] ?? null), "description", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), "html", null, true)) : ("Aucune description disponible."));
        yield "</p>

          <div class=\"statsRow\" style=\"margin-top:12px;\">
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_tournaments", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 36, $this->source); })()), "total_tournaments", [], "any", false, false, false, 36), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Tournois total</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_tournaments", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 37, $this->source); })()), "active_tournaments", [], "any", false, false, false, 37), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Tournois actifs</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "participants", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 38, $this->source); })()), "participants", [], "any", false, false, false, 38), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Participants</div></div>
          </div>
        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">FILTRES TOURNOIS</h3>
          <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["id" => (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 44, $this->source); })())]), "html", null, true);
        yield "\" data-auto-submit=\"1\">
            <input type=\"hidden\" name=\"tab\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 45, $this->source); })()), "open")) : ("open")), "html", null, true);
        yield "\">
            <input class=\"input\" type=\"search\" name=\"tq\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "tq", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })()), "tq", [], "any", false, false, false, 46), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Titre tournoi...\" />

            <div class=\"select\">
              <select name=\"status\">
                <option value=\"\" ";
        // line 50
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Tous statuts</option>
                <option value=\"OPEN\" ";
        // line 51
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "status", [], "any", false, false, false, 51), "")) : ("")) == "OPEN")) ? ("selected") : (""));
        yield ">OPEN</option>
                <option value=\"ONGOING\" ";
        // line 52
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 52, $this->source); })()), "status", [], "any", false, false, false, 52), "")) : ("")) == "ONGOING")) ? ("selected") : (""));
        yield ">ONGOING</option>
                <option value=\"FINISHED\" ";
        // line 53
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 53, $this->source); })()), "status", [], "any", false, false, false, 53), "")) : ("")) == "FINISHED")) ? ("selected") : (""));
        yield ">FINISHED</option>
                <option value=\"CANCELLED\" ";
        // line 54
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), "")) : ("")) == "CANCELLED")) ? ("selected") : (""));
        yield ">CANCELLED</option>
                <option value=\"DRAFT\" ";
        // line 55
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55), "")) : ("")) == "DRAFT")) ? ("selected") : (""));
        yield ">DRAFT</option>
              </select>
            </div>

            <div class=\"select\">
              <select name=\"format\">
                <option value=\"\" ";
        // line 61
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "format", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 61, $this->source); })()), "format", [], "any", false, false, false, 61), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Tous formats</option>
                <option value=\"BO1\" ";
        // line 62
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "format", [], "any", true, true, false, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 62, $this->source); })()), "format", [], "any", false, false, false, 62), "")) : ("")) == "BO1")) ? ("selected") : (""));
        yield ">BO1</option>
                <option value=\"BO3\" ";
        // line 63
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "format", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 63, $this->source); })()), "format", [], "any", false, false, false, 63), "")) : ("")) == "BO3")) ? ("selected") : (""));
        yield ">BO3</option>
                <option value=\"BO5\" ";
        // line 64
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "format", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 64, $this->source); })()), "format", [], "any", false, false, false, 64), "")) : ("")) == "BO5")) ? ("selected") : (""));
        yield ">BO5</option>
              </select>
            </div>

            <div class=\"select\">
              <select name=\"sort\">
                <option value=\"latest\" ";
        // line 70
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 70, $this->source); })()), "sort", [], "any", false, false, false, 70), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
                <option value=\"oldest\" ";
        // line 71
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 71, $this->source); })()), "sort", [], "any", false, false, false, 71), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                <option value=\"prize\" ";
        // line 72
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 72, $this->source); })()), "sort", [], "any", false, false, false, 72), "latest")) : ("latest")) == "prize")) ? ("selected") : (""));
        yield ">Prize pool</option>
                <option value=\"progress\" ";
        // line 73
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 73, $this->source); })()), "sort", [], "any", false, false, false, 73), "latest")) : ("latest")) == "progress")) ? ("selected") : (""));
        yield ">Progression</option>
              </select>
            </div>

            <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
            <a class=\"btn btn--ghost\" href=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["id" => (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 78, $this->source); })())]), "html", null, true);
        yield "\">Reset</a>
          </form>
        </aside>
      </div>

      <section class=\"panel\">
        <div class=\"tabs\">
          <a
            class=\"tab ";
        // line 86
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 86, $this->source); })()), "open")) : ("open")) == "open")) ? ("is-active") : (""));
        yield "\"
            href=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["id" =>         // line 88
(isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 88, $this->source); })()), "tab" => "open", "tq" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 90
($context["filters"] ?? null), "tq", [], "any", true, true, false, 90)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 90, $this->source); })()), "tq", [], "any", false, false, false, 90), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 91
($context["filters"] ?? null), "status", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 91, $this->source); })()), "status", [], "any", false, false, false, 91), "")) : ("")), "format" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 92
($context["filters"] ?? null), "format", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 92, $this->source); })()), "format", [], "any", false, false, false, 92), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 93
($context["filters"] ?? null), "sort", [], "any", true, true, false, 93)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 93, $this->source); })()), "sort", [], "any", false, false, false, 93), "latest")) : ("latest"))]), "html", null, true);
        // line 94
        yield "\"
          >Ouverts</a>
          <a
            class=\"tab ";
        // line 97
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 97, $this->source); })()), "open")) : ("open")) == "ongoing")) ? ("is-active") : (""));
        yield "\"
            href=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["id" =>         // line 99
(isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 99, $this->source); })()), "tab" => "ongoing", "tq" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 101
($context["filters"] ?? null), "tq", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 101, $this->source); })()), "tq", [], "any", false, false, false, 101), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 102
($context["filters"] ?? null), "status", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 102, $this->source); })()), "status", [], "any", false, false, false, 102), "")) : ("")), "format" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 103
($context["filters"] ?? null), "format", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 103, $this->source); })()), "format", [], "any", false, false, false, 103), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 104
($context["filters"] ?? null), "sort", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 104, $this->source); })()), "sort", [], "any", false, false, false, 104), "latest")) : ("latest"))]), "html", null, true);
        // line 105
        yield "\"
          >En cours</a>
          <a
            class=\"tab ";
        // line 108
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 108, $this->source); })()), "open")) : ("open")) == "finished")) ? ("is-active") : (""));
        yield "\"
            href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["id" =>         // line 110
(isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 110, $this->source); })()), "tab" => "finished", "tq" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 112
($context["filters"] ?? null), "tq", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 112, $this->source); })()), "tq", [], "any", false, false, false, 112), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 113
($context["filters"] ?? null), "status", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 113, $this->source); })()), "status", [], "any", false, false, false, 113), "")) : ("")), "format" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 114
($context["filters"] ?? null), "format", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 114, $this->source); })()), "format", [], "any", false, false, false, 114), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 115
($context["filters"] ?? null), "sort", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 115, $this->source); })()), "sort", [], "any", false, false, false, 115), "latest")) : ("latest"))]), "html", null, true);
        // line 116
        yield "\"
          >Termines</a>
        </div>

        <div class=\"tabPanels\">
          ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournaments_by_status"]) || array_key_exists("tournaments_by_status", $context) ? $context["tournaments_by_status"] : (function () { throw new RuntimeError('Variable "tournaments_by_status" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["statusKey"] => $context["rows"]) {
            // line 122
            yield "            <section class=\"tabPanel ";
            yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 122, $this->source); })()), "open")) : ("open")) == $context["statusKey"])) ? ("is-active") : (""));
            yield "\" data-panel=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusKey"], "html", null, true);
            yield "\">
              ";
            // line 123
            if (Twig\Extension\CoreExtension::testEmpty($context["rows"])) {
                // line 124
                yield "                <div class=\"emptyState\">Aucun tournoi pour cet onglet.</div>
              ";
            } else {
                // line 126
                yield "                <div class=\"cardsGrid\">
                  ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["rows"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 128
                    yield "                    ";
                    $context["tournament"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tournament", [], "any", false, false, false, 128);
                    // line 129
                    yield "                    ";
                    $context["tournamentId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "tournamentId", [], "any", true, true, false, 129) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 129, $this->source); })()), "tournamentId", [], "any", false, false, false, 129)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 129, $this->source); })()), "tournamentId", [], "any", false, false, false, 129)) : (0));
                    // line 130
                    yield "                    ";
                    $context["tournamentImagePath"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "photoPath", [], "any", true, true, false, 130) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 130, $this->source); })()), "photoPath", [], "any", false, false, false, 130)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 130, $this->source); })()), "photoPath", [], "any", false, false, false, 130)) : (""));
                    // line 131
                    yield "                    ";
                    $context["tournamentImageUrl"] = (((($tmp = (isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 131, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v2 = (isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 131, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) ? ((isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 131, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 131, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_game_tournament_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 131, $this->source); })())) . "/1200/800")));
                    // line 132
                    yield "                    <article class=\"card card--tournament\">
                      <div class=\"card__media\" data-bg=\"";
                    // line 133
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentImageUrl"]) || array_key_exists("tournamentImageUrl", $context) ? $context["tournamentImageUrl"] : (function () { throw new RuntimeError('Variable "tournamentImageUrl" does not exist.', 133, $this->source); })()), "html", null, true);
                    yield "\">
                        <div class=\"card__chips\">
                          <span class=\"chip chip--status\">";
                    // line 135
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 135, $this->source); })()), "status", [], "any", false, false, false, 135), "html", null, true);
                    yield "</span>
                          <span class=\"chip chip--format\">";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 136, $this->source); })()), "format", [], "any", false, false, false, 136), "html", null, true);
                    yield "</span>
                          <span class=\"chip\">";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 137, $this->source); })()), "registrationMode", [], "any", false, false, false, 137), "html", null, true);
                    yield "</span>
                        </div>
                      </div>
                      <div class=\"card__body\">
                        <h4 class=\"card__title\">";
                    // line 141
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 141, $this->source); })()), "title", [], "any", false, false, false, 141), "html", null, true);
                    yield "</h4>
                        <p class=\"card__desc\">
                          Dates: <b>";
                    // line 143
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 143, $this->source); })()), "startDate", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 143, $this->source); })()), "startDate", [], "any", false, false, false, 143), "d/m/Y"), "html", null, true)) : ("-"));
                    yield "</b>
                          -
                          <b>";
                    // line 145
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 145, $this->source); })()), "endDate", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 145, $this->source); })()), "endDate", [], "any", false, false, false, 145), "d/m/Y"), "html", null, true)) : ("-"));
                    yield "</b>
                        </p>
                        <div class=\"card__metaRow\">
                          <span class=\"metaPill\">Participants: <b>";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "participants_count", [], "any", false, false, false, 148), "html", null, true);
                    yield "</b></span>
                          <span class=\"metaPill\">Matchs: <b>";
                    // line 149
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "finished_matches", [], "any", false, false, false, 149), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "total_matches", [], "any", false, false, false, 149), "html", null, true);
                    yield "</b></span>
                        </div>
                        <div class=\"progress\"><div class=\"progress__bar\" style=\"width: ";
                    // line 151
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "progress_percent", [], "any", false, false, false, 151), "html", null, true);
                    yield "%\"></div></div>
                        <div class=\"card__actions\">
                          <a class=\"btn btn--ghost\" href=\"";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 153, $this->source); })())]), "html", null, true);
                    yield "\">Voir detail</a>
                        </div>
                      </div>
                    </article>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                yield "                </div>
              ";
            }
            // line 160
            yield "            </section>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['statusKey'], $context['rows'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        yield "        </div>
      </section>

      ";
        // line 165
        yield from $this->load("front/partials/_footer.html.twig", 165)->unwrap()->yield($context);
        // line 166
        yield "    </section>
  </main>

  ";
        // line 169
        yield from $this->load("front/partials/_auth_modal.html.twig", 169)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/game-detail.html.twig";
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
        return array (  446 => 169,  441 => 166,  439 => 165,  434 => 162,  427 => 160,  423 => 158,  412 => 153,  407 => 151,  400 => 149,  396 => 148,  390 => 145,  385 => 143,  380 => 141,  373 => 137,  369 => 136,  365 => 135,  360 => 133,  357 => 132,  354 => 131,  351 => 130,  348 => 129,  345 => 128,  341 => 127,  338 => 126,  334 => 124,  332 => 123,  325 => 122,  321 => 121,  314 => 116,  312 => 115,  311 => 114,  310 => 113,  309 => 112,  308 => 110,  307 => 109,  303 => 108,  298 => 105,  296 => 104,  295 => 103,  294 => 102,  293 => 101,  292 => 99,  291 => 98,  287 => 97,  282 => 94,  280 => 93,  279 => 92,  278 => 91,  277 => 90,  276 => 88,  275 => 87,  271 => 86,  260 => 78,  252 => 73,  248 => 72,  244 => 71,  240 => 70,  231 => 64,  227 => 63,  223 => 62,  219 => 61,  210 => 55,  206 => 54,  202 => 53,  198 => 52,  194 => 51,  190 => 50,  183 => 46,  179 => 45,  175 => 44,  166 => 38,  162 => 37,  158 => 36,  152 => 33,  145 => 29,  142 => 28,  137 => 27,  133 => 26,  128 => 24,  123 => 22,  115 => 16,  112 => 15,  109 => 14,  107 => 13,  104 => 12,  102 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Detail jeu{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JEU',
    hero_title: game.name,
    hero_sub: 'Fiche complete du jeu et tournois relies.',
    breadcrumb_current: 'Detail jeu'
  } %}

  {% set gameId = game.gameId ?? 0 %}
  {% set imagePath = game.coverImageId ? game.coverImageId.fileUrl : '' %}
  {% set imageUrl = imagePath ? (imagePath starts with 'http' ? imagePath : asset(imagePath)) : 'https://picsum.photos/seed/pulse_game_detail_' ~ gameId ~ '/400/400' %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        <section class=\"panel\">
          <div style=\"display:flex; gap:14px; align-items:center; flex-wrap:wrap;\">
            <div class=\"avatarLg\" data-avatar=\"{{ imageUrl }}\"></div>
            <div>
              <h3 style=\"margin:0;\">{{ game.name }}</h3>
              <div class=\"muted\">
                Categorie: {{ game.categoryId ? game.categoryId.name : '-' }}
                {% if game.publisher %} · Publisher: {{ game.publisher }}{% endif %}
              </div>
              <div class=\"badge badge--info\" style=\"margin-top:8px;\">{{ stats.active_tournaments|default(0) }} tournoi(s) actif(s)</div>
            </div>
          </div>

          <p class=\"muted\" style=\"margin-top:12px;\">{{ game.description ?? 'Aucune description disponible.' }}</p>

          <div class=\"statsRow\" style=\"margin-top:12px;\">
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.total_tournaments|default(0) }}</div><div class=\"statCard__label\">Tournois total</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.active_tournaments|default(0) }}</div><div class=\"statCard__label\">Tournois actifs</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.participants|default(0) }}</div><div class=\"statCard__label\">Participants</div></div>
          </div>
        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">FILTRES TOURNOIS</h3>
          <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_game_detail', {id: gameId}) }}\" data-auto-submit=\"1\">
            <input type=\"hidden\" name=\"tab\" value=\"{{ active_tab|default('open') }}\">
            <input class=\"input\" type=\"search\" name=\"tq\" value=\"{{ filters.tq|default('') }}\" placeholder=\"Titre tournoi...\" />

            <div class=\"select\">
              <select name=\"status\">
                <option value=\"\" {{ (filters.status|default('')) == '' ? 'selected' : '' }}>Tous statuts</option>
                <option value=\"OPEN\" {{ (filters.status|default('')) == 'OPEN' ? 'selected' : '' }}>OPEN</option>
                <option value=\"ONGOING\" {{ (filters.status|default('')) == 'ONGOING' ? 'selected' : '' }}>ONGOING</option>
                <option value=\"FINISHED\" {{ (filters.status|default('')) == 'FINISHED' ? 'selected' : '' }}>FINISHED</option>
                <option value=\"CANCELLED\" {{ (filters.status|default('')) == 'CANCELLED' ? 'selected' : '' }}>CANCELLED</option>
                <option value=\"DRAFT\" {{ (filters.status|default('')) == 'DRAFT' ? 'selected' : '' }}>DRAFT</option>
              </select>
            </div>

            <div class=\"select\">
              <select name=\"format\">
                <option value=\"\" {{ (filters.format|default('')) == '' ? 'selected' : '' }}>Tous formats</option>
                <option value=\"BO1\" {{ (filters.format|default('')) == 'BO1' ? 'selected' : '' }}>BO1</option>
                <option value=\"BO3\" {{ (filters.format|default('')) == 'BO3' ? 'selected' : '' }}>BO3</option>
                <option value=\"BO5\" {{ (filters.format|default('')) == 'BO5' ? 'selected' : '' }}>BO5</option>
              </select>
            </div>

            <div class=\"select\">
              <select name=\"sort\">
                <option value=\"latest\" {{ (filters.sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recents</option>
                <option value=\"oldest\" {{ (filters.sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciens</option>
                <option value=\"prize\" {{ (filters.sort|default('latest')) == 'prize' ? 'selected' : '' }}>Prize pool</option>
                <option value=\"progress\" {{ (filters.sort|default('latest')) == 'progress' ? 'selected' : '' }}>Progression</option>
              </select>
            </div>

            <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
            <a class=\"btn btn--ghost\" href=\"{{ path('front_game_detail', {id: gameId}) }}\">Reset</a>
          </form>
        </aside>
      </div>

      <section class=\"panel\">
        <div class=\"tabs\">
          <a
            class=\"tab {{ (active_tab|default('open')) == 'open' ? 'is-active' : '' }}\"
            href=\"{{ path('front_game_detail', {
              id: gameId,
              tab: 'open',
              tq: filters.tq|default(''),
              status: filters.status|default(''),
              format: filters.format|default(''),
              sort: filters.sort|default('latest')
            }) }}\"
          >Ouverts</a>
          <a
            class=\"tab {{ (active_tab|default('open')) == 'ongoing' ? 'is-active' : '' }}\"
            href=\"{{ path('front_game_detail', {
              id: gameId,
              tab: 'ongoing',
              tq: filters.tq|default(''),
              status: filters.status|default(''),
              format: filters.format|default(''),
              sort: filters.sort|default('latest')
            }) }}\"
          >En cours</a>
          <a
            class=\"tab {{ (active_tab|default('open')) == 'finished' ? 'is-active' : '' }}\"
            href=\"{{ path('front_game_detail', {
              id: gameId,
              tab: 'finished',
              tq: filters.tq|default(''),
              status: filters.status|default(''),
              format: filters.format|default(''),
              sort: filters.sort|default('latest')
            }) }}\"
          >Termines</a>
        </div>

        <div class=\"tabPanels\">
          {% for statusKey, rows in tournaments_by_status %}
            <section class=\"tabPanel {{ (active_tab|default('open')) == statusKey ? 'is-active' : '' }}\" data-panel=\"{{ statusKey }}\">
              {% if rows is empty %}
                <div class=\"emptyState\">Aucun tournoi pour cet onglet.</div>
              {% else %}
                <div class=\"cardsGrid\">
                  {% for row in rows %}
                    {% set tournament = row.tournament %}
                    {% set tournamentId = tournament.tournamentId ?? 0 %}
                    {% set tournamentImagePath = tournament.photoPath ?? '' %}
                    {% set tournamentImageUrl = tournamentImagePath ? (tournamentImagePath starts with 'http' ? tournamentImagePath : asset(tournamentImagePath)) : 'https://picsum.photos/seed/pulse_game_tournament_' ~ tournamentId ~ '/1200/800' %}
                    <article class=\"card card--tournament\">
                      <div class=\"card__media\" data-bg=\"{{ tournamentImageUrl }}\">
                        <div class=\"card__chips\">
                          <span class=\"chip chip--status\">{{ tournament.status }}</span>
                          <span class=\"chip chip--format\">{{ tournament.format }}</span>
                          <span class=\"chip\">{{ tournament.registrationMode }}</span>
                        </div>
                      </div>
                      <div class=\"card__body\">
                        <h4 class=\"card__title\">{{ tournament.title }}</h4>
                        <p class=\"card__desc\">
                          Dates: <b>{{ tournament.startDate ? tournament.startDate|date('d/m/Y') : '-' }}</b>
                          -
                          <b>{{ tournament.endDate ? tournament.endDate|date('d/m/Y') : '-' }}</b>
                        </p>
                        <div class=\"card__metaRow\">
                          <span class=\"metaPill\">Participants: <b>{{ row.participants_count }}</b></span>
                          <span class=\"metaPill\">Matchs: <b>{{ row.finished_matches }}/{{ row.total_matches }}</b></span>
                        </div>
                        <div class=\"progress\"><div class=\"progress__bar\" style=\"width: {{ row.progress_percent }}%\"></div></div>
                        <div class=\"card__actions\">
                          <a class=\"btn btn--ghost\" href=\"{{ path('front_tournament_detail', {id: tournamentId}) }}\">Voir detail</a>
                        </div>
                      </div>
                    </article>
                  {% endfor %}
                </div>
              {% endif %}
            </section>
          {% endfor %}
        </div>
      </section>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/game-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\game-detail.html.twig");
    }
}
