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

/* front/pages/search.html.twig */
class __TwigTemplate_bd310dd0afad7ff68144d1a70b846bf8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/search.html.twig"));

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

        yield "PULSE - Recherche globale";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "RECHERCHE", "hero_title" => "Recherche globale", "hero_sub" => "Résultats multi-types par onglets.", "breadcrumb_current" => "Recherche globale"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <section class=\"globalSearchWrap\" aria-label=\"Recherche globale\">
        <form class=\"globalSearch\" role=\"search\" autocomplete=\"off\">
          <span class=\"globalSearch__icon\" aria-hidden=\"true\">
            <svg viewBox=\"0 0 24 24\" class=\"ico\">
              <path d=\"M10 2a8 8 0 105.3 14l4.7 4.7 1.4-1.4-4.7-4.7A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z\"/>
            </svg>
          </span>
          <input class=\"globalSearch__input\" type=\"search\" placeholder=\"Rechercher joueurs, équipes, tournois...\" />
          <button class=\"globalSearch__btn\" type=\"submit\">Rechercher</button>
        </form>
      </section>

      <div class=\"panel\">
        <div class=\"tabs\" data-tabs=\"search-tabs\">
          <button class=\"tab is-active\" data-tab=\"players\">Joueurs</button>
          <button class=\"tab\" data-tab=\"teams\">Équipes</button>
          <button class=\"tab\" data-tab=\"tournaments\">Tournois</button>
          <button class=\"tab\" data-tab=\"games\">Jeux</button>
          <button class=\"tab\" data-tab=\"products\">Produits</button>
          <button class=\"tab\" data-tab=\"posts\">Posts</button>
        </div>
        <div class=\"tabPanels\" data-panels=\"search-tabs\">
          <section class=\"tabPanel is-active\" data-panel=\"players\"><div class=\"cardsGrid\">

    <article class=\"card card--member\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_u1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--role\">PLAYER</span>
          <span class=\"chip\">TN</span>
          <span class=\"chip\">@ZED_99</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Zed</h4>
        <p class=\"card__desc\">Profil public • Message • Invitation équipe</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_a1/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Zed</div>
            <div class=\"sub\">PLAYER • TN</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile");
        yield "\">Voir profil</a>
          <a class=\"btn btn--primary\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Ajouter ami</a>
        </div>
      </div>
    </article>


    <article class=\"card card--member\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_u2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--role\">CAPTAIN</span>
          <span class=\"chip\">FR</span>
          <span class=\"chip\">@FrostByte</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Frost</h4>
        <p class=\"card__desc\">Profil public • Message • Invitation équipe</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_a2/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Frost</div>
            <div class=\"sub\">CAPTAIN • FR</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile");
        yield "\">Voir profil</a>
          <a class=\"btn btn--primary\" href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Ajouter ami</a>
        </div>
      </div>
    </article>


    <article class=\"card card--member\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_u3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--role\">PLAYER</span>
          <span class=\"chip\">TN</span>
          <span class=\"chip\">@Kairo</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Kairo</h4>
        <p class=\"card__desc\">Profil public • Message • Invitation équipe</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_a3/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Kairo</div>
            <div class=\"sub\">PLAYER • TN</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile");
        yield "\">Voir profil</a>
          <a class=\"btn btn--primary\" href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Ajouter ami</a>
        </div>
      </div>
    </article>


    <article class=\"card card--member\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_u4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--role\">PLAYER</span>
          <span class=\"chip\">US</span>
          <span class=\"chip\">@NovaAim</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Nova</h4>
        <p class=\"card__desc\">Profil public • Message • Invitation équipe</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_a4/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Nova</div>
            <div class=\"sub\">PLAYER • US</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile");
        yield "\">Voir profil</a>
          <a class=\"btn btn--primary\" href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Ajouter ami</a>
        </div>
      </div>
    </article>

</div></section>
          <section class=\"tabPanel\" data-panel=\"teams\"><div class=\"cardsGrid\">

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
        // line 167
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
        // line 191
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
        // line 215
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
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
        yield "\">Détail équipe</a>
        </div>
      </div>
    </article>

</div></section>
          <section class=\"tabPanel\" data-panel=\"tournaments\"><div class=\"cardsGrid\">

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
        // line 264
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
        // line 287
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
        // line 310
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
        // line 333
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail");
        yield "\">Voir détail</a>
        </div>
      </div>
    </article>

</div></section>
          <section class=\"tabPanel\" data-panel=\"games\"><div class=\"cardsGrid\">

    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">FPS</span>
          <span class=\"chip\">Publisher: Riot</span>
          <span class=\"chip\">Tournois: 6</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Valorant</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 353
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail");
        yield "\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">FPS</span>
          <span class=\"chip\">Publisher: Valve</span>
          <span class=\"chip\">Tournois: 4</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Counter-Strike 2</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 371
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail");
        yield "\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">MOBA</span>
          <span class=\"chip\">Publisher: Riot</span>
          <span class=\"chip\">Tournois: 5</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">League of Legends</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 389
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail");
        yield "\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">BR</span>
          <span class=\"chip\">Publisher: Epic</span>
          <span class=\"chip\">Tournois: 3</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Fortnite</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 407
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail");
        yield "\">Détail</a>
        </div>
      </div>
    </article>

</div></section>
          <section class=\"tabPanel\" data-panel=\"products\"><div class=\"cardsGrid\">

    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">89 DT</span>
          <span class=\"chip\">Stock: 14</span>
          <span class=\"chip\">Nebula Five</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Pulse Hoodie — Neon</h4>
        <p class=\"card__desc\">Vendeur: <b>Nebula Five</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 427
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\">Détail</a>
          <a class=\"btn btn--primary\" href=\"0\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">69 DT</span>
          <span class=\"chip\">Stock: 7</span>
          <span class=\"chip\">North Hydra</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Team Jersey — Pro Edition</h4>
        <p class=\"card__desc\">Vendeur: <b>North Hydra</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 446
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\">Détail</a>
          <a class=\"btn btn--primary\" href=\"1\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">39 DT</span>
          <span class=\"chip\">Stock: 33</span>
          <span class=\"chip\">Aurora Squad</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Mousepad XL — Arena</h4>
        <p class=\"card__desc\">Vendeur: <b>Aurora Squad</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 465
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\">Détail</a>
          <a class=\"btn btn--primary\" href=\"2\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">29 DT</span>
          <span class=\"chip\">Stock: 5</span>
          <span class=\"chip\">Sandstorm</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Cap — Limited Drop</h4>
        <p class=\"card__desc\">Vendeur: <b>Sandstorm</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 484
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\">Détail</a>
          <a class=\"btn btn--primary\" href=\"3\">Ajouter au panier</a>
        </div>
      </div>
    </article>

</div></section>
          <section class=\"tabPanel\" data-panel=\"posts\"><div class=\"emptyState\">Top 5 posts (template).</div></section>
        </div>
      </div>
    

      ";
        // line 496
        yield from $this->load("front/partials/_footer.html.twig", 496)->unwrap()->yield($context);
        // line 497
        yield "
    </section>
  </main>

  ";
        // line 501
        yield from $this->load("front/partials/_auth_modal.html.twig", 501)->unwrap()->yield($context);
        // line 502
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
        return "front/pages/search.html.twig";
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
        return array (  672 => 502,  670 => 501,  664 => 497,  662 => 496,  647 => 484,  625 => 465,  603 => 446,  581 => 427,  558 => 407,  537 => 389,  516 => 371,  495 => 353,  472 => 333,  446 => 310,  420 => 287,  394 => 264,  366 => 239,  339 => 215,  312 => 191,  285 => 167,  256 => 141,  252 => 140,  224 => 115,  220 => 114,  192 => 89,  188 => 88,  160 => 63,  156 => 62,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Recherche globale{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'RECHERCHE',
  hero_title: 'Recherche globale',
  hero_sub: 'Résultats multi-types par onglets.',
  breadcrumb_current: 'Recherche globale'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <section class=\"globalSearchWrap\" aria-label=\"Recherche globale\">
        <form class=\"globalSearch\" role=\"search\" autocomplete=\"off\">
          <span class=\"globalSearch__icon\" aria-hidden=\"true\">
            <svg viewBox=\"0 0 24 24\" class=\"ico\">
              <path d=\"M10 2a8 8 0 105.3 14l4.7 4.7 1.4-1.4-4.7-4.7A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z\"/>
            </svg>
          </span>
          <input class=\"globalSearch__input\" type=\"search\" placeholder=\"Rechercher joueurs, équipes, tournois...\" />
          <button class=\"globalSearch__btn\" type=\"submit\">Rechercher</button>
        </form>
      </section>

      <div class=\"panel\">
        <div class=\"tabs\" data-tabs=\"search-tabs\">
          <button class=\"tab is-active\" data-tab=\"players\">Joueurs</button>
          <button class=\"tab\" data-tab=\"teams\">Équipes</button>
          <button class=\"tab\" data-tab=\"tournaments\">Tournois</button>
          <button class=\"tab\" data-tab=\"games\">Jeux</button>
          <button class=\"tab\" data-tab=\"products\">Produits</button>
          <button class=\"tab\" data-tab=\"posts\">Posts</button>
        </div>
        <div class=\"tabPanels\" data-panels=\"search-tabs\">
          <section class=\"tabPanel is-active\" data-panel=\"players\"><div class=\"cardsGrid\">

    <article class=\"card card--member\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_u1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--role\">PLAYER</span>
          <span class=\"chip\">TN</span>
          <span class=\"chip\">@ZED_99</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Zed</h4>
        <p class=\"card__desc\">Profil public • Message • Invitation équipe</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_a1/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Zed</div>
            <div class=\"sub\">PLAYER • TN</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_player_profile') }}\">Voir profil</a>
          <a class=\"btn btn--primary\" href=\"{{ path('front_login') }}\">Ajouter ami</a>
        </div>
      </div>
    </article>


    <article class=\"card card--member\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_u2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--role\">CAPTAIN</span>
          <span class=\"chip\">FR</span>
          <span class=\"chip\">@FrostByte</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Frost</h4>
        <p class=\"card__desc\">Profil public • Message • Invitation équipe</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_a2/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Frost</div>
            <div class=\"sub\">CAPTAIN • FR</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_player_profile') }}\">Voir profil</a>
          <a class=\"btn btn--primary\" href=\"{{ path('front_login') }}\">Ajouter ami</a>
        </div>
      </div>
    </article>


    <article class=\"card card--member\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_u3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--role\">PLAYER</span>
          <span class=\"chip\">TN</span>
          <span class=\"chip\">@Kairo</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Kairo</h4>
        <p class=\"card__desc\">Profil public • Message • Invitation équipe</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_a3/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Kairo</div>
            <div class=\"sub\">PLAYER • TN</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_player_profile') }}\">Voir profil</a>
          <a class=\"btn btn--primary\" href=\"{{ path('front_login') }}\">Ajouter ami</a>
        </div>
      </div>
    </article>


    <article class=\"card card--member\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_u4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--role\">PLAYER</span>
          <span class=\"chip\">US</span>
          <span class=\"chip\">@NovaAim</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Nova</h4>
        <p class=\"card__desc\">Profil public • Message • Invitation équipe</p>
        <div class=\"avatarRow\">
          <div class=\"avatar\" data-avatar=\"https://picsum.photos/seed/pulse_a4/200/200\" aria-hidden=\"true\"></div>
          <div class=\"avatarText\">
            <div class=\"name\">Nova</div>
            <div class=\"sub\">PLAYER • US</div>
          </div>
        </div>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_player_profile') }}\">Voir profil</a>
          <a class=\"btn btn--primary\" href=\"{{ path('front_login') }}\">Ajouter ami</a>
        </div>
      </div>
    </article>

</div></section>
          <section class=\"tabPanel\" data-panel=\"teams\"><div class=\"cardsGrid\">

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

</div></section>
          <section class=\"tabPanel\" data-panel=\"tournaments\"><div class=\"cardsGrid\">

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

</div></section>
          <section class=\"tabPanel\" data-panel=\"games\"><div class=\"cardsGrid\">

    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">FPS</span>
          <span class=\"chip\">Publisher: Riot</span>
          <span class=\"chip\">Tournois: 6</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Valorant</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_game_detail') }}\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">FPS</span>
          <span class=\"chip\">Publisher: Valve</span>
          <span class=\"chip\">Tournois: 4</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Counter-Strike 2</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_game_detail') }}\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">MOBA</span>
          <span class=\"chip\">Publisher: Riot</span>
          <span class=\"chip\">Tournois: 5</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">League of Legends</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_game_detail') }}\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">BR</span>
          <span class=\"chip\">Publisher: Epic</span>
          <span class=\"chip\">Tournois: 3</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Fortnite</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_game_detail') }}\">Détail</a>
        </div>
      </div>
    </article>

</div></section>
          <section class=\"tabPanel\" data-panel=\"products\"><div class=\"cardsGrid\">

    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">89 DT</span>
          <span class=\"chip\">Stock: 14</span>
          <span class=\"chip\">Nebula Five</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Pulse Hoodie — Neon</h4>
        <p class=\"card__desc\">Vendeur: <b>Nebula Five</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail') }}\">Détail</a>
          <a class=\"btn btn--primary\" href=\"0\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">69 DT</span>
          <span class=\"chip\">Stock: 7</span>
          <span class=\"chip\">North Hydra</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Team Jersey — Pro Edition</h4>
        <p class=\"card__desc\">Vendeur: <b>North Hydra</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail') }}\">Détail</a>
          <a class=\"btn btn--primary\" href=\"1\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">39 DT</span>
          <span class=\"chip\">Stock: 33</span>
          <span class=\"chip\">Aurora Squad</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Mousepad XL — Arena</h4>
        <p class=\"card__desc\">Vendeur: <b>Aurora Squad</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail') }}\">Détail</a>
          <a class=\"btn btn--primary\" href=\"2\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">29 DT</span>
          <span class=\"chip\">Stock: 5</span>
          <span class=\"chip\">Sandstorm</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Cap — Limited Drop</h4>
        <p class=\"card__desc\">Vendeur: <b>Sandstorm</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail') }}\">Détail</a>
          <a class=\"btn btn--primary\" href=\"3\">Ajouter au panier</a>
        </div>
      </div>
    </article>

</div></section>
          <section class=\"tabPanel\" data-panel=\"posts\"><div class=\"emptyState\">Top 5 posts (template).</div></section>
        </div>
      </div>
    

      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/search.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\search.html.twig");
    }
}
