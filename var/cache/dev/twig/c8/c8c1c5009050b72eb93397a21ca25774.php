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

/* front/pages/product-detail.html.twig */
class __TwigTemplate_e5cb6c65d96ffc8797c175c52a12b918 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/product-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/product-detail.html.twig"));

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

        yield "PULSE - Detail produit";
        
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
        $context["productId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "productId", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "productId", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "productId", [], "any", false, false, false, 6)) : (0));
        // line 7
        yield "  ";
        $context["team"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "teamId", [], "any", false, false, false, 7);
        // line 8
        yield "  ";
        $context["teamId"] = (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 8, $this->source); })()), "teamId", [], "any", false, false, false, 8)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 8, $this->source); })()), "teamId", [], "any", false, false, false, 8)) : (0))) : (0));
        // line 9
        yield "
  ";
        // line 10
        yield from $this->load("front/partials/_hero_mini.html.twig", 10)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "PRODUIT", "hero_title" => CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "hero_sub" => "Fiche produit complete avec ajout panier.", "breadcrumb_current" => "Detail produit"]));
        // line 16
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                yield "          <div class=\"listItem\">
            <span>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
            <span class=\"badge ";
                // line 23
                yield ((($context["label"] == "error")) ? ("badge--danger") : (((($context["label"] == "info")) ? ("badge--info") : ("badge--success"))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
      <div class=\"layout\">
        <section class=\"panel\">
          <div style=\"display:flex; gap:16px; align-items:flex-start; flex-wrap:wrap;\">
            <div class=\"productDetailMedia\">
              ";
        // line 32
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["product_images"]) || array_key_exists("product_images", $context) ? $context["product_images"] : (function () { throw new RuntimeError('Variable "product_images" does not exist.', 32, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                ";
            $context["firstImage"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["product_images"]) || array_key_exists("product_images", $context) ? $context["product_images"] : (function () { throw new RuntimeError('Variable "product_images" does not exist.', 33, $this->source); })()));
            // line 34
            yield "                ";
            $context["firstPath"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["firstImage"] ?? null), "fileUrl", [], "any", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 34, $this->source); })()), "fileUrl", [], "any", false, false, false, 34)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 34, $this->source); })()), "fileUrl", [], "any", false, false, false, 34)) : (""));
            // line 35
            yield "                ";
            $context["firstUrl"] = (((($tmp = (isset($context["firstPath"]) || array_key_exists("firstPath", $context) ? $context["firstPath"] : (function () { throw new RuntimeError('Variable "firstPath" does not exist.', 35, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["firstPath"]) || array_key_exists("firstPath", $context) ? $context["firstPath"] : (function () { throw new RuntimeError('Variable "firstPath" does not exist.', 35, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["firstPath"]) || array_key_exists("firstPath", $context) ? $context["firstPath"] : (function () { throw new RuntimeError('Variable "firstPath" does not exist.', 35, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["firstPath"]) || array_key_exists("firstPath", $context) ? $context["firstPath"] : (function () { throw new RuntimeError('Variable "firstPath" does not exist.', 35, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_product_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 35, $this->source); })())) . "/700/700")));
            // line 36
            yield "              ";
        } else {
            // line 37
            yield "                ";
            $context["firstUrl"] = (("https://picsum.photos/seed/pulse_product_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 37, $this->source); })())) . "/700/700");
            // line 38
            yield "              ";
        }
        // line 39
        yield "              <div class=\"avatarLg\" data-avatar=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstUrl"]) || array_key_exists("firstUrl", $context) ? $context["firstUrl"] : (function () { throw new RuntimeError('Variable "firstUrl" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "\"></div>
            </div>

            <div style=\"flex:1; min-width:260px;\">
              <h3 style=\"margin:0;\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        yield "</h3>
              <div class=\"muted\">
                Vendeur: ";
        // line 45
        yield (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 45, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true)) : ("Equipe"));
        yield " | Stock: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "stockQty", [], "any", false, false, false, 45), "html", null, true);
        yield "
              </div>
              <div class=\"badge badge--warning\" style=\"margin-top:8px;\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 47, $this->source); })()), "price", [], "any", false, false, false, 47), 2, ".", " "), "html", null, true);
        yield " DT</div>

              ";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_add", ["id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 50, $this->source); })())]), "html", null, true);
            yield "\" style=\"margin-top:12px; display:flex; gap:8px; align-items:center; flex-wrap:wrap;\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_add_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 51, $this->source); })()))), "html", null, true);
            yield "\">
                  <input class=\"input\" type=\"number\" min=\"1\" max=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 52, $this->source); })()), "stockQty", [], "any", false, false, false, 52), "html", null, true);
            yield "\" name=\"quantity\" value=\"1\" style=\"max-width:100px;\">
                  <button class=\"btn btn--primary\" type=\"submit\" ";
            // line 53
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "stockQty", [], "any", false, false, false, 53) <= 0)) ? ("disabled") : (""));
            yield ">
                    ";
            // line 54
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 54, $this->source); })()), "stockQty", [], "any", false, false, false, 54) <= 0)) ? ("Rupture de stock") : ("Ajouter au panier"));
            yield "
                  </button>
                  <a class=\"btn btn--ghost\" href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart");
            yield "\">Mon panier</a>
                </form>
              ";
        } else {
            // line 59
            yield "                <div style=\"margin-top:12px;\">
                  <a class=\"btn btn--primary\" href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login", ["_target_path" => (isset($context["login_target_path"]) || array_key_exists("login_target_path", $context) ? $context["login_target_path"] : (function () { throw new RuntimeError('Variable "login_target_path" does not exist.', 60, $this->source); })())]), "html", null, true);
            yield "\">Se connecter pour acheter</a>
                </div>
              ";
        }
        // line 63
        yield "
              ";
        // line 64
        if (((isset($context["cart_quantity_for_product"]) || array_key_exists("cart_quantity_for_product", $context) ? $context["cart_quantity_for_product"] : (function () { throw new RuntimeError('Variable "cart_quantity_for_product" does not exist.', 64, $this->source); })()) > 0)) {
            // line 65
            yield "                <div class=\"listItem\" style=\"margin-top:12px;\">
                  <span>Deja dans votre panier</span>
                  <span class=\"badge badge--info\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cart_quantity_for_product"]) || array_key_exists("cart_quantity_for_product", $context) ? $context["cart_quantity_for_product"] : (function () { throw new RuntimeError('Variable "cart_quantity_for_product" does not exist.', 67, $this->source); })()), "html", null, true);
            yield "</span>
                </div>
              ";
        }
        // line 70
        yield "            </div>
          </div>

          <p class=\"muted\" style=\"margin-top:12px;\">";
        // line 73
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", true, true, false, 73) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73), "html", null, true)) : ("Aucune description disponible."));
        yield "</p>

          ";
        // line 75
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["product_images"]) || array_key_exists("product_images", $context) ? $context["product_images"] : (function () { throw new RuntimeError('Variable "product_images" does not exist.', 75, $this->source); })())) > 1)) {
            // line 76
            yield "            <div class=\"avatarRow\" style=\"margin-top:12px;\">
              ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["product_images"]) || array_key_exists("product_images", $context) ? $context["product_images"] : (function () { throw new RuntimeError('Variable "product_images" does not exist.', 77, $this->source); })()));
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
                // line 78
                yield "                ";
                $context["imagePath"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "fileUrl", [], "any", true, true, false, 78) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["image"], "fileUrl", [], "any", false, false, false, 78)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["image"], "fileUrl", [], "any", false, false, false, 78)) : (""));
                // line 79
                yield "                ";
                $context["imageUrl"] = (((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v2 = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 79, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 79, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 79, $this->source); })()))))) : ((((("https://picsum.photos/seed/pulse_product_gallery_" . (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 79, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 79)) . "/300/300")));
                // line 80
                yield "                <div class=\"avatar\" data-avatar=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 80, $this->source); })()), "html", null, true);
                yield "\"></div>
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
            // line 82
            yield "            </div>
          ";
        }
        // line 84
        yield "        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">DETAILS</h3>
          <div class=\"list\">
            <div class=\"listItem\"><span>SKU</span><span class=\"listItem__meta\">";
        // line 89
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sku", [], "any", true, true, false, 89) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 89, $this->source); })()), "sku", [], "any", false, false, false, 89)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 89, $this->source); })()), "sku", [], "any", false, false, false, 89), "html", null, true)) : ("N/A"));
        yield "</span></div>
            <div class=\"listItem\"><span>Equipe vendeuse</span><span class=\"listItem__meta\">";
        // line 90
        yield (((($tmp = (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 90, $this->source); })()), "name", [], "any", false, false, false, 90), "html", null, true)) : ("-"));
        yield "</span></div>
            <div class=\"listItem\"><span>Statut</span><span class=\"listItem__meta\">";
        // line 91
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 91, $this->source); })()), "isActive", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "</span></div>
          </div>

          <div class=\"panel__actions\" style=\"margin-top:12px; display:flex; gap:8px; flex-wrap:wrap;\">
            <a class=\"btn btn--ghost\" href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
        yield "\">Retour boutique</a>
            ";
        // line 96
        if (((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 96, $this->source); })()) > 0)) {
            // line 97
            yield "              <a class=\"btn btn--ghost\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 97, $this->source); })())]), "html", null, true);
            yield "\">Voir equipe</a>
            ";
        }
        // line 99
        yield "            <a class=\"btn btn--ghost\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\">Mes commandes</a>
          </div>
        </aside>
      </div>

      ";
        // line 104
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["related_products"]) || array_key_exists("related_products", $context) ? $context["related_products"] : (function () { throw new RuntimeError('Variable "related_products" does not exist.', 104, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "        <section class=\"panel\" style=\"margin-top:12px;\">
          <div class=\"panel__head\">
            <div>
              <h3 class=\"panel__title\">Produits similaires</h3>
              <div class=\"panel__desc\">Autres produits de la meme equipe.</div>
            </div>
          </div>

          <div class=\"cardsGrid\" style=\"margin-top:12px;\">
            ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["related_products"]) || array_key_exists("related_products", $context) ? $context["related_products"] : (function () { throw new RuntimeError('Variable "related_products" does not exist.', 114, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 115
                yield "              ";
                $context["relatedId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["related"], "productId", [], "any", true, true, false, 115) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["related"], "productId", [], "any", false, false, false, 115)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["related"], "productId", [], "any", false, false, false, 115)) : (0));
                // line 116
                yield "              ";
                $context["relatedImage"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["related_primary_images_by_product_id"] ?? null), (isset($context["relatedId"]) || array_key_exists("relatedId", $context) ? $context["relatedId"] : (function () { throw new RuntimeError('Variable "relatedId" does not exist.', 116, $this->source); })()), [], "array", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["related_primary_images_by_product_id"]) || array_key_exists("related_primary_images_by_product_id", $context) ? $context["related_primary_images_by_product_id"] : (function () { throw new RuntimeError('Variable "related_primary_images_by_product_id" does not exist.', 116, $this->source); })()), (isset($context["relatedId"]) || array_key_exists("relatedId", $context) ? $context["relatedId"] : (function () { throw new RuntimeError('Variable "relatedId" does not exist.', 116, $this->source); })()), [], "array", false, false, false, 116), null)) : (null));
                // line 117
                yield "              ";
                $context["relatedPath"] = (((($tmp = (isset($context["relatedImage"]) || array_key_exists("relatedImage", $context) ? $context["relatedImage"] : (function () { throw new RuntimeError('Variable "relatedImage" does not exist.', 117, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["relatedImage"]) || array_key_exists("relatedImage", $context) ? $context["relatedImage"] : (function () { throw new RuntimeError('Variable "relatedImage" does not exist.', 117, $this->source); })()), "fileUrl", [], "any", false, false, false, 117)) : (""));
                // line 118
                yield "              ";
                $context["relatedUrl"] = (((($tmp = (isset($context["relatedPath"]) || array_key_exists("relatedPath", $context) ? $context["relatedPath"] : (function () { throw new RuntimeError('Variable "relatedPath" does not exist.', 118, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v4 = (isset($context["relatedPath"]) || array_key_exists("relatedPath", $context) ? $context["relatedPath"] : (function () { throw new RuntimeError('Variable "relatedPath" does not exist.', 118, $this->source); })())) && is_string($_v5 = "http") && str_starts_with($_v4, $_v5))) ? ((isset($context["relatedPath"]) || array_key_exists("relatedPath", $context) ? $context["relatedPath"] : (function () { throw new RuntimeError('Variable "relatedPath" does not exist.', 118, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["relatedPath"]) || array_key_exists("relatedPath", $context) ? $context["relatedPath"] : (function () { throw new RuntimeError('Variable "relatedPath" does not exist.', 118, $this->source); })()))))) : ((("https://picsum.photos/seed/pulse_related_product_" . (isset($context["relatedId"]) || array_key_exists("relatedId", $context) ? $context["relatedId"] : (function () { throw new RuntimeError('Variable "relatedId" does not exist.', 118, $this->source); })())) . "/1200/800")));
                // line 119
                yield "
              <article class=\"card card--product\">
                <div class=\"card__media\" data-bg=\"";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["relatedUrl"]) || array_key_exists("relatedUrl", $context) ? $context["relatedUrl"] : (function () { throw new RuntimeError('Variable "relatedUrl" does not exist.', 121, $this->source); })()), "html", null, true);
                yield "\">
                  <div class=\"card__chips\">
                    <span class=\"chip chip--price\">";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["related"], "price", [], "any", false, false, false, 123), 2, ".", " "), "html", null, true);
                yield " DT</span>
                    <span class=\"chip\">Stock: ";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["related"], "stockQty", [], "any", false, false, false, 124), "html", null, true);
                yield "</span>
                  </div>
                </div>

                <div class=\"card__body\">
                  <h4 class=\"card__title\">";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["related"], "name", [], "any", false, false, false, 129), "html", null, true);
                yield "</h4>
                  <p class=\"card__desc\">";
                // line 130
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["related"], "description", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["related"], "description", [], "any", false, false, false, 130), 0, 78) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["related"], "description", [], "any", false, false, false, 130)) > 78)) ? ("...") : (""))), "html", null, true)) : ("Produit de la meme equipe."));
                yield "</p>
                  <div class=\"card__actions\">
                    <a class=\"btn btn--ghost\" href=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail", ["id" => (isset($context["relatedId"]) || array_key_exists("relatedId", $context) ? $context["relatedId"] : (function () { throw new RuntimeError('Variable "relatedId" does not exist.', 132, $this->source); })())]), "html", null, true);
                yield "\">Voir detail</a>
                  </div>
                </div>
              </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['related'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "          </div>
        </section>
      ";
        }
        // line 140
        yield "
      ";
        // line 141
        yield from $this->load("front/partials/_footer.html.twig", 141)->unwrap()->yield($context);
        // line 142
        yield "    </section>
  </main>

  ";
        // line 145
        yield from $this->load("front/partials/_auth_modal.html.twig", 145)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/product-detail.html.twig";
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
        return array (  446 => 145,  441 => 142,  439 => 141,  436 => 140,  431 => 137,  420 => 132,  415 => 130,  411 => 129,  403 => 124,  399 => 123,  394 => 121,  390 => 119,  387 => 118,  384 => 117,  381 => 116,  378 => 115,  374 => 114,  363 => 105,  361 => 104,  352 => 99,  346 => 97,  344 => 96,  340 => 95,  333 => 91,  329 => 90,  325 => 89,  318 => 84,  314 => 82,  297 => 80,  294 => 79,  291 => 78,  274 => 77,  271 => 76,  269 => 75,  264 => 73,  259 => 70,  253 => 67,  249 => 65,  247 => 64,  244 => 63,  238 => 60,  235 => 59,  229 => 56,  224 => 54,  220 => 53,  216 => 52,  212 => 51,  207 => 50,  205 => 49,  200 => 47,  193 => 45,  188 => 43,  180 => 39,  177 => 38,  174 => 37,  171 => 36,  168 => 35,  165 => 34,  162 => 33,  160 => 32,  153 => 27,  147 => 26,  136 => 23,  132 => 22,  129 => 21,  124 => 20,  120 => 19,  115 => 16,  113 => 12,  112 => 10,  109 => 9,  106 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Detail produit{% endblock %}

{% block body %}
  {% set productId = product.productId ?? 0 %}
  {% set team = product.teamId %}
  {% set teamId = team ? (team.teamId ?? 0) : 0 %}

  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'PRODUIT',
    hero_title: product.name,
    hero_sub: 'Fiche produit complete avec ajout panier.',
    breadcrumb_current: 'Detail produit'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      {% for label, messages in app.flashes %}
        {% for message in messages %}
          <div class=\"listItem\">
            <span>{{ message }}</span>
            <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'info' ? 'badge--info' : 'badge--success') }}\">{{ label|upper }}</span>
          </div>
        {% endfor %}
      {% endfor %}

      <div class=\"layout\">
        <section class=\"panel\">
          <div style=\"display:flex; gap:16px; align-items:flex-start; flex-wrap:wrap;\">
            <div class=\"productDetailMedia\">
              {% if product_images is not empty %}
                {% set firstImage = product_images|first %}
                {% set firstPath = firstImage.fileUrl ?? '' %}
                {% set firstUrl = firstPath ? (firstPath starts with 'http' ? firstPath : asset(firstPath)) : 'https://picsum.photos/seed/pulse_product_' ~ productId ~ '/700/700' %}
              {% else %}
                {% set firstUrl = 'https://picsum.photos/seed/pulse_product_' ~ productId ~ '/700/700' %}
              {% endif %}
              <div class=\"avatarLg\" data-avatar=\"{{ firstUrl }}\"></div>
            </div>

            <div style=\"flex:1; min-width:260px;\">
              <h3 style=\"margin:0;\">{{ product.name }}</h3>
              <div class=\"muted\">
                Vendeur: {{ team ? team.name : 'Equipe' }} | Stock: {{ product.stockQty }}
              </div>
              <div class=\"badge badge--warning\" style=\"margin-top:8px;\">{{ product.price|number_format(2, '.', ' ') }} DT</div>

              {% if app.user %}
                <form method=\"post\" action=\"{{ path('front_cart_add', {id: productId}) }}\" style=\"margin-top:12px; display:flex; gap:8px; align-items:center; flex-wrap:wrap;\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_add_' ~ productId) }}\">
                  <input class=\"input\" type=\"number\" min=\"1\" max=\"{{ product.stockQty }}\" name=\"quantity\" value=\"1\" style=\"max-width:100px;\">
                  <button class=\"btn btn--primary\" type=\"submit\" {{ product.stockQty <= 0 ? 'disabled' : '' }}>
                    {{ product.stockQty <= 0 ? 'Rupture de stock' : 'Ajouter au panier' }}
                  </button>
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_cart') }}\">Mon panier</a>
                </form>
              {% else %}
                <div style=\"margin-top:12px;\">
                  <a class=\"btn btn--primary\" href=\"{{ path('front_login', {'_target_path': login_target_path}) }}\">Se connecter pour acheter</a>
                </div>
              {% endif %}

              {% if cart_quantity_for_product > 0 %}
                <div class=\"listItem\" style=\"margin-top:12px;\">
                  <span>Deja dans votre panier</span>
                  <span class=\"badge badge--info\">{{ cart_quantity_for_product }}</span>
                </div>
              {% endif %}
            </div>
          </div>

          <p class=\"muted\" style=\"margin-top:12px;\">{{ product.description ?? 'Aucune description disponible.' }}</p>

          {% if product_images|length > 1 %}
            <div class=\"avatarRow\" style=\"margin-top:12px;\">
              {% for image in product_images %}
                {% set imagePath = image.fileUrl ?? '' %}
                {% set imageUrl = imagePath ? (imagePath starts with 'http' ? imagePath : asset(imagePath)) : 'https://picsum.photos/seed/pulse_product_gallery_' ~ productId ~ '_' ~ loop.index0 ~ '/300/300' %}
                <div class=\"avatar\" data-avatar=\"{{ imageUrl }}\"></div>
              {% endfor %}
            </div>
          {% endif %}
        </section>

        <aside class=\"panel\">
          <h3 class=\"panel__title\">DETAILS</h3>
          <div class=\"list\">
            <div class=\"listItem\"><span>SKU</span><span class=\"listItem__meta\">{{ product.sku ?? 'N/A' }}</span></div>
            <div class=\"listItem\"><span>Equipe vendeuse</span><span class=\"listItem__meta\">{{ team ? team.name : '-' }}</span></div>
            <div class=\"listItem\"><span>Statut</span><span class=\"listItem__meta\">{{ product.isActive ? 'ACTIF' : 'INACTIF' }}</span></div>
          </div>

          <div class=\"panel__actions\" style=\"margin-top:12px; display:flex; gap:8px; flex-wrap:wrap;\">
            <a class=\"btn btn--ghost\" href=\"{{ path('front_shop') }}\">Retour boutique</a>
            {% if teamId > 0 %}
              <a class=\"btn btn--ghost\" href=\"{{ path('front_team_detail', {id: teamId}) }}\">Voir equipe</a>
            {% endif %}
            <a class=\"btn btn--ghost\" href=\"{{ path('front_orders') }}\">Mes commandes</a>
          </div>
        </aside>
      </div>

      {% if related_products is not empty %}
        <section class=\"panel\" style=\"margin-top:12px;\">
          <div class=\"panel__head\">
            <div>
              <h3 class=\"panel__title\">Produits similaires</h3>
              <div class=\"panel__desc\">Autres produits de la meme equipe.</div>
            </div>
          </div>

          <div class=\"cardsGrid\" style=\"margin-top:12px;\">
            {% for related in related_products %}
              {% set relatedId = related.productId ?? 0 %}
              {% set relatedImage = related_primary_images_by_product_id[relatedId]|default(null) %}
              {% set relatedPath = relatedImage ? relatedImage.fileUrl : '' %}
              {% set relatedUrl = relatedPath ? (relatedPath starts with 'http' ? relatedPath : asset(relatedPath)) : 'https://picsum.photos/seed/pulse_related_product_' ~ relatedId ~ '/1200/800' %}

              <article class=\"card card--product\">
                <div class=\"card__media\" data-bg=\"{{ relatedUrl }}\">
                  <div class=\"card__chips\">
                    <span class=\"chip chip--price\">{{ related.price|number_format(2, '.', ' ') }} DT</span>
                    <span class=\"chip\">Stock: {{ related.stockQty }}</span>
                  </div>
                </div>

                <div class=\"card__body\">
                  <h4 class=\"card__title\">{{ related.name }}</h4>
                  <p class=\"card__desc\">{{ related.description ? related.description|slice(0, 78) ~ (related.description|length > 78 ? '...' : '') : 'Produit de la meme equipe.' }}</p>
                  <div class=\"card__actions\">
                    <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail', {id: relatedId}) }}\">Voir detail</a>
                  </div>
                </div>
              </article>
            {% endfor %}
          </div>
        </section>
      {% endif %}

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/product-detail.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\pages\\product-detail.html.twig");
    }
}
