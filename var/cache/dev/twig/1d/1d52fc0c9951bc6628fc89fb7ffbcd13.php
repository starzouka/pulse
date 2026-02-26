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

/* admin/pages/match-detail.html.twig */
class __TwigTemplate_f39f420664a9933b16a403a7e27ca5c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/match-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/match-detail.html.twig"));

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

        yield "PULSE - Detail match";
        
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
      <h2>Detail match #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 8, $this->source); })()), "matchId", [], "any", false, false, false, 8), "html", null, true);
        yield "</h2>
      <div class=\"pageSub\">Lecture detaillee + lien vers edition.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnPrimary\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches", ["edit" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 12, $this->source); })()), "matchId", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\">Modifier</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">Retour liste</a>
    </div>
  </div>

  <div class=\"tabs\" data-tabs=\"match\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
    <button class=\"tab\" data-tab=\"teams\">Participants</button>
  </div>

  <div class=\"tabPanels\" data-panels=\"match\">
    <div class=\"tabPanel isActive\" data-panel=\"info\">
      <section class=\"panel\">
        <div class=\"list\">
          <div class=\"listItem\"><span>match_id</span><span class=\"listMeta\">#";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 26, $this->source); })()), "matchId", [], "any", false, false, false, 26), "html", null, true);
        yield "</span></div>
          <div class=\"listItem\"><span>tournament</span><span class=\"listMeta\">";
        // line 27
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 27, $this->source); })()), "tournamentId", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 27, $this->source); })()), "tournamentId", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>game</span><span class=\"listMeta\">";
        // line 28
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 28, $this->source); })()), "tournamentId", [], "any", false, false, false, 28) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 28, $this->source); })()), "tournamentId", [], "any", false, false, false, 28), "gameId", [], "any", false, false, false, 28))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 28, $this->source); })()), "tournamentId", [], "any", false, false, false, 28), "gameId", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>organizer</span><span class=\"listMeta\">";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 29, $this->source); })()), "tournamentId", [], "any", false, false, false, 29) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 29, $this->source); })()), "tournamentId", [], "any", false, false, false, 29), "organizerUserId", [], "any", false, false, false, 29))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 29, $this->source); })()), "tournamentId", [], "any", false, false, false, 29), "organizerUserId", [], "any", false, false, false, 29), "username", [], "any", false, false, false, 29), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>round_name</span><span class=\"listMeta\">";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 30, $this->source); })()), "roundName", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 30, $this->source); })()), "roundName", [], "any", false, false, false, 30), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>best_of</span><span class=\"listMeta\">";
        // line 31
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 31, $this->source); })()), "bestOf", [], "any", false, false, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 31, $this->source); })()), "bestOf", [], "any", false, false, false, 31), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>scheduled_at</span><span class=\"listMeta\">";
        // line 32
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 32, $this->source); })()), "scheduledAt", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 32, $this->source); })()), "scheduledAt", [], "any", false, false, false, 32), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>status</span><span class=\"listMeta\"><span class=\"badge\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33), "html", null, true);
        yield "</span></span></div>
          <div class=\"listItem\"><span>created_at</span><span class=\"listMeta\">";
        // line 34
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 34, $this->source); })()), "createdAt", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 34, $this->source); })()), "createdAt", [], "any", false, false, false, 34), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>updated_at</span><span class=\"listMeta\">";
        // line 35
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 35, $this->source); })()), "updatedAt", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 35, $this->source); })()), "updatedAt", [], "any", false, false, false, 35), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</span></div>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"teams\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>Team</th>
                <th>Score</th>
                <th>Winner</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matchTeams"]) || array_key_exists("matchTeams", $context) ? $context["matchTeams"] : (function () { throw new RuntimeError('Variable "matchTeams" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["relation"]) {
            // line 53
            yield "                ";
            $context["team"] = CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "teamId", [], "any", false, false, false, 53);
            // line 54
            yield "                <tr>
                  <td>";
            // line 55
            yield (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 55, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 56
            yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 56))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "score", [], "any", false, false, false, 56), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 57
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["relation"], "isWinner", [], "any", false, false, false, 57) === true)) ? ("Oui") : ("Non"));
            yield "</td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 59
        if (!$context['_iterated']) {
            // line 60
            yield "                <tr>
                  <td colspan=\"3\" class=\"listMeta\">Aucune equipe participante.</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['relation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>
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
        return "admin/pages/match-detail.html.twig";
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
        return array (  224 => 64,  215 => 60,  213 => 59,  206 => 57,  202 => 56,  198 => 55,  195 => 54,  192 => 53,  187 => 52,  167 => 35,  163 => 34,  159 => 33,  155 => 32,  151 => 31,  147 => 30,  143 => 29,  139 => 28,  135 => 27,  131 => 26,  115 => 13,  111 => 12,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Detail match{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Detail match #{{ match.matchId }}</h2>
      <div class=\"pageSub\">Lecture detaillee + lien vers edition.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnPrimary\" href=\"{{ path('admin_matches', {edit: match.matchId}) }}\">Modifier</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_matches') }}\">Retour liste</a>
    </div>
  </div>

  <div class=\"tabs\" data-tabs=\"match\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
    <button class=\"tab\" data-tab=\"teams\">Participants</button>
  </div>

  <div class=\"tabPanels\" data-panels=\"match\">
    <div class=\"tabPanel isActive\" data-panel=\"info\">
      <section class=\"panel\">
        <div class=\"list\">
          <div class=\"listItem\"><span>match_id</span><span class=\"listMeta\">#{{ match.matchId }}</span></div>
          <div class=\"listItem\"><span>tournament</span><span class=\"listMeta\">{{ match.tournamentId ? match.tournamentId.title : '-' }}</span></div>
          <div class=\"listItem\"><span>game</span><span class=\"listMeta\">{{ match.tournamentId and match.tournamentId.gameId ? match.tournamentId.gameId.name : '-' }}</span></div>
          <div class=\"listItem\"><span>organizer</span><span class=\"listMeta\">{{ match.tournamentId and match.tournamentId.organizerUserId ? match.tournamentId.organizerUserId.username : '-' }}</span></div>
          <div class=\"listItem\"><span>round_name</span><span class=\"listMeta\">{{ match.roundName ?: '-' }}</span></div>
          <div class=\"listItem\"><span>best_of</span><span class=\"listMeta\">{{ match.bestOf ?: '-' }}</span></div>
          <div class=\"listItem\"><span>scheduled_at</span><span class=\"listMeta\">{{ match.scheduledAt ? match.scheduledAt|date('d/m/Y H:i') : '-' }}</span></div>
          <div class=\"listItem\"><span>status</span><span class=\"listMeta\"><span class=\"badge\">{{ match.status }}</span></span></div>
          <div class=\"listItem\"><span>created_at</span><span class=\"listMeta\">{{ match.createdAt ? match.createdAt|date('d/m/Y H:i') : '-' }}</span></div>
          <div class=\"listItem\"><span>updated_at</span><span class=\"listMeta\">{{ match.updatedAt ? match.updatedAt|date('d/m/Y H:i') : '-' }}</span></div>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"teams\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>Team</th>
                <th>Score</th>
                <th>Winner</th>
              </tr>
            </thead>
            <tbody>
              {% for relation in matchTeams %}
                {% set team = relation.teamId %}
                <tr>
                  <td>{{ team ? team.name : '-' }}</td>
                  <td>{{ relation.score is not null ? relation.score : '-' }}</td>
                  <td>{{ relation.isWinner is same as(true) ? 'Oui' : 'Non' }}</td>
                </tr>
              {% else %}
                <tr>
                  <td colspan=\"3\" class=\"listMeta\">Aucune equipe participante.</td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>
{% endblock %}

", "admin/pages/match-detail.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\admin\\pages\\match-detail.html.twig");
    }
}
