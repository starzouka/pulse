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

/* admin/pages/catalog-dashboard.html.twig */
class __TwigTemplate_1d4a78e7935f06b8312fb5f9459e7e18 extends Template
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
            'admin_content' => [$this, 'block_admin_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/catalog-dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/catalog-dashboard.html.twig"));

        $this->parent = $this->load("admin/base_admin.html.twig", 1);
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

        yield "PULSE - KPI catalogue";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "  <div class=\"pageHeader\">
    <div>
      <h2>Catalog Dashboard</h2>
      <div class=\"pageSub\">KPI catalogue: publication, review, categories mensuelles et jeux tendance.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games");
        yield "\">Gestion jeux</a>
      <a class=\"btn btnPrimary\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalog_dashboard");
        yield "\">Actualiser</a>
    </div>
  </div>

  <div class=\"kpiRow\">
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Jeux total</div>
      <div class=\"kpiValue\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "total_games", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 20, $this->source); })()), "total_games", [], "any", false, false, false, 20), 0)) : (0)), "html", null, true);
        yield "</div>
      <div class=\"listMeta\">Catalogue actuel</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Taux publication</div>
      <div class=\"kpiValue\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "publication_rate", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 25, $this->source); })()), "publication_rate", [], "any", false, false, false, 25), 0)) : (0)), 2, ".", " "), "html", null, true);
        yield "%</div>
      <div class=\"listMeta\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "published_games", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 26, $this->source); })()), "published_games", [], "any", false, false, false, 26), 0)) : (0)), "html", null, true);
        yield " publies / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "total_games", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 26, $this->source); })()), "total_games", [], "any", false, false, false, 26), 0)) : (0)), "html", null, true);
        yield "</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Delai moyen review</div>
      <div class=\"kpiValue\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "average_review_delay_hours", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 30, $this->source); })()), "average_review_delay_hours", [], "any", false, false, false, 30), 0)) : (0)), 1, ".", " "), "html", null, true);
        yield "h</div>
      <div class=\"listMeta\">PENDING + PUBLISHED + ARCHIVED</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Pipeline</div>
      <div class=\"kpiValue\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "pending_games", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 35, $this->source); })()), "pending_games", [], "any", false, false, false, 35), 0)) : (0)), "html", null, true);
        yield " pending</div>
      <div class=\"listMeta\">Draft: ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "draft_games", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 36, $this->source); })()), "draft_games", [], "any", false, false, false, 36), 0)) : (0)), "html", null, true);
        yield " · Archived: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["kpi"] ?? null), "archived_games", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["kpi"]) || array_key_exists("kpi", $context) ? $context["kpi"] : (function () { throw new RuntimeError('Variable "kpi" does not exist.', 36, $this->source); })()), "archived_games", [], "any", false, false, false, 36), 0)) : (0)), "html", null, true);
        yield "</div>
    </div>
  </div>

  <div class=\"split\">
    <section class=\"panel\">
      <div class=\"panelHeader\">
        <h3 class=\"panelTitle\">Top categories mensuelles</h3>
        <span class=\"listMeta\">Mois ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["month_label"]) || array_key_exists("month_label", $context) ? $context["month_label"] : (function () { throw new RuntimeError('Variable "month_label" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "</span>
      </div>
      <div class=\"dataTableWrap\">
        <table class=\"dataTable\">
          <thead>
            <tr>
              <th>#</th>
              <th>Categorie</th>
              <th>Volume</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_categories_monthly"]) || array_key_exists("top_categories_monthly", $context) ? $context["top_categories_monthly"] : (function () { throw new RuntimeError('Variable "top_categories_monthly" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 57
            yield "              <tr>
                <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "category_name", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
              </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 62
        if (!$context['_iterated']) {
            // line 63
            yield "              <tr>
                <td colspan=\"3\" class=\"listMeta\">Aucune donnee mensuelle.</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "          </tbody>
        </table>
      </div>
    </section>

    <section class=\"panel\">
      <div class=\"panelHeader\">
        <h3 class=\"panelTitle\">Trending games</h3>
        <span class=\"listMeta\">Score intelligent</span>
      </div>
      <div class=\"dataTableWrap\">
        <table class=\"dataTable\">
          <thead>
            <tr>
              <th>Jeu</th>
              <th>Statut</th>
              <th>Vues</th>
              <th>Favoris</th>
              <th>Score</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trending_games"]) || array_key_exists("trending_games", $context) ? $context["trending_games"] : (function () { throw new RuntimeError('Variable "trending_games" does not exist.', 89, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 90
            yield "              <tr>
                <td>
                  <div style=\"display:flex;flex-direction:column;\">
                    <span>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 93), "html", null, true);
            yield "</span>
                    <span class=\"listMeta\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "slug", [], "any", false, false, false, 94), "html", null, true);
            yield "</span>
                  </div>
                </td>
                <td><span class=\"badge badge--info\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "status", [], "any", false, false, false, 97), "html", null, true);
            yield "</span></td>
                <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "viewsCount", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "favoritesCount", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                <td><b>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "popularityScore", [], "any", false, false, false, 100), "html", null, true);
            yield "</b></td>
              </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 102
        if (!$context['_iterated']) {
            // line 103
            yield "              <tr>
                <td colspan=\"5\" class=\"listMeta\">Aucun jeu tendance.</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "          </tbody>
        </table>
      </div>
    </section>
  </div>
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
        return "admin/pages/catalog-dashboard.html.twig";
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
        return array (  312 => 107,  303 => 103,  301 => 102,  294 => 100,  290 => 99,  286 => 98,  282 => 97,  276 => 94,  272 => 93,  267 => 90,  262 => 89,  238 => 67,  229 => 63,  227 => 62,  212 => 60,  208 => 59,  204 => 58,  201 => 57,  183 => 56,  168 => 44,  155 => 36,  151 => 35,  143 => 30,  134 => 26,  130 => 25,  122 => 20,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - KPI catalogue{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Catalog Dashboard</h2>
      <div class=\"pageSub\">KPI catalogue: publication, review, categories mensuelles et jeux tendance.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_games') }}\">Gestion jeux</a>
      <a class=\"btn btnPrimary\" href=\"{{ path('admin_catalog_dashboard') }}\">Actualiser</a>
    </div>
  </div>

  <div class=\"kpiRow\">
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Jeux total</div>
      <div class=\"kpiValue\">{{ kpi.total_games|default(0) }}</div>
      <div class=\"listMeta\">Catalogue actuel</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Taux publication</div>
      <div class=\"kpiValue\">{{ kpi.publication_rate|default(0)|number_format(2, '.', ' ') }}%</div>
      <div class=\"listMeta\">{{ kpi.published_games|default(0) }} publies / {{ kpi.total_games|default(0) }}</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Delai moyen review</div>
      <div class=\"kpiValue\">{{ kpi.average_review_delay_hours|default(0)|number_format(1, '.', ' ') }}h</div>
      <div class=\"listMeta\">PENDING + PUBLISHED + ARCHIVED</div>
    </div>
    <div class=\"kpiCard\">
      <div class=\"kpiLabel\">Pipeline</div>
      <div class=\"kpiValue\">{{ kpi.pending_games|default(0) }} pending</div>
      <div class=\"listMeta\">Draft: {{ kpi.draft_games|default(0) }} · Archived: {{ kpi.archived_games|default(0) }}</div>
    </div>
  </div>

  <div class=\"split\">
    <section class=\"panel\">
      <div class=\"panelHeader\">
        <h3 class=\"panelTitle\">Top categories mensuelles</h3>
        <span class=\"listMeta\">Mois {{ month_label }}</span>
      </div>
      <div class=\"dataTableWrap\">
        <table class=\"dataTable\">
          <thead>
            <tr>
              <th>#</th>
              <th>Categorie</th>
              <th>Volume</th>
            </tr>
          </thead>
          <tbody>
            {% for row in top_categories_monthly %}
              <tr>
                <td>{{ loop.index }}</td>
                <td>{{ row.category_name }}</td>
                <td>{{ row.total }}</td>
              </tr>
            {% else %}
              <tr>
                <td colspan=\"3\" class=\"listMeta\">Aucune donnee mensuelle.</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </section>

    <section class=\"panel\">
      <div class=\"panelHeader\">
        <h3 class=\"panelTitle\">Trending games</h3>
        <span class=\"listMeta\">Score intelligent</span>
      </div>
      <div class=\"dataTableWrap\">
        <table class=\"dataTable\">
          <thead>
            <tr>
              <th>Jeu</th>
              <th>Statut</th>
              <th>Vues</th>
              <th>Favoris</th>
              <th>Score</th>
            </tr>
          </thead>
          <tbody>
            {% for game in trending_games %}
              <tr>
                <td>
                  <div style=\"display:flex;flex-direction:column;\">
                    <span>{{ game.name }}</span>
                    <span class=\"listMeta\">{{ game.slug }}</span>
                  </div>
                </td>
                <td><span class=\"badge badge--info\">{{ game.status }}</span></td>
                <td>{{ game.viewsCount }}</td>
                <td>{{ game.favoritesCount }}</td>
                <td><b>{{ game.popularityScore }}</b></td>
              </tr>
            {% else %}
              <tr>
                <td colspan=\"5\" class=\"listMeta\">Aucun jeu tendance.</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </section>
  </div>
{% endblock %}
", "admin/pages/catalog-dashboard.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\catalog-dashboard.html.twig");
    }
}
