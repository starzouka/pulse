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

/* emails/tournament_request_review_email.html.twig */
class __TwigTemplate_7a5aa66789e89324b15f7a34dbdb19ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/tournament_request_review_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/tournament_request_review_email.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"fr\">
  <body style=\"font-family: Arial, sans-serif; background:#f5f6fa; margin:0; padding:24px;\">
    <table role=\"presentation\" style=\"max-width:640px; width:100%; margin:0 auto; background:#ffffff; border-collapse:collapse; border:1px solid #e5e7eb;\">
      <tr>
        <td style=\"padding:20px 24px; border-bottom:1px solid #e5e7eb;\">
          <h2 style=\"margin:0; font-size:20px; color:#111827;\">Decision demande tournoi</h2>
        </td>
      </tr>
      <tr>
        <td style=\"padding:20px 24px; color:#374151; font-size:14px; line-height:1.6;\">
          <p style=\"margin:0 0 10px;\">Bonjour ";
        // line 12
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 12, $this->source); })()), "organizerUserId", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 12, $this->source); })()), "organizerUserId", [], "any", false, false, false, 12), "displayName", [], "any", false, false, false, 12), "html", null, true)) : ("organisateur"));
        yield ",</p>
          <p style=\"margin:0 0 10px;\">Votre demande <strong>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        yield "</strong> a ete traitee.</p>
          <p style=\"margin:0 0 10px;\"><strong>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</strong></p>
          ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 15, $this->source); })()), "adminResponseNote", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "            <p style=\"margin:0 0 10px;\">Note admin: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 16, $this->source); })()), "adminResponseNote", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
          ";
        }
        // line 18
        yield "          <p style=\"margin:0;\">Statut actuel: <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["decision"]) || array_key_exists("decision", $context) ? $context["decision"] : (function () { throw new RuntimeError('Variable "decision" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</strong></p>
        </td>
      </tr>
    </table>
  </body>
</html>
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
        return "emails/tournament_request_review_email.html.twig";
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
        return array (  81 => 18,  75 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
  <body style=\"font-family: Arial, sans-serif; background:#f5f6fa; margin:0; padding:24px;\">
    <table role=\"presentation\" style=\"max-width:640px; width:100%; margin:0 auto; background:#ffffff; border-collapse:collapse; border:1px solid #e5e7eb;\">
      <tr>
        <td style=\"padding:20px 24px; border-bottom:1px solid #e5e7eb;\">
          <h2 style=\"margin:0; font-size:20px; color:#111827;\">Decision demande tournoi</h2>
        </td>
      </tr>
      <tr>
        <td style=\"padding:20px 24px; color:#374151; font-size:14px; line-height:1.6;\">
          <p style=\"margin:0 0 10px;\">Bonjour {{ request.organizerUserId ? request.organizerUserId.displayName : 'organisateur' }},</p>
          <p style=\"margin:0 0 10px;\">Votre demande <strong>{{ request.title }}</strong> a ete traitee.</p>
          <p style=\"margin:0 0 10px;\"><strong>{{ message }}</strong></p>
          {% if request.adminResponseNote %}
            <p style=\"margin:0 0 10px;\">Note admin: {{ request.adminResponseNote }}</p>
          {% endif %}
          <p style=\"margin:0;\">Statut actuel: <strong>{{ decision }}</strong></p>
        </td>
      </tr>
    </table>
  </body>
</html>
", "emails/tournament_request_review_email.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\emails\\tournament_request_review_email.html.twig");
    }
}
