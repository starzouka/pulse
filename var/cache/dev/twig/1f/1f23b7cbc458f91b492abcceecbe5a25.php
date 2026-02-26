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

/* front/pages/register.html.twig */
class __TwigTemplate_c31e543185aa9e14a25733702e439383 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/register.html.twig"));

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

        yield "PULSE - Inscription";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "AUTH", "hero_title" => "Inscription", "hero_sub" => "Creer votre compte (joueur, capitaine ou organisateur) et verifier votre email.", "breadcrumb_current" => "Inscription"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["class" => "panel", "novalidate" => "novalidate"]]);
        yield "
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
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "          <div class=\"listItem\">
            <span>";
            // line 27
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), 'errors');
            yield "</span>
            <span class=\"badge badge--danger\">ERROR</span>
          </div>
        ";
        }
        // line 31
        yield "
        <div class=\"formGrid\">
          <label class=\"field\">
            <span class=\"field__label\">Username</span>
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "username", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "input"]]);
        yield "
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), 'errors');
        yield "
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Email</span>
            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "input"]]);
        yield "
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'errors');
        yield "
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Role</span>
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "role", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "input"]]);
        yield "
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "role", [], "any", false, false, false, 48), 'errors');
        yield "
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Display name</span>
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "displayName", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "input"]]);
        yield "
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "displayName", [], "any", false, false, false, 54), 'errors');
        yield "
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Pays</span>
            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "country", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "input"]]);
        yield "
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "country", [], "any", false, false, false, 60), 'errors');
        yield "
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Telephone</span>
            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "phone", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "input"]]);
        yield "
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "phone", [], "any", false, false, false, 66), 'errors');
        yield "
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Date de naissance</span>
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "birthDate", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "input"]]);
        yield "
            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "birthDate", [], "any", false, false, false, 72), 'errors');
        yield "
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Genre</span>
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "gender", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "input"]]);
        yield "
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "gender", [], "any", false, false, false, 78), 'errors');
        yield "
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Mot de passe</span>
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "plainPassword", [], "any", false, false, false, 83), "first", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "input"]]);
        yield "
            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "plainPassword", [], "any", false, false, false, 84), "first", [], "any", false, false, false, 84), 'errors');
        yield "
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Confirmation</span>
            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), "plainPassword", [], "any", false, false, false, 89), "second", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "input"]]);
        yield "
            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "plainPassword", [], "any", false, false, false, 90), "second", [], "any", false, false, false, 90), 'errors');
        yield "
          </label>
        </div>

        <label class=\"field\" style=\"margin-top:12px;\">
          <span class=\"field__label\">Conditions</span>
          <div>";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), "agreeTerms", [], "any", false, false, false, 96), 'widget');
        yield " J'accepte les CGU</div>
          ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), "agreeTerms", [], "any", false, false, false, 97), 'errors');
        yield "
        </label>

        <div class=\"formActions\" style=\"margin-top:12px;\">
          <button class=\"btn btn--primary\" type=\"submit\">Creer le compte</button>
          <a class=\"btn btn--ghost\" href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">J'ai deja un compte</a>
        </div>
      ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 104, $this->source); })()), 'form_end');
        yield "

      ";
        // line 106
        yield from $this->load("front/partials/_footer.html.twig", 106)->unwrap()->yield($context);
        // line 107
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
        return "front/pages/register.html.twig";
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
        return array (  311 => 107,  309 => 106,  304 => 104,  299 => 102,  291 => 97,  287 => 96,  278 => 90,  274 => 89,  266 => 84,  262 => 83,  254 => 78,  250 => 77,  242 => 72,  238 => 71,  230 => 66,  226 => 65,  218 => 60,  214 => 59,  206 => 54,  202 => 53,  194 => 48,  190 => 47,  182 => 42,  178 => 41,  170 => 36,  166 => 35,  160 => 31,  153 => 27,  150 => 26,  148 => 25,  145 => 24,  139 => 23,  128 => 20,  124 => 19,  121 => 18,  116 => 17,  112 => 16,  108 => 15,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Inscription{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'AUTH',
    hero_title: 'Inscription',
    hero_sub: 'Creer votre compte (joueur, capitaine ou organisateur) et verifier votre email.',
    breadcrumb_current: 'Inscription'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      {{ form_start(registrationForm, {attr: {class: 'panel', novalidate: 'novalidate'}}) }}
        {% for label, messages in app.flashes %}
          {% for message in messages %}
            <div class=\"listItem\">
              <span>{{ message }}</span>
              <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
            </div>
          {% endfor %}
        {% endfor %}

        {% if form_errors(registrationForm) %}
          <div class=\"listItem\">
            <span>{{ form_errors(registrationForm) }}</span>
            <span class=\"badge badge--danger\">ERROR</span>
          </div>
        {% endif %}

        <div class=\"formGrid\">
          <label class=\"field\">
            <span class=\"field__label\">Username</span>
            {{ form_widget(registrationForm.username, {attr: {class: 'input'}}) }}
            {{ form_errors(registrationForm.username) }}
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Email</span>
            {{ form_widget(registrationForm.email, {attr: {class: 'input'}}) }}
            {{ form_errors(registrationForm.email) }}
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Role</span>
            {{ form_widget(registrationForm.role, {attr: {class: 'input'}}) }}
            {{ form_errors(registrationForm.role) }}
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Display name</span>
            {{ form_widget(registrationForm.displayName, {attr: {class: 'input'}}) }}
            {{ form_errors(registrationForm.displayName) }}
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Pays</span>
            {{ form_widget(registrationForm.country, {attr: {class: 'input'}}) }}
            {{ form_errors(registrationForm.country) }}
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Telephone</span>
            {{ form_widget(registrationForm.phone, {attr: {class: 'input'}}) }}
            {{ form_errors(registrationForm.phone) }}
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Date de naissance</span>
            {{ form_widget(registrationForm.birthDate, {attr: {class: 'input'}}) }}
            {{ form_errors(registrationForm.birthDate) }}
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Genre</span>
            {{ form_widget(registrationForm.gender, {attr: {class: 'input'}}) }}
            {{ form_errors(registrationForm.gender) }}
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Mot de passe</span>
            {{ form_widget(registrationForm.plainPassword.first, {attr: {class: 'input'}}) }}
            {{ form_errors(registrationForm.plainPassword.first) }}
          </label>

          <label class=\"field\">
            <span class=\"field__label\">Confirmation</span>
            {{ form_widget(registrationForm.plainPassword.second, {attr: {class: 'input'}}) }}
            {{ form_errors(registrationForm.plainPassword.second) }}
          </label>
        </div>

        <label class=\"field\" style=\"margin-top:12px;\">
          <span class=\"field__label\">Conditions</span>
          <div>{{ form_widget(registrationForm.agreeTerms) }} J'accepte les CGU</div>
          {{ form_errors(registrationForm.agreeTerms) }}
        </label>

        <div class=\"formActions\" style=\"margin-top:12px;\">
          <button class=\"btn btn--primary\" type=\"submit\">Creer le compte</button>
          <a class=\"btn btn--ghost\" href=\"{{ path('front_login') }}\">J'ai deja un compte</a>
        </div>
      {{ form_end(registrationForm) }}

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>
{% endblock %}
", "front/pages/register.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\register.html.twig");
    }
}
