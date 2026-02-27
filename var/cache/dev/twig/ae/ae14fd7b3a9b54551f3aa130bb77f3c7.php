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

/* front/pages/organizer-match-edit.html.twig */
class __TwigTemplate_a3db5878efc647a2a29641869c834de8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-match-edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-match-edit.html.twig"));

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

        yield "PULSE - Editer match";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ORGANISATEUR", "hero_title" => "Editer match", "hero_sub" => "Modifier les informations, participants et resultats.", "breadcrumb_current" => "Editer match"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_organizer_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "match_edit"]));
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
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">Match #";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentMatch"]) || array_key_exists("tournamentMatch", $context) ? $context["tournamentMatch"] : (function () { throw new RuntimeError('Variable "tournamentMatch" does not exist.', 31, $this->source); })()), "matchId", [], "any", false, false, false, 31), "html", null, true);
        yield "</h3>
                <div class=\"panel__desc\">Tournoi: ";
        // line 32
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentMatch"]) || array_key_exists("tournamentMatch", $context) ? $context["tournamentMatch"] : (function () { throw new RuntimeError('Variable "tournamentMatch" does not exist.', 32, $this->source); })()), "tournamentId", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentMatch"]) || array_key_exists("tournamentMatch", $context) ? $context["tournamentMatch"] : (function () { throw new RuntimeError('Variable "tournamentMatch" does not exist.', 32, $this->source); })()), "tournamentId", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true)) : ("-"));
        yield "</div>
              </div>
            </div>

            ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
              ";
        // line 37
        yield from $this->load("shared/_organizer_match_form_fields.html.twig", 37)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 37, $this->source); })())]));
        // line 38
        yield "
              <div class=\"panelDesc\" style=\"margin-top:10px;\">
                Resultats par equipe participante.
              </div>

              <div class=\"tableWrap\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th>Equipe</th>
                      <th>Score</th>
                      <th>Vainqueur</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participantRows"]) || array_key_exists("participantRows", $context) ? $context["participantRows"] : (function () { throw new RuntimeError('Variable "participantRows" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 54
            yield "                      <tr>
                        <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                        <td>
                          <input
                            class=\"input\"
                            type=\"number\"
                            min=\"0\"
                            name=\"team_scores[";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 61), "teamId", [], "any", false, false, false, 61), "html", null, true);
            yield "]\"
                            value=\"";
            // line 62
            yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["row"], "score", [], "any", false, false, false, 62))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "score", [], "any", false, false, false, 62), "html", null, true)) : (""));
            yield "\"
                          />
                        </td>
                        <td>
                          <label class=\"field\">
                            <input type=\"checkbox\" name=\"team_winners[]\" value=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 67), "teamId", [], "any", false, false, false, 67), "html", null, true);
            yield "\" ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "isWinner", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield " />
                            <span class=\"field__label\">Oui</span>
                          </label>
                        </td>
                      </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 72
        if (!$context['_iterated']) {
            // line 73
            yield "                      <tr>
                        <td colspan=\"3\" class=\"muted\">Selectionnez les equipes participantes pour saisir les resultats.</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "                  </tbody>
                </table>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Enregistrer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_matches", (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentMatch"]) || array_key_exists("tournamentMatch", $context) ? $context["tournamentMatch"] : (function () { throw new RuntimeError('Variable "tournamentMatch" does not exist.', 83, $this->source); })()), "tournamentId", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["tournament" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentMatch"]) || array_key_exists("tournamentMatch", $context) ? $context["tournamentMatch"] : (function () { throw new RuntimeError('Variable "tournamentMatch" does not exist.', 83, $this->source); })()), "tournamentId", [], "any", false, false, false, 83), "tournamentId", [], "any", false, false, false, 83)]) : ([]))), "html", null, true);
        yield "\">Retour</a>
              </div>
            ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 85, $this->source); })()), 'form_end');
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
                <span><b>matches</b></span>
                <span class=\"listItem__meta\">round_name, scheduled_at, best_of, status, result_submitted_by_user_id</span>
              </div>
              <div class=\"listItem\">
                <span><b>match_teams</b></span>
                <span class=\"listItem__meta\">match_id, team_id, score, is_winner</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 109
        yield from $this->load("front/partials/_footer.html.twig", 109)->unwrap()->yield($context);
        // line 110
        yield "    </section>
  </main>

  ";
        // line 113
        yield from $this->load("front/partials/_auth_modal.html.twig", 113)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/organizer-match-edit.html.twig";
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
        return array (  287 => 113,  282 => 110,  280 => 109,  253 => 85,  248 => 83,  240 => 77,  231 => 73,  229 => 72,  217 => 67,  209 => 62,  205 => 61,  196 => 55,  193 => 54,  188 => 53,  171 => 38,  169 => 37,  165 => 36,  158 => 32,  154 => 31,  148 => 27,  142 => 26,  131 => 23,  127 => 22,  124 => 21,  119 => 20,  115 => 19,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Editer match{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'ORGANISATEUR',
    hero_title: 'Editer match',
    hero_sub: 'Modifier les informations, participants et resultats.',
    breadcrumb_current: 'Editer match'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_organizer_side_nav.html.twig' with {active: 'match_edit'} %}

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
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">Match #{{ tournamentMatch.matchId }}</h3>
                <div class=\"panel__desc\">Tournoi: {{ tournamentMatch.tournamentId ? tournamentMatch.tournamentId.title : '-' }}</div>
              </div>
            </div>

            {{ form_start(matchForm, {attr: {novalidate: 'novalidate'}}) }}
              {% include 'shared/_organizer_match_form_fields.html.twig' with {form: matchForm} %}

              <div class=\"panelDesc\" style=\"margin-top:10px;\">
                Resultats par equipe participante.
              </div>

              <div class=\"tableWrap\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th>Equipe</th>
                      <th>Score</th>
                      <th>Vainqueur</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for row in participantRows %}
                      <tr>
                        <td>{{ row.team.name }}</td>
                        <td>
                          <input
                            class=\"input\"
                            type=\"number\"
                            min=\"0\"
                            name=\"team_scores[{{ row.team.teamId }}]\"
                            value=\"{{ row.score is not null ? row.score : '' }}\"
                          />
                        </td>
                        <td>
                          <label class=\"field\">
                            <input type=\"checkbox\" name=\"team_winners[]\" value=\"{{ row.team.teamId }}\" {{ row.isWinner ? 'checked' : '' }} />
                            <span class=\"field__label\">Oui</span>
                          </label>
                        </td>
                      </tr>
                    {% else %}
                      <tr>
                        <td colspan=\"3\" class=\"muted\">Selectionnez les equipes participantes pour saisir les resultats.</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Enregistrer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_matches', tournamentMatch.tournamentId ? {tournament: tournamentMatch.tournamentId.tournamentId} : {}) }}\">Retour</a>
              </div>
            {{ form_end(matchForm) }}
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
                <span><b>matches</b></span>
                <span class=\"listItem__meta\">round_name, scheduled_at, best_of, status, result_submitted_by_user_id</span>
              </div>
              <div class=\"listItem\">
                <span><b>match_teams</b></span>
                <span class=\"listItem__meta\">match_id, team_id, score, is_winner</span>
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
", "front/pages/organizer-match-edit.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\organizer-match-edit.html.twig");
    }
}
