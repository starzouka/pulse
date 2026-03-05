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

/* front/pages/feed.html.twig */
class __TwigTemplate_fc734273cdb3e57759b295ecead55390 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/feed.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/feed.html.twig"));

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

        yield "PULSE - Fil d'actualite";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Fil d'actualite", "hero_sub" => "Timeline sociale: publications, equipes et annonces.", "breadcrumb_current" => "Fil d'actualite"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "feed"]));
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
            ";
        // line 29
        if ((($tmp = (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "              ";
            yield from $this->load("front/partials/_post_composer.html.twig", 30)->unwrap()->yield(CoreExtension::merge($context, ["viewer_user" =>             // line 31
(isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 31, $this->source); })()), "action_route" => "front_feed_post_create", "csrf_token_id" => "feed_post_create", "placeholder" => "Que voulez-vous partager aujourd'hui ?", "form_class" => "panel gadget gadget--composer"]));
            // line 37
            yield "            ";
        } else {
            // line 38
            yield "              <section class=\"panel gadget\">
                <div class=\"emptyState\">
                  Connectez-vous pour publier et interagir avec le fil.
                  <div style=\"margin-top:10px;\"><a class=\"btn btn--primary\" href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "uri", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\">Se connecter</a></div>
                </div>
              </section>
            ";
        }
        // line 45
        yield "
            <section class=\"panel gadget\">
              <div class=\"panel__head\">
                <h3 class=\"panel__title\">NOUVEAUTES</h3>
                <div class=\"panel__desc\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["feed_posts"]) || array_key_exists("feed_posts", $context) ? $context["feed_posts"] : (function () { throw new RuntimeError('Variable "feed_posts" does not exist.', 49, $this->source); })())), "html", null, true);
        yield " publication(s)</div>
              </div>

              <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_feed");
        yield "\" style=\"margin-bottom:12px;\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 53, $this->source); })()), "q", [], "any", false, false, false, 53), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher auteur, texte...\" />
                <div class=\"select\">
                  <select name=\"visibility\">
                    <option value=\"\" ";
        // line 56
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "visibility", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 56, $this->source); })()), "visibility", [], "any", false, false, false, 56), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Toutes visibilites</option>
                    <option value=\"PUBLIC\" ";
        // line 57
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "visibility", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 57, $this->source); })()), "visibility", [], "any", false, false, false, 57), "")) : ("")) == "PUBLIC")) ? ("selected") : (""));
        yield ">PUBLIC</option>
                    <option value=\"FRIENDS\" ";
        // line 58
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "visibility", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 58, $this->source); })()), "visibility", [], "any", false, false, false, 58), "")) : ("")) == "FRIENDS")) ? ("selected") : (""));
        yield ">FRIENDS</option>
                    <option value=\"TEAM_ONLY\" ";
        // line 59
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "visibility", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 59, $this->source); })()), "visibility", [], "any", false, false, false, 59), "")) : ("")) == "TEAM_ONLY")) ? ("selected") : (""));
        yield ">TEAM_ONLY</option>
                  </select>
                </div>
                ";
        // line 62
        if ((($tmp = (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "                  <div class=\"select\">
                    <select name=\"author\">
                      <option value=\"\" ";
            // line 65
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "author", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 65, $this->source); })()), "author", [], "any", false, false, false, 65), "")) : ("")) == "")) ? ("selected") : (""));
            yield ">Tous les auteurs</option>
                      <option value=\"me\" ";
            // line 66
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "author", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 66, $this->source); })()), "author", [], "any", false, false, false, 66), "")) : ("")) == "me")) ? ("selected") : (""));
            yield ">Mes posts</option>
                    </select>
                  </div>
                ";
        }
        // line 70
        yield "                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"latest\" ";
        // line 72
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 72, $this->source); })()), "sort", [], "any", false, false, false, 72), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
                    <option value=\"oldest\" ";
        // line 73
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 73, $this->source); })()), "sort", [], "any", false, false, false, 73), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                    <option value=\"liked\" ";
        // line 74
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 74, $this->source); })()), "sort", [], "any", false, false, false, 74), "latest")) : ("latest")) == "liked")) ? ("selected") : (""));
        yield ">Plus likes</option>
                    <option value=\"commented\" ";
        // line 75
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 75, $this->source); })()), "sort", [], "any", false, false, false, 75), "latest")) : ("latest")) == "commented")) ? ("selected") : (""));
        yield ">Plus commentes</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_feed");
        yield "\">Reset</a>
              </form>

              <div
                id=\"feedContainer\"
                data-infinite-feed
                data-feed-endpoint=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_feed_chunk");
        yield "\"
                data-feed-query=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("feed_query_string", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["feed_query_string"]) || array_key_exists("feed_query_string", $context) ? $context["feed_query_string"] : (function () { throw new RuntimeError('Variable "feed_query_string" does not exist.', 86, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                data-feed-limit=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("feed_limit", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["feed_limit"]) || array_key_exists("feed_limit", $context) ? $context["feed_limit"] : (function () { throw new RuntimeError('Variable "feed_limit" does not exist.', 87, $this->source); })()), 12)) : (12)), "html", null, true);
        yield "\"
                data-feed-offset=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["feed_posts"]) || array_key_exists("feed_posts", $context) ? $context["feed_posts"] : (function () { throw new RuntimeError('Variable "feed_posts" does not exist.', 88, $this->source); })())), "html", null, true);
        yield "\"
                data-feed-has-more=\"";
        // line 89
        yield (((($tmp = ((array_key_exists("feed_has_more", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["feed_has_more"]) || array_key_exists("feed_has_more", $context) ? $context["feed_has_more"] : (function () { throw new RuntimeError('Variable "feed_has_more" does not exist.', 89, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\"
              >
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["feed_posts"]) || array_key_exists("feed_posts", $context) ? $context["feed_posts"] : (function () { throw new RuntimeError('Variable "feed_posts" does not exist.', 91, $this->source); })()));
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
            // line 92
            yield "                  ";
            yield from $this->load("front/partials/_post_card.html.twig", 92)->unwrap()->yield(CoreExtension::merge($context, ["post_data" =>             // line 93
$context["postData"], "viewer_user" =>             // line 94
(isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 94, $this->source); })()), "like_route" => "front_feed_post_like", "comment_route" => "front_feed_post_comment", "report_route" => "front_feed_post_report", "like_token_prefix" => "feed_post_like_", "comment_token_prefix" => "feed_post_comment_", "report_token_prefix" => "feed_post_report_"]));
            // line 102
            yield "                ";
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
        // line 103
        yield "              </div>

              ";
        // line 105
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["feed_posts"]) || array_key_exists("feed_posts", $context) ? $context["feed_posts"] : (function () { throw new RuntimeError('Variable "feed_posts" does not exist.', 105, $this->source); })()))) {
            // line 106
            yield "                <div class=\"emptyState\" data-feed-empty>Aucune publication disponible.</div>
              ";
        }
        // line 108
        yield "
              <div class=\"emptyState\" data-feed-loader hidden>Chargement...</div>
              <div class=\"emptyState\" data-feed-end ";
        // line 110
        yield (((($tmp = ((array_key_exists("feed_has_more", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["feed_has_more"]) || array_key_exists("feed_has_more", $context) ? $context["feed_has_more"] : (function () { throw new RuntimeError('Variable "feed_has_more" does not exist.', 110, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hidden") : (""));
        yield ">Fin du fil.</div>
              <div data-feed-sentinel></div>
            </section>
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">TENDANCES</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\"><span>#PulseInvitational</span><span class=\"listItem__meta\">Tournois</span></a>
                <a class=\"listItem\" href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_games");
        yield "\"><span>#Valorant</span><span class=\"listItem__meta\">Jeux</span></a>
                <a class=\"listItem\" href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams");
        yield "\"><span>#NorthHydra</span><span class=\"listItem__meta\">Equipes</span></a>
              </div>
            </section>

            <section class=\"panel gadget gadget--alert\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\"><span>Notifications</span><span class=\"listItem__meta\">Alertes</span></a>
                <a class=\"listItem\" href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages");
        yield "\"><span>Messagerie</span><span class=\"listItem__meta\">Direct</span></a>
                <a class=\"listItem\" href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile", ["tab" => "posts"]);
        yield "\"><span>Mon profil</span><span class=\"listItem__meta\">Posts</span></a>
              </div>
            </section>
          </aside>
        </div>
      </div>

      ";
        // line 137
        yield from $this->load("front/partials/_footer.html.twig", 137)->unwrap()->yield($context);
        // line 138
        yield "    </section>
  </main>

  ";
        // line 141
        yield from $this->load("front/partials/_auth_modal.html.twig", 141)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/feed.html.twig";
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
        return array (  388 => 141,  383 => 138,  381 => 137,  371 => 130,  367 => 129,  363 => 128,  353 => 121,  349 => 120,  345 => 119,  333 => 110,  329 => 108,  325 => 106,  323 => 105,  319 => 103,  305 => 102,  303 => 94,  302 => 93,  300 => 92,  283 => 91,  278 => 89,  274 => 88,  270 => 87,  266 => 86,  262 => 85,  253 => 79,  246 => 75,  242 => 74,  238 => 73,  234 => 72,  230 => 70,  223 => 66,  219 => 65,  215 => 63,  213 => 62,  207 => 59,  203 => 58,  199 => 57,  195 => 56,  189 => 53,  185 => 52,  179 => 49,  173 => 45,  166 => 41,  161 => 38,  158 => 37,  156 => 31,  154 => 30,  152 => 29,  149 => 28,  143 => 27,  132 => 24,  128 => 23,  125 => 22,  120 => 21,  116 => 20,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Fil d'actualite{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: \"Fil d'actualite\",
    hero_sub: 'Timeline sociale: publications, equipes et annonces.',
    breadcrumb_current: \"Fil d'actualite\"
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'feed' } %}

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

            {% if viewer_user %}
              {% include 'front/partials/_post_composer.html.twig' with {
                viewer_user: viewer_user,
                action_route: 'front_feed_post_create',
                csrf_token_id: 'feed_post_create',
                placeholder: \"Que voulez-vous partager aujourd'hui ?\",
                form_class: 'panel gadget gadget--composer'
              } %}
            {% else %}
              <section class=\"panel gadget\">
                <div class=\"emptyState\">
                  Connectez-vous pour publier et interagir avec le fil.
                  <div style=\"margin-top:10px;\"><a class=\"btn btn--primary\" href=\"{{ path('front_login', {'_target_path': app.request.uri}) }}\">Se connecter</a></div>
                </div>
              </section>
            {% endif %}

            <section class=\"panel gadget\">
              <div class=\"panel__head\">
                <h3 class=\"panel__title\">NOUVEAUTES</h3>
                <div class=\"panel__desc\">{{ feed_posts|length }} publication(s)</div>
              </div>

              <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_feed') }}\" style=\"margin-bottom:12px;\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Rechercher auteur, texte...\" />
                <div class=\"select\">
                  <select name=\"visibility\">
                    <option value=\"\" {{ (filters.visibility|default('')) == '' ? 'selected' : '' }}>Toutes visibilites</option>
                    <option value=\"PUBLIC\" {{ (filters.visibility|default('')) == 'PUBLIC' ? 'selected' : '' }}>PUBLIC</option>
                    <option value=\"FRIENDS\" {{ (filters.visibility|default('')) == 'FRIENDS' ? 'selected' : '' }}>FRIENDS</option>
                    <option value=\"TEAM_ONLY\" {{ (filters.visibility|default('')) == 'TEAM_ONLY' ? 'selected' : '' }}>TEAM_ONLY</option>
                  </select>
                </div>
                {% if viewer_user %}
                  <div class=\"select\">
                    <select name=\"author\">
                      <option value=\"\" {{ (filters.author|default('')) == '' ? 'selected' : '' }}>Tous les auteurs</option>
                      <option value=\"me\" {{ (filters.author|default('')) == 'me' ? 'selected' : '' }}>Mes posts</option>
                    </select>
                  </div>
                {% endif %}
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"latest\" {{ (filters.sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recents</option>
                    <option value=\"oldest\" {{ (filters.sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciens</option>
                    <option value=\"liked\" {{ (filters.sort|default('latest')) == 'liked' ? 'selected' : '' }}>Plus likes</option>
                    <option value=\"commented\" {{ (filters.sort|default('latest')) == 'commented' ? 'selected' : '' }}>Plus commentes</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_feed') }}\">Reset</a>
              </form>

              <div
                id=\"feedContainer\"
                data-infinite-feed
                data-feed-endpoint=\"{{ path('front_feed_chunk') }}\"
                data-feed-query=\"{{ feed_query_string|default('') }}\"
                data-feed-limit=\"{{ feed_limit|default(12) }}\"
                data-feed-offset=\"{{ feed_posts|length }}\"
                data-feed-has-more=\"{{ feed_has_more|default(false) ? '1' : '0' }}\"
              >
                {% for postData in feed_posts %}
                  {% include 'front/partials/_post_card.html.twig' with {
                    post_data: postData,
                    viewer_user: viewer_user,
                    like_route: 'front_feed_post_like',
                    comment_route: 'front_feed_post_comment',
                    report_route: 'front_feed_post_report',
                    like_token_prefix: 'feed_post_like_',
                    comment_token_prefix: 'feed_post_comment_',
                    report_token_prefix: 'feed_post_report_'
                  } %}
                {% endfor %}
              </div>

              {% if feed_posts is empty %}
                <div class=\"emptyState\" data-feed-empty>Aucune publication disponible.</div>
              {% endif %}

              <div class=\"emptyState\" data-feed-loader hidden>Chargement...</div>
              <div class=\"emptyState\" data-feed-end {{ feed_has_more|default(false) ? 'hidden' : '' }}>Fin du fil.</div>
              <div data-feed-sentinel></div>
            </section>
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">TENDANCES</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"{{ path('front_tournaments') }}\"><span>#PulseInvitational</span><span class=\"listItem__meta\">Tournois</span></a>
                <a class=\"listItem\" href=\"{{ path('front_games') }}\"><span>#Valorant</span><span class=\"listItem__meta\">Jeux</span></a>
                <a class=\"listItem\" href=\"{{ path('front_teams') }}\"><span>#NorthHydra</span><span class=\"listItem__meta\">Equipes</span></a>
              </div>
            </section>

            <section class=\"panel gadget gadget--alert\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"{{ path('front_notifications') }}\"><span>Notifications</span><span class=\"listItem__meta\">Alertes</span></a>
                <a class=\"listItem\" href=\"{{ path('front_messages') }}\"><span>Messagerie</span><span class=\"listItem__meta\">Direct</span></a>
                <a class=\"listItem\" href=\"{{ path('front_profile', {tab: 'posts'}) }}\"><span>Mon profil</span><span class=\"listItem__meta\">Posts</span></a>
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
", "front/pages/feed.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\pages\\feed.html.twig");
    }
}
