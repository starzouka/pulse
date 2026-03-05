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

/* front/pages/captain-team-create.html.twig */
class __TwigTemplate_81466ddf985eaa72f718c5db5c3a997c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-team-create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-team-create.html.twig"));

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

        yield "PULSE - Créer une équipe";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Créer une équipe", "hero_sub" => "Créer une nouvelle équipe.", "breadcrumb_current" => "Créer une équipe"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"layout\">
        
  <aside class=\"sideNav\">
    <div class=\"sideNav__title\">ESPACE CAPITAINE</div>
    <a class=\"is-active\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage");
        yield "\">Mon équipe</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members");
        yield "\">Membres</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_requests");
        yield "\">Demandes</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_invite");
        yield "\">Inviter</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_products");
        yield "\">Produits</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_orders");
        yield "\">Commandes</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_tournaments");
        yield "\">Tournois</a>
  </aside>

        <div>
          
        
          <div class=\"panel\">
            <div class=\"filtersRow\">
              <div class=\"select\">
                <select>
                  <option>Équipe active</option>
                  <option>Nebula Five</option>
                  <option>North Hydra</option>
                </select>
              </div>
              <button class=\"btn btn--ghost\" type=\"button\">Changer</button>
            </div>
          </div>

        <form class=\"panel\">
          <div class=\"formGrid\">
            <label class=\"field\"><span class=\"field__label\">Nom</span><input class=\"input\" type=\"text\" /></label>
            <label class=\"field\"><span class=\"field__label\">Région</span><input class=\"input\" type=\"text\" /></label>
            <label class=\"field\"><span class=\"field__label\">Description</span><textarea class=\"textarea\"></textarea></label>
            <label class=\"field\"><span class=\"field__label\">Logo</span><input class=\"input\" type=\"file\" /></label>
          </div>
          <div class=\"formActions\" style=\"margin-top:12px;\">
            <button class=\"btn btn--primary\" type=\"submit\">Créer équipe</button>
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
          <div class=\"listItem\"><span><b>teams</b></span><span class=\"listItem__meta\">team_id, name, region, captain_user_id, logo_image_id</span></div><div class=\"listItem\"><span><b>team_members</b></span><span class=\"listItem__meta\">team_id, user_id, joined_at, is_active</span></div><div class=\"listItem\"><span><b>images</b></span><span class=\"listItem__meta\">image_id, file_url</span></div>
        </div>
      </div>

      
        </div>
      </div>


      ";
        // line 71
        yield from $this->load("front/partials/_footer.html.twig", 71)->unwrap()->yield($context);
        // line 72
        yield "
    </section>
  </main>

  ";
        // line 76
        yield from $this->load("front/partials/_auth_modal.html.twig", 76)->unwrap()->yield($context);
        // line 77
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
        return "front/pages/captain-team-create.html.twig";
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
        return array (  190 => 77,  188 => 76,  182 => 72,  180 => 71,  117 => 23,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Créer une équipe{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'CAPITAINE',
  hero_title: 'Créer une équipe',
  hero_sub: 'Créer une nouvelle équipe.',
  breadcrumb_current: 'Créer une équipe'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"layout\">
        
  <aside class=\"sideNav\">
    <div class=\"sideNav__title\">ESPACE CAPITAINE</div>
    <a class=\"is-active\" href=\"{{ path('front_captain_team_manage') }}\">Mon équipe</a><a class=\"\" href=\"{{ path('front_captain_members') }}\">Membres</a><a class=\"\" href=\"{{ path('front_captain_requests') }}\">Demandes</a><a class=\"\" href=\"{{ path('front_captain_invite') }}\">Inviter</a><a class=\"\" href=\"{{ path('front_captain_products') }}\">Produits</a><a class=\"\" href=\"{{ path('front_captain_orders') }}\">Commandes</a><a class=\"\" href=\"{{ path('front_captain_tournaments') }}\">Tournois</a>
  </aside>

        <div>
          
        
          <div class=\"panel\">
            <div class=\"filtersRow\">
              <div class=\"select\">
                <select>
                  <option>Équipe active</option>
                  <option>Nebula Five</option>
                  <option>North Hydra</option>
                </select>
              </div>
              <button class=\"btn btn--ghost\" type=\"button\">Changer</button>
            </div>
          </div>

        <form class=\"panel\">
          <div class=\"formGrid\">
            <label class=\"field\"><span class=\"field__label\">Nom</span><input class=\"input\" type=\"text\" /></label>
            <label class=\"field\"><span class=\"field__label\">Région</span><input class=\"input\" type=\"text\" /></label>
            <label class=\"field\"><span class=\"field__label\">Description</span><textarea class=\"textarea\"></textarea></label>
            <label class=\"field\"><span class=\"field__label\">Logo</span><input class=\"input\" type=\"file\" /></label>
          </div>
          <div class=\"formActions\" style=\"margin-top:12px;\">
            <button class=\"btn btn--primary\" type=\"submit\">Créer équipe</button>
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
          <div class=\"listItem\"><span><b>teams</b></span><span class=\"listItem__meta\">team_id, name, region, captain_user_id, logo_image_id</span></div><div class=\"listItem\"><span><b>team_members</b></span><span class=\"listItem__meta\">team_id, user_id, joined_at, is_active</span></div><div class=\"listItem\"><span><b>images</b></span><span class=\"listItem__meta\">image_id, file_url</span></div>
        </div>
      </div>

      
        </div>
      </div>


      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/captain-team-create.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\pages\\captain-team-create.html.twig");
    }
}
