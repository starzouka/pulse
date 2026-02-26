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

/* front/pages/captain-invite.html.twig */
class __TwigTemplate_881d0ae08571ec5e71633457dc3fa391 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-invite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-invite.html.twig"));

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

        yield "PULSE - Inviter joueurs";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Inviter", "hero_sub" => "Recherche de joueurs et envoi des invitations.", "breadcrumb_current" => "Inviter"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "invite", "active_team" =>         // line 18
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 18, $this->source); })())]));
        // line 20
        yield "
        <div>
          ";
        // line 22
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 23
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 23, $this->source); })()), "active_team" =>         // line 24
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 24, $this->source); })()), "selector_route" => "front_captain_invite"]));
        // line 27
        yield "
          <form class=\"panel\" method=\"get\" action=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_invite");
        yield "\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 30, $this->source); })()), "teamId", [], "any", false, false, false, 30), "html", null, true);
        yield "\">
              <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_query"]) || array_key_exists("search_query", $context) ? $context["search_query"] : (function () { throw new RuntimeError('Variable "search_query" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Rechercher par username ou nom\">
              <button class=\"btn btn--primary\" type=\"submit\">Rechercher</button>
            </div>
            <div class=\"muted\" style=\"margin-top:10px;\">
              Tests modération (spam): ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["spam_terms_examples"]) || array_key_exists("spam_terms_examples", $context) ? $context["spam_terms_examples"] : (function () { throw new RuntimeError('Variable "spam_terms_examples" does not exist.', 35, $this->source); })()), ", "), "html", null, true);
        yield "<br>
              Tests toxicité: ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["toxic_terms_examples"]) || array_key_exists("toxic_terms_examples", $context) ? $context["toxic_terms_examples"] : (function () { throw new RuntimeError('Variable "toxic_terms_examples" does not exist.', 36, $this->source); })()), ", "), "html", null, true);
        yield "
            </div>
          </form>

          <section class=\"panel\">
            <h3 class=\"panel__title\">RESULTATS RECHERCHE</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Role</th>
                    <th>Pays</th>
                    <th>Invitation</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["search_results"]) || array_key_exists("search_results", $context) ? $context["search_results"] : (function () { throw new RuntimeError('Variable "search_results" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 54
            yield "                    <tr>
                      <td>";
            // line 55
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "displayName", [], "any", false, false, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "displayName", [], "any", false, false, false, 55), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "username", [], "any", false, false, false, 55), "html", null, true)));
            yield " <span class=\"muted\">@";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "username", [], "any", false, false, false, 55), "html", null, true);
            yield "</span></td>
                      <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "role", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                      <td>";
            // line 57
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "country", [], "any", false, false, false, 57)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "country", [], "any", false, false, false, 57), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        <form method=\"post\" action=\"";
            // line 59
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_invite_send");
            yield "\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("captain_invite_send"), "html", null, true);
            yield "\">
                          <input type=\"hidden\" name=\"team_id\" value=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 61, $this->source); })()), "teamId", [], "any", false, false, false, 61), "html", null, true);
            yield "\">
                          <input type=\"hidden\" name=\"invited_user_id\" value=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "userId", [], "any", false, false, false, 62), "html", null, true);
            yield "\">
                          <input class=\"input\" type=\"text\" name=\"message\" placeholder=\"Message optionnel\" maxlength=\"255\" style=\"max-width:220px;\">
                          <button class=\"btn btn--ghost\" type=\"submit\">Inviter</button>
                          <button class=\"btn btn--soft\" type=\"submit\" name=\"use_ai_message\" value=\"1\">Inviter (IA)</button>
                        </form>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 69
        if (!$context['_iterated']) {
            // line 70
            yield "                    <tr>
                      <td colspan=\"4\">
                        ";
            // line 72
            if ((($tmp = (isset($context["search_query"]) || array_key_exists("search_query", $context) ? $context["search_query"] : (function () { throw new RuntimeError('Variable "search_query" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "                          Aucun joueur disponible pour cette recherche.
                        ";
            } else {
                // line 75
                yield "                          Lancez une recherche pour inviter un joueur.
                        ";
            }
            // line 77
            yield "                      </td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidate'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "                </tbody>
              </table>
            </div>
          </section>

          <section class=\"panel\">
            <h3 class=\"panel__title\">HISTORIQUE INVITATIONS</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur invite</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Statut</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latest_invites"]) || array_key_exists("latest_invites", $context) ? $context["latest_invites"] : (function () { throw new RuntimeError('Variable "latest_invites" does not exist.', 98, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invite"]) {
            // line 99
            yield "                    ";
            $context["invitedUser"] = CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "invitedUserId", [], "any", false, false, false, 99);
            // line 100
            yield "                    <tr>
                      <td>";
            // line 101
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedUser"]) || array_key_exists("invitedUser", $context) ? $context["invitedUser"] : (function () { throw new RuntimeError('Variable "invitedUser" does not exist.', 101, $this->source); })()), "displayName", [], "any", false, false, false, 101)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedUser"]) || array_key_exists("invitedUser", $context) ? $context["invitedUser"] : (function () { throw new RuntimeError('Variable "invitedUser" does not exist.', 101, $this->source); })()), "displayName", [], "any", false, false, false, 101), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedUser"]) || array_key_exists("invitedUser", $context) ? $context["invitedUser"] : (function () { throw new RuntimeError('Variable "invitedUser" does not exist.', 101, $this->source); })()), "username", [], "any", false, false, false, 101), "html", null, true)));
            yield "</td>
                      <td>";
            // line 102
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "message", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "message", [], "any", false, false, false, 102), "html", null, true)) : ("-"));
            yield "</td>
                      <td>";
            // line 103
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "createdAt", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "createdAt", [], "any", false, false, false, 103), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        ";
            // line 105
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "status", [], "any", false, false, false, 105)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "status", [], "any", false, false, false, 105)) : ("PENDING"));
            // line 106
            yield "                        <span class=\"badge ";
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 106, $this->source); })()) == "ACCEPTED")) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 106, $this->source); })()) == "REFUSED")) ? ("badge--danger") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 106, $this->source); })()) == "PENDING")) ? ("badge--info") : (""))))));
            yield "\">
                          ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 107, $this->source); })()), "html", null, true);
            yield "
                        </span>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 111
        if (!$context['_iterated']) {
            // line 112
            yield "                    <tr>
                      <td colspan=\"4\">Aucune invitation pour le moment.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['invite'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 123
        yield from $this->load("front/partials/_footer.html.twig", 123)->unwrap()->yield($context);
        // line 124
        yield "    </section>
  </main>

  ";
        // line 127
        yield from $this->load("front/partials/_auth_modal.html.twig", 127)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/captain-invite.html.twig";
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
        return array (  321 => 127,  316 => 124,  314 => 123,  305 => 116,  296 => 112,  294 => 111,  285 => 107,  280 => 106,  278 => 105,  273 => 103,  269 => 102,  265 => 101,  262 => 100,  259 => 99,  254 => 98,  234 => 80,  226 => 77,  222 => 75,  218 => 73,  216 => 72,  212 => 70,  210 => 69,  198 => 62,  194 => 61,  190 => 60,  186 => 59,  181 => 57,  177 => 56,  171 => 55,  168 => 54,  163 => 53,  143 => 36,  139 => 35,  132 => 31,  128 => 30,  123 => 28,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Inviter joueurs{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'CAPITAINE',
    hero_title: 'Inviter',
    hero_sub: 'Recherche de joueurs et envoi des invitations.',
    breadcrumb_current: 'Inviter'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_captain_side_nav.html.twig' with {
          active: 'invite',
          active_team: active_team
        } %}

        <div>
          {% include 'front/partials/_captain_team_selector.html.twig' with {
            captain_teams: captain_teams,
            active_team: active_team,
            selector_route: 'front_captain_invite'
          } %}

          <form class=\"panel\" method=\"get\" action=\"{{ path('front_captain_invite') }}\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"{{ active_team.teamId }}\">
              <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ search_query }}\" placeholder=\"Rechercher par username ou nom\">
              <button class=\"btn btn--primary\" type=\"submit\">Rechercher</button>
            </div>
            <div class=\"muted\" style=\"margin-top:10px;\">
              Tests modération (spam): {{ spam_terms_examples|join(', ') }}<br>
              Tests toxicité: {{ toxic_terms_examples|join(', ') }}
            </div>
          </form>

          <section class=\"panel\">
            <h3 class=\"panel__title\">RESULTATS RECHERCHE</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Role</th>
                    <th>Pays</th>
                    <th>Invitation</th>
                  </tr>
                </thead>
                <tbody>
                  {% for candidate in search_results %}
                    <tr>
                      <td>{{ candidate.displayName ?: candidate.username }} <span class=\"muted\">@{{ candidate.username }}</span></td>
                      <td>{{ candidate.role }}</td>
                      <td>{{ candidate.country ?: '-' }}</td>
                      <td>
                        <form method=\"post\" action=\"{{ path('front_captain_invite_send') }}\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_invite_send') }}\">
                          <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
                          <input type=\"hidden\" name=\"invited_user_id\" value=\"{{ candidate.userId }}\">
                          <input class=\"input\" type=\"text\" name=\"message\" placeholder=\"Message optionnel\" maxlength=\"255\" style=\"max-width:220px;\">
                          <button class=\"btn btn--ghost\" type=\"submit\">Inviter</button>
                          <button class=\"btn btn--soft\" type=\"submit\" name=\"use_ai_message\" value=\"1\">Inviter (IA)</button>
                        </form>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"4\">
                        {% if search_query %}
                          Aucun joueur disponible pour cette recherche.
                        {% else %}
                          Lancez une recherche pour inviter un joueur.
                        {% endif %}
                      </td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </section>

          <section class=\"panel\">
            <h3 class=\"panel__title\">HISTORIQUE INVITATIONS</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur invite</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Statut</th>
                  </tr>
                </thead>
                <tbody>
                  {% for invite in latest_invites %}
                    {% set invitedUser = invite.invitedUserId %}
                    <tr>
                      <td>{{ invitedUser.displayName ?: invitedUser.username }}</td>
                      <td>{{ invite.message ?: '-' }}</td>
                      <td>{{ invite.createdAt ? invite.createdAt|date('d/m/Y H:i') : '-' }}</td>
                      <td>
                        {% set status = invite.status ?: 'PENDING' %}
                        <span class=\"badge {{ status == 'ACCEPTED' ? 'badge--success' : (status == 'REFUSED' ? 'badge--danger' : (status == 'PENDING' ? 'badge--info' : '')) }}\">
                          {{ status }}
                        </span>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"4\">Aucune invitation pour le moment.</td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}

", "front/pages/captain-invite.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\captain-invite.html.twig");
    }
}
