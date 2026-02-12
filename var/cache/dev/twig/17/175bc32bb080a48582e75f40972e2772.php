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

/* admin/base_admin.html.twig */
class __TwigTemplate_1baa125e530fa4fc64b17190f83a4231 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'admin_content' => [$this, 'block_admin_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base_admin.html.twig"));

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

        yield "PULSE - Dashboard Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_bo/css/styles.css"), "html", null, true);
        yield "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_bo/css/tailwind.css"), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "  <svg width=\"0\" height=\"0\" style=\"position:absolute; left:-9999px; top:-9999px\">
    <symbol id=\"i-logo\" viewBox=\"0 0 24 24\">
      <path d=\"M5 5h14v14H5z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" opacity=\"0.35\"/>
      <path d=\"M8 8h8v8H8z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M8 12h8\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" opacity=\"0.8\"/>
    </symbol>

    <symbol id=\"i-home\" viewBox=\"0 0 24 24\">
      <path d=\"M4 10.5 12 4l8 6.5V20a1 1 0 0 1-1 1h-5v-6H10v6H5a1 1 0 0 1-1-1z\"
        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
    </symbol>
    <symbol id=\"i-game\" viewBox=\"0 0 24 24\">
      <path d=\"M7 9h10a4 4 0 0 1 4 4v3a3 3 0 0 1-3 3h-1l-2-2H9l-2 2H6a3 3 0 0 1-3-3v-3a4 4 0 0 1 4-4z\"
        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
      <path d=\"M8.5 13h3M10 11.5v3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M16.5 12.5h.01M18 14h.01\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\"/>
    </symbol>
    <symbol id=\"i-trophy\" viewBox=\"0 0 24 24\">
      <path d=\"M8 4h8v3a4 4 0 0 1-8 0z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M6 7H4a2 2 0 0 0 2 2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M18 7h2a2 2 0 0 1-2 2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M12 11v3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M9 21h6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M10 14h4v3h-4z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
    </symbol>
    <symbol id=\"i-users\" viewBox=\"0 0 24 24\">
      <path d=\"M16 11a3 3 0 1 0-6 0\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M5 20a7 7 0 0 1 14 0\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M17.5 10.5a2.5 2.5 0 1 0-3.5-3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" opacity=\"0.8\"/>
    </symbol>
    <symbol id=\"i-flag\" viewBox=\"0 0 24 24\">
      <path d=\"M6 3v18\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M6 4h11l-2 4 2 4H6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
    </symbol>
    <symbol id=\"i-cart\" viewBox=\"0 0 24 24\">
      <path d=\"M6 6h15l-2 8H7z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
      <path d=\"M6 6 5 3H2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M9 20a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm9 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z\"
        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
    </symbol>
    <symbol id=\"i-gear\" viewBox=\"0 0 24 24\">
      <path d=\"M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M19.4 15a8 8 0 0 0 .1-2l2-1.2-2-3.5-2.3.6a7.7 7.7 0 0 0-1.7-1l-.3-2.4H10l-.3 2.4a7.7 7.7 0 0 0-1.7 1l-2.3-.6-2 3.5 2 1.2a8 8 0 0 0 .1 2l-2 1.2 2 3.5 2.3-.6a7.7 7.7 0 0 0 1.7 1l.3 2.4h5.2l.3-2.4a7.7 7.7 0 0 0 1.7-1l2.3.6 2-3.5z\"
        fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" opacity=\"0.9\"/>
    </symbol>
    <symbol id=\"i-search\" viewBox=\"0 0 24 24\">
      <path d=\"M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M16.5 16.5 21 21\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
    </symbol>
    <symbol id=\"i-bell\" viewBox=\"0 0 24 24\">
      <path d=\"M18 8a6 6 0 1 0-12 0c0 7-3 7-3 7h18s-3 0-3-7z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
      <path d=\"M10 20a2 2 0 0 0 4 0\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
    </symbol>
    <symbol id=\"i-chevron\" viewBox=\"0 0 24 24\">
      <path d=\"M9 18 15 12 9 6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
    </symbol>
    <symbol id=\"i-dots\" viewBox=\"0 0 24 24\">
      <path d=\"M6 12h.01M12 12h.01M18 12h.01\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"4\" stroke-linecap=\"round\"/>
    </symbol>
  </svg>

  <div class=\"app\">
    ";
        // line 76
        yield from $this->load("admin/Partials/sidebar.html.twig", 76)->unwrap()->yield($context);
        // line 77
        yield "
    <div class=\"main\">
      ";
        // line 79
        yield from $this->load("admin/Partials/navbar.html.twig", 79)->unwrap()->yield($context);
        // line 80
        yield "
      <main class=\"content\">
        ";
        // line 82
        yield from $this->unwrap()->yieldBlock('admin_content', $context, $blocks);
        // line 83
        yield "      </main>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        yield "  <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_bo/js/app.js"), "html", null, true);
        yield "\"></script>
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
        return "admin/base_admin.html.twig";
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
        return array (  265 => 89,  252 => 88,  230 => 82,  216 => 83,  214 => 82,  210 => 80,  208 => 79,  204 => 77,  202 => 76,  138 => 14,  125 => 13,  112 => 10,  108 => 9,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Dashboard Admin{% endblock %}

{% block stylesheets %}
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/template_bo/css/styles.css') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('assets/template_bo/css/tailwind.css') }}\" />
{% endblock %}

{% block body %}
  <svg width=\"0\" height=\"0\" style=\"position:absolute; left:-9999px; top:-9999px\">
    <symbol id=\"i-logo\" viewBox=\"0 0 24 24\">
      <path d=\"M5 5h14v14H5z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" opacity=\"0.35\"/>
      <path d=\"M8 8h8v8H8z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M8 12h8\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" opacity=\"0.8\"/>
    </symbol>

    <symbol id=\"i-home\" viewBox=\"0 0 24 24\">
      <path d=\"M4 10.5 12 4l8 6.5V20a1 1 0 0 1-1 1h-5v-6H10v6H5a1 1 0 0 1-1-1z\"
        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
    </symbol>
    <symbol id=\"i-game\" viewBox=\"0 0 24 24\">
      <path d=\"M7 9h10a4 4 0 0 1 4 4v3a3 3 0 0 1-3 3h-1l-2-2H9l-2 2H6a3 3 0 0 1-3-3v-3a4 4 0 0 1 4-4z\"
        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
      <path d=\"M8.5 13h3M10 11.5v3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M16.5 12.5h.01M18 14h.01\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\"/>
    </symbol>
    <symbol id=\"i-trophy\" viewBox=\"0 0 24 24\">
      <path d=\"M8 4h8v3a4 4 0 0 1-8 0z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M6 7H4a2 2 0 0 0 2 2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M18 7h2a2 2 0 0 1-2 2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M12 11v3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M9 21h6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M10 14h4v3h-4z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
    </symbol>
    <symbol id=\"i-users\" viewBox=\"0 0 24 24\">
      <path d=\"M16 11a3 3 0 1 0-6 0\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M5 20a7 7 0 0 1 14 0\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M17.5 10.5a2.5 2.5 0 1 0-3.5-3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" opacity=\"0.8\"/>
    </symbol>
    <symbol id=\"i-flag\" viewBox=\"0 0 24 24\">
      <path d=\"M6 3v18\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M6 4h11l-2 4 2 4H6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
    </symbol>
    <symbol id=\"i-cart\" viewBox=\"0 0 24 24\">
      <path d=\"M6 6h15l-2 8H7z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
      <path d=\"M6 6 5 3H2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
      <path d=\"M9 20a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm9 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z\"
        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
    </symbol>
    <symbol id=\"i-gear\" viewBox=\"0 0 24 24\">
      <path d=\"M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M19.4 15a8 8 0 0 0 .1-2l2-1.2-2-3.5-2.3.6a7.7 7.7 0 0 0-1.7-1l-.3-2.4H10l-.3 2.4a7.7 7.7 0 0 0-1.7 1l-2.3-.6-2 3.5 2 1.2a8 8 0 0 0 .1 2l-2 1.2 2 3.5 2.3-.6a7.7 7.7 0 0 0 1.7 1l.3 2.4h5.2l.3-2.4a7.7 7.7 0 0 0 1.7-1l2.3.6 2-3.5z\"
        fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" opacity=\"0.9\"/>
    </symbol>
    <symbol id=\"i-search\" viewBox=\"0 0 24 24\">
      <path d=\"M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/>
      <path d=\"M16.5 16.5 21 21\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
    </symbol>
    <symbol id=\"i-bell\" viewBox=\"0 0 24 24\">
      <path d=\"M18 8a6 6 0 1 0-12 0c0 7-3 7-3 7h18s-3 0-3-7z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/>
      <path d=\"M10 20a2 2 0 0 0 4 0\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
    </symbol>
    <symbol id=\"i-chevron\" viewBox=\"0 0 24 24\">
      <path d=\"M9 18 15 12 9 6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
    </symbol>
    <symbol id=\"i-dots\" viewBox=\"0 0 24 24\">
      <path d=\"M6 12h.01M12 12h.01M18 12h.01\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"4\" stroke-linecap=\"round\"/>
    </symbol>
  </svg>

  <div class=\"app\">
    {% include 'admin/Partials/sidebar.html.twig' %}

    <div class=\"main\">
      {% include 'admin/Partials/navbar.html.twig' %}

      <main class=\"content\">
        {% block admin_content %}{% endblock %}
      </main>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  <script src=\"{{ asset('assets/template_bo/js/app.js') }}\"></script>
{% endblock %}

", "admin/base_admin.html.twig", "C:\\Users\\Malek\\Desktop\\pi\\pulse\\templates\\admin\\base_admin.html.twig");
    }
}
