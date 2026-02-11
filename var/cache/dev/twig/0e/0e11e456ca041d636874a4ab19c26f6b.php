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

/* admin/pages/user-detail.html.twig */
class __TwigTemplate_b9c9ee8279e666ede4f6e5c7c522b033 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/user-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/user-detail.html.twig"));

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

        yield "PULSE - Detail utilisateur";
        
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
      <h2>Detail utilisateur</h2>
      <div class=\"pageSub\">Profil, equipes, activite, commerce, moderation.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"user\">
    <button class=\"tab isActive\" data-tab=\"profil\">Profil</button>
<button class=\"tab\" data-tab=\"equipes\">Equipes</button>
<button class=\"tab\" data-tab=\"activite\">Activite</button>
<button class=\"tab\" data-tab=\"commerce\">E-commerce</button>
<button class=\"tab\" data-tab=\"moderation\">Moderation</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"user\">
    <div class=\"tabPanel isActive\" data-panel=\"profil\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>user_id</span><span class=\"listMeta\">zed_99</span></div><div class=\"listItem\"><span>username</span><span class=\"listMeta\">zed_99</span></div><div class=\"listItem\"><span>email</span><span class=\"listMeta\">user@email.com</span></div><div class=\"listItem\"><span>role</span><span class=\"listMeta\">PLAYER</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"equipes\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>team</th><th>joined_at</th><th>is_active</th></tr></thead>
      <tbody>
        <tr><td>Nebula Five</td><td>—</td><td>—</td></tr>
        <tr><td>Nebula Five</td><td>—</td><td>—</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"activite\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>post_id</th><th>created_at</th><th>visibility</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>2026-02-05</td><td>—</td></tr>
        <tr><td>1</td><td>2026-02-05</td><td>—</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"commerce\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>order_number</th><th>status</th><th>total_amount</th></tr></thead>
      <tbody>
        <tr><td>ORD-2026-001</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>120 DT</td></tr>
        <tr><td>ORD-2026-001</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>120 DT</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"moderation\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>report_id</th><th>target_type</th><th>status</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>—</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
        <tr><td>1</td><td>—</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
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
      <div class=\"listItem\"><span><b>users</b></span><span class=\"listMeta\">user_id, username, email, role, profile_image_id</span></div>
<div class=\"listItem\"><span><b>team_members</b></span><span class=\"listMeta\">team_id, user_id, joined_at</span></div>
<div class=\"listItem\"><span><b>orders</b></span><span class=\"listMeta\">order_id, user_id, status</span></div>
<div class=\"listItem\"><span><b>reports</b></span><span class=\"listMeta\">report_id, reporter_user_id, target_type</span></div>
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
        return "admin/pages/user-detail.html.twig";
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

{% block title %}PULSE - Detail utilisateur{% endblock %}

{% block admin_content %}

        
  <div class=\"pageHeader\">
    <div>
      <h2>Detail utilisateur</h2>
      <div class=\"pageSub\">Profil, equipes, activite, commerce, moderation.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"user\">
    <button class=\"tab isActive\" data-tab=\"profil\">Profil</button>
<button class=\"tab\" data-tab=\"equipes\">Equipes</button>
<button class=\"tab\" data-tab=\"activite\">Activite</button>
<button class=\"tab\" data-tab=\"commerce\">E-commerce</button>
<button class=\"tab\" data-tab=\"moderation\">Moderation</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"user\">
    <div class=\"tabPanel isActive\" data-panel=\"profil\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>user_id</span><span class=\"listMeta\">zed_99</span></div><div class=\"listItem\"><span>username</span><span class=\"listMeta\">zed_99</span></div><div class=\"listItem\"><span>email</span><span class=\"listMeta\">user@email.com</span></div><div class=\"listItem\"><span>role</span><span class=\"listMeta\">PLAYER</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"equipes\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>team</th><th>joined_at</th><th>is_active</th></tr></thead>
      <tbody>
        <tr><td>Nebula Five</td><td>—</td><td>—</td></tr>
        <tr><td>Nebula Five</td><td>—</td><td>—</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"activite\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>post_id</th><th>created_at</th><th>visibility</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>2026-02-05</td><td>—</td></tr>
        <tr><td>1</td><td>2026-02-05</td><td>—</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"commerce\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>order_number</th><th>status</th><th>total_amount</th></tr></thead>
      <tbody>
        <tr><td>ORD-2026-001</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>120 DT</td></tr>
        <tr><td>ORD-2026-001</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>120 DT</td></tr>
      </tbody>
    </table>
  </div></section></div>
<div class=\"tabPanel\" data-panel=\"moderation\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>report_id</th><th>target_type</th><th>status</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>—</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
        <tr><td>1</td><td>—</td><td><span class=\"badge badge--warning\">PENDING</span></td></tr>
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
      <div class=\"listItem\"><span><b>users</b></span><span class=\"listMeta\">user_id, username, email, role, profile_image_id</span></div>
<div class=\"listItem\"><span><b>team_members</b></span><span class=\"listMeta\">team_id, user_id, joined_at</span></div>
<div class=\"listItem\"><span><b>orders</b></span><span class=\"listMeta\">order_id, user_id, status</span></div>
<div class=\"listItem\"><span><b>reports</b></span><span class=\"listMeta\">report_id, reporter_user_id, target_type</span></div>
    </div>
  </section>


      
{% endblock %}
", "admin/pages/user-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\admin\\pages\\user-detail.html.twig");
    }
}
