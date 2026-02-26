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

/* front/pages/notifications.html.twig */
class __TwigTemplate_1deca3b14c09d9b9068b022dd65802ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/notifications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/notifications.html.twig"));

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

        yield "PULSE - Notifications";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Notifications", "hero_sub" => "Fil des alertes et evenements importants.", "breadcrumb_current" => "Notifications"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "notifications"]));
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
                <h3 class=\"panel__title\">ALERTES</h3>
                <form method=\"post\" action=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications_mark_all_read");
        yield "\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("notifications_mark_all_read"), "html", null, true);
        yield "\">
                  <button class=\"btn btn--ghost\" type=\"submit\">Tout marquer lu</button>
                </form>
              </div>

              <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 39, $this->source); })()), "q", [], "any", false, false, false, 39), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher dans les notifications...\" />
                <div class=\"select\">
                  <select name=\"type\">
                    <option value=\"\" ";
        // line 42
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Tous types</option>
                    <option value=\"FRIEND_REQUEST\" ";
        // line 43
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 43, $this->source); })()), "type", [], "any", false, false, false, 43), "")) : ("")) == "FRIEND_REQUEST")) ? ("selected") : (""));
        yield ">FRIEND_REQUEST</option>
                    <option value=\"TEAM_INVITE\" ";
        // line 44
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 44, $this->source); })()), "type", [], "any", false, false, false, 44), "")) : ("")) == "TEAM_INVITE")) ? ("selected") : (""));
        yield ">TEAM_INVITE</option>
                    <option value=\"TEAM_JOIN_RESPONSE\" ";
        // line 45
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45), "")) : ("")) == "TEAM_JOIN_RESPONSE")) ? ("selected") : (""));
        yield ">TEAM_JOIN_RESPONSE</option>
                    <option value=\"NEW_MESSAGE\" ";
        // line 46
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })()), "type", [], "any", false, false, false, 46), "")) : ("")) == "NEW_MESSAGE")) ? ("selected") : (""));
        yield ">NEW_MESSAGE</option>
                    <option value=\"TOURNAMENT_REQUEST_STATUS\" ";
        // line 47
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 47, $this->source); })()), "type", [], "any", false, false, false, 47), "")) : ("")) == "TOURNAMENT_REQUEST_STATUS")) ? ("selected") : (""));
        yield ">TOURNAMENT_REQUEST_STATUS</option>
                    <option value=\"ORDER_STATUS\" ";
        // line 48
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48), "")) : ("")) == "ORDER_STATUS")) ? ("selected") : (""));
        yield ">ORDER_STATUS</option>
                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"latest\" ";
        // line 53
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 53, $this->source); })()), "sort", [], "any", false, false, false, 53), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recentes</option>
                    <option value=\"oldest\" ";
        // line 54
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 54, $this->source); })()), "sort", [], "any", false, false, false, 54), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciennes</option>
                    <option value=\"type\" ";
        // line 55
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })()), "sort", [], "any", false, false, false, 55), "latest")) : ("latest")) == "type")) ? ("selected") : (""));
        yield ">Type</option>
                  </select>
                </div>
                ";
        // line 58
        if ((($tmp = (isset($context["only_unread"]) || array_key_exists("only_unread", $context) ? $context["only_unread"] : (function () { throw new RuntimeError('Variable "only_unread" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "                  <input type=\"hidden\" name=\"unread\" value=\"1\">
                ";
        }
        // line 61
        yield "                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\">Reset</a>
              </form>

              ";
        // line 65
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 65, $this->source); })()))) {
            // line 66
            yield "                <div class=\"emptyState\">Aucune notification a afficher.</div>
              ";
        } else {
            // line 68
            yield "                <div class=\"list\">
                  ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 69, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 70
                yield "                    ";
                $context["isNew"] =  !CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "isRead", [], "any", false, false, false, 70);
                // line 71
                yield "                    ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
                // line 72
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 72) == "NEW_MESSAGE")) {
                    // line 73
                    yield "                      ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages");
                    // line 74
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 74) == "TEAM_INVITE")) {
                    // line 75
                    yield "                      ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
                    // line 76
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 76) == "TEAM_JOIN_RESPONSE")) {
                    // line 77
                    yield "                      ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_requests");
                    // line 78
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 78) == "ORDER_STATUS")) {
                    // line 79
                    yield "                      ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
                    // line 80
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 80) == "TOURNAMENT_REQUEST_STATUS")) {
                    // line 81
                    yield "                      ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests");
                    // line 82
                    yield "                    ";
                }
                // line 83
                yield "
                    <a class=\"listItem\" href=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 84, $this->source); })()), "html", null, true);
                yield "\">
                      <span>";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "content", [], "any", false, false, false, 85), "html", null, true);
                yield "</span>
                      <span class=\"badge ";
                // line 86
                yield (((($tmp = (isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 86, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge--info") : (""));
                yield "\">";
                yield (((($tmp = (isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 86, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Nouveau") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 86), "d/m H:i"), "html", null, true)) : ("Lu"))));
                yield "</span>
                    </a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "                </div>
              ";
        }
        // line 91
        yield "            </section>

            ";
        // line 93
        yield from $this->load("front/partials/_pagination.html.twig", 93)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 94
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 94, $this->source); })()), "route_name" => "front_notifications"]));
        // line 97
        yield "          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">FILTRES</h3>
              <div class=\"postCard__actions\">
                <a class=\"btn ";
        // line 103
        yield (((($tmp =  !(isset($context["only_unread"]) || array_key_exists("only_unread", $context) ? $context["only_unread"] : (function () { throw new RuntimeError('Variable "only_unread" does not exist.', 103, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn--soft") : ("btn--ghost"));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications", ["q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 104
($context["filters"] ?? null), "q", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 104, $this->source); })()), "q", [], "any", false, false, false, 104), "")) : ("")), "type" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 105
($context["filters"] ?? null), "type", [], "any", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 105, $this->source); })()), "type", [], "any", false, false, false, 105), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 106
($context["filters"] ?? null), "sort", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 106, $this->source); })()), "sort", [], "any", false, false, false, 106), "latest")) : ("latest"))]), "html", null, true);
        // line 107
        yield "\">Toutes</a>
                <a class=\"btn ";
        // line 108
        yield (((($tmp = (isset($context["only_unread"]) || array_key_exists("only_unread", $context) ? $context["only_unread"] : (function () { throw new RuntimeError('Variable "only_unread" does not exist.', 108, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn--soft") : ("btn--ghost"));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications", ["unread" => 1, "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 110
($context["filters"] ?? null), "q", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 110, $this->source); })()), "q", [], "any", false, false, false, 110), "")) : ("")), "type" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 111
($context["filters"] ?? null), "type", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 111, $this->source); })()), "type", [], "any", false, false, false, 111), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 112
($context["filters"] ?? null), "sort", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 112, $this->source); })()), "sort", [], "any", false, false, false, 112), "latest")) : ("latest"))]), "html", null, true);
        // line 113
        yield "\">Non lues</a>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">STATISTIQUES</h3>
              <div class=\"statsRow\">
                <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 120, $this->source); })())), "html", null, true);
        yield "</div><div class=\"statCard__label\">Affichees</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unread_count"]) || array_key_exists("unread_count", $context) ? $context["unread_count"] : (function () { throw new RuntimeError('Variable "unread_count" does not exist.', 121, $this->source); })()), "html", null, true);
        yield "</div><div class=\"statCard__label\">Non lues</div></div>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages");
        yield "\"><span>Messages</span><span class=\"listItem__meta\">Ouvrir</span></a>
                <a class=\"listItem\" href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
        yield "\"><span>Mes equipes</span><span class=\"listItem__meta\">Gerer</span></a>
                <a class=\"listItem\" href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\"><span>Mes commandes</span><span class=\"listItem__meta\">Suivi</span></a>
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
        return "front/pages/notifications.html.twig";
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
        return array (  396 => 141,  391 => 138,  389 => 137,  379 => 130,  375 => 129,  371 => 128,  361 => 121,  357 => 120,  348 => 113,  346 => 112,  345 => 111,  344 => 110,  341 => 108,  338 => 107,  336 => 106,  335 => 105,  334 => 104,  331 => 103,  323 => 97,  321 => 94,  320 => 93,  316 => 91,  312 => 89,  301 => 86,  297 => 85,  293 => 84,  290 => 83,  287 => 82,  284 => 81,  281 => 80,  278 => 79,  275 => 78,  272 => 77,  269 => 76,  266 => 75,  263 => 74,  260 => 73,  257 => 72,  254 => 71,  251 => 70,  247 => 69,  244 => 68,  240 => 66,  238 => 65,  232 => 62,  229 => 61,  225 => 59,  223 => 58,  217 => 55,  213 => 54,  209 => 53,  201 => 48,  197 => 47,  193 => 46,  189 => 45,  185 => 44,  181 => 43,  177 => 42,  171 => 39,  167 => 38,  159 => 33,  155 => 32,  149 => 28,  143 => 27,  132 => 24,  128 => 23,  125 => 22,  120 => 21,  116 => 20,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Notifications{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Notifications',
    hero_sub: 'Fil des alertes et evenements importants.',
    breadcrumb_current: 'Notifications'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'notifications' } %}

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
                <h3 class=\"panel__title\">ALERTES</h3>
                <form method=\"post\" action=\"{{ path('front_notifications_mark_all_read') }}\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('notifications_mark_all_read') }}\">
                  <button class=\"btn btn--ghost\" type=\"submit\">Tout marquer lu</button>
                </form>
              </div>

              <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_notifications') }}\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Rechercher dans les notifications...\" />
                <div class=\"select\">
                  <select name=\"type\">
                    <option value=\"\" {{ (filters.type|default('')) == '' ? 'selected' : '' }}>Tous types</option>
                    <option value=\"FRIEND_REQUEST\" {{ (filters.type|default('')) == 'FRIEND_REQUEST' ? 'selected' : '' }}>FRIEND_REQUEST</option>
                    <option value=\"TEAM_INVITE\" {{ (filters.type|default('')) == 'TEAM_INVITE' ? 'selected' : '' }}>TEAM_INVITE</option>
                    <option value=\"TEAM_JOIN_RESPONSE\" {{ (filters.type|default('')) == 'TEAM_JOIN_RESPONSE' ? 'selected' : '' }}>TEAM_JOIN_RESPONSE</option>
                    <option value=\"NEW_MESSAGE\" {{ (filters.type|default('')) == 'NEW_MESSAGE' ? 'selected' : '' }}>NEW_MESSAGE</option>
                    <option value=\"TOURNAMENT_REQUEST_STATUS\" {{ (filters.type|default('')) == 'TOURNAMENT_REQUEST_STATUS' ? 'selected' : '' }}>TOURNAMENT_REQUEST_STATUS</option>
                    <option value=\"ORDER_STATUS\" {{ (filters.type|default('')) == 'ORDER_STATUS' ? 'selected' : '' }}>ORDER_STATUS</option>
                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"latest\" {{ (filters.sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recentes</option>
                    <option value=\"oldest\" {{ (filters.sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciennes</option>
                    <option value=\"type\" {{ (filters.sort|default('latest')) == 'type' ? 'selected' : '' }}>Type</option>
                  </select>
                </div>
                {% if only_unread %}
                  <input type=\"hidden\" name=\"unread\" value=\"1\">
                {% endif %}
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_notifications') }}\">Reset</a>
              </form>

              {% if notifications is empty %}
                <div class=\"emptyState\">Aucune notification a afficher.</div>
              {% else %}
                <div class=\"list\">
                  {% for notification in notifications %}
                    {% set isNew = not notification.isRead %}
                    {% set link = path('front_notifications') %}
                    {% if notification.type == 'NEW_MESSAGE' %}
                      {% set link = path('front_messages') %}
                    {% elseif notification.type == 'TEAM_INVITE' %}
                      {% set link = path('front_my_teams') %}
                    {% elseif notification.type == 'TEAM_JOIN_RESPONSE' %}
                      {% set link = path('front_my_requests') %}
                    {% elseif notification.type == 'ORDER_STATUS' %}
                      {% set link = path('front_orders') %}
                    {% elseif notification.type == 'TOURNAMENT_REQUEST_STATUS' %}
                      {% set link = path('front_organizer_requests') %}
                    {% endif %}

                    <a class=\"listItem\" href=\"{{ link }}\">
                      <span>{{ notification.content }}</span>
                      <span class=\"badge {{ isNew ? 'badge--info' : '' }}\">{{ isNew ? 'Nouveau' : (notification.createdAt ? notification.createdAt|date('d/m H:i') : 'Lu') }}</span>
                    </a>
                  {% endfor %}
                </div>
              {% endif %}
            </section>

            {% include 'front/partials/_pagination.html.twig' with {
              pagination: pagination,
              route_name: 'front_notifications'
            } %}
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">FILTRES</h3>
              <div class=\"postCard__actions\">
                <a class=\"btn {{ not only_unread ? 'btn--soft' : 'btn--ghost' }}\" href=\"{{ path('front_notifications', {
                  q: filters.q|default(''),
                  type: filters.type|default(''),
                  sort: filters.sort|default('latest')
                }) }}\">Toutes</a>
                <a class=\"btn {{ only_unread ? 'btn--soft' : 'btn--ghost' }}\" href=\"{{ path('front_notifications', {
                  unread: 1,
                  q: filters.q|default(''),
                  type: filters.type|default(''),
                  sort: filters.sort|default('latest')
                }) }}\">Non lues</a>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">STATISTIQUES</h3>
              <div class=\"statsRow\">
                <div class=\"statCard\"><div class=\"statCard__value\">{{ notifications|length }}</div><div class=\"statCard__label\">Affichees</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">{{ unread_count }}</div><div class=\"statCard__label\">Non lues</div></div>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"{{ path('front_messages') }}\"><span>Messages</span><span class=\"listItem__meta\">Ouvrir</span></a>
                <a class=\"listItem\" href=\"{{ path('front_my_teams') }}\"><span>Mes equipes</span><span class=\"listItem__meta\">Gerer</span></a>
                <a class=\"listItem\" href=\"{{ path('front_orders') }}\"><span>Mes commandes</span><span class=\"listItem__meta\">Suivi</span></a>
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
", "front/pages/notifications.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\notifications.html.twig");
    }
}
