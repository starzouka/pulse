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

/* admin/pages/messages.html.twig */
class __TwigTemplate_afadabf62b5b0e412525f646312a6c25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/messages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/messages.html.twig"));

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

        yield "PULSE - Gestion messages";
        
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
      <h2>Gestion messages</h2>
      <div class=\"pageSub\">CRUD + filtres DB + exports.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messages_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), ["format" => "pdf"])), "html", null, true);
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messages_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), ["format" => "excel"])), "html", null, true);
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
        yield (((($tmp = (isset($context["editingMessage"]) || array_key_exists("editingMessage", $context) ? $context["editingMessage"] : (function () { throw new RuntimeError('Variable "editingMessage" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("MODIFIER MESSAGE #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingMessage"]) || array_key_exists("editingMessage", $context) ? $context["editingMessage"] : (function () { throw new RuntimeError('Variable "editingMessage" does not exist.', 41, $this->source); })()), "messageId", [], "any", false, false, false, 41)), "html", null, true)) : ("NOUVEAU MESSAGE"));
        yield "</h3>
    </div>

    ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 44, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
      ";
        // line 45
        yield from $this->load("admin/pages/_message_form_fields.html.twig", 45)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 45, $this->source); })())]));
        // line 46
        yield "      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 47
        yield (((($tmp = (isset($context["editingMessage"]) || array_key_exists("editingMessage", $context) ? $context["editingMessage"] : (function () { throw new RuntimeError('Variable "editingMessage" does not exist.', 47, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer message"));
        yield "</button>
        ";
        // line 48
        if ((($tmp = (isset($context["editingMessage"]) || array_key_exists("editingMessage", $context) ? $context["editingMessage"] : (function () { throw new RuntimeError('Variable "editingMessage" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "          <a class=\"btn btnGhost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messages");
            yield "\">Annuler edition</a>
        ";
        }
        // line 51
        yield "      </div>
    ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 52, $this->source); })()), 'form_end');
        yield "
  </section>

  <form class=\"filtersBar\" method=\"get\" action=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messages");
        yield "\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 56, $this->source); })()), "sort", [], "any", false, false, false, 56), "created_at")) : ("created_at")), "html", null, true);
        yield "\" />
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 57, $this->source); })()), "direction", [], "any", false, false, false, 57), "desc")) : ("desc")), "html", null, true);
        yield "\" />
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 60, $this->source); })()), "q", [], "any", false, false, false, 60), "html", null, true);
        yield "\" placeholder=\"contenu\" />
    </div>

    <div class=\"filterGroup\">
      <label>Sender</label>
      <input type=\"search\" name=\"sender\" value=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 65, $this->source); })()), "sender", [], "any", false, false, false, 65), "html", null, true);
        yield "\" placeholder=\"username/email\" />
    </div>

    <div class=\"filterGroup\">
      <label>Receiver</label>
      <input type=\"search\" name=\"receiver\" value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 70, $this->source); })()), "receiver", [], "any", false, false, false, 70), "html", null, true);
        yield "\" placeholder=\"username/email\" />
    </div>

    <div class=\"filterGroup\">
      <label>is_read</label>
      <select name=\"is_read\">
        <option value=\"\" ";
        // line 76
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 76, $this->source); })()), "is_read", [], "any", false, false, false, 76) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        <option value=\"0\" ";
        // line 77
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 77, $this->source); })()), "is_read", [], "any", false, false, false, 77) == "0")) ? ("selected") : (""));
        yield ">Non</option>
        <option value=\"1\" ";
        // line 78
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 78, $this->source); })()), "is_read", [], "any", false, false, false, 78) == "1")) ? ("selected") : (""));
        yield ">Oui</option>
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messages");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE</h3>
      <span class=\"listMeta\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 91, $this->source); })())), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>";
        // line 98
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 98, $this->getSourceContext())->macro_sort_link(...["admin_messages", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 98, $this->source); })()), "id", "ID"]);
        yield "</th>
            <th>";
        // line 99
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 99, $this->getSourceContext())->macro_sort_link(...["admin_messages", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 99, $this->source); })()), "sender", "Sender"]);
        yield "</th>
            <th>";
        // line 100
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 100, $this->getSourceContext())->macro_sort_link(...["admin_messages", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 100, $this->source); })()), "receiver", "Receiver"]);
        yield "</th>
            <th>";
        // line 101
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 101, $this->getSourceContext())->macro_sort_link(...["admin_messages", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 101, $this->source); })()), "content", "Extrait"]);
        yield "</th>
            <th>";
        // line 102
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 102, $this->getSourceContext())->macro_sort_link(...["admin_messages", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 102, $this->source); })()), "created_at", "Created"]);
        yield "</th>
            <th>";
        // line 103
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 103, $this->getSourceContext())->macro_sort_link(...["admin_messages", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 103, $this->source); })()), "is_read", "Read"]);
        yield "</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 108, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 109
            yield "            ";
            $context["messageId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "messageId", [], "any", true, true, false, 109) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["message"], "messageId", [], "any", false, false, false, 109)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["message"], "messageId", [], "any", false, false, false, 109)) : (0));
            // line 110
            yield "            <tr>
              <td>#";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["messageId"]) || array_key_exists("messageId", $context) ? $context["messageId"] : (function () { throw new RuntimeError('Variable "messageId" does not exist.', 111, $this->source); })()), "html", null, true);
            yield "</td>
              <td>";
            // line 112
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 112), "username", [], "any", false, false, false, 112), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 113
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "receiverUserId", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "receiverUserId", [], "any", false, false, false, 113), "username", [], "any", false, false, false, 113), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 114
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "bodyText", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["message"], "bodyText", [], "any", false, false, false, 114), 0, 90), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 115
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 115), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 116
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isRead", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messages", ["edit" => (isset($context["messageId"]) || array_key_exists("messageId", $context) ? $context["messageId"] : (function () { throw new RuntimeError('Variable "messageId" does not exist.', 119, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_message_delete", ["id" => (isset($context["messageId"]) || array_key_exists("messageId", $context) ? $context["messageId"] : (function () { throw new RuntimeError('Variable "messageId" does not exist.', 120, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce message ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_message_" . (isset($context["messageId"]) || array_key_exists("messageId", $context) ? $context["messageId"] : (function () { throw new RuntimeError('Variable "messageId" does not exist.', 121, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 127
        if (!$context['_iterated']) {
            // line 128
            yield "            <tr>
              <td colspan=\"7\" class=\"listMeta\">Aucun message trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
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
        return "admin/pages/messages.html.twig";
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
        return array (  423 => 10,  418 => 9,  415 => 8,  412 => 7,  409 => 6,  406 => 5,  403 => 4,  382 => 3,  367 => 132,  358 => 128,  356 => 127,  345 => 121,  341 => 120,  337 => 119,  331 => 116,  327 => 115,  323 => 114,  319 => 113,  315 => 112,  311 => 111,  308 => 110,  305 => 109,  300 => 108,  292 => 103,  288 => 102,  284 => 101,  280 => 100,  276 => 99,  272 => 98,  262 => 91,  252 => 84,  243 => 78,  239 => 77,  235 => 76,  226 => 70,  218 => 65,  210 => 60,  204 => 57,  200 => 56,  196 => 55,  190 => 52,  187 => 51,  181 => 49,  179 => 48,  175 => 47,  172 => 46,  170 => 45,  166 => 44,  160 => 41,  155 => 38,  149 => 37,  138 => 34,  134 => 33,  131 => 32,  126 => 31,  122 => 30,  115 => 26,  111 => 25,  103 => 19,  90 => 18,  67 => 16,  56 => 1,  54 => 14,  41 => 1,);
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

{% block title %}PULSE - Gestion messages{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion messages</h2>
      <div class=\"pageSub\">CRUD + filtres DB + exports.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_messages_export', filters|merge({format: 'pdf'})) }}\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_messages_export', filters|merge({format: 'excel'})) }}\">Exporter Excel</a>
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
      <h3 class=\"panelTitle\">{{ editingMessage ? 'MODIFIER MESSAGE #' ~ editingMessage.messageId : 'NOUVEAU MESSAGE' }}</h3>
    </div>

    {{ form_start(messageForm, {attr: {novalidate: 'novalidate'}}) }}
      {% include 'admin/pages/_message_form_fields.html.twig' with {form: messageForm} %}
      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">{{ editingMessage ? 'Mettre a jour' : 'Creer message' }}</button>
        {% if editingMessage %}
          <a class=\"btn btnGhost\" href=\"{{ path('admin_messages') }}\">Annuler edition</a>
        {% endif %}
      </div>
    {{ form_end(messageForm) }}
  </section>

  <form class=\"filtersBar\" method=\"get\" action=\"{{ path('admin_messages') }}\">
    <input type=\"hidden\" name=\"sort\" value=\"{{ filters.sort|default('created_at') }}\" />
    <input type=\"hidden\" name=\"direction\" value=\"{{ filters.direction|default('desc') }}\" />
    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"contenu\" />
    </div>

    <div class=\"filterGroup\">
      <label>Sender</label>
      <input type=\"search\" name=\"sender\" value=\"{{ filters.sender }}\" placeholder=\"username/email\" />
    </div>

    <div class=\"filterGroup\">
      <label>Receiver</label>
      <input type=\"search\" name=\"receiver\" value=\"{{ filters.receiver }}\" placeholder=\"username/email\" />
    </div>

    <div class=\"filterGroup\">
      <label>is_read</label>
      <select name=\"is_read\">
        <option value=\"\" {{ filters.is_read == '' ? 'selected' : '' }}>ALL</option>
        <option value=\"0\" {{ filters.is_read == '0' ? 'selected' : '' }}>Non</option>
        <option value=\"1\" {{ filters.is_read == '1' ? 'selected' : '' }}>Oui</option>
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_messages') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE</h3>
      <span class=\"listMeta\">{{ messages|length }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>{{ sorter.sort_link('admin_messages', filters, 'id', 'ID') }}</th>
            <th>{{ sorter.sort_link('admin_messages', filters, 'sender', 'Sender') }}</th>
            <th>{{ sorter.sort_link('admin_messages', filters, 'receiver', 'Receiver') }}</th>
            <th>{{ sorter.sort_link('admin_messages', filters, 'content', 'Extrait') }}</th>
            <th>{{ sorter.sort_link('admin_messages', filters, 'created_at', 'Created') }}</th>
            <th>{{ sorter.sort_link('admin_messages', filters, 'is_read', 'Read') }}</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for message in messages %}
            {% set messageId = message.messageId ?? 0 %}
            <tr>
              <td>#{{ messageId }}</td>
              <td>{{ message.senderUserId ? message.senderUserId.username : '-' }}</td>
              <td>{{ message.receiverUserId ? message.receiverUserId.username : '-' }}</td>
              <td>{{ message.bodyText ? message.bodyText|slice(0, 90) : '-' }}</td>
              <td>{{ message.createdAt ? message.createdAt|date('d/m/Y H:i') : '-' }}</td>
              <td>{{ message.isRead ? 'Oui' : 'Non' }}</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_messages', {edit: messageId}) }}\">Update</a>
                  <form method=\"post\" action=\"{{ path('admin_message_delete', {id: messageId}) }}\" onsubmit=\"return confirm('Supprimer ce message ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_message_' ~ messageId) }}\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"7\" class=\"listMeta\">Aucun message trouve.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/messages.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\admin\\pages\\messages.html.twig");
    }
}
