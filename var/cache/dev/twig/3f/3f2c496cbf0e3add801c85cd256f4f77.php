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

/* admin/pages/matches.html.twig */
class __TwigTemplate_4bb5feb6fe5056f7984a1c9f3d7b3bfe extends Template
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
            'admin_content' => [$this, 'block_admin_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/matches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/matches.html.twig"));

        $this->parent = $this->load("admin/base_admin.html.twig", 1);
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

        yield "PULSE - Gestion matchs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        // line 6
        yield "  <div class=\"pageHeader\">
    <div>
      <h2>Gestion matchs</h2>
      <div class=\"pageSub\">CRUD complet + recherche/tri backend.</div>
    </div>
  </div>

  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                yield "      <div class=\"listItem\">
        <span>";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 17
                yield ((($context["label"] == "error")) ? ("badge--danger") : (((($context["label"] == "warning")) ? ("badge--warning") : ("badge--success"))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">";
        // line 24
        yield (((($tmp = (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 24, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("MODIFIER MATCH #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 24, $this->source); })()), "matchId", [], "any", false, false, false, 24)), "html", null, true)) : ("CREER MATCH"));
        yield "</h3>
      ";
        // line 25
        if ((($tmp = (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "        <span class=\"listMeta\">Tournoi cible: #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 26, $this->source); })()), "tournamentId", [], "any", false, false, false, 26), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), "html", null, true);
            yield "</span>
      ";
        }
        // line 28
        yield "    </div>

    ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
      ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 31, $this->source); })()), 'errors');
        yield "
      ";
        // line 32
        yield from $this->load("shared/_organizer_match_form_fields.html.twig", 32)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 32, $this->source); })())]));
        // line 33
        yield "
      ";
        // line 34
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["participantRows"]) || array_key_exists("participantRows", $context) ? $context["participantRows"] : (function () { throw new RuntimeError('Variable "participantRows" does not exist.', 34, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "        <div class=\"panel\" style=\"margin-top: 12px;\">
          <div class=\"panelHeader\">
            <h3 class=\"panelTitle\">SCORES & WINNERS</h3>
          </div>
          <div class=\"dataTableWrap\">
            <table class=\"dataTable\">
              <thead>
                <tr>
                  <th>Equipe</th>
                  <th>Score</th>
                  <th>Winner</th>
                </tr>
              </thead>
              <tbody>
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participantRows"]) || array_key_exists("participantRows", $context) ? $context["participantRows"] : (function () { throw new RuntimeError('Variable "participantRows" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 50
                yield "                  ";
                $context["team"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 50);
                // line 51
                yield "                  ";
                $context["teamId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 51, $this->source); })()), "teamId", [], "any", false, false, false, 51)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 51, $this->source); })()), "teamId", [], "any", false, false, false, 51)) : (0));
                // line 52
                yield "                  <tr>
                    <td>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
                yield "</td>
                    <td>
                      <input class=\"input\" type=\"number\" min=\"0\" name=\"team_scores[";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 55, $this->source); })()), "html", null, true);
                yield "]\" value=\"";
                yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["row"], "score", [], "any", false, false, false, 55))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "score", [], "any", false, false, false, 55), "html", null, true)) : (""));
                yield "\" />
                    </td>
                    <td>
                      <label>
                        <input type=\"checkbox\" name=\"team_winners[]\" value=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 59, $this->source); })()), "html", null, true);
                yield "\" ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "isWinner", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
                yield " />
                        Gagnant
                      </label>
                    </td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "              </tbody>
            </table>
          </div>
        </div>
      ";
        }
        // line 70
        yield "
      <div class=\"formActions\" style=\"margin-top: 12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 72
        yield (((($tmp = (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer match"));
        yield "</button>
        ";
        // line 73
        if ((($tmp = (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 73, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "          <a class=\"btn btnGhost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
            yield "\">Annuler edition</a>
        ";
        }
        // line 76
        yield "      </div>
    ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 77, $this->source); })()), 'form_end');
        yield "
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 83, $this->source); })()), "q", [], "any", false, false, false, 83), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Round, tournoi, jeu...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Tournoi</label>
      <select name=\"tournament\">
        <option value=\"\">ALL</option>
        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableTournaments"]) || array_key_exists("availableTournaments", $context) ? $context["availableTournaments"] : (function () { throw new RuntimeError('Variable "availableTournaments" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 91
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 91), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 91, $this->source); })()), "tournament", [], "any", false, false, false, 91)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 91, $this->source); })()), "tournament", [], "any", false, false, false, 91) == CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 91)))) ? ("selected") : (""));
            yield ">
            #";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 92), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "title", [], "any", false, false, false, 92), "html", null, true);
            yield "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tournament'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Statut</label>
      <select name=\"status\">
        <option value=\"\">ALL</option>
        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusOptions"]) || array_key_exists("statusOptions", $context) ? $context["statusOptions"] : (function () { throw new RuntimeError('Variable "statusOptions" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statusValue"]) {
            // line 103
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 103, $this->source); })()), "status", [], "any", false, false, false, 103) == $context["statusValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statusValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Jeu</label>
      <select name=\"game\">
        <option value=\"\">ALL</option>
        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableGames"]) || array_key_exists("availableGames", $context) ? $context["availableGames"] : (function () { throw new RuntimeError('Variable "availableGames" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 113
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 113), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 113, $this->source); })()), "game", [], "any", false, false, false, 113)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 113, $this->source); })()), "game", [], "any", false, false, false, 113) == CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 113)))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 113), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Date debut</label>
      <input type=\"date\" name=\"date_from\" value=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 120, $this->source); })()), "date_from", [], "any", false, false, false, 120), "")) : ("")), "html", null, true);
        yield "\" />
    </div>

    <div class=\"filterGroup\">
      <label>Date fin</label>
      <input type=\"date\" name=\"date_to\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 125)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 125, $this->source); })()), "date_to", [], "any", false, false, false, 125), "")) : ("")), "html", null, true);
        yield "\" />
    </div>

    <div class=\"filterGroup\">
      <label>Equipe</label>
      <input type=\"search\" name=\"team\" value=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "team", [], "any", true, true, false, 130)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 130, $this->source); })()), "team", [], "any", false, false, false, 130), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Nom equipe\" />
    </div>

    <div class=\"filterGroup\">
      <label>Tri</label>
      <select name=\"sort\">
        ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new RuntimeError('Variable "sortOptions" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortValue"]) {
            // line 137
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sortValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 137, $this->source); })()), "sort", [], "any", false, false, false, 137) == $context["sortValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["sortValue"]), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sortValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE MATCHS</h3>
      <span class=\"listMeta\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("counter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 151, $this->source); })()), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 151, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 151, $this->source); })())))), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tournoi</th>
            <th>Round</th>
            <th>Participants</th>
            <th>Horaire</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 168, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 169
            yield "            ";
            $context["matchId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", true, true, false, 169) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 169)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 169)) : (0));
            // line 170
            yield "            ";
            $context["teams"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchTeamsByMatchId"] ?? null), (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 170, $this->source); })()), [], "array", true, true, false, 170)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchTeamsByMatchId"]) || array_key_exists("matchTeamsByMatchId", $context) ? $context["matchTeamsByMatchId"] : (function () { throw new RuntimeError('Variable "matchTeamsByMatchId" does not exist.', 170, $this->source); })()), (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 170, $this->source); })()), [], "array", false, false, false, 170), [])) : ([]));
            // line 171
            yield "            ";
            $context["statusClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 171) == "ONGOING")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 173
$context["match"], "status", [], "any", false, false, false, 173) == "SCHEDULED")) ? ("badge--info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 173) == "FINISHED")) ? ("") : ("badge--danger"))))));
            // line 175
            yield "            <tr>
              <td>#";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 176, $this->source); })()), "html", null, true);
            yield "</td>
              <td>
                ";
            // line 178
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 178), "title", [], "any", false, false, false, 178), "html", null, true)) : ("-"));
            yield "
                <div class=\"listMeta\">";
            // line 179
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 179) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 179), "gameId", [], "any", false, false, false, 179))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 179), "gameId", [], "any", false, false, false, 179), "name", [], "any", false, false, false, 179), "html", null, true)) : ("-"));
            yield "</div>
              </td>
              <td>";
            // line 181
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 181)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 181), "html", null, true)) : ("-"));
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " · BO";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 181), "html", null, true);
            }
            yield "</td>
              <td>
                ";
            // line 183
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 183, $this->source); })()))) {
                // line 184
                yield "                  -
                ";
            } else {
                // line 186
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 186, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["relation"]) {
                    // line 187
                    yield "                    ";
                    $context["relationTeam"] = CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "teamId", [], "any", false, false, false, 187);
                    // line 188
                    yield "                    ";
                    yield (((($tmp = (isset($context["relationTeam"]) || array_key_exists("relationTeam", $context) ? $context["relationTeam"] : (function () { throw new RuntimeError('Variable "relationTeam" does not exist.', 188, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["relationTeam"]) || array_key_exists("relationTeam", $context) ? $context["relationTeam"] : (function () { throw new RuntimeError('Variable "relationTeam" does not exist.', 188, $this->source); })()), "name", [], "any", false, false, false, 188), "html", null, true)) : ("-"));
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 188))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 188), "html", null, true);
                        yield ")";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "isWinner", [], "any", false, false, false, 188) === true)) {
                        yield " W";
                    }
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield ", ";
                    }
                    // line 189
                    yield "                  ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['relation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                yield "                ";
            }
            // line 191
            yield "              </td>
              <td>";
            // line 192
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 192), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td><span class=\"badge ";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 193, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 193), "html", null, true);
            yield "</span></td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_match_detail", ["id" => (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 196, $this->source); })())]), "html", null, true);
            yield "\">Voir</a>
                  <a class=\"btn btnTiny\" href=\"";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches", ["edit" => (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 197, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_match_delete", ["id" => (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 198, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce match ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_match_" . (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 199, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 205
        if (!$context['_iterated']) {
            // line 206
            yield "            <tr>
              <td colspan=\"7\" class=\"listMeta\">Aucun match trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "        </tbody>
      </table>
    </div>
  </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/pages/matches.html.twig";
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
        return array (  593 => 210,  584 => 206,  582 => 205,  571 => 199,  567 => 198,  563 => 197,  559 => 196,  551 => 193,  547 => 192,  544 => 191,  541 => 190,  527 => 189,  513 => 188,  510 => 187,  492 => 186,  488 => 184,  486 => 183,  477 => 181,  472 => 179,  468 => 178,  463 => 176,  460 => 175,  458 => 173,  456 => 171,  453 => 170,  450 => 169,  445 => 168,  425 => 151,  415 => 144,  408 => 139,  395 => 137,  391 => 136,  382 => 130,  374 => 125,  366 => 120,  359 => 115,  346 => 113,  342 => 112,  333 => 105,  320 => 103,  316 => 102,  307 => 95,  296 => 92,  289 => 91,  285 => 90,  275 => 83,  269 => 80,  263 => 77,  260 => 76,  254 => 74,  252 => 73,  248 => 72,  244 => 70,  237 => 65,  223 => 59,  214 => 55,  209 => 53,  206 => 52,  203 => 51,  200 => 50,  196 => 49,  180 => 35,  178 => 34,  175 => 33,  173 => 32,  169 => 31,  165 => 30,  161 => 28,  153 => 26,  151 => 25,  147 => 24,  142 => 21,  136 => 20,  125 => 17,  121 => 16,  118 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Gestion matchs{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion matchs</h2>
      <div class=\"pageSub\">CRUD complet + recherche/tri backend.</div>
    </div>
  </div>

  {% for label, messages in app.flashes %}
    {% for message in messages %}
      <div class=\"listItem\">
        <span>{{ message }}</span>
        <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'warning' ? 'badge--warning' : 'badge--success') }}\">{{ label|upper }}</span>
      </div>
    {% endfor %}
  {% endfor %}

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">{{ editingMatch ? 'MODIFIER MATCH #' ~ editingMatch.matchId : 'CREER MATCH' }}</h3>
      {% if selectedTournament %}
        <span class=\"listMeta\">Tournoi cible: #{{ selectedTournament.tournamentId }} - {{ selectedTournament.title }}</span>
      {% endif %}
    </div>

    {{ form_start(matchForm, {attr: {novalidate: 'novalidate'}}) }}
      {{ form_errors(matchForm) }}
      {% include 'shared/_organizer_match_form_fields.html.twig' with {form: matchForm} %}

      {% if participantRows is not empty %}
        <div class=\"panel\" style=\"margin-top: 12px;\">
          <div class=\"panelHeader\">
            <h3 class=\"panelTitle\">SCORES & WINNERS</h3>
          </div>
          <div class=\"dataTableWrap\">
            <table class=\"dataTable\">
              <thead>
                <tr>
                  <th>Equipe</th>
                  <th>Score</th>
                  <th>Winner</th>
                </tr>
              </thead>
              <tbody>
                {% for row in participantRows %}
                  {% set team = row.team %}
                  {% set teamId = team.teamId ?? 0 %}
                  <tr>
                    <td>{{ team.name }}</td>
                    <td>
                      <input class=\"input\" type=\"number\" min=\"0\" name=\"team_scores[{{ teamId }}]\" value=\"{{ row.score is not null ? row.score : '' }}\" />
                    </td>
                    <td>
                      <label>
                        <input type=\"checkbox\" name=\"team_winners[]\" value=\"{{ teamId }}\" {{ row.isWinner ? 'checked' : '' }} />
                        Gagnant
                      </label>
                    </td>
                  </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      {% endif %}

      <div class=\"formActions\" style=\"margin-top: 12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">{{ editingMatch ? 'Mettre a jour' : 'Creer match' }}</button>
        {% if editingMatch %}
          <a class=\"btn btnGhost\" href=\"{{ path('admin_matches') }}\">Annuler edition</a>
        {% endif %}
      </div>
    {{ form_end(matchForm) }}
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"{{ path('admin_matches') }}\">
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Round, tournoi, jeu...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Tournoi</label>
      <select name=\"tournament\">
        <option value=\"\">ALL</option>
        {% for tournament in availableTournaments %}
          <option value=\"{{ tournament.tournamentId }}\" {{ filters.tournament is not null and filters.tournament == tournament.tournamentId ? 'selected' : '' }}>
            #{{ tournament.tournamentId }} - {{ tournament.title }}
          </option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Statut</label>
      <select name=\"status\">
        <option value=\"\">ALL</option>
        {% for statusValue in statusOptions %}
          <option value=\"{{ statusValue }}\" {{ filters.status == statusValue ? 'selected' : '' }}>{{ statusValue }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Jeu</label>
      <select name=\"game\">
        <option value=\"\">ALL</option>
        {% for game in availableGames %}
          <option value=\"{{ game.gameId }}\" {{ filters.game is not null and filters.game == game.gameId ? 'selected' : '' }}>{{ game.name }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Date debut</label>
      <input type=\"date\" name=\"date_from\" value=\"{{ filters.date_from|default('') }}\" />
    </div>

    <div class=\"filterGroup\">
      <label>Date fin</label>
      <input type=\"date\" name=\"date_to\" value=\"{{ filters.date_to|default('') }}\" />
    </div>

    <div class=\"filterGroup\">
      <label>Equipe</label>
      <input type=\"search\" name=\"team\" value=\"{{ filters.team|default('') }}\" placeholder=\"Nom equipe\" />
    </div>

    <div class=\"filterGroup\">
      <label>Tri</label>
      <select name=\"sort\">
        {% for sortValue in sortOptions %}
          <option value=\"{{ sortValue }}\" {{ filters.sort == sortValue ? 'selected' : '' }}>{{ sortValue|upper }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_matches') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE MATCHS</h3>
      <span class=\"listMeta\">{{ counter|default(matches|length) }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tournoi</th>
            <th>Round</th>
            <th>Participants</th>
            <th>Horaire</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for match in matches %}
            {% set matchId = match.matchId ?? 0 %}
            {% set teams = matchTeamsByMatchId[matchId]|default([]) %}
            {% set statusClass = match.status == 'ONGOING'
              ? 'badge--success'
              : (match.status == 'SCHEDULED' ? 'badge--info' : (match.status == 'FINISHED' ? '' : 'badge--danger'))
            %}
            <tr>
              <td>#{{ matchId }}</td>
              <td>
                {{ match.tournamentId ? match.tournamentId.title : '-' }}
                <div class=\"listMeta\">{{ match.tournamentId and match.tournamentId.gameId ? match.tournamentId.gameId.name : '-' }}</div>
              </td>
              <td>{{ match.roundName ?: '-' }}{% if match.bestOf %} · BO{{ match.bestOf }}{% endif %}</td>
              <td>
                {% if teams is empty %}
                  -
                {% else %}
                  {% for relation in teams %}
                    {% set relationTeam = relation.teamId %}
                    {{ relationTeam ? relationTeam.name : '-' }}{% if relation.score is not null %} ({{ relation.score }}){% endif %}{% if relation.isWinner is same as(true) %} W{% endif %}{% if not loop.last %}, {% endif %}
                  {% endfor %}
                {% endif %}
              </td>
              <td>{{ match.scheduledAt ? match.scheduledAt|date('d/m/Y H:i') : '-' }}</td>
              <td><span class=\"badge {{ statusClass }}\">{{ match.status }}</span></td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_match_detail', {id: matchId}) }}\">Voir</a>
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_matches', {edit: matchId}) }}\">Update</a>
                  <form method=\"post\" action=\"{{ path('admin_match_delete', {id: matchId}) }}\" onsubmit=\"return confirm('Supprimer ce match ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_match_' ~ matchId) }}\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"7\" class=\"listMeta\">Aucun match trouve.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/matches.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\matches.html.twig");
    }
}
