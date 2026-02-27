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

/* front/partials/_auth_modal.html.twig */
class __TwigTemplate_897588d0d1d2330c22e39ec1adb34880 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_auth_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_auth_modal.html.twig"));

        // line 1
        yield "<div class=\"authModal\" id=\"authModal\" aria-hidden=\"true\">
  <div class=\"authModal__backdrop\" data-close=\"true\"></div>
  <div class=\"authCard\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Connexion\">
    <div class=\"authCard__head\">
      <div>
        <div class=\"authCard__title\">Connexion</div>
        <div class=\"authCard__sub\">Email + mot de passe.</div>
      </div>
      <button class=\"iconBtn\" data-close=\"true\" aria-label=\"Fermer\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\">
          <path d=\"M18.3 5.7L12 12l6.3 6.3-1.4 1.4L10.6 13.4 4.3 19.7 2.9 18.3 9.2 12 2.9 5.7 4.3 4.3l6.3 6.3 6.3-6.3 1.4 1.4z\"/>
        </svg>
      </button>
    </div>

    ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "      <div class=\"listItem\">
        <span>Connecte en tant que ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "userIdentifier", [], "any", false, false, false, 18), "html", null, true);
            yield "</span>
        <a class=\"btn btn--ghost\" href=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se deconnecter</a>
      </div>
    ";
        } else {
            // line 22
            yield "      <form class=\"authForm\" id=\"loginForm\" method=\"post\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
            yield "\" novalidate=\"novalidate\">
        <label class=\"field\">
          <span class=\"field__label\">Email</span>
          <input type=\"text\" name=\"_username\" placeholder=\"ex: you@email.com\" autocomplete=\"email\" />
        </label>
        <label class=\"field\">
          <span class=\"field__label\">Mot de passe</span>
          <input type=\"password\" name=\"_password\" placeholder=\"********\" autocomplete=\"current-password\" />
        </label>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            yield "\">
        <input type=\"hidden\" name=\"_target_path\" value=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "uri", [], "any", false, false, false, 32), "html", null, true);
            yield "\">
        <button class=\"btn btn--primary authForm__submit\" type=\"submit\">Se connecter</button>
        <div class=\"authForm__bottom\">
          <a class=\"authLink\" href=\"";
            // line 35
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_forgot_password");
            yield "\">Mot de passe oublie ?</a>
        </div>
      </form>
    ";
        }
        // line 39
        yield "  </div>
</div>
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
        return "front/partials/_auth_modal.html.twig";
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
        return array (  110 => 39,  103 => 35,  97 => 32,  93 => 31,  80 => 22,  74 => 19,  70 => 18,  67 => 17,  65 => 16,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"authModal\" id=\"authModal\" aria-hidden=\"true\">
  <div class=\"authModal__backdrop\" data-close=\"true\"></div>
  <div class=\"authCard\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Connexion\">
    <div class=\"authCard__head\">
      <div>
        <div class=\"authCard__title\">Connexion</div>
        <div class=\"authCard__sub\">Email + mot de passe.</div>
      </div>
      <button class=\"iconBtn\" data-close=\"true\" aria-label=\"Fermer\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\">
          <path d=\"M18.3 5.7L12 12l6.3 6.3-1.4 1.4L10.6 13.4 4.3 19.7 2.9 18.3 9.2 12 2.9 5.7 4.3 4.3l6.3 6.3 6.3-6.3 1.4 1.4z\"/>
        </svg>
      </button>
    </div>

    {% if app.user %}
      <div class=\"listItem\">
        <span>Connecte en tant que {{ app.user.userIdentifier }}</span>
        <a class=\"btn btn--ghost\" href=\"{{ path('app_logout') }}\">Se deconnecter</a>
      </div>
    {% else %}
      <form class=\"authForm\" id=\"loginForm\" method=\"post\" action=\"{{ path('front_login') }}\" novalidate=\"novalidate\">
        <label class=\"field\">
          <span class=\"field__label\">Email</span>
          <input type=\"text\" name=\"_username\" placeholder=\"ex: you@email.com\" autocomplete=\"email\" />
        </label>
        <label class=\"field\">
          <span class=\"field__label\">Mot de passe</span>
          <input type=\"password\" name=\"_password\" placeholder=\"********\" autocomplete=\"current-password\" />
        </label>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        <input type=\"hidden\" name=\"_target_path\" value=\"{{ app.request.uri }}\">
        <button class=\"btn btn--primary authForm__submit\" type=\"submit\">Se connecter</button>
        <div class=\"authForm__bottom\">
          <a class=\"authLink\" href=\"{{ path('front_forgot_password') }}\">Mot de passe oublie ?</a>
        </div>
      </form>
    {% endif %}
  </div>
</div>
", "front/partials/_auth_modal.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\partials\\_auth_modal.html.twig");
    }
}
