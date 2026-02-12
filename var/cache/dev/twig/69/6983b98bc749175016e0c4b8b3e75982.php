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

/* admin/pages/tournament-detail.html.twig */
class __TwigTemplate_1ad356cb429ad3944fd682384448fd6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-detail.html.twig"));

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

        yield "PULSE - Detail tournoi";
        
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
        yield "
        
  <div class=\"pageHeader\">
    <div>
      <h2>Detail tournoi</h2>
      <div class=\"pageSub\">Infos + inscriptions + matchs + classement.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"tournament\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
<button class=\"tab\" data-tab=\"teams\">Inscriptions</button>
<button class=\"tab\" data-tab=\"matches\">Matchs</button>
<button class=\"tab\" data-tab=\"results\">Classement</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"tournament\">
    <div class=\"tabPanel isActive\" data-panel=\"info\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>title</span><span class=\"listMeta\">Pulse Invitational</span></div><div class=\"listItem\"><span>status</span><span class=\"listMeta\"><span class=\"badge badge--warning\">PENDING</span></span></div><div class=\"listItem\"><span>format</span><span class=\"listMeta\">BO3</span></div><div class=\"listItem\"><span>prize_pool</span><span class=\"listMeta\">—</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"teams\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>team</th><th>status</th><th>seed</th></tr></thead>
      <tbody>
        <tr><td>Nebula Five</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>1</td></tr>
        <tr><td>Nebula Five</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>1</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"matches\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>match_id</th><th>round_name</th><th>scheduled_at</th><th>status</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>—</td><td>—</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
        <tr><td>1</td><td>—</td><td>—</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"results\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>team</th><th>W</th><th>L</th><th>points</th></tr></thead>
      <tbody>
        <tr><td>Nebula Five</td><td>—</td><td>—</td><td>—</td></tr>
        <tr><td>Nebula Five</td><td>—</td><td>—</td><td>—</td></tr>
      </tbody>
    </table>
  </div></section></div>
  </div>

  
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <div>
        <h3 class=\"panelTitle\">SCHEMA UTILISE</h3>
        <div class=\"panelDesc\">Tables et colonnes principales.</div>
      </div>
    </div>
    <div class=\"list\">
      <div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listMeta\">title, status, format, prize_pool, team, status, seed, match_id, round_name, scheduled_at, status, team, W, L, points</span></div>
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
        return "admin/pages/tournament-detail.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Detail tournoi{% endblock %}

{% block admin_content %}

        
  <div class=\"pageHeader\">
    <div>
      <h2>Detail tournoi</h2>
      <div class=\"pageSub\">Infos + inscriptions + matchs + classement.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"tournament\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
<button class=\"tab\" data-tab=\"teams\">Inscriptions</button>
<button class=\"tab\" data-tab=\"matches\">Matchs</button>
<button class=\"tab\" data-tab=\"results\">Classement</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"tournament\">
    <div class=\"tabPanel isActive\" data-panel=\"info\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>title</span><span class=\"listMeta\">Pulse Invitational</span></div><div class=\"listItem\"><span>status</span><span class=\"listMeta\"><span class=\"badge badge--warning\">PENDING</span></span></div><div class=\"listItem\"><span>format</span><span class=\"listMeta\">BO3</span></div><div class=\"listItem\"><span>prize_pool</span><span class=\"listMeta\">—</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"teams\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>team</th><th>status</th><th>seed</th></tr></thead>
      <tbody>
        <tr><td>Nebula Five</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>1</td></tr>
        <tr><td>Nebula Five</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>1</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"matches\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>match_id</th><th>round_name</th><th>scheduled_at</th><th>status</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>—</td><td>—</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
        <tr><td>1</td><td>—</td><td>—</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"results\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>team</th><th>W</th><th>L</th><th>points</th></tr></thead>
      <tbody>
        <tr><td>Nebula Five</td><td>—</td><td>—</td><td>—</td></tr>
        <tr><td>Nebula Five</td><td>—</td><td>—</td><td>—</td></tr>
      </tbody>
    </table>
  </div></section></div>
  </div>

  
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <div>
        <h3 class=\"panelTitle\">SCHEMA UTILISE</h3>
        <div class=\"panelDesc\">Tables et colonnes principales.</div>
      </div>
    </div>
    <div class=\"list\">
      <div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listMeta\">title, status, format, prize_pool, team, status, seed, match_id, round_name, scheduled_at, status, team, W, L, points</span></div>
    </div>
  </section>


      
{% endblock %}
", "admin/pages/tournament-detail.html.twig", "C:\\Users\\Malek\\Desktop\\pi\\pulse\\templates\\admin\\pages\\tournament-detail.html.twig");
    }
}
