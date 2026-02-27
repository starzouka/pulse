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
class __TwigTemplate_8e044da46aace100a859a168d500f1eb extends Template
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
        if (((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 11, $this->source); })()) && (is_string($_v0 = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 11, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1)))) {
            // line 12
            yield "    ";
            $context["logoUrl"] = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 12, $this->source); })());
            // line 13
            yield "    ";
            $context["bannerUrl"] = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 13, $this->source); })());
            // line 14
            yield "  ";
        } elseif ((($tmp = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 14, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "    ";
            $context["logoUrl"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 15, $this->source); })())), "team_logo");
            // line 16
            yield "    ";
            $context["bannerUrl"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 16, $this->source); })())), "team_banner");
            // line 17
            yield "  ";
        } else {
            // line 18
            yield "    ";
            $context["logoUrl"] = (("https://picsum.photos/seed/pulse_team_logo_detail_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 18, $this->source); })())) . "/600/600");
            // line 19
            yield "    ";
            $context["bannerUrl"] = (("https://picsum.photos/seed/pulse_team_banner_detail_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 19, $this->source); })())) . "/1400/420");
            // line 20
            yield "  ";
        }
        // line 21
        yield "
  ";
        // line 22
        yield from $this->load("front/partials/_hero_mini.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "EQUIPE", "hero_title" => CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "hero_sub" => "Detail equipe: tournois, membres et produits.", "breadcrumb_current" => "Detail equipe"]));
        // line 28
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 32
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                yield "          <div class=\"listItem\">
            <span>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
            <span class=\"badge ";
                // line 35
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
            // line 38
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
      <div class=\"layout\">
        <section class=\"panel\">
          <div class=\"coverBlock\" data-bg=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bannerUrl"]) || array_key_exists("bannerUrl", $context) ? $context["bannerUrl"] : (function () { throw new RuntimeError('Variable "bannerUrl" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\"></div>
          <div style=\"display:flex; gap:14px; align-items:flex-start; flex-wrap:wrap;\">
            <div class=\"avatarLg\" data-avatar=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logoUrl"]) || array_key_exists("logoUrl", $context) ? $context["logoUrl"] : (function () { throw new RuntimeError('Variable "logoUrl" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "\"></div>
            <div style=\"flex:1; min-width:260px;\">
              <h3 style=\"margin:0;\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46), "html", null, true);
        yield "</h3>
              <div class=\"muted\">
                Region: ";
        // line 48
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 48, $this->source); })()), "region", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 48, $this->source); })()), "region", [], "any", false, false, false, 48), "html", null, true)) : ("-"));
        yield " | Capitaine: ";
        yield (((($tmp = (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 48, $this->source); })()), "displayName", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 48, $this->source); })()), "displayName", [], "any", false, false, false, 48), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 48, $this->source); })()), "username", [], "any", false, false, false, 48), "html", null, true)))) : ("-"));
        yield "
              </div>

              <p class=\"muted\" style=\"margin-top:8px;\">
                ";
        // line 52
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), "html", null, true)) : ("Aucune description disponible pour cette equipe."));
        yield "
              </p>

              <div style=\"display:flex; gap:8px; flex-wrap:wrap; margin-top:10px;\">
                ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 56, $this->source); })()), "code", [], "any", false, false, false, 56) == "guest")) {
            // line 57
            yield "                  <a class=\"btn btn--primary\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "uri", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\">Se connecter pour rejoindre</a>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 58
(isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 58, $this->source); })()), "code", [], "any", false, false, false, 58) == "can_join")) {
            // line 59
            yield "                  <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail_join", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 59, $this->source); })())]), "html", null, true);
            yield "\" style=\"display:flex; gap:8px; align-items:center; flex-wrap:wrap;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("team_join_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 60, $this->source); })()))), "html", null, true);
            yield "\">
                    <input class=\"input\" type=\"text\" name=\"note\" maxlength=\"255\" placeholder=\"Message au capitaine (optionnel)\">
                    <button class=\"btn btn--primary\" type=\"submit\">Demander a rejoindre</button>
                  </form>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 64
(isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 64, $this->source); })()), "code", [], "any", false, false, false, 64) == "captain")) {
            // line 65
            yield "                  <a class=\"btn btn--primary\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage", ["team" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 65, $this->source); })())]), "html", null, true);
            yield "\">Gerer mon equipe</a>
                ";
        } else {
            // line 67
            yield "                  <span class=\"badge badge--info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 67, $this->source); })()), "message", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
                ";
        }
        // line 69
        yield "
                ";
        // line 70
        if ((((isset($context["captainId"]) || array_key_exists("captainId", $context) ? $context["captainId"] : (function () { throw new RuntimeError('Variable "captainId" does not exist.', 70, $this->source); })()) && (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 70, $this->source); })())) && ((isset($context["viewerId"]) || array_key_exists("viewerId", $context) ? $context["viewerId"] : (function () { throw new RuntimeError('Variable "viewerId" does not exist.', 70, $this->source); })()) != (isset($context["captainId"]) || array_key_exists("captainId", $context) ? $context["captainId"] : (function () { throw new RuntimeError('Variable "captainId" does not exist.', 70, $this->source); })())))) {
            // line 71
            yield "                  <a class=\"btn btn--ghost\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_conversation", ["id" => (isset($context["captainId"]) || array_key_exists("captainId", $context) ? $context["captainId"] : (function () { throw new RuntimeError('Variable "captainId" does not exist.', 71, $this->source); })())]), "html", null, true);
            yield "\">Message capitaine</a>
                ";
        } elseif ((        // line 72
(isset($context["captainId"]) || array_key_exists("captainId", $context) ? $context["captainId"] : (function () { throw new RuntimeError('Variable "captainId" does not exist.', 72, $this->source); })()) &&  !(isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 72, $this->source); })()))) {
            // line 73
            yield "                  <a class=\"btn btn--ghost\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "uri", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\">Message capitaine</a>
                ";
        }
        // line 75
        yield "              </div>
            </div>
          </div>
        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">STATS</h3>
          <div class=\"statsRow\">
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "members", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 83, $this->source); })()), "members", [], "any", false, false, false, 83), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Membres</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "products", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 84, $this->source); })()), "products", [], "any", false, false, false, 84), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Produits</div></div>
            <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "tournaments", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 85, $this->source); })()), "tournaments", [], "any", false, false, false, 85), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Tournois</div></div>
          </div>

          <div class=\"list\" style=\"margin-top:12px;\">
            <div class=\"listItem\"><span>Etat demande</span><span class=\"listItem__meta\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 89, $this->source); })()), "code", [], "any", false, false, false, 89)), "html", null, true);
        yield "</span></div>
            <div class=\"listItem\"><span>Message</span><span class=\"listItem__meta\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["join_state"]) || array_key_exists("join_state", $context) ? $context["join_state"] : (function () { throw new RuntimeError('Variable "join_state" does not exist.', 90, $this->source); })()), "message", [], "any", false, false, false, 90), "html", null, true);
        yield "</span></div>
          </div>
        </aside>
      </div>

      <section class=\"panel\">
        <div class=\"tabs\">
          <a class=\"tab ";
        // line 97
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 97, $this->source); })()) == "tournaments")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 97, $this->source); })()), "tab" => "tournaments"]), "html", null, true);
        yield "\">Tournois</a>
          <a class=\"tab ";
        // line 98
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 98, $this->source); })()) == "members")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 98, $this->source); })()), "tab" => "members"]), "html", null, true);
        yield "\">Membres</a>
          <a class=\"tab ";
        // line 99
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 99, $this->source); })()) == "products")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 99, $this->source); })()), "tab" => "products"]), "html", null, true);
        yield "\">Produits</a>
        </div>

        <div class=\"tabPanels\">
          <section class=\"tabPanel ";
        // line 103
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 103, $this->source); })()) == "tournaments")) ? ("is-active") : (""));
        yield "\">
            <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 104, $this->source); })())]), "html", null, true);
        yield "\" data-auto-submit=\"1\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"tab\" value=\"tournaments\">
              <input class=\"input\" type=\"search\" name=\"t_q\" value=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_q", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 106, $this->source); })()), "t_q", [], "any", false, false, false, 106), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un tournoi...\">

              <div class=\"select\">
                <select name=\"t_status\">
                  <option value=\"\" ";
        // line 110
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_status", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 110, $this->source); })()), "t_status", [], "any", false, false, false, 110), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Tous statuts</option>
                  <option value=\"PENDING\" ";
        // line 111
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_status", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 111, $this->source); })()), "t_status", [], "any", false, false, false, 111), "")) : ("")) == "PENDING")) ? ("selected") : (""));
        yield ">PENDING</option>
                  <option value=\"ACCEPTED\" ";
        // line 112
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_status", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 112, $this->source); })()), "t_status", [], "any", false, false, false, 112), "")) : ("")) == "ACCEPTED")) ? ("selected") : (""));
        yield ">ACCEPTED</option>
                  <option value=\"REFUSED\" ";
        // line 113
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_status", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 113, $this->source); })()), "t_status", [], "any", false, false, false, 113), "")) : ("")) == "REFUSED")) ? ("selected") : (""));
        yield ">REFUSED</option>
                  <option value=\"CANCELLED\" ";
        // line 114
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_status", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 114, $this->source); })()), "t_status", [], "any", false, false, false, 114), "")) : ("")) == "CANCELLED")) ? ("selected") : (""));
        yield ">CANCELLED</option>
                </select>
              </div>

              <div class=\"select\">
                <select name=\"t_sort\">
                  <option value=\"latest\" ";
        // line 120
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_sort", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 120, $this->source); })()), "t_sort", [], "any", false, false, false, 120), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
                  <option value=\"oldest\" ";
        // line 121
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_sort", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 121, $this->source); })()), "t_sort", [], "any", false, false, false, 121), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                  <option value=\"title\" ";
        // line 122
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_sort", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 122, $this->source); })()), "t_sort", [], "any", false, false, false, 122), "latest")) : ("latest")) == "title")) ? ("selected") : (""));
        yield ">Titre</option>
                  <option value=\"status\" ";
        // line 123
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "t_sort", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 123, $this->source); })()), "t_sort", [], "any", false, false, false, 123), "latest")) : ("latest")) == "status")) ? ("selected") : (""));
        yield ">Statut inscription</option>
                </select>
              </div>

              <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
              <a class=\"btn btn--ghost\" href=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 128, $this->source); })()), "tab" => "tournaments"]), "html", null, true);
        yield "\">Reset</a>
            </form>

            ";
        // line 131
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["team_tournaments"]) || array_key_exists("team_tournaments", $context) ? $context["team_tournaments"] : (function () { throw new RuntimeError('Variable "team_tournaments" does not exist.', 131, $this->source); })()))) {
            // line 132
            yield "              <div class=\"emptyState\" style=\"margin-top:12px;\">Aucun tournoi trouve.</div>
            ";
        } else {
            // line 134
            yield "              <div class=\"cardsGrid\" style=\"margin-top:12px;\">
                ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["team_tournaments"]) || array_key_exists("team_tournaments", $context) ? $context["team_tournaments"] : (function () { throw new RuntimeError('Variable "team_tournaments" does not exist.', 135, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 136
                yield "                  ";
                $context["tournament"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tournamentId", [], "any", false, false, false, 136);
                // line 137
                yield "                  ";
                $context["tournamentId"] = (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 137, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "tournamentId", [], "any", true, true, false, 137) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 137, $this->source); })()), "tournamentId", [], "any", false, false, false, 137)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 137, $this->source); })()), "tournamentId", [], "any", false, false, false, 137)) : (0))) : (0));
                // line 138
                yield "                  ";
                $context["tournamentImagePath"] = ((((isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 138, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 138, $this->source); })()), "photoPath", [], "any", false, false, false, 138))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 138, $this->source); })()), "photoPath", [], "any", false, false, false, 138)) : (""));
                // line 139
                yield "                  ";
                $context["tournamentImageUrl"] = (((($tmp = (isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 139, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v2 = (isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 139, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) ? ((isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 139, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 139, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_team_tournament_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 139, $this->source); })())) . "/1200/800")));
                // line 140
                yield "
                  <article class=\"card card--tournament\">
                    <div class=\"card__media\" data-bg=\"";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentImageUrl"]) || array_key_exists("tournamentImageUrl", $context) ? $context["tournamentImageUrl"] : (function () { throw new RuntimeError('Variable "tournamentImageUrl" does not exist.', 142, $this->source); })()), "html", null, true);
                yield "\">
                      <div class=\"card__chips\">
                        <span class=\"chip chip--status\">";
                // line 144
                yield (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 144, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 144, $this->source); })()), "status", [], "any", false, false, false, 144), "html", null, true)) : ("-"));
                yield "</span>
                        <span class=\"chip chip--format\">";
                // line 145
                yield (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 145, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 145, $this->source); })()), "format", [], "any", false, false, false, 145), "html", null, true)) : ("-"));
                yield "</span>
                        <span class=\"chip\">Inscription: ";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "status", [], "any", false, false, false, 146), "html", null, true);
                yield "</span>
                      </div>
                    </div>

                    <div class=\"card__body\">
                      <h4 class=\"card__title\">";
                // line 151
                yield (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 151, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 151, $this->source); })()), "title", [], "any", false, false, false, 151), "html", null, true)) : ("Tournoi"));
                yield "</h4>
                      <p class=\"card__desc\">
                        Jeu: <b>";
                // line 153
                yield ((((isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 153, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 153, $this->source); })()), "gameId", [], "any", false, false, false, 153))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 153, $this->source); })()), "gameId", [], "any", false, false, false, 153), "name", [], "any", false, false, false, 153), "html", null, true)) : ("-"));
                yield "</b>
                        | Date: <b>";
                // line 154
                yield ((((isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 154, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 154, $this->source); })()), "startDate", [], "any", false, false, false, 154))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 154, $this->source); })()), "startDate", [], "any", false, false, false, 154), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</b>
                      </p>
                      <div class=\"card__metaRow\">
                        <span class=\"metaPill\">Prize: <b>";
                // line 157
                yield (((($tmp = (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 157, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 157, $this->source); })()), "prizePool", [], "any", false, false, false, 157), "html", null, true)) : ("0"));
                yield "</b></span>
                        <span class=\"metaPill\">Enregistre le: <b>";
                // line 158
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "registeredAt", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "registeredAt", [], "any", false, false, false, 158), "d/m/Y H:i"), "html", null, true)) : ("-"));
                yield "</b></span>
                      </div>

                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"";
                // line 162
                yield ((((isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 162, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 162, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments")));
                yield "\">Voir detail</a>
                      </div>
                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            yield "              </div>
            ";
        }
        // line 169
        yield "          </section>

          <section class=\"tabPanel ";
        // line 171
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 171, $this->source); })()) == "members")) ? ("is-active") : (""));
        yield "\">
            <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 172, $this->source); })())]), "html", null, true);
        yield "\" data-auto-submit=\"1\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"tab\" value=\"members\">
              <input class=\"input\" type=\"search\" name=\"m_q\" value=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_q", [], "any", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 174, $this->source); })()), "m_q", [], "any", false, false, false, 174), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un membre...\">

              <div class=\"select\">
                <select name=\"m_role\">
                  <option value=\"\" ";
        // line 178
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_role", [], "any", true, true, false, 178)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 178, $this->source); })()), "m_role", [], "any", false, false, false, 178), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Tous roles</option>
                  <option value=\"PLAYER\" ";
        // line 179
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_role", [], "any", true, true, false, 179)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 179, $this->source); })()), "m_role", [], "any", false, false, false, 179), "")) : ("")) == "PLAYER")) ? ("selected") : (""));
        yield ">PLAYER</option>
                  <option value=\"CAPTAIN\" ";
        // line 180
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_role", [], "any", true, true, false, 180)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 180, $this->source); })()), "m_role", [], "any", false, false, false, 180), "")) : ("")) == "CAPTAIN")) ? ("selected") : (""));
        yield ">CAPTAIN</option>
                  <option value=\"ORGANIZER\" ";
        // line 181
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_role", [], "any", true, true, false, 181)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 181, $this->source); })()), "m_role", [], "any", false, false, false, 181), "")) : ("")) == "ORGANIZER")) ? ("selected") : (""));
        yield ">ORGANIZER</option>
                  <option value=\"ADMIN\" ";
        // line 182
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_role", [], "any", true, true, false, 182)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 182, $this->source); })()), "m_role", [], "any", false, false, false, 182), "")) : ("")) == "ADMIN")) ? ("selected") : (""));
        yield ">ADMIN</option>
                </select>
              </div>

              <div class=\"select\">
                <select name=\"m_sort\">
                  <option value=\"joined_oldest\" ";
        // line 188
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_sort", [], "any", true, true, false, 188)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 188, $this->source); })()), "m_sort", [], "any", false, false, false, 188), "joined_oldest")) : ("joined_oldest")) == "joined_oldest")) ? ("selected") : (""));
        yield ">Anciennete ASC</option>
                  <option value=\"joined_latest\" ";
        // line 189
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_sort", [], "any", true, true, false, 189)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 189, $this->source); })()), "m_sort", [], "any", false, false, false, 189), "joined_oldest")) : ("joined_oldest")) == "joined_latest")) ? ("selected") : (""));
        yield ">Anciennete DESC</option>
                  <option value=\"name\" ";
        // line 190
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_sort", [], "any", true, true, false, 190)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 190, $this->source); })()), "m_sort", [], "any", false, false, false, 190), "joined_oldest")) : ("joined_oldest")) == "name")) ? ("selected") : (""));
        yield ">Nom</option>
                  <option value=\"role\" ";
        // line 191
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_sort", [], "any", true, true, false, 191)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 191, $this->source); })()), "m_sort", [], "any", false, false, false, 191), "joined_oldest")) : ("joined_oldest")) == "role")) ? ("selected") : (""));
        yield ">Role</option>
                </select>
              </div>

              <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
                <input type=\"checkbox\" name=\"m_active\" value=\"1\" ";
        // line 196
        yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "m_active", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 196, $this->source); })()), "m_active", [], "any", false, false, false, 196), true)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                Membres actifs
              </label>

              <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
              <a class=\"btn btn--ghost\" href=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 201, $this->source); })()), "tab" => "members"]), "html", null, true);
        yield "\">Reset</a>
            </form>

            ";
        // line 204
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["team_members"]) || array_key_exists("team_members", $context) ? $context["team_members"] : (function () { throw new RuntimeError('Variable "team_members" does not exist.', 204, $this->source); })()))) {
            // line 205
            yield "              <div class=\"emptyState\" style=\"margin-top:12px;\">Aucun membre trouve.</div>
            ";
        } else {
            // line 207
            yield "              <div class=\"cardsGrid\" style=\"margin-top:12px;\">
                ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["team_members"]) || array_key_exists("team_members", $context) ? $context["team_members"] : (function () { throw new RuntimeError('Variable "team_members" does not exist.', 208, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 209
                yield "                  ";
                $context["member"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "userId", [], "any", false, false, false, 209);
                // line 210
                yield "                  ";
                $context["memberId"] = (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 210, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "userId", [], "any", true, true, false, 210) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 210, $this->source); })()), "userId", [], "any", false, false, false, 210)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 210, $this->source); })()), "userId", [], "any", false, false, false, 210)) : (0))) : (0));
                // line 211
                yield "                  ";
                $context["memberImagePath"] = ((((isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 211, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 211, $this->source); })()), "profileImageId", [], "any", false, false, false, 211))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 211, $this->source); })()), "profileImageId", [], "any", false, false, false, 211), "fileUrl", [], "any", false, false, false, 211)) : (""));
                // line 212
                yield "                  ";
                $context["memberImageUrl"] = (((($tmp = (isset($context["memberImagePath"]) || array_key_exists("memberImagePath", $context) ? $context["memberImagePath"] : (function () { throw new RuntimeError('Variable "memberImagePath" does not exist.', 212, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v4 = (isset($context["memberImagePath"]) || array_key_exists("memberImagePath", $context) ? $context["memberImagePath"] : (function () { throw new RuntimeError('Variable "memberImagePath" does not exist.', 212, $this->source); })())) && is_string($_v5 = "http") && str_starts_with($_v4, $_v5))) ? ((isset($context["memberImagePath"]) || array_key_exists("memberImagePath", $context) ? $context["memberImagePath"] : (function () { throw new RuntimeError('Variable "memberImagePath" does not exist.', 212, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["memberImagePath"]) || array_key_exists("memberImagePath", $context) ? $context["memberImagePath"] : (function () { throw new RuntimeError('Variable "memberImagePath" does not exist.', 212, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_team_member_" . (isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 212, $this->source); })())) . "/800/800")));
                // line 213
                yield "
                  <article class=\"card card--member\">
                    <div class=\"card__media\" data-bg=\"";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["memberImageUrl"]) || array_key_exists("memberImageUrl", $context) ? $context["memberImageUrl"] : (function () { throw new RuntimeError('Variable "memberImageUrl" does not exist.', 215, $this->source); })()), "html", null, true);
                yield "\">
                      <div class=\"card__chips\">
                        <span class=\"chip chip--role\">";
                // line 217
                yield (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 217, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 217, $this->source); })()), "role", [], "any", false, false, false, 217), "html", null, true)) : ("-"));
                yield "</span>
                        <span class=\"chip\">";
                // line 218
                yield ((((isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 218, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 218, $this->source); })()), "country", [], "any", false, false, false, 218))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 218, $this->source); })()), "country", [], "any", false, false, false, 218), "html", null, true)) : ("-"));
                yield "</span>
                        <span class=\"chip\">Depuis: ";
                // line 219
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "joinedAt", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "joinedAt", [], "any", false, false, false, 219), "m/Y"), "html", null, true)) : ("-"));
                yield "</span>
                      </div>
                    </div>

                    <div class=\"card__body\">
                      <h4 class=\"card__title\">";
                // line 224
                yield (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 224, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 224, $this->source); })()), "displayName", [], "any", false, false, false, 224)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 224, $this->source); })()), "displayName", [], "any", false, false, false, 224), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 224, $this->source); })()), "username", [], "any", false, false, false, 224), "html", null, true)))) : ("Membre"));
                yield "</h4>
                      <p class=\"card__desc\">Username: <b>";
                // line 225
                yield (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 225, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 225, $this->source); })()), "username", [], "any", false, false, false, 225), "html", null, true)) : ("-"));
                yield "</b></p>

                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"";
                // line 228
                yield ((((isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 228, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile", ["id" => (isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 228, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players")));
                yield "\">Voir profil</a>
                        ";
                // line 229
                if ((((isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 229, $this->source); })()) && ((isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 229, $this->source); })()) > 0)) && ((isset($context["viewerId"]) || array_key_exists("viewerId", $context) ? $context["viewerId"] : (function () { throw new RuntimeError('Variable "viewerId" does not exist.', 229, $this->source); })()) != (isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 229, $this->source); })())))) {
                    // line 230
                    yield "                          <a class=\"btn btn--primary\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_conversation", ["id" => (isset($context["memberId"]) || array_key_exists("memberId", $context) ? $context["memberId"] : (function () { throw new RuntimeError('Variable "memberId" does not exist.', 230, $this->source); })())]), "html", null, true);
                    yield "\">Message</a>
                        ";
                } elseif ((($tmp =  !                // line 231
(isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 231, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 232
                    yield "                          <a class=\"btn btn--primary\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 232, $this->source); })()), "request", [], "any", false, false, false, 232), "uri", [], "any", false, false, false, 232)]), "html", null, true);
                    yield "\">Message</a>
                        ";
                }
                // line 234
                yield "                      </div>
                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            yield "              </div>
            ";
        }
        // line 240
        yield "          </section>

          <section class=\"tabPanel ";
        // line 242
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 242, $this->source); })()) == "products")) ? ("is-active") : (""));
        yield "\">
            <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 243, $this->source); })())]), "html", null, true);
        yield "\" data-auto-submit=\"1\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"tab\" value=\"products\">
              <input class=\"input\" type=\"search\" name=\"p_q\" value=\"";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_q", [], "any", true, true, false, 245)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 245, $this->source); })()), "p_q", [], "any", false, false, false, 245), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un produit...\">

              <div class=\"select\">
                <select name=\"p_sort\">
                  <option value=\"latest\" ";
        // line 249
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 249)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 249, $this->source); })()), "p_sort", [], "any", false, false, false, 249), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
                  <option value=\"oldest\" ";
        // line 250
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 250)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 250, $this->source); })()), "p_sort", [], "any", false, false, false, 250), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                  <option value=\"name\" ";
        // line 251
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 251)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 251, $this->source); })()), "p_sort", [], "any", false, false, false, 251), "latest")) : ("latest")) == "name")) ? ("selected") : (""));
        yield ">Nom</option>
                  <option value=\"price_high\" ";
        // line 252
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 252)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 252, $this->source); })()), "p_sort", [], "any", false, false, false, 252), "latest")) : ("latest")) == "price_high")) ? ("selected") : (""));
        yield ">Prix DESC</option>
                  <option value=\"price_low\" ";
        // line 253
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 253)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 253, $this->source); })()), "p_sort", [], "any", false, false, false, 253), "latest")) : ("latest")) == "price_low")) ? ("selected") : (""));
        yield ">Prix ASC</option>
                  <option value=\"stock_high\" ";
        // line 254
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_sort", [], "any", true, true, false, 254)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 254, $this->source); })()), "p_sort", [], "any", false, false, false, 254), "latest")) : ("latest")) == "stock_high")) ? ("selected") : (""));
        yield ">Stock DESC</option>
                </select>
              </div>

              <label class=\"btn btn--ghost\" style=\"display:flex; align-items:center; gap:8px;\">
                <input type=\"checkbox\" name=\"p_stock\" value=\"1\" ";
        // line 259
        yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "p_stock", [], "any", true, true, false, 259)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 259, $this->source); })()), "p_stock", [], "any", false, false, false, 259), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                En stock
              </label>

              <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
              <a class=\"btn btn--ghost\" href=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 264, $this->source); })()), "tab" => "products"]), "html", null, true);
        yield "\">Reset</a>
            </form>

            ";
        // line 267
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["team_products"]) || array_key_exists("team_products", $context) ? $context["team_products"] : (function () { throw new RuntimeError('Variable "team_products" does not exist.', 267, $this->source); })()))) {
            // line 268
            yield "              <div class=\"emptyState\" style=\"margin-top:12px;\">Aucun produit trouve.</div>
            ";
        } else {
            // line 270
            yield "              <div class=\"cardsGrid\" style=\"margin-top:12px;\">
                ";
            // line 271
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["team_products"]) || array_key_exists("team_products", $context) ? $context["team_products"] : (function () { throw new RuntimeError('Variable "team_products" does not exist.', 271, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 272
                yield "                  ";
                $context["productId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", true, true, false, 272) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 272)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 272)) : (0));
                // line 273
                yield "                  ";
                $context["primaryImage"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["team_products_primary_images_by_product_id"] ?? null), (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 273, $this->source); })()), [], "array", true, true, false, 273)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team_products_primary_images_by_product_id"]) || array_key_exists("team_products_primary_images_by_product_id", $context) ? $context["team_products_primary_images_by_product_id"] : (function () { throw new RuntimeError('Variable "team_products_primary_images_by_product_id" does not exist.', 273, $this->source); })()), (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 273, $this->source); })()), [], "array", false, false, false, 273), null)) : (null));
                // line 274
                yield "                  ";
                $context["imagePath"] = (((($tmp = (isset($context["primaryImage"]) || array_key_exists("primaryImage", $context) ? $context["primaryImage"] : (function () { throw new RuntimeError('Variable "primaryImage" does not exist.', 274, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["primaryImage"]) || array_key_exists("primaryImage", $context) ? $context["primaryImage"] : (function () { throw new RuntimeError('Variable "primaryImage" does not exist.', 274, $this->source); })()), "fileUrl", [], "any", false, false, false, 274)) : (""));
                // line 275
                yield "                  ";
                $context["imageUrl"] = (((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 275, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v6 = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 275, $this->source); })())) && is_string($_v7 = "http") && str_starts_with($_v6, $_v7))) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 275, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 275, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_team_product_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 275, $this->source); })())) . "/1200/800")));
                // line 276
                yield "
                  <article class=\"card card--product\">
                    <div class=\"card__media\" data-bg=\"";
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 278, $this->source); })()), "html", null, true);
                yield "\">
                      <div class=\"card__chips\">
                        <span class=\"chip chip--price\">";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 280), 2, ".", " "), "html", null, true);
                yield " DT</span>
                        <span class=\"chip\">Stock: ";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 281), "html", null, true);
                yield "</span>
                        <span class=\"chip\">";
                // line 282
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
                yield "</span>
                      </div>
                    </div>

                    <div class=\"card__body\">
                      <h4 class=\"card__title\">";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 287), "html", null, true);
                yield "</h4>
                      <p class=\"card__desc\">";
                // line 288
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 288)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 288), 0, 80) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 288)) > 80)) ? ("...") : (""))), "html", null, true)) : ("Produit officiel equipe."));
                yield "</p>

                      <div class=\"card__actions\">
                        <a class=\"btn btn--ghost\" href=\"";
                // line 291
                yield ((((isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 291, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 291, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop")));
                yield "\">Detail</a>
                        ";
                // line 292
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 292, $this->source); })()), "user", [], "any", false, false, false, 292) && ((isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 292, $this->source); })()) > 0))) {
                    // line 293
                    yield "                          <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_add", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 293, $this->source); })())]), "html", null, true);
                    yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 294
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_add_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 294, $this->source); })()))), "html", null, true);
                    yield "\">
                            <input type=\"hidden\" name=\"quantity\" value=\"1\">
                            <button class=\"btn btn--primary\" type=\"submit\" ";
                    // line 296
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 296) <= 0)) ? ("disabled") : (""));
                    yield ">
                              ";
                    // line 297
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 297) <= 0)) ? ("Rupture") : ("Ajouter au panier"));
                    yield "
                            </button>
                          </form>
                        ";
                } else {
                    // line 301
                    yield "                          <a class=\"btn btn--primary\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "request", [], "any", false, false, false, 301), "uri", [], "any", false, false, false, 301)]), "html", null, true);
                    yield "\">Ajouter au panier</a>
                        ";
                }
                // line 303
                yield "                      </div>
                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            yield "              </div>
            ";
        }
        // line 309
        yield "          </section>
        </div>
      </section>

      ";
        // line 313
        yield from $this->load("front/partials/_footer.html.twig", 313)->unwrap()->yield($context);
        // line 314
        yield "    </section>
  </main>

  ";
        // line 317
        yield from $this->load("front/partials/_auth_modal.html.twig", 317)->unwrap()->yield($context);
        
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
        return array (  848 => 317,  843 => 314,  841 => 313,  835 => 309,  831 => 307,  822 => 303,  816 => 301,  809 => 297,  805 => 296,  800 => 294,  795 => 293,  793 => 292,  789 => 291,  783 => 288,  779 => 287,  771 => 282,  767 => 281,  763 => 280,  758 => 278,  754 => 276,  751 => 275,  748 => 274,  745 => 273,  742 => 272,  738 => 271,  735 => 270,  731 => 268,  729 => 267,  723 => 264,  715 => 259,  707 => 254,  703 => 253,  699 => 252,  695 => 251,  691 => 250,  687 => 249,  680 => 245,  675 => 243,  671 => 242,  667 => 240,  663 => 238,  654 => 234,  648 => 232,  646 => 231,  641 => 230,  639 => 229,  635 => 228,  629 => 225,  625 => 224,  617 => 219,  613 => 218,  609 => 217,  604 => 215,  600 => 213,  597 => 212,  594 => 211,  591 => 210,  588 => 209,  584 => 208,  581 => 207,  577 => 205,  575 => 204,  569 => 201,  561 => 196,  553 => 191,  549 => 190,  545 => 189,  541 => 188,  532 => 182,  528 => 181,  524 => 180,  520 => 179,  516 => 178,  509 => 174,  504 => 172,  500 => 171,  496 => 169,  492 => 167,  481 => 162,  474 => 158,  470 => 157,  464 => 154,  460 => 153,  455 => 151,  447 => 146,  443 => 145,  439 => 144,  434 => 142,  430 => 140,  427 => 139,  424 => 138,  421 => 137,  418 => 136,  414 => 135,  411 => 134,  407 => 132,  405 => 131,  399 => 128,  391 => 123,  387 => 122,  383 => 121,  379 => 120,  370 => 114,  366 => 113,  362 => 112,  358 => 111,  354 => 110,  347 => 106,  342 => 104,  338 => 103,  329 => 99,  323 => 98,  317 => 97,  307 => 90,  303 => 89,  296 => 85,  292 => 84,  288 => 83,  278 => 75,  272 => 73,  270 => 72,  265 => 71,  263 => 70,  260 => 69,  254 => 67,  248 => 65,  246 => 64,  239 => 60,  234 => 59,  232 => 58,  227 => 57,  225 => 56,  218 => 52,  209 => 48,  204 => 46,  199 => 44,  194 => 42,  189 => 39,  183 => 38,  172 => 35,  168 => 34,  165 => 33,  160 => 32,  156 => 31,  151 => 28,  149 => 24,  148 => 22,  145 => 21,  142 => 20,  139 => 19,  136 => 18,  133 => 17,  130 => 16,  127 => 15,  124 => 14,  121 => 13,  118 => 12,  115 => 11,  112 => 10,  109 => 9,  106 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
  {% if logoPath and (logoPath starts with 'http') %}
    {% set logoUrl = logoPath %}
    {% set bannerUrl = logoPath %}
  {% elseif logoPath %}
    {% set logoUrl = asset(logoPath)|imagine_filter('team_logo') %}
    {% set bannerUrl = asset(logoPath)|imagine_filter('team_banner') %}
  {% else %}
    {% set logoUrl = 'https://picsum.photos/seed/pulse_team_logo_detail_' ~ teamId ~ '/600/600' %}
    {% set bannerUrl = 'https://picsum.photos/seed/pulse_team_banner_detail_' ~ teamId ~ '/1400/420' %}
  {% endif %}

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
          <div class=\"coverBlock\" data-bg=\"{{ bannerUrl }}\"></div>
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
", "front/pages/team-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\team-detail.html.twig");
    }
}
