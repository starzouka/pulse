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

/* front/partials/_top_nav.html.twig */
class __TwigTemplate_a41d3a572e368cde4bc9d4c3b0363bcd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_top_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_top_nav.html.twig"));

        // line 1
        $context["current_route"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 1), "attributes", [], "any", false, true, false, 1), "get", ["_route"], "method", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1), "")) : (""));
        // line 2
        $context["two_factor_pending"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "hasSession", [], "method", false, false, false, 2)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", [], "any", false, false, false, 2), "get", ["_2fa_verified", false], "method", false, false, false, 2) != true));
        // line 3
        yield "
";
        // line 4
        $context["is_home"] = CoreExtension::inFilter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 4, $this->source); })()), ["front_root", "front_home", "front_about", "front_contact", "front_faq", "front_search", "front_login", "front_register", "front_forgot_password", "front_reset_password", "front_password_change", "front_dashboard", "front_feed", "front_feed_public", "front_messages", "front_conversation", "front_notifications", "front_profile", "front_profile_edit"]);
        // line 11
        $context["is_tournaments"] = ((((is_string($_v0 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 11, $this->source); })())) && is_string($_v1 = "front_tournament") && str_starts_with($_v0, $_v1)) || (is_string($_v2 =         // line 12
(isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 12, $this->source); })())) && is_string($_v3 = "front_organizer_tournament") && str_starts_with($_v2, $_v3))) || (is_string($_v4 =         // line 13
(isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 13, $this->source); })())) && is_string($_v5 = "front_organizer_request") && str_starts_with($_v4, $_v5))) || CoreExtension::inFilter(        // line 14
(isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 14, $this->source); })()), ["front_organizer_registrations", "front_captain_tournaments", "front_captain_team_tournaments", "front_captain_requests"]));
        // line 15
        $context["is_games"] = (is_string($_v6 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 15, $this->source); })())) && is_string($_v7 = "front_game") && str_starts_with($_v6, $_v7));
        // line 16
        $context["is_matches"] = ((is_string($_v8 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 16, $this->source); })())) && is_string($_v9 = "front_match") && str_starts_with($_v8, $_v9)) || (is_string($_v10 =         // line 17
(isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 17, $this->source); })())) && is_string($_v11 = "front_organizer_match") && str_starts_with($_v10, $_v11)));
        // line 18
        $context["is_shop"] = ((CoreExtension::inFilter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 18, $this->source); })()), ["front_shop", "front_cart", "front_checkout", "front_orders", "front_order_detail", "front_product_detail"]) || (is_string($_v12 =         // line 19
(isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 19, $this->source); })())) && is_string($_v13 = "front_captain_product") && str_starts_with($_v12, $_v13))) || CoreExtension::inFilter(        // line 20
(isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 20, $this->source); })()), ["front_captain_products", "front_captain_orders"]));
        // line 21
        $context["is_teams"] = (((is_string($_v14 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 21, $this->source); })())) && is_string($_v15 = "front_team") && str_starts_with($_v14, $_v15)) || (is_string($_v16 =         // line 22
(isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 22, $this->source); })())) && is_string($_v17 = "front_player") && str_starts_with($_v16, $_v17))) || CoreExtension::inFilter(        // line 23
(isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 23, $this->source); })()), ["front_players", "front_friends", "front_my_teams", "front_my_requests", "front_captain_members", "front_captain_invite", "front_captain_team_create", "front_captain_team_manage"]));
        // line 24
        yield "
<div class=\"heroTop\">
  <a class=\"brand\" href=\"";
        // line 26
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

  <nav class=\"topbar\" aria-label=\"Navigation principale\">
    <a class=\"topbar__item";
        // line 39
        yield (((($tmp = (isset($context["is_home"]) || array_key_exists("is_home", $context) ? $context["is_home"] : (function () { throw new RuntimeError('Variable "is_home" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M12 3l9 8h-3v10h-5v-6H11v6H6V11H3l9-8z\"/></svg>
      </span>
      <span class=\"topbar__label\">Accueil</span>
    </a>

    <a class=\"topbar__item";
        // line 46
        yield (((($tmp = (isset($context["is_tournaments"]) || array_key_exists("is_tournaments", $context) ? $context["is_tournaments"] : (function () { throw new RuntimeError('Variable "is_tournaments" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M6 4h12v2H6V4zm2 4h8l1 4H7l1-4zm-2 6h12v2H6v-2zm2 4h8v2H8v-2z\"/></svg>
      </span>
      <span class=\"topbar__label\">Tournois</span>
    </a>

    <a class=\"topbar__item";
        // line 53
        yield (((($tmp = (isset($context["is_games"]) || array_key_exists("is_games", $context) ? $context["is_games"] : (function () { throw new RuntimeError('Variable "is_games" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_games");
        yield "\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 6h10a4 4 0 014 4v2a4 4 0 01-4 4h-1l-2 2H10l-2-2H7a4 4 0 01-4-4v-2a4 4 0 014-4zm2 5a1 1 0 100 2 1 1 0 000-2zm6 0a1 1 0 100 2 1 1 0 000-2z\"/></svg>
      </span>
      <span class=\"topbar__label\">Jeux</span>
    </a>

    <a class=\"topbar__item";
        // line 60
        yield (((($tmp = (isset($context["is_matches"]) || array_key_exists("is_matches", $context) ? $context["is_matches"] : (function () { throw new RuntimeError('Variable "is_matches" does not exist.', 60, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_matches");
        yield "\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 3h10v2H7V3zm2 6h6v2H9V9zm-2 5h10v2H7v-2zm2 5h6v2H9v-2z\"/></svg>
      </span>
      <span class=\"topbar__label\">Matchs</span>
    </a>

    <a class=\"topbar__item";
        // line 67
        yield (((($tmp = (isset($context["is_shop"]) || array_key_exists("is_shop", $context) ? $context["is_shop"] : (function () { throw new RuntimeError('Variable "is_shop" does not exist.', 67, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
        yield "\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 18c-1.1 0-2-.9-2-2V6h2v10h12v2H7zM9 6h10v10H9V6zm2 2v6h6V8h-6z\"/></svg>
      </span>
      <span class=\"topbar__label\">Boutique</span>
    </a>

    <a class=\"topbar__item";
        // line 74
        yield (((($tmp = (isset($context["is_teams"]) || array_key_exists("is_teams", $context) ? $context["is_teams"] : (function () { throw new RuntimeError('Variable "is_teams" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams");
        yield "\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.95 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z\"/></svg>
      </span>
      <span class=\"topbar__label\">Equipe</span>
    </a>
  </nav>

  <div class=\"heroTop__right\">
    ";
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83) &&  !(isset($context["two_factor_pending"]) || array_key_exists("two_factor_pending", $context) ? $context["two_factor_pending"] : (function () { throw new RuntimeError('Variable "two_factor_pending" does not exist.', 83, $this->source); })()))) {
            // line 84
            yield "      <a class=\"btn btn--ghost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile");
            yield "\">Mon compte</a>
      <a class=\"btn btn--ghost\" href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 86
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86) && (isset($context["two_factor_pending"]) || array_key_exists("two_factor_pending", $context) ? $context["two_factor_pending"] : (function () { throw new RuntimeError('Variable "two_factor_pending" does not exist.', 86, $this->source); })()))) {
            // line 87
            yield "      <span class=\"btn btn--ghost\" role=\"status\">2FA requise</span>
      <a class=\"btn btn--ghost\" href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
    ";
        } else {
            // line 90
            yield "      <a class=\"btn btn--ghost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_register");
            yield "\">S'inscrire</a>
      <button class=\"signInBtn\" id=\"btnOpenAuth\" type=\"button\">
        <span class=\"signInBtn__icon\" aria-hidden=\"true\">
          <svg viewBox=\"0 0 24 24\" class=\"ico\">
            <path d=\"M10 17l1.4-1.4-2.6-2.6H20v-2H8.8l2.6-2.6L10 7l-7 7 7 7zm-6 4h6v-2H4V5h6V3H4a2 2 0 00-2 2v14a2 2 0 002 2z\"/>
          </svg>
        </span>
        <span class=\"signInBtn__text\">SIGN IN</span>
      </button>
    ";
        }
        // line 100
        yield "
    ";
        // line 101
        if ((($tmp =  !(isset($context["two_factor_pending"]) || array_key_exists("two_factor_pending", $context) ? $context["two_factor_pending"] : (function () { throw new RuntimeError('Variable "two_factor_pending" does not exist.', 101, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "      <button class=\"menuBtn\" type=\"button\" aria-label=\"Menu\">
        <span></span><span></span><span></span>
      </button>
    ";
        }
        // line 106
        yield "  </div>
</div>
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
        return "front/partials/_top_nav.html.twig";
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
        return array (  215 => 106,  209 => 102,  207 => 101,  204 => 100,  190 => 90,  185 => 88,  182 => 87,  180 => 86,  176 => 85,  171 => 84,  169 => 83,  155 => 74,  143 => 67,  131 => 60,  119 => 53,  107 => 46,  95 => 39,  79 => 26,  75 => 24,  73 => 23,  72 => 22,  71 => 21,  69 => 20,  68 => 19,  67 => 18,  65 => 17,  64 => 16,  62 => 15,  60 => 14,  59 => 13,  58 => 12,  57 => 11,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set current_route = app.request.attributes.get('_route')|default('') %}
{% set two_factor_pending = app.user and app.request.hasSession() and app.session.get('_2fa_verified', false) != true %}

{% set is_home = current_route in [
    'front_root', 'front_home', 'front_about', 'front_contact', 'front_faq',
    'front_search', 'front_login', 'front_register', 'front_forgot_password',
    'front_reset_password', 'front_password_change', 'front_dashboard',
    'front_feed', 'front_feed_public', 'front_messages', 'front_conversation',
    'front_notifications', 'front_profile', 'front_profile_edit'
] %}
{% set is_tournaments = current_route starts with 'front_tournament'
    or current_route starts with 'front_organizer_tournament'
    or current_route starts with 'front_organizer_request'
    or current_route in ['front_organizer_registrations', 'front_captain_tournaments', 'front_captain_team_tournaments', 'front_captain_requests'] %}
{% set is_games = current_route starts with 'front_game' %}
{% set is_matches = current_route starts with 'front_match'
    or current_route starts with 'front_organizer_match' %}
{% set is_shop = current_route in ['front_shop', 'front_cart', 'front_checkout', 'front_orders', 'front_order_detail', 'front_product_detail']
    or current_route starts with 'front_captain_product'
    or current_route in ['front_captain_products', 'front_captain_orders'] %}
{% set is_teams = current_route starts with 'front_team'
    or current_route starts with 'front_player'
    or current_route in ['front_players', 'front_friends', 'front_my_teams', 'front_my_requests', 'front_captain_members', 'front_captain_invite', 'front_captain_team_create', 'front_captain_team_manage'] %}

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

  <nav class=\"topbar\" aria-label=\"Navigation principale\">
    <a class=\"topbar__item{{ is_home ? ' is-active' : '' }}\" href=\"{{ path('front_home') }}\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M12 3l9 8h-3v10h-5v-6H11v6H6V11H3l9-8z\"/></svg>
      </span>
      <span class=\"topbar__label\">Accueil</span>
    </a>

    <a class=\"topbar__item{{ is_tournaments ? ' is-active' : '' }}\" href=\"{{ path('front_tournaments') }}\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M6 4h12v2H6V4zm2 4h8l1 4H7l1-4zm-2 6h12v2H6v-2zm2 4h8v2H8v-2z\"/></svg>
      </span>
      <span class=\"topbar__label\">Tournois</span>
    </a>

    <a class=\"topbar__item{{ is_games ? ' is-active' : '' }}\" href=\"{{ path('front_games') }}\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 6h10a4 4 0 014 4v2a4 4 0 01-4 4h-1l-2 2H10l-2-2H7a4 4 0 01-4-4v-2a4 4 0 014-4zm2 5a1 1 0 100 2 1 1 0 000-2zm6 0a1 1 0 100 2 1 1 0 000-2z\"/></svg>
      </span>
      <span class=\"topbar__label\">Jeux</span>
    </a>

    <a class=\"topbar__item{{ is_matches ? ' is-active' : '' }}\" href=\"{{ path('front_matches') }}\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 3h10v2H7V3zm2 6h6v2H9V9zm-2 5h10v2H7v-2zm2 5h6v2H9v-2z\"/></svg>
      </span>
      <span class=\"topbar__label\">Matchs</span>
    </a>

    <a class=\"topbar__item{{ is_shop ? ' is-active' : '' }}\" href=\"{{ path('front_shop') }}\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 18c-1.1 0-2-.9-2-2V6h2v10h12v2H7zM9 6h10v10H9V6zm2 2v6h6V8h-6z\"/></svg>
      </span>
      <span class=\"topbar__label\">Boutique</span>
    </a>

    <a class=\"topbar__item{{ is_teams ? ' is-active' : '' }}\" href=\"{{ path('front_teams') }}\">
      <span class=\"topbar__icon\">
        <svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.95 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z\"/></svg>
      </span>
      <span class=\"topbar__label\">Equipe</span>
    </a>
  </nav>

  <div class=\"heroTop__right\">
    {% if app.user and not two_factor_pending %}
      <a class=\"btn btn--ghost\" href=\"{{ path('front_profile') }}\">Mon compte</a>
      <a class=\"btn btn--ghost\" href=\"{{ path('app_logout') }}\">Logout</a>
    {% elseif app.user and two_factor_pending %}
      <span class=\"btn btn--ghost\" role=\"status\">2FA requise</span>
      <a class=\"btn btn--ghost\" href=\"{{ path('app_logout') }}\">Logout</a>
    {% else %}
      <a class=\"btn btn--ghost\" href=\"{{ path('front_register') }}\">S'inscrire</a>
      <button class=\"signInBtn\" id=\"btnOpenAuth\" type=\"button\">
        <span class=\"signInBtn__icon\" aria-hidden=\"true\">
          <svg viewBox=\"0 0 24 24\" class=\"ico\">
            <path d=\"M10 17l1.4-1.4-2.6-2.6H20v-2H8.8l2.6-2.6L10 7l-7 7 7 7zm-6 4h6v-2H4V5h6V3H4a2 2 0 00-2 2v14a2 2 0 002 2z\"/>
          </svg>
        </span>
        <span class=\"signInBtn__text\">SIGN IN</span>
      </button>
    {% endif %}

    {% if not two_factor_pending %}
      <button class=\"menuBtn\" type=\"button\" aria-label=\"Menu\">
        <span></span><span></span><span></span>
      </button>
    {% endif %}
  </div>
</div>
", "front/partials/_top_nav.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\partials\\_top_nav.html.twig");
    }
}
