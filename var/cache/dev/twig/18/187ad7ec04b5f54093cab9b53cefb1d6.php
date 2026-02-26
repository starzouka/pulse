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

/* front/pages/my-teams.html.twig */
class __TwigTemplate_0ae6461b4ec572184ecff91c146dfdb3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/my-teams.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/my-teams.html.twig"));

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

        yield "PULSE - Mes equipes";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Mes equipes", "hero_sub" => "Vue sociale des equipes rejointes et des invitations.", "breadcrumb_current" => "Mes equipes"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "my_teams"]));
        // line 17
        yield "
        <div class=\"socialShell\">
          <div class=\"socialStack\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 21
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                yield "                <div class=\"listItem\">
                  <span>";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                  <span class=\"badge ";
                // line 24
                yield ((($context["label"] == "error")) ? ("badge--danger") : (((($context["label"] == "info")) ? ("badge--info") : ("badge--success"))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
            <section class=\"panel\">
              <div class=\"panel__head\">
                <h3 class=\"panel__title\">EQUIPES ACTIVES</h3>
                <a class=\"btn btn--ghost\" href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams_explore");
        yield "\">Explorer</a>
              </div>

              <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
        yield "\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"teams_q\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "teams_q", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "teams_q", [], "any", false, false, false, 36), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher une equipe...\" />
                <input class=\"input\" type=\"text\" name=\"teams_region\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "teams_region", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 37, $this->source); })()), "teams_region", [], "any", false, false, false, 37), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Region\" />
                <div class=\"select\">
                  <select name=\"teams_sort\">
                    <option value=\"latest\" ";
        // line 40
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "teams_sort", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 40, $this->source); })()), "teams_sort", [], "any", false, false, false, 40), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Rejoint recemment</option>
                    <option value=\"oldest\" ";
        // line 41
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "teams_sort", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 41, $this->source); })()), "teams_sort", [], "any", false, false, false, 41), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Rejoint anciennement</option>
                    <option value=\"name\" ";
        // line 42
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "teams_sort", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 42, $this->source); })()), "teams_sort", [], "any", false, false, false, 42), "latest")) : ("latest")) == "name")) ? ("selected") : (""));
        yield ">Nom A-Z</option>
                    <option value=\"region\" ";
        // line 43
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "teams_sort", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 43, $this->source); })()), "teams_sort", [], "any", false, false, false, 43), "latest")) : ("latest")) == "region")) ? ("selected") : (""));
        yield ">Region</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
              </form>

              ";
        // line 49
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["active_team_members"]) || array_key_exists("active_team_members", $context) ? $context["active_team_members"] : (function () { throw new RuntimeError('Variable "active_team_members" does not exist.', 49, $this->source); })()))) {
            // line 50
            yield "                <div class=\"emptyState\">Vous n'avez aucune equipe active.</div>
              ";
        } else {
            // line 52
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["active_team_members"]) || array_key_exists("active_team_members", $context) ? $context["active_team_members"] : (function () { throw new RuntimeError('Variable "active_team_members" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["membership"]) {
                // line 53
                yield "                  ";
                $context["team"] = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "teamId", [], "any", false, false, false, 53);
                // line 54
                yield "                  ";
                $context["teamId"] = (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 54, $this->source); })()), "teamId", [], "any", false, false, false, 54)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 54, $this->source); })()), "teamId", [], "any", false, false, false, 54)) : (0))) : (0));
                // line 55
                yield "                  ";
                $context["captain"] = (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 55, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 55, $this->source); })()), "captainUserId", [], "any", false, false, false, 55)) : (null));
                // line 56
                yield "                  ";
                $context["logoPath"] = ((((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 56, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 56, $this->source); })()), "logoImageId", [], "any", false, false, false, 56))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 56, $this->source); })()), "logoImageId", [], "any", false, false, false, 56), "fileUrl", [], "any", false, false, false, 56)) : (""));
                // line 57
                yield "                  ";
                $context["logoUrl"] = (((($tmp = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 57, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 57, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 57, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 57, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_team_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 57, $this->source); })())) . "/200/200")));
                // line 58
                yield "
                  <article class=\"panel\">
                    <div class=\"postCard__head\">
                      <div class=\"postCard__author\">
                        <div class=\"avatarMd\" data-avatar=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logoUrl"]) || array_key_exists("logoUrl", $context) ? $context["logoUrl"] : (function () { throw new RuntimeError('Variable "logoUrl" does not exist.', 62, $this->source); })()), "html", null, true);
                yield "\"></div>
                        <div>
                          <div class=\"name\">";
                // line 64
                yield (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true)) : ("Equipe"));
                yield "</div>
                          <div class=\"sub\">
                            Role: ";
                // line 66
                yield ((((((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 66, $this->source); })()) && (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 66, $this->source); })())) && (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 66, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 66, $this->source); })()), "userId", [], "any", false, false, false, 66) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 66, $this->source); })()), "userId", [], "any", false, false, false, 66)))) ? ("Capitaine") : ("Membre"));
                yield "
                            ";
                // line 67
                if (((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 67, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 67, $this->source); })()), "region", [], "any", false, false, false, 67))) {
                    yield " · ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 67, $this->source); })()), "region", [], "any", false, false, false, 67), "html", null, true);
                }
                // line 68
                yield "                          </div>
                          <div class=\"sub\">Rejoint le ";
                // line 69
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 69), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</div>
                        </div>
                      </div>
                      <span class=\"badge badge--success\">ACTIVE</span>
                    </div>
                    <div class=\"postCard__actions\">
                      <a class=\"btn btn--ghost\" href=\"";
                // line 75
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
                yield "\">Voir equipe</a>
                      ";
                // line 76
                if (((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 76, $this->source); })()) > 0)) {
                    // line 77
                    yield "                        <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams_leave", ["teamId" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 77, $this->source); })())]), "html", null, true);
                    yield "\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("team_leave_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 78, $this->source); })()))), "html", null, true);
                    yield "\">
                          <button class=\"btn btn--ghost\" type=\"submit\">Quitter</button>
                        </form>
                      ";
                }
                // line 82
                yield "                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['membership'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "              ";
        }
        // line 86
        yield "            </section>

            ";
        // line 88
        yield from $this->load("front/partials/_pagination.html.twig", 88)->unwrap()->yield(CoreExtension::merge($context, ["pagination" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 89
($context["pagination"] ?? null), "teams", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 89, $this->source); })()), "teams", [], "any", false, false, false, 89), null)) : (null)), "route_name" => "front_my_teams", "page_param" => "teams_page"]));
        // line 93
        yield "          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">INVITATIONS</h3>
              <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
        yield "\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input type=\"hidden\" name=\"teams_q\" value=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "teams_q", [], "any", true, true, false, 99)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 99, $this->source); })()), "teams_q", [], "any", false, false, false, 99), "")) : ("")), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"teams_region\" value=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "teams_region", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 100, $this->source); })()), "teams_region", [], "any", false, false, false, 100), "")) : ("")), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"teams_sort\" value=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "teams_sort", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 101, $this->source); })()), "teams_sort", [], "any", false, false, false, 101), "latest")) : ("latest")), "html", null, true);
        yield "\">
                <input class=\"input\" type=\"search\" name=\"invites_q\" value=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "invites_q", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 102, $this->source); })()), "invites_q", [], "any", false, false, false, 102), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher une invitation...\" />
                <div class=\"select\">
                  <select name=\"invites_status\">
                    <option value=\"\" ";
        // line 105
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "invites_status", [], "any", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 105, $this->source); })()), "invites_status", [], "any", false, false, false, 105), "PENDING")) : ("PENDING")) == "")) ? ("selected") : (""));
        yield ">Tous statuts</option>
                    <option value=\"PENDING\" ";
        // line 106
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "invites_status", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 106, $this->source); })()), "invites_status", [], "any", false, false, false, 106), "PENDING")) : ("PENDING")) == "PENDING")) ? ("selected") : (""));
        yield ">PENDING</option>
                    <option value=\"ACCEPTED\" ";
        // line 107
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "invites_status", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 107, $this->source); })()), "invites_status", [], "any", false, false, false, 107), "PENDING")) : ("PENDING")) == "ACCEPTED")) ? ("selected") : (""));
        yield ">ACCEPTED</option>
                    <option value=\"REFUSED\" ";
        // line 108
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "invites_status", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 108, $this->source); })()), "invites_status", [], "any", false, false, false, 108), "PENDING")) : ("PENDING")) == "REFUSED")) ? ("selected") : (""));
        yield ">REFUSED</option>
                    <option value=\"CANCELLED\" ";
        // line 109
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "invites_status", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 109, $this->source); })()), "invites_status", [], "any", false, false, false, 109), "PENDING")) : ("PENDING")) == "CANCELLED")) ? ("selected") : (""));
        yield ">CANCELLED</option>
                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"invites_sort\">
                    <option value=\"latest\" ";
        // line 114
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "invites_sort", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 114, $this->source); })()), "invites_sort", [], "any", false, false, false, 114), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recentes</option>
                    <option value=\"oldest\" ";
        // line 115
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "invites_sort", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 115, $this->source); })()), "invites_sort", [], "any", false, false, false, 115), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciennes</option>
                    <option value=\"team\" ";
        // line 116
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "invites_sort", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 116, $this->source); })()), "invites_sort", [], "any", false, false, false, 116), "latest")) : ("latest")) == "team")) ? ("selected") : (""));
        yield ">Equipe</option>
                    <option value=\"status\" ";
        // line 117
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "invites_sort", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 117, $this->source); })()), "invites_sort", [], "any", false, false, false, 117), "latest")) : ("latest")) == "status")) ? ("selected") : (""));
        yield ">Statut</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
        yield "\">Reset</a>
              </form>

              ";
        // line 124
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["pending_team_invites"]) || array_key_exists("pending_team_invites", $context) ? $context["pending_team_invites"] : (function () { throw new RuntimeError('Variable "pending_team_invites" does not exist.', 124, $this->source); })()))) {
            // line 125
            yield "                <div class=\"emptyState\">Aucune invitation avec ces filtres.</div>
              ";
        } else {
            // line 127
            yield "                <div class=\"socialQuickList\">
                  ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pending_team_invites"]) || array_key_exists("pending_team_invites", $context) ? $context["pending_team_invites"] : (function () { throw new RuntimeError('Variable "pending_team_invites" does not exist.', 128, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["invite"]) {
                // line 129
                yield "                    ";
                $context["inviteId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "inviteId", [], "any", true, true, false, 129) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "inviteId", [], "any", false, false, false, 129)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "inviteId", [], "any", false, false, false, 129)) : (0));
                // line 130
                yield "                    ";
                $context["team"] = CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "teamId", [], "any", false, false, false, 130);
                // line 131
                yield "                    ";
                $context["invitedBy"] = CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "invitedByUserId", [], "any", false, false, false, 131);
                // line 132
                yield "
                    <article class=\"listItem\">
                      <span>
                        ";
                // line 135
                yield (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 135, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 135, $this->source); })()), "name", [], "any", false, false, false, 135), "html", null, true)) : ("Equipe"));
                yield "
                        ";
                // line 136
                if ((($tmp = (isset($context["invitedBy"]) || array_key_exists("invitedBy", $context) ? $context["invitedBy"] : (function () { throw new RuntimeError('Variable "invitedBy" does not exist.', 136, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " - invite par ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["invitedBy"] ?? null), "displayName", [], "any", true, true, false, 136) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedBy"]) || array_key_exists("invitedBy", $context) ? $context["invitedBy"] : (function () { throw new RuntimeError('Variable "invitedBy" does not exist.', 136, $this->source); })()), "displayName", [], "any", false, false, false, 136)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedBy"]) || array_key_exists("invitedBy", $context) ? $context["invitedBy"] : (function () { throw new RuntimeError('Variable "invitedBy" does not exist.', 136, $this->source); })()), "displayName", [], "any", false, false, false, 136), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedBy"]) || array_key_exists("invitedBy", $context) ? $context["invitedBy"] : (function () { throw new RuntimeError('Variable "invitedBy" does not exist.', 136, $this->source); })()), "username", [], "any", false, false, false, 136), "html", null, true)));
                }
                // line 137
                yield "                      </span>
                      <span class=\"badge\">";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "status", [], "any", false, false, false, 138), "html", null, true);
                yield "</span>
                    </article>

                    ";
                // line 141
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "message", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 142
                    yield "                      <div class=\"listItem__meta\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "message", [], "any", false, false, false, 142), "html", null, true);
                    yield "</div>
                    ";
                }
                // line 144
                yield "
                    ";
                // line 145
                if (((isset($context["inviteId"]) || array_key_exists("inviteId", $context) ? $context["inviteId"] : (function () { throw new RuntimeError('Variable "inviteId" does not exist.', 145, $this->source); })()) > 0)) {
                    // line 146
                    yield "                      <div class=\"postCard__actions\" style=\"margin-top:10px;\">
                        <form method=\"post\" action=\"";
                    // line 147
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams_invite_respond", ["id" => (isset($context["inviteId"]) || array_key_exists("inviteId", $context) ? $context["inviteId"] : (function () { throw new RuntimeError('Variable "inviteId" does not exist.', 147, $this->source); })())]), "html", null, true);
                    yield "\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("team_invite_respond_" . (isset($context["inviteId"]) || array_key_exists("inviteId", $context) ? $context["inviteId"] : (function () { throw new RuntimeError('Variable "inviteId" does not exist.', 148, $this->source); })()))), "html", null, true);
                    yield "\">
                          <input type=\"hidden\" name=\"decision\" value=\"ACCEPTED\">
                          <button class=\"btn btn--primary\" type=\"submit\">Accepter</button>
                        </form>
                        <form method=\"post\" action=\"";
                    // line 152
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams_invite_respond", ["id" => (isset($context["inviteId"]) || array_key_exists("inviteId", $context) ? $context["inviteId"] : (function () { throw new RuntimeError('Variable "inviteId" does not exist.', 152, $this->source); })())]), "html", null, true);
                    yield "\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("team_invite_respond_" . (isset($context["inviteId"]) || array_key_exists("inviteId", $context) ? $context["inviteId"] : (function () { throw new RuntimeError('Variable "inviteId" does not exist.', 153, $this->source); })()))), "html", null, true);
                    yield "\">
                          <input type=\"hidden\" name=\"decision\" value=\"REFUSED\">
                          <button class=\"btn btn--ghost\" type=\"submit\">Refuser</button>
                        </form>
                      </div>
                    ";
                }
                // line 159
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['invite'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            yield "                </div>
              ";
        }
        // line 162
        yield "            </section>

            ";
        // line 164
        yield from $this->load("front/partials/_pagination.html.twig", 164)->unwrap()->yield(CoreExtension::merge($context, ["pagination" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 165
($context["pagination"] ?? null), "invites", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 165, $this->source); })()), "invites", [], "any", false, false, false, 165), null)) : (null)), "route_name" => "front_my_teams", "page_param" => "invites_page"]));
        // line 169
        yield "
            <section class=\"panel\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_requests");
        yield "\"><span>Mes demandes</span><span class=\"listItem__meta\">Suivi</span></a>
                <a class=\"listItem\" href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams_explore");
        yield "\"><span>Trouver une equipe</span><span class=\"listItem__meta\">Explorer</span></a>
                <a class=\"listItem\" href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\"><span>Tournois ouverts</span><span class=\"listItem__meta\">Voir</span></a>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">RESUME</h3>
              <div class=\"statsRow\">
                <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "teams", [], "any", false, true, false, 182), "total_items", [], "any", true, true, false, 182)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 182, $this->source); })()), "teams", [], "any", false, false, false, 182), "total_items", [], "any", false, false, false, 182), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["active_team_members"]) || array_key_exists("active_team_members", $context) ? $context["active_team_members"] : (function () { throw new RuntimeError('Variable "active_team_members" does not exist.', 182, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["active_team_members"]) || array_key_exists("active_team_members", $context) ? $context["active_team_members"] : (function () { throw new RuntimeError('Variable "active_team_members" does not exist.', 182, $this->source); })())))), "html", null, true);
        yield "</div><div class=\"statCard__label\">Equipes actives</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "invites", [], "any", false, true, false, 183), "total_items", [], "any", true, true, false, 183)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 183, $this->source); })()), "invites", [], "any", false, false, false, 183), "total_items", [], "any", false, false, false, 183), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pending_team_invites"]) || array_key_exists("pending_team_invites", $context) ? $context["pending_team_invites"] : (function () { throw new RuntimeError('Variable "pending_team_invites" does not exist.', 183, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pending_team_invites"]) || array_key_exists("pending_team_invites", $context) ? $context["pending_team_invites"] : (function () { throw new RuntimeError('Variable "pending_team_invites" does not exist.', 183, $this->source); })())))), "html", null, true);
        yield "</div><div class=\"statCard__label\">Invitations</div></div>
              </div>
            </section>
          </aside>
        </div>
      </div>

      ";
        // line 190
        yield from $this->load("front/partials/_footer.html.twig", 190)->unwrap()->yield($context);
        // line 191
        yield "    </section>
  </main>

  ";
        // line 194
        yield from $this->load("front/partials/_auth_modal.html.twig", 194)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/my-teams.html.twig";
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
        return array (  520 => 194,  515 => 191,  513 => 190,  503 => 183,  499 => 182,  489 => 175,  485 => 174,  481 => 173,  475 => 169,  473 => 165,  472 => 164,  468 => 162,  464 => 160,  458 => 159,  449 => 153,  445 => 152,  438 => 148,  434 => 147,  431 => 146,  429 => 145,  426 => 144,  420 => 142,  418 => 141,  412 => 138,  409 => 137,  404 => 136,  400 => 135,  395 => 132,  392 => 131,  389 => 130,  386 => 129,  382 => 128,  379 => 127,  375 => 125,  373 => 124,  367 => 121,  360 => 117,  356 => 116,  352 => 115,  348 => 114,  340 => 109,  336 => 108,  332 => 107,  328 => 106,  324 => 105,  318 => 102,  314 => 101,  310 => 100,  306 => 99,  302 => 98,  295 => 93,  293 => 89,  292 => 88,  288 => 86,  285 => 85,  277 => 82,  270 => 78,  265 => 77,  263 => 76,  259 => 75,  250 => 69,  247 => 68,  242 => 67,  238 => 66,  233 => 64,  228 => 62,  222 => 58,  219 => 57,  216 => 56,  213 => 55,  210 => 54,  207 => 53,  202 => 52,  198 => 50,  196 => 49,  187 => 43,  183 => 42,  179 => 41,  175 => 40,  169 => 37,  165 => 36,  161 => 35,  155 => 32,  149 => 28,  143 => 27,  132 => 24,  128 => 23,  125 => 22,  120 => 21,  116 => 20,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Mes equipes{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Mes equipes',
    hero_sub: 'Vue sociale des equipes rejointes et des invitations.',
    breadcrumb_current: 'Mes equipes'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'my_teams' } %}

        <div class=\"socialShell\">
          <div class=\"socialStack\">
            {% for label, messages in app.flashes %}
              {% for message in messages %}
                <div class=\"listItem\">
                  <span>{{ message }}</span>
                  <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'info' ? 'badge--info' : 'badge--success') }}\">{{ label|upper }}</span>
                </div>
              {% endfor %}
            {% endfor %}

            <section class=\"panel\">
              <div class=\"panel__head\">
                <h3 class=\"panel__title\">EQUIPES ACTIVES</h3>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_teams_explore') }}\">Explorer</a>
              </div>

              <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_my_teams') }}\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"teams_q\" value=\"{{ filters.teams_q|default('') }}\" placeholder=\"Rechercher une equipe...\" />
                <input class=\"input\" type=\"text\" name=\"teams_region\" value=\"{{ filters.teams_region|default('') }}\" placeholder=\"Region\" />
                <div class=\"select\">
                  <select name=\"teams_sort\">
                    <option value=\"latest\" {{ (filters.teams_sort|default('latest')) == 'latest' ? 'selected' : '' }}>Rejoint recemment</option>
                    <option value=\"oldest\" {{ (filters.teams_sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Rejoint anciennement</option>
                    <option value=\"name\" {{ (filters.teams_sort|default('latest')) == 'name' ? 'selected' : '' }}>Nom A-Z</option>
                    <option value=\"region\" {{ (filters.teams_sort|default('latest')) == 'region' ? 'selected' : '' }}>Region</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
              </form>

              {% if active_team_members is empty %}
                <div class=\"emptyState\">Vous n'avez aucune equipe active.</div>
              {% else %}
                {% for membership in active_team_members %}
                  {% set team = membership.teamId %}
                  {% set teamId = team ? (team.teamId ?? 0) : 0 %}
                  {% set captain = team ? team.captainUserId : null %}
                  {% set logoPath = team and team.logoImageId ? team.logoImageId.fileUrl : '' %}
                  {% set logoUrl = logoPath ? (logoPath starts with 'http' ? logoPath : asset(logoPath)) : 'https://picsum.photos/seed/pulse_team_' ~ teamId ~ '/200/200' %}

                  <article class=\"panel\">
                    <div class=\"postCard__head\">
                      <div class=\"postCard__author\">
                        <div class=\"avatarMd\" data-avatar=\"{{ logoUrl }}\"></div>
                        <div>
                          <div class=\"name\">{{ team ? team.name : 'Equipe' }}</div>
                          <div class=\"sub\">
                            Role: {{ team and captain and viewer_user and captain.userId == viewer_user.userId ? 'Capitaine' : 'Membre' }}
                            {% if team and team.region %} · {{ team.region }}{% endif %}
                          </div>
                          <div class=\"sub\">Rejoint le {{ membership.joinedAt ? membership.joinedAt|date('d/m/Y') : '-' }}</div>
                        </div>
                      </div>
                      <span class=\"badge badge--success\">ACTIVE</span>
                    </div>
                    <div class=\"postCard__actions\">
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_team_detail') }}\">Voir equipe</a>
                      {% if teamId > 0 %}
                        <form method=\"post\" action=\"{{ path('front_my_teams_leave', {teamId: teamId}) }}\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('team_leave_' ~ teamId) }}\">
                          <button class=\"btn btn--ghost\" type=\"submit\">Quitter</button>
                        </form>
                      {% endif %}
                    </div>
                  </article>
                {% endfor %}
              {% endif %}
            </section>

            {% include 'front/partials/_pagination.html.twig' with {
              pagination: pagination.teams|default(null),
              route_name: 'front_my_teams',
              page_param: 'teams_page'
            } %}
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">INVITATIONS</h3>
              <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_my_teams') }}\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input type=\"hidden\" name=\"teams_q\" value=\"{{ filters.teams_q|default('') }}\">
                <input type=\"hidden\" name=\"teams_region\" value=\"{{ filters.teams_region|default('') }}\">
                <input type=\"hidden\" name=\"teams_sort\" value=\"{{ filters.teams_sort|default('latest') }}\">
                <input class=\"input\" type=\"search\" name=\"invites_q\" value=\"{{ filters.invites_q|default('') }}\" placeholder=\"Rechercher une invitation...\" />
                <div class=\"select\">
                  <select name=\"invites_status\">
                    <option value=\"\" {{ (filters.invites_status|default('PENDING')) == '' ? 'selected' : '' }}>Tous statuts</option>
                    <option value=\"PENDING\" {{ (filters.invites_status|default('PENDING')) == 'PENDING' ? 'selected' : '' }}>PENDING</option>
                    <option value=\"ACCEPTED\" {{ (filters.invites_status|default('PENDING')) == 'ACCEPTED' ? 'selected' : '' }}>ACCEPTED</option>
                    <option value=\"REFUSED\" {{ (filters.invites_status|default('PENDING')) == 'REFUSED' ? 'selected' : '' }}>REFUSED</option>
                    <option value=\"CANCELLED\" {{ (filters.invites_status|default('PENDING')) == 'CANCELLED' ? 'selected' : '' }}>CANCELLED</option>
                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"invites_sort\">
                    <option value=\"latest\" {{ (filters.invites_sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recentes</option>
                    <option value=\"oldest\" {{ (filters.invites_sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciennes</option>
                    <option value=\"team\" {{ (filters.invites_sort|default('latest')) == 'team' ? 'selected' : '' }}>Equipe</option>
                    <option value=\"status\" {{ (filters.invites_sort|default('latest')) == 'status' ? 'selected' : '' }}>Statut</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_my_teams') }}\">Reset</a>
              </form>

              {% if pending_team_invites is empty %}
                <div class=\"emptyState\">Aucune invitation avec ces filtres.</div>
              {% else %}
                <div class=\"socialQuickList\">
                  {% for invite in pending_team_invites %}
                    {% set inviteId = invite.inviteId ?? 0 %}
                    {% set team = invite.teamId %}
                    {% set invitedBy = invite.invitedByUserId %}

                    <article class=\"listItem\">
                      <span>
                        {{ team ? team.name : 'Equipe' }}
                        {% if invitedBy %} - invite par {{ invitedBy.displayName ?? invitedBy.username }}{% endif %}
                      </span>
                      <span class=\"badge\">{{ invite.status }}</span>
                    </article>

                    {% if invite.message %}
                      <div class=\"listItem__meta\">{{ invite.message }}</div>
                    {% endif %}

                    {% if inviteId > 0 %}
                      <div class=\"postCard__actions\" style=\"margin-top:10px;\">
                        <form method=\"post\" action=\"{{ path('front_my_teams_invite_respond', {id: inviteId}) }}\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('team_invite_respond_' ~ inviteId) }}\">
                          <input type=\"hidden\" name=\"decision\" value=\"ACCEPTED\">
                          <button class=\"btn btn--primary\" type=\"submit\">Accepter</button>
                        </form>
                        <form method=\"post\" action=\"{{ path('front_my_teams_invite_respond', {id: inviteId}) }}\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('team_invite_respond_' ~ inviteId) }}\">
                          <input type=\"hidden\" name=\"decision\" value=\"REFUSED\">
                          <button class=\"btn btn--ghost\" type=\"submit\">Refuser</button>
                        </form>
                      </div>
                    {% endif %}
                  {% endfor %}
                </div>
              {% endif %}
            </section>

            {% include 'front/partials/_pagination.html.twig' with {
              pagination: pagination.invites|default(null),
              route_name: 'front_my_teams',
              page_param: 'invites_page'
            } %}

            <section class=\"panel\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"{{ path('front_my_requests') }}\"><span>Mes demandes</span><span class=\"listItem__meta\">Suivi</span></a>
                <a class=\"listItem\" href=\"{{ path('front_teams_explore') }}\"><span>Trouver une equipe</span><span class=\"listItem__meta\">Explorer</span></a>
                <a class=\"listItem\" href=\"{{ path('front_tournaments') }}\"><span>Tournois ouverts</span><span class=\"listItem__meta\">Voir</span></a>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">RESUME</h3>
              <div class=\"statsRow\">
                <div class=\"statCard\"><div class=\"statCard__value\">{{ pagination.teams.total_items|default(active_team_members|length) }}</div><div class=\"statCard__label\">Equipes actives</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">{{ pagination.invites.total_items|default(pending_team_invites|length) }}</div><div class=\"statCard__label\">Invitations</div></div>
              </div>
            </section>
          </aside>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/my-teams.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\my-teams.html.twig");
    }
}
