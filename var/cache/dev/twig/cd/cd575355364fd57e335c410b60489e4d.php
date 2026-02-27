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

/* front/pages/organizer-registrations.html.twig */
class __TwigTemplate_3049c6fcbfca3451217738ecbae1e38b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-registrations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-registrations.html.twig"));

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

        yield "PULSE - Inscriptions";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ORGANISATEUR", "hero_title" => "Inscriptions equipes", "hero_sub" => "Validation des equipes inscrites a vos tournois.", "breadcrumb_current" => "Inscriptions"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_organizer_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "registrations"]));
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
            <form method=\"get\" action=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_registrations");
        yield "\" class=\"filtersBar\">
              <div class=\"filterGroup\">
                <label for=\"tournament\">Tournoi</label>
                <select id=\"tournament\" name=\"tournament\" class=\"input\" onchange=\"this.form.submit()\">
                  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 34
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 34), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 34, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 34, $this->source); })()), "tournamentId", [], "any", false, false, false, 34) == CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 34)))) ? ("selected") : (""));
            yield ">
                      #";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 35), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "title", [], "any", false, false, false, 35), "html", null, true);
            yield "
                    </option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tournament'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                </select>
              </div>
              <noscript><button class=\"btn btn--primary\" type=\"submit\">Filtrer</button></noscript>
            </form>

            <div class=\"tableWrap\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Equipe</th>
                    <th>Statut</th>
                    <th>Inscrite le</th>
                    <th>Seed</th>
                    <th>Check-in</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["registrations"]) || array_key_exists("registrations", $context) ? $context["registrations"] : (function () { throw new RuntimeError('Variable "registrations" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["registration"]) {
            // line 57
            yield "                    ";
            $context["statusClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "status", [], "any", false, false, false, 57) == "ACCEPTED")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 59
$context["registration"], "status", [], "any", false, false, false, 59) == "REFUSED")) ? ("badge--danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "status", [], "any", false, false, false, 59) == "CANCELLED")) ? ("badge--muted") : (""))))));
            // line 61
            yield "                    <tr>
                      <td>";
            // line 62
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "teamId", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "teamId", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true)) : ("-"));
            yield "</td>
                      <td><span class=\"badge ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "status", [], "any", false, false, false, 63), "html", null, true);
            yield "</span></td>
                      <td>";
            // line 64
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "registeredAt", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "registeredAt", [], "any", false, false, false, 64), "Y-m-d H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td>";
            // line 65
            yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "seed", [], "any", false, false, false, 65))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "seed", [], "any", false, false, false, 65), "html", null, true)) : ("-"));
            yield "</td>
                      <td>";
            // line 66
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "checkedIn", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
                      <td>
                        <div class=\"formActions\">
                          <form method=\"post\" action=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_registration_status", ["tournamentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 69, $this->source); })()), "tournamentId", [], "any", false, false, false, 69), "teamId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "teamId", [], "any", false, false, false, 69), "teamId", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("organizer_registration_status_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 70, $this->source); })()), "tournamentId", [], "any", false, false, false, 70)) . "_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "teamId", [], "any", false, false, false, 70), "teamId", [], "any", false, false, false, 70))), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"status\" value=\"ACCEPTED\">
                            <button class=\"btn btn--primary\" type=\"submit\">Accepter</button>
                          </form>
                          <form method=\"post\" action=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_registration_status", ["tournamentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 74, $this->source); })()), "tournamentId", [], "any", false, false, false, 74), "teamId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "teamId", [], "any", false, false, false, 74), "teamId", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("organizer_registration_status_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 75, $this->source); })()), "tournamentId", [], "any", false, false, false, 75)) . "_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "teamId", [], "any", false, false, false, 75), "teamId", [], "any", false, false, false, 75))), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"status\" value=\"REFUSED\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Refuser</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 82
        if (!$context['_iterated']) {
            // line 83
            yield "                    <tr>
                      <td colspan=\"6\" class=\"muted\">
                        ";
            // line 85
            if ((($tmp = (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 85, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "                          Aucune inscription pour ce tournoi.
                        ";
            } else {
                // line 88
                yield "                          Aucun tournoi disponible.
                        ";
            }
            // line 90
            yield "                      </td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['registration'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                </tbody>
              </table>
            </div>
          </div>

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Donnees extraites depuis le schema reel.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\">
                <span><b>tournament_teams</b></span>
                <span class=\"listItem__meta\">tournament_id, team_id, status, seed, checked_in, decided_at, decided_by_user_id</span>
              </div>
              <div class=\"listItem\">
                <span><b>teams</b></span>
                <span class=\"listItem__meta\">team_id, name</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 119
        yield from $this->load("front/partials/_footer.html.twig", 119)->unwrap()->yield($context);
        // line 120
        yield "    </section>
  </main>

  ";
        // line 123
        yield from $this->load("front/partials/_auth_modal.html.twig", 123)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/organizer-registrations.html.twig";
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
        return array (  323 => 123,  318 => 120,  316 => 119,  288 => 93,  280 => 90,  276 => 88,  272 => 86,  270 => 85,  266 => 83,  264 => 82,  252 => 75,  248 => 74,  241 => 70,  237 => 69,  231 => 66,  227 => 65,  223 => 64,  217 => 63,  213 => 62,  210 => 61,  208 => 59,  206 => 57,  201 => 56,  181 => 38,  170 => 35,  163 => 34,  159 => 33,  152 => 29,  148 => 27,  142 => 26,  131 => 23,  127 => 22,  124 => 21,  119 => 20,  115 => 19,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Inscriptions{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'ORGANISATEUR',
    hero_title: 'Inscriptions equipes',
    hero_sub: 'Validation des equipes inscrites a vos tournois.',
    breadcrumb_current: 'Inscriptions'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_organizer_side_nav.html.twig' with {active: 'registrations'} %}

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
            <form method=\"get\" action=\"{{ path('front_organizer_registrations') }}\" class=\"filtersBar\">
              <div class=\"filterGroup\">
                <label for=\"tournament\">Tournoi</label>
                <select id=\"tournament\" name=\"tournament\" class=\"input\" onchange=\"this.form.submit()\">
                  {% for tournament in tournaments %}
                    <option value=\"{{ tournament.tournamentId }}\" {{ selectedTournament and selectedTournament.tournamentId == tournament.tournamentId ? 'selected' : '' }}>
                      #{{ tournament.tournamentId }} - {{ tournament.title }}
                    </option>
                  {% endfor %}
                </select>
              </div>
              <noscript><button class=\"btn btn--primary\" type=\"submit\">Filtrer</button></noscript>
            </form>

            <div class=\"tableWrap\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Equipe</th>
                    <th>Statut</th>
                    <th>Inscrite le</th>
                    <th>Seed</th>
                    <th>Check-in</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {% for registration in registrations %}
                    {% set statusClass = registration.status == 'ACCEPTED'
                      ? 'badge--success'
                      : (registration.status == 'REFUSED' ? 'badge--danger' : (registration.status == 'CANCELLED' ? 'badge--muted' : ''))
                    %}
                    <tr>
                      <td>{{ registration.teamId ? registration.teamId.name : '-' }}</td>
                      <td><span class=\"badge {{ statusClass }}\">{{ registration.status }}</span></td>
                      <td>{{ registration.registeredAt ? registration.registeredAt|date('Y-m-d H:i') : '-' }}</td>
                      <td>{{ registration.seed is not null ? registration.seed : '-' }}</td>
                      <td>{{ registration.checkedIn ? 'Oui' : 'Non' }}</td>
                      <td>
                        <div class=\"formActions\">
                          <form method=\"post\" action=\"{{ path('front_organizer_registration_status', {tournamentId: selectedTournament.tournamentId, teamId: registration.teamId.teamId}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('organizer_registration_status_' ~ selectedTournament.tournamentId ~ '_' ~ registration.teamId.teamId) }}\">
                            <input type=\"hidden\" name=\"status\" value=\"ACCEPTED\">
                            <button class=\"btn btn--primary\" type=\"submit\">Accepter</button>
                          </form>
                          <form method=\"post\" action=\"{{ path('front_organizer_registration_status', {tournamentId: selectedTournament.tournamentId, teamId: registration.teamId.teamId}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('organizer_registration_status_' ~ selectedTournament.tournamentId ~ '_' ~ registration.teamId.teamId) }}\">
                            <input type=\"hidden\" name=\"status\" value=\"REFUSED\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Refuser</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"6\" class=\"muted\">
                        {% if selectedTournament %}
                          Aucune inscription pour ce tournoi.
                        {% else %}
                          Aucun tournoi disponible.
                        {% endif %}
                      </td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </div>

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Donnees extraites depuis le schema reel.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\">
                <span><b>tournament_teams</b></span>
                <span class=\"listItem__meta\">tournament_id, team_id, status, seed, checked_in, decided_at, decided_by_user_id</span>
              </div>
              <div class=\"listItem\">
                <span><b>teams</b></span>
                <span class=\"listItem__meta\">team_id, name</span>
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
", "front/pages/organizer-registrations.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\organizer-registrations.html.twig");
    }
}
