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

/* front/pages/post-detail.html.twig */
class __TwigTemplate_13dcfc6a2e1ebdd33aa3cc310eccda8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/post-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/post-detail.html.twig"));

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

        yield "PULSE - Détail post";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Détail post", "hero_sub" => "Post + commentaires.", "breadcrumb_current" => "Détail post"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"layout\">
        
  <aside class=\"sideNav\">
    <div class=\"sideNav__title\">ESPACE JOUEUR</div>
    <a class=\"\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_dashboard");
        yield "\">Dashboard</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile");
        yield "\">Mon profil</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_players");
        yield "\">Recherche joueurs</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_friends");
        yield "\">Amis</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages");
        yield "\">Messages</a><a class=\"is-active\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_feed");
        yield "\">Fil d’actualité</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_teams");
        yield "\">Mes équipes</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_my_requests");
        yield "\">Mes demandes</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\">Mes commandes</a><a class=\"\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\">Notifications</a>
  </aside>

        <div>
          
        <div class=\"panel\">
          <h3 class=\"panel__title\">Post de @ZED_99</h3>
          <p class=\"muted\">Victoire 3-1 au Pulse Invitational !</p>
          <div class=\"list\" style=\"margin-top:10px;\">
            <div class=\"listItem\"><span>@NovaAim: GG !</span><span class=\"listItem__meta\">1h</span></div>
            <div class=\"listItem\"><span>@Kairo: Nice</span><span class=\"listItem__meta\">2h</span></div>
          </div>
          <div style=\"margin-top:10px;\">
            <input class=\"input\" type=\"text\" placeholder=\"Ajouter un commentaire...\" />
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
          <div class=\"listItem\"><span><b>posts</b></span><span class=\"listItem__meta\">post_id, author_user_id, content_text</span></div><div class=\"listItem\"><span><b>comments</b></span><span class=\"listItem__meta\">comment_id, post_id, author_user_id, content_text</span></div><div class=\"listItem\"><span><b>post_likes</b></span><span class=\"listItem__meta\">post_id, user_id</span></div><div class=\"listItem\"><span><b>reports</b></span><span class=\"listItem__meta\">report_id, target_type, target_id</span></div>
        </div>
      </div>

      
        </div>
      </div>


      ";
        // line 57
        yield from $this->load("front/partials/_footer.html.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "
    </section>
  </main>

  ";
        // line 62
        yield from $this->load("front/partials/_auth_modal.html.twig", 62)->unwrap()->yield($context);
        // line 63
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
        return "front/pages/post-detail.html.twig";
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
        return array (  182 => 63,  180 => 62,  174 => 58,  172 => 57,  117 => 23,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Détail post{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'JOUEUR',
  hero_title: 'Détail post',
  hero_sub: 'Post + commentaires.',
  breadcrumb_current: 'Détail post'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"layout\">
        
  <aside class=\"sideNav\">
    <div class=\"sideNav__title\">ESPACE JOUEUR</div>
    <a class=\"\" href=\"{{ path('front_dashboard') }}\">Dashboard</a><a class=\"\" href=\"{{ path('front_profile') }}\">Mon profil</a><a class=\"\" href=\"{{ path('front_players') }}\">Recherche joueurs</a><a class=\"\" href=\"{{ path('front_friends') }}\">Amis</a><a class=\"\" href=\"{{ path('front_messages') }}\">Messages</a><a class=\"is-active\" href=\"{{ path('front_feed') }}\">Fil d’actualité</a><a class=\"\" href=\"{{ path('front_my_teams') }}\">Mes équipes</a><a class=\"\" href=\"{{ path('front_my_requests') }}\">Mes demandes</a><a class=\"\" href=\"{{ path('front_orders') }}\">Mes commandes</a><a class=\"\" href=\"{{ path('front_notifications') }}\">Notifications</a>
  </aside>

        <div>
          
        <div class=\"panel\">
          <h3 class=\"panel__title\">Post de @ZED_99</h3>
          <p class=\"muted\">Victoire 3-1 au Pulse Invitational !</p>
          <div class=\"list\" style=\"margin-top:10px;\">
            <div class=\"listItem\"><span>@NovaAim: GG !</span><span class=\"listItem__meta\">1h</span></div>
            <div class=\"listItem\"><span>@Kairo: Nice</span><span class=\"listItem__meta\">2h</span></div>
          </div>
          <div style=\"margin-top:10px;\">
            <input class=\"input\" type=\"text\" placeholder=\"Ajouter un commentaire...\" />
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
          <div class=\"listItem\"><span><b>posts</b></span><span class=\"listItem__meta\">post_id, author_user_id, content_text</span></div><div class=\"listItem\"><span><b>comments</b></span><span class=\"listItem__meta\">comment_id, post_id, author_user_id, content_text</span></div><div class=\"listItem\"><span><b>post_likes</b></span><span class=\"listItem__meta\">post_id, user_id</span></div><div class=\"listItem\"><span><b>reports</b></span><span class=\"listItem__meta\">report_id, target_type, target_id</span></div>
        </div>
      </div>

      
        </div>
      </div>


      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/post-detail.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\post-detail.html.twig");
    }
}
