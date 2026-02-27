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
class __TwigTemplate_4e11e6412d9e3dc9d694d0e7a102b33f extends Template
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
  <form class=\"topSearchForm\" method=\"get\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" role=\"search\">
    <div class=\"searchBox searchBoxWide\">
      <svg class=\"icon iconSmall muted\"><use href=\"#i-search\"></use></svg>
      <input
        id=\"globalSearch\"
        name=\"q\"
        type=\"search\"
        value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "query", [], "any", false, false, false, 9), "get", ["q"], "method", false, false, false, 9), "html", null, true);
        yield "\"
        placeholder=\"Rechercher utilisateurs, commandes, tournois...\"
        autocomplete=\"off\"
      />
    </div>
  </form>
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
        return array (  61 => 9,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"topbar\">
  <form class=\"topSearchForm\" method=\"get\" action=\"{{ path('admin_dashboard') }}\" role=\"search\">
    <div class=\"searchBox searchBoxWide\">
      <svg class=\"icon iconSmall muted\"><use href=\"#i-search\"></use></svg>
      <input
        id=\"globalSearch\"
        name=\"q\"
        type=\"search\"
        value=\"{{ app.request.query.get('q') }}\"
        placeholder=\"Rechercher utilisateurs, commandes, tournois...\"
        autocomplete=\"off\"
      />
    </div>
  </form>
</header>

", "admin/Partials/navbar.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\Partials\\navbar.html.twig");
    }
}
