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
class __TwigTemplate_1ad9fef0d5fad7f2d45a6ff7d6ba16a4 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches_export", ["format" => "pdf", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 14
($context["filters"] ?? null), "q", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 14, $this->source); })()), "q", [], "any", false, false, false, 14), "")) : ("")), "tournament" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["filters"] ?? null), "tournament", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 15, $this->source); })()), "tournament", [], "any", false, false, false, 15), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 16
($context["filters"] ?? null), "status", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 16, $this->source); })()), "status", [], "any", false, false, false, 16), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 17
($context["filters"] ?? null), "game", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 17, $this->source); })()), "game", [], "any", false, false, false, 17), "")) : ("")), "date_from" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["filters"] ?? null), "date_from", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 18, $this->source); })()), "date_from", [], "any", false, false, false, 18), "")) : ("")), "date_to" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["filters"] ?? null), "date_to", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 19, $this->source); })()), "date_to", [], "any", false, false, false, 19), "")) : ("")), "team" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 20
($context["filters"] ?? null), "team", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 20, $this->source); })()), "team", [], "any", false, false, false, 20), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 21
($context["filters"] ?? null), "sort", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 21, $this->source); })()), "sort", [], "any", false, false, false, 21), "latest")) : ("latest"))]), "html", null, true);
        // line 22
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches_export", ["format" => "excel", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["filters"] ?? null), "q", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), "q", [], "any", false, false, false, 25), "")) : ("")), "tournament" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 26
($context["filters"] ?? null), "tournament", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), "tournament", [], "any", false, false, false, 26), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["filters"] ?? null), "status", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })()), "status", [], "any", false, false, false, 27), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["filters"] ?? null), "game", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 28, $this->source); })()), "game", [], "any", false, false, false, 28), "")) : ("")), "date_from" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["filters"] ?? null), "date_from", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "date_from", [], "any", false, false, false, 29), "")) : ("")), "date_to" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["filters"] ?? null), "date_to", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 30, $this->source); })()), "date_to", [], "any", false, false, false, 30), "")) : ("")), "team" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["filters"] ?? null), "team", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 31, $this->source); })()), "team", [], "any", false, false, false, 31), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["filters"] ?? null), "sort", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 32, $this->source); })()), "sort", [], "any", false, false, false, 32), "latest")) : ("latest"))]), "html", null, true);
        // line 33
        yield "\">Exporter Excel</a>
    </div>
  </div>

  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 38
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 39
                yield "      <div class=\"listItem\">
        <span>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 41
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
            // line 44
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">";
        // line 48
        yield (((($tmp = (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("MODIFIER MATCH #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 48, $this->source); })()), "matchId", [], "any", false, false, false, 48)), "html", null, true)) : ("CREER MATCH"));
        yield "</h3>
      ";
        // line 49
        if ((($tmp = (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "        <span class=\"listMeta\">Tournoi cible: #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 50, $this->source); })()), "tournamentId", [], "any", false, false, false, 50), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedTournament"]) || array_key_exists("selectedTournament", $context) ? $context["selectedTournament"] : (function () { throw new RuntimeError('Variable "selectedTournament" does not exist.', 50, $this->source); })()), "title", [], "any", false, false, false, 50), "html", null, true);
            yield "</span>
      ";
        }
        // line 52
        yield "    </div>

    ";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 54, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
      ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 55, $this->source); })()), 'errors');
        yield "
      ";
        // line 56
        yield from $this->load("shared/_organizer_match_form_fields.html.twig", 56)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 56, $this->source); })())]));
        // line 57
        yield "
      ";
        // line 58
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["participantRows"]) || array_key_exists("participantRows", $context) ? $context["participantRows"] : (function () { throw new RuntimeError('Variable "participantRows" does not exist.', 58, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
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
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participantRows"]) || array_key_exists("participantRows", $context) ? $context["participantRows"] : (function () { throw new RuntimeError('Variable "participantRows" does not exist.', 73, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 74
                yield "                  ";
                $context["team"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 74);
                // line 75
                yield "                  ";
                $context["teamId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", true, true, false, 75) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 75, $this->source); })()), "teamId", [], "any", false, false, false, 75)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 75, $this->source); })()), "teamId", [], "any", false, false, false, 75)) : (0));
                // line 76
                yield "                  <tr>
                    <td>";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77), "html", null, true);
                yield "</td>
                    <td>
                      <input class=\"input\" type=\"number\" min=\"0\" name=\"team_scores[";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 79, $this->source); })()), "html", null, true);
                yield "]\" value=\"";
                yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["row"], "score", [], "any", false, false, false, 79))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "score", [], "any", false, false, false, 79), "html", null, true)) : (""));
                yield "\" />
                    </td>
                    <td>
                      <label>
                        <input type=\"checkbox\" name=\"team_winners[]\" value=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 83, $this->source); })()), "html", null, true);
                yield "\" ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "isWinner", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
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
            // line 89
            yield "              </tbody>
            </table>
          </div>
        </div>
      ";
        }
        // line 94
        yield "
      <div class=\"formActions\" style=\"margin-top: 12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 96
        yield (((($tmp = (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 96, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer match"));
        yield "</button>
        ";
        // line 97
        if ((($tmp = (isset($context["editingMatch"]) || array_key_exists("editingMatch", $context) ? $context["editingMatch"] : (function () { throw new RuntimeError('Variable "editingMatch" does not exist.', 97, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "          <a class=\"btn btnGhost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
            yield "\">Annuler edition</a>
        ";
        }
        // line 100
        yield "      </div>
    ";
        // line 101
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["matchForm"]) || array_key_exists("matchForm", $context) ? $context["matchForm"] : (function () { throw new RuntimeError('Variable "matchForm" does not exist.', 101, $this->source); })()), 'form_end');
        yield "
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 107, $this->source); })()), "q", [], "any", false, false, false, 107), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Round, tournoi, jeu...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Tournoi</label>
      <select name=\"tournament\">
        <option value=\"\">ALL</option>
        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableTournaments"]) || array_key_exists("availableTournaments", $context) ? $context["availableTournaments"] : (function () { throw new RuntimeError('Variable "availableTournaments" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 115
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 115), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 115, $this->source); })()), "tournament", [], "any", false, false, false, 115)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 115, $this->source); })()), "tournament", [], "any", false, false, false, 115) == CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 115)))) ? ("selected") : (""));
            yield ">
            #";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "tournamentId", [], "any", false, false, false, 116), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "title", [], "any", false, false, false, 116), "html", null, true);
            yield "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tournament'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Statut</label>
      <select name=\"status\">
        <option value=\"\">ALL</option>
        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusOptions"]) || array_key_exists("statusOptions", $context) ? $context["statusOptions"] : (function () { throw new RuntimeError('Variable "statusOptions" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statusValue"]) {
            // line 127
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 127, $this->source); })()), "status", [], "any", false, false, false, 127) == $context["statusValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statusValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Jeu</label>
      <select name=\"game\">
        <option value=\"\">ALL</option>
        ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableGames"]) || array_key_exists("availableGames", $context) ? $context["availableGames"] : (function () { throw new RuntimeError('Variable "availableGames" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 137
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 137), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 137, $this->source); })()), "game", [], "any", false, false, false, 137)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 137, $this->source); })()), "game", [], "any", false, false, false, 137) == CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 137)))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 137), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Date debut</label>
      <input type=\"date\" name=\"date_from\" value=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 144, $this->source); })()), "date_from", [], "any", false, false, false, 144), "")) : ("")), "html", null, true);
        yield "\" />
    </div>

    <div class=\"filterGroup\">
      <label>Date fin</label>
      <input type=\"date\" name=\"date_to\" value=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 149)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 149, $this->source); })()), "date_to", [], "any", false, false, false, 149), "")) : ("")), "html", null, true);
        yield "\" />
    </div>

    <div class=\"filterGroup\">
      <label>Equipe</label>
      <input type=\"search\" name=\"team\" value=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "team", [], "any", true, true, false, 154)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 154, $this->source); })()), "team", [], "any", false, false, false, 154), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Nom equipe\" />
    </div>

    <div class=\"filterGroup\">
      <label>Tri</label>
      <select name=\"sort\">
        ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new RuntimeError('Variable "sortOptions" does not exist.', 160, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortValue"]) {
            // line 161
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sortValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 161, $this->source); })()), "sort", [], "any", false, false, false, 161) == $context["sortValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["sortValue"]), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sortValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE MATCHS</h3>
      <span class=\"listMeta\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("counter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 175, $this->source); })()), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 175, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 175, $this->source); })())))), "html", null, true);
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
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 192, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 193
            yield "            ";
            $context["matchId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", true, true, false, 193) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 193)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchId", [], "any", false, false, false, 193)) : (0));
            // line 194
            yield "            ";
            $context["teams"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchTeamsByMatchId"] ?? null), (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 194, $this->source); })()), [], "array", true, true, false, 194)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchTeamsByMatchId"]) || array_key_exists("matchTeamsByMatchId", $context) ? $context["matchTeamsByMatchId"] : (function () { throw new RuntimeError('Variable "matchTeamsByMatchId" does not exist.', 194, $this->source); })()), (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 194, $this->source); })()), [], "array", false, false, false, 194), [])) : ([]));
            // line 195
            yield "            ";
            $context["statusClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 195) == "ONGOING")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 197
$context["match"], "status", [], "any", false, false, false, 197) == "SCHEDULED")) ? ("badge--info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 197) == "FINISHED")) ? ("") : ("badge--danger"))))));
            // line 199
            yield "            <tr>
              <td>#";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 200, $this->source); })()), "html", null, true);
            yield "</td>
              <td>
                ";
            // line 202
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 202), "title", [], "any", false, false, false, 202), "html", null, true)) : ("-"));
            yield "
                <div class=\"listMeta\">";
            // line 203
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 203) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 203), "gameId", [], "any", false, false, false, 203))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "tournamentId", [], "any", false, false, false, 203), "gameId", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true)) : ("-"));
            yield "</div>
              </td>
              <td>";
            // line 205
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 205)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "roundName", [], "any", false, false, false, 205), "html", null, true)) : ("-"));
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " · BO";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "bestOf", [], "any", false, false, false, 205), "html", null, true);
            }
            yield "</td>
              <td>
                ";
            // line 207
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 207, $this->source); })()))) {
                // line 208
                yield "                  -
                ";
            } else {
                // line 210
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 210, $this->source); })()));
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
                    // line 211
                    yield "                    ";
                    $context["relationTeam"] = CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "teamId", [], "any", false, false, false, 211);
                    // line 212
                    yield "                    ";
                    yield (((($tmp = (isset($context["relationTeam"]) || array_key_exists("relationTeam", $context) ? $context["relationTeam"] : (function () { throw new RuntimeError('Variable "relationTeam" does not exist.', 212, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["relationTeam"]) || array_key_exists("relationTeam", $context) ? $context["relationTeam"] : (function () { throw new RuntimeError('Variable "relationTeam" does not exist.', 212, $this->source); })()), "name", [], "any", false, false, false, 212), "html", null, true)) : ("-"));
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 212))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 212), "html", null, true);
                        yield ")";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "isWinner", [], "any", false, false, false, 212) === true)) {
                        yield " W";
                    }
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield ", ";
                    }
                    // line 213
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
                // line 214
                yield "                ";
            }
            // line 215
            yield "              </td>
              <td>";
            // line 216
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 216)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scheduledAt", [], "any", false, false, false, 216), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td><span class=\"badge ";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 217, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 217), "html", null, true);
            yield "</span></td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_match_detail", ["id" => (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 220, $this->source); })())]), "html", null, true);
            yield "\">Voir</a>
                  <a class=\"btn btnTiny\" href=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches", ["edit" => (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 221, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_match_delete", ["id" => (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 222, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce match ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_match_" . (isset($context["matchId"]) || array_key_exists("matchId", $context) ? $context["matchId"] : (function () { throw new RuntimeError('Variable "matchId" does not exist.', 223, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 229
        if (!$context['_iterated']) {
            // line 230
            yield "            <tr>
              <td colspan=\"7\" class=\"listMeta\">Aucun match trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
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
        return array (  621 => 234,  612 => 230,  610 => 229,  599 => 223,  595 => 222,  591 => 221,  587 => 220,  579 => 217,  575 => 216,  572 => 215,  569 => 214,  555 => 213,  541 => 212,  538 => 211,  520 => 210,  516 => 208,  514 => 207,  505 => 205,  500 => 203,  496 => 202,  491 => 200,  488 => 199,  486 => 197,  484 => 195,  481 => 194,  478 => 193,  473 => 192,  453 => 175,  443 => 168,  436 => 163,  423 => 161,  419 => 160,  410 => 154,  402 => 149,  394 => 144,  387 => 139,  374 => 137,  370 => 136,  361 => 129,  348 => 127,  344 => 126,  335 => 119,  324 => 116,  317 => 115,  313 => 114,  303 => 107,  297 => 104,  291 => 101,  288 => 100,  282 => 98,  280 => 97,  276 => 96,  272 => 94,  265 => 89,  251 => 83,  242 => 79,  237 => 77,  234 => 76,  231 => 75,  228 => 74,  224 => 73,  208 => 59,  206 => 58,  203 => 57,  201 => 56,  197 => 55,  193 => 54,  189 => 52,  181 => 50,  179 => 49,  175 => 48,  170 => 45,  164 => 44,  153 => 41,  149 => 40,  146 => 39,  141 => 38,  137 => 37,  131 => 33,  129 => 32,  128 => 31,  127 => 30,  126 => 29,  125 => 28,  124 => 27,  123 => 26,  122 => 25,  121 => 23,  118 => 22,  116 => 21,  115 => 20,  114 => 19,  113 => 18,  112 => 17,  111 => 16,  110 => 15,  109 => 14,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
