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

/* admin/pages/tournament-request-detail.html.twig */
class __TwigTemplate_1991b0d785702be04b65078b8a1cd205 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-request-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-request-detail.html.twig"));

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

        yield "PULSE - Detail demande tournoi";
        
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
        $context["requestId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "requestId", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 6, $this->source); })()), "requestId", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 6, $this->source); })()), "requestId", [], "any", false, false, false, 6)) : (0));
        // line 7
        yield "  ";
        $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 7, $this->source); })()), "status", [], "any", false, false, false, 7), "PENDING")) : ("PENDING"));
        // line 8
        yield "  ";
        $context["statusBadge"] = ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 8, $this->source); })()) == "ACCEPTED")) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 8, $this->source); })()) == "REFUSED")) ? ("badge--danger") : ("badge--warning"))));
        // line 9
        yield "  ";
        $context["ai"] = ((array_key_exists("aiAssessment", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["aiAssessment"]) || array_key_exists("aiAssessment", $context) ? $context["aiAssessment"] : (function () { throw new RuntimeError('Variable "aiAssessment" does not exist.', 9, $this->source); })()), null)) : (null));
        // line 10
        yield "  ";
        $context["aiRisk"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "riskLevel", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 10, $this->source); })()), "riskLevel", [], "any", false, false, false, 10), "LOW")) : ("LOW"));
        // line 11
        yield "  ";
        $context["aiBadge"] = ((((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 11, $this->source); })()) == "HIGH")) ? ("badge--danger") : (((((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 11, $this->source); })()) == "MEDIUM")) ? ("badge--warning") : ("badge--success"))));
        // line 12
        yield "
  <div class=\"pageHeader\">
    <div>
      <h2>Detail demande #";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</h2>
      <div class=\"pageSub\">Validation admin de la demande organisateur.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_requests");
        yield "\">Retour liste</a>
    </div>
  </div>

  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 24
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 25
                yield "      <div class=\"listItem\">
        <span>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 27
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
            // line 30
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Informations demande</h3>
      <span class=\"badge ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusBadge"]) || array_key_exists("statusBadge", $context) ? $context["statusBadge"] : (function () { throw new RuntimeError('Variable "statusBadge" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "</span>
    </div>

    <div class=\"list\">
      <div class=\"listItem\"><span>Titre</span><span class=\"listMeta\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 39, $this->source); })()), "title", [], "any", false, false, false, 39), "html", null, true);
        yield "</span></div>
      <div class=\"listItem\"><span>Organisateur</span><span class=\"listMeta\">";
        // line 40
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 40, $this->source); })()), "organizerUserId", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 40, $this->source); })()), "organizerUserId", [], "any", false, false, false, 40), "username", [], "any", false, false, false, 40), "html", null, true)) : ("-"));
        yield " (";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 40, $this->source); })()), "organizerUserId", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 40, $this->source); })()), "organizerUserId", [], "any", false, false, false, 40), "email", [], "any", false, false, false, 40), "html", null, true)) : ("-"));
        yield ")</span></div>
      <div class=\"listItem\"><span>Jeu</span><span class=\"listMeta\">";
        // line 41
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 41, $this->source); })()), "gameId", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 41, $this->source); })()), "gameId", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Format</span><span class=\"listMeta\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 42, $this->source); })()), "format", [], "any", false, false, false, 42), "html", null, true);
        yield "</span></div>
      <div class=\"listItem\"><span>Mode inscription</span><span class=\"listMeta\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 43, $this->source); })()), "registrationMode", [], "any", false, false, false, 43), "html", null, true);
        yield "</span></div>
      <div class=\"listItem\"><span>Dates</span><span class=\"listMeta\">";
        // line 44
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 44, $this->source); })()), "startDate", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 44, $this->source); })()), "startDate", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true)) : ("-"));
        yield " -> ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 44, $this->source); })()), "endDate", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 44, $this->source); })()), "endDate", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Deadline</span><span class=\"listMeta\">";
        // line 45
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 45, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 45, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Max teams</span><span class=\"listMeta\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 46, $this->source); })()), "maxTeams", [], "any", false, false, false, 46), "html", null, true);
        yield "</span></div>
      <div class=\"listItem\"><span>Prize pool</span><span class=\"listMeta\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 47, $this->source); })()), "prizePool", [], "any", false, false, false, 47), 2, ".", " "), "html", null, true);
        yield " DT</span></div>
      <div class=\"listItem\"><span>Prize description</span><span class=\"listMeta\">";
        // line 48
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 48, $this->source); })()), "prizeDescription", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 48, $this->source); })()), "prizeDescription", [], "any", false, false, false, 48), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Description</span><span class=\"listMeta\">";
        // line 49
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Rules</span><span class=\"listMeta\">";
        // line 50
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 50, $this->source); })()), "rules", [], "any", false, false, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 50, $this->source); })()), "rules", [], "any", false, false, false, 50), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Admin note</span><span class=\"listMeta\">";
        // line 51
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 51, $this->source); })()), "adminResponseNote", [], "any", false, false, false, 51)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 51, $this->source); })()), "adminResponseNote", [], "any", false, false, false, 51), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Reviewed at</span><span class=\"listMeta\">";
        // line 52
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 52, $this->source); })()), "reviewedAt", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 52, $this->source); })()), "reviewedAt", [], "any", false, false, false, 52), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</span></div>
      ";
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 53, $this->source); })()), "photoPath", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "        <div class=\"listItem\"><span>Photo</span><span class=\"listMeta\"><a href=\"";
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 54, $this->source); })()), "photoPath", [], "any", false, false, false, 54)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 54, $this->source); })()), "photoPath", [], "any", false, false, false, 54), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 54, $this->source); })()), "photoPath", [], "any", false, false, false, 54)), "html", null, true)));
            yield "\" target=\"_blank\" rel=\"noopener\">Voir image</a></span></div>
      ";
        }
        // line 56
        yield "    </div>
  </section>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Analyse IA de validation</h3>
      ";
        // line 62
        if ((($tmp = (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "        <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiBadge"]) || array_key_exists("aiBadge", $context) ? $context["aiBadge"] : (function () { throw new RuntimeError('Variable "aiBadge" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "score", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 63, $this->source); })()), "score", [], "any", false, false, false, 63), 0)) : (0)), "html", null, true);
            yield "/100 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "</span>
      ";
        } else {
            // line 65
            yield "        <span class=\"listMeta\">Non disponible</span>
      ";
        }
        // line 67
        yield "    </div>

    ";
        // line 69
        if ((($tmp = (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 69, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "      <div class=\"list\">
        <div class=\"listItem\"><span>Score de qualite</span><span class=\"listMeta\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "score", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 71, $this->source); })()), "score", [], "any", false, false, false, 71), 0)) : (0)), "html", null, true);
            yield "/100</span></div>
        <div class=\"listItem\"><span>Niveau de risque</span><span class=\"listMeta\"><span class=\"badge ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiBadge"]) || array_key_exists("aiBadge", $context) ? $context["aiBadge"] : (function () { throw new RuntimeError('Variable "aiBadge" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "</span></span></div>
        <div class=\"listItem\"><span>Problemes detectes</span><span class=\"listMeta\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "issuesCount", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 73, $this->source); })()), "issuesCount", [], "any", false, false, false, 73), 0)) : (0)), "html", null, true);
            yield "</span></div>
        <div class=\"listItem\"><span>Penalite totale</span><span class=\"listMeta\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "penaltyPoints", [], "any", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 74, $this->source); })()), "penaltyPoints", [], "any", false, false, false, 74), 0)) : (0)), "html", null, true);
            yield " pts</span></div>
        <div class=\"listItem\"><span>Doublon probable</span><span class=\"listMeta\">";
            // line 75
            yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "hasProbableDuplicate", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 75, $this->source); })()), "hasProbableDuplicate", [], "any", false, false, false, 75), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</span></div>
      </div>

      <div class=\"panel\" style=\"margin-top:12px;\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Raisons (explicables)</h3>
          <span class=\"listMeta\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "reasons", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 81, $this->source); })()), "reasons", [], "any", false, false, false, 81), [])) : ([]))), "html", null, true);
            yield " raison(s)</span>
        </div>
        <div class=\"list\">
          ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "reasons", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 84, $this->source); })()), "reasons", [], "any", false, false, false, 84), [])) : ([])));
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
            foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                // line 85
                yield "            <div class=\"listItem\">
              <span>";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 86), "html", null, true);
                yield ".</span>
              <span class=\"listMeta\">";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reason"], "html", null, true);
                yield "</span>
            </div>
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
            // line 89
            if (!$context['_iterated']) {
                // line 90
                yield "            <div class=\"listItem\">
              <span>Aucun signalement</span>
              <span class=\"badge badge--success\">LOW RISK</span>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reason'], $context['_parent'], $context['_iterated'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "        </div>
      </div>

      ";
            // line 98
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ai"] ?? null), "ollamaAssistant", [], "any", true, true, false, 98)) {
                // line 99
                yield "        ";
                $context["ollama"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai"]) || array_key_exists("ai", $context) ? $context["ai"] : (function () { throw new RuntimeError('Variable "ai" does not exist.', 99, $this->source); })()), "ollamaAssistant", [], "any", false, false, false, 99);
                // line 100
                yield "        ";
                $context["ollamaStatus"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "status", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 100, $this->source); })()), "status", [], "any", false, false, false, 100), "ERROR")) : ("ERROR"));
                // line 101
                yield "        ";
                $context["ollamaBadge"] = ((((isset($context["ollamaStatus"]) || array_key_exists("ollamaStatus", $context) ? $context["ollamaStatus"] : (function () { throw new RuntimeError('Variable "ollamaStatus" does not exist.', 101, $this->source); })()) == "READY")) ? ("badge--success") : (((((isset($context["ollamaStatus"]) || array_key_exists("ollamaStatus", $context) ? $context["ollamaStatus"] : (function () { throw new RuntimeError('Variable "ollamaStatus" does not exist.', 101, $this->source); })()) == "DISABLED")) ? ("badge--warning") : ("badge--danger"))));
                // line 102
                yield "        <div class=\"panel\" style=\"margin-top:12px;\">
          <div class=\"panelHeader\">
            <h3 class=\"panelTitle\">Assistant IA local (Ollama)</h3>
            <span class=\"badge ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ollamaBadge"]) || array_key_exists("ollamaBadge", $context) ? $context["ollamaBadge"] : (function () { throw new RuntimeError('Variable "ollamaBadge" does not exist.', 105, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ollamaStatus"]) || array_key_exists("ollamaStatus", $context) ? $context["ollamaStatus"] : (function () { throw new RuntimeError('Variable "ollamaStatus" does not exist.', 105, $this->source); })()), "html", null, true);
                yield "</span>
          </div>

          <div class=\"list\">
            <div class=\"listItem\"><span>Modele</span><span class=\"listMeta\">";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "model", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 109, $this->source); })()), "model", [], "any", false, false, false, 109), "n/a")) : ("n/a")), "html", null, true);
                yield "</span></div>
            <div class=\"listItem\"><span>API locale</span><span class=\"listMeta\">";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "baseUrl", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 110, $this->source); })()), "baseUrl", [], "any", false, false, false, 110), "n/a")) : ("n/a")), "html", null, true);
                yield "</span></div>
            <div class=\"listItem\"><span>Latence</span><span class=\"listMeta\">";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "latencyMs", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 111, $this->source); })()), "latencyMs", [], "any", false, false, false, 111), 0)) : (0)), "html", null, true);
                yield " ms</span></div>
            ";
                // line 112
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 112, $this->source); })()), "adminDecisionHint", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 113
                    yield "              <div class=\"listItem\"><span>Suggestion admin</span><span class=\"listMeta\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 113, $this->source); })()), "adminDecisionHint", [], "any", false, false, false, 113), "html", null, true);
                    yield "</span></div>
            ";
                }
                // line 115
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 115, $this->source); })()), "summary", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 116
                    yield "              <div class=\"listItem\"><span>Resume</span><span class=\"listMeta\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 116, $this->source); })()), "summary", [], "any", false, false, false, 116), "html", null, true);
                    yield "</span></div>
            ";
                }
                // line 118
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "organizerSuggestions", [], "any", true, true, false, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 118, $this->source); })()), "organizerSuggestions", [], "any", false, false, false, 118), [])) : ([])));
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
                foreach ($context['_seq'] as $context["_key"] => $context["suggestion"]) {
                    // line 119
                    yield "              <div class=\"listItem\"><span>Suggestion ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 119), "html", null, true);
                    yield "</span><span class=\"listMeta\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["suggestion"], "html", null, true);
                    yield "</span></div>
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
                unset($context['_seq'], $context['_key'], $context['suggestion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 121, $this->source); })()), "error", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 122
                    yield "              <div class=\"listItem\"><span>Erreur</span><span class=\"listMeta\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 122, $this->source); })()), "error", [], "any", false, false, false, 122), "html", null, true);
                    yield "</span></div>
            ";
                }
                // line 124
                yield "          </div>
        </div>
      ";
            }
            // line 127
            yield "    ";
        } else {
            // line 128
            yield "      <div class=\"listItem\">
        <span>L'analyse IA n'a pas pu etre calculee pour cette demande.</span>
        <span class=\"badge badge--warning\">N/A</span>
      </div>
    ";
        }
        // line 133
        yield "  </section>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Decision admin</h3>
      <span class=\"listMeta\">Email automatique a l'organisateur</span>
    </div>

    ";
        // line 141
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 141, $this->source); })()) == "PENDING")) {
            // line 142
            yield "      <div class=\"formGrid\">
        <form method=\"post\" action=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_request_review", ["id" => (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 143, $this->source); })())]), "html", null, true);
            yield "\" class=\"field\">
          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("review_tournament_request_" . (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 144, $this->source); })()))), "html", null, true);
            yield "\" />
          <input type=\"hidden\" name=\"decision\" value=\"ACCEPTED\" />
          <label>Note admin (optionnel)</label>
          <textarea name=\"admin_note\" placeholder=\"Note de validation...\"></textarea>
          <button class=\"btn btnPrimary\" type=\"submit\">Accepter</button>
        </form>

        <form method=\"post\" action=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_request_review", ["id" => (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 151, $this->source); })())]), "html", null, true);
            yield "\" class=\"field\" onsubmit=\"return confirm('Refuser cette demande ?');\">
          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("review_tournament_request_" . (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 152, $this->source); })()))), "html", null, true);
            yield "\" />
          <input type=\"hidden\" name=\"decision\" value=\"REFUSED\" />
          <label>Motif du refus (optionnel)</label>
          <textarea name=\"admin_note\" placeholder=\"Motif du refus...\"></textarea>
          <button class=\"btn btnGhost\" type=\"submit\">Refuser</button>
        </form>
      </div>
    ";
        } else {
            // line 160
            yield "      <div class=\"listItem\">
        <span>Cette demande a deja ete traitee.</span>
        <span class=\"badge ";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusBadge"]) || array_key_exists("statusBadge", $context) ? $context["statusBadge"] : (function () { throw new RuntimeError('Variable "statusBadge" does not exist.', 162, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 162, $this->source); })()), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 165
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
        return "admin/pages/tournament-request-detail.html.twig";
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
        return array (  547 => 165,  539 => 162,  535 => 160,  524 => 152,  520 => 151,  510 => 144,  506 => 143,  503 => 142,  501 => 141,  491 => 133,  484 => 128,  481 => 127,  476 => 124,  470 => 122,  467 => 121,  448 => 119,  430 => 118,  424 => 116,  421 => 115,  415 => 113,  413 => 112,  409 => 111,  405 => 110,  401 => 109,  392 => 105,  387 => 102,  384 => 101,  381 => 100,  378 => 99,  376 => 98,  371 => 95,  361 => 90,  359 => 89,  344 => 87,  340 => 86,  337 => 85,  319 => 84,  313 => 81,  304 => 75,  300 => 74,  296 => 73,  290 => 72,  286 => 71,  283 => 70,  281 => 69,  277 => 67,  273 => 65,  263 => 63,  261 => 62,  253 => 56,  247 => 54,  245 => 53,  241 => 52,  237 => 51,  233 => 50,  229 => 49,  225 => 48,  221 => 47,  217 => 46,  213 => 45,  207 => 44,  203 => 43,  199 => 42,  195 => 41,  189 => 40,  185 => 39,  176 => 35,  170 => 31,  164 => 30,  153 => 27,  149 => 26,  146 => 25,  141 => 24,  137 => 23,  130 => 19,  123 => 15,  118 => 12,  115 => 11,  112 => 10,  109 => 9,  106 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Detail demande tournoi{% endblock %}

{% block admin_content %}
  {% set requestId = request.requestId ?? 0 %}
  {% set status = request.status|default('PENDING') %}
  {% set statusBadge = status == 'ACCEPTED' ? 'badge--success' : (status == 'REFUSED' ? 'badge--danger' : 'badge--warning') %}
  {% set ai = aiAssessment|default(null) %}
  {% set aiRisk = ai.riskLevel|default('LOW') %}
  {% set aiBadge = aiRisk == 'HIGH' ? 'badge--danger' : (aiRisk == 'MEDIUM' ? 'badge--warning' : 'badge--success') %}

  <div class=\"pageHeader\">
    <div>
      <h2>Detail demande #{{ requestId }}</h2>
      <div class=\"pageSub\">Validation admin de la demande organisateur.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_tournament_requests') }}\">Retour liste</a>
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

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Informations demande</h3>
      <span class=\"badge {{ statusBadge }}\">{{ status }}</span>
    </div>

    <div class=\"list\">
      <div class=\"listItem\"><span>Titre</span><span class=\"listMeta\">{{ request.title }}</span></div>
      <div class=\"listItem\"><span>Organisateur</span><span class=\"listMeta\">{{ request.organizerUserId ? request.organizerUserId.username : '-' }} ({{ request.organizerUserId ? request.organizerUserId.email : '-' }})</span></div>
      <div class=\"listItem\"><span>Jeu</span><span class=\"listMeta\">{{ request.gameId ? request.gameId.name : '-' }}</span></div>
      <div class=\"listItem\"><span>Format</span><span class=\"listMeta\">{{ request.format }}</span></div>
      <div class=\"listItem\"><span>Mode inscription</span><span class=\"listMeta\">{{ request.registrationMode }}</span></div>
      <div class=\"listItem\"><span>Dates</span><span class=\"listMeta\">{{ request.startDate ? request.startDate|date('d/m/Y') : '-' }} -> {{ request.endDate ? request.endDate|date('d/m/Y') : '-' }}</span></div>
      <div class=\"listItem\"><span>Deadline</span><span class=\"listMeta\">{{ request.registrationDeadline ? request.registrationDeadline|date('d/m/Y') : '-' }}</span></div>
      <div class=\"listItem\"><span>Max teams</span><span class=\"listMeta\">{{ request.maxTeams }}</span></div>
      <div class=\"listItem\"><span>Prize pool</span><span class=\"listMeta\">{{ request.prizePool|number_format(2, '.', ' ') }} DT</span></div>
      <div class=\"listItem\"><span>Prize description</span><span class=\"listMeta\">{{ request.prizeDescription ?: '-' }}</span></div>
      <div class=\"listItem\"><span>Description</span><span class=\"listMeta\">{{ request.description ?: '-' }}</span></div>
      <div class=\"listItem\"><span>Rules</span><span class=\"listMeta\">{{ request.rules ?: '-' }}</span></div>
      <div class=\"listItem\"><span>Admin note</span><span class=\"listMeta\">{{ request.adminResponseNote ?: '-' }}</span></div>
      <div class=\"listItem\"><span>Reviewed at</span><span class=\"listMeta\">{{ request.reviewedAt ? request.reviewedAt|date('d/m/Y H:i') : '-' }}</span></div>
      {% if request.photoPath %}
        <div class=\"listItem\"><span>Photo</span><span class=\"listMeta\"><a href=\"{{ request.photoPath starts with 'http' ? request.photoPath : asset(request.photoPath) }}\" target=\"_blank\" rel=\"noopener\">Voir image</a></span></div>
      {% endif %}
    </div>
  </section>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Analyse IA de validation</h3>
      {% if ai %}
        <span class=\"badge {{ aiBadge }}\">{{ ai.score|default(0) }}/100 {{ aiRisk }}</span>
      {% else %}
        <span class=\"listMeta\">Non disponible</span>
      {% endif %}
    </div>

    {% if ai %}
      <div class=\"list\">
        <div class=\"listItem\"><span>Score de qualite</span><span class=\"listMeta\">{{ ai.score|default(0) }}/100</span></div>
        <div class=\"listItem\"><span>Niveau de risque</span><span class=\"listMeta\"><span class=\"badge {{ aiBadge }}\">{{ aiRisk }}</span></span></div>
        <div class=\"listItem\"><span>Problemes detectes</span><span class=\"listMeta\">{{ ai.issuesCount|default(0) }}</span></div>
        <div class=\"listItem\"><span>Penalite totale</span><span class=\"listMeta\">{{ ai.penaltyPoints|default(0) }} pts</span></div>
        <div class=\"listItem\"><span>Doublon probable</span><span class=\"listMeta\">{{ ai.hasProbableDuplicate|default(false) ? 'Oui' : 'Non' }}</span></div>
      </div>

      <div class=\"panel\" style=\"margin-top:12px;\">
        <div class=\"panelHeader\">
          <h3 class=\"panelTitle\">Raisons (explicables)</h3>
          <span class=\"listMeta\">{{ ai.reasons|default([])|length }} raison(s)</span>
        </div>
        <div class=\"list\">
          {% for reason in ai.reasons|default([]) %}
            <div class=\"listItem\">
              <span>{{ loop.index }}.</span>
              <span class=\"listMeta\">{{ reason }}</span>
            </div>
          {% else %}
            <div class=\"listItem\">
              <span>Aucun signalement</span>
              <span class=\"badge badge--success\">LOW RISK</span>
            </div>
          {% endfor %}
        </div>
      </div>

      {% if ai.ollamaAssistant is defined %}
        {% set ollama = ai.ollamaAssistant %}
        {% set ollamaStatus = ollama.status|default('ERROR') %}
        {% set ollamaBadge = ollamaStatus == 'READY' ? 'badge--success' : (ollamaStatus == 'DISABLED' ? 'badge--warning' : 'badge--danger') %}
        <div class=\"panel\" style=\"margin-top:12px;\">
          <div class=\"panelHeader\">
            <h3 class=\"panelTitle\">Assistant IA local (Ollama)</h3>
            <span class=\"badge {{ ollamaBadge }}\">{{ ollamaStatus }}</span>
          </div>

          <div class=\"list\">
            <div class=\"listItem\"><span>Modele</span><span class=\"listMeta\">{{ ollama.model|default('n/a') }}</span></div>
            <div class=\"listItem\"><span>API locale</span><span class=\"listMeta\">{{ ollama.baseUrl|default('n/a') }}</span></div>
            <div class=\"listItem\"><span>Latence</span><span class=\"listMeta\">{{ ollama.latencyMs|default(0) }} ms</span></div>
            {% if ollama.adminDecisionHint %}
              <div class=\"listItem\"><span>Suggestion admin</span><span class=\"listMeta\">{{ ollama.adminDecisionHint }}</span></div>
            {% endif %}
            {% if ollama.summary %}
              <div class=\"listItem\"><span>Resume</span><span class=\"listMeta\">{{ ollama.summary }}</span></div>
            {% endif %}
            {% for suggestion in ollama.organizerSuggestions|default([]) %}
              <div class=\"listItem\"><span>Suggestion {{ loop.index }}</span><span class=\"listMeta\">{{ suggestion }}</span></div>
            {% endfor %}
            {% if ollama.error %}
              <div class=\"listItem\"><span>Erreur</span><span class=\"listMeta\">{{ ollama.error }}</span></div>
            {% endif %}
          </div>
        </div>
      {% endif %}
    {% else %}
      <div class=\"listItem\">
        <span>L'analyse IA n'a pas pu etre calculee pour cette demande.</span>
        <span class=\"badge badge--warning\">N/A</span>
      </div>
    {% endif %}
  </section>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Decision admin</h3>
      <span class=\"listMeta\">Email automatique a l'organisateur</span>
    </div>

    {% if status == 'PENDING' %}
      <div class=\"formGrid\">
        <form method=\"post\" action=\"{{ path('admin_tournament_request_review', {id: requestId}) }}\" class=\"field\">
          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('review_tournament_request_' ~ requestId) }}\" />
          <input type=\"hidden\" name=\"decision\" value=\"ACCEPTED\" />
          <label>Note admin (optionnel)</label>
          <textarea name=\"admin_note\" placeholder=\"Note de validation...\"></textarea>
          <button class=\"btn btnPrimary\" type=\"submit\">Accepter</button>
        </form>

        <form method=\"post\" action=\"{{ path('admin_tournament_request_review', {id: requestId}) }}\" class=\"field\" onsubmit=\"return confirm('Refuser cette demande ?');\">
          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('review_tournament_request_' ~ requestId) }}\" />
          <input type=\"hidden\" name=\"decision\" value=\"REFUSED\" />
          <label>Motif du refus (optionnel)</label>
          <textarea name=\"admin_note\" placeholder=\"Motif du refus...\"></textarea>
          <button class=\"btn btnGhost\" type=\"submit\">Refuser</button>
        </form>
      </div>
    {% else %}
      <div class=\"listItem\">
        <span>Cette demande a deja ete traitee.</span>
        <span class=\"badge {{ statusBadge }}\">{{ status }}</span>
      </div>
    {% endif %}
  </section>
{% endblock %}
", "admin/pages/tournament-request-detail.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\admin\\pages\\tournament-request-detail.html.twig");
    }
}
