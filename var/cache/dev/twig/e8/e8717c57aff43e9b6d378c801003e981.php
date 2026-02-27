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

/* front/pages/captain-orders.html.twig */
class __TwigTemplate_3f0406d4ef6f750b5448d2558ff64893 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-orders.html.twig"));

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

        yield "PULSE - Commandes equipe";
        
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
        yield "  ";
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Commandes", "hero_sub" => "Commandes contenant des produits de l'equipe active.", "breadcrumb_current" => "Commandes"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "orders", "active_team" =>         // line 18
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 18, $this->source); })())]));
        // line 20
        yield "
        <div>
          ";
        // line 22
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 23
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 23, $this->source); })()), "active_team" =>         // line 24
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 24, $this->source); })()), "selector_route" => "front_captain_orders"]));
        // line 27
        yield "
          <form class=\"panel\" method=\"get\" action=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_orders");
        yield "\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 30, $this->source); })()), "teamId", [], "any", false, false, false, 30), "html", null, true);
        yield "\">
              <div class=\"select\">
                <select name=\"status\">
                  <option value=\"\">Tous statuts</option>
                  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["status_options"]) || array_key_exists("status_options", $context) ? $context["status_options"] : (function () { throw new RuntimeError('Variable "status_options" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 35
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["status_filter"]) || array_key_exists("status_filter", $context) ? $context["status_filter"] : (function () { throw new RuntimeError('Variable "status_filter" does not exist.', 35, $this->source); })()) == $context["status"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                </select>
              </div>
              <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
            </div>
          </form>

          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">COMMANDES LIEES</h3>
                <div class=\"panel__desc\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["orders_data"]) || array_key_exists("orders_data", $context) ? $context["orders_data"] : (function () { throw new RuntimeError('Variable "orders_data" does not exist.', 47, $this->source); })())), "html", null, true);
        yield " commande(s) - Chiffre equipe: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["team_revenue"]) || array_key_exists("team_revenue", $context) ? $context["team_revenue"] : (function () { throw new RuntimeError('Variable "team_revenue" does not exist.', 47, $this->source); })()), 2, ".", " "), "html", null, true);
        yield " DT</div>
              </div>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Commande</th>
                    <th>Client</th>
                    <th>Date</th>
                    <th>Articles equipe</th>
                    <th>Montant equipe</th>
                    <th>Statut</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders_data"]) || array_key_exists("orders_data", $context) ? $context["orders_data"] : (function () { throw new RuntimeError('Variable "orders_data" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 65
            yield "                    ";
            $context["order"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "order", [], "any", false, false, false, 65);
            // line 66
            yield "                    <tr>
                      <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 67, $this->source); })()), "orderNumber", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                      <td>";
            // line 68
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "userId", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "userId", [], "any", false, false, false, 68), "displayName", [], "any", false, false, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "userId", [], "any", false, false, false, 68), "displayName", [], "any", false, false, false, 68), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "userId", [], "any", false, false, false, 68), "username", [], "any", false, false, false, 68), "html", null, true)))) : ("-"));
            yield "</td>
                      <td>";
            // line 69
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()), "createdAt", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()), "createdAt", [], "any", false, false, false, 69), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "team_quantity", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
                      <td>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "team_amount", [], "any", false, false, false, 71), 2, ".", " "), "html", null, true);
            yield " DT</td>
                      <td>
                        ";
            // line 73
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 73, $this->source); })()), "status", [], "any", false, false, false, 73)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 73, $this->source); })()), "status", [], "any", false, false, false, 73)) : ("PENDING"));
            // line 74
            yield "                        <span class=\"badge ";
            yield ((CoreExtension::inFilter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 74, $this->source); })()), ["PAID", "DELIVERED"])) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 74, $this->source); })()) == "CANCELLED")) ? ("badge--danger") : (((CoreExtension::inFilter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 74, $this->source); })()), ["SHIPPED"])) ? ("badge--info") : (""))))));
            yield "\">
                          ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 75, $this->source); })()), "html", null, true);
            yield "
                        </span>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 79
        if (!$context['_iterated']) {
            // line 80
            yield "                    <tr>
                      <td colspan=\"6\">Aucune commande trouvee pour cette equipe.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 91
        yield from $this->load("front/partials/_footer.html.twig", 91)->unwrap()->yield($context);
        // line 92
        yield "    </section>
  </main>

  ";
        // line 95
        yield from $this->load("front/partials/_auth_modal.html.twig", 95)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/captain-orders.html.twig";
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
        return array (  261 => 95,  256 => 92,  254 => 91,  245 => 84,  236 => 80,  234 => 79,  225 => 75,  220 => 74,  218 => 73,  213 => 71,  209 => 70,  205 => 69,  201 => 68,  197 => 67,  194 => 66,  191 => 65,  186 => 64,  164 => 47,  152 => 37,  139 => 35,  135 => 34,  128 => 30,  123 => 28,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Commandes equipe{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'CAPITAINE',
    hero_title: 'Commandes',
    hero_sub: \"Commandes contenant des produits de l'equipe active.\",
    breadcrumb_current: 'Commandes'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_captain_side_nav.html.twig' with {
          active: 'orders',
          active_team: active_team
        } %}

        <div>
          {% include 'front/partials/_captain_team_selector.html.twig' with {
            captain_teams: captain_teams,
            active_team: active_team,
            selector_route: 'front_captain_orders'
          } %}

          <form class=\"panel\" method=\"get\" action=\"{{ path('front_captain_orders') }}\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"{{ active_team.teamId }}\">
              <div class=\"select\">
                <select name=\"status\">
                  <option value=\"\">Tous statuts</option>
                  {% for status in status_options %}
                    <option value=\"{{ status }}\" {{ status_filter == status ? 'selected' : '' }}>{{ status }}</option>
                  {% endfor %}
                </select>
              </div>
              <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
            </div>
          </form>

          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">COMMANDES LIEES</h3>
                <div class=\"panel__desc\">{{ orders_data|length }} commande(s) - Chiffre equipe: {{ team_revenue|number_format(2, '.', ' ') }} DT</div>
              </div>
            </div>

            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Commande</th>
                    <th>Client</th>
                    <th>Date</th>
                    <th>Articles equipe</th>
                    <th>Montant equipe</th>
                    <th>Statut</th>
                  </tr>
                </thead>
                <tbody>
                  {% for row in orders_data %}
                    {% set order = row.order %}
                    <tr>
                      <td>{{ order.orderNumber }}</td>
                      <td>{{ order.userId ? (order.userId.displayName ?: order.userId.username) : '-' }}</td>
                      <td>{{ order.createdAt ? order.createdAt|date('d/m/Y H:i') : '-' }}</td>
                      <td>{{ row.team_quantity }}</td>
                      <td>{{ row.team_amount|number_format(2, '.', ' ') }} DT</td>
                      <td>
                        {% set status = order.status ?: 'PENDING' %}
                        <span class=\"badge {{ status in ['PAID', 'DELIVERED'] ? 'badge--success' : (status == 'CANCELLED' ? 'badge--danger' : (status in ['SHIPPED'] ? 'badge--info' : '')) }}\">
                          {{ status }}
                        </span>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"6\">Aucune commande trouvee pour cette equipe.</td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}

", "front/pages/captain-orders.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\captain-orders.html.twig");
    }
}
