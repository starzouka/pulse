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

/* front/pages/games.html.twig */
class __TwigTemplate_08119cf45c99084c8c2fbdbe2ec5b890 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/games.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/games.html.twig"));

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

        yield "PULSE - Catalogue des jeux";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JEUX", "hero_title" => "Catalogue des jeux", "hero_sub" => "Explorez tous les jeux, catégories et tournois associés.", "breadcrumb_current" => "Catalogue des jeux"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des jeux</h1>
          <p>Recherche par nom + filtres catégories, publisher et tournois actifs.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <button class=\"btn btn--soft\">Popularité</button>
          <button class=\"btn btn--ghost\">Plus récents</button>
          <button class=\"btn btn--ghost\">A–Z</button>
        </div>
      </div>

      <div class=\"panel\">
        <div class=\"filtersRow\">
          <input class=\"input\" type=\"search\" placeholder=\"Rechercher un jeu...\" />
          <div class=\"select\"><select><option>Catégorie</option><option>FPS</option><option>MOBA</option><option>BR</option></select></div>
          <div class=\"select\"><select><option>Publisher</option><option>Riot</option><option>Valve</option><option>Epic</option></select></div>
          <button class=\"btn btn--ghost\">Avec tournois actifs</button>
        </div>
      </div>

      <div class=\"cardsGrid\">

    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">FPS</span>
          <span class=\"chip\">Publisher: Riot</span>
          <span class=\"chip\">Tournois: 6</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Valorant</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail");
        yield "\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">FPS</span>
          <span class=\"chip\">Publisher: Valve</span>
          <span class=\"chip\">Tournois: 4</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Counter-Strike 2</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail");
        yield "\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">MOBA</span>
          <span class=\"chip\">Publisher: Riot</span>
          <span class=\"chip\">Tournois: 5</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">League of Legends</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail");
        yield "\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">BR</span>
          <span class=\"chip\">Publisher: Epic</span>
          <span class=\"chip\">Tournois: 3</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Fortnite</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail");
        yield "\">Détail</a>
        </div>
      </div>
    </article>

</div>

      <div class=\"panel\"><div class=\"panel__head\"><h3 class=\"panel__title\">PAGINATION</h3></div>
        <div class=\"list\">
          <div class=\"listItem\"><span>Page 1 / 12</span><span class=\"listItem__meta\">12 jeux / page</span></div>
        </div>
      </div>

      
      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISÉES</h3>
            <div class=\"panel__desc\">Schéma réel + colonnes clés.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>games</b></span><span class=\"listItem__meta\">game_id, category_id, name, description, cover_image_id, publisher, created_at</span></div><div class=\"listItem\"><span><b>categories</b></span><span class=\"listItem__meta\">category_id, name</span></div><div class=\"listItem\"><span><b>images</b></span><span class=\"listItem__meta\">image_id, file_url</span></div><div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listItem__meta\">tournament_id, game_id, status, created_at</span></div>
        </div>
      </div>

    

      ";
        // line 136
        yield from $this->load("front/partials/_footer.html.twig", 136)->unwrap()->yield($context);
        // line 137
        yield "
    </section>
  </main>

  ";
        // line 141
        yield from $this->load("front/partials/_auth_modal.html.twig", 141)->unwrap()->yield($context);
        // line 142
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
        return "front/pages/games.html.twig";
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
        return array (  252 => 142,  250 => 141,  244 => 137,  242 => 136,  211 => 108,  190 => 90,  169 => 72,  148 => 54,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Catalogue des jeux{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'JEUX',
  hero_title: 'Catalogue des jeux',
  hero_sub: 'Explorez tous les jeux, catégories et tournois associés.',
  breadcrumb_current: 'Catalogue des jeux'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Catalogue des jeux</h1>
          <p>Recherche par nom + filtres catégories, publisher et tournois actifs.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <button class=\"btn btn--soft\">Popularité</button>
          <button class=\"btn btn--ghost\">Plus récents</button>
          <button class=\"btn btn--ghost\">A–Z</button>
        </div>
      </div>

      <div class=\"panel\">
        <div class=\"filtersRow\">
          <input class=\"input\" type=\"search\" placeholder=\"Rechercher un jeu...\" />
          <div class=\"select\"><select><option>Catégorie</option><option>FPS</option><option>MOBA</option><option>BR</option></select></div>
          <div class=\"select\"><select><option>Publisher</option><option>Riot</option><option>Valve</option><option>Epic</option></select></div>
          <button class=\"btn btn--ghost\">Avec tournois actifs</button>
        </div>
      </div>

      <div class=\"cardsGrid\">

    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g1/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">FPS</span>
          <span class=\"chip\">Publisher: Riot</span>
          <span class=\"chip\">Tournois: 6</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Valorant</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_game_detail') }}\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g2/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">FPS</span>
          <span class=\"chip\">Publisher: Valve</span>
          <span class=\"chip\">Tournois: 4</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Counter-Strike 2</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_game_detail') }}\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g3/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">MOBA</span>
          <span class=\"chip\">Publisher: Riot</span>
          <span class=\"chip\">Tournois: 5</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">League of Legends</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_game_detail') }}\">Détail</a>
        </div>
      </div>
    </article>


    <article class=\"card card--game\">
      <div class=\"card__media\" data-bg=\"https://picsum.photos/seed/pulse_g4/1200/800\">
        <div class=\"card__chips\">
          <span class=\"chip chip--category\">BR</span>
          <span class=\"chip\">Publisher: Epic</span>
          <span class=\"chip\">Tournois: 3</span>
        </div>
      </div>
      <div class=\"card__body\">
        <h4 class=\"card__title\">Fortnite</h4>
        <p class=\"card__desc\">Jeu populaire basé sur l’activité des tournois.</p>
        <div class=\"card__actions\">
          <a class=\"btn btn--ghost\" href=\"{{ path('front_game_detail') }}\">Détail</a>
        </div>
      </div>
    </article>

</div>

      <div class=\"panel\"><div class=\"panel__head\"><h3 class=\"panel__title\">PAGINATION</h3></div>
        <div class=\"list\">
          <div class=\"listItem\"><span>Page 1 / 12</span><span class=\"listItem__meta\">12 jeux / page</span></div>
        </div>
      </div>

      
      <div class=\"panel\">
        <div class=\"panel__head\">
          <div>
            <h3 class=\"panel__title\">TABLES UTILISÉES</h3>
            <div class=\"panel__desc\">Schéma réel + colonnes clés.</div>
          </div>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span><b>games</b></span><span class=\"listItem__meta\">game_id, category_id, name, description, cover_image_id, publisher, created_at</span></div><div class=\"listItem\"><span><b>categories</b></span><span class=\"listItem__meta\">category_id, name</span></div><div class=\"listItem\"><span><b>images</b></span><span class=\"listItem__meta\">image_id, file_url</span></div><div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listItem__meta\">tournament_id, game_id, status, created_at</span></div>
        </div>
      </div>

    

      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/games.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\games.html.twig");
    }
}
