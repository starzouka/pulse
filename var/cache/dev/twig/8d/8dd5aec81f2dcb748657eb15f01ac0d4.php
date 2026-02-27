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

/* admin/pages/tournament-form.html.twig */
class __TwigTemplate_505cabef12cc40270356af8e6cdf9f56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/tournament-form.html.twig"));

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

        yield "PULSE - Formulaire tournoi";
        
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
      <h2>";
        // line 8
        yield (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier tournoi") : ("Nouveau tournoi"));
        yield "</h2>
      <div class=\"pageSub\">Les changements seront visibles sur le Back Office et le Front Office.</div>
    </div>
  </div>

  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                yield "      <div class=\"listItem\">
        <span>";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 17
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
            // line 20
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
  <section class=\"panel\">
    ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tournamentForm"]) || array_key_exists("tournamentForm", $context) ? $context["tournamentForm"] : (function () { throw new RuntimeError('Variable "tournamentForm" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
      ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tournamentForm"]) || array_key_exists("tournamentForm", $context) ? $context["tournamentForm"] : (function () { throw new RuntimeError('Variable "tournamentForm" does not exist.', 24, $this->source); })()), 'errors');
        yield "
      ";
        // line 25
        yield from $this->load("shared/_tournament_form_fields.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["tournamentForm"]) || array_key_exists("tournamentForm", $context) ? $context["tournamentForm"] : (function () { throw new RuntimeError('Variable "tournamentForm" does not exist.', 25, $this->source); })())]));
        // line 26
        yield "      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 27
        yield (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer tournoi"));
        yield "</button>
        <a class=\"btn btnGhost\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tournaments");
        yield "\">Annuler</a>
      </div>
    ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tournamentForm"]) || array_key_exists("tournamentForm", $context) ? $context["tournamentForm"] : (function () { throw new RuntimeError('Variable "tournamentForm" does not exist.', 30, $this->source); })()), 'form_end');
        yield "
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
        return "admin/pages/tournament-form.html.twig";
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
        return array (  171 => 30,  166 => 28,  162 => 27,  159 => 26,  157 => 25,  153 => 24,  149 => 23,  145 => 21,  139 => 20,  128 => 17,  124 => 16,  121 => 15,  116 => 14,  112 => 13,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Formulaire tournoi{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>{{ isEdit ? 'Modifier tournoi' : 'Nouveau tournoi' }}</h2>
      <div class=\"pageSub\">Les changements seront visibles sur le Back Office et le Front Office.</div>
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
    {{ form_start(tournamentForm, {attr: {novalidate: 'novalidate'}}) }}
      {{ form_errors(tournamentForm) }}
      {% include 'shared/_tournament_form_fields.html.twig' with {form: tournamentForm} %}
      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">{{ isEdit ? 'Mettre a jour' : 'Creer tournoi' }}</button>
        <a class=\"btn btnGhost\" href=\"{{ path('admin_tournaments') }}\">Annuler</a>
      </div>
    {{ form_end(tournamentForm) }}
  </section>
{% endblock %}
", "admin/pages/tournament-form.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\tournament-form.html.twig");
    }
}
