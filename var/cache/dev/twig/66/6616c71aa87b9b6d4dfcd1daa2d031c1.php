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

/* front/pages/captain-requests.html.twig */
class __TwigTemplate_35eec81d7159a72191730b5eb0e16bf3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-requests.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-requests.html.twig"));

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

        yield "PULSE - Demandes equipe";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Demandes", "hero_sub" => "Validation des demandes de rejoindre equipe.", "breadcrumb_current" => "Demandes"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "requests", "active_team" =>         // line 18
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 18, $this->source); })())]));
        // line 20
        yield "
        <div>
          ";
        // line 22
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 23
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 23, $this->source); })()), "active_team" =>         // line 24
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 24, $this->source); })()), "selector_route" => "front_captain_requests"]));
        // line 27
        yield "
          <form class=\"panel\" method=\"get\" action=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_requests");
        yield "\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 30, $this->source); })()), "teamId", [], "any", false, false, false, 30), "html", null, true);
        yield "\">
              <div class=\"select\">
                <select name=\"status\">
                  <option value=\"\">Tous les statuts</option>
                  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["status_options"]) || array_key_exists("status_options", $context) ? $context["status_options"] : (function () { throw new RuntimeError('Variable "status_options" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 35
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["status_filter"]) || array_key_exists("status_filter", $context) ? $context["status_filter"] : (function () { throw new RuntimeError('Variable "status_filter" does not exist.', 35, $this->source); })()) == $context["status"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                </select>
              </div>
              <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
            </div>
          </form>

          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">DEMANDES DE REJOINDRE</h3>
                <div class=\"panel__desc\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["join_requests"]) || array_key_exists("join_requests", $context) ? $context["join_requests"] : (function () { throw new RuntimeError('Variable "join_requests" does not exist.', 47, $this->source); })())), "html", null, true);
        yield " demande(s) sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
        yield "</div>
              </div>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Date</th>
                    <th>Note</th>
                    <th>Statut</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["join_requests"]) || array_key_exists("join_requests", $context) ? $context["join_requests"] : (function () { throw new RuntimeError('Variable "join_requests" does not exist.', 63, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["join_request"]) {
            // line 64
            yield "                    ";
            $context["applicant"] = CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "userId", [], "any", false, false, false, 64);
            // line 65
            yield "                    <tr>
                      <td>";
            // line 66
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["applicant"]) || array_key_exists("applicant", $context) ? $context["applicant"] : (function () { throw new RuntimeError('Variable "applicant" does not exist.', 66, $this->source); })()), "displayName", [], "any", false, false, false, 66)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["applicant"]) || array_key_exists("applicant", $context) ? $context["applicant"] : (function () { throw new RuntimeError('Variable "applicant" does not exist.', 66, $this->source); })()), "displayName", [], "any", false, false, false, 66), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["applicant"]) || array_key_exists("applicant", $context) ? $context["applicant"] : (function () { throw new RuntimeError('Variable "applicant" does not exist.', 66, $this->source); })()), "username", [], "any", false, false, false, 66), "html", null, true)));
            yield "</td>
                      <td>";
            // line 67
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "createdAt", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "createdAt", [], "any", false, false, false, 67), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td>";
            // line 68
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "note", [], "any", false, false, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "note", [], "any", false, false, false, 68), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        ";
            // line 70
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "status", [], "any", false, false, false, 70)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "status", [], "any", false, false, false, 70)) : ("PENDING"));
            // line 71
            yield "                        <span class=\"badge ";
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 71, $this->source); })()) == "ACCEPTED")) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 71, $this->source); })()) == "REFUSED")) ? ("badge--danger") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 71, $this->source); })()) == "PENDING")) ? ("badge--info") : (""))))));
            yield "\">
                          ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "
                        </span>
                      </td>
                      <td>
                        ";
            // line 76
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "status", [], "any", false, false, false, 76) == "PENDING")) {
                // line 77
                yield "                          <div class=\"postCard__actions\">
                            <form method=\"post\" action=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_requests_respond", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "requestId", [], "any", false, false, false, 78)]), "html", null, true);
                yield "\">
                              <input type=\"hidden\" name=\"_token\" value=\"";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("captain_join_request_" . CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "requestId", [], "any", false, false, false, 79))), "html", null, true);
                yield "\">
                              <input type=\"hidden\" name=\"team_id\" value=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 80, $this->source); })()), "teamId", [], "any", false, false, false, 80), "html", null, true);
                yield "\">
                              <input type=\"hidden\" name=\"decision\" value=\"ACCEPTED\">
                              <button class=\"btn btn--primary\" type=\"submit\">Accepter</button>
                            </form>
                            <form method=\"post\" action=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_requests_respond", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "requestId", [], "any", false, false, false, 84)]), "html", null, true);
                yield "\">
                              <input type=\"hidden\" name=\"_token\" value=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("captain_join_request_" . CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "requestId", [], "any", false, false, false, 85))), "html", null, true);
                yield "\">
                              <input type=\"hidden\" name=\"team_id\" value=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 86, $this->source); })()), "teamId", [], "any", false, false, false, 86), "html", null, true);
                yield "\">
                              <input type=\"hidden\" name=\"decision\" value=\"REFUSED\">
                              <button class=\"btn btn--ghost\" type=\"submit\">Refuser</button>
                            </form>
                          </div>
                        ";
            } else {
                // line 92
                yield "                          -
                        ";
            }
            // line 94
            yield "                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 96
        if (!$context['_iterated']) {
            // line 97
            yield "                    <tr>
                      <td colspan=\"5\">Aucune demande disponible.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['join_request'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 108
        yield from $this->load("front/partials/_footer.html.twig", 108)->unwrap()->yield($context);
        // line 109
        yield "    </section>
  </main>

  ";
        // line 112
        yield from $this->load("front/partials/_auth_modal.html.twig", 112)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/captain-requests.html.twig";
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
        return array (  297 => 112,  292 => 109,  290 => 108,  281 => 101,  272 => 97,  270 => 96,  264 => 94,  260 => 92,  251 => 86,  247 => 85,  243 => 84,  236 => 80,  232 => 79,  228 => 78,  225 => 77,  223 => 76,  216 => 72,  211 => 71,  209 => 70,  204 => 68,  200 => 67,  196 => 66,  193 => 65,  190 => 64,  185 => 63,  164 => 47,  152 => 37,  139 => 35,  135 => 34,  128 => 30,  123 => 28,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Demandes equipe{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'CAPITAINE',
    hero_title: 'Demandes',
    hero_sub: 'Validation des demandes de rejoindre equipe.',
    breadcrumb_current: 'Demandes'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_captain_side_nav.html.twig' with {
          active: 'requests',
          active_team: active_team
        } %}

        <div>
          {% include 'front/partials/_captain_team_selector.html.twig' with {
            captain_teams: captain_teams,
            active_team: active_team,
            selector_route: 'front_captain_requests'
          } %}

          <form class=\"panel\" method=\"get\" action=\"{{ path('front_captain_requests') }}\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"{{ active_team.teamId }}\">
              <div class=\"select\">
                <select name=\"status\">
                  <option value=\"\">Tous les statuts</option>
                  {% for status in status_options %}
                    <option value=\"{{ status }}\" {{ status_filter == status ? 'selected' : '' }}>{{ status }}</option>
                  {% endfor %}
                </select>
              </div>
              <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
            </div>
          </form>

          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">DEMANDES DE REJOINDRE</h3>
                <div class=\"panel__desc\">{{ join_requests|length }} demande(s) sur {{ active_team.name }}</div>
              </div>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Date</th>
                    <th>Note</th>
                    <th>Statut</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {% for join_request in join_requests %}
                    {% set applicant = join_request.userId %}
                    <tr>
                      <td>{{ applicant.displayName ?: applicant.username }}</td>
                      <td>{{ join_request.createdAt ? join_request.createdAt|date('d/m/Y H:i') : '-' }}</td>
                      <td>{{ join_request.note ?: '-' }}</td>
                      <td>
                        {% set status = join_request.status ?: 'PENDING' %}
                        <span class=\"badge {{ status == 'ACCEPTED' ? 'badge--success' : (status == 'REFUSED' ? 'badge--danger' : (status == 'PENDING' ? 'badge--info' : '')) }}\">
                          {{ status }}
                        </span>
                      </td>
                      <td>
                        {% if join_request.status == 'PENDING' %}
                          <div class=\"postCard__actions\">
                            <form method=\"post\" action=\"{{ path('front_captain_requests_respond', {id: join_request.requestId}) }}\">
                              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_join_request_' ~ join_request.requestId) }}\">
                              <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
                              <input type=\"hidden\" name=\"decision\" value=\"ACCEPTED\">
                              <button class=\"btn btn--primary\" type=\"submit\">Accepter</button>
                            </form>
                            <form method=\"post\" action=\"{{ path('front_captain_requests_respond', {id: join_request.requestId}) }}\">
                              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_join_request_' ~ join_request.requestId) }}\">
                              <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
                              <input type=\"hidden\" name=\"decision\" value=\"REFUSED\">
                              <button class=\"btn btn--ghost\" type=\"submit\">Refuser</button>
                            </form>
                          </div>
                        {% else %}
                          -
                        {% endif %}
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"5\">Aucune demande disponible.</td>
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

", "front/pages/captain-requests.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\captain-requests.html.twig");
    }
}
