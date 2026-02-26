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
class __TwigTemplate_caa7297214ef540a2fb945d64b016b77 extends Template
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
        // line 114
        yield from $this->load("front/partials/_footer.html.twig", 114)->unwrap()->yield($context);
        // line 115
        yield "    </section>
  </main>

  ";
        // line 118
        yield from $this->load("front/partials/_auth_modal.html.twig", 118)->unwrap()->yield($context);
        
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
        return array (  316 => 118,  311 => 115,  309 => 114,  290 => 98,  285 => 96,  276 => 90,  272 => 89,  264 => 84,  260 => 83,  252 => 78,  248 => 77,  240 => 72,  236 => 71,  228 => 66,  224 => 65,  216 => 60,  212 => 59,  204 => 54,  200 => 53,  192 => 48,  188 => 47,  180 => 42,  168 => 37,  164 => 36,  159 => 34,  154 => 31,  148 => 30,  137 => 27,  133 => 26,  130 => 25,  125 => 24,  121 => 23,  116 => 20,  114 => 19,  108 => 15,  105 => 9,  92 => 8,  69 => 6,  58 => 1,  56 => 4,  54 => 3,  41 => 1,);
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
", "front/pages/profile-edit.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\profile-edit.html.twig");
    }
}
