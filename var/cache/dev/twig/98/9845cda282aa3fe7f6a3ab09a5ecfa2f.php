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

/* front/pages/organizer-request-create.html.twig */
class __TwigTemplate_ae53dbbe7b0d74f9dac6ea8e3cb6cf26 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-request-create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-request-create.html.twig"));

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

        yield "PULSE - Demande tournoi";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ORGANISATEUR", "hero_title" => "Demande tournoi", "hero_sub" => "Soumettre une demande complete a l admin.", "breadcrumb_current" => "Demande tournoi"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_organizer_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "request_create"]));
        // line 17
        yield "
        <div>
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                yield "              <div class=\"listItem\">
                <span>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                <span class=\"badge ";
                // line 23
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
            // line 26
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
          <section class=\"panel\">
            ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
              ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 30, $this->source); })()), 'errors');
        yield "
              ";
        // line 31
        yield from $this->load("shared/_tournament_form_fields.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 31, $this->source); })())]));
        // line 32
        yield "
              ";
        // line 33
        if ((array_key_exists("recaptcha_site_key", $context) && (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 33, $this->source); })()))) {
            // line 34
            yield "                <div style=\"margin-top:12px;\">
                  <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "\"></div>
                </div>
              ";
        }
        // line 38
        yield "
              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Envoyer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests");
        yield "\">Annuler</a>
              </div>
            ";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 43, $this->source); })()), 'form_end');
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
              <div class=\"listItem\"><span><b>tournament_requests</b></span><span class=\"listItem__meta\">request_id, organizer_user_id, game_id, title, rules, start_date, end_date, max_teams, format, registration_mode, prize_pool, photo_path</span></div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 60
        yield from $this->load("front/partials/_footer.html.twig", 60)->unwrap()->yield($context);
        // line 61
        yield "    </section>
  </main>

  ";
        // line 64
        yield from $this->load("front/partials/_auth_modal.html.twig", 64)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  ";
        // line 69
        if ((array_key_exists("recaptcha_site_key", $context) && (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 69, $this->source); })()))) {
            // line 70
            yield "    <script src=\"https://www.google.com/recaptcha/api.js?hl=fr\" async defer></script>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/organizer-request-create.html.twig";
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
        return array (  245 => 70,  243 => 69,  238 => 68,  225 => 67,  214 => 64,  209 => 61,  207 => 60,  187 => 43,  182 => 41,  177 => 38,  171 => 35,  168 => 34,  166 => 33,  163 => 32,  161 => 31,  157 => 30,  153 => 29,  149 => 27,  143 => 26,  132 => 23,  128 => 22,  125 => 21,  120 => 20,  116 => 19,  112 => 17,  110 => 16,  104 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Demande tournoi{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'ORGANISATEUR',
    hero_title: 'Demande tournoi',
    hero_sub: 'Soumettre une demande complete a l admin.',
    breadcrumb_current: 'Demande tournoi'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_organizer_side_nav.html.twig' with {active: 'request_create'} %}

        <div>
          {% for label, messages in app.flashes %}
            {% for message in messages %}
              <div class=\"listItem\">
                <span>{{ message }}</span>
                <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
              </div>
            {% endfor %}
          {% endfor %}

          <section class=\"panel\">
            {{ form_start(tournamentRequestForm, {attr: {novalidate: 'novalidate'}}) }}
              {{ form_errors(tournamentRequestForm) }}
              {% include 'shared/_tournament_form_fields.html.twig' with {form: tournamentRequestForm} %}

              {% if recaptcha_site_key is defined and recaptcha_site_key %}
                <div style=\"margin-top:12px;\">
                  <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha_site_key }}\"></div>
                </div>
              {% endif %}

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Envoyer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_requests') }}\">Annuler</a>
              </div>
            {{ form_end(tournamentRequestForm) }}
          </section>

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Schema reel + colonnes cles.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\"><span><b>tournament_requests</b></span><span class=\"listItem__meta\">request_id, organizer_user_id, game_id, title, rules, start_date, end_date, max_teams, format, registration_mode, prize_pool, photo_path</span></div>
            </div>
          </div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  {% if recaptcha_site_key is defined and recaptcha_site_key %}
    <script src=\"https://www.google.com/recaptcha/api.js?hl=fr\" async defer></script>
  {% endif %}
{% endblock %}
", "front/pages/organizer-request-create.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\organizer-request-create.html.twig");
    }
}
