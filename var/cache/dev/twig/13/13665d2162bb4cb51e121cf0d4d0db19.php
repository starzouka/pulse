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

/* admin/Partials/navbar.html.twig */
class __TwigTemplate_d427fc30dbe4cf967b54c1364e55af59 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Partials/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Partials/navbar.html.twig"));

        // line 1
        yield "<header class=\"topbar\">
  <div class=\"topLinks\">
    <a class=\"topLink\" href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><svg class=\"icon iconSmall\"><use href=\"#i-home\"></use></svg> Dashboard</a>
    <a class=\"topLink\" href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\"> Utilisateurs</a>
    <a class=\"topLink\" href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\"> Commandes</a>
    <a class=\"topLink\" href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournaments");
        yield "\"> Tournois</a>
    <a class=\"topLink\" href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reports");
        yield "\"> Signalements</a>
  </div>
  <div class=\"topActions\">
    <div class=\"searchBox\">
      <svg class=\"icon iconSmall muted\"><use href=\"#i-search\"></use></svg>
      <input id=\"globalSearch\" type=\"text\" placeholder=\"Search...\" autocomplete=\"off\" />
    </div>
    <div class=\"profileWrap\">
      <button class=\"profileBtn\" id=\"profileBtn\" type=\"button\" aria-haspopup=\"menu\" aria-expanded=\"false\">
        <span class=\"avatar\">A</span>
        <span class=\"profileName\">Admin</span>
        <svg class=\"icon iconSmall muted\"><use href=\"#i-chevron\"></use></svg>
      </button>
      <div class=\"dropdown\" id=\"profileMenu\" role=\"menu\" aria-hidden=\"true\">
        <a role=\"menuitem\" href=\"#\">Mon profil</a>
        <a role=\"menuitem\" href=\"#\">Parametres</a>
        <div class=\"sep\"></div>
        <a role=\"menuitem\" href=\"#\">Deconnexion</a>
      </div>
    </div>
    <button class=\"iconBtn\" type=\"button\" aria-label=\"Notifications\">
      <svg class=\"icon\"><use href=\"#i-bell\"></use></svg>
      <span class=\"badgeDot\"></span>
    </button>
  </div>
</header>

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
        return "admin/Partials/navbar.html.twig";
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
        return array (  68 => 7,  64 => 6,  60 => 5,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"topbar\">
  <div class=\"topLinks\">
    <a class=\"topLink\" href=\"{{ path('admin_dashboard') }}\"><svg class=\"icon iconSmall\"><use href=\"#i-home\"></use></svg> Dashboard</a>
    <a class=\"topLink\" href=\"{{ path('admin_users') }}\"> Utilisateurs</a>
    <a class=\"topLink\" href=\"{{ path('admin_orders') }}\"> Commandes</a>
    <a class=\"topLink\" href=\"{{ path('admin_tournaments') }}\"> Tournois</a>
    <a class=\"topLink\" href=\"{{ path('admin_reports') }}\"> Signalements</a>
  </div>
  <div class=\"topActions\">
    <div class=\"searchBox\">
      <svg class=\"icon iconSmall muted\"><use href=\"#i-search\"></use></svg>
      <input id=\"globalSearch\" type=\"text\" placeholder=\"Search...\" autocomplete=\"off\" />
    </div>
    <div class=\"profileWrap\">
      <button class=\"profileBtn\" id=\"profileBtn\" type=\"button\" aria-haspopup=\"menu\" aria-expanded=\"false\">
        <span class=\"avatar\">A</span>
        <span class=\"profileName\">Admin</span>
        <svg class=\"icon iconSmall muted\"><use href=\"#i-chevron\"></use></svg>
      </button>
      <div class=\"dropdown\" id=\"profileMenu\" role=\"menu\" aria-hidden=\"true\">
        <a role=\"menuitem\" href=\"#\">Mon profil</a>
        <a role=\"menuitem\" href=\"#\">Parametres</a>
        <div class=\"sep\"></div>
        <a role=\"menuitem\" href=\"#\">Deconnexion</a>
      </div>
    </div>
    <button class=\"iconBtn\" type=\"button\" aria-label=\"Notifications\">
      <svg class=\"icon\"><use href=\"#i-bell\"></use></svg>
      <span class=\"badgeDot\"></span>
    </button>
  </div>
</header>

", "admin/Partials/navbar.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\admin\\Partials\\navbar.html.twig");
    }
}
