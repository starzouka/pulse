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

/* front/pages/captain-members.html.twig */
class __TwigTemplate_1170cbcb9ae36fd7def6aba328434fc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-members.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-members.html.twig"));

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

        yield "PULSE - Membres equipe";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Membres", "hero_sub" => "Gestion des membres de l'equipe active.", "breadcrumb_current" => "Membres"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "members", "active_team" =>         // line 18
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 18, $this->source); })())]));
        // line 20
        yield "
        <div>
          ";
        // line 22
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 23
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 23, $this->source); })()), "active_team" =>         // line 24
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 24, $this->source); })()), "selector_route" => "front_captain_members"]));
        // line 27
        yield "
          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">MEMBRES ACTIFS</h3>
                <div class=\"panel__desc\">
                  ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["active_members"]) || array_key_exists("active_members", $context) ? $context["active_members"] : (function () { throw new RuntimeError('Variable "active_members" does not exist.', 33, $this->source); })())), "html", null, true);
        yield " membre(s) actif(s)
                </div>
              </div>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Role</th>
                    <th>Date adhesion</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["active_members"]) || array_key_exists("active_members", $context) ? $context["active_members"] : (function () { throw new RuntimeError('Variable "active_members" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membership"]) {
            // line 50
            yield "                    ";
            $context["member"] = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "userId", [], "any", false, false, false, 50);
            // line 51
            yield "                    <tr>
                      <td>
                        ";
            // line 53
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 53, $this->source); })()), "displayName", [], "any", false, false, false, 53)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 53, $this->source); })()), "displayName", [], "any", false, false, false, 53), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 53, $this->source); })()), "username", [], "any", false, false, false, 53), "html", null, true)));
            yield "
                        <div class=\"muted\">@";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 54, $this->source); })()), "username", [], "any", false, false, false, 54), "html", null, true);
            yield "</div>
                      </td>
                      <td>
                        ";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 57, $this->source); })()), "captainUserId", [], "any", false, false, false, 57) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 57, $this->source); })()), "userId", [], "any", false, false, false, 57) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 57, $this->source); })()), "captainUserId", [], "any", false, false, false, 57), "userId", [], "any", false, false, false, 57)))) {
                // line 58
                yield "                          <span class=\"badge badge--info\">CAPITAINE</span>
                        ";
            } else {
                // line 60
                yield "                          <span class=\"badge\">MEMBRE</span>
                        ";
            }
            // line 62
            yield "                      </td>
                      <td>";
            // line 63
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 63), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 65, $this->source); })()), "captainUserId", [], "any", false, false, false, 65) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 65, $this->source); })()), "userId", [], "any", false, false, false, 65) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 65, $this->source); })()), "captainUserId", [], "any", false, false, false, 65), "userId", [], "any", false, false, false, 65)))) {
                // line 66
                yield "                          -
                        ";
            } else {
                // line 68
                yield "                          <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members_remove", ["teamId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 68, $this->source); })()), "teamId", [], "any", false, false, false, 68), "userId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 68, $this->source); })()), "userId", [], "any", false, false, false, 68)]), "html", null, true);
                yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("captain_member_remove_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 69, $this->source); })()), "teamId", [], "any", false, false, false, 69)) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 69, $this->source); })()), "userId", [], "any", false, false, false, 69))), "html", null, true);
                yield "\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Retirer</button>
                          </form>
                        ";
            }
            // line 73
            yield "                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 75
        if (!$context['_iterated']) {
            // line 76
            yield "                    <tr>
                      <td colspan=\"4\">Aucun membre actif.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membership'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "                </tbody>
              </table>
            </div>
          </section>

          <section class=\"panel\">
            <h3 class=\"panel__title\">ANCIENS MEMBRES</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Date sortie</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inactive_members"]) || array_key_exists("inactive_members", $context) ? $context["inactive_members"] : (function () { throw new RuntimeError('Variable "inactive_members" does not exist.', 96, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membership"]) {
            // line 97
            yield "                    ";
            $context["member"] = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "userId", [], "any", false, false, false, 97);
            // line 98
            yield "                    <tr>
                      <td>";
            // line 99
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 99, $this->source); })()), "displayName", [], "any", false, false, false, 99)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 99, $this->source); })()), "displayName", [], "any", false, false, false, 99), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 99, $this->source); })()), "username", [], "any", false, false, false, 99), "html", null, true)));
            yield "</td>
                      <td>";
            // line 100
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "leftAt", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "leftAt", [], "any", false, false, false, 100), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 102
        if (!$context['_iterated']) {
            // line 103
            yield "                    <tr>
                      <td colspan=\"2\">Aucun historique de sortie.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membership'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 114
        yield from $this->load("front/partials/_footer.html.twig", 114)->unwrap()->yield($context);
        // line 115
        yield "    </section>
  </main>

  ";
        // line 118
        yield from $this->load("front/partials/_auth_modal.html.twig", 118)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/captain-members.html.twig";
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
        return array (  291 => 118,  286 => 115,  284 => 114,  275 => 107,  266 => 103,  264 => 102,  257 => 100,  253 => 99,  250 => 98,  247 => 97,  242 => 96,  224 => 80,  215 => 76,  213 => 75,  207 => 73,  200 => 69,  195 => 68,  191 => 66,  189 => 65,  184 => 63,  181 => 62,  177 => 60,  173 => 58,  171 => 57,  165 => 54,  161 => 53,  157 => 51,  154 => 50,  149 => 49,  128 => 33,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Membres equipe{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'CAPITAINE',
    hero_title: 'Membres',
    hero_sub: \"Gestion des membres de l'equipe active.\",
    breadcrumb_current: 'Membres'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_captain_side_nav.html.twig' with {
          active: 'members',
          active_team: active_team
        } %}

        <div>
          {% include 'front/partials/_captain_team_selector.html.twig' with {
            captain_teams: captain_teams,
            active_team: active_team,
            selector_route: 'front_captain_members'
          } %}

          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">MEMBRES ACTIFS</h3>
                <div class=\"panel__desc\">
                  {{ active_team.name }} - {{ active_members|length }} membre(s) actif(s)
                </div>
              </div>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Role</th>
                    <th>Date adhesion</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {% for membership in active_members %}
                    {% set member = membership.userId %}
                    <tr>
                      <td>
                        {{ member.displayName ?: member.username }}
                        <div class=\"muted\">@{{ member.username }}</div>
                      </td>
                      <td>
                        {% if active_team.captainUserId and member.userId == active_team.captainUserId.userId %}
                          <span class=\"badge badge--info\">CAPITAINE</span>
                        {% else %}
                          <span class=\"badge\">MEMBRE</span>
                        {% endif %}
                      </td>
                      <td>{{ membership.joinedAt ? membership.joinedAt|date('d/m/Y H:i') : '-' }}</td>
                      <td>
                        {% if active_team.captainUserId and member.userId == active_team.captainUserId.userId %}
                          -
                        {% else %}
                          <form method=\"post\" action=\"{{ path('front_captain_members_remove', {teamId: active_team.teamId, userId: member.userId}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_member_remove_' ~ active_team.teamId ~ '_' ~ member.userId) }}\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Retirer</button>
                          </form>
                        {% endif %}
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"4\">Aucun membre actif.</td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </section>

          <section class=\"panel\">
            <h3 class=\"panel__title\">ANCIENS MEMBRES</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Date sortie</th>
                  </tr>
                </thead>
                <tbody>
                  {% for membership in inactive_members %}
                    {% set member = membership.userId %}
                    <tr>
                      <td>{{ member.displayName ?: member.username }}</td>
                      <td>{{ membership.leftAt ? membership.leftAt|date('d/m/Y H:i') : '-' }}</td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"2\">Aucun historique de sortie.</td>
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

", "front/pages/captain-members.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\pages\\captain-members.html.twig");
    }
}
