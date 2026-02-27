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

/* emails/reset_password_email.html.twig */
class __TwigTemplate_d64cf3c9a806297741709e046385d3a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reset_password_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reset_password_email.html.twig"));

        // line 1
        yield "<h2>Reinitialisation du mot de passe</h2>
<p>Vous avez demande la reinitialisation de votre mot de passe.</p>
<p>
  Cliquez sur ce lien pour definir un nouveau mot de passe:
  <a href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetUrl"]) || array_key_exists("resetUrl", $context) ? $context["resetUrl"] : (function () { throw new RuntimeError('Variable "resetUrl" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\">Reinitialiser mon mot de passe</a>
</p>
<p>Ce lien expire le ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["expiresAt"]) || array_key_exists("expiresAt", $context) ? $context["expiresAt"] : (function () { throw new RuntimeError('Variable "expiresAt" does not exist.', 7, $this->source); })()), "Y-m-d H:i"), "html", null, true);
        yield ".</p>
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
        return "emails/reset_password_email.html.twig";
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
        return array (  59 => 7,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h2>Reinitialisation du mot de passe</h2>
<p>Vous avez demande la reinitialisation de votre mot de passe.</p>
<p>
  Cliquez sur ce lien pour definir un nouveau mot de passe:
  <a href=\"{{ resetUrl }}\">Reinitialiser mon mot de passe</a>
</p>
<p>Ce lien expire le {{ expiresAt|date('Y-m-d H:i') }}.</p>
", "emails/reset_password_email.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\emails\\reset_password_email.html.twig");
    }
}
