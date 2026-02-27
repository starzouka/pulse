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
class __TwigTemplate_0a1884c533d277aa7c9f965b32b50a66 extends Template
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
              <div class=\"listMeta\" style=\"margin-top:6px;\">Slug SEO: ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 29, $this->source); })()), "slug", [], "any", false, false, false, 29), "html", null, true);
        yield "</div>
              <div class=\"badge badge--info\" style=\"margin-top:8px;\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_tournaments", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 30, $this->source); })()), "active_tournaments", [], "any", false, false, false, 30), 0)) : (0)), "html", null, true);
        yield " tournoi(s) actif(s)</div>
            </div>
          </div>

          <p class=\"muted\" style=\"margin-top:12px;\">";
        // line 34
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["game"] ?? null), "description", [], "any", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), "html", null, true)) : ("Aucune description disponible."));
        yield "</p>

          <div class=\"statsRow\" style=\"margin-top:12px;\">
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_tournaments", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 37, $this->source); })()), "total_tournaments", [], "any", false, false, false, 37), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Tournois total</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_tournaments", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 38, $this->source); })()), "active_tournaments", [], "any", false, false, false, 38), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Tournois actifs</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "participants", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "participants", [], "any", false, false, false, 39), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Participants</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "views", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 40, $this->source); })()), "views", [], "any", false, false, false, 40), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Vues</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "favorites", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 41, $this->source); })()), "favorites", [], "any", false, false, false, 41), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Favoris</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "score", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 42, $this->source); })()), "score", [], "any", false, false, false, 42), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Score</div></div>
          </div>

          ";
        // line 45
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "            <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail_favorite_toggle", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 46, $this->source); })()), "slug", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" style=\"margin-top:14px;\">
              <input type=\"hidden\" name=\"_token\" value=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_game_favorite_" . (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 47, $this->source); })()))), "html", null, true);
            yield "\" />
              <button class=\"btn btn--primary\" type=\"submit\">";
            // line 48
            yield (((($tmp = (isset($context["is_favorite"]) || array_key_exists("is_favorite", $context) ? $context["is_favorite"] : (function () { throw new RuntimeError('Variable "is_favorite" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Retirer des favoris") : ("Ajouter aux favoris"));
            yield "</button>
            </form>
          ";
        } else {
            // line 51
            yield "            <div class=\"listMeta\" style=\"margin-top:14px;\">Connectez-vous pour ajouter ce jeu aux favoris.</div>
          ";
        }
        // line 53
        yield "        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">FILTRES TOURNOIS</h3>
          <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 57, $this->source); })()), "slug", [], "any", false, false, false, 57)]), "html", null, true);
        yield "\" data-auto-submit=\"1\">
            <input type=\"hidden\" name=\"tab\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 58, $this->source); })()), "open")) : ("open")), "html", null, true);
        yield "\">
            <input class=\"input\" type=\"search\" name=\"tq\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "tq", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 59, $this->source); })()), "tq", [], "any", false, false, false, 59), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Titre tournoi...\" />

            <div class=\"select\">
              <select name=\"status\">
                <option value=\"\" ";
        // line 63
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 63, $this->source); })()), "status", [], "any", false, false, false, 63), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Tous statuts</option>
                <option value=\"OPEN\" ";
        // line 64
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 64, $this->source); })()), "status", [], "any", false, false, false, 64), "")) : ("")) == "OPEN")) ? ("selected") : (""));
        yield ">OPEN</option>
                <option value=\"ONGOING\" ";
        // line 65
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 65, $this->source); })()), "status", [], "any", false, false, false, 65), "")) : ("")) == "ONGOING")) ? ("selected") : (""));
        yield ">ONGOING</option>
                <option value=\"FINISHED\" ";
        // line 66
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 66, $this->source); })()), "status", [], "any", false, false, false, 66), "")) : ("")) == "FINISHED")) ? ("selected") : (""));
        yield ">FINISHED</option>
                <option value=\"CANCELLED\" ";
        // line 67
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 67, $this->source); })()), "status", [], "any", false, false, false, 67), "")) : ("")) == "CANCELLED")) ? ("selected") : (""));
        yield ">CANCELLED</option>
                <option value=\"DRAFT\" ";
        // line 68
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 68, $this->source); })()), "status", [], "any", false, false, false, 68), "")) : ("")) == "DRAFT")) ? ("selected") : (""));
        yield ">DRAFT</option>
              </select>
            </div>

            <div class=\"select\">
              <select name=\"format\">
                <option value=\"\" ";
        // line 74
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "format", [], "any", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 74, $this->source); })()), "format", [], "any", false, false, false, 74), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Tous formats</option>
                <option value=\"BO1\" ";
        // line 75
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "format", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 75, $this->source); })()), "format", [], "any", false, false, false, 75), "")) : ("")) == "BO1")) ? ("selected") : (""));
        yield ">BO1</option>
                <option value=\"BO3\" ";
        // line 76
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "format", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 76, $this->source); })()), "format", [], "any", false, false, false, 76), "")) : ("")) == "BO3")) ? ("selected") : (""));
        yield ">BO3</option>
                <option value=\"BO5\" ";
        // line 77
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "format", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 77, $this->source); })()), "format", [], "any", false, false, false, 77), "")) : ("")) == "BO5")) ? ("selected") : (""));
        yield ">BO5</option>
              </select>
            </div>

            <div class=\"select\">
              <select name=\"sort\">
                <option value=\"latest\" ";
        // line 83
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 83, $this->source); })()), "sort", [], "any", false, false, false, 83), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
                <option value=\"oldest\" ";
        // line 84
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 84, $this->source); })()), "sort", [], "any", false, false, false, 84), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                <option value=\"prize\" ";
        // line 85
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 85, $this->source); })()), "sort", [], "any", false, false, false, 85), "latest")) : ("latest")) == "prize")) ? ("selected") : (""));
        yield ">Prize pool</option>
                <option value=\"progress\" ";
        // line 86
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 86, $this->source); })()), "sort", [], "any", false, false, false, 86), "latest")) : ("latest")) == "progress")) ? ("selected") : (""));
        yield ">Progression</option>
              </select>
            </div>

            <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
            <a class=\"btn btn--ghost\" href=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 91, $this->source); })()), "slug", [], "any", false, false, false, 91)]), "html", null, true);
        yield "\">Reset</a>
          </form>
        </aside>
      </div>

      <section class=\"panel\">
        <div class=\"tabs\">
          <a
            class=\"tab ";
        // line 99
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 99, $this->source); })()), "open")) : ("open")) == "open")) ? ("is-active") : (""));
        yield "\"
            href=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["slug" => CoreExtension::getAttribute($this->env, $this->source,         // line 101
(isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 101, $this->source); })()), "slug", [], "any", false, false, false, 101), "tab" => "open", "tq" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 103
($context["filters"] ?? null), "tq", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 103, $this->source); })()), "tq", [], "any", false, false, false, 103), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 104
($context["filters"] ?? null), "status", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 104, $this->source); })()), "status", [], "any", false, false, false, 104), "")) : ("")), "format" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 105
($context["filters"] ?? null), "format", [], "any", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 105, $this->source); })()), "format", [], "any", false, false, false, 105), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 106
($context["filters"] ?? null), "sort", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 106, $this->source); })()), "sort", [], "any", false, false, false, 106), "latest")) : ("latest"))]), "html", null, true);
        // line 107
        yield "\"
          >Ouverts</a>
          <a
            class=\"tab ";
        // line 110
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 110, $this->source); })()), "open")) : ("open")) == "ongoing")) ? ("is-active") : (""));
        yield "\"
            href=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["slug" => CoreExtension::getAttribute($this->env, $this->source,         // line 112
(isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 112, $this->source); })()), "slug", [], "any", false, false, false, 112), "tab" => "ongoing", "tq" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 114
($context["filters"] ?? null), "tq", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 114, $this->source); })()), "tq", [], "any", false, false, false, 114), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 115
($context["filters"] ?? null), "status", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 115, $this->source); })()), "status", [], "any", false, false, false, 115), "")) : ("")), "format" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 116
($context["filters"] ?? null), "format", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 116, $this->source); })()), "format", [], "any", false, false, false, 116), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 117
($context["filters"] ?? null), "sort", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 117, $this->source); })()), "sort", [], "any", false, false, false, 117), "latest")) : ("latest"))]), "html", null, true);
        // line 118
        yield "\"
          >En cours</a>
          <a
            class=\"tab ";
        // line 121
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 121, $this->source); })()), "open")) : ("open")) == "finished")) ? ("is-active") : (""));
        yield "\"
            href=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["slug" => CoreExtension::getAttribute($this->env, $this->source,         // line 123
(isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 123, $this->source); })()), "slug", [], "any", false, false, false, 123), "tab" => "finished", "tq" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 125
($context["filters"] ?? null), "tq", [], "any", true, true, false, 125)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 125, $this->source); })()), "tq", [], "any", false, false, false, 125), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 126
($context["filters"] ?? null), "status", [], "any", true, true, false, 126)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 126, $this->source); })()), "status", [], "any", false, false, false, 126), "")) : ("")), "format" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 127
($context["filters"] ?? null), "format", [], "any", true, true, false, 127)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 127, $this->source); })()), "format", [], "any", false, false, false, 127), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 128
($context["filters"] ?? null), "sort", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 128, $this->source); })()), "sort", [], "any", false, false, false, 128), "latest")) : ("latest"))]), "html", null, true);
        // line 129
        yield "\"
          >Termines</a>
        </div>

        <div class=\"tabPanels\">
          ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournaments_by_status"]) || array_key_exists("tournaments_by_status", $context) ? $context["tournaments_by_status"] : (function () { throw new RuntimeError('Variable "tournaments_by_status" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["statusKey"] => $context["rows"]) {
            // line 135
            yield "            <section class=\"tabPanel ";
            yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 135, $this->source); })()), "open")) : ("open")) == $context["statusKey"])) ? ("is-active") : (""));
            yield "\" data-panel=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusKey"], "html", null, true);
            yield "\">
              ";
            // line 136
            if (Twig\Extension\CoreExtension::testEmpty($context["rows"])) {
                // line 137
                yield "                <div class=\"emptyState\">Aucun tournoi pour cet onglet.</div>
              ";
            } else {
                // line 139
                yield "                <div class=\"cardsGrid\">
                  ";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["rows"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 141
                    yield "                    ";
                    $context["tournament"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tournament", [], "any", false, false, false, 141);
                    // line 142
                    yield "                    ";
                    $context["tournamentId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "tournamentId", [], "any", true, true, false, 142) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 142, $this->source); })()), "tournamentId", [], "any", false, false, false, 142)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 142, $this->source); })()), "tournamentId", [], "any", false, false, false, 142)) : (0));
                    // line 143
                    yield "                    ";
                    $context["tournamentImagePath"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "photoPath", [], "any", true, true, false, 143) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 143, $this->source); })()), "photoPath", [], "any", false, false, false, 143)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 143, $this->source); })()), "photoPath", [], "any", false, false, false, 143)) : (""));
                    // line 144
                    yield "                    ";
                    $context["tournamentImageUrl"] = (((($tmp = (isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 144, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v2 = (isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 144, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) ? ((isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 144, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 144, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_game_tournament_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 144, $this->source); })())) . "/1200/800")));
                    // line 145
                    yield "                    <article class=\"card card--tournament\">
                      <div class=\"card__media\" data-bg=\"";
                    // line 146
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentImageUrl"]) || array_key_exists("tournamentImageUrl", $context) ? $context["tournamentImageUrl"] : (function () { throw new RuntimeError('Variable "tournamentImageUrl" does not exist.', 146, $this->source); })()), "html", null, true);
                    yield "\">
                        <div class=\"card__chips\">
                          <span class=\"chip chip--status\">";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 148, $this->source); })()), "status", [], "any", false, false, false, 148), "html", null, true);
                    yield "</span>
                          <span class=\"chip chip--format\">";
                    // line 149
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 149, $this->source); })()), "format", [], "any", false, false, false, 149), "html", null, true);
                    yield "</span>
                          <span class=\"chip\">";
                    // line 150
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 150, $this->source); })()), "registrationMode", [], "any", false, false, false, 150), "html", null, true);
                    yield "</span>
                        </div>
                      </div>
                      <div class=\"card__body\">
                        <h4 class=\"card__title\">";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 154, $this->source); })()), "title", [], "any", false, false, false, 154), "html", null, true);
                    yield "</h4>
                        <p class=\"card__desc\">
                          Dates: <b>";
                    // line 156
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 156, $this->source); })()), "startDate", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 156, $this->source); })()), "startDate", [], "any", false, false, false, 156), "d/m/Y"), "html", null, true)) : ("-"));
                    yield "</b>
                          -
                          <b>";
                    // line 158
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 158, $this->source); })()), "endDate", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 158, $this->source); })()), "endDate", [], "any", false, false, false, 158), "d/m/Y"), "html", null, true)) : ("-"));
                    yield "</b>
                        </p>
                        <div class=\"card__metaRow\">
                          <span class=\"metaPill\">Participants: <b>";
                    // line 161
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "participants_count", [], "any", false, false, false, 161), "html", null, true);
                    yield "</b></span>
                          <span class=\"metaPill\">Matchs: <b>";
                    // line 162
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "finished_matches", [], "any", false, false, false, 162), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "total_matches", [], "any", false, false, false, 162), "html", null, true);
                    yield "</b></span>
                        </div>
                        <div class=\"progress\"><div class=\"progress__bar\" style=\"width: ";
                    // line 164
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "progress_percent", [], "any", false, false, false, 164), "html", null, true);
                    yield "%\"></div></div>
                        <div class=\"card__actions\">
                          <a class=\"btn btn--ghost\" href=\"";
                    // line 166
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 166, $this->source); })())]), "html", null, true);
                    yield "\">Voir detail</a>
                        </div>
                      </div>
                    </article>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                yield "                </div>
              ";
            }
            // line 173
            yield "            </section>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['statusKey'], $context['rows'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        yield "        </div>
      </section>

      ";
        // line 178
        yield from $this->load("front/partials/_footer.html.twig", 178)->unwrap()->yield($context);
        // line 179
        yield "    </section>
  </main>

  ";
        // line 182
        yield from $this->load("front/partials/_auth_modal.html.twig", 182)->unwrap()->yield($context);
        
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
        return array (  486 => 182,  481 => 179,  479 => 178,  474 => 175,  467 => 173,  463 => 171,  452 => 166,  447 => 164,  440 => 162,  436 => 161,  430 => 158,  425 => 156,  420 => 154,  413 => 150,  409 => 149,  405 => 148,  400 => 146,  397 => 145,  394 => 144,  391 => 143,  388 => 142,  385 => 141,  381 => 140,  378 => 139,  374 => 137,  372 => 136,  365 => 135,  361 => 134,  354 => 129,  352 => 128,  351 => 127,  350 => 126,  349 => 125,  348 => 123,  347 => 122,  343 => 121,  338 => 118,  336 => 117,  335 => 116,  334 => 115,  333 => 114,  332 => 112,  331 => 111,  327 => 110,  322 => 107,  320 => 106,  319 => 105,  318 => 104,  317 => 103,  316 => 101,  315 => 100,  311 => 99,  300 => 91,  292 => 86,  288 => 85,  284 => 84,  280 => 83,  271 => 77,  267 => 76,  263 => 75,  259 => 74,  250 => 68,  246 => 67,  242 => 66,  238 => 65,  234 => 64,  230 => 63,  223 => 59,  219 => 58,  215 => 57,  209 => 53,  205 => 51,  199 => 48,  195 => 47,  190 => 46,  188 => 45,  182 => 42,  178 => 41,  174 => 40,  170 => 39,  166 => 38,  162 => 37,  156 => 34,  149 => 30,  145 => 29,  142 => 28,  137 => 27,  133 => 26,  128 => 24,  123 => 22,  115 => 16,  112 => 15,  109 => 14,  107 => 13,  104 => 12,  102 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
              <div class=\"listMeta\" style=\"margin-top:6px;\">Slug SEO: {{ game.slug }}</div>
              <div class=\"badge badge--info\" style=\"margin-top:8px;\">{{ stats.active_tournaments|default(0) }} tournoi(s) actif(s)</div>
            </div>
          </div>

          <p class=\"muted\" style=\"margin-top:12px;\">{{ game.description ?? 'Aucune description disponible.' }}</p>

          <div class=\"statsRow\" style=\"margin-top:12px;\">
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.total_tournaments|default(0) }}</div><div class=\"statCard__label\">Tournois total</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.active_tournaments|default(0) }}</div><div class=\"statCard__label\">Tournois actifs</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.participants|default(0) }}</div><div class=\"statCard__label\">Participants</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.views|default(0) }}</div><div class=\"statCard__label\">Vues</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.favorites|default(0) }}</div><div class=\"statCard__label\">Favoris</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.score|default(0) }}</div><div class=\"statCard__label\">Score</div></div>
          </div>

          {% if app.user %}
            <form method=\"post\" action=\"{{ path('front_game_detail_favorite_toggle', {slug: game.slug}) }}\" style=\"margin-top:14px;\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_game_favorite_' ~ gameId) }}\" />
              <button class=\"btn btn--primary\" type=\"submit\">{{ is_favorite ? 'Retirer des favoris' : 'Ajouter aux favoris' }}</button>
            </form>
          {% else %}
            <div class=\"listMeta\" style=\"margin-top:14px;\">Connectez-vous pour ajouter ce jeu aux favoris.</div>
          {% endif %}
        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">FILTRES TOURNOIS</h3>
          <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_game_detail', {slug: game.slug}) }}\" data-auto-submit=\"1\">
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
            <a class=\"btn btn--ghost\" href=\"{{ path('front_game_detail', {slug: game.slug}) }}\">Reset</a>
          </form>
        </aside>
      </div>

      <section class=\"panel\">
        <div class=\"tabs\">
          <a
            class=\"tab {{ (active_tab|default('open')) == 'open' ? 'is-active' : '' }}\"
            href=\"{{ path('front_game_detail', {
              slug: game.slug,
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
              slug: game.slug,
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
              slug: game.slug,
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
", "front/pages/game-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\game-detail.html.twig");
    }
}
