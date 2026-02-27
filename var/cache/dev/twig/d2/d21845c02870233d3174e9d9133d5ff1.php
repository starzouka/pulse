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

/* front/pages/captain-product-edit.html.twig */
class __TwigTemplate_ae2e710340824b7c768aa018ac93e38a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-product-edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-product-edit.html.twig"));

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

        yield "PULSE - Modifier produit";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Modifier produit", "hero_sub" => "Mise a jour complete du produit selectionne.", "breadcrumb_current" => "Modifier produit"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "products", "active_team" =>         // line 18
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 18, $this->source); })())]));
        // line 20
        yield "
        <div>
          ";
        // line 22
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 23
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 23, $this->source); })()), "active_team" =>         // line 24
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 24, $this->source); })()), "selector_route" => "front_captain_product_edit"]));
        // line 27
        yield "
          <form class=\"panel\" method=\"post\" action=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "productId", [], "any", false, false, false, 28), "team" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 28, $this->source); })()), "teamId", [], "any", false, false, false, 28)]), "html", null, true);
        yield "\" enctype=\"multipart/form-data\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">PRODUIT #";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "productId", [], "any", false, false, false, 31), "html", null, true);
        yield "</h3>
                <div class=\"panel__desc\">Champs: name, description, price, stock, sku, status.</div>
              </div>
            </div>

            <div class=\"formGrid\" style=\"margin-top:12px;\">
              <label class=\"field\">
                <span class=\"field__label\">Nom *</span>
                <input class=\"input\" type=\"text\" name=\"name\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
        yield "\" required maxlength=\"150\">
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Prix (DT) *</span>
                <input class=\"input\" type=\"number\" name=\"price\" min=\"0\" step=\"0.01\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "price", [], "any", false, false, false, 44), "html", null, true);
        yield "\" required>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Stock *</span>
                <input class=\"input\" type=\"number\" name=\"stock_qty\" min=\"0\" step=\"1\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "stockQty", [], "any", false, false, false, 49), "html", null, true);
        yield "\" required>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">SKU</span>
                <input class=\"input\" type=\"text\" name=\"sku\" value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 54, $this->source); })()), "sku", [], "any", false, false, false, 54), "html", null, true);
        yield "\" maxlength=\"64\">
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Statut</span>
                <select class=\"input\" name=\"is_active\">
                  <option value=\"1\" ";
        // line 60
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "isActive", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">Actif</option>
                  <option value=\"0\" ";
        // line 61
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), "isActive", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("selected") : (""));
        yield ">Inactif</option>
                </select>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Description</span>
                <textarea class=\"textarea\" name=\"description\" rows=\"5\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67), "html", null, true);
        yield "</textarea>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Ajouter des images</span>
                <input class=\"input\" type=\"file\" name=\"images[]\" accept=\"image/png,image/jpeg,image/webp,image/gif\" multiple>
              </label>
            </div>

            <div class=\"formActions\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"_token\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("captain_product_edit_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 77, $this->source); })()), "productId", [], "any", false, false, false, 77))), "html", null, true);
        yield "\">
              <input type=\"hidden\" name=\"team_id\" value=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 78, $this->source); })()), "teamId", [], "any", false, false, false, 78), "html", null, true);
        yield "\">
              <button class=\"btn btn--primary\" type=\"submit\">Mettre a jour</button>
              <a class=\"btn btn--ghost\" href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_products", ["team" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 80, $this->source); })()), "teamId", [], "any", false, false, false, 80)]), "html", null, true);
        yield "\">Retour liste</a>
            </div>
          </form>

          <section class=\"panel\">
            <h3 class=\"panel__title\">IMAGES ACTUELLES</h3>
            <div class=\"cardsGrid\" style=\"margin-top:10px;\">
              ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["product_images"]) || array_key_exists("product_images", $context) ? $context["product_images"] : (function () { throw new RuntimeError('Variable "product_images" does not exist.', 87, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 88
            yield "                ";
            $context["imagePath"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "fileUrl", [], "any", false, false, false, 88)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["image"], "fileUrl", [], "any", false, false, false, 88)) : (""));
            // line 89
            yield "                ";
            $context["imageUrl"] = (((($tmp = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 89, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 89, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 89, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 89, $this->source); })()))))) : ((("https://picsum.photos/seed/product_image_" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "imageId", [], "any", false, false, false, 89)) . "/900/700")));
            // line 90
            yield "                <article class=\"card\">
                  <div class=\"card__media\" data-bg=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 91, $this->source); })()), "html", null, true);
            yield "\"></div>
                  <div class=\"card__body\">
                    <div class=\"card__metaRow\">
                      <span class=\"metaPill\">Image #";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "imageId", [], "any", false, false, false, 94), "html", null, true);
            yield "</span>
                    </div>
                    <form method=\"post\" action=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_product_image_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 96, $this->source); })()), "productId", [], "any", false, false, false, 96), "imageId" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "imageId", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\">
                      <input type=\"hidden\" name=\"_token\" value=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("captain_product_remove_image_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 97, $this->source); })()), "productId", [], "any", false, false, false, 97)) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "imageId", [], "any", false, false, false, 97))), "html", null, true);
            yield "\">
                      <input type=\"hidden\" name=\"team_id\" value=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 98, $this->source); })()), "teamId", [], "any", false, false, false, 98), "html", null, true);
            yield "\">
                      <button class=\"btn btn--ghost\" type=\"submit\">Retirer image</button>
                    </form>
                  </div>
                </article>
              ";
            $context['_iterated'] = true;
        }
        // line 103
        if (!$context['_iterated']) {
            // line 104
            yield "                <div class=\"emptyState\">Aucune image associee.</div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "            </div>
          </section>
        </div>
      </div>

      ";
        // line 111
        yield from $this->load("front/partials/_footer.html.twig", 111)->unwrap()->yield($context);
        // line 112
        yield "    </section>
  </main>

  ";
        // line 115
        yield from $this->load("front/partials/_auth_modal.html.twig", 115)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/captain-product-edit.html.twig";
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
        return array (  284 => 115,  279 => 112,  277 => 111,  270 => 106,  263 => 104,  261 => 103,  251 => 98,  247 => 97,  243 => 96,  238 => 94,  232 => 91,  229 => 90,  226 => 89,  223 => 88,  218 => 87,  208 => 80,  203 => 78,  199 => 77,  186 => 67,  177 => 61,  173 => 60,  164 => 54,  156 => 49,  148 => 44,  140 => 39,  129 => 31,  123 => 28,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Modifier produit{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'CAPITAINE',
    hero_title: 'Modifier produit',
    hero_sub: 'Mise a jour complete du produit selectionne.',
    breadcrumb_current: 'Modifier produit'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_captain_side_nav.html.twig' with {
          active: 'products',
          active_team: active_team
        } %}

        <div>
          {% include 'front/partials/_captain_team_selector.html.twig' with {
            captain_teams: captain_teams,
            active_team: active_team,
            selector_route: 'front_captain_product_edit'
          } %}

          <form class=\"panel\" method=\"post\" action=\"{{ path('front_captain_product_edit', {id: product.productId, team: active_team.teamId}) }}\" enctype=\"multipart/form-data\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">PRODUIT #{{ product.productId }}</h3>
                <div class=\"panel__desc\">Champs: name, description, price, stock, sku, status.</div>
              </div>
            </div>

            <div class=\"formGrid\" style=\"margin-top:12px;\">
              <label class=\"field\">
                <span class=\"field__label\">Nom *</span>
                <input class=\"input\" type=\"text\" name=\"name\" value=\"{{ product.name }}\" required maxlength=\"150\">
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Prix (DT) *</span>
                <input class=\"input\" type=\"number\" name=\"price\" min=\"0\" step=\"0.01\" value=\"{{ product.price }}\" required>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Stock *</span>
                <input class=\"input\" type=\"number\" name=\"stock_qty\" min=\"0\" step=\"1\" value=\"{{ product.stockQty }}\" required>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">SKU</span>
                <input class=\"input\" type=\"text\" name=\"sku\" value=\"{{ product.sku }}\" maxlength=\"64\">
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Statut</span>
                <select class=\"input\" name=\"is_active\">
                  <option value=\"1\" {{ product.isActive ? 'selected' : '' }}>Actif</option>
                  <option value=\"0\" {{ not product.isActive ? 'selected' : '' }}>Inactif</option>
                </select>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Description</span>
                <textarea class=\"textarea\" name=\"description\" rows=\"5\">{{ product.description }}</textarea>
              </label>

              <label class=\"field\">
                <span class=\"field__label\">Ajouter des images</span>
                <input class=\"input\" type=\"file\" name=\"images[]\" accept=\"image/png,image/jpeg,image/webp,image/gif\" multiple>
              </label>
            </div>

            <div class=\"formActions\" style=\"margin-top:12px;\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_product_edit_' ~ product.productId) }}\">
              <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
              <button class=\"btn btn--primary\" type=\"submit\">Mettre a jour</button>
              <a class=\"btn btn--ghost\" href=\"{{ path('front_captain_products', {team: active_team.teamId}) }}\">Retour liste</a>
            </div>
          </form>

          <section class=\"panel\">
            <h3 class=\"panel__title\">IMAGES ACTUELLES</h3>
            <div class=\"cardsGrid\" style=\"margin-top:10px;\">
              {% for image in product_images %}
                {% set imagePath = image.fileUrl ?: '' %}
                {% set imageUrl = imagePath ? (imagePath starts with 'http' ? imagePath : asset(imagePath)) : 'https://picsum.photos/seed/product_image_' ~ image.imageId ~ '/900/700' %}
                <article class=\"card\">
                  <div class=\"card__media\" data-bg=\"{{ imageUrl }}\"></div>
                  <div class=\"card__body\">
                    <div class=\"card__metaRow\">
                      <span class=\"metaPill\">Image #{{ image.imageId }}</span>
                    </div>
                    <form method=\"post\" action=\"{{ path('front_captain_product_image_remove', {id: product.productId, imageId: image.imageId}) }}\">
                      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_product_remove_image_' ~ product.productId ~ '_' ~ image.imageId) }}\">
                      <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
                      <button class=\"btn btn--ghost\" type=\"submit\">Retirer image</button>
                    </form>
                  </div>
                </article>
              {% else %}
                <div class=\"emptyState\">Aucune image associee.</div>
              {% endfor %}
            </div>
          </section>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}

", "front/pages/captain-product-edit.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\captain-product-edit.html.twig");
    }
}
