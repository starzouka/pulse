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

/* front/pages/profile-edit.html.twig */
class __TwigTemplate_660c3353db0642bed209d63e31b1c9a3 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/profile-edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/profile-edit.html.twig"));

        // line 3
        $context["avatarPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 3, $this->source); })()), "profileImageId", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 3, $this->source); })()), "profileImageId", [], "any", false, false, false, 3), "fileUrl", [], "any", false, false, false, 3)) : (""));
        // line 4
        $context["avatarUrl"] = (((($tmp = (isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 4, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 4, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 4, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_profile_edit_" . (((CoreExtension::getAttribute($this->env, $this->source, ($context["viewer_user"] ?? null), "userId", [], "any", true, true, false, 4) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 4, $this->source); })()), "userId", [], "any", false, false, false, 4)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 4, $this->source); })()), "userId", [], "any", false, false, false, 4)) : (0))) . "/200/200")));
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
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

        yield "PULSE - Modifier profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "  ";
        yield from $this->load("front/partials/_hero_mini.html.twig", 9)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Modifier profil", "hero_sub" => "Mettez a jour vos informations personnelles.", "breadcrumb_current" => "Modifier profil"]));
        // line 15
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 19
        yield from $this->load("front/partials/_player_side_nav.html.twig", 19)->unwrap()->yield(CoreExtension::merge($context, ["active" => "profile_edit"]));
        // line 20
        yield "
        <div class=\"socialShell\">
          <div class=\"socialStack\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 24
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 25
                yield "                <div class=\"listItem\">
                  <span>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                  <span class=\"badge ";
                // line 27
                yield ((($context["label"] == "error")) ? ("badge--danger") : ("badge--success"));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
            <div class=\"panel gadget gadget--profile\">
              <div class=\"profileHeader\">
                <div class=\"avatarLg\" data-avatar=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarUrl"]) || array_key_exists("avatarUrl", $context) ? $context["avatarUrl"] : (function () { throw new RuntimeError('Variable "avatarUrl" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "\"></div>
                <div>
                  <h3 style=\"margin:0;\">";
        // line 36
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["viewer_user"] ?? null), "displayName", [], "any", true, true, false, 36) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 36, $this->source); })()), "displayName", [], "any", false, false, false, 36)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 36, $this->source); })()), "displayName", [], "any", false, false, false, 36), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), "html", null, true)));
        yield "</h3>
                  <div class=\"muted\">@";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 37, $this->source); })()), "username", [], "any", false, false, false, 37), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 37, $this->source); })()), "country", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " · ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 37, $this->source); })()), "country", [], "any", false, false, false, 37), "html", null, true);
        }
        yield "</div>
                </div>
              </div>
            </div>

            ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["class" => "panel gadget", "novalidate" => "novalidate"], "enctype" => "multipart/form-data"]);
        yield "
              <h3 class=\"panel__title\">INFORMATIONS PROFIL</h3>
              <div class=\"formGrid\">
                <label class=\"field\">
                  <span class=\"field__label\">Photo profil</span>
                  ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 47, $this->source); })()), "profilePhoto", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                  ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 48, $this->source); })()), "profilePhoto", [], "any", false, false, false, 48), 'errors');
        yield "
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Display name</span>
                  ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 53, $this->source); })()), "displayName", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                  ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 54, $this->source); })()), "displayName", [], "any", false, false, false, 54), 'errors');
        yield "
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Bio</span>
                  ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 59, $this->source); })()), "bio", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "textarea"]]);
        yield "
                  ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 60, $this->source); })()), "bio", [], "any", false, false, false, 60), 'errors');
        yield "
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Pays</span>
                  ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 65, $this->source); })()), "country", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                  ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 66, $this->source); })()), "country", [], "any", false, false, false, 66), 'errors');
        yield "
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Telephone</span>
                  ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 71, $this->source); })()), "phone", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                  ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 72, $this->source); })()), "phone", [], "any", false, false, false, 72), 'errors');
        yield "
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Date de naissance</span>
                  ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 77, $this->source); })()), "birthDate", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                  ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 78, $this->source); })()), "birthDate", [], "any", false, false, false, 78), 'errors');
        yield "
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Genre</span>
                  ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 83, $this->source); })()), "gender", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "input"]]);
        yield "
                  ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 84, $this->source); })()), "gender", [], "any", false, false, false, 84), 'errors');
        yield "
                </label>

                <label class=\"field\" style=\"display:flex; justify-content:space-between; align-items:center;\">
                  <span class=\"field__label\">Compte actif</span>
                  ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 89, $this->source); })()), "isActive", [], "any", false, false, false, 89), 'widget');
        yield "
                  ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 90, $this->source); })()), "isActive", [], "any", false, false, false, 90), 'errors');
        yield "
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Sauvegarder</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile");
        yield "\">Annuler</a>
              </div>
            ";
        // line 98
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileEditForm"]) || array_key_exists("profileEditForm", $context) ? $context["profileEditForm"] : (function () { throw new RuntimeError('Variable "profileEditForm" does not exist.', 98, $this->source); })()), 'form_end');
        yield "

            <section class=\"panel gadget\" id=\"twoFactorPanel\"
              data-csrf-token=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("profile_2fa_api"), "html", null, true);
        yield "\"
              data-url-state=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile_2fa_state");
        yield "\"
              data-url-setup=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile_2fa_setup");
        yield "\"
              data-url-enable=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile_2fa_enable");
        yield "\"
              data-url-disable=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile_2fa_disable");
        yield "\"
            >
              <h3 class=\"panel__title\">DOUBLE AUTHENTIFICATION (2FA)</h3>
              <div id=\"twoFactorStatus\" class=\"listItem\" style=\"margin-bottom:8px;\">
                <span>Etat actuel</span>
                <span class=\"badge badge--warning\">Chargement...</span>
              </div>

              <div id=\"twoFactorMessage\" class=\"listItem\" style=\"display:none; margin-bottom:8px;\">
                <span id=\"twoFactorMessageText\"></span>
                <span id=\"twoFactorMessageBadge\" class=\"badge\">INFO</span>
              </div>

              <div id=\"twoFactorSetupBox\" style=\"display:none; margin-bottom:10px;\">
                <div class=\"listMeta\" style=\"margin-bottom:8px;\">
                  Scannez le QR dans Google Authenticator, Microsoft Authenticator ou Authy, puis entrez le code genere.
                </div>
                <div style=\"display:flex; gap:12px; flex-wrap:wrap; align-items:flex-start;\">
                  <div>
                    <img id=\"twoFactorQr\" src=\"\" alt=\"QR code 2FA\" style=\"width:180px;height:180px;border-radius:12px;border:1px solid rgba(255,255,255,.12);background:rgba(255,255,255,.03);\" />
                  </div>
                  <div style=\"max-width:420px;\">
                    <div class=\"listMeta\">Cle manuelle (backup):</div>
                    <code id=\"twoFactorSecret\" style=\"display:inline-block;margin-top:6px;padding:6px 10px;border-radius:10px;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.10);letter-spacing:.08em;\"></code>
                  </div>
                </div>
              </div>

              <div class=\"formGrid\" style=\"margin-bottom:10px;\">
                <label class=\"field\">
                  <span class=\"field__label\">Code TOTP (6 chiffres)</span>
                  <input id=\"twoFactorCode\" class=\"input\" type=\"text\" inputmode=\"numeric\" pattern=\"[0-9]{6}\" maxlength=\"6\" placeholder=\"123456\" />
                </label>
              </div>

              <div class=\"formActions\">
                <button id=\"twoFactorSetupBtn\" type=\"button\" class=\"btn btn--ghost\">Configurer 2FA</button>
                <button id=\"twoFactorEnableBtn\" type=\"button\" class=\"btn btn--primary\" disabled>Activer</button>
                <button id=\"twoFactorDisableBtn\" type=\"button\" class=\"btn btn--ghost\" style=\"display:none;\">Desactiver</button>
              </div>
            </section>
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">CONSEILS</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Ajoutez une bio claire</span><span class=\"listItem__meta\">+ visibilite</span></div>
                <div class=\"listItem\"><span>Photo recente</span><span class=\"listItem__meta\">+ confiance</span></div>
                <div class=\"listItem\"><span>Pays renseigne</span><span class=\"listItem__meta\">+ matching</span></div>
              </div>
            </section>
          </aside>
        </div>
      </div>

      ";
        // line 161
        yield from $this->load("front/partials/_footer.html.twig", 161)->unwrap()->yield($context);
        // line 162
        yield "    </section>
  </main>

  ";
        // line 165
        yield from $this->load("front/partials/_auth_modal.html.twig", 165)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 169
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script>
    (() => {
      const panel = document.getElementById('twoFactorPanel');
      if (!panel) {
        return;
      }

      const csrfToken = panel.dataset.csrfToken || '';
      const urls = {
        state: panel.dataset.urlState || '',
        setup: panel.dataset.urlSetup || '',
        enable: panel.dataset.urlEnable || '',
        disable: panel.dataset.urlDisable || '',
      };

      const statusWrap = document.getElementById('twoFactorStatus');
      const messageWrap = document.getElementById('twoFactorMessage');
      const messageText = document.getElementById('twoFactorMessageText');
      const messageBadge = document.getElementById('twoFactorMessageBadge');
      const setupBox = document.getElementById('twoFactorSetupBox');
      const qrImg = document.getElementById('twoFactorQr');
      const secretCode = document.getElementById('twoFactorSecret');
      const codeInput = document.getElementById('twoFactorCode');
      const setupBtn = document.getElementById('twoFactorSetupBtn');
      const enableBtn = document.getElementById('twoFactorEnableBtn');
      const disableBtn = document.getElementById('twoFactorDisableBtn');

      let state = {
        enabled: false,
        pendingSetup: false,
      };

      const setMessage = (message, type = 'info') => {
        messageWrap.style.display = 'flex';
        messageText.textContent = message;
        messageBadge.textContent = type.toUpperCase();
        messageBadge.className = 'badge ' + (type === 'error' ? 'badge--danger' : (type === 'success' ? 'badge--success' : 'badge--warning'));
      };

      const clearMessage = () => {
        messageWrap.style.display = 'none';
      };

      const renderStatus = () => {
        if (!statusWrap) {
          return;
        }

        const statusLabel = statusWrap.querySelector('span.badge');
        if (!statusLabel) {
          return;
        }

        if (state.enabled) {
          statusLabel.className = 'badge badge--success';
          statusLabel.textContent = 'ACTIVE';
          setupBox.style.display = 'none';
          setupBtn.style.display = 'none';
          enableBtn.style.display = 'none';
          disableBtn.style.display = 'inline-flex';
          disableBtn.disabled = false;
        } else {
          statusLabel.className = state.pendingSetup ? 'badge badge--warning' : 'badge badge--danger';
          statusLabel.textContent = state.pendingSetup ? 'A ACTIVER' : 'INACTIVE';
          setupBox.style.display = state.pendingSetup ? 'block' : 'none';
          setupBtn.style.display = 'inline-flex';
          setupBtn.disabled = false;
          enableBtn.style.display = 'inline-flex';
          enableBtn.disabled = !state.pendingSetup;
          disableBtn.style.display = 'none';
        }
      };

      const api = async (url, method = 'GET', payload = null) => {
        const options = {
          method,
          headers: {
            'Accept': 'application/json',
          },
        };

        if (method !== 'GET') {
          options.headers['Content-Type'] = 'application/json';
          options.headers['X-CSRF-TOKEN'] = csrfToken;
          options.body = JSON.stringify(payload || {});
        }

        const response = await fetch(url, options);
        const data = await response.json().catch(() => ({}));
        if (!response.ok || data.ok === false) {
          const message = typeof data.message === 'string' && data.message !== '' ? data.message : 'Erreur API.';
          throw new Error(message);
        }

        return data;
      };

      const refreshState = async () => {
        try {
          const data = await api(urls.state);
          state.enabled = !!data.enabled;
          state.pendingSetup = !!data.pending_setup;
          renderStatus();
        } catch (error) {
          setMessage(error instanceof Error ? error.message : 'Impossible de charger l etat 2FA.', 'error');
        }
      };

      setupBtn?.addEventListener('click', async () => {
        clearMessage();
        setupBtn.disabled = true;
        enableBtn.disabled = true;
        try {
          const data = await api(urls.setup, 'POST', {});
          state.pendingSetup = true;
          state.enabled = false;
          if (qrImg && typeof data.qr_code_url === 'string') {
            qrImg.src = data.qr_code_url;
          }
          if (secretCode && typeof data.secret === 'string') {
            secretCode.textContent = data.secret;
          }
          renderStatus();
          setMessage(data.message || 'Configuration 2FA prete.', 'success');
        } catch (error) {
          setMessage(error instanceof Error ? error.message : 'Erreur setup 2FA.', 'error');
        } finally {
          setupBtn.disabled = false;
          enableBtn.disabled = !state.pendingSetup;
        }
      });

      enableBtn?.addEventListener('click', async () => {
        clearMessage();
        const code = (codeInput?.value || '').trim();
        if (!/^\\d{6}\$/.test(code)) {
          setMessage('Entrez un code a 6 chiffres.', 'error');
          return;
        }

        enableBtn.disabled = true;
        try {
          const data = await api(urls.enable, 'POST', { code });
          state.enabled = true;
          state.pendingSetup = false;
          if (codeInput) {
            codeInput.value = '';
          }
          renderStatus();
          setMessage(data.message || '2FA activee.', 'success');
        } catch (error) {
          setMessage(error instanceof Error ? error.message : 'Erreur activation 2FA.', 'error');
        } finally {
          enableBtn.disabled = !state.pendingSetup;
        }
      });

      disableBtn?.addEventListener('click', async () => {
        clearMessage();
        const code = (codeInput?.value || '').trim();
        if (!/^\\d{6}\$/.test(code)) {
          setMessage('Saisissez un code actuel pour desactiver la 2FA.', 'error');
          return;
        }

        disableBtn.disabled = true;
        try {
          const data = await api(urls.disable, 'POST', { code });
          state.enabled = false;
          state.pendingSetup = false;
          if (codeInput) {
            codeInput.value = '';
          }
          if (secretCode) {
            secretCode.textContent = '';
          }
          renderStatus();
          setMessage(data.message || '2FA desactivee.', 'success');
        } catch (error) {
          setMessage(error instanceof Error ? error.message : 'Erreur desactivation 2FA.', 'error');
        } finally {
          disableBtn.disabled = false;
        }
      });

      refreshState();
    })();
  </script>
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
        return "front/pages/profile-edit.html.twig";
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
        return array (  403 => 169,  390 => 168,  379 => 165,  374 => 162,  372 => 161,  313 => 105,  309 => 104,  305 => 103,  301 => 102,  297 => 101,  291 => 98,  286 => 96,  277 => 90,  273 => 89,  265 => 84,  261 => 83,  253 => 78,  249 => 77,  241 => 72,  237 => 71,  229 => 66,  225 => 65,  217 => 60,  213 => 59,  205 => 54,  201 => 53,  193 => 48,  189 => 47,  181 => 42,  169 => 37,  165 => 36,  160 => 34,  155 => 31,  149 => 30,  138 => 27,  134 => 26,  131 => 25,  126 => 24,  122 => 23,  117 => 20,  115 => 19,  109 => 15,  106 => 9,  93 => 8,  70 => 6,  59 => 1,  57 => 4,  55 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% set avatarPath = viewer_user.profileImageId ? viewer_user.profileImageId.fileUrl : '' %}
{% set avatarUrl = avatarPath ? (avatarPath starts with 'http' ? avatarPath : asset(avatarPath)) : 'https://picsum.photos/seed/pulse_profile_edit_' ~ (viewer_user.userId ?? 0) ~ '/200/200' %}

{% block title %}PULSE - Modifier profil{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Modifier profil',
    hero_sub: 'Mettez a jour vos informations personnelles.',
    breadcrumb_current: 'Modifier profil'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'profile_edit' } %}

        <div class=\"socialShell\">
          <div class=\"socialStack\">
            {% for label, messages in app.flashes %}
              {% for message in messages %}
                <div class=\"listItem\">
                  <span>{{ message }}</span>
                  <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
                </div>
              {% endfor %}
            {% endfor %}

            <div class=\"panel gadget gadget--profile\">
              <div class=\"profileHeader\">
                <div class=\"avatarLg\" data-avatar=\"{{ avatarUrl }}\"></div>
                <div>
                  <h3 style=\"margin:0;\">{{ viewer_user.displayName ?? viewer_user.username }}</h3>
                  <div class=\"muted\">@{{ viewer_user.username }}{% if viewer_user.country %} · {{ viewer_user.country }}{% endif %}</div>
                </div>
              </div>
            </div>

            {{ form_start(profileEditForm, {attr: {class: 'panel gadget', novalidate: 'novalidate'}, enctype: 'multipart/form-data'}) }}
              <h3 class=\"panel__title\">INFORMATIONS PROFIL</h3>
              <div class=\"formGrid\">
                <label class=\"field\">
                  <span class=\"field__label\">Photo profil</span>
                  {{ form_widget(profileEditForm.profilePhoto, {attr: {class: 'input'}}) }}
                  {{ form_errors(profileEditForm.profilePhoto) }}
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Display name</span>
                  {{ form_widget(profileEditForm.displayName, {attr: {class: 'input'}}) }}
                  {{ form_errors(profileEditForm.displayName) }}
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Bio</span>
                  {{ form_widget(profileEditForm.bio, {attr: {class: 'textarea'}}) }}
                  {{ form_errors(profileEditForm.bio) }}
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Pays</span>
                  {{ form_widget(profileEditForm.country, {attr: {class: 'input'}}) }}
                  {{ form_errors(profileEditForm.country) }}
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Telephone</span>
                  {{ form_widget(profileEditForm.phone, {attr: {class: 'input'}}) }}
                  {{ form_errors(profileEditForm.phone) }}
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Date de naissance</span>
                  {{ form_widget(profileEditForm.birthDate, {attr: {class: 'input'}}) }}
                  {{ form_errors(profileEditForm.birthDate) }}
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Genre</span>
                  {{ form_widget(profileEditForm.gender, {attr: {class: 'input'}}) }}
                  {{ form_errors(profileEditForm.gender) }}
                </label>

                <label class=\"field\" style=\"display:flex; justify-content:space-between; align-items:center;\">
                  <span class=\"field__label\">Compte actif</span>
                  {{ form_widget(profileEditForm.isActive) }}
                  {{ form_errors(profileEditForm.isActive) }}
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button class=\"btn btn--primary\" type=\"submit\">Sauvegarder</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_profile') }}\">Annuler</a>
              </div>
            {{ form_end(profileEditForm) }}

            <section class=\"panel gadget\" id=\"twoFactorPanel\"
              data-csrf-token=\"{{ csrf_token('profile_2fa_api') }}\"
              data-url-state=\"{{ path('front_profile_2fa_state') }}\"
              data-url-setup=\"{{ path('front_profile_2fa_setup') }}\"
              data-url-enable=\"{{ path('front_profile_2fa_enable') }}\"
              data-url-disable=\"{{ path('front_profile_2fa_disable') }}\"
            >
              <h3 class=\"panel__title\">DOUBLE AUTHENTIFICATION (2FA)</h3>
              <div id=\"twoFactorStatus\" class=\"listItem\" style=\"margin-bottom:8px;\">
                <span>Etat actuel</span>
                <span class=\"badge badge--warning\">Chargement...</span>
              </div>

              <div id=\"twoFactorMessage\" class=\"listItem\" style=\"display:none; margin-bottom:8px;\">
                <span id=\"twoFactorMessageText\"></span>
                <span id=\"twoFactorMessageBadge\" class=\"badge\">INFO</span>
              </div>

              <div id=\"twoFactorSetupBox\" style=\"display:none; margin-bottom:10px;\">
                <div class=\"listMeta\" style=\"margin-bottom:8px;\">
                  Scannez le QR dans Google Authenticator, Microsoft Authenticator ou Authy, puis entrez le code genere.
                </div>
                <div style=\"display:flex; gap:12px; flex-wrap:wrap; align-items:flex-start;\">
                  <div>
                    <img id=\"twoFactorQr\" src=\"\" alt=\"QR code 2FA\" style=\"width:180px;height:180px;border-radius:12px;border:1px solid rgba(255,255,255,.12);background:rgba(255,255,255,.03);\" />
                  </div>
                  <div style=\"max-width:420px;\">
                    <div class=\"listMeta\">Cle manuelle (backup):</div>
                    <code id=\"twoFactorSecret\" style=\"display:inline-block;margin-top:6px;padding:6px 10px;border-radius:10px;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.10);letter-spacing:.08em;\"></code>
                  </div>
                </div>
              </div>

              <div class=\"formGrid\" style=\"margin-bottom:10px;\">
                <label class=\"field\">
                  <span class=\"field__label\">Code TOTP (6 chiffres)</span>
                  <input id=\"twoFactorCode\" class=\"input\" type=\"text\" inputmode=\"numeric\" pattern=\"[0-9]{6}\" maxlength=\"6\" placeholder=\"123456\" />
                </label>
              </div>

              <div class=\"formActions\">
                <button id=\"twoFactorSetupBtn\" type=\"button\" class=\"btn btn--ghost\">Configurer 2FA</button>
                <button id=\"twoFactorEnableBtn\" type=\"button\" class=\"btn btn--primary\" disabled>Activer</button>
                <button id=\"twoFactorDisableBtn\" type=\"button\" class=\"btn btn--ghost\" style=\"display:none;\">Desactiver</button>
              </div>
            </section>
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">CONSEILS</h3>
              <div class=\"list\">
                <div class=\"listItem\"><span>Ajoutez une bio claire</span><span class=\"listItem__meta\">+ visibilite</span></div>
                <div class=\"listItem\"><span>Photo recente</span><span class=\"listItem__meta\">+ confiance</span></div>
                <div class=\"listItem\"><span>Pays renseigne</span><span class=\"listItem__meta\">+ matching</span></div>
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

{% block javascripts %}
  {{ parent() }}
  <script>
    (() => {
      const panel = document.getElementById('twoFactorPanel');
      if (!panel) {
        return;
      }

      const csrfToken = panel.dataset.csrfToken || '';
      const urls = {
        state: panel.dataset.urlState || '',
        setup: panel.dataset.urlSetup || '',
        enable: panel.dataset.urlEnable || '',
        disable: panel.dataset.urlDisable || '',
      };

      const statusWrap = document.getElementById('twoFactorStatus');
      const messageWrap = document.getElementById('twoFactorMessage');
      const messageText = document.getElementById('twoFactorMessageText');
      const messageBadge = document.getElementById('twoFactorMessageBadge');
      const setupBox = document.getElementById('twoFactorSetupBox');
      const qrImg = document.getElementById('twoFactorQr');
      const secretCode = document.getElementById('twoFactorSecret');
      const codeInput = document.getElementById('twoFactorCode');
      const setupBtn = document.getElementById('twoFactorSetupBtn');
      const enableBtn = document.getElementById('twoFactorEnableBtn');
      const disableBtn = document.getElementById('twoFactorDisableBtn');

      let state = {
        enabled: false,
        pendingSetup: false,
      };

      const setMessage = (message, type = 'info') => {
        messageWrap.style.display = 'flex';
        messageText.textContent = message;
        messageBadge.textContent = type.toUpperCase();
        messageBadge.className = 'badge ' + (type === 'error' ? 'badge--danger' : (type === 'success' ? 'badge--success' : 'badge--warning'));
      };

      const clearMessage = () => {
        messageWrap.style.display = 'none';
      };

      const renderStatus = () => {
        if (!statusWrap) {
          return;
        }

        const statusLabel = statusWrap.querySelector('span.badge');
        if (!statusLabel) {
          return;
        }

        if (state.enabled) {
          statusLabel.className = 'badge badge--success';
          statusLabel.textContent = 'ACTIVE';
          setupBox.style.display = 'none';
          setupBtn.style.display = 'none';
          enableBtn.style.display = 'none';
          disableBtn.style.display = 'inline-flex';
          disableBtn.disabled = false;
        } else {
          statusLabel.className = state.pendingSetup ? 'badge badge--warning' : 'badge badge--danger';
          statusLabel.textContent = state.pendingSetup ? 'A ACTIVER' : 'INACTIVE';
          setupBox.style.display = state.pendingSetup ? 'block' : 'none';
          setupBtn.style.display = 'inline-flex';
          setupBtn.disabled = false;
          enableBtn.style.display = 'inline-flex';
          enableBtn.disabled = !state.pendingSetup;
          disableBtn.style.display = 'none';
        }
      };

      const api = async (url, method = 'GET', payload = null) => {
        const options = {
          method,
          headers: {
            'Accept': 'application/json',
          },
        };

        if (method !== 'GET') {
          options.headers['Content-Type'] = 'application/json';
          options.headers['X-CSRF-TOKEN'] = csrfToken;
          options.body = JSON.stringify(payload || {});
        }

        const response = await fetch(url, options);
        const data = await response.json().catch(() => ({}));
        if (!response.ok || data.ok === false) {
          const message = typeof data.message === 'string' && data.message !== '' ? data.message : 'Erreur API.';
          throw new Error(message);
        }

        return data;
      };

      const refreshState = async () => {
        try {
          const data = await api(urls.state);
          state.enabled = !!data.enabled;
          state.pendingSetup = !!data.pending_setup;
          renderStatus();
        } catch (error) {
          setMessage(error instanceof Error ? error.message : 'Impossible de charger l etat 2FA.', 'error');
        }
      };

      setupBtn?.addEventListener('click', async () => {
        clearMessage();
        setupBtn.disabled = true;
        enableBtn.disabled = true;
        try {
          const data = await api(urls.setup, 'POST', {});
          state.pendingSetup = true;
          state.enabled = false;
          if (qrImg && typeof data.qr_code_url === 'string') {
            qrImg.src = data.qr_code_url;
          }
          if (secretCode && typeof data.secret === 'string') {
            secretCode.textContent = data.secret;
          }
          renderStatus();
          setMessage(data.message || 'Configuration 2FA prete.', 'success');
        } catch (error) {
          setMessage(error instanceof Error ? error.message : 'Erreur setup 2FA.', 'error');
        } finally {
          setupBtn.disabled = false;
          enableBtn.disabled = !state.pendingSetup;
        }
      });

      enableBtn?.addEventListener('click', async () => {
        clearMessage();
        const code = (codeInput?.value || '').trim();
        if (!/^\\d{6}\$/.test(code)) {
          setMessage('Entrez un code a 6 chiffres.', 'error');
          return;
        }

        enableBtn.disabled = true;
        try {
          const data = await api(urls.enable, 'POST', { code });
          state.enabled = true;
          state.pendingSetup = false;
          if (codeInput) {
            codeInput.value = '';
          }
          renderStatus();
          setMessage(data.message || '2FA activee.', 'success');
        } catch (error) {
          setMessage(error instanceof Error ? error.message : 'Erreur activation 2FA.', 'error');
        } finally {
          enableBtn.disabled = !state.pendingSetup;
        }
      });

      disableBtn?.addEventListener('click', async () => {
        clearMessage();
        const code = (codeInput?.value || '').trim();
        if (!/^\\d{6}\$/.test(code)) {
          setMessage('Saisissez un code actuel pour desactiver la 2FA.', 'error');
          return;
        }

        disableBtn.disabled = true;
        try {
          const data = await api(urls.disable, 'POST', { code });
          state.enabled = false;
          state.pendingSetup = false;
          if (codeInput) {
            codeInput.value = '';
          }
          if (secretCode) {
            secretCode.textContent = '';
          }
          renderStatus();
          setMessage(data.message || '2FA desactivee.', 'success');
        } catch (error) {
          setMessage(error instanceof Error ? error.message : 'Erreur desactivation 2FA.', 'error');
        } finally {
          disableBtn.disabled = false;
        }
      });

      refreshState();
    })();
  </script>
{% endblock %}
", "front/pages/profile-edit.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\profile-edit.html.twig");
    }
}
