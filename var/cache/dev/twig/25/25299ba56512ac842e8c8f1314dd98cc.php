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

/* front/pages/teams.html.twig */
class __TwigTemplate_473d4fa4d107dd98b2625bccb8d60470 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/teams.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/teams.html.twig"));

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

        yield "PULSE - Catalogue des equipes";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "EQUIPES", "hero_title" => "Catalogue des equipes", "hero_sub" => "Recherche, filtres et tri directement depuis la base de donnees.", "breadcrumb_current" => "Catalogue des equipes"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des equipes</h1>
          <p>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "total_items", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "total_items", [], "any", false, false, false, 18), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 18, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 18, $this->source); })())))), "html", null, true);
        yield " equipe(s) trouvee(s) avec les filtres en cours.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams");
        yield "\">Reinitialiser</a>
          <a class=\"btn btn--ghost\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\">Voir les tournois</a>
        </div>
      </div>

      <section class=\"panel\">
        <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams");
        yield "\" data-auto-submit=\"1\">
          <input
            class=\"input\"
            type=\"search\"
            name=\"q\"
            value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 32, $this->source); })()), "q", [], "any", false, false, false, 32), "")) : ("")), "html", null, true);
        yield "\"
            placeholder=\"Rechercher une equipe...\"
          />

          <div class=\"select\">
            <select name=\"region\">
              <option value=\"\">Toutes regions</option>
              ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new RuntimeError('Variable "regions" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 40
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["region"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "region", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 40, $this->source); })()), "region", [], "any", false, false, false, 40), "")) : ("")) == $context["region"])) ? ("selected") : (""));
            yield ">
                  ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["region"], "html", null, true);
            yield "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['region'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "            </select>
          </div>

          <div class=\"select\">
            <select name=\"sort\">
              <option value=\"latest\" ";
        // line 49
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 49, $this->source); })()), "sort", [], "any", false, false, false, 49), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recentes</option>
              <option value=\"oldest\" ";
        // line 50
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 50, $this->source); })()), "sort", [], "any", false, false, false, 50), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciennes</option>
              <option value=\"name\" ";
        // line 51
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "sort", [], "any", false, false, false, 51), "latest")) : ("latest")) == "name")) ? ("selected") : (""));
        yield ">Nom A-Z</option>
              <option value=\"region\" ";
        // line 52
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 52, $this->source); })()), "sort", [], "any", false, false, false, 52), "latest")) : ("latest")) == "region")) ? ("selected") : (""));
        yield ">Region</option>
              <option value=\"popular\" ";
        // line 53
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 53, $this->source); })()), "sort", [], "any", false, false, false, 53), "latest")) : ("latest")) == "popular")) ? ("selected") : (""));
        yield ">Popularite</option>
            </select>
          </div>

          <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
            <input type=\"checkbox\" name=\"products\" value=\"1\" ";
        // line 58
        yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "products", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 58, $this->source); })()), "products", [], "any", false, false, false, 58), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
            Avec produits
          </label>

          <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
            <input type=\"checkbox\" name=\"active_tournaments\" value=\"1\" ";
        // line 63
        yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active_tournaments", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 63, $this->source); })()), "active_tournaments", [], "any", false, false, false, 63), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
            Actives en tournois
          </label>

          <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
          <a class=\"btn btn--ghost\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams");
        yield "\">Reset</a>
        </form>
      </section>

      <section class=\"cardsGrid\">
        ";
        // line 73
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 73, $this->source); })()))) {
            // line 74
            yield "          <div class=\"panel emptyState\" style=\"grid-column: 1 / -1;\">
            Aucune equipe ne correspond aux filtres.
          </div>
        ";
        } else {
            // line 78
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 79
                yield "            ";
                $context["teamId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", true, true, false, 79) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 79)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 79)) : (0));
                // line 80
                yield "            ";
                $context["logoPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "logoImageId", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["team"], "logoImageId", [], "any", false, false, false, 80), "fileUrl", [], "any", false, false, false, 80)) : (""));
                // line 81
                yield "            ";
                if (((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 81, $this->source); })()) && (is_string($_v0 = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 81, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1)))) {
                    // line 82
                    yield "              ";
                    $context["logoUrl"] = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 82, $this->source); })());
                    // line 83
                    yield "              ";
                    $context["bannerUrl"] = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 83, $this->source); })());
                    // line 84
                    yield "              ";
                    $context["thumbnailUrl"] = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 84, $this->source); })());
                    // line 85
                    yield "            ";
                } elseif ((($tmp = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 85, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 86
                    yield "              ";
                    $context["logoUrl"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 86, $this->source); })())), "team_logo");
                    // line 87
                    yield "              ";
                    $context["bannerUrl"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 87, $this->source); })())), "team_banner");
                    // line 88
                    yield "              ";
                    $context["thumbnailUrl"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 88, $this->source); })())), "team_thumbnail");
                    // line 89
                    yield "            ";
                } else {
                    // line 90
                    yield "              ";
                    $context["logoUrl"] = (("https://picsum.photos/seed/pulse_team_logo_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 90, $this->source); })())) . "/600/600");
                    // line 91
                    yield "              ";
                    $context["bannerUrl"] = (("https://picsum.photos/seed/pulse_team_banner_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 91, $this->source); })())) . "/1200/800");
                    // line 92
                    yield "              ";
                    $context["thumbnailUrl"] = (("https://picsum.photos/seed/pulse_team_thumb_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 92, $this->source); })())) . "/96/96");
                    // line 93
                    yield "            ";
                }
                // line 94
                yield "            ";
                $context["membersCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["members_count_by_team_id"] ?? null), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 94, $this->source); })()), [], "array", true, true, false, 94)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["members_count_by_team_id"]) || array_key_exists("members_count_by_team_id", $context) ? $context["members_count_by_team_id"] : (function () { throw new RuntimeError('Variable "members_count_by_team_id" does not exist.', 94, $this->source); })()), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 94, $this->source); })()), [], "array", false, false, false, 94), 0)) : (0));
                // line 95
                yield "            ";
                $context["productsCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["products_count_by_team_id"] ?? null), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 95, $this->source); })()), [], "array", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["products_count_by_team_id"]) || array_key_exists("products_count_by_team_id", $context) ? $context["products_count_by_team_id"] : (function () { throw new RuntimeError('Variable "products_count_by_team_id" does not exist.', 95, $this->source); })()), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 95, $this->source); })()), [], "array", false, false, false, 95), 0)) : (0));
                // line 96
                yield "            ";
                $context["tournamentsCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["active_tournaments_count_by_team_id"] ?? null), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 96, $this->source); })()), [], "array", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_tournaments_count_by_team_id"]) || array_key_exists("active_tournaments_count_by_team_id", $context) ? $context["active_tournaments_count_by_team_id"] : (function () { throw new RuntimeError('Variable "active_tournaments_count_by_team_id" does not exist.', 96, $this->source); })()), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 96, $this->source); })()), [], "array", false, false, false, 96), 0)) : (0));
                // line 97
                yield "            ";
                $context["captain"] = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "captainUserId", [], "any", false, false, false, 97);
                // line 98
                yield "
            <article class=\"card card--team\">
              <div class=\"card__media\" data-bg=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bannerUrl"]) || array_key_exists("bannerUrl", $context) ? $context["bannerUrl"] : (function () { throw new RuntimeError('Variable "bannerUrl" does not exist.', 100, $this->source); })()), "html", null, true);
                yield "\">
                <div class=\"card__chips\">
                  <span class=\"chip chip--region\">";
                // line 102
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 102), "html", null, true)) : ("Region -"));
                yield "</span>
                  <span class=\"chip\">Membres: ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["membersCount"]) || array_key_exists("membersCount", $context) ? $context["membersCount"] : (function () { throw new RuntimeError('Variable "membersCount" does not exist.', 103, $this->source); })()), "html", null, true);
                yield "</span>
                  <span class=\"chip\">Tournois actifs: ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentsCount"]) || array_key_exists("tournamentsCount", $context) ? $context["tournamentsCount"] : (function () { throw new RuntimeError('Variable "tournamentsCount" does not exist.', 104, $this->source); })()), "html", null, true);
                yield "</span>
                </div>
              </div>

              <div class=\"card__body\">
                <h4 class=\"card__title\">";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 109), "html", null, true);
                yield "</h4>
                <p class=\"card__desc\">
                  ";
                // line 111
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "description", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "description", [], "any", false, false, false, 111), 0, 95) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "description", [], "any", false, false, false, 111)) > 95)) ? ("...") : (""))), "html", null, true)) : ("Equipe e-sport active sur PULSE."));
                yield "
                </p>

                <div class=\"avatarRow\">
                  <div class=\"avatar\" data-avatar=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["thumbnailUrl"]) || array_key_exists("thumbnailUrl", $context) ? $context["thumbnailUrl"] : (function () { throw new RuntimeError('Variable "thumbnailUrl" does not exist.', 115, $this->source); })()), "html", null, true);
                yield "\" aria-hidden=\"true\"></div>
                  <div class=\"avatarText\">
                    <div class=\"name\">";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 117), "html", null, true);
                yield "</div>
                    <div class=\"sub\">
                      Capitaine: ";
                // line 119
                yield (((($tmp = (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 119, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 119, $this->source); })()), "displayName", [], "any", false, false, false, 119)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 119, $this->source); })()), "displayName", [], "any", false, false, false, 119), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 119, $this->source); })()), "username", [], "any", false, false, false, 119), "html", null, true)))) : ("-"));
                yield " | Produits: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["productsCount"]) || array_key_exists("productsCount", $context) ? $context["productsCount"] : (function () { throw new RuntimeError('Variable "productsCount" does not exist.', 119, $this->source); })()), "html", null, true);
                yield "
                    </div>
                  </div>
                </div>

                <div class=\"card__actions\">
                  <a class=\"btn btn--ghost\" href=\"";
                // line 125
                yield ((((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 125, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 125, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams")));
                yield "\">Detail equipe</a>
                  <a class=\"btn btn--primary\" href=\"";
                // line 126
                yield ((((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 126, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop", ["team" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 126, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop")));
                yield "\">Boutique equipe</a>
                </div>
              </div>
            </article>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "        ";
        }
        // line 132
        yield "      </section>

      ";
        // line 134
        yield from $this->load("front/partials/_pagination.html.twig", 134)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 135
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 135, $this->source); })()), "route_name" => "front_teams"]));
        // line 138
        yield "
      ";
        // line 139
        yield from $this->load("front/partials/_footer.html.twig", 139)->unwrap()->yield($context);
        // line 140
        yield "    </section>
  </main>

  ";
        // line 143
        yield from $this->load("front/partials/_auth_modal.html.twig", 143)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/teams.html.twig";
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
        return array (  385 => 143,  380 => 140,  378 => 139,  375 => 138,  373 => 135,  372 => 134,  368 => 132,  365 => 131,  354 => 126,  350 => 125,  339 => 119,  334 => 117,  329 => 115,  322 => 111,  317 => 109,  309 => 104,  305 => 103,  301 => 102,  296 => 100,  292 => 98,  289 => 97,  286 => 96,  283 => 95,  280 => 94,  277 => 93,  274 => 92,  271 => 91,  268 => 90,  265 => 89,  262 => 88,  259 => 87,  256 => 86,  253 => 85,  250 => 84,  247 => 83,  244 => 82,  241 => 81,  238 => 80,  235 => 79,  230 => 78,  224 => 74,  222 => 73,  214 => 68,  206 => 63,  198 => 58,  190 => 53,  186 => 52,  182 => 51,  178 => 50,  174 => 49,  167 => 44,  158 => 41,  151 => 40,  147 => 39,  137 => 32,  129 => 27,  121 => 22,  117 => 21,  111 => 18,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Catalogue des equipes{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'EQUIPES',
    hero_title: 'Catalogue des equipes',
    hero_sub: 'Recherche, filtres et tri directement depuis la base de donnees.',
    breadcrumb_current: 'Catalogue des equipes'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des equipes</h1>
          <p>{{ pagination.total_items|default(teams|length) }} equipe(s) trouvee(s) avec les filtres en cours.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_teams') }}\">Reinitialiser</a>
          <a class=\"btn btn--ghost\" href=\"{{ path('front_tournaments') }}\">Voir les tournois</a>
        </div>
      </div>

      <section class=\"panel\">
        <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_teams') }}\" data-auto-submit=\"1\">
          <input
            class=\"input\"
            type=\"search\"
            name=\"q\"
            value=\"{{ filters.q|default('') }}\"
            placeholder=\"Rechercher une equipe...\"
          />

          <div class=\"select\">
            <select name=\"region\">
              <option value=\"\">Toutes regions</option>
              {% for region in regions %}
                <option value=\"{{ region }}\" {{ (filters.region|default('')) == region ? 'selected' : '' }}>
                  {{ region }}
                </option>
              {% endfor %}
            </select>
          </div>

          <div class=\"select\">
            <select name=\"sort\">
              <option value=\"latest\" {{ (filters.sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recentes</option>
              <option value=\"oldest\" {{ (filters.sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciennes</option>
              <option value=\"name\" {{ (filters.sort|default('latest')) == 'name' ? 'selected' : '' }}>Nom A-Z</option>
              <option value=\"region\" {{ (filters.sort|default('latest')) == 'region' ? 'selected' : '' }}>Region</option>
              <option value=\"popular\" {{ (filters.sort|default('latest')) == 'popular' ? 'selected' : '' }}>Popularite</option>
            </select>
          </div>

          <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
            <input type=\"checkbox\" name=\"products\" value=\"1\" {{ filters.products|default(false) ? 'checked' : '' }}>
            Avec produits
          </label>

          <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
            <input type=\"checkbox\" name=\"active_tournaments\" value=\"1\" {{ filters.active_tournaments|default(false) ? 'checked' : '' }}>
            Actives en tournois
          </label>

          <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
          <a class=\"btn btn--ghost\" href=\"{{ path('front_teams') }}\">Reset</a>
        </form>
      </section>

      <section class=\"cardsGrid\">
        {% if teams is empty %}
          <div class=\"panel emptyState\" style=\"grid-column: 1 / -1;\">
            Aucune equipe ne correspond aux filtres.
          </div>
        {% else %}
          {% for team in teams %}
            {% set teamId = team.teamId ?? 0 %}
            {% set logoPath = team.logoImageId ? team.logoImageId.fileUrl : '' %}
            {% if logoPath and (logoPath starts with 'http') %}
              {% set logoUrl = logoPath %}
              {% set bannerUrl = logoPath %}
              {% set thumbnailUrl = logoPath %}
            {% elseif logoPath %}
              {% set logoUrl = asset(logoPath)|imagine_filter('team_logo') %}
              {% set bannerUrl = asset(logoPath)|imagine_filter('team_banner') %}
              {% set thumbnailUrl = asset(logoPath)|imagine_filter('team_thumbnail') %}
            {% else %}
              {% set logoUrl = 'https://picsum.photos/seed/pulse_team_logo_' ~ teamId ~ '/600/600' %}
              {% set bannerUrl = 'https://picsum.photos/seed/pulse_team_banner_' ~ teamId ~ '/1200/800' %}
              {% set thumbnailUrl = 'https://picsum.photos/seed/pulse_team_thumb_' ~ teamId ~ '/96/96' %}
            {% endif %}
            {% set membersCount = members_count_by_team_id[teamId]|default(0) %}
            {% set productsCount = products_count_by_team_id[teamId]|default(0) %}
            {% set tournamentsCount = active_tournaments_count_by_team_id[teamId]|default(0) %}
            {% set captain = team.captainUserId %}

            <article class=\"card card--team\">
              <div class=\"card__media\" data-bg=\"{{ bannerUrl }}\">
                <div class=\"card__chips\">
                  <span class=\"chip chip--region\">{{ team.region ?: 'Region -' }}</span>
                  <span class=\"chip\">Membres: {{ membersCount }}</span>
                  <span class=\"chip\">Tournois actifs: {{ tournamentsCount }}</span>
                </div>
              </div>

              <div class=\"card__body\">
                <h4 class=\"card__title\">{{ team.name }}</h4>
                <p class=\"card__desc\">
                  {{ team.description ? team.description|slice(0, 95) ~ (team.description|length > 95 ? '...' : '') : 'Equipe e-sport active sur PULSE.' }}
                </p>

                <div class=\"avatarRow\">
                  <div class=\"avatar\" data-avatar=\"{{ thumbnailUrl }}\" aria-hidden=\"true\"></div>
                  <div class=\"avatarText\">
                    <div class=\"name\">{{ team.name }}</div>
                    <div class=\"sub\">
                      Capitaine: {{ captain ? (captain.displayName ?: captain.username) : '-' }} | Produits: {{ productsCount }}
                    </div>
                  </div>
                </div>

                <div class=\"card__actions\">
                  <a class=\"btn btn--ghost\" href=\"{{ teamId > 0 ? path('front_team_detail', {id: teamId}) : path('front_teams') }}\">Detail equipe</a>
                  <a class=\"btn btn--primary\" href=\"{{ teamId > 0 ? path('front_shop', {team: teamId}) : path('front_shop') }}\">Boutique equipe</a>
                </div>
              </div>
            </article>
          {% endfor %}
        {% endif %}
      </section>

      {% include 'front/partials/_pagination.html.twig' with {
        pagination: pagination,
        route_name: 'front_teams'
      } %}

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/teams.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\teams.html.twig");
    }
}
