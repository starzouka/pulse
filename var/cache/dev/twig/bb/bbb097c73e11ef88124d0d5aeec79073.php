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

/* admin/pages/reports.html.twig */
class __TwigTemplate_0fbb6d86f5a529e77ec25eeb468b7090 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/reports.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/reports.html.twig"));

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

        yield "PULSE - Gestion signalements";
        
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
      <h2>Gestion signalements</h2>
      <div class=\"pageSub\">reports OPEN/IN_REVIEW/CLOSED.</div>
    </div>
    
  </div>
  
  <div class=\"filtersBar\">
    <div class=\"filterGroup\"><label>Status</label><select><option>ALL</option><option>OPEN</option><option>IN_REVIEW</option><option>CLOSED</option></select></div>
<div class=\"filterGroup\"><label>Target</label><select><option>ALL</option><option>POST</option><option>COMMENT</option><option>USER</option><option>TEAM</option></select></div>
<div class=\"filterGroup\"><label>Recherche</label><input type=\"text\" placeholder=\"reason, reporter\" /></div>
  </div>
  <section class=\"panel\">
    <div class=\"panelHeader\"><h3 class=\"panelTitle\">LISTE</h3></div>
    
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>report_id</th><th>reporter</th><th>target_type</th><th>target_id</th><th>status</th><th>created_at</th><th>Actions</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>—</td><td>—</td><td>1</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>2026-02-05</td><td><a class=\"btn btnTiny\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_report_detail");
        yield "\">Voir</a></td></tr>
        <tr><td>1</td><td>—</td><td>—</td><td>1</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>2026-02-05</td><td><a class=\"btn btnTiny\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_report_detail");
        yield "\">Voir</a></td></tr>
      </tbody>
    </table>
  </div>
    
  </section>
  
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <div>
        <h3 class=\"panelTitle\">SCHEMA UTILISE</h3>
        <div class=\"panelDesc\">Tables et colonnes principales.</div>
      </div>
    </div>
    <div class=\"list\">
      <div class=\"listItem\"><span><b>reports</b></span><span class=\"listMeta\">report_id, reporter, target_type, target_id, status, created_at</span></div>
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
        return "admin/pages/reports.html.twig";
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
        return array (  128 => 29,  124 => 28,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Gestion signalements{% endblock %}

{% block admin_content %}

        
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion signalements</h2>
      <div class=\"pageSub\">reports OPEN/IN_REVIEW/CLOSED.</div>
    </div>
    
  </div>
  
  <div class=\"filtersBar\">
    <div class=\"filterGroup\"><label>Status</label><select><option>ALL</option><option>OPEN</option><option>IN_REVIEW</option><option>CLOSED</option></select></div>
<div class=\"filterGroup\"><label>Target</label><select><option>ALL</option><option>POST</option><option>COMMENT</option><option>USER</option><option>TEAM</option></select></div>
<div class=\"filterGroup\"><label>Recherche</label><input type=\"text\" placeholder=\"reason, reporter\" /></div>
  </div>
  <section class=\"panel\">
    <div class=\"panelHeader\"><h3 class=\"panelTitle\">LISTE</h3></div>
    
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>report_id</th><th>reporter</th><th>target_type</th><th>target_id</th><th>status</th><th>created_at</th><th>Actions</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>—</td><td>—</td><td>1</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>2026-02-05</td><td><a class=\"btn btnTiny\" href=\"{{ path('admin_report_detail') }}\">Voir</a></td></tr>
        <tr><td>1</td><td>—</td><td>—</td><td>1</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>2026-02-05</td><td><a class=\"btn btnTiny\" href=\"{{ path('admin_report_detail') }}\">Voir</a></td></tr>
      </tbody>
    </table>
  </div>
    
  </section>
  
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <div>
        <h3 class=\"panelTitle\">SCHEMA UTILISE</h3>
        <div class=\"panelDesc\">Tables et colonnes principales.</div>
      </div>
    </div>
    <div class=\"list\">
      <div class=\"listItem\"><span><b>reports</b></span><span class=\"listMeta\">report_id, reporter, target_type, target_id, status, created_at</span></div>
    </div>
  </section>


      
{% endblock %}

", "admin/pages/reports.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\admin\\pages\\reports.html.twig");
    }
}
