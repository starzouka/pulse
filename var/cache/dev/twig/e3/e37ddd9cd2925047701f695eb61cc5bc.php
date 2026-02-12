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

/* admin/pages/tournament-form.html.twig */
class __TwigTemplate_4b450314149ebc4c48ed294287f5345d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-form.html.twig"));

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

        yield "PULSE - Form tournoi";
        
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
      <h2>Form tournoi</h2>
      <div class=\"pageSub\"></div>
    </div>
  </div>
  <section class=\"panel\">
    <div class=\"formGrid\">
      <div class=\"field\"><label>organizer_user_id*</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>game_id*</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>title*</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>start_date*</label><input type=\"date\" placeholder=\"\" /></div>
<div class=\"field\"><label>end_date*</label><input type=\"date\" placeholder=\"\" /></div>
<div class=\"field\"><label>registration_deadline</label><input type=\"date\" placeholder=\"\" /></div>
<div class=\"field\"><label>max_teams*</label><input type=\"number\" placeholder=\"\" /></div>
<div class=\"field\"><label>format*</label><select><option>BO1</option><option>BO3</option><option>BO5</option></select></div>
<div class=\"field\"><label>registration_mode*</label><select><option>OPEN</option><option>APPROVAL</option></select></div>
<div class=\"field\"><label>prize_pool*</label><input type=\"number\" placeholder=\"\" /></div>
<div class=\"field\"><label>prize_description</label><textarea placeholder=\"\"></textarea></div>
<div class=\"field\"><label>description</label><textarea placeholder=\"\"></textarea></div>
<div class=\"field\"><label>rules</label><textarea placeholder=\"\"></textarea></div>
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
      <div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listMeta\">Voir colonnes definies dans le schema</span></div>
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
        return "admin/pages/tournament-form.html.twig";
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

{% block title %}PULSE - Form tournoi{% endblock %}

{% block admin_content %}

        
  <div class=\"pageHeader\">
    <div>
      <h2>Form tournoi</h2>
      <div class=\"pageSub\"></div>
    </div>
  </div>
  <section class=\"panel\">
    <div class=\"formGrid\">
      <div class=\"field\"><label>organizer_user_id*</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>game_id*</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>title*</label><input type=\"text\" placeholder=\"\" /></div>
<div class=\"field\"><label>start_date*</label><input type=\"date\" placeholder=\"\" /></div>
<div class=\"field\"><label>end_date*</label><input type=\"date\" placeholder=\"\" /></div>
<div class=\"field\"><label>registration_deadline</label><input type=\"date\" placeholder=\"\" /></div>
<div class=\"field\"><label>max_teams*</label><input type=\"number\" placeholder=\"\" /></div>
<div class=\"field\"><label>format*</label><select><option>BO1</option><option>BO3</option><option>BO5</option></select></div>
<div class=\"field\"><label>registration_mode*</label><select><option>OPEN</option><option>APPROVAL</option></select></div>
<div class=\"field\"><label>prize_pool*</label><input type=\"number\" placeholder=\"\" /></div>
<div class=\"field\"><label>prize_description</label><textarea placeholder=\"\"></textarea></div>
<div class=\"field\"><label>description</label><textarea placeholder=\"\"></textarea></div>
<div class=\"field\"><label>rules</label><textarea placeholder=\"\"></textarea></div>
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
      <div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listMeta\">Voir colonnes definies dans le schema</span></div>
    </div>
  </section>


      
{% endblock %}
", "admin/pages/tournament-form.html.twig", "C:\\Users\\Malek\\Desktop\\pi\\pulse\\templates\\admin\\pages\\tournament-form.html.twig");
    }
}
