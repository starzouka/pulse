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

/* front/pages/contact.html.twig */
class __TwigTemplate_e26ec228011da4f80c879e8d439c779d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/contact.html.twig"));

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

        yield "PULSE - Contact & Support";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "SUPPORT", "hero_title" => "Contact & Support", "hero_sub" => "Formulaire de support visiteur.", "breadcrumb_current" => "Contact & Support"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Contact & Support</h1>
          <p>Réponse sous 24–48h.</p>
        </div>
      </div>
      <form class=\"panel\">
        <div class=\"formGrid\">
          <label class=\"field\"><span class=\"field__label\">Nom complet</span><input class=\"input\" type=\"text\" /></label>
          <label class=\"field\"><span class=\"field__label\">Email</span><input class=\"input\" type=\"email\" /></label>
          <label class=\"field\"><span class=\"field__label\">Sujet</span><input class=\"input\" type=\"text\" /></label>
          <label class=\"field\"><span class=\"field__label\">Type</span><select class=\"input\"><option>Bug</option><option>Partenariat</option><option>Support</option></select></label>
          <label class=\"field\"><span class=\"field__label\">Message</span><textarea class=\"textarea\"></textarea></label>
          <label class=\"field\"><span class=\"field__label\">Pièce jointe</span><input class=\"input\" type=\"file\" /></label>
        </div>
        <div class=\"formActions\" style=\"margin-top:12px;\">
          <button class=\"btn btn--primary\" type=\"submit\">Envoyer</button>
          <button class=\"btn btn--ghost\" type=\"button\">Annuler</button>
        </div>
      </form>
      
      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISÉES</h3>
            <div class=\"panel__desc\">Schéma réel + colonnes clés.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>Option A</b></span><span class=\"listItem__meta\">Envoi email backend (sans DB)</span></div><div class=\"listItem\"><span><b>Option B</b></span><span class=\"listItem__meta\">support_tickets (recommandé)</span></div>
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
        return "front/pages/contact.html.twig";
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

{% block title %}PULSE - Contact & Support{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'SUPPORT',
  hero_title: 'Contact & Support',
  hero_sub: 'Formulaire de support visiteur.',
  breadcrumb_current: 'Contact & Support'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Contact & Support</h1>
          <p>Réponse sous 24–48h.</p>
        </div>
      </div>
      <form class=\"panel\">
        <div class=\"formGrid\">
          <label class=\"field\"><span class=\"field__label\">Nom complet</span><input class=\"input\" type=\"text\" /></label>
          <label class=\"field\"><span class=\"field__label\">Email</span><input class=\"input\" type=\"email\" /></label>
          <label class=\"field\"><span class=\"field__label\">Sujet</span><input class=\"input\" type=\"text\" /></label>
          <label class=\"field\"><span class=\"field__label\">Type</span><select class=\"input\"><option>Bug</option><option>Partenariat</option><option>Support</option></select></label>
          <label class=\"field\"><span class=\"field__label\">Message</span><textarea class=\"textarea\"></textarea></label>
          <label class=\"field\"><span class=\"field__label\">Pièce jointe</span><input class=\"input\" type=\"file\" /></label>
        </div>
        <div class=\"formActions\" style=\"margin-top:12px;\">
          <button class=\"btn btn--primary\" type=\"submit\">Envoyer</button>
          <button class=\"btn btn--ghost\" type=\"button\">Annuler</button>
        </div>
      </form>
      
      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISÉES</h3>
            <div class=\"panel__desc\">Schéma réel + colonnes clés.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>Option A</b></span><span class=\"listItem__meta\">Envoi email backend (sans DB)</span></div><div class=\"listItem\"><span><b>Option B</b></span><span class=\"listItem__meta\">support_tickets (recommandé)</span></div>
        </div>
      </div>

    

      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/contact.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\pages\\contact.html.twig");
    }
}
