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
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ai_ollama_test");
        yield "\">Test Ollama</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches_export", ["format" => "pdf", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["filters"] ?? null), "q", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 15, $this->source); })()), "q", [], "any", false, false, false, 15), "")) : ("")), "tournament" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 16
($context["filters"] ?? null), "tournament", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 16, $this->source); })()), "tournament", [], "any", false, false, false, 16), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 17
($context["filters"] ?? null), "status", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 17, $this->source); })()), "status", [], "any", false, false, false, 17), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["filters"] ?? null), "game", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 18, $this->source); })()), "game", [], "any", false, false, false, 18), "")) : ("")), "date_from" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["filters"] ?? null), "date_from", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 19, $this->source); })()), "date_from", [], "any", false, false, false, 19), "")) : ("")), "date_to" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 20
($context["filters"] ?? null), "date_to", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 20, $this->source); })()), "date_to", [], "any", false, false, false, 20), "")) : ("")), "team" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 21
($context["filters"] ?? null), "team", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 21, $this->source); })()), "team", [], "any", false, false, false, 21), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 22
($context["filters"] ?? null), "sort", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "sort", [], "any", false, false, false, 22), "latest")) : ("latest"))]), "html", null, true);
        // line 23
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches_export", ["format" => "excel", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 26
($context["filters"] ?? null), "q", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), "q", [], "any", false, false, false, 26), "")) : ("")), "tournament" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["filters"] ?? null), "tournament", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })()), "tournament", [], "any", false, false, false, 27), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["filters"] ?? null), "status", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["filters"] ?? null), "game", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "game", [], "any", false, false, false, 29), "")) : ("")), "date_from" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["filters"] ?? null), "date_from", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 30, $this->source); })()), "date_from", [], "any", false, false, false, 30), "")) : ("")), "date_to" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["filters"] ?? null), "date_to", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 31, $this->source); })()), "date_to", [], "any", false, false, false, 31), "")) : ("")), "team" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["filters"] ?? null), "team", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 32, $this->source); })()), "team", [], "any", false, false, false, 32), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["filters"] ?? null), "sort", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 33, $this->source); })()), "sort", [], "any", false, false, false, 33), "latest")) : ("latest"))]), "html", null, true);
        // line 34
        yield "\">Exporter Excel</a>
    </div>
  </div>

  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "flashes", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 39
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 40
                yield "      <div class=\"listItem\">
        <span>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 42
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
            // line 45
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">";
        // line 49
        yield (((($tmp = (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("MODIFIER MATCH #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 49, $this->source); })()), "matchId", [], "any", false, false, false, 49)), "html", null, true)) : ("CREER MATCH"));
        yield "</h3>
      ";
        // line 50
        if ((($tmp = (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "        <span class=\"listMeta\">Tournoi cible: #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 51, $this->source); })()), "tournamentId", [], "any", false, false, false, 51), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 51, $this->source); })()), "title", [], "any", false, false, false, 51), "html", null, true);
            yield "</span>
      ";
        }
        // line 53
        yield "    </div>

    ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 55, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
      ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 56, $this->source); })()), 'errors');
        yield "
      ";
        // line 57
        yield from $this->load("shared/_organizer_match_form_fields.html.twig", 57)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 57, $this->source); })())]));
        // line 58
        yield "
      ";
        // line 59
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["participantRows"]) || array_key_exists("participantRows", $context) ? $context["participantRows"] : (function () { throw new RuntimeError('Variable "participantRows" does not exist.', 59, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
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
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participantRows"]) || array_key_exists("participantRows", $context) ? $context["participantRows"] : (function () { throw new RuntimeError('Variable "participantRows" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 75
                yield "                  ";
                $context["team"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 75);
                // line 76
                yield "                  ";
                $context["teamId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 76, $this->source); })()), "teamId", [], "any", false, false, false, 76)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 76, $this->source); })()), "teamId", [], "any", false, false, false, 76)) : (0));
                // line 77
                yield "                  <tr>
                    <td>";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 78, $this->source); })()), "name", [], "any", false, false, false, 78), "html", null, true);
                yield "</td>
                    <td>
                      <input class=\"input\" type=\"number\" min=\"0\" name=\"team_scores[";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 80, $this->source); })()), "html", null, true);
                yield "]\" value=\"";
                yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["row"], "score", [], "any", false, false, false, 80))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "score", [], "any", false, false, false, 80), "html", null, true)) : (""));
                yield "\" />
                    </td>
                    <td>
                      <label>
                        <input type=\"checkbox\" name=\"team_winners[]\" value=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 84, $this->source); })()), "html", null, true);
                yield "\" ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "isWinner", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
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
            // line 90
            yield "              </tbody>
            </table>
          </div>
        </div>
      ";
        }
        // line 95
        yield "
      <div class=\"formActions\" style=\"margin-top: 12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 97
        yield (((($tmp = (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 97, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer match"));
        yield "</button>
        ";
        // line 98
        if ((($tmp = (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 98, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "          <a class=\"btn btnGhost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
            yield "\">Annuler edition</a>
        ";
        }
        // line 101
        yield "      </div>
    ";
        // line 102
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 102, $this->source); })()), 'form_end');
        yield "
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 108, $this->source); })()), "q", [], "any", false, false, false, 108), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Round, tournoi, jeu...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Tournoi</label>
      <select name=\"tournament\">
        <option value=\"\">ALL</option>
        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableTournaments"]) || array_key_exists("availableTournaments", $context) ? $context["availableTournaments"] : (function () { throw new RuntimeError('Variable "availableTournaments" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 116
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 116), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 116, $this->source); })()), "tournament", [], "any", false, false, false, 116)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 116, $this->source); })()), "tournament", [], "any", false, false, false, 116) == CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 116)))) ? ("selected") : (""));
            yield ">
            #";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 117), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "title", [], "any", false, false, false, 117), "html", null, true);
            yield "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tournament'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Statut</label>
      <select name=\"status\">
        <option value=\"\">ALL</option>
        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusOptions"]) || array_key_exists("statusOptions", $context) ? $context["statusOptions"] : (function () { throw new RuntimeError('Variable "statusOptions" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statusValue"]) {
            // line 128
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 128, $this->source); })()), "status", [], "any", false, false, false, 128) == $context["statusValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statusValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Jeu</label>
      <select name=\"game\">
        <option value=\"\">ALL</option>
        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableGames"]) || array_key_exists("availableGames", $context) ? $context["availableGames"] : (function () { throw new RuntimeError('Variable "availableGames" does not exist.', 137, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 138
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 138), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 138, $this->source); })()), "game", [], "any", false, false, false, 138)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 138, $this->source); })()), "game", [], "any", false, false, false, 138) == CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 138)))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 138), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Date debut</label>
      <input type=\"date\" name=\"date_from\" value=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 145, $this->source); })()), "date_from", [], "any", false, false, false, 145), "")) : ("")), "html", null, true);
        yield "\" />
    </div>

    <div class=\"filterGroup\">
      <label>Date fin</label>
      <input type=\"date\" name=\"date_to\" value=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 150)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 150, $this->source); })()), "date_to", [], "any", false, false, false, 150), "")) : ("")), "html", null, true);
        yield "\" />
    </div>

    <div class=\"filterGroup\">
      <label>Equipe</label>
      <input type=\"search\" name=\"team\" value=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "team", [], "any", true, true, false, 155)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 155, $this->source); })()), "team", [], "any", false, false, false, 155), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Nom equipe\" />
    </div>

    <div class=\"filterGroup\">
      <label>Tri</label>
      <select name=\"sort\">
        ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new RuntimeError('Variable "sortOptions" does not exist.', 161, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortValue"]) {
            // line 162
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sortValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 162, $this->source); })()), "sort", [], "any", false, false, false, 162) == $context["sortValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["sortValue"]), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sortValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        yield "      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE MATCHS</h3>
      <span class=\"listMeta\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("counter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 176, $this->source); })()), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 176, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 176, $this->source); })())))), "html", null, true);
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
            <th>IA</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 194, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 195
            yield "            ";
            $context["matchId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", true, true, false, 195) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 195)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 195)) : (0));
            // line 196
            yield "            ";
            $context["teams"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchTeamsByMatchId"] ?? null), (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 196, $this->source); })()), [], "array", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchTeamsByMatchId"]) || array_key_exists("matchTeamsByMatchId", $context) ? $context["matchTeamsByMatchId"] : (function () { throw new RuntimeError('Variable "matchTeamsByMatchId" does not exist.', 196, $this->source); })()), (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 196, $this->source); })()), [], "array", false, false, false, 196), [])) : ([]));
            // line 197
            yield "            ";
            $context["matchAi"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchAiLocalByMatchId"] ?? null), (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 197, $this->source); })()), [], "array", true, true, false, 197)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchAiLocalByMatchId"]) || array_key_exists("matchAiLocalByMatchId", $context) ? $context["matchAiLocalByMatchId"] : (function () { throw new RuntimeError('Variable "matchAiLocalByMatchId" does not exist.', 197, $this->source); })()), (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 197, $this->source); })()), [], "array", false, false, false, 197), null)) : (null));
            // line 198
            yield "            ";
            $context["aiRisk"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchAi"] ?? null), "anomalyRisk", [], "any", true, true, false, 198)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchAi"]) || array_key_exists("matchAi", $context) ? $context["matchAi"] : (function () { throw new RuntimeError('Variable "matchAi" does not exist.', 198, $this->source); })()), "anomalyRisk", [], "any", false, false, false, 198), "LOW")) : ("LOW"));
            // line 199
            yield "            ";
            $context["aiBadge"] = ((((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 199, $this->source); })()) == "HIGH")) ? ("badge--danger") : (((((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 199, $this->source); })()) == "MEDIUM")) ? ("badge--warning") : ("badge--success"))));
            // line 200
            yield "            ";
            $context["statusClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 200) == "ONGOING")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 202
$context["match"], "status", [], "any", false, false, false, 202) == "SCHEDULED")) ? ("badge--info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 202) == "FINISHED")) ? ("") : ("badge--danger"))))));
            // line 204
            yield "            <tr>
              <td>#";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 205, $this->source); })()), "html", null, true);
            yield "</td>
              <td>
                ";
            // line 207
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 207), "title", [], "any", false, false, false, 207), "html", null, true)) : ("-"));
            yield "
                <div class=\"listMeta\">";
            // line 208
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 208) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 208), "gameId", [], "any", false, false, false, 208))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 208), "gameId", [], "any", false, false, false, 208), "name", [], "any", false, false, false, 208), "html", null, true)) : ("-"));
            yield "</div>
              </td>
              <td>";
            // line 210
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 210)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 210), "html", null, true)) : ("-"));
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " · BO";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 210), "html", null, true);
            }
            yield "</td>
              <td>
                ";
            // line 212
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 212, $this->source); })()))) {
                // line 213
                yield "                  -
                ";
            } else {
                // line 215
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 215, $this->source); })()));
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
                    // line 216
                    yield "                    ";
                    $context["relationTeam"] = CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "teamId", [], "any", false, false, false, 216);
                    // line 217
                    yield "                    ";
                    yield (((($tmp = (isset($context["relationTeam"]) || array_key_exists("relationTeam", $context) ? $context["relationTeam"] : (function () { throw new RuntimeError('Variable "relationTeam" does not exist.', 217, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["relationTeam"]) || array_key_exists("relationTeam", $context) ? $context["relationTeam"] : (function () { throw new RuntimeError('Variable "relationTeam" does not exist.', 217, $this->source); })()), "name", [], "any", false, false, false, 217), "html", null, true)) : ("-"));
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 217))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 217), "html", null, true);
                        yield ")";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "isWinner", [], "any", false, false, false, 217) === true)) {
                        yield " W";
                    }
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield ", ";
                    }
                    // line 218
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
                // line 219
                yield "                ";
            }
            // line 220
            yield "              </td>
              <td>";
            // line 221
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 221)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 221), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td><span class=\"badge ";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 222, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 222), "html", null, true);
            yield "</span></td>
              <td>
                ";
            // line 224
            if ((($tmp = (isset($context["matchAi"]) || array_key_exists("matchAi", $context) ? $context["matchAi"] : (function () { throw new RuntimeError('Variable "matchAi" does not exist.', 224, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 225
                yield "                  <div class=\"listMeta\">
                    <span class=\"badge ";
                // line 226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiBadge"]) || array_key_exists("aiBadge", $context) ? $context["aiBadge"] : (function () { throw new RuntimeError('Variable "aiBadge" does not exist.', 226, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["matchAi"] ?? null), "integrityScore", [], "any", true, true, false, 226)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchAi"]) || array_key_exists("matchAi", $context) ? $context["matchAi"] : (function () { throw new RuntimeError('Variable "matchAi" does not exist.', 226, $this->source); })()), "integrityScore", [], "any", false, false, false, 226), 0)) : (0)), "html", null, true);
                yield "/100 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 226, $this->source); })()), "html", null, true);
                yield "</span>
                  </div>
                  <div class=\"listMeta\">";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["matchAi"] ?? null), "issuesCount", [], "any", true, true, false, 228)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchAi"]) || array_key_exists("matchAi", $context) ? $context["matchAi"] : (function () { throw new RuntimeError('Variable "matchAi" does not exist.', 228, $this->source); })()), "issuesCount", [], "any", false, false, false, 228), 0)) : (0)), "html", null, true);
                yield " issue(s)</div>
                  ";
                // line 229
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchAi"] ?? null), "findings", [], "any", true, true, false, 229) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchAi"]) || array_key_exists("matchAi", $context) ? $context["matchAi"] : (function () { throw new RuntimeError('Variable "matchAi" does not exist.', 229, $this->source); })()), "findings", [], "any", false, false, false, 229))) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchAi"]) || array_key_exists("matchAi", $context) ? $context["matchAi"] : (function () { throw new RuntimeError('Variable "matchAi" does not exist.', 229, $this->source); })()), "findings", [], "any", false, false, false, 229)) > 0))) {
                    // line 230
                    yield "                    <div class=\"listMeta\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchAi"]) || array_key_exists("matchAi", $context) ? $context["matchAi"] : (function () { throw new RuntimeError('Variable "matchAi" does not exist.', 230, $this->source); })()), "findings", [], "any", false, false, false, 230)), "html", null, true);
                    yield "</div>
                  ";
                }
                // line 232
                yield "                ";
            } else {
                // line 233
                yield "                  <span class=\"listMeta\">-</span>
                ";
            }
            // line 235
            yield "              </td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_match_detail", ["id" => (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 238, $this->source); })())]), "html", null, true);
            yield "\">Voir</a>
                  <a class=\"btn btnTiny\" href=\"";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches", ["edit" => (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 239, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_match_delete", ["id" => (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 240, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce match ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_match_" . (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 241, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 247
        if (!$context['_iterated']) {
            // line 248
            yield "            <tr>
              <td colspan=\"8\" class=\"listMeta\">Aucun match trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
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
        return array (  672 => 252,  663 => 248,  661 => 247,  650 => 241,  646 => 240,  642 => 239,  638 => 238,  633 => 235,  629 => 233,  626 => 232,  620 => 230,  618 => 229,  614 => 228,  605 => 226,  602 => 225,  600 => 224,  593 => 222,  589 => 221,  586 => 220,  583 => 219,  569 => 218,  555 => 217,  552 => 216,  534 => 215,  530 => 213,  528 => 212,  519 => 210,  514 => 208,  510 => 207,  505 => 205,  502 => 204,  500 => 202,  498 => 200,  495 => 199,  492 => 198,  489 => 197,  486 => 196,  483 => 195,  478 => 194,  457 => 176,  447 => 169,  440 => 164,  427 => 162,  423 => 161,  414 => 155,  406 => 150,  398 => 145,  391 => 140,  378 => 138,  374 => 137,  365 => 130,  352 => 128,  348 => 127,  339 => 120,  328 => 117,  321 => 116,  317 => 115,  307 => 108,  301 => 105,  295 => 102,  292 => 101,  286 => 99,  284 => 98,  280 => 97,  276 => 95,  269 => 90,  255 => 84,  246 => 80,  241 => 78,  238 => 77,  235 => 76,  232 => 75,  228 => 74,  212 => 60,  210 => 59,  207 => 58,  205 => 57,  201 => 56,  197 => 55,  193 => 53,  185 => 51,  183 => 50,  179 => 49,  174 => 46,  168 => 45,  157 => 42,  153 => 41,  150 => 40,  145 => 39,  141 => 38,  135 => 34,  133 => 33,  132 => 32,  131 => 31,  130 => 30,  129 => 29,  128 => 28,  127 => 27,  126 => 26,  125 => 24,  122 => 23,  120 => 22,  119 => 21,  118 => 20,  117 => 19,  116 => 18,  115 => 17,  114 => 16,  113 => 15,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_ai_ollama_test') }}\">Test Ollama</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_matches_export', {
        format: 'pdf',
        q: filters.q|default(''),
        tournament: filters.tournament|default(''),
        status: filters.status|default(''),
        game: filters.game|default(''),
        date_from: filters.date_from|default(''),
        date_to: filters.date_to|default(''),
        team: filters.team|default(''),
        sort: filters.sort|default('latest')
      }) }}\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_matches_export', {
        format: 'excel',
        q: filters.q|default(''),
        tournament: filters.tournament|default(''),
        status: filters.status|default(''),
        game: filters.game|default(''),
        date_from: filters.date_from|default(''),
        date_to: filters.date_to|default(''),
        team: filters.team|default(''),
        sort: filters.sort|default('latest')
      }) }}\">Exporter Excel</a>
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
            <th>IA</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for match in matches %}
            {% set matchId = match.matchId ?? 0 %}
            {% set teams = matchTeamsByMatchId[matchId]|default([]) %}
            {% set matchAi = matchAiLocalByMatchId[matchId]|default(null) %}
            {% set aiRisk = matchAi.anomalyRisk|default('LOW') %}
            {% set aiBadge = aiRisk == 'HIGH' ? 'badge--danger' : (aiRisk == 'MEDIUM' ? 'badge--warning' : 'badge--success') %}
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
                {% if matchAi %}
                  <div class=\"listMeta\">
                    <span class=\"badge {{ aiBadge }}\">{{ matchAi.integrityScore|default(0) }}/100 {{ aiRisk }}</span>
                  </div>
                  <div class=\"listMeta\">{{ matchAi.issuesCount|default(0) }} issue(s)</div>
                  {% if matchAi.findings is defined and matchAi.findings is iterable and (matchAi.findings|length) > 0 %}
                    <div class=\"listMeta\">{{ matchAi.findings|first }}</div>
                  {% endif %}
                {% else %}
                  <span class=\"listMeta\">-</span>
                {% endif %}
              </td>
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
              <td colspan=\"8\" class=\"listMeta\">Aucun match trouve.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/matches.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pages\\matches.html.twig");
    }
}
