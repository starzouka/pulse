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

/* front/partials/_post_composer.html.twig */
class __TwigTemplate_a377009f74a162ebe124892a38fd92c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_post_composer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_post_composer.html.twig"));

        // line 1
        if ((($tmp = (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  ";
            $context["viewerAvatarPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 2, $this->source); })()), "profileImageId", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 2, $this->source); })()), "profileImageId", [], "any", false, false, false, 2), "fileUrl", [], "any", false, false, false, 2)) : (""));
            // line 3
            yield "  ";
            $context["viewerAvatarUrl"] = (((($tmp = (isset($context["viewerAvatarPath"]) || array_key_exists("viewerAvatarPath", $context) ? $context["viewerAvatarPath"] : (function () { throw new RuntimeError('Variable "viewerAvatarPath" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["viewerAvatarPath"]) || array_key_exists("viewerAvatarPath", $context) ? $context["viewerAvatarPath"] : (function () { throw new RuntimeError('Variable "viewerAvatarPath" does not exist.', 3, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["viewerAvatarPath"]) || array_key_exists("viewerAvatarPath", $context) ? $context["viewerAvatarPath"] : (function () { throw new RuntimeError('Variable "viewerAvatarPath" does not exist.', 3, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["viewerAvatarPath"]) || array_key_exists("viewerAvatarPath", $context) ? $context["viewerAvatarPath"] : (function () { throw new RuntimeError('Variable "viewerAvatarPath" does not exist.', 3, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_post_viewer_" . (((CoreExtension::getAttribute($this->env, $this->source, ($context["viewer_user"] ?? null), "userId", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 3, $this->source); })()), "userId", [], "any", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 3, $this->source); })()), "userId", [], "any", false, false, false, 3)) : (0))) . "/200/200")));
            // line 4
            yield "
  <form
    class=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("form_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["form_class"]) || array_key_exists("form_class", $context) ? $context["form_class"] : (function () { throw new RuntimeError('Variable "form_class" does not exist.', 6, $this->source); })()), "panel gadget gadget--composer")) : ("panel gadget gadget--composer")), "html", null, true);
            yield "\"
    method=\"post\"
    action=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["action_route"]) || array_key_exists("action_route", $context) ? $context["action_route"] : (function () { throw new RuntimeError('Variable "action_route" does not exist.', 8, $this->source); })()));
            yield "\"
    enctype=\"multipart/form-data\"
  >
    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["csrf_token_id"]) || array_key_exists("csrf_token_id", $context) ? $context["csrf_token_id"] : (function () { throw new RuntimeError('Variable "csrf_token_id" does not exist.', 11, $this->source); })())), "html", null, true);
            yield "\">
    <input type=\"hidden\" name=\"_redirect\" value=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "uri", [], "any", false, false, false, 12), "html", null, true);
            yield "\">

    <div class=\"socialComposer socialComposer--stack\">
      <div class=\"avatarMd\" data-avatar=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["viewerAvatarUrl"]) || array_key_exists("viewerAvatarUrl", $context) ? $context["viewerAvatarUrl"] : (function () { throw new RuntimeError('Variable "viewerAvatarUrl" does not exist.', 15, $this->source); })()), "html", null, true);
            yield "\"></div>
      <div class=\"socialComposer__fields\">
        <textarea
          class=\"textarea\"
          name=\"content_text\"
          rows=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("textarea_rows", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["textarea_rows"]) || array_key_exists("textarea_rows", $context) ? $context["textarea_rows"] : (function () { throw new RuntimeError('Variable "textarea_rows" does not exist.', 20, $this->source); })()), 3)) : (3)), "html", null, true);
            yield "\"
          placeholder=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("placeholder", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 21, $this->source); })()), "Que voulez-vous partager aujourd hui ?")) : ("Que voulez-vous partager aujourd hui ?")), "html", null, true);
            yield "\"
        ></textarea>
      </div>
    </div>

    <div class=\"postComposer__footer\">
      <label class=\"field\" style=\"min-width:220px; margin:0;\">
        <span class=\"field__label\">Visibilite</span>
        <select class=\"input\" name=\"visibility\">
          <option value=\"PUBLIC\">Public</option>
          <option value=\"FRIENDS\">Amis</option>
          <option value=\"TEAM_ONLY\">Equipe</option>
        </select>
      </label>

      <label class=\"filePicker\">
        <span>Photos</span>
        <input type=\"file\" name=\"images[]\" accept=\"image/jpeg,image/png,image/webp,image/gif\" multiple>
      </label>

      <button class=\"btn btn--primary\" type=\"submit\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 41, $this->source); })()), "Publier")) : ("Publier")), "html", null, true);
            yield "</button>
    </div>
  </form>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/partials/_post_composer.html.twig";
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
        return array (  116 => 41,  93 => 21,  89 => 20,  81 => 15,  75 => 12,  71 => 11,  65 => 8,  60 => 6,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if viewer_user %}
  {% set viewerAvatarPath = viewer_user.profileImageId ? viewer_user.profileImageId.fileUrl : '' %}
  {% set viewerAvatarUrl = viewerAvatarPath ? (viewerAvatarPath starts with 'http' ? viewerAvatarPath : asset(viewerAvatarPath)) : 'https://picsum.photos/seed/pulse_post_viewer_' ~ (viewer_user.userId ?? 0) ~ '/200/200' %}

  <form
    class=\"{{ form_class|default('panel gadget gadget--composer') }}\"
    method=\"post\"
    action=\"{{ path(action_route) }}\"
    enctype=\"multipart/form-data\"
  >
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(csrf_token_id) }}\">
    <input type=\"hidden\" name=\"_redirect\" value=\"{{ app.request.uri }}\">

    <div class=\"socialComposer socialComposer--stack\">
      <div class=\"avatarMd\" data-avatar=\"{{ viewerAvatarUrl }}\"></div>
      <div class=\"socialComposer__fields\">
        <textarea
          class=\"textarea\"
          name=\"content_text\"
          rows=\"{{ textarea_rows|default(3) }}\"
          placeholder=\"{{ placeholder|default('Que voulez-vous partager aujourd hui ?') }}\"
        ></textarea>
      </div>
    </div>

    <div class=\"postComposer__footer\">
      <label class=\"field\" style=\"min-width:220px; margin:0;\">
        <span class=\"field__label\">Visibilite</span>
        <select class=\"input\" name=\"visibility\">
          <option value=\"PUBLIC\">Public</option>
          <option value=\"FRIENDS\">Amis</option>
          <option value=\"TEAM_ONLY\">Equipe</option>
        </select>
      </label>

      <label class=\"filePicker\">
        <span>Photos</span>
        <input type=\"file\" name=\"images[]\" accept=\"image/jpeg,image/png,image/webp,image/gif\" multiple>
      </label>

      <button class=\"btn btn--primary\" type=\"submit\">{{ button_label|default('Publier') }}</button>
    </div>
  </form>
{% endif %}
", "front/partials/_post_composer.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\partials\\_post_composer.html.twig");
    }
}
