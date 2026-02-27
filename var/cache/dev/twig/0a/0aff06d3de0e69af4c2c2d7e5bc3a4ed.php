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
class __TwigTemplate_6e69e70585f527ffb03577e199064f67 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 16
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                yield "          <div class=\"listItem\">
            <span>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
            <span class=\"badge ";
                // line 19
                yield ((($context["label"] == "error")) ? ("badge--danger") : (((($context["label"] == "warning")) ? ("badge--warning") : (((($context["label"] == "info")) ? ("badge--info") : ("badge--success"))))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
      <div class=\"layout\">
        ";
        // line 25
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["active" => "members", "active_team" =>         // line 27
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 27, $this->source); })())]));
        // line 29
        yield "
        <div>
          ";
        // line 31
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 32
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 32, $this->source); })()), "active_team" =>         // line 33
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 33, $this->source); })()), "selector_route" => "front_captain_members"]));
        // line 36
        yield "
          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">MEMBRES ACTIFS</h3>
                <div class=\"panel__desc\">
                  ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["active_members"]) || array_key_exists("active_members", $context) ? $context["active_members"] : (function () { throw new RuntimeError('Variable "active_members" does not exist.', 42, $this->source); })())), "html", null, true);
        yield " membre(s) actif(s)
                </div>
              </div>
              <div class=\"panel__actions\">
                <a class=\"btn btn--ghost\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members_roster_pdf", ["teamId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 46, $this->source); })()), "teamId", [], "any", false, false, false, 46)]), "html", null, true);
        yield "\">Exporter fiche roster (PDF)</a>
              </div>
            </div>

            <div class=\"layout\" style=\"margin-top:10px;\">
              <section class=\"panel\" style=\"margin:0;\">
                <h4 style=\"margin:0 0 8px;\">REPARTITION ROSTER</h4>
                <div id=\"rosterRolesChart\" style=\"height:320px;\"></div>
              </section>
              <aside class=\"panel\" style=\"margin:0;\">
                <h4 style=\"margin:0 0 8px;\">SYNTHESE</h4>
                <div class=\"list\">
                  <div class=\"listItem\"><span>CAPTAIN</span><span class=\"badge badge--info\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["roster_distribution"] ?? null), "CAPTAIN", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roster_distribution"]) || array_key_exists("roster_distribution", $context) ? $context["roster_distribution"] : (function () { throw new RuntimeError('Variable "roster_distribution" does not exist.', 58, $this->source); })()), "CAPTAIN", [], "any", false, false, false, 58), 0)) : (0)), "html", null, true);
        yield "</span></div>
                  <div class=\"listItem\"><span>CO_CAPTAIN</span><span class=\"badge\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["roster_distribution"] ?? null), "CO_CAPTAIN", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roster_distribution"]) || array_key_exists("roster_distribution", $context) ? $context["roster_distribution"] : (function () { throw new RuntimeError('Variable "roster_distribution" does not exist.', 59, $this->source); })()), "CO_CAPTAIN", [], "any", false, false, false, 59), 0)) : (0)), "html", null, true);
        yield "</span></div>
                  <div class=\"listItem\"><span>STARTER</span><span class=\"badge\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["roster_distribution"] ?? null), "STARTER", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roster_distribution"]) || array_key_exists("roster_distribution", $context) ? $context["roster_distribution"] : (function () { throw new RuntimeError('Variable "roster_distribution" does not exist.', 60, $this->source); })()), "STARTER", [], "any", false, false, false, 60), 0)) : (0)), "html", null, true);
        yield "</span></div>
                  <div class=\"listItem\"><span>SUBSTITUTE</span><span class=\"badge\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["roster_distribution"] ?? null), "SUBSTITUTE", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roster_distribution"]) || array_key_exists("roster_distribution", $context) ? $context["roster_distribution"] : (function () { throw new RuntimeError('Variable "roster_distribution" does not exist.', 61, $this->source); })()), "SUBSTITUTE", [], "any", false, false, false, 61), 0)) : (0)), "html", null, true);
        yield "</span></div>
                </div>
              </aside>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Role roster</th>
                    <th>Role compte</th>
                    <th>Date adhesion</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["active_members"]) || array_key_exists("active_members", $context) ? $context["active_members"] : (function () { throw new RuntimeError('Variable "active_members" does not exist.', 78, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membership"]) {
            // line 79
            yield "                    ";
            $context["member"] = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "userId", [], "any", false, false, false, 79);
            // line 80
            yield "                    ";
            $context["memberIsCaptain"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 80, $this->source); })()), "captainUserId", [], "any", false, false, false, 80) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 80, $this->source); })()), "userId", [], "any", false, false, false, 80) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 80, $this->source); })()), "captainUserId", [], "any", false, false, false, 80), "userId", [], "any", false, false, false, 80)));
            // line 81
            yield "                    <tr>
                      <td>
                        ";
            // line 83
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 83, $this->source); })()), "displayName", [], "any", false, false, false, 83)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 83, $this->source); })()), "displayName", [], "any", false, false, false, 83), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 83, $this->source); })()), "username", [], "any", false, false, false, 83), "html", null, true)));
            yield "
                        <div class=\"muted\">@";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 84, $this->source); })()), "username", [], "any", false, false, false, 84), "html", null, true);
            yield "</div>
                      </td>
                      <td>
                        ";
            // line 87
            if ((($tmp = (isset($context["memberIsCaptain"]) || array_key_exists("memberIsCaptain", $context) ? $context["memberIsCaptain"] : (function () { throw new RuntimeError('Variable "memberIsCaptain" does not exist.', 87, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 88
                yield "                          <span class=\"badge badge--info\">CAPITAINE</span>
                        ";
            } else {
                // line 90
                yield "                          <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members_roster_role", ["teamId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 90, $this->source); })()), "teamId", [], "any", false, false, false, 90), "userId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 90, $this->source); })()), "userId", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\" style=\"display:flex; gap:8px; align-items:center;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("captain_member_roster_role_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 91, $this->source); })()), "teamId", [], "any", false, false, false, 91)) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 91, $this->source); })()), "userId", [], "any", false, false, false, 91))), "html", null, true);
                yield "\">
                            <div class=\"select\">
                              <select name=\"roster_role\">
                                ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roster_roles"]) || array_key_exists("roster_roles", $context) ? $context["roster_roles"] : (function () { throw new RuntimeError('Variable "roster_roles" does not exist.', 94, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["roster_role"]) {
                    // line 95
                    yield "                                  ";
                    if (($context["roster_role"] != "CAPTAIN")) {
                        // line 96
                        yield "                                    <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["roster_role"], "html", null, true);
                        yield "\" ";
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "rosterRole", [], "any", false, false, false, 96) == $context["roster_role"])) ? ("selected") : (""));
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["roster_role"], "html", null, true);
                        yield "</option>
                                  ";
                    }
                    // line 98
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['roster_role'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                yield "                              </select>
                            </div>
                            <button class=\"btn btn--ghost\" type=\"submit\">Maj</button>
                          </form>
                        ";
            }
            // line 104
            yield "                      </td>
                      <td><span class=\"badge\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 105, $this->source); })()), "role", [], "any", false, false, false, 105), "html", null, true);
            yield "</span></td>
                      <td>";
            // line 106
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 106), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        ";
            // line 108
            if ((($tmp = (isset($context["memberIsCaptain"]) || array_key_exists("memberIsCaptain", $context) ? $context["memberIsCaptain"] : (function () { throw new RuntimeError('Variable "memberIsCaptain" does not exist.', 108, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "                          -
                        ";
            } else {
                // line 111
                yield "                          <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members_remove", ["teamId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 111, $this->source); })()), "teamId", [], "any", false, false, false, 111), "userId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 111, $this->source); })()), "userId", [], "any", false, false, false, 111)]), "html", null, true);
                yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("captain_member_remove_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 112, $this->source); })()), "teamId", [], "any", false, false, false, 112)) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 112, $this->source); })()), "userId", [], "any", false, false, false, 112))), "html", null, true);
                yield "\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Retirer</button>
                          </form>
                        ";
            }
            // line 116
            yield "                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 118
        if (!$context['_iterated']) {
            // line 119
            yield "                    <tr>
                      <td colspan=\"5\">Aucun membre actif.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membership'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
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
                    <th>Dernier role roster</th>
                    <th>Date sortie</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inactive_members"]) || array_key_exists("inactive_members", $context) ? $context["inactive_members"] : (function () { throw new RuntimeError('Variable "inactive_members" does not exist.', 141, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membership"]) {
            // line 142
            yield "                    ";
            $context["member"] = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "userId", [], "any", false, false, false, 142);
            // line 143
            yield "                    ";
            $context["memberIsCaptain"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 143, $this->source); })()), "captainUserId", [], "any", false, false, false, 143) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 143, $this->source); })()), "userId", [], "any", false, false, false, 143) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 143, $this->source); })()), "captainUserId", [], "any", false, false, false, 143), "userId", [], "any", false, false, false, 143)));
            // line 144
            yield "                    <tr>
                      <td>
                        ";
            // line 146
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 146, $this->source); })()), "displayName", [], "any", false, false, false, 146)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 146, $this->source); })()), "displayName", [], "any", false, false, false, 146), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 146, $this->source); })()), "username", [], "any", false, false, false, 146), "html", null, true)));
            yield "
                        <div class=\"muted\">@";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 147, $this->source); })()), "username", [], "any", false, false, false, 147), "html", null, true);
            yield "</div>
                      </td>
                      <td><span class=\"badge\">";
            // line 149
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "rosterRole", [], "any", false, false, false, 149)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "rosterRole", [], "any", false, false, false, 149), "html", null, true)) : ("STARTER"));
            yield "</span></td>
                      <td>";
            // line 150
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "leftAt", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "leftAt", [], "any", false, false, false, 150), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        <div style=\"display:flex; gap:8px; align-items:center; flex-wrap:wrap;\">
                          <form method=\"post\" action=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members_reactivate", ["teamId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 153, $this->source); })()), "teamId", [], "any", false, false, false, 153), "userId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 153, $this->source); })()), "userId", [], "any", false, false, false, 153)]), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("captain_member_reactivate_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 154, $this->source); })()), "teamId", [], "any", false, false, false, 154)) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 154, $this->source); })()), "userId", [], "any", false, false, false, 154))), "html", null, true);
            yield "\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Reactiver</button>
                          </form>

                          ";
            // line 158
            if ((($tmp = (isset($context["memberIsCaptain"]) || array_key_exists("memberIsCaptain", $context) ? $context["memberIsCaptain"] : (function () { throw new RuntimeError('Variable "memberIsCaptain" does not exist.', 158, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 159
                yield "                            <span class=\"muted\">-</span>
                          ";
            } else {
                // line 161
                yield "                            <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members_remove_inactive", ["teamId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 161, $this->source); })()), "teamId", [], "any", false, false, false, 161), "userId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 161, $this->source); })()), "userId", [], "any", false, false, false, 161)]), "html", null, true);
                yield "\">
                              <input type=\"hidden\" name=\"_token\" value=\"";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("captain_member_remove_inactive_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 162, $this->source); })()), "teamId", [], "any", false, false, false, 162)) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 162, $this->source); })()), "userId", [], "any", false, false, false, 162))), "html", null, true);
                yield "\">
                              <button class=\"btn btn--ghost\" type=\"submit\">Retirer</button>
                            </form>
                          ";
            }
            // line 166
            yield "                        </div>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 169
        if (!$context['_iterated']) {
            // line 170
            yield "                    <tr>
                      <td colspan=\"4\">Aucun historique de sortie.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membership'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        yield "                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 181
        yield from $this->load("front/partials/_footer.html.twig", 181)->unwrap()->yield($context);
        // line 182
        yield "    </section>
  </main>

  ";
        // line 185
        yield from $this->load("front/partials/_auth_modal.html.twig", 185)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 189
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
  <script type=\"text/javascript\">
    ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcLanguage("fr"), "html", null, true);
        yield "
    ";
        // line 193
        yield $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["roster_chart"]) || array_key_exists("roster_chart", $context) ? $context["roster_chart"] : (function () { throw new RuntimeError('Variable "roster_chart" does not exist.', 193, $this->source); })()), "rosterRolesChart");
        yield "
  </script>
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
        return array (  492 => 193,  488 => 192,  481 => 189,  468 => 188,  457 => 185,  452 => 182,  450 => 181,  441 => 174,  432 => 170,  430 => 169,  423 => 166,  416 => 162,  411 => 161,  407 => 159,  405 => 158,  398 => 154,  394 => 153,  388 => 150,  384 => 149,  379 => 147,  375 => 146,  371 => 144,  368 => 143,  365 => 142,  360 => 141,  340 => 123,  331 => 119,  329 => 118,  323 => 116,  316 => 112,  311 => 111,  307 => 109,  305 => 108,  300 => 106,  296 => 105,  293 => 104,  286 => 99,  280 => 98,  270 => 96,  267 => 95,  263 => 94,  257 => 91,  252 => 90,  248 => 88,  246 => 87,  240 => 84,  236 => 83,  232 => 81,  229 => 80,  226 => 79,  221 => 78,  201 => 61,  197 => 60,  193 => 59,  189 => 58,  174 => 46,  165 => 42,  157 => 36,  155 => 33,  154 => 32,  153 => 31,  149 => 29,  147 => 27,  146 => 25,  142 => 23,  136 => 22,  125 => 19,  121 => 18,  118 => 17,  113 => 16,  109 => 15,  104 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
      {% for label, messages in app.flashes %}
        {% for message in messages %}
          <div class=\"listItem\">
            <span>{{ message }}</span>
            <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'warning' ? 'badge--warning' : (label == 'info' ? 'badge--info' : 'badge--success')) }}\">{{ label|upper }}</span>
          </div>
        {% endfor %}
      {% endfor %}

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
              <div class=\"panel__actions\">
                <a class=\"btn btn--ghost\" href=\"{{ path('front_captain_members_roster_pdf', {teamId: active_team.teamId}) }}\">Exporter fiche roster (PDF)</a>
              </div>
            </div>

            <div class=\"layout\" style=\"margin-top:10px;\">
              <section class=\"panel\" style=\"margin:0;\">
                <h4 style=\"margin:0 0 8px;\">REPARTITION ROSTER</h4>
                <div id=\"rosterRolesChart\" style=\"height:320px;\"></div>
              </section>
              <aside class=\"panel\" style=\"margin:0;\">
                <h4 style=\"margin:0 0 8px;\">SYNTHESE</h4>
                <div class=\"list\">
                  <div class=\"listItem\"><span>CAPTAIN</span><span class=\"badge badge--info\">{{ roster_distribution.CAPTAIN|default(0) }}</span></div>
                  <div class=\"listItem\"><span>CO_CAPTAIN</span><span class=\"badge\">{{ roster_distribution.CO_CAPTAIN|default(0) }}</span></div>
                  <div class=\"listItem\"><span>STARTER</span><span class=\"badge\">{{ roster_distribution.STARTER|default(0) }}</span></div>
                  <div class=\"listItem\"><span>SUBSTITUTE</span><span class=\"badge\">{{ roster_distribution.SUBSTITUTE|default(0) }}</span></div>
                </div>
              </aside>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Role roster</th>
                    <th>Role compte</th>
                    <th>Date adhesion</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {% for membership in active_members %}
                    {% set member = membership.userId %}
                    {% set memberIsCaptain = active_team.captainUserId and member.userId == active_team.captainUserId.userId %}
                    <tr>
                      <td>
                        {{ member.displayName ?: member.username }}
                        <div class=\"muted\">@{{ member.username }}</div>
                      </td>
                      <td>
                        {% if memberIsCaptain %}
                          <span class=\"badge badge--info\">CAPITAINE</span>
                        {% else %}
                          <form method=\"post\" action=\"{{ path('front_captain_members_roster_role', {teamId: active_team.teamId, userId: member.userId}) }}\" style=\"display:flex; gap:8px; align-items:center;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_member_roster_role_' ~ active_team.teamId ~ '_' ~ member.userId) }}\">
                            <div class=\"select\">
                              <select name=\"roster_role\">
                                {% for roster_role in roster_roles %}
                                  {% if roster_role != 'CAPTAIN' %}
                                    <option value=\"{{ roster_role }}\" {{ membership.rosterRole == roster_role ? 'selected' : '' }}>{{ roster_role }}</option>
                                  {% endif %}
                                {% endfor %}
                              </select>
                            </div>
                            <button class=\"btn btn--ghost\" type=\"submit\">Maj</button>
                          </form>
                        {% endif %}
                      </td>
                      <td><span class=\"badge\">{{ member.role }}</span></td>
                      <td>{{ membership.joinedAt ? membership.joinedAt|date('d/m/Y H:i') : '-' }}</td>
                      <td>
                        {% if memberIsCaptain %}
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
                      <td colspan=\"5\">Aucun membre actif.</td>
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
                    <th>Dernier role roster</th>
                    <th>Date sortie</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {% for membership in inactive_members %}
                    {% set member = membership.userId %}
                    {% set memberIsCaptain = active_team.captainUserId and member.userId == active_team.captainUserId.userId %}
                    <tr>
                      <td>
                        {{ member.displayName ?: member.username }}
                        <div class=\"muted\">@{{ member.username }}</div>
                      </td>
                      <td><span class=\"badge\">{{ membership.rosterRole ?: 'STARTER' }}</span></td>
                      <td>{{ membership.leftAt ? membership.leftAt|date('d/m/Y H:i') : '-' }}</td>
                      <td>
                        <div style=\"display:flex; gap:8px; align-items:center; flex-wrap:wrap;\">
                          <form method=\"post\" action=\"{{ path('front_captain_members_reactivate', {teamId: active_team.teamId, userId: member.userId}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_member_reactivate_' ~ active_team.teamId ~ '_' ~ member.userId) }}\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Reactiver</button>
                          </form>

                          {% if memberIsCaptain %}
                            <span class=\"muted\">-</span>
                          {% else %}
                            <form method=\"post\" action=\"{{ path('front_captain_members_remove_inactive', {teamId: active_team.teamId, userId: member.userId}) }}\">
                              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_member_remove_inactive_' ~ active_team.teamId ~ '_' ~ member.userId) }}\">
                              <button class=\"btn btn--ghost\" type=\"submit\">Retirer</button>
                            </form>
                          {% endif %}
                        </div>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"4\">Aucun historique de sortie.</td>
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

{% block javascripts %}
  {{ parent() }}
  <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
  <script type=\"text/javascript\">
    {{ gc_language('fr') }}
    {{ gc_draw(roster_chart, 'rosterRolesChart') }}
  </script>
{% endblock %}

", "front/pages/captain-members.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\captain-members.html.twig");
    }
}
