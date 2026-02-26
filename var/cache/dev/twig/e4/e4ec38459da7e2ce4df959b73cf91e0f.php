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

/* admin/pages/ai-ollama-test.html.twig */
class __TwigTemplate_a94f9252d0c334b4b1a3d2acb5e7c30e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/ai-ollama-test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/ai-ollama-test.html.twig"));

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

        yield "PULSE - Test Ollama";
        
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
        yield "  ";
        $context["health"] = ((array_key_exists("ollamaHealth", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["ollamaHealth"]) || array_key_exists("ollamaHealth", $context) ? $context["ollamaHealth"] : (function () { throw new RuntimeError('Variable "ollamaHealth" does not exist.', 6, $this->source); })()), [])) : ([]));
        // line 7
        yield "  ";
        $context["pingOk"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["health"] ?? null), "ping", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["health"]) || array_key_exists("health", $context) ? $context["health"] : (function () { throw new RuntimeError('Variable "health" does not exist.', 7, $this->source); })()), "ping", [], "any", false, false, false, 7), false)) : (false));
        // line 8
        yield "  ";
        $context["healthBadge"] = (((($tmp = (isset($context["pingOk"]) || array_key_exists("pingOk", $context) ? $context["pingOk"] : (function () { throw new RuntimeError('Variable "pingOk" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge--success") : ("badge--danger"));
        // line 9
        yield "  ";
        $context["modelsPayload"] = ((array_key_exists("ollamaModelsPayload", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["ollamaModelsPayload"]) || array_key_exists("ollamaModelsPayload", $context) ? $context["ollamaModelsPayload"] : (function () { throw new RuntimeError('Variable "ollamaModelsPayload" does not exist.', 9, $this->source); })()), [])) : ([]));
        // line 10
        yield "  ";
        $context["modelsStatus"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["modelsPayload"] ?? null), "status", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modelsPayload"]) || array_key_exists("modelsPayload", $context) ? $context["modelsPayload"] : (function () { throw new RuntimeError('Variable "modelsPayload" does not exist.', 10, $this->source); })()), "status", [], "any", false, false, false, 10), "ERROR")) : ("ERROR"));
        // line 11
        yield "  ";
        $context["modelsBadge"] = ((((isset($context["modelsStatus"]) || array_key_exists("modelsStatus", $context) ? $context["modelsStatus"] : (function () { throw new RuntimeError('Variable "modelsStatus" does not exist.', 11, $this->source); })()) == "READY")) ? ("badge--success") : (((((isset($context["modelsStatus"]) || array_key_exists("modelsStatus", $context) ? $context["modelsStatus"] : (function () { throw new RuntimeError('Variable "modelsStatus" does not exist.', 11, $this->source); })()) == "DISABLED")) ? ("badge--warning") : ("badge--danger"))));
        // line 12
        yield "  ";
        $context["test"] = ((array_key_exists("ollamaTestResult", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["ollamaTestResult"]) || array_key_exists("ollamaTestResult", $context) ? $context["ollamaTestResult"] : (function () { throw new RuntimeError('Variable "ollamaTestResult" does not exist.', 12, $this->source); })()), null)) : (null));
        // line 13
        yield "
  <div class=\"pageHeader\">
    <div>
      <h2>Test Ollama (IA locale)</h2>
      <div class=\"pageSub\">Validation API locale, modele configure et test JSON structure.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matches");
        yield "\">Retour matchs</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_requests");
        yield "\">Demandes tournois</a>
    </div>
  </div>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Sante API locale</h3>
      <span class=\"badge ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["healthBadge"]) || array_key_exists("healthBadge", $context) ? $context["healthBadge"] : (function () { throw new RuntimeError('Variable "healthBadge" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\">";
        yield (((($tmp = (isset($context["pingOk"]) || array_key_exists("pingOk", $context) ? $context["pingOk"] : (function () { throw new RuntimeError('Variable "pingOk" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("PING OK") : ("PING FAIL"));
        yield "</span>
    </div>

    <div class=\"list\">
      <div class=\"listItem\"><span>OLLAMA_ENABLED</span><span class=\"listMeta\">";
        // line 32
        yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["health"] ?? null), "enabled", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["health"]) || array_key_exists("health", $context) ? $context["health"] : (function () { throw new RuntimeError('Variable "health" does not exist.', 32, $this->source); })()), "enabled", [], "any", false, false, false, 32), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "</span></div>
      <div class=\"listItem\"><span>Base URL</span><span class=\"listMeta\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["health"] ?? null), "baseUrl", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["health"]) || array_key_exists("health", $context) ? $context["health"] : (function () { throw new RuntimeError('Variable "health" does not exist.', 33, $this->source); })()), "baseUrl", [], "any", false, false, false, 33), "n/a")) : ("n/a")), "html", null, true);
        yield "</span></div>
      <div class=\"listItem\"><span>Modele configure</span><span class=\"listMeta\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["health"] ?? null), "model", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["health"]) || array_key_exists("health", $context) ? $context["health"] : (function () { throw new RuntimeError('Variable "health" does not exist.', 34, $this->source); })()), "model", [], "any", false, false, false, 34), "n/a")) : ("n/a")), "html", null, true);
        yield "</span></div>
      <div class=\"listItem\"><span>Timeout</span><span class=\"listMeta\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["health"] ?? null), "timeoutSeconds", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["health"]) || array_key_exists("health", $context) ? $context["health"] : (function () { throw new RuntimeError('Variable "health" does not exist.', 35, $this->source); })()), "timeoutSeconds", [], "any", false, false, false, 35), 0)) : (0)), "html", null, true);
        yield " s</span></div>
    </div>
  </section>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Modeles installes (Ollama)</h3>
      <span class=\"badge ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["modelsBadge"]) || array_key_exists("modelsBadge", $context) ? $context["modelsBadge"] : (function () { throw new RuntimeError('Variable "modelsBadge" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["modelsStatus"]) || array_key_exists("modelsStatus", $context) ? $context["modelsStatus"] : (function () { throw new RuntimeError('Variable "modelsStatus" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "</span>
    </div>

    ";
        // line 45
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["modelsPayload"]) || array_key_exists("modelsPayload", $context) ? $context["modelsPayload"] : (function () { throw new RuntimeError('Variable "modelsPayload" does not exist.', 45, $this->source); })()), "error", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "      <div class=\"listItem\">
        <span>Erreur</span>
        <span class=\"listMeta\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modelsPayload"]) || array_key_exists("modelsPayload", $context) ? $context["modelsPayload"] : (function () { throw new RuntimeError('Variable "modelsPayload" does not exist.', 48, $this->source); })()), "error", [], "any", false, false, false, 48), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 51
        yield "
    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Modele</th>
            <th>Famille</th>
            <th>Taille</th>
            <th>Modifie</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["modelsPayload"] ?? null), "models", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modelsPayload"]) || array_key_exists("modelsPayload", $context) ? $context["modelsPayload"] : (function () { throw new RuntimeError('Variable "modelsPayload" does not exist.', 63, $this->source); })()), "models", [], "any", false, false, false, 63), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 64
            yield "            <tr>
              <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
              <td>";
            // line 66
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["model"], "family", [], "any", false, false, false, 66)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["model"], "family", [], "any", false, false, false, 66), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 67
            yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["model"], "size", [], "any", false, false, false, 67))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((CoreExtension::getAttribute($this->env, $this->source, $context["model"], "size", [], "any", false, false, false, 67) / 1024) / 1024) / 1024), 2, ".", " ") . " GB"), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 68
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["model"], "modifiedAt", [], "any", false, false, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["model"], "modifiedAt", [], "any", false, false, false, 68), "html", null, true)) : ("-"));
            yield "</td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 70
        if (!$context['_iterated']) {
            // line 71
            yield "            <tr>
              <td colspan=\"4\" class=\"listMeta\">Aucun modele detecte.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['model'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "        </tbody>
      </table>
    </div>
  </section>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Test generation JSON</h3>
      <span class=\"listMeta\">Utilise /api/chat (format=json)</span>
    </div>

    <form method=\"post\" class=\"field\">
      <label>Scenario de test</label>
      <textarea name=\"scenario\" rows=\"4\" placeholder=\"Decris un cas de test...\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("scenario", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["scenario"]) || array_key_exists("scenario", $context) ? $context["scenario"] : (function () { throw new RuntimeError('Variable "scenario" does not exist.', 88, $this->source); })()), "")) : ("")), "html", null, true);
        yield "</textarea>
      <div class=\"formActions\" style=\"margin-top:10px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">Lancer test Ollama</button>
      </div>
    </form>

    ";
        // line 94
        if ((($tmp = (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 94, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "      ";
            $context["testStatus"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["test"] ?? null), "status", [], "any", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 95, $this->source); })()), "status", [], "any", false, false, false, 95), "ERROR")) : ("ERROR"));
            // line 96
            yield "      ";
            $context["testBadge"] = ((((isset($context["testStatus"]) || array_key_exists("testStatus", $context) ? $context["testStatus"] : (function () { throw new RuntimeError('Variable "testStatus" does not exist.', 96, $this->source); })()) == "READY")) ? ("badge--success") : (((((isset($context["testStatus"]) || array_key_exists("testStatus", $context) ? $context["testStatus"] : (function () { throw new RuntimeError('Variable "testStatus" does not exist.', 96, $this->source); })()) == "DISABLED")) ? ("badge--warning") : ("badge--danger"))));
            // line 97
            yield "      <div class=\"panel\" style=\"margin-top:12px;\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Resultat test</h3>
          <span class=\"badge ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["testBadge"]) || array_key_exists("testBadge", $context) ? $context["testBadge"] : (function () { throw new RuntimeError('Variable "testBadge" does not exist.', 100, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["testStatus"]) || array_key_exists("testStatus", $context) ? $context["testStatus"] : (function () { throw new RuntimeError('Variable "testStatus" does not exist.', 100, $this->source); })()), "html", null, true);
            yield "</span>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span>Modele</span><span class=\"listMeta\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["test"] ?? null), "model", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 103, $this->source); })()), "model", [], "any", false, false, false, 103), "n/a")) : ("n/a")), "html", null, true);
            yield "</span></div>
          <div class=\"listItem\"><span>Base URL</span><span class=\"listMeta\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["test"] ?? null), "baseUrl", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 104, $this->source); })()), "baseUrl", [], "any", false, false, false, 104), "n/a")) : ("n/a")), "html", null, true);
            yield "</span></div>
          <div class=\"listItem\"><span>Latence</span><span class=\"listMeta\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["test"] ?? null), "latencyMs", [], "any", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 105, $this->source); })()), "latencyMs", [], "any", false, false, false, 105), 0)) : (0)), "html", null, true);
            yield " ms</span></div>
          <div class=\"listItem\"><span>OK</span><span class=\"listMeta\">";
            // line 106
            yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["test"] ?? null), "ok", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 106, $this->source); })()), "ok", [], "any", false, false, false, 106), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "</span></div>
          ";
            // line 107
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 107, $this->source); })()), "error", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 108
                yield "            <div class=\"listItem\"><span>Erreur</span><span class=\"listMeta\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 108, $this->source); })()), "error", [], "any", false, false, false, 108), "html", null, true);
                yield "</span></div>
          ";
            }
            // line 110
            yield "        </div>

        ";
            // line 112
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["test"] ?? null), "data", [], "any", true, true, false, 112) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 112, $this->source); })()), "data", [], "any", false, false, false, 112))) {
                // line 113
                yield "          <div class=\"dataTableWrap\" style=\"margin-top:10px;\">
            <table class=\"dataTable\">
              <tbody>
                ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 116, $this->source); })()), "data", [], "any", false, false, false, 116));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 117
                    yield "                  <tr>
                    <th style=\"width:180px;\">";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "</th>
                    <td>
                      ";
                    // line 120
                    if (((is_iterable($context["value"]) &&  !($context["value"] === false)) &&  !($context["value"] === null))) {
                        // line 121
                        yield "                        <code>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode($context["value"], Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_UNICODE")), "html", null, true);
                        yield "</code>
                      ";
                    } else {
                        // line 123
                        yield "                        ";
                        yield ((($context["value"] === true)) ? ("true") : (((($context["value"] === false)) ? ("false") : (((($context["value"] === null)) ? ("null") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true)))))));
                        yield "
                      ";
                    }
                    // line 125
                    yield "                    </td>
                  </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                yield "              </tbody>
            </table>
          </div>
        ";
            }
            // line 132
            yield "      </div>
    ";
        }
        // line 134
        yield "  </section>
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
        return "admin/pages/ai-ollama-test.html.twig";
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
        return array (  371 => 134,  367 => 132,  361 => 128,  353 => 125,  347 => 123,  341 => 121,  339 => 120,  334 => 118,  331 => 117,  327 => 116,  322 => 113,  320 => 112,  316 => 110,  310 => 108,  308 => 107,  304 => 106,  300 => 105,  296 => 104,  292 => 103,  284 => 100,  279 => 97,  276 => 96,  273 => 95,  271 => 94,  262 => 88,  247 => 75,  238 => 71,  236 => 70,  229 => 68,  225 => 67,  221 => 66,  217 => 65,  214 => 64,  209 => 63,  195 => 51,  189 => 48,  185 => 46,  183 => 45,  175 => 42,  165 => 35,  161 => 34,  157 => 33,  153 => 32,  144 => 28,  134 => 21,  130 => 20,  121 => 13,  118 => 12,  115 => 11,  112 => 10,  109 => 9,  106 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Test Ollama{% endblock %}

{% block admin_content %}
  {% set health = ollamaHealth|default({}) %}
  {% set pingOk = health.ping|default(false) %}
  {% set healthBadge = pingOk ? 'badge--success' : 'badge--danger' %}
  {% set modelsPayload = ollamaModelsPayload|default({}) %}
  {% set modelsStatus = modelsPayload.status|default('ERROR') %}
  {% set modelsBadge = modelsStatus == 'READY' ? 'badge--success' : (modelsStatus == 'DISABLED' ? 'badge--warning' : 'badge--danger') %}
  {% set test = ollamaTestResult|default(null) %}

  <div class=\"pageHeader\">
    <div>
      <h2>Test Ollama (IA locale)</h2>
      <div class=\"pageSub\">Validation API locale, modele configure et test JSON structure.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_matches') }}\">Retour matchs</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_tournament_requests') }}\">Demandes tournois</a>
    </div>
  </div>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Sante API locale</h3>
      <span class=\"badge {{ healthBadge }}\">{{ pingOk ? 'PING OK' : 'PING FAIL' }}</span>
    </div>

    <div class=\"list\">
      <div class=\"listItem\"><span>OLLAMA_ENABLED</span><span class=\"listMeta\">{{ health.enabled|default(false) ? '1' : '0' }}</span></div>
      <div class=\"listItem\"><span>Base URL</span><span class=\"listMeta\">{{ health.baseUrl|default('n/a') }}</span></div>
      <div class=\"listItem\"><span>Modele configure</span><span class=\"listMeta\">{{ health.model|default('n/a') }}</span></div>
      <div class=\"listItem\"><span>Timeout</span><span class=\"listMeta\">{{ health.timeoutSeconds|default(0) }} s</span></div>
    </div>
  </section>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Modeles installes (Ollama)</h3>
      <span class=\"badge {{ modelsBadge }}\">{{ modelsStatus }}</span>
    </div>

    {% if modelsPayload.error %}
      <div class=\"listItem\">
        <span>Erreur</span>
        <span class=\"listMeta\">{{ modelsPayload.error }}</span>
      </div>
    {% endif %}

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Modele</th>
            <th>Famille</th>
            <th>Taille</th>
            <th>Modifie</th>
          </tr>
        </thead>
        <tbody>
          {% for model in modelsPayload.models|default([]) %}
            <tr>
              <td>{{ model.name }}</td>
              <td>{{ model.family ?: '-' }}</td>
              <td>{{ model.size is not null ? (model.size / 1024 / 1024 / 1024)|number_format(2, '.', ' ') ~ ' GB' : '-' }}</td>
              <td>{{ model.modifiedAt ?: '-' }}</td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"4\" class=\"listMeta\">Aucun modele detecte.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Test generation JSON</h3>
      <span class=\"listMeta\">Utilise /api/chat (format=json)</span>
    </div>

    <form method=\"post\" class=\"field\">
      <label>Scenario de test</label>
      <textarea name=\"scenario\" rows=\"4\" placeholder=\"Decris un cas de test...\">{{ scenario|default('') }}</textarea>
      <div class=\"formActions\" style=\"margin-top:10px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">Lancer test Ollama</button>
      </div>
    </form>

    {% if test %}
      {% set testStatus = test.status|default('ERROR') %}
      {% set testBadge = testStatus == 'READY' ? 'badge--success' : (testStatus == 'DISABLED' ? 'badge--warning' : 'badge--danger') %}
      <div class=\"panel\" style=\"margin-top:12px;\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Resultat test</h3>
          <span class=\"badge {{ testBadge }}\">{{ testStatus }}</span>
        </div>
        <div class=\"list\">
          <div class=\"listItem\"><span>Modele</span><span class=\"listMeta\">{{ test.model|default('n/a') }}</span></div>
          <div class=\"listItem\"><span>Base URL</span><span class=\"listMeta\">{{ test.baseUrl|default('n/a') }}</span></div>
          <div class=\"listItem\"><span>Latence</span><span class=\"listMeta\">{{ test.latencyMs|default(0) }} ms</span></div>
          <div class=\"listItem\"><span>OK</span><span class=\"listMeta\">{{ test.ok|default(false) ? 'true' : 'false' }}</span></div>
          {% if test.error %}
            <div class=\"listItem\"><span>Erreur</span><span class=\"listMeta\">{{ test.error }}</span></div>
          {% endif %}
        </div>

        {% if test.data is defined and test.data %}
          <div class=\"dataTableWrap\" style=\"margin-top:10px;\">
            <table class=\"dataTable\">
              <tbody>
                {% for key, value in test.data %}
                  <tr>
                    <th style=\"width:180px;\">{{ key }}</th>
                    <td>
                      {% if value is iterable and value is not same as(false) and value is not same as(null) %}
                        <code>{{ value|json_encode(constant('JSON_UNESCAPED_UNICODE')) }}</code>
                      {% else %}
                        {{ value is same as(true) ? 'true' : (value is same as(false) ? 'false' : (value is same as(null) ? 'null' : value)) }}
                      {% endif %}
                    </td>
                  </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        {% endif %}
      </div>
    {% endif %}
  </section>
{% endblock %}
", "admin/pages/ai-ollama-test.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pages\\ai-ollama-test.html.twig");
    }
}
