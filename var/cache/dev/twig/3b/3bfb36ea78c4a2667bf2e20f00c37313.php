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

/* front/pdf/team_roster_sheet.html.twig */
class __TwigTemplate_0636ef2fe6c6be565d5c746393bf366b extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pdf/team_roster_sheet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pdf/team_roster_sheet.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <style>
    @page { margin: 18px; }
    * { box-sizing: border-box; }
    body { margin: 0; font-family: DejaVu Sans, sans-serif; font-size: 10px; color: #0f172a; background: #eef2f8; }
    .header { margin-bottom: 12px; padding: 12px 14px; border: 1px solid #d9e2ef; border-top: 4px solid #ff9d2e; background: #ffffff; }
    .brand { display: inline-block; font-size: 9px; font-weight: 700; letter-spacing: 1px; color: #ff9d2e; margin-bottom: 4px; }
    h1 { margin: 0; font-size: 18px; color: #0b1220; }
    .meta { margin-top: 6px; font-size: 9px; color: #475569; }
    .teamRow { margin-top: 10px; }
    .teamLogo { width: 68px; height: 68px; border: 1px solid #d9e2ef; border-radius: 8px; object-fit: cover; float: left; margin-right: 10px; }
    .teamInfo { overflow: hidden; }
    .teamInfo h2 { margin: 0; font-size: 14px; color: #0b1220; }
    .teamInfo p { margin: 4px 0 0; color: #334155; }
    .stats { margin-top: 10px; width: 100%; border-collapse: separate; border-spacing: 8px 0; }
    .stats td { padding: 8px; border: 1px solid #d9e2ef; background: #f8fafc; border-radius: 8px; vertical-align: top; }
    .statValue { display: block; font-size: 14px; font-weight: 700; color: #0f172a; }
    .statLabel { display: block; margin-top: 2px; color: #475569; font-size: 9px; }
    .section { margin-top: 12px; border: 1px solid #d9e2ef; background: #ffffff; }
    .section h3 { margin: 0; padding: 8px 10px; font-size: 11px; background: #1f2937; color: #f8fafc; }
    table { width: 100%; border-collapse: collapse; table-layout: fixed; }
    th, td { border: 1px solid #d9e2ef; padding: 6px; text-align: left; vertical-align: top; word-wrap: break-word; }
    th { background: #f1f5f9; color: #0f172a; font-size: 9px; }
    tbody tr:nth-child(even) td { background: #f8fafc; }
    .badge { display: inline-block; padding: 2px 6px; font-size: 9px; font-weight: 700; border-radius: 999px; border: 1px solid #d9e2ef; background: #f8fafc; color: #0f172a; }
    .status-active { background: #e6f8ee; color: #065f46; border-color: #a7f3d0; }
    .status-inactive { background: #fee2e2; color: #991b1b; border-color: #fecaca; }
    .muted { color: #64748b; font-style: italic; text-align: center; }
  </style>
</head>
<body>
  <section class=\"header\">
    <div class=\"brand\">PULSE ROSTER REPORT</div>
    <h1>Fiche roster equipe</h1>
    <div class=\"meta\">
      Genere le: ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["generated_at"]) || array_key_exists("generated_at", $context) ? $context["generated_at"] : (function () { throw new RuntimeError('Variable "generated_at" does not exist.', 39, $this->source); })()), "Y-m-d H:i"), "html", null, true);
        yield " · Equipe ID: #";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", true, true, false, 39) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 39, $this->source); })()), "teamId", [], "any", false, false, false, 39)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 39, $this->source); })()), "teamId", [], "any", false, false, false, 39), "html", null, true)) : (0));
        yield "
    </div>

    <div class=\"teamRow\">
      ";
        // line 43
        if ((($tmp = (isset($context["logo_src"]) || array_key_exists("logo_src", $context) ? $context["logo_src"] : (function () { throw new RuntimeError('Variable "logo_src" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "        <img class=\"teamLogo\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logo_src"]) || array_key_exists("logo_src", $context) ? $context["logo_src"] : (function () { throw new RuntimeError('Variable "logo_src" does not exist.', 44, $this->source); })()), "html", null, true);
            yield "\" alt=\"logo equipe\">
      ";
        }
        // line 46
        yield "      <div class=\"teamInfo\">
        <h2>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
        yield "</h2>
        <p>Region: ";
        // line 48
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 48, $this->source); })()), "region", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 48, $this->source); })()), "region", [], "any", false, false, false, 48), "html", null, true)) : ("Non definie"));
        yield "</p>
        <p>Capitaine: ";
        // line 49
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 49, $this->source); })()), "captainUserId", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 49, $this->source); })()), "captainUserId", [], "any", false, false, false, 49), "displayName", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 49, $this->source); })()), "captainUserId", [], "any", false, false, false, 49), "displayName", [], "any", false, false, false, 49), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 49, $this->source); })()), "captainUserId", [], "any", false, false, false, 49), "username", [], "any", false, false, false, 49), "html", null, true)))) : ("-"));
        yield "</p>
        <p>Description: ";
        // line 50
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), "html", null, true)) : ("Aucune description."));
        yield "</p>
      </div>
    </div>

    <table class=\"stats\">
      <tr>
        <td>
          <span class=\"statValue\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_members", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 57, $this->source); })()), "active_members", [], "any", false, false, false, 57), 0)) : (0)), "html", null, true);
        yield "</span>
          <span class=\"statLabel\">Membres actifs</span>
        </td>
        <td>
          <span class=\"statValue\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inactive_members", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 61, $this->source); })()), "inactive_members", [], "any", false, false, false, 61), 0)) : (0)), "html", null, true);
        yield "</span>
          <span class=\"statLabel\">Membres inactifs (historique)</span>
        </td>
        <td>
          <span class=\"statValue\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "average_seniority_days", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 65, $this->source); })()), "average_seniority_days", [], "any", false, false, false, 65), 0)) : (0)), "html", null, true);
        yield "</span>
          <span class=\"statLabel\">Anciennete moyenne (jours)</span>
        </td>
        <td>
          <span class=\"statValue\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "join_requests", [], "any", false, true, false, 69), "accepted", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 69, $this->source); })()), "join_requests", [], "any", false, false, false, 69), "accepted", [], "any", false, false, false, 69), 0)) : (0)), "html", null, true);
        yield "</span>
          <span class=\"statLabel\">Demandes acceptees</span>
        </td>
      </tr>
    </table>
  </section>

  <section class=\"section\">
    <h3>Repartition roster actif</h3>
    <table>
      <thead>
      <tr>
        <th>Role roster</th>
        <th>Effectif</th>
        <th>Part</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 87
        $context["total_active"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_members", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 87, $this->source); })()), "active_members", [], "any", false, false, false, 87), 0)) : (0));
        // line 88
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["CAPTAIN", "CO_CAPTAIN", "STARTER", "SUBSTITUTE"]);
        foreach ($context['_seq'] as $context["_key"] => $context["roster_role"]) {
            // line 89
            yield "        ";
            $context["count"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["role_distribution"] ?? null), $context["roster_role"], [], "array", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["role_distribution"]) || array_key_exists("role_distribution", $context) ? $context["role_distribution"] : (function () { throw new RuntimeError('Variable "role_distribution" does not exist.', 89, $this->source); })()), $context["roster_role"], [], "array", false, false, false, 89), 0)) : (0));
            // line 90
            yield "        <tr>
          <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["roster_role"], "html", null, true);
            yield "</td>
          <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 92, $this->source); })()), "html", null, true);
            yield "</td>
          <td>
            ";
            // line 94
            if (((isset($context["total_active"]) || array_key_exists("total_active", $context) ? $context["total_active"] : (function () { throw new RuntimeError('Variable "total_active" does not exist.', 94, $this->source); })()) > 0)) {
                // line 95
                yield "              ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 95, $this->source); })()) / (isset($context["total_active"]) || array_key_exists("total_active", $context) ? $context["total_active"] : (function () { throw new RuntimeError('Variable "total_active" does not exist.', 95, $this->source); })())) * 100), 1, ".", " "), "html", null, true);
                yield "%
            ";
            } else {
                // line 97
                yield "              0%
            ";
            }
            // line 99
            yield "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['roster_role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "      </tbody>
    </table>
  </section>

  <section class=\"section\">
    <h3>Membres actifs</h3>
    <table>
      <thead>
      <tr>
        <th>Joueur</th>
        <th>Username</th>
        <th>Role roster</th>
        <th>Role compte</th>
        <th>Rejoint le</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["active_members"]) || array_key_exists("active_members", $context) ? $context["active_members"] : (function () { throw new RuntimeError('Variable "active_members" does not exist.', 119, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membership"]) {
            // line 120
            yield "        ";
            $context["member"] = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "userId", [], "any", false, false, false, 120);
            // line 121
            yield "        <tr>
          <td>";
            // line 122
            yield (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 122, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 122, $this->source); })()), "displayName", [], "any", false, false, false, 122)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 122, $this->source); })()), "displayName", [], "any", false, false, false, 122), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 122, $this->source); })()), "username", [], "any", false, false, false, 122), "html", null, true)))) : ("-"));
            yield "</td>
          <td>";
            // line 123
            yield (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 123, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("@" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 123, $this->source); })()), "username", [], "any", false, false, false, 123)), "html", null, true)) : ("-"));
            yield "</td>
          <td><span class=\"badge\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "rosterRole", [], "any", false, false, false, 124), "html", null, true);
            yield "</span></td>
          <td>";
            // line 125
            yield (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 125, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 125, $this->source); })()), "role", [], "any", false, false, false, 125), "html", null, true)) : ("-"));
            yield "</td>
          <td>";
            // line 126
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 126), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        // line 128
        if (!$context['_iterated']) {
            // line 129
            yield "        <tr>
          <td class=\"muted\" colspan=\"5\">Aucun membre actif.</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membership'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "      </tbody>
    </table>
  </section>

  <section class=\"section\">
    <h3>Historique roster</h3>
    <table>
      <thead>
      <tr>
        <th>Joueur</th>
        <th>Role roster</th>
        <th>Date entree</th>
        <th>Date sortie</th>
        <th>Etat</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roster_history"]) || array_key_exists("roster_history", $context) ? $context["roster_history"] : (function () { throw new RuntimeError('Variable "roster_history" does not exist.', 150, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membership"]) {
            // line 151
            yield "        ";
            $context["member"] = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "userId", [], "any", false, false, false, 151);
            // line 152
            yield "        ";
            $context["is_active"] = (CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "isActive", [], "any", false, false, false, 152) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "leftAt", [], "any", false, false, false, 152)));
            // line 153
            yield "        <tr>
          <td>";
            // line 154
            yield (((($tmp = (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 154, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 154, $this->source); })()), "displayName", [], "any", false, false, false, 154)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 154, $this->source); })()), "displayName", [], "any", false, false, false, 154), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 154, $this->source); })()), "username", [], "any", false, false, false, 154), "html", null, true)))) : ("-"));
            yield "</td>
          <td>";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "rosterRole", [], "any", false, false, false, 155), "html", null, true);
            yield "</td>
          <td>";
            // line 156
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "joinedAt", [], "any", false, false, false, 156), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
          <td>";
            // line 157
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "leftAt", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["membership"], "leftAt", [], "any", false, false, false, 157), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
          <td>
            <span class=\"badge ";
            // line 159
            yield (((($tmp = (isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 159, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("status-active") : ("status-inactive"));
            yield "\">
              ";
            // line 160
            yield (((($tmp = (isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 160, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
            yield "
            </span>
          </td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        // line 164
        if (!$context['_iterated']) {
            // line 165
            yield "        <tr>
          <td class=\"muted\" colspan=\"5\">Aucun historique roster.</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membership'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "      </tbody>
    </table>
  </section>

  <section class=\"section\">
    <h3>Historique des demandes d adhesion</h3>
    <table>
      <thead>
      <tr>
        <th>Joueur</th>
        <th>Date demande</th>
        <th>Statut</th>
        <th>Repondu le</th>
        <th>Note</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["join_requests"]) || array_key_exists("join_requests", $context) ? $context["join_requests"] : (function () { throw new RuntimeError('Variable "join_requests" does not exist.', 186, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["join_request"]) {
            // line 187
            yield "        ";
            $context["applicant"] = CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "userId", [], "any", false, false, false, 187);
            // line 188
            yield "        <tr>
          <td>";
            // line 189
            yield (((($tmp = (isset($context["applicant"]) || array_key_exists("applicant", $context) ? $context["applicant"] : (function () { throw new RuntimeError('Variable "applicant" does not exist.', 189, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["applicant"]) || array_key_exists("applicant", $context) ? $context["applicant"] : (function () { throw new RuntimeError('Variable "applicant" does not exist.', 189, $this->source); })()), "displayName", [], "any", false, false, false, 189)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["applicant"]) || array_key_exists("applicant", $context) ? $context["applicant"] : (function () { throw new RuntimeError('Variable "applicant" does not exist.', 189, $this->source); })()), "displayName", [], "any", false, false, false, 189), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["applicant"]) || array_key_exists("applicant", $context) ? $context["applicant"] : (function () { throw new RuntimeError('Variable "applicant" does not exist.', 189, $this->source); })()), "username", [], "any", false, false, false, 189), "html", null, true)))) : ("-"));
            yield "</td>
          <td>";
            // line 190
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "createdAt", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "createdAt", [], "any", false, false, false, 190), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
          <td><span class=\"badge\">";
            // line 191
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "status", [], "any", false, false, false, 191)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "status", [], "any", false, false, false, 191), "html", null, true)) : ("PENDING"));
            yield "</span></td>
          <td>";
            // line 192
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "respondedAt", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "respondedAt", [], "any", false, false, false, 192), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
          <td>";
            // line 193
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "note", [], "any", false, false, false, 193)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["join_request"], "note", [], "any", false, false, false, 193), "html", null, true)) : ("-"));
            yield "</td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        // line 195
        if (!$context['_iterated']) {
            // line 196
            yield "        <tr>
          <td class=\"muted\" colspan=\"5\">Aucune demande de roster enregistree.</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['join_request'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        yield "      </tbody>
    </table>
  </section>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pdf/team_roster_sheet.html.twig";
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
        return array (  416 => 200,  407 => 196,  405 => 195,  398 => 193,  394 => 192,  390 => 191,  386 => 190,  382 => 189,  379 => 188,  376 => 187,  371 => 186,  352 => 169,  343 => 165,  341 => 164,  332 => 160,  328 => 159,  323 => 157,  319 => 156,  315 => 155,  311 => 154,  308 => 153,  305 => 152,  302 => 151,  297 => 150,  278 => 133,  269 => 129,  267 => 128,  260 => 126,  256 => 125,  252 => 124,  248 => 123,  244 => 122,  241 => 121,  238 => 120,  233 => 119,  214 => 102,  206 => 99,  202 => 97,  196 => 95,  194 => 94,  189 => 92,  185 => 91,  182 => 90,  179 => 89,  174 => 88,  172 => 87,  151 => 69,  144 => 65,  137 => 61,  130 => 57,  120 => 50,  116 => 49,  112 => 48,  108 => 47,  105 => 46,  99 => 44,  97 => 43,  88 => 39,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <style>
    @page { margin: 18px; }
    * { box-sizing: border-box; }
    body { margin: 0; font-family: DejaVu Sans, sans-serif; font-size: 10px; color: #0f172a; background: #eef2f8; }
    .header { margin-bottom: 12px; padding: 12px 14px; border: 1px solid #d9e2ef; border-top: 4px solid #ff9d2e; background: #ffffff; }
    .brand { display: inline-block; font-size: 9px; font-weight: 700; letter-spacing: 1px; color: #ff9d2e; margin-bottom: 4px; }
    h1 { margin: 0; font-size: 18px; color: #0b1220; }
    .meta { margin-top: 6px; font-size: 9px; color: #475569; }
    .teamRow { margin-top: 10px; }
    .teamLogo { width: 68px; height: 68px; border: 1px solid #d9e2ef; border-radius: 8px; object-fit: cover; float: left; margin-right: 10px; }
    .teamInfo { overflow: hidden; }
    .teamInfo h2 { margin: 0; font-size: 14px; color: #0b1220; }
    .teamInfo p { margin: 4px 0 0; color: #334155; }
    .stats { margin-top: 10px; width: 100%; border-collapse: separate; border-spacing: 8px 0; }
    .stats td { padding: 8px; border: 1px solid #d9e2ef; background: #f8fafc; border-radius: 8px; vertical-align: top; }
    .statValue { display: block; font-size: 14px; font-weight: 700; color: #0f172a; }
    .statLabel { display: block; margin-top: 2px; color: #475569; font-size: 9px; }
    .section { margin-top: 12px; border: 1px solid #d9e2ef; background: #ffffff; }
    .section h3 { margin: 0; padding: 8px 10px; font-size: 11px; background: #1f2937; color: #f8fafc; }
    table { width: 100%; border-collapse: collapse; table-layout: fixed; }
    th, td { border: 1px solid #d9e2ef; padding: 6px; text-align: left; vertical-align: top; word-wrap: break-word; }
    th { background: #f1f5f9; color: #0f172a; font-size: 9px; }
    tbody tr:nth-child(even) td { background: #f8fafc; }
    .badge { display: inline-block; padding: 2px 6px; font-size: 9px; font-weight: 700; border-radius: 999px; border: 1px solid #d9e2ef; background: #f8fafc; color: #0f172a; }
    .status-active { background: #e6f8ee; color: #065f46; border-color: #a7f3d0; }
    .status-inactive { background: #fee2e2; color: #991b1b; border-color: #fecaca; }
    .muted { color: #64748b; font-style: italic; text-align: center; }
  </style>
</head>
<body>
  <section class=\"header\">
    <div class=\"brand\">PULSE ROSTER REPORT</div>
    <h1>Fiche roster equipe</h1>
    <div class=\"meta\">
      Genere le: {{ generated_at|date('Y-m-d H:i') }} · Equipe ID: #{{ team.teamId ?? 0 }}
    </div>

    <div class=\"teamRow\">
      {% if logo_src %}
        <img class=\"teamLogo\" src=\"{{ logo_src }}\" alt=\"logo equipe\">
      {% endif %}
      <div class=\"teamInfo\">
        <h2>{{ team.name }}</h2>
        <p>Region: {{ team.region ?: 'Non definie' }}</p>
        <p>Capitaine: {{ team.captainUserId ? (team.captainUserId.displayName ?: team.captainUserId.username) : '-' }}</p>
        <p>Description: {{ team.description ?: 'Aucune description.' }}</p>
      </div>
    </div>

    <table class=\"stats\">
      <tr>
        <td>
          <span class=\"statValue\">{{ stats.active_members|default(0) }}</span>
          <span class=\"statLabel\">Membres actifs</span>
        </td>
        <td>
          <span class=\"statValue\">{{ stats.inactive_members|default(0) }}</span>
          <span class=\"statLabel\">Membres inactifs (historique)</span>
        </td>
        <td>
          <span class=\"statValue\">{{ stats.average_seniority_days|default(0) }}</span>
          <span class=\"statLabel\">Anciennete moyenne (jours)</span>
        </td>
        <td>
          <span class=\"statValue\">{{ stats.join_requests.accepted|default(0) }}</span>
          <span class=\"statLabel\">Demandes acceptees</span>
        </td>
      </tr>
    </table>
  </section>

  <section class=\"section\">
    <h3>Repartition roster actif</h3>
    <table>
      <thead>
      <tr>
        <th>Role roster</th>
        <th>Effectif</th>
        <th>Part</th>
      </tr>
      </thead>
      <tbody>
      {% set total_active = stats.active_members|default(0) %}
      {% for roster_role in ['CAPTAIN', 'CO_CAPTAIN', 'STARTER', 'SUBSTITUTE'] %}
        {% set count = role_distribution[roster_role]|default(0) %}
        <tr>
          <td>{{ roster_role }}</td>
          <td>{{ count }}</td>
          <td>
            {% if total_active > 0 %}
              {{ ((count / total_active) * 100)|number_format(1, '.', ' ') }}%
            {% else %}
              0%
            {% endif %}
          </td>
        </tr>
      {% endfor %}
      </tbody>
    </table>
  </section>

  <section class=\"section\">
    <h3>Membres actifs</h3>
    <table>
      <thead>
      <tr>
        <th>Joueur</th>
        <th>Username</th>
        <th>Role roster</th>
        <th>Role compte</th>
        <th>Rejoint le</th>
      </tr>
      </thead>
      <tbody>
      {% for membership in active_members %}
        {% set member = membership.userId %}
        <tr>
          <td>{{ member ? (member.displayName ?: member.username) : '-' }}</td>
          <td>{{ member ? ('@' ~ member.username) : '-' }}</td>
          <td><span class=\"badge\">{{ membership.rosterRole }}</span></td>
          <td>{{ member ? member.role : '-' }}</td>
          <td>{{ membership.joinedAt ? membership.joinedAt|date('d/m/Y H:i') : '-' }}</td>
        </tr>
      {% else %}
        <tr>
          <td class=\"muted\" colspan=\"5\">Aucun membre actif.</td>
        </tr>
      {% endfor %}
      </tbody>
    </table>
  </section>

  <section class=\"section\">
    <h3>Historique roster</h3>
    <table>
      <thead>
      <tr>
        <th>Joueur</th>
        <th>Role roster</th>
        <th>Date entree</th>
        <th>Date sortie</th>
        <th>Etat</th>
      </tr>
      </thead>
      <tbody>
      {% for membership in roster_history %}
        {% set member = membership.userId %}
        {% set is_active = membership.isActive and membership.leftAt is null %}
        <tr>
          <td>{{ member ? (member.displayName ?: member.username) : '-' }}</td>
          <td>{{ membership.rosterRole }}</td>
          <td>{{ membership.joinedAt ? membership.joinedAt|date('d/m/Y H:i') : '-' }}</td>
          <td>{{ membership.leftAt ? membership.leftAt|date('d/m/Y H:i') : '-' }}</td>
          <td>
            <span class=\"badge {{ is_active ? 'status-active' : 'status-inactive' }}\">
              {{ is_active ? 'ACTIF' : 'INACTIF' }}
            </span>
          </td>
        </tr>
      {% else %}
        <tr>
          <td class=\"muted\" colspan=\"5\">Aucun historique roster.</td>
        </tr>
      {% endfor %}
      </tbody>
    </table>
  </section>

  <section class=\"section\">
    <h3>Historique des demandes d adhesion</h3>
    <table>
      <thead>
      <tr>
        <th>Joueur</th>
        <th>Date demande</th>
        <th>Statut</th>
        <th>Repondu le</th>
        <th>Note</th>
      </tr>
      </thead>
      <tbody>
      {% for join_request in join_requests %}
        {% set applicant = join_request.userId %}
        <tr>
          <td>{{ applicant ? (applicant.displayName ?: applicant.username) : '-' }}</td>
          <td>{{ join_request.createdAt ? join_request.createdAt|date('d/m/Y H:i') : '-' }}</td>
          <td><span class=\"badge\">{{ join_request.status ?: 'PENDING' }}</span></td>
          <td>{{ join_request.respondedAt ? join_request.respondedAt|date('d/m/Y H:i') : '-' }}</td>
          <td>{{ join_request.note ?: '-' }}</td>
        </tr>
      {% else %}
        <tr>
          <td class=\"muted\" colspan=\"5\">Aucune demande de roster enregistree.</td>
        </tr>
      {% endfor %}
      </tbody>
    </table>
  </section>
</body>
</html>
", "front/pdf/team_roster_sheet.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pdf\\team_roster_sheet.html.twig");
    }
}
