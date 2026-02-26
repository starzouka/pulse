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

/* front/pages/organizer-tournaments.html.twig */
class __TwigTemplate_0a96c8d2c0565e4e4168f3adf09ce3a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-tournaments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-tournaments.html.twig"));

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

        yield "PULSE - Mes tournois";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ORGANISATEUR", "hero_title" => "Mes tournois", "hero_sub" => "Tournois valides, ouverts ou en cours.", "breadcrumb_current" => "Mes tournois"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_organizer_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "tournaments"]));
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
              <h3 class=\"panel__title\">MES TOURNOIS</h3>
              <div class=\"panel__desc\">Total: ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("counter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 31, $this->source); })()), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 31, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 31, $this->source); })())))), "html", null, true);
        yield " tournoi(s)</div>
            </div>

            <form method=\"get\" action=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_tournaments");
        yield "\">
              <div class=\"filtersRow\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "q", [], "any", false, false, false, 36), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un tournoi...\" />

                <div class=\"select\">
                  <select name=\"status\">
                    <option value=\"\">Statut</option>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusOptions"]) || array_key_exists("statusOptions", $context) ? $context["statusOptions"] : (function () { throw new RuntimeError('Variable "statusOptions" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statusValue"]) {
            // line 42
            yield "                      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42) == $context["statusValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statusValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                  </select>
                </div>

                <div class=\"select\">
                  <select name=\"game\">
                    <option value=\"\">Jeu</option>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableGames"]) || array_key_exists("availableGames", $context) ? $context["availableGames"] : (function () { throw new RuntimeError('Variable "availableGames" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 51
            yield "                      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 51), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "game", [], "any", false, false, false, 51)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 51, $this->source); })()), "game", [], "any", false, false, false, 51) == CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 51)))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 51), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                  </select>
                </div>

                <div class=\"select\">
                  <select name=\"sort\">
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new RuntimeError('Variable "sortOptions" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortValue"]) {
            // line 59
            yield "                      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sortValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 59, $this->source); })()), "sort", [], "any", false, false, false, 59) == $context["sortValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["sortValue"]), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sortValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                  </select>
                </div>

                <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_tournaments");
        yield "\">Reset</a>
              </div>
            </form>

            <div class=\"tableWrap\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tournoi</th>
                    <th>Jeu</th>
                    <th>Statut</th>
                    <th>Equipes inscrites</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 82, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 83
            yield "                    ";
            $context["statusClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "status", [], "any", false, false, false, 83) == "OPEN")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 85
$context["tournament"], "status", [], "any", false, false, false, 85) == "ONGOING")) ? ("badge--info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "status", [], "any", false, false, false, 85) == "CANCELLED")) ? ("badge--danger") : (""))))));
            // line 87
            yield "                    <tr>
                      <td>#";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                      <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "title", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
                      <td>";
            // line 90
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "gameId", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "gameId", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90), "html", null, true)) : ("-"));
            yield "</td>
                      <td><span class=\"badge ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 91, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "status", [], "any", false, false, false, 91), "html", null, true);
            yield "</span></td>
                      <td>";
            // line 92
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["registrationsByTournamentId"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 92), [], "array", true, true, false, 92) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationsByTournamentId"]) || array_key_exists("registrationsByTournamentId", $context) ? $context["registrationsByTournamentId"] : (function () { throw new RuntimeError('Variable "registrationsByTournamentId" does not exist.', 92, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 92), [], "array", false, false, false, 92)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationsByTournamentId"]) || array_key_exists("registrationsByTournamentId", $context) ? $context["registrationsByTournamentId"] : (function () { throw new RuntimeError('Variable "registrationsByTournamentId" does not exist.', 92, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 92), [], "array", false, false, false, 92), "html", null, true)) : (0));
            yield "</td>
                      <td>
                        <a class=\"btn btn--ghost\" href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_tournament_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 94)]), "html", null, true);
            yield "\">Gerer</a>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 97
        if (!$context['_iterated']) {
            // line 98
            yield "                    <tr>
                      <td colspan=\"6\" class=\"muted\">Aucun tournoi pour le moment.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tournament'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
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
                <span><b>tournaments</b></span>
                <span class=\"listItem__meta\">tournament_id, organizer_user_id, game_id, title, status, photo_path</span>
              </div>
              <div class=\"listItem\">
                <span><b>tournament_teams</b></span>
                <span class=\"listItem__meta\">tournament_id, team_id, status, registered_at</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 128
        yield from $this->load("front/partials/_footer.html.twig", 128)->unwrap()->yield($context);
        // line 129
        yield "    </section>
  </main>

  ";
        // line 132
        yield from $this->load("front/partials/_auth_modal.html.twig", 132)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/organizer-tournaments.html.twig";
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
        return array (  354 => 132,  349 => 129,  347 => 128,  319 => 102,  310 => 98,  308 => 97,  300 => 94,  295 => 92,  289 => 91,  285 => 90,  281 => 89,  277 => 88,  274 => 87,  272 => 85,  270 => 83,  265 => 82,  245 => 65,  239 => 61,  226 => 59,  222 => 58,  215 => 53,  202 => 51,  198 => 50,  190 => 44,  177 => 42,  173 => 41,  165 => 36,  160 => 34,  154 => 31,  148 => 27,  142 => 26,  131 => 23,  127 => 22,  124 => 21,  119 => 20,  115 => 19,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Mes tournois{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'ORGANISATEUR',
    hero_title: 'Mes tournois',
    hero_sub: 'Tournois valides, ouverts ou en cours.',
    breadcrumb_current: 'Mes tournois'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_organizer_side_nav.html.twig' with {active: 'tournaments'} %}

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
              <h3 class=\"panel__title\">MES TOURNOIS</h3>
              <div class=\"panel__desc\">Total: {{ counter|default(tournaments|length) }} tournoi(s)</div>
            </div>

            <form method=\"get\" action=\"{{ path('front_organizer_tournaments') }}\">
              <div class=\"filtersRow\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Rechercher un tournoi...\" />

                <div class=\"select\">
                  <select name=\"status\">
                    <option value=\"\">Statut</option>
                    {% for statusValue in statusOptions %}
                      <option value=\"{{ statusValue }}\" {{ filters.status == statusValue ? 'selected' : '' }}>{{ statusValue }}</option>
                    {% endfor %}
                  </select>
                </div>

                <div class=\"select\">
                  <select name=\"game\">
                    <option value=\"\">Jeu</option>
                    {% for game in availableGames %}
                      <option value=\"{{ game.gameId }}\" {{ filters.game is not null and filters.game == game.gameId ? 'selected' : '' }}>{{ game.name }}</option>
                    {% endfor %}
                  </select>
                </div>

                <div class=\"select\">
                  <select name=\"sort\">
                    {% for sortValue in sortOptions %}
                      <option value=\"{{ sortValue }}\" {{ filters.sort == sortValue ? 'selected' : '' }}>{{ sortValue|upper }}</option>
                    {% endfor %}
                  </select>
                </div>

                <button class=\"btn btn--primary\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_tournaments') }}\">Reset</a>
              </div>
            </form>

            <div class=\"tableWrap\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tournoi</th>
                    <th>Jeu</th>
                    <th>Statut</th>
                    <th>Equipes inscrites</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {% for tournament in tournaments %}
                    {% set statusClass = tournament.status == 'OPEN'
                      ? 'badge--success'
                      : (tournament.status == 'ONGOING' ? 'badge--info' : (tournament.status == 'CANCELLED' ? 'badge--danger' : ''))
                    %}
                    <tr>
                      <td>#{{ tournament.tournamentId }}</td>
                      <td>{{ tournament.title }}</td>
                      <td>{{ tournament.gameId ? tournament.gameId.name : '-' }}</td>
                      <td><span class=\"badge {{ statusClass }}\">{{ tournament.status }}</span></td>
                      <td>{{ registrationsByTournamentId[tournament.tournamentId] ?? 0 }}</td>
                      <td>
                        <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_tournament_detail', {id: tournament.tournamentId}) }}\">Gerer</a>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"6\" class=\"muted\">Aucun tournoi pour le moment.</td>
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
                <span><b>tournaments</b></span>
                <span class=\"listItem__meta\">tournament_id, organizer_user_id, game_id, title, status, photo_path</span>
              </div>
              <div class=\"listItem\">
                <span><b>tournament_teams</b></span>
                <span class=\"listItem__meta\">tournament_id, team_id, status, registered_at</span>
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

", "front/pages/organizer-tournaments.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\pages\\organizer-tournaments.html.twig");
    }
}
