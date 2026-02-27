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

/* front/pages/feed-public.html.twig */
class __TwigTemplate_b9f7af4852eca558a9349520352c1a60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/feed-public.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/feed-public.html.twig"));

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

        yield "PULSE - Fil public";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "COMMUNAUTÉ", "hero_title" => "Fil public", "hero_sub" => "Posts publics uniquement.", "breadcrumb_current" => "Fil public"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Fil public</h1>
          <p>Posts PUBLIC visibles par les visiteurs.</p>
        </div>
      </div>
      <div class=\"panel\">
        <div class=\"filtersRow\">
          <div class=\"select\"><select><option>Tout</option><option>Par auteur</option></select></div>
          <input class=\"input\" type=\"search\" placeholder=\"Auteur\" />
          <button class=\"btn btn--ghost\">Avec images</button>
          <button class=\"btn btn--ghost\">Plus récents</button>
        </div>
      </div>
      <div class=\"panel\">
        <div class=\"panel__head\"><h3 class=\"panel__title\">POSTS</h3></div>
        
      <div class=\"list\">
        
          <div class=\"listItem\">
            <div>
              <b>@ZED_99</b>
              <div class=\"listItem__meta\">Victoire 3-1 au Pulse Invitational !</div>
            </div>
            <div class=\"listItem__meta\">42 likes • 9 commentaires</div>
          </div>
          <div class=\"listItem\">
            <div>
              <b>@NovaAim</b>
              <div class=\"listItem__meta\">Nouveau produit disponible dans la boutique Aurora Squad.</div>
            </div>
            <div class=\"listItem__meta\">15 likes • 2 commentaires</div>
          </div>
          <div class=\"listItem\">
            <div>
              <b>@FrostByte</b>
              <div class=\"listItem__meta\">Roster update + essais ouverts cette semaine.</div>
            </div>
            <div class=\"listItem__meta\">28 likes • 7 commentaires</div>
          </div>
      </div>
      <div class=\"panel__actions\" style=\"margin-top:10px;\">
        <a class=\"btn btn--ghost\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Like / Commenter → Connexion</a>
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
          <div class=\"listItem\"><span><b>posts</b></span><span class=\"listItem__meta\">post_id, author_user_id, content_text, visibility, created_at</span></div><div class=\"listItem\"><span><b>post_images</b></span><span class=\"listItem__meta\">post_id, image_id, position</span></div><div class=\"listItem\"><span><b>users</b></span><span class=\"listItem__meta\">user_id, display_name</span></div><div class=\"listItem\"><span><b>comments</b></span><span class=\"listItem__meta\">comment_id, post_id, author_user_id</span></div><div class=\"listItem\"><span><b>post_likes</b></span><span class=\"listItem__meta\">post_id, user_id</span></div>
        </div>
      </div>

    

      ";
        // line 80
        yield from $this->load("front/partials/_footer.html.twig", 80)->unwrap()->yield($context);
        // line 81
        yield "
    </section>
  </main>

  ";
        // line 85
        yield from $this->load("front/partials/_auth_modal.html.twig", 85)->unwrap()->yield($context);
        // line 86
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
        return "front/pages/feed-public.html.twig";
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
        return array (  187 => 86,  185 => 85,  179 => 81,  177 => 80,  155 => 61,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Fil public{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'COMMUNAUTÉ',
  hero_title: 'Fil public',
  hero_sub: 'Posts publics uniquement.',
  breadcrumb_current: 'Fil public'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Fil public</h1>
          <p>Posts PUBLIC visibles par les visiteurs.</p>
        </div>
      </div>
      <div class=\"panel\">
        <div class=\"filtersRow\">
          <div class=\"select\"><select><option>Tout</option><option>Par auteur</option></select></div>
          <input class=\"input\" type=\"search\" placeholder=\"Auteur\" />
          <button class=\"btn btn--ghost\">Avec images</button>
          <button class=\"btn btn--ghost\">Plus récents</button>
        </div>
      </div>
      <div class=\"panel\">
        <div class=\"panel__head\"><h3 class=\"panel__title\">POSTS</h3></div>
        
      <div class=\"list\">
        
          <div class=\"listItem\">
            <div>
              <b>@ZED_99</b>
              <div class=\"listItem__meta\">Victoire 3-1 au Pulse Invitational !</div>
            </div>
            <div class=\"listItem__meta\">42 likes • 9 commentaires</div>
          </div>
          <div class=\"listItem\">
            <div>
              <b>@NovaAim</b>
              <div class=\"listItem__meta\">Nouveau produit disponible dans la boutique Aurora Squad.</div>
            </div>
            <div class=\"listItem__meta\">15 likes • 2 commentaires</div>
          </div>
          <div class=\"listItem\">
            <div>
              <b>@FrostByte</b>
              <div class=\"listItem__meta\">Roster update + essais ouverts cette semaine.</div>
            </div>
            <div class=\"listItem__meta\">28 likes • 7 commentaires</div>
          </div>
      </div>
      <div class=\"panel__actions\" style=\"margin-top:10px;\">
        <a class=\"btn btn--ghost\" href=\"{{ path('front_login') }}\">Like / Commenter → Connexion</a>
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
          <div class=\"listItem\"><span><b>posts</b></span><span class=\"listItem__meta\">post_id, author_user_id, content_text, visibility, created_at</span></div><div class=\"listItem\"><span><b>post_images</b></span><span class=\"listItem__meta\">post_id, image_id, position</span></div><div class=\"listItem\"><span><b>users</b></span><span class=\"listItem__meta\">user_id, display_name</span></div><div class=\"listItem\"><span><b>comments</b></span><span class=\"listItem__meta\">comment_id, post_id, author_user_id</span></div><div class=\"listItem\"><span><b>post_likes</b></span><span class=\"listItem__meta\">post_id, user_id</span></div>
        </div>
      </div>

    

      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/feed-public.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\feed-public.html.twig");
    }
}
