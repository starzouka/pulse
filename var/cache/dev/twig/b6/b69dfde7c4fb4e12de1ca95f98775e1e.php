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

/* front/pages/shop.html.twig */
class __TwigTemplate_d61dc4d98f80aad7be27ed7748f438bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/shop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/shop.html.twig"));

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

        yield "PULSE - Boutique";
        
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
        yield "

  ";
        // line 8
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "BOUTIQUE", "hero_title" => "Boutique", "hero_sub" => "Catalogue des produits vendus par les équipes.", "breadcrumb_current" => "Boutique"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Boutique</h1>
          <p>Recherche + filtres prix, stock, équipe vendeuse.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <button class=\"btn btn--soft\">Best sellers</button>
          <button class=\"btn btn--ghost\">Nouveautés</button>
          <button class=\"btn btn--ghost\">Prix</button>
        </div>
      </div>
      <div class=\"panel\">
        <div class=\"filtersRow\">
          <input class=\"input\" type=\"search\" placeholder=\"Rechercher un produit...\" />
          <div class=\"select\"><select><option>Équipe vendeuse</option><option>Nebula Five</option><option>North Hydra</option></select></div>
          <input class=\"input\" type=\"number\" placeholder=\"Prix min\" />
          <input class=\"input\" type=\"number\" placeholder=\"Prix max\" />
          <button class=\"btn btn--ghost\">En stock</button>
          <button class=\"btn btn--ghost\">Actifs</button>
        </div>
      </div>
      <div class=\"cardsGrid\">

    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">89 DT</span>
          <span class=\"chip\">Stock: 14</span>
          <span class=\"chip\">Nebula Five</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Pulse Hoodie — Neon</h4>
        <p class=\"card__desc\">Vendeur: <b>Nebula Five</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\">Détail</a>
          <a class=\"btn btn--primary\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">69 DT</span>
          <span class=\"chip\">Stock: 7</span>
          <span class=\"chip\">North Hydra</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Team Jersey — Pro Edition</h4>
        <p class=\"card__desc\">Vendeur: <b>North Hydra</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\">Détail</a>
          <a class=\"btn btn--primary\" href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">39 DT</span>
          <span class=\"chip\">Stock: 33</span>
          <span class=\"chip\">Aurora Squad</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Mousepad XL — Arena</h4>
        <p class=\"card__desc\">Vendeur: <b>Aurora Squad</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\">Détail</a>
          <a class=\"btn btn--primary\" href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">29 DT</span>
          <span class=\"chip\">Stock: 5</span>
          <span class=\"chip\">Sandstorm</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Cap — Limited Drop</h4>
        <p class=\"card__desc\">Vendeur: <b>Sandstorm</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\">Détail</a>
          <a class=\"btn btn--primary\" href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Ajouter au panier</a>
        </div>
      </div>
    </article>

</div>
      
      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISÉES</h3>
            <div class=\"panel__desc\">Schéma réel + colonnes clés.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>products</b></span><span class=\"listItem__meta\">product_id, team_id, name, price, stock_qty, is_active</span></div><div class=\"listItem\"><span><b>product_images</b></span><span class=\"listItem__meta\">product_id, image_id, position</span></div><div class=\"listItem\"><span><b>teams</b></span><span class=\"listItem__meta\">team_id, name</span></div><div class=\"listItem\"><span><b>cart_items</b></span><span class=\"listItem__meta\">cart_id, product_id, quantity</span></div><div class=\"listItem\"><span><b>carts</b></span><span class=\"listItem__meta\">cart_id, status</span></div>
        </div>
      </div>

    

      ";
        // line 133
        yield from $this->load("front/partials/_footer.html.twig", 133)->unwrap()->yield($context);
        // line 134
        yield "
    </section>
  </main>

  ";
        // line 138
        yield from $this->load("front/partials/_auth_modal.html.twig", 138)->unwrap()->yield($context);
        // line 139
        yield "
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
        return "front/pages/shop.html.twig";
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
        return array (  261 => 139,  259 => 138,  253 => 134,  251 => 133,  227 => 112,  223 => 111,  202 => 93,  198 => 92,  177 => 74,  173 => 73,  152 => 55,  148 => 54,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Boutique{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'BOUTIQUE',
  hero_title: 'Boutique',
  hero_sub: 'Catalogue des produits vendus par les équipes.',
  breadcrumb_current: 'Boutique'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Boutique</h1>
          <p>Recherche + filtres prix, stock, équipe vendeuse.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <button class=\"btn btn--soft\">Best sellers</button>
          <button class=\"btn btn--ghost\">Nouveautés</button>
          <button class=\"btn btn--ghost\">Prix</button>
        </div>
      </div>
      <div class=\"panel\">
        <div class=\"filtersRow\">
          <input class=\"input\" type=\"search\" placeholder=\"Rechercher un produit...\" />
          <div class=\"select\"><select><option>Équipe vendeuse</option><option>Nebula Five</option><option>North Hydra</option></select></div>
          <input class=\"input\" type=\"number\" placeholder=\"Prix min\" />
          <input class=\"input\" type=\"number\" placeholder=\"Prix max\" />
          <button class=\"btn btn--ghost\">En stock</button>
          <button class=\"btn btn--ghost\">Actifs</button>
        </div>
      </div>
      <div class=\"cardsGrid\">

    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">89 DT</span>
          <span class=\"chip\">Stock: 14</span>
          <span class=\"chip\">Nebula Five</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Pulse Hoodie — Neon</h4>
        <p class=\"card__desc\">Vendeur: <b>Nebula Five</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail') }}\">Détail</a>
          <a class=\"btn btn--primary\" href=\"{{ path('front_login') }}\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">69 DT</span>
          <span class=\"chip\">Stock: 7</span>
          <span class=\"chip\">North Hydra</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Team Jersey — Pro Edition</h4>
        <p class=\"card__desc\">Vendeur: <b>North Hydra</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail') }}\">Détail</a>
          <a class=\"btn btn--primary\" href=\"{{ path('front_login') }}\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">39 DT</span>
          <span class=\"chip\">Stock: 33</span>
          <span class=\"chip\">Aurora Squad</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Mousepad XL — Arena</h4>
        <p class=\"card__desc\">Vendeur: <b>Aurora Squad</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail') }}\">Détail</a>
          <a class=\"btn btn--primary\" href=\"{{ path('front_login') }}\">Ajouter au panier</a>
        </div>
      </div>
    </article>


    <article class=\"card card--product\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_p4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--price\">29 DT</span>
          <span class=\"chip\">Stock: 5</span>
          <span class=\"chip\">Sandstorm</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Cap — Limited Drop</h4>
        <p class=\"card__desc\">Vendeur: <b>Sandstorm</b></p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_product_detail') }}\">Détail</a>
          <a class=\"btn btn--primary\" href=\"{{ path('front_login') }}\">Ajouter au panier</a>
        </div>
      </div>
    </article>

</div>
      
      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISÉES</h3>
            <div class=\"panel__desc\">Schéma réel + colonnes clés.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>products</b></span><span class=\"listItem__meta\">product_id, team_id, name, price, stock_qty, is_active</span></div><div class=\"listItem\"><span><b>product_images</b></span><span class=\"listItem__meta\">product_id, image_id, position</span></div><div class=\"listItem\"><span><b>teams</b></span><span class=\"listItem__meta\">team_id, name</span></div><div class=\"listItem\"><span><b>cart_items</b></span><span class=\"listItem__meta\">cart_id, product_id, quantity</span></div><div class=\"listItem\"><span><b>carts</b></span><span class=\"listItem__meta\">cart_id, status</span></div>
        </div>
      </div>

    

      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/shop.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\shop.html.twig");
    }
}
