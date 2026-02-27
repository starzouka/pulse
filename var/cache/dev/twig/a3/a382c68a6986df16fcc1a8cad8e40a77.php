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

/* front/partials/_hero_full.html.twig */
class __TwigTemplate_a549813ea5c48ed18d0601b4d237f8d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_hero_full.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_hero_full.html.twig"));

        // line 1
        yield "<header class=\"heroFull\">
  <div class=\"heroFull__bg\" id=\"heroBg\" data-bg=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hero_bg", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_bg"]) || array_key_exists("hero_bg", $context) ? $context["hero_bg"] : (function () { throw new RuntimeError('Variable "hero_bg" does not exist.', 2, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_fo/img/ll.png"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_fo/img/ll.png"))), "html", null, true);
        yield "\"></div>
  <div class=\"heroFull__overlay\"></div>

  ";
        // line 5
        yield from $this->load("front/partials/_top_nav.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "
  <div class=\"heroCenter\">
    <div class=\"heroKicker\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hero_kicker", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_kicker"]) || array_key_exists("hero_kicker", $context) ? $context["hero_kicker"] : (function () { throw new RuntimeError('Variable "hero_kicker" does not exist.', 8, $this->source); })()), "VOTRE PLATEFORME E-SPORT")) : ("VOTRE PLATEFORME E-SPORT")), "html", null, true);
        yield "</div>
    <h1 class=\"heroTitle\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hero_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_title"]) || array_key_exists("hero_title", $context) ? $context["hero_title"] : (function () { throw new RuntimeError('Variable "hero_title" does not exist.', 9, $this->source); })()), "PULSE")) : ("PULSE")), "html", null, true);
        yield "</h1>
    <div class=\"heroSub\">
      ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hero_sub", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_sub"]) || array_key_exists("hero_sub", $context) ? $context["hero_sub"] : (function () { throw new RuntimeError('Variable "hero_sub" does not exist.', 11, $this->source); })()), "Creez des equipes, participez aux tournois, suivez les matchs et gagnez des recompenses.")) : ("Creez des equipes, participez aux tournois, suivez les matchs et gagnez des recompenses.")), "html", null, true);
        yield "
    </div>

    <div class=\"heroCtas\">
      <a class=\"cta cta--green\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_contact");
        yield "\">CONTACT US</a>
      <a class=\"cta cta--glass\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournaments");
        yield "\">VOIR TOURNOIS</a>
      <a class=\"cta cta--glass\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_games");
        yield "\">VOIR JEUX</a>
      <a class=\"cta cta--glass\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
        yield "\">BOUTIQUE</a>
    </div>

    ";
        // line 21
        if ((($tmp = ((array_key_exists("show_widgets", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["show_widgets"]) || array_key_exists("show_widgets", $context) ? $context["show_widgets"] : (function () { throw new RuntimeError('Variable "show_widgets" does not exist.', 21, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "      <div class=\"heroWidgets\">
        <div class=\"widget\">
          <div class=\"widget__value\" id=\"heroStatMatches\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hero_stat_matches", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_stat_matches"]) || array_key_exists("hero_stat_matches", $context) ? $context["hero_stat_matches"] : (function () { throw new RuntimeError('Variable "hero_stat_matches" does not exist.', 24, $this->source); })()), "3200")) : ("3200")), "html", null, true);
            yield "</div>
          <div class=\"widget__label\">Matches played</div>
        </div>
        <div class=\"widget\">
          <div class=\"widget__value\" id=\"heroStatTournaments\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hero_stat_tournaments", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_stat_tournaments"]) || array_key_exists("hero_stat_tournaments", $context) ? $context["hero_stat_tournaments"] : (function () { throw new RuntimeError('Variable "hero_stat_tournaments" does not exist.', 28, $this->source); })()), "235")) : ("235")), "html", null, true);
            yield "</div>
          <div class=\"widget__label\">Tournaments held</div>
        </div>
        <div class=\"widget\">
          <div class=\"widget__value\" id=\"heroStatPlayers\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hero_stat_players", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_stat_players"]) || array_key_exists("hero_stat_players", $context) ? $context["hero_stat_players"] : (function () { throw new RuntimeError('Variable "hero_stat_players" does not exist.', 32, $this->source); })()), "566")) : ("566")), "html", null, true);
            yield "</div>
          <div class=\"widget__label\">Players</div>
        </div>
      </div>
    ";
        }
        // line 37
        yield "  </div>

  <div class=\"heroSlash\" aria-hidden=\"true\"></div>
</header>
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
        return "front/partials/_hero_full.html.twig";
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
        return array (  125 => 37,  117 => 32,  110 => 28,  103 => 24,  99 => 22,  97 => 21,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  72 => 11,  67 => 9,  63 => 8,  59 => 6,  57 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"heroFull\">
  <div class=\"heroFull__bg\" id=\"heroBg\" data-bg=\"{{ hero_bg|default(asset('assets/template_fo/img/ll.png')) }}\"></div>
  <div class=\"heroFull__overlay\"></div>

  {% include 'front/partials/_top_nav.html.twig' %}

  <div class=\"heroCenter\">
    <div class=\"heroKicker\">{{ hero_kicker|default('VOTRE PLATEFORME E-SPORT') }}</div>
    <h1 class=\"heroTitle\">{{ hero_title|default('PULSE') }}</h1>
    <div class=\"heroSub\">
      {{ hero_sub|default('Creez des equipes, participez aux tournois, suivez les matchs et gagnez des recompenses.') }}
    </div>

    <div class=\"heroCtas\">
      <a class=\"cta cta--green\" href=\"{{ path('front_contact') }}\">CONTACT US</a>
      <a class=\"cta cta--glass\" href=\"{{ path('front_tournaments') }}\">VOIR TOURNOIS</a>
      <a class=\"cta cta--glass\" href=\"{{ path('front_games') }}\">VOIR JEUX</a>
      <a class=\"cta cta--glass\" href=\"{{ path('front_shop') }}\">BOUTIQUE</a>
    </div>

    {% if show_widgets|default(false) %}
      <div class=\"heroWidgets\">
        <div class=\"widget\">
          <div class=\"widget__value\" id=\"heroStatMatches\">{{ hero_stat_matches|default('3200') }}</div>
          <div class=\"widget__label\">Matches played</div>
        </div>
        <div class=\"widget\">
          <div class=\"widget__value\" id=\"heroStatTournaments\">{{ hero_stat_tournaments|default('235') }}</div>
          <div class=\"widget__label\">Tournaments held</div>
        </div>
        <div class=\"widget\">
          <div class=\"widget__value\" id=\"heroStatPlayers\">{{ hero_stat_players|default('566') }}</div>
          <div class=\"widget__label\">Players</div>
        </div>
      </div>
    {% endif %}
  </div>

  <div class=\"heroSlash\" aria-hidden=\"true\"></div>
</header>
", "front/partials/_hero_full.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\partials\\_hero_full.html.twig");
    }
}
