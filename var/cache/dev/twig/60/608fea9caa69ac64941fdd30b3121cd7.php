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

/* front/partials/_captain_team_selector.html.twig */
class __TwigTemplate_d6956ac172a0407263a8d19a50da54d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_captain_team_selector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_captain_team_selector.html.twig"));

        // line 1
        $context["selector_route"] = ((array_key_exists("selector_route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["selector_route"]) || array_key_exists("selector_route", $context) ? $context["selector_route"] : (function () { throw new RuntimeError('Variable "selector_route" does not exist.', 1, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1)));
        // line 2
        yield "
";
        // line 3
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 3, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "  <form class=\"panel\" method=\"get\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["selector_route"]) || array_key_exists("selector_route", $context) ? $context["selector_route"] : (function () { throw new RuntimeError('Variable "selector_route" does not exist.', 4, $this->source); })()));
            yield "\">
    <div class=\"filtersRow\">
      <div class=\"select\">
        <select name=\"team\" aria-label=\"Equipe active\">
          ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 9
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 9), "html", null, true);
                yield "\" ";
                yield ((((isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 9, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 9, $this->source); })()), "teamId", [], "any", false, false, false, 9) == CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 9)))) ? ("selected") : (""));
                yield ">
              ";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 10), "html", null, true);
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 10), "html", null, true);
                }
                // line 11
                yield "            </option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "        </select>
      </div>

      ";
            // line 16
            if ((array_key_exists("keep_mode", $context) && (isset($context["keep_mode"]) || array_key_exists("keep_mode", $context) ? $context["keep_mode"] : (function () { throw new RuntimeError('Variable "keep_mode" does not exist.', 16, $this->source); })()))) {
                // line 17
                yield "        <input type=\"hidden\" name=\"mode\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["keep_mode"]) || array_key_exists("keep_mode", $context) ? $context["keep_mode"] : (function () { throw new RuntimeError('Variable "keep_mode" does not exist.', 17, $this->source); })()), "html", null, true);
                yield "\">
      ";
            }
            // line 19
            yield "
      <button class=\"btn btn--ghost\" type=\"submit\">Changer</button>
    </div>
  </form>
";
        } else {
            // line 24
            yield "  <div class=\"panel\">
    <div class=\"emptyState\">
      Aucune equipe disponible. Creez votre premiere equipe pour utiliser l'espace capitaine.
      <div style=\"margin-top:10px;\">
        <a class=\"btn btn--primary\" href=\"";
            // line 28
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage", ["mode" => "create"]);
            yield "\">Creer une equipe</a>
      </div>
    </div>
  </div>
";
        }
        // line 33
        yield "
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
        return "front/partials/_captain_team_selector.html.twig";
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
        return array (  121 => 33,  113 => 28,  107 => 24,  100 => 19,  94 => 17,  92 => 16,  87 => 13,  80 => 11,  74 => 10,  67 => 9,  63 => 8,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set selector_route = selector_route|default(app.request.attributes.get('_route')) %}

{% if captain_teams is not empty %}
  <form class=\"panel\" method=\"get\" action=\"{{ path(selector_route) }}\">
    <div class=\"filtersRow\">
      <div class=\"select\">
        <select name=\"team\" aria-label=\"Equipe active\">
          {% for team in captain_teams %}
            <option value=\"{{ team.teamId }}\" {{ active_team and active_team.teamId == team.teamId ? 'selected' : '' }}>
              {{ team.name }}{% if team.region %} - {{ team.region }}{% endif %}
            </option>
          {% endfor %}
        </select>
      </div>

      {% if keep_mode is defined and keep_mode %}
        <input type=\"hidden\" name=\"mode\" value=\"{{ keep_mode }}\">
      {% endif %}

      <button class=\"btn btn--ghost\" type=\"submit\">Changer</button>
    </div>
  </form>
{% else %}
  <div class=\"panel\">
    <div class=\"emptyState\">
      Aucune equipe disponible. Creez votre premiere equipe pour utiliser l'espace capitaine.
      <div style=\"margin-top:10px;\">
        <a class=\"btn btn--primary\" href=\"{{ path('front_captain_team_manage', {mode: 'create'}) }}\">Creer une equipe</a>
      </div>
    </div>
  </div>
{% endif %}

", "front/partials/_captain_team_selector.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\partials\\_captain_team_selector.html.twig");
    }
}
