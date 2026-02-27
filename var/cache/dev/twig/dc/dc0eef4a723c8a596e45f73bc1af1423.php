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

/* front/partials/_captain_side_nav.html.twig */
class __TwigTemplate_c83009319e7423d775d772122bdcde86 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_captain_side_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_captain_side_nav.html.twig"));

        // line 1
        $context["active_key"] = ((array_key_exists("active", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 1, $this->source); })()), "team")) : ("team"));
        // line 2
        $context["team_query"] = ((((isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 2, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 2, $this->source); })()), "teamId", [], "any", false, false, false, 2))) ? (["team" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 2, $this->source); })()), "teamId", [], "any", false, false, false, 2)]) : ([]));
        // line 3
        yield "
<aside class=\"sideNav\">
  <div class=\"sideNav__title\">ESPACE CAPITAINE</div>
  <a class=\"";
        // line 6
        yield ((((isset($context["active_key"]) || array_key_exists("active_key", $context) ? $context["active_key"] : (function () { throw new RuntimeError('Variable "active_key" does not exist.', 6, $this->source); })()) == "team")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage", (isset($context["team_query"]) || array_key_exists("team_query", $context) ? $context["team_query"] : (function () { throw new RuntimeError('Variable "team_query" does not exist.', 6, $this->source); })())), "html", null, true);
        yield "\">Mon equipe</a>
  <a class=\"";
        // line 7
        yield ((((isset($context["active_key"]) || array_key_exists("active_key", $context) ? $context["active_key"] : (function () { throw new RuntimeError('Variable "active_key" does not exist.', 7, $this->source); })()) == "members")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members", (isset($context["team_query"]) || array_key_exists("team_query", $context) ? $context["team_query"] : (function () { throw new RuntimeError('Variable "team_query" does not exist.', 7, $this->source); })())), "html", null, true);
        yield "\">Membres</a>
  <a class=\"";
        // line 8
        yield ((((isset($context["active_key"]) || array_key_exists("active_key", $context) ? $context["active_key"] : (function () { throw new RuntimeError('Variable "active_key" does not exist.', 8, $this->source); })()) == "requests")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_requests", (isset($context["team_query"]) || array_key_exists("team_query", $context) ? $context["team_query"] : (function () { throw new RuntimeError('Variable "team_query" does not exist.', 8, $this->source); })())), "html", null, true);
        yield "\">Demandes</a>
  <a class=\"";
        // line 9
        yield ((((isset($context["active_key"]) || array_key_exists("active_key", $context) ? $context["active_key"] : (function () { throw new RuntimeError('Variable "active_key" does not exist.', 9, $this->source); })()) == "invite")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_invite", (isset($context["team_query"]) || array_key_exists("team_query", $context) ? $context["team_query"] : (function () { throw new RuntimeError('Variable "team_query" does not exist.', 9, $this->source); })())), "html", null, true);
        yield "\">Inviter</a>
  <a class=\"";
        // line 10
        yield ((((isset($context["active_key"]) || array_key_exists("active_key", $context) ? $context["active_key"] : (function () { throw new RuntimeError('Variable "active_key" does not exist.', 10, $this->source); })()) == "products")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_products", (isset($context["team_query"]) || array_key_exists("team_query", $context) ? $context["team_query"] : (function () { throw new RuntimeError('Variable "team_query" does not exist.', 10, $this->source); })())), "html", null, true);
        yield "\">Produits</a>
  <a class=\"";
        // line 11
        yield ((((isset($context["active_key"]) || array_key_exists("active_key", $context) ? $context["active_key"] : (function () { throw new RuntimeError('Variable "active_key" does not exist.', 11, $this->source); })()) == "orders")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_orders", (isset($context["team_query"]) || array_key_exists("team_query", $context) ? $context["team_query"] : (function () { throw new RuntimeError('Variable "team_query" does not exist.', 11, $this->source); })())), "html", null, true);
        yield "\">Commandes</a>
  <a class=\"";
        // line 12
        yield ((((isset($context["active_key"]) || array_key_exists("active_key", $context) ? $context["active_key"] : (function () { throw new RuntimeError('Variable "active_key" does not exist.', 12, $this->source); })()) == "tournaments")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_tournaments", (isset($context["team_query"]) || array_key_exists("team_query", $context) ? $context["team_query"] : (function () { throw new RuntimeError('Variable "team_query" does not exist.', 12, $this->source); })())), "html", null, true);
        yield "\">Tournois</a>
</aside>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/partials/_captain_side_nav.html.twig";
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
        return array (  93 => 12,  87 => 11,  81 => 10,  75 => 9,  69 => 8,  63 => 7,  57 => 6,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set active_key = active|default('team') %}
{% set team_query = active_team and active_team.teamId ? { team: active_team.teamId } : {} %}

<aside class=\"sideNav\">
  <div class=\"sideNav__title\">ESPACE CAPITAINE</div>
  <a class=\"{{ active_key == 'team' ? 'is-active' : '' }}\" href=\"{{ path('front_captain_team_manage', team_query) }}\">Mon equipe</a>
  <a class=\"{{ active_key == 'members' ? 'is-active' : '' }}\" href=\"{{ path('front_captain_members', team_query) }}\">Membres</a>
  <a class=\"{{ active_key == 'requests' ? 'is-active' : '' }}\" href=\"{{ path('front_captain_requests', team_query) }}\">Demandes</a>
  <a class=\"{{ active_key == 'invite' ? 'is-active' : '' }}\" href=\"{{ path('front_captain_invite', team_query) }}\">Inviter</a>
  <a class=\"{{ active_key == 'products' ? 'is-active' : '' }}\" href=\"{{ path('front_captain_products', team_query) }}\">Produits</a>
  <a class=\"{{ active_key == 'orders' ? 'is-active' : '' }}\" href=\"{{ path('front_captain_orders', team_query) }}\">Commandes</a>
  <a class=\"{{ active_key == 'tournaments' ? 'is-active' : '' }}\" href=\"{{ path('front_captain_tournaments', team_query) }}\">Tournois</a>
</aside>

", "front/partials/_captain_side_nav.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\partials\\_captain_side_nav.html.twig");
    }
}
