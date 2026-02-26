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

/* admin/pages/posts.html.twig */
class __TwigTemplate_e03dac415317ddf4d0d19f757b22a69b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/posts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/posts.html.twig"));

        // line 14
        $macros["sorter"] = $this->macros["sorter"] = $this;
        // line 1
        $this->parent = $this->load("admin/base_admin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
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

        yield "PULSE - Gestion posts";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        // line 19
        yield "  <div class=\"pageHeader\">
    <div>
      <h2>Gestion posts</h2>
      <div class=\"pageSub\">CRUD + stats + filtres base de donnees.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_posts_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), ["format" => "pdf"])), "html", null, true);
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_posts_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), ["format" => "excel"])), "html", null, true);
        yield "\">Exporter Excel</a>
    </div>
  </div>

  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 31
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                yield "      <div class=\"listItem\">
        <span>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 34
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
            // line 37
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">";
        // line 41
        yield (((($tmp = (isset($context["editingPost"]) || array_key_exists("editingPost", $context) ? $context["editingPost"] : (function () { throw new RuntimeError('Variable "editingPost" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("MODIFIER POST #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingPost"]) || array_key_exists("editingPost", $context) ? $context["editingPost"] : (function () { throw new RuntimeError('Variable "editingPost" does not exist.', 41, $this->source); })()), "postId", [], "any", false, false, false, 41)), "html", null, true)) : ("NOUVEAU POST"));
        yield "</h3>
    </div>

    ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 44, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
      ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 45, $this->source); })()), 'errors');
        yield "
      ";
        // line 46
        yield from $this->load("admin/pages/_post_form_fields.html.twig", 46)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 46, $this->source); })())]));
        // line 47
        yield "      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 48
        yield (((($tmp = (isset($context["editingPost"]) || array_key_exists("editingPost", $context) ? $context["editingPost"] : (function () { throw new RuntimeError('Variable "editingPost" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer post"));
        yield "</button>
        ";
        // line 49
        if ((($tmp = (isset($context["editingPost"]) || array_key_exists("editingPost", $context) ? $context["editingPost"] : (function () { throw new RuntimeError('Variable "editingPost" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "          <a class=\"btn btnGhost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_posts");
            yield "\">Annuler edition</a>
        ";
        }
        // line 52
        yield "      </div>
    ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 53, $this->source); })()), 'form_end');
        yield "
  </section>

  <form class=\"filtersBar\" method=\"get\" action=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_posts");
        yield "\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 57, $this->source); })()), "sort", [], "any", false, false, false, 57), "created_at")) : ("created_at")), "html", null, true);
        yield "\" />
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 58, $this->source); })()), "direction", [], "any", false, false, false, 58), "desc")) : ("desc")), "html", null, true);
        yield "\" />
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 61, $this->source); })()), "q", [], "any", false, false, false, 61), "html", null, true);
        yield "\" placeholder=\"contenu\" />
    </div>

    <div class=\"filterGroup\">
      <label>Visibility</label>
      <select name=\"visibility\">
        <option value=\"\">ALL</option>
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visibilityOptions"]) || array_key_exists("visibilityOptions", $context) ? $context["visibilityOptions"] : (function () { throw new RuntimeError('Variable "visibilityOptions" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["visibility"]) {
            // line 69
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["visibility"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 69, $this->source); })()), "visibility", [], "any", false, false, false, 69) == $context["visibility"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["visibility"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['visibility'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Deleted</label>
      <select name=\"deleted\">
        <option value=\"\" ";
        // line 77
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 77, $this->source); })()), "deleted", [], "any", false, false, false, 77) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        <option value=\"0\" ";
        // line 78
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 78, $this->source); })()), "deleted", [], "any", false, false, false, 78) == "0")) ? ("selected") : (""));
        yield ">Non</option>
        <option value=\"1\" ";
        // line 79
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 79, $this->source); })()), "deleted", [], "any", false, false, false, 79) == "1")) ? ("selected") : (""));
        yield ">Oui</option>
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Auteur</label>
      <input type=\"search\" name=\"author\" value=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 85, $this->source); })()), "author", [], "any", false, false, false, 85), "html", null, true);
        yield "\" placeholder=\"username/email\" />
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_posts");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE DES POSTS</h3>
      <span class=\"listMeta\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 97, $this->source); })())), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>";
        // line 104
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 104, $this->getSourceContext())->macro_sort_link(...["admin_posts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 104, $this->source); })()), "id", "ID"]);
        yield "</th>
            <th>";
        // line 105
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 105, $this->getSourceContext())->macro_sort_link(...["admin_posts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 105, $this->source); })()), "author", "Auteur"]);
        yield "</th>
            <th>";
        // line 106
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 106, $this->getSourceContext())->macro_sort_link(...["admin_posts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 106, $this->source); })()), "content", "Extrait"]);
        yield "</th>
            <th>";
        // line 107
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 107, $this->getSourceContext())->macro_sort_link(...["admin_posts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 107, $this->source); })()), "visibility", "Visibility"]);
        yield "</th>
            <th>";
        // line 108
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 108, $this->getSourceContext())->macro_sort_link(...["admin_posts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 108, $this->source); })()), "created_at", "Created"]);
        yield "</th>
            <th>";
        // line 109
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 109, $this->getSourceContext())->macro_sort_link(...["admin_posts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 109, $this->source); })()), "deleted", "Deleted"]);
        yield "</th>
            <th>";
        // line 110
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 110, $this->getSourceContext())->macro_sort_link(...["admin_posts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 110, $this->source); })()), "images", "Images"]);
        yield "</th>
            <th>";
        // line 111
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 111, $this->getSourceContext())->macro_sort_link(...["admin_posts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 111, $this->source); })()), "comments", "Comments"]);
        yield "</th>
            <th>";
        // line 112
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 112, $this->getSourceContext())->macro_sort_link(...["admin_posts", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 112, $this->source); })()), "likes", "Likes"]);
        yield "</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 117, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 118
            yield "            ";
            $context["postId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["post"], "postId", [], "any", true, true, false, 118) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["post"], "postId", [], "any", false, false, false, 118)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "postId", [], "any", false, false, false, 118)) : (0));
            // line 119
            yield "            <tr>
              <td>#";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 120, $this->source); })()), "html", null, true);
            yield "</td>
              <td>";
            // line 121
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "authorUserId", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "authorUserId", [], "any", false, false, false, 121), "username", [], "any", false, false, false, 121), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 122
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contentText", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contentText", [], "any", false, false, false, 122), 0, 80), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "visibility", [], "any", false, false, false, 123), "html", null, true);
            yield "</td>
              <td>";
            // line 124
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 124), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 125
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "isDeleted", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
              <td>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["imagesByPostId"] ?? null), (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 126, $this->source); })()), [], "array", true, true, false, 126)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["imagesByPostId"]) || array_key_exists("imagesByPostId", $context) ? $context["imagesByPostId"] : (function () { throw new RuntimeError('Variable "imagesByPostId" does not exist.', 126, $this->source); })()), (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 126, $this->source); })()), [], "array", false, false, false, 126), 0)) : (0)), "html", null, true);
            yield "</td>
              <td>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["commentsByPostId"] ?? null), (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 127, $this->source); })()), [], "array", true, true, false, 127)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentsByPostId"]) || array_key_exists("commentsByPostId", $context) ? $context["commentsByPostId"] : (function () { throw new RuntimeError('Variable "commentsByPostId" does not exist.', 127, $this->source); })()), (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 127, $this->source); })()), [], "array", false, false, false, 127), 0)) : (0)), "html", null, true);
            yield "</td>
              <td>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["likesByPostId"] ?? null), (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 128, $this->source); })()), [], "array", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["likesByPostId"]) || array_key_exists("likesByPostId", $context) ? $context["likesByPostId"] : (function () { throw new RuntimeError('Variable "likesByPostId" does not exist.', 128, $this->source); })()), (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 128, $this->source); })()), [], "array", false, false, false, 128), 0)) : (0)), "html", null, true);
            yield "</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_detail", ["id" => (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 131, $this->source); })())]), "html", null, true);
            yield "\">Voir</a>
                  <a class=\"btn btnTiny\" href=\"";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_posts", ["edit" => (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 132, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_delete", ["id" => (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 133, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce post ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_post_" . (isset($context["postId"]) || array_key_exists("postId", $context) ? $context["postId"] : (function () { throw new RuntimeError('Variable "postId" does not exist.', 134, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 140
        if (!$context['_iterated']) {
            // line 141
            yield "            <tr>
              <td colspan=\"10\" class=\"listMeta\">Aucun post trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        yield "        </tbody>
      </table>
    </div>
  </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    public function macro_sort_link($route_name = null, $filters = null, $field = null, $label = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "route_name" => $route_name,
            "filters" => $filters,
            "field" => $field,
            "label" => $label,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sort_link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sort_link"));

            // line 4
            yield "  ";
            $context["current_sort"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 4, $this->source); })()), "sort", [], "any", false, false, false, 4), "created_at")) : ("created_at"));
            // line 5
            yield "  ";
            $context["current_direction"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 5, $this->source); })()), "direction", [], "any", false, false, false, 5), "desc")) : ("desc"));
            // line 6
            yield "  ";
            $context["is_current"] = ((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 6, $this->source); })()) == (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()));
            // line 7
            yield "  ";
            $context["next_direction"] = ((((isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new RuntimeError('Variable "is_current" does not exist.', 7, $this->source); })()) && ((isset($context["current_direction"]) || array_key_exists("current_direction", $context) ? $context["current_direction"] : (function () { throw new RuntimeError('Variable "current_direction" does not exist.', 7, $this->source); })()) == "asc"))) ? ("desc") : ("asc"));
            // line 8
            yield "  ";
            $context["marker"] = (((($tmp = (isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new RuntimeError('Variable "is_current" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((((isset($context["current_direction"]) || array_key_exists("current_direction", $context) ? $context["current_direction"] : (function () { throw new RuntimeError('Variable "current_direction" does not exist.', 8, $this->source); })()) == "asc")) ? (" (ASC)") : (" (DESC)"))) : (""));
            // line 9
            yield "  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 9, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 9, $this->source); })()), ["sort" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "direction" => (isset($context["next_direction"]) || array_key_exists("next_direction", $context) ? $context["next_direction"] : (function () { throw new RuntimeError('Variable "next_direction" does not exist.', 9, $this->source); })())])), "html", null, true);
            yield "\" style=\"color:inherit;text-decoration:none;\">
    ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 10, $this->source); })()), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["marker"]) || array_key_exists("marker", $context) ? $context["marker"] : (function () { throw new RuntimeError('Variable "marker" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "
  </a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/pages/posts.html.twig";
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
        return array (  473 => 10,  468 => 9,  465 => 8,  462 => 7,  459 => 6,  456 => 5,  453 => 4,  432 => 3,  417 => 145,  408 => 141,  406 => 140,  395 => 134,  391 => 133,  387 => 132,  383 => 131,  377 => 128,  373 => 127,  369 => 126,  365 => 125,  361 => 124,  357 => 123,  353 => 122,  349 => 121,  345 => 120,  342 => 119,  339 => 118,  334 => 117,  326 => 112,  322 => 111,  318 => 110,  314 => 109,  310 => 108,  306 => 107,  302 => 106,  298 => 105,  294 => 104,  284 => 97,  274 => 90,  266 => 85,  257 => 79,  253 => 78,  249 => 77,  241 => 71,  228 => 69,  224 => 68,  214 => 61,  208 => 58,  204 => 57,  200 => 56,  194 => 53,  191 => 52,  185 => 50,  183 => 49,  179 => 48,  176 => 47,  174 => 46,  170 => 45,  166 => 44,  160 => 41,  155 => 38,  149 => 37,  138 => 34,  134 => 33,  131 => 32,  126 => 31,  122 => 30,  115 => 26,  111 => 25,  103 => 19,  90 => 18,  67 => 16,  56 => 1,  54 => 14,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'admin/base_admin.html.twig' %}

{% macro sort_link(route_name, filters, field, label) %}
  {% set current_sort = filters.sort|default('created_at') %}
  {% set current_direction = filters.direction|default('desc') %}
  {% set is_current = current_sort == field %}
  {% set next_direction = is_current and current_direction == 'asc' ? 'desc' : 'asc' %}
  {% set marker = is_current ? (current_direction == 'asc' ? ' (ASC)' : ' (DESC)') : '' %}
  <a href=\"{{ path(route_name, filters|merge({sort: field, direction: next_direction})) }}\" style=\"color:inherit;text-decoration:none;\">
    {{ label }}{{ marker }}
  </a>
{% endmacro %}

{% import _self as sorter %}

{% block title %}PULSE - Gestion posts{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion posts</h2>
      <div class=\"pageSub\">CRUD + stats + filtres base de donnees.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_posts_export', filters|merge({format: 'pdf'})) }}\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_posts_export', filters|merge({format: 'excel'})) }}\">Exporter Excel</a>
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
      <h3 class=\"panelTitle\">{{ editingPost ? 'MODIFIER POST #' ~ editingPost.postId : 'NOUVEAU POST' }}</h3>
    </div>

    {{ form_start(postForm, {attr: {novalidate: 'novalidate'}}) }}
      {{ form_errors(postForm) }}
      {% include 'admin/pages/_post_form_fields.html.twig' with {form: postForm} %}
      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">{{ editingPost ? 'Mettre a jour' : 'Creer post' }}</button>
        {% if editingPost %}
          <a class=\"btn btnGhost\" href=\"{{ path('admin_posts') }}\">Annuler edition</a>
        {% endif %}
      </div>
    {{ form_end(postForm) }}
  </section>

  <form class=\"filtersBar\" method=\"get\" action=\"{{ path('admin_posts') }}\">
    <input type=\"hidden\" name=\"sort\" value=\"{{ filters.sort|default('created_at') }}\" />
    <input type=\"hidden\" name=\"direction\" value=\"{{ filters.direction|default('desc') }}\" />
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"contenu\" />
    </div>

    <div class=\"filterGroup\">
      <label>Visibility</label>
      <select name=\"visibility\">
        <option value=\"\">ALL</option>
        {% for visibility in visibilityOptions %}
          <option value=\"{{ visibility }}\" {{ filters.visibility == visibility ? 'selected' : '' }}>{{ visibility }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Deleted</label>
      <select name=\"deleted\">
        <option value=\"\" {{ filters.deleted == '' ? 'selected' : '' }}>ALL</option>
        <option value=\"0\" {{ filters.deleted == '0' ? 'selected' : '' }}>Non</option>
        <option value=\"1\" {{ filters.deleted == '1' ? 'selected' : '' }}>Oui</option>
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Auteur</label>
      <input type=\"search\" name=\"author\" value=\"{{ filters.author }}\" placeholder=\"username/email\" />
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_posts') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE DES POSTS</h3>
      <span class=\"listMeta\">{{ posts|length }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>{{ sorter.sort_link('admin_posts', filters, 'id', 'ID') }}</th>
            <th>{{ sorter.sort_link('admin_posts', filters, 'author', 'Auteur') }}</th>
            <th>{{ sorter.sort_link('admin_posts', filters, 'content', 'Extrait') }}</th>
            <th>{{ sorter.sort_link('admin_posts', filters, 'visibility', 'Visibility') }}</th>
            <th>{{ sorter.sort_link('admin_posts', filters, 'created_at', 'Created') }}</th>
            <th>{{ sorter.sort_link('admin_posts', filters, 'deleted', 'Deleted') }}</th>
            <th>{{ sorter.sort_link('admin_posts', filters, 'images', 'Images') }}</th>
            <th>{{ sorter.sort_link('admin_posts', filters, 'comments', 'Comments') }}</th>
            <th>{{ sorter.sort_link('admin_posts', filters, 'likes', 'Likes') }}</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for post in posts %}
            {% set postId = post.postId ?? 0 %}
            <tr>
              <td>#{{ postId }}</td>
              <td>{{ post.authorUserId ? post.authorUserId.username : '-' }}</td>
              <td>{{ post.contentText ? post.contentText|slice(0, 80) : '-' }}</td>
              <td>{{ post.visibility }}</td>
              <td>{{ post.createdAt ? post.createdAt|date('d/m/Y H:i') : '-' }}</td>
              <td>{{ post.isDeleted ? 'Oui' : 'Non' }}</td>
              <td>{{ imagesByPostId[postId]|default(0) }}</td>
              <td>{{ commentsByPostId[postId]|default(0) }}</td>
              <td>{{ likesByPostId[postId]|default(0) }}</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_post_detail', {id: postId}) }}\">Voir</a>
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_posts', {edit: postId}) }}\">Update</a>
                  <form method=\"post\" action=\"{{ path('admin_post_delete', {id: postId}) }}\" onsubmit=\"return confirm('Supprimer ce post ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_post_' ~ postId) }}\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"10\" class=\"listMeta\">Aucun post trouve.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/posts.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\admin\\pages\\posts.html.twig");
    }
}
