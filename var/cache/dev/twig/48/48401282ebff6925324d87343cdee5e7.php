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

/* front/partials/_hero_mini.html.twig */
class __TwigTemplate_d898e9a4abea9b1c82957093536c1dfc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_hero_mini.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_hero_mini.html.twig"));

        // line 1
        yield "<header class=\"heroMini\">
  <div class=\"heroFull__bg heroMini__bg\" data-bg=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hero_bg", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_bg"]) || array_key_exists("hero_bg", $context) ? $context["hero_bg"] : (function () { throw new RuntimeError('Variable "hero_bg" does not exist.', 2, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_fo/img/ll.png"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_fo/img/ll.png"))), "html", null, true);
        yield "\"></div>
  <div class=\"heroFull__overlay\"></div>

  ";
        // line 5
        yield from $this->load("front/partials/_top_nav.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "
  <div class=\"heroMini__center\">
    <div class=\"heroKicker\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hero_kicker", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_kicker"]) || array_key_exists("hero_kicker", $context) ? $context["hero_kicker"] : (function () { throw new RuntimeError('Variable "hero_kicker" does not exist.', 8, $this->source); })()), "PULSE")) : ("PULSE")), "html", null, true);
        yield "</div>
    <h1 class=\"heroMini__title\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hero_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_title"]) || array_key_exists("hero_title", $context) ? $context["hero_title"] : (function () { throw new RuntimeError('Variable "hero_title" does not exist.', 9, $this->source); })()), "Page")) : ("Page")), "html", null, true);
        yield "</h1>
    <div class=\"heroMini__sub\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hero_sub", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_sub"]) || array_key_exists("hero_sub", $context) ? $context["hero_sub"] : (function () { throw new RuntimeError('Variable "hero_sub" does not exist.', 10, $this->source); })()), "Section front office.")) : ("Section front office.")), "html", null, true);
        yield "</div>
    <div class=\"breadcrumbs\">
      <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\">Accueil</a>
      <span>&bull;</span>
      <span>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("breadcrumb_current", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["breadcrumb_current"]) || array_key_exists("breadcrumb_current", $context) ? $context["breadcrumb_current"] : (function () { throw new RuntimeError('Variable "breadcrumb_current" does not exist.', 14, $this->source); })()), ((array_key_exists("hero_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_title"]) || array_key_exists("hero_title", $context) ? $context["hero_title"] : (function () { throw new RuntimeError('Variable "hero_title" does not exist.', 14, $this->source); })()), "Page")) : ("Page")))) : (((array_key_exists("hero_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hero_title"]) || array_key_exists("hero_title", $context) ? $context["hero_title"] : (function () { throw new RuntimeError('Variable "hero_title" does not exist.', 14, $this->source); })()), "Page")) : ("Page")))), "html", null, true);
        yield "</span>
    </div>
  </div>

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
        return "front/partials/_hero_mini.html.twig";
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
        return array (  81 => 14,  76 => 12,  71 => 10,  67 => 9,  63 => 8,  59 => 6,  57 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"heroMini\">
  <div class=\"heroFull__bg heroMini__bg\" data-bg=\"{{ hero_bg|default(asset('assets/template_fo/img/ll.png')) }}\"></div>
  <div class=\"heroFull__overlay\"></div>

  {% include 'front/partials/_top_nav.html.twig' %}

  <div class=\"heroMini__center\">
    <div class=\"heroKicker\">{{ hero_kicker|default('PULSE') }}</div>
    <h1 class=\"heroMini__title\">{{ hero_title|default('Page') }}</h1>
    <div class=\"heroMini__sub\">{{ hero_sub|default('Section front office.') }}</div>
    <div class=\"breadcrumbs\">
      <a href=\"{{ path('front_home') }}\">Accueil</a>
      <span>&bull;</span>
      <span>{{ breadcrumb_current|default(hero_title|default('Page')) }}</span>
    </div>
  </div>

  <div class=\"heroSlash\" aria-hidden=\"true\"></div>
</header>
", "front/partials/_hero_mini.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\partials\\_hero_mini.html.twig");
    }
}
