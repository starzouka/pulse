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

/* front/pages/players.html.twig */
class __TwigTemplate_fc8c512a9ea2cc835eb53e830f8194e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/players.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/players.html.twig"));

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

        yield "PULSE - Recherche joueurs";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Recherche joueurs", "hero_sub" => "Trouver des profils et lancer une interaction.", "breadcrumb_current" => "Recherche joueurs"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "players"]));
        // line 17
        yield "
        <div class=\"socialShell\">
          <div class=\"socialStack\">
            <form class=\"panel gadget\" method=\"get\" action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players");
        yield "\" data-auto-submit=\"1\">
              <div class=\"filtersRow\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "q", [], "any", false, false, false, 22), "html", null, true);
        yield "\" placeholder=\"Rechercher par pseudo ou display name...\" />
                <div class=\"select\">
                  <select name=\"role\">
                    <option value=\"\" ";
        // line 25
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), "role", [], "any", false, false, false, 25) == "")) ? ("selected") : (""));
        yield ">Tous les roles</option>
                    <option value=\"PLAYER\" ";
        // line 26
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), "role", [], "any", false, false, false, 26) == "PLAYER")) ? ("selected") : (""));
        yield ">PLAYER</option>
                    <option value=\"CAPTAIN\" ";
        // line 27
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })()), "role", [], "any", false, false, false, 27) == "CAPTAIN")) ? ("selected") : (""));
        yield ">CAPTAIN</option>
                    <option value=\"ORGANIZER\" ";
        // line 28
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 28, $this->source); })()), "role", [], "any", false, false, false, 28) == "ORGANIZER")) ? ("selected") : (""));
        yield ">ORGANIZER</option>
                    <option value=\"ADMIN\" ";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "role", [], "any", false, false, false, 29) == "ADMIN")) ? ("selected") : (""));
        yield ">ADMIN</option>
                  </select>
                </div>
                <input class=\"input\" type=\"text\" name=\"country\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 32, $this->source); })()), "country", [], "any", false, false, false, 32), "html", null, true);
        yield "\" placeholder=\"Pays (ex: TN)\" maxlength=\"80\" />
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"updated_at\" ";
        // line 35
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 35, $this->source); })()), "sort", [], "any", false, false, false, 35) == "updated_at")) ? ("selected") : (""));
        yield ">Derniere activite</option>
                    <option value=\"created_at\" ";
        // line 36
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 36, $this->source); })()), "sort", [], "any", false, false, false, 36) == "created_at")) ? ("selected") : (""));
        yield ">Nouveaux comptes</option>
                    <option value=\"display_name\" ";
        // line 37
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 37, $this->source); })()), "sort", [], "any", false, false, false, 37) == "display_name")) ? ("selected") : (""));
        yield ">Nom affichage</option>
                    <option value=\"username\" ";
        // line 38
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 38, $this->source); })()), "sort", [], "any", false, false, false, 38) == "username")) ? ("selected") : (""));
        yield ">Username</option>
                    <option value=\"country\" ";
        // line 39
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 39, $this->source); })()), "sort", [], "any", false, false, false, 39) == "country")) ? ("selected") : (""));
        yield ">Pays</option>
                    <option value=\"role\" ";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 40, $this->source); })()), "sort", [], "any", false, false, false, 40) == "role")) ? ("selected") : (""));
        yield ">Role</option>
                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"dir\">
                    <option value=\"desc\" ";
        // line 45
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 45, $this->source); })()), "dir", [], "any", false, false, false, 45) == "desc")) ? ("selected") : (""));
        yield ">DESC</option>
                    <option value=\"asc\" ";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })()), "dir", [], "any", false, false, false, 46) == "asc")) ? ("selected") : (""));
        yield ">ASC</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Rechercher</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players");
        yield "\">Reset</a>
              </div>
            </form>

            <section class=\"panel gadget\">
              <div class=\"panel__head\">
                <h3 class=\"panel__title\">RESULTATS</h3>
                <span class=\"panel__desc\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "total_items", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 57, $this->source); })()), "total_items", [], "any", false, false, false, 57), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["player_cards"]) || array_key_exists("player_cards", $context) ? $context["player_cards"] : (function () { throw new RuntimeError('Variable "player_cards" does not exist.', 57, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["player_cards"]) || array_key_exists("player_cards", $context) ? $context["player_cards"] : (function () { throw new RuntimeError('Variable "player_cards" does not exist.', 57, $this->source); })())))), "html", null, true);
        yield " profil(s)</span>
              </div>

              ";
        // line 60
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["player_cards"]) || array_key_exists("player_cards", $context) ? $context["player_cards"] : (function () { throw new RuntimeError('Variable "player_cards" does not exist.', 60, $this->source); })()))) {
            // line 61
            yield "                <div class=\"emptyState\">Aucun joueur trouve avec ces filtres.</div>
              ";
        } else {
            // line 63
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["player_cards"]) || array_key_exists("player_cards", $context) ? $context["player_cards"] : (function () { throw new RuntimeError('Variable "player_cards" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 64
                yield "                  ";
                $context["user"] = CoreExtension::getAttribute($this->env, $this->source, $context["card"], "user", [], "any", false, false, false, 64);
                // line 65
                yield "                  ";
                $context["userId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", true, true, false, 65) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "userId", [], "any", false, false, false, 65)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "userId", [], "any", false, false, false, 65)) : (0));
                // line 66
                yield "                  ";
                $context["avatarPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "profileImageId", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "profileImageId", [], "any", false, false, false, 66), "fileUrl", [], "any", false, false, false, 66)) : (""));
                // line 67
                yield "                  ";
                $context["avatarUrl"] = (((($tmp = (isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 67, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 67, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 67, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 67, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_player_" . (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 67, $this->source); })())) . "/200/200")));
                // line 68
                yield "                  <article class=\"panel profilePost\">
                    <div class=\"postCard__head\">
                      <div class=\"postCard__author\">
                        <div class=\"avatarMd\" data-avatar=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarUrl"]) || array_key_exists("avatarUrl", $context) ? $context["avatarUrl"] : (function () { throw new RuntimeError('Variable "avatarUrl" does not exist.', 71, $this->source); })()), "html", null, true);
                yield "\"></div>
                        <div>
                          <div class=\"name\">";
                // line 73
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "displayName", [], "any", true, true, false, 73) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "displayName", [], "any", false, false, false, 73)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "displayName", [], "any", false, false, false, 73), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "username", [], "any", false, false, false, 73), "html", null, true)));
                yield "</div>
                          <div class=\"sub\">";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "role", [], "any", false, false, false, 74), "html", null, true);
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "country", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " · ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "country", [], "any", false, false, false, 74), "html", null, true);
                }
                yield " · @";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "username", [], "any", false, false, false, 74), "html", null, true);
                yield "</div>
                        </div>
                      </div>
                      <span class=\"badge\">";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["card"], "friend_status", [], "any", false, false, false, 77)), "html", null, true);
                yield "</span>
                    </div>

                    <div class=\"postCard__body\">";
                // line 80
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "bio", [], "any", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "bio", [], "any", false, false, false, 80)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "bio", [], "any", false, false, false, 80), "html", null, true)) : ("Profil joueur sur PULSE."));
                yield "</div>

                    <div class=\"postCard__actions\">
                      <a class=\"btn btn--ghost\" href=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile", ["id" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 83, $this->source); })())]), "html", null, true);
                yield "\">Voir profil</a>
                      ";
                // line 84
                if ((($tmp = (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 85
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "friend_status", [], "any", false, false, false, 85) == "friends")) {
                        // line 86
                        yield "                          <button class=\"btn btn--soft\" type=\"button\" disabled>Vous etes amis</button>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 87
$context["card"], "friend_status", [], "any", false, false, false, 87) == "request_sent")) {
                        // line 88
                        yield "                          <button class=\"btn btn--ghost\" type=\"button\" disabled>Demande envoyee</button>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 89
$context["card"], "friend_status", [], "any", false, false, false, 89) == "request_received")) {
                        // line 90
                        yield "                          <a class=\"btn btn--ghost\" href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_friends");
                        yield "\">Voir demande</a>
                        ";
                    } else {
                        // line 92
                        yield "                          <form method=\"post\" action=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile_add_friend", ["id" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 92, $this->source); })())]), "html", null, true);
                        yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 93
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("profile_add_friend_" . (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 93, $this->source); })()))), "html", null, true);
                        yield "\">
                            <button class=\"btn btn--primary\" type=\"submit\">Ajouter ami</button>
                          </form>
                        ";
                    }
                    // line 97
                    yield "                        <a class=\"btn btn--ghost\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages", ["with" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 97, $this->source); })())]), "html", null, true);
                    yield "\">Message</a>
                      ";
                } else {
                    // line 99
                    yield "                        <a class=\"btn btn--primary\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "request", [], "any", false, false, false, 99), "uri", [], "any", false, false, false, 99)]), "html", null, true);
                    yield "\">Connexion requise</a>
                      ";
                }
                // line 101
                yield "                    </div>
                  </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['card'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "              ";
        }
        // line 105
        yield "            </section>

            ";
        // line 107
        yield from $this->load("front/partials/_pagination.html.twig", 107)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 108
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 108, $this->source); })()), "route_name" => "front_players"]));
        // line 111
        yield "          </div>

          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">SUGGESTIONS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players", ["role" => "CAPTAIN"]);
        yield "\"><span>Capitaines actifs</span><span class=\"listItem__meta\">Filtrer</span></a>
                <a class=\"listItem\" href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players", ["country" => "TN"]);
        yield "\"><span>Joueurs TN</span><span class=\"listItem__meta\">Local</span></a>
                <a class=\"listItem\" href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams_explore");
        yield "\"><span>Equipes en recrutement</span><span class=\"listItem__meta\">Explorer</span></a>
              </div>
            </section>
          </aside>
        </div>
      </div>

      ";
        // line 126
        yield from $this->load("front/partials/_footer.html.twig", 126)->unwrap()->yield($context);
        // line 127
        yield "    </section>
  </main>

  ";
        // line 130
        yield from $this->load("front/partials/_auth_modal.html.twig", 130)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/players.html.twig";
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
        return array (  371 => 130,  366 => 127,  364 => 126,  354 => 119,  350 => 118,  346 => 117,  338 => 111,  336 => 108,  335 => 107,  331 => 105,  328 => 104,  320 => 101,  314 => 99,  308 => 97,  301 => 93,  296 => 92,  290 => 90,  288 => 89,  285 => 88,  283 => 87,  280 => 86,  277 => 85,  275 => 84,  271 => 83,  265 => 80,  259 => 77,  247 => 74,  243 => 73,  238 => 71,  233 => 68,  230 => 67,  227 => 66,  224 => 65,  221 => 64,  216 => 63,  212 => 61,  210 => 60,  204 => 57,  194 => 50,  187 => 46,  183 => 45,  175 => 40,  171 => 39,  167 => 38,  163 => 37,  159 => 36,  155 => 35,  149 => 32,  143 => 29,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  121 => 22,  116 => 20,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Recherche joueurs{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Recherche joueurs',
    hero_sub: 'Trouver des profils et lancer une interaction.',
    breadcrumb_current: 'Recherche joueurs'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'players' } %}

        <div class=\"socialShell\">
          <div class=\"socialStack\">
            <form class=\"panel gadget\" method=\"get\" action=\"{{ path('front_players') }}\" data-auto-submit=\"1\">
              <div class=\"filtersRow\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"Rechercher par pseudo ou display name...\" />
                <div class=\"select\">
                  <select name=\"role\">
                    <option value=\"\" {{ filters.role == '' ? 'selected' : '' }}>Tous les roles</option>
                    <option value=\"PLAYER\" {{ filters.role == 'PLAYER' ? 'selected' : '' }}>PLAYER</option>
                    <option value=\"CAPTAIN\" {{ filters.role == 'CAPTAIN' ? 'selected' : '' }}>CAPTAIN</option>
                    <option value=\"ORGANIZER\" {{ filters.role == 'ORGANIZER' ? 'selected' : '' }}>ORGANIZER</option>
                    <option value=\"ADMIN\" {{ filters.role == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                  </select>
                </div>
                <input class=\"input\" type=\"text\" name=\"country\" value=\"{{ filters.country }}\" placeholder=\"Pays (ex: TN)\" maxlength=\"80\" />
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"updated_at\" {{ filters.sort == 'updated_at' ? 'selected' : '' }}>Derniere activite</option>
                    <option value=\"created_at\" {{ filters.sort == 'created_at' ? 'selected' : '' }}>Nouveaux comptes</option>
                    <option value=\"display_name\" {{ filters.sort == 'display_name' ? 'selected' : '' }}>Nom affichage</option>
                    <option value=\"username\" {{ filters.sort == 'username' ? 'selected' : '' }}>Username</option>
                    <option value=\"country\" {{ filters.sort == 'country' ? 'selected' : '' }}>Pays</option>
                    <option value=\"role\" {{ filters.sort == 'role' ? 'selected' : '' }}>Role</option>
                  </select>
                </div>
                <div class=\"select\">
                  <select name=\"dir\">
                    <option value=\"desc\" {{ filters.dir == 'desc' ? 'selected' : '' }}>DESC</option>
                    <option value=\"asc\" {{ filters.dir == 'asc' ? 'selected' : '' }}>ASC</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Rechercher</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_players') }}\">Reset</a>
              </div>
            </form>

            <section class=\"panel gadget\">
              <div class=\"panel__head\">
                <h3 class=\"panel__title\">RESULTATS</h3>
                <span class=\"panel__desc\">{{ pagination.total_items|default(player_cards|length) }} profil(s)</span>
              </div>

              {% if player_cards is empty %}
                <div class=\"emptyState\">Aucun joueur trouve avec ces filtres.</div>
              {% else %}
                {% for card in player_cards %}
                  {% set user = card.user %}
                  {% set userId = user.userId ?? 0 %}
                  {% set avatarPath = user.profileImageId ? user.profileImageId.fileUrl : '' %}
                  {% set avatarUrl = avatarPath ? (avatarPath starts with 'http' ? avatarPath : asset(avatarPath)) : 'https://picsum.photos/seed/pulse_player_' ~ userId ~ '/200/200' %}
                  <article class=\"panel profilePost\">
                    <div class=\"postCard__head\">
                      <div class=\"postCard__author\">
                        <div class=\"avatarMd\" data-avatar=\"{{ avatarUrl }}\"></div>
                        <div>
                          <div class=\"name\">{{ user.displayName ?? user.username }}</div>
                          <div class=\"sub\">{{ user.role }}{% if user.country %} · {{ user.country }}{% endif %} · @{{ user.username }}</div>
                        </div>
                      </div>
                      <span class=\"badge\">{{ card.friend_status|upper }}</span>
                    </div>

                    <div class=\"postCard__body\">{{ user.bio ?? 'Profil joueur sur PULSE.' }}</div>

                    <div class=\"postCard__actions\">
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_player_profile', {id: userId}) }}\">Voir profil</a>
                      {% if viewer_user %}
                        {% if card.friend_status == 'friends' %}
                          <button class=\"btn btn--soft\" type=\"button\" disabled>Vous etes amis</button>
                        {% elseif card.friend_status == 'request_sent' %}
                          <button class=\"btn btn--ghost\" type=\"button\" disabled>Demande envoyee</button>
                        {% elseif card.friend_status == 'request_received' %}
                          <a class=\"btn btn--ghost\" href=\"{{ path('front_friends') }}\">Voir demande</a>
                        {% else %}
                          <form method=\"post\" action=\"{{ path('front_profile_add_friend', {id: userId}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('profile_add_friend_' ~ userId) }}\">
                            <button class=\"btn btn--primary\" type=\"submit\">Ajouter ami</button>
                          </form>
                        {% endif %}
                        <a class=\"btn btn--ghost\" href=\"{{ path('front_messages', {'with': userId}) }}\">Message</a>
                      {% else %}
                        <a class=\"btn btn--primary\" href=\"{{ path('front_login', {'_target_path': app.request.uri}) }}\">Connexion requise</a>
                      {% endif %}
                    </div>
                  </article>
                {% endfor %}
              {% endif %}
            </section>

            {% include 'front/partials/_pagination.html.twig' with {
              pagination: pagination,
              route_name: 'front_players'
            } %}
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">SUGGESTIONS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"{{ path('front_players', {role: 'CAPTAIN'}) }}\"><span>Capitaines actifs</span><span class=\"listItem__meta\">Filtrer</span></a>
                <a class=\"listItem\" href=\"{{ path('front_players', {country: 'TN'}) }}\"><span>Joueurs TN</span><span class=\"listItem__meta\">Local</span></a>
                <a class=\"listItem\" href=\"{{ path('front_teams_explore') }}\"><span>Equipes en recrutement</span><span class=\"listItem__meta\">Explorer</span></a>
              </div>
            </section>
          </aside>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/players.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\players.html.twig");
    }
}
