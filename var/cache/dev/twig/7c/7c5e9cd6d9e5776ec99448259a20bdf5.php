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

/* admin/pages/order-detail.html.twig */
class __TwigTemplate_ae952d928fe39ad630b3d83ca840a2d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/order-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/order-detail.html.twig"));

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

        yield "PULSE - Detail commande";
        
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
      <h2>Detail commande</h2>
      <div class=\"pageSub\">Infos + items + actions.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"order\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
<button class=\"tab\" data-tab=\"items\">Items</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"order\">
    <div class=\"tabPanel isActive\" data-panel=\"info\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>order_number</span><span class=\"listMeta\">ORD-2026-001</span></div><div class=\"listItem\"><span>status</span><span class=\"listMeta\"><span class=\"badge badge--warning\">PENDING</span></span></div><div class=\"listItem\"><span>payment_status</span><span class=\"listMeta\"><span class=\"badge badge--warning\">PENDING</span></span></div><div class=\"listItem\"><span>total_amount</span><span class=\"listMeta\">120 DT</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"items\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>product</th><th>team</th><th>unit_price</th><th>quantity</th><th>subtotal</th></tr></thead>
      <tbody>
        <tr><td>—</td><td>Nebula Five</td><td>120 DT</td><td>—</td><td>120 DT</td></tr>
        <tr><td>—</td><td>Nebula Five</td><td>120 DT</td><td>—</td><td>120 DT</td></tr>
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
      <div class=\"listItem\"><span><b>orders</b></span><span class=\"listMeta\">order_number, status, payment_status, total_amount, product, team, unit_price, quantity, subtotal</span></div>
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
        return "admin/pages/order-detail.html.twig";
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

{% block title %}PULSE - Detail commande{% endblock %}

{% block admin_content %}

        
  <div class=\"pageHeader\">
    <div>
      <h2>Detail commande</h2>
      <div class=\"pageSub\">Infos + items + actions.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"order\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
<button class=\"tab\" data-tab=\"items\">Items</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"order\">
    <div class=\"tabPanel isActive\" data-panel=\"info\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>order_number</span><span class=\"listMeta\">ORD-2026-001</span></div><div class=\"listItem\"><span>status</span><span class=\"listMeta\"><span class=\"badge badge--warning\">PENDING</span></span></div><div class=\"listItem\"><span>payment_status</span><span class=\"listMeta\"><span class=\"badge badge--warning\">PENDING</span></span></div><div class=\"listItem\"><span>total_amount</span><span class=\"listMeta\">120 DT</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"items\"><section class=\"panel\">
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>product</th><th>team</th><th>unit_price</th><th>quantity</th><th>subtotal</th></tr></thead>
      <tbody>
        <tr><td>—</td><td>Nebula Five</td><td>120 DT</td><td>—</td><td>120 DT</td></tr>
        <tr><td>—</td><td>Nebula Five</td><td>120 DT</td><td>—</td><td>120 DT</td></tr>
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
      <div class=\"listItem\"><span><b>orders</b></span><span class=\"listMeta\">order_number, status, payment_status, total_amount, product, team, unit_price, quantity, subtotal</span></div>
    </div>
  </section>


      
{% endblock %}
", "admin/pages/order-detail.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pages\\order-detail.html.twig");
    }
}
