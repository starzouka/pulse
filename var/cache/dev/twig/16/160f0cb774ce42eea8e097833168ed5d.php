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

/* admin/pages/_report_form_fields.html.twig */
class __TwigTemplate_6f5a8904160d57beb6742313b779478a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/_report_form_fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/_report_form_fields.html.twig"));

        // line 1
        yield "﻿<div class=\"formGrid\">
  <div class=\"field\">
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "reporterUserId", [], "any", false, false, false, 3), 'label', ["label" => "reporter_user_id*"]);
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "reporterUserId", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "reporterUserId", [], "any", false, false, false, 5), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "targetType", [], "any", false, false, false, 9), 'label', ["label" => "target_type*"]);
        yield "
    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "targetType", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "targetType", [], "any", false, false, false, 11), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "targetId", [], "any", false, false, false, 15), 'label', ["label" => "target_id*"]);
        yield "
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "targetId", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "input", "min" => 1]]);
        yield "
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "targetId", [], "any", false, false, false, 17), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "status", [], "any", false, false, false, 21), 'label', ["label" => "status*"]);
        yield "
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23), 'errors');
        yield "
  </div>

  ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "handledByAdminId", [], "any", true, true, false, 26)) {
            // line 27
            yield "    <div class=\"field\">
      ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "handledByAdminId", [], "any", false, false, false, 28), 'label', ["label" => "handled_by_admin_id"]);
            yield "
      ";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "handledByAdminId", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "input"]]);
            yield "
      ";
            // line 30
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "handledByAdminId", [], "any", false, false, false, 30), 'errors');
            yield "
    </div>
  ";
        }
        // line 33
        yield "
  <div class=\"field\">
    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "reason", [], "any", false, false, false, 35), 'label', ["label" => "reason*"]);
        yield "
    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "reason", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "textarea", "rows" => 4]]);
        yield "
    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "reason", [], "any", false, false, false, 37), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "adminNote", [], "any", false, false, false, 41), 'label', ["label" => "admin_note"]);
        yield "
    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "adminNote", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "textarea", "rows" => 3]]);
        yield "
    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "adminNote", [], "any", false, false, false, 43), 'errors');
        yield "
  </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/pages/_report_form_fields.html.twig";
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
        return array (  157 => 43,  153 => 42,  149 => 41,  142 => 37,  138 => 36,  134 => 35,  130 => 33,  124 => 30,  120 => 29,  116 => 28,  113 => 27,  111 => 26,  105 => 23,  101 => 22,  97 => 21,  90 => 17,  86 => 16,  82 => 15,  75 => 11,  71 => 10,  67 => 9,  60 => 5,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿<div class=\"formGrid\">
  <div class=\"field\">
    {{ form_label(form.reporterUserId, 'reporter_user_id*') }}
    {{ form_widget(form.reporterUserId, {attr: {class: 'input'}}) }}
    {{ form_errors(form.reporterUserId) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.targetType, 'target_type*') }}
    {{ form_widget(form.targetType, {attr: {class: 'input'}}) }}
    {{ form_errors(form.targetType) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.targetId, 'target_id*') }}
    {{ form_widget(form.targetId, {attr: {class: 'input', min: 1}}) }}
    {{ form_errors(form.targetId) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.status, 'status*') }}
    {{ form_widget(form.status, {attr: {class: 'input'}}) }}
    {{ form_errors(form.status) }}
  </div>

  {% if form.handledByAdminId is defined %}
    <div class=\"field\">
      {{ form_label(form.handledByAdminId, 'handled_by_admin_id') }}
      {{ form_widget(form.handledByAdminId, {attr: {class: 'input'}}) }}
      {{ form_errors(form.handledByAdminId) }}
    </div>
  {% endif %}

  <div class=\"field\">
    {{ form_label(form.reason, 'reason*') }}
    {{ form_widget(form.reason, {attr: {class: 'textarea', rows: 4}}) }}
    {{ form_errors(form.reason) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.adminNote, 'admin_note') }}
    {{ form_widget(form.adminNote, {attr: {class: 'textarea', rows: 3}}) }}
    {{ form_errors(form.adminNote) }}
  </div>
</div>", "admin/pages/_report_form_fields.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\_report_form_fields.html.twig");
    }
}
