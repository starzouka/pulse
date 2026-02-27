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

/* admin/pages/post-detail.html.twig */
class __TwigTemplate_4b1ca2086e939ee6c9a1fcf9519b0d66 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/post-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/post-detail.html.twig"));

        // line 12
        $macros["sorter"] = $this->macros["sorter"] = $this;
        // line 1
        $this->parent = $this->load("admin/base_admin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
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

        yield "PULSE - Detail post";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "  <div class=\"pageHeader\">
    <div>
      <h2>Detail post #";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 19, $this->source); })()), "postId", [], "any", false, false, false, 19), "html", null, true);
        yield "</h2>
      <div class=\"pageSub\">Edition, commentaires, signalements.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_posts");
        yield "\">Retour liste</a>
    </div>
  </div>

  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 28
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 29
                yield "      <div class=\"listItem\">
        <span>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 31
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
            // line 34
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">EDITER LE POST</h3>
    </div>

    ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
      ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 42, $this->source); })()), 'errors');
        yield "
      ";
        // line 43
        yield from $this->load("admin/pages/_post_form_fields.html.twig", 43)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 43, $this->source); })())]));
        // line 44
        yield "      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">Mettre a jour</button>
      </div>
    ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 47, $this->source); })()), 'form_end');
        yield "
  </section>

  <div class=\"tabs\" data-tabs=\"post-detail\">
    <button class=\"tab isActive\" data-tab=\"images\">Images</button>
    <button class=\"tab\" data-tab=\"comments\">Commentaires</button>
    <button class=\"tab\" data-tab=\"reports\">Signalements</button>
  </div>

  <div class=\"tabPanels\" data-panels=\"post-detail\">
    <div class=\"tabPanel isActive\" data-panel=\"images\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>";
        // line 63
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 63, $this->getSourceContext())->macro_scoped_sort_link(...["admin_post_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 63, $this->source); })()), "postId", [], "any", false, false, false, 63), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "query", [], "any", false, false, false, 63), "all", [], "any", false, false, false, 63), "images_sort", "images_direction", "image_id", "Image ID", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 63, $this->source); })()), "images", [], "any", false, false, false, 63), "sort", [], "any", false, false, false, 63), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 63, $this->source); })()), "images", [], "any", false, false, false, 63), "direction", [], "any", false, false, false, 63)]);
        yield "</th>
                <th>URL</th>
                <th>";
        // line 65
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 65, $this->getSourceContext())->macro_scoped_sort_link(...["admin_post_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 65, $this->source); })()), "postId", [], "any", false, false, false, 65), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "query", [], "any", false, false, false, 65), "all", [], "any", false, false, false, 65), "images_sort", "images_direction", "position", "Position", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 65, $this->source); })()), "images", [], "any", false, false, false, 65), "sort", [], "any", false, false, false, 65), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 65, $this->source); })()), "images", [], "any", false, false, false, 65), "direction", [], "any", false, false, false, 65)]);
        yield "</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postImages"]) || array_key_exists("postImages", $context) ? $context["postImages"] : (function () { throw new RuntimeError('Variable "postImages" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["postImage"]) {
            // line 70
            yield "                <tr>
                  <td>#";
            // line 71
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["postImage"], "imageId", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postImage"], "imageId", [], "any", false, false, false, 71), "imageId", [], "any", false, false, false, 71), "html", null, true)) : ("-"));
            yield "</td>
                  <td>
                    ";
            // line 73
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["postImage"], "imageId", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "                      <a href=\"";
                yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postImage"], "imageId", [], "any", false, false, false, 74), "fileUrl", [], "any", false, false, false, 74)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postImage"], "imageId", [], "any", false, false, false, 74), "fileUrl", [], "any", false, false, false, 74), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postImage"], "imageId", [], "any", false, false, false, 74), "fileUrl", [], "any", false, false, false, 74)), "html", null, true)));
                yield "\" target=\"_blank\" rel=\"noopener\">Voir</a>
                    ";
            } else {
                // line 76
                yield "                      -
                    ";
            }
            // line 78
            yield "                  </td>
                  <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["postImage"], "position", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 81
        if (!$context['_iterated']) {
            // line 82
            yield "                <tr><td colspan=\"3\" class=\"listMeta\">Aucune image liee.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['postImage'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"comments\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>";
        // line 96
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 96, $this->getSourceContext())->macro_scoped_sort_link(...["admin_post_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 96, $this->source); })()), "postId", [], "any", false, false, false, 96), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "request", [], "any", false, false, false, 96), "query", [], "any", false, false, false, 96), "all", [], "any", false, false, false, 96), "comments_sort", "comments_direction", "id", "ID", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 96, $this->source); })()), "comments", [], "any", false, false, false, 96), "sort", [], "any", false, false, false, 96), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 96, $this->source); })()), "comments", [], "any", false, false, false, 96), "direction", [], "any", false, false, false, 96)]);
        yield "</th>
                <th>";
        // line 97
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 97, $this->getSourceContext())->macro_scoped_sort_link(...["admin_post_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 97, $this->source); })()), "postId", [], "any", false, false, false, 97), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "query", [], "any", false, false, false, 97), "all", [], "any", false, false, false, 97), "comments_sort", "comments_direction", "author", "Auteur", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 97, $this->source); })()), "comments", [], "any", false, false, false, 97), "sort", [], "any", false, false, false, 97), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 97, $this->source); })()), "comments", [], "any", false, false, false, 97), "direction", [], "any", false, false, false, 97)]);
        yield "</th>
                <th>";
        // line 98
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 98, $this->getSourceContext())->macro_scoped_sort_link(...["admin_post_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 98, $this->source); })()), "postId", [], "any", false, false, false, 98), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "query", [], "any", false, false, false, 98), "all", [], "any", false, false, false, 98), "comments_sort", "comments_direction", "content", "Contenu", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 98, $this->source); })()), "comments", [], "any", false, false, false, 98), "sort", [], "any", false, false, false, 98), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 98, $this->source); })()), "comments", [], "any", false, false, false, 98), "direction", [], "any", false, false, false, 98)]);
        yield "</th>
                <th>";
        // line 99
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 99, $this->getSourceContext())->macro_scoped_sort_link(...["admin_post_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 99, $this->source); })()), "postId", [], "any", false, false, false, 99), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "request", [], "any", false, false, false, 99), "query", [], "any", false, false, false, 99), "all", [], "any", false, false, false, 99), "comments_sort", "comments_direction", "created_at", "Date", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 99, $this->source); })()), "comments", [], "any", false, false, false, 99), "sort", [], "any", false, false, false, 99), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 99, $this->source); })()), "comments", [], "any", false, false, false, 99), "direction", [], "any", false, false, false, 99)]);
        yield "</th>
                <th>";
        // line 100
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 100, $this->getSourceContext())->macro_scoped_sort_link(...["admin_post_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 100, $this->source); })()), "postId", [], "any", false, false, false, 100), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "request", [], "any", false, false, false, 100), "query", [], "any", false, false, false, 100), "all", [], "any", false, false, false, 100), "comments_sort", "comments_direction", "deleted", "Deleted", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 100, $this->source); })()), "comments", [], "any", false, false, false, 100), "sort", [], "any", false, false, false, 100), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 100, $this->source); })()), "comments", [], "any", false, false, false, 100), "direction", [], "any", false, false, false, 100)]);
        yield "</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 105, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 106
            yield "                <tr>
                  <td>#";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "commentId", [], "any", false, false, false, 107), "html", null, true);
            yield "</td>
                  <td>";
            // line 108
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "authorUserId", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "authorUserId", [], "any", false, false, false, 108), "username", [], "any", false, false, false, 108), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 109
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contentText", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contentText", [], "any", false, false, false, 109), 0, 100), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 110
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 110), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 111
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "isDeleted", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
                  <td><a class=\"btn btnTiny\" href=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments", ["edit" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "commentId", [], "any", false, false, false, 112)]), "html", null, true);
            yield "\">Edit</a></td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 114
        if (!$context['_iterated']) {
            // line 115
            yield "                <tr><td colspan=\"6\" class=\"listMeta\">Aucun commentaire.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"reports\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>";
        // line 129
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 129, $this->getSourceContext())->macro_scoped_sort_link(...["admin_post_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 129, $this->source); })()), "postId", [], "any", false, false, false, 129), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "request", [], "any", false, false, false, 129), "query", [], "any", false, false, false, 129), "all", [], "any", false, false, false, 129), "reports_sort", "reports_direction", "id", "ID", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 129, $this->source); })()), "reports", [], "any", false, false, false, 129), "sort", [], "any", false, false, false, 129), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 129, $this->source); })()), "reports", [], "any", false, false, false, 129), "direction", [], "any", false, false, false, 129)]);
        yield "</th>
                <th>";
        // line 130
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 130, $this->getSourceContext())->macro_scoped_sort_link(...["admin_post_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 130, $this->source); })()), "postId", [], "any", false, false, false, 130), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "request", [], "any", false, false, false, 130), "query", [], "any", false, false, false, 130), "all", [], "any", false, false, false, 130), "reports_sort", "reports_direction", "reporter", "Reporter", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 130, $this->source); })()), "reports", [], "any", false, false, false, 130), "sort", [], "any", false, false, false, 130), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 130, $this->source); })()), "reports", [], "any", false, false, false, 130), "direction", [], "any", false, false, false, 130)]);
        yield "</th>
                <th>";
        // line 131
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 131, $this->getSourceContext())->macro_scoped_sort_link(...["admin_post_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 131, $this->source); })()), "postId", [], "any", false, false, false, 131), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "query", [], "any", false, false, false, 131), "all", [], "any", false, false, false, 131), "reports_sort", "reports_direction", "status", "Status", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 131, $this->source); })()), "reports", [], "any", false, false, false, 131), "sort", [], "any", false, false, false, 131), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 131, $this->source); })()), "reports", [], "any", false, false, false, 131), "direction", [], "any", false, false, false, 131)]);
        yield "</th>
                <th>";
        // line 132
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 132, $this->getSourceContext())->macro_scoped_sort_link(...["admin_post_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 132, $this->source); })()), "postId", [], "any", false, false, false, 132), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "query", [], "any", false, false, false, 132), "all", [], "any", false, false, false, 132), "reports_sort", "reports_direction", "created_at", "Date", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 132, $this->source); })()), "reports", [], "any", false, false, false, 132), "sort", [], "any", false, false, false, 132), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 132, $this->source); })()), "reports", [], "any", false, false, false, 132), "direction", [], "any", false, false, false, 132)]);
        yield "</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 137, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 138
            yield "                <tr>
                  <td>#";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "reportId", [], "any", false, false, false, 139), "html", null, true);
            yield "</td>
                  <td>";
            // line 140
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["report"], "reporterUserId", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["report"], "reporterUserId", [], "any", false, false, false, 140), "username", [], "any", false, false, false, 140), "html", null, true)) : ("-"));
            yield "</td>
                  <td><span class=\"badge ";
            // line 141
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "status", [], "any", false, false, false, 141) == "CLOSED")) ? ("badge--success") : ("badge--warning"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "status", [], "any", false, false, false, 141), "html", null, true);
            yield "</span></td>
                  <td>";
            // line 142
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["report"], "createdAt", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "createdAt", [], "any", false, false, false, 142), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                  <td><a class=\"btn btnTiny\" href=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_report_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["report"], "reportId", [], "any", false, false, false, 143)]), "html", null, true);
            yield "\">Voir</a></td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 145
        if (!$context['_iterated']) {
            // line 146
            yield "                <tr><td colspan=\"5\" class=\"listMeta\">Aucun signalement.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['report'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        yield "            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    public function macro_scoped_sort_link($route_name = null, $route_id = null, $query = null, $sort_key = null, $direction_key = null, $field = null, $label = null, $current_sort = null, $current_direction = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "route_name" => $route_name,
            "route_id" => $route_id,
            "query" => $query,
            "sort_key" => $sort_key,
            "direction_key" => $direction_key,
            "field" => $field,
            "label" => $label,
            "current_sort" => $current_sort,
            "current_direction" => $current_direction,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "scoped_sort_link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "scoped_sort_link"));

            // line 4
            yield "  ";
            $context["is_current"] = ((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 4, $this->source); })()) == (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()));
            // line 5
            yield "  ";
            $context["next_direction"] = ((((isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new RuntimeError('Variable "is_current" does not exist.', 5, $this->source); })()) && ((isset($context["current_direction"]) || array_key_exists("current_direction", $context) ? $context["current_direction"] : (function () { throw new RuntimeError('Variable "current_direction" does not exist.', 5, $this->source); })()) == "asc"))) ? ("desc") : ("asc"));
            // line 6
            yield "  ";
            $context["marker"] = (((($tmp = (isset($context["is_current"]) || array_key_exists("is_current", $context) ? $context["is_current"] : (function () { throw new RuntimeError('Variable "is_current" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((((isset($context["current_direction"]) || array_key_exists("current_direction", $context) ? $context["current_direction"] : (function () { throw new RuntimeError('Variable "current_direction" does not exist.', 6, $this->source); })()) == "asc")) ? (" (ASC)") : (" (DESC)"))) : (""));
            // line 7
            yield "  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 7, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 7, $this->source); })()), ["id" => (isset($context["route_id"]) || array_key_exists("route_id", $context) ? $context["route_id"] : (function () { throw new RuntimeError('Variable "route_id" does not exist.', 7, $this->source); })()),  (string)(isset($context["sort_key"]) || array_key_exists("sort_key", $context) ? $context["sort_key"] : (function () { throw new RuntimeError('Variable "sort_key" does not exist.', 7, $this->source); })()) => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()),  (string)(isset($context["direction_key"]) || array_key_exists("direction_key", $context) ? $context["direction_key"] : (function () { throw new RuntimeError('Variable "direction_key" does not exist.', 7, $this->source); })()) => (isset($context["next_direction"]) || array_key_exists("next_direction", $context) ? $context["next_direction"] : (function () { throw new RuntimeError('Variable "next_direction" does not exist.', 7, $this->source); })())])), "html", null, true);
            yield "\" style=\"color:inherit;text-decoration:none;\">
    ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 8, $this->source); })()), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["marker"]) || array_key_exists("marker", $context) ? $context["marker"] : (function () { throw new RuntimeError('Variable "marker" does not exist.', 8, $this->source); })()), "html", null, true);
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
        return "admin/pages/post-detail.html.twig";
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
        return array (  467 => 8,  462 => 7,  459 => 6,  456 => 5,  453 => 4,  427 => 3,  410 => 148,  403 => 146,  401 => 145,  394 => 143,  390 => 142,  384 => 141,  380 => 140,  376 => 139,  373 => 138,  368 => 137,  360 => 132,  356 => 131,  352 => 130,  348 => 129,  334 => 117,  327 => 115,  325 => 114,  318 => 112,  314 => 111,  310 => 110,  306 => 109,  302 => 108,  298 => 107,  295 => 106,  290 => 105,  282 => 100,  278 => 99,  274 => 98,  270 => 97,  266 => 96,  252 => 84,  245 => 82,  243 => 81,  236 => 79,  233 => 78,  229 => 76,  223 => 74,  221 => 73,  216 => 71,  213 => 70,  208 => 69,  201 => 65,  196 => 63,  177 => 47,  172 => 44,  170 => 43,  166 => 42,  162 => 41,  154 => 35,  148 => 34,  137 => 31,  133 => 30,  130 => 29,  125 => 28,  121 => 27,  114 => 23,  107 => 19,  103 => 17,  90 => 16,  67 => 14,  56 => 1,  54 => 12,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'admin/base_admin.html.twig' %}

{% macro scoped_sort_link(route_name, route_id, query, sort_key, direction_key, field, label, current_sort, current_direction) %}
  {% set is_current = current_sort == field %}
  {% set next_direction = is_current and current_direction == 'asc' ? 'desc' : 'asc' %}
  {% set marker = is_current ? (current_direction == 'asc' ? ' (ASC)' : ' (DESC)') : '' %}
  <a href=\"{{ path(route_name, query|merge({id: route_id, (sort_key): field, (direction_key): next_direction})) }}\" style=\"color:inherit;text-decoration:none;\">
    {{ label }}{{ marker }}
  </a>
{% endmacro %}

{% import _self as sorter %}

{% block title %}PULSE - Detail post{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Detail post #{{ post.postId }}</h2>
      <div class=\"pageSub\">Edition, commentaires, signalements.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_posts') }}\">Retour liste</a>
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
      <h3 class=\"panelTitle\">EDITER LE POST</h3>
    </div>

    {{ form_start(postForm, {attr: {novalidate: 'novalidate'}}) }}
      {{ form_errors(postForm) }}
      {% include 'admin/pages/_post_form_fields.html.twig' with {form: postForm} %}
      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">Mettre a jour</button>
      </div>
    {{ form_end(postForm) }}
  </section>

  <div class=\"tabs\" data-tabs=\"post-detail\">
    <button class=\"tab isActive\" data-tab=\"images\">Images</button>
    <button class=\"tab\" data-tab=\"comments\">Commentaires</button>
    <button class=\"tab\" data-tab=\"reports\">Signalements</button>
  </div>

  <div class=\"tabPanels\" data-panels=\"post-detail\">
    <div class=\"tabPanel isActive\" data-panel=\"images\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>{{ sorter.scoped_sort_link('admin_post_detail', post.postId, app.request.query.all, 'images_sort', 'images_direction', 'image_id', 'Image ID', sorts.images.sort, sorts.images.direction) }}</th>
                <th>URL</th>
                <th>{{ sorter.scoped_sort_link('admin_post_detail', post.postId, app.request.query.all, 'images_sort', 'images_direction', 'position', 'Position', sorts.images.sort, sorts.images.direction) }}</th>
              </tr>
            </thead>
            <tbody>
              {% for postImage in postImages %}
                <tr>
                  <td>#{{ postImage.imageId ? postImage.imageId.imageId : '-' }}</td>
                  <td>
                    {% if postImage.imageId %}
                      <a href=\"{{ postImage.imageId.fileUrl starts with 'http' ? postImage.imageId.fileUrl : asset(postImage.imageId.fileUrl) }}\" target=\"_blank\" rel=\"noopener\">Voir</a>
                    {% else %}
                      -
                    {% endif %}
                  </td>
                  <td>{{ postImage.position }}</td>
                </tr>
              {% else %}
                <tr><td colspan=\"3\" class=\"listMeta\">Aucune image liee.</td></tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"comments\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>{{ sorter.scoped_sort_link('admin_post_detail', post.postId, app.request.query.all, 'comments_sort', 'comments_direction', 'id', 'ID', sorts.comments.sort, sorts.comments.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_post_detail', post.postId, app.request.query.all, 'comments_sort', 'comments_direction', 'author', 'Auteur', sorts.comments.sort, sorts.comments.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_post_detail', post.postId, app.request.query.all, 'comments_sort', 'comments_direction', 'content', 'Contenu', sorts.comments.sort, sorts.comments.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_post_detail', post.postId, app.request.query.all, 'comments_sort', 'comments_direction', 'created_at', 'Date', sorts.comments.sort, sorts.comments.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_post_detail', post.postId, app.request.query.all, 'comments_sort', 'comments_direction', 'deleted', 'Deleted', sorts.comments.sort, sorts.comments.direction) }}</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              {% for comment in comments %}
                <tr>
                  <td>#{{ comment.commentId }}</td>
                  <td>{{ comment.authorUserId ? comment.authorUserId.username : '-' }}</td>
                  <td>{{ comment.contentText ? comment.contentText|slice(0, 100) : '-' }}</td>
                  <td>{{ comment.createdAt ? comment.createdAt|date('d/m/Y H:i') : '-' }}</td>
                  <td>{{ comment.isDeleted ? 'Oui' : 'Non' }}</td>
                  <td><a class=\"btn btnTiny\" href=\"{{ path('admin_comments', {edit: comment.commentId}) }}\">Edit</a></td>
                </tr>
              {% else %}
                <tr><td colspan=\"6\" class=\"listMeta\">Aucun commentaire.</td></tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"reports\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>{{ sorter.scoped_sort_link('admin_post_detail', post.postId, app.request.query.all, 'reports_sort', 'reports_direction', 'id', 'ID', sorts.reports.sort, sorts.reports.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_post_detail', post.postId, app.request.query.all, 'reports_sort', 'reports_direction', 'reporter', 'Reporter', sorts.reports.sort, sorts.reports.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_post_detail', post.postId, app.request.query.all, 'reports_sort', 'reports_direction', 'status', 'Status', sorts.reports.sort, sorts.reports.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_post_detail', post.postId, app.request.query.all, 'reports_sort', 'reports_direction', 'created_at', 'Date', sorts.reports.sort, sorts.reports.direction) }}</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              {% for report in reports %}
                <tr>
                  <td>#{{ report.reportId }}</td>
                  <td>{{ report.reporterUserId ? report.reporterUserId.username : '-' }}</td>
                  <td><span class=\"badge {{ report.status == 'CLOSED' ? 'badge--success' : 'badge--warning' }}\">{{ report.status }}</span></td>
                  <td>{{ report.createdAt ? report.createdAt|date('d/m/Y H:i') : '-' }}</td>
                  <td><a class=\"btn btnTiny\" href=\"{{ path('admin_report_detail', {id: report.reportId}) }}\">Voir</a></td>
                </tr>
              {% else %}
                <tr><td colspan=\"5\" class=\"listMeta\">Aucun signalement.</td></tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>
{% endblock %}
", "admin/pages/post-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\post-detail.html.twig");
    }
}
