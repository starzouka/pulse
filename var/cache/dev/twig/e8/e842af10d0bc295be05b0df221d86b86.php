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

/* front/partials/_player_side_nav.html.twig */
class __TwigTemplate_82d5dba781c9d2ccceded29fad6890d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_player_side_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_player_side_nav.html.twig"));

        // line 1
        $context["active"] = ((array_key_exists("active", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 1, $this->source); })()), "")) : (""));
        // line 2
        yield "
<aside class=\"sideNav\">
  <div class=\"sideNav__title\">ESPACE JOUEUR</div>
  <a class=\"";
        // line 5
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 5, $this->source); })()) == "dashboard")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_dashboard");
        yield "\">Dashboard</a>
  <a class=\"";
        // line 6
        yield ((CoreExtension::inFilter((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 6, $this->source); })()), ["profile", "profile_edit"])) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile");
        yield "\">Mon profil</a>
  <a class=\"";
        // line 7
        yield ((CoreExtension::inFilter((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 7, $this->source); })()), ["players", "player_profile"])) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players");
        yield "\">Recherche joueurs</a>
  <a class=\"";
        // line 8
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 8, $this->source); })()) == "friends")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_friends");
        yield "\">Amis</a>
  <a class=\"";
        // line 9
        yield ((CoreExtension::inFilter((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 9, $this->source); })()), ["messages", "conversation"])) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages");
        yield "\">Messages</a>
  <a class=\"";
        // line 10
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 10, $this->source); })()) == "feed")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_feed");
        yield "\">Fil d'actualite</a>
  <a class=\"";
        // line 11
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 11, $this->source); })()) == "my_teams")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
        yield "\">Mes equipes</a>
  <a class=\"";
        // line 12
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 12, $this->source); })()) == "my_requests")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_requests");
        yield "\">Mes demandes</a>
  <a class=\"";
        // line 13
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 13, $this->source); })()) == "cart")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart");
        yield "\">Mon panier</a>
  <a class=\"";
        // line 14
        yield ((CoreExtension::inFilter((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 14, $this->source); })()), ["orders", "order_detail"])) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\">Mes commandes</a>
  <a class=\"";
        // line 15
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 15, $this->source); })()) == "notifications")) ? ("is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\">Notifications</a>
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
        return "front/partials/_player_side_nav.html.twig";
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
        return array (  115 => 15,  109 => 14,  103 => 13,  97 => 12,  91 => 11,  85 => 10,  79 => 9,  73 => 8,  67 => 7,  61 => 6,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set active = active|default('') %}

<aside class=\"sideNav\">
  <div class=\"sideNav__title\">ESPACE JOUEUR</div>
  <a class=\"{{ active == 'dashboard' ? 'is-active' : '' }}\" href=\"{{ path('front_dashboard') }}\">Dashboard</a>
  <a class=\"{{ active in ['profile', 'profile_edit'] ? 'is-active' : '' }}\" href=\"{{ path('front_profile') }}\">Mon profil</a>
  <a class=\"{{ active in ['players', 'player_profile'] ? 'is-active' : '' }}\" href=\"{{ path('front_players') }}\">Recherche joueurs</a>
  <a class=\"{{ active == 'friends' ? 'is-active' : '' }}\" href=\"{{ path('front_friends') }}\">Amis</a>
  <a class=\"{{ active in ['messages', 'conversation'] ? 'is-active' : '' }}\" href=\"{{ path('front_messages') }}\">Messages</a>
  <a class=\"{{ active == 'feed' ? 'is-active' : '' }}\" href=\"{{ path('front_feed') }}\">Fil d'actualite</a>
  <a class=\"{{ active == 'my_teams' ? 'is-active' : '' }}\" href=\"{{ path('front_my_teams') }}\">Mes equipes</a>
  <a class=\"{{ active == 'my_requests' ? 'is-active' : '' }}\" href=\"{{ path('front_my_requests') }}\">Mes demandes</a>
  <a class=\"{{ active == 'cart' ? 'is-active' : '' }}\" href=\"{{ path('front_cart') }}\">Mon panier</a>
  <a class=\"{{ active in ['orders', 'order_detail'] ? 'is-active' : '' }}\" href=\"{{ path('front_orders') }}\">Mes commandes</a>
  <a class=\"{{ active == 'notifications' ? 'is-active' : '' }}\" href=\"{{ path('front_notifications') }}\">Notifications</a>
</aside>
", "front/partials/_player_side_nav.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\partials\\_player_side_nav.html.twig");
    }
}
