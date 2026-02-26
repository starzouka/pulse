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

/* front/pages/organizer-request-create.html.twig */
class __TwigTemplate_ae53dbbe7b0d74f9dac6ea8e3cb6cf26 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-request-create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-request-create.html.twig"));

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

        yield "PULSE - Demande tournoi";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ORGANISATEUR", "hero_title" => "Demande tournoi", "hero_sub" => "Soumettre une demande complete a l admin.", "breadcrumb_current" => "Demande tournoi"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_organizer_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "request_create"]));
        // line 17
        yield "
        <div>
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                yield "              <div class=\"listItem\">
                <span>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                <span class=\"badge ";
                // line 23
                yield ((($context["label"] == "error")) ? ("badge--danger") : ("badge--success"));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
          <section class=\"panel\">
            ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "organizerRequestCreateForm"]]);
        yield "
              ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 30, $this->source); })()), 'errors');
        yield "
              ";
        // line 31
        yield from $this->load("shared/_tournament_form_fields.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 31, $this->source); })())]));
        // line 32
        yield "              ";
        if (((isset($context["recaptchaEnabled"]) || array_key_exists("recaptchaEnabled", $context) ? $context["recaptchaEnabled"] : (function () { throw new RuntimeError('Variable "recaptchaEnabled" does not exist.', 32, $this->source); })()) && (isset($context["recaptchaSiteKey"]) || array_key_exists("recaptchaSiteKey", $context) ? $context["recaptchaSiteKey"] : (function () { throw new RuntimeError('Variable "recaptchaSiteKey" does not exist.', 32, $this->source); })()))) {
            // line 33
            yield "                <div id=\"organizerRequestRecaptcha\" style=\"min-height:1px;\"></div>
                <div class=\"listMeta\" style=\"margin-top:6px;\">
                  Protection Google reCAPTCHA activee (";
            // line 35
            yield ((((isset($context["recaptchaMode"]) || array_key_exists("recaptchaMode", $context) ? $context["recaptchaMode"] : (function () { throw new RuntimeError('Variable "recaptchaMode" does not exist.', 35, $this->source); })()) == "invisible")) ? ("invisible") : ("checkbox"));
            yield ").
                </div>
              ";
        }
        // line 38
        yield "              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button
                  class=\"btn btn--primary\"
                  id=\"organizerRequestSubmitBtn\"
                  type=\"submit\"
                  ";
        // line 43
        yield ((((isset($context["recaptchaEnabled"]) || array_key_exists("recaptchaEnabled", $context) ? $context["recaptchaEnabled"] : (function () { throw new RuntimeError('Variable "recaptchaEnabled" does not exist.', 43, $this->source); })()) && (isset($context["recaptchaSiteKey"]) || array_key_exists("recaptchaSiteKey", $context) ? $context["recaptchaSiteKey"] : (function () { throw new RuntimeError('Variable "recaptchaSiteKey" does not exist.', 43, $this->source); })()))) ? ("data-recaptcha-protected=\"1\"") : (""));
        yield "
                >Envoyer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests");
        yield "\">Annuler</a>
              </div>
            ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tournamentRequestForm"]) || array_key_exists("tournamentRequestForm", $context) ? $context["tournamentRequestForm"] : (function () { throw new RuntimeError('Variable "tournamentRequestForm" does not exist.', 47, $this->source); })()), 'form_end');
        yield "
          </section>

          ";
        // line 50
        if ((array_key_exists("aiRequestAssessment", $context) && (isset($context["aiRequestAssessment"]) || array_key_exists("aiRequestAssessment", $context) ? $context["aiRequestAssessment"] : (function () { throw new RuntimeError('Variable "aiRequestAssessment" does not exist.', 50, $this->source); })()))) {
            // line 51
            yield "            ";
            $context["aiRisk"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["aiRequestAssessment"] ?? null), "riskLevel", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aiRequestAssessment"]) || array_key_exists("aiRequestAssessment", $context) ? $context["aiRequestAssessment"] : (function () { throw new RuntimeError('Variable "aiRequestAssessment" does not exist.', 51, $this->source); })()), "riskLevel", [], "any", false, false, false, 51), "LOW")) : ("LOW"));
            // line 52
            yield "            ";
            $context["aiRiskBadge"] = ((((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 52, $this->source); })()) == "HIGH")) ? ("badge--danger") : ((((            // line 54
(isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 54, $this->source); })()) == "MEDIUM")) ? ("badge--warning") : ("badge--success"))));
            // line 56
            yield "            <div class=\"panel\">
              <div class=\"panel__head\">
                <div>
                  <h3 class=\"panel__title\">PRE-ANALYSE IA DEMANDE</h3>
                  <div class=\"panel__desc\">Score de validation (regles + scoring explicable).</div>
                </div>
                <div class=\"panel__actions\">
                  <span class=\"badge ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiRiskBadge"]) || array_key_exists("aiRiskBadge", $context) ? $context["aiRiskBadge"] : (function () { throw new RuntimeError('Variable "aiRiskBadge" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "\">RISQUE ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiRisk"]) || array_key_exists("aiRisk", $context) ? $context["aiRisk"] : (function () { throw new RuntimeError('Variable "aiRisk" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "</span>
                  <span class=\"badge\">SCORE ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["aiRequestAssessment"] ?? null), "score", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aiRequestAssessment"]) || array_key_exists("aiRequestAssessment", $context) ? $context["aiRequestAssessment"] : (function () { throw new RuntimeError('Variable "aiRequestAssessment" does not exist.', 64, $this->source); })()), "score", [], "any", false, false, false, 64), 0)) : (0)), "html", null, true);
            yield "/100</span>
                </div>
              </div>

              <div class=\"list\">
                <div class=\"listItem\">
                  <span><b>Resume IA</b></span>
                  <span class=\"listItem__meta\">
                    ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["aiRequestAssessment"] ?? null), "issuesCount", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aiRequestAssessment"]) || array_key_exists("aiRequestAssessment", $context) ? $context["aiRequestAssessment"] : (function () { throw new RuntimeError('Variable "aiRequestAssessment" does not exist.', 72, $this->source); })()), "issuesCount", [], "any", false, false, false, 72), 0)) : (0)), "html", null, true);
            yield " point(s) detecte(s) •
                    Penalites: ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["aiRequestAssessment"] ?? null), "penaltyPoints", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aiRequestAssessment"]) || array_key_exists("aiRequestAssessment", $context) ? $context["aiRequestAssessment"] : (function () { throw new RuntimeError('Variable "aiRequestAssessment" does not exist.', 73, $this->source); })()), "penaltyPoints", [], "any", false, false, false, 73), 0)) : (0)), "html", null, true);
            yield "
                  </span>
                </div>
                ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["aiRequestAssessment"] ?? null), "reasons", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aiRequestAssessment"]) || array_key_exists("aiRequestAssessment", $context) ? $context["aiRequestAssessment"] : (function () { throw new RuntimeError('Variable "aiRequestAssessment" does not exist.', 76, $this->source); })()), "reasons", [], "any", false, false, false, 76), [])) : ([])));
            foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                // line 77
                yield "                  <div class=\"listItem\">
                    <span>";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reason"], "html", null, true);
                yield "</span>
                    <span class=\"listItem__meta\">IA</span>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reason'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "              </div>

              ";
            // line 84
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["aiRequestAssessment"] ?? null), "ollamaAssistant", [], "any", true, true, false, 84)) {
                // line 85
                yield "                ";
                $context["ollama"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["aiRequestAssessment"]) || array_key_exists("aiRequestAssessment", $context) ? $context["aiRequestAssessment"] : (function () { throw new RuntimeError('Variable "aiRequestAssessment" does not exist.', 85, $this->source); })()), "ollamaAssistant", [], "any", false, false, false, 85);
                // line 86
                yield "                ";
                $context["ollamaStatus"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "status", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 86, $this->source); })()), "status", [], "any", false, false, false, 86), "ERROR")) : ("ERROR"));
                // line 87
                yield "                ";
                $context["ollamaBadge"] = ((((isset($context["ollamaStatus"]) || array_key_exists("ollamaStatus", $context) ? $context["ollamaStatus"] : (function () { throw new RuntimeError('Variable "ollamaStatus" does not exist.', 87, $this->source); })()) == "READY")) ? ("badge--success") : ((((                // line 89
(isset($context["ollamaStatus"]) || array_key_exists("ollamaStatus", $context) ? $context["ollamaStatus"] : (function () { throw new RuntimeError('Variable "ollamaStatus" does not exist.', 89, $this->source); })()) == "DISABLED")) ? ("badge--warning") : ("badge--danger"))));
                // line 91
                yield "                <div class=\"panel\" style=\"margin-top:12px;\">
                  <div class=\"panel__head\">
                    <div>
                      <h3 class=\"panel__title\">ASSISTANT IA LOCAL (OLLAMA)</h3>
                      <div class=\"panel__desc\">
                        ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "model", [], "any", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 96, $this->source); })()), "model", [], "any", false, false, false, 96), "n/a")) : ("n/a")), "html", null, true);
                yield " via ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "baseUrl", [], "any", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 96, $this->source); })()), "baseUrl", [], "any", false, false, false, 96), "localhost")) : ("localhost")), "html", null, true);
                yield "
                      </div>
                    </div>
                    <div class=\"panel__actions\">
                      <span class=\"badge ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ollamaBadge"]) || array_key_exists("ollamaBadge", $context) ? $context["ollamaBadge"] : (function () { throw new RuntimeError('Variable "ollamaBadge" does not exist.', 100, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ollamaStatus"]) || array_key_exists("ollamaStatus", $context) ? $context["ollamaStatus"] : (function () { throw new RuntimeError('Variable "ollamaStatus" does not exist.', 100, $this->source); })()), "html", null, true);
                yield "</span>
                      ";
                // line 101
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "latencyMs", [], "any", true, true, false, 101) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 101, $this->source); })()), "latencyMs", [], "any", false, false, false, 101))) {
                    // line 102
                    yield "                        <span class=\"badge\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 102, $this->source); })()), "latencyMs", [], "any", false, false, false, 102), "html", null, true);
                    yield " ms</span>
                      ";
                }
                // line 104
                yield "                    </div>
                  </div>

                  <div class=\"list\">
                    ";
                // line 108
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 108, $this->source); })()), "summary", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 109
                    yield "                      <div class=\"listItem\">
                        <span>";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 110, $this->source); })()), "summary", [], "any", false, false, false, 110), "html", null, true);
                    yield "</span>
                        <span class=\"listItem__meta\">Resume</span>
                      </div>
                    ";
                }
                // line 114
                yield "
                    ";
                // line 115
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 115, $this->source); })()), "adminDecisionHint", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 116
                    yield "                      <div class=\"listItem\">
                        <span><b>Suggestion admin</b></span>
                        <span class=\"listItem__meta\">";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 118, $this->source); })()), "adminDecisionHint", [], "any", false, false, false, 118), "html", null, true);
                    yield "</span>
                      </div>
                    ";
                }
                // line 121
                yield "
                    ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["ollama"] ?? null), "organizerSuggestions", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 122, $this->source); })()), "organizerSuggestions", [], "any", false, false, false, 122), [])) : ([])));
                foreach ($context['_seq'] as $context["_key"] => $context["suggestion"]) {
                    // line 123
                    yield "                      <div class=\"listItem\">
                        <span>";
                    // line 124
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["suggestion"], "html", null, true);
                    yield "</span>
                        <span class=\"listItem__meta\">Suggestion</span>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['suggestion'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                yield "
                    ";
                // line 129
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 129, $this->source); })()), "error", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 130
                    yield "                      <div class=\"listItem\">
                        <span>";
                    // line 131
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ollama"]) || array_key_exists("ollama", $context) ? $context["ollama"] : (function () { throw new RuntimeError('Variable "ollama" does not exist.', 131, $this->source); })()), "error", [], "any", false, false, false, 131), "html", null, true);
                    yield "</span>
                        <span class=\"listItem__meta\">Erreur</span>
                      </div>
                    ";
                }
                // line 135
                yield "                  </div>
                </div>
              ";
            }
            // line 138
            yield "            </div>
          ";
        }
        // line 140
        yield "
          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Schema reel + colonnes cles.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\"><span><b>tournament_requests</b></span><span class=\"listItem__meta\">request_id, organizer_user_id, game_id, title, rules, start_date, end_date, max_teams, format, registration_mode, prize_pool, photo_path</span></div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 155
        yield from $this->load("front/partials/_footer.html.twig", 155)->unwrap()->yield($context);
        // line 156
        yield "    </section>
  </main>

  ";
        // line 159
        yield from $this->load("front/partials/_auth_modal.html.twig", 159)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 163
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  ";
        // line 164
        if (((isset($context["recaptchaEnabled"]) || array_key_exists("recaptchaEnabled", $context) ? $context["recaptchaEnabled"] : (function () { throw new RuntimeError('Variable "recaptchaEnabled" does not exist.', 164, $this->source); })()) && (isset($context["recaptchaSiteKey"]) || array_key_exists("recaptchaSiteKey", $context) ? $context["recaptchaSiteKey"] : (function () { throw new RuntimeError('Variable "recaptchaSiteKey" does not exist.', 164, $this->source); })()))) {
            // line 165
            yield "    <script>
      (function () {
        var form = document.getElementById('organizerRequestCreateForm');
        var submitButton = document.getElementById('organizerRequestSubmitBtn');
        if (!form || !submitButton) {
          return;
        }

        var widgetId = null;
        var recaptchaMode = '";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("recaptchaMode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recaptchaMode"]) || array_key_exists("recaptchaMode", $context) ? $context["recaptchaMode"] : (function () { throw new RuntimeError('Variable "recaptchaMode" does not exist.', 174, $this->source); })()), "checkbox")) : ("checkbox")), "js"), "html", null, true);
            yield "';
        var recaptchaPassed = false;
        var pendingSubmit = false;

        window.pulseOrganizerRequestRecaptchaCallback = function () {
          if (recaptchaMode !== 'invisible') {
            return;
          }

          recaptchaPassed = true;
          pendingSubmit = false;
          form.submit();
        };

        window.pulseOrganizerRequestRecaptchaExpired = function () {
          recaptchaPassed = false;
        };

        window.pulseOrganizerRequestRecaptchaOnLoad = function () {
          if (typeof grecaptcha === 'undefined') {
            return;
          }

          try {
            widgetId = grecaptcha.render('organizerRequestRecaptcha', {
              sitekey: '";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptchaSiteKey"]) || array_key_exists("recaptchaSiteKey", $context) ? $context["recaptchaSiteKey"] : (function () { throw new RuntimeError('Variable "recaptchaSiteKey" does not exist.', 199, $this->source); })()), "js"), "html", null, true);
            yield "',
              size: recaptchaMode === 'invisible' ? 'invisible' : 'normal',
              callback: 'pulseOrganizerRequestRecaptchaCallback',
              'expired-callback': 'pulseOrganizerRequestRecaptchaExpired'
            });
          } catch (error) {
            widgetId = null;
          }
        };

        form.addEventListener('submit', function (event) {
          if (recaptchaMode !== 'invisible') {
            if (typeof grecaptcha === 'undefined' || widgetId === null) {
              return;
            }

            try {
              if (!grecaptcha.getResponse(widgetId)) {
                event.preventDefault();
                alert('Veuillez valider le reCAPTCHA avant d\\'envoyer.');
              }
            } catch (error) {
              // Let server-side validation handle it if the widget state is unavailable.
            }

            return;
          }

          if (recaptchaPassed) {
            recaptchaPassed = false;
            return;
          }

          if (pendingSubmit) {
            event.preventDefault();
            return;
          }

          if (typeof grecaptcha === 'undefined' || widgetId === null) {
            return;
          }

          event.preventDefault();
          pendingSubmit = true;

          try {
            grecaptcha.execute(widgetId);
          } catch (error) {
            pendingSubmit = false;
          }
        });
      })();
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=pulseOrganizerRequestRecaptchaOnLoad&render=explicit\" async defer></script>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/organizer-request-create.html.twig";
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
        return array (  478 => 199,  450 => 174,  439 => 165,  437 => 164,  432 => 163,  419 => 162,  408 => 159,  403 => 156,  401 => 155,  384 => 140,  380 => 138,  375 => 135,  368 => 131,  365 => 130,  363 => 129,  360 => 128,  350 => 124,  347 => 123,  343 => 122,  340 => 121,  334 => 118,  330 => 116,  328 => 115,  325 => 114,  318 => 110,  315 => 109,  313 => 108,  307 => 104,  301 => 102,  299 => 101,  293 => 100,  284 => 96,  277 => 91,  275 => 89,  273 => 87,  270 => 86,  267 => 85,  265 => 84,  261 => 82,  251 => 78,  248 => 77,  244 => 76,  238 => 73,  234 => 72,  223 => 64,  217 => 63,  208 => 56,  206 => 54,  204 => 52,  201 => 51,  199 => 50,  193 => 47,  188 => 45,  183 => 43,  176 => 38,  170 => 35,  166 => 33,  163 => 32,  161 => 31,  157 => 30,  153 => 29,  149 => 27,  143 => 26,  132 => 23,  128 => 22,  125 => 21,  120 => 20,  116 => 19,  112 => 17,  110 => 16,  104 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Demande tournoi{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'ORGANISATEUR',
    hero_title: 'Demande tournoi',
    hero_sub: 'Soumettre une demande complete a l admin.',
    breadcrumb_current: 'Demande tournoi'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_organizer_side_nav.html.twig' with {active: 'request_create'} %}

        <div>
          {% for label, messages in app.flashes %}
            {% for message in messages %}
              <div class=\"listItem\">
                <span>{{ message }}</span>
                <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
              </div>
            {% endfor %}
          {% endfor %}

          <section class=\"panel\">
            {{ form_start(tournamentRequestForm, {attr: {novalidate: 'novalidate', id: 'organizerRequestCreateForm'}}) }}
              {{ form_errors(tournamentRequestForm) }}
              {% include 'shared/_tournament_form_fields.html.twig' with {form: tournamentRequestForm} %}
              {% if recaptchaEnabled and recaptchaSiteKey %}
                <div id=\"organizerRequestRecaptcha\" style=\"min-height:1px;\"></div>
                <div class=\"listMeta\" style=\"margin-top:6px;\">
                  Protection Google reCAPTCHA activee ({{ recaptchaMode == 'invisible' ? 'invisible' : 'checkbox' }}).
                </div>
              {% endif %}
              <div class=\"formActions\" style=\"margin-top:12px;\">
                <button
                  class=\"btn btn--primary\"
                  id=\"organizerRequestSubmitBtn\"
                  type=\"submit\"
                  {{ recaptchaEnabled and recaptchaSiteKey ? 'data-recaptcha-protected=\"1\"' : '' }}
                >Envoyer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_requests') }}\">Annuler</a>
              </div>
            {{ form_end(tournamentRequestForm) }}
          </section>

          {% if aiRequestAssessment is defined and aiRequestAssessment %}
            {% set aiRisk = aiRequestAssessment.riskLevel|default('LOW') %}
            {% set aiRiskBadge = aiRisk == 'HIGH'
              ? 'badge--danger'
              : (aiRisk == 'MEDIUM' ? 'badge--warning' : 'badge--success')
            %}
            <div class=\"panel\">
              <div class=\"panel__head\">
                <div>
                  <h3 class=\"panel__title\">PRE-ANALYSE IA DEMANDE</h3>
                  <div class=\"panel__desc\">Score de validation (regles + scoring explicable).</div>
                </div>
                <div class=\"panel__actions\">
                  <span class=\"badge {{ aiRiskBadge }}\">RISQUE {{ aiRisk }}</span>
                  <span class=\"badge\">SCORE {{ aiRequestAssessment.score|default(0) }}/100</span>
                </div>
              </div>

              <div class=\"list\">
                <div class=\"listItem\">
                  <span><b>Resume IA</b></span>
                  <span class=\"listItem__meta\">
                    {{ aiRequestAssessment.issuesCount|default(0) }} point(s) detecte(s) •
                    Penalites: {{ aiRequestAssessment.penaltyPoints|default(0) }}
                  </span>
                </div>
                {% for reason in aiRequestAssessment.reasons|default([]) %}
                  <div class=\"listItem\">
                    <span>{{ reason }}</span>
                    <span class=\"listItem__meta\">IA</span>
                  </div>
                {% endfor %}
              </div>

              {% if aiRequestAssessment.ollamaAssistant is defined %}
                {% set ollama = aiRequestAssessment.ollamaAssistant %}
                {% set ollamaStatus = ollama.status|default('ERROR') %}
                {% set ollamaBadge = ollamaStatus == 'READY'
                  ? 'badge--success'
                  : (ollamaStatus == 'DISABLED' ? 'badge--warning' : 'badge--danger')
                %}
                <div class=\"panel\" style=\"margin-top:12px;\">
                  <div class=\"panel__head\">
                    <div>
                      <h3 class=\"panel__title\">ASSISTANT IA LOCAL (OLLAMA)</h3>
                      <div class=\"panel__desc\">
                        {{ ollama.model|default('n/a') }} via {{ ollama.baseUrl|default('localhost') }}
                      </div>
                    </div>
                    <div class=\"panel__actions\">
                      <span class=\"badge {{ ollamaBadge }}\">{{ ollamaStatus }}</span>
                      {% if ollama.latencyMs is defined and ollama.latencyMs %}
                        <span class=\"badge\">{{ ollama.latencyMs }} ms</span>
                      {% endif %}
                    </div>
                  </div>

                  <div class=\"list\">
                    {% if ollama.summary %}
                      <div class=\"listItem\">
                        <span>{{ ollama.summary }}</span>
                        <span class=\"listItem__meta\">Resume</span>
                      </div>
                    {% endif %}

                    {% if ollama.adminDecisionHint %}
                      <div class=\"listItem\">
                        <span><b>Suggestion admin</b></span>
                        <span class=\"listItem__meta\">{{ ollama.adminDecisionHint }}</span>
                      </div>
                    {% endif %}

                    {% for suggestion in ollama.organizerSuggestions|default([]) %}
                      <div class=\"listItem\">
                        <span>{{ suggestion }}</span>
                        <span class=\"listItem__meta\">Suggestion</span>
                      </div>
                    {% endfor %}

                    {% if ollama.error %}
                      <div class=\"listItem\">
                        <span>{{ ollama.error }}</span>
                        <span class=\"listItem__meta\">Erreur</span>
                      </div>
                    {% endif %}
                  </div>
                </div>
              {% endif %}
            </div>
          {% endif %}

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Schema reel + colonnes cles.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\"><span><b>tournament_requests</b></span><span class=\"listItem__meta\">request_id, organizer_user_id, game_id, title, rules, start_date, end_date, max_teams, format, registration_mode, prize_pool, photo_path</span></div>
            </div>
          </div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  {% if recaptchaEnabled and recaptchaSiteKey %}
    <script>
      (function () {
        var form = document.getElementById('organizerRequestCreateForm');
        var submitButton = document.getElementById('organizerRequestSubmitBtn');
        if (!form || !submitButton) {
          return;
        }

        var widgetId = null;
        var recaptchaMode = '{{ recaptchaMode|default('checkbox')|e('js') }}';
        var recaptchaPassed = false;
        var pendingSubmit = false;

        window.pulseOrganizerRequestRecaptchaCallback = function () {
          if (recaptchaMode !== 'invisible') {
            return;
          }

          recaptchaPassed = true;
          pendingSubmit = false;
          form.submit();
        };

        window.pulseOrganizerRequestRecaptchaExpired = function () {
          recaptchaPassed = false;
        };

        window.pulseOrganizerRequestRecaptchaOnLoad = function () {
          if (typeof grecaptcha === 'undefined') {
            return;
          }

          try {
            widgetId = grecaptcha.render('organizerRequestRecaptcha', {
              sitekey: '{{ recaptchaSiteKey|e('js') }}',
              size: recaptchaMode === 'invisible' ? 'invisible' : 'normal',
              callback: 'pulseOrganizerRequestRecaptchaCallback',
              'expired-callback': 'pulseOrganizerRequestRecaptchaExpired'
            });
          } catch (error) {
            widgetId = null;
          }
        };

        form.addEventListener('submit', function (event) {
          if (recaptchaMode !== 'invisible') {
            if (typeof grecaptcha === 'undefined' || widgetId === null) {
              return;
            }

            try {
              if (!grecaptcha.getResponse(widgetId)) {
                event.preventDefault();
                alert('Veuillez valider le reCAPTCHA avant d\\'envoyer.');
              }
            } catch (error) {
              // Let server-side validation handle it if the widget state is unavailable.
            }

            return;
          }

          if (recaptchaPassed) {
            recaptchaPassed = false;
            return;
          }

          if (pendingSubmit) {
            event.preventDefault();
            return;
          }

          if (typeof grecaptcha === 'undefined' || widgetId === null) {
            return;
          }

          event.preventDefault();
          pendingSubmit = true;

          try {
            grecaptcha.execute(widgetId);
          } catch (error) {
            pendingSubmit = false;
          }
        });
      })();
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=pulseOrganizerRequestRecaptchaOnLoad&render=explicit\" async defer></script>
  {% endif %}
{% endblock %}
", "front/pages/organizer-request-create.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\front\\pages\\organizer-request-create.html.twig");
    }
}
