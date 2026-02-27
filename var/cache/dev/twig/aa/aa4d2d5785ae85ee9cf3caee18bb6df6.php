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

/* front/pages/password-change.html.twig */
class __TwigTemplate_82ee5e23b87ae633e87fe6bc29d7d7f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/password-change.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/password-change.html.twig"));

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

        yield "PULSE - Changer mot de passe";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Changer mot de passe", "hero_sub" => "Securisez votre session active.", "breadcrumb_current" => "Changer mot de passe"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "profile_edit"]));
        // line 17
        yield "
        <div class=\"socialShell\">
          <div class=\"socialStack\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 21
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                yield "                <div class=\"listItem\">
                  <span>";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                  <span class=\"badge ";
                // line 24
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
            // line 27
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
            ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordChangeForm"]) || array_key_exists("passwordChangeForm", $context) ? $context["passwordChangeForm"] : (function () { throw new RuntimeError('Variable "passwordChangeForm" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "panel gadget", "novalidate" => "novalidate"]]);
        yield "
              <h3 class=\"panel__title\">MISE A JOUR MOT DE PASSE</h3>
              <div class=\"formGrid\">
                <label class=\"field\">
                  <span class=\"field__label\">Ancien mot de passe</span>
                  ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordChangeForm"]) || array_key_exists("passwordChangeForm", $context) ? $context["passwordChangeForm"] : (function () { throw new RuntimeError('Variable "passwordChangeForm" does not exist.', 34, $this->source); })()), "currentPassword", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                  ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordChangeForm"]) || array_key_exists("passwordChangeForm", $context) ? $context["passwordChangeForm"] : (function () { throw new RuntimeError('Variable "passwordChangeForm" does not exist.', 35, $this->source); })()), "currentPassword", [], "any", false, false, false, 35), 'errors');
        yield "
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Nouveau mot de passe</span>
                  ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordChangeForm"]) || array_key_exists("passwordChangeForm", $context) ? $context["passwordChangeForm"] : (function () { throw new RuntimeError('Variable "passwordChangeForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), "first", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                  ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordChangeForm"]) || array_key_exists("passwordChangeForm", $context) ? $context["passwordChangeForm"] : (function () { throw new RuntimeError('Variable "passwordChangeForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), "first", [], "any", false, false, false, 41), 'errors');
        yield "
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Confirmation</span>
                  ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordChangeForm"]) || array_key_exists("passwordChangeForm", $context) ? $context["passwordChangeForm"] : (function () { throw new RuntimeError('Variable "passwordChangeForm" does not exist.', 46, $this->source); })()), "plainPassword", [], "any", false, false, false, 46), "second", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                  ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordChangeForm"]) || array_key_exists("passwordChangeForm", $context) ? $context["passwordChangeForm"] : (function () { throw new RuntimeError('Variable "passwordChangeForm" does not exist.', 47, $this->source); })()), "plainPassword", [], "any", false, false, false, 47), "second", [], "any", false, false, false, 47), 'errors');
        yield "
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Mettre a jour</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile");
        yield "\">Retour profil</a>
              </div>
            ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordChangeForm"]) || array_key_exists("passwordChangeForm", $context) ? $context["passwordChangeForm"] : (function () { throw new RuntimeError('Variable "passwordChangeForm" does not exist.', 55, $this->source); })()), 'form_end');
        yield "
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel gadget gadget--alert\">
              <h3 class=\"panel__title\">SECURITE</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Session actuelle</span><span class=\"badge badge--success\">ACTIVE</span></div>
                <div class=\"listItem\"><span>Email verifie</span><span class=\"listItem__meta\">";
        // line 63
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 63, $this->source); })()), "emailVerified", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "</span></div>
                <div class=\"listItem\"><span>Derniere connexion</span><span class=\"listItem__meta\">";
        // line 64
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 64, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 64, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 64), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</span></div>
              </div>
            </section>
          </aside>
        </div>
      </div>

      ";
        // line 71
        yield from $this->load("front/partials/_footer.html.twig", 71)->unwrap()->yield($context);
        // line 72
        yield "    </section>
  </main>

  ";
        // line 75
        yield from $this->load("front/partials/_auth_modal.html.twig", 75)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/password-change.html.twig";
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
        return array (  234 => 75,  229 => 72,  227 => 71,  217 => 64,  213 => 63,  202 => 55,  197 => 53,  188 => 47,  184 => 46,  176 => 41,  172 => 40,  164 => 35,  160 => 34,  152 => 29,  149 => 28,  143 => 27,  132 => 24,  128 => 23,  125 => 22,  120 => 21,  116 => 20,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Changer mot de passe{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Changer mot de passe',
    hero_sub: 'Securisez votre session active.',
    breadcrumb_current: 'Changer mot de passe'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'profile_edit' } %}

        <div class=\"socialShell\">
          <div class=\"socialStack\">
            {% for label, messages in app.flashes %}
              {% for message in messages %}
                <div class=\"listItem\">
                  <span>{{ message }}</span>
                  <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
                </div>
              {% endfor %}
            {% endfor %}

            {{ form_start(passwordChangeForm, {attr: {class: 'panel gadget', novalidate: 'novalidate'}}) }}
              <h3 class=\"panel__title\">MISE A JOUR MOT DE PASSE</h3>
              <div class=\"formGrid\">
                <label class=\"field\">
                  <span class=\"field__label\">Ancien mot de passe</span>
                  {{ form_widget(passwordChangeForm.currentPassword, {attr: {class: 'input'}}) }}
                  {{ form_errors(passwordChangeForm.currentPassword) }}
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Nouveau mot de passe</span>
                  {{ form_widget(passwordChangeForm.plainPassword.first, {attr: {class: 'input'}}) }}
                  {{ form_errors(passwordChangeForm.plainPassword.first) }}
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Confirmation</span>
                  {{ form_widget(passwordChangeForm.plainPassword.second, {attr: {class: 'input'}}) }}
                  {{ form_errors(passwordChangeForm.plainPassword.second) }}
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Mettre a jour</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_profile') }}\">Retour profil</a>
              </div>
            {{ form_end(passwordChangeForm) }}
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel gadget gadget--alert\">
              <h3 class=\"panel__title\">SECURITE</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Session actuelle</span><span class=\"badge badge--success\">ACTIVE</span></div>
                <div class=\"listItem\"><span>Email verifie</span><span class=\"listItem__meta\">{{ viewer_user.emailVerified ? 'Oui' : 'Non' }}</span></div>
                <div class=\"listItem\"><span>Derniere connexion</span><span class=\"listItem__meta\">{{ viewer_user.lastLoginAt ? viewer_user.lastLoginAt|date('d/m/Y H:i') : 'N/A' }}</span></div>
              </div>
            </section>
          </aside>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/password-change.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\password-change.html.twig");
    }
}
