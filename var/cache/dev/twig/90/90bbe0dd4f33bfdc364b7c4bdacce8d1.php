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
class __TwigTemplate_1df0756045b95e13c1e4499be203e721 extends Template
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

        yield "Pulse - Accueil";
        
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
        yield "  ";
        yield from $this->load("front/partials/_hero_full.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["show_widgets" => true, "hero_kicker" => "VOTRE PLATEFORME E-SPORT", "hero_title" => "PULSE", "hero_sub" => "Creez des equipes, participez aux tournois, suivez les matchs et gagnez des recompenses.", "hero_stat_matches" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["hero_stats"] ?? null), "matches", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero_stats"]) || array_key_exists("hero_stats", $context) ? $context["hero_stats"] : (function () { throw new RuntimeError('Variable "hero_stats" does not exist.', 11, $this->source); })()), "matches", [], "any", false, false, false, 11), 0)) : (0)), "hero_stat_tournaments" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 12
($context["hero_stats"] ?? null), "tournaments", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero_stats"]) || array_key_exists("hero_stats", $context) ? $context["hero_stats"] : (function () { throw new RuntimeError('Variable "hero_stats" does not exist.', 12, $this->source); })()), "tournaments", [], "any", false, false, false, 12), 0)) : (0)), "hero_stat_players" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["hero_stats"] ?? null), "players", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hero_stats"]) || array_key_exists("hero_stats", $context) ? $context["hero_stats"] : (function () { throw new RuntimeError('Variable "hero_stats" does not exist.', 13, $this->source); })()), "players", [], "any", false, false, false, 13), 0)) : (0))]));
        // line 15
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
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
            placeholder=\"Rechercher joueurs, equipes, tournois, matchs, jeux, produits...\"
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
          Astuce: tape au moins <b>2 caracteres</b>. Resultats: joueurs, equipes, tournois, matchs, jeux, produits.
        </div>
      </section>

      <section class=\"section section--search\" id=\"searchResultsSection\" hidden>
        <div class=\"section__head\">
          <div>
            <h2>SEARCH RESULTS</h2>
            <p class=\"muted\" id=\"searchResultsSub\">Resultats multi-types (joueurs, equipes, tournois, matchs, jeux, produits).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" id=\"searchResultsClose\" type=\"button\">Fermer</button>
          </div>
        </div>

        <div class=\"searchResultsWrap\" id=\"searchResultsWrap\"></div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>THIS WEEK TOURNAMENTS</h2>
            <p class=\"muted\">
              Tournois qui demarrent cette semaine
              ";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["week_window"] ?? null), "start", [], "any", true, true, false, 70) && CoreExtension::getAttribute($this->env, $this->source, ($context["week_window"] ?? null), "end", [], "any", true, true, false, 70))) {
            // line 71
            yield "                (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["week_window"]) || array_key_exists("week_window", $context) ? $context["week_window"] : (function () { throw new RuntimeError('Variable "week_window" does not exist.', 71, $this->source); })()), "start", [], "any", false, false, false, 71), "d/m"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["week_window"]) || array_key_exists("week_window", $context) ? $context["week_window"] : (function () { throw new RuntimeError('Variable "week_window" does not exist.', 71, $this->source); })()), "end", [], "any", false, false, false, 71), "d/m"), "html", null, true);
            yield ")
              ";
        }
        // line 73
        yield "            </p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"weekTournamentsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"weekTournamentsNext\">›</button>
            <a class=\"btn btn--soft\" href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\">Voir tout</a>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--tournaments cardsScroller hide-scrollbar overflow-x-scroll\" id=\"weekTournamentsGrid\" data-server-rendered=\"1\">
          ";
        // line 83
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["week_tournament_cards"]) || array_key_exists("week_tournament_cards", $context) ? $context["week_tournament_cards"] : (function () { throw new RuntimeError('Variable "week_tournament_cards" does not exist.', 83, $this->source); })()))) {
            // line 84
            yield "            <div class=\"panel emptyState\">Aucun tournoi disponible pour le moment.</div>
          ";
        } else {
            // line 86
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["week_tournament_cards"]) || array_key_exists("week_tournament_cards", $context) ? $context["week_tournament_cards"] : (function () { throw new RuntimeError('Variable "week_tournament_cards" does not exist.', 86, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 87
                yield "              ";
                $context["tournament"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tournament", [], "any", false, false, false, 87);
                // line 88
                yield "              ";
                $context["tournamentId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "tournamentId", [], "any", true, true, false, 88) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 88, $this->source); })()), "tournamentId", [], "any", false, false, false, 88)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 88, $this->source); })()), "tournamentId", [], "any", false, false, false, 88)) : (0));
                // line 89
                yield "              ";
                $context["tournamentImagePath"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["tournament"] ?? null), "photoPath", [], "any", true, true, false, 89) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 89, $this->source); })()), "photoPath", [], "any", false, false, false, 89)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 89, $this->source); })()), "photoPath", [], "any", false, false, false, 89)) : (""));
                // line 90
                yield "              ";
                $context["tournamentImageUrl"] = (((($tmp = (isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 90, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 90, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["tournamentImagePath"]) || array_key_exists("tournamentImagePath", $context) ? $context["tournamentImagePath"] : (function () { throw new RuntimeError('Variable "tournamentImagePath" does not exist.', 90, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_home_tournament_" . (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 90, $this->source); })())) . "/1200/800")));
                // line 91
                yield "              ";
                $context["game"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 91, $this->source); })()), "gameId", [], "any", false, false, false, 91);
                // line 92
                yield "              ";
                $context["organizer"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 92, $this->source); })()), "organizerUserId", [], "any", false, false, false, 92);
                // line 93
                yield "
              <article class=\"card card--tournament\">
                <div class=\"card__media\" data-bg=\"";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tournamentImageUrl"]) || array_key_exists("tournamentImageUrl", $context) ? $context["tournamentImageUrl"] : (function () { throw new RuntimeError('Variable "tournamentImageUrl" does not exist.', 95, $this->source); })()), "html", null, true);
                yield "\">
                  <div class=\"card__chips\">
                    <span class=\"chip chip--status\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 97, $this->source); })()), "status", [], "any", false, false, false, 97), "html", null, true);
                yield "</span>
                    <span class=\"chip chip--format\">";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 98, $this->source); })()), "format", [], "any", false, false, false, 98), "html", null, true);
                yield "</span>
                    <span class=\"chip\">";
                // line 99
                yield (((($tmp = (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 99, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 99, $this->source); })()), "name", [], "any", false, false, false, 99), "html", null, true)) : ("Jeu"));
                yield "</span>
                  </div>
                </div>

                <div class=\"card__body\">
                  <h4 class=\"card__title\">";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 104, $this->source); })()), "title", [], "any", false, false, false, 104), "html", null, true);
                yield "</h4>
                  <p class=\"card__desc\">
                    Organisateur: <b>";
                // line 106
                yield (((($tmp = (isset($context["organizer"]) || array_key_exists("organizer", $context) ? $context["organizer"] : (function () { throw new RuntimeError('Variable "organizer" does not exist.', 106, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["organizer"]) || array_key_exists("organizer", $context) ? $context["organizer"] : (function () { throw new RuntimeError('Variable "organizer" does not exist.', 106, $this->source); })()), "displayName", [], "any", false, false, false, 106)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organizer"]) || array_key_exists("organizer", $context) ? $context["organizer"] : (function () { throw new RuntimeError('Variable "organizer" does not exist.', 106, $this->source); })()), "displayName", [], "any", false, false, false, 106), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["organizer"]) || array_key_exists("organizer", $context) ? $context["organizer"] : (function () { throw new RuntimeError('Variable "organizer" does not exist.', 106, $this->source); })()), "username", [], "any", false, false, false, 106), "html", null, true)))) : ("-"));
                yield "</b>
                    | Debut: <b>";
                // line 107
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 107, $this->source); })()), "startDate", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 107, $this->source); })()), "startDate", [], "any", false, false, false, 107), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</b>
                  </p>

                  <div class=\"card__metaRow\">
                    <span class=\"metaPill\">Prize: <b>";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 111, $this->source); })()), "prizePool", [], "any", false, false, false, 111), "html", null, true);
                yield " DT</b></span>
                    <span class=\"metaPill\">Participants: <b>";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "participants_count", [], "any", false, false, false, 112), "html", null, true);
                yield "</b></span>
                    <span class=\"metaPill\">Matchs: <b>";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "finished_matches", [], "any", false, false, false, 113), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "total_matches", [], "any", false, false, false, 113), "html", null, true);
                yield "</b></span>
                  </div>

                  <div class=\"progress\">
                    <div class=\"progress__bar\" style=\"width: ";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "progress_percent", [], "any", false, false, false, 117), "html", null, true);
                yield "%\"></div>
                  </div>

                  <div class=\"card__actions\">
                    ";
                // line 121
                if (((isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 121, $this->source); })()) > 0)) {
                    // line 122
                    yield "                      <a class=\"btn btn--ghost\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail", ["id" => (isset($context["tournamentId"]) || array_key_exists("tournamentId", $context) ? $context["tournamentId"] : (function () { throw new RuntimeError('Variable "tournamentId" does not exist.', 122, $this->source); })())]), "html", null, true);
                    yield "\">Voir detail</a>
                    ";
                } else {
                    // line 124
                    yield "                      <a class=\"btn btn--ghost\" href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
                    yield "\">Voir detail</a>
                    ";
                }
                // line 126
                yield "                  </div>
                </div>
              </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "          ";
        }
        // line 131
        yield "        </div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>THIS WEEK CHAMPIONS</h2>
            <p class=\"muted\">Equipes gagnantes des tournois termines cette semaine (template front).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"championsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"championsNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Hall of Fame</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--champions cardsScroller hide-scrollbar overflow-x-scroll\" id=\"championsGrid\"></div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>BEST SELLERS</h2>
            <p class=\"muted\">Produits recents en stock depuis la base de donnees.</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"bestSellersPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"bestSellersNext\">›</button>
            <a class=\"btn btn--soft\" href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
        yield "\">Boutique</a>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--products cardsScroller hide-scrollbar overflow-x-scroll\" id=\"bestSellersGrid\" data-server-rendered=\"1\">
          ";
        // line 164
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["home_products"]) || array_key_exists("home_products", $context) ? $context["home_products"] : (function () { throw new RuntimeError('Variable "home_products" does not exist.', 164, $this->source); })()))) {
            // line 165
            yield "            <div class=\"panel emptyState\">Aucun produit disponible.</div>
          ";
        } else {
            // line 167
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["home_products"]) || array_key_exists("home_products", $context) ? $context["home_products"] : (function () { throw new RuntimeError('Variable "home_products" does not exist.', 167, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 168
                yield "              ";
                $context["productId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", true, true, false, 168) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 168)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productId", [], "any", false, false, false, 168)) : (0));
                // line 169
                yield "              ";
                $context["primaryImage"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["home_product_primary_images_by_product_id"] ?? null), (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 169, $this->source); })()), [], "array", true, true, false, 169)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["home_product_primary_images_by_product_id"]) || array_key_exists("home_product_primary_images_by_product_id", $context) ? $context["home_product_primary_images_by_product_id"] : (function () { throw new RuntimeError('Variable "home_product_primary_images_by_product_id" does not exist.', 169, $this->source); })()), (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 169, $this->source); })()), [], "array", false, false, false, 169), null)) : (null));
                // line 170
                yield "              ";
                $context["imagePath"] = (((($tmp = (isset($context["primaryImage"]) || array_key_exists("primaryImage", $context) ? $context["primaryImage"] : (function () { throw new RuntimeError('Variable "primaryImage" does not exist.', 170, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["primaryImage"]) || array_key_exists("primaryImage", $context) ? $context["primaryImage"] : (function () { throw new RuntimeError('Variable "primaryImage" does not exist.', 170, $this->source); })()), "fileUrl", [], "any", false, false, false, 170)) : (""));
                // line 171
                yield "              ";
                $context["imageUrl"] = (((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 171, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v2 = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 171, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 171, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 171, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_home_product_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 171, $this->source); })())) . "/1200/800")));
                // line 172
                yield "
              <article class=\"card card--product\">
                <div class=\"card__media\" data-bg=\"";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 174, $this->source); })()), "html", null, true);
                yield "\">
                  <div class=\"card__chips\">
                    <span class=\"chip chip--price\">";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 176), 2, ".", " "), "html", null, true);
                yield " DT</span>
                    <span class=\"chip\">Stock: ";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 177), "html", null, true);
                yield "</span>
                    <span class=\"chip\">";
                // line 178
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "teamId", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "teamId", [], "any", false, false, false, 178), "name", [], "any", false, false, false, 178), "html", null, true)) : ("Equipe"));
                yield "</span>
                  </div>
                </div>

                <div class=\"card__body\">
                  <h4 class=\"card__title\">";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 183), "html", null, true);
                yield "</h4>
                  <p class=\"card__desc\">";
                // line 184
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 184), 0, 85) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 184)) > 85)) ? ("...") : (""))), "html", null, true)) : ("Produit de boutique."));
                yield "</p>
                  <div class=\"card__actions\">
                    <a class=\"btn btn--ghost\" href=\"";
                // line 186
                yield ((((isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 186, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 186, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop")));
                yield "\">Detail</a>
                  </div>
                </div>
              </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            yield "          ";
        }
        // line 192
        yield "        </div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>POPULAR GAMES</h2>
            <p class=\"muted\">Jeux populaires par activite tournoi depuis la base.</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"popularGamesPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"popularGamesNext\">›</button>
            <a class=\"btn btn--soft\" href=\"";
        // line 204
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_games");
        yield "\">Voir jeux</a>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--games cardsScroller hide-scrollbar overflow-x-scroll\" id=\"popularGamesGrid\" data-server-rendered=\"1\">
          ";
        // line 209
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["home_game_cards"]) || array_key_exists("home_game_cards", $context) ? $context["home_game_cards"] : (function () { throw new RuntimeError('Variable "home_game_cards" does not exist.', 209, $this->source); })()))) {
            // line 210
            yield "            <div class=\"panel emptyState\">Aucun jeu disponible.</div>
          ";
        } else {
            // line 212
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["home_game_cards"]) || array_key_exists("home_game_cards", $context) ? $context["home_game_cards"] : (function () { throw new RuntimeError('Variable "home_game_cards" does not exist.', 212, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 213
                yield "              ";
                $context["game"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "game", [], "any", false, false, false, 213);
                // line 214
                yield "              ";
                $context["gameId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["game"] ?? null), "gameId", [], "any", true, true, false, 214) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 214, $this->source); })()), "gameId", [], "any", false, false, false, 214)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 214, $this->source); })()), "gameId", [], "any", false, false, false, 214)) : (0));
                // line 215
                yield "              ";
                $context["imagePath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 215, $this->source); })()), "coverImageId", [], "any", false, false, false, 215)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 215, $this->source); })()), "coverImageId", [], "any", false, false, false, 215), "fileUrl", [], "any", false, false, false, 215)) : (""));
                // line 216
                yield "              ";
                $context["imageUrl"] = (((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 216, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v4 = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 216, $this->source); })())) && is_string($_v5 = "http") && str_starts_with($_v4, $_v5))) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 216, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 216, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_home_game_" . (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 216, $this->source); })())) . "/1200/800")));
                // line 217
                yield "
              <article class=\"card card--game\">
                <div class=\"card__media\" data-bg=\"";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 219, $this->source); })()), "html", null, true);
                yield "\">
                  <div class=\"card__chips\">
                    <span class=\"chip chip--category\">";
                // line 221
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 221, $this->source); })()), "categoryId", [], "any", false, false, false, 221)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 221, $this->source); })()), "categoryId", [], "any", false, false, false, 221), "name", [], "any", false, false, false, 221), "html", null, true)) : ("Categorie"));
                yield "</span>
                    <span class=\"chip\">Actifs: ";
                // line 222
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "active_tournaments_count", [], "any", false, false, false, 222), "html", null, true);
                yield "</span>
                    <span class=\"chip\">";
                // line 223
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 223, $this->source); })()), "publisher", [], "any", false, false, false, 223)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 223, $this->source); })()), "publisher", [], "any", false, false, false, 223), "html", null, true)) : ("Publisher -"));
                yield "</span>
                  </div>
                </div>

                <div class=\"card__body\">
                  <h4 class=\"card__title\">";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 228, $this->source); })()), "name", [], "any", false, false, false, 228), "html", null, true);
                yield "</h4>
                  <p class=\"card__desc\">Tournois total: <b>";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "total_tournaments_count", [], "any", false, false, false, 229), "html", null, true);
                yield "</b> | Actifs: <b>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "active_tournaments_count", [], "any", false, false, false, 229), "html", null, true);
                yield "</b></p>
                  <div class=\"card__actions\">
                    <a class=\"btn btn--ghost\" href=\"";
                // line 231
                yield ((((isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 231, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail", ["id" => (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 231, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_games")));
                yield "\">Detail</a>
                  </div>
                </div>
              </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            yield "          ";
        }
        // line 237
        yield "        </div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>TOP TEAMS</h2>
            <p class=\"muted\">Equipes actives selon membres, produits et tournois.</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"topTeamsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"topTeamsNext\">›</button>
            <a class=\"btn btn--soft\" href=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams");
        yield "\">Voir equipes</a>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--teams cardsScroller hide-scrollbar overflow-x-scroll\" id=\"topTeamsGrid\" data-server-rendered=\"1\">
          ";
        // line 254
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["home_team_cards"]) || array_key_exists("home_team_cards", $context) ? $context["home_team_cards"] : (function () { throw new RuntimeError('Variable "home_team_cards" does not exist.', 254, $this->source); })()))) {
            // line 255
            yield "            <div class=\"panel emptyState\">Aucune equipe disponible.</div>
          ";
        } else {
            // line 257
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["home_team_cards"]) || array_key_exists("home_team_cards", $context) ? $context["home_team_cards"] : (function () { throw new RuntimeError('Variable "home_team_cards" does not exist.', 257, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 258
                yield "              ";
                $context["team"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 258);
                // line 259
                yield "              ";
                $context["teamId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", true, true, false, 259) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 259, $this->source); })()), "teamId", [], "any", false, false, false, 259)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 259, $this->source); })()), "teamId", [], "any", false, false, false, 259)) : (0));
                // line 260
                yield "              ";
                $context["logoPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 260, $this->source); })()), "logoImageId", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 260, $this->source); })()), "logoImageId", [], "any", false, false, false, 260), "fileUrl", [], "any", false, false, false, 260)) : (""));
                // line 261
                yield "              ";
                $context["logoUrl"] = (((($tmp = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 261, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v6 = (isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 261, $this->source); })())) && is_string($_v7 = "http") && str_starts_with($_v6, $_v7))) ? ((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 261, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 261, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_home_team_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 261, $this->source); })())) . "/1200/800")));
                // line 262
                yield "              ";
                $context["captain"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 262, $this->source); })()), "captainUserId", [], "any", false, false, false, 262);
                // line 263
                yield "
              <article class=\"card card--team\">
                <div class=\"card__media\" data-bg=\"";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logoUrl"]) || array_key_exists("logoUrl", $context) ? $context["logoUrl"] : (function () { throw new RuntimeError('Variable "logoUrl" does not exist.', 265, $this->source); })()), "html", null, true);
                yield "\">
                  <div class=\"card__chips\">
                    <span class=\"chip chip--region\">";
                // line 267
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 267, $this->source); })()), "region", [], "any", false, false, false, 267)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 267, $this->source); })()), "region", [], "any", false, false, false, 267), "html", null, true)) : ("Region -"));
                yield "</span>
                    <span class=\"chip\">Membres: ";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "members_count", [], "any", false, false, false, 268), "html", null, true);
                yield "</span>
                    <span class=\"chip\">Tournois actifs: ";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "active_tournaments_count", [], "any", false, false, false, 269), "html", null, true);
                yield "</span>
                  </div>
                </div>

                <div class=\"card__body\">
                  <h4 class=\"card__title\">";
                // line 274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 274, $this->source); })()), "name", [], "any", false, false, false, 274), "html", null, true);
                yield "</h4>
                  <p class=\"card__desc\">Capitaine: <b>";
                // line 275
                yield (((($tmp = (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 275, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 275, $this->source); })()), "displayName", [], "any", false, false, false, 275)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 275, $this->source); })()), "displayName", [], "any", false, false, false, 275), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["captain"]) || array_key_exists("captain", $context) ? $context["captain"] : (function () { throw new RuntimeError('Variable "captain" does not exist.', 275, $this->source); })()), "username", [], "any", false, false, false, 275), "html", null, true)))) : ("-"));
                yield "</b> | Produits: <b>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "products_count", [], "any", false, false, false, 275), "html", null, true);
                yield "</b></p>
                  <div class=\"card__actions\">
                    <a class=\"btn btn--ghost\" href=\"";
                // line 277
                yield ((((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 277, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 277, $this->source); })())]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams")));
                yield "\">Detail</a>
                  </div>
                </div>
              </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            yield "          ";
        }
        // line 283
        yield "        </div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>NEW PLAYERS</h2>
            <p class=\"muted\">Cartes membre (template): profil, stats, equipes.</p>
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
        // line 302
        yield from $this->load("front/partials/_footer.html.twig", 302)->unwrap()->yield($context);
        // line 303
        yield "    </section>
  </main>

  ";
        // line 306
        yield from $this->load("front/partials/_auth_modal.html.twig", 306)->unwrap()->yield($context);
        
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
        return array (  638 => 306,  633 => 303,  631 => 302,  610 => 283,  607 => 282,  596 => 277,  589 => 275,  585 => 274,  577 => 269,  573 => 268,  569 => 267,  564 => 265,  560 => 263,  557 => 262,  554 => 261,  551 => 260,  548 => 259,  545 => 258,  540 => 257,  536 => 255,  534 => 254,  526 => 249,  512 => 237,  509 => 236,  498 => 231,  491 => 229,  487 => 228,  479 => 223,  475 => 222,  471 => 221,  466 => 219,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 213,  445 => 212,  441 => 210,  439 => 209,  431 => 204,  417 => 192,  414 => 191,  403 => 186,  398 => 184,  394 => 183,  386 => 178,  382 => 177,  378 => 176,  373 => 174,  369 => 172,  366 => 171,  363 => 170,  360 => 169,  357 => 168,  352 => 167,  348 => 165,  346 => 164,  338 => 159,  308 => 131,  305 => 130,  296 => 126,  290 => 124,  284 => 122,  282 => 121,  275 => 117,  266 => 113,  262 => 112,  258 => 111,  251 => 107,  247 => 106,  242 => 104,  234 => 99,  230 => 98,  226 => 97,  221 => 95,  217 => 93,  214 => 92,  211 => 91,  208 => 90,  205 => 89,  202 => 88,  199 => 87,  194 => 86,  190 => 84,  188 => 83,  180 => 78,  173 => 73,  165 => 71,  163 => 70,  106 => 15,  104 => 13,  103 => 12,  102 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pulse - Accueil{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_full.html.twig' with {
    show_widgets: true,
    hero_kicker: 'VOTRE PLATEFORME E-SPORT',
    hero_title: 'PULSE',
    hero_sub: 'Creez des equipes, participez aux tournois, suivez les matchs et gagnez des recompenses.',
    hero_stat_matches: hero_stats.matches|default(0),
    hero_stat_tournaments: hero_stats.tournaments|default(0),
    hero_stat_players: hero_stats.players|default(0)
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
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
            placeholder=\"Rechercher joueurs, equipes, tournois, matchs, jeux, produits...\"
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
          Astuce: tape au moins <b>2 caracteres</b>. Resultats: joueurs, equipes, tournois, matchs, jeux, produits.
        </div>
      </section>

      <section class=\"section section--search\" id=\"searchResultsSection\" hidden>
        <div class=\"section__head\">
          <div>
            <h2>SEARCH RESULTS</h2>
            <p class=\"muted\" id=\"searchResultsSub\">Resultats multi-types (joueurs, equipes, tournois, matchs, jeux, produits).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" id=\"searchResultsClose\" type=\"button\">Fermer</button>
          </div>
        </div>

        <div class=\"searchResultsWrap\" id=\"searchResultsWrap\"></div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>THIS WEEK TOURNAMENTS</h2>
            <p class=\"muted\">
              Tournois qui demarrent cette semaine
              {% if week_window.start is defined and week_window.end is defined %}
                ({{ week_window.start|date('d/m') }} - {{ week_window.end|date('d/m') }})
              {% endif %}
            </p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"weekTournamentsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"weekTournamentsNext\">›</button>
            <a class=\"btn btn--soft\" href=\"{{ path('front_tournaments') }}\">Voir tout</a>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--tournaments cardsScroller hide-scrollbar overflow-x-scroll\" id=\"weekTournamentsGrid\" data-server-rendered=\"1\">
          {% if week_tournament_cards is empty %}
            <div class=\"panel emptyState\">Aucun tournoi disponible pour le moment.</div>
          {% else %}
            {% for row in week_tournament_cards %}
              {% set tournament = row.tournament %}
              {% set tournamentId = tournament.tournamentId ?? 0 %}
              {% set tournamentImagePath = tournament.photoPath ?? '' %}
              {% set tournamentImageUrl = tournamentImagePath ? (tournamentImagePath starts with 'http' ? tournamentImagePath : asset(tournamentImagePath)) : 'https://picsum.photos/seed/pulse_home_tournament_' ~ tournamentId ~ '/1200/800' %}
              {% set game = tournament.gameId %}
              {% set organizer = tournament.organizerUserId %}

              <article class=\"card card--tournament\">
                <div class=\"card__media\" data-bg=\"{{ tournamentImageUrl }}\">
                  <div class=\"card__chips\">
                    <span class=\"chip chip--status\">{{ tournament.status }}</span>
                    <span class=\"chip chip--format\">{{ tournament.format }}</span>
                    <span class=\"chip\">{{ game ? game.name : 'Jeu' }}</span>
                  </div>
                </div>

                <div class=\"card__body\">
                  <h4 class=\"card__title\">{{ tournament.title }}</h4>
                  <p class=\"card__desc\">
                    Organisateur: <b>{{ organizer ? (organizer.displayName ?: organizer.username) : '-' }}</b>
                    | Debut: <b>{{ tournament.startDate ? tournament.startDate|date('d/m/Y') : '-' }}</b>
                  </p>

                  <div class=\"card__metaRow\">
                    <span class=\"metaPill\">Prize: <b>{{ tournament.prizePool }} DT</b></span>
                    <span class=\"metaPill\">Participants: <b>{{ row.participants_count }}</b></span>
                    <span class=\"metaPill\">Matchs: <b>{{ row.finished_matches }}/{{ row.total_matches }}</b></span>
                  </div>

                  <div class=\"progress\">
                    <div class=\"progress__bar\" style=\"width: {{ row.progress_percent }}%\"></div>
                  </div>

                  <div class=\"card__actions\">
                    {% if tournamentId > 0 %}
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_tournament_detail', {id: tournamentId}) }}\">Voir detail</a>
                    {% else %}
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_tournaments') }}\">Voir detail</a>
                    {% endif %}
                  </div>
                </div>
              </article>
            {% endfor %}
          {% endif %}
        </div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>THIS WEEK CHAMPIONS</h2>
            <p class=\"muted\">Equipes gagnantes des tournois termines cette semaine (template front).</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"championsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"championsNext\">›</button>
            <button class=\"btn btn--soft\" type=\"button\">Hall of Fame</button>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--champions cardsScroller hide-scrollbar overflow-x-scroll\" id=\"championsGrid\"></div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>BEST SELLERS</h2>
            <p class=\"muted\">Produits recents en stock depuis la base de donnees.</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"bestSellersPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"bestSellersNext\">›</button>
            <a class=\"btn btn--soft\" href=\"{{ path('front_shop') }}\">Boutique</a>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--products cardsScroller hide-scrollbar overflow-x-scroll\" id=\"bestSellersGrid\" data-server-rendered=\"1\">
          {% if home_products is empty %}
            <div class=\"panel emptyState\">Aucun produit disponible.</div>
          {% else %}
            {% for product in home_products %}
              {% set productId = product.productId ?? 0 %}
              {% set primaryImage = home_product_primary_images_by_product_id[productId]|default(null) %}
              {% set imagePath = primaryImage ? primaryImage.fileUrl : '' %}
              {% set imageUrl = imagePath ? (imagePath starts with 'http' ? imagePath : asset(imagePath)) : 'https://picsum.photos/seed/pulse_home_product_' ~ productId ~ '/1200/800' %}

              <article class=\"card card--product\">
                <div class=\"card__media\" data-bg=\"{{ imageUrl }}\">
                  <div class=\"card__chips\">
                    <span class=\"chip chip--price\">{{ product.price|number_format(2, '.', ' ') }} DT</span>
                    <span class=\"chip\">Stock: {{ product.stockQty }}</span>
                    <span class=\"chip\">{{ product.teamId ? product.teamId.name : 'Equipe' }}</span>
                  </div>
                </div>

                <div class=\"card__body\">
                  <h4 class=\"card__title\">{{ product.name }}</h4>
                  <p class=\"card__desc\">{{ product.description ? product.description|slice(0, 85) ~ (product.description|length > 85 ? '...' : '') : 'Produit de boutique.' }}</p>
                  <div class=\"card__actions\">
                    <a class=\"btn btn--ghost\" href=\"{{ productId > 0 ? path('front_product_detail', {id: productId}) : path('front_shop') }}\">Detail</a>
                  </div>
                </div>
              </article>
            {% endfor %}
          {% endif %}
        </div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>POPULAR GAMES</h2>
            <p class=\"muted\">Jeux populaires par activite tournoi depuis la base.</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"popularGamesPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"popularGamesNext\">›</button>
            <a class=\"btn btn--soft\" href=\"{{ path('front_games') }}\">Voir jeux</a>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--games cardsScroller hide-scrollbar overflow-x-scroll\" id=\"popularGamesGrid\" data-server-rendered=\"1\">
          {% if home_game_cards is empty %}
            <div class=\"panel emptyState\">Aucun jeu disponible.</div>
          {% else %}
            {% for row in home_game_cards %}
              {% set game = row.game %}
              {% set gameId = game.gameId ?? 0 %}
              {% set imagePath = game.coverImageId ? game.coverImageId.fileUrl : '' %}
              {% set imageUrl = imagePath ? (imagePath starts with 'http' ? imagePath : asset(imagePath)) : 'https://picsum.photos/seed/pulse_home_game_' ~ gameId ~ '/1200/800' %}

              <article class=\"card card--game\">
                <div class=\"card__media\" data-bg=\"{{ imageUrl }}\">
                  <div class=\"card__chips\">
                    <span class=\"chip chip--category\">{{ game.categoryId ? game.categoryId.name : 'Categorie' }}</span>
                    <span class=\"chip\">Actifs: {{ row.active_tournaments_count }}</span>
                    <span class=\"chip\">{{ game.publisher ?: 'Publisher -' }}</span>
                  </div>
                </div>

                <div class=\"card__body\">
                  <h4 class=\"card__title\">{{ game.name }}</h4>
                  <p class=\"card__desc\">Tournois total: <b>{{ row.total_tournaments_count }}</b> | Actifs: <b>{{ row.active_tournaments_count }}</b></p>
                  <div class=\"card__actions\">
                    <a class=\"btn btn--ghost\" href=\"{{ gameId > 0 ? path('front_game_detail', {id: gameId}) : path('front_games') }}\">Detail</a>
                  </div>
                </div>
              </article>
            {% endfor %}
          {% endif %}
        </div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>TOP TEAMS</h2>
            <p class=\"muted\">Equipes actives selon membres, produits et tournois.</p>
          </div>
          <div class=\"section__actions\">
            <button class=\"btn btn--ghost\" type=\"button\" id=\"topTeamsPrev\">‹</button>
            <button class=\"btn btn--ghost\" type=\"button\" id=\"topTeamsNext\">›</button>
            <a class=\"btn btn--soft\" href=\"{{ path('front_teams') }}\">Voir equipes</a>
          </div>
        </div>

        <div class=\"cardsGrid cardsGrid--teams cardsScroller hide-scrollbar overflow-x-scroll\" id=\"topTeamsGrid\" data-server-rendered=\"1\">
          {% if home_team_cards is empty %}
            <div class=\"panel emptyState\">Aucune equipe disponible.</div>
          {% else %}
            {% for row in home_team_cards %}
              {% set team = row.team %}
              {% set teamId = team.teamId ?? 0 %}
              {% set logoPath = team.logoImageId ? team.logoImageId.fileUrl : '' %}
              {% set logoUrl = logoPath ? (logoPath starts with 'http' ? logoPath : asset(logoPath)) : 'https://picsum.photos/seed/pulse_home_team_' ~ teamId ~ '/1200/800' %}
              {% set captain = team.captainUserId %}

              <article class=\"card card--team\">
                <div class=\"card__media\" data-bg=\"{{ logoUrl }}\">
                  <div class=\"card__chips\">
                    <span class=\"chip chip--region\">{{ team.region ?: 'Region -' }}</span>
                    <span class=\"chip\">Membres: {{ row.members_count }}</span>
                    <span class=\"chip\">Tournois actifs: {{ row.active_tournaments_count }}</span>
                  </div>
                </div>

                <div class=\"card__body\">
                  <h4 class=\"card__title\">{{ team.name }}</h4>
                  <p class=\"card__desc\">Capitaine: <b>{{ captain ? (captain.displayName ?: captain.username) : '-' }}</b> | Produits: <b>{{ row.products_count }}</b></p>
                  <div class=\"card__actions\">
                    <a class=\"btn btn--ghost\" href=\"{{ teamId > 0 ? path('front_team_detail', {id: teamId}) : path('front_teams') }}\">Detail</a>
                  </div>
                </div>
              </article>
            {% endfor %}
          {% endif %}
        </div>
      </section>

      <section class=\"section\">
        <div class=\"section__head\">
          <div>
            <h2>NEW PLAYERS</h2>
            <p class=\"muted\">Cartes membre (template): profil, stats, equipes.</p>
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

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/home/index.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\home\\index.html.twig");
    }
}
