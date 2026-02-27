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

/* base.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/de/de8dd70dafb22706c8e3eadb816659cf.php
class __TwigTemplate_970fdd9532d0943fb87647c0c7c340d6 extends Template
========
class __TwigTemplate_3c26dd0f8059b34a6093df62224a09a2 extends Template
>>>>>>>> main:var/cache/dev/twig/bf/306a82b1fb3b4b5423b06fed9115a7b3.php
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 12
        yield "    </head>
    <body class=\"antialiased\">
        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 15
        yield "
        ";
        // line 16
<<<<<<<< HEAD:var/cache/dev/twig/de/de8dd70dafb22706c8e3eadb816659cf.php
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", ["_route"], "method", false, false, false, 16)) && is_string($_v1 = "front_") && str_starts_with($_v0, $_v1))) {
            // line 17
            yield "            ";
            yield from $this->load("front/partials/_account_sidebar.html.twig", 17)->unwrap()->yield($context);
            // line 18
            yield "        ";
        }
        // line 19
        yield "
        ";
        // line 20
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 33
========
        $context["two_factor_pending"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "hasSession", [], "method", false, false, false, 16)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "get", ["_2fa_verified", false], "method", false, false, false, 16) != true));
        // line 17
        yield "        ";
        if (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17)) && is_string($_v1 = "front_") && str_starts_with($_v0, $_v1)) &&  !(isset($context["two_factor_pending"]) || array_key_exists("two_factor_pending", $context) ? $context["two_factor_pending"] : (function () { throw new RuntimeError('Variable "two_factor_pending" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "            ";
            yield from $this->load("front/partials/_account_sidebar.html.twig", 18)->unwrap()->yield($context);
            // line 19
            yield "        ";
        }
        // line 20
        yield "
        ";
        // line 21
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 34
>>>>>>>> main:var/cache/dev/twig/bf/306a82b1fb3b4b5423b06fed9115a7b3.php
        yield "    </body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "PULSE";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "            <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_fo/css/styles.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_fo/css/tailwind.css"), "html", null, true);
        yield "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

<<<<<<<< HEAD:var/cache/dev/twig/de/de8dd70dafb22706c8e3eadb816659cf.php
    // line 20
========
    // line 21
>>>>>>>> main:var/cache/dev/twig/bf/306a82b1fb3b4b5423b06fed9115a7b3.php
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

<<<<<<<< HEAD:var/cache/dev/twig/de/de8dd70dafb22706c8e3eadb816659cf.php
        // line 21
        yield "            <script>
                window.PULSE_ROUTES = {
                    tournamentDetail: \"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail");
        yield "\",
                    gameDetail: \"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail");
        yield "\",
                    matchDetail: \"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_match_detail");
        yield "\",
                    teamDetail: \"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
        yield "\",
                    playerDetail: \"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile");
        yield "\",
                    productDetail: \"";
        // line 28
========
        // line 22
        yield "            <script>
                window.PULSE_ROUTES = {
                    tournamentDetail: \"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_tournament_detail");
        yield "\",
                    gameDetail: \"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_game_detail");
        yield "\",
                    matchDetail: \"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_match_detail");
        yield "\",
                    teamDetail: \"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
        yield "\",
                    playerDetail: \"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile");
        yield "\",
                    productDetail: \"";
        // line 29
>>>>>>>> main:var/cache/dev/twig/bf/306a82b1fb3b4b5423b06fed9115a7b3.php
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_detail");
        yield "\"
                };
            </script>
            <script src=\"";
<<<<<<<< HEAD:var/cache/dev/twig/de/de8dd70dafb22706c8e3eadb816659cf.php
        // line 31
========
        // line 32
>>>>>>>> main:var/cache/dev/twig/bf/306a82b1fb3b4b5423b06fed9115a7b3.php
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_fo/js/app.js"), "html", null, true);
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
        return "base.html.twig";
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
<<<<<<<< HEAD:var/cache/dev/twig/de/de8dd70dafb22706c8e3eadb816659cf.php
        return array (  221 => 31,  215 => 28,  211 => 27,  207 => 26,  203 => 25,  199 => 24,  195 => 23,  191 => 21,  178 => 20,  156 => 14,  143 => 10,  138 => 9,  125 => 8,  102 => 6,  88 => 33,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 12,  64 => 8,  59 => 6,  52 => 1,);
========
        return array (  224 => 32,  218 => 29,  214 => 28,  210 => 27,  206 => 26,  202 => 25,  198 => 24,  194 => 22,  181 => 21,  159 => 14,  146 => 10,  141 => 9,  128 => 8,  105 => 6,  91 => 34,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 12,  64 => 8,  59 => 6,  52 => 1,);
>>>>>>>> main:var/cache/dev/twig/bf/306a82b1fb3b4b5423b06fed9115a7b3.php
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}PULSE{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('assets/template_fo/css/styles.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/template_fo/css/tailwind.css') }}\">
        {% endblock %}
    </head>
    <body class=\"antialiased\">
        {% block body %}{% endblock %}

<<<<<<<< HEAD:var/cache/dev/twig/de/de8dd70dafb22706c8e3eadb816659cf.php
        {% if app.request.attributes.get('_route') starts with 'front_' %}
========
        {% set two_factor_pending = app.user and app.request.hasSession() and app.session.get('_2fa_verified', false) != true %}
        {% if app.request.attributes.get('_route') starts with 'front_' and not two_factor_pending %}
>>>>>>>> main:var/cache/dev/twig/bf/306a82b1fb3b4b5423b06fed9115a7b3.php
            {% include 'front/partials/_account_sidebar.html.twig' %}
        {% endif %}

        {% block javascripts %}
            <script>
                window.PULSE_ROUTES = {
                    tournamentDetail: \"{{ path('front_tournament_detail') }}\",
                    gameDetail: \"{{ path('front_game_detail') }}\",
                    matchDetail: \"{{ path('front_match_detail') }}\",
                    teamDetail: \"{{ path('front_team_detail') }}\",
                    playerDetail: \"{{ path('front_player_profile') }}\",
                    productDetail: \"{{ path('front_product_detail') }}\"
                };
            </script>
            <script src=\"{{ asset('assets/template_fo/js/app.js') }}\"></script>
        {% endblock %}
    </body>
</html>

<<<<<<<< HEAD:var/cache/dev/twig/de/de8dd70dafb22706c8e3eadb816659cf.php
", "base.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\base.html.twig");
========
", "base.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\base.html.twig");
>>>>>>>> main:var/cache/dev/twig/bf/306a82b1fb3b4b5423b06fed9115a7b3.php
    }
}
