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

/* front/pages/profile.html.twig */
class __TwigTemplate_b44076a5725c3afed497772eb35890e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/profile.html.twig"));

        // line 3
        $context["profileId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["profile_user"] ?? null), "userId", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 3, $this->source); })()), "userId", [], "any", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 3, $this->source); })()), "userId", [], "any", false, false, false, 3)) : (0));
        // line 4
        $context["viewerId"] = (((($tmp = (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 4, $this->source); })()), "userId", [], "any", false, false, false, 4)) : (0));
        // line 5
        $context["avatarPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 5, $this->source); })()), "profileImageId", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 5, $this->source); })()), "profileImageId", [], "any", false, false, false, 5), "fileUrl", [], "any", false, false, false, 5)) : (""));
        // line 6
        $context["avatarUrl"] = (((($tmp = (isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 6, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 6, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 6, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_profile_" . (isset($context["profileId"]) || array_key_exists("profileId", $context) ? $context["profileId"] : (function () { throw new RuntimeError('Variable "profileId" does not exist.', 6, $this->source); })())) . "/200/200")));
        // line 7
        $context["pf"] = ((array_key_exists("applied_filters", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 7, $this->source); })()), [])) : ([]));
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
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

        // line 10
        yield "  PULSE - ";
        yield (((($tmp = (isset($context["is_own_profile"]) || array_key_exists("is_own_profile", $context) ? $context["is_own_profile"] : (function () { throw new RuntimeError('Variable "is_own_profile" does not exist.', 10, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mon profil") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Profil de " . (((CoreExtension::getAttribute($this->env, $this->source, ($context["profile_user"] ?? null), "displayName", [], "any", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 10, $this->source); })()), "displayName", [], "any", false, false, false, 10)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 10, $this->source); })()), "displayName", [], "any", false, false, false, 10)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 10, $this->source); })()), "username", [], "any", false, false, false, 10)))), "html", null, true)));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "  ";
        yield from $this->load("front/partials/_hero_mini.html.twig", 14)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => (((($tmp =         // line 16
(isset($context["is_own_profile"]) || array_key_exists("is_own_profile", $context) ? $context["is_own_profile"] : (function () { throw new RuntimeError('Variable "is_own_profile" does not exist.', 16, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mon profil") : (("Profil de " . (((CoreExtension::getAttribute($this->env, $this->source, ($context["profile_user"] ?? null), "displayName", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 16, $this->source); })()), "displayName", [], "any", false, false, false, 16)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 16, $this->source); })()), "displayName", [], "any", false, false, false, 16)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16)))))), "hero_sub" => "Publications, details, amis et equipes.", "breadcrumb_current" => (((($tmp =         // line 18
(isset($context["is_own_profile"]) || array_key_exists("is_own_profile", $context) ? $context["is_own_profile"] : (function () { throw new RuntimeError('Variable "is_own_profile" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mon profil") : ("Profil joueur"))]));
        // line 20
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 24
        yield from $this->load("front/partials/_player_side_nav.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["active" => (((($tmp = (isset($context["is_own_profile"]) || array_key_exists("is_own_profile", $context) ? $context["is_own_profile"] : (function () { throw new RuntimeError('Variable "is_own_profile" does not exist.', 24, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("profile") : ("player_profile"))]));
        // line 25
        yield "
        <div class=\"socialStack\">
          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 28
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 29
                yield "              <div class=\"listItem\">
                <span>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                <span class=\"badge ";
                // line 31
                yield ((($context["label"] == "error")) ? ("badge--danger") : (((($context["label"] == "success")) ? ("badge--success") : ("badge--info"))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "
          <section class=\"panel profileIdentityPanel\">
            <div class=\"profileHeader\">
              <div class=\"avatarLg\" data-avatar=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarUrl"]) || array_key_exists("avatarUrl", $context) ? $context["avatarUrl"] : (function () { throw new RuntimeError('Variable "avatarUrl" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\"></div>
              <div>
                <h3 style=\"margin:0;\">";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["profile_user"] ?? null), "displayName", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 40, $this->source); })()), "displayName", [], "any", false, false, false, 40)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 40, $this->source); })()), "displayName", [], "any", false, false, false, 40), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 40, $this->source); })()), "username", [], "any", false, false, false, 40), "html", null, true)));
        yield " (@";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 40, $this->source); })()), "username", [], "any", false, false, false, 40), "html", null, true);
        yield ")</h3>
                <div class=\"muted\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 41, $this->source); })()), "role", [], "any", false, false, false, 41), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 41, $this->source); })()), "country", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " · ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 41, $this->source); })()), "country", [], "any", false, false, false, 41), "html", null, true);
        }
        yield "</div>
                <div class=\"profileHeader__actions\">
                  ";
        // line 43
        if ((($tmp = (isset($context["is_own_profile"]) || array_key_exists("is_own_profile", $context) ? $context["is_own_profile"] : (function () { throw new RuntimeError('Variable "is_own_profile" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                    <a class=\"btn btn--primary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile_edit");
            yield "\">Modifier profil</a>
                    <a class=\"btn btn--ghost\" href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_password_change");
            yield "\">Changer mot de passe</a>
                  ";
        } else {
            // line 47
            yield "                    ";
            if ((($tmp = (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 47, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "                      ";
                if (((isset($context["friend_status"]) || array_key_exists("friend_status", $context) ? $context["friend_status"] : (function () { throw new RuntimeError('Variable "friend_status" does not exist.', 48, $this->source); })()) == "friends")) {
                    // line 49
                    yield "                        <button class=\"btn btn--soft\" type=\"button\" disabled>Vous etes amis</button>
                      ";
                } elseif ((                // line 50
(isset($context["friend_status"]) || array_key_exists("friend_status", $context) ? $context["friend_status"] : (function () { throw new RuntimeError('Variable "friend_status" does not exist.', 50, $this->source); })()) == "request_sent")) {
                    // line 51
                    yield "                        <button class=\"btn btn--ghost\" type=\"button\" disabled>Demande envoyee</button>
                      ";
                } elseif ((                // line 52
(isset($context["friend_status"]) || array_key_exists("friend_status", $context) ? $context["friend_status"] : (function () { throw new RuntimeError('Variable "friend_status" does not exist.', 52, $this->source); })()) == "request_received")) {
                    // line 53
                    yield "                        <a class=\"btn btn--ghost\" href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_friends");
                    yield "\">Voir demande recue</a>
                      ";
                } else {
                    // line 55
                    yield "                        <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile_add_friend", ["id" => (isset($context["profileId"]) || array_key_exists("profileId", $context) ? $context["profileId"] : (function () { throw new RuntimeError('Variable "profileId" does not exist.', 55, $this->source); })())]), "html", null, true);
                    yield "\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("profile_add_friend_" . (isset($context["profileId"]) || array_key_exists("profileId", $context) ? $context["profileId"] : (function () { throw new RuntimeError('Variable "profileId" does not exist.', 56, $this->source); })()))), "html", null, true);
                    yield "\">
                          <button class=\"btn btn--primary\" type=\"submit\">Ajouter ami</button>
                        </form>
                      ";
                }
                // line 60
                yield "                      <a class=\"btn btn--ghost\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages", ["with" => (isset($context["profileId"]) || array_key_exists("profileId", $context) ? $context["profileId"] : (function () { throw new RuntimeError('Variable "profileId" does not exist.', 60, $this->source); })())]), "html", null, true);
                yield "\">Message</a>
                    ";
            } else {
                // line 62
                yield "                      <a class=\"btn btn--primary\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "uri", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\">Ajouter ami</a>
                      <a class=\"btn btn--ghost\" href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "uri", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\">Message</a>
                    ";
            }
            // line 65
            yield "                  ";
        }
        // line 66
        yield "                </div>
              </div>
            </div>

            <div class=\"statsRow\">
              <div class=\"statCard\">
                <div class=\"statCard__value\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 72, $this->source); })()), "posts", [], "any", false, false, false, 72), "html", null, true);
        yield "</div>
                <div class=\"statCard__label\">Publications</div>
              </div>
              <div class=\"statCard\">
                <div class=\"statCard__value\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 76, $this->source); })()), "friends", [], "any", false, false, false, 76), "html", null, true);
        yield "</div>
                <div class=\"statCard__label\">Amis</div>
              </div>
              <div class=\"statCard\">
                <div class=\"statCard__value\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 80, $this->source); })()), "teams", [], "any", false, false, false, 80), "html", null, true);
        yield "</div>
                <div class=\"statCard__label\">Equipes</div>
              </div>
            </div>
          </section>

          <section class=\"panel\">
            <div class=\"tabs profileTabs\" data-tabs=\"profile-tabs\">
              <button class=\"tab ";
        // line 88
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 88, $this->source); })()) == "posts")) ? ("is-active") : (""));
        yield "\" data-tab=\"posts\">Mes publications</button>
              <button class=\"tab ";
        // line 89
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 89, $this->source); })()) == "about")) ? ("is-active") : (""));
        yield "\" data-tab=\"about\">A propos</button>
              <button class=\"tab ";
        // line 90
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 90, $this->source); })()) == "friends")) ? ("is-active") : (""));
        yield "\" data-tab=\"friends\">Mes amis</button>
              <button class=\"tab ";
        // line 91
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 91, $this->source); })()) == "teams")) ? ("is-active") : (""));
        yield "\" data-tab=\"teams\">Mes equipes</button>
            </div>

            <div class=\"tabPanels\" data-panels=\"profile-tabs\">
              <section class=\"tabPanel ";
        // line 95
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 95, $this->source); })()) == "posts")) ? ("is-active") : (""));
        yield "\" data-panel=\"posts\">
                <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 96
        yield (((($tmp = (isset($context["is_own_profile"]) || array_key_exists("is_own_profile", $context) ? $context["is_own_profile"] : (function () { throw new RuntimeError('Variable "is_own_profile" does not exist.', 96, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile")) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile", ["id" => (isset($context["profileId"]) || array_key_exists("profileId", $context) ? $context["profileId"] : (function () { throw new RuntimeError('Variable "profileId" does not exist.', 96, $this->source); })())]), "html", null, true)));
        yield "\" style=\"margin-bottom:12px;\">
                  <input type=\"hidden\" name=\"tab\" value=\"posts\">
                  <input class=\"input\" type=\"search\" name=\"posts_q\" value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "posts_q", [], "any", true, true, false, 98)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 98, $this->source); })()), "posts_q", [], "any", false, false, false, 98), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher une publication...\" />
                  <div class=\"select\">
                    <select name=\"posts_visibility\">
                      <option value=\"\" ";
        // line 101
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "posts_visibility", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 101, $this->source); })()), "posts_visibility", [], "any", false, false, false, 101), "")) : ("")) == "")) ? ("selected") : (""));
        yield ">Toutes visibilites</option>
                      <option value=\"PUBLIC\" ";
        // line 102
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "posts_visibility", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 102, $this->source); })()), "posts_visibility", [], "any", false, false, false, 102), "")) : ("")) == "PUBLIC")) ? ("selected") : (""));
        yield ">PUBLIC</option>
                      <option value=\"FRIENDS\" ";
        // line 103
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "posts_visibility", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 103, $this->source); })()), "posts_visibility", [], "any", false, false, false, 103), "")) : ("")) == "FRIENDS")) ? ("selected") : (""));
        yield ">FRIENDS</option>
                      <option value=\"TEAM_ONLY\" ";
        // line 104
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "posts_visibility", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 104, $this->source); })()), "posts_visibility", [], "any", false, false, false, 104), "")) : ("")) == "TEAM_ONLY")) ? ("selected") : (""));
        yield ">TEAM_ONLY</option>
                    </select>
                  </div>
                  <div class=\"select\">
                    <select name=\"posts_sort\">
                      <option value=\"latest\" ";
        // line 109
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "posts_sort", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 109, $this->source); })()), "posts_sort", [], "any", false, false, false, 109), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
                      <option value=\"oldest\" ";
        // line 110
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "posts_sort", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 110, $this->source); })()), "posts_sort", [], "any", false, false, false, 110), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                      <option value=\"liked\" ";
        // line 111
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "posts_sort", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 111, $this->source); })()), "posts_sort", [], "any", false, false, false, 111), "latest")) : ("latest")) == "liked")) ? ("selected") : (""));
        yield ">Plus likes</option>
                      <option value=\"commented\" ";
        // line 112
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "posts_sort", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 112, $this->source); })()), "posts_sort", [], "any", false, false, false, 112), "latest")) : ("latest")) == "commented")) ? ("selected") : (""));
        yield ">Plus commentes</option>
                    </select>
                  </div>
                  <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                </form>

                ";
        // line 118
        if (((isset($context["is_own_profile"]) || array_key_exists("is_own_profile", $context) ? $context["is_own_profile"] : (function () { throw new RuntimeError('Variable "is_own_profile" does not exist.', 118, $this->source); })()) && (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 118, $this->source); })()))) {
            // line 119
            yield "                  ";
            yield from $this->load("front/partials/_post_composer.html.twig", 119)->unwrap()->yield(CoreExtension::merge($context, ["viewer_user" =>             // line 120
(isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 120, $this->source); })()), "action_route" => "front_profile_post_create", "csrf_token_id" => "profile_post_create", "placeholder" => "Partagez une mise a jour..."]));
            // line 125
            yield "                ";
        }
        // line 126
        yield "
                ";
        // line 127
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 127, $this->source); })()))) {
            // line 128
            yield "                  <div class=\"emptyState\">Aucune publication pour le moment.</div>
                ";
        } else {
            // line 130
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 130, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["postData"]) {
                // line 131
                yield "                    ";
                yield from $this->load("front/partials/_post_card.html.twig", 131)->unwrap()->yield(CoreExtension::merge($context, ["post_data" =>                 // line 132
$context["postData"], "viewer_user" =>                 // line 133
(isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 133, $this->source); })()), "like_route" => "front_profile_post_like", "comment_route" => "front_profile_post_comment", "report_route" => "front_profile_post_report", "like_token_prefix" => "profile_post_like_", "comment_token_prefix" => "profile_post_comment_", "report_token_prefix" => "profile_post_report_", "profile_id" =>                 // line 140
(isset($context["profileId"]) || array_key_exists("profileId", $context) ? $context["profileId"] : (function () { throw new RuntimeError('Variable "profileId" does not exist.', 140, $this->source); })())]));
                // line 142
                yield "                  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['postData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            yield "                ";
        }
        // line 144
        yield "              </section>

              <section class=\"tabPanel ";
        // line 146
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 146, $this->source); })()) == "about")) ? ("is-active") : (""));
        yield "\" data-panel=\"about\">
                <div class=\"list\">
                  <div class=\"listItem\"><span>Nom affichage</span><span class=\"listItem__meta\">";
        // line 148
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["profile_user"] ?? null), "displayName", [], "any", true, true, false, 148) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 148, $this->source); })()), "displayName", [], "any", false, false, false, 148)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 148, $this->source); })()), "displayName", [], "any", false, false, false, 148), "html", null, true)) : ("-"));
        yield "</span></div>
                  <div class=\"listItem\"><span>Username</span><span class=\"listItem__meta\">";
        // line 149
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["profile_user"] ?? null), "username", [], "any", true, true, false, 149) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 149, $this->source); })()), "username", [], "any", false, false, false, 149)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 149, $this->source); })()), "username", [], "any", false, false, false, 149), "html", null, true)) : ("-"));
        yield "</span></div>
                  <div class=\"listItem\"><span>Role</span><span class=\"listItem__meta\">";
        // line 150
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["profile_user"] ?? null), "role", [], "any", true, true, false, 150) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 150, $this->source); })()), "role", [], "any", false, false, false, 150)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 150, $this->source); })()), "role", [], "any", false, false, false, 150), "html", null, true)) : ("-"));
        yield "</span></div>
                  <div class=\"listItem\"><span>Email</span><span class=\"listItem__meta\">";
        // line 151
        yield (((($tmp = (isset($context["is_own_profile"]) || array_key_exists("is_own_profile", $context) ? $context["is_own_profile"] : (function () { throw new RuntimeError('Variable "is_own_profile" does not exist.', 151, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["profile_user"] ?? null), "email", [], "any", true, true, false, 151) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 151, $this->source); })()), "email", [], "any", false, false, false, 151)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 151, $this->source); })()), "email", [], "any", false, false, false, 151), "html", null, true)) : ("-"))) : ("Prive"));
        yield "</span></div>
                  <div class=\"listItem\"><span>Pays</span><span class=\"listItem__meta\">";
        // line 152
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["profile_user"] ?? null), "country", [], "any", true, true, false, 152) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 152, $this->source); })()), "country", [], "any", false, false, false, 152)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 152, $this->source); })()), "country", [], "any", false, false, false, 152), "html", null, true)) : ("-"));
        yield "</span></div>
                  <div class=\"listItem\"><span>Bio</span><span class=\"listItem__meta\">";
        // line 153
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["profile_user"] ?? null), "bio", [], "any", true, true, false, 153) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 153, $this->source); })()), "bio", [], "any", false, false, false, 153)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile_user"]) || array_key_exists("profile_user", $context) ? $context["profile_user"] : (function () { throw new RuntimeError('Variable "profile_user" does not exist.', 153, $this->source); })()), "bio", [], "any", false, false, false, 153), "html", null, true)) : ("Aucune bio."));
        yield "</span></div>
                </div>
              </section>

              <section class=\"tabPanel ";
        // line 157
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 157, $this->source); })()) == "friends")) ? ("is-active") : (""));
        yield "\" data-panel=\"friends\">
                <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 158
        yield (((($tmp = (isset($context["is_own_profile"]) || array_key_exists("is_own_profile", $context) ? $context["is_own_profile"] : (function () { throw new RuntimeError('Variable "is_own_profile" does not exist.', 158, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile")) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile", ["id" => (isset($context["profileId"]) || array_key_exists("profileId", $context) ? $context["profileId"] : (function () { throw new RuntimeError('Variable "profileId" does not exist.', 158, $this->source); })())]), "html", null, true)));
        yield "\" style=\"margin-bottom:12px;\">
                  <input type=\"hidden\" name=\"tab\" value=\"friends\">
                  <input class=\"input\" type=\"search\" name=\"friends_q\" value=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "friends_q", [], "any", true, true, false, 160)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 160, $this->source); })()), "friends_q", [], "any", false, false, false, 160), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un ami...\" />
                  <div class=\"select\">
                    <select name=\"friends_sort\">
                      <option value=\"recent\" ";
        // line 163
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "friends_sort", [], "any", true, true, false, 163)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 163, $this->source); })()), "friends_sort", [], "any", false, false, false, 163), "recent")) : ("recent")) == "recent")) ? ("selected") : (""));
        yield ">Plus recents</option>
                      <option value=\"oldest\" ";
        // line 164
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "friends_sort", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 164, $this->source); })()), "friends_sort", [], "any", false, false, false, 164), "recent")) : ("recent")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                      <option value=\"name\" ";
        // line 165
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "friends_sort", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 165, $this->source); })()), "friends_sort", [], "any", false, false, false, 165), "recent")) : ("recent")) == "name")) ? ("selected") : (""));
        yield ">Nom A-Z</option>
                    </select>
                  </div>
                  <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                </form>

                ";
        // line 171
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 171, $this->source); })()))) {
            // line 172
            yield "                  <div class=\"emptyState\">Aucun ami affiche.</div>
                ";
        } else {
            // line 174
            yield "                  <div class=\"socialQuickList\">
                    ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 175, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 176
                yield "                      ";
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "userId", [], "any", false, false, false, 176))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 177
                    yield "                        <a class=\"listItem\" href=\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "userId", [], "any", false, false, false, 177) == (isset($context["viewerId"]) || array_key_exists("viewerId", $context) ? $context["viewerId"] : (function () { throw new RuntimeError('Variable "viewerId" does not exist.', 177, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile")) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "userId", [], "any", false, false, false, 177)]), "html", null, true)));
                    yield "\">
                          <span>";
                    // line 178
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "displayName", [], "any", true, true, false, 178) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "displayName", [], "any", false, false, false, 178)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "displayName", [], "any", false, false, false, 178), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "username", [], "any", false, false, false, 178), "html", null, true)));
                    yield " (@";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "username", [], "any", false, false, false, 178), "html", null, true);
                    yield ")</span>
                          <span class=\"listItem__meta\">";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "role", [], "any", false, false, false, 179), "html", null, true);
                    yield "</span>
                        </a>
                      ";
                }
                // line 182
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['friend'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            yield "                  </div>
                ";
        }
        // line 185
        yield "              </section>

              <section class=\"tabPanel ";
        // line 187
        yield ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 187, $this->source); })()) == "teams")) ? ("is-active") : (""));
        yield "\" data-panel=\"teams\">
                <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 188
        yield (((($tmp = (isset($context["is_own_profile"]) || array_key_exists("is_own_profile", $context) ? $context["is_own_profile"] : (function () { throw new RuntimeError('Variable "is_own_profile" does not exist.', 188, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile")) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile", ["id" => (isset($context["profileId"]) || array_key_exists("profileId", $context) ? $context["profileId"] : (function () { throw new RuntimeError('Variable "profileId" does not exist.', 188, $this->source); })())]), "html", null, true)));
        yield "\" style=\"margin-bottom:12px;\">
                  <input type=\"hidden\" name=\"tab\" value=\"teams\">
                  <input class=\"input\" type=\"search\" name=\"teams_q\" value=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "teams_q", [], "any", true, true, false, 190)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 190, $this->source); })()), "teams_q", [], "any", false, false, false, 190), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher une equipe...\" />
                  <input class=\"input\" type=\"text\" name=\"teams_region\" value=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "teams_region", [], "any", true, true, false, 191)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 191, $this->source); })()), "teams_region", [], "any", false, false, false, 191), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Region\" />
                  <div class=\"select\">
                    <select name=\"teams_sort\">
                      <option value=\"latest\" ";
        // line 194
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "teams_sort", [], "any", true, true, false, 194)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 194, $this->source); })()), "teams_sort", [], "any", false, false, false, 194), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recents</option>
                      <option value=\"oldest\" ";
        // line 195
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "teams_sort", [], "any", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 195, $this->source); })()), "teams_sort", [], "any", false, false, false, 195), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                      <option value=\"name\" ";
        // line 196
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "teams_sort", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 196, $this->source); })()), "teams_sort", [], "any", false, false, false, 196), "latest")) : ("latest")) == "name")) ? ("selected") : (""));
        yield ">Nom A-Z</option>
                      <option value=\"region\" ";
        // line 197
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["pf"] ?? null), "teams_sort", [], "any", true, true, false, 197)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pf"]) || array_key_exists("pf", $context) ? $context["pf"] : (function () { throw new RuntimeError('Variable "pf" does not exist.', 197, $this->source); })()), "teams_sort", [], "any", false, false, false, 197), "latest")) : ("latest")) == "region")) ? ("selected") : (""));
        yield ">Region</option>
                    </select>
                  </div>
                  <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                </form>

                ";
        // line 203
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 203, $this->source); })()))) {
            // line 204
            yield "                  <div class=\"emptyState\">Aucune equipe active.</div>
                ";
        } else {
            // line 206
            yield "                  <div class=\"socialQuickList\">
                    ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 207, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 208
                yield "                      <a class=\"listItem\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
                yield "\">
                        <span>";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 209), "html", null, true);
                yield "</span>
                        <span class=\"listItem__meta\">
                          ";
                // line 211
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", true, true, false, 211) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 211)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 211), "html", null, true)) : ("Region -"));
                yield " ·
                          ";
                // line 212
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "captainUserId", [], "any", false, false, false, 212) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["team"], "captainUserId", [], "any", false, false, false, 212), "userId", [], "any", false, false, false, 212) == (isset($context["profileId"]) || array_key_exists("profileId", $context) ? $context["profileId"] : (function () { throw new RuntimeError('Variable "profileId" does not exist.', 212, $this->source); })())))) ? ("Capitaine") : ("Membre"));
                yield "
                        </span>
                      </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            yield "                  </div>
                ";
        }
        // line 218
        yield "              </section>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 224
        yield from $this->load("front/partials/_footer.html.twig", 224)->unwrap()->yield($context);
        // line 225
        yield "    </section>
  </main>

  ";
        // line 228
        yield from $this->load("front/partials/_auth_modal.html.twig", 228)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/profile.html.twig";
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
        return array (  633 => 228,  628 => 225,  626 => 224,  618 => 218,  614 => 216,  604 => 212,  600 => 211,  595 => 209,  590 => 208,  586 => 207,  583 => 206,  579 => 204,  577 => 203,  568 => 197,  564 => 196,  560 => 195,  556 => 194,  550 => 191,  546 => 190,  541 => 188,  537 => 187,  533 => 185,  529 => 183,  523 => 182,  517 => 179,  511 => 178,  506 => 177,  503 => 176,  499 => 175,  496 => 174,  492 => 172,  490 => 171,  481 => 165,  477 => 164,  473 => 163,  467 => 160,  462 => 158,  458 => 157,  451 => 153,  447 => 152,  443 => 151,  439 => 150,  435 => 149,  431 => 148,  426 => 146,  422 => 144,  419 => 143,  405 => 142,  403 => 140,  402 => 133,  401 => 132,  399 => 131,  381 => 130,  377 => 128,  375 => 127,  372 => 126,  369 => 125,  367 => 120,  365 => 119,  363 => 118,  354 => 112,  350 => 111,  346 => 110,  342 => 109,  334 => 104,  330 => 103,  326 => 102,  322 => 101,  316 => 98,  311 => 96,  307 => 95,  300 => 91,  296 => 90,  292 => 89,  288 => 88,  277 => 80,  270 => 76,  263 => 72,  255 => 66,  252 => 65,  247 => 63,  242 => 62,  236 => 60,  229 => 56,  224 => 55,  218 => 53,  216 => 52,  213 => 51,  211 => 50,  208 => 49,  205 => 48,  202 => 47,  197 => 45,  192 => 44,  190 => 43,  181 => 41,  175 => 40,  170 => 38,  165 => 35,  159 => 34,  148 => 31,  144 => 30,  141 => 29,  136 => 28,  132 => 27,  128 => 25,  126 => 24,  120 => 20,  118 => 18,  117 => 16,  115 => 14,  102 => 13,  88 => 10,  75 => 9,  64 => 1,  62 => 7,  60 => 6,  58 => 5,  56 => 4,  54 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% set profileId = profile_user.userId ?? 0 %}
{% set viewerId = viewer_user ? viewer_user.userId : 0 %}
{% set avatarPath = profile_user.profileImageId ? profile_user.profileImageId.fileUrl : '' %}
{% set avatarUrl = avatarPath ? (avatarPath starts with 'http' ? avatarPath : asset(avatarPath)) : 'https://picsum.photos/seed/pulse_profile_' ~ profileId ~ '/200/200' %}
{% set pf = applied_filters|default({}) %}

{% block title %}
  PULSE - {{ is_own_profile ? 'Mon profil' : ('Profil de ' ~ (profile_user.displayName ?? profile_user.username)) }}
{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: is_own_profile ? 'Mon profil' : ('Profil de ' ~ (profile_user.displayName ?? profile_user.username)),
    hero_sub: 'Publications, details, amis et equipes.',
    breadcrumb_current: is_own_profile ? 'Mon profil' : 'Profil joueur'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: is_own_profile ? 'profile' : 'player_profile' } %}

        <div class=\"socialStack\">
          {% for label, messages in app.flashes %}
            {% for message in messages %}
              <div class=\"listItem\">
                <span>{{ message }}</span>
                <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'success' ? 'badge--success' : 'badge--info') }}\">{{ label|upper }}</span>
              </div>
            {% endfor %}
          {% endfor %}

          <section class=\"panel profileIdentityPanel\">
            <div class=\"profileHeader\">
              <div class=\"avatarLg\" data-avatar=\"{{ avatarUrl }}\"></div>
              <div>
                <h3 style=\"margin:0;\">{{ profile_user.displayName ?? profile_user.username }} (@{{ profile_user.username }})</h3>
                <div class=\"muted\">{{ profile_user.role }}{% if profile_user.country %} · {{ profile_user.country }}{% endif %}</div>
                <div class=\"profileHeader__actions\">
                  {% if is_own_profile %}
                    <a class=\"btn btn--primary\" href=\"{{ path('front_profile_edit') }}\">Modifier profil</a>
                    <a class=\"btn btn--ghost\" href=\"{{ path('front_password_change') }}\">Changer mot de passe</a>
                  {% else %}
                    {% if viewer_user %}
                      {% if friend_status == 'friends' %}
                        <button class=\"btn btn--soft\" type=\"button\" disabled>Vous etes amis</button>
                      {% elseif friend_status == 'request_sent' %}
                        <button class=\"btn btn--ghost\" type=\"button\" disabled>Demande envoyee</button>
                      {% elseif friend_status == 'request_received' %}
                        <a class=\"btn btn--ghost\" href=\"{{ path('front_friends') }}\">Voir demande recue</a>
                      {% else %}
                        <form method=\"post\" action=\"{{ path('front_profile_add_friend', {id: profileId}) }}\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('profile_add_friend_' ~ profileId) }}\">
                          <button class=\"btn btn--primary\" type=\"submit\">Ajouter ami</button>
                        </form>
                      {% endif %}
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_messages', {'with': profileId}) }}\">Message</a>
                    {% else %}
                      <a class=\"btn btn--primary\" href=\"{{ path('front_login', {'_target_path': app.request.uri}) }}\">Ajouter ami</a>
                      <a class=\"btn btn--ghost\" href=\"{{ path('front_login', {'_target_path': app.request.uri}) }}\">Message</a>
                    {% endif %}
                  {% endif %}
                </div>
              </div>
            </div>

            <div class=\"statsRow\">
              <div class=\"statCard\">
                <div class=\"statCard__value\">{{ stats.posts }}</div>
                <div class=\"statCard__label\">Publications</div>
              </div>
              <div class=\"statCard\">
                <div class=\"statCard__value\">{{ stats.friends }}</div>
                <div class=\"statCard__label\">Amis</div>
              </div>
              <div class=\"statCard\">
                <div class=\"statCard__value\">{{ stats.teams }}</div>
                <div class=\"statCard__label\">Equipes</div>
              </div>
            </div>
          </section>

          <section class=\"panel\">
            <div class=\"tabs profileTabs\" data-tabs=\"profile-tabs\">
              <button class=\"tab {{ active_tab == 'posts' ? 'is-active' : '' }}\" data-tab=\"posts\">Mes publications</button>
              <button class=\"tab {{ active_tab == 'about' ? 'is-active' : '' }}\" data-tab=\"about\">A propos</button>
              <button class=\"tab {{ active_tab == 'friends' ? 'is-active' : '' }}\" data-tab=\"friends\">Mes amis</button>
              <button class=\"tab {{ active_tab == 'teams' ? 'is-active' : '' }}\" data-tab=\"teams\">Mes equipes</button>
            </div>

            <div class=\"tabPanels\" data-panels=\"profile-tabs\">
              <section class=\"tabPanel {{ active_tab == 'posts' ? 'is-active' : '' }}\" data-panel=\"posts\">
                <form class=\"filtersRow\" method=\"get\" action=\"{{ is_own_profile ? path('front_profile') : path('front_player_profile', {id: profileId}) }}\" style=\"margin-bottom:12px;\">
                  <input type=\"hidden\" name=\"tab\" value=\"posts\">
                  <input class=\"input\" type=\"search\" name=\"posts_q\" value=\"{{ pf.posts_q|default('') }}\" placeholder=\"Rechercher une publication...\" />
                  <div class=\"select\">
                    <select name=\"posts_visibility\">
                      <option value=\"\" {{ (pf.posts_visibility|default('')) == '' ? 'selected' : '' }}>Toutes visibilites</option>
                      <option value=\"PUBLIC\" {{ (pf.posts_visibility|default('')) == 'PUBLIC' ? 'selected' : '' }}>PUBLIC</option>
                      <option value=\"FRIENDS\" {{ (pf.posts_visibility|default('')) == 'FRIENDS' ? 'selected' : '' }}>FRIENDS</option>
                      <option value=\"TEAM_ONLY\" {{ (pf.posts_visibility|default('')) == 'TEAM_ONLY' ? 'selected' : '' }}>TEAM_ONLY</option>
                    </select>
                  </div>
                  <div class=\"select\">
                    <select name=\"posts_sort\">
                      <option value=\"latest\" {{ (pf.posts_sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recents</option>
                      <option value=\"oldest\" {{ (pf.posts_sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciens</option>
                      <option value=\"liked\" {{ (pf.posts_sort|default('latest')) == 'liked' ? 'selected' : '' }}>Plus likes</option>
                      <option value=\"commented\" {{ (pf.posts_sort|default('latest')) == 'commented' ? 'selected' : '' }}>Plus commentes</option>
                    </select>
                  </div>
                  <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                </form>

                {% if is_own_profile and viewer_user %}
                  {% include 'front/partials/_post_composer.html.twig' with {
                    viewer_user: viewer_user,
                    action_route: 'front_profile_post_create',
                    csrf_token_id: 'profile_post_create',
                    placeholder: 'Partagez une mise a jour...'
                  } %}
                {% endif %}

                {% if posts is empty %}
                  <div class=\"emptyState\">Aucune publication pour le moment.</div>
                {% else %}
                  {% for postData in posts %}
                    {% include 'front/partials/_post_card.html.twig' with {
                      post_data: postData,
                      viewer_user: viewer_user,
                      like_route: 'front_profile_post_like',
                      comment_route: 'front_profile_post_comment',
                      report_route: 'front_profile_post_report',
                      like_token_prefix: 'profile_post_like_',
                      comment_token_prefix: 'profile_post_comment_',
                      report_token_prefix: 'profile_post_report_',
                      profile_id: profileId
                    } %}
                  {% endfor %}
                {% endif %}
              </section>

              <section class=\"tabPanel {{ active_tab == 'about' ? 'is-active' : '' }}\" data-panel=\"about\">
                <div class=\"list\">
                  <div class=\"listItem\"><span>Nom affichage</span><span class=\"listItem__meta\">{{ profile_user.displayName ?? '-' }}</span></div>
                  <div class=\"listItem\"><span>Username</span><span class=\"listItem__meta\">{{ profile_user.username ?? '-' }}</span></div>
                  <div class=\"listItem\"><span>Role</span><span class=\"listItem__meta\">{{ profile_user.role ?? '-' }}</span></div>
                  <div class=\"listItem\"><span>Email</span><span class=\"listItem__meta\">{{ is_own_profile ? (profile_user.email ?? '-') : 'Prive' }}</span></div>
                  <div class=\"listItem\"><span>Pays</span><span class=\"listItem__meta\">{{ profile_user.country ?? '-' }}</span></div>
                  <div class=\"listItem\"><span>Bio</span><span class=\"listItem__meta\">{{ profile_user.bio ?? 'Aucune bio.' }}</span></div>
                </div>
              </section>

              <section class=\"tabPanel {{ active_tab == 'friends' ? 'is-active' : '' }}\" data-panel=\"friends\">
                <form class=\"filtersRow\" method=\"get\" action=\"{{ is_own_profile ? path('front_profile') : path('front_player_profile', {id: profileId}) }}\" style=\"margin-bottom:12px;\">
                  <input type=\"hidden\" name=\"tab\" value=\"friends\">
                  <input class=\"input\" type=\"search\" name=\"friends_q\" value=\"{{ pf.friends_q|default('') }}\" placeholder=\"Rechercher un ami...\" />
                  <div class=\"select\">
                    <select name=\"friends_sort\">
                      <option value=\"recent\" {{ (pf.friends_sort|default('recent')) == 'recent' ? 'selected' : '' }}>Plus recents</option>
                      <option value=\"oldest\" {{ (pf.friends_sort|default('recent')) == 'oldest' ? 'selected' : '' }}>Plus anciens</option>
                      <option value=\"name\" {{ (pf.friends_sort|default('recent')) == 'name' ? 'selected' : '' }}>Nom A-Z</option>
                    </select>
                  </div>
                  <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                </form>

                {% if friends is empty %}
                  <div class=\"emptyState\">Aucun ami affiche.</div>
                {% else %}
                  <div class=\"socialQuickList\">
                    {% for friend in friends %}
                      {% if friend.userId is not null %}
                        <a class=\"listItem\" href=\"{{ friend.userId == viewerId ? path('front_profile') : path('front_player_profile', {id: friend.userId}) }}\">
                          <span>{{ friend.displayName ?? friend.username }} (@{{ friend.username }})</span>
                          <span class=\"listItem__meta\">{{ friend.role }}</span>
                        </a>
                      {% endif %}
                    {% endfor %}
                  </div>
                {% endif %}
              </section>

              <section class=\"tabPanel {{ active_tab == 'teams' ? 'is-active' : '' }}\" data-panel=\"teams\">
                <form class=\"filtersRow\" method=\"get\" action=\"{{ is_own_profile ? path('front_profile') : path('front_player_profile', {id: profileId}) }}\" style=\"margin-bottom:12px;\">
                  <input type=\"hidden\" name=\"tab\" value=\"teams\">
                  <input class=\"input\" type=\"search\" name=\"teams_q\" value=\"{{ pf.teams_q|default('') }}\" placeholder=\"Rechercher une equipe...\" />
                  <input class=\"input\" type=\"text\" name=\"teams_region\" value=\"{{ pf.teams_region|default('') }}\" placeholder=\"Region\" />
                  <div class=\"select\">
                    <select name=\"teams_sort\">
                      <option value=\"latest\" {{ (pf.teams_sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recents</option>
                      <option value=\"oldest\" {{ (pf.teams_sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciens</option>
                      <option value=\"name\" {{ (pf.teams_sort|default('latest')) == 'name' ? 'selected' : '' }}>Nom A-Z</option>
                      <option value=\"region\" {{ (pf.teams_sort|default('latest')) == 'region' ? 'selected' : '' }}>Region</option>
                    </select>
                  </div>
                  <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                </form>

                {% if teams is empty %}
                  <div class=\"emptyState\">Aucune equipe active.</div>
                {% else %}
                  <div class=\"socialQuickList\">
                    {% for team in teams %}
                      <a class=\"listItem\" href=\"{{ path('front_team_detail') }}\">
                        <span>{{ team.name }}</span>
                        <span class=\"listItem__meta\">
                          {{ team.region ?? 'Region -' }} ·
                          {{ team.captainUserId and team.captainUserId.userId == profileId ? 'Capitaine' : 'Membre' }}
                        </span>
                      </a>
                    {% endfor %}
                  </div>
                {% endif %}
              </section>
            </div>
          </section>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/profile.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\profile.html.twig");
    }
}
