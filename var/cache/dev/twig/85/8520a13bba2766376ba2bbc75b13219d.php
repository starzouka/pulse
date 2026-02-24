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

/* shared/_tournament_form_fields.html.twig */
class __TwigTemplate_37aecbfe24d7403cc1f6fc94b0f36834 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_tournament_form_fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_tournament_form_fields.html.twig"));

        // line 1
        yield "<div class=\"formGrid\">
  <div class=\"field\">
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "organizerUserId", [], "any", false, false, false, 3), 'label', ["label" => "organizer_user_id*"]);
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "organizerUserId", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "organizerUserId", [], "any", false, false, false, 5), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "gameId", [], "any", false, false, false, 9), 'label', ["label" => "game_id*"]);
        yield "
    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "gameId", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "gameId", [], "any", false, false, false, 11), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'label', ["label" => "title*"]);
        yield "
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "startDate", [], "any", false, false, false, 21), 'label', ["label" => "start_date*"]);
        yield "
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "startDate", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "startDate", [], "any", false, false, false, 23), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "endDate", [], "any", false, false, false, 27), 'label', ["label" => "end_date*"]);
        yield "
    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "endDate", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "endDate", [], "any", false, false, false, 29), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 33), 'label', ["label" => "registration_deadline"]);
        yield "
    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "registrationDeadline", [], "any", false, false, false, 35), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "maxTeams", [], "any", false, false, false, 39), 'label', ["label" => "max_teams*"]);
        yield "
    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "maxTeams", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "maxTeams", [], "any", false, false, false, 41), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "format", [], "any", false, false, false, 45), 'label', ["label" => "format*"]);
        yield "
    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "format", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "format", [], "any", false, false, false, 47), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "registrationMode", [], "any", false, false, false, 51), 'label', ["label" => "registration_mode*"]);
        yield "
    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "registrationMode", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "registrationMode", [], "any", false, false, false, 53), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "prizePool", [], "any", false, false, false, 57), 'label', ["label" => "prize_pool*"]);
        yield "
    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "prizePool", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "input", "min" => "0", "step" => "0.01", "inputmode" => "decimal"]]);
        yield "
    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "prizePool", [], "any", false, false, false, 59), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "prizeDescription", [], "any", false, false, false, 63), 'label', ["label" => "prize_description"]);
        yield "
    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "prizeDescription", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "textarea"]]);
        yield "
    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "prizeDescription", [], "any", false, false, false, 65), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), 'label', ["label" => "description"]);
        yield "
    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "textarea"]]);
        yield "
    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "rules", [], "any", false, false, false, 75), 'label', ["label" => "rules"]);
        yield "
    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "rules", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "textarea"]]);
        yield "
    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "rules", [], "any", false, false, false, 77), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "photoFile", [], "any", false, false, false, 81), 'label', ["label" => "photo_tournoi"]);
        yield "
    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "photoFile", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "input", "accept" => "image/*"]]);
        yield "
    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "photoFile", [], "any", false, false, false, 83), 'errors');
        yield "
    ";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "data", [], "any", false, false, false, 84) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "data", [], "any", false, false, false, 84), "photoPath", [], "any", false, false, false, 84))) {
            // line 85
            yield "      <div class=\"panelDesc\">
        Photo actuelle:
        <a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "vars", [], "any", false, false, false, 87), "data", [], "any", false, false, false, 87), "photoPath", [], "any", false, false, false, 87)), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">
          voir l'image
        </a>
      </div>
    ";
        }
        // line 92
        yield "  </div>

  ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", true, true, false, 94)) {
            // line 95
            yield "    <div class=\"field\">
      ";
            // line 96
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "status", [], "any", false, false, false, 96), 'label', ["label" => "status*"]);
            yield "
      ";
            // line 97
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "status", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "input"]]);
            yield "
      ";
            // line 98
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "status", [], "any", false, false, false, 98), 'errors');
            yield "
    </div>
  ";
        }
        // line 101
        yield "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shared/_tournament_form_fields.html.twig";
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
        return array (  296 => 101,  290 => 98,  286 => 97,  282 => 96,  279 => 95,  277 => 94,  273 => 92,  265 => 87,  261 => 85,  259 => 84,  255 => 83,  251 => 82,  247 => 81,  240 => 77,  236 => 76,  232 => 75,  225 => 71,  221 => 70,  217 => 69,  210 => 65,  206 => 64,  202 => 63,  195 => 59,  191 => 58,  187 => 57,  180 => 53,  176 => 52,  172 => 51,  165 => 47,  161 => 46,  157 => 45,  150 => 41,  146 => 40,  142 => 39,  135 => 35,  131 => 34,  127 => 33,  120 => 29,  116 => 28,  112 => 27,  105 => 23,  101 => 22,  97 => 21,  90 => 17,  86 => 16,  82 => 15,  75 => 11,  71 => 10,  67 => 9,  60 => 5,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"formGrid\">
  <div class=\"field\">
    {{ form_label(form.organizerUserId, 'organizer_user_id*') }}
    {{ form_widget(form.organizerUserId, {attr: {class: 'input'}}) }}
    {{ form_errors(form.organizerUserId) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.gameId, 'game_id*') }}
    {{ form_widget(form.gameId, {attr: {class: 'input'}}) }}
    {{ form_errors(form.gameId) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.title, 'title*') }}
    {{ form_widget(form.title, {attr: {class: 'input'}}) }}
    {{ form_errors(form.title) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.startDate, 'start_date*') }}
    {{ form_widget(form.startDate, {attr: {class: 'input'}}) }}
    {{ form_errors(form.startDate) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.endDate, 'end_date*') }}
    {{ form_widget(form.endDate, {attr: {class: 'input'}}) }}
    {{ form_errors(form.endDate) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.registrationDeadline, 'registration_deadline') }}
    {{ form_widget(form.registrationDeadline, {attr: {class: 'input'}}) }}
    {{ form_errors(form.registrationDeadline) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.maxTeams, 'max_teams*') }}
    {{ form_widget(form.maxTeams, {attr: {class: 'input'}}) }}
    {{ form_errors(form.maxTeams) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.format, 'format*') }}
    {{ form_widget(form.format, {attr: {class: 'input'}}) }}
    {{ form_errors(form.format) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.registrationMode, 'registration_mode*') }}
    {{ form_widget(form.registrationMode, {attr: {class: 'input'}}) }}
    {{ form_errors(form.registrationMode) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.prizePool, 'prize_pool*') }}
    {{ form_widget(form.prizePool, {attr: {class: 'input', min: '0', step: '0.01', inputmode: 'decimal'}}) }}
    {{ form_errors(form.prizePool) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.prizeDescription, 'prize_description') }}
    {{ form_widget(form.prizeDescription, {attr: {class: 'textarea'}}) }}
    {{ form_errors(form.prizeDescription) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.description, 'description') }}
    {{ form_widget(form.description, {attr: {class: 'textarea'}}) }}
    {{ form_errors(form.description) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.rules, 'rules') }}
    {{ form_widget(form.rules, {attr: {class: 'textarea'}}) }}
    {{ form_errors(form.rules) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.photoFile, 'photo_tournoi') }}
    {{ form_widget(form.photoFile, {attr: {class: 'input', accept: 'image/*'}}) }}
    {{ form_errors(form.photoFile) }}
    {% if form.vars.data and form.vars.data.photoPath %}
      <div class=\"panelDesc\">
        Photo actuelle:
        <a href=\"{{ asset(form.vars.data.photoPath) }}\" target=\"_blank\" rel=\"noopener\">
          voir l'image
        </a>
      </div>
    {% endif %}
  </div>

  {% if form.status is defined %}
    <div class=\"field\">
      {{ form_label(form.status, 'status*') }}
      {{ form_widget(form.status, {attr: {class: 'input'}}) }}
      {{ form_errors(form.status) }}
    </div>
  {% endif %}
</div>
", "shared/_tournament_form_fields.html.twig", "C:\\Users\\MSI\\OneDrive - ESPRIT\\Bureau\\pulse (1)\\pulse\\templates\\shared\\_tournament_form_fields.html.twig");
    }
}
