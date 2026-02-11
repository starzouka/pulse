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
class __TwigTemplate_f33ca10c99b9ee7a87b453d474df8d3a extends Template
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
        yield "<aside class=\"sidebar\">
  <div class=\"brand\">
    <span class=\"brandMark\">
      <svg class=\"icon\"><use href=\"#i-logo\"></use></svg>
    </span>
    <span class=\"brandText\">PULSE</span>
  </div>
  <nav class=\"sideNav\" aria-label=\"Navigation principale\">
    <div class=\"sideGroupTitle\">Dashboard</div>
    <a class=\"navItem\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-home\"></use></svg>
      <span>Dashboard</span>
    </a>

    <div class=\"sideGroupTitle\">Utilisateurs</div>
    <a class=\"navItem\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Utilisateurs</span>
    </a>
    <a class=\"navItem\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_user");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Ajouter utilisateur</span>
    </a>

    <div class=\"sideGroupTitle\">Social & Moderation</div>
    <a class=\"navItem\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_posts");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Posts</span>
    </a>
    <a class=\"navItem\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Commentaires</span>
    </a>
    <a class=\"navItem\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reports");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Signalements</span>
    </a>
    <a class=\"navItem\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messages");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Messages</span>
    </a>

    <div class=\"sideGroupTitle\">Jeux & Categories</div>
    <a class=\"navItem\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-game\"></use></svg>
      <span>Categories</span>
    </a>
    <a class=\"navItem\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-game\"></use></svg>
      <span>Jeux</span>
    </a>

    <div class=\"sideGroupTitle\">Equipes</div>
    <a class=\"navItem\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_teams");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Equipes</span>
    </a>

    <div class=\"sideGroupTitle\">Boutique & Commandes</div>
    <a class=\"navItem\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Produits</span>
    </a>
    <a class=\"navItem\" href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Commandes</span>
    </a>
    <a class=\"navItem\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carts");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Paniers</span>
    </a>

    <div class=\"sideGroupTitle\">Tournois</div>
    <a class=\"navItem\" href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_requests");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Demandes</span>
    </a>
    <a class=\"navItem\" href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournaments");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Tournois</span>
    </a>
    <a class=\"navItem\" href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Matchs</span>
    </a>

    <div class=\"sideGroupTitle\">Systeme</div>
    <a class=\"navItem\" href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-gear\"></use></svg>
      <span>Notifications</span>
    </a>
    <a class=\"navItem\" href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_images");
        yield "\">
      <svg class=\"icon\"><use href=\"#i-gear\"></use></svg>
      <span>Images</span>
    </a>
  </nav>
  <div class=\"sideFooter\">
    <div class=\"presence\">
      <div class=\"presenceRow\">
        <span class=\"dot dotLive\"></span><span>LIVE</span>
      </div>
      <div class=\"presenceRow\">
        <span class=\"dot dotOff\"></span><span>OFFLINE</span>
      </div>
    </div>
    <button class=\"userMini\" id=\"sidebarUserBtn\" type=\"button\" aria-haspopup=\"menu\" aria-expanded=\"false\">
      <span class=\"avatar avatarSmall\">A</span>
      <span class=\"userMiniText\">Admin</span>
      <svg class=\"icon iconSmall\"><use href=\"#i-chevron\"></use></svg>
    </button>
  </div>
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
        return array (  192 => 92,  185 => 88,  176 => 82,  169 => 78,  162 => 74,  153 => 68,  146 => 64,  139 => 60,  130 => 54,  121 => 48,  114 => 44,  105 => 38,  98 => 34,  91 => 30,  84 => 26,  75 => 20,  68 => 16,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\"sidebar\">
  <div class=\"brand\">
    <span class=\"brandMark\">
      <svg class=\"icon\"><use href=\"#i-logo\"></use></svg>
    </span>
    <span class=\"brandText\">PULSE</span>
  </div>
  <nav class=\"sideNav\" aria-label=\"Navigation principale\">
    <div class=\"sideGroupTitle\">Dashboard</div>
    <a class=\"navItem\" href=\"{{ path('admin_dashboard') }}\">
      <svg class=\"icon\"><use href=\"#i-home\"></use></svg>
      <span>Dashboard</span>
    </a>

    <div class=\"sideGroupTitle\">Utilisateurs</div>
    <a class=\"navItem\" href=\"{{ path('admin_users') }}\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Utilisateurs</span>
    </a>
    <a class=\"navItem\" href=\"{{ path('admin_add_user') }}\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Ajouter utilisateur</span>
    </a>

    <div class=\"sideGroupTitle\">Social & Moderation</div>
    <a class=\"navItem\" href=\"{{ path('admin_posts') }}\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Posts</span>
    </a>
    <a class=\"navItem\" href=\"{{ path('admin_comments') }}\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Commentaires</span>
    </a>
    <a class=\"navItem\" href=\"{{ path('admin_reports') }}\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Signalements</span>
    </a>
    <a class=\"navItem\" href=\"{{ path('admin_messages') }}\">
      <svg class=\"icon\"><use href=\"#i-flag\"></use></svg>
      <span>Messages</span>
    </a>

    <div class=\"sideGroupTitle\">Jeux & Categories</div>
    <a class=\"navItem\" href=\"{{ path('admin_categories') }}\">
      <svg class=\"icon\"><use href=\"#i-game\"></use></svg>
      <span>Categories</span>
    </a>
    <a class=\"navItem\" href=\"{{ path('admin_games') }}\">
      <svg class=\"icon\"><use href=\"#i-game\"></use></svg>
      <span>Jeux</span>
    </a>

    <div class=\"sideGroupTitle\">Equipes</div>
    <a class=\"navItem\" href=\"{{ path('admin_teams') }}\">
      <svg class=\"icon\"><use href=\"#i-users\"></use></svg>
      <span>Equipes</span>
    </a>

    <div class=\"sideGroupTitle\">Boutique & Commandes</div>
    <a class=\"navItem\" href=\"{{ path('admin_products') }}\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Produits</span>
    </a>
    <a class=\"navItem\" href=\"{{ path('admin_orders') }}\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Commandes</span>
    </a>
    <a class=\"navItem\" href=\"{{ path('admin_carts') }}\">
      <svg class=\"icon\"><use href=\"#i-cart\"></use></svg>
      <span>Paniers</span>
    </a>

    <div class=\"sideGroupTitle\">Tournois</div>
    <a class=\"navItem\" href=\"{{ path('admin_tournament_requests') }}\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Demandes</span>
    </a>
    <a class=\"navItem\" href=\"{{ path('admin_tournaments') }}\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Tournois</span>
    </a>
    <a class=\"navItem\" href=\"{{ path('admin_matches') }}\">
      <svg class=\"icon\"><use href=\"#i-trophy\"></use></svg>
      <span>Matchs</span>
    </a>

    <div class=\"sideGroupTitle\">Systeme</div>
    <a class=\"navItem\" href=\"{{ path('admin_notifications') }}\">
      <svg class=\"icon\"><use href=\"#i-gear\"></use></svg>
      <span>Notifications</span>
    </a>
    <a class=\"navItem\" href=\"{{ path('admin_images') }}\">
      <svg class=\"icon\"><use href=\"#i-gear\"></use></svg>
      <span>Images</span>
    </a>
  </nav>
  <div class=\"sideFooter\">
    <div class=\"presence\">
      <div class=\"presenceRow\">
        <span class=\"dot dotLive\"></span><span>LIVE</span>
      </div>
      <div class=\"presenceRow\">
        <span class=\"dot dotOff\"></span><span>OFFLINE</span>
      </div>
    </div>
    <button class=\"userMini\" id=\"sidebarUserBtn\" type=\"button\" aria-haspopup=\"menu\" aria-expanded=\"false\">
      <span class=\"avatar avatarSmall\">A</span>
      <span class=\"userMiniText\">Admin</span>
      <svg class=\"icon iconSmall\"><use href=\"#i-chevron\"></use></svg>
    </button>
  </div>
</aside>

", "admin/Partials/sidebar.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\admin\\Partials\\sidebar.html.twig");
    }
}
