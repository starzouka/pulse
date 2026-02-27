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
          ";
        // line 28
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 28, $this->source); })()))) {
            // line 29
            yield "            <div class=\"listItem\">
              <span>reCAPTCHA n'est pas configuree. Ajoutez vos cles Google dans <code>.env.local</code>.</span>
              <span class=\"badge badge--warning\">CONFIG</span>
            </div>
          ";
        }
        // line 34
        yield "
          <section class=\"panel\">
            ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "data-organizer-request-form" => "1"]]);
        yield "
              ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 37, $this->source); })()), 'errors');
        yield "
              ";
        // line 38
        yield from $this->load("shared/_tournament_form_fields.html.twig", 38)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 38, $this->source); })())]));
        // line 39
        yield "              <input type=\"hidden\" name=\"g_recaptcha_token\" value=\"\">
              ";
        // line 40
        if ((($tmp = (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                <div class=\"js-recaptcha-container\" style=\"display:none; margin-top:8px;\"></div>
                <div class=\"muted js-recaptcha-status\" style=\"display:none; margin-top:6px;\"></div>
              ";
        }
        // line 44
        yield "              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary js-organizer-request-submit\" type=\"submit\" ";
        // line 45
        if ((($tmp = (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 45, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-sitekey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">Envoyer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests");
        yield "\">Annuler</a>
              </div>
            ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 48, $this->source); })()), 'form_end');
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
        // line 65
        yield from $this->load("front/partials/_footer.html.twig", 65)->unwrap()->yield($context);
        // line 66
        yield "    </section>
  </main>

  ";
        // line 69
        yield from $this->load("front/partials/_auth_modal.html.twig", 69)->unwrap()->yield($context);
        // line 70
        yield "
  ";
        // line 71
        if ((($tmp = (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 71, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "    <script src=\"https://www.google.com/recaptcha/api.js?render=explicit\" async defer></script>
    <script>
      (function () {
        const form = document.querySelector('form[data-organizer-request-form=\"1\"]');
        if (!form) {
          return;
        }

        const tokenInput = form.querySelector('input[name=\"g_recaptcha_token\"]');
        const container = form.querySelector('.js-recaptcha-container');
        const statusNode = form.querySelector('.js-recaptcha-status');
        const submitButton = form.querySelector('.js-organizer-request-submit');
        const defaultLabel = submitButton ? submitButton.textContent : 'Envoyer';
        let widgetId = null;
        let bypassNextSubmit = false;

        const setStatus = function (text) {
          if (!statusNode) {
            return;
          }

          statusNode.textContent = text;
          statusNode.style.display = text ? 'block' : 'none';
        };

        const ensureWidget = function () {
          if (!container || !submitButton) {
            return null;
          }

          container.style.display = 'block';

          if (widgetId !== null) {
            return widgetId;
          }

          if (typeof grecaptcha === 'undefined' || typeof grecaptcha.render !== 'function') {
            setStatus('reCAPTCHA est en cours de chargement. Reessayez dans 1 seconde.');
            return null;
          }

          const siteKey = submitButton.getAttribute('data-sitekey') || '';
          widgetId = grecaptcha.render(container, {
            sitekey: siteKey,
            callback: function (token) {
              if (tokenInput) {
                tokenInput.value = token;
              }
              setStatus('');
              bypassNextSubmit = true;
              form.submit();
            },
            'expired-callback': function () {
              if (tokenInput) {
                tokenInput.value = '';
              }
              if (submitButton) {
                submitButton.disabled = false;
                submitButton.textContent = defaultLabel;
              }
              setStatus('Le captcha a expire. Validez-le de nouveau.');
            },
            'error-callback': function () {
              if (tokenInput) {
                tokenInput.value = '';
              }
              if (submitButton) {
                submitButton.disabled = false;
                submitButton.textContent = defaultLabel;
              }
              setStatus('Erreur reCAPTCHA. Reessayez.');
            }
          });

          return widgetId;
        };

        form.addEventListener('submit', function (event) {
          if (bypassNextSubmit) {
            bypassNextSubmit = false;
            return;
          }

          if (tokenInput && tokenInput.value) {
            return;
          }

          event.preventDefault();

          const renderedWidgetId = ensureWidget();
          if (renderedWidgetId === null) {
            return;
          }

          if (submitButton) {
            submitButton.disabled = true;
            submitButton.textContent = 'Confirmez reCAPTCHA';
          }
          setStatus('Cochez la case reCAPTCHA pour confirmer l envoi.');
        });
      })();
    </script>
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
        return array (  234 => 72,  232 => 71,  229 => 70,  227 => 69,  222 => 66,  220 => 65,  200 => 48,  195 => 46,  187 => 45,  184 => 44,  179 => 41,  177 => 40,  174 => 39,  172 => 38,  168 => 37,  164 => 36,  160 => 34,  153 => 29,  151 => 28,  148 => 27,  142 => 26,  131 => 23,  127 => 22,  124 => 21,  119 => 20,  115 => 19,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

          {% if recaptcha_site_key is empty %}
            <div class=\"listItem\">
              <span>reCAPTCHA n'est pas configuree. Ajoutez vos cles Google dans <code>.env.local</code>.</span>
              <span class=\"badge badge--warning\">CONFIG</span>
            </div>
          {% endif %}

          <section class=\"panel\">
            {{ form_start(tournamentRequestForm, {attr: {novalidate: 'novalidate', 'data-organizer-request-form': '1'}}) }}
              {{ form_errors(tournamentRequestForm) }}
              {% include 'shared/_tournament_form_fields.html.twig' with {form: tournamentRequestForm} %}
              <input type=\"hidden\" name=\"g_recaptcha_token\" value=\"\">
              {% if recaptcha_site_key %}
                <div class=\"js-recaptcha-container\" style=\"display:none; margin-top:8px;\"></div>
                <div class=\"muted js-recaptcha-status\" style=\"display:none; margin-top:6px;\"></div>
              {% endif %}
              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary js-organizer-request-submit\" type=\"submit\" {% if recaptcha_site_key %}data-sitekey=\"{{ recaptcha_site_key }}\"{% endif %}>Envoyer</button>
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

  {% if recaptcha_site_key %}
    <script src=\"https://www.google.com/recaptcha/api.js?render=explicit\" async defer></script>
    <script>
      (function () {
        const form = document.querySelector('form[data-organizer-request-form=\"1\"]');
        if (!form) {
          return;
        }

        const tokenInput = form.querySelector('input[name=\"g_recaptcha_token\"]');
        const container = form.querySelector('.js-recaptcha-container');
        const statusNode = form.querySelector('.js-recaptcha-status');
        const submitButton = form.querySelector('.js-organizer-request-submit');
        const defaultLabel = submitButton ? submitButton.textContent : 'Envoyer';
        let widgetId = null;
        let bypassNextSubmit = false;

        const setStatus = function (text) {
          if (!statusNode) {
            return;
          }

          statusNode.textContent = text;
          statusNode.style.display = text ? 'block' : 'none';
        };

        const ensureWidget = function () {
          if (!container || !submitButton) {
            return null;
          }

          container.style.display = 'block';

          if (widgetId !== null) {
            return widgetId;
          }

          if (typeof grecaptcha === 'undefined' || typeof grecaptcha.render !== 'function') {
            setStatus('reCAPTCHA est en cours de chargement. Reessayez dans 1 seconde.');
            return null;
          }

          const siteKey = submitButton.getAttribute('data-sitekey') || '';
          widgetId = grecaptcha.render(container, {
            sitekey: siteKey,
            callback: function (token) {
              if (tokenInput) {
                tokenInput.value = token;
              }
              setStatus('');
              bypassNextSubmit = true;
              form.submit();
            },
            'expired-callback': function () {
              if (tokenInput) {
                tokenInput.value = '';
              }
              if (submitButton) {
                submitButton.disabled = false;
                submitButton.textContent = defaultLabel;
              }
              setStatus('Le captcha a expire. Validez-le de nouveau.');
            },
            'error-callback': function () {
              if (tokenInput) {
                tokenInput.value = '';
              }
              if (submitButton) {
                submitButton.disabled = false;
                submitButton.textContent = defaultLabel;
              }
              setStatus('Erreur reCAPTCHA. Reessayez.');
            }
          });

          return widgetId;
        };

        form.addEventListener('submit', function (event) {
          if (bypassNextSubmit) {
            bypassNextSubmit = false;
            return;
          }

          if (tokenInput && tokenInput.value) {
            return;
          }

          event.preventDefault();

          const renderedWidgetId = ensureWidget();
          if (renderedWidgetId === null) {
            return;
          }

          if (submitButton) {
            submitButton.disabled = true;
            submitButton.textContent = 'Confirmez reCAPTCHA';
          }
          setStatus('Cochez la case reCAPTCHA pour confirmer l envoi.');
        });
      })();
    </script>
  {% endif %}
{% endblock %}
", "front/pages/organizer-request-create.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\organizer-request-create.html.twig");
    }
}
