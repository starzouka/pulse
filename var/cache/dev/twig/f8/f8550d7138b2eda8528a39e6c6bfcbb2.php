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

/* front/pages/reset-password.html.twig */
class __TwigTemplate_83f2b6d3090d771963795bc697aff603 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/reset-password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/reset-password.html.twig"));

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

        yield "PULSE - Reinitialiser mot de passe";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "AUTH", "hero_title" => "Reinitialiser mot de passe", "hero_sub" => "Choisissez un nouveau mot de passe.", "breadcrumb_current" => "Reinitialiser mot de passe"]));
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
          <input type=\"hidden\" name=\"token\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\">
          <div class=\"formGrid\">
            <label class=\"field\">
              <span class=\"field__label\">Nouveau mot de passe</span>
              ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 30, $this->source); })()), "plainPassword", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "input", "autocomplete" => "new-password"]]);
        yield "
              ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 31, $this->source); })()), "plainPassword", [], "any", false, false, false, 31), "first", [], "any", false, false, false, 31), 'errors');
        yield "
            </label>
            <label class=\"field\">
              <span class=\"field__label\">Confirmation</span>
              ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 35, $this->source); })()), "plainPassword", [], "any", false, false, false, 35), "second", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "input", "autocomplete" => "new-password"]]);
        yield "
              ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 36, $this->source); })()), "plainPassword", [], "any", false, false, false, 36), "second", [], "any", false, false, false, 36), 'errors');
        yield "
            </label>
          </div>
          <div class=\"formActions\" style=\"margin-top:12px;\">
            <button class=\"btn btn--primary\" type=\"submit\">Mettre a jour</button>
          </div>
        ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 42, $this->source); })()), 'form_end');
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
          <div class=\"listItem\"><span><b>users</b></span><span class=\"listItem__meta\">password_hash, reset_password_token_hash, reset_password_expires_at</span></div>
        </div>
      </div>

      ";
        // line 57
        yield from $this->load("front/partials/_footer.html.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "    </section>
  </main>

  ";
        // line 61
        yield from $this->load("front/partials/_auth_modal.html.twig", 61)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/reset-password.html.twig";
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
        return array (  205 => 61,  200 => 58,  198 => 57,  180 => 42,  171 => 36,  167 => 35,  160 => 31,  156 => 30,  149 => 26,  145 => 25,  141 => 23,  135 => 22,  124 => 19,  120 => 18,  117 => 17,  112 => 16,  108 => 15,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Reinitialiser mot de passe{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'AUTH',
    hero_title: 'Reinitialiser mot de passe',
    hero_sub: 'Choisissez un nouveau mot de passe.',
    breadcrumb_current: 'Reinitialiser mot de passe'
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
        {{ form_start(resetPasswordForm, {attr: {novalidate: 'novalidate'}}) }}
          <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
          <div class=\"formGrid\">
            <label class=\"field\">
              <span class=\"field__label\">Nouveau mot de passe</span>
              {{ form_widget(resetPasswordForm.plainPassword.first, {attr: {class: 'input', autocomplete: 'new-password'}}) }}
              {{ form_errors(resetPasswordForm.plainPassword.first) }}
            </label>
            <label class=\"field\">
              <span class=\"field__label\">Confirmation</span>
              {{ form_widget(resetPasswordForm.plainPassword.second, {attr: {class: 'input', autocomplete: 'new-password'}}) }}
              {{ form_errors(resetPasswordForm.plainPassword.second) }}
            </label>
          </div>
          <div class=\"formActions\" style=\"margin-top:12px;\">
            <button class=\"btn btn--primary\" type=\"submit\">Mettre a jour</button>
          </div>
        {{ form_end(resetPasswordForm) }}
      </section>

      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISEES</h3>
            <div class=\"panel__desc\">Schema reel + colonnes cles.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>users</b></span><span class=\"listItem__meta\">password_hash, reset_password_token_hash, reset_password_expires_at</span></div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/reset-password.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\reset-password.html.twig");
    }
}
