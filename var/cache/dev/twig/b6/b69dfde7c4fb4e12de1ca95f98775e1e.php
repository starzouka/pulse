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

  <header class=\"heroMini\">
    <div class=\"heroFull__bg heroMini__bg\" data-bg=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_fo/img/ll.png"), "html", null, true);
        yield "\"></div>
    <div class=\"heroFull__overlay\"></div>
    <div class=\"heroTop\">
      <a class=\"brand\" href=\"";
        // line 12
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
      <nav class=\"topbar\" aria-label=\"Navigation principale\"><a class=\"topbar__item\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M12 3l9 8h-3v10h-5v-6H11v6H6V11H3l9-8z\"/></svg></span>
          <span class=\"topbar__label\">Accueil</span>
        </a>
<a class=\"topbar__item\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M6 4h12v2H6V4zm2 4h8l1 4H7l1-4zm-2 6h12v2H6v-2zm2 4h8v2H8v-2z\"/></svg></span>
          <span class=\"topbar__label\">Tournois</span>
        </a>
<a class=\"topbar__item\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_games");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 6h10a4 4 0 014 4v2a4 4 0 01-4 4h-1l-2 2H10l-2-2H7a4 4 0 01-4-4v-2a4 4 0 014-4zm2 5a1 1 0 100 2 1 1 0 000-2zm6 0a1 1 0 100 2 1 1 0 000-2z\"/></svg></span>
          <span class=\"topbar__label\">Jeux</span>
        </a>
<a class=\"topbar__item\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_matches");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 3h10v2H7V3zm2 6h6v2H9V9zm-2 5h10v2H7v-2zm2 5h6v2H9v-2z\"/></svg></span>
          <span class=\"topbar__label\">Matchs</span>
        </a>
<a class=\"topbar__item is-active\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 18c-1.1 0-2-.9-2-2V6h2v10h12v2H7zM9 6h10v10H9V6zm2 2v6h6V8h-6z\"/></svg></span>
          <span class=\"topbar__label\">Boutique</span>
        </a>
<a class=\"topbar__item\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_teams");
        yield "\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.95 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z\"/></svg></span>
          <span class=\"topbar__label\">Équipe</span>
        </a></nav>
      <div class=\"heroTop__right\">
        <a class=\"btn btn--ghost\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_register");
        yield "\">S’inscrire</a>
        <button class=\"signInBtn\" id=\"btnOpenAuth\" type=\"button\">
          <span class=\"signInBtn__icon\" aria-hidden=\"true\">
            <svg viewBox=\"0 0 24 24\" class=\"ico\">
              <path d=\"M10 17l1.4-1.4-2.6-2.6H20v-2H8.8l2.6-2.6L10 7l-7 7 7 7zm-6 4h6v-2H4V5h6V3H4a2 2 0 00-2 2v14a2 2 0 002 2z\"/>
            </svg>
          </span>
          <span class=\"signInBtn__text\">SIGN IN</span>
        </button>
        <button class=\"menuBtn\" type=\"button\" aria-label=\"Menu\"><span></span><span></span><span></span></button>
      </div>
    </div>
    <div class=\"heroMini__center\">
      <div class=\"heroKicker\">BOUTIQUE</div>
      <h1 class=\"heroMini__title\">Boutique</h1>
      <div class=\"heroMini__sub\">Catalogue des produits vendus par les équipes.</div>
      <div class=\"breadcrumbs\">
        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\">Accueil</a>
        <span>•</span>
        <span>Boutique</span>
      </div>
    </div>
    <div class=\"heroSlash\" aria-hidden=\"true\"></div>
  </header>


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
        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 99, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 100
            yield "        <article class=\"card card--product\">
          <div class=\"card__media\">
            ";
            // line 102
            $context["image"] = (((($tmp = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productImages", [], "any", false, false, false, 102))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productImages", [], "any", false, false, false, 102)), "image", [], "any", false, false, false, 102)) : (null));
            // line 103
            yield "            ";
            if (((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 103, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 103, $this->source); })()), "fileUrl", [], "any", false, false, false, 103))) {
                // line 104
                yield "              <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 104, $this->source); })()), "fileUrl", [], "any", false, false, false, 104), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 104), "html", null, true);
                yield "\" style=\"width:100%;height:180px;object-fit:cover;border-radius:8px 8px 0 0;\" />
            ";
            } else {
                // line 106
                yield "              <div style=\"width:100%;height:180px;background:#eee;border-radius:8px 8px 0 0;display:flex;align-items:center;justify-content:center;color:#aaa;\">Aucune image</div>
            ";
            }
            // line 108
            yield "            <div class=\"card__chips\">
              <span class=\"chip chip--price\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 109), "html", null, true);
            yield " DT</span>
              <span class=\"chip\">Stock: ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQty", [], "any", false, false, false, 110), "html", null, true);
            yield "</span>
              <span class=\"chip\">";
            // line 111
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "teamId", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "teamId", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true)) : ("—"));
            yield "</span>
            </div>
          </div>
          <div class=\"card__body\">
            <h4 class=\"card__title\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 115), "html", null, true);
            yield "</h4>
            <p class=\"card__desc\">Vendeur: <b>";
            // line 116
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "teamId", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "teamId", [], "any", false, false, false, 116), "name", [], "any", false, false, false, 116), "html", null, true)) : ("—"));
            yield "</b></p>
            <div class=\"card__actions\">
              <a class=\"btn btn--ghost\" href=\"#\">Détail</a>
              <a class=\"btn btn--primary\" href=\"#\">Ajouter au panier</a>
            </div>
          </div>
        </article>
        ";
            $context['_iterated'] = true;
        }
        // line 123
        if (!$context['_iterated']) {
            // line 124
            yield "        <div class=\"alert alert-warning\">Aucun produit disponible.</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "        <div class=\"card__chips\">
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
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\">Détail</a>
          <a class=\"btn btn--primary\" href=\"";
        // line 137
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
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\">Détail</a>
          <a class=\"btn btn--primary\" href=\"";
        // line 156
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
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\">Détail</a>
          <a class=\"btn btn--primary\" href=\"";
        // line 175
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

    

      <footer class=\"footer\">
        <div>© 2026 Pulse — Front-office</div>
        <div class=\"footer__links\">
          <a href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_about");
        yield "\">À propos</a>
          <a href=\"";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_contact");
        yield "\">Contact</a>
          <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_faq");
        yield "\">FAQ</a>
        </div>
      </footer>

    </section>
  </main>

  <div class=\"authModal\" id=\"authModal\" aria-hidden=\"true\">
    <div class=\"authModal__backdrop\" data-close=\"true\"></div>
    <div class=\"authCard\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Connexion\">
      <div class=\"authCard__head\">
        <div>
          <div class=\"authCard__title\">Connexion</div>
          <div class=\"authCard__sub\">Email + mot de passe, puis “mot de passe oublié”.</div>
        </div>
        <button class=\"iconBtn\" data-close=\"true\" aria-label=\"Fermer\">
          <svg viewBox=\"0 0 24 24\" class=\"ico\">
            <path d=\"M18.3 5.7L12 12l6.3 6.3-1.4 1.4L10.6 13.4 4.3 19.7 2.9 18.3 9.2 12 2.9 5.7 4.3 4.3l6.3 6.3 6.3-6.3 1.4 1.4z\"/>
          </svg>
        </button>
      </div>
      <form class=\"authForm\" id=\"loginForm\">
        <label class=\"field\">
          <span class=\"field__label\">Email</span>
          <input type=\"email\" name=\"email\" placeholder=\"ex: you@email.com\" required />
        </label>
        <label class=\"field\">
          <span class=\"field__label\">Mot de passe</span>
          <input type=\"password\" name=\"password\" placeholder=\"••••••••\" required minlength=\"6\" />
        </label>
        <button class=\"btn btn--primary authForm__submit\" type=\"submit\">Se connecter</button>
        <div class=\"authForm__bottom\">
          <a class=\"authLink\" href=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_forgot_password");
        yield "\" id=\"forgotLink\">Mot de passe oublié ?</a>
        </div>
      </form>
    </div>
  </div>

  

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
        return array (  430 => 233,  395 => 201,  391 => 200,  387 => 199,  360 => 175,  356 => 174,  335 => 156,  331 => 155,  310 => 137,  306 => 136,  294 => 126,  287 => 124,  285 => 123,  273 => 116,  269 => 115,  262 => 111,  258 => 110,  254 => 109,  251 => 108,  247 => 106,  239 => 104,  236 => 103,  234 => 102,  230 => 100,  225 => 99,  188 => 65,  168 => 48,  160 => 43,  153 => 39,  146 => 35,  139 => 31,  132 => 27,  125 => 23,  111 => 12,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Boutique{% endblock %}

{% block body %}


  <header class=\"heroMini\">
    <div class=\"heroFull__bg heroMini__bg\" data-bg=\"{{ asset('assets/template_fo/img/ll.png') }}\"></div>
    <div class=\"heroFull__overlay\"></div>
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
      <nav class=\"topbar\" aria-label=\"Navigation principale\"><a class=\"topbar__item\" href=\"{{ path('front_home') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M12 3l9 8h-3v10h-5v-6H11v6H6V11H3l9-8z\"/></svg></span>
          <span class=\"topbar__label\">Accueil</span>
        </a>
<a class=\"topbar__item\" href=\"{{ path('front_tournaments') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M6 4h12v2H6V4zm2 4h8l1 4H7l1-4zm-2 6h12v2H6v-2zm2 4h8v2H8v-2z\"/></svg></span>
          <span class=\"topbar__label\">Tournois</span>
        </a>
<a class=\"topbar__item\" href=\"{{ path('front_games') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 6h10a4 4 0 014 4v2a4 4 0 01-4 4h-1l-2 2H10l-2-2H7a4 4 0 01-4-4v-2a4 4 0 014-4zm2 5a1 1 0 100 2 1 1 0 000-2zm6 0a1 1 0 100 2 1 1 0 000-2z\"/></svg></span>
          <span class=\"topbar__label\">Jeux</span>
        </a>
<a class=\"topbar__item\" href=\"{{ path('front_matches') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 3h10v2H7V3zm2 6h6v2H9V9zm-2 5h10v2H7v-2zm2 5h6v2H9v-2z\"/></svg></span>
          <span class=\"topbar__label\">Matchs</span>
        </a>
<a class=\"topbar__item is-active\" href=\"{{ path('front_shop') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M7 18c-1.1 0-2-.9-2-2V6h2v10h12v2H7zM9 6h10v10H9V6zm2 2v6h6V8h-6z\"/></svg></span>
          <span class=\"topbar__label\">Boutique</span>
        </a>
<a class=\"topbar__item\" href=\"{{ path('front_teams') }}\">
          <span class=\"topbar__icon\"><svg viewBox=\"0 0 24 24\" class=\"ico\"><path d=\"M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.95 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z\"/></svg></span>
          <span class=\"topbar__label\">Équipe</span>
        </a></nav>
      <div class=\"heroTop__right\">
        <a class=\"btn btn--ghost\" href=\"{{ path('front_register') }}\">S’inscrire</a>
        <button class=\"signInBtn\" id=\"btnOpenAuth\" type=\"button\">
          <span class=\"signInBtn__icon\" aria-hidden=\"true\">
            <svg viewBox=\"0 0 24 24\" class=\"ico\">
              <path d=\"M10 17l1.4-1.4-2.6-2.6H20v-2H8.8l2.6-2.6L10 7l-7 7 7 7zm-6 4h6v-2H4V5h6V3H4a2 2 0 00-2 2v14a2 2 0 002 2z\"/>
            </svg>
          </span>
          <span class=\"signInBtn__text\">SIGN IN</span>
        </button>
        <button class=\"menuBtn\" type=\"button\" aria-label=\"Menu\"><span></span><span></span><span></span></button>
      </div>
    </div>
    <div class=\"heroMini__center\">
      <div class=\"heroKicker\">BOUTIQUE</div>
      <h1 class=\"heroMini__title\">Boutique</h1>
      <div class=\"heroMini__sub\">Catalogue des produits vendus par les équipes.</div>
      <div class=\"breadcrumbs\">
        <a href=\"{{ path('front_home') }}\">Accueil</a>
        <span>•</span>
        <span>Boutique</span>
      </div>
    </div>
    <div class=\"heroSlash\" aria-hidden=\"true\"></div>
  </header>


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
        {% for product in products %}
        <article class=\"card card--product\">
          <div class=\"card__media\">
            {% set image = (product.productImages|first) ? (product.productImages|first).image : null %}
            {% if image and image.fileUrl %}
              <img src=\"{{ image.fileUrl }}\" alt=\"{{ product.name }}\" style=\"width:100%;height:180px;object-fit:cover;border-radius:8px 8px 0 0;\" />
            {% else %}
              <div style=\"width:100%;height:180px;background:#eee;border-radius:8px 8px 0 0;display:flex;align-items:center;justify-content:center;color:#aaa;\">Aucune image</div>
            {% endif %}
            <div class=\"card__chips\">
              <span class=\"chip chip--price\">{{ product.price }} DT</span>
              <span class=\"chip\">Stock: {{ product.stockQty }}</span>
              <span class=\"chip\">{{ product.teamId ? product.teamId.name : '—' }}</span>
            </div>
          </div>
          <div class=\"card__body\">
            <h4 class=\"card__title\">{{ product.name }}</h4>
            <p class=\"card__desc\">Vendeur: <b>{{ product.teamId ? product.teamId.name : '—' }}</b></p>
            <div class=\"card__actions\">
              <a class=\"btn btn--ghost\" href=\"#\">Détail</a>
              <a class=\"btn btn--primary\" href=\"#\">Ajouter au panier</a>
            </div>
          </div>
        </article>
        {% else %}
        <div class=\"alert alert-warning\">Aucun produit disponible.</div>
        {% endfor %}
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

    

      <footer class=\"footer\">
        <div>© 2026 Pulse — Front-office</div>
        <div class=\"footer__links\">
          <a href=\"{{ path('front_about') }}\">À propos</a>
          <a href=\"{{ path('front_contact') }}\">Contact</a>
          <a href=\"{{ path('front_faq') }}\">FAQ</a>
        </div>
      </footer>

    </section>
  </main>

  <div class=\"authModal\" id=\"authModal\" aria-hidden=\"true\">
    <div class=\"authModal__backdrop\" data-close=\"true\"></div>
    <div class=\"authCard\" role=\"dialog\" aria-modal=\"true\" aria-label=\"Connexion\">
      <div class=\"authCard__head\">
        <div>
          <div class=\"authCard__title\">Connexion</div>
          <div class=\"authCard__sub\">Email + mot de passe, puis “mot de passe oublié”.</div>
        </div>
        <button class=\"iconBtn\" data-close=\"true\" aria-label=\"Fermer\">
          <svg viewBox=\"0 0 24 24\" class=\"ico\">
            <path d=\"M18.3 5.7L12 12l6.3 6.3-1.4 1.4L10.6 13.4 4.3 19.7 2.9 18.3 9.2 12 2.9 5.7 4.3 4.3l6.3 6.3 6.3-6.3 1.4 1.4z\"/>
          </svg>
        </button>
      </div>
      <form class=\"authForm\" id=\"loginForm\">
        <label class=\"field\">
          <span class=\"field__label\">Email</span>
          <input type=\"email\" name=\"email\" placeholder=\"ex: you@email.com\" required />
        </label>
        <label class=\"field\">
          <span class=\"field__label\">Mot de passe</span>
          <input type=\"password\" name=\"password\" placeholder=\"••••••••\" required minlength=\"6\" />
        </label>
        <button class=\"btn btn--primary authForm__submit\" type=\"submit\">Se connecter</button>
        <div class=\"authForm__bottom\">
          <a class=\"authLink\" href=\"{{ path('front_forgot_password') }}\" id=\"forgotLink\">Mot de passe oublié ?</a>
        </div>
      </form>
    </div>
  </div>

  

{% endblock %}


", "front/pages/shop.html.twig", "C:\\Users\\Malek\\Desktop\\pi\\pulse\\templates\\front\\pages\\shop.html.twig");
    }
}
