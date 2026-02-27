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

/* admin/pages/user-detail.html.twig */
class __TwigTemplate_b94c2211291fc7d2983502eb4dfda888 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/user-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/user-detail.html.twig"));

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

        yield "PULSE - Detail utilisateur";
        
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
      <h2>Detail utilisateur #";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "userId", [], "any", false, false, false, 19), "html", null, true);
        yield "</h2>
      <div class=\"pageSub\">Profil, equipes, activite, commerce, moderation.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnPrimary\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "userId", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\">Modifier</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\">Retour liste</a>
    </div>
  </div>

  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 29
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 30
                yield "      <div class=\"listItem\">
        <span>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 32
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
            // line 35
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "
  <div class=\"tabs\" data-tabs=\"user\">
    <button class=\"tab isActive\" data-tab=\"profil\">Profil</button>
    <button class=\"tab\" data-tab=\"equipes\">Equipes</button>
    <button class=\"tab\" data-tab=\"activite\">Posts</button>
    <button class=\"tab\" data-tab=\"commerce\">Commandes</button>
    <button class=\"tab\" data-tab=\"moderation\">Signalements</button>
  </div>

  <div class=\"tabPanels\" data-panels=\"user\">
    <div class=\"tabPanel isActive\" data-panel=\"profil\">
      <section class=\"panel\">
        <div class=\"list\">
          <div class=\"listItem\"><span>user_id</span><span class=\"listMeta\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "userId", [], "any", false, false, false, 49), "html", null, true);
        yield "</span></div>
          <div class=\"listItem\"><span>username</span><span class=\"listMeta\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "username", [], "any", false, false, false, 50), "html", null, true);
        yield "</span></div>
          <div class=\"listItem\"><span>email</span><span class=\"listMeta\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), "html", null, true);
        yield "</span></div>
          <div class=\"listItem\"><span>display_name</span><span class=\"listMeta\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "displayName", [], "any", false, false, false, 52), "html", null, true);
        yield "</span></div>
          <div class=\"listItem\"><span>role</span><span class=\"listMeta\"><span class=\"badge badge--info\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "role", [], "any", false, false, false, 53), "html", null, true);
        yield "</span></span></div>
          <div class=\"listItem\"><span>country</span><span class=\"listMeta\">";
        // line 54
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "country", [], "any", false, false, false, 54)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "country", [], "any", false, false, false, 54), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>birth_date</span><span class=\"listMeta\">";
        // line 55
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "birthDate", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "birthDate", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>email_verified</span><span class=\"listMeta\">";
        // line 56
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "emailVerified", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "</span></div>
          <div class=\"listItem\"><span>is_active</span><span class=\"listMeta\">";
        // line 57
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "isActive", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "</span></div>
          <div class=\"listItem\"><span>created_at</span><span class=\"listMeta\">";
        // line 58
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "createdAt", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "createdAt", [], "any", false, false, false, 58), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</span></div>
          <div class=\"listItem\"><span>updated_at</span><span class=\"listMeta\">";
        // line 59
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "updatedAt", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "updatedAt", [], "any", false, false, false, 59), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</span></div>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"equipes\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>";
        // line 70
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 70, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "userId", [], "any", false, false, false, 70), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "query", [], "any", false, false, false, 70), "all", [], "any", false, false, false, 70), "teams_sort", "teams_direction", "team_id", "Equipe", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 70, $this->source); })()), "teams", [], "any", false, false, false, 70), "sort", [], "any", false, false, false, 70), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 70, $this->source); })()), "teams", [], "any", false, false, false, 70), "direction", [], "any", false, false, false, 70)]);
        yield "</th>
                <th>";
        // line 71
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 71, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "userId", [], "any", false, false, false, 71), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "query", [], "any", false, false, false, 71), "all", [], "any", false, false, false, 71), "teams_sort", "teams_direction", "joined_at", "Joined at", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 71, $this->source); })()), "teams", [], "any", false, false, false, 71), "sort", [], "any", false, false, false, 71), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 71, $this->source); })()), "teams", [], "any", false, false, false, 71), "direction", [], "any", false, false, false, 71)]);
        yield "</th>
                <th>";
        // line 72
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 72, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "userId", [], "any", false, false, false, 72), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "query", [], "any", false, false, false, 72), "all", [], "any", false, false, false, 72), "teams_sort", "teams_direction", "is_active", "Actif", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 72, $this->source); })()), "teams", [], "any", false, false, false, 72), "sort", [], "any", false, false, false, 72), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 72, $this->source); })()), "teams", [], "any", false, false, false, 72), "direction", [], "any", false, false, false, 72)]);
        yield "</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teamMembers"]) || array_key_exists("teamMembers", $context) ? $context["teamMembers"] : (function () { throw new RuntimeError('Variable "teamMembers" does not exist.', 76, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["teamMember"]) {
            // line 77
            yield "                <tr>
                  <td>";
            // line 78
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "teamId", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "teamId", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 79
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "joinedAt", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "joinedAt", [], "any", false, false, false, 79), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 80
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "isActive", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 82
        if (!$context['_iterated']) {
            // line 83
            yield "                <tr><td colspan=\"3\" class=\"listMeta\">Aucune equipe.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['teamMember'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"activite\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>";
        // line 97
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 97, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "userId", [], "any", false, false, false, 97), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "query", [], "any", false, false, false, 97), "all", [], "any", false, false, false, 97), "posts_sort", "posts_direction", "content", "Post", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 97, $this->source); })()), "posts", [], "any", false, false, false, 97), "sort", [], "any", false, false, false, 97), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 97, $this->source); })()), "posts", [], "any", false, false, false, 97), "direction", [], "any", false, false, false, 97)]);
        yield "</th>
                <th>";
        // line 98
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 98, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "userId", [], "any", false, false, false, 98), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "query", [], "any", false, false, false, 98), "all", [], "any", false, false, false, 98), "posts_sort", "posts_direction", "visibility", "Visibility", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 98, $this->source); })()), "posts", [], "any", false, false, false, 98), "sort", [], "any", false, false, false, 98), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 98, $this->source); })()), "posts", [], "any", false, false, false, 98), "direction", [], "any", false, false, false, 98)]);
        yield "</th>
                <th>";
        // line 99
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 99, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "userId", [], "any", false, false, false, 99), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "request", [], "any", false, false, false, 99), "query", [], "any", false, false, false, 99), "all", [], "any", false, false, false, 99), "posts_sort", "posts_direction", "deleted", "Deleted", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 99, $this->source); })()), "posts", [], "any", false, false, false, 99), "sort", [], "any", false, false, false, 99), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 99, $this->source); })()), "posts", [], "any", false, false, false, 99), "direction", [], "any", false, false, false, 99)]);
        yield "</th>
                <th>";
        // line 100
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 100, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "userId", [], "any", false, false, false, 100), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "request", [], "any", false, false, false, 100), "query", [], "any", false, false, false, 100), "all", [], "any", false, false, false, 100), "posts_sort", "posts_direction", "created_at", "Date", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 100, $this->source); })()), "posts", [], "any", false, false, false, 100), "sort", [], "any", false, false, false, 100), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 100, $this->source); })()), "posts", [], "any", false, false, false, 100), "direction", [], "any", false, false, false, 100)]);
        yield "</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 105, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 106
            yield "                <tr>
                  <td>";
            // line 107
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contentText", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contentText", [], "any", false, false, false, 107), 0, 60), "html", null, true)) : ("-"));
            yield "</td>
                  <td>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "visibility", [], "any", false, false, false, 108), "html", null, true);
            yield "</td>
                  <td>";
            // line 109
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "isDeleted", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
                  <td>";
            // line 110
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 110), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                  <td><a class=\"btn btnTiny\" href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "postId", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\">Voir</a></td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 113
        if (!$context['_iterated']) {
            // line 114
            yield "                <tr><td colspan=\"5\" class=\"listMeta\">Aucun post.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"commerce\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>";
        // line 128
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 128, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "userId", [], "any", false, false, false, 128), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "request", [], "any", false, false, false, 128), "query", [], "any", false, false, false, 128), "all", [], "any", false, false, false, 128), "orders_sort", "orders_direction", "order_number", "Order", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 128, $this->source); })()), "orders", [], "any", false, false, false, 128), "sort", [], "any", false, false, false, 128), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 128, $this->source); })()), "orders", [], "any", false, false, false, 128), "direction", [], "any", false, false, false, 128)]);
        yield "</th>
                <th>";
        // line 129
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 129, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "userId", [], "any", false, false, false, 129), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "request", [], "any", false, false, false, 129), "query", [], "any", false, false, false, 129), "all", [], "any", false, false, false, 129), "orders_sort", "orders_direction", "status", "Status", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 129, $this->source); })()), "orders", [], "any", false, false, false, 129), "sort", [], "any", false, false, false, 129), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 129, $this->source); })()), "orders", [], "any", false, false, false, 129), "direction", [], "any", false, false, false, 129)]);
        yield "</th>
                <th>";
        // line 130
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 130, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "userId", [], "any", false, false, false, 130), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "request", [], "any", false, false, false, 130), "query", [], "any", false, false, false, 130), "all", [], "any", false, false, false, 130), "orders_sort", "orders_direction", "total_amount", "Total", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 130, $this->source); })()), "orders", [], "any", false, false, false, 130), "sort", [], "any", false, false, false, 130), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 130, $this->source); })()), "orders", [], "any", false, false, false, 130), "direction", [], "any", false, false, false, 130)]);
        yield "</th>
                <th>";
        // line 131
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 131, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "userId", [], "any", false, false, false, 131), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "query", [], "any", false, false, false, 131), "all", [], "any", false, false, false, 131), "orders_sort", "orders_direction", "created_at", "Date", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 131, $this->source); })()), "orders", [], "any", false, false, false, 131), "sort", [], "any", false, false, false, 131), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 131, $this->source); })()), "orders", [], "any", false, false, false, 131), "direction", [], "any", false, false, false, 131)]);
        yield "</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 135, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 136
            yield "                <tr>
                  <td>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 137), "html", null, true);
            yield "</td>
                  <td><span class=\"badge ";
            // line 138
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 138) == "CANCELLED")) ? ("badge--danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 138) == "DELIVERED")) ? ("badge--success") : ("badge--warning"))));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 138), "html", null, true);
            yield "</span></td>
                  <td>";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalAmount", [], "any", false, false, false, 139), "html", null, true);
            yield " DT</td>
                  <td>";
            // line 140
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 140), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 142
        if (!$context['_iterated']) {
            // line 143
            yield "                <tr><td colspan=\"4\" class=\"listMeta\">Aucune commande.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        yield "            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"moderation\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>";
        // line 157
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 157, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 157, $this->source); })()), "userId", [], "any", false, false, false, 157), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "request", [], "any", false, false, false, 157), "query", [], "any", false, false, false, 157), "all", [], "any", false, false, false, 157), "reports_sort", "reports_direction", "id", "ID", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 157, $this->source); })()), "reports", [], "any", false, false, false, 157), "sort", [], "any", false, false, false, 157), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 157, $this->source); })()), "reports", [], "any", false, false, false, 157), "direction", [], "any", false, false, false, 157)]);
        yield "</th>
                <th>";
        // line 158
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 158, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "userId", [], "any", false, false, false, 158), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "request", [], "any", false, false, false, 158), "query", [], "any", false, false, false, 158), "all", [], "any", false, false, false, 158), "reports_sort", "reports_direction", "target", "Target", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 158, $this->source); })()), "reports", [], "any", false, false, false, 158), "sort", [], "any", false, false, false, 158), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 158, $this->source); })()), "reports", [], "any", false, false, false, 158), "direction", [], "any", false, false, false, 158)]);
        yield "</th>
                <th>";
        // line 159
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 159, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 159, $this->source); })()), "userId", [], "any", false, false, false, 159), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "request", [], "any", false, false, false, 159), "query", [], "any", false, false, false, 159), "all", [], "any", false, false, false, 159), "reports_sort", "reports_direction", "status", "Status", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 159, $this->source); })()), "reports", [], "any", false, false, false, 159), "sort", [], "any", false, false, false, 159), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 159, $this->source); })()), "reports", [], "any", false, false, false, 159), "direction", [], "any", false, false, false, 159)]);
        yield "</th>
                <th>";
        // line 160
        yield $macros["sorter"]->getTemplateForMacro("macro_scoped_sort_link", $context, 160, $this->getSourceContext())->macro_scoped_sort_link(...["admin_user_detail", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 160, $this->source); })()), "userId", [], "any", false, false, false, 160), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "request", [], "any", false, false, false, 160), "query", [], "any", false, false, false, 160), "all", [], "any", false, false, false, 160), "reports_sort", "reports_direction", "created_at", "Date", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 160, $this->source); })()), "reports", [], "any", false, false, false, 160), "sort", [], "any", false, false, false, 160), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sorts"]) || array_key_exists("sorts", $context) ? $context["sorts"] : (function () { throw new RuntimeError('Variable "sorts" does not exist.', 160, $this->source); })()), "reports", [], "any", false, false, false, 160), "direction", [], "any", false, false, false, 160)]);
        yield "</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 165, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 166
            yield "                <tr>
                  <td>#";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "reportId", [], "any", false, false, false, 167), "html", null, true);
            yield "</td>
                  <td>";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "targetType", [], "any", false, false, false, 168), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "targetId", [], "any", false, false, false, 168), "html", null, true);
            yield "</td>
                  <td><span class=\"badge ";
            // line 169
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "status", [], "any", false, false, false, 169) == "CLOSED")) ? ("badge--success") : ("badge--warning"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "status", [], "any", false, false, false, 169), "html", null, true);
            yield "</span></td>
                  <td>";
            // line 170
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["report"], "createdAt", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "createdAt", [], "any", false, false, false, 170), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                  <td><a class=\"btn btnTiny\" href=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_report_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["report"], "reportId", [], "any", false, false, false, 171)]), "html", null, true);
            yield "\">Voir</a></td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        // line 173
        if (!$context['_iterated']) {
            // line 174
            yield "                <tr><td colspan=\"5\" class=\"listMeta\">Aucun signalement.</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['report'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
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
        return "admin/pages/user-detail.html.twig";
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
        return array (  554 => 8,  549 => 7,  546 => 6,  543 => 5,  540 => 4,  514 => 3,  497 => 176,  490 => 174,  488 => 173,  481 => 171,  477 => 170,  471 => 169,  465 => 168,  461 => 167,  458 => 166,  453 => 165,  445 => 160,  441 => 159,  437 => 158,  433 => 157,  419 => 145,  412 => 143,  410 => 142,  403 => 140,  399 => 139,  393 => 138,  389 => 137,  386 => 136,  381 => 135,  374 => 131,  370 => 130,  366 => 129,  362 => 128,  348 => 116,  341 => 114,  339 => 113,  332 => 111,  328 => 110,  324 => 109,  320 => 108,  316 => 107,  313 => 106,  308 => 105,  300 => 100,  296 => 99,  292 => 98,  288 => 97,  274 => 85,  267 => 83,  265 => 82,  258 => 80,  254 => 79,  250 => 78,  247 => 77,  242 => 76,  235 => 72,  231 => 71,  227 => 70,  213 => 59,  209 => 58,  205 => 57,  201 => 56,  197 => 55,  193 => 54,  189 => 53,  185 => 52,  181 => 51,  177 => 50,  173 => 49,  158 => 36,  152 => 35,  141 => 32,  137 => 31,  134 => 30,  129 => 29,  125 => 28,  118 => 24,  114 => 23,  107 => 19,  103 => 17,  90 => 16,  67 => 14,  56 => 1,  54 => 12,  41 => 1,);
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

{% block title %}PULSE - Detail utilisateur{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Detail utilisateur #{{ user.userId }}</h2>
      <div class=\"pageSub\">Profil, equipes, activite, commerce, moderation.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnPrimary\" href=\"{{ path('admin_user_edit', {id: user.userId}) }}\">Modifier</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_users') }}\">Retour liste</a>
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

  <div class=\"tabs\" data-tabs=\"user\">
    <button class=\"tab isActive\" data-tab=\"profil\">Profil</button>
    <button class=\"tab\" data-tab=\"equipes\">Equipes</button>
    <button class=\"tab\" data-tab=\"activite\">Posts</button>
    <button class=\"tab\" data-tab=\"commerce\">Commandes</button>
    <button class=\"tab\" data-tab=\"moderation\">Signalements</button>
  </div>

  <div class=\"tabPanels\" data-panels=\"user\">
    <div class=\"tabPanel isActive\" data-panel=\"profil\">
      <section class=\"panel\">
        <div class=\"list\">
          <div class=\"listItem\"><span>user_id</span><span class=\"listMeta\">{{ user.userId }}</span></div>
          <div class=\"listItem\"><span>username</span><span class=\"listMeta\">{{ user.username }}</span></div>
          <div class=\"listItem\"><span>email</span><span class=\"listMeta\">{{ user.email }}</span></div>
          <div class=\"listItem\"><span>display_name</span><span class=\"listMeta\">{{ user.displayName }}</span></div>
          <div class=\"listItem\"><span>role</span><span class=\"listMeta\"><span class=\"badge badge--info\">{{ user.role }}</span></span></div>
          <div class=\"listItem\"><span>country</span><span class=\"listMeta\">{{ user.country ?: '-' }}</span></div>
          <div class=\"listItem\"><span>birth_date</span><span class=\"listMeta\">{{ user.birthDate ? user.birthDate|date('d/m/Y') : '-' }}</span></div>
          <div class=\"listItem\"><span>email_verified</span><span class=\"listMeta\">{{ user.emailVerified ? 'Oui' : 'Non' }}</span></div>
          <div class=\"listItem\"><span>is_active</span><span class=\"listMeta\">{{ user.isActive ? 'Oui' : 'Non' }}</span></div>
          <div class=\"listItem\"><span>created_at</span><span class=\"listMeta\">{{ user.createdAt ? user.createdAt|date('d/m/Y H:i') : '-' }}</span></div>
          <div class=\"listItem\"><span>updated_at</span><span class=\"listMeta\">{{ user.updatedAt ? user.updatedAt|date('d/m/Y H:i') : '-' }}</span></div>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"equipes\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'teams_sort', 'teams_direction', 'team_id', 'Equipe', sorts.teams.sort, sorts.teams.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'teams_sort', 'teams_direction', 'joined_at', 'Joined at', sorts.teams.sort, sorts.teams.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'teams_sort', 'teams_direction', 'is_active', 'Actif', sorts.teams.sort, sorts.teams.direction) }}</th>
              </tr>
            </thead>
            <tbody>
              {% for teamMember in teamMembers %}
                <tr>
                  <td>{{ teamMember.teamId ? teamMember.teamId.name : '-' }}</td>
                  <td>{{ teamMember.joinedAt ? teamMember.joinedAt|date('d/m/Y H:i') : '-' }}</td>
                  <td>{{ teamMember.isActive ? 'Oui' : 'Non' }}</td>
                </tr>
              {% else %}
                <tr><td colspan=\"3\" class=\"listMeta\">Aucune equipe.</td></tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"activite\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'posts_sort', 'posts_direction', 'content', 'Post', sorts.posts.sort, sorts.posts.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'posts_sort', 'posts_direction', 'visibility', 'Visibility', sorts.posts.sort, sorts.posts.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'posts_sort', 'posts_direction', 'deleted', 'Deleted', sorts.posts.sort, sorts.posts.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'posts_sort', 'posts_direction', 'created_at', 'Date', sorts.posts.sort, sorts.posts.direction) }}</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              {% for post in posts %}
                <tr>
                  <td>{{ post.contentText ? post.contentText|slice(0, 60) : '-' }}</td>
                  <td>{{ post.visibility }}</td>
                  <td>{{ post.isDeleted ? 'Oui' : 'Non' }}</td>
                  <td>{{ post.createdAt ? post.createdAt|date('d/m/Y H:i') : '-' }}</td>
                  <td><a class=\"btn btnTiny\" href=\"{{ path('admin_post_detail', {id: post.postId}) }}\">Voir</a></td>
                </tr>
              {% else %}
                <tr><td colspan=\"5\" class=\"listMeta\">Aucun post.</td></tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"commerce\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'orders_sort', 'orders_direction', 'order_number', 'Order', sorts.orders.sort, sorts.orders.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'orders_sort', 'orders_direction', 'status', 'Status', sorts.orders.sort, sorts.orders.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'orders_sort', 'orders_direction', 'total_amount', 'Total', sorts.orders.sort, sorts.orders.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'orders_sort', 'orders_direction', 'created_at', 'Date', sorts.orders.sort, sorts.orders.direction) }}</th>
              </tr>
            </thead>
            <tbody>
              {% for order in orders %}
                <tr>
                  <td>{{ order.orderNumber }}</td>
                  <td><span class=\"badge {{ order.status == 'CANCELLED' ? 'badge--danger' : (order.status == 'DELIVERED' ? 'badge--success' : 'badge--warning') }}\">{{ order.status }}</span></td>
                  <td>{{ order.totalAmount }} DT</td>
                  <td>{{ order.createdAt ? order.createdAt|date('d/m/Y H:i') : '-' }}</td>
                </tr>
              {% else %}
                <tr><td colspan=\"4\" class=\"listMeta\">Aucune commande.</td></tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div class=\"tabPanel\" data-panel=\"moderation\">
      <section class=\"panel\">
        <div class=\"dataTableWrap\">
          <table class=\"dataTable\">
            <thead>
              <tr>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'reports_sort', 'reports_direction', 'id', 'ID', sorts.reports.sort, sorts.reports.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'reports_sort', 'reports_direction', 'target', 'Target', sorts.reports.sort, sorts.reports.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'reports_sort', 'reports_direction', 'status', 'Status', sorts.reports.sort, sorts.reports.direction) }}</th>
                <th>{{ sorter.scoped_sort_link('admin_user_detail', user.userId, app.request.query.all, 'reports_sort', 'reports_direction', 'created_at', 'Date', sorts.reports.sort, sorts.reports.direction) }}</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              {% for report in reports %}
                <tr>
                  <td>#{{ report.reportId }}</td>
                  <td>{{ report.targetType }} / {{ report.targetId }}</td>
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
", "admin/pages/user-detail.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\user-detail.html.twig");
    }
}
