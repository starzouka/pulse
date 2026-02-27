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

/* front/partials/_pagination.html.twig */
class __TwigTemplate_d32f773a1cf70e779c74c4ddec62bfe7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_pagination.html.twig"));

        // line 1
        if ((array_key_exists("pagination", $context) && (((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "total_pages", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 1, $this->source); })()), "total_pages", [], "any", false, false, false, 1), 1)) : (1)) > 1))) {
            // line 2
            yield "  ";
            $context["routeName"] = ((array_key_exists("route_name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 2, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", ["_route"], "method", false, false, false, 2))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", ["_route"], "method", false, false, false, 2)));
            // line 3
            yield "  ";
            $context["routeParams"] = ((array_key_exists("route_params", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 3, $this->source); })()), [])) : ([]));
            // line 4
            yield "  ";
            $context["queryParams"] = ((array_key_exists("query_params", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["query_params"]) || array_key_exists("query_params", $context) ? $context["query_params"] : (function () { throw new RuntimeError('Variable "query_params" does not exist.', 4, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "all", [], "any", false, false, false, 4))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "all", [], "any", false, false, false, 4)));
            // line 5
            yield "  ";
            $context["pageParam"] = ((array_key_exists("page_param", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page_param"]) || array_key_exists("page_param", $context) ? $context["page_param"] : (function () { throw new RuntimeError('Variable "page_param" does not exist.', 5, $this->source); })()), "page")) : ("page"));
            // line 6
            yield "
  <div class=\"panel paginationBar\">
    <div class=\"paginationBar__meta\">
      Page ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 9, $this->source); })()), "current_page", [], "any", false, false, false, 9), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 9, $this->source); })()), "total_pages", [], "any", false, false, false, 9), "html", null, true);
            yield " · ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 9, $this->source); })()), "total_items", [], "any", false, false, false, 9), "html", null, true);
            yield " resultat(s)
    </div>

    <div class=\"paginationBar__actions\">
      ";
            // line 13
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 13, $this->source); })()), "has_previous", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 14
                yield "        <a class=\"btn btn--ghost\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 14, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 14, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 14, $this->source); })()), [ (string)(isset($context["pageParam"]) || array_key_exists("pageParam", $context) ? $context["pageParam"] : (function () { throw new RuntimeError('Variable "pageParam" does not exist.', 14, $this->source); })()) => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 14, $this->source); })()), "previous_page", [], "any", false, false, false, 14)]))), "html", null, true);
                yield "\">Precedent</a>
      ";
            } else {
                // line 16
                yield "        <span class=\"btn btn--ghost is-disabled\" aria-disabled=\"true\">Precedent</span>
      ";
            }
            // line 18
            yield "
      ";
            // line 19
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()), "has_next", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "        <a class=\"btn btn--ghost\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 20, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 20, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 20, $this->source); })()), [ (string)(isset($context["pageParam"]) || array_key_exists("pageParam", $context) ? $context["pageParam"] : (function () { throw new RuntimeError('Variable "pageParam" does not exist.', 20, $this->source); })()) => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 20, $this->source); })()), "next_page", [], "any", false, false, false, 20)]))), "html", null, true);
                yield "\">Suivant</a>
      ";
            } else {
                // line 22
                yield "        <span class=\"btn btn--ghost is-disabled\" aria-disabled=\"true\">Suivant</span>
      ";
            }
            // line 24
            yield "    </div>
  </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/partials/_pagination.html.twig";
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
        return array (  105 => 24,  101 => 22,  95 => 20,  93 => 19,  90 => 18,  86 => 16,  80 => 14,  78 => 13,  67 => 9,  62 => 6,  59 => 5,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if pagination is defined and pagination.total_pages|default(1) > 1 %}
  {% set routeName = route_name|default(app.request.attributes.get('_route')) %}
  {% set routeParams = route_params|default({}) %}
  {% set queryParams = query_params|default(app.request.query.all) %}
  {% set pageParam = page_param|default('page') %}

  <div class=\"panel paginationBar\">
    <div class=\"paginationBar__meta\">
      Page {{ pagination.current_page }} / {{ pagination.total_pages }} · {{ pagination.total_items }} resultat(s)
    </div>

    <div class=\"paginationBar__actions\">
      {% if pagination.has_previous %}
        <a class=\"btn btn--ghost\" href=\"{{ path(routeName, routeParams|merge(queryParams|merge({(pageParam): pagination.previous_page}))) }}\">Precedent</a>
      {% else %}
        <span class=\"btn btn--ghost is-disabled\" aria-disabled=\"true\">Precedent</span>
      {% endif %}

      {% if pagination.has_next %}
        <a class=\"btn btn--ghost\" href=\"{{ path(routeName, routeParams|merge(queryParams|merge({(pageParam): pagination.next_page}))) }}\">Suivant</a>
      {% else %}
        <span class=\"btn btn--ghost is-disabled\" aria-disabled=\"true\">Suivant</span>
      {% endif %}
    </div>
  </div>
{% endif %}
", "front/partials/_pagination.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\partials\\_pagination.html.twig");
    }
}
