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

/* front/pages/conversation.html.twig */
class __TwigTemplate_e8eda144247225fb7e9e225b63bc52da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/conversation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/conversation.html.twig"));

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

        yield "PULSE - Conversation";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Conversation", "hero_sub" => "Discussion privee en temps reel.", "breadcrumb_current" => "Conversation"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "conversation"]));
        // line 17
        yield "
        <div class=\"socialShell--chat\">
          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">CONVERSATIONS</h3>
              <div class=\"socialQuickList\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 24
            yield "                  ";
            $context["partner"] = CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "partner", [], "any", false, false, false, 24);
            // line 25
            yield "                  ";
            $context["partnerId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["partner"] ?? null), "userId", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 25, $this->source); })()), "userId", [], "any", false, false, false, 25)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 25, $this->source); })()), "userId", [], "any", false, false, false, 25)) : (0));
            // line 26
            yield "                  ";
            $context["active"] = ((isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 26, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 26, $this->source); })()), "userId", [], "any", false, false, false, 26) == (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 26, $this->source); })())));
            // line 27
            yield "                  <a class=\"listItem ";
            yield (((($tmp = (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-active") : (""));
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_conversation", ["id" => (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 27, $this->source); })())]), "html", null, true);
            yield "\">
                    <span>";
            // line 28
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["partner"] ?? null), "displayName", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 28, $this->source); })()), "displayName", [], "any", false, false, false, 28)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 28, $this->source); })()), "displayName", [], "any", false, false, false, 28), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 28, $this->source); })()), "username", [], "any", false, false, false, 28), "html", null, true)));
            yield "</span>
                    ";
            // line 29
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "unread_count", [], "any", false, false, false, 29) > 0)) {
                // line 30
                yield "                      <span class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "unread_count", [], "any", false, false, false, 30), "html", null, true);
                yield "</span>
                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 31
$context["conversation"], "latest_message", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "                      <span class=\"listItem__meta\">";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "latest_message", [], "any", false, false, false, 32), "createdAt", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "latest_message", [], "any", false, false, false, 32), "createdAt", [], "any", false, false, false, 32), "d/m H:i"), "html", null, true)) : (""));
                yield "</span>
                    ";
            } else {
                // line 34
                yield "                      <span class=\"listItem__meta\">-</span>
                    ";
            }
            // line 36
            yield "                  </a>
                ";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 38
            yield "                  <div class=\"emptyState\">Aucune conversation disponible.</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conversation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "              </div>
            </section>
          </aside>

          <div class=\"socialStack\">
            <section class=\"panel gadget\">
              ";
        // line 46
        if ((($tmp = (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "                ";
            $context["partnerId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["selected_partner"] ?? null), "userId", [], "any", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 47, $this->source); })()), "userId", [], "any", false, false, false, 47)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 47, $this->source); })()), "userId", [], "any", false, false, false, 47)) : (0));
            // line 48
            yield "                <div class=\"panel__head\">
                  <div>
                    <h3 class=\"panel__title\">CHAT AVEC ";
            // line 50
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["selected_partner"] ?? null), "displayName", [], "any", true, true, false, 50) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 50, $this->source); })()), "displayName", [], "any", false, false, false, 50)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 50, $this->source); })()), "displayName", [], "any", false, false, false, 50), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 50, $this->source); })()), "username", [], "any", false, false, false, 50), "html", null, true)));
            yield "</h3>
                    <div class=\"panel__desc\">Messages les plus recents</div>
                  </div>
                  <a class=\"btn btn--ghost\" href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile", ["id" => (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 53, $this->source); })())]), "html", null, true);
            yield "\">Voir profil</a>
                </div>

                <div class=\"list\" style=\"max-height: 420px; overflow:auto;\">
                  ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 57, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 58
                yield "                    ";
                $context["mine"] = (((isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 58, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 58)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 58), "userId", [], "any", false, false, false, 58) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 58, $this->source); })()), "userId", [], "any", false, false, false, 58)));
                // line 59
                yield "                    <div class=\"listItem ";
                yield (((($tmp = (isset($context["mine"]) || array_key_exists("mine", $context) ? $context["mine"] : (function () { throw new RuntimeError('Variable "mine" does not exist.', 59, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-mine") : (""));
                yield "\">
                      <span>
                        <b>";
                // line 61
                yield (((($tmp = (isset($context["mine"]) || array_key_exists("mine", $context) ? $context["mine"] : (function () { throw new RuntimeError('Variable "mine" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Moi") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, true, false, 61), "displayName", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 61), "displayName", [], "any", false, false, false, 61)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 61), "displayName", [], "any", false, false, false, 61), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 61), "username", [], "any", false, false, false, 61), "html", null, true)))) : ("User"))));
                yield ":</b>
                        ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "bodyText", [], "any", false, false, false, 62), "html", null, true);
                yield "
                      </span>
                      <span class=\"listItem__meta\">";
                // line 64
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 64), "d/m H:i"), "html", null, true)) : (""));
                yield "</span>
                    </div>
                  ";
                $context['_iterated'] = true;
            }
            // line 66
            if (!$context['_iterated']) {
                // line 67
                yield "                    <div class=\"emptyState\">Aucun message.</div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                </div>

                <form method=\"post\" action=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_conversation", ["id" => (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 71, $this->source); })())]), "html", null, true);
            yield "\" style=\"margin-top:10px; display:flex; gap:8px; align-items:flex-start;\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("conversation_send"), "html", null, true);
            yield "\">
                  <textarea class=\"textarea\" name=\"body_text\" placeholder=\"Ecrire un message...\" style=\"min-height: 70px; flex:1;\" required></textarea>
                  <button class=\"btn btn--primary\" type=\"submit\">Envoyer</button>
                </form>
              ";
        } else {
            // line 77
            yield "                <div class=\"emptyState\">Aucun destinataire selectionne.</div>
              ";
        }
        // line 79
        yield "            </section>
          </div>
        </div>
      </div>

      ";
        // line 84
        yield from $this->load("front/partials/_footer.html.twig", 84)->unwrap()->yield($context);
        // line 85
        yield "    </section>
  </main>

  ";
        // line 88
        yield from $this->load("front/partials/_auth_modal.html.twig", 88)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/conversation.html.twig";
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
        return array (  280 => 88,  275 => 85,  273 => 84,  266 => 79,  262 => 77,  254 => 72,  250 => 71,  246 => 69,  239 => 67,  237 => 66,  230 => 64,  225 => 62,  221 => 61,  215 => 59,  212 => 58,  207 => 57,  200 => 53,  194 => 50,  190 => 48,  187 => 47,  185 => 46,  177 => 40,  170 => 38,  168 => 37,  163 => 36,  159 => 34,  153 => 32,  151 => 31,  146 => 30,  144 => 29,  140 => 28,  133 => 27,  130 => 26,  127 => 25,  124 => 24,  119 => 23,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Conversation{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Conversation',
    hero_sub: 'Discussion privee en temps reel.',
    breadcrumb_current: 'Conversation'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'conversation' } %}

        <div class=\"socialShell--chat\">
          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">CONVERSATIONS</h3>
              <div class=\"socialQuickList\">
                {% for conversation in conversations %}
                  {% set partner = conversation.partner %}
                  {% set partnerId = partner.userId ?? 0 %}
                  {% set active = selected_partner and selected_partner.userId == partnerId %}
                  <a class=\"listItem {{ active ? 'is-active' : '' }}\" href=\"{{ path('front_conversation', {id: partnerId}) }}\">
                    <span>{{ partner.displayName ?? partner.username }}</span>
                    {% if conversation.unread_count > 0 %}
                      <span class=\"badge\">{{ conversation.unread_count }}</span>
                    {% elseif conversation.latest_message %}
                      <span class=\"listItem__meta\">{{ conversation.latest_message.createdAt ? conversation.latest_message.createdAt|date('d/m H:i') : '' }}</span>
                    {% else %}
                      <span class=\"listItem__meta\">-</span>
                    {% endif %}
                  </a>
                {% else %}
                  <div class=\"emptyState\">Aucune conversation disponible.</div>
                {% endfor %}
              </div>
            </section>
          </aside>

          <div class=\"socialStack\">
            <section class=\"panel gadget\">
              {% if selected_partner %}
                {% set partnerId = selected_partner.userId ?? 0 %}
                <div class=\"panel__head\">
                  <div>
                    <h3 class=\"panel__title\">CHAT AVEC {{ selected_partner.displayName ?? selected_partner.username }}</h3>
                    <div class=\"panel__desc\">Messages les plus recents</div>
                  </div>
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_player_profile', {id: partnerId}) }}\">Voir profil</a>
                </div>

                <div class=\"list\" style=\"max-height: 420px; overflow:auto;\">
                  {% for message in messages %}
                    {% set mine = viewer_user and message.senderUserId and message.senderUserId.userId == viewer_user.userId %}
                    <div class=\"listItem {{ mine ? 'is-mine' : '' }}\">
                      <span>
                        <b>{{ mine ? 'Moi' : (message.senderUserId ? (message.senderUserId.displayName ?? message.senderUserId.username) : 'User') }}:</b>
                        {{ message.bodyText }}
                      </span>
                      <span class=\"listItem__meta\">{{ message.createdAt ? message.createdAt|date('d/m H:i') : '' }}</span>
                    </div>
                  {% else %}
                    <div class=\"emptyState\">Aucun message.</div>
                  {% endfor %}
                </div>

                <form method=\"post\" action=\"{{ path('front_conversation', {id: partnerId}) }}\" style=\"margin-top:10px; display:flex; gap:8px; align-items:flex-start;\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('conversation_send') }}\">
                  <textarea class=\"textarea\" name=\"body_text\" placeholder=\"Ecrire un message...\" style=\"min-height: 70px; flex:1;\" required></textarea>
                  <button class=\"btn btn--primary\" type=\"submit\">Envoyer</button>
                </form>
              {% else %}
                <div class=\"emptyState\">Aucun destinataire selectionne.</div>
              {% endif %}
            </section>
          </div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/conversation.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\pages\\conversation.html.twig");
    }
}
