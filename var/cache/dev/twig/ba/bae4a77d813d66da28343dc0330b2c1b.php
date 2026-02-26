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

/* admin/pdf/_list_export_base.html.twig */
class __TwigTemplate_8283738ad51f99d11fa7ddc2732999e3 extends Template
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
            'report_table' => [$this, 'block_report_table'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/_list_export_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/_list_export_base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\" />
  <title>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("reportTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["reportTitle"]) || array_key_exists("reportTitle", $context) ? $context["reportTitle"] : (function () { throw new RuntimeError('Variable "reportTitle" does not exist.', 5, $this->source); })()), "Export")) : ("Export")), "html", null, true);
        yield "</title>
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_bo/css/styles.css")), "html", null, true);
        yield "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template_bo/css/tailwind.css")), "html", null, true);
        yield "\" />
  <style>
    @page { margin: 10mm; }

    /* Keep the BO template CSS, but add print-friendly tweaks for readability */
    :root{
      --card: rgba(255,255,255,.075);
      --card2: rgba(255,255,255,.055);
      --border: rgba(255,255,255,.14);
      --muted: rgba(255,255,255,.72);
      --muted2: rgba(255,255,255,.56);
      --shadow: 0 10px 26px rgba(0,0,0,.32);
    }

    html, body {
      height: auto !important;
    }

    body {
      font-size: 14px !important;
      overflow: visible !important;
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
    }

    /* Better clarity in PDF than the live UI stars overlay */
    body::before {
      display: none !important;
    }

    .app,
    .main {
      display: block !important;
      min-height: 0 !important;
    }

    .content {
      max-width: none !important;
      width: 100% !important;
      padding: 18px !important;
    }

    .content > * + * {
      margin-top: 14px !important;
    }

    .pageHeader {
      display: block !important;
      margin: 6px 0 14px !important;
    }

    .pageHeader > div + div {
      margin-top: 10px;
    }

    .pageHeader h2 {
      font-size: 26px !important;
      line-height: 1.15 !important;
    }

    .pageHeader .pageSub {
      font-size: 13px !important;
    }

    .formActions {
      display: block !important;
      text-align: right;
    }

    .formActions .btn {
      display: inline-block !important;
      margin-left: 8px;
    }

    .btnGhost,
    .btnPrimary {
      height: auto !important;
      padding: 9px 14px !important;
      font-size: 13px !important;
      line-height: 1.2 !important;
    }

    .listItem {
      font-size: 13px !important;
      padding: 11px 13px !important;
      page-break-inside: avoid;
    }

    .listMeta {
      font-size: 12px !important;
    }

    /* DOMPDF fallback for CSS grid */
    .kpiRow {
      display: block !important;
      margin: 10px 0 16px !important;
    }

    .kpiCard {
      float: left;
      width: 32%;
      margin-right: 2%;
      margin-bottom: 12px;
      min-height: 74px;
      page-break-inside: avoid;
    }

    .kpiCard:nth-child(3n) {
      margin-right: 0;
    }

    .kpiRow::after {
      content: \"\";
      display: block;
      clear: both;
    }

    .kpiLabel {
      font-size: 12px !important;
    }

    .kpiValue {
      font-size: 24px !important;
      line-height: 1.1 !important;
    }

    .filtersBar {
      display: block !important;
      margin: 10px 0 12px !important;
    }

    .filterGroup {
      display: inline-block !important;
      vertical-align: top;
      margin: 0 8px 8px 0;
      padding: 8px 12px !important;
    }

    .filterGroup label {
      display: inline-block;
      margin-right: 6px;
      font-size: 12px !important;
    }

    .panel {
      padding: 16px !important;
      page-break-inside: avoid;
    }

    .panelHeader {
      margin-bottom: 12px !important;
    }

    .panelTitle {
      font-size: 14px !important;
    }

    .dataTableWrap {
      overflow: hidden !important;
    }

    .dataTable {
      font-size: 13px !important;
      table-layout: fixed;
    }

    .dataTable th,
    .dataTable td {
      padding: 12px 10px !important;
      line-height: 1.35 !important;
    }

    .dataTable tbody tr {
      page-break-inside: avoid;
    }

    .badge {
      font-size: 11px !important;
      padding: 4px 9px !important;
      line-height: 1.1 !important;
    }

    .badge--mini {
      font-size: 9px !important;
      padding: 2px 6px !important;
    }

    .participantsList {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .participantsList li {
      margin: 0 0 5px;
      padding: 0 0 5px;
      border-bottom: 1px solid rgba(255,255,255,.08);
    }

    .participantsList li:last-child {
      margin-bottom: 0;
      padding-bottom: 0;
      border-bottom: 0;
    }

    .strong {
      font-weight: 700;
    }

    .emptyState {
      color: var(--muted);
      text-align: center;
      font-size: 13px;
      padding: 16px !important;
    }

    .pdfFooter {
      margin-top: 8px;
      text-align: right;
    }
  </style>
</head>
<body>
  <div class=\"app\">
    <div class=\"main\">
      <main class=\"content\">
        <div class=\"pageHeader\">
          <div>
            <h2>";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("reportTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["reportTitle"]) || array_key_exists("reportTitle", $context) ? $context["reportTitle"] : (function () { throw new RuntimeError('Variable "reportTitle" does not exist.', 238, $this->source); })()), "Export")) : ("Export")), "html", null, true);
        yield "</h2>
            ";
        // line 239
        if ((array_key_exists("reportSubtitle", $context) && (isset($context["reportSubtitle"]) || array_key_exists("reportSubtitle", $context) ? $context["reportSubtitle"] : (function () { throw new RuntimeError('Variable "reportSubtitle" does not exist.', 239, $this->source); })()))) {
            // line 240
            yield "              <div class=\"pageSub\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reportSubtitle"]) || array_key_exists("reportSubtitle", $context) ? $context["reportSubtitle"] : (function () { throw new RuntimeError('Variable "reportSubtitle" does not exist.', 240, $this->source); })()), "html", null, true);
            yield "</div>
            ";
        }
        // line 242
        yield "          </div>
          <div class=\"formActions\">
            <span class=\"btn btnGhost\">PULSE Admin</span>
            <span class=\"btn btnPrimary\">PDF Export</span>
          </div>
        </div>

        <div class=\"listItem\">
          <span>Document genere le ";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(((array_key_exists("generatedAt", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["generatedAt"]) || array_key_exists("generatedAt", $context) ? $context["generatedAt"] : (function () { throw new RuntimeError('Variable "generatedAt" does not exist.', 250, $this->source); })()), $this->extensions['Twig\Extension\CoreExtension']->convertDate())) : ($this->extensions['Twig\Extension\CoreExtension']->convertDate())), "d/m/Y H:i"), "html", null, true);
        yield "</span>
          <span class=\"badge badge--info\">PDF</span>
        </div>

        ";
        // line 254
        if ((array_key_exists("summaryCards", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["summaryCards"]) || array_key_exists("summaryCards", $context) ? $context["summaryCards"] : (function () { throw new RuntimeError('Variable "summaryCards" does not exist.', 254, $this->source); })())))) {
            // line 255
            yield "          <div class=\"kpiRow\">
            ";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["summaryCards"]) || array_key_exists("summaryCards", $context) ? $context["summaryCards"] : (function () { throw new RuntimeError('Variable "summaryCards" does not exist.', 256, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 257
                yield "              <div class=\"kpiCard\">
                <div class=\"kpiLabel\">";
                // line 258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "label", [], "any", true, true, false, 258)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "label", [], "any", false, false, false, 258), "Info")) : ("Info")), "html", null, true);
                yield "</div>
                <div class=\"kpiValue\">";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "value", [], "any", true, true, false, 259)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "value", [], "any", false, false, false, 259), "-")) : ("-")), "html", null, true);
                yield "</div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['card'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            yield "          </div>
        ";
        }
        // line 264
        yield "
        <div class=\"filtersBar\">
          ";
        // line 266
        if ((array_key_exists("activeFilters", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 266, $this->source); })())))) {
            // line 267
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 267, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 268
                yield "              <div class=\"filterGroup\">
                <label>";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", true, true, false, 269)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 269), "Filtre")) : ("Filtre")), "html", null, true);
                yield "</label>
                <span>";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "value", [], "any", true, true, false, 270)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "value", [], "any", false, false, false, 270), "-")) : ("-")), "html", null, true);
                yield "</span>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            yield "          ";
        } else {
            // line 274
            yield "            <div class=\"filterGroup\">
              <label>Filtres</label>
              <span>Aucun (liste complete)</span>
            </div>
          ";
        }
        // line 279
        yield "        </div>

        <section class=\"panel\">
          ";
        // line 282
        yield from $this->unwrap()->yieldBlock('report_table', $context, $blocks);
        // line 283
        yield "        </section>

        <div class=\"listMeta pdfFooter\">PULSE Back Office | Document genere automatiquement</div>
      </main>
    </div>
  </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 282
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_report_table(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report_table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report_table"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/pdf/_list_export_base.html.twig";
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
        return array (  418 => 282,  399 => 283,  397 => 282,  392 => 279,  385 => 274,  382 => 273,  373 => 270,  369 => 269,  366 => 268,  361 => 267,  359 => 266,  355 => 264,  351 => 262,  342 => 259,  338 => 258,  335 => 257,  331 => 256,  328 => 255,  326 => 254,  319 => 250,  309 => 242,  303 => 240,  301 => 239,  297 => 238,  66 => 10,  62 => 9,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\" />
  <title>{{ reportTitle|default('Export') }}</title>
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/template_bo/css/styles.css')) }}\" />
  <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/template_bo/css/tailwind.css')) }}\" />
  <style>
    @page { margin: 10mm; }

    /* Keep the BO template CSS, but add print-friendly tweaks for readability */
    :root{
      --card: rgba(255,255,255,.075);
      --card2: rgba(255,255,255,.055);
      --border: rgba(255,255,255,.14);
      --muted: rgba(255,255,255,.72);
      --muted2: rgba(255,255,255,.56);
      --shadow: 0 10px 26px rgba(0,0,0,.32);
    }

    html, body {
      height: auto !important;
    }

    body {
      font-size: 14px !important;
      overflow: visible !important;
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
    }

    /* Better clarity in PDF than the live UI stars overlay */
    body::before {
      display: none !important;
    }

    .app,
    .main {
      display: block !important;
      min-height: 0 !important;
    }

    .content {
      max-width: none !important;
      width: 100% !important;
      padding: 18px !important;
    }

    .content > * + * {
      margin-top: 14px !important;
    }

    .pageHeader {
      display: block !important;
      margin: 6px 0 14px !important;
    }

    .pageHeader > div + div {
      margin-top: 10px;
    }

    .pageHeader h2 {
      font-size: 26px !important;
      line-height: 1.15 !important;
    }

    .pageHeader .pageSub {
      font-size: 13px !important;
    }

    .formActions {
      display: block !important;
      text-align: right;
    }

    .formActions .btn {
      display: inline-block !important;
      margin-left: 8px;
    }

    .btnGhost,
    .btnPrimary {
      height: auto !important;
      padding: 9px 14px !important;
      font-size: 13px !important;
      line-height: 1.2 !important;
    }

    .listItem {
      font-size: 13px !important;
      padding: 11px 13px !important;
      page-break-inside: avoid;
    }

    .listMeta {
      font-size: 12px !important;
    }

    /* DOMPDF fallback for CSS grid */
    .kpiRow {
      display: block !important;
      margin: 10px 0 16px !important;
    }

    .kpiCard {
      float: left;
      width: 32%;
      margin-right: 2%;
      margin-bottom: 12px;
      min-height: 74px;
      page-break-inside: avoid;
    }

    .kpiCard:nth-child(3n) {
      margin-right: 0;
    }

    .kpiRow::after {
      content: \"\";
      display: block;
      clear: both;
    }

    .kpiLabel {
      font-size: 12px !important;
    }

    .kpiValue {
      font-size: 24px !important;
      line-height: 1.1 !important;
    }

    .filtersBar {
      display: block !important;
      margin: 10px 0 12px !important;
    }

    .filterGroup {
      display: inline-block !important;
      vertical-align: top;
      margin: 0 8px 8px 0;
      padding: 8px 12px !important;
    }

    .filterGroup label {
      display: inline-block;
      margin-right: 6px;
      font-size: 12px !important;
    }

    .panel {
      padding: 16px !important;
      page-break-inside: avoid;
    }

    .panelHeader {
      margin-bottom: 12px !important;
    }

    .panelTitle {
      font-size: 14px !important;
    }

    .dataTableWrap {
      overflow: hidden !important;
    }

    .dataTable {
      font-size: 13px !important;
      table-layout: fixed;
    }

    .dataTable th,
    .dataTable td {
      padding: 12px 10px !important;
      line-height: 1.35 !important;
    }

    .dataTable tbody tr {
      page-break-inside: avoid;
    }

    .badge {
      font-size: 11px !important;
      padding: 4px 9px !important;
      line-height: 1.1 !important;
    }

    .badge--mini {
      font-size: 9px !important;
      padding: 2px 6px !important;
    }

    .participantsList {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .participantsList li {
      margin: 0 0 5px;
      padding: 0 0 5px;
      border-bottom: 1px solid rgba(255,255,255,.08);
    }

    .participantsList li:last-child {
      margin-bottom: 0;
      padding-bottom: 0;
      border-bottom: 0;
    }

    .strong {
      font-weight: 700;
    }

    .emptyState {
      color: var(--muted);
      text-align: center;
      font-size: 13px;
      padding: 16px !important;
    }

    .pdfFooter {
      margin-top: 8px;
      text-align: right;
    }
  </style>
</head>
<body>
  <div class=\"app\">
    <div class=\"main\">
      <main class=\"content\">
        <div class=\"pageHeader\">
          <div>
            <h2>{{ reportTitle|default('Export') }}</h2>
            {% if reportSubtitle is defined and reportSubtitle %}
              <div class=\"pageSub\">{{ reportSubtitle }}</div>
            {% endif %}
          </div>
          <div class=\"formActions\">
            <span class=\"btn btnGhost\">PULSE Admin</span>
            <span class=\"btn btnPrimary\">PDF Export</span>
          </div>
        </div>

        <div class=\"listItem\">
          <span>Document genere le {{ generatedAt|default(date())|date('d/m/Y H:i') }}</span>
          <span class=\"badge badge--info\">PDF</span>
        </div>

        {% if summaryCards is defined and summaryCards is not empty %}
          <div class=\"kpiRow\">
            {% for card in summaryCards %}
              <div class=\"kpiCard\">
                <div class=\"kpiLabel\">{{ card.label|default('Info') }}</div>
                <div class=\"kpiValue\">{{ card.value|default('-') }}</div>
              </div>
            {% endfor %}
          </div>
        {% endif %}

        <div class=\"filtersBar\">
          {% if activeFilters is defined and activeFilters is not empty %}
            {% for filter in activeFilters %}
              <div class=\"filterGroup\">
                <label>{{ filter.label|default('Filtre') }}</label>
                <span>{{ filter.value|default('-') }}</span>
              </div>
            {% endfor %}
          {% else %}
            <div class=\"filterGroup\">
              <label>Filtres</label>
              <span>Aucun (liste complete)</span>
            </div>
          {% endif %}
        </div>

        <section class=\"panel\">
          {% block report_table %}{% endblock %}
        </section>

        <div class=\"listMeta pdfFooter\">PULSE Back Office | Document genere automatiquement</div>
      </main>
    </div>
  </div>
</body>
</html>
", "admin/pdf/_list_export_base.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pdf\\_list_export_base.html.twig");
    }
}
