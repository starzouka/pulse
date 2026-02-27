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

/* front/pages/organizer-tournament-detail.html.twig */
class __TwigTemplate_1c0b0e97cbebac0e639e44b76f90c810 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-tournament-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-tournament-detail.html.twig"));

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

        yield "PULSE - Detail tournoi organisateur";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ORGANISATEUR", "hero_title" => "Detail tournoi", "hero_sub" => "Modifier les informations du tournoi et gerer son execution.", "breadcrumb_current" => "Detail tournoi"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_organizer_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "tournament_detail"]));
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
          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
        yield "</h3>
                <div class=\"panel__desc\">Tournoi #";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 32, $this->source); })()), "tournamentId", [], "any", false, false, false, 32), "html", null, true);
        yield " - ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 32, $this->source); })()), "gameId", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 32, $this->source); })()), "gameId", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true)) : ("-"));
        yield "</div>
              </div>
              <span class=\"badge badge--info\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34), "html", null, true);
        yield "</span>
            </div>

            <div class=\"statsRow\">
              <div class=\"statCard\">
                <div class=\"statCard__value\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["registrationsCount"]) || array_key_exists("registrationsCount", $context) ? $context["registrationsCount"] : (function () { throw new RuntimeError('Variable "registrationsCount" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"statCard__label\">Inscriptions</div>
              </div>
              <div class=\"statCard\">
                <div class=\"statCard__value\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["acceptedRegistrationsCount"]) || array_key_exists("acceptedRegistrationsCount", $context) ? $context["acceptedRegistrationsCount"] : (function () { throw new RuntimeError('Variable "acceptedRegistrationsCount" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"statCard__label\">Equipes acceptees</div>
              </div>
              <div class=\"statCard\">
                <div class=\"statCard__value\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchesCount"]) || array_key_exists("matchesCount", $context) ? $context["matchesCount"] : (function () { throw new RuntimeError('Variable "matchesCount" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"statCard__label\">Matchs</div>
              </div>
            </div>

            <div class=\"card__actions\" style=\"margin-top:10px;\">
              <a class=\"btn btn--ghost\" href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_registrations", ["tournament" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 53, $this->source); })()), "tournamentId", [], "any", false, false, false, 53)]), "html", null, true);
        yield "\">Inscriptions</a>
              <a class=\"btn btn--ghost\" href=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_matches", ["tournament" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 54, $this->source); })()), "tournamentId", [], "any", false, false, false, 54)]), "html", null, true);
        yield "\">Matchs</a>
            </div>
          </div>

          <section class=\"panel\">
            ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tournamentForm"]) || array_key_exists("tournamentForm", $context) ? $context["tournamentForm"] : (function () { throw new RuntimeError('Variable "tournamentForm" does not exist.', 59, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
              ";
        // line 60
        yield from $this->load("shared/_tournament_form_fields.html.twig", 60)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["tournamentForm"]) || array_key_exists("tournamentForm", $context) ? $context["tournamentForm"] : (function () { throw new RuntimeError('Variable "tournamentForm" does not exist.', 60, $this->source); })())]));
        // line 61
        yield "              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Enregistrer les modifications</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_tournaments");
        yield "\">Retour</a>
              </div>
            ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tournamentForm"]) || array_key_exists("tournamentForm", $context) ? $context["tournamentForm"] : (function () { throw new RuntimeError('Variable "tournamentForm" does not exist.', 65, $this->source); })()), 'form_end');
        yield "
          </section>

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Donnees extraites depuis le schema reel.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\">
                <span><b>tournaments</b></span>
                <span class=\"listItem__meta\">title, status, dates, max_teams, registration_mode, prize_pool, photo_path</span>
              </div>
              <div class=\"listItem\">
                <span><b>tournament_teams</b></span>
                <span class=\"listItem__meta\">tournament_id, team_id, status</span>
              </div>
              <div class=\"listItem\">
                <span><b>matches</b></span>
                <span class=\"listItem__meta\">match_id, tournament_id, status, scheduled_at</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 93
        yield from $this->load("front/partials/_footer.html.twig", 93)->unwrap()->yield($context);
        // line 94
        yield "    </section>
  </main>

  ";
        // line 97
        yield from $this->load("front/partials/_auth_modal.html.twig", 97)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/organizer-tournament-detail.html.twig";
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
        return array (  261 => 97,  256 => 94,  254 => 93,  223 => 65,  218 => 63,  214 => 61,  212 => 60,  208 => 59,  200 => 54,  196 => 53,  187 => 47,  180 => 43,  173 => 39,  165 => 34,  158 => 32,  154 => 31,  148 => 27,  142 => 26,  131 => 23,  127 => 22,  124 => 21,  119 => 20,  115 => 19,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Detail tournoi organisateur{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'ORGANISATEUR',
    hero_title: 'Detail tournoi',
    hero_sub: 'Modifier les informations du tournoi et gerer son execution.',
    breadcrumb_current: 'Detail tournoi'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_organizer_side_nav.html.twig' with {active: 'tournament_detail'} %}

        <div>
          {% for label, messages in app.flashes %}
            {% for message in messages %}
              <div class=\"listItem\">
                <span>{{ message }}</span>
                <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
              </div>
            {% endfor %}
          {% endfor %}

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">{{ tournament.title }}</h3>
                <div class=\"panel__desc\">Tournoi #{{ tournament.tournamentId }} - {{ tournament.gameId ? tournament.gameId.name : '-' }}</div>
              </div>
              <span class=\"badge badge--info\">{{ tournament.status }}</span>
            </div>

            <div class=\"statsRow\">
              <div class=\"statCard\">
                <div class=\"statCard__value\">{{ registrationsCount }}</div>
                <div class=\"statCard__label\">Inscriptions</div>
              </div>
              <div class=\"statCard\">
                <div class=\"statCard__value\">{{ acceptedRegistrationsCount }}</div>
                <div class=\"statCard__label\">Equipes acceptees</div>
              </div>
              <div class=\"statCard\">
                <div class=\"statCard__value\">{{ matchesCount }}</div>
                <div class=\"statCard__label\">Matchs</div>
              </div>
            </div>

            <div class=\"card__actions\" style=\"margin-top:10px;\">
              <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_registrations', {tournament: tournament.tournamentId}) }}\">Inscriptions</a>
              <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_matches', {tournament: tournament.tournamentId}) }}\">Matchs</a>
            </div>
          </div>

          <section class=\"panel\">
            {{ form_start(tournamentForm, {attr: {novalidate: 'novalidate'}}) }}
              {% include 'shared/_tournament_form_fields.html.twig' with {form: tournamentForm} %}
              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Enregistrer les modifications</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_tournaments') }}\">Retour</a>
              </div>
            {{ form_end(tournamentForm) }}
          </section>

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Donnees extraites depuis le schema reel.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\">
                <span><b>tournaments</b></span>
                <span class=\"listItem__meta\">title, status, dates, max_teams, registration_mode, prize_pool, photo_path</span>
              </div>
              <div class=\"listItem\">
                <span><b>tournament_teams</b></span>
                <span class=\"listItem__meta\">tournament_id, team_id, status</span>
              </div>
              <div class=\"listItem\">
                <span><b>matches</b></span>
                <span class=\"listItem__meta\">match_id, tournament_id, status, scheduled_at</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/organizer-tournament-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\organizer-tournament-detail.html.twig");
    }
}
