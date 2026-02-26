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

/* admin/pages/tournament-requests.html.twig */
class __TwigTemplate_5af86e5521f5671ecd02140f960f6d0b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-requests.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-requests.html.twig"));

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

        yield "PULSE - Demandes tournois";
        
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
      <h2>Demandes tournois</h2>
      <div class=\"pageSub\">Workflow organisateur: accepter/refuser une demande.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_requests_export", ["format" => "pdf", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 14
($context["filters"] ?? null), "q", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 14, $this->source); })()), "q", [], "any", false, false, false, 14), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["filters"] ?? null), "status", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 15, $this->source); })()), "status", [], "any", false, false, false, 15), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 16
($context["filters"] ?? null), "game", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 16, $this->source); })()), "game", [], "any", false, false, false, 16), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 17
($context["filters"] ?? null), "sort", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 17, $this->source); })()), "sort", [], "any", false, false, false, 17), "latest")) : ("latest"))]), "html", null, true);
        // line 18
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_requests_export", ["format" => "excel", "q" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 21
($context["filters"] ?? null), "q", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 21, $this->source); })()), "q", [], "any", false, false, false, 21), "")) : ("")), "status" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 22
($context["filters"] ?? null), "status", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22), "")) : ("")), "game" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["filters"] ?? null), "game", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 23, $this->source); })()), "game", [], "any", false, false, false, 23), "")) : ("")), "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["filters"] ?? null), "sort", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 24, $this->source); })()), "sort", [], "any", false, false, false, 24), "latest")) : ("latest"))]), "html", null, true);
        // line 25
        yield "\">Exporter Excel</a>
    </div>
  </div>

  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 30
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                yield "      <div class=\"listItem\">
        <span>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 33
                yield ((($context["label"] == "error")) ? ("badge--danger") : (((($context["label"] == "warning")) ? ("badge--warning") : ("badge--success"))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "
  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_requests");
        yield "\">
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 41, $this->source); })()), "q", [], "any", false, false, false, 41), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Titre, jeu, organisateur...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Status</label>
      <select name=\"status\">
        <option value=\"\">ALL</option>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusOptions"]) || array_key_exists("statusOptions", $context) ? $context["statusOptions"] : (function () { throw new RuntimeError('Variable "statusOptions" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statusValue"]) {
            // line 49
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49) == $context["statusValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusValue"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statusValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Game</label>
      <select name=\"game\">
        <option value=\"\">ALL</option>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableGames"]) || array_key_exists("availableGames", $context) ? $context["availableGames"] : (function () { throw new RuntimeError('Variable "availableGames" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 59
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 59), "html", null, true);
            yield "\" ";
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 59, $this->source); })()), "game", [], "any", false, false, false, 59)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 59, $this->source); })()), "game", [], "any", false, false, false, 59) == CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 59)))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 59), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Tri</label>
      <select name=\"sort\">
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new RuntimeError('Variable "sortOptions" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortValue"]) {
            // line 68
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sortValue"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 68, $this->source); })()), "sort", [], "any", false, false, false, 68) == $context["sortValue"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["sortValue"]), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sortValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_requests");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE DES DEMANDES</h3>
      <span class=\"listMeta\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("counter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 82, $this->source); })()), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 82, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 82, $this->source); })())))), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Organisateur</th>
            <th>Jeu</th>
            <th>Dates</th>
            <th>Prize pool</th>
            <th>Status</th>
            <th>IA</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 101, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["requestItem"]) {
            // line 102
            yield "            ";
            $context["requestId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "requestId", [], "any", true, true, false, 102) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "requestId", [], "any", false, false, false, 102)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "requestId", [], "any", false, false, false, 102)) : (0));
            // line 103
            yield "            ";
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "status", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "status", [], "any", false, false, false, 103), "PENDING")) : ("PENDING"));
            // line 104
            yield "            ";
            $context["statusBadge"] = ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 104, $this->source); })()) == "ACCEPTED")) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 104, $this->source); })()) == "REFUSED")) ? ("badge--danger") : ("badge--warning"))));
            // line 105
            yield "            ";
            $context["ai"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["aiAssessmentsByRequestId"] ?? null), (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 105, $this->source); })()), [], "array", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aiAssessmentsByRequestId"]) || array_key_exists("aiAssessmentsByRequestId", $context) ? $context["aiAssessmentsByRequestId"] : (function () { throw new RuntimeError('Variable "aiAssessmentsByRequestId" does not exist.', 105, $this->source); })()), (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 105, $this->source); })()), [], "array", false, false, false, 105), null)) : (null));
            // line 106
            yield "            ";
            $context["aiRisk"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "riskLevel", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 106, $this->source); })()), "riskLevel", [], "any", false, false, false, 106), "LOW")) : ("LOW"));
            // line 107
            yield "            ";
            $context["aiBadge"] = ((((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 107, $this->source); })()) == "HIGH")) ? ("badge--danger") : (((((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 107, $this->source); })()) == "MEDIUM")) ? ("badge--warning") : ("badge--success"))));
            // line 108
            yield "            <tr>
              <td>#";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 109, $this->source); })()), "html", null, true);
            yield "</td>
              <td>
                <strong>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "title", [], "any", false, false, false, 111), "html", null, true);
            yield "</strong>
                ";
            // line 112
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "photoPath", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 113
                yield "                  <div class=\"listMeta\"><a href=\"";
                yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "photoPath", [], "any", false, false, false, 113)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "photoPath", [], "any", false, false, false, 113), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "photoPath", [], "any", false, false, false, 113)), "html", null, true)));
                yield "\" target=\"_blank\" rel=\"noopener\">Photo</a></div>
                ";
            }
            // line 115
            yield "              </td>
              <td>";
            // line 116
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "organizerUserId", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "organizerUserId", [], "any", false, false, false, 116), "username", [], "any", false, false, false, 116), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 117
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "gameId", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "gameId", [], "any", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 118
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "startDate", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "startDate", [], "any", false, false, false, 118), "d/m/Y"), "html", null, true)) : ("-"));
            yield " -> ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "endDate", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "endDate", [], "any", false, false, false, 118), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["requestItem"], "prizePool", [], "any", false, false, false, 119), 2, ".", " "), "html", null, true);
            yield " DT</td>
              <td><span class=\"badge ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusBadge"]) || array_key_exists("statusBadge", $context) ? $context["statusBadge"] : (function () { throw new RuntimeError('Variable "statusBadge" does not exist.', 120, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 120, $this->source); })()), "html", null, true);
            yield "</span></td>
              <td>
                ";
            // line 122
            if ((($tmp = (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 122, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 123
                yield "                  <div class=\"listMeta\">
                    <span class=\"badge ";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiBadge"]) || array_key_exists("aiBadge", $context) ? $context["aiBadge"] : (function () { throw new RuntimeError('Variable "aiBadge" does not exist.', 124, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "score", [], "any", true, true, false, 124)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 124, $this->source); })()), "score", [], "any", false, false, false, 124), 0)) : (0)), "html", null, true);
                yield "/100 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 124, $this->source); })()), "html", null, true);
                yield "</span>
                  </div>
                  ";
                // line 126
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "reasons", [], "any", true, true, false, 126) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 126, $this->source); })()), "reasons", [], "any", false, false, false, 126)))) {
                    // line 127
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 127, $this->source); })()), "reasons", [], "any", false, false, false, 127), 0, 2));
                    foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                        // line 128
                        yield "                      <div class=\"listMeta\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reason"], "html", null, true);
                        yield "</div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['reason'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    yield "                  ";
                }
                // line 131
                yield "                ";
            } else {
                // line 132
                yield "                  <span class=\"listMeta\">-</span>
                ";
            }
            // line 134
            yield "              </td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_request_detail", ["id" => (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 137, $this->source); })())]), "html", null, true);
            yield "\">Voir detail</a>

                  ";
            // line 139
            if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 139, $this->source); })()) == "PENDING")) {
                // line 140
                yield "                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_request_review", ["id" => (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 140, $this->source); })())]), "html", null, true);
                yield "\" style=\"display:inline-block;\">
                      <input type=\"hidden\" name=\"_token\" value=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("review_tournament_request_" . (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 141, $this->source); })()))), "html", null, true);
                yield "\" />
                      <input type=\"hidden\" name=\"decision\" value=\"ACCEPTED\" />
                      <button class=\"btn btnTiny\" type=\"submit\">Accepter</button>
                    </form>

                    <form method=\"post\" action=\"";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_request_review", ["id" => (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 146, $this->source); })())]), "html", null, true);
                yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Refuser cette demande ?');\">
                      <input type=\"hidden\" name=\"_token\" value=\"";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("review_tournament_request_" . (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 147, $this->source); })()))), "html", null, true);
                yield "\" />
                      <input type=\"hidden\" name=\"decision\" value=\"REFUSED\" />
                      <button class=\"btn btnTiny\" type=\"submit\">Refuser</button>
                    </form>
                  ";
            }
            // line 152
            yield "                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 155
        if (!$context['_iterated']) {
            // line 156
            yield "            <tr>
              <td colspan=\"9\" class=\"listMeta\">Aucune demande trouvee.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['requestItem'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "        </tbody>
      </table>
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
        return "admin/pages/tournament-requests.html.twig";
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
        return array (  454 => 160,  445 => 156,  443 => 155,  436 => 152,  428 => 147,  424 => 146,  416 => 141,  411 => 140,  409 => 139,  404 => 137,  399 => 134,  395 => 132,  392 => 131,  389 => 130,  380 => 128,  375 => 127,  373 => 126,  364 => 124,  361 => 123,  359 => 122,  352 => 120,  348 => 119,  342 => 118,  338 => 117,  334 => 116,  331 => 115,  325 => 113,  323 => 112,  319 => 111,  314 => 109,  311 => 108,  308 => 107,  305 => 106,  302 => 105,  299 => 104,  296 => 103,  293 => 102,  288 => 101,  266 => 82,  256 => 75,  249 => 70,  236 => 68,  232 => 67,  224 => 61,  211 => 59,  207 => 58,  198 => 51,  185 => 49,  181 => 48,  171 => 41,  165 => 38,  162 => 37,  156 => 36,  145 => 33,  141 => 32,  138 => 31,  133 => 30,  129 => 29,  123 => 25,  121 => 24,  120 => 23,  119 => 22,  118 => 21,  117 => 19,  114 => 18,  112 => 17,  111 => 16,  110 => 15,  109 => 14,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Demandes tournois{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Demandes tournois</h2>
      <div class=\"pageSub\">Workflow organisateur: accepter/refuser une demande.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_tournament_requests_export', {
        format: 'pdf',
        q: filters.q|default(''),
        status: filters.status|default(''),
        game: filters.game|default(''),
        sort: filters.sort|default('latest')
      }) }}\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_tournament_requests_export', {
        format: 'excel',
        q: filters.q|default(''),
        status: filters.status|default(''),
        game: filters.game|default(''),
        sort: filters.sort|default('latest')
      }) }}\">Exporter Excel</a>
    </div>
  </div>

  {% for label, messages in app.flashes %}
    {% for message in messages %}
      <div class=\"listItem\">
        <span>{{ message }}</span>
        <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'warning' ? 'badge--warning' : 'badge--success') }}\">{{ label|upper }}</span>
      </div>
    {% endfor %}
  {% endfor %}

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"{{ path('admin_tournament_requests') }}\">
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Titre, jeu, organisateur...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Status</label>
      <select name=\"status\">
        <option value=\"\">ALL</option>
        {% for statusValue in statusOptions %}
          <option value=\"{{ statusValue }}\" {{ filters.status == statusValue ? 'selected' : '' }}>{{ statusValue }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Game</label>
      <select name=\"game\">
        <option value=\"\">ALL</option>
        {% for game in availableGames %}
          <option value=\"{{ game.gameId }}\" {{ filters.game is not null and filters.game == game.gameId ? 'selected' : '' }}>{{ game.name }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Tri</label>
      <select name=\"sort\">
        {% for sortValue in sortOptions %}
          <option value=\"{{ sortValue }}\" {{ filters.sort == sortValue ? 'selected' : '' }}>{{ sortValue|upper }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_tournament_requests') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE DES DEMANDES</h3>
      <span class=\"listMeta\">{{ counter|default(requests|length) }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Organisateur</th>
            <th>Jeu</th>
            <th>Dates</th>
            <th>Prize pool</th>
            <th>Status</th>
            <th>IA</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for requestItem in requests %}
            {% set requestId = requestItem.requestId ?? 0 %}
            {% set status = requestItem.status|default('PENDING') %}
            {% set statusBadge = status == 'ACCEPTED' ? 'badge--success' : (status == 'REFUSED' ? 'badge--danger' : 'badge--warning') %}
            {% set ai = aiAssessmentsByRequestId[requestId]|default(null) %}
            {% set aiRisk = ai.riskLevel|default('LOW') %}
            {% set aiBadge = aiRisk == 'HIGH' ? 'badge--danger' : (aiRisk == 'MEDIUM' ? 'badge--warning' : 'badge--success') %}
            <tr>
              <td>#{{ requestId }}</td>
              <td>
                <strong>{{ requestItem.title }}</strong>
                {% if requestItem.photoPath %}
                  <div class=\"listMeta\"><a href=\"{{ requestItem.photoPath starts with 'http' ? requestItem.photoPath : asset(requestItem.photoPath) }}\" target=\"_blank\" rel=\"noopener\">Photo</a></div>
                {% endif %}
              </td>
              <td>{{ requestItem.organizerUserId ? requestItem.organizerUserId.username : '-' }}</td>
              <td>{{ requestItem.gameId ? requestItem.gameId.name : '-' }}</td>
              <td>{{ requestItem.startDate ? requestItem.startDate|date('d/m/Y') : '-' }} -> {{ requestItem.endDate ? requestItem.endDate|date('d/m/Y') : '-' }}</td>
              <td>{{ requestItem.prizePool|number_format(2, '.', ' ') }} DT</td>
              <td><span class=\"badge {{ statusBadge }}\">{{ status }}</span></td>
              <td>
                {% if ai %}
                  <div class=\"listMeta\">
                    <span class=\"badge {{ aiBadge }}\">{{ ai.score|default(0) }}/100 {{ aiRisk }}</span>
                  </div>
                  {% if ai.reasons is defined and ai.reasons is iterable %}
                    {% for reason in ai.reasons|slice(0, 2) %}
                      <div class=\"listMeta\">{{ reason }}</div>
                    {% endfor %}
                  {% endif %}
                {% else %}
                  <span class=\"listMeta\">-</span>
                {% endif %}
              </td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_tournament_request_detail', {id: requestId}) }}\">Voir detail</a>

                  {% if status == 'PENDING' %}
                    <form method=\"post\" action=\"{{ path('admin_tournament_request_review', {id: requestId}) }}\" style=\"display:inline-block;\">
                      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('review_tournament_request_' ~ requestId) }}\" />
                      <input type=\"hidden\" name=\"decision\" value=\"ACCEPTED\" />
                      <button class=\"btn btnTiny\" type=\"submit\">Accepter</button>
                    </form>

                    <form method=\"post\" action=\"{{ path('admin_tournament_request_review', {id: requestId}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Refuser cette demande ?');\">
                      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('review_tournament_request_' ~ requestId) }}\" />
                      <input type=\"hidden\" name=\"decision\" value=\"REFUSED\" />
                      <button class=\"btn btnTiny\" type=\"submit\">Refuser</button>
                    </form>
                  {% endif %}
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"9\" class=\"listMeta\">Aucune demande trouvee.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/tournament-requests.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pages\\tournament-requests.html.twig");
    }
}
