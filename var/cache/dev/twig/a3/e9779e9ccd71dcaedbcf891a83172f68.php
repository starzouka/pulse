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

/* admin/pages/product-form.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/47/4782236bc18a74c6e2c40e9a7ed78394.php
class __TwigTemplate_df38c558662da06d0e58f2b53cd8ab14 extends Template
========
class __TwigTemplate_135dea5e3ad25dabf275d029aaa777a8 extends Template
>>>>>>>> main:var/cache/dev/twig/a3/e9779e9ccd71dcaedbcf891a83172f68.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/product-form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/product-form.html.twig"));

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

        yield "PULSE - Form produit";
        
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
      <h2>Form produit</h2>
      <div class=\"pageSub\"></div>
    </div>
  </div>
  <section class=\"panel\">
    <div class=\"formGrid\">
      <div class=\"field\"><label>team_id*</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>name*</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>sku</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>price*</label><input type=\"number\" placeholder=\"\" /></div>
<div class=\"field\"><label>stock_qty*</label><input type=\"number\" placeholder=\"\" /></div>
<div class=\"field\"><label>is_active</label><select><option>true</option><option>false</option></select></div>
<div class=\"field\"><label>description</label><textarea placeholder=\"\"></textarea></div>
<div class=\"field\"><label>Images</label><input type=\"file\" placeholder=\"\" /></div>
    </div>
    <div class=\"formActions\" style=\"margin-top:12px;\">
      <button class=\"btn btnPrimary\">Enregistrer</button>
      <button class=\"btn btnGhost\">Annuler</button>
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
      <div class=\"listItem\"><span><b>products</b></span><span class=\"listMeta\">Voir colonnes definies dans le schema</span></div>
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
        return "admin/pages/product-form.html.twig";
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

{% block title %}PULSE - Form produit{% endblock %}

{% block admin_content %}

        
  <div class=\"pageHeader\">
    <div>
      <h2>Form produit</h2>
      <div class=\"pageSub\"></div>
    </div>
  </div>
  <section class=\"panel\">
    <div class=\"formGrid\">
      <div class=\"field\"><label>team_id*</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>name*</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>sku</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>price*</label><input type=\"number\" placeholder=\"\" /></div>
<div class=\"field\"><label>stock_qty*</label><input type=\"number\" placeholder=\"\" /></div>
<div class=\"field\"><label>is_active</label><select><option>true</option><option>false</option></select></div>
<div class=\"field\"><label>description</label><textarea placeholder=\"\"></textarea></div>
<div class=\"field\"><label>Images</label><input type=\"file\" placeholder=\"\" /></div>
    </div>
    <div class=\"formActions\" style=\"margin-top:12px;\">
      <button class=\"btn btnPrimary\">Enregistrer</button>
      <button class=\"btn btnGhost\">Annuler</button>
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
      <div class=\"listItem\"><span><b>products</b></span><span class=\"listMeta\">Voir colonnes definies dans le schema</span></div>
    </div>
  </section>


      
{% endblock %}
<<<<<<<< HEAD:var/cache/dev/twig/47/4782236bc18a74c6e2c40e9a7ed78394.php
", "admin/pages/product-form.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\admin\\pages\\product-form.html.twig");
========
", "admin/pages/product-form.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\product-form.html.twig");
>>>>>>>> main:var/cache/dev/twig/a3/e9779e9ccd71dcaedbcf891a83172f68.php
    }
}
