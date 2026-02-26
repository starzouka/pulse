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

/* admin/pages/report-detail.html.twig */
class __TwigTemplate_e3ddf1113f24e5581255c7f4bb87a40a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/report-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/report-detail.html.twig"));

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

        yield "PULSE - Detail signalement";
        
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
      <h2>Detail signalement #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 8, $this->source); })()), "reportId", [], "any", false, false, false, 8), "html", null, true);
        yield "</h2>
      <div class=\"pageSub\">Mise a jour et apercu cible.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reports");
        yield "\">Retour liste</a>
    </div>
  </div>

  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 17
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                yield "      <div class=\"listItem\">
        <span>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 20
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
            // line 23
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">EDITER LE SIGNALEMENT</h3>
    </div>

    ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new RuntimeError('Variable "reportForm" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
      ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new RuntimeError('Variable "reportForm" does not exist.', 31, $this->source); })()), 'errors');
        yield "
      ";
        // line 32
        yield from $this->load("admin/pages/_report_form_fields.html.twig", 32)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new RuntimeError('Variable "reportForm" does not exist.', 32, $this->source); })())]));
        // line 33
        yield "      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">Mettre a jour</button>
      </div>
    ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new RuntimeError('Variable "reportForm" does not exist.', 36, $this->source); })()), 'form_end');
        yield "
  </section>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">APERÇU CIBLE</h3>
    </div>

    <div class=\"list\">
      <div class=\"listItem\"><span>target_type</span><span class=\"listMeta\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["targetType"]) || array_key_exists("targetType", $context) ? $context["targetType"] : (function () { throw new RuntimeError('Variable "targetType" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "</span></div>
      <div class=\"listItem\"><span>target_id</span><span class=\"listMeta\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 46, $this->source); })()), "targetId", [], "any", false, false, false, 46), "html", null, true);
        yield "</span></div>

      ";
        // line 48
        if ((($tmp = (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "        ";
            if (((isset($context["targetType"]) || array_key_exists("targetType", $context) ? $context["targetType"] : (function () { throw new RuntimeError('Variable "targetType" does not exist.', 49, $this->source); })()) == "POST")) {
                // line 50
                yield "          <div class=\"listItem\"><span>Post</span><span class=\"listMeta\">";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 50, $this->source); })()), "contentText", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 50, $this->source); })()), "contentText", [], "any", false, false, false, 50), 0, 100), "html", null, true)) : ("-"));
                yield "</span></div>
          <div class=\"listItem\"><span>Action</span><span class=\"listMeta\"><a class=\"btn btnTiny\" href=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 51, $this->source); })()), "postId", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\">Voir post</a></span></div>
        ";
            } elseif ((            // line 52
(isset($context["targetType"]) || array_key_exists("targetType", $context) ? $context["targetType"] : (function () { throw new RuntimeError('Variable "targetType" does not exist.', 52, $this->source); })()) == "COMMENT")) {
                // line 53
                yield "          <div class=\"listItem\"><span>Commentaire</span><span class=\"listMeta\">";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 53, $this->source); })()), "contentText", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 53, $this->source); })()), "contentText", [], "any", false, false, false, 53), 0, 100), "html", null, true)) : ("-"));
                yield "</span></div>
          <div class=\"listItem\"><span>Action</span><span class=\"listMeta\"><a class=\"btn btnTiny\" href=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments", ["edit" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 54, $this->source); })()), "commentId", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\">Voir commentaire</a></span></div>
        ";
            } elseif ((            // line 55
(isset($context["targetType"]) || array_key_exists("targetType", $context) ? $context["targetType"] : (function () { throw new RuntimeError('Variable "targetType" does not exist.', 55, $this->source); })()) == "USER")) {
                // line 56
                yield "          <div class=\"listItem\"><span>User</span><span class=\"listMeta\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 56, $this->source); })()), "username", [], "any", false, false, false, 56), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), "html", null, true);
                yield ")</span></div>
          <div class=\"listItem\"><span>Action</span><span class=\"listMeta\"><a class=\"btn btnTiny\" href=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 57, $this->source); })()), "userId", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\">Voir utilisateur</a></span></div>
        ";
            } elseif ((            // line 58
(isset($context["targetType"]) || array_key_exists("targetType", $context) ? $context["targetType"] : (function () { throw new RuntimeError('Variable "targetType" does not exist.', 58, $this->source); })()) == "TEAM")) {
                // line 59
                yield "          <div class=\"listItem\"><span>Team</span><span class=\"listMeta\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), "html", null, true);
                yield "</span></div>
          <div class=\"listItem\"><span>Action</span><span class=\"listMeta\"><a class=\"btn btnTiny\" href=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_team_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 60, $this->source); })()), "teamId", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\">Voir equipe</a></span></div>
        ";
            }
            // line 62
            yield "      ";
        } else {
            // line 63
            yield "        <div class=\"listItem\"><span>Cible</span><span class=\"listMeta\">Objet cible introuvable.</span></div>
      ";
        }
        // line 65
        yield "    </div>
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
        return "admin/pages/report-detail.html.twig";
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
        return array (  252 => 65,  248 => 63,  245 => 62,  240 => 60,  235 => 59,  233 => 58,  229 => 57,  222 => 56,  220 => 55,  216 => 54,  211 => 53,  209 => 52,  205 => 51,  200 => 50,  197 => 49,  195 => 48,  190 => 46,  186 => 45,  174 => 36,  169 => 33,  167 => 32,  163 => 31,  159 => 30,  151 => 24,  145 => 23,  134 => 20,  130 => 19,  127 => 18,  122 => 17,  118 => 16,  111 => 12,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'admin/base_admin.html.twig' %}

{% block title %}PULSE - Detail signalement{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Detail signalement #{{ report.reportId }}</h2>
      <div class=\"pageSub\">Mise a jour et apercu cible.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_reports') }}\">Retour liste</a>
    </div>
  </div>

  {% for label, messages in app.flashes %}
    {% for message in messages %}
      <div class=\"listItem\">
        <span>{{ message }}</span>
        <span class=\"badge {{ label == 'error' ? 'badge--danger' : 'badge--success' }}\">{{ label|upper }}</span>
      </div>
    {% endfor %}
  {% endfor %}

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">EDITER LE SIGNALEMENT</h3>
    </div>

    {{ form_start(reportForm, {attr: {novalidate: 'novalidate'}}) }}
      {{ form_errors(reportForm) }}
      {% include 'admin/pages/_report_form_fields.html.twig' with {form: reportForm} %}
      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">Mettre a jour</button>
      </div>
    {{ form_end(reportForm) }}
  </section>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">APERÇU CIBLE</h3>
    </div>

    <div class=\"list\">
      <div class=\"listItem\"><span>target_type</span><span class=\"listMeta\">{{ targetType }}</span></div>
      <div class=\"listItem\"><span>target_id</span><span class=\"listMeta\">{{ report.targetId }}</span></div>

      {% if targetEntity %}
        {% if targetType == 'POST' %}
          <div class=\"listItem\"><span>Post</span><span class=\"listMeta\">{{ targetEntity.contentText ? targetEntity.contentText|slice(0, 100) : '-' }}</span></div>
          <div class=\"listItem\"><span>Action</span><span class=\"listMeta\"><a class=\"btn btnTiny\" href=\"{{ path('admin_post_detail', {id: targetEntity.postId}) }}\">Voir post</a></span></div>
        {% elseif targetType == 'COMMENT' %}
          <div class=\"listItem\"><span>Commentaire</span><span class=\"listMeta\">{{ targetEntity.contentText ? targetEntity.contentText|slice(0, 100) : '-' }}</span></div>
          <div class=\"listItem\"><span>Action</span><span class=\"listMeta\"><a class=\"btn btnTiny\" href=\"{{ path('admin_comments', {edit: targetEntity.commentId}) }}\">Voir commentaire</a></span></div>
        {% elseif targetType == 'USER' %}
          <div class=\"listItem\"><span>User</span><span class=\"listMeta\">{{ targetEntity.username }} ({{ targetEntity.email }})</span></div>
          <div class=\"listItem\"><span>Action</span><span class=\"listMeta\"><a class=\"btn btnTiny\" href=\"{{ path('admin_user_detail', {id: targetEntity.userId}) }}\">Voir utilisateur</a></span></div>
        {% elseif targetType == 'TEAM' %}
          <div class=\"listItem\"><span>Team</span><span class=\"listMeta\">{{ targetEntity.name }}</span></div>
          <div class=\"listItem\"><span>Action</span><span class=\"listMeta\"><a class=\"btn btnTiny\" href=\"{{ path('admin_team_detail', {id: targetEntity.teamId}) }}\">Voir equipe</a></span></div>
        {% endif %}
      {% else %}
        <div class=\"listItem\"><span>Cible</span><span class=\"listMeta\">Objet cible introuvable.</span></div>
      {% endif %}
    </div>
  </section>
{% endblock %}
", "admin/pages/report-detail.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\admin\\pages\\report-detail.html.twig");
    }
}
