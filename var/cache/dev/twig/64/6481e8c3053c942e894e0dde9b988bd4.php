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

/* front/partials/_footer.html.twig */
class __TwigTemplate_ee4a4bd5107e0691f25fe25386b2937c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_footer.html.twig"));

        // line 1
        yield "<footer class=\"footer\">
  <div>&copy; 2026 Pulse - Front-office</div>
  <div class=\"footer__links\">
    <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_about");
        yield "\">A propos</a>
    <a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_contact");
        yield "\">Contact</a>
    <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_faq");
        yield "\">FAQ</a>
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
        return "front/partials/_footer.html.twig";
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
        return array (  61 => 6,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"footer\">
  <div>&copy; 2026 Pulse - Front-office</div>
  <div class=\"footer__links\">
    <a href=\"{{ path('front_about') }}\">A propos</a>
    <a href=\"{{ path('front_contact') }}\">Contact</a>
    <a href=\"{{ path('front_faq') }}\">FAQ</a>
  </div>
</footer>
", "front/partials/_footer.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\partials\\_footer.html.twig");
    }
}
