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
        yield "
  <div class=\"pageHeader\">
    <div>
      <h2>Detail demande #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</h2>
      <div class=\"pageSub\">Validation admin de la demande organisateur.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_requests");
        yield "\">Retour liste</a>
    </div>
  </div>

  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 21
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                yield "      <div class=\"listItem\">
        <span>";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 24
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
            // line 27
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Informations demande</h3>
      <span class=\"badge ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusBadge"]) || array_key_exists("statusBadge", $context) ? $context["statusBadge"] : (function () { throw new RuntimeError('Variable "statusBadge" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "</span>
    </div>

    <div class=\"list\">
      <div class=\"listItem\"><span>Titre</span><span class=\"listMeta\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 36, $this->source); })()), "title", [], "any", false, false, false, 36), "html", null, true);
        yield "</span></div>
      <div class=\"listItem\"><span>Organisateur</span><span class=\"listMeta\">";
        // line 37
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 37, $this->source); })()), "organizerUserId", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 37, $this->source); })()), "organizerUserId", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37), "html", null, true)) : ("-"));
        yield " (";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 37, $this->source); })()), "organizerUserId", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 37, $this->source); })()), "organizerUserId", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37), "html", null, true)) : ("-"));
        yield ")</span></div>
      <div class=\"listItem\"><span>Jeu</span><span class=\"listMeta\">";
        // line 38
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 38, $this->source); })()), "gameId", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 38, $this->source); })()), "gameId", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Format</span><span class=\"listMeta\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 39, $this->source); })()), "format", [], "any", false, false, false, 39), "html", null, true);
        yield "</span></div>
      <div class=\"listItem\"><span>Mode inscription</span><span class=\"listMeta\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 40, $this->source); })()), "registrationMode", [], "any", false, false, false, 40), "html", null, true);
        yield "</span></div>
      <div class=\"listItem\"><span>Dates</span><span class=\"listMeta\">";
        // line 41
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 41, $this->source); })()), "startDate", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 41, $this->source); })()), "startDate", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true)) : ("-"));
        yield " -> ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 41, $this->source); })()), "endDate", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 41, $this->source); })()), "endDate", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Deadline</span><span class=\"listMeta\">";
        // line 42
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 42, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 42, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Max teams</span><span class=\"listMeta\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 43, $this->source); })()), "maxTeams", [], "any", false, false, false, 43), "html", null, true);
        yield "</span></div>
      <div class=\"listItem\"><span>Prize pool</span><span class=\"listMeta\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 44, $this->source); })()), "prizePool", [], "any", false, false, false, 44), 2, ".", " "), "html", null, true);
        yield " DT</span></div>
      <div class=\"listItem\"><span>Prize description</span><span class=\"listMeta\">";
        // line 45
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 45, $this->source); })()), "prizeDescription", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 45, $this->source); })()), "prizeDescription", [], "any", false, false, false, 45), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Description</span><span class=\"listMeta\">";
        // line 46
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Rules</span><span class=\"listMeta\">";
        // line 47
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 47, $this->source); })()), "rules", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 47, $this->source); })()), "rules", [], "any", false, false, false, 47), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Admin note</span><span class=\"listMeta\">";
        // line 48
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 48, $this->source); })()), "adminResponseNote", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 48, $this->source); })()), "adminResponseNote", [], "any", false, false, false, 48), "html", null, true)) : ("-"));
        yield "</span></div>
      <div class=\"listItem\"><span>Reviewed at</span><span class=\"listMeta\">";
        // line 49
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 49, $this->source); })()), "reviewedAt", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 49, $this->source); })()), "reviewedAt", [], "any", false, false, false, 49), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</span></div>
      ";
        // line 50
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 50, $this->source); })()), "photoPath", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "        <div class=\"listItem\"><span>Photo</span><span class=\"listMeta\"><a href=\"";
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 51, $this->source); })()), "photoPath", [], "any", false, false, false, 51)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 51, $this->source); })()), "photoPath", [], "any", false, false, false, 51), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 51, $this->source); })()), "photoPath", [], "any", false, false, false, 51)), "html", null, true)));
            yield "\" target=\"_blank\" rel=\"noopener\">Voir image</a></span></div>
      ";
        }
        // line 53
        yield "    </div>
  </section>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">Decision admin</h3>
      <span class=\"listMeta\">Email automatique a l'organisateur</span>
    </div>

    ";
        // line 62
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 62, $this->source); })()) == "PENDING")) {
            // line 63
            yield "      <div class=\"formGrid\">
        <form method=\"post\" action=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_request_review", ["id" => (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 64, $this->source); })())]), "html", null, true);
            yield "\" class=\"field\">
          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("review_tournament_request_" . (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 65, $this->source); })()))), "html", null, true);
            yield "\" />
          <input type=\"hidden\" name=\"decision\" value=\"ACCEPTED\" />
          <label>Note admin (optionnel)</label>
          <textarea name=\"admin_note\" placeholder=\"Note de validation...\"></textarea>
          <button class=\"btn btnPrimary\" type=\"submit\">Accepter</button>
        </form>

        <form method=\"post\" action=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournament_request_review", ["id" => (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 72, $this->source); })())]), "html", null, true);
            yield "\" class=\"field\" onsubmit=\"return confirm('Refuser cette demande ?');\">
          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("review_tournament_request_" . (isset($context["requestId"]) || array_key_exists("requestId", $context) ? $context["requestId"] : (function () { throw new RuntimeError('Variable "requestId" does not exist.', 73, $this->source); })()))), "html", null, true);
            yield "\" />
          <input type=\"hidden\" name=\"decision\" value=\"REFUSED\" />
          <label>Motif du refus (optionnel)</label>
          <textarea name=\"admin_note\" placeholder=\"Motif du refus...\"></textarea>
          <button class=\"btn btnGhost\" type=\"submit\">Refuser</button>
        </form>
      </div>
    ";
        } else {
            // line 81
            yield "      <div class=\"listItem\">
        <span>Cette demande a deja ete traitee.</span>
        <span class=\"badge ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusBadge"]) || array_key_exists("statusBadge", $context) ? $context["statusBadge"] : (function () { throw new RuntimeError('Variable "statusBadge" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 86
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
        return array (  301 => 86,  293 => 83,  289 => 81,  278 => 73,  274 => 72,  264 => 65,  260 => 64,  257 => 63,  255 => 62,  244 => 53,  238 => 51,  236 => 50,  232 => 49,  228 => 48,  224 => 47,  220 => 46,  216 => 45,  212 => 44,  208 => 43,  204 => 42,  198 => 41,  194 => 40,  190 => 39,  186 => 38,  180 => 37,  176 => 36,  167 => 32,  161 => 28,  155 => 27,  144 => 24,  140 => 23,  137 => 22,  132 => 21,  128 => 20,  121 => 16,  114 => 12,  109 => 9,  106 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Detail demande tournoi{% endblock %}

{% block admin_content %}
  {% set requestId = request.requestId ?? 0 %}
  {% set status = request.status|default('PENDING') %}
  {% set statusBadge = status == 'ACCEPTED' ? 'badge--success' : (status == 'REFUSED' ? 'badge--danger' : 'badge--warning') %}

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
", "admin/pages/tournament-request-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\tournament-request-detail.html.twig");
    }
}
