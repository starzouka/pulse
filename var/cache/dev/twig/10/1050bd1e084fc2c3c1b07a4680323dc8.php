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

/* pages/tournaments.html.twig */
class __TwigTemplate_9e36af6a7ccc7edfc7351799a8954ac6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tournaments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tournaments.html.twig"));

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

  <header class=\"heroMini\">
    <div class=\"heroFull__bg heroMini__bg\" data-bg=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_fo/img/ll.png"), "html", null, true);
        yield "\"></div>
    <div class=\"heroFull__overlay\"></div>
    <div class=\"heroTop\">
      <a class=\"brand\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\" aria-label=\"Pulse\">
        <span class=\"brand__logo\" aria-hidden=\"true\">
          <svg viewBox=\"0 0 24 24\" class=\"ico\">
            <path d=\"M4 4h16v16H4V4zm3 3v10h10V7H7zm2 2h6v6H9V9z\"/>
          </svg>
        </span>
        <span class=\"brand__text\">
          <span class=\"brand__name\">PULSE</span>
          <span class=\"brand__small\">e-sport arena</span>
        </span>
      </a>
      <nav class=\"topbar\" aria-label=\"Navigation principale\"><a class=\"topbar__item\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M12 3l9 8h-3v10h-5v-6H11v6H6V11H3l9-8z\"/></svg></span>
          <span class=\"topbar__label\">Accueil</span>
        </a>
<a class=\"topbar__item is-active\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M6 4h12v2H6V4zm2 4h8l1 4H7l1-4zm-2 6h12v2H6v-2zm2 4h8v2H8v-2z\"/></svg></span>
          <span class=\"topbar__label\">Tournois</span>
        </a>
<a class=\"topbar__item\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_games");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 6h10a4 4 0 014 4v2a4 4 0 01-4 4h-1l-2 2H10l-2-2H7a4 4 0 01-4-4v-2a4 4 0 014-4zm2 5a1 1 0 100 2 1 1 0 000-2zm6 0a1 1 0 100 2 1 1 0 000-2z\"/></svg></span>
          <span class=\"topbar__label\">Jeux</span>
        </a>
<a class=\"topbar__item\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_matches");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 3h10v2H7V3zm2 6h6v2H9V9zm-2 5h10v2H7v-2zm2 5h6v2H9v-2z\"/></svg></span>
          <span class=\"topbar__label\">Matchs</span>
        </a>
<a class=\"topbar__item\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 18c-1.1 0-2-.9-2-2V6h2v10h12v2H7zM9 6h10v10H9V6zm2 2v6h6V8h-6z\"/></svg></span>
          <span class=\"topbar__label\">Boutique</span>
        </a>
<a class=\"topbar__item\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.95 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z\"/></svg></span>
          <span class=\"topbar__label\">Équipe</span>
        </a></nav>
      <div class=\"heroTop__right\">
        <a class=\"btn btn--ghost\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_register");
        yield "\">S’inscrire</a>
        <button class=\"signInBtn\" id=\"btnOpenAuth\" type=\"button\">
          <span class=\"signInBtn__icon\" aria-hidden=\"true\">
            <svg viewBox=\"0 0 24 24\" class=\"ico\">
              <path d=\"M10 17l1.4-1.4-2.6-2.6H20v-2H8.8l2.6-2.6L10 7l-7 7 7 7zm-6 4h6v-2H4V5h6V3H4a2 2 0 00-2 2v14a2 2 0 002 2z\"/>
            </svg>
          </span>
          <span class=\"signInBtn__text\">SIGN IN</span>
        </button>
        <button class=\"menuBtn\" type=\"button\" aria-label=\"Menu\"><span></span><span></span><span></span></button>
      </div>
    </div>
    <div class=\"heroMini__center\">
      <div class=\"heroKicker\">TOURNOIS</div>
      <h1 class=\"heroMini__title\">Catalogue des tournois</h1>
      <div class=\"heroMini__sub\">Filtres avancés + progress bar.</div>
      <div class=\"breadcrumbs\">
        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\">Accueil</a>
        <span>•</span>
        <span>Catalogue des tournois</span>
      </div>
    </div>
    <div class=\"heroSlash\" aria-hidden=\"true\"></div>
  </header>


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
        // line 122
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
        // line 145
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
        // line 168
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
        // line 191
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

    

      <footer class=\"footer\">
        <div>© 2026 Pulse — Front-office</div>
        <div class=\"footer__links\">
          <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_about");
        yield "\">À propos</a>
          <a href=\"";
        // line 217
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_contact");
        yield "\">Contact</a>
          <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_faq");
        yield "\">FAQ</a>
        </div>
      </footer>

    </section>
  </main>

  <div class=\"authModal\" id=\"authModal\" aria-hidden=\"true\">
    <div class=\"authModal__backdrop\" data-close=\"true\"></div>
    <div class=\"authCard\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Connexion\">
      <div class=\"authCard__head\">
        <div>
          <div class=\"authCard__title\">Connexion</div>
          <div class=\"authCard__sub\">Email + mot de passe, puis “mot de passe oublié”.</div>
        </div>
        <button class=\"iconBtn\" data-close=\"true\" aria-label=\"Fermer\">
          <svg viewBox=\"0 0 24 24\" class=\"ico\">
            <path d=\"M18.3 5.7L12 12l6.3 6.3-1.4 1.4L10.6 13.4 4.3 19.7 2.9 18.3 9.2 12 2.9 5.7 4.3 4.3l6.3 6.3 6.3-6.3 1.4 1.4z\"/>
          </svg>
        </button>
      </div>
      <form class=\"authForm\" id=\"loginForm\">
        <label class=\"field\">
          <span class=\"field__label\">Email</span>
          <input type=\"email\" name=\"email\" placeholder=\"ex: you@email.com\" required />
        </label>
        <label class=\"field\">
          <span class=\"field__label\">Mot de passe</span>
          <input type=\"password\" name=\"password\" placeholder=\"••••••••\" required minlength=\"6\" />
        </label>
        <button class=\"btn btn--primary authForm__submit\" type=\"submit\">Se connecter</button>
        <div class=\"authForm__bottom\">
          <a class=\"authLink\" href=\"";
        // line 250
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_forgot_password");
        yield "\" id=\"forgotLink\">Mot de passe oublié ?</a>
        </div>
      </form>
    </div>
  </div>

  

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
        return "pages/tournaments.html.twig";
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
        return array (  397 => 250,  362 => 218,  358 => 217,  354 => 216,  326 => 191,  300 => 168,  274 => 145,  248 => 122,  188 => 65,  168 => 48,  160 => 43,  153 => 39,  146 => 35,  139 => 31,  132 => 27,  125 => 23,  111 => 12,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Catalogue des tournois{% endblock %}

{% block body %}


  <header class=\"heroMini\">
    <div class=\"heroFull__bg heroMini__bg\" data-bg=\"{{ asset('assets/template_fo/img/ll.png') }}\"></div>
    <div class=\"heroFull__overlay\"></div>
    <div class=\"heroTop\">
      <a class=\"brand\" href=\"{{ path('front_home') }}\" aria-label=\"Pulse\">
        <span class=\"brand__logo\" aria-hidden=\"true\">
          <svg viewBox=\"0 0 24 24\" class=\"ico\">
            <path d=\"M4 4h16v16H4V4zm3 3v10h10V7H7zm2 2h6v6H9V9z\"/>
          </svg>
        </span>
        <span class=\"brand__text\">
          <span class=\"brand__name\">PULSE</span>
          <span class=\"brand__small\">e-sport arena</span>
        </span>
      </a>
      <nav class=\"topbar\" aria-label=\"Navigation principale\"><a class=\"topbar__item\" href=\"{{ path('front_home') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M12 3l9 8h-3v10h-5v-6H11v6H6V11H3l9-8z\"/></svg></span>
          <span class=\"topbar__label\">Accueil</span>
        </a>
<a class=\"topbar__item is-active\" href=\"{{ path('front_tournaments') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M6 4h12v2H6V4zm2 4h8l1 4H7l1-4zm-2 6h12v2H6v-2zm2 4h8v2H8v-2z\"/></svg></span>
          <span class=\"topbar__label\">Tournois</span>
        </a>
<a class=\"topbar__item\" href=\"{{ path('front_games') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 6h10a4 4 0 014 4v2a4 4 0 01-4 4h-1l-2 2H10l-2-2H7a4 4 0 01-4-4v-2a4 4 0 014-4zm2 5a1 1 0 100 2 1 1 0 000-2zm6 0a1 1 0 100 2 1 1 0 000-2z\"/></svg></span>
          <span class=\"topbar__label\">Jeux</span>
        </a>
<a class=\"topbar__item\" href=\"{{ path('front_matches') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 3h10v2H7V3zm2 6h6v2H9V9zm-2 5h10v2H7v-2zm2 5h6v2H9v-2z\"/></svg></span>
          <span class=\"topbar__label\">Matchs</span>
        </a>
<a class=\"topbar__item\" href=\"{{ path('front_shop') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 18c-1.1 0-2-.9-2-2V6h2v10h12v2H7zM9 6h10v10H9V6zm2 2v6h6V8h-6z\"/></svg></span>
          <span class=\"topbar__label\">Boutique</span>
        </a>
<a class=\"topbar__item\" href=\"{{ path('front_teams') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.95 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z\"/></svg></span>
          <span class=\"topbar__label\">Équipe</span>
        </a></nav>
      <div class=\"heroTop__right\">
        <a class=\"btn btn--ghost\" href=\"{{ path('front_register') }}\">S’inscrire</a>
        <button class=\"signInBtn\" id=\"btnOpenAuth\" type=\"button\">
          <span class=\"signInBtn__icon\" aria-hidden=\"true\">
            <svg viewBox=\"0 0 24 24\" class=\"ico\">
              <path d=\"M10 17l1.4-1.4-2.6-2.6H20v-2H8.8l2.6-2.6L10 7l-7 7 7 7zm-6 4h6v-2H4V5h6V3H4a2 2 0 00-2 2v14a2 2 0 002 2z\"/>
            </svg>
          </span>
          <span class=\"signInBtn__text\">SIGN IN</span>
        </button>
        <button class=\"menuBtn\" type=\"button\" aria-label=\"Menu\"><span></span><span></span><span></span></button>
      </div>
    </div>
    <div class=\"heroMini__center\">
      <div class=\"heroKicker\">TOURNOIS</div>
      <h1 class=\"heroMini__title\">Catalogue des tournois</h1>
      <div class=\"heroMini__sub\">Filtres avancés + progress bar.</div>
      <div class=\"breadcrumbs\">
        <a href=\"{{ path('front_home') }}\">Accueil</a>
        <span>•</span>
        <span>Catalogue des tournois</span>
      </div>
    </div>
    <div class=\"heroSlash\" aria-hidden=\"true\"></div>
  </header>


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

    

      <footer class=\"footer\">
        <div>© 2026 Pulse — Front-office</div>
        <div class=\"footer__links\">
          <a href=\"{{ path('front_about') }}\">À propos</a>
          <a href=\"{{ path('front_contact') }}\">Contact</a>
          <a href=\"{{ path('front_faq') }}\">FAQ</a>
        </div>
      </footer>

    </section>
  </main>

  <div class=\"authModal\" id=\"authModal\" aria-hidden=\"true\">
    <div class=\"authModal__backdrop\" data-close=\"true\"></div>
    <div class=\"authCard\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Connexion\">
      <div class=\"authCard__head\">
        <div>
          <div class=\"authCard__title\">Connexion</div>
          <div class=\"authCard__sub\">Email + mot de passe, puis “mot de passe oublié”.</div>
        </div>
        <button class=\"iconBtn\" data-close=\"true\" aria-label=\"Fermer\">
          <svg viewBox=\"0 0 24 24\" class=\"ico\">
            <path d=\"M18.3 5.7L12 12l6.3 6.3-1.4 1.4L10.6 13.4 4.3 19.7 2.9 18.3 9.2 12 2.9 5.7 4.3 4.3l6.3 6.3 6.3-6.3 1.4 1.4z\"/>
          </svg>
        </button>
      </div>
      <form class=\"authForm\" id=\"loginForm\">
        <label class=\"field\">
          <span class=\"field__label\">Email</span>
          <input type=\"email\" name=\"email\" placeholder=\"ex: you@email.com\" required />
        </label>
        <label class=\"field\">
          <span class=\"field__label\">Mot de passe</span>
          <input type=\"password\" name=\"password\" placeholder=\"••••••••\" required minlength=\"6\" />
        </label>
        <button class=\"btn btn--primary authForm__submit\" type=\"submit\">Se connecter</button>
        <div class=\"authForm__bottom\">
          <a class=\"authLink\" href=\"{{ path('front_forgot_password') }}\" id=\"forgotLink\">Mot de passe oublié ?</a>
        </div>
      </form>
    </div>
  </div>

  

{% endblock %}


", "pages/tournaments.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\pages\\tournaments.html.twig");
    }
}
