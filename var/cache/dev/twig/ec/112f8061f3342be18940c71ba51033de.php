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

/* admin/pages/product-detail.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/a8/a8be323532dec31d04f308e4911e2d93.php
class __TwigTemplate_8860a745b75a70ff8b7691e6bc3881fa extends Template
========
class __TwigTemplate_d99046b80589e5b87acd7d983e7da666 extends Template
>>>>>>>> main:var/cache/dev/twig/ec/112f8061f3342be18940c71ba51033de.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/product-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/product-detail.html.twig"));

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

        yield "PULSE - Detail produit";
        
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
      <h2>Detail produit</h2>
      <div class=\"pageSub\">Infos + commandes impactees.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"product\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
<button class=\"tab\" data-tab=\"orders\">Commandes</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"product\">
    <div class=\"tabPanel isActive\" data-panel=\"info\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>product_id</span><span class=\"listMeta\">1</span></div><div class=\"listItem\"><span>name</span><span class=\"listMeta\">—</span></div><div class=\"listItem\"><span>price</span><span class=\"listMeta\">120 DT</span></div><div class=\"listItem\"><span>stock_qty</span><span class=\"listMeta\">—</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"orders\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>order_number</th><th>status</th><th>quantity</th></tr></thead>
      <tbody>
        <tr><td>ORD-2026-001</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>—</td></tr>
        <tr><td>ORD-2026-001</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>—</td></tr>
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
      <div class=\"listItem\"><span><b>products</b></span><span class=\"listMeta\">product_id, name, price, stock_qty, order_number, status, quantity</span></div>
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
        return "admin/pages/product-detail.html.twig";
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

{% block title %}PULSE - Detail produit{% endblock %}

{% block admin_content %}

        
  <div class=\"pageHeader\">
    <div>
      <h2>Detail produit</h2>
      <div class=\"pageSub\">Infos + commandes impactees.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"product\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
<button class=\"tab\" data-tab=\"orders\">Commandes</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"product\">
    <div class=\"tabPanel isActive\" data-panel=\"info\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>product_id</span><span class=\"listMeta\">1</span></div><div class=\"listItem\"><span>name</span><span class=\"listMeta\">—</span></div><div class=\"listItem\"><span>price</span><span class=\"listMeta\">120 DT</span></div><div class=\"listItem\"><span>stock_qty</span><span class=\"listMeta\">—</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"orders\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>order_number</th><th>status</th><th>quantity</th></tr></thead>
      <tbody>
        <tr><td>ORD-2026-001</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>—</td></tr>
        <tr><td>ORD-2026-001</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>—</td></tr>
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
      <div class=\"listItem\"><span><b>products</b></span><span class=\"listMeta\">product_id, name, price, stock_qty, order_number, status, quantity</span></div>
    </div>
  </section>


      
{% endblock %}
<<<<<<<< HEAD:var/cache/dev/twig/a8/a8be323532dec31d04f308e4911e2d93.php
", "admin/pages/product-detail.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\admin\\pages\\product-detail.html.twig");
========
", "admin/pages/product-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\product-detail.html.twig");
>>>>>>>> main:var/cache/dev/twig/ec/112f8061f3342be18940c71ba51033de.php
    }
}
