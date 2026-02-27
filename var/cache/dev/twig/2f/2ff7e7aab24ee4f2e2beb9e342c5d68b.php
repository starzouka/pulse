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

/* admin/pages/_message_form_fields.html.twig */
class __TwigTemplate_13712839adead899e72b014be5702cb4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/_message_form_fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/_message_form_fields.html.twig"));

        // line 1
        yield "﻿<div class=\"formGrid\">
  <div class=\"field\">
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "senderUserId", [], "any", false, false, false, 3), 'label', ["label" => "sender_user_id*"]);
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "senderUserId", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "senderUserId", [], "any", false, false, false, 5), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "receiverUserId", [], "any", false, false, false, 9), 'label', ["label" => "receiver_user_id*"]);
        yield "
    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "receiverUserId", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "receiverUserId", [], "any", false, false, false, 11), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "bodyText", [], "any", false, false, false, 15), 'label', ["label" => "body_text*"]);
        yield "
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "bodyText", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "textarea", "rows" => 4]]);
        yield "
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "bodyText", [], "any", false, false, false, 17), 'errors');
        yield "
  </div>

  ";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isRead", [], "any", true, true, false, 20)) {
            // line 21
            yield "    <div class=\"field\">
      <label>";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "isRead", [], "any", false, false, false, 22), 'widget');
            yield " is_read</label>
      ";
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "isRead", [], "any", false, false, false, 23), 'errors');
            yield "
    </div>
  ";
        }
        // line 26
        yield "
  ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isDeletedBySender", [], "any", true, true, false, 27)) {
            // line 28
            yield "    <div class=\"field\">
      <label>";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "isDeletedBySender", [], "any", false, false, false, 29), 'widget');
            yield " is_deleted_by_sender</label>
      ";
            // line 30
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "isDeletedBySender", [], "any", false, false, false, 30), 'errors');
            yield "
    </div>
  ";
        }
        // line 33
        yield "
  ";
        // line 34
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isDeletedByReceiver", [], "any", true, true, false, 34)) {
            // line 35
            yield "    <div class=\"field\">
      <label>";
            // line 36
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "isDeletedByReceiver", [], "any", false, false, false, 36), 'widget');
            yield " is_deleted_by_receiver</label>
      ";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "isDeletedByReceiver", [], "any", false, false, false, 37), 'errors');
            yield "
    </div>
  ";
        }
        // line 40
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
        return "admin/pages/_message_form_fields.html.twig";
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
        return array (  147 => 40,  141 => 37,  137 => 36,  134 => 35,  132 => 34,  129 => 33,  123 => 30,  119 => 29,  116 => 28,  114 => 27,  111 => 26,  105 => 23,  101 => 22,  98 => 21,  96 => 20,  90 => 17,  86 => 16,  82 => 15,  75 => 11,  71 => 10,  67 => 9,  60 => 5,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿<div class=\"formGrid\">
  <div class=\"field\">
    {{ form_label(form.senderUserId, 'sender_user_id*') }}
    {{ form_widget(form.senderUserId, {attr: {class: 'input'}}) }}
    {{ form_errors(form.senderUserId) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.receiverUserId, 'receiver_user_id*') }}
    {{ form_widget(form.receiverUserId, {attr: {class: 'input'}}) }}
    {{ form_errors(form.receiverUserId) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.bodyText, 'body_text*') }}
    {{ form_widget(form.bodyText, {attr: {class: 'textarea', rows: 4}}) }}
    {{ form_errors(form.bodyText) }}
  </div>

  {% if form.isRead is defined %}
    <div class=\"field\">
      <label>{{ form_widget(form.isRead) }} is_read</label>
      {{ form_errors(form.isRead) }}
    </div>
  {% endif %}

  {% if form.isDeletedBySender is defined %}
    <div class=\"field\">
      <label>{{ form_widget(form.isDeletedBySender) }} is_deleted_by_sender</label>
      {{ form_errors(form.isDeletedBySender) }}
    </div>
  {% endif %}

  {% if form.isDeletedByReceiver is defined %}
    <div class=\"field\">
      <label>{{ form_widget(form.isDeletedByReceiver) }} is_deleted_by_receiver</label>
      {{ form_errors(form.isDeletedByReceiver) }}
    </div>
  {% endif %}
</div>", "admin/pages/_message_form_fields.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\_message_form_fields.html.twig");
    }
}
