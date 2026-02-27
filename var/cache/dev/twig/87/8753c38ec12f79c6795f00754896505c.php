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

/* front/pages/games.html.twig */
class __TwigTemplate_f26116bee89467c86ab4e98cef98bfc8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/games.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/games.html.twig"));

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

        yield "PULSE - Catalogue des jeux";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JEUX", "hero_title" => "Catalogue des jeux", "hero_sub" => "Recherche, filtres et tri alimentes depuis la base de donnees.", "breadcrumb_current" => "Catalogue des jeux"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des jeux</h1>
          <p>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "total_items", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "total_items", [], "any", false, false, false, 18), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 18, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 18, $this->source); })())))), "html", null, true);
        yield " jeu(x) trouve(s) avec les filtres en cours.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\">Voir les tournois</a>
          <a class=\"btn btn--ghost\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_games");
        yield "\">Reinitialiser</a>
        </div>
      </div>

      <section class=\"panel\">
        <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_games");
        yield "\" data-auto-submit=\"1\">
          <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 28, $this->source); })()), "q", [], "any", false, false, false, 28), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un jeu...\" />

          <div class=\"select\">
            <select name=\"category\">
              <option value=\"\">Toutes categories</option>
              ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 34
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 34), "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "category", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 34, $this->source); })()), "category", [], "any", false, false, false, 34), null)) : (null)) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 34))) ? ("selected") : (""));
            yield ">
                  ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35), "html", null, true);
            yield "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            </select>
          </div>

          <div class=\"select\">
            <select name=\"publisher\">
              <option value=\"\">Tous publishers</option>
              ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publishers"]) || array_key_exists("publishers", $context) ? $context["publishers"] : (function () { throw new RuntimeError('Variable "publishers" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["publisher"]) {
            // line 45
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["publisher"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "publisher", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 45, $this->source); })()), "publisher", [], "any", false, false, false, 45), "")) : ("")) == $context["publisher"])) ? ("selected") : (""));
            yield ">
                  ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["publisher"], "html", null, true);
            yield "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publisher'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "            </select>
          </div>

          <div class=\"select\">
            <select name=\"sort\">
              <option value=\"name\" ";
        // line 54
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 54, $this->source); })()), "sort", [], "any", false, false, false, 54), "name")) : ("name")) == "name")) ? ("selected") : (""));
        yield ">Nom A-Z</option>
              <option value=\"popular\" ";
        // line 55
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })()), "sort", [], "any", false, false, false, 55), "name")) : ("name")) == "popular")) ? ("selected") : (""));
        yield ">Popularite</option>
              <option value=\"latest\" ";
        // line 56
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 56, $this->source); })()), "sort", [], "any", false, false, false, 56), "name")) : ("name")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
              <option value=\"publisher\" ";
        // line 57
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 57, $this->source); })()), "sort", [], "any", false, false, false, 57), "name")) : ("name")) == "publisher")) ? ("selected") : (""));
        yield ">Publisher</option>
              <option value=\"category\" ";
        // line 58
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 58, $this->source); })()), "sort", [], "any", false, false, false, 58), "name")) : ("name")) == "category")) ? ("selected") : (""));
        yield ">Categorie</option>
            </select>
          </div>

          <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
            <input type=\"checkbox\" name=\"active\" value=\"1\" ";
        // line 63
        yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 63, $this->source); })()), "active", [], "any", false, false, false, 63), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
            Tournois actifs
          </label>

          <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
          <a class=\"btn btn--ghost\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_games");
        yield "\">Reset</a>
        </form>
      </section>

      <section class=\"cardsGrid\">
        ";
        // line 73
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 73, $this->source); })()))) {
            // line 74
            yield "          <div class=\"panel emptyState\" style=\"grid-column: 1 / -1;\">
            Aucun jeu ne correspond aux filtres.
          </div>
        ";
        } else {
            // line 78
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
                // line 79
                yield "            ";
                $context["gameId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", true, true, false, 79) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 79)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 79)) : (0));
                // line 80
                yield "            ";
                $context["imagePath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["game"], "coverImageId", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["game"], "coverImageId", [], "any", false, false, false, 80), "fileUrl", [], "any", false, false, false, 80)) : (""));
                // line 81
                yield "            ";
                $context["imageUrl"] = (((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 81, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 81, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 81, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_game_" . (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 81, $this->source); })())) . "/1200/800")));
                // line 82
                yield "            ";
                $context["activeCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["active_tournaments_count_by_game_id"] ?? null), (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 82, $this->source); })()), [], "array", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_tournaments_count_by_game_id"]) || array_key_exists("active_tournaments_count_by_game_id", $context) ? $context["active_tournaments_count_by_game_id"] : (function () { throw new RuntimeError('Variable "active_tournaments_count_by_game_id" does not exist.', 82, $this->source); })()), (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 82, $this->source); })()), [], "array", false, false, false, 82), 0)) : (0));
                // line 83
                yield "            ";
                $context["totalCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["tournaments_count_by_game_id"] ?? null), (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 83, $this->source); })()), [], "array", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournaments_count_by_game_id"]) || array_key_exists("tournaments_count_by_game_id", $context) ? $context["tournaments_count_by_game_id"] : (function () { throw new RuntimeError('Variable "tournaments_count_by_game_id" does not exist.', 83, $this->source); })()), (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 83, $this->source); })()), [], "array", false, false, false, 83), 0)) : (0));
                // line 84
                yield "
            <article class=\"card card--game\">
              <div class=\"card__media\" data-bg=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 86, $this->source); })()), "html", null, true);
                yield "\">
                <div class=\"card__chips\">
                  <span class=\"chip chip--category\">";
                // line 88
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["game"], "categoryId", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["game"], "categoryId", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true)) : ("Categorie"));
                yield "</span>
                  <span class=\"chip\">";
                // line 89
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["game"], "publisher", [], "any", false, false, false, 89)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "publisher", [], "any", false, false, false, 89), "html", null, true)) : ("Publisher -"));
                yield "</span>
                  <span class=\"chip\">Tournois actifs: ";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 90, $this->source); })()), "html", null, true);
                yield "</span>
                </div>
              </div>
              <div class=\"card__body\">
                <h4 class=\"card__title\">";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 94), "html", null, true);
                yield "</h4>
                <p class=\"card__desc\">
                  ";
                // line 96
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["game"], "description", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["game"], "description", [], "any", false, false, false, 96), 0, 95) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["game"], "description", [], "any", false, false, false, 96)) > 95)) ? ("...") : (""))), "html", null, true)) : ("Description non disponible."));
                yield "
                </p>
                <div class=\"card__metaRow\">
                  <span class=\"metaPill\">Total tournois: <b>";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 99, $this->source); })()), "html", null, true);
                yield "</b></span>
                  <span class=\"metaPill\">Actifs: <b>";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 100, $this->source); })()), "html", null, true);
                yield "</b></span>
                </div>
                <div class=\"card__actions\">
                  <a class=\"btn btn--ghost\" href=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["id" => (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 103, $this->source); })())]), "html", null, true);
                yield "\">Detail</a>
                  <a class=\"btn btn--primary\" href=\"";
                // line 104
                yield ((((isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 104, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments", ["game" => (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 104, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments")));
                yield "\">Tournois</a>
                </div>
              </div>
            </article>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['game'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            yield "        ";
        }
        // line 110
        yield "      </section>

      ";
        // line 112
        yield from $this->load("front/partials/_pagination.html.twig", 112)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 113
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 113, $this->source); })()), "route_name" => "front_games"]));
        // line 116
        yield "
      ";
        // line 117
        yield from $this->load("front/partials/_footer.html.twig", 117)->unwrap()->yield($context);
        // line 118
        yield "    </section>
  </main>

  ";
        // line 121
        yield from $this->load("front/partials/_auth_modal.html.twig", 121)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/games.html.twig";
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
        return array (  344 => 121,  339 => 118,  337 => 117,  334 => 116,  332 => 113,  331 => 112,  327 => 110,  324 => 109,  313 => 104,  309 => 103,  303 => 100,  299 => 99,  293 => 96,  288 => 94,  281 => 90,  277 => 89,  273 => 88,  268 => 86,  264 => 84,  261 => 83,  258 => 82,  255 => 81,  252 => 80,  249 => 79,  244 => 78,  238 => 74,  236 => 73,  228 => 68,  220 => 63,  212 => 58,  208 => 57,  204 => 56,  200 => 55,  196 => 54,  189 => 49,  180 => 46,  173 => 45,  169 => 44,  161 => 38,  152 => 35,  145 => 34,  141 => 33,  133 => 28,  129 => 27,  121 => 22,  117 => 21,  111 => 18,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Catalogue des jeux{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JEUX',
    hero_title: 'Catalogue des jeux',
    hero_sub: 'Recherche, filtres et tri alimentes depuis la base de donnees.',
    breadcrumb_current: 'Catalogue des jeux'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des jeux</h1>
          <p>{{ pagination.total_items|default(games|length) }} jeu(x) trouve(s) avec les filtres en cours.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_tournaments') }}\">Voir les tournois</a>
          <a class=\"btn btn--ghost\" href=\"{{ path('front_games') }}\">Reinitialiser</a>
        </div>
      </div>

      <section class=\"panel\">
        <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_games') }}\" data-auto-submit=\"1\">
          <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Rechercher un jeu...\" />

          <div class=\"select\">
            <select name=\"category\">
              <option value=\"\">Toutes categories</option>
              {% for category in categories %}
                <option value=\"{{ category.categoryId }}\" {{ (filters.category|default(null)) == category.categoryId ? 'selected' : '' }}>
                  {{ category.name }}
                </option>
              {% endfor %}
            </select>
          </div>

          <div class=\"select\">
            <select name=\"publisher\">
              <option value=\"\">Tous publishers</option>
              {% for publisher in publishers %}
                <option value=\"{{ publisher }}\" {{ (filters.publisher|default('')) == publisher ? 'selected' : '' }}>
                  {{ publisher }}
                </option>
              {% endfor %}
            </select>
          </div>

          <div class=\"select\">
            <select name=\"sort\">
              <option value=\"name\" {{ (filters.sort|default('name')) == 'name' ? 'selected' : '' }}>Nom A-Z</option>
              <option value=\"popular\" {{ (filters.sort|default('name')) == 'popular' ? 'selected' : '' }}>Popularite</option>
              <option value=\"latest\" {{ (filters.sort|default('name')) == 'latest' ? 'selected' : '' }}>Plus recents</option>
              <option value=\"publisher\" {{ (filters.sort|default('name')) == 'publisher' ? 'selected' : '' }}>Publisher</option>
              <option value=\"category\" {{ (filters.sort|default('name')) == 'category' ? 'selected' : '' }}>Categorie</option>
            </select>
          </div>

          <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
            <input type=\"checkbox\" name=\"active\" value=\"1\" {{ filters.active|default(false) ? 'checked' : '' }}>
            Tournois actifs
          </label>

          <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
          <a class=\"btn btn--ghost\" href=\"{{ path('front_games') }}\">Reset</a>
        </form>
      </section>

      <section class=\"cardsGrid\">
        {% if games is empty %}
          <div class=\"panel emptyState\" style=\"grid-column: 1 / -1;\">
            Aucun jeu ne correspond aux filtres.
          </div>
        {% else %}
          {% for game in games %}
            {% set gameId = game.gameId ?? 0 %}
            {% set imagePath = game.coverImageId ? game.coverImageId.fileUrl : '' %}
            {% set imageUrl = imagePath ? (imagePath starts with 'http' ? imagePath : asset(imagePath)) : 'https://picsum.photos/seed/pulse_game_' ~ gameId ~ '/1200/800' %}
            {% set activeCount = active_tournaments_count_by_game_id[gameId]|default(0) %}
            {% set totalCount = tournaments_count_by_game_id[gameId]|default(0) %}

            <article class=\"card card--game\">
              <div class=\"card__media\" data-bg=\"{{ imageUrl }}\">
                <div class=\"card__chips\">
                  <span class=\"chip chip--category\">{{ game.categoryId ? game.categoryId.name : 'Categorie' }}</span>
                  <span class=\"chip\">{{ game.publisher ?: 'Publisher -' }}</span>
                  <span class=\"chip\">Tournois actifs: {{ activeCount }}</span>
                </div>
              </div>
              <div class=\"card__body\">
                <h4 class=\"card__title\">{{ game.name }}</h4>
                <p class=\"card__desc\">
                  {{ game.description ? game.description|slice(0, 95) ~ (game.description|length > 95 ? '...' : '') : 'Description non disponible.' }}
                </p>
                <div class=\"card__metaRow\">
                  <span class=\"metaPill\">Total tournois: <b>{{ totalCount }}</b></span>
                  <span class=\"metaPill\">Actifs: <b>{{ activeCount }}</b></span>
                </div>
                <div class=\"card__actions\">
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_game_detail', {id: gameId}) }}\">Detail</a>
                  <a class=\"btn btn--primary\" href=\"{{ gameId > 0 ? path('front_tournaments', {game: gameId}) : path('front_tournaments') }}\">Tournois</a>
                </div>
              </div>
            </article>
          {% endfor %}
        {% endif %}
      </section>

      {% include 'front/partials/_pagination.html.twig' with {
        pagination: pagination,
        route_name: 'front_games'
      } %}

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/games.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\games.html.twig");
    }
}
