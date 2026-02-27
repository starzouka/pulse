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

/* front/pages/my-requests.html.twig */
class __TwigTemplate_4e051028483b2196cdb462779cd94934 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/my-requests.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/my-requests.html.twig"));

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

        yield "PULSE - Mes demandes";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Mes demandes", "hero_sub" => "Historique de vos candidatures et reponses.", "breadcrumb_current" => "Mes demandes"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "my_requests"]));
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
                <h3 class=\"panel__title\">SUIVI DES DEMANDES</h3>
                <a class=\"btn btn--ghost\" href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams_explore");
        yield "\">Nouvelle demande</a>
              </div>

              <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_requests");
        yield "\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "q", [], "any", false, false, false, 36), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher equipe/note...\" />
                <div class=\"select\">
                  <select name=\"status\">
                    <option value=\"\" ";
        // line 39
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 39, $this->source); })()), "status", [], "any", false, false, false, 39), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Tous statuts</option>
                    <option value=\"PENDING\" ";
        // line 40
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 40, $this->source); })()), "status", [], "any", false, false, false, 40), "")) : ("")) == "PENDING")) ? ("selected") : (""));
        yield ">PENDING</option>
                    <option value=\"ACCEPTED\" ";
        // line 41
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 41, $this->source); })()), "status", [], "any", false, false, false, 41), "")) : ("")) == "ACCEPTED")) ? ("selected") : (""));
        yield ">ACCEPTED</option>
                    <option value=\"REFUSED\" ";
        // line 42
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42), "")) : ("")) == "REFUSED")) ? ("selected") : (""));
        yield ">REFUSED</option>
                    <option value=\"CANCELLED\" ";
        // line 43
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43), "")) : ("")) == "CANCELLED")) ? ("selected") : (""));
        yield ">CANCELLED</option>
                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"latest\" ";
        // line 48
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 48, $this->source); })()), "sort", [], "any", false, false, false, 48), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recentes</option>
                    <option value=\"oldest\" ";
        // line 49
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 49, $this->source); })()), "sort", [], "any", false, false, false, 49), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciennes</option>
                    <option value=\"team\" ";
        // line 50
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 50, $this->source); })()), "sort", [], "any", false, false, false, 50), "latest")) : ("latest")) == "team")) ? ("selected") : (""));
        yield ">Equipe</option>
                    <option value=\"status\" ";
        // line 51
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "sort", [], "any", false, false, false, 51), "latest")) : ("latest")) == "status")) ? ("selected") : (""));
        yield ">Statut</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_requests");
        yield "\">Reset</a>
              </form>

              ";
        // line 58
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["join_requests"]) || array_key_exists("join_requests", $context) ? $context["join_requests"] : (function () { throw new RuntimeError('Variable "join_requests" does not exist.', 58, $this->source); })()))) {
            // line 59
            yield "                <div class=\"emptyState\">Aucune demande envoyee pour le moment.</div>
              ";
        } else {
            // line 61
            yield "                <div class=\"list\">
                  ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["join_requests"]) || array_key_exists("join_requests", $context) ? $context["join_requests"] : (function () { throw new RuntimeError('Variable "join_requests" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["joinRequest"]) {
                // line 63
                yield "                    ";
                $context["requestId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "requestId", [], "any", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "requestId", [], "any", false, false, false, 63)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "requestId", [], "any", false, false, false, 63)) : (0));
                // line 64
                yield "                    ";
                $context["team"] = CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "teamId", [], "any", false, false, false, 64);
                // line 65
                yield "                    ";
                $context["captain"] = CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "respondedByCaptainId", [], "any", false, false, false, 65);
                // line 66
                yield "                    ";
                $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "status", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "status", [], "any", false, false, false, 66), "PENDING")) : ("PENDING"));
                // line 67
                yield "                    ";
                $context["badgeClass"] = ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 67, $this->source); })()) == "ACCEPTED")) ? ("badge--success") : ((((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 67, $this->source); })()) == "REFUSED") || ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 67, $this->source); })()) == "CANCELLED"))) ? ("badge--danger") : (""))));
                // line 68
                yield "
                    <article class=\"panel\" style=\"margin-bottom:12px;\">
                      <div class=\"postCard__head\">
                        <div>
                          <div class=\"name\">";
                // line 72
                yield (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "html", null, true)) : ("Equipe"));
                yield "</div>
                          <div class=\"sub\">Demande envoyee le ";
                // line 73
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "createdAt", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "createdAt", [], "any", false, false, false, 73), "d/m/Y H:i"), "html", null, true)) : ("-"));
                yield "</div>
                        </div>
                        <span class=\"badge ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 75, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 75, $this->source); })()), "html", null, true);
                yield "</span>
                      </div>

                      ";
                // line 78
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "note", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 79
                    yield "                        <div class=\"postCard__body\">Note: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "note", [], "any", false, false, false, 79), "html", null, true);
                    yield "</div>
                      ";
                }
                // line 81
                yield "
                      ";
                // line 82
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "respondedAt", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 83
                    yield "                        <div class=\"sub\" style=\"margin-top:6px;\">
                          Reponse le ";
                    // line 84
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["joinRequest"], "respondedAt", [], "any", false, false, false, 84), "d/m/Y H:i"), "html", null, true);
                    yield "
                          ";
                    // line 85
                    if ((($tmp = (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 85, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " par ";
                        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["captain"] ?? null), "displayName", [], "any", true, true, false, 85) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 85, $this->source); })()), "displayName", [], "any", false, false, false, 85)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 85, $this->source); })()), "displayName", [], "any", false, false, false, 85), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 85, $this->source); })()), "username", [], "any", false, false, false, 85), "html", null, true)));
                    }
                    // line 86
                    yield "                        </div>
                      ";
                }
                // line 88
                yield "
                      ";
                // line 89
                if ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 89, $this->source); })()) == "PENDING") && ((isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 89, $this->source); })()) > 0))) {
                    // line 90
                    yield "                        <div class=\"postCard__actions\" style=\"margin-top:10px;\">
                          <form method=\"post\" action=\"";
                    // line 91
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_requests_cancel", ["id" => (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 91, $this->source); })())]), "html", null, true);
                    yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("my_request_cancel_" . (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 92, $this->source); })()))), "html", null, true);
                    yield "\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Annuler la demande</button>
                          </form>
                        </div>
                      ";
                }
                // line 97
                yield "                    </article>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['joinRequest'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "                </div>
              ";
        }
        // line 101
        yield "            </section>

            ";
        // line 103
        yield from $this->load("front/partials/_pagination.html.twig", 103)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 104
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 104, $this->source); })()), "route_name" => "front_my_requests"]));
        // line 107
        yield "          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">STATISTIQUES</h3>
              <div class=\"statsRow\">
                <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["join_requests_summary"] ?? null), "pending", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["join_requests_summary"]) || array_key_exists("join_requests_summary", $context) ? $context["join_requests_summary"] : (function () { throw new RuntimeError('Variable "join_requests_summary" does not exist.', 113, $this->source); })()), "pending", [], "any", false, false, false, 113), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">En attente</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["join_requests_summary"] ?? null), "accepted", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["join_requests_summary"]) || array_key_exists("join_requests_summary", $context) ? $context["join_requests_summary"] : (function () { throw new RuntimeError('Variable "join_requests_summary" does not exist.', 114, $this->source); })()), "accepted", [], "any", false, false, false, 114), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Acceptees</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["join_requests_summary"] ?? null), "refused", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["join_requests_summary"]) || array_key_exists("join_requests_summary", $context) ? $context["join_requests_summary"] : (function () { throw new RuntimeError('Variable "join_requests_summary" does not exist.', 115, $this->source); })()), "refused", [], "any", false, false, false, 115), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Refusees</div></div>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">ACTIONS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
        yield "\"><span>Voir mes equipes</span><span class=\"listItem__meta\">Direct</span></a>
                <a class=\"listItem\" href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\"><span>Notifications</span><span class=\"listItem__meta\">Alertes</span></a>
                <a class=\"listItem\" href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams_explore");
        yield "\"><span>Chercher une equipe</span><span class=\"listItem__meta\">Explorer</span></a>
              </div>
            </section>
          </aside>
        </div>
      </div>

      ";
        // line 131
        yield from $this->load("front/partials/_footer.html.twig", 131)->unwrap()->yield($context);
        // line 132
        yield "    </section>
  </main>

  ";
        // line 135
        yield from $this->load("front/partials/_auth_modal.html.twig", 135)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/my-requests.html.twig";
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
        return array (  389 => 135,  384 => 132,  382 => 131,  372 => 124,  368 => 123,  364 => 122,  354 => 115,  350 => 114,  346 => 113,  338 => 107,  336 => 104,  335 => 103,  331 => 101,  327 => 99,  320 => 97,  312 => 92,  308 => 91,  305 => 90,  303 => 89,  300 => 88,  296 => 86,  291 => 85,  287 => 84,  284 => 83,  282 => 82,  279 => 81,  273 => 79,  271 => 78,  263 => 75,  258 => 73,  254 => 72,  248 => 68,  245 => 67,  242 => 66,  239 => 65,  236 => 64,  233 => 63,  229 => 62,  226 => 61,  222 => 59,  220 => 58,  214 => 55,  207 => 51,  203 => 50,  199 => 49,  195 => 48,  187 => 43,  183 => 42,  179 => 41,  175 => 40,  171 => 39,  165 => 36,  161 => 35,  155 => 32,  149 => 28,  143 => 27,  132 => 24,  128 => 23,  125 => 22,  120 => 21,  116 => 20,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Mes demandes{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Mes demandes',
    hero_sub: 'Historique de vos candidatures et reponses.',
    breadcrumb_current: 'Mes demandes'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'my_requests' } %}

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
                <h3 class=\"panel__title\">SUIVI DES DEMANDES</h3>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_teams_explore') }}\">Nouvelle demande</a>
              </div>

              <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_my_requests') }}\" style=\"margin-bottom:12px;\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Rechercher equipe/note...\" />
                <div class=\"select\">
                  <select name=\"status\">
                    <option value=\"\" {{ (filters.status|default('')) == '' ? 'selected' : '' }}>Tous statuts</option>
                    <option value=\"PENDING\" {{ (filters.status|default('')) == 'PENDING' ? 'selected' : '' }}>PENDING</option>
                    <option value=\"ACCEPTED\" {{ (filters.status|default('')) == 'ACCEPTED' ? 'selected' : '' }}>ACCEPTED</option>
                    <option value=\"REFUSED\" {{ (filters.status|default('')) == 'REFUSED' ? 'selected' : '' }}>REFUSED</option>
                    <option value=\"CANCELLED\" {{ (filters.status|default('')) == 'CANCELLED' ? 'selected' : '' }}>CANCELLED</option>
                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"latest\" {{ (filters.sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recentes</option>
                    <option value=\"oldest\" {{ (filters.sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciennes</option>
                    <option value=\"team\" {{ (filters.sort|default('latest')) == 'team' ? 'selected' : '' }}>Equipe</option>
                    <option value=\"status\" {{ (filters.sort|default('latest')) == 'status' ? 'selected' : '' }}>Statut</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_my_requests') }}\">Reset</a>
              </form>

              {% if join_requests is empty %}
                <div class=\"emptyState\">Aucune demande envoyee pour le moment.</div>
              {% else %}
                <div class=\"list\">
                  {% for joinRequest in join_requests %}
                    {% set requestId = joinRequest.requestId ?? 0 %}
                    {% set team = joinRequest.teamId %}
                    {% set captain = joinRequest.respondedByCaptainId %}
                    {% set status = joinRequest.status|default('PENDING') %}
                    {% set badgeClass = status == 'ACCEPTED' ? 'badge--success' : (status == 'REFUSED' or status == 'CANCELLED' ? 'badge--danger' : '') %}

                    <article class=\"panel\" style=\"margin-bottom:12px;\">
                      <div class=\"postCard__head\">
                        <div>
                          <div class=\"name\">{{ team ? team.name : 'Equipe' }}</div>
                          <div class=\"sub\">Demande envoyee le {{ joinRequest.createdAt ? joinRequest.createdAt|date('d/m/Y H:i') : '-' }}</div>
                        </div>
                        <span class=\"badge {{ badgeClass }}\">{{ status }}</span>
                      </div>

                      {% if joinRequest.note %}
                        <div class=\"postCard__body\">Note: {{ joinRequest.note }}</div>
                      {% endif %}

                      {% if joinRequest.respondedAt %}
                        <div class=\"sub\" style=\"margin-top:6px;\">
                          Reponse le {{ joinRequest.respondedAt|date('d/m/Y H:i') }}
                          {% if captain %} par {{ captain.displayName ?? captain.username }}{% endif %}
                        </div>
                      {% endif %}

                      {% if status == 'PENDING' and requestId > 0 %}
                        <div class=\"postCard__actions\" style=\"margin-top:10px;\">
                          <form method=\"post\" action=\"{{ path('front_my_requests_cancel', {id: requestId}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('my_request_cancel_' ~ requestId) }}\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Annuler la demande</button>
                          </form>
                        </div>
                      {% endif %}
                    </article>
                  {% endfor %}
                </div>
              {% endif %}
            </section>

            {% include 'front/partials/_pagination.html.twig' with {
              pagination: pagination,
              route_name: 'front_my_requests'
            } %}
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">STATISTIQUES</h3>
              <div class=\"statsRow\">
                <div class=\"statCard\"><div class=\"statCard__value\">{{ join_requests_summary.pending|default(0) }}</div><div class=\"statCard__label\">En attente</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">{{ join_requests_summary.accepted|default(0) }}</div><div class=\"statCard__label\">Acceptees</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">{{ join_requests_summary.refused|default(0) }}</div><div class=\"statCard__label\">Refusees</div></div>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">ACTIONS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"{{ path('front_my_teams') }}\"><span>Voir mes equipes</span><span class=\"listItem__meta\">Direct</span></a>
                <a class=\"listItem\" href=\"{{ path('front_notifications') }}\"><span>Notifications</span><span class=\"listItem__meta\">Alertes</span></a>
                <a class=\"listItem\" href=\"{{ path('front_teams_explore') }}\"><span>Chercher une equipe</span><span class=\"listItem__meta\">Explorer</span></a>
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
", "front/pages/my-requests.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\my-requests.html.twig");
    }
}
