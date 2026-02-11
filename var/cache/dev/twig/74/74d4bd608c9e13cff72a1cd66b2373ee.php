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

/* front/pages/teams.html.twig */
class __TwigTemplate_41ea596d1529392bd9180f864d1f72e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/teams.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/teams.html.twig"));

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

        yield "PULSE - Catalogue des équipes";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ÉQUIPES", "hero_title" => "Catalogue des équipes", "hero_sub" => "Recherche + filtres région, produits et tournois.", "breadcrumb_current" => "Catalogue des équipes"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des équipes</h1>
          <p>Rechercher par nom, région et activité.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <button class=\"btn btn--soft\">Plus récentes</button>
          <button class=\"btn btn--ghost\">Alphabétique</button>
        </div>
      </div>
      <div class=\"panel\">
        <div class=\"filtersRow\">
          <input class=\"input\" type=\"search\" placeholder=\"Rechercher une équipe...\" />
          <div class=\"select\"><select><option>Région</option><option>MENA</option><option>EU</option><option>NA</option></select></div>
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
        // line 57
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
        // line 81
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
        // line 105
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
        // line 129
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
          <div class=\"listItem\"><span><b>teams</b></span><span class=\"listItem__meta\">team_id, name, region, captain_user_id, logo_image_id</span></div><div class=\"listItem\"><span><b>team_members</b></span><span class=\"listItem__meta\">team_id, user_id, is_active</span></div><div class=\"listItem\"><span><b>users</b></span><span class=\"listItem__meta\">user_id, display_name</span></div><div class=\"listItem\"><span><b>tournament_teams</b></span><span class=\"listItem__meta\">tournament_id, team_id</span></div><div class=\"listItem\"><span><b>images</b></span><span class=\"listItem__meta\">image_id, file_url</span></div>
        </div>
      </div>

    

      ";
        // line 150
        yield from $this->load("front/partials/_footer.html.twig", 150)->unwrap()->yield($context);
        // line 151
        yield "
    </section>
  </main>

  ";
        // line 155
        yield from $this->load("front/partials/_auth_modal.html.twig", 155)->unwrap()->yield($context);
        // line 156
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
        return "front/pages/teams.html.twig";
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
        return array (  266 => 156,  264 => 155,  258 => 151,  256 => 150,  232 => 129,  205 => 105,  178 => 81,  151 => 57,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Catalogue des équipes{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'ÉQUIPES',
  hero_title: 'Catalogue des équipes',
  hero_sub: 'Recherche + filtres région, produits et tournois.',
  breadcrumb_current: 'Catalogue des équipes'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des équipes</h1>
          <p>Rechercher par nom, région et activité.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <button class=\"btn btn--soft\">Plus récentes</button>
          <button class=\"btn btn--ghost\">Alphabétique</button>
        </div>
      </div>
      <div class=\"panel\">
        <div class=\"filtersRow\">
          <input class=\"input\" type=\"search\" placeholder=\"Rechercher une équipe...\" />
          <div class=\"select\"><select><option>Région</option><option>MENA</option><option>EU</option><option>NA</option></select></div>
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
          <div class=\"listItem\"><span><b>teams</b></span><span class=\"listItem__meta\">team_id, name, region, captain_user_id, logo_image_id</span></div><div class=\"listItem\"><span><b>team_members</b></span><span class=\"listItem__meta\">team_id, user_id, is_active</span></div><div class=\"listItem\"><span><b>users</b></span><span class=\"listItem__meta\">user_id, display_name</span></div><div class=\"listItem\"><span><b>tournament_teams</b></span><span class=\"listItem__meta\">tournament_id, team_id</span></div><div class=\"listItem\"><span><b>images</b></span><span class=\"listItem__meta\">image_id, file_url</span></div>
        </div>
      </div>

    

      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/teams.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\teams.html.twig");
    }
}
