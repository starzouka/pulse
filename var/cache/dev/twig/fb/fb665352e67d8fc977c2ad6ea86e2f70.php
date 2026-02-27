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

/* admin/Partials/footer.html.twig */
class __TwigTemplate_4e5779c8d2b2ad74d0c1e2db18d8bb71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Partials/footer.html.twig"));

        // line 1
        yield "<footer class=\"adminFooter\">
  <div class=\"adminFooterInner\">
    <span>PULSE Admin</span>
    <div class=\"adminFooterStatus\" aria-label=\"Etat administration\">
      <span class=\"adminFooterStatusItem\"><span class=\"dot dotLive\"></span>Admin zone active</span>
      <span class=\"adminFooterStatusItem\"><span class=\"dot dotOff\"></span>Navigation securisee</span>
    </div>
    <span>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - Back Office</span>
  </div>
</footer>
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
        return "admin/Partials/footer.html.twig";
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
        return array (  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"adminFooter\">
  <div class=\"adminFooterInner\">
    <span>PULSE Admin</span>
    <div class=\"adminFooterStatus\" aria-label=\"Etat administration\">
      <span class=\"adminFooterStatusItem\"><span class=\"dot dotLive\"></span>Admin zone active</span>
      <span class=\"adminFooterStatusItem\"><span class=\"dot dotOff\"></span>Navigation securisee</span>
    </div>
    <span>{{ \"now\"|date(\"Y\") }} - Back Office</span>
  </div>
</footer>
", "admin/Partials/footer.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\Partials\\footer.html.twig");
    }
}
