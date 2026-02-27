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

/* front/pages/login.html.twig */
class __TwigTemplate_e8215088a895a65d14149a52191fd42f extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "PULSE - Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "  ";
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "AUTH", "hero_title" => "Connexion", "hero_sub" => "Connectez-vous pour acceder aux actions sensibles.", "breadcrumb_current" => "Connexion"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <form class=\"panel\" method=\"post\" action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 17
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                yield "            <div class=\"listItem\">
              <span>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
              <span class=\"badge ";
                // line 20
                yield ((($context["label"] == "error")) ? ("badge--danger") : ("badge--success"));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
        ";
        // line 25
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "          <div class=\"listItem\">
            <span>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })()), "messageKey", [], "any", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })()), "messageData", [], "any", false, false, false, 27), "security"), "html", null, true);
            yield "</span>
            <span class=\"badge badge--danger\">ERROR</span>
          </div>
        ";
        }
        // line 31
        yield "
        ";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "          <div class=\"listItem\">
            <span>Connecte en tant que ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "userIdentifier", [], "any", false, false, false, 34), "html", null, true);
            yield "</span>
            <a class=\"btn btn--ghost\" href=\"";
            // line 35
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se deconnecter</a>
          </div>
        ";
        }
        // line 38
        yield "
        <div class=\"formGrid\">
          <label class=\"field\">
            <span class=\"field__label\">Email</span>
            <input class=\"input\" type=\"email\" name=\"_username\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\" autocomplete=\"email\" required />
          </label>
          <label class=\"field\">
            <span class=\"field__label\">Mot de passe</span>
            <input class=\"input\" type=\"password\" name=\"_password\" autocomplete=\"current-password\" required />
          </label>
          <label class=\"field\">
            <span class=\"field__label\">Se souvenir de moi</span>
            <input type=\"checkbox\" name=\"_remember_me\" />
          </label>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "query", [], "any", false, false, false, 55), "get", ["_target_path", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home")], "method", false, false, false, 55), "html", null, true);
        yield "\">

        <div class=\"formActions\" style=\"margin-top:12px;\">
          <button class=\"btn btn--primary\" type=\"submit\">Se connecter</button>
          <a class=\"btn btn--ghost\" href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_register");
        yield "\">Creer un compte</a>
          <a class=\"btn btn--ghost\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_forgot_password");
        yield "\">Mot de passe oublie</a>
        </div>
      </form>

      ";
        // line 64
        yield from $this->load("front/partials/_footer.html.twig", 64)->unwrap()->yield($context);
        // line 65
        yield "    </section>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/login.html.twig";
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
        return array (  223 => 65,  221 => 64,  214 => 60,  210 => 59,  203 => 55,  199 => 54,  184 => 42,  178 => 38,  172 => 35,  168 => 34,  165 => 33,  163 => 32,  160 => 31,  153 => 27,  150 => 26,  148 => 25,  145 => 24,  139 => 23,  128 => 20,  124 => 19,  121 => 18,  116 => 17,  112 => 16,  108 => 15,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Connexion{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'AUTH',
    hero_title: 'Connexion',
    hero_sub: 'Connectez-vous pour acceder aux actions sensibles.',
    breadcrumb_current: 'Connexion'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <form class=\"panel\" method=\"post\" action=\"{{ path('front_login') }}\">
        {% for label, messages in app.flashes %}
          {% for message in messages %}
            <div class=\"listItem\">
              <span>{{ message }}</span>
              <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
            </div>
          {% endfor %}
        {% endfor %}

        {% if error %}
          <div class=\"listItem\">
            <span>{{ error.messageKey|trans(error.messageData, 'security') }}</span>
            <span class=\"badge badge--danger\">ERROR</span>
          </div>
        {% endif %}

        {% if app.user %}
          <div class=\"listItem\">
            <span>Connecte en tant que {{ app.user.userIdentifier }}</span>
            <a class=\"btn btn--ghost\" href=\"{{ path('app_logout') }}\">Se deconnecter</a>
          </div>
        {% endif %}

        <div class=\"formGrid\">
          <label class=\"field\">
            <span class=\"field__label\">Email</span>
            <input class=\"input\" type=\"email\" name=\"_username\" value=\"{{ last_username }}\" autocomplete=\"email\" required />
          </label>
          <label class=\"field\">
            <span class=\"field__label\">Mot de passe</span>
            <input class=\"input\" type=\"password\" name=\"_password\" autocomplete=\"current-password\" required />
          </label>
          <label class=\"field\">
            <span class=\"field__label\">Se souvenir de moi</span>
            <input type=\"checkbox\" name=\"_remember_me\" />
          </label>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        <input type=\"hidden\" name=\"_target_path\" value=\"{{ app.request.query.get('_target_path', path('front_home')) }}\">

        <div class=\"formActions\" style=\"margin-top:12px;\">
          <button class=\"btn btn--primary\" type=\"submit\">Se connecter</button>
          <a class=\"btn btn--ghost\" href=\"{{ path('front_register') }}\">Creer un compte</a>
          <a class=\"btn btn--ghost\" href=\"{{ path('front_forgot_password') }}\">Mot de passe oublie</a>
        </div>
      </form>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>
{% endblock %}
", "front/pages/login.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\login.html.twig");
    }
}
