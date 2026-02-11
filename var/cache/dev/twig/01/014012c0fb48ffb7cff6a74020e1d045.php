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

/* front/home/index.html.twig */
class __TwigTemplate_63f230fb5d2b8010eaa66aab2fd7c33c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/index.html.twig"));

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

        yield "Pulse — Accueil";
        
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
  <!-- HERO FULL (comme ta capture) -->
  ";
        // line 8
        yield from $this->load("front/partials/_hero_full.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["show_widgets" => true, "hero_kicker" => "VOTRE PLATEFORME E-SPORT", "hero_title" => "PULSE", "hero_sub" => "Creez des equipes, participez aux tournois, suivez les matchs et gagnez des recompenses."]));
        // line 14
        yield "
  <!-- CONTENU -->
  <main class=\"page\">
    <section class=\"belowHero\">

      <!-- ========================= -->
      <!-- ANCIENS FILTRES (RETIRÉS) -->
      <!-- ========================= -->
      <!--
      <div class=\"filters\">
        <div class=\"select\">
          <label class=\"srOnly\" for=\"orderBy\">Trier</label>
          <select id=\"orderBy\">
            <option>Order by: Relevance</option>
            <option>Order by: Date</option>
            <option>Order by: Prize pool</option>
          </select>
        </div>

        <div class=\"select\">
          <label class=\"srOnly\" for=\"platform\">Plateforme</label>
          <select id=\"platform\">
            <option>All Platforms</option>
            <option>PC</option>
            <option>PlayStation</option>
            <option>Xbox</option>
          </select>
        </div>

        <div class=\"select\">
          <label class=\"srOnly\" for=\"region\">Région</label>
          <select id=\"region\">
            <option>Region: All</option>
            <option>Europe</option>
            <option>NA</option>
            <option>MENA</option>
          </select>
        </div>

        <div class=\"search\">
          <svg viewBox=\"0 0 24 24\" class=\"ico\">
            <path d=\"M10 2a8 8 0 105.3 14l4.7 4.7 1.4-1.4-4.7-4.7A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z\"/>
          </svg>
          <input type=\"search\" placeholder=\"Search in Tournaments...\" />
        </div>
      </div>
      -->

      <!-- ============================ -->
      <!-- RECHERCHE GLOBALE (CENTRÉE) -->
      <!-- ============================ -->
      <section class=\"globalSearchWrap\" aria-label=\"Recherche globale\">
        <form class=\"globalSearch\" id=\"globalSearchForm\" role=\"search\" autocomplete=\"off\">
          <span class=\"globalSearch__icon\" aria-hidden=\"true\">
            <svg viewBox=\"0 0 24 24\" class=\"ico\">
              <path d=\"M10 2a8 8 0 105.3 14l4.7 4.7 1.4-1.4-4.7-4.7A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z\"/>
            </svg>
          </span>

          <input
            class=\"globalSearch__input\"
            id=\"globalSearchInput\"
            type=\"search\"
            placeholder=\"Rechercher joueurs, équipes, tournois, matchs, jeux, produits…\"
            aria-label=\"Rechercher dans toute la plateforme\"
          />

          <button class=\"globalSearch__btn\" id=\"globalSearchBtn\" type=\"submit\">
            Rechercher
          </button>

          <button class=\"globalSearch__clear\" id=\"globalSearchClear\" type=\"button\" aria-label=\"Effacer la recherche\">
            <svg viewBox=\"0 0 24 24\" class=\"ico\">
              <path d=\"M18.3 5.7L12 12l6.3 6.3-1.4 1.4L10.6 13.4 4.3 19.7 2.9 18.3 9.2 12 2.9 5.7 4.3 4.3l6.3 6.3 6.3-6.3 1.4 1.4z\"/>
            </svg>
          </button>
        </form>

        <div class=\"globalSearchHint\">
          Astuce : tape au moins <b>2 caractères</b>. Résultats : joueurs, équipes, tournois, matchs, jeux, produits.
        </div>
      </section>

      <!-- ===================== -->
      <!-- RÉSULTATS DE RECHERCHE -->
      <!-- ===================== -->
      <section class=\"section section--search\" id=\"searchResultsSection\" hidden>
        <div class=\"section__head\">
          <div>
            <h2>SEARCH RESULTS</h2>
            <p class=\"muted\" id=\"searchResultsSub\">Résultats multi-types (joueurs, équipes, tournois, matchs, jeux, produits).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" id=\"searchResultsClose\" type=\"button\">Fermer</button>
          </div>
        </div>

        <div class=\"searchResultsWrap\" id=\"searchResultsWrap\">
          <!-- injecté par JS -->
        </div>
      </section>

      <!-- ===================== -->
      <!-- THIS WEEK TOURNAMENTS -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>THIS WEEK TOURNAMENTS</h2>
            <p class=\"muted\">Tournois qui démarrent cette semaine (template front).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"weekTournamentsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"weekTournamentsNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Voir tout</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--tournaments cardsScroller hide-scrollbar overflow-x-scroll\" id=\"weekTournamentsGrid\"></div>
      </section>

      <!-- ===================== -->
      <!-- THIS WEEK CHAMPIONS   -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>THIS WEEK CHAMPIONS</h2>
            <p class=\"muted\">Équipes gagnantes des tournois terminés cette semaine (template front).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"championsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"championsNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Hall of Fame</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--champions cardsScroller hide-scrollbar overflow-x-scroll\" id=\"championsGrid\"></div>
      </section>

      <!-- ===================== -->
      <!-- BEST SELLERS (SHOP)   -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>BEST SELLERS</h2>
            <p class=\"muted\">Top produits vendus (template front).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"bestSellersPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"bestSellersNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Boutique</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--products cardsScroller hide-scrollbar overflow-x-scroll\" id=\"bestSellersGrid\"></div>
      </section>

      <!-- ===================== -->
      <!-- POPULAR GAMES         -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>POPULAR GAMES</h2>
            <p class=\"muted\">Jeux populaires par activité (tournois ouverts/en cours).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"popularGamesPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"popularGamesNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Voir jeux</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--games cardsScroller hide-scrollbar overflow-x-scroll\" id=\"popularGamesGrid\"></div>
      </section>

      <!-- ===================== -->
      <!-- BONUS: TOP TEAMS      -->
      <!-- (cards \"team\")        -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>TOP TEAMS</h2>
            <p class=\"muted\">Cartes équipe (template) : roster, région, boutique.</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"topTeamsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"topTeamsNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Voir équipes</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--teams cardsScroller hide-scrollbar overflow-x-scroll\" id=\"topTeamsGrid\"></div>
      </section>

      <!-- ===================== -->
      <!-- BONUS: NEW PLAYERS    -->
      <!-- (cards \"member\")      -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>NEW PLAYERS</h2>
            <p class=\"muted\">Cartes membre (template) : profil, stats, équipes.</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"newPlayersPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"newPlayersNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Explorer joueurs</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--members cardsScroller hide-scrollbar overflow-x-scroll\" id=\"newPlayersGrid\"></div>
      </section>

      ";
        // line 232
        yield from $this->load("front/partials/_footer.html.twig", 232)->unwrap()->yield($context);
        // line 233
        yield "    </section>
  </main>

  <!-- AUTH MODAL -->
  ";
        // line 237
        yield from $this->load("front/partials/_auth_modal.html.twig", 237)->unwrap()->yield($context);
        // line 238
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
        return "front/home/index.html.twig";
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
        return array (  336 => 238,  334 => 237,  328 => 233,  326 => 232,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pulse — Accueil{% endblock %}

{% block body %}

  <!-- HERO FULL (comme ta capture) -->
  {% include 'front/partials/_hero_full.html.twig' with {
  show_widgets: true,
  hero_kicker: 'VOTRE PLATEFORME E-SPORT',
  hero_title: 'PULSE',
  hero_sub: 'Creez des equipes, participez aux tournois, suivez les matchs et gagnez des recompenses.'
} %}

  <!-- CONTENU -->
  <main class=\"page\">
    <section class=\"belowHero\">

      <!-- ========================= -->
      <!-- ANCIENS FILTRES (RETIRÉS) -->
      <!-- ========================= -->
      <!--
      <div class=\"filters\">
        <div class=\"select\">
          <label class=\"srOnly\" for=\"orderBy\">Trier</label>
          <select id=\"orderBy\">
            <option>Order by: Relevance</option>
            <option>Order by: Date</option>
            <option>Order by: Prize pool</option>
          </select>
        </div>

        <div class=\"select\">
          <label class=\"srOnly\" for=\"platform\">Plateforme</label>
          <select id=\"platform\">
            <option>All Platforms</option>
            <option>PC</option>
            <option>PlayStation</option>
            <option>Xbox</option>
          </select>
        </div>

        <div class=\"select\">
          <label class=\"srOnly\" for=\"region\">Région</label>
          <select id=\"region\">
            <option>Region: All</option>
            <option>Europe</option>
            <option>NA</option>
            <option>MENA</option>
          </select>
        </div>

        <div class=\"search\">
          <svg viewBox=\"0 0 24 24\" class=\"ico\">
            <path d=\"M10 2a8 8 0 105.3 14l4.7 4.7 1.4-1.4-4.7-4.7A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z\"/>
          </svg>
          <input type=\"search\" placeholder=\"Search in Tournaments...\" />
        </div>
      </div>
      -->

      <!-- ============================ -->
      <!-- RECHERCHE GLOBALE (CENTRÉE) -->
      <!-- ============================ -->
      <section class=\"globalSearchWrap\" aria-label=\"Recherche globale\">
        <form class=\"globalSearch\" id=\"globalSearchForm\" role=\"search\" autocomplete=\"off\">
          <span class=\"globalSearch__icon\" aria-hidden=\"true\">
            <svg viewBox=\"0 0 24 24\" class=\"ico\">
              <path d=\"M10 2a8 8 0 105.3 14l4.7 4.7 1.4-1.4-4.7-4.7A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z\"/>
            </svg>
          </span>

          <input
            class=\"globalSearch__input\"
            id=\"globalSearchInput\"
            type=\"search\"
            placeholder=\"Rechercher joueurs, équipes, tournois, matchs, jeux, produits…\"
            aria-label=\"Rechercher dans toute la plateforme\"
          />

          <button class=\"globalSearch__btn\" id=\"globalSearchBtn\" type=\"submit\">
            Rechercher
          </button>

          <button class=\"globalSearch__clear\" id=\"globalSearchClear\" type=\"button\" aria-label=\"Effacer la recherche\">
            <svg viewBox=\"0 0 24 24\" class=\"ico\">
              <path d=\"M18.3 5.7L12 12l6.3 6.3-1.4 1.4L10.6 13.4 4.3 19.7 2.9 18.3 9.2 12 2.9 5.7 4.3 4.3l6.3 6.3 6.3-6.3 1.4 1.4z\"/>
            </svg>
          </button>
        </form>

        <div class=\"globalSearchHint\">
          Astuce : tape au moins <b>2 caractères</b>. Résultats : joueurs, équipes, tournois, matchs, jeux, produits.
        </div>
      </section>

      <!-- ===================== -->
      <!-- RÉSULTATS DE RECHERCHE -->
      <!-- ===================== -->
      <section class=\"section section--search\" id=\"searchResultsSection\" hidden>
        <div class=\"section__head\">
          <div>
            <h2>SEARCH RESULTS</h2>
            <p class=\"muted\" id=\"searchResultsSub\">Résultats multi-types (joueurs, équipes, tournois, matchs, jeux, produits).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" id=\"searchResultsClose\" type=\"button\">Fermer</button>
          </div>
        </div>

        <div class=\"searchResultsWrap\" id=\"searchResultsWrap\">
          <!-- injecté par JS -->
        </div>
      </section>

      <!-- ===================== -->
      <!-- THIS WEEK TOURNAMENTS -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>THIS WEEK TOURNAMENTS</h2>
            <p class=\"muted\">Tournois qui démarrent cette semaine (template front).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"weekTournamentsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"weekTournamentsNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Voir tout</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--tournaments cardsScroller hide-scrollbar overflow-x-scroll\" id=\"weekTournamentsGrid\"></div>
      </section>

      <!-- ===================== -->
      <!-- THIS WEEK CHAMPIONS   -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>THIS WEEK CHAMPIONS</h2>
            <p class=\"muted\">Équipes gagnantes des tournois terminés cette semaine (template front).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"championsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"championsNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Hall of Fame</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--champions cardsScroller hide-scrollbar overflow-x-scroll\" id=\"championsGrid\"></div>
      </section>

      <!-- ===================== -->
      <!-- BEST SELLERS (SHOP)   -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>BEST SELLERS</h2>
            <p class=\"muted\">Top produits vendus (template front).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"bestSellersPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"bestSellersNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Boutique</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--products cardsScroller hide-scrollbar overflow-x-scroll\" id=\"bestSellersGrid\"></div>
      </section>

      <!-- ===================== -->
      <!-- POPULAR GAMES         -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>POPULAR GAMES</h2>
            <p class=\"muted\">Jeux populaires par activité (tournois ouverts/en cours).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"popularGamesPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"popularGamesNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Voir jeux</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--games cardsScroller hide-scrollbar overflow-x-scroll\" id=\"popularGamesGrid\"></div>
      </section>

      <!-- ===================== -->
      <!-- BONUS: TOP TEAMS      -->
      <!-- (cards \"team\")        -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>TOP TEAMS</h2>
            <p class=\"muted\">Cartes équipe (template) : roster, région, boutique.</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"topTeamsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"topTeamsNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Voir équipes</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--teams cardsScroller hide-scrollbar overflow-x-scroll\" id=\"topTeamsGrid\"></div>
      </section>

      <!-- ===================== -->
      <!-- BONUS: NEW PLAYERS    -->
      <!-- (cards \"member\")      -->
      <!-- ===================== -->
      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>NEW PLAYERS</h2>
            <p class=\"muted\">Cartes membre (template) : profil, stats, équipes.</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"newPlayersPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"newPlayersNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Explorer joueurs</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--members cardsScroller hide-scrollbar overflow-x-scroll\" id=\"newPlayersGrid\"></div>
      </section>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  <!-- AUTH MODAL -->
  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}

", "front/home/index.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\home\\index.html.twig");
    }
}
