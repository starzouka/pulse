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

/* admin/index.html.twig */
class __TwigTemplate_68ad7cff85ed9c981aa967f4969808e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

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

        yield "PULSE - Dashboard Admin";
        
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
      <h2>Dashboard Admin</h2>
      <div class=\"pageSub\">Vue globale, alertes et acces rapide.</div>
    </div>
    <div class=\"formActions\">
      <button class=\"btn btnGhost\">Exporter CSV</button>
      <button class=\"btn btnPrimary\">Actualiser</button>
    </div>
  </div>

  <div class=\"filtersBar\">
    <div class=\"filterGroup\"><label>Periode</label><select><option>Aujourd'hui</option><option>7 jours</option><option>30 jours</option><option>Personnalise</option></select></div>
    <div class=\"filterGroup\"><label>Statut commande</label><select><option>ALL</option><option>PENDING</option><option>PAID</option><option>SHIPPED</option></select></div>
    <div class=\"filterGroup\"><label>Reports</label><select><option>ALL</option><option>OPEN</option><option>IN_REVIEW</option><option>CLOSED</option></select></div>
    <div class=\"filterGroup\"><label>Demandes tournois</label><select><option>ALL</option><option>PENDING</option><option>ACCEPTED</option><option>REFUSED</option></select></div>
  </div>

  <div class=\"kpiRow\">
    <div class=\"kpiCard\"><div class=\"kpiLabel\">Total utilisateurs</div><div class=\"kpiValue\">12,402</div><div class=\"listMeta\">+124 / 7 jours</div></div>
    <div class=\"kpiCard\"><div class=\"kpiLabel\">Commandes</div><div class=\"kpiValue\">2,140</div><div class=\"listMeta\">PENDING 120</div></div>
    <div class=\"kpiCard\"><div class=\"kpiLabel\">CA total</div><div class=\"kpiValue\">128,900 DT</div><div class=\"listMeta\">30 jours</div></div>
    <div class=\"kpiCard\"><div class=\"kpiLabel\">Signalements ouverts</div><div class=\"kpiValue\">14</div><div class=\"listMeta\">OPEN / IN_REVIEW</div></div>
    <div class=\"kpiCard\"><div class=\"kpiLabel\">Demandes tournois</div><div class=\"kpiValue\">6</div><div class=\"listMeta\">PENDING</div></div>
    <div class=\"kpiCard\"><div class=\"kpiLabel\">Tournois en cours</div><div class=\"kpiValue\">9</div><div class=\"listMeta\">ONGOING</div></div>
  </div>

  <div class=\"split\">
    <div>
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">GRAPHIQUES</h3><span class=\"listMeta\">Commandes & inscriptions</span></div>
        <div class=\"list\">
          <div class=\"listItem\"><span>Commandes par jour/semaine</span><span class=\"badge badge--info\">Chart</span></div>
          <div class=\"listItem\"><span>Repartition commandes par statut</span><span class=\"badge badge--info\">Chart</span></div>
          <div class=\"listItem\"><span>Inscriptions tournois par tournoi</span><span class=\"badge badge--info\">Chart</span></div>
        </div>
      </section>
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">DERNIERS SIGNALEMENTS</h3><button class=\"btn btnTiny\">Voir tout</button></div>
        <div class=\"list\">
          <div class=\"listItem\"><span>Report #1021 - POST</span><span class=\"badge badge--danger\">OPEN</span></div>
          <div class=\"listItem\"><span>Report #1020 - COMMENT</span><span class=\"badge badge--warning\">IN_REVIEW</span></div>
          <div class=\"listItem\"><span>Report #1018 - USER</span><span class=\"badge\">CLOSED</span></div>
        </div>
      </section>
    </div>
    <div>
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">DERNIERES COMMANDES</h3><button class=\"btn btnTiny\">Voir tout</button></div>

        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead><tr><th>order_number</th><th>user</th><th>status</th><th>total_amount</th></tr></thead>
            <tbody>
              <tr><td>ORD-2026-001</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>120 DT</td></tr>
              <tr><td>ORD-2026-001</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>120 DT</td></tr>
            </tbody>
          </table>
        </div>
      </section>
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">DEMANDES TOURNOIS</h3><button class=\"btn btnTiny\">Voir tout</button></div>
        <div class=\"list\">
          <div class=\"listItem\"><span>Pulse Winter Cup</span><span class=\"badge badge--warning\">PENDING</span></div>
          <div class=\"listItem\"><span>Community Clash</span><span class=\"badge badge--success\">ACCEPTED</span></div>
        </div>
      </section>
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">DERNIERS UTILISATEURS</h3><button class=\"btn btnTiny\">Voir tout</button></div>
        <div class=\"list\">
          <div class=\"listItem\"><span>@FrostByte</span><span class=\"listMeta\">FR • PLAYER</span></div>
          <div class=\"listItem\"><span>@NovaAim</span><span class=\"listMeta\">US • PLAYER</span></div>
          <div class=\"listItem\"><span>@ArenaOrg</span><span class=\"listMeta\">ORGANIZER</span></div>
        </div>
      </section>
    </div>
  </div>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <div>
        <h3 class=\"panelTitle\">SCHEMA UTILISE</h3>
        <div class=\"panelDesc\">Tables et colonnes principales.</div>
      </div>
    </div>
    <div class=\"list\">
      <div class=\"listItem\"><span><b>users</b></span><span class=\"listMeta\">user_id, username, email, role, created_at</span></div>
      <div class=\"listItem\"><span><b>orders</b></span><span class=\"listMeta\">order_id, status, total_amount, created_at</span></div>
      <div class=\"listItem\"><span><b>reports</b></span><span class=\"listMeta\">report_id, target_type, status</span></div>
      <div class=\"listItem\"><span><b>tournament_requests</b></span><span class=\"listMeta\">request_id, status, created_at</span></div>
      <div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listMeta\">tournament_id, status, start_date</span></div>
    </div>
  </section>
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
        return "admin/index.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Dashboard Admin{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Dashboard Admin</h2>
      <div class=\"pageSub\">Vue globale, alertes et acces rapide.</div>
    </div>
    <div class=\"formActions\">
      <button class=\"btn btnGhost\">Exporter CSV</button>
      <button class=\"btn btnPrimary\">Actualiser</button>
    </div>
  </div>

  <div class=\"filtersBar\">
    <div class=\"filterGroup\"><label>Periode</label><select><option>Aujourd'hui</option><option>7 jours</option><option>30 jours</option><option>Personnalise</option></select></div>
    <div class=\"filterGroup\"><label>Statut commande</label><select><option>ALL</option><option>PENDING</option><option>PAID</option><option>SHIPPED</option></select></div>
    <div class=\"filterGroup\"><label>Reports</label><select><option>ALL</option><option>OPEN</option><option>IN_REVIEW</option><option>CLOSED</option></select></div>
    <div class=\"filterGroup\"><label>Demandes tournois</label><select><option>ALL</option><option>PENDING</option><option>ACCEPTED</option><option>REFUSED</option></select></div>
  </div>

  <div class=\"kpiRow\">
    <div class=\"kpiCard\"><div class=\"kpiLabel\">Total utilisateurs</div><div class=\"kpiValue\">12,402</div><div class=\"listMeta\">+124 / 7 jours</div></div>
    <div class=\"kpiCard\"><div class=\"kpiLabel\">Commandes</div><div class=\"kpiValue\">2,140</div><div class=\"listMeta\">PENDING 120</div></div>
    <div class=\"kpiCard\"><div class=\"kpiLabel\">CA total</div><div class=\"kpiValue\">128,900 DT</div><div class=\"listMeta\">30 jours</div></div>
    <div class=\"kpiCard\"><div class=\"kpiLabel\">Signalements ouverts</div><div class=\"kpiValue\">14</div><div class=\"listMeta\">OPEN / IN_REVIEW</div></div>
    <div class=\"kpiCard\"><div class=\"kpiLabel\">Demandes tournois</div><div class=\"kpiValue\">6</div><div class=\"listMeta\">PENDING</div></div>
    <div class=\"kpiCard\"><div class=\"kpiLabel\">Tournois en cours</div><div class=\"kpiValue\">9</div><div class=\"listMeta\">ONGOING</div></div>
  </div>

  <div class=\"split\">
    <div>
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">GRAPHIQUES</h3><span class=\"listMeta\">Commandes & inscriptions</span></div>
        <div class=\"list\">
          <div class=\"listItem\"><span>Commandes par jour/semaine</span><span class=\"badge badge--info\">Chart</span></div>
          <div class=\"listItem\"><span>Repartition commandes par statut</span><span class=\"badge badge--info\">Chart</span></div>
          <div class=\"listItem\"><span>Inscriptions tournois par tournoi</span><span class=\"badge badge--info\">Chart</span></div>
        </div>
      </section>
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">DERNIERS SIGNALEMENTS</h3><button class=\"btn btnTiny\">Voir tout</button></div>
        <div class=\"list\">
          <div class=\"listItem\"><span>Report #1021 - POST</span><span class=\"badge badge--danger\">OPEN</span></div>
          <div class=\"listItem\"><span>Report #1020 - COMMENT</span><span class=\"badge badge--warning\">IN_REVIEW</span></div>
          <div class=\"listItem\"><span>Report #1018 - USER</span><span class=\"badge\">CLOSED</span></div>
        </div>
      </section>
    </div>
    <div>
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">DERNIERES COMMANDES</h3><button class=\"btn btnTiny\">Voir tout</button></div>

        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead><tr><th>order_number</th><th>user</th><th>status</th><th>total_amount</th></tr></thead>
            <tbody>
              <tr><td>ORD-2026-001</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>120 DT</td></tr>
              <tr><td>ORD-2026-001</td><td>zed_99</td><td><span class=\"badge badge--warning\">PENDING</span></td><td>120 DT</td></tr>
            </tbody>
          </table>
        </div>
      </section>
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">DEMANDES TOURNOIS</h3><button class=\"btn btnTiny\">Voir tout</button></div>
        <div class=\"list\">
          <div class=\"listItem\"><span>Pulse Winter Cup</span><span class=\"badge badge--warning\">PENDING</span></div>
          <div class=\"listItem\"><span>Community Clash</span><span class=\"badge badge--success\">ACCEPTED</span></div>
        </div>
      </section>
      <section class=\"panel\">
        <div class=\"panelHeader\"><h3 class=\"panelTitle\">DERNIERS UTILISATEURS</h3><button class=\"btn btnTiny\">Voir tout</button></div>
        <div class=\"list\">
          <div class=\"listItem\"><span>@FrostByte</span><span class=\"listMeta\">FR • PLAYER</span></div>
          <div class=\"listItem\"><span>@NovaAim</span><span class=\"listMeta\">US • PLAYER</span></div>
          <div class=\"listItem\"><span>@ArenaOrg</span><span class=\"listMeta\">ORGANIZER</span></div>
        </div>
      </section>
    </div>
  </div>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <div>
        <h3 class=\"panelTitle\">SCHEMA UTILISE</h3>
        <div class=\"panelDesc\">Tables et colonnes principales.</div>
      </div>
    </div>
    <div class=\"list\">
      <div class=\"listItem\"><span><b>users</b></span><span class=\"listMeta\">user_id, username, email, role, created_at</span></div>
      <div class=\"listItem\"><span><b>orders</b></span><span class=\"listMeta\">order_id, status, total_amount, created_at</span></div>
      <div class=\"listItem\"><span><b>reports</b></span><span class=\"listMeta\">report_id, target_type, status</span></div>
      <div class=\"listItem\"><span><b>tournament_requests</b></span><span class=\"listMeta\">request_id, status, created_at</span></div>
      <div class=\"listItem\"><span><b>tournaments</b></span><span class=\"listMeta\">tournament_id, status, start_date</span></div>
    </div>
  </section>
{% endblock %}

", "admin/index.html.twig", "C:\\Users\\Malek\\Desktop\\pi\\pulse\\templates\\admin\\index.html.twig");
    }
}
