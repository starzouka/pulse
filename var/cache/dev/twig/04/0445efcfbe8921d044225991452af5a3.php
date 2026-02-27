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

/* admin/pdf/_export_layout.html.twig */
class __TwigTemplate_19d7a532e8db5d8a402e3f9d9b001084 extends Template
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
            'pdf_content' => [$this, 'block_pdf_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/_export_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/_export_layout.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("documentTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["documentTitle"]) || array_key_exists("documentTitle", $context) ? $context["documentTitle"] : (function () { throw new RuntimeError('Variable "documentTitle" does not exist.', 5, $this->source); })()), "Export")) : ("Export")), "html", null, true);
        yield "</title>
  <style>
    @page {
      margin: 22px 24px;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: DejaVu Sans, sans-serif;
      font-size: 10px;
      color: #0f172a;
      background: #f8fafc;
    }

    .docHeader {
      background: #0f172a;
      color: #ffffff;
      border: 1px solid #1e293b;
      border-radius: 14px;
      padding: 16px 18px;
      margin-bottom: 12px;
    }

    .docKicker {
      font-size: 8px;
      letter-spacing: 1.4px;
      text-transform: uppercase;
      color: #a5b4fc;
      margin-bottom: 6px;
    }

    .docTitle {
      margin: 0;
      font-size: 18px;
      line-height: 1.2;
      font-weight: 700;
      color: #ffffff;
    }

    .docSubtitle {
      margin: 5px 0 0;
      color: #cbd5e1;
      font-size: 9px;
      line-height: 1.35;
    }

    .docMeta {
      margin-top: 10px;
      font-size: 8.5px;
      color: #cbd5e1;
      line-height: 1.4;
    }

    .docMeta strong {
      color: #ffffff;
    }

    .statsWrap {
      margin-bottom: 10px;
      font-size: 0;
    }

    .statCard {
      display: inline-block;
      width: 24.25%;
      margin-right: 1%;
      background: #ffffff;
      border: 1px solid #dbe3f0;
      border-radius: 12px;
      padding: 10px 12px;
      vertical-align: top;
    }

    .statCard.last {
      margin-right: 0;
    }

    .statLabel {
      display: block;
      color: #64748b;
      font-size: 8px;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 5px;
    }

    .statValue {
      display: block;
      color: #0f172a;
      font-size: 14px;
      font-weight: 700;
      line-height: 1.1;
    }

    .panel {
      background: #ffffff;
      border: 1px solid #dbe3f0;
      border-radius: 14px;
      padding: 12px;
    }

    .panelHeader {
      margin-bottom: 8px;
    }

    .panelTitle {
      margin: 0;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.7px;
      color: #0f172a;
      text-transform: uppercase;
    }

    .panelSub {
      margin-top: 4px;
      color: #64748b;
      font-size: 8.5px;
    }

    table.dataTable {
      width: 100%;
      border-collapse: collapse;
      table-layout: fixed;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      overflow: hidden;
    }

    .dataTable thead th {
      background: #eef2ff;
      color: #1e293b;
      font-size: 8px;
      font-weight: 700;
      letter-spacing: 0.6px;
      text-transform: uppercase;
      text-align: left;
      padding: 7px 6px;
      border-bottom: 1px solid #dbe3f0;
    }

    .dataTable tbody td {
      padding: 7px 6px;
      border-bottom: 1px solid #eef2f7;
      vertical-align: top;
      word-wrap: break-word;
    }

    .dataTable tbody tr:nth-child(even) td {
      background: #fafcff;
    }

    .dataTable tbody tr:last-child td {
      border-bottom: none;
    }

    .rowTitle {
      font-weight: 700;
      color: #0f172a;
      line-height: 1.3;
    }

    .muted {
      color: #64748b;
      font-size: 8.5px;
      line-height: 1.35;
    }

    .nowrap {
      white-space: nowrap;
    }

    .textRight {
      text-align: right;
    }

    .statusPill {
      display: inline-block;
      padding: 3px 8px;
      border-radius: 999px;
      font-size: 7.5px;
      font-weight: 700;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      border: 1px solid transparent;
      line-height: 1.15;
    }

    .status-success {
      background: #ecfdf5;
      color: #166534;
      border-color: #bbf7d0;
    }

    .status-warning {
      background: #fff7ed;
      color: #9a3412;
      border-color: #fed7aa;
    }

    .status-danger {
      background: #fef2f2;
      color: #991b1b;
      border-color: #fecaca;
    }

    .status-info {
      background: #eff6ff;
      color: #1d4ed8;
      border-color: #bfdbfe;
    }

    .thumb {
      width: 66px;
      height: 42px;
      border-radius: 8px;
      border: 1px solid #dbe3f0;
      background: #f8fafc;
      display: block;
      margin-bottom: 4px;
    }

    .thumbPlaceholder {
      width: 66px;
      height: 42px;
      border-radius: 8px;
      border: 1px dashed #cbd5e1;
      color: #64748b;
      text-align: center;
      line-height: 42px;
      font-size: 8px;
      background: #f8fafc;
      margin-bottom: 4px;
    }

    .chip {
      display: inline-block;
      border-radius: 999px;
      padding: 2px 6px;
      border: 1px solid #dbe3f0;
      background: #f8fafc;
      font-size: 7.5px;
      margin: 0 3px 3px 0;
      line-height: 1.2;
    }

    .chipWinner {
      background: #ecfdf5;
      color: #166534;
      border-color: #bbf7d0;
      font-weight: 700;
    }

    .emptyState {
      border: 1px dashed #cbd5e1;
      border-radius: 12px;
      padding: 12px;
      text-align: center;
      color: #64748b;
      background: #f8fafc;
      font-size: 9px;
    }

    .footerNote {
      margin-top: 10px;
      color: #64748b;
      font-size: 8px;
      text-align: right;
    }
  </style>
</head>
<body>
  ";
        // line 281
        $context["activeFilters"] = [];
        // line 282
        yield "  ";
        if ((array_key_exists("filters", $context) && is_iterable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 282, $this->source); })())))) {
            // line 283
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 283, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 284
                yield "      ";
                if (( !(null === $context["value"]) && ($context["value"] != ""))) {
                    // line 285
                    yield "        ";
                    $context["activeFilters"] = Twig\Extension\CoreExtension::merge((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 285, $this->source); })()), [(($context["key"] . ": ") . $context["value"])]);
                    // line 286
                    yield "      ";
                }
                // line 287
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            yield "  ";
        }
        // line 289
        yield "
  <div class=\"docHeader\">
    <div class=\"docKicker\">PULSE ADMIN EXPORT</div>
    <h1 class=\"docTitle\">";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("documentTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["documentTitle"]) || array_key_exists("documentTitle", $context) ? $context["documentTitle"] : (function () { throw new RuntimeError('Variable "documentTitle" does not exist.', 292, $this->source); })()), "Export")) : ("Export")), "html", null, true);
        yield "</h1>
    ";
        // line 293
        if ((array_key_exists("documentSubtitle", $context) && (isset($context["documentSubtitle"]) || array_key_exists("documentSubtitle", $context) ? $context["documentSubtitle"] : (function () { throw new RuntimeError('Variable "documentSubtitle" does not exist.', 293, $this->source); })()))) {
            // line 294
            yield "      <p class=\"docSubtitle\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["documentSubtitle"]) || array_key_exists("documentSubtitle", $context) ? $context["documentSubtitle"] : (function () { throw new RuntimeError('Variable "documentSubtitle" does not exist.', 294, $this->source); })()), "html", null, true);
            yield "</p>
    ";
        }
        // line 296
        yield "    <div class=\"docMeta\">
      <strong>Genere le:</strong> ";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(((array_key_exists("generatedAt", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["generatedAt"]) || array_key_exists("generatedAt", $context) ? $context["generatedAt"] : (function () { throw new RuntimeError('Variable "generatedAt" does not exist.', 297, $this->source); })()), $this->extensions['Twig\Extension\CoreExtension']->convertDate())) : ($this->extensions['Twig\Extension\CoreExtension']->convertDate())), "d/m/Y H:i"), "html", null, true);
        yield "
      ";
        // line 298
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 298, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 299
            yield "        <br><strong>Filtres:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 299, $this->source); })()), " | "), "html", null, true);
            yield "
      ";
        }
        // line 301
        yield "    </div>
  </div>

  ";
        // line 304
        if ((array_key_exists("stats", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 304, $this->source); })())))) {
            // line 305
            yield "    <div class=\"statsWrap\">
      ";
            // line 306
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 306, $this->source); })()), 0, 4));
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
            foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
                // line 307
                yield "        <div class=\"statCard ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("last") : (""));
                yield "\">
          <span class=\"statLabel\">";
                // line 308
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "label", [], "any", true, true, false, 308)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "label", [], "any", false, false, false, 308), "METRIC")) : ("METRIC")), "html", null, true);
                yield "</span>
          <span class=\"statValue\">";
                // line 309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "value", [], "any", true, true, false, 309)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "value", [], "any", false, false, false, 309), 0)) : (0)), "html", null, true);
                yield "</span>
        </div>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            yield "    </div>
  ";
        }
        // line 314
        yield "
  ";
        // line 315
        yield from $this->unwrap()->yieldBlock('pdf_content', $context, $blocks);
        // line 316
        yield "
  <div class=\"footerNote\">PULSE Back Office · Export PDF HTML/CSS personnalisé</div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 315
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pdf_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pdf_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pdf_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/pdf/_export_layout.html.twig";
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
        return array (  471 => 315,  456 => 316,  454 => 315,  451 => 314,  447 => 312,  430 => 309,  426 => 308,  421 => 307,  404 => 306,  401 => 305,  399 => 304,  394 => 301,  388 => 299,  386 => 298,  382 => 297,  379 => 296,  373 => 294,  371 => 293,  367 => 292,  362 => 289,  359 => 288,  353 => 287,  350 => 286,  347 => 285,  344 => 284,  339 => 283,  336 => 282,  334 => 281,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>{{ documentTitle|default('Export') }}</title>
  <style>
    @page {
      margin: 22px 24px;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: DejaVu Sans, sans-serif;
      font-size: 10px;
      color: #0f172a;
      background: #f8fafc;
    }

    .docHeader {
      background: #0f172a;
      color: #ffffff;
      border: 1px solid #1e293b;
      border-radius: 14px;
      padding: 16px 18px;
      margin-bottom: 12px;
    }

    .docKicker {
      font-size: 8px;
      letter-spacing: 1.4px;
      text-transform: uppercase;
      color: #a5b4fc;
      margin-bottom: 6px;
    }

    .docTitle {
      margin: 0;
      font-size: 18px;
      line-height: 1.2;
      font-weight: 700;
      color: #ffffff;
    }

    .docSubtitle {
      margin: 5px 0 0;
      color: #cbd5e1;
      font-size: 9px;
      line-height: 1.35;
    }

    .docMeta {
      margin-top: 10px;
      font-size: 8.5px;
      color: #cbd5e1;
      line-height: 1.4;
    }

    .docMeta strong {
      color: #ffffff;
    }

    .statsWrap {
      margin-bottom: 10px;
      font-size: 0;
    }

    .statCard {
      display: inline-block;
      width: 24.25%;
      margin-right: 1%;
      background: #ffffff;
      border: 1px solid #dbe3f0;
      border-radius: 12px;
      padding: 10px 12px;
      vertical-align: top;
    }

    .statCard.last {
      margin-right: 0;
    }

    .statLabel {
      display: block;
      color: #64748b;
      font-size: 8px;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 5px;
    }

    .statValue {
      display: block;
      color: #0f172a;
      font-size: 14px;
      font-weight: 700;
      line-height: 1.1;
    }

    .panel {
      background: #ffffff;
      border: 1px solid #dbe3f0;
      border-radius: 14px;
      padding: 12px;
    }

    .panelHeader {
      margin-bottom: 8px;
    }

    .panelTitle {
      margin: 0;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.7px;
      color: #0f172a;
      text-transform: uppercase;
    }

    .panelSub {
      margin-top: 4px;
      color: #64748b;
      font-size: 8.5px;
    }

    table.dataTable {
      width: 100%;
      border-collapse: collapse;
      table-layout: fixed;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      overflow: hidden;
    }

    .dataTable thead th {
      background: #eef2ff;
      color: #1e293b;
      font-size: 8px;
      font-weight: 700;
      letter-spacing: 0.6px;
      text-transform: uppercase;
      text-align: left;
      padding: 7px 6px;
      border-bottom: 1px solid #dbe3f0;
    }

    .dataTable tbody td {
      padding: 7px 6px;
      border-bottom: 1px solid #eef2f7;
      vertical-align: top;
      word-wrap: break-word;
    }

    .dataTable tbody tr:nth-child(even) td {
      background: #fafcff;
    }

    .dataTable tbody tr:last-child td {
      border-bottom: none;
    }

    .rowTitle {
      font-weight: 700;
      color: #0f172a;
      line-height: 1.3;
    }

    .muted {
      color: #64748b;
      font-size: 8.5px;
      line-height: 1.35;
    }

    .nowrap {
      white-space: nowrap;
    }

    .textRight {
      text-align: right;
    }

    .statusPill {
      display: inline-block;
      padding: 3px 8px;
      border-radius: 999px;
      font-size: 7.5px;
      font-weight: 700;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      border: 1px solid transparent;
      line-height: 1.15;
    }

    .status-success {
      background: #ecfdf5;
      color: #166534;
      border-color: #bbf7d0;
    }

    .status-warning {
      background: #fff7ed;
      color: #9a3412;
      border-color: #fed7aa;
    }

    .status-danger {
      background: #fef2f2;
      color: #991b1b;
      border-color: #fecaca;
    }

    .status-info {
      background: #eff6ff;
      color: #1d4ed8;
      border-color: #bfdbfe;
    }

    .thumb {
      width: 66px;
      height: 42px;
      border-radius: 8px;
      border: 1px solid #dbe3f0;
      background: #f8fafc;
      display: block;
      margin-bottom: 4px;
    }

    .thumbPlaceholder {
      width: 66px;
      height: 42px;
      border-radius: 8px;
      border: 1px dashed #cbd5e1;
      color: #64748b;
      text-align: center;
      line-height: 42px;
      font-size: 8px;
      background: #f8fafc;
      margin-bottom: 4px;
    }

    .chip {
      display: inline-block;
      border-radius: 999px;
      padding: 2px 6px;
      border: 1px solid #dbe3f0;
      background: #f8fafc;
      font-size: 7.5px;
      margin: 0 3px 3px 0;
      line-height: 1.2;
    }

    .chipWinner {
      background: #ecfdf5;
      color: #166534;
      border-color: #bbf7d0;
      font-weight: 700;
    }

    .emptyState {
      border: 1px dashed #cbd5e1;
      border-radius: 12px;
      padding: 12px;
      text-align: center;
      color: #64748b;
      background: #f8fafc;
      font-size: 9px;
    }

    .footerNote {
      margin-top: 10px;
      color: #64748b;
      font-size: 8px;
      text-align: right;
    }
  </style>
</head>
<body>
  {% set activeFilters = [] %}
  {% if filters is defined and filters is iterable %}
    {% for key, value in filters %}
      {% if value is not null and value != '' %}
        {% set activeFilters = activeFilters|merge([key ~ ': ' ~ value]) %}
      {% endif %}
    {% endfor %}
  {% endif %}

  <div class=\"docHeader\">
    <div class=\"docKicker\">PULSE ADMIN EXPORT</div>
    <h1 class=\"docTitle\">{{ documentTitle|default('Export') }}</h1>
    {% if documentSubtitle is defined and documentSubtitle %}
      <p class=\"docSubtitle\">{{ documentSubtitle }}</p>
    {% endif %}
    <div class=\"docMeta\">
      <strong>Genere le:</strong> {{ (generatedAt|default(date()))|date('d/m/Y H:i') }}
      {% if activeFilters is not empty %}
        <br><strong>Filtres:</strong> {{ activeFilters|join(' | ') }}
      {% endif %}
    </div>
  </div>

  {% if stats is defined and stats is not empty %}
    <div class=\"statsWrap\">
      {% for stat in stats|slice(0, 4) %}
        <div class=\"statCard {{ loop.last ? 'last' : '' }}\">
          <span class=\"statLabel\">{{ stat.label|default('METRIC') }}</span>
          <span class=\"statValue\">{{ stat.value|default(0) }}</span>
        </div>
      {% endfor %}
    </div>
  {% endif %}

  {% block pdf_content %}{% endblock %}

  <div class=\"footerNote\">PULSE Back Office · Export PDF HTML/CSS personnalisé</div>
</body>
</html>
", "admin/pdf/_export_layout.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pdf\\_export_layout.html.twig");
    }
}
