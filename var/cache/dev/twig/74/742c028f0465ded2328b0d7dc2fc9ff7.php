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

/* admin/pages/team-detail.html.twig */
class __TwigTemplate_d3856dd610f1bf3d46159dad064b1583 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/team-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/team-detail.html.twig"));

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

        yield "PULSE - Detail equipe";
        
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
      <h2>Detail equipe</h2>
      <div class=\"pageSub\">Infos + membres + produits + tournois.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"team\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
<button class=\"tab\" data-tab=\"members\">Membres</button>
<button class=\"tab\" data-tab=\"requests\">Demandes</button>
<button class=\"tab\" data-tab=\"invites\">Invitations</button>
<button class=\"tab\" data-tab=\"products\">Produits</button>
<button class=\"tab\" data-tab=\"tournaments\">Tournois</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"team\">
    <div class=\"tabPanel isActive\" data-panel=\"info\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>name</span><span class=\"listMeta\">—</span></div><div class=\"listItem\"><span>region</span><span class=\"listMeta\">TN</span></div><div class=\"listItem\"><span>captain_user_id</span><span class=\"listMeta\">zed_99</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"members\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>user</th><th>joined_at</th><th>is_active</th></tr></thead>
      <tbody>
        <tr><td>zed_99</td><td>—</td><td>—</td></tr>
        <tr><td>zed_99</td><td>—</td><td>—</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"requests\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>request_id</th><th>user</th><th>status</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
        <tr><td>1</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"invites\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>invite_id</th><th>invited_user</th><th>status</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
        <tr><td>1</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"products\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>product_id</th><th>name</th><th>price</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>—</td><td>120 DT</td></tr>
        <tr><td>1</td><td>—</td><td>120 DT</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"tournaments\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>tournament_id</th><th>status</th><th>seed</th></tr></thead>
      <tbody>
        <tr><td>1</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>1</td></tr>
        <tr><td>1</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>1</td></tr>
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
      <div class=\"listItem\"><span><b>teams</b></span><span class=\"listMeta\">name, region, captain_user_id, user, joined_at, is_active, request_id, user, status, invite_id, invited_user, status, product_id, name, price, tournament_id, status, seed</span></div>
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
        return "admin/pages/team-detail.html.twig";
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

{% block title %}PULSE - Detail equipe{% endblock %}

{% block admin_content %}

        
  <div class=\"pageHeader\">
    <div>
      <h2>Detail equipe</h2>
      <div class=\"pageSub\">Infos + membres + produits + tournois.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"team\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
<button class=\"tab\" data-tab=\"members\">Membres</button>
<button class=\"tab\" data-tab=\"requests\">Demandes</button>
<button class=\"tab\" data-tab=\"invites\">Invitations</button>
<button class=\"tab\" data-tab=\"products\">Produits</button>
<button class=\"tab\" data-tab=\"tournaments\">Tournois</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"team\">
    <div class=\"tabPanel isActive\" data-panel=\"info\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>name</span><span class=\"listMeta\">—</span></div><div class=\"listItem\"><span>region</span><span class=\"listMeta\">TN</span></div><div class=\"listItem\"><span>captain_user_id</span><span class=\"listMeta\">zed_99</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"members\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>user</th><th>joined_at</th><th>is_active</th></tr></thead>
      <tbody>
        <tr><td>zed_99</td><td>—</td><td>—</td></tr>
        <tr><td>zed_99</td><td>—</td><td>—</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"requests\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>request_id</th><th>user</th><th>status</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
        <tr><td>1</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"invites\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>invite_id</th><th>invited_user</th><th>status</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
        <tr><td>1</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"products\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>product_id</th><th>name</th><th>price</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>—</td><td>120 DT</td></tr>
        <tr><td>1</td><td>—</td><td>120 DT</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"tournaments\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>tournament_id</th><th>status</th><th>seed</th></tr></thead>
      <tbody>
        <tr><td>1</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>1</td></tr>
        <tr><td>1</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>1</td></tr>
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
      <div class=\"listItem\"><span><b>teams</b></span><span class=\"listMeta\">name, region, captain_user_id, user, joined_at, is_active, request_id, user, status, invite_id, invited_user, status, product_id, name, price, tournament_id, status, seed</span></div>
    </div>
  </section>


      
{% endblock %}
", "admin/pages/team-detail.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pages\\team-detail.html.twig");
    }
}
