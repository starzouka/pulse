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
class __TwigTemplate_16cf5280776b5ba8d0ee0ad6c93da91e extends Template
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
            <div class=\"statsRow\" style=\"margin-top:12px;\">
              <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roster_stats"]) || array_key_exists("roster_stats", $context) ? $context["roster_stats"] : (function () { throw new RuntimeError('Variable "roster_stats" does not exist.', 38, $this->source); })()), "total_active", [], "any", false, false, false, 38), "html", null, true);
        yield "</div><div class=\"statCard__label\">Actifs</div></div>
              <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roster_stats"]) || array_key_exists("roster_stats", $context) ? $context["roster_stats"] : (function () { throw new RuntimeError('Variable "roster_stats" does not exist.', 39, $this->source); })()), "captains", [], "any", false, false, false, 39), "html", null, true);
        yield "</div><div class=\"statCard__label\">Captain</div></div>
              <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roster_stats"]) || array_key_exists("roster_stats", $context) ? $context["roster_stats"] : (function () { throw new RuntimeError('Variable "roster_stats" does not exist.', 40, $this->source); })()), "co_captains", [], "any", false, false, false, 40), "html", null, true);
        yield "</div><div class=\"statCard__label\">Co-captains</div></div>
              <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roster_stats"]) || array_key_exists("roster_stats", $context) ? $context["roster_stats"] : (function () { throw new RuntimeError('Variable "roster_stats" does not exist.', 41, $this->source); })()), "starters", [], "any", false, false, false, 41), "html", null, true);
        yield "</div><div class=\"statCard__label\">Titulaires</div></div>
              <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roster_stats"]) || array_key_exists("roster_stats", $context) ? $context["roster_stats"] : (function () { throw new RuntimeError('Variable "roster_stats" does not exist.', 42, $this->source); })()), "substitutes", [], "any", false, false, false, 42), "html", null, true);
        yield "</div><div class=\"statCard__label\">Remplaçants</div></div>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Role compte</th>
                    <th>Role roster</th>
                    <th>Date adhesion</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["active_members"]) || array_key_exists("active_members", $context) ? $context["active_members"] : (function () { throw new RuntimeError('Variable "active_members" does not exist.', 57, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membership"]) {
            // line 58
            yield "                    ";
            $context["member"] = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "userId", [], "any", false, false, false, 58);
            // line 59
            yield "                    <tr>
                      <td>
                        ";
            // line 61
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 61, $this->source); })()), "displayName", [], "any", false, false, false, 61)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 61, $this->source); })()), "displayName", [], "any", false, false, false, 61), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 61, $this->source); })()), "username", [], "any", false, false, false, 61), "html", null, true)));
            yield "
                        <div class=\"muted\">@";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 62, $this->source); })()), "username", [], "any", false, false, false, 62), "html", null, true);
            yield "</div>
                      </td>
                      <td>
                        ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 65, $this->source); })()), "captainUserId", [], "any", false, false, false, 65) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 65, $this->source); })()), "userId", [], "any", false, false, false, 65) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 65, $this->source); })()), "captainUserId", [], "any", false, false, false, 65), "userId", [], "any", false, false, false, 65)))) {
                // line 66
                yield "                          <span class=\"badge badge--info\">CAPITAINE</span>
                        ";
            } else {
                // line 68
                yield "                          <span class=\"badge\">MEMBRE</span>
                        ";
            }
            // line 70
            yield "                      </td>
                      <td>
                        ";
            // line 72
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 72, $this->source); })()), "captainUserId", [], "any", false, false, false, 72) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 72, $this->source); })()), "userId", [], "any", false, false, false, 72) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 72, $this->source); })()), "captainUserId", [], "any", false, false, false, 72), "userId", [], "any", false, false, false, 72)))) {
                // line 73
                yield "                          <span class=\"badge badge--info\">CAPTAIN</span>
                        ";
            } else {
                // line 75
                yield "                          <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members_role", ["teamId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 75, $this->source); })()), "teamId", [], "any", false, false, false, 75), "userId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 75, $this->source); })()), "userId", [], "any", false, false, false, 75)]), "html", null, true);
                yield "\" style=\"display:flex; gap:8px; align-items:center;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("captain_member_role_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 76, $this->source); })()), "teamId", [], "any", false, false, false, 76)) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 76, $this->source); })()), "userId", [], "any", false, false, false, 76))), "html", null, true);
                yield "\">
                            <div class=\"select\" style=\"min-width:160px;\">
                              <select name=\"roster_role\">
                                ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["assignable_roster_roles"]) || array_key_exists("assignable_roster_roles", $context) ? $context["assignable_roster_roles"] : (function () { throw new RuntimeError('Variable "assignable_roster_roles" does not exist.', 79, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["rosterRole"]) {
                    // line 80
                    yield "                                  <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rosterRole"], "html", null, true);
                    yield "\" ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "rosterRole", [], "any", false, false, false, 80) == $context["rosterRole"])) ? ("selected") : (""));
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rosterRole"], "html", null, true);
                    yield "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['rosterRole'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                yield "                              </select>
                            </div>
                            <button class=\"btn btn--ghost\" type=\"submit\">Maj</button>
                          </form>
                        ";
            }
            // line 87
            yield "                      </td>
                      <td>";
            // line 88
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 88), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        ";
            // line 90
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 90, $this->source); })()), "captainUserId", [], "any", false, false, false, 90) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 90, $this->source); })()), "userId", [], "any", false, false, false, 90) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 90, $this->source); })()), "captainUserId", [], "any", false, false, false, 90), "userId", [], "any", false, false, false, 90)))) {
                // line 91
                yield "                          -
                        ";
            } else {
                // line 93
                yield "                          <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members_remove", ["teamId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 93, $this->source); })()), "teamId", [], "any", false, false, false, 93), "userId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 93, $this->source); })()), "userId", [], "any", false, false, false, 93)]), "html", null, true);
                yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("captain_member_remove_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 94, $this->source); })()), "teamId", [], "any", false, false, false, 94)) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 94, $this->source); })()), "userId", [], "any", false, false, false, 94))), "html", null, true);
                yield "\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Retirer</button>
                          </form>
                        ";
            }
            // line 98
            yield "                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 100
        if (!$context['_iterated']) {
            // line 101
            yield "                    <tr>
                      <td colspan=\"5\">Aucun membre actif.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membership'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
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
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inactive_members"]) || array_key_exists("inactive_members", $context) ? $context["inactive_members"] : (function () { throw new RuntimeError('Variable "inactive_members" does not exist.', 123, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membership"]) {
            // line 124
            yield "                    ";
            $context["member"] = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "userId", [], "any", false, false, false, 124);
            // line 125
            yield "                    <tr>
                      <td>";
            // line 126
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 126, $this->source); })()), "displayName", [], "any", false, false, false, 126)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 126, $this->source); })()), "displayName", [], "any", false, false, false, 126), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 126, $this->source); })()), "username", [], "any", false, false, false, 126), "html", null, true)));
            yield "</td>
                      <td>";
            // line 127
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "rosterRole", [], "any", false, false, false, 127)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "rosterRole", [], "any", false, false, false, 127), "html", null, true)) : ("STARTER"));
            yield "</td>
                      <td>";
            // line 128
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "leftAt", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "leftAt", [], "any", false, false, false, 128), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        <form method=\"post\" action=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members_reactivate", ["teamId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 130, $this->source); })()), "teamId", [], "any", false, false, false, 130), "userId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 130, $this->source); })()), "userId", [], "any", false, false, false, 130)]), "html", null, true);
            yield "\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("captain_member_reactivate_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 131, $this->source); })()), "teamId", [], "any", false, false, false, 131)) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 131, $this->source); })()), "userId", [], "any", false, false, false, 131))), "html", null, true);
            yield "\">
                          <button class=\"btn btn--ghost\" type=\"submit\">Réactiver</button>
                        </form>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 136
        if (!$context['_iterated']) {
            // line 137
            yield "                    <tr>
                      <td colspan=\"4\">Aucun historique de sortie.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membership'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 148
        yield from $this->load("front/partials/_footer.html.twig", 148)->unwrap()->yield($context);
        // line 149
        yield "    </section>
  </main>

  ";
        // line 152
        yield from $this->load("front/partials/_auth_modal.html.twig", 152)->unwrap()->yield($context);
        
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
        return array (  377 => 152,  372 => 149,  370 => 148,  361 => 141,  352 => 137,  350 => 136,  340 => 131,  336 => 130,  331 => 128,  327 => 127,  323 => 126,  320 => 125,  317 => 124,  312 => 123,  292 => 105,  283 => 101,  281 => 100,  275 => 98,  268 => 94,  263 => 93,  259 => 91,  257 => 90,  252 => 88,  249 => 87,  242 => 82,  229 => 80,  225 => 79,  219 => 76,  214 => 75,  210 => 73,  208 => 72,  204 => 70,  200 => 68,  196 => 66,  194 => 65,  188 => 62,  184 => 61,  180 => 59,  177 => 58,  172 => 57,  154 => 42,  150 => 41,  146 => 40,  142 => 39,  138 => 38,  128 => 33,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
            <div class=\"statsRow\" style=\"margin-top:12px;\">
              <div class=\"statCard\"><div class=\"statCard__value\">{{ roster_stats.total_active }}</div><div class=\"statCard__label\">Actifs</div></div>
              <div class=\"statCard\"><div class=\"statCard__value\">{{ roster_stats.captains }}</div><div class=\"statCard__label\">Captain</div></div>
              <div class=\"statCard\"><div class=\"statCard__value\">{{ roster_stats.co_captains }}</div><div class=\"statCard__label\">Co-captains</div></div>
              <div class=\"statCard\"><div class=\"statCard__value\">{{ roster_stats.starters }}</div><div class=\"statCard__label\">Titulaires</div></div>
              <div class=\"statCard\"><div class=\"statCard__value\">{{ roster_stats.substitutes }}</div><div class=\"statCard__label\">Remplaçants</div></div>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Role compte</th>
                    <th>Role roster</th>
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
                      <td>
                        {% if active_team.captainUserId and member.userId == active_team.captainUserId.userId %}
                          <span class=\"badge badge--info\">CAPTAIN</span>
                        {% else %}
                          <form method=\"post\" action=\"{{ path('front_captain_members_role', {teamId: active_team.teamId, userId: member.userId}) }}\" style=\"display:flex; gap:8px; align-items:center;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_member_role_' ~ active_team.teamId ~ '_' ~ member.userId) }}\">
                            <div class=\"select\" style=\"min-width:160px;\">
                              <select name=\"roster_role\">
                                {% for rosterRole in assignable_roster_roles %}
                                  <option value=\"{{ rosterRole }}\" {{ membership.rosterRole == rosterRole ? 'selected' : '' }}>{{ rosterRole }}</option>
                                {% endfor %}
                              </select>
                            </div>
                            <button class=\"btn btn--ghost\" type=\"submit\">Maj</button>
                          </form>
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
                    <tr>
                      <td>{{ member.displayName ?: member.username }}</td>
                      <td>{{ membership.rosterRole ?: 'STARTER' }}</td>
                      <td>{{ membership.leftAt ? membership.leftAt|date('d/m/Y H:i') : '-' }}</td>
                      <td>
                        <form method=\"post\" action=\"{{ path('front_captain_members_reactivate', {teamId: active_team.teamId, userId: member.userId}) }}\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_member_reactivate_' ~ active_team.teamId ~ '_' ~ member.userId) }}\">
                          <button class=\"btn btn--ghost\" type=\"submit\">Réactiver</button>
                        </form>
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

", "front/pages/captain-members.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\captain-members.html.twig");
    }
}
