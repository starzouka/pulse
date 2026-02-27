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
class __TwigTemplate_08c837c7e7b9101303c136bd6add09af extends Template
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
    <a class=\"navItem ";
        // line 47
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 47, $this->source); })()), ["admin_categories", "admin_category_form"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-game\"></use></svg>
      <span>Categories</span>
    </a>
    <a class=\"navItem ";
        // line 51
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 51, $this->source); })()), ["admin_games", "admin_game_detail", "admin_game_form"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-game\"></use></svg>
      <span>Jeux</span>
    </a>
    <a class=\"navItem ";
        // line 55
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 55, $this->source); })()), ["admin_products", "admin_product_detail", "admin_product_form"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Produits</span>
    </a>

    <div class=\"sideGroupTitle\">Commerce</div>
    <a class=\"navItem ";
        // line 61
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 61, $this->source); })()), ["admin_orders", "admin_order_detail"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Commandes</span>
    </a>
    <a class=\"navItem ";
        // line 65
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 65, $this->source); })()) == "admin_carts")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carts");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Paniers</span>
    </a>

    <div class=\"sideGroupTitle\">Teams & tournois</div>
    <a class=\"navItem ";
        // line 71
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 71, $this->source); })()), ["admin_teams", "admin_team_detail"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_teams");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Equipes</span>
    </a>
    <a class=\"navItem ";
        // line 75
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 75, $this->source); })()), ["admin_tournament_requests", "admin_tournament_request_detail"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_requests");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Demandes tournois</span>
    </a>
    <a class=\"navItem ";
        // line 79
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 79, $this->source); })()), ["admin_tournaments", "admin_tournament_detail", "admin_tournament_form", "admin_tournament_create", "admin_tournament_edit"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournaments");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Tournois</span>
    </a>
    <a class=\"navItem ";
        // line 83
        yield ((CoreExtension::inFilter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 83, $this->source); })()), ["admin_matches", "admin_match_detail", "admin_match_teams"])) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Matchs</span>
    </a>

    <div class=\"sideGroupTitle\">Systeme</div>
    <a class=\"navItem ";
        // line 89
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 89, $this->source); })()) == "admin_notifications")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-gear\"></use></svg>
      <span>Notifications</span>
    </a>
    <a class=\"navItem ";
        // line 93
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 93, $this->source); })()) == "admin_images")) ? ("active") : (""));
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
        return array (  228 => 93,  219 => 89,  208 => 83,  199 => 79,  190 => 75,  181 => 71,  170 => 65,  161 => 61,  150 => 55,  141 => 51,  132 => 47,  121 => 41,  112 => 37,  103 => 33,  94 => 29,  83 => 23,  74 => 19,  63 => 13,  50 => 2,  48 => 1,);
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
    <a class=\"navItem {{ currentRoute in ['admin_categories', 'admin_category_form'] ? 'active' : '' }}\" href=\"{{ path('admin_categories') }}\">
      <svg class=\"icon\"><use href=\"#i-game\"></use></svg>
      <span>Categories</span>
    </a>
    <a class=\"navItem {{ currentRoute in ['admin_games', 'admin_game_detail', 'admin_game_form'] ? 'active' : '' }}\" href=\"{{ path('admin_games') }}\">
      <svg class=\"icon\"><use href=\"#i-game\"></use></svg>
      <span>Jeux</span>
    </a>
    <a class=\"navItem {{ currentRoute in ['admin_products', 'admin_product_detail', 'admin_product_form'] ? 'active' : '' }}\" href=\"{{ path('admin_products') }}\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Produits</span>
    </a>

    <div class=\"sideGroupTitle\">Commerce</div>
    <a class=\"navItem {{ currentRoute in ['admin_orders', 'admin_order_detail'] ? 'active' : '' }}\" href=\"{{ path('admin_orders') }}\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Commandes</span>
    </a>
    <a class=\"navItem {{ currentRoute == 'admin_carts' ? 'active' : '' }}\" href=\"{{ path('admin_carts') }}\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Paniers</span>
    </a>

    <div class=\"sideGroupTitle\">Teams & tournois</div>
    <a class=\"navItem {{ currentRoute in ['admin_teams', 'admin_team_detail'] ? 'active' : '' }}\" href=\"{{ path('admin_teams') }}\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Equipes</span>
    </a>
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

", "admin/Partials/sidebar.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\Partials\\sidebar.html.twig");
    }
}
