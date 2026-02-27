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

/* admin/pages/_comment_form_fields.html.twig */
class __TwigTemplate_5e8335e9dca18b2ba18de55f5276e7e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/_comment_form_fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/_comment_form_fields.html.twig"));

        // line 1
        yield "﻿<div class=\"formGrid\">
  <div class=\"field\">
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "postId", [], "any", false, false, false, 3), 'label', ["label" => "post_id*"]);
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "postId", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "postId", [], "any", false, false, false, 5), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "authorUserId", [], "any", false, false, false, 9), 'label', ["label" => "author_user_id*"]);
        yield "
    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "authorUserId", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "authorUserId", [], "any", false, false, false, 11), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "parentCommentId", [], "any", false, false, false, 15), 'label', ["label" => "parent_comment_id"]);
        yield "
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "parentCommentId", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "parentCommentId", [], "any", false, false, false, 17), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "contentText", [], "any", false, false, false, 21), 'label', ["label" => "content_text*"]);
        yield "
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "contentText", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "textarea", "rows" => 4]]);
        yield "
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "contentText", [], "any", false, false, false, 23), 'errors');
        yield "
  </div>

  ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isDeleted", [], "any", true, true, false, 26)) {
            // line 27
            yield "    <div class=\"field\">
      <label>";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "isDeleted", [], "any", false, false, false, 28), 'widget');
            yield " is_deleted</label>
      ";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "isDeleted", [], "any", false, false, false, 29), 'errors');
            yield "
    </div>
  ";
        }
        // line 32
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/pages/_comment_form_fields.html.twig";
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
        return array (  126 => 32,  120 => 29,  116 => 28,  113 => 27,  111 => 26,  105 => 23,  101 => 22,  97 => 21,  90 => 17,  86 => 16,  82 => 15,  75 => 11,  71 => 10,  67 => 9,  60 => 5,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿<div class=\"formGrid\">
  <div class=\"field\">
    {{ form_label(form.postId, 'post_id*') }}
    {{ form_widget(form.postId, {attr: {class: 'input'}}) }}
    {{ form_errors(form.postId) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.authorUserId, 'author_user_id*') }}
    {{ form_widget(form.authorUserId, {attr: {class: 'input'}}) }}
    {{ form_errors(form.authorUserId) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.parentCommentId, 'parent_comment_id') }}
    {{ form_widget(form.parentCommentId, {attr: {class: 'input'}}) }}
    {{ form_errors(form.parentCommentId) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.contentText, 'content_text*') }}
    {{ form_widget(form.contentText, {attr: {class: 'textarea', rows: 4}}) }}
    {{ form_errors(form.contentText) }}
  </div>

  {% if form.isDeleted is defined %}
    <div class=\"field\">
      <label>{{ form_widget(form.isDeleted) }} is_deleted</label>
      {{ form_errors(form.isDeleted) }}
    </div>
  {% endif %}
</div>", "admin/pages/_comment_form_fields.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\admin\\pages\\_comment_form_fields.html.twig");
    }
}
