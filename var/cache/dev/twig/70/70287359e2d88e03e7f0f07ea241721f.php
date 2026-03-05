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

/* front/pages/teams-explore.html.twig */
class __TwigTemplate_fc33e5910336287f6f7308f4349b34c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/teams-explore.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/teams-explore.html.twig"));

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

        yield "PULSE - Explorer équipes";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Explorer équipes", "hero_sub" => "Rejoindre une équipe.", "breadcrumb_current" => "Explorer équipes"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"layout\">
        
  <aside class=\"sideNav\">
    <div class=\"sideNav__title\">ESPACE JOUEUR</div>
    <a class=\"\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_dashboard");
        yield "\">Dashboard</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile");
        yield "\">Mon profil</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players");
        yield "\">Recherche joueurs</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_friends");
        yield "\">Amis</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages");
        yield "\">Messages</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_feed");
        yield "\">Fil d’actualité</a><a class=\"is-active\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
        yield "\">Mes équipes</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_requests");
        yield "\">Mes demandes</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\">Mes commandes</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\">Notifications</a>
  </aside>

        <div>
          
        <div class=\"panel\">
          <div class=\"filtersRow\">
            <input class=\"input\" type=\"search\" placeholder=\"Rechercher une équipe...\" />
            <div class=\"select\"><select><option>Région</option><option>MENA</option><option>EU</option></select></div>
            <button class=\"btn btn--ghost\">Avec produits</button>
            <button class=\"btn btn--ghost\">Actif en tournois</button>
          </div>
        </div>
        <div class=\"cardsGrid\">

    <article class=\"card card--team\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_team_1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--region\">MENA</span>
          <span class=\"chip\">Membres: 12</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Nebula Five</h4>
        <p class=\"card__desc\">Équipe e-sport • Tournois • Boutique</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_logo_1/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Nebula Five</div>
            <div class=\"sub\">MENA • 12 membres</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
        yield "\">Détail équipe</a>
        </div>
      </div>
    </article>


    <article class=\"card card--team\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_team_2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--region\">EU</span>
          <span class=\"chip\">Membres: 9</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">North Hydra</h4>
        <p class=\"card__desc\">Équipe e-sport • Tournois • Boutique</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_logo_2/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">North Hydra</div>
            <div class=\"sub\">EU • 9 membres</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
        yield "\">Détail équipe</a>
        </div>
      </div>
    </article>


    <article class=\"card card--team\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_team_3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--region\">MENA</span>
          <span class=\"chip\">Membres: 15</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Sandstorm</h4>
        <p class=\"card__desc\">Équipe e-sport • Tournois • Boutique</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_logo_3/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Sandstorm</div>
            <div class=\"sub\">MENA • 15 membres</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
        yield "\">Détail équipe</a>
        </div>
      </div>
    </article>


    <article class=\"card card--team\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_team_4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--region\">NA</span>
          <span class=\"chip\">Membres: 10</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Aurora Squad</h4>
        <p class=\"card__desc\">Équipe e-sport • Tournois • Boutique</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_logo_4/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Aurora Squad</div>
            <div class=\"sub\">NA • 10 membres</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
        yield "\">Détail équipe</a>
        </div>
      </div>
    </article>

</div>
        
      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISÉES</h3>
            <div class=\"panel__desc\">Schéma réel + colonnes clés.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>teams</b></span><span class=\"listItem__meta\">team_id, name, region</span></div><div class=\"listItem\"><span><b>team_members</b></span><span class=\"listItem__meta\">team_id, user_id, is_active</span></div><div class=\"listItem\"><span><b>team_join_requests</b></span><span class=\"listItem__meta\">team_id, user_id, status</span></div><div class=\"listItem\"><span><b>products</b></span><span class=\"listItem__meta\">product_id, team_id</span></div>
        </div>
      </div>

      
        </div>
      </div>


      ";
        // line 152
        yield from $this->load("front/partials/_footer.html.twig", 152)->unwrap()->yield($context);
        // line 153
        yield "
    </section>
  </main>

  ";
        // line 157
        yield from $this->load("front/partials/_auth_modal.html.twig", 157)->unwrap()->yield($context);
        // line 158
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
        return "front/pages/teams-explore.html.twig";
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
        return array (  289 => 158,  287 => 157,  281 => 153,  279 => 152,  252 => 128,  225 => 104,  198 => 80,  171 => 56,  117 => 23,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Explorer équipes{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'JOUEUR',
  hero_title: 'Explorer équipes',
  hero_sub: 'Rejoindre une équipe.',
  breadcrumb_current: 'Explorer équipes'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"layout\">
        
  <aside class=\"sideNav\">
    <div class=\"sideNav__title\">ESPACE JOUEUR</div>
    <a class=\"\" href=\"{{ path('front_dashboard') }}\">Dashboard</a><a class=\"\" href=\"{{ path('front_profile') }}\">Mon profil</a><a class=\"\" href=\"{{ path('front_players') }}\">Recherche joueurs</a><a class=\"\" href=\"{{ path('front_friends') }}\">Amis</a><a class=\"\" href=\"{{ path('front_messages') }}\">Messages</a><a class=\"\" href=\"{{ path('front_feed') }}\">Fil d’actualité</a><a class=\"is-active\" href=\"{{ path('front_my_teams') }}\">Mes équipes</a><a class=\"\" href=\"{{ path('front_my_requests') }}\">Mes demandes</a><a class=\"\" href=\"{{ path('front_orders') }}\">Mes commandes</a><a class=\"\" href=\"{{ path('front_notifications') }}\">Notifications</a>
  </aside>

        <div>
          
        <div class=\"panel\">
          <div class=\"filtersRow\">
            <input class=\"input\" type=\"search\" placeholder=\"Rechercher une équipe...\" />
            <div class=\"select\"><select><option>Région</option><option>MENA</option><option>EU</option></select></div>
            <button class=\"btn btn--ghost\">Avec produits</button>
            <button class=\"btn btn--ghost\">Actif en tournois</button>
          </div>
        </div>
        <div class=\"cardsGrid\">

    <article class=\"card card--team\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_team_1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--region\">MENA</span>
          <span class=\"chip\">Membres: 12</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Nebula Five</h4>
        <p class=\"card__desc\">Équipe e-sport • Tournois • Boutique</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_logo_1/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Nebula Five</div>
            <div class=\"sub\">MENA • 12 membres</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_team_detail') }}\">Détail équipe</a>
        </div>
      </div>
    </article>


    <article class=\"card card--team\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_team_2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--region\">EU</span>
          <span class=\"chip\">Membres: 9</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">North Hydra</h4>
        <p class=\"card__desc\">Équipe e-sport • Tournois • Boutique</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_logo_2/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">North Hydra</div>
            <div class=\"sub\">EU • 9 membres</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_team_detail') }}\">Détail équipe</a>
        </div>
      </div>
    </article>


    <article class=\"card card--team\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_team_3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--region\">MENA</span>
          <span class=\"chip\">Membres: 15</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Sandstorm</h4>
        <p class=\"card__desc\">Équipe e-sport • Tournois • Boutique</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_logo_3/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Sandstorm</div>
            <div class=\"sub\">MENA • 15 membres</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_team_detail') }}\">Détail équipe</a>
        </div>
      </div>
    </article>


    <article class=\"card card--team\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_team_4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--region\">NA</span>
          <span class=\"chip\">Membres: 10</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Aurora Squad</h4>
        <p class=\"card__desc\">Équipe e-sport • Tournois • Boutique</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_logo_4/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Aurora Squad</div>
            <div class=\"sub\">NA • 10 membres</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_team_detail') }}\">Détail équipe</a>
        </div>
      </div>
    </article>

</div>
        
      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISÉES</h3>
            <div class=\"panel__desc\">Schéma réel + colonnes clés.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>teams</b></span><span class=\"listItem__meta\">team_id, name, region</span></div><div class=\"listItem\"><span><b>team_members</b></span><span class=\"listItem__meta\">team_id, user_id, is_active</span></div><div class=\"listItem\"><span><b>team_join_requests</b></span><span class=\"listItem__meta\">team_id, user_id, status</span></div><div class=\"listItem\"><span><b>products</b></span><span class=\"listItem__meta\">product_id, team_id</span></div>
        </div>
      </div>

      
        </div>
      </div>


      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/teams-explore.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\pages\\teams-explore.html.twig");
    }
}
