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

/* admin/pages/tournament-request-detail.html.twig */
class __TwigTemplate_1ae469652491a8a9920352f144d5378a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-request-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-request-detail.html.twig"));

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

        yield "PULSE - Detail demande tournoi";
        
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
      <h2>Detail demande tournoi</h2>
      <div class=\"pageSub\">Accepter / Refuser + admin_note.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"trequest\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
<button class=\"tab\" data-tab=\"admin\">Admin</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"trequest\">
    <div class=\"tabPanel isActive\" data-panel=\"info\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>title</span><span class=\"listMeta\">Pulse Invitational</span></div><div class=\"listItem\"><span>game_id</span><span class=\"listMeta\">Valorant</span></div><div class=\"listItem\"><span>format</span><span class=\"listMeta\">BO3</span></div><div class=\"listItem\"><span>max_teams</span><span class=\"listMeta\">Nebula Five</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"admin\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>status</span><span class=\"listMeta\"><span class=\"badge badge--warning\">PENDING</span></span></div><div class=\"listItem\"><span>admin_response_note</span><span class=\"listMeta\">—</span></div><div class=\"listItem\"><span>reviewed_at</span><span class=\"listMeta\">—</span></div></div></section></div>
  </div>

  
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <div>
        <h3 class=\"panelTitle\">SCHEMA UTILISE</h3>
        <div class=\"panelDesc\">Tables et colonnes principales.</div>
      </div>
    </div>
    <div class=\"list\">
      <div class=\"listItem\"><span><b>tournament_requests</b></span><span class=\"listMeta\">title, game_id, format, max_teams, status, admin_response_note, reviewed_at</span></div>
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
        return "admin/pages/tournament-request-detail.html.twig";
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

{% block title %}PULSE - Detail demande tournoi{% endblock %}

{% block admin_content %}

        
  <div class=\"pageHeader\">
    <div>
      <h2>Detail demande tournoi</h2>
      <div class=\"pageSub\">Accepter / Refuser + admin_note.</div>
    </div>
    
  </div>
  
  <div class=\"tabs\" data-tabs=\"trequest\">
    <button class=\"tab isActive\" data-tab=\"info\">Infos</button>
<button class=\"tab\" data-tab=\"admin\">Admin</button>
  </div>
  <div class=\"tabPanels\" data-panels=\"trequest\">
    <div class=\"tabPanel isActive\" data-panel=\"info\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>title</span><span class=\"listMeta\">Pulse Invitational</span></div><div class=\"listItem\"><span>game_id</span><span class=\"listMeta\">Valorant</span></div><div class=\"listItem\"><span>format</span><span class=\"listMeta\">BO3</span></div><div class=\"listItem\"><span>max_teams</span><span class=\"listMeta\">Nebula Five</span></div></div></section></div>
<div class=\"tabPanel\" data-panel=\"admin\"><section class=\"panel\"><div class=\"list\"><div class=\"listItem\"><span>status</span><span class=\"listMeta\"><span class=\"badge badge--warning\">PENDING</span></span></div><div class=\"listItem\"><span>admin_response_note</span><span class=\"listMeta\">—</span></div><div class=\"listItem\"><span>reviewed_at</span><span class=\"listMeta\">—</span></div></div></section></div>
  </div>

  
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <div>
        <h3 class=\"panelTitle\">SCHEMA UTILISE</h3>
        <div class=\"panelDesc\">Tables et colonnes principales.</div>
      </div>
    </div>
    <div class=\"list\">
      <div class=\"listItem\"><span><b>tournament_requests</b></span><span class=\"listMeta\">title, game_id, format, max_teams, status, admin_response_note, reviewed_at</span></div>
    </div>
  </section>


      
{% endblock %}
", "admin/pages/tournament-request-detail.html.twig", "C:\\Users\\Malek\\Desktop\\pi\\pulse\\templates\\admin\\pages\\tournament-request-detail.html.twig");
    }
}
