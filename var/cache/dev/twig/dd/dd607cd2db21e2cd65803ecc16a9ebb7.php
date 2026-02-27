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

/* front/partials/_post_card.html.twig */
class __TwigTemplate_4f039678be96b29ef9e0594e4249b77b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_post_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_post_card.html.twig"));

        // line 1
        $context["post"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["post_data"]) || array_key_exists("post_data", $context) ? $context["post_data"] : (function () { throw new RuntimeError('Variable "post_data" does not exist.', 1, $this->source); })()), "post", [], "any", false, false, false, 1);
        // line 2
        $context["postId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "postId", [], "any", true, true, false, 2) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 2, $this->source); })()), "postId", [], "any", false, false, false, 2)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 2, $this->source); })()), "postId", [], "any", false, false, false, 2)) : (0));
        // line 3
        $context["author"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "authorUserId", [], "any", false, false, false, 3);
        // line 4
        $context["authorId"] = (((($tmp = (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["author"] ?? null), "userId", [], "any", true, true, false, 4) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 4, $this->source); })()), "userId", [], "any", false, false, false, 4)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 4, $this->source); })()), "userId", [], "any", false, false, false, 4)) : (0))) : (0));
        // line 5
        $context["comments"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["post_data"] ?? null), "comments", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post_data"]) || array_key_exists("post_data", $context) ? $context["post_data"] : (function () { throw new RuntimeError('Variable "post_data" does not exist.', 5, $this->source); })()), "comments", [], "any", false, false, false, 5), ((CoreExtension::getAttribute($this->env, $this->source, ($context["post_data"] ?? null), "latest_comments", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post_data"]) || array_key_exists("post_data", $context) ? $context["post_data"] : (function () { throw new RuntimeError('Variable "post_data" does not exist.', 5, $this->source); })()), "latest_comments", [], "any", false, false, false, 5), [])) : ([])))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["post_data"] ?? null), "latest_comments", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post_data"]) || array_key_exists("post_data", $context) ? $context["post_data"] : (function () { throw new RuntimeError('Variable "post_data" does not exist.', 5, $this->source); })()), "latest_comments", [], "any", false, false, false, 5), [])) : ([]))));
        // line 6
        $context["postImages"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["post_data"] ?? null), "images", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post_data"]) || array_key_exists("post_data", $context) ? $context["post_data"] : (function () { throw new RuntimeError('Variable "post_data" does not exist.', 6, $this->source); })()), "images", [], "any", false, false, false, 6), [])) : ([]));
        // line 7
        $context["avatarPath"] = ((((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 7, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 7, $this->source); })()), "profileImageId", [], "any", false, false, false, 7))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 7, $this->source); })()), "profileImageId", [], "any", false, false, false, 7), "fileUrl", [], "any", false, false, false, 7)) : (""));
        // line 8
        $context["avatarUrl"] = (((($tmp = (isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 8, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 8, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 8, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_post_author_" . (isset($context["authorId"]) || array_key_exists("authorId", $context) ? $context["authorId"] : (function () { throw new RuntimeError('Variable "authorId" does not exist.', 8, $this->source); })())) . "/200/200")));
        // line 9
        $context["canDelete"] = ((isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 9, $this->source); })()) && (((isset($context["authorId"]) || array_key_exists("authorId", $context) ? $context["authorId"] : (function () { throw new RuntimeError('Variable "authorId" does not exist.', 9, $this->source); })()) == (((CoreExtension::getAttribute($this->env, $this->source, ($context["viewer_user"] ?? null), "userId", [], "any", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 9, $this->source); })()), "userId", [], "any", false, false, false, 9)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 9, $this->source); })()), "userId", [], "any", false, false, false, 9)) : (0))) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")));
        // line 10
        $context["deleteRoute"] = ((array_key_exists("delete_route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["delete_route"]) || array_key_exists("delete_route", $context) ? $context["delete_route"] : (function () { throw new RuntimeError('Variable "delete_route" does not exist.', 10, $this->source); })()), "front_post_delete")) : ("front_post_delete"));
        // line 11
        $context["deleteTokenPrefix"] = ((array_key_exists("delete_token_prefix", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["delete_token_prefix"]) || array_key_exists("delete_token_prefix", $context) ? $context["delete_token_prefix"] : (function () { throw new RuntimeError('Variable "delete_token_prefix" does not exist.', 11, $this->source); })()), "post_delete_")) : ("post_delete_"));
        // line 12
        $context["redirectUri"] = ((array_key_exists("redirect_uri", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["redirect_uri"]) || array_key_exists("redirect_uri", $context) ? $context["redirect_uri"] : (function () { throw new RuntimeError('Variable "redirect_uri" does not exist.', 12, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "uri", [], "any", false, false, false, 12))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "uri", [], "any", false, false, false, 12)));
        // line 13
        yield "
<article class=\"panel profilePost postCardSquare\" data-post-card data-post-id=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\">
  <div class=\"postCard__head\">
    <div class=\"postCard__author\">
      <div class=\"avatarMd\" data-avatar=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarUrl"]) || array_key_exists("avatarUrl", $context) ? $context["avatarUrl"] : (function () { throw new RuntimeError('Variable "avatarUrl" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\"></div>
      <div>
        <div class=\"name\">";
        // line 19
        yield (((($tmp = (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["author"] ?? null), "displayName", [], "any", true, true, false, 19) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 19, $this->source); })()), "displayName", [], "any", false, false, false, 19)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 19, $this->source); })()), "displayName", [], "any", false, false, false, 19), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 19, $this->source); })()), "username", [], "any", false, false, false, 19), "html", null, true)))) : ("Utilisateur"));
        yield "</div>
        <div class=\"sub\">";
        // line 20
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "createdAt", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "createdAt", [], "any", false, false, false, 20), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield " · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "visibility", [], "any", false, false, false, 20), "html", null, true);
        yield "</div>
      </div>
    </div>

    <div class=\"postCard__headActions\">
      ";
        // line 25
        if (((isset($context["authorId"]) || array_key_exists("authorId", $context) ? $context["authorId"] : (function () { throw new RuntimeError('Variable "authorId" does not exist.', 25, $this->source); })()) > 0)) {
            // line 26
            yield "        ";
            if (((isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 26, $this->source); })()) && ((isset($context["authorId"]) || array_key_exists("authorId", $context) ? $context["authorId"] : (function () { throw new RuntimeError('Variable "authorId" does not exist.', 26, $this->source); })()) == (((CoreExtension::getAttribute($this->env, $this->source, ($context["viewer_user"] ?? null), "userId", [], "any", true, true, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 26, $this->source); })()), "userId", [], "any", false, false, false, 26)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 26, $this->source); })()), "userId", [], "any", false, false, false, 26)) : (0))))) {
                // line 27
                yield "          <a class=\"btn btn--ghost\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile");
                yield "\">Profil</a>
        ";
            } else {
                // line 29
                yield "          <a class=\"btn btn--ghost\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile", ["id" => (isset($context["authorId"]) || array_key_exists("authorId", $context) ? $context["authorId"] : (function () { throw new RuntimeError('Variable "authorId" does not exist.', 29, $this->source); })())]), "html", null, true);
                yield "\">Profil</a>
        ";
            }
            // line 31
            yield "      ";
        }
        // line 32
        yield "
      ";
        // line 33
        if ((($tmp = (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "        <div class=\"postMenu\" data-post-menu-wrap>
          <button class=\"postMenuBtn\" type=\"button\" data-post-menu-toggle aria-expanded=\"false\" aria-label=\"Options post\">
            <span aria-hidden=\"true\">...</span>
          </button>
          <div class=\"postMenuDropdown\" data-post-menu hidden>
            <button class=\"postMenuDropdown__item\" type=\"button\" data-post-report-open>Signaler</button>
            ";
            // line 40
            if ((($tmp = (isset($context["canDelete"]) || array_key_exists("canDelete", $context) ? $context["canDelete"] : (function () { throw new RuntimeError('Variable "canDelete" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "              <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["deleteRoute"]) || array_key_exists("deleteRoute", $context) ? $context["deleteRoute"] : (function () { throw new RuntimeError('Variable "deleteRoute" does not exist.', 41, $this->source); })()), ["id" => (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 41, $this->source); })())]), "html", null, true);
                yield "\">
                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((isset($context["deleteTokenPrefix"]) || array_key_exists("deleteTokenPrefix", $context) ? $context["deleteTokenPrefix"] : (function () { throw new RuntimeError('Variable "deleteTokenPrefix" does not exist.', 42, $this->source); })()) . (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 42, $this->source); })()))), "html", null, true);
                yield "\">
                <input type=\"hidden\" name=\"_redirect\" value=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["redirectUri"]) || array_key_exists("redirectUri", $context) ? $context["redirectUri"] : (function () { throw new RuntimeError('Variable "redirectUri" does not exist.', 43, $this->source); })()), "html", null, true);
                yield "\">
                <button class=\"postMenuDropdown__item postMenuDropdown__item--danger\" type=\"submit\">Supprimer</button>
              </form>
            ";
            }
            // line 47
            yield "          </div>
        </div>
      ";
        }
        // line 50
        yield "    </div>
  </div>

  ";
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 53, $this->source); })()), "contentText", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "    <div class=\"postCard__body\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 54, $this->source); })()), "contentText", [], "any", false, false, false, 54), "html", null, true);
            yield "</div>
  ";
        }
        // line 56
        yield "
  ";
        // line 57
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["postImages"]) || array_key_exists("postImages", $context) ? $context["postImages"] : (function () { throw new RuntimeError('Variable "postImages" does not exist.', 57, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "    <div class=\"postMedia\" data-post-carousel>
      <div class=\"postMedia__viewport\">
        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postImages"]) || array_key_exists("postImages", $context) ? $context["postImages"] : (function () { throw new RuntimeError('Variable "postImages" does not exist.', 60, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 61
                yield "          ";
                $context["imagePath"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "fileUrl", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["image"], "fileUrl", [], "any", false, false, false, 61)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["image"], "fileUrl", [], "any", false, false, false, 61)) : (""));
                // line 62
                yield "          ";
                $context["imageUrl"] = (((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v2 = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 62, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 62, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 62, $this->source); })()))))) : ((((("https://picsum.photos/seed/pulse_post_image_" . (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 62, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 62)) . "/1000/1000")));
                // line 63
                yield "          <figure class=\"postMedia__slide ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-active") : (""));
                yield "\">
            <img src=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 64, $this->source); })()), "html", null, true);
                yield "\" alt=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "altText", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["image"], "altText", [], "any", false, false, false, 64)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "altText", [], "any", false, false, false, 64), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Image du post " . (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 64, $this->source); })())), "html", null, true)));
                yield "\" loading=\"lazy\">
          </figure>
        ";
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
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "      </div>

      ";
            // line 69
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["postImages"]) || array_key_exists("postImages", $context) ? $context["postImages"] : (function () { throw new RuntimeError('Variable "postImages" does not exist.', 69, $this->source); })())) > 1)) {
                // line 70
                yield "        <button class=\"postMedia__nav is-prev\" type=\"button\" data-carousel-prev aria-label=\"Image precedente\">&lsaquo;</button>
        <button class=\"postMedia__nav is-next\" type=\"button\" data-carousel-next aria-label=\"Image suivante\">&rsaquo;</button>
        <div class=\"postMedia__count\"><span data-carousel-current>1</span>/<span>";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["postImages"]) || array_key_exists("postImages", $context) ? $context["postImages"] : (function () { throw new RuntimeError('Variable "postImages" does not exist.', 72, $this->source); })())), "html", null, true);
                yield "</span></div>
      ";
            }
            // line 74
            yield "    </div>
  ";
        }
        // line 76
        yield "
  <div class=\"postReactionsSummary\">
    <span>";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post_data"]) || array_key_exists("post_data", $context) ? $context["post_data"] : (function () { throw new RuntimeError('Variable "post_data" does not exist.', 78, $this->source); })()), "likes_count", [], "any", false, false, false, 78), "html", null, true);
        yield " J'aime</span>
    <span>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post_data"]) || array_key_exists("post_data", $context) ? $context["post_data"] : (function () { throw new RuntimeError('Variable "post_data" does not exist.', 79, $this->source); })()), "comments_count", [], "any", false, false, false, 79), "html", null, true);
        yield " commentaires</span>
  </div>

  <div class=\"postReactionsBar\">
    ";
        // line 83
        if ((($tmp = (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 83, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "      <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["like_route"]) || array_key_exists("like_route", $context) ? $context["like_route"] : (function () { throw new RuntimeError('Variable "like_route" does not exist.', 84, $this->source); })()), ["id" => (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 84, $this->source); })())]), "html", null, true);
            yield "\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((isset($context["like_token_prefix"]) || array_key_exists("like_token_prefix", $context) ? $context["like_token_prefix"] : (function () { throw new RuntimeError('Variable "like_token_prefix" does not exist.', 85, $this->source); })()) . (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 85, $this->source); })()))), "html", null, true);
            yield "\">
        <input type=\"hidden\" name=\"_redirect\" value=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["redirectUri"]) || array_key_exists("redirectUri", $context) ? $context["redirectUri"] : (function () { throw new RuntimeError('Variable "redirectUri" does not exist.', 86, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 87
            if (array_key_exists("profile_id", $context)) {
                // line 88
                yield "          <input type=\"hidden\" name=\"profile_id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profile_id"]) || array_key_exists("profile_id", $context) ? $context["profile_id"] : (function () { throw new RuntimeError('Variable "profile_id" does not exist.', 88, $this->source); })()), "html", null, true);
                yield "\">
        ";
            }
            // line 90
            yield "        <button class=\"reactionBtn reactionBtn--heart ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["post_data"]) || array_key_exists("post_data", $context) ? $context["post_data"] : (function () { throw new RuntimeError('Variable "post_data" does not exist.', 90, $this->source); })()), "is_liked_by_viewer", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-active") : (""));
            yield "\" type=\"submit\">
          <span class=\"reactionIcon\">♥</span>
          <span>J'aime</span>
        </button>
      </form>

      <form method=\"post\" action=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["comment_route"]) || array_key_exists("comment_route", $context) ? $context["comment_route"] : (function () { throw new RuntimeError('Variable "comment_route" does not exist.', 96, $this->source); })()), ["id" => (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 96, $this->source); })())]), "html", null, true);
            yield "\" class=\"commentInlineForm\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((isset($context["comment_token_prefix"]) || array_key_exists("comment_token_prefix", $context) ? $context["comment_token_prefix"] : (function () { throw new RuntimeError('Variable "comment_token_prefix" does not exist.', 97, $this->source); })()) . (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 97, $this->source); })()))), "html", null, true);
            yield "\">
        <input type=\"hidden\" name=\"_redirect\" value=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["redirectUri"]) || array_key_exists("redirectUri", $context) ? $context["redirectUri"] : (function () { throw new RuntimeError('Variable "redirectUri" does not exist.', 98, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 99
            if (array_key_exists("profile_id", $context)) {
                // line 100
                yield "          <input type=\"hidden\" name=\"profile_id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profile_id"]) || array_key_exists("profile_id", $context) ? $context["profile_id"] : (function () { throw new RuntimeError('Variable "profile_id" does not exist.', 100, $this->source); })()), "html", null, true);
                yield "\">
        ";
            }
            // line 102
            yield "        <input class=\"input\" type=\"text\" name=\"content_text\" placeholder=\"Ecrire un commentaire...\" required>
        <button class=\"reactionBtn\" type=\"submit\">Commenter</button>
      </form>
    ";
        } else {
            // line 106
            yield "      <a class=\"btn btn--ghost\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => (isset($context["redirectUri"]) || array_key_exists("redirectUri", $context) ? $context["redirectUri"] : (function () { throw new RuntimeError('Variable "redirectUri" does not exist.', 106, $this->source); })())]), "html", null, true);
            yield "\">Connectez-vous pour interagir</a>
    ";
        }
        // line 108
        yield "  </div>

  ";
        // line 110
        if ((($tmp = (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 110, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "    <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["report_route"]) || array_key_exists("report_route", $context) ? $context["report_route"] : (function () { throw new RuntimeError('Variable "report_route" does not exist.', 111, $this->source); })()), ["id" => (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 111, $this->source); })())]), "html", null, true);
            yield "\" class=\"postReportBox\" data-post-report-form hidden>
      <input type=\"hidden\" name=\"_token\" value=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((isset($context["report_token_prefix"]) || array_key_exists("report_token_prefix", $context) ? $context["report_token_prefix"] : (function () { throw new RuntimeError('Variable "report_token_prefix" does not exist.', 112, $this->source); })()) . (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 112, $this->source); })()))), "html", null, true);
            yield "\">
      <input type=\"hidden\" name=\"_redirect\" value=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["redirectUri"]) || array_key_exists("redirectUri", $context) ? $context["redirectUri"] : (function () { throw new RuntimeError('Variable "redirectUri" does not exist.', 113, $this->source); })()), "html", null, true);
            yield "\">
      ";
            // line 114
            if (array_key_exists("profile_id", $context)) {
                // line 115
                yield "        <input type=\"hidden\" name=\"profile_id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profile_id"]) || array_key_exists("profile_id", $context) ? $context["profile_id"] : (function () { throw new RuntimeError('Variable "profile_id" does not exist.', 115, $this->source); })()), "html", null, true);
                yield "\">
      ";
            }
            // line 117
            yield "      <input class=\"input\" type=\"text\" name=\"reason\" placeholder=\"Raison du signalement\" maxlength=\"255\" required>
      <div class=\"postReportBox__actions\">
        <button class=\"reactionBtn reactionBtn--danger\" type=\"submit\">Envoyer report</button>
        <button class=\"reactionBtn\" type=\"button\" data-post-report-cancel>Annuler</button>
      </div>
    </form>
  ";
        }
        // line 124
        yield "
  ";
        // line 125
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 125, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "    <div class=\"postCommentsList\">
      ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 127, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 128
                yield "        ";
                $context["commentAuthor"] = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "authorUserId", [], "any", false, false, false, 128);
                // line 129
                yield "        <div class=\"listItem\">
          <span>
            <b>";
                // line 131
                yield (((($tmp = (isset($context["commentAuthor"]) || array_key_exists("commentAuthor", $context) ? $context["commentAuthor"] : (function () { throw new RuntimeError('Variable "commentAuthor" does not exist.', 131, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["commentAuthor"] ?? null), "displayName", [], "any", true, true, false, 131) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentAuthor"]) || array_key_exists("commentAuthor", $context) ? $context["commentAuthor"] : (function () { throw new RuntimeError('Variable "commentAuthor" does not exist.', 131, $this->source); })()), "displayName", [], "any", false, false, false, 131)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentAuthor"]) || array_key_exists("commentAuthor", $context) ? $context["commentAuthor"] : (function () { throw new RuntimeError('Variable "commentAuthor" does not exist.', 131, $this->source); })()), "displayName", [], "any", false, false, false, 131), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentAuthor"]) || array_key_exists("commentAuthor", $context) ? $context["commentAuthor"] : (function () { throw new RuntimeError('Variable "commentAuthor" does not exist.', 131, $this->source); })()), "username", [], "any", false, false, false, 131), "html", null, true)))) : ("Utilisateur"));
                yield "</b>
            ";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contentText", [], "any", false, false, false, 132), "html", null, true);
                yield "
          </span>
          <span class=\"listItem__meta\">";
                // line 134
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 134), "d/m H:i"), "html", null, true)) : (""));
                yield "</span>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "    </div>
  ";
        }
        // line 139
        yield "</article>
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
        return "front/partials/_post_card.html.twig";
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
        return array (  401 => 139,  397 => 137,  388 => 134,  383 => 132,  379 => 131,  375 => 129,  372 => 128,  368 => 127,  365 => 126,  363 => 125,  360 => 124,  351 => 117,  345 => 115,  343 => 114,  339 => 113,  335 => 112,  330 => 111,  328 => 110,  324 => 108,  318 => 106,  312 => 102,  306 => 100,  304 => 99,  300 => 98,  296 => 97,  292 => 96,  282 => 90,  276 => 88,  274 => 87,  270 => 86,  266 => 85,  261 => 84,  259 => 83,  252 => 79,  248 => 78,  244 => 76,  240 => 74,  235 => 72,  231 => 70,  229 => 69,  225 => 67,  206 => 64,  201 => 63,  198 => 62,  195 => 61,  178 => 60,  174 => 58,  172 => 57,  169 => 56,  163 => 54,  161 => 53,  156 => 50,  151 => 47,  144 => 43,  140 => 42,  135 => 41,  133 => 40,  125 => 34,  123 => 33,  120 => 32,  117 => 31,  111 => 29,  105 => 27,  102 => 26,  100 => 25,  90 => 20,  86 => 19,  81 => 17,  75 => 14,  72 => 13,  70 => 12,  68 => 11,  66 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set post = post_data.post %}
{% set postId = post.postId ?? 0 %}
{% set author = post.authorUserId %}
{% set authorId = author ? (author.userId ?? 0) : 0 %}
{% set comments = post_data.comments|default(post_data.latest_comments|default([])) %}
{% set postImages = post_data.images|default([]) %}
{% set avatarPath = author and author.profileImageId ? author.profileImageId.fileUrl : '' %}
{% set avatarUrl = avatarPath ? (avatarPath starts with 'http' ? avatarPath : asset(avatarPath)) : 'https://picsum.photos/seed/pulse_post_author_' ~ authorId ~ '/200/200' %}
{% set canDelete = viewer_user and (authorId == (viewer_user.userId ?? 0) or is_granted('ROLE_ADMIN')) %}
{% set deleteRoute = delete_route|default('front_post_delete') %}
{% set deleteTokenPrefix = delete_token_prefix|default('post_delete_') %}
{% set redirectUri = redirect_uri|default(app.request.uri) %}

<article class=\"panel profilePost postCardSquare\" data-post-card data-post-id=\"{{ postId }}\">
  <div class=\"postCard__head\">
    <div class=\"postCard__author\">
      <div class=\"avatarMd\" data-avatar=\"{{ avatarUrl }}\"></div>
      <div>
        <div class=\"name\">{{ author ? (author.displayName ?? author.username) : 'Utilisateur' }}</div>
        <div class=\"sub\">{{ post.createdAt ? post.createdAt|date('d/m/Y H:i') : '-' }} · {{ post.visibility }}</div>
      </div>
    </div>

    <div class=\"postCard__headActions\">
      {% if authorId > 0 %}
        {% if viewer_user and authorId == (viewer_user.userId ?? 0) %}
          <a class=\"btn btn--ghost\" href=\"{{ path('front_profile') }}\">Profil</a>
        {% else %}
          <a class=\"btn btn--ghost\" href=\"{{ path('front_player_profile', {id: authorId}) }}\">Profil</a>
        {% endif %}
      {% endif %}

      {% if viewer_user %}
        <div class=\"postMenu\" data-post-menu-wrap>
          <button class=\"postMenuBtn\" type=\"button\" data-post-menu-toggle aria-expanded=\"false\" aria-label=\"Options post\">
            <span aria-hidden=\"true\">...</span>
          </button>
          <div class=\"postMenuDropdown\" data-post-menu hidden>
            <button class=\"postMenuDropdown__item\" type=\"button\" data-post-report-open>Signaler</button>
            {% if canDelete %}
              <form method=\"post\" action=\"{{ path(deleteRoute, {id: postId}) }}\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(deleteTokenPrefix ~ postId) }}\">
                <input type=\"hidden\" name=\"_redirect\" value=\"{{ redirectUri }}\">
                <button class=\"postMenuDropdown__item postMenuDropdown__item--danger\" type=\"submit\">Supprimer</button>
              </form>
            {% endif %}
          </div>
        </div>
      {% endif %}
    </div>
  </div>

  {% if post.contentText %}
    <div class=\"postCard__body\">{{ post.contentText }}</div>
  {% endif %}

  {% if postImages is not empty %}
    <div class=\"postMedia\" data-post-carousel>
      <div class=\"postMedia__viewport\">
        {% for image in postImages %}
          {% set imagePath = image.fileUrl ?? '' %}
          {% set imageUrl = imagePath ? (imagePath starts with 'http' ? imagePath : asset(imagePath)) : 'https://picsum.photos/seed/pulse_post_image_' ~ postId ~ '_' ~ loop.index0 ~ '/1000/1000' %}
          <figure class=\"postMedia__slide {{ loop.first ? 'is-active' : '' }}\">
            <img src=\"{{ imageUrl }}\" alt=\"{{ image.altText ?? ('Image du post ' ~ postId) }}\" loading=\"lazy\">
          </figure>
        {% endfor %}
      </div>

      {% if postImages|length > 1 %}
        <button class=\"postMedia__nav is-prev\" type=\"button\" data-carousel-prev aria-label=\"Image precedente\">&lsaquo;</button>
        <button class=\"postMedia__nav is-next\" type=\"button\" data-carousel-next aria-label=\"Image suivante\">&rsaquo;</button>
        <div class=\"postMedia__count\"><span data-carousel-current>1</span>/<span>{{ postImages|length }}</span></div>
      {% endif %}
    </div>
  {% endif %}

  <div class=\"postReactionsSummary\">
    <span>{{ post_data.likes_count }} J'aime</span>
    <span>{{ post_data.comments_count }} commentaires</span>
  </div>

  <div class=\"postReactionsBar\">
    {% if viewer_user %}
      <form method=\"post\" action=\"{{ path(like_route, {id: postId}) }}\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(like_token_prefix ~ postId) }}\">
        <input type=\"hidden\" name=\"_redirect\" value=\"{{ redirectUri }}\">
        {% if profile_id is defined %}
          <input type=\"hidden\" name=\"profile_id\" value=\"{{ profile_id }}\">
        {% endif %}
        <button class=\"reactionBtn reactionBtn--heart {{ post_data.is_liked_by_viewer ? 'is-active' : '' }}\" type=\"submit\">
          <span class=\"reactionIcon\">♥</span>
          <span>J'aime</span>
        </button>
      </form>

      <form method=\"post\" action=\"{{ path(comment_route, {id: postId}) }}\" class=\"commentInlineForm\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(comment_token_prefix ~ postId) }}\">
        <input type=\"hidden\" name=\"_redirect\" value=\"{{ redirectUri }}\">
        {% if profile_id is defined %}
          <input type=\"hidden\" name=\"profile_id\" value=\"{{ profile_id }}\">
        {% endif %}
        <input class=\"input\" type=\"text\" name=\"content_text\" placeholder=\"Ecrire un commentaire...\" required>
        <button class=\"reactionBtn\" type=\"submit\">Commenter</button>
      </form>
    {% else %}
      <a class=\"btn btn--ghost\" href=\"{{ path('front_login', {'_target_path': redirectUri}) }}\">Connectez-vous pour interagir</a>
    {% endif %}
  </div>

  {% if viewer_user %}
    <form method=\"post\" action=\"{{ path(report_route, {id: postId}) }}\" class=\"postReportBox\" data-post-report-form hidden>
      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(report_token_prefix ~ postId) }}\">
      <input type=\"hidden\" name=\"_redirect\" value=\"{{ redirectUri }}\">
      {% if profile_id is defined %}
        <input type=\"hidden\" name=\"profile_id\" value=\"{{ profile_id }}\">
      {% endif %}
      <input class=\"input\" type=\"text\" name=\"reason\" placeholder=\"Raison du signalement\" maxlength=\"255\" required>
      <div class=\"postReportBox__actions\">
        <button class=\"reactionBtn reactionBtn--danger\" type=\"submit\">Envoyer report</button>
        <button class=\"reactionBtn\" type=\"button\" data-post-report-cancel>Annuler</button>
      </div>
    </form>
  {% endif %}

  {% if comments is not empty %}
    <div class=\"postCommentsList\">
      {% for comment in comments %}
        {% set commentAuthor = comment.authorUserId %}
        <div class=\"listItem\">
          <span>
            <b>{{ commentAuthor ? (commentAuthor.displayName ?? commentAuthor.username) : 'Utilisateur' }}</b>
            {{ comment.contentText }}
          </span>
          <span class=\"listItem__meta\">{{ comment.createdAt ? comment.createdAt|date('d/m H:i') : '' }}</span>
        </div>
      {% endfor %}
    </div>
  {% endif %}
</article>
", "front/partials/_post_card.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\partials\\_post_card.html.twig");
    }
}
