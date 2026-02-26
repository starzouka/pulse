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

/* front/partials/_organizer_side_nav.html.twig */
class __TwigTemplate_b9db7803b0cca19a142c9ab5c8b14531 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_organizer_side_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_organizer_side_nav.html.twig"));

        // line 1
        $context["active"] = ((array_key_exists("active", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 1, $this->source); })()), "")) : (""));
        // line 2
        yield "
<aside class=\"sideNav\">
  <div class=\"sideNav__title\">ESPACE ORGANISATEUR</div>
  <a class=\"";
        // line 5
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 5, $this->source); })()) == "request_create")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_request_create");
        yield "\">Demande tournoi</a>
  <a class=\"";
        // line 6
        yield ((CoreExtension::inFilter((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 6, $this->source); })()), ["requests", "request_detail"])) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests");
        yield "\">Mes demandes</a>
  <a class=\"";
        // line 7
        yield ((CoreExtension::inFilter((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 7, $this->source); })()), ["tournaments", "tournament_detail"])) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_tournaments");
        yield "\">Mes tournois</a>
  <a class=\"";
        // line 8
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 8, $this->source); })()) == "registrations")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_registrations");
        yield "\">Inscriptions</a>
  <a class=\"";
        // line 9
        yield ((CoreExtension::inFilter((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 9, $this->source); })()), ["matches", "match_create", "match_edit"])) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_matches");
        yield "\">Matchs</a>
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
        return "front/partials/_organizer_side_nav.html.twig";
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
        return array (  79 => 9,  73 => 8,  67 => 7,  61 => 6,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set active = active|default('') %}

<aside class=\"sideNav\">
  <div class=\"sideNav__title\">ESPACE ORGANISATEUR</div>
  <a class=\"{{ active == 'request_create' ? 'is-active' : '' }}\" href=\"{{ path('front_organizer_request_create') }}\">Demande tournoi</a>
  <a class=\"{{ active in ['requests', 'request_detail'] ? 'is-active' : '' }}\" href=\"{{ path('front_organizer_requests') }}\">Mes demandes</a>
  <a class=\"{{ active in ['tournaments', 'tournament_detail'] ? 'is-active' : '' }}\" href=\"{{ path('front_organizer_tournaments') }}\">Mes tournois</a>
  <a class=\"{{ active == 'registrations' ? 'is-active' : '' }}\" href=\"{{ path('front_organizer_registrations') }}\">Inscriptions</a>
  <a class=\"{{ active in ['matches', 'match_create', 'match_edit'] ? 'is-active' : '' }}\" href=\"{{ path('front_organizer_matches') }}\">Matchs</a>
</aside>
", "front/partials/_organizer_side_nav.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\partials\\_organizer_side_nav.html.twig");
    }
}
