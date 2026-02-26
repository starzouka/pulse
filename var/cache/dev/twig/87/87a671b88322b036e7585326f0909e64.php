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

/* front/pages/organizer-request-detail.html.twig */
class __TwigTemplate_0137946189debf6b9c3e76c882d7ef5b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-request-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/organizer-request-detail.html.twig"));

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

        yield "PULSE - Detail demande";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "ORGANISATEUR", "hero_title" => "Detail demande", "hero_sub" => "Toutes les informations de la demande de tournoi.", "breadcrumb_current" => "Detail demande"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_organizer_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "request_detail"]));
        // line 17
        yield "
        <div>
          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        yield "</h3>
                <div class=\"panel__desc\">
                  Demande #";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 24, $this->source); })()), "requestId", [], "any", false, false, false, 24), "html", null, true);
        yield " |
                  Creee le ";
        // line 25
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 25, $this->source); })()), "createdAt", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 25, $this->source); })()), "createdAt", [], "any", false, false, false, 25), "Y-m-d H:i"), "html", null, true)) : ("-"));
        yield "
                </div>
              </div>
              ";
        // line 28
        $context["statusClass"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28) == "ACCEPTED")) ? ("badge--success") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30) == "REFUSED")) ? ("badge--danger") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30) == "CANCELLED")) ? ("badge--muted") : (""))))));
        // line 32
        yield "              <span class=\"badge ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32), "html", null, true);
        yield "</span>
            </div>

            <div class=\"list\">
              <div class=\"listItem\">
                <span>Jeu</span>
                <span class=\"listItem__meta\">";
        // line 38
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 38, $this->source); })()), "gameId", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 38, $this->source); })()), "gameId", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true)) : ("-"));
        yield "</span>
              </div>
              <div class=\"listItem\">
                <span>Periode</span>
                <span class=\"listItem__meta\">
                  ";
        // line 43
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 43, $this->source); })()), "startDate", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 43, $this->source); })()), "startDate", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true)) : ("-"));
        yield "
                  -
                  ";
        // line 45
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 45, $this->source); })()), "endDate", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 45, $this->source); })()), "endDate", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true)) : ("-"));
        yield "
                </span>
              </div>
              <div class=\"listItem\">
                <span>Date limite inscription</span>
                <span class=\"listItem__meta\">";
        // line 50
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 50, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 50, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true)) : ("-"));
        yield "</span>
              </div>
              <div class=\"listItem\">
                <span>Max equipes</span>
                <span class=\"listItem__meta\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 54, $this->source); })()), "maxTeams", [], "any", false, false, false, 54), "html", null, true);
        yield "</span>
              </div>
              <div class=\"listItem\">
                <span>Format</span>
                <span class=\"listItem__meta\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 58, $this->source); })()), "format", [], "any", false, false, false, 58), "html", null, true);
        yield "</span>
              </div>
              <div class=\"listItem\">
                <span>Mode inscription</span>
                <span class=\"listItem__meta\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 62, $this->source); })()), "registrationMode", [], "any", false, false, false, 62), "html", null, true);
        yield "</span>
              </div>
              <div class=\"listItem\">
                <span>Prize pool</span>
                <span class=\"listItem__meta\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 66, $this->source); })()), "prizePool", [], "any", false, false, false, 66), "html", null, true);
        yield " DT</span>
              </div>
              <div class=\"listItem\">
                <span>Description prix</span>
                <span class=\"listItem__meta\">";
        // line 70
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 70, $this->source); })()), "prizeDescription", [], "any", false, false, false, 70)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 70, $this->source); })()), "prizeDescription", [], "any", false, false, false, 70), "html", null, true)) : ("-"));
        yield "</span>
              </div>
              <div class=\"listItem\">
                <span>Revu par admin</span>
                <span class=\"listItem__meta\">
                  ";
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 75, $this->source); })()), "reviewedByAdminId", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 76, $this->source); })()), "reviewedByAdminId", [], "any", false, false, false, 76), "email", [], "any", false, false, false, 76), "html", null, true);
            yield " (";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 76, $this->source); })()), "reviewedAt", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 76, $this->source); })()), "reviewedAt", [], "any", false, false, false, 76), "Y-m-d H:i"), "html", null, true)) : ("-"));
            yield ")
                  ";
        } else {
            // line 78
            yield "                    -
                  ";
        }
        // line 80
        yield "                </span>
              </div>
            </div>

            ";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "              <div class=\"panelDesc\" style=\"margin-top:12px;\">
                <b>Description:</b> ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 86, $this->source); })()), "description", [], "any", false, false, false, 86), "html", null, true);
            yield "
              </div>
            ";
        }
        // line 89
        yield "
            ";
        // line 90
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 90, $this->source); })()), "rules", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "              <div class=\"panelDesc\" style=\"margin-top:8px;\">
                <b>Regles:</b> ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 92, $this->source); })()), "rules", [], "any", false, false, false, 92), "html", null, true);
            yield "
              </div>
            ";
        }
        // line 95
        yield "
            ";
        // line 96
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 96, $this->source); })()), "adminResponseNote", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "              <div class=\"panelDesc\" style=\"margin-top:8px;\">
                <b>Note admin:</b> ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 98, $this->source); })()), "adminResponseNote", [], "any", false, false, false, 98), "html", null, true);
            yield "
              </div>
            ";
        }
        // line 101
        yield "
            ";
        // line 102
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 102, $this->source); })()), "photoPath", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "              <div style=\"margin-top:12px;\">
                <img
                  src=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournamentRequest"]) || array_key_exists("tournamentRequest", $context) ? $context["tournamentRequest"] : (function () { throw new RuntimeError('Variable "tournamentRequest" does not exist.', 105, $this->source); })()), "photoPath", [], "any", false, false, false, 105)), "html", null, true);
            yield "\"
                  alt=\"Photo tournoi\"
                  style=\"max-width: 320px; border-radius: 12px;\"
                />
              </div>
            ";
        }
        // line 111
        yield "
            <div class=\"formActions\" style=\"margin-top:12px;\">
              <a class=\"btn btn--ghost\" href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_requests");
        yield "\">Retour</a>
              <a class=\"btn btn--primary\" href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_organizer_request_create");
        yield "\">Nouvelle demande</a>
            </div>
          </div>

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Donnees extraites depuis le schema reel.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\">
                <span><b>tournament_requests</b></span>
                <span class=\"listItem__meta\">title, rules, photo_path, status, reviewed_by_admin_id, admin_response_note</span>
              </div>
              <div class=\"listItem\">
                <span><b>games</b></span>
                <span class=\"listItem__meta\">game_id, name</span>
              </div>
              <div class=\"listItem\">
                <span><b>users</b></span>
                <span class=\"listItem__meta\">organizer_user_id, reviewed_by_admin_id</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 143
        yield from $this->load("front/partials/_footer.html.twig", 143)->unwrap()->yield($context);
        // line 144
        yield "    </section>
  </main>

  ";
        // line 147
        yield from $this->load("front/partials/_auth_modal.html.twig", 147)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/organizer-request-detail.html.twig";
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
        return array (  336 => 147,  331 => 144,  329 => 143,  297 => 114,  293 => 113,  289 => 111,  280 => 105,  276 => 103,  274 => 102,  271 => 101,  265 => 98,  262 => 97,  260 => 96,  257 => 95,  251 => 92,  248 => 91,  246 => 90,  243 => 89,  237 => 86,  234 => 85,  232 => 84,  226 => 80,  222 => 78,  214 => 76,  212 => 75,  204 => 70,  197 => 66,  190 => 62,  183 => 58,  176 => 54,  169 => 50,  161 => 45,  156 => 43,  148 => 38,  136 => 32,  134 => 30,  133 => 28,  127 => 25,  123 => 24,  118 => 22,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Detail demande{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'ORGANISATEUR',
    hero_title: 'Detail demande',
    hero_sub: 'Toutes les informations de la demande de tournoi.',
    breadcrumb_current: 'Detail demande'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_organizer_side_nav.html.twig' with {active: 'request_detail'} %}

        <div>
          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">{{ tournamentRequest.title }}</h3>
                <div class=\"panel__desc\">
                  Demande #{{ tournamentRequest.requestId }} |
                  Creee le {{ tournamentRequest.createdAt ? tournamentRequest.createdAt|date('Y-m-d H:i') : '-' }}
                </div>
              </div>
              {% set statusClass = tournamentRequest.status == 'ACCEPTED'
                ? 'badge--success'
                : (tournamentRequest.status == 'REFUSED' ? 'badge--danger' : (tournamentRequest.status == 'CANCELLED' ? 'badge--muted' : ''))
              %}
              <span class=\"badge {{ statusClass }}\">{{ tournamentRequest.status }}</span>
            </div>

            <div class=\"list\">
              <div class=\"listItem\">
                <span>Jeu</span>
                <span class=\"listItem__meta\">{{ tournamentRequest.gameId ? tournamentRequest.gameId.name : '-' }}</span>
              </div>
              <div class=\"listItem\">
                <span>Periode</span>
                <span class=\"listItem__meta\">
                  {{ tournamentRequest.startDate ? tournamentRequest.startDate|date('Y-m-d') : '-' }}
                  -
                  {{ tournamentRequest.endDate ? tournamentRequest.endDate|date('Y-m-d') : '-' }}
                </span>
              </div>
              <div class=\"listItem\">
                <span>Date limite inscription</span>
                <span class=\"listItem__meta\">{{ tournamentRequest.registrationDeadline ? tournamentRequest.registrationDeadline|date('Y-m-d') : '-' }}</span>
              </div>
              <div class=\"listItem\">
                <span>Max equipes</span>
                <span class=\"listItem__meta\">{{ tournamentRequest.maxTeams }}</span>
              </div>
              <div class=\"listItem\">
                <span>Format</span>
                <span class=\"listItem__meta\">{{ tournamentRequest.format }}</span>
              </div>
              <div class=\"listItem\">
                <span>Mode inscription</span>
                <span class=\"listItem__meta\">{{ tournamentRequest.registrationMode }}</span>
              </div>
              <div class=\"listItem\">
                <span>Prize pool</span>
                <span class=\"listItem__meta\">{{ tournamentRequest.prizePool }} DT</span>
              </div>
              <div class=\"listItem\">
                <span>Description prix</span>
                <span class=\"listItem__meta\">{{ tournamentRequest.prizeDescription ?: '-' }}</span>
              </div>
              <div class=\"listItem\">
                <span>Revu par admin</span>
                <span class=\"listItem__meta\">
                  {% if tournamentRequest.reviewedByAdminId %}
                    {{ tournamentRequest.reviewedByAdminId.email }} ({{ tournamentRequest.reviewedAt ? tournamentRequest.reviewedAt|date('Y-m-d H:i') : '-' }})
                  {% else %}
                    -
                  {% endif %}
                </span>
              </div>
            </div>

            {% if tournamentRequest.description %}
              <div class=\"panelDesc\" style=\"margin-top:12px;\">
                <b>Description:</b> {{ tournamentRequest.description }}
              </div>
            {% endif %}

            {% if tournamentRequest.rules %}
              <div class=\"panelDesc\" style=\"margin-top:8px;\">
                <b>Regles:</b> {{ tournamentRequest.rules }}
              </div>
            {% endif %}

            {% if tournamentRequest.adminResponseNote %}
              <div class=\"panelDesc\" style=\"margin-top:8px;\">
                <b>Note admin:</b> {{ tournamentRequest.adminResponseNote }}
              </div>
            {% endif %}

            {% if tournamentRequest.photoPath %}
              <div style=\"margin-top:12px;\">
                <img
                  src=\"{{ asset(tournamentRequest.photoPath) }}\"
                  alt=\"Photo tournoi\"
                  style=\"max-width: 320px; border-radius: 12px;\"
                />
              </div>
            {% endif %}

            <div class=\"formActions\" style=\"margin-top:12px;\">
              <a class=\"btn btn--ghost\" href=\"{{ path('front_organizer_requests') }}\">Retour</a>
              <a class=\"btn btn--primary\" href=\"{{ path('front_organizer_request_create') }}\">Nouvelle demande</a>
            </div>
          </div>

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">TABLES UTILISEES</h3>
                <div class=\"panel__desc\">Donnees extraites depuis le schema reel.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\">
                <span><b>tournament_requests</b></span>
                <span class=\"listItem__meta\">title, rules, photo_path, status, reviewed_by_admin_id, admin_response_note</span>
              </div>
              <div class=\"listItem\">
                <span><b>games</b></span>
                <span class=\"listItem__meta\">game_id, name</span>
              </div>
              <div class=\"listItem\">
                <span><b>users</b></span>
                <span class=\"listItem__meta\">organizer_user_id, reviewed_by_admin_id</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/organizer-request-detail.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\organizer-request-detail.html.twig");
    }
}
