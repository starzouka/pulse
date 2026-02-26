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

/* front/pages/dashboard.html.twig */
class __TwigTemplate_092b20b1f42e65bc7c9ca62e5f5e3424 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/dashboard.html.twig"));

        // line 3
        $context["avatarPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 3, $this->source); })()), "profileImageId", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 3, $this->source); })()), "profileImageId", [], "any", false, false, false, 3), "fileUrl", [], "any", false, false, false, 3)) : (""));
        // line 4
        $context["avatarUrl"] = (((($tmp = (isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 4, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 4, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 4, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_dashboard_" . (((CoreExtension::getAttribute($this->env, $this->source, ($context["viewer_user"] ?? null), "userId", [], "any", true, true, false, 4) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 4, $this->source); })()), "userId", [], "any", false, false, false, 4)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 4, $this->source); })()), "userId", [], "any", false, false, false, 4)) : (0))) . "/200/200")));
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
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

        yield "PULSE - Dashboard joueur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "  ";
        yield from $this->load("front/partials/_hero_mini.html.twig", 9)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Dashboard joueur", "hero_sub" => "Vue sociale de votre activite du jour.", "breadcrumb_current" => "Dashboard joueur"]));
        // line 15
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 19
        yield from $this->load("front/partials/_player_side_nav.html.twig", 19)->unwrap()->yield(CoreExtension::merge($context, ["active" => "dashboard"]));
        // line 20
        yield "
        <div>
          <div class=\"socialShell\">
            <div class=\"socialStack\">
              ";
        // line 24
        yield from $this->load("front/partials/_post_composer.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["viewer_user" =>         // line 25
(isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 25, $this->source); })()), "action_route" => "front_feed_post_create", "csrf_token_id" => "feed_post_create", "placeholder" => "Partager une nouvelle, un score ou une annonce...", "form_class" => "panel gadget gadget--composer"]));
        // line 31
        yield "
              <section class=\"panel gadget\">
                <div class=\"panel__head\">
                  <h3 class=\"panel__title\">FIL RAPIDE</h3>
                  <a class=\"btn btn--ghost\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_feed");
        yield "\">Voir tout</a>
                </div>

                <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_dashboard");
        yield "\" style=\"margin-bottom:12px;\">
                  <input class=\"input\" type=\"search\" name=\"feed_q\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard_feed_filters"] ?? null), "q", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard_feed_filters"]) || array_key_exists("dashboard_feed_filters", $context) ? $context["dashboard_feed_filters"] : (function () { throw new RuntimeError('Variable "dashboard_feed_filters" does not exist.', 39, $this->source); })()), "q", [], "any", false, false, false, 39), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher dans les publications...\" />
                  <div class=\"select\">
                    <select name=\"feed_visibility\">
                      <option value=\"\" ";
        // line 42
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard_feed_filters"] ?? null), "visibility", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard_feed_filters"]) || array_key_exists("dashboard_feed_filters", $context) ? $context["dashboard_feed_filters"] : (function () { throw new RuntimeError('Variable "dashboard_feed_filters" does not exist.', 42, $this->source); })()), "visibility", [], "any", false, false, false, 42), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Toutes visibilites</option>
                      <option value=\"PUBLIC\" ";
        // line 43
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard_feed_filters"] ?? null), "visibility", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard_feed_filters"]) || array_key_exists("dashboard_feed_filters", $context) ? $context["dashboard_feed_filters"] : (function () { throw new RuntimeError('Variable "dashboard_feed_filters" does not exist.', 43, $this->source); })()), "visibility", [], "any", false, false, false, 43), "")) : ("")) == "PUBLIC")) ? ("selected") : (""));
        yield ">PUBLIC</option>
                      <option value=\"FRIENDS\" ";
        // line 44
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard_feed_filters"] ?? null), "visibility", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard_feed_filters"]) || array_key_exists("dashboard_feed_filters", $context) ? $context["dashboard_feed_filters"] : (function () { throw new RuntimeError('Variable "dashboard_feed_filters" does not exist.', 44, $this->source); })()), "visibility", [], "any", false, false, false, 44), "")) : ("")) == "FRIENDS")) ? ("selected") : (""));
        yield ">FRIENDS</option>
                      <option value=\"TEAM_ONLY\" ";
        // line 45
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard_feed_filters"] ?? null), "visibility", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard_feed_filters"]) || array_key_exists("dashboard_feed_filters", $context) ? $context["dashboard_feed_filters"] : (function () { throw new RuntimeError('Variable "dashboard_feed_filters" does not exist.', 45, $this->source); })()), "visibility", [], "any", false, false, false, 45), "")) : ("")) == "TEAM_ONLY")) ? ("selected") : (""));
        yield ">TEAM_ONLY</option>
                    </select>
                  </div>
                  <div class=\"select\">
                    <select name=\"feed_sort\">
                      <option value=\"latest\" ";
        // line 50
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard_feed_filters"] ?? null), "sort", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard_feed_filters"]) || array_key_exists("dashboard_feed_filters", $context) ? $context["dashboard_feed_filters"] : (function () { throw new RuntimeError('Variable "dashboard_feed_filters" does not exist.', 50, $this->source); })()), "sort", [], "any", false, false, false, 50), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
                      <option value=\"oldest\" ";
        // line 51
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard_feed_filters"] ?? null), "sort", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard_feed_filters"]) || array_key_exists("dashboard_feed_filters", $context) ? $context["dashboard_feed_filters"] : (function () { throw new RuntimeError('Variable "dashboard_feed_filters" does not exist.', 51, $this->source); })()), "sort", [], "any", false, false, false, 51), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                      <option value=\"liked\" ";
        // line 52
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard_feed_filters"] ?? null), "sort", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard_feed_filters"]) || array_key_exists("dashboard_feed_filters", $context) ? $context["dashboard_feed_filters"] : (function () { throw new RuntimeError('Variable "dashboard_feed_filters" does not exist.', 52, $this->source); })()), "sort", [], "any", false, false, false, 52), "latest")) : ("latest")) == "liked")) ? ("selected") : (""));
        yield ">Plus likes</option>
                      <option value=\"commented\" ";
        // line 53
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["dashboard_feed_filters"] ?? null), "sort", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dashboard_feed_filters"]) || array_key_exists("dashboard_feed_filters", $context) ? $context["dashboard_feed_filters"] : (function () { throw new RuntimeError('Variable "dashboard_feed_filters" does not exist.', 53, $this->source); })()), "sort", [], "any", false, false, false, 53), "latest")) : ("latest")) == "commented")) ? ("selected") : (""));
        yield ">Plus commentes</option>
                    </select>
                  </div>
                  <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                  <a class=\"btn btn--ghost\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_dashboard");
        yield "\">Reset</a>
                </form>

                <div
                  id=\"dashboardFeedContainer\"
                  data-infinite-feed
                  data-feed-endpoint=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_feed_chunk");
        yield "\"
                  data-feed-query=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("dashboard_feed_query_string", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dashboard_feed_query_string"]) || array_key_exists("dashboard_feed_query_string", $context) ? $context["dashboard_feed_query_string"] : (function () { throw new RuntimeError('Variable "dashboard_feed_query_string" does not exist.', 64, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                  data-feed-limit=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("dashboard_feed_limit", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dashboard_feed_limit"]) || array_key_exists("dashboard_feed_limit", $context) ? $context["dashboard_feed_limit"] : (function () { throw new RuntimeError('Variable "dashboard_feed_limit" does not exist.', 65, $this->source); })()), 8)) : (8)), "html", null, true);
        yield "\"
                  data-feed-offset=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["dashboard_feed_posts"]) || array_key_exists("dashboard_feed_posts", $context) ? $context["dashboard_feed_posts"] : (function () { throw new RuntimeError('Variable "dashboard_feed_posts" does not exist.', 66, $this->source); })())), "html", null, true);
        yield "\"
                  data-feed-has-more=\"";
        // line 67
        yield (((($tmp = ((array_key_exists("dashboard_feed_has_more", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dashboard_feed_has_more"]) || array_key_exists("dashboard_feed_has_more", $context) ? $context["dashboard_feed_has_more"] : (function () { throw new RuntimeError('Variable "dashboard_feed_has_more" does not exist.', 67, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\"
                >
                  ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dashboard_feed_posts"]) || array_key_exists("dashboard_feed_posts", $context) ? $context["dashboard_feed_posts"] : (function () { throw new RuntimeError('Variable "dashboard_feed_posts" does not exist.', 69, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["postData"]) {
            // line 70
            yield "                    ";
            yield from $this->load("front/partials/_post_card.html.twig", 70)->unwrap()->yield(CoreExtension::merge($context, ["post_data" =>             // line 71
$context["postData"], "viewer_user" =>             // line 72
(isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 72, $this->source); })()), "like_route" => "front_feed_post_like", "comment_route" => "front_feed_post_comment", "report_route" => "front_feed_post_report", "like_token_prefix" => "feed_post_like_", "comment_token_prefix" => "feed_post_comment_", "report_token_prefix" => "feed_post_report_", "redirect_uri" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 79
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "request", [], "any", false, false, false, 79), "uri", [], "any", false, false, false, 79)]));
            // line 81
            yield "                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['postData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                </div>

                ";
        // line 84
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["dashboard_feed_posts"]) || array_key_exists("dashboard_feed_posts", $context) ? $context["dashboard_feed_posts"] : (function () { throw new RuntimeError('Variable "dashboard_feed_posts" does not exist.', 84, $this->source); })()))) {
            // line 85
            yield "                  <div class=\"emptyState\" data-feed-empty>Aucune publication recente.</div>
                ";
        }
        // line 87
        yield "
                <div class=\"emptyState\" data-feed-loader hidden>Chargement...</div>
                <div class=\"emptyState\" data-feed-end ";
        // line 89
        yield (((($tmp = ((array_key_exists("dashboard_feed_has_more", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dashboard_feed_has_more"]) || array_key_exists("dashboard_feed_has_more", $context) ? $context["dashboard_feed_has_more"] : (function () { throw new RuntimeError('Variable "dashboard_feed_has_more" does not exist.', 89, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hidden") : (""));
        yield ">Fin du fil.</div>
                <div data-feed-sentinel></div>
              </section>
            </div>

            <aside class=\"socialStack\">
              <section class=\"panel gadget gadget--profile\">
                <div class=\"profileHeader\">
                  <div class=\"avatarLg\" data-avatar=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarUrl"]) || array_key_exists("avatarUrl", $context) ? $context["avatarUrl"] : (function () { throw new RuntimeError('Variable "avatarUrl" does not exist.', 97, $this->source); })()), "html", null, true);
        yield "\"></div>
                  <div>
                    <h3 style=\"margin:0;\">";
        // line 99
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["viewer_user"] ?? null), "displayName", [], "any", true, true, false, 99) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 99, $this->source); })()), "displayName", [], "any", false, false, false, 99)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 99, $this->source); })()), "displayName", [], "any", false, false, false, 99), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 99, $this->source); })()), "username", [], "any", false, false, false, 99), "html", null, true)));
        yield " (@";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 99, $this->source); })()), "username", [], "any", false, false, false, 99), "html", null, true);
        yield ")</h3>
                    <div class=\"muted\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 100, $this->source); })()), "role", [], "any", false, false, false, 100), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 100, $this->source); })()), "country", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " · ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 100, $this->source); })()), "country", [], "any", false, false, false, 100), "html", null, true);
        }
        yield "</div>
                    <div class=\"profileHeader__actions\">
                      <a class=\"btn btn--ghost\" href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile");
        yield "\">Mon profil</a>
                      <a class=\"btn btn--ghost\" href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile_edit");
        yield "\">Modifier</a>
                    </div>
                  </div>
                </div>
                <div class=\"statsRow\">
                  <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_data"]) || array_key_exists("profile_data", $context) ? $context["profile_data"] : (function () { throw new RuntimeError('Variable "profile_data" does not exist.', 108, $this->source); })()), "stats", [], "any", false, false, false, 108), "friends", [], "any", false, false, false, 108), "html", null, true);
        yield "</div><div class=\"statCard__label\">Amis</div></div>
                  <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_data"]) || array_key_exists("profile_data", $context) ? $context["profile_data"] : (function () { throw new RuntimeError('Variable "profile_data" does not exist.', 109, $this->source); })()), "stats", [], "any", false, false, false, 109), "teams", [], "any", false, false, false, 109), "html", null, true);
        yield "</div><div class=\"statCard__label\">Equipes</div></div>
                  <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_data"]) || array_key_exists("profile_data", $context) ? $context["profile_data"] : (function () { throw new RuntimeError('Variable "profile_data" does not exist.', 110, $this->source); })()), "stats", [], "any", false, false, false, 110), "posts", [], "any", false, false, false, 110), "html", null, true);
        yield "</div><div class=\"statCard__label\">Posts</div></div>
                </div>
              </section>

              <section class=\"panel gadget\">
                <h3 class=\"panel__title\">RACCOURCIS</h3>
                <div class=\"socialQuickList\">
                  <a class=\"listItem\" href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players");
        yield "\"><span>Recherche joueurs</span><span class=\"listItem__meta\">Trouver</span></a>
                  <a class=\"listItem\" href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages");
        yield "\"><span>Messages</span><span class=\"listItem__meta\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unread_messages_count"]) || array_key_exists("unread_messages_count", $context) ? $context["unread_messages_count"] : (function () { throw new RuntimeError('Variable "unread_messages_count" does not exist.', 118, $this->source); })()), "html", null, true);
        yield " non lus</span></a>
                  <a class=\"listItem\" href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
        yield "\"><span>Mes equipes</span><span class=\"listItem__meta\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_data"]) || array_key_exists("profile_data", $context) ? $context["profile_data"] : (function () { throw new RuntimeError('Variable "profile_data" does not exist.', 119, $this->source); })()), "stats", [], "any", false, false, false, 119), "teams", [], "any", false, false, false, 119), "html", null, true);
        yield " actives</span></a>
                  <a class=\"listItem\" href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\"><span>Mes commandes</span><span class=\"listItem__meta\">Voir</span></a>
                </div>
              </section>

              <section class=\"panel gadget gadget--alert\">
                <h3 class=\"panel__title\">NOTIFICATIONS</h3>
                <div class=\"list\">
                  ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recent_notifications"]) || array_key_exists("recent_notifications", $context) ? $context["recent_notifications"] : (function () { throw new RuntimeError('Variable "recent_notifications" does not exist.', 127, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 128
            yield "                    <a class=\"listItem\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
            yield "\">
                      <span>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "content", [], "any", false, false, false, 129), "html", null, true);
            yield "</span>
                      <span class=\"badge ";
            // line 130
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "isRead", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("badge--info"));
            yield "\">";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "isRead", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Lu") : ("Nouveau"));
            yield "</span>
                    </a>
                  ";
            $context['_iterated'] = true;
        }
        // line 132
        if (!$context['_iterated']) {
            // line 133
            yield "                    <div class=\"emptyState\">Aucune notification.</div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "                </div>
                <div class=\"postCard__actions\" style=\"margin-top:10px;\">
                  <a class=\"btn btn--ghost\" href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\">Voir toutes (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unread_notifications_count"]) || array_key_exists("unread_notifications_count", $context) ? $context["unread_notifications_count"] : (function () { throw new RuntimeError('Variable "unread_notifications_count" does not exist.', 137, $this->source); })()), "html", null, true);
        yield " non lues)</a>
                </div>
              </section>

              <section class=\"panel gadget\">
                <h3 class=\"panel__title\">EN ATTENTE</h3>
                <div class=\"list\">
                  <a class=\"listItem\" href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_friends");
        yield "\"><span>Demandes d'ami</span><span class=\"badge\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pending_friend_requests_count"]) || array_key_exists("pending_friend_requests_count", $context) ? $context["pending_friend_requests_count"] : (function () { throw new RuntimeError('Variable "pending_friend_requests_count" does not exist.', 144, $this->source); })()), "html", null, true);
        yield "</span></a>
                  <a class=\"listItem\" href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
        yield "\"><span>Invitations equipe</span><span class=\"badge\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pending_team_invites_count"]) || array_key_exists("pending_team_invites_count", $context) ? $context["pending_team_invites_count"] : (function () { throw new RuntimeError('Variable "pending_team_invites_count" does not exist.', 145, $this->source); })()), "html", null, true);
        yield "</span></a>
                  <a class=\"listItem\" href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_requests");
        yield "\"><span>Demandes adhesion</span><span class=\"badge\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pending_team_join_requests_count"]) || array_key_exists("pending_team_join_requests_count", $context) ? $context["pending_team_join_requests_count"] : (function () { throw new RuntimeError('Variable "pending_team_join_requests_count" does not exist.', 146, $this->source); })()), "html", null, true);
        yield "</span></a>
                </div>
              </section>
            </aside>
          </div>
        </div>
      </div>

      ";
        // line 154
        yield from $this->load("front/partials/_footer.html.twig", 154)->unwrap()->yield($context);
        // line 155
        yield "    </section>
  </main>

  ";
        // line 158
        yield from $this->load("front/partials/_auth_modal.html.twig", 158)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/dashboard.html.twig";
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
        return array (  434 => 158,  429 => 155,  427 => 154,  414 => 146,  408 => 145,  402 => 144,  390 => 137,  386 => 135,  379 => 133,  377 => 132,  368 => 130,  364 => 129,  359 => 128,  354 => 127,  344 => 120,  338 => 119,  332 => 118,  328 => 117,  318 => 110,  314 => 109,  310 => 108,  302 => 103,  298 => 102,  289 => 100,  283 => 99,  278 => 97,  267 => 89,  263 => 87,  259 => 85,  257 => 84,  253 => 82,  239 => 81,  237 => 79,  236 => 72,  235 => 71,  233 => 70,  216 => 69,  211 => 67,  207 => 66,  203 => 65,  199 => 64,  195 => 63,  186 => 57,  179 => 53,  175 => 52,  171 => 51,  167 => 50,  159 => 45,  155 => 44,  151 => 43,  147 => 42,  141 => 39,  137 => 38,  131 => 35,  125 => 31,  123 => 25,  122 => 24,  116 => 20,  114 => 19,  108 => 15,  105 => 9,  92 => 8,  69 => 6,  58 => 1,  56 => 4,  54 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% set avatarPath = viewer_user.profileImageId ? viewer_user.profileImageId.fileUrl : '' %}
{% set avatarUrl = avatarPath ? (avatarPath starts with 'http' ? avatarPath : asset(avatarPath)) : 'https://picsum.photos/seed/pulse_dashboard_' ~ (viewer_user.userId ?? 0) ~ '/200/200' %}

{% block title %}PULSE - Dashboard joueur{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Dashboard joueur',
    hero_sub: 'Vue sociale de votre activite du jour.',
    breadcrumb_current: 'Dashboard joueur'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'dashboard' } %}

        <div>
          <div class=\"socialShell\">
            <div class=\"socialStack\">
              {% include 'front/partials/_post_composer.html.twig' with {
                viewer_user: viewer_user,
                action_route: 'front_feed_post_create',
                csrf_token_id: 'feed_post_create',
                placeholder: 'Partager une nouvelle, un score ou une annonce...',
                form_class: 'panel gadget gadget--composer'
              } %}

              <section class=\"panel gadget\">
                <div class=\"panel__head\">
                  <h3 class=\"panel__title\">FIL RAPIDE</h3>
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_feed') }}\">Voir tout</a>
                </div>

                <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_dashboard') }}\" style=\"margin-bottom:12px;\">
                  <input class=\"input\" type=\"search\" name=\"feed_q\" value=\"{{ dashboard_feed_filters.q|default('') }}\" placeholder=\"Rechercher dans les publications...\" />
                  <div class=\"select\">
                    <select name=\"feed_visibility\">
                      <option value=\"\" {{ (dashboard_feed_filters.visibility|default('')) == '' ? 'selected' : '' }}>Toutes visibilites</option>
                      <option value=\"PUBLIC\" {{ (dashboard_feed_filters.visibility|default('')) == 'PUBLIC' ? 'selected' : '' }}>PUBLIC</option>
                      <option value=\"FRIENDS\" {{ (dashboard_feed_filters.visibility|default('')) == 'FRIENDS' ? 'selected' : '' }}>FRIENDS</option>
                      <option value=\"TEAM_ONLY\" {{ (dashboard_feed_filters.visibility|default('')) == 'TEAM_ONLY' ? 'selected' : '' }}>TEAM_ONLY</option>
                    </select>
                  </div>
                  <div class=\"select\">
                    <select name=\"feed_sort\">
                      <option value=\"latest\" {{ (dashboard_feed_filters.sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recents</option>
                      <option value=\"oldest\" {{ (dashboard_feed_filters.sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciens</option>
                      <option value=\"liked\" {{ (dashboard_feed_filters.sort|default('latest')) == 'liked' ? 'selected' : '' }}>Plus likes</option>
                      <option value=\"commented\" {{ (dashboard_feed_filters.sort|default('latest')) == 'commented' ? 'selected' : '' }}>Plus commentes</option>
                    </select>
                  </div>
                  <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_dashboard') }}\">Reset</a>
                </form>

                <div
                  id=\"dashboardFeedContainer\"
                  data-infinite-feed
                  data-feed-endpoint=\"{{ path('front_feed_chunk') }}\"
                  data-feed-query=\"{{ dashboard_feed_query_string|default('') }}\"
                  data-feed-limit=\"{{ dashboard_feed_limit|default(8) }}\"
                  data-feed-offset=\"{{ dashboard_feed_posts|length }}\"
                  data-feed-has-more=\"{{ dashboard_feed_has_more|default(false) ? '1' : '0' }}\"
                >
                  {% for postData in dashboard_feed_posts %}
                    {% include 'front/partials/_post_card.html.twig' with {
                      post_data: postData,
                      viewer_user: viewer_user,
                      like_route: 'front_feed_post_like',
                      comment_route: 'front_feed_post_comment',
                      report_route: 'front_feed_post_report',
                      like_token_prefix: 'feed_post_like_',
                      comment_token_prefix: 'feed_post_comment_',
                      report_token_prefix: 'feed_post_report_',
                      redirect_uri: app.request.uri
                    } %}
                  {% endfor %}
                </div>

                {% if dashboard_feed_posts is empty %}
                  <div class=\"emptyState\" data-feed-empty>Aucune publication recente.</div>
                {% endif %}

                <div class=\"emptyState\" data-feed-loader hidden>Chargement...</div>
                <div class=\"emptyState\" data-feed-end {{ dashboard_feed_has_more|default(false) ? 'hidden' : '' }}>Fin du fil.</div>
                <div data-feed-sentinel></div>
              </section>
            </div>

            <aside class=\"socialStack\">
              <section class=\"panel gadget gadget--profile\">
                <div class=\"profileHeader\">
                  <div class=\"avatarLg\" data-avatar=\"{{ avatarUrl }}\"></div>
                  <div>
                    <h3 style=\"margin:0;\">{{ viewer_user.displayName ?? viewer_user.username }} (@{{ viewer_user.username }})</h3>
                    <div class=\"muted\">{{ viewer_user.role }}{% if viewer_user.country %} · {{ viewer_user.country }}{% endif %}</div>
                    <div class=\"profileHeader__actions\">
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_profile') }}\">Mon profil</a>
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_profile_edit') }}\">Modifier</a>
                    </div>
                  </div>
                </div>
                <div class=\"statsRow\">
                  <div class=\"statCard\"><div class=\"statCard__value\">{{ profile_data.stats.friends }}</div><div class=\"statCard__label\">Amis</div></div>
                  <div class=\"statCard\"><div class=\"statCard__value\">{{ profile_data.stats.teams }}</div><div class=\"statCard__label\">Equipes</div></div>
                  <div class=\"statCard\"><div class=\"statCard__value\">{{ profile_data.stats.posts }}</div><div class=\"statCard__label\">Posts</div></div>
                </div>
              </section>

              <section class=\"panel gadget\">
                <h3 class=\"panel__title\">RACCOURCIS</h3>
                <div class=\"socialQuickList\">
                  <a class=\"listItem\" href=\"{{ path('front_players') }}\"><span>Recherche joueurs</span><span class=\"listItem__meta\">Trouver</span></a>
                  <a class=\"listItem\" href=\"{{ path('front_messages') }}\"><span>Messages</span><span class=\"listItem__meta\">{{ unread_messages_count }} non lus</span></a>
                  <a class=\"listItem\" href=\"{{ path('front_my_teams') }}\"><span>Mes equipes</span><span class=\"listItem__meta\">{{ profile_data.stats.teams }} actives</span></a>
                  <a class=\"listItem\" href=\"{{ path('front_orders') }}\"><span>Mes commandes</span><span class=\"listItem__meta\">Voir</span></a>
                </div>
              </section>

              <section class=\"panel gadget gadget--alert\">
                <h3 class=\"panel__title\">NOTIFICATIONS</h3>
                <div class=\"list\">
                  {% for notification in recent_notifications %}
                    <a class=\"listItem\" href=\"{{ path('front_notifications') }}\">
                      <span>{{ notification.content }}</span>
                      <span class=\"badge {{ notification.isRead ? '' : 'badge--info' }}\">{{ notification.isRead ? 'Lu' : 'Nouveau' }}</span>
                    </a>
                  {% else %}
                    <div class=\"emptyState\">Aucune notification.</div>
                  {% endfor %}
                </div>
                <div class=\"postCard__actions\" style=\"margin-top:10px;\">
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_notifications') }}\">Voir toutes ({{ unread_notifications_count }} non lues)</a>
                </div>
              </section>

              <section class=\"panel gadget\">
                <h3 class=\"panel__title\">EN ATTENTE</h3>
                <div class=\"list\">
                  <a class=\"listItem\" href=\"{{ path('front_friends') }}\"><span>Demandes d'ami</span><span class=\"badge\">{{ pending_friend_requests_count }}</span></a>
                  <a class=\"listItem\" href=\"{{ path('front_my_teams') }}\"><span>Invitations equipe</span><span class=\"badge\">{{ pending_team_invites_count }}</span></a>
                  <a class=\"listItem\" href=\"{{ path('front_my_requests') }}\"><span>Demandes adhesion</span><span class=\"badge\">{{ pending_team_join_requests_count }}</span></a>
                </div>
              </section>
            </aside>
          </div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/dashboard.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\dashboard.html.twig");
    }
}
