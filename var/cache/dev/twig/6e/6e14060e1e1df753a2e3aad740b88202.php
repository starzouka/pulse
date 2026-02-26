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

/* front/pages/team-detail.html.twig */
class __TwigTemplate_6ea252ea4271cb9d1ef603b7d9963aff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/team-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/team-detail.html.twig"));

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

        yield "PULSE - Detail equipe";
        
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
        $context["teamId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 6, $this->source); })()), "teamId", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 6, $this->source); })()), "teamId", [], "any", false, false, false, 6)) : (0));
        // line 7
        yield "  ";
        $context["captain"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 7, $this->source); })()), "captainUserId", [], "any", false, false, false, 7);
        // line 8
        yield "  ";
        $context["captainId"] = (((($tmp = (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 8, $this->source); })()), "userId", [], "any", false, false, false, 8)) : (null));
        // line 9
        yield "  ";
        $context["viewerId"] = (((($tmp = (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 9, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 9, $this->source); })()), "userId", [], "any", false, false, false, 9)) : (null));
        // line 10
        yield "  ";
        $context["logoPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 10, $this->source); })()), "logoImageId", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 10, $this->source); })()), "logoImageId", [], "any", false, false, false, 10), "fileUrl", [], "any", false, false, false, 10)) : (""));
        // line 11
        yield "  ";
        $context["logoUrl"] = (((($tmp = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 11, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 11, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 11, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_team_logo_detail_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 11, $this->source); })())) . "/600/600")));
        // line 12
        yield "
  ";
        // line 13
        yield from $this->load("front/partials/_hero_mini.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "EQUIPE", "hero_title" => CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "hero_sub" => "Detail equipe: tournois, membres et produits.", "breadcrumb_current" => "Detail equipe"]));
        // line 19
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 23
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                yield "          <div class=\"listItem\">
            <span>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
            <span class=\"badge ";
                // line 26
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
            // line 29
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
      <div class=\"layout\">
        <section class=\"panel\">
          <div style=\"display:flex; gap:14px; align-items:flex-start; flex-wrap:wrap;\">
            <div class=\"avatarLg\" data-avatar=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logoUrl"]) || array_key_exists("logoUrl", $context) ? $context["logoUrl"] : (function () { throw new RuntimeError('Variable "logoUrl" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "\"></div>
            <div style=\"flex:1; min-width:260px;\">
              <h3 style=\"margin:0;\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
        yield "</h3>
              <div class=\"muted\">
                Region: ";
        // line 38
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 38, $this->source); })()), "region", [], "any", false, false, false, 38)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 38, $this->source); })()), "region", [], "any", false, false, false, 38), "html", null, true)) : ("-"));
        yield " | Capitaine: ";
        yield (((($tmp = (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 38, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 38, $this->source); })()), "displayName", [], "any", false, false, false, 38)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 38, $this->source); })()), "displayName", [], "any", false, false, false, 38), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 38, $this->source); })()), "username", [], "any", false, false, false, 38), "html", null, true)))) : ("-"));
        yield "
              </div>

              <p class=\"muted\" style=\"margin-top:8px;\">
                ";
        // line 42
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), "html", null, true)) : ("Aucune description disponible pour cette equipe."));
        yield "
              </p>

              <div style=\"display:flex; gap:8px; flex-wrap:wrap; margin-top:10px;\">
                ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 46, $this->source); })()), "code", [], "any", false, false, false, 46) == "guest")) {
            // line 47
            yield "                  <a class=\"btn btn--primary\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "uri", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\">Se connecter pour rejoindre</a>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 48, $this->source); })()), "code", [], "any", false, false, false, 48) == "can_join")) {
            // line 49
            yield "                  <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail_join", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 49, $this->source); })())]), "html", null, true);
            yield "\" style=\"display:flex; gap:8px; align-items:center; flex-wrap:wrap;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("team_join_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 50, $this->source); })()))), "html", null, true);
            yield "\">
                    <input class=\"input\" type=\"text\" name=\"note\" maxlength=\"255\" placeholder=\"Message au capitaine (optionnel)\">
                    <button class=\"btn btn--primary\" type=\"submit\">Demander a rejoindre</button>
                  </form>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 54, $this->source); })()), "code", [], "any", false, false, false, 54) == "captain")) {
            // line 55
            yield "                  <a class=\"btn btn--primary\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage", ["team" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 55, $this->source); })())]), "html", null, true);
            yield "\">Gerer mon equipe</a>
                ";
        } else {
            // line 57
            yield "                  <span class=\"badge badge--info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 57, $this->source); })()), "message", [], "any", false, false, false, 57), "html", null, true);
            yield "</span>
                ";
        }
        // line 59
        yield "
                ";
        // line 60
        if ((((isset($context["captainId"]) || array_key_exists("captainId", $context) ? $context["captainId"] : (function () { throw new RuntimeError('Variable "captainId" does not exist.', 60, $this->source); })()) && (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 60, $this->source); })())) && ((isset($context["viewerId"]) || array_key_exists("viewerId", $context) ? $context["viewerId"] : (function () { throw new RuntimeError('Variable "viewerId" does not exist.', 60, $this->source); })()) != (isset($context["captainId"]) || array_key_exists("captainId", $context) ? $context["captainId"] : (function () { throw new RuntimeError('Variable "captainId" does not exist.', 60, $this->source); })())))) {
            // line 61
            yield "                  <a class=\"btn btn--ghost\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_conversation", ["id" => (isset($context["captainId"]) || array_key_exists("captainId", $context) ? $context["captainId"] : (function () { throw new RuntimeError('Variable "captainId" does not exist.', 61, $this->source); })())]), "html", null, true);
            yield "\">Message capitaine</a>
                ";
        } elseif ((        // line 62
(isset($context["captainId"]) || array_key_exists("captainId", $context) ? $context["captainId"] : (function () { throw new RuntimeError('Variable "captainId" does not exist.', 62, $this->source); })()) &&  !(isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 62, $this->source); })()))) {
            // line 63
            yield "                  <a class=\"btn btn--ghost\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "uri", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\">Message capitaine</a>
                ";
        }
        // line 65
        yield "              </div>
            </div>
          </div>
        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">STATS</h3>
          <div class=\"statsRow\">
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "members", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 73, $this->source); })()), "members", [], "any", false, false, false, 73), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Membres</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "products", [], "any", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 74, $this->source); })()), "products", [], "any", false, false, false, 74), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Produits</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "tournaments", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 75, $this->source); })()), "tournaments", [], "any", false, false, false, 75), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Tournois</div></div>
          </div>

          <div class=\"list\" style=\"margin-top:12px;\">
            <div class=\"listItem\"><span>Etat demande</span><span class=\"listItem__meta\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 79, $this->source); })()), "code", [], "any", false, false, false, 79)), "html", null, true);
        yield "</span></div>
            <div class=\"listItem\"><span>Message</span><span class=\"listItem__meta\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 80, $this->source); })()), "message", [], "any", false, false, false, 80), "html", null, true);
        yield "</span></div>
          </div>
        </aside>
      </div>

      <section class=\"panel\">
        <div class=\"tabs\">
          <a class=\"tab ";
        // line 87
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 87, $this->source); })()) == "tournaments")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 87, $this->source); })()), "tab" => "tournaments"]), "html", null, true);
        yield "\">Tournois</a>
          <a class=\"tab ";
        // line 88
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 88, $this->source); })()) == "members")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 88, $this->source); })()), "tab" => "members"]), "html", null, true);
        yield "\">Membres</a>
          <a class=\"tab ";
        // line 89
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 89, $this->source); })()) == "products")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 89, $this->source); })()), "tab" => "products"]), "html", null, true);
        yield "\">Produits</a>
        </div>

        <div class=\"tabPanels\">
          <section class=\"tabPanel ";
        // line 93
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 93, $this->source); })()) == "tournaments")) ? ("is-active") : (""));
        yield "\">
            <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 94, $this->source); })())]), "html", null, true);
        yield "\" data-auto-submit=\"1\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"tab\" value=\"tournaments\">
              <input class=\"input\" type=\"search\" name=\"t_q\" value=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_q", [], "any", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 96, $this->source); })()), "t_q", [], "any", false, false, false, 96), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un tournoi...\">

              <div class=\"select\">
                <select name=\"t_status\">
                  <option value=\"\" ";
        // line 100
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_status", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 100, $this->source); })()), "t_status", [], "any", false, false, false, 100), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Tous statuts</option>
                  <option value=\"PENDING\" ";
        // line 101
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_status", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 101, $this->source); })()), "t_status", [], "any", false, false, false, 101), "")) : ("")) == "PENDING")) ? ("selected") : (""));
        yield ">PENDING</option>
                  <option value=\"ACCEPTED\" ";
        // line 102
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_status", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 102, $this->source); })()), "t_status", [], "any", false, false, false, 102), "")) : ("")) == "ACCEPTED")) ? ("selected") : (""));
        yield ">ACCEPTED</option>
                  <option value=\"REFUSED\" ";
        // line 103
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_status", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 103, $this->source); })()), "t_status", [], "any", false, false, false, 103), "")) : ("")) == "REFUSED")) ? ("selected") : (""));
        yield ">REFUSED</option>
                  <option value=\"CANCELLED\" ";
        // line 104
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_status", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 104, $this->source); })()), "t_status", [], "any", false, false, false, 104), "")) : ("")) == "CANCELLED")) ? ("selected") : (""));
        yield ">CANCELLED</option>
                </select>
              </div>

              <div class=\"select\">
                <select name=\"t_sort\">
                  <option value=\"latest\" ";
        // line 110
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_sort", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 110, $this->source); })()), "t_sort", [], "any", false, false, false, 110), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
                  <option value=\"oldest\" ";
        // line 111
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_sort", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 111, $this->source); })()), "t_sort", [], "any", false, false, false, 111), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                  <option value=\"title\" ";
        // line 112
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_sort", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 112, $this->source); })()), "t_sort", [], "any", false, false, false, 112), "latest")) : ("latest")) == "title")) ? ("selected") : (""));
        yield ">Titre</option>
                  <option value=\"status\" ";
        // line 113
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_sort", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 113, $this->source); })()), "t_sort", [], "any", false, false, false, 113), "latest")) : ("latest")) == "status")) ? ("selected") : (""));
        yield ">Statut inscription</option>
                </select>
              </div>

              <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
              <a class=\"btn btn--ghost\" href=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 118, $this->source); })()), "tab" => "tournaments"]), "html", null, true);
        yield "\">Reset</a>
            </form>

            ";
        // line 121
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["team_tournaments"]) || array_key_exists("team_tournaments", $context) ? $context["team_tournaments"] : (function () { throw new RuntimeError('Variable "team_tournaments" does not exist.', 121, $this->source); })()))) {
            // line 122
            yield "              <div class=\"emptyState\" style=\"margin-top:12px;\">Aucun tournoi trouve.</div>
            ";
        } else {
            // line 124
            yield "              <div class=\"cardsGrid\" style=\"margin-top:12px;\">
                ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["team_tournaments"]) || array_key_exists("team_tournaments", $context) ? $context["team_tournaments"] : (function () { throw new RuntimeError('Variable "team_tournaments" does not exist.', 125, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 126
                yield "                  ";
                $context["tournament"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tournamentId", [], "any", false, false, false, 126);
                // line 127
                yield "                  ";
                $context["tournamentId"] = (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 127, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "tournamentId", [], "any", true, true, false, 127) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 127, $this->source); })()), "tournamentId", [], "any", false, false, false, 127)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 127, $this->source); })()), "tournamentId", [], "any", false, false, false, 127)) : (0))) : (0));
                // line 128
                yield "                  ";
                $context["tournamentImagePath"] = ((((isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 128, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 128, $this->source); })()), "photoPath", [], "any", false, false, false, 128))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 128, $this->source); })()), "photoPath", [], "any", false, false, false, 128)) : (""));
                // line 129
                yield "                  ";
                $context["tournamentImageUrl"] = (((($tmp = (isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 129, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v2 = (isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 129, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) ? ((isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 129, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 129, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_team_tournament_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 129, $this->source); })())) . "/1200/800")));
                // line 130
                yield "
                  <article class=\"card card--tournament\">
                    <div class=\"card__media\" data-bg=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentImageUrl"]) || array_key_exists("tournamentImageUrl", $context) ? $context["tournamentImageUrl"] : (function () { throw new RuntimeError('Variable "tournamentImageUrl" does not exist.', 132, $this->source); })()), "html", null, true);
                yield "\">
                      <div class=\"card__chips\">
                        <span class=\"chip chip--status\">";
                // line 134
                yield (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 134, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 134, $this->source); })()), "status", [], "any", false, false, false, 134), "html", null, true)) : ("-"));
                yield "</span>
                        <span class=\"chip chip--format\">";
                // line 135
                yield (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 135, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 135, $this->source); })()), "format", [], "any", false, false, false, 135), "html", null, true)) : ("-"));
                yield "</span>
                        <span class=\"chip\">Inscription: ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 136), "html", null, true);
                yield "</span>
                      </div>
                    </div>

                    <div class=\"card__body\">
                      <h4 class=\"card__title\">";
                // line 141
                yield (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 141, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 141, $this->source); })()), "title", [], "any", false, false, false, 141), "html", null, true)) : ("Tournoi"));
                yield "</h4>
                      <p class=\"card__desc\">
                        Jeu: <b>";
                // line 143
                yield ((((isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 143, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 143, $this->source); })()), "gameId", [], "any", false, false, false, 143))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 143, $this->source); })()), "gameId", [], "any", false, false, false, 143), "name", [], "any", false, false, false, 143), "html", null, true)) : ("-"));
                yield "</b>
                        | Date: <b>";
                // line 144
                yield ((((isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 144, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 144, $this->source); })()), "startDate", [], "any", false, false, false, 144))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 144, $this->source); })()), "startDate", [], "any", false, false, false, 144), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</b>
                      </p>
                      <div class=\"card__metaRow\">
                        <span class=\"metaPill\">Prize: <b>";
                // line 147
                yield (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 147, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 147, $this->source); })()), "prizePool", [], "any", false, false, false, 147), "html", null, true)) : ("0"));
                yield "</b></span>
                        <span class=\"metaPill\">Enregistre le: <b>";
                // line 148
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "registeredAt", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "registeredAt", [], "any", false, false, false, 148), "d/m/Y H:i"), "html", null, true)) : ("-"));
                yield "</b></span>
                      </div>

                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"";
                // line 152
                yield ((((isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 152, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 152, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments")));
                yield "\">Voir detail</a>
                      </div>
                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "              </div>
            ";
        }
        // line 159
        yield "          </section>

          <section class=\"tabPanel ";
        // line 161
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 161, $this->source); })()) == "members")) ? ("is-active") : (""));
        yield "\">
            <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 162, $this->source); })())]), "html", null, true);
        yield "\" data-auto-submit=\"1\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"tab\" value=\"members\">
              <input class=\"input\" type=\"search\" name=\"m_q\" value=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_q", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 164, $this->source); })()), "m_q", [], "any", false, false, false, 164), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un membre...\">

              <div class=\"select\">
                <select name=\"m_role\">
                  <option value=\"\" ";
        // line 168
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_role", [], "any", true, true, false, 168)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 168, $this->source); })()), "m_role", [], "any", false, false, false, 168), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Tous roles</option>
                  <option value=\"PLAYER\" ";
        // line 169
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_role", [], "any", true, true, false, 169)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 169, $this->source); })()), "m_role", [], "any", false, false, false, 169), "")) : ("")) == "PLAYER")) ? ("selected") : (""));
        yield ">PLAYER</option>
                  <option value=\"CAPTAIN\" ";
        // line 170
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_role", [], "any", true, true, false, 170)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 170, $this->source); })()), "m_role", [], "any", false, false, false, 170), "")) : ("")) == "CAPTAIN")) ? ("selected") : (""));
        yield ">CAPTAIN</option>
                  <option value=\"ORGANIZER\" ";
        // line 171
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_role", [], "any", true, true, false, 171)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 171, $this->source); })()), "m_role", [], "any", false, false, false, 171), "")) : ("")) == "ORGANIZER")) ? ("selected") : (""));
        yield ">ORGANIZER</option>
                  <option value=\"ADMIN\" ";
        // line 172
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_role", [], "any", true, true, false, 172)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 172, $this->source); })()), "m_role", [], "any", false, false, false, 172), "")) : ("")) == "ADMIN")) ? ("selected") : (""));
        yield ">ADMIN</option>
                </select>
              </div>

              <div class=\"select\">
                <select name=\"m_sort\">
                  <option value=\"joined_oldest\" ";
        // line 178
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_sort", [], "any", true, true, false, 178)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 178, $this->source); })()), "m_sort", [], "any", false, false, false, 178), "joined_oldest")) : ("joined_oldest")) == "joined_oldest")) ? ("selected") : (""));
        yield ">Anciennete ASC</option>
                  <option value=\"joined_latest\" ";
        // line 179
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_sort", [], "any", true, true, false, 179)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 179, $this->source); })()), "m_sort", [], "any", false, false, false, 179), "joined_oldest")) : ("joined_oldest")) == "joined_latest")) ? ("selected") : (""));
        yield ">Anciennete DESC</option>
                  <option value=\"name\" ";
        // line 180
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_sort", [], "any", true, true, false, 180)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 180, $this->source); })()), "m_sort", [], "any", false, false, false, 180), "joined_oldest")) : ("joined_oldest")) == "name")) ? ("selected") : (""));
        yield ">Nom</option>
                  <option value=\"role\" ";
        // line 181
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_sort", [], "any", true, true, false, 181)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 181, $this->source); })()), "m_sort", [], "any", false, false, false, 181), "joined_oldest")) : ("joined_oldest")) == "role")) ? ("selected") : (""));
        yield ">Role</option>
                </select>
              </div>

              <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
                <input type=\"checkbox\" name=\"m_active\" value=\"1\" ";
        // line 186
        yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_active", [], "any", true, true, false, 186)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 186, $this->source); })()), "m_active", [], "any", false, false, false, 186), true)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                Membres actifs
              </label>

              <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
              <a class=\"btn btn--ghost\" href=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 191, $this->source); })()), "tab" => "members"]), "html", null, true);
        yield "\">Reset</a>
            </form>

            ";
        // line 194
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["team_members"]) || array_key_exists("team_members", $context) ? $context["team_members"] : (function () { throw new RuntimeError('Variable "team_members" does not exist.', 194, $this->source); })()))) {
            // line 195
            yield "              <div class=\"emptyState\" style=\"margin-top:12px;\">Aucun membre trouve.</div>
            ";
        } else {
            // line 197
            yield "              <div class=\"cardsGrid\" style=\"margin-top:12px;\">
                ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["team_members"]) || array_key_exists("team_members", $context) ? $context["team_members"] : (function () { throw new RuntimeError('Variable "team_members" does not exist.', 198, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 199
                yield "                  ";
                $context["member"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "userId", [], "any", false, false, false, 199);
                // line 200
                yield "                  ";
                $context["memberId"] = (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 200, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "userId", [], "any", true, true, false, 200) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 200, $this->source); })()), "userId", [], "any", false, false, false, 200)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 200, $this->source); })()), "userId", [], "any", false, false, false, 200)) : (0))) : (0));
                // line 201
                yield "                  ";
                $context["memberImagePath"] = ((((isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 201, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 201, $this->source); })()), "profileImageId", [], "any", false, false, false, 201))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 201, $this->source); })()), "profileImageId", [], "any", false, false, false, 201), "fileUrl", [], "any", false, false, false, 201)) : (""));
                // line 202
                yield "                  ";
                $context["memberImageUrl"] = (((($tmp = (isset($context["memberImagePath"]) || array_key_exists("memberImagePath", $context) ? $context["memberImagePath"] : (function () { throw new RuntimeError('Variable "memberImagePath" does not exist.', 202, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v4 = (isset($context["memberImagePath"]) || array_key_exists("memberImagePath", $context) ? $context["memberImagePath"] : (function () { throw new RuntimeError('Variable "memberImagePath" does not exist.', 202, $this->source); })())) && is_string($_v5 = "http") && str_starts_with($_v4, $_v5))) ? ((isset($context["memberImagePath"]) || array_key_exists("memberImagePath", $context) ? $context["memberImagePath"] : (function () { throw new RuntimeError('Variable "memberImagePath" does not exist.', 202, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["memberImagePath"]) || array_key_exists("memberImagePath", $context) ? $context["memberImagePath"] : (function () { throw new RuntimeError('Variable "memberImagePath" does not exist.', 202, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_team_member_" . (isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 202, $this->source); })())) . "/800/800")));
                // line 203
                yield "
                  <article class=\"card card--member\">
                    <div class=\"card__media\" data-bg=\"";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["memberImageUrl"]) || array_key_exists("memberImageUrl", $context) ? $context["memberImageUrl"] : (function () { throw new RuntimeError('Variable "memberImageUrl" does not exist.', 205, $this->source); })()), "html", null, true);
                yield "\">
                      <div class=\"card__chips\">
                        <span class=\"chip chip--role\">";
                // line 207
                yield (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 207, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 207, $this->source); })()), "role", [], "any", false, false, false, 207), "html", null, true)) : ("-"));
                yield "</span>
                        <span class=\"chip\">";
                // line 208
                yield ((((isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 208, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 208, $this->source); })()), "country", [], "any", false, false, false, 208))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 208, $this->source); })()), "country", [], "any", false, false, false, 208), "html", null, true)) : ("-"));
                yield "</span>
                        <span class=\"chip\">Depuis: ";
                // line 209
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "joinedAt", [], "any", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "joinedAt", [], "any", false, false, false, 209), "m/Y"), "html", null, true)) : ("-"));
                yield "</span>
                      </div>
                    </div>

                    <div class=\"card__body\">
                      <h4 class=\"card__title\">";
                // line 214
                yield (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 214, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 214, $this->source); })()), "displayName", [], "any", false, false, false, 214)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 214, $this->source); })()), "displayName", [], "any", false, false, false, 214), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 214, $this->source); })()), "username", [], "any", false, false, false, 214), "html", null, true)))) : ("Membre"));
                yield "</h4>
                      <p class=\"card__desc\">Username: <b>";
                // line 215
                yield (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 215, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 215, $this->source); })()), "username", [], "any", false, false, false, 215), "html", null, true)) : ("-"));
                yield "</b></p>

                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"";
                // line 218
                yield ((((isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 218, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile", ["id" => (isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 218, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players")));
                yield "\">Voir profil</a>
                        ";
                // line 219
                if ((((isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 219, $this->source); })()) && ((isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 219, $this->source); })()) > 0)) && ((isset($context["viewerId"]) || array_key_exists("viewerId", $context) ? $context["viewerId"] : (function () { throw new RuntimeError('Variable "viewerId" does not exist.', 219, $this->source); })()) != (isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 219, $this->source); })())))) {
                    // line 220
                    yield "                          <a class=\"btn btn--primary\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_conversation", ["id" => (isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 220, $this->source); })())]), "html", null, true);
                    yield "\">Message</a>
                        ";
                } elseif ((($tmp =  !                // line 221
(isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 221, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 222
                    yield "                          <a class=\"btn btn--primary\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 222, $this->source); })()), "request", [], "any", false, false, false, 222), "uri", [], "any", false, false, false, 222)]), "html", null, true);
                    yield "\">Message</a>
                        ";
                }
                // line 224
                yield "                      </div>
                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            yield "              </div>
            ";
        }
        // line 230
        yield "          </section>

          <section class=\"tabPanel ";
        // line 232
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 232, $this->source); })()) == "products")) ? ("is-active") : (""));
        yield "\">
            <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 233, $this->source); })())]), "html", null, true);
        yield "\" data-auto-submit=\"1\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"tab\" value=\"products\">
              <input class=\"input\" type=\"search\" name=\"p_q\" value=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_q", [], "any", true, true, false, 235)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 235, $this->source); })()), "p_q", [], "any", false, false, false, 235), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un produit...\">

              <div class=\"select\">
                <select name=\"p_sort\">
                  <option value=\"latest\" ";
        // line 239
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 239)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 239, $this->source); })()), "p_sort", [], "any", false, false, false, 239), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
                  <option value=\"oldest\" ";
        // line 240
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 240)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 240, $this->source); })()), "p_sort", [], "any", false, false, false, 240), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                  <option value=\"name\" ";
        // line 241
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 241)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 241, $this->source); })()), "p_sort", [], "any", false, false, false, 241), "latest")) : ("latest")) == "name")) ? ("selected") : (""));
        yield ">Nom</option>
                  <option value=\"price_high\" ";
        // line 242
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 242)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 242, $this->source); })()), "p_sort", [], "any", false, false, false, 242), "latest")) : ("latest")) == "price_high")) ? ("selected") : (""));
        yield ">Prix DESC</option>
                  <option value=\"price_low\" ";
        // line 243
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 243)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 243, $this->source); })()), "p_sort", [], "any", false, false, false, 243), "latest")) : ("latest")) == "price_low")) ? ("selected") : (""));
        yield ">Prix ASC</option>
                  <option value=\"stock_high\" ";
        // line 244
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 244)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 244, $this->source); })()), "p_sort", [], "any", false, false, false, 244), "latest")) : ("latest")) == "stock_high")) ? ("selected") : (""));
        yield ">Stock DESC</option>
                </select>
              </div>

              <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
                <input type=\"checkbox\" name=\"p_stock\" value=\"1\" ";
        // line 249
        yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_stock", [], "any", true, true, false, 249)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 249, $this->source); })()), "p_stock", [], "any", false, false, false, 249), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                En stock
              </label>

              <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
              <a class=\"btn btn--ghost\" href=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 254, $this->source); })()), "tab" => "products"]), "html", null, true);
        yield "\">Reset</a>
            </form>

            ";
        // line 257
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["team_products"]) || array_key_exists("team_products", $context) ? $context["team_products"] : (function () { throw new RuntimeError('Variable "team_products" does not exist.', 257, $this->source); })()))) {
            // line 258
            yield "              <div class=\"emptyState\" style=\"margin-top:12px;\">Aucun produit trouve.</div>
            ";
        } else {
            // line 260
            yield "              <div class=\"cardsGrid\" style=\"margin-top:12px;\">
                ";
            // line 261
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["team_products"]) || array_key_exists("team_products", $context) ? $context["team_products"] : (function () { throw new RuntimeError('Variable "team_products" does not exist.', 261, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 262
                yield "                  ";
                $context["productId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", true, true, false, 262) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 262)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 262)) : (0));
                // line 263
                yield "                  ";
                $context["primaryImage"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["team_products_primary_images_by_product_id"] ?? null), (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 263, $this->source); })()), [], "array", true, true, false, 263)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team_products_primary_images_by_product_id"]) || array_key_exists("team_products_primary_images_by_product_id", $context) ? $context["team_products_primary_images_by_product_id"] : (function () { throw new RuntimeError('Variable "team_products_primary_images_by_product_id" does not exist.', 263, $this->source); })()), (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 263, $this->source); })()), [], "array", false, false, false, 263), null)) : (null));
                // line 264
                yield "                  ";
                $context["imagePath"] = (((($tmp = (isset($context["primaryImage"]) || array_key_exists("primaryImage", $context) ? $context["primaryImage"] : (function () { throw new RuntimeError('Variable "primaryImage" does not exist.', 264, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["primaryImage"]) || array_key_exists("primaryImage", $context) ? $context["primaryImage"] : (function () { throw new RuntimeError('Variable "primaryImage" does not exist.', 264, $this->source); })()), "fileUrl", [], "any", false, false, false, 264)) : (""));
                // line 265
                yield "                  ";
                $context["imageUrl"] = (((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 265, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v6 = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 265, $this->source); })())) && is_string($_v7 = "http") && str_starts_with($_v6, $_v7))) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 265, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 265, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_team_product_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 265, $this->source); })())) . "/1200/800")));
                // line 266
                yield "
                  <article class=\"card card--product\">
                    <div class=\"card__media\" data-bg=\"";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 268, $this->source); })()), "html", null, true);
                yield "\">
                      <div class=\"card__chips\">
                        <span class=\"chip chip--price\">";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 270), 2, ".", " "), "html", null, true);
                yield " DT</span>
                        <span class=\"chip\">Stock: ";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 271), "html", null, true);
                yield "</span>
                        <span class=\"chip\">";
                // line 272
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 272)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
                yield "</span>
                      </div>
                    </div>

                    <div class=\"card__body\">
                      <h4 class=\"card__title\">";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 277), "html", null, true);
                yield "</h4>
                      <p class=\"card__desc\">";
                // line 278
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 278)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 278), 0, 80) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 278)) > 80)) ? ("...") : (""))), "html", null, true)) : ("Produit officiel equipe."));
                yield "</p>

                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"";
                // line 281
                yield ((((isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 281, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 281, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop")));
                yield "\">Detail</a>
                        ";
                // line 282
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 282, $this->source); })()), "user", [], "any", false, false, false, 282) && ((isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 282, $this->source); })()) > 0))) {
                    // line 283
                    yield "                          <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_add", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 283, $this->source); })())]), "html", null, true);
                    yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 284
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_add_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 284, $this->source); })()))), "html", null, true);
                    yield "\">
                            <input type=\"hidden\" name=\"quantity\" value=\"1\">
                            <button class=\"btn btn--primary\" type=\"submit\" ";
                    // line 286
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 286) <= 0)) ? ("disabled") : (""));
                    yield ">
                              ";
                    // line 287
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 287) <= 0)) ? ("Rupture") : ("Ajouter au panier"));
                    yield "
                            </button>
                          </form>
                        ";
                } else {
                    // line 291
                    yield "                          <a class=\"btn btn--primary\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "request", [], "any", false, false, false, 291), "uri", [], "any", false, false, false, 291)]), "html", null, true);
                    yield "\">Ajouter au panier</a>
                        ";
                }
                // line 293
                yield "                      </div>
                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            yield "              </div>
            ";
        }
        // line 299
        yield "          </section>
        </div>
      </section>

      ";
        // line 303
        yield from $this->load("front/partials/_footer.html.twig", 303)->unwrap()->yield($context);
        // line 304
        yield "    </section>
  </main>

  ";
        // line 307
        yield from $this->load("front/partials/_auth_modal.html.twig", 307)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/team-detail.html.twig";
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
        return array (  817 => 307,  812 => 304,  810 => 303,  804 => 299,  800 => 297,  791 => 293,  785 => 291,  778 => 287,  774 => 286,  769 => 284,  764 => 283,  762 => 282,  758 => 281,  752 => 278,  748 => 277,  740 => 272,  736 => 271,  732 => 270,  727 => 268,  723 => 266,  720 => 265,  717 => 264,  714 => 263,  711 => 262,  707 => 261,  704 => 260,  700 => 258,  698 => 257,  692 => 254,  684 => 249,  676 => 244,  672 => 243,  668 => 242,  664 => 241,  660 => 240,  656 => 239,  649 => 235,  644 => 233,  640 => 232,  636 => 230,  632 => 228,  623 => 224,  617 => 222,  615 => 221,  610 => 220,  608 => 219,  604 => 218,  598 => 215,  594 => 214,  586 => 209,  582 => 208,  578 => 207,  573 => 205,  569 => 203,  566 => 202,  563 => 201,  560 => 200,  557 => 199,  553 => 198,  550 => 197,  546 => 195,  544 => 194,  538 => 191,  530 => 186,  522 => 181,  518 => 180,  514 => 179,  510 => 178,  501 => 172,  497 => 171,  493 => 170,  489 => 169,  485 => 168,  478 => 164,  473 => 162,  469 => 161,  465 => 159,  461 => 157,  450 => 152,  443 => 148,  439 => 147,  433 => 144,  429 => 143,  424 => 141,  416 => 136,  412 => 135,  408 => 134,  403 => 132,  399 => 130,  396 => 129,  393 => 128,  390 => 127,  387 => 126,  383 => 125,  380 => 124,  376 => 122,  374 => 121,  368 => 118,  360 => 113,  356 => 112,  352 => 111,  348 => 110,  339 => 104,  335 => 103,  331 => 102,  327 => 101,  323 => 100,  316 => 96,  311 => 94,  307 => 93,  298 => 89,  292 => 88,  286 => 87,  276 => 80,  272 => 79,  265 => 75,  261 => 74,  257 => 73,  247 => 65,  241 => 63,  239 => 62,  234 => 61,  232 => 60,  229 => 59,  223 => 57,  217 => 55,  215 => 54,  208 => 50,  203 => 49,  201 => 48,  196 => 47,  194 => 46,  187 => 42,  178 => 38,  173 => 36,  168 => 34,  162 => 30,  156 => 29,  145 => 26,  141 => 25,  138 => 24,  133 => 23,  129 => 22,  124 => 19,  122 => 15,  121 => 13,  118 => 12,  115 => 11,  112 => 10,  109 => 9,  106 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Detail equipe{% endblock %}

{% block body %}
  {% set teamId = team.teamId ?? 0 %}
  {% set captain = team.captainUserId %}
  {% set captainId = captain ? captain.userId : null %}
  {% set viewerId = viewer_user ? viewer_user.userId : null %}
  {% set logoPath = team.logoImageId ? team.logoImageId.fileUrl : '' %}
  {% set logoUrl = logoPath ? (logoPath starts with 'http' ? logoPath : asset(logoPath)) : 'https://picsum.photos/seed/pulse_team_logo_detail_' ~ teamId ~ '/600/600' %}

  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'EQUIPE',
    hero_title: team.name,
    hero_sub: 'Detail equipe: tournois, membres et produits.',
    breadcrumb_current: 'Detail equipe'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      {% for label, messages in app.flashes %}
        {% for message in messages %}
          <div class=\"listItem\">
            <span>{{ message }}</span>
            <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'info' ? 'badge--info' : 'badge--success') }}\">{{ label|upper }}</span>
          </div>
        {% endfor %}
      {% endfor %}

      <div class=\"layout\">
        <section class=\"panel\">
          <div style=\"display:flex; gap:14px; align-items:flex-start; flex-wrap:wrap;\">
            <div class=\"avatarLg\" data-avatar=\"{{ logoUrl }}\"></div>
            <div style=\"flex:1; min-width:260px;\">
              <h3 style=\"margin:0;\">{{ team.name }}</h3>
              <div class=\"muted\">
                Region: {{ team.region ?: '-' }} | Capitaine: {{ captain ? (captain.displayName ?: captain.username) : '-' }}
              </div>

              <p class=\"muted\" style=\"margin-top:8px;\">
                {{ team.description ?: 'Aucune description disponible pour cette equipe.' }}
              </p>

              <div style=\"display:flex; gap:8px; flex-wrap:wrap; margin-top:10px;\">
                {% if join_state.code == 'guest' %}
                  <a class=\"btn btn--primary\" href=\"{{ path('front_login', {'_target_path': app.request.uri}) }}\">Se connecter pour rejoindre</a>
                {% elseif join_state.code == 'can_join' %}
                  <form method=\"post\" action=\"{{ path('front_team_detail_join', {id: teamId}) }}\" style=\"display:flex; gap:8px; align-items:center; flex-wrap:wrap;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('team_join_' ~ teamId) }}\">
                    <input class=\"input\" type=\"text\" name=\"note\" maxlength=\"255\" placeholder=\"Message au capitaine (optionnel)\">
                    <button class=\"btn btn--primary\" type=\"submit\">Demander a rejoindre</button>
                  </form>
                {% elseif join_state.code == 'captain' %}
                  <a class=\"btn btn--primary\" href=\"{{ path('front_captain_team_manage', {team: teamId}) }}\">Gerer mon equipe</a>
                {% else %}
                  <span class=\"badge badge--info\">{{ join_state.message }}</span>
                {% endif %}

                {% if captainId and viewer_user and viewerId != captainId %}
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_conversation', {id: captainId}) }}\">Message capitaine</a>
                {% elseif captainId and not viewer_user %}
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_login', {'_target_path': app.request.uri}) }}\">Message capitaine</a>
                {% endif %}
              </div>
            </div>
          </div>
        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">STATS</h3>
          <div class=\"statsRow\">
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.members|default(0) }}</div><div class=\"statCard__label\">Membres</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.products|default(0) }}</div><div class=\"statCard__label\">Produits</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">{{ stats.tournaments|default(0) }}</div><div class=\"statCard__label\">Tournois</div></div>
          </div>

          <div class=\"list\" style=\"margin-top:12px;\">
            <div class=\"listItem\"><span>Etat demande</span><span class=\"listItem__meta\">{{ join_state.code|upper }}</span></div>
            <div class=\"listItem\"><span>Message</span><span class=\"listItem__meta\">{{ join_state.message }}</span></div>
          </div>
        </aside>
      </div>

      <section class=\"panel\">
        <div class=\"tabs\">
          <a class=\"tab {{ active_tab == 'tournaments' ? 'is-active' : '' }}\" href=\"{{ path('front_team_detail', {id: teamId, tab: 'tournaments'}) }}\">Tournois</a>
          <a class=\"tab {{ active_tab == 'members' ? 'is-active' : '' }}\" href=\"{{ path('front_team_detail', {id: teamId, tab: 'members'}) }}\">Membres</a>
          <a class=\"tab {{ active_tab == 'products' ? 'is-active' : '' }}\" href=\"{{ path('front_team_detail', {id: teamId, tab: 'products'}) }}\">Produits</a>
        </div>

        <div class=\"tabPanels\">
          <section class=\"tabPanel {{ active_tab == 'tournaments' ? 'is-active' : '' }}\">
            <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_team_detail', {id: teamId}) }}\" data-auto-submit=\"1\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"tab\" value=\"tournaments\">
              <input class=\"input\" type=\"search\" name=\"t_q\" value=\"{{ filters.t_q|default('') }}\" placeholder=\"Rechercher un tournoi...\">

              <div class=\"select\">
                <select name=\"t_status\">
                  <option value=\"\" {{ (filters.t_status|default('')) == '' ? 'selected' : '' }}>Tous statuts</option>
                  <option value=\"PENDING\" {{ (filters.t_status|default('')) == 'PENDING' ? 'selected' : '' }}>PENDING</option>
                  <option value=\"ACCEPTED\" {{ (filters.t_status|default('')) == 'ACCEPTED' ? 'selected' : '' }}>ACCEPTED</option>
                  <option value=\"REFUSED\" {{ (filters.t_status|default('')) == 'REFUSED' ? 'selected' : '' }}>REFUSED</option>
                  <option value=\"CANCELLED\" {{ (filters.t_status|default('')) == 'CANCELLED' ? 'selected' : '' }}>CANCELLED</option>
                </select>
              </div>

              <div class=\"select\">
                <select name=\"t_sort\">
                  <option value=\"latest\" {{ (filters.t_sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recents</option>
                  <option value=\"oldest\" {{ (filters.t_sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciens</option>
                  <option value=\"title\" {{ (filters.t_sort|default('latest')) == 'title' ? 'selected' : '' }}>Titre</option>
                  <option value=\"status\" {{ (filters.t_sort|default('latest')) == 'status' ? 'selected' : '' }}>Statut inscription</option>
                </select>
              </div>

              <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
              <a class=\"btn btn--ghost\" href=\"{{ path('front_team_detail', {id: teamId, tab: 'tournaments'}) }}\">Reset</a>
            </form>

            {% if team_tournaments is empty %}
              <div class=\"emptyState\" style=\"margin-top:12px;\">Aucun tournoi trouve.</div>
            {% else %}
              <div class=\"cardsGrid\" style=\"margin-top:12px;\">
                {% for row in team_tournaments %}
                  {% set tournament = row.tournamentId %}
                  {% set tournamentId = tournament ? (tournament.tournamentId ?? 0) : 0 %}
                  {% set tournamentImagePath = tournament and tournament.photoPath ? tournament.photoPath : '' %}
                  {% set tournamentImageUrl = tournamentImagePath ? (tournamentImagePath starts with 'http' ? tournamentImagePath : asset(tournamentImagePath)) : 'https://picsum.photos/seed/pulse_team_tournament_' ~ tournamentId ~ '/1200/800' %}

                  <article class=\"card card--tournament\">
                    <div class=\"card__media\" data-bg=\"{{ tournamentImageUrl }}\">
                      <div class=\"card__chips\">
                        <span class=\"chip chip--status\">{{ tournament ? tournament.status : '-' }}</span>
                        <span class=\"chip chip--format\">{{ tournament ? tournament.format : '-' }}</span>
                        <span class=\"chip\">Inscription: {{ row.status }}</span>
                      </div>
                    </div>

                    <div class=\"card__body\">
                      <h4 class=\"card__title\">{{ tournament ? tournament.title : 'Tournoi' }}</h4>
                      <p class=\"card__desc\">
                        Jeu: <b>{{ tournament and tournament.gameId ? tournament.gameId.name : '-' }}</b>
                        | Date: <b>{{ tournament and tournament.startDate ? tournament.startDate|date('d/m/Y') : '-' }}</b>
                      </p>
                      <div class=\"card__metaRow\">
                        <span class=\"metaPill\">Prize: <b>{{ tournament ? tournament.prizePool : '0' }}</b></span>
                        <span class=\"metaPill\">Enregistre le: <b>{{ row.registeredAt ? row.registeredAt|date('d/m/Y H:i') : '-' }}</b></span>
                      </div>

                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"{{ tournamentId > 0 ? path('front_tournament_detail', {id: tournamentId}) : path('front_tournaments') }}\">Voir detail</a>
                      </div>
                    </div>
                  </article>
                {% endfor %}
              </div>
            {% endif %}
          </section>

          <section class=\"tabPanel {{ active_tab == 'members' ? 'is-active' : '' }}\">
            <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_team_detail', {id: teamId}) }}\" data-auto-submit=\"1\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"tab\" value=\"members\">
              <input class=\"input\" type=\"search\" name=\"m_q\" value=\"{{ filters.m_q|default('') }}\" placeholder=\"Rechercher un membre...\">

              <div class=\"select\">
                <select name=\"m_role\">
                  <option value=\"\" {{ (filters.m_role|default('')) == '' ? 'selected' : '' }}>Tous roles</option>
                  <option value=\"PLAYER\" {{ (filters.m_role|default('')) == 'PLAYER' ? 'selected' : '' }}>PLAYER</option>
                  <option value=\"CAPTAIN\" {{ (filters.m_role|default('')) == 'CAPTAIN' ? 'selected' : '' }}>CAPTAIN</option>
                  <option value=\"ORGANIZER\" {{ (filters.m_role|default('')) == 'ORGANIZER' ? 'selected' : '' }}>ORGANIZER</option>
                  <option value=\"ADMIN\" {{ (filters.m_role|default('')) == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                </select>
              </div>

              <div class=\"select\">
                <select name=\"m_sort\">
                  <option value=\"joined_oldest\" {{ (filters.m_sort|default('joined_oldest')) == 'joined_oldest' ? 'selected' : '' }}>Anciennete ASC</option>
                  <option value=\"joined_latest\" {{ (filters.m_sort|default('joined_oldest')) == 'joined_latest' ? 'selected' : '' }}>Anciennete DESC</option>
                  <option value=\"name\" {{ (filters.m_sort|default('joined_oldest')) == 'name' ? 'selected' : '' }}>Nom</option>
                  <option value=\"role\" {{ (filters.m_sort|default('joined_oldest')) == 'role' ? 'selected' : '' }}>Role</option>
                </select>
              </div>

              <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
                <input type=\"checkbox\" name=\"m_active\" value=\"1\" {{ filters.m_active|default(true) ? 'checked' : '' }}>
                Membres actifs
              </label>

              <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
              <a class=\"btn btn--ghost\" href=\"{{ path('front_team_detail', {id: teamId, tab: 'members'}) }}\">Reset</a>
            </form>

            {% if team_members is empty %}
              <div class=\"emptyState\" style=\"margin-top:12px;\">Aucun membre trouve.</div>
            {% else %}
              <div class=\"cardsGrid\" style=\"margin-top:12px;\">
                {% for row in team_members %}
                  {% set member = row.userId %}
                  {% set memberId = member ? (member.userId ?? 0) : 0 %}
                  {% set memberImagePath = member and member.profileImageId ? member.profileImageId.fileUrl : '' %}
                  {% set memberImageUrl = memberImagePath ? (memberImagePath starts with 'http' ? memberImagePath : asset(memberImagePath)) : 'https://picsum.photos/seed/pulse_team_member_' ~ memberId ~ '/800/800' %}

                  <article class=\"card card--member\">
                    <div class=\"card__media\" data-bg=\"{{ memberImageUrl }}\">
                      <div class=\"card__chips\">
                        <span class=\"chip chip--role\">{{ member ? member.role : '-' }}</span>
                        <span class=\"chip\">{{ member and member.country ? member.country : '-' }}</span>
                        <span class=\"chip\">Depuis: {{ row.joinedAt ? row.joinedAt|date('m/Y') : '-' }}</span>
                      </div>
                    </div>

                    <div class=\"card__body\">
                      <h4 class=\"card__title\">{{ member ? (member.displayName ?: member.username) : 'Membre' }}</h4>
                      <p class=\"card__desc\">Username: <b>{{ member ? member.username : '-' }}</b></p>

                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"{{ memberId > 0 ? path('front_player_profile', {id: memberId}) : path('front_players') }}\">Voir profil</a>
                        {% if viewer_user and memberId > 0 and viewerId != memberId %}
                          <a class=\"btn btn--primary\" href=\"{{ path('front_conversation', {id: memberId}) }}\">Message</a>
                        {% elseif not viewer_user %}
                          <a class=\"btn btn--primary\" href=\"{{ path('front_login', {'_target_path': app.request.uri}) }}\">Message</a>
                        {% endif %}
                      </div>
                    </div>
                  </article>
                {% endfor %}
              </div>
            {% endif %}
          </section>

          <section class=\"tabPanel {{ active_tab == 'products' ? 'is-active' : '' }}\">
            <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_team_detail', {id: teamId}) }}\" data-auto-submit=\"1\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"tab\" value=\"products\">
              <input class=\"input\" type=\"search\" name=\"p_q\" value=\"{{ filters.p_q|default('') }}\" placeholder=\"Rechercher un produit...\">

              <div class=\"select\">
                <select name=\"p_sort\">
                  <option value=\"latest\" {{ (filters.p_sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recents</option>
                  <option value=\"oldest\" {{ (filters.p_sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciens</option>
                  <option value=\"name\" {{ (filters.p_sort|default('latest')) == 'name' ? 'selected' : '' }}>Nom</option>
                  <option value=\"price_high\" {{ (filters.p_sort|default('latest')) == 'price_high' ? 'selected' : '' }}>Prix DESC</option>
                  <option value=\"price_low\" {{ (filters.p_sort|default('latest')) == 'price_low' ? 'selected' : '' }}>Prix ASC</option>
                  <option value=\"stock_high\" {{ (filters.p_sort|default('latest')) == 'stock_high' ? 'selected' : '' }}>Stock DESC</option>
                </select>
              </div>

              <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
                <input type=\"checkbox\" name=\"p_stock\" value=\"1\" {{ filters.p_stock|default(false) ? 'checked' : '' }}>
                En stock
              </label>

              <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
              <a class=\"btn btn--ghost\" href=\"{{ path('front_team_detail', {id: teamId, tab: 'products'}) }}\">Reset</a>
            </form>

            {% if team_products is empty %}
              <div class=\"emptyState\" style=\"margin-top:12px;\">Aucun produit trouve.</div>
            {% else %}
              <div class=\"cardsGrid\" style=\"margin-top:12px;\">
                {% for product in team_products %}
                  {% set productId = product.productId ?? 0 %}
                  {% set primaryImage = team_products_primary_images_by_product_id[productId]|default(null) %}
                  {% set imagePath = primaryImage ? primaryImage.fileUrl : '' %}
                  {% set imageUrl = imagePath ? (imagePath starts with 'http' ? imagePath : asset(imagePath)) : 'https://picsum.photos/seed/pulse_team_product_' ~ productId ~ '/1200/800' %}

                  <article class=\"card card--product\">
                    <div class=\"card__media\" data-bg=\"{{ imageUrl }}\">
                      <div class=\"card__chips\">
                        <span class=\"chip chip--price\">{{ product.price|number_format(2, '.', ' ') }} DT</span>
                        <span class=\"chip\">Stock: {{ product.stockQty }}</span>
                        <span class=\"chip\">{{ product.isActive ? 'ACTIF' : 'INACTIF' }}</span>
                      </div>
                    </div>

                    <div class=\"card__body\">
                      <h4 class=\"card__title\">{{ product.name }}</h4>
                      <p class=\"card__desc\">{{ product.description ? product.description|slice(0, 80) ~ (product.description|length > 80 ? '...' : '') : 'Produit officiel equipe.' }}</p>

                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"{{ productId > 0 ? path('front_product_detail', {id: productId}) : path('front_shop') }}\">Detail</a>
                        {% if app.user and productId > 0 %}
                          <form method=\"post\" action=\"{{ path('front_cart_add', {id: productId}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_add_' ~ productId) }}\">
                            <input type=\"hidden\" name=\"quantity\" value=\"1\">
                            <button class=\"btn btn--primary\" type=\"submit\" {{ product.stockQty <= 0 ? 'disabled' : '' }}>
                              {{ product.stockQty <= 0 ? 'Rupture' : 'Ajouter au panier' }}
                            </button>
                          </form>
                        {% else %}
                          <a class=\"btn btn--primary\" href=\"{{ path('front_login', {'_target_path': app.request.uri}) }}\">Ajouter au panier</a>
                        {% endif %}
                      </div>
                    </div>
                  </article>
                {% endfor %}
              </div>
            {% endif %}
          </section>
        </div>
      </section>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/team-detail.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\team-detail.html.twig");
    }
}
