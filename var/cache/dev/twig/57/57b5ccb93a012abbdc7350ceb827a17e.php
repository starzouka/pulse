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

/* front/pages/friends.html.twig */
class __TwigTemplate_5e02f000a2a2e68cdb1b2af0aa82c369 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/friends.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/friends.html.twig"));

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

        yield "PULSE - Amis";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Amis", "hero_sub" => "Gestion des relations et demandes d'amis.", "breadcrumb_current" => "Amis"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "friends"]));
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
                yield ((($context["label"] == "error")) ? ("badge--danger") : ("badge--success"));
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
            <section class=\"panel gadget\">
              <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_friends");
        yield "\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input type=\"hidden\" name=\"tab\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 31, $this->source); })()), "my-friends")) : ("my-friends")), "html", null, true);
        yield "\">
                <input class=\"input\" type=\"search\" name=\"friend_q\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "friend_q", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 32, $this->source); })()), "friend_q", [], "any", false, false, false, 32), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un ami...\" />
                <div class=\"select\">
                  <select name=\"friends_sort\">
                    <option value=\"recent\" ";
        // line 35
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "friends_sort", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 35, $this->source); })()), "friends_sort", [], "any", false, false, false, 35), "recent")) : ("recent")) == "recent")) ? ("selected") : (""));
        yield ">Amis recents</option>
                    <option value=\"oldest\" ";
        // line 36
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "friends_sort", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "friends_sort", [], "any", false, false, false, 36), "recent")) : ("recent")) == "oldest")) ? ("selected") : (""));
        yield ">Amis anciens</option>
                    <option value=\"name\" ";
        // line 37
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "friends_sort", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 37, $this->source); })()), "friends_sort", [], "any", false, false, false, 37), "recent")) : ("recent")) == "name")) ? ("selected") : (""));
        yield ">Nom A-Z</option>
                  </select>
                </div>
                <input class=\"input\" type=\"search\" name=\"requests_q\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "requests_q", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 40, $this->source); })()), "requests_q", [], "any", false, false, false, 40), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher une demande...\" />
                <div class=\"select\">
                  <select name=\"requests_status\">
                    <option value=\"\" ";
        // line 43
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "requests_status", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 43, $this->source); })()), "requests_status", [], "any", false, false, false, 43), "PENDING")) : ("PENDING")) == "")) ? ("selected") : (""));
        yield ">Tous statuts</option>
                    <option value=\"PENDING\" ";
        // line 44
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "requests_status", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 44, $this->source); })()), "requests_status", [], "any", false, false, false, 44), "PENDING")) : ("PENDING")) == "PENDING")) ? ("selected") : (""));
        yield ">PENDING</option>
                    <option value=\"ACCEPTED\" ";
        // line 45
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "requests_status", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 45, $this->source); })()), "requests_status", [], "any", false, false, false, 45), "PENDING")) : ("PENDING")) == "ACCEPTED")) ? ("selected") : (""));
        yield ">ACCEPTED</option>
                    <option value=\"REFUSED\" ";
        // line 46
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "requests_status", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })()), "requests_status", [], "any", false, false, false, 46), "PENDING")) : ("PENDING")) == "REFUSED")) ? ("selected") : (""));
        yield ">REFUSED</option>
                    <option value=\"CANCELLED\" ";
        // line 47
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "requests_status", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 47, $this->source); })()), "requests_status", [], "any", false, false, false, 47), "PENDING")) : ("PENDING")) == "CANCELLED")) ? ("selected") : (""));
        yield ">CANCELLED</option>
                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"requests_sort\">
                    <option value=\"latest\" ";
        // line 52
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "requests_sort", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 52, $this->source); })()), "requests_sort", [], "any", false, false, false, 52), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Demandes recentes</option>
                    <option value=\"oldest\" ";
        // line 53
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "requests_sort", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 53, $this->source); })()), "requests_sort", [], "any", false, false, false, 53), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Demandes anciennes</option>
                    <option value=\"name\" ";
        // line 54
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "requests_sort", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 54, $this->source); })()), "requests_sort", [], "any", false, false, false, 54), "latest")) : ("latest")) == "name")) ? ("selected") : (""));
        yield ">Nom</option>
                    <option value=\"status\" ";
        // line 55
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "requests_sort", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })()), "requests_sort", [], "any", false, false, false, 55), "latest")) : ("latest")) == "status")) ? ("selected") : (""));
        yield ">Statut</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_friends");
        yield "\">Reset</a>
              </form>

              <div class=\"tabs\" data-tabs=\"friends-tabs\">
                <button class=\"tab ";
        // line 63
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 63, $this->source); })()), "my-friends")) : ("my-friends")) == "my-friends")) ? ("is-active") : (""));
        yield "\" data-tab=\"my-friends\">Mes amis</button>
                <button class=\"tab ";
        // line 64
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 64, $this->source); })()), "my-friends")) : ("my-friends")) == "received")) ? ("is-active") : (""));
        yield "\" data-tab=\"received\">Demandes recues</button>
                <button class=\"tab ";
        // line 65
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 65, $this->source); })()), "my-friends")) : ("my-friends")) == "sent")) ? ("is-active") : (""));
        yield "\" data-tab=\"sent\">Demandes envoyees</button>
              </div>

              <div class=\"tabPanels\" data-panels=\"friends-tabs\">
                <section class=\"tabPanel ";
        // line 69
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 69, $this->source); })()), "my-friends")) : ("my-friends")) == "my-friends")) ? ("is-active") : (""));
        yield "\" data-panel=\"my-friends\">
                  ";
        // line 70
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 70, $this->source); })()))) {
            // line 71
            yield "                    <div class=\"emptyState\">Aucun ami pour le moment.</div>
                  ";
        } else {
            // line 73
            yield "                    <div class=\"socialQuickList\">
                      ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 75
                yield "                        ";
                $context["friendId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "userId", [], "any", true, true, false, 75) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "userId", [], "any", false, false, false, 75)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "userId", [], "any", false, false, false, 75)) : (0));
                // line 76
                yield "                        <a class=\"listItem\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile", ["id" => (isset($context["friendId"]) || array_key_exists("friendId", $context) ? $context["friendId"] : (function () { throw new RuntimeError('Variable "friendId" does not exist.', 76, $this->source); })())]), "html", null, true);
                yield "\">
                          <span>";
                // line 77
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "displayName", [], "any", true, true, false, 77) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "displayName", [], "any", false, false, false, 77)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "displayName", [], "any", false, false, false, 77), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "username", [], "any", false, false, false, 77), "html", null, true)));
                yield " (@";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "username", [], "any", false, false, false, 77), "html", null, true);
                yield ")</span>
                          <span class=\"listItem__meta\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "role", [], "any", false, false, false, 78), "html", null, true);
                yield "</span>
                        </a>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['friend'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            yield "                    </div>
                  ";
        }
        // line 83
        yield "
                  ";
        // line 84
        yield from $this->load("front/partials/_pagination.html.twig", 84)->unwrap()->yield(CoreExtension::merge($context, ["pagination" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 85
($context["pagination"] ?? null), "friends", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 85, $this->source); })()), "friends", [], "any", false, false, false, 85), null)) : (null)), "route_name" => "front_friends", "page_param" => "friends_page", "query_params" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 88
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "query", [], "any", false, false, false, 88), "all", [], "any", false, false, false, 88), ["tab" => "my-friends"])]));
        // line 90
        yield "                </section>

                <section class=\"tabPanel ";
        // line 92
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 92, $this->source); })()), "my-friends")) : ("my-friends")) == "received")) ? ("is-active") : (""));
        yield "\" data-panel=\"received\">
                  ";
        // line 93
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["received_requests"]) || array_key_exists("received_requests", $context) ? $context["received_requests"] : (function () { throw new RuntimeError('Variable "received_requests" does not exist.', 93, $this->source); })()))) {
            // line 94
            yield "                    <div class=\"emptyState\">Aucune demande recue avec ces filtres.</div>
                  ";
        } else {
            // line 96
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["received_requests"]) || array_key_exists("received_requests", $context) ? $context["received_requests"] : (function () { throw new RuntimeError('Variable "received_requests" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 97
                yield "                      ";
                $context["sender"] = CoreExtension::getAttribute($this->env, $this->source, $context["request"], "fromUserId", [], "any", false, false, false, 97);
                // line 98
                yield "                      <article class=\"panel profilePost\">
                        <div class=\"postCard__head\">
                          <div class=\"postCard__author\">
                            <div>
                              <div class=\"name\">";
                // line 102
                yield (((($tmp = (isset($context["sender"]) || array_key_exists("sender", $context) ? $context["sender"] : (function () { throw new RuntimeError('Variable "sender" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["sender"] ?? null), "displayName", [], "any", true, true, false, 102) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sender"]) || array_key_exists("sender", $context) ? $context["sender"] : (function () { throw new RuntimeError('Variable "sender" does not exist.', 102, $this->source); })()), "displayName", [], "any", false, false, false, 102)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sender"]) || array_key_exists("sender", $context) ? $context["sender"] : (function () { throw new RuntimeError('Variable "sender" does not exist.', 102, $this->source); })()), "displayName", [], "any", false, false, false, 102), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sender"]) || array_key_exists("sender", $context) ? $context["sender"] : (function () { throw new RuntimeError('Variable "sender" does not exist.', 102, $this->source); })()), "username", [], "any", false, false, false, 102), "html", null, true)))) : ("Utilisateur"));
                yield "</div>
                              <div class=\"sub\">Recu le ";
                // line 103
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["request"], "createdAt", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "createdAt", [], "any", false, false, false, 103), "d/m/Y H:i"), "html", null, true)) : ("-"));
                yield "</div>
                            </div>
                          </div>
                          <span class=\"badge\">PENDING</span>
                        </div>
                        <div class=\"postCard__actions\">
                          <form method=\"post\" action=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_friends_request_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requestId", [], "any", false, false, false, 109)]), "html", null, true);
                yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("friend_request_accept_" . CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requestId", [], "any", false, false, false, 110))), "html", null, true);
                yield "\">
                            <button class=\"btn btn--primary\" type=\"submit\">Accepter</button>
                          </form>
                          <form method=\"post\" action=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_friends_request_refuse", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requestId", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("friend_request_refuse_" . CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requestId", [], "any", false, false, false, 114))), "html", null, true);
                yield "\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Refuser</button>
                          </form>
                        </div>
                      </article>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['request'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "                  ";
        }
        // line 121
        yield "
                  ";
        // line 122
        yield from $this->load("front/partials/_pagination.html.twig", 122)->unwrap()->yield(CoreExtension::merge($context, ["pagination" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 123
($context["pagination"] ?? null), "received", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 123, $this->source); })()), "received", [], "any", false, false, false, 123), null)) : (null)), "route_name" => "front_friends", "page_param" => "received_page", "query_params" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 126
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "query", [], "any", false, false, false, 126), "all", [], "any", false, false, false, 126), ["tab" => "received"])]));
        // line 128
        yield "                </section>

                <section class=\"tabPanel ";
        // line 130
        yield (((((array_key_exists("active_tab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 130, $this->source); })()), "my-friends")) : ("my-friends")) == "sent")) ? ("is-active") : (""));
        yield "\" data-panel=\"sent\">
                  ";
        // line 131
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["sent_requests"]) || array_key_exists("sent_requests", $context) ? $context["sent_requests"] : (function () { throw new RuntimeError('Variable "sent_requests" does not exist.', 131, $this->source); })()))) {
            // line 132
            yield "                    <div class=\"emptyState\">Aucune demande envoyee avec ces filtres.</div>
                  ";
        } else {
            // line 134
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sent_requests"]) || array_key_exists("sent_requests", $context) ? $context["sent_requests"] : (function () { throw new RuntimeError('Variable "sent_requests" does not exist.', 134, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 135
                yield "                      ";
                $context["target"] = CoreExtension::getAttribute($this->env, $this->source, $context["request"], "toUserId", [], "any", false, false, false, 135);
                // line 136
                yield "                      <article class=\"panel profilePost\">
                        <div class=\"postCard__head\">
                          <div class=\"postCard__author\">
                            <div>
                              <div class=\"name\">";
                // line 140
                yield (((($tmp = (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 140, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["target"] ?? null), "displayName", [], "any", true, true, false, 140) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 140, $this->source); })()), "displayName", [], "any", false, false, false, 140)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 140, $this->source); })()), "displayName", [], "any", false, false, false, 140), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 140, $this->source); })()), "username", [], "any", false, false, false, 140), "html", null, true)))) : ("Utilisateur"));
                yield "</div>
                              <div class=\"sub\">Envoyee le ";
                // line 141
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["request"], "createdAt", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "createdAt", [], "any", false, false, false, 141), "d/m/Y H:i"), "html", null, true)) : ("-"));
                yield "</div>
                            </div>
                          </div>
                          <span class=\"badge\">PENDING</span>
                        </div>
                        <div class=\"postCard__actions\">
                          <form method=\"post\" action=\"";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_friends_request_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requestId", [], "any", false, false, false, 147)]), "html", null, true);
                yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("friend_request_cancel_" . CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requestId", [], "any", false, false, false, 148))), "html", null, true);
                yield "\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Annuler</button>
                          </form>
                        </div>
                      </article>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['request'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            yield "                  ";
        }
        // line 155
        yield "
                  ";
        // line 156
        yield from $this->load("front/partials/_pagination.html.twig", 156)->unwrap()->yield(CoreExtension::merge($context, ["pagination" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 157
($context["pagination"] ?? null), "sent", [], "any", true, true, false, 157)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 157, $this->source); })()), "sent", [], "any", false, false, false, 157), null)) : (null)), "route_name" => "front_friends", "page_param" => "sent_page", "query_params" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 160
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "request", [], "any", false, false, false, 160), "query", [], "any", false, false, false, 160), "all", [], "any", false, false, false, 160), ["tab" => "sent"])]));
        // line 162
        yield "                </section>
              </div>
            </section>
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">SUGGESTIONS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players");
        yield "\"><span>Trouver des joueurs</span><span class=\"listItem__meta\">Explorer</span></a>
                <a class=\"listItem\" href=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players", ["role" => "CAPTAIN"]);
        yield "\"><span>Capitaines actifs</span><span class=\"listItem__meta\">Filtrer</span></a>
              </div>
            </section>

            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages");
        yield "\"><span>Ouvrir messagerie</span><span class=\"listItem__meta\">Direct</span></a>
                <a class=\"listItem\" href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_feed");
        yield "\"><span>Aller au fil</span><span class=\"listItem__meta\">Social</span></a>
              </div>
            </section>
          </aside>
        </div>
      </div>

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
        return "front/pages/friends.html.twig";
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
        return array (  493 => 191,  488 => 188,  486 => 187,  476 => 180,  472 => 179,  462 => 172,  458 => 171,  447 => 162,  445 => 160,  444 => 157,  443 => 156,  440 => 155,  437 => 154,  425 => 148,  421 => 147,  412 => 141,  408 => 140,  402 => 136,  399 => 135,  394 => 134,  390 => 132,  388 => 131,  384 => 130,  380 => 128,  378 => 126,  377 => 123,  376 => 122,  373 => 121,  370 => 120,  358 => 114,  354 => 113,  348 => 110,  344 => 109,  335 => 103,  331 => 102,  325 => 98,  322 => 97,  317 => 96,  313 => 94,  311 => 93,  307 => 92,  303 => 90,  301 => 88,  300 => 85,  299 => 84,  296 => 83,  292 => 81,  283 => 78,  277 => 77,  272 => 76,  269 => 75,  265 => 74,  262 => 73,  258 => 71,  256 => 70,  252 => 69,  245 => 65,  241 => 64,  237 => 63,  230 => 59,  223 => 55,  219 => 54,  215 => 53,  211 => 52,  203 => 47,  199 => 46,  195 => 45,  191 => 44,  187 => 43,  181 => 40,  175 => 37,  171 => 36,  167 => 35,  161 => 32,  157 => 31,  153 => 30,  149 => 28,  143 => 27,  132 => 24,  128 => 23,  125 => 22,  120 => 21,  116 => 20,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Amis{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Amis',
    hero_sub: \"Gestion des relations et demandes d'amis.\",
    breadcrumb_current: 'Amis'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'friends' } %}

        <div class=\"socialShell\">
          <div class=\"socialStack\">
            {% for label, messages in app.flashes %}
              {% for message in messages %}
                <div class=\"listItem\">
                  <span>{{ message }}</span>
                  <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
                </div>
              {% endfor %}
            {% endfor %}

            <section class=\"panel gadget\">
              <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_friends') }}\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input type=\"hidden\" name=\"tab\" value=\"{{ active_tab|default('my-friends') }}\">
                <input class=\"input\" type=\"search\" name=\"friend_q\" value=\"{{ filters.friend_q|default('') }}\" placeholder=\"Rechercher un ami...\" />
                <div class=\"select\">
                  <select name=\"friends_sort\">
                    <option value=\"recent\" {{ (filters.friends_sort|default('recent')) == 'recent' ? 'selected' : '' }}>Amis recents</option>
                    <option value=\"oldest\" {{ (filters.friends_sort|default('recent')) == 'oldest' ? 'selected' : '' }}>Amis anciens</option>
                    <option value=\"name\" {{ (filters.friends_sort|default('recent')) == 'name' ? 'selected' : '' }}>Nom A-Z</option>
                  </select>
                </div>
                <input class=\"input\" type=\"search\" name=\"requests_q\" value=\"{{ filters.requests_q|default('') }}\" placeholder=\"Rechercher une demande...\" />
                <div class=\"select\">
                  <select name=\"requests_status\">
                    <option value=\"\" {{ (filters.requests_status|default('PENDING')) == '' ? 'selected' : '' }}>Tous statuts</option>
                    <option value=\"PENDING\" {{ (filters.requests_status|default('PENDING')) == 'PENDING' ? 'selected' : '' }}>PENDING</option>
                    <option value=\"ACCEPTED\" {{ (filters.requests_status|default('PENDING')) == 'ACCEPTED' ? 'selected' : '' }}>ACCEPTED</option>
                    <option value=\"REFUSED\" {{ (filters.requests_status|default('PENDING')) == 'REFUSED' ? 'selected' : '' }}>REFUSED</option>
                    <option value=\"CANCELLED\" {{ (filters.requests_status|default('PENDING')) == 'CANCELLED' ? 'selected' : '' }}>CANCELLED</option>
                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"requests_sort\">
                    <option value=\"latest\" {{ (filters.requests_sort|default('latest')) == 'latest' ? 'selected' : '' }}>Demandes recentes</option>
                    <option value=\"oldest\" {{ (filters.requests_sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Demandes anciennes</option>
                    <option value=\"name\" {{ (filters.requests_sort|default('latest')) == 'name' ? 'selected' : '' }}>Nom</option>
                    <option value=\"status\" {{ (filters.requests_sort|default('latest')) == 'status' ? 'selected' : '' }}>Statut</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_friends') }}\">Reset</a>
              </form>

              <div class=\"tabs\" data-tabs=\"friends-tabs\">
                <button class=\"tab {{ (active_tab|default('my-friends')) == 'my-friends' ? 'is-active' : '' }}\" data-tab=\"my-friends\">Mes amis</button>
                <button class=\"tab {{ (active_tab|default('my-friends')) == 'received' ? 'is-active' : '' }}\" data-tab=\"received\">Demandes recues</button>
                <button class=\"tab {{ (active_tab|default('my-friends')) == 'sent' ? 'is-active' : '' }}\" data-tab=\"sent\">Demandes envoyees</button>
              </div>

              <div class=\"tabPanels\" data-panels=\"friends-tabs\">
                <section class=\"tabPanel {{ (active_tab|default('my-friends')) == 'my-friends' ? 'is-active' : '' }}\" data-panel=\"my-friends\">
                  {% if friends is empty %}
                    <div class=\"emptyState\">Aucun ami pour le moment.</div>
                  {% else %}
                    <div class=\"socialQuickList\">
                      {% for friend in friends %}
                        {% set friendId = friend.userId ?? 0 %}
                        <a class=\"listItem\" href=\"{{ path('front_player_profile', {id: friendId}) }}\">
                          <span>{{ friend.displayName ?? friend.username }} (@{{ friend.username }})</span>
                          <span class=\"listItem__meta\">{{ friend.role }}</span>
                        </a>
                      {% endfor %}
                    </div>
                  {% endif %}

                  {% include 'front/partials/_pagination.html.twig' with {
                    pagination: pagination.friends|default(null),
                    route_name: 'front_friends',
                    page_param: 'friends_page',
                    query_params: app.request.query.all|merge({tab: 'my-friends'})
                  } %}
                </section>

                <section class=\"tabPanel {{ (active_tab|default('my-friends')) == 'received' ? 'is-active' : '' }}\" data-panel=\"received\">
                  {% if received_requests is empty %}
                    <div class=\"emptyState\">Aucune demande recue avec ces filtres.</div>
                  {% else %}
                    {% for request in received_requests %}
                      {% set sender = request.fromUserId %}
                      <article class=\"panel profilePost\">
                        <div class=\"postCard__head\">
                          <div class=\"postCard__author\">
                            <div>
                              <div class=\"name\">{{ sender ? (sender.displayName ?? sender.username) : 'Utilisateur' }}</div>
                              <div class=\"sub\">Recu le {{ request.createdAt ? request.createdAt|date('d/m/Y H:i') : '-' }}</div>
                            </div>
                          </div>
                          <span class=\"badge\">PENDING</span>
                        </div>
                        <div class=\"postCard__actions\">
                          <form method=\"post\" action=\"{{ path('front_friends_request_accept', {id: request.requestId}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('friend_request_accept_' ~ request.requestId) }}\">
                            <button class=\"btn btn--primary\" type=\"submit\">Accepter</button>
                          </form>
                          <form method=\"post\" action=\"{{ path('front_friends_request_refuse', {id: request.requestId}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('friend_request_refuse_' ~ request.requestId) }}\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Refuser</button>
                          </form>
                        </div>
                      </article>
                    {% endfor %}
                  {% endif %}

                  {% include 'front/partials/_pagination.html.twig' with {
                    pagination: pagination.received|default(null),
                    route_name: 'front_friends',
                    page_param: 'received_page',
                    query_params: app.request.query.all|merge({tab: 'received'})
                  } %}
                </section>

                <section class=\"tabPanel {{ (active_tab|default('my-friends')) == 'sent' ? 'is-active' : '' }}\" data-panel=\"sent\">
                  {% if sent_requests is empty %}
                    <div class=\"emptyState\">Aucune demande envoyee avec ces filtres.</div>
                  {% else %}
                    {% for request in sent_requests %}
                      {% set target = request.toUserId %}
                      <article class=\"panel profilePost\">
                        <div class=\"postCard__head\">
                          <div class=\"postCard__author\">
                            <div>
                              <div class=\"name\">{{ target ? (target.displayName ?? target.username) : 'Utilisateur' }}</div>
                              <div class=\"sub\">Envoyee le {{ request.createdAt ? request.createdAt|date('d/m/Y H:i') : '-' }}</div>
                            </div>
                          </div>
                          <span class=\"badge\">PENDING</span>
                        </div>
                        <div class=\"postCard__actions\">
                          <form method=\"post\" action=\"{{ path('front_friends_request_cancel', {id: request.requestId}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('friend_request_cancel_' ~ request.requestId) }}\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Annuler</button>
                          </form>
                        </div>
                      </article>
                    {% endfor %}
                  {% endif %}

                  {% include 'front/partials/_pagination.html.twig' with {
                    pagination: pagination.sent|default(null),
                    route_name: 'front_friends',
                    page_param: 'sent_page',
                    query_params: app.request.query.all|merge({tab: 'sent'})
                  } %}
                </section>
              </div>
            </section>
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">SUGGESTIONS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"{{ path('front_players') }}\"><span>Trouver des joueurs</span><span class=\"listItem__meta\">Explorer</span></a>
                <a class=\"listItem\" href=\"{{ path('front_players', {role: 'CAPTAIN'}) }}\"><span>Capitaines actifs</span><span class=\"listItem__meta\">Filtrer</span></a>
              </div>
            </section>

            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"{{ path('front_messages') }}\"><span>Ouvrir messagerie</span><span class=\"listItem__meta\">Direct</span></a>
                <a class=\"listItem\" href=\"{{ path('front_feed') }}\"><span>Aller au fil</span><span class=\"listItem__meta\">Social</span></a>
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
", "front/pages/friends.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\friends.html.twig");
    }
}
