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

/* front/pages/tournaments.html.twig */
class __TwigTemplate_b5e8cf4290c9835c13d96816a497bafa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/tournaments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/tournaments.html.twig"));

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

        yield "PULSE - Catalogue des tournois";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "TOURNOIS", "hero_title" => "Catalogue des tournois", "hero_sub" => "Filtres avancés + progress bar.", "breadcrumb_current" => "Catalogue des tournois"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des tournois</h1>
          <p>Recherche par titre + filtres jeu, statut, format, dates et prize pool.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <button class=\"btn btn--soft\">Plus récents</button>
          <button class=\"btn btn--ghost\">Prize pool</button>
          <button class=\"btn btn--ghost\">Progression</button>
        </div>
      </div>

      <div class=\"panel\">
        <div class=\"filtersRow\">
          <input class=\"input\" type=\"search\" placeholder=\"Rechercher un tournoi...\" />
          <div class=\"select\"><select><option>Jeu</option><option>Valorant</option><option>CS2</option></select></div>
          <div class=\"select\"><select><option>Catégorie</option><option>FPS</option><option>MOBA</option></select></div>
          <div class=\"select\"><select><option>Statut</option><option>OPEN</option><option>ONGOING</option><option>FINISHED</option></select></div>
          <div class=\"select\"><select><option>Format</option><option>BO1</option><option>BO3</option><option>BO5</option></select></div>
          <div class=\"select\"><select><option>Registration</option><option>OPEN</option><option>APPROVAL</option></select></div>
          <input class=\"input\" type=\"date\" />
          <input class=\"input\" type=\"number\" placeholder=\"Prize min\" />
          <input class=\"input\" type=\"number\" placeholder=\"Prize max\" />
        </div>
      </div>

      <div class=\"cardsGrid\">

    <article class=\"card card--tournament\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_t1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--status\">OPEN</span>
          <span class=\"chip chip--format\">BO3</span>
          <span class=\"chip\">Valorant</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Pulse Invitational — Valorant</h4>
        <p class=\"card__desc\">Dates: <b>18–22 Fév</b> • Prize pool: <b>1200 DT</b></p>
        <div class=\"card__metaRow\">
          <span class=\"metaPill\">Matchs: <b>7/20</b></span>
          <span class=\"metaPill\">Statut: <b>OPEN</b></span>
        </div>
        <div class=\"progress\"><div class=\"progress__bar\" style=\"width:35%\"></div></div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail");
        yield "\">Voir détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--tournament\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_t2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--status\">ONGOING</span>
          <span class=\"chip chip--format\">BO1</span>
          <span class=\"chip\">CS2</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">CS2 Arena Cup — Winter Split</h4>
        <p class=\"card__desc\">Dates: <b>20–23 Fév</b> • Prize pool: <b>900 DT</b></p>
        <div class=\"card__metaRow\">
          <span class=\"metaPill\">Matchs: <b>12/20</b></span>
          <span class=\"metaPill\">Statut: <b>ONGOING</b></span>
        </div>
        <div class=\"progress\"><div class=\"progress__bar\" style=\"width:60%\"></div></div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail");
        yield "\">Voir détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--tournament\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_t3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--status\">OPEN</span>
          <span class=\"chip chip--format\">BO5</span>
          <span class=\"chip\">League of Legends</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">League Clash — Weekend Major</h4>
        <p class=\"card__desc\">Dates: <b>23–25 Fév</b> • Prize pool: <b>2500 DT</b></p>
        <div class=\"card__metaRow\">
          <span class=\"metaPill\">Matchs: <b>0/16</b></span>
          <span class=\"metaPill\">Statut: <b>OPEN</b></span>
        </div>
        <div class=\"progress\"><div class=\"progress__bar\" style=\"width:0%\"></div></div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail");
        yield "\">Voir détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--tournament\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_t4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--status\">OPEN</span>
          <span class=\"chip chip--format\">BO1</span>
          <span class=\"chip\">Fortnite</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Fortnite Zero Build Cup</h4>
        <p class=\"card__desc\">Dates: <b>25 Fév</b> • Prize pool: <b>700 DT</b></p>
        <div class=\"card__metaRow\">
          <span class=\"metaPill\">Matchs: <b>0/24</b></span>
          <span class=\"metaPill\">Statut: <b>OPEN</b></span>
        </div>
        <div class=\"progress\"><div class=\"progress__bar\" style=\"width:0%\"></div></div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail");
        yield "\">Voir détail</a>
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
          <div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listItem__meta\">tournament_id, game_id, title, status, start_date, end_date, max_teams, prize_pool</span></div><div class=\"listItem\"><span><b>games</b></span><span class=\"listItem__meta\">game_id, category_id, name</span></div><div class=\"listItem\"><span><b>categories</b></span><span class=\"listItem__meta\">category_id, name</span></div><div class=\"listItem\"><span><b>matches</b></span><span class=\"listItem__meta\">match_id, tournament_id, status</span></div>
        </div>
      </div>

    

      ";
        // line 155
        yield from $this->load("front/partials/_footer.html.twig", 155)->unwrap()->yield($context);
        // line 156
        yield "
    </section>
  </main>

  ";
        // line 160
        yield from $this->load("front/partials/_auth_modal.html.twig", 160)->unwrap()->yield($context);
        // line 161
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
        return "front/pages/tournaments.html.twig";
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
        return array (  271 => 161,  269 => 160,  263 => 156,  261 => 155,  236 => 133,  210 => 110,  184 => 87,  158 => 64,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Catalogue des tournois{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'TOURNOIS',
  hero_title: 'Catalogue des tournois',
  hero_sub: 'Filtres avancés + progress bar.',
  breadcrumb_current: 'Catalogue des tournois'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des tournois</h1>
          <p>Recherche par titre + filtres jeu, statut, format, dates et prize pool.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <button class=\"btn btn--soft\">Plus récents</button>
          <button class=\"btn btn--ghost\">Prize pool</button>
          <button class=\"btn btn--ghost\">Progression</button>
        </div>
      </div>

      <div class=\"panel\">
        <div class=\"filtersRow\">
          <input class=\"input\" type=\"search\" placeholder=\"Rechercher un tournoi...\" />
          <div class=\"select\"><select><option>Jeu</option><option>Valorant</option><option>CS2</option></select></div>
          <div class=\"select\"><select><option>Catégorie</option><option>FPS</option><option>MOBA</option></select></div>
          <div class=\"select\"><select><option>Statut</option><option>OPEN</option><option>ONGOING</option><option>FINISHED</option></select></div>
          <div class=\"select\"><select><option>Format</option><option>BO1</option><option>BO3</option><option>BO5</option></select></div>
          <div class=\"select\"><select><option>Registration</option><option>OPEN</option><option>APPROVAL</option></select></div>
          <input class=\"input\" type=\"date\" />
          <input class=\"input\" type=\"number\" placeholder=\"Prize min\" />
          <input class=\"input\" type=\"number\" placeholder=\"Prize max\" />
        </div>
      </div>

      <div class=\"cardsGrid\">

    <article class=\"card card--tournament\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_t1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--status\">OPEN</span>
          <span class=\"chip chip--format\">BO3</span>
          <span class=\"chip\">Valorant</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Pulse Invitational — Valorant</h4>
        <p class=\"card__desc\">Dates: <b>18–22 Fév</b> • Prize pool: <b>1200 DT</b></p>
        <div class=\"card__metaRow\">
          <span class=\"metaPill\">Matchs: <b>7/20</b></span>
          <span class=\"metaPill\">Statut: <b>OPEN</b></span>
        </div>
        <div class=\"progress\"><div class=\"progress__bar\" style=\"width:35%\"></div></div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_tournament_detail') }}\">Voir détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--tournament\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_t2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--status\">ONGOING</span>
          <span class=\"chip chip--format\">BO1</span>
          <span class=\"chip\">CS2</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">CS2 Arena Cup — Winter Split</h4>
        <p class=\"card__desc\">Dates: <b>20–23 Fév</b> • Prize pool: <b>900 DT</b></p>
        <div class=\"card__metaRow\">
          <span class=\"metaPill\">Matchs: <b>12/20</b></span>
          <span class=\"metaPill\">Statut: <b>ONGOING</b></span>
        </div>
        <div class=\"progress\"><div class=\"progress__bar\" style=\"width:60%\"></div></div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_tournament_detail') }}\">Voir détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--tournament\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_t3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--status\">OPEN</span>
          <span class=\"chip chip--format\">BO5</span>
          <span class=\"chip\">League of Legends</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">League Clash — Weekend Major</h4>
        <p class=\"card__desc\">Dates: <b>23–25 Fév</b> • Prize pool: <b>2500 DT</b></p>
        <div class=\"card__metaRow\">
          <span class=\"metaPill\">Matchs: <b>0/16</b></span>
          <span class=\"metaPill\">Statut: <b>OPEN</b></span>
        </div>
        <div class=\"progress\"><div class=\"progress__bar\" style=\"width:0%\"></div></div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_tournament_detail') }}\">Voir détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--tournament\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_t4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--status\">OPEN</span>
          <span class=\"chip chip--format\">BO1</span>
          <span class=\"chip\">Fortnite</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Fortnite Zero Build Cup</h4>
        <p class=\"card__desc\">Dates: <b>25 Fév</b> • Prize pool: <b>700 DT</b></p>
        <div class=\"card__metaRow\">
          <span class=\"metaPill\">Matchs: <b>0/24</b></span>
          <span class=\"metaPill\">Statut: <b>OPEN</b></span>
        </div>
        <div class=\"progress\"><div class=\"progress__bar\" style=\"width:0%\"></div></div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_tournament_detail') }}\">Voir détail</a>
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
          <div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listItem__meta\">tournament_id, game_id, title, status, start_date, end_date, max_teams, prize_pool</span></div><div class=\"listItem\"><span><b>games</b></span><span class=\"listItem__meta\">game_id, category_id, name</span></div><div class=\"listItem\"><span><b>categories</b></span><span class=\"listItem__meta\">category_id, name</span></div><div class=\"listItem\"><span><b>matches</b></span><span class=\"listItem__meta\">match_id, tournament_id, status</span></div>
        </div>
      </div>

    

      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/tournaments.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\tournaments.html.twig");
    }
}
