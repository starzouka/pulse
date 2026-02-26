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

/* admin/pages/_user_form_fields.html.twig */
class __TwigTemplate_f7b44a4062e24f6151616c1b11bfa2d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/_user_form_fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/_user_form_fields.html.twig"));

        // line 1
        yield "﻿<div class=\"formGrid\">
  <div class=\"field\">
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "username", [], "any", false, false, false, 3), 'label', ["label" => "username*"]);
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "username", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "username", [], "any", false, false, false, 5), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'label', ["label" => "email*"]);
        yield "
    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "plainPassword", [], "any", false, false, false, 15), 'label', ["label" => "password*"]);
        yield "
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "plainPassword", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "input", "autocomplete" => "new-password"]]);
        yield "
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "plainPassword", [], "any", false, false, false, 17), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "role", [], "any", false, false, false, 21), 'label', ["label" => "role*"]);
        yield "
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "role", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "role", [], "any", false, false, false, 23), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "displayName", [], "any", false, false, false, 27), 'label', ["label" => "display_name*"]);
        yield "
    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "displayName", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "displayName", [], "any", false, false, false, 29), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "phone", [], "any", false, false, false, 33), 'label', ["label" => "phone"]);
        yield "
    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "phone", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "phone", [], "any", false, false, false, 35), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "country", [], "any", false, false, false, 39), 'label', ["label" => "country"]);
        yield "
    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "country", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "country", [], "any", false, false, false, 41), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "birthDate", [], "any", false, false, false, 45), 'label', ["label" => "birth_date"]);
        yield "
    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "birthDate", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "birthDate", [], "any", false, false, false, 47), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "gender", [], "any", false, false, false, 51), 'label', ["label" => "gender"]);
        yield "
    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "gender", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "gender", [], "any", false, false, false, 53), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "profileImageId", [], "any", false, false, false, 57), 'label', ["label" => "profile_image"]);
        yield "
    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "profileImageId", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "profileImageId", [], "any", false, false, false, 59), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "bio", [], "any", false, false, false, 63), 'label', ["label" => "bio"]);
        yield "
    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "bio", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "textarea"]]);
        yield "
    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "bio", [], "any", false, false, false, 65), 'errors');
        yield "
  </div>

  <div class=\"field\">
    <label>Flags</label>
    <div class=\"formActions\" style=\"justify-content:flex-start;\">
      <label>";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "emailVerified", [], "any", false, false, false, 71), 'widget');
        yield " Email verifie</label>
      <label>";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "isActive", [], "any", false, false, false, 72), 'widget');
        yield " Actif</label>
    </div>
    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "emailVerified", [], "any", false, false, false, 74), 'errors');
        yield "
    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "isActive", [], "any", false, false, false, 75), 'errors');
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
        return "admin/pages/_user_form_fields.html.twig";
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
        return array (  232 => 75,  228 => 74,  223 => 72,  219 => 71,  210 => 65,  206 => 64,  202 => 63,  195 => 59,  191 => 58,  187 => 57,  180 => 53,  176 => 52,  172 => 51,  165 => 47,  161 => 46,  157 => 45,  150 => 41,  146 => 40,  142 => 39,  135 => 35,  131 => 34,  127 => 33,  120 => 29,  116 => 28,  112 => 27,  105 => 23,  101 => 22,  97 => 21,  90 => 17,  86 => 16,  82 => 15,  75 => 11,  71 => 10,  67 => 9,  60 => 5,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿<div class=\"formGrid\">
  <div class=\"field\">
    {{ form_label(form.username, 'username*') }}
    {{ form_widget(form.username, {attr: {class: 'input'}}) }}
    {{ form_errors(form.username) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.email, 'email*') }}
    {{ form_widget(form.email, {attr: {class: 'input'}}) }}
    {{ form_errors(form.email) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.plainPassword, 'password*') }}
    {{ form_widget(form.plainPassword, {attr: {class: 'input', autocomplete: 'new-password'}}) }}
    {{ form_errors(form.plainPassword) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.role, 'role*') }}
    {{ form_widget(form.role, {attr: {class: 'input'}}) }}
    {{ form_errors(form.role) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.displayName, 'display_name*') }}
    {{ form_widget(form.displayName, {attr: {class: 'input'}}) }}
    {{ form_errors(form.displayName) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.phone, 'phone') }}
    {{ form_widget(form.phone, {attr: {class: 'input'}}) }}
    {{ form_errors(form.phone) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.country, 'country') }}
    {{ form_widget(form.country, {attr: {class: 'input'}}) }}
    {{ form_errors(form.country) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.birthDate, 'birth_date') }}
    {{ form_widget(form.birthDate, {attr: {class: 'input'}}) }}
    {{ form_errors(form.birthDate) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.gender, 'gender') }}
    {{ form_widget(form.gender, {attr: {class: 'input'}}) }}
    {{ form_errors(form.gender) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.profileImageId, 'profile_image') }}
    {{ form_widget(form.profileImageId, {attr: {class: 'input'}}) }}
    {{ form_errors(form.profileImageId) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.bio, 'bio') }}
    {{ form_widget(form.bio, {attr: {class: 'textarea'}}) }}
    {{ form_errors(form.bio) }}
  </div>

  <div class=\"field\">
    <label>Flags</label>
    <div class=\"formActions\" style=\"justify-content:flex-start;\">
      <label>{{ form_widget(form.emailVerified) }} Email verifie</label>
      <label>{{ form_widget(form.isActive) }} Actif</label>
    </div>
    {{ form_errors(form.emailVerified) }}
    {{ form_errors(form.isActive) }}
  </div>
</div>", "admin/pages/_user_form_fields.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\admin\\pages\\_user_form_fields.html.twig");
    }
}
