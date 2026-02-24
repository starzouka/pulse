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

/* admin/Partials/sidebar.html.twig */
class __TwigTemplate_3395adc5afddebafdfc51169112b6b31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Partials/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Partials/sidebar.html.twig"));

        // line 1
        $context["currentRoute"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 1), "attributes", [], "any", false, true, false, 1), "get", ["_route"], "method", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1), "")) : (""));
        // line 2
        yield "
<aside class=\"sidebar\">
  <div class=\"brand\">
    <span class=\"brandMark\">
      <svg class=\"icon\"><use href=\"#i-logo\"></use></svg>
    </span>
    <span class=\"brandText\">PULSE</span>
  </div>

  <nav class=\"sideNav\" aria-label=\"Navigation principale\">
    <div class=\"sideGroupTitle\">Tableau de bord</div>
    <a class=\"navItem ";
        // line 13
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 13, $this->source); })()), ["admin_dashboard", "admin_dashboard_page"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-home\"></use></svg>
      <span>Dashboard</span>
    </a>

    <div class=\"sideGroupTitle\">Utilisateurs</div>
    <a class=\"navItem ";
        // line 19
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 19, $this->source); })()) == "admin_users")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Utilisateurs</span>
    </a>
    <a class=\"navItem ";
        // line 23
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 23, $this->source); })()), ["admin_user_create", "admin_add_user"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_create");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Ajouter utilisateur</span>
    </a>

    <div class=\"sideGroupTitle\">Social</div>
    <a class=\"navItem ";
        // line 29
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 29, $this->source); })()), ["admin_posts", "admin_post_detail"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_posts");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Posts</span>
    </a>
    <a class=\"navItem ";
        // line 33
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 33, $this->source); })()), ["admin_comments"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Commentaires</span>
    </a>
    <a class=\"navItem ";
        // line 37
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 37, $this->source); })()), ["admin_reports", "admin_report_detail"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reports");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Signalements</span>
    </a>
    <a class=\"navItem ";
        // line 41
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 41, $this->source); })()) == "admin_messages")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messages");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Messages</span>
    </a>

    <div class=\"sideGroupTitle\">Catalogue</div>


    <div class=\"sideGroupTitle\">Commerce</div>


    <div class=\"sideGroupTitle\">Teams & tournois</div>

    <a class=\"navItem ";
        // line 54
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 54, $this->source); })()), ["admin_tournament_requests", "admin_tournament_request_detail"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_requests");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Demandes tournois</span>
    </a>
    <a class=\"navItem ";
        // line 58
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 58, $this->source); })()), ["admin_tournaments", "admin_tournament_detail", "admin_tournament_form", "admin_tournament_create", "admin_tournament_edit"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournaments");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Tournois</span>
    </a>
    <a class=\"navItem ";
        // line 62
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 62, $this->source); })()), ["admin_matches", "admin_match_detail", "admin_match_teams"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Matchs</span>
    </a>

    <div class=\"sideGroupTitle\">Systeme</div>
    <a class=\"navItem ";
        // line 68
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 68, $this->source); })()) == "admin_notifications")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-gear\"></use></svg>
      <span>Notifications</span>
    </a>
    <a class=\"navItem ";
        // line 72
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 72, $this->source); })()) == "admin_images")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_images");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-gear\"></use></svg>
      <span>Images</span>
    </a>
  </nav>

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
        return "admin/Partials/sidebar.html.twig";
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
        return array (  177 => 72,  168 => 68,  157 => 62,  148 => 58,  139 => 54,  121 => 41,  112 => 37,  103 => 33,  94 => 29,  83 => 23,  74 => 19,  63 => 13,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set currentRoute = app.request.attributes.get('_route')|default('') %}

<aside class=\"sidebar\">
  <div class=\"brand\">
    <span class=\"brandMark\">
      <svg class=\"icon\"><use href=\"#i-logo\"></use></svg>
    </span>
    <span class=\"brandText\">PULSE</span>
  </div>

  <nav class=\"sideNav\" aria-label=\"Navigation principale\">
    <div class=\"sideGroupTitle\">Tableau de bord</div>
    <a class=\"navItem {{ currentRoute in ['admin_dashboard', 'admin_dashboard_page'] ? 'active' : '' }}\" href=\"{{ path('admin_dashboard') }}\">
      <svg class=\"icon\"><use href=\"#i-home\"></use></svg>
      <span>Dashboard</span>
    </a>

    <div class=\"sideGroupTitle\">Utilisateurs</div>
    <a class=\"navItem {{ currentRoute == 'admin_users' ? 'active' : '' }}\" href=\"{{ path('admin_users') }}\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Utilisateurs</span>
    </a>
    <a class=\"navItem {{ currentRoute in ['admin_user_create', 'admin_add_user'] ? 'active' : '' }}\" href=\"{{ path('admin_user_create') }}\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Ajouter utilisateur</span>
    </a>

    <div class=\"sideGroupTitle\">Social</div>
    <a class=\"navItem {{ currentRoute in ['admin_posts', 'admin_post_detail'] ? 'active' : '' }}\" href=\"{{ path('admin_posts') }}\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Posts</span>
    </a>
    <a class=\"navItem {{ currentRoute in ['admin_comments'] ? 'active' : '' }}\" href=\"{{ path('admin_comments') }}\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Commentaires</span>
    </a>
    <a class=\"navItem {{ currentRoute in ['admin_reports', 'admin_report_detail'] ? 'active' : '' }}\" href=\"{{ path('admin_reports') }}\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Signalements</span>
    </a>
    <a class=\"navItem {{ currentRoute == 'admin_messages' ? 'active' : '' }}\" href=\"{{ path('admin_messages') }}\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Messages</span>
    </a>

    <div class=\"sideGroupTitle\">Catalogue</div>


    <div class=\"sideGroupTitle\">Commerce</div>


    <div class=\"sideGroupTitle\">Teams & tournois</div>

    <a class=\"navItem {{ currentRoute in ['admin_tournament_requests', 'admin_tournament_request_detail'] ? 'active' : '' }}\" href=\"{{ path('admin_tournament_requests') }}\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Demandes tournois</span>
    </a>
    <a class=\"navItem {{ currentRoute in ['admin_tournaments', 'admin_tournament_detail', 'admin_tournament_form', 'admin_tournament_create', 'admin_tournament_edit'] ? 'active' : '' }}\" href=\"{{ path('admin_tournaments') }}\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Tournois</span>
    </a>
    <a class=\"navItem {{ currentRoute in ['admin_matches', 'admin_match_detail', 'admin_match_teams'] ? 'active' : '' }}\" href=\"{{ path('admin_matches') }}\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Matchs</span>
    </a>

    <div class=\"sideGroupTitle\">Systeme</div>
    <a class=\"navItem {{ currentRoute == 'admin_notifications' ? 'active' : '' }}\" href=\"{{ path('admin_notifications') }}\">
      <svg class=\"icon\"><use href=\"#i-gear\"></use></svg>
      <span>Notifications</span>
    </a>
    <a class=\"navItem {{ currentRoute == 'admin_images' ? 'active' : '' }}\" href=\"{{ path('admin_images') }}\">
      <svg class=\"icon\"><use href=\"#i-gear\"></use></svg>
      <span>Images</span>
    </a>
  </nav>

</aside>

", "admin/Partials/sidebar.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\Partials\\sidebar.html.twig");
    }
}
