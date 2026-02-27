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

/* front/pages/organizer-tournament-edit.html.twig */
class __TwigTemplate_1981e83be324e92a7d041072cb6e364b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-tournament-edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-tournament-edit.html.twig"));

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

        yield "PULSE - Éditer tournoi";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ORGANISATEUR", "hero_title" => "Éditer tournoi", "hero_sub" => "Mettre à jour les infos.", "breadcrumb_current" => "Éditer tournoi"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"layout\">
        
  <aside class=\"sideNav\">
    <div class=\"sideNav__title\">ESPACE ORGANISATEUR</div>
    <a class=\"\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_request_create");
        yield "\">Demande tournoi</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests");
        yield "\">Mes demandes</a><a class=\"is-active\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_tournaments");
        yield "\">Mes tournois</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_registrations");
        yield "\">Inscriptions</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_matches");
        yield "\">Matchs</a>
  </aside>

        <div>
          
        <form class=\"panel\">
          <div class=\"formGrid\">
            <label class=\"field\"><span class=\"field__label\">Titre</span><input class=\"input\" type=\"text\" value=\"Pulse Invitational\" /></label>
            <label class=\"field\"><span class=\"field__label\">Statut</span><select class=\"input\"><option>OPEN</option><option>ONGOING</option><option>FINISHED</option></select></label>
            <label class=\"field\"><span class=\"field__label\">Dates</span><input class=\"input\" type=\"text\" value=\"18–22 fév\" /></label>
            <label class=\"field\"><span class=\"field__label\">Prize pool</span><input class=\"input\" type=\"number\" value=\"1200\" /></label>
          </div>
          <div class=\"formActions\" style=\"margin-top:12px;\">
            <button class=\"btn btn--primary\" type=\"submit\">Mettre à jour</button>
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
          <div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listItem__meta\">title, status, start_date, end_date, prize_pool</span></div>
        </div>
      </div>

      
        </div>
      </div>


      ";
        // line 57
        yield from $this->load("front/partials/_footer.html.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "
    </section>
  </main>

  ";
        // line 62
        yield from $this->load("front/partials/_auth_modal.html.twig", 62)->unwrap()->yield($context);
        // line 63
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
        return "front/pages/organizer-tournament-edit.html.twig";
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
        return array (  172 => 63,  170 => 62,  164 => 58,  162 => 57,  117 => 23,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Éditer tournoi{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'ORGANISATEUR',
  hero_title: 'Éditer tournoi',
  hero_sub: 'Mettre à jour les infos.',
  breadcrumb_current: 'Éditer tournoi'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"layout\">
        
  <aside class=\"sideNav\">
    <div class=\"sideNav__title\">ESPACE ORGANISATEUR</div>
    <a class=\"\" href=\"{{ path('front_organizer_request_create') }}\">Demande tournoi</a><a class=\"\" href=\"{{ path('front_organizer_requests') }}\">Mes demandes</a><a class=\"is-active\" href=\"{{ path('front_organizer_tournaments') }}\">Mes tournois</a><a class=\"\" href=\"{{ path('front_organizer_registrations') }}\">Inscriptions</a><a class=\"\" href=\"{{ path('front_organizer_matches') }}\">Matchs</a>
  </aside>

        <div>
          
        <form class=\"panel\">
          <div class=\"formGrid\">
            <label class=\"field\"><span class=\"field__label\">Titre</span><input class=\"input\" type=\"text\" value=\"Pulse Invitational\" /></label>
            <label class=\"field\"><span class=\"field__label\">Statut</span><select class=\"input\"><option>OPEN</option><option>ONGOING</option><option>FINISHED</option></select></label>
            <label class=\"field\"><span class=\"field__label\">Dates</span><input class=\"input\" type=\"text\" value=\"18–22 fév\" /></label>
            <label class=\"field\"><span class=\"field__label\">Prize pool</span><input class=\"input\" type=\"number\" value=\"1200\" /></label>
          </div>
          <div class=\"formActions\" style=\"margin-top:12px;\">
            <button class=\"btn btn--primary\" type=\"submit\">Mettre à jour</button>
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
          <div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listItem__meta\">title, status, start_date, end_date, prize_pool</span></div>
        </div>
      </div>

      
        </div>
      </div>


      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/organizer-tournament-edit.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\organizer-tournament-edit.html.twig");
    }
}
