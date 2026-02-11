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

/* front/pages/matches.html.twig */
class __TwigTemplate_940fa111d4e0d27208873384b4e5ec01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/matches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/matches.html.twig"));

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

        yield "PULSE - Liste des matchs";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "MATCHS", "hero_title" => "Liste des matchs", "hero_sub" => "Filtrer par tournoi, statut et équipe.", "breadcrumb_current" => "Liste des matchs"]));
        // line 14
        yield "

  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Liste des matchs</h1>
          <p>Vue globale ou par tournoi.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <button class=\"btn btn--soft\">Prochains matchs</button>
          <button class=\"btn btn--ghost\">Plus récents</button>
        </div>
      </div>

      <div class=\"panel\">
        <div class=\"filtersRow\">
          <div class=\"select\"><select><option>Filtre principal</option><option>Tous</option><option>Par tournoi</option></select></div>
          <div class=\"select\"><select><option>Statut</option><option>SCHEDULED</option><option>ONGOING</option><option>FINISHED</option></select></div>
          <div class=\"select\"><select><option>Jeu</option><option>Valorant</option><option>CS2</option></select></div>
          <input class=\"input\" type=\"date\" />
          <input class=\"input\" type=\"search\" placeholder=\"Équipe\" />
        </div>
      </div>

      <div class=\"panel\">
        <div class=\"panel__head\"><h3 class=\"panel__title\">MATCHS</h3></div>
        <div class=\"tableWrap\">
          <table class=\"table\">
            <thead><tr><th>Match</th><th>Tournoi</th><th>Round</th><th>Statut</th><th>Horaire</th></tr></thead>
            <tbody>
              <tr><td>Nebula Five vs North Hydra</td><td>CS2 Arena Cup</td><td>Quarterfinal</td><td><span class=\"badge badge--info\">SCHEDULED</span></td><td>Jeu 20:00</td></tr>
              <tr><td>Sandstorm vs Aurora Squad</td><td>League Clash</td><td>Semifinal</td><td><span class=\"badge badge--success\">ONGOING</span></td><td>Live</td></tr>
              <tr><td>Nebula Five vs Sandstorm</td><td>Pulse Invitational</td><td>Final</td><td><span class=\"badge\">FINISHED</span></td><td>Terminé</td></tr>
            </tbody>
          </table>
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
          <div class=\"listItem\"><span><b>matches</b></span><span class=\"listItem__meta\">match_id, tournament_id, status, scheduled_at, round_name, best_of</span></div><div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listItem__meta\">tournament_id, title, game_id</span></div><div class=\"listItem\"><span><b>match_teams</b></span><span class=\"listItem__meta\">match_id, team_id, score, is_winner</span></div><div class=\"listItem\"><span><b>teams</b></span><span class=\"listItem__meta\">team_id, name</span></div>
        </div>
      </div>

    

      ";
        // line 69
        yield from $this->load("front/partials/_footer.html.twig", 69)->unwrap()->yield($context);
        // line 70
        yield "
    </section>
  </main>

  ";
        // line 74
        yield from $this->load("front/partials/_auth_modal.html.twig", 74)->unwrap()->yield($context);
        // line 75
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
        return "front/pages/matches.html.twig";
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
        return array (  173 => 75,  171 => 74,  165 => 70,  163 => 69,  106 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Liste des matchs{% endblock %}

{% block body %}


  {% include 'front/partials/_hero_mini.html.twig' with {
  hero_kicker: 'MATCHS',
  hero_title: 'Liste des matchs',
  hero_sub: 'Filtrer par tournoi, statut et équipe.',
  breadcrumb_current: 'Liste des matchs'
} %}


  <main class=\"page\">
    <section class=\"belowHero\">

      <div class=\"pageHeader\">
        <div>
          <h1>Liste des matchs</h1>
          <p>Vue globale ou par tournoi.</p>
        </div>
        <div class=\"pageHeader__actions\">
          <button class=\"btn btn--soft\">Prochains matchs</button>
          <button class=\"btn btn--ghost\">Plus récents</button>
        </div>
      </div>

      <div class=\"panel\">
        <div class=\"filtersRow\">
          <div class=\"select\"><select><option>Filtre principal</option><option>Tous</option><option>Par tournoi</option></select></div>
          <div class=\"select\"><select><option>Statut</option><option>SCHEDULED</option><option>ONGOING</option><option>FINISHED</option></select></div>
          <div class=\"select\"><select><option>Jeu</option><option>Valorant</option><option>CS2</option></select></div>
          <input class=\"input\" type=\"date\" />
          <input class=\"input\" type=\"search\" placeholder=\"Équipe\" />
        </div>
      </div>

      <div class=\"panel\">
        <div class=\"panel__head\"><h3 class=\"panel__title\">MATCHS</h3></div>
        <div class=\"tableWrap\">
          <table class=\"table\">
            <thead><tr><th>Match</th><th>Tournoi</th><th>Round</th><th>Statut</th><th>Horaire</th></tr></thead>
            <tbody>
              <tr><td>Nebula Five vs North Hydra</td><td>CS2 Arena Cup</td><td>Quarterfinal</td><td><span class=\"badge badge--info\">SCHEDULED</span></td><td>Jeu 20:00</td></tr>
              <tr><td>Sandstorm vs Aurora Squad</td><td>League Clash</td><td>Semifinal</td><td><span class=\"badge badge--success\">ONGOING</span></td><td>Live</td></tr>
              <tr><td>Nebula Five vs Sandstorm</td><td>Pulse Invitational</td><td>Final</td><td><span class=\"badge\">FINISHED</span></td><td>Terminé</td></tr>
            </tbody>
          </table>
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
          <div class=\"listItem\"><span><b>matches</b></span><span class=\"listItem__meta\">match_id, tournament_id, status, scheduled_at, round_name, best_of</span></div><div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listItem__meta\">tournament_id, title, game_id</span></div><div class=\"listItem\"><span><b>match_teams</b></span><span class=\"listItem__meta\">match_id, team_id, score, is_winner</span></div><div class=\"listItem\"><span><b>teams</b></span><span class=\"listItem__meta\">team_id, name</span></div>
        </div>
      </div>

    

      {% include 'front/partials/_footer.html.twig' %}

    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

{% endblock %}


", "front/pages/matches.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\matches.html.twig");
    }
}
