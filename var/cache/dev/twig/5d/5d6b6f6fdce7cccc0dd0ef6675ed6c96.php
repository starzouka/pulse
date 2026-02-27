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

/* front/pages/organizer-match-create.html.twig */
class __TwigTemplate_4f4f2f487c0f68760ca178eaf89eab7f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-match-create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-match-create.html.twig"));

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

        yield "PULSE - Creer match";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ORGANISATEUR", "hero_title" => "Creer match", "hero_sub" => "Ajout d un match avec plusieurs equipes participantes.", "breadcrumb_current" => "Creer match"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_organizer_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "match_create"]));
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
              ";
        // line 30
        yield from $this->load("shared/_organizer_match_form_fields.html.twig", 30)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 30, $this->source); })())]));
        // line 31
        yield "              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Creer match</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_matches", (((($tmp = (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["tournament" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 33, $this->source); })()), "tournamentId", [], "any", false, false, false, 33)]) : ([]))), "html", null, true);
        yield "\">Annuler</a>
              </div>
            ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 35, $this->source); })()), 'form_end');
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
                <span class=\"listItem__meta\">tournament_id, scheduled_at, round_name, best_of, status</span>
              </div>
              <div class=\"listItem\">
                <span><b>match_teams</b></span>
                <span class=\"listItem__meta\">match_id, team_id, score, is_winner</span>
              </div>
              <div class=\"listItem\">
                <span><b>tournament_teams</b></span>
                <span class=\"listItem__meta\">source des equipes participantes (status ACCEPTED)</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 63
        yield from $this->load("front/partials/_footer.html.twig", 63)->unwrap()->yield($context);
        // line 64
        yield "    </section>
  </main>

  ";
        // line 67
        yield from $this->load("front/partials/_auth_modal.html.twig", 67)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/organizer-match-create.html.twig";
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
        return array (  205 => 67,  200 => 64,  198 => 63,  167 => 35,  162 => 33,  158 => 31,  156 => 30,  152 => 29,  148 => 27,  142 => 26,  131 => 23,  127 => 22,  124 => 21,  119 => 20,  115 => 19,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Creer match{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'ORGANISATEUR',
    hero_title: 'Creer match',
    hero_sub: 'Ajout d un match avec plusieurs equipes participantes.',
    breadcrumb_current: 'Creer match'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_organizer_side_nav.html.twig' with {active: 'match_create'} %}

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
            {{ form_start(matchForm, {attr: {novalidate: 'novalidate'}}) }}
              {% include 'shared/_organizer_match_form_fields.html.twig' with {form: matchForm} %}
              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Creer match</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_matches', selectedTournament ? {tournament: selectedTournament.tournamentId} : {}) }}\">Annuler</a>
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
                <span class=\"listItem__meta\">tournament_id, scheduled_at, round_name, best_of, status</span>
              </div>
              <div class=\"listItem\">
                <span><b>match_teams</b></span>
                <span class=\"listItem__meta\">match_id, team_id, score, is_winner</span>
              </div>
              <div class=\"listItem\">
                <span><b>tournament_teams</b></span>
                <span class=\"listItem__meta\">source des equipes participantes (status ACCEPTED)</span>
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
", "front/pages/organizer-match-create.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\organizer-match-create.html.twig");
    }
}
