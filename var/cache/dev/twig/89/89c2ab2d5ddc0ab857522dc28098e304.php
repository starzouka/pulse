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

/* front/pages/forgot-password.html.twig */
class __TwigTemplate_92ddc48155c024248d8839083ebb80ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/forgot-password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/forgot-password.html.twig"));

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

        yield "PULSE - Mot de passe oublie";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "AUTH", "hero_title" => "Mot de passe oublie", "hero_sub" => "Recevoir un lien de reinitialisation.", "breadcrumb_current" => "Mot de passe oublie"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 16
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                yield "          <div class=\"listItem\">
            <span>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
            <span class=\"badge ";
                // line 19
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
            // line 22
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
      <section class=\"panel\">
        ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forgotPasswordForm"]) || array_key_exists("forgotPasswordForm", $context) ? $context["forgotPasswordForm"] : (function () { throw new RuntimeError('Variable "forgotPasswordForm" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
          <div class=\"formGrid\">
            <label class=\"field\">
              <span class=\"field__label\">Email</span>
              ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forgotPasswordForm"]) || array_key_exists("forgotPasswordForm", $context) ? $context["forgotPasswordForm"] : (function () { throw new RuntimeError('Variable "forgotPasswordForm" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "input", "placeholder" => "vous@exemple.com"]]);
        yield "
              ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forgotPasswordForm"]) || array_key_exists("forgotPasswordForm", $context) ? $context["forgotPasswordForm"] : (function () { throw new RuntimeError('Variable "forgotPasswordForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'errors');
        yield "
            </label>
          </div>
          <div class=\"formActions\" style=\"margin-top:12px;\">
            <button class=\"btn btn--primary\" type=\"submit\">Envoyer le lien</button>
          </div>
        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forgotPasswordForm"]) || array_key_exists("forgotPasswordForm", $context) ? $context["forgotPasswordForm"] : (function () { throw new RuntimeError('Variable "forgotPasswordForm" does not exist.', 36, $this->source); })()), 'form_end');
        yield "
      </section>

      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISEES</h3>
            <div class=\"panel__desc\">Schema reel + colonnes cles.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>users</b></span><span class=\"listItem__meta\">reset_password_token_hash, reset_password_expires_at</span></div>
        </div>
      </div>

      ";
        // line 51
        yield from $this->load("front/partials/_footer.html.twig", 51)->unwrap()->yield($context);
        // line 52
        yield "    </section>
  </main>

  ";
        // line 55
        yield from $this->load("front/partials/_auth_modal.html.twig", 55)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/forgot-password.html.twig";
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
        return array (  190 => 55,  185 => 52,  183 => 51,  165 => 36,  156 => 30,  152 => 29,  145 => 25,  141 => 23,  135 => 22,  124 => 19,  120 => 18,  117 => 17,  112 => 16,  108 => 15,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Mot de passe oublie{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'AUTH',
    hero_title: 'Mot de passe oublie',
    hero_sub: 'Recevoir un lien de reinitialisation.',
    breadcrumb_current: 'Mot de passe oublie'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      {% for label, messages in app.flashes %}
        {% for message in messages %}
          <div class=\"listItem\">
            <span>{{ message }}</span>
            <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
          </div>
        {% endfor %}
      {% endfor %}

      <section class=\"panel\">
        {{ form_start(forgotPasswordForm, {attr: {novalidate: 'novalidate'}}) }}
          <div class=\"formGrid\">
            <label class=\"field\">
              <span class=\"field__label\">Email</span>
              {{ form_widget(forgotPasswordForm.email, {attr: {class: 'input', placeholder: 'vous@exemple.com'}}) }}
              {{ form_errors(forgotPasswordForm.email) }}
            </label>
          </div>
          <div class=\"formActions\" style=\"margin-top:12px;\">
            <button class=\"btn btn--primary\" type=\"submit\">Envoyer le lien</button>
          </div>
        {{ form_end(forgotPasswordForm) }}
      </section>

      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISEES</h3>
            <div class=\"panel__desc\">Schema reel + colonnes cles.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>users</b></span><span class=\"listItem__meta\">reset_password_token_hash, reset_password_expires_at</span></div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/forgot-password.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\forgot-password.html.twig");
    }
}
