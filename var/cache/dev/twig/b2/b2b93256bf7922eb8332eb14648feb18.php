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

/* admin/pages/orders.html.twig */
class __TwigTemplate_02db65a634620bc566fcb98511c4d5fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/orders.html.twig"));

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

        yield "PULSE - Gestion commandes";
        
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
      <h2>Gestion commandes</h2>
      <div class=\"pageSub\">Orders + filtres + export.</div>
    </div>
    
  </div>
  
  <div class=\"filtersBar\">
    <div class=\"filterGroup\"><label>Recherche</label><input type=\"text\" placeholder=\"order_number\" /></div>
<div class=\"filterGroup\"><label>Status</label><select><option>ALL</option><option>PENDING</option><option>PAID</option><option>SHIPPED</option></select></div>
<div class=\"filterGroup\"><label>Payment</label><select><option>ALL</option><option>UNPAID</option><option>PAID</option></select></div>
  </div>
  <section class=\"panel\">
    <div class=\"panelHeader\"><h3 class=\"panelTitle\">LISTE</h3></div>
    
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>order_number</th><th>user</th><th>status</th><th>payment_status</th><th>payment_method</th><th>total_amount</th><th>created_at</th><th>Actions</th></tr></thead>
      <tbody>
        <tr><td>ORD-2026-001</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td><td><span class=\"badge badge--warning\">PENDING</span></td><td>—</td><td>120 DT</td><td>2026-02-05</td><td><a class=\"btn btnTiny\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_detail");
        yield "\">Voir</a></td></tr>
        <tr><td>ORD-2026-001</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td><td><span class=\"badge badge--warning\">PENDING</span></td><td>—</td><td>120 DT</td><td>2026-02-05</td><td><a class=\"btn btnTiny\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_detail");
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
      <div class=\"listItem\"><span><b>orders</b></span><span class=\"listMeta\">order_number, user, status, payment_status, payment_method, total_amount, created_at</span></div>
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
        return "admin/pages/orders.html.twig";
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

{% block title %}PULSE - Gestion commandes{% endblock %}

{% block admin_content %}

        
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion commandes</h2>
      <div class=\"pageSub\">Orders + filtres + export.</div>
    </div>
    
  </div>
  
  <div class=\"filtersBar\">
    <div class=\"filterGroup\"><label>Recherche</label><input type=\"text\" placeholder=\"order_number\" /></div>
<div class=\"filterGroup\"><label>Status</label><select><option>ALL</option><option>PENDING</option><option>PAID</option><option>SHIPPED</option></select></div>
<div class=\"filterGroup\"><label>Payment</label><select><option>ALL</option><option>UNPAID</option><option>PAID</option></select></div>
  </div>
  <section class=\"panel\">
    <div class=\"panelHeader\"><h3 class=\"panelTitle\">LISTE</h3></div>
    
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>order_number</th><th>user</th><th>status</th><th>payment_status</th><th>payment_method</th><th>total_amount</th><th>created_at</th><th>Actions</th></tr></thead>
      <tbody>
        <tr><td>ORD-2026-001</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td><td><span class=\"badge badge--warning\">PENDING</span></td><td>—</td><td>120 DT</td><td>2026-02-05</td><td><a class=\"btn btnTiny\" href=\"{{ path('admin_order_detail') }}\">Voir</a></td></tr>
        <tr><td>ORD-2026-001</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td><td><span class=\"badge badge--warning\">PENDING</span></td><td>—</td><td>120 DT</td><td>2026-02-05</td><td><a class=\"btn btnTiny\" href=\"{{ path('admin_order_detail') }}\">Voir</a></td></tr>
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
      <div class=\"listItem\"><span><b>orders</b></span><span class=\"listMeta\">order_number, user, status, payment_status, payment_method, total_amount, created_at</span></div>
    </div>
  </section>


      
{% endblock %}

", "admin/pages/orders.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\admin\\pages\\orders.html.twig");
    }
}
