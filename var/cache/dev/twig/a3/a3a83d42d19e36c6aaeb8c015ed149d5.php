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

/* front/pages/faq.html.twig */
class __TwigTemplate_e9919d1fd874cde2c56a0861c154e476 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/faq.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/faq.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "PULSE - FAQ / Règlement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "

  ";
        // line 8
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "AIDE", "hero_title" => "FAQ / Règlement", "hero_sub" => "Règles des tournois, boutique et comportement.", "breadcrumb_current" => "FAQ / Règlement"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"panel\">
        <div class=\"filtersRow\">
          <input class=\"input\" type=\"search\" placeholder=\"Rechercher une question...\" />
          <span class=\"muted\">Dernière mise à jour: 05/02/2026</span>
        </div>
      </div>
      <div class=\"panel faq\">
        <details open>
          <summary>Comment s’inscrire à un tournoi ?</summary>
          <p class=\"muted\">Connectez-vous, choisissez votre équipe et cliquez sur “Inscrire”.</p>
        </details>
        <details>
          <summary>Puis-je rejoindre plusieurs équipes ?</summary>
          <p class=\"muted\">Oui, selon les règles de votre ligue.</p>
        </details>
        <details>
          <summary>Comment suivre mes commandes ?</summary>
          <p class=\"muted\">Depuis l’espace joueur, onglet “Commandes”.</p>
        </details>
      </div>
      
      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISÉES</h3>
            <div class=\"panel__desc\">Schéma réel + colonnes clés.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>Aucune table</b></span><span class=\"listItem__meta\">Page statique (option CMS)</span></div>
        </div>
      </div>

    

      ";
        // line 54
        yield from $this->load("front/partials/_footer.html.twig", 54)->unwrap()->yield($context);
        // line 55
        yield "
    </section>
  </main>

  ";
        // line 59
        yield from $this->load("front/partials/_auth_modal.html.twig", 59)->unwrap()->yield($context);
        // line 60
        yield "
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
        return "front/pages/faq.html.twig";
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
        return array (  158 => 60,  156 => 59,  150 => 55,  148 => 54,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - FAQ / Règlement{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'AIDE',
  hero_title: 'FAQ / Règlement',
  hero_sub: 'Règles des tournois, boutique et comportement.',
  breadcrumb_current: 'FAQ / Règlement'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"panel\">
        <div class=\"filtersRow\">
          <input class=\"input\" type=\"search\" placeholder=\"Rechercher une question...\" />
          <span class=\"muted\">Dernière mise à jour: 05/02/2026</span>
        </div>
      </div>
      <div class=\"panel faq\">
        <details open>
          <summary>Comment s’inscrire à un tournoi ?</summary>
          <p class=\"muted\">Connectez-vous, choisissez votre équipe et cliquez sur “Inscrire”.</p>
        </details>
        <details>
          <summary>Puis-je rejoindre plusieurs équipes ?</summary>
          <p class=\"muted\">Oui, selon les règles de votre ligue.</p>
        </details>
        <details>
          <summary>Comment suivre mes commandes ?</summary>
          <p class=\"muted\">Depuis l’espace joueur, onglet “Commandes”.</p>
        </details>
      </div>
      
      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISÉES</h3>
            <div class=\"panel__desc\">Schéma réel + colonnes clés.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>Aucune table</b></span><span class=\"listItem__meta\">Page statique (option CMS)</span></div>
        </div>
      </div>

    

      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/faq.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\faq.html.twig");
    }
}
