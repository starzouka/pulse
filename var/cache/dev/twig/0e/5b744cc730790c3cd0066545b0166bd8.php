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

/* front/partials/_account_sidebar.html.twig */
class __TwigTemplate_f99fed8428bd595cdb96c0b8be3d19da extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_account_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_account_sidebar.html.twig"));

        // line 1
        $context["route_name"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 1), "attributes", [], "any", false, true, false, 1), "get", ["_route"], "method", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1), "")) : (""));
        // line 2
        $context["current_user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2);
        // line 3
        $context["preview_role"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 3), "query", [], "any", false, true, false, 3), "get", ["as"], "method", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "query", [], "any", false, false, false, 3), "get", ["as"], "method", false, false, false, 3), "")) : ("")));
        // line 4
        $context["known_roles"] = ["PLAYER", "CAPTAIN", "ORGANIZER", "ADMIN"];
        // line 5
        $context["detected_role"] = $this->extensions['App\Twig\UserContextExtension']->resolveFrontRole((isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 5, $this->source); })()));
        // line 6
        $context["current_role"] = ((CoreExtension::inFilter((isset($context["preview_role"]) || array_key_exists("preview_role", $context) ? $context["preview_role"] : (function () { throw new RuntimeError('Variable "preview_role" does not exist.', 6, $this->source); })()), (isset($context["known_roles"]) || array_key_exists("known_roles", $context) ? $context["known_roles"] : (function () { throw new RuntimeError('Variable "known_roles" does not exist.', 6, $this->source); })()))) ? ((isset($context["preview_role"]) || array_key_exists("preview_role", $context) ? $context["preview_role"] : (function () { throw new RuntimeError('Variable "preview_role" does not exist.', 6, $this->source); })())) : (((CoreExtension::inFilter((isset($context["detected_role"]) || array_key_exists("detected_role", $context) ? $context["detected_role"] : (function () { throw new RuntimeError('Variable "detected_role" does not exist.', 6, $this->source); })()), (isset($context["known_roles"]) || array_key_exists("known_roles", $context) ? $context["known_roles"] : (function () { throw new RuntimeError('Variable "known_roles" does not exist.', 6, $this->source); })()))) ? ((isset($context["detected_role"]) || array_key_exists("detected_role", $context) ? $context["detected_role"] : (function () { throw new RuntimeError('Variable "detected_role" does not exist.', 6, $this->source); })())) : ("GUEST"))));
        // line 7
        $context["display_name"] = (((($tmp = (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, ($context["current_user"] ?? null), "displayName", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 7, $this->source); })()), "displayName", [], "any", false, false, false, 7), ((CoreExtension::getAttribute($this->env, $this->source, ($context["current_user"] ?? null), "username", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 7, $this->source); })()), "username", [], "any", false, false, false, 7), ((CoreExtension::getAttribute($this->env, $this->source, ($context["current_user"] ?? null), "userIdentifier", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 7, $this->source); })()), "userIdentifier", [], "any", false, false, false, 7), "Utilisateur")) : ("Utilisateur")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["current_user"] ?? null), "userIdentifier", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 7, $this->source); })()), "userIdentifier", [], "any", false, false, false, 7), "Utilisateur")) : ("Utilisateur")))))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["current_user"] ?? null), "username", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 7, $this->source); })()), "username", [], "any", false, false, false, 7), ((CoreExtension::getAttribute($this->env, $this->source, ($context["current_user"] ?? null), "userIdentifier", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 7, $this->source); })()), "userIdentifier", [], "any", false, false, false, 7), "Utilisateur")) : ("Utilisateur")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["current_user"] ?? null), "userIdentifier", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 7, $this->source); })()), "userIdentifier", [], "any", false, false, false, 7), "Utilisateur")) : ("Utilisateur"))))))) : ("Invite"));
        // line 8
        $context["role_label"] = CoreExtension::getAttribute($this->env, $this->source, ["PLAYER" => "Joueur", "CAPTAIN" => "Capitaine", "ORGANIZER" => "Organisateur", "ADMIN" => "Admin", "GUEST" => "Invite"],         // line 14
(isset($context["current_role"]) || array_key_exists("current_role", $context) ? $context["current_role"] : (function () { throw new RuntimeError('Variable "current_role" does not exist.', 14, $this->source); })()), [], "array", false, false, false, 9);
        // line 15
        yield "
<div class=\"accountSidebarBackdrop\" data-account-close=\"true\"></div>

<aside class=\"accountSidebar\" id=\"accountSidebar\" aria-hidden=\"true\">
  <div class=\"accountSidebar__head\">
    <div class=\"accountSidebar__identity\">
      <div class=\"accountSidebar__avatar\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["display_name"]) || array_key_exists("display_name", $context) ? $context["display_name"] : (function () { throw new RuntimeError('Variable "display_name" does not exist.', 21, $this->source); })()))), "html", null, true);
        yield "</div>
      <div>
        <div class=\"accountSidebar__name\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["display_name"]) || array_key_exists("display_name", $context) ? $context["display_name"] : (function () { throw new RuntimeError('Variable "display_name" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "</div>
        <div class=\"accountSidebar__role role--";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["current_role"]) || array_key_exists("current_role", $context) ? $context["current_role"] : (function () { throw new RuntimeError('Variable "current_role" does not exist.', 24, $this->source); })())), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["role_label"]) || array_key_exists("role_label", $context) ? $context["role_label"] : (function () { throw new RuntimeError('Variable "role_label" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "</div>
      </div>
    </div>

    <button class=\"iconBtn accountSidebar__close\" type=\"button\" data-account-close=\"true\" aria-label=\"Fermer le menu\">
      <svg viewBox=\"0 0 24 24\" class=\"ico\">
        <path d=\"M18.3 5.7L12 12l6.3 6.3-1.4 1.4L10.6 13.4 4.3 19.7 2.9 18.3 9.2 12 2.9 5.7 4.3 4.3l6.3 6.3 6.3-6.3 1.4 1.4z\"/>
      </svg>
    </button>
  </div>

  <div class=\"accountSidebar__content\">
    <section class=\"accountSidebar__section\">
      <h3 class=\"accountSidebar__title\">Navigation principale</h3>
      <div class=\"accountSidebar__links\">
        <a class=\"accountSidebar__link";
        // line 39
        yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 39, $this->source); })()), ["front_root", "front_home"])) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\">Accueil</a>
        <a class=\"accountSidebar__link";
        // line 40
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 40, $this->source); })()) == "front_dashboard")) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_dashboard");
        yield "\">Dashboard</a>
        <a class=\"accountSidebar__link";
        // line 41
        yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 41, $this->source); })()), ["front_profile", "front_profile_edit"])) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile");
        yield "\">Mon profil</a>
        <a class=\"accountSidebar__link";
        // line 42
        yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 42, $this->source); })()), ["front_messages", "front_conversation"])) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages");
        yield "\">Messagerie</a>
        <a class=\"accountSidebar__link";
        // line 43
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 43, $this->source); })()) == "front_notifications")) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\">Notifications</a>
      </div>
    </section>

    <section class=\"accountSidebar__section\">
      <h3 class=\"accountSidebar__title\">Competition</h3>
      <div class=\"accountSidebar__links\">
        <a class=\"accountSidebar__link";
        // line 50
        yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 50, $this->source); })()), ["front_tournaments", "front_tournament_detail"])) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\">Tournois</a>
        <a class=\"accountSidebar__link";
        // line 51
        yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 51, $this->source); })()), ["front_matches", "front_match_detail"])) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_matches");
        yield "\">Matchs</a>
        <a class=\"accountSidebar__link";
        // line 52
        yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 52, $this->source); })()), ["front_games", "front_game_detail"])) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_games");
        yield "\">Jeux</a>
        <a class=\"accountSidebar__link";
        // line 53
        yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 53, $this->source); })()), ["front_teams", "front_teams_explore", "front_team_detail"])) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams");
        yield "\">Equipes</a>
      </div>
    </section>

    <section class=\"accountSidebar__section\">
      <h3 class=\"accountSidebar__title\">Boutique</h3>
      <div class=\"accountSidebar__links\">
        <a class=\"accountSidebar__link";
        // line 60
        yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 60, $this->source); })()), ["front_shop", "front_product_detail"])) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
        yield "\">Catalogue</a>
        <a class=\"accountSidebar__link";
        // line 61
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 61, $this->source); })()) == "front_cart")) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart");
        yield "\">Panier</a>
        <a class=\"accountSidebar__link";
        // line 62
        yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 62, $this->source); })()), ["front_orders", "front_order_detail"])) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\">Mes commandes</a>
      </div>
    </section>

    ";
        // line 66
        if (CoreExtension::inFilter((isset($context["current_role"]) || array_key_exists("current_role", $context) ? $context["current_role"] : (function () { throw new RuntimeError('Variable "current_role" does not exist.', 66, $this->source); })()), ["PLAYER", "CAPTAIN", "ORGANIZER", "ADMIN"])) {
            // line 67
            yield "      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Joueur</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link";
            // line 70
            yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 70, $this->source); })()), ["front_feed", "front_feed_public"])) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_feed");
            yield "\">Fil d'actualite</a>
          <a class=\"accountSidebar__link";
            // line 71
            yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 71, $this->source); })()), ["front_friends", "front_players", "front_player_profile"])) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players");
            yield "\">Joueurs et amis</a>
          <a class=\"accountSidebar__link";
            // line 72
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 72, $this->source); })()) == "front_my_teams")) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
            yield "\">Mes equipes</a>
          <a class=\"accountSidebar__link";
            // line 73
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 73, $this->source); })()) == "front_my_requests")) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_requests");
            yield "\">Mes demandes</a>
        </div>
      </section>
    ";
        }
        // line 77
        yield "
    ";
        // line 78
        if (CoreExtension::inFilter((isset($context["current_role"]) || array_key_exists("current_role", $context) ? $context["current_role"] : (function () { throw new RuntimeError('Variable "current_role" does not exist.', 78, $this->source); })()), ["CAPTAIN", "ADMIN"])) {
            // line 79
            yield "      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Capitaine</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link";
            // line 82
            yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 82, $this->source); })()), ["front_captain_team_create", "front_captain_team_manage"])) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage");
            yield "\">Equipe (creer / gerer)</a>
          <a class=\"accountSidebar__link";
            // line 83
            yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 83, $this->source); })()), ["front_captain_members", "front_captain_invite", "front_captain_requests"])) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_members");
            yield "\">Membres et invitations</a>
          <a class=\"accountSidebar__link";
            // line 84
            yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 84, $this->source); })()), ["front_captain_tournaments", "front_captain_team_tournaments"])) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_tournaments");
            yield "\">Tournois equipe</a>
          <a class=\"accountSidebar__link";
            // line 85
            yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 85, $this->source); })()), ["front_captain_products", "front_captain_product_create", "front_captain_product_edit", "front_captain_orders"])) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_products");
            yield "\">Boutique equipe</a>
        </div>
      </section>
    ";
        }
        // line 89
        yield "
    ";
        // line 90
        if (CoreExtension::inFilter((isset($context["current_role"]) || array_key_exists("current_role", $context) ? $context["current_role"] : (function () { throw new RuntimeError('Variable "current_role" does not exist.', 90, $this->source); })()), ["ORGANIZER", "ADMIN"])) {
            // line 91
            yield "      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Organisateur</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link";
            // line 94
            yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 94, $this->source); })()), ["front_organizer_request_create", "front_organizer_requests", "front_organizer_request_detail"])) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests");
            yield "\">Demandes tournoi</a>
          <a class=\"accountSidebar__link";
            // line 95
            yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 95, $this->source); })()), ["front_organizer_tournaments", "front_organizer_tournament_detail", "front_organizer_tournament_edit"])) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_tournaments");
            yield "\">Mes tournois</a>
          <a class=\"accountSidebar__link";
            // line 96
            yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 96, $this->source); })()), ["front_organizer_matches", "front_organizer_match_create", "front_organizer_match_edit"])) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_matches");
            yield "\">Gestion matchs</a>
          <a class=\"accountSidebar__link";
            // line 97
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 97, $this->source); })()) == "front_organizer_registrations")) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_registrations");
            yield "\">Inscriptions equipes</a>
        </div>
      </section>
    ";
        }
        // line 101
        yield "
    ";
        // line 102
        if (((isset($context["current_role"]) || array_key_exists("current_role", $context) ? $context["current_role"] : (function () { throw new RuntimeError('Variable "current_role" does not exist.', 102, $this->source); })()) == "ADMIN")) {
            // line 103
            yield "      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Administration</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link\" href=\"";
            // line 106
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\">Dashboard admin</a>
          <a class=\"accountSidebar__link\" href=\"";
            // line 107
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
            yield "\">Utilisateurs</a>
          <a class=\"accountSidebar__link\" href=\"";
            // line 108
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournaments");
            yield "\">Tournois</a>
          <a class=\"accountSidebar__link\" href=\"";
            // line 109
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
            yield "\">Commandes</a>
        </div>
      </section>
    ";
        }
        // line 113
        yield "
    ";
        // line 114
        if (((isset($context["current_role"]) || array_key_exists("current_role", $context) ? $context["current_role"] : (function () { throw new RuntimeError('Variable "current_role" does not exist.', 114, $this->source); })()) == "GUEST")) {
            // line 115
            yield "      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Connexion</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link";
            // line 118
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 118, $this->source); })()) == "front_login")) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
            yield "\">Se connecter</a>
          <a class=\"accountSidebar__link";
            // line 119
            yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 119, $this->source); })()) == "front_register")) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_register");
            yield "\">S'inscrire</a>
          <a class=\"accountSidebar__link";
            // line 120
            yield ((CoreExtension::inFilter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 120, $this->source); })()), ["front_forgot_password", "front_reset_password"])) ? (" is-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_forgot_password");
            yield "\">Mot de passe oublie</a>
        </div>
      </section>
    ";
        }
        // line 124
        yield "
    ";
        // line 125
        if ((($tmp = (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 125, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Compte</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link\" href=\"";
            // line 129
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se deconnecter</a>
        </div>
      </section>
    ";
        }
        // line 133
        yield "
    <section class=\"accountSidebar__section\">
      <h3 class=\"accountSidebar__title\">Support</h3>
      <div class=\"accountSidebar__links\">
        <a class=\"accountSidebar__link";
        // line 137
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 137, $this->source); })()) == "front_about")) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_about");
        yield "\">A propos</a>
        <a class=\"accountSidebar__link";
        // line 138
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 138, $this->source); })()) == "front_contact")) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_contact");
        yield "\">Contact</a>
        <a class=\"accountSidebar__link";
        // line 139
        yield ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 139, $this->source); })()) == "front_faq")) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_faq");
        yield "\">FAQ</a>
      </div>
    </section>
  </div>
</aside>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/partials/_account_sidebar.html.twig";
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
        return array (  392 => 139,  386 => 138,  380 => 137,  374 => 133,  367 => 129,  362 => 126,  360 => 125,  357 => 124,  348 => 120,  342 => 119,  336 => 118,  331 => 115,  329 => 114,  326 => 113,  319 => 109,  315 => 108,  311 => 107,  307 => 106,  302 => 103,  300 => 102,  297 => 101,  288 => 97,  282 => 96,  276 => 95,  270 => 94,  265 => 91,  263 => 90,  260 => 89,  251 => 85,  245 => 84,  239 => 83,  233 => 82,  228 => 79,  226 => 78,  223 => 77,  214 => 73,  208 => 72,  202 => 71,  196 => 70,  191 => 67,  189 => 66,  180 => 62,  174 => 61,  168 => 60,  156 => 53,  150 => 52,  144 => 51,  138 => 50,  126 => 43,  120 => 42,  114 => 41,  108 => 40,  102 => 39,  82 => 24,  78 => 23,  73 => 21,  65 => 15,  63 => 14,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set route_name = app.request.attributes.get('_route')|default('') %}
{% set current_user = app.user %}
{% set preview_role = app.request.query.get('as')|default('')|upper %}
{% set known_roles = ['PLAYER', 'CAPTAIN', 'ORGANIZER', 'ADMIN'] %}
{% set detected_role = front_role(current_user) %}
{% set current_role = preview_role in known_roles ? preview_role : (detected_role in known_roles ? detected_role : 'GUEST') %}
{% set display_name = current_user ? (current_user.displayName|default(current_user.username|default(current_user.userIdentifier|default('Utilisateur')))) : 'Invite' %}
{% set role_label = {
  'PLAYER': 'Joueur',
  'CAPTAIN': 'Capitaine',
  'ORGANIZER': 'Organisateur',
  'ADMIN': 'Admin',
  'GUEST': 'Invite'
}[current_role] %}

<div class=\"accountSidebarBackdrop\" data-account-close=\"true\"></div>

<aside class=\"accountSidebar\" id=\"accountSidebar\" aria-hidden=\"true\">
  <div class=\"accountSidebar__head\">
    <div class=\"accountSidebar__identity\">
      <div class=\"accountSidebar__avatar\">{{ display_name|first|upper }}</div>
      <div>
        <div class=\"accountSidebar__name\">{{ display_name }}</div>
        <div class=\"accountSidebar__role role--{{ current_role|lower }}\">{{ role_label }}</div>
      </div>
    </div>

    <button class=\"iconBtn accountSidebar__close\" type=\"button\" data-account-close=\"true\" aria-label=\"Fermer le menu\">
      <svg viewBox=\"0 0 24 24\" class=\"ico\">
        <path d=\"M18.3 5.7L12 12l6.3 6.3-1.4 1.4L10.6 13.4 4.3 19.7 2.9 18.3 9.2 12 2.9 5.7 4.3 4.3l6.3 6.3 6.3-6.3 1.4 1.4z\"/>
      </svg>
    </button>
  </div>

  <div class=\"accountSidebar__content\">
    <section class=\"accountSidebar__section\">
      <h3 class=\"accountSidebar__title\">Navigation principale</h3>
      <div class=\"accountSidebar__links\">
        <a class=\"accountSidebar__link{{ route_name in ['front_root', 'front_home'] ? ' is-active' : '' }}\" href=\"{{ path('front_home') }}\">Accueil</a>
        <a class=\"accountSidebar__link{{ route_name == 'front_dashboard' ? ' is-active' : '' }}\" href=\"{{ path('front_dashboard') }}\">Dashboard</a>
        <a class=\"accountSidebar__link{{ route_name in ['front_profile', 'front_profile_edit'] ? ' is-active' : '' }}\" href=\"{{ path('front_profile') }}\">Mon profil</a>
        <a class=\"accountSidebar__link{{ route_name in ['front_messages', 'front_conversation'] ? ' is-active' : '' }}\" href=\"{{ path('front_messages') }}\">Messagerie</a>
        <a class=\"accountSidebar__link{{ route_name == 'front_notifications' ? ' is-active' : '' }}\" href=\"{{ path('front_notifications') }}\">Notifications</a>
      </div>
    </section>

    <section class=\"accountSidebar__section\">
      <h3 class=\"accountSidebar__title\">Competition</h3>
      <div class=\"accountSidebar__links\">
        <a class=\"accountSidebar__link{{ route_name in ['front_tournaments', 'front_tournament_detail'] ? ' is-active' : '' }}\" href=\"{{ path('front_tournaments') }}\">Tournois</a>
        <a class=\"accountSidebar__link{{ route_name in ['front_matches', 'front_match_detail'] ? ' is-active' : '' }}\" href=\"{{ path('front_matches') }}\">Matchs</a>
        <a class=\"accountSidebar__link{{ route_name in ['front_games', 'front_game_detail'] ? ' is-active' : '' }}\" href=\"{{ path('front_games') }}\">Jeux</a>
        <a class=\"accountSidebar__link{{ route_name in ['front_teams', 'front_teams_explore', 'front_team_detail'] ? ' is-active' : '' }}\" href=\"{{ path('front_teams') }}\">Equipes</a>
      </div>
    </section>

    <section class=\"accountSidebar__section\">
      <h3 class=\"accountSidebar__title\">Boutique</h3>
      <div class=\"accountSidebar__links\">
        <a class=\"accountSidebar__link{{ route_name in ['front_shop', 'front_product_detail'] ? ' is-active' : '' }}\" href=\"{{ path('front_shop') }}\">Catalogue</a>
        <a class=\"accountSidebar__link{{ route_name == 'front_cart' ? ' is-active' : '' }}\" href=\"{{ path('front_cart') }}\">Panier</a>
        <a class=\"accountSidebar__link{{ route_name in ['front_orders', 'front_order_detail'] ? ' is-active' : '' }}\" href=\"{{ path('front_orders') }}\">Mes commandes</a>
      </div>
    </section>

    {% if current_role in ['PLAYER', 'CAPTAIN', 'ORGANIZER', 'ADMIN'] %}
      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Joueur</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link{{ route_name in ['front_feed', 'front_feed_public'] ? ' is-active' : '' }}\" href=\"{{ path('front_feed') }}\">Fil d'actualite</a>
          <a class=\"accountSidebar__link{{ route_name in ['front_friends', 'front_players', 'front_player_profile'] ? ' is-active' : '' }}\" href=\"{{ path('front_players') }}\">Joueurs et amis</a>
          <a class=\"accountSidebar__link{{ route_name == 'front_my_teams' ? ' is-active' : '' }}\" href=\"{{ path('front_my_teams') }}\">Mes equipes</a>
          <a class=\"accountSidebar__link{{ route_name == 'front_my_requests' ? ' is-active' : '' }}\" href=\"{{ path('front_my_requests') }}\">Mes demandes</a>
        </div>
      </section>
    {% endif %}

    {% if current_role in ['CAPTAIN', 'ADMIN'] %}
      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Capitaine</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link{{ route_name in ['front_captain_team_create', 'front_captain_team_manage'] ? ' is-active' : '' }}\" href=\"{{ path('front_captain_team_manage') }}\">Equipe (creer / gerer)</a>
          <a class=\"accountSidebar__link{{ route_name in ['front_captain_members', 'front_captain_invite', 'front_captain_requests'] ? ' is-active' : '' }}\" href=\"{{ path('front_captain_members') }}\">Membres et invitations</a>
          <a class=\"accountSidebar__link{{ route_name in ['front_captain_tournaments', 'front_captain_team_tournaments'] ? ' is-active' : '' }}\" href=\"{{ path('front_captain_tournaments') }}\">Tournois equipe</a>
          <a class=\"accountSidebar__link{{ route_name in ['front_captain_products', 'front_captain_product_create', 'front_captain_product_edit', 'front_captain_orders'] ? ' is-active' : '' }}\" href=\"{{ path('front_captain_products') }}\">Boutique equipe</a>
        </div>
      </section>
    {% endif %}

    {% if current_role in ['ORGANIZER', 'ADMIN'] %}
      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Organisateur</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link{{ route_name in ['front_organizer_request_create', 'front_organizer_requests', 'front_organizer_request_detail'] ? ' is-active' : '' }}\" href=\"{{ path('front_organizer_requests') }}\">Demandes tournoi</a>
          <a class=\"accountSidebar__link{{ route_name in ['front_organizer_tournaments', 'front_organizer_tournament_detail', 'front_organizer_tournament_edit'] ? ' is-active' : '' }}\" href=\"{{ path('front_organizer_tournaments') }}\">Mes tournois</a>
          <a class=\"accountSidebar__link{{ route_name in ['front_organizer_matches', 'front_organizer_match_create', 'front_organizer_match_edit'] ? ' is-active' : '' }}\" href=\"{{ path('front_organizer_matches') }}\">Gestion matchs</a>
          <a class=\"accountSidebar__link{{ route_name == 'front_organizer_registrations' ? ' is-active' : '' }}\" href=\"{{ path('front_organizer_registrations') }}\">Inscriptions equipes</a>
        </div>
      </section>
    {% endif %}

    {% if current_role == 'ADMIN' %}
      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Administration</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link\" href=\"{{ path('admin_dashboard') }}\">Dashboard admin</a>
          <a class=\"accountSidebar__link\" href=\"{{ path('admin_users') }}\">Utilisateurs</a>
          <a class=\"accountSidebar__link\" href=\"{{ path('admin_tournaments') }}\">Tournois</a>
          <a class=\"accountSidebar__link\" href=\"{{ path('admin_orders') }}\">Commandes</a>
        </div>
      </section>
    {% endif %}

    {% if current_role == 'GUEST' %}
      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Connexion</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link{{ route_name == 'front_login' ? ' is-active' : '' }}\" href=\"{{ path('front_login') }}\">Se connecter</a>
          <a class=\"accountSidebar__link{{ route_name == 'front_register' ? ' is-active' : '' }}\" href=\"{{ path('front_register') }}\">S'inscrire</a>
          <a class=\"accountSidebar__link{{ route_name in ['front_forgot_password', 'front_reset_password'] ? ' is-active' : '' }}\" href=\"{{ path('front_forgot_password') }}\">Mot de passe oublie</a>
        </div>
      </section>
    {% endif %}

    {% if current_user %}
      <section class=\"accountSidebar__section\">
        <h3 class=\"accountSidebar__title\">Compte</h3>
        <div class=\"accountSidebar__links\">
          <a class=\"accountSidebar__link\" href=\"{{ path('app_logout') }}\">Se deconnecter</a>
        </div>
      </section>
    {% endif %}

    <section class=\"accountSidebar__section\">
      <h3 class=\"accountSidebar__title\">Support</h3>
      <div class=\"accountSidebar__links\">
        <a class=\"accountSidebar__link{{ route_name == 'front_about' ? ' is-active' : '' }}\" href=\"{{ path('front_about') }}\">A propos</a>
        <a class=\"accountSidebar__link{{ route_name == 'front_contact' ? ' is-active' : '' }}\" href=\"{{ path('front_contact') }}\">Contact</a>
        <a class=\"accountSidebar__link{{ route_name == 'front_faq' ? ' is-active' : '' }}\" href=\"{{ path('front_faq') }}\">FAQ</a>
      </div>
    </section>
  </div>
</aside>
", "front/partials/_account_sidebar.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\partials\\_account_sidebar.html.twig");
    }
}
