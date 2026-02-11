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

/* admin/pages/users.html.twig */
class __TwigTemplate_4f529dde22ae45bb6067b6be9e3ae7b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/users.html.twig"));

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

        yield "PULSE - Gestion utilisateurs";
        
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
      <h2>Gestion utilisateurs</h2>
      <div class=\"pageSub\">users + images + actions batch.</div>
    </div>
    <div class=\"formActions\"><a class=\"btn btnPrimary\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_create");
        yield "\">+ Creer utilisateur</a></div>
  </div>
  
  <div class=\"filtersBar\">
    <div class=\"filterGroup\"><label>Recherche</label><input type=\"text\" placeholder=\"username/email\" /></div>
<div class=\"filterGroup\"><label>Role</label><select><option>ALL</option><option>PLAYER</option><option>ORGANIZER</option><option>ADMIN</option></select></div>
<div class=\"filterGroup\"><label>Actif</label><select><option>ALL</option><option>Actif</option><option>Suspendu</option></select></div>
<div class=\"filterGroup\"><label>Email verified</label><select><option>ALL</option><option>Oui</option><option>Non</option></select></div>
  </div>
  <section class=\"panel\">
    <div class=\"panelHeader\"><h3 class=\"panelTitle\">LISTE</h3></div>
    
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>Photo</th><th>username</th><th>email</th><th>role</th><th>is_active</th><th>email_verified</th><th>country</th><th>created_at</th><th>last_login_at</th><th>Actions</th></tr></thead>
      <tbody>
        <tr><td><span class=\"avatarSmall\">A</span></td><td>zed_99</td><td>user@email.com</td><td>PLAYER</td><td>—</td><td>user@email.com</td><td>TN</td><td>2026-02-05</td><td>—</td><td><a class=\"btn btnTiny\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_detail");
        yield "\">Voir</a></td></tr>
        <tr><td><span class=\"avatarSmall\">A</span></td><td>zed_99</td><td>user@email.com</td><td>PLAYER</td><td>—</td><td>user@email.com</td><td>TN</td><td>2026-02-05</td><td>—</td><td><a class=\"btn btnTiny\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_detail");
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
      <div class=\"listItem\"><span><b>users</b></span><span class=\"listMeta\">user_id, username, email, role, is_active, email_verified</span></div>
<div class=\"listItem\"><span><b>images</b></span><span class=\"listMeta\">image_id, file_url</span></div>
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
        return "admin/pages/users.html.twig";
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
        return array (  132 => 30,  128 => 29,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Gestion utilisateurs{% endblock %}

{% block admin_content %}

        
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion utilisateurs</h2>
      <div class=\"pageSub\">users + images + actions batch.</div>
    </div>
    <div class=\"formActions\"><a class=\"btn btnPrimary\" href=\"{{ path('admin_user_create') }}\">+ Creer utilisateur</a></div>
  </div>
  
  <div class=\"filtersBar\">
    <div class=\"filterGroup\"><label>Recherche</label><input type=\"text\" placeholder=\"username/email\" /></div>
<div class=\"filterGroup\"><label>Role</label><select><option>ALL</option><option>PLAYER</option><option>ORGANIZER</option><option>ADMIN</option></select></div>
<div class=\"filterGroup\"><label>Actif</label><select><option>ALL</option><option>Actif</option><option>Suspendu</option></select></div>
<div class=\"filterGroup\"><label>Email verified</label><select><option>ALL</option><option>Oui</option><option>Non</option></select></div>
  </div>
  <section class=\"panel\">
    <div class=\"panelHeader\"><h3 class=\"panelTitle\">LISTE</h3></div>
    
  <div class=\"dataTableWrap\">
    <table class=\"dataTable\">
      <thead><tr><th>Photo</th><th>username</th><th>email</th><th>role</th><th>is_active</th><th>email_verified</th><th>country</th><th>created_at</th><th>last_login_at</th><th>Actions</th></tr></thead>
      <tbody>
        <tr><td><span class=\"avatarSmall\">A</span></td><td>zed_99</td><td>user@email.com</td><td>PLAYER</td><td>—</td><td>user@email.com</td><td>TN</td><td>2026-02-05</td><td>—</td><td><a class=\"btn btnTiny\" href=\"{{ path('admin_user_detail') }}\">Voir</a></td></tr>
        <tr><td><span class=\"avatarSmall\">A</span></td><td>zed_99</td><td>user@email.com</td><td>PLAYER</td><td>—</td><td>user@email.com</td><td>TN</td><td>2026-02-05</td><td>—</td><td><a class=\"btn btnTiny\" href=\"{{ path('admin_user_detail') }}\">Voir</a></td></tr>
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
      <div class=\"listItem\"><span><b>users</b></span><span class=\"listMeta\">user_id, username, email, role, is_active, email_verified</span></div>
<div class=\"listItem\"><span><b>images</b></span><span class=\"listMeta\">image_id, file_url</span></div>
    </div>
  </section>


      
{% endblock %}

", "admin/pages/users.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\admin\\pages\\users.html.twig");
    }
}
