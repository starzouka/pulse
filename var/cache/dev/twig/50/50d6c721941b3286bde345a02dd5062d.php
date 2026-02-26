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

/* admin/pages/orders.html.twig */
class __TwigTemplate_8c907ee188fc6e5ea6b6eefbe32fec1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/orders.html.twig"));

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

        yield "PULSE - Gestion commandes";
        
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
      <h2>Gestion commandes</h2>
      <div class=\"pageSub\">CRUD + filtres DB + export.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), ["format" => "pdf"])), "html", null, true);
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), ["format" => "excel"])), "html", null, true);
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
        yield (((($tmp = (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("MODIFIER COMMANDE #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 41, $this->source); })()), "orderId", [], "any", false, false, false, 41)), "html", null, true)) : ("NOUVELLE COMMANDE"));
        yield "</h3>
    </div>

    <form method=\"post\">
      <input type=\"hidden\" name=\"_token\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_order_form"), "html", null, true);
        yield "\" />
      <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 46
        yield (((($tmp = (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 46, $this->source); })()), "orderId", [], "any", false, false, false, 46), "html", null, true)) : (""));
        yield "\" />

      <div class=\"formGrid\">
        <div class=\"field\">
          <label for=\"order_number\">Numero commande *</label>
          <input id=\"order_number\" type=\"text\" name=\"order_number\" required value=\"";
        // line 51
        yield (((($tmp = (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 51, $this->source); })()), "orderNumber", [], "any", false, false, false, 51), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"order_user_id\">Utilisateur *</label>
          <select id=\"order_user_id\" name=\"user_id\" required>
            <option value=\"\">Selectionner</option>
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 59
            yield "              ";
            $context["userId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 59)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 59)) : (0));
            // line 60
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 60, $this->source); })()), "html", null, true);
            yield "\" ";
            yield (((((isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 60, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 60, $this->source); })()), "userId", [], "any", false, false, false, 60)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 60, $this->source); })()), "userId", [], "any", false, false, false, 60), "userId", [], "any", false, false, false, 60) == (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 60, $this->source); })())))) ? ("selected") : (""));
            yield ">
                ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 61), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 61), "html", null, true);
            yield ")
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "          </select>
        </div>

        <div class=\"field\">
          <label for=\"order_cart_id\">Panier *</label>
          <select id=\"order_cart_id\" name=\"cart_id\" required>
            <option value=\"\">Selectionner</option>
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carts"]) || array_key_exists("carts", $context) ? $context["carts"] : (function () { throw new RuntimeError('Variable "carts" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
            // line 72
            yield "              ";
            $context["cartId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "cartId", [], "any", true, true, false, 72) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "cartId", [], "any", false, false, false, 72)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "cartId", [], "any", false, false, false, 72)) : (0));
            // line 73
            yield "              ";
            $context["cartUser"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "userId", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "userId", [], "any", false, false, false, 73), "username", [], "any", false, false, false, 73)) : ("unknown"));
            // line 74
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cartId"]) || array_key_exists("cartId", $context) ? $context["cartId"] : (function () { throw new RuntimeError('Variable "cartId" does not exist.', 74, $this->source); })()), "html", null, true);
            yield "\" ";
            yield (((((isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 74, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 74, $this->source); })()), "cartId", [], "any", false, false, false, 74)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 74, $this->source); })()), "cartId", [], "any", false, false, false, 74), "cartId", [], "any", false, false, false, 74) == (isset($context["cartId"]) || array_key_exists("cartId", $context) ? $context["cartId"] : (function () { throw new RuntimeError('Variable "cartId" does not exist.', 74, $this->source); })())))) ? ("selected") : (""));
            yield ">
                #";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cartId"]) || array_key_exists("cartId", $context) ? $context["cartId"] : (function () { throw new RuntimeError('Variable "cartId" does not exist.', 75, $this->source); })()), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cartUser"]) || array_key_exists("cartUser", $context) ? $context["cartUser"] : (function () { throw new RuntimeError('Variable "cartUser" does not exist.', 75, $this->source); })()), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "status", [], "any", false, false, false, 75), "html", null, true);
            yield ")
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cart'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "          </select>
        </div>

        <div class=\"field\">
          <label for=\"order_status\">Status *</label>
          <select id=\"order_status\" name=\"status\" required>
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusOptions"]) || array_key_exists("statusOptions", $context) ? $context["statusOptions"] : (function () { throw new RuntimeError('Variable "statusOptions" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 85
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 85, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 85, $this->source); })()), "status", [], "any", false, false, false, 85) == $context["status"]))) ? ("selected") : (((( !(isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 85, $this->source); })()) && ($context["status"] == "PENDING"))) ? ("selected") : (""))));
            yield ">
                ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "          </select>
        </div>

        <div class=\"field\">
          <label for=\"order_payment_status\">Payment status *</label>
          <select id=\"order_payment_status\" name=\"payment_status\" required>
            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paymentStatusOptions"]) || array_key_exists("paymentStatusOptions", $context) ? $context["paymentStatusOptions"] : (function () { throw new RuntimeError('Variable "paymentStatusOptions" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 96
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 96, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 96, $this->source); })()), "paymentStatus", [], "any", false, false, false, 96) == $context["option"]))) ? ("selected") : (((( !(isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 96, $this->source); })()) && ($context["option"] == "UNPAID"))) ? ("selected") : (""))));
            yield ">
                ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "          </select>
        </div>

        <div class=\"field\">
          <label for=\"order_payment_method\">Payment method</label>
          <select id=\"order_payment_method\" name=\"payment_method\">
            <option value=\"\">Aucun</option>
            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paymentMethodOptions"]) || array_key_exists("paymentMethodOptions", $context) ? $context["paymentMethodOptions"] : (function () { throw new RuntimeError('Variable "paymentMethodOptions" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 108
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 108, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 108, $this->source); })()), "paymentMethod", [], "any", false, false, false, 108) == $context["option"]))) ? ("selected") : (""));
            yield ">
                ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "          </select>
        </div>

        <div class=\"field\">
          <label for=\"order_total_amount\">Montant total *</label>
          <input id=\"order_total_amount\" type=\"number\" min=\"0\" step=\"0.01\" name=\"total_amount\" required value=\"";
        // line 117
        yield (((($tmp = (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 117, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 117, $this->source); })()), "totalAmount", [], "any", false, false, false, 117), "html", null, true)) : ("0.00"));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"order_phone\">Telephone livraison</label>
          <input id=\"order_phone\" type=\"text\" name=\"phone_for_delivery\" value=\"";
        // line 122
        yield (((($tmp = (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 122, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 122, $this->source); })()), "phoneForDelivery", [], "any", false, false, false, 122), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\" style=\"grid-column: 1 / -1;\">
          <label for=\"order_shipping_address\">Adresse livraison</label>
          <textarea id=\"order_shipping_address\" name=\"shipping_address\">";
        // line 127
        yield (((($tmp = (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 127, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 127, $this->source); })()), "shippingAddress", [], "any", false, false, false, 127), "html", null, true)) : (""));
        yield "</textarea>
        </div>

        <div class=\"field\">
          <label for=\"order_paid_at\">Paid at</label>
          <input id=\"order_paid_at\" type=\"datetime-local\" name=\"paid_at\" value=\"";
        // line 132
        yield ((((isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 132, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 132, $this->source); })()), "paidAt", [], "any", false, false, false, 132))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 132, $this->source); })()), "paidAt", [], "any", false, false, false, 132), "Y-m-d\\TH:i"), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"order_shipped_at\">Shipped at</label>
          <input id=\"order_shipped_at\" type=\"datetime-local\" name=\"shipped_at\" value=\"";
        // line 137
        yield ((((isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 137, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 137, $this->source); })()), "shippedAt", [], "any", false, false, false, 137))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 137, $this->source); })()), "shippedAt", [], "any", false, false, false, 137), "Y-m-d\\TH:i"), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"order_delivered_at\">Delivered at</label>
          <input id=\"order_delivered_at\" type=\"datetime-local\" name=\"delivered_at\" value=\"";
        // line 142
        yield ((((isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 142, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 142, $this->source); })()), "deliveredAt", [], "any", false, false, false, 142))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 142, $this->source); })()), "deliveredAt", [], "any", false, false, false, 142), "Y-m-d\\TH:i"), "html", null, true)) : (""));
        yield "\" />
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 147
        yield (((($tmp = (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 147, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer commande"));
        yield "</button>
        ";
        // line 148
        if ((($tmp = (isset($context["editingOrder"]) || array_key_exists("editingOrder", $context) ? $context["editingOrder"] : (function () { throw new RuntimeError('Variable "editingOrder" does not exist.', 148, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 149
            yield "          <a class=\"btn btnGhost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
            yield "\">Annuler edition</a>
        ";
        }
        // line 151
        yield "      </div>
    </form>
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 156)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 156, $this->source); })()), "sort", [], "any", false, false, false, 156), "created_at")) : ("created_at")), "html", null, true);
        yield "\" />
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 157)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 157, $this->source); })()), "direction", [], "any", false, false, false, 157), "desc")) : ("desc")), "html", null, true);
        yield "\" />

    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 161, $this->source); })()), "q", [], "any", false, false, false, 161), "html", null, true);
        yield "\" placeholder=\"order number, address\" />
    </div>

    <div class=\"filterGroup\">
      <label>Status</label>
      <select name=\"status\">
        <option value=\"\" ";
        // line 167
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 167, $this->source); })()), "status", [], "any", false, false, false, 167) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusOptions"]) || array_key_exists("statusOptions", $context) ? $context["statusOptions"] : (function () { throw new RuntimeError('Variable "statusOptions" does not exist.', 168, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 169
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 169, $this->source); })()), "status", [], "any", false, false, false, 169) == $context["status"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Payment</label>
      <select name=\"payment_status\">
        <option value=\"\" ";
        // line 177
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 177, $this->source); })()), "payment_status", [], "any", false, false, false, 177) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paymentStatusOptions"]) || array_key_exists("paymentStatusOptions", $context) ? $context["paymentStatusOptions"] : (function () { throw new RuntimeError('Variable "paymentStatusOptions" does not exist.', 178, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 179
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 179, $this->source); })()), "payment_status", [], "any", false, false, false, 179) == $context["option"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>User</label>
      <input type=\"search\" name=\"user\" value=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 186, $this->source); })()), "user", [], "any", false, false, false, 186), "html", null, true);
        yield "\" placeholder=\"username/email\" />
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE COMMANDES</h3>
      <span class=\"listMeta\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 198, $this->source); })())), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>";
        // line 205
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 205, $this->getSourceContext())->macro_sort_link(...["admin_orders", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 205, $this->source); })()), "id", "ID"]);
        yield "</th>
            <th>";
        // line 206
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 206, $this->getSourceContext())->macro_sort_link(...["admin_orders", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 206, $this->source); })()), "order_number", "Order"]);
        yield "</th>
            <th>";
        // line 207
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 207, $this->getSourceContext())->macro_sort_link(...["admin_orders", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 207, $this->source); })()), "user", "User"]);
        yield "</th>
            <th>Cart</th>
            <th>";
        // line 209
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 209, $this->getSourceContext())->macro_sort_link(...["admin_orders", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 209, $this->source); })()), "status", "Status"]);
        yield "</th>
            <th>";
        // line 210
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 210, $this->getSourceContext())->macro_sort_link(...["admin_orders", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 210, $this->source); })()), "payment_status", "Payment"]);
        yield "</th>
            <th>Method</th>
            <th>";
        // line 212
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 212, $this->getSourceContext())->macro_sort_link(...["admin_orders", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 212, $this->source); })()), "total_amount", "Total"]);
        yield "</th>
            <th>";
        // line 213
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 213, $this->getSourceContext())->macro_sort_link(...["admin_orders", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 213, $this->source); })()), "created_at", "Created"]);
        yield "</th>
            <th>";
        // line 214
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 214, $this->getSourceContext())->macro_sort_link(...["admin_orders", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 214, $this->source); })()), "paid_at", "Paid"]);
        yield "</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 219, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 220
            yield "            ";
            $context["orderId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderId", [], "any", true, true, false, 220) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 220)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 220)) : (0));
            // line 221
            yield "            <tr>
              <td>#";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 222, $this->source); })()), "html", null, true);
            yield "</td>
              <td>";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 223), "html", null, true);
            yield "</td>
              <td>";
            // line 224
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "userId", [], "any", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "userId", [], "any", false, false, false, 224), "username", [], "any", false, false, false, 224), "html", null, true)) : ("-"));
            yield "</td>
              <td>#";
            // line 225
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "cartId", [], "any", false, false, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "cartId", [], "any", false, false, false, 225), "cartId", [], "any", false, false, false, 225), "html", null, true)) : ("-"));
            yield "</td>
              <td><span class=\"badge badge--info\">";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 226), "html", null, true);
            yield "</span></td>
              <td>";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentStatus", [], "any", false, false, false, 227), "html", null, true);
            yield "</td>
              <td>";
            // line 228
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 228)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 228), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalAmount", [], "any", false, false, false, 229), "html", null, true);
            yield "</td>
              <td>";
            // line 230
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 230), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 231
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paidAt", [], "any", false, false, false, 231)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paidAt", [], "any", false, false, false, 231), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders", ["edit" => (isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 234, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_delete", ["id" => (isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 235, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer cette commande ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_order_" . (isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 236, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 242
        if (!$context['_iterated']) {
            // line 243
            yield "            <tr>
              <td colspan=\"11\" class=\"listMeta\">Aucune commande trouvee.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
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
        return "admin/pages/orders.html.twig";
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
        return array (  697 => 10,  692 => 9,  689 => 8,  686 => 7,  683 => 6,  680 => 5,  677 => 4,  656 => 3,  641 => 247,  632 => 243,  630 => 242,  619 => 236,  615 => 235,  611 => 234,  605 => 231,  601 => 230,  597 => 229,  593 => 228,  589 => 227,  585 => 226,  581 => 225,  577 => 224,  573 => 223,  569 => 222,  566 => 221,  563 => 220,  558 => 219,  550 => 214,  546 => 213,  542 => 212,  537 => 210,  533 => 209,  528 => 207,  524 => 206,  520 => 205,  510 => 198,  500 => 191,  492 => 186,  485 => 181,  472 => 179,  468 => 178,  464 => 177,  456 => 171,  443 => 169,  439 => 168,  435 => 167,  426 => 161,  419 => 157,  415 => 156,  411 => 155,  405 => 151,  399 => 149,  397 => 148,  393 => 147,  385 => 142,  377 => 137,  369 => 132,  361 => 127,  353 => 122,  345 => 117,  338 => 112,  329 => 109,  322 => 108,  318 => 107,  309 => 100,  300 => 97,  293 => 96,  289 => 95,  281 => 89,  272 => 86,  265 => 85,  261 => 84,  253 => 78,  240 => 75,  233 => 74,  230 => 73,  227 => 72,  223 => 71,  214 => 64,  203 => 61,  196 => 60,  193 => 59,  189 => 58,  179 => 51,  171 => 46,  167 => 45,  160 => 41,  155 => 38,  149 => 37,  138 => 34,  134 => 33,  131 => 32,  126 => 31,  122 => 30,  115 => 26,  111 => 25,  103 => 19,  90 => 18,  67 => 16,  56 => 1,  54 => 14,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

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

{% block title %}PULSE - Gestion commandes{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion commandes</h2>
      <div class=\"pageSub\">CRUD + filtres DB + export.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_orders_export', filters|merge({format: 'pdf'})) }}\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_orders_export', filters|merge({format: 'excel'})) }}\">Exporter Excel</a>
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
      <h3 class=\"panelTitle\">{{ editingOrder ? 'MODIFIER COMMANDE #' ~ editingOrder.orderId : 'NOUVELLE COMMANDE' }}</h3>
    </div>

    <form method=\"post\">
      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_order_form') }}\" />
      <input type=\"hidden\" name=\"order_id\" value=\"{{ editingOrder ? editingOrder.orderId : '' }}\" />

      <div class=\"formGrid\">
        <div class=\"field\">
          <label for=\"order_number\">Numero commande *</label>
          <input id=\"order_number\" type=\"text\" name=\"order_number\" required value=\"{{ editingOrder ? editingOrder.orderNumber : '' }}\" />
        </div>

        <div class=\"field\">
          <label for=\"order_user_id\">Utilisateur *</label>
          <select id=\"order_user_id\" name=\"user_id\" required>
            <option value=\"\">Selectionner</option>
            {% for user in users %}
              {% set userId = user.userId ?? 0 %}
              <option value=\"{{ userId }}\" {{ editingOrder and editingOrder.userId and editingOrder.userId.userId == userId ? 'selected' : '' }}>
                {{ user.username }} ({{ user.email }})
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"field\">
          <label for=\"order_cart_id\">Panier *</label>
          <select id=\"order_cart_id\" name=\"cart_id\" required>
            <option value=\"\">Selectionner</option>
            {% for cart in carts %}
              {% set cartId = cart.cartId ?? 0 %}
              {% set cartUser = cart.userId ? cart.userId.username : 'unknown' %}
              <option value=\"{{ cartId }}\" {{ editingOrder and editingOrder.cartId and editingOrder.cartId.cartId == cartId ? 'selected' : '' }}>
                #{{ cartId }} - {{ cartUser }} ({{ cart.status }})
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"field\">
          <label for=\"order_status\">Status *</label>
          <select id=\"order_status\" name=\"status\" required>
            {% for status in statusOptions %}
              <option value=\"{{ status }}\" {{ editingOrder and editingOrder.status == status ? 'selected' : (not editingOrder and status == 'PENDING' ? 'selected' : '') }}>
                {{ status }}
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"field\">
          <label for=\"order_payment_status\">Payment status *</label>
          <select id=\"order_payment_status\" name=\"payment_status\" required>
            {% for option in paymentStatusOptions %}
              <option value=\"{{ option }}\" {{ editingOrder and editingOrder.paymentStatus == option ? 'selected' : (not editingOrder and option == 'UNPAID' ? 'selected' : '') }}>
                {{ option }}
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"field\">
          <label for=\"order_payment_method\">Payment method</label>
          <select id=\"order_payment_method\" name=\"payment_method\">
            <option value=\"\">Aucun</option>
            {% for option in paymentMethodOptions %}
              <option value=\"{{ option }}\" {{ editingOrder and editingOrder.paymentMethod == option ? 'selected' : '' }}>
                {{ option }}
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"field\">
          <label for=\"order_total_amount\">Montant total *</label>
          <input id=\"order_total_amount\" type=\"number\" min=\"0\" step=\"0.01\" name=\"total_amount\" required value=\"{{ editingOrder ? editingOrder.totalAmount : '0.00' }}\" />
        </div>

        <div class=\"field\">
          <label for=\"order_phone\">Telephone livraison</label>
          <input id=\"order_phone\" type=\"text\" name=\"phone_for_delivery\" value=\"{{ editingOrder ? editingOrder.phoneForDelivery : '' }}\" />
        </div>

        <div class=\"field\" style=\"grid-column: 1 / -1;\">
          <label for=\"order_shipping_address\">Adresse livraison</label>
          <textarea id=\"order_shipping_address\" name=\"shipping_address\">{{ editingOrder ? editingOrder.shippingAddress : '' }}</textarea>
        </div>

        <div class=\"field\">
          <label for=\"order_paid_at\">Paid at</label>
          <input id=\"order_paid_at\" type=\"datetime-local\" name=\"paid_at\" value=\"{{ editingOrder and editingOrder.paidAt ? editingOrder.paidAt|date('Y-m-d\\\\TH:i') : '' }}\" />
        </div>

        <div class=\"field\">
          <label for=\"order_shipped_at\">Shipped at</label>
          <input id=\"order_shipped_at\" type=\"datetime-local\" name=\"shipped_at\" value=\"{{ editingOrder and editingOrder.shippedAt ? editingOrder.shippedAt|date('Y-m-d\\\\TH:i') : '' }}\" />
        </div>

        <div class=\"field\">
          <label for=\"order_delivered_at\">Delivered at</label>
          <input id=\"order_delivered_at\" type=\"datetime-local\" name=\"delivered_at\" value=\"{{ editingOrder and editingOrder.deliveredAt ? editingOrder.deliveredAt|date('Y-m-d\\\\TH:i') : '' }}\" />
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">{{ editingOrder ? 'Mettre a jour' : 'Creer commande' }}</button>
        {% if editingOrder %}
          <a class=\"btn btnGhost\" href=\"{{ path('admin_orders') }}\">Annuler edition</a>
        {% endif %}
      </div>
    </form>
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"{{ path('admin_orders') }}\">
    <input type=\"hidden\" name=\"sort\" value=\"{{ filters.sort|default('created_at') }}\" />
    <input type=\"hidden\" name=\"direction\" value=\"{{ filters.direction|default('desc') }}\" />

    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"order number, address\" />
    </div>

    <div class=\"filterGroup\">
      <label>Status</label>
      <select name=\"status\">
        <option value=\"\" {{ filters.status == '' ? 'selected' : '' }}>ALL</option>
        {% for status in statusOptions %}
          <option value=\"{{ status }}\" {{ filters.status == status ? 'selected' : '' }}>{{ status }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Payment</label>
      <select name=\"payment_status\">
        <option value=\"\" {{ filters.payment_status == '' ? 'selected' : '' }}>ALL</option>
        {% for option in paymentStatusOptions %}
          <option value=\"{{ option }}\" {{ filters.payment_status == option ? 'selected' : '' }}>{{ option }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>User</label>
      <input type=\"search\" name=\"user\" value=\"{{ filters.user }}\" placeholder=\"username/email\" />
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_orders') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE COMMANDES</h3>
      <span class=\"listMeta\">{{ orders|length }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>{{ sorter.sort_link('admin_orders', filters, 'id', 'ID') }}</th>
            <th>{{ sorter.sort_link('admin_orders', filters, 'order_number', 'Order') }}</th>
            <th>{{ sorter.sort_link('admin_orders', filters, 'user', 'User') }}</th>
            <th>Cart</th>
            <th>{{ sorter.sort_link('admin_orders', filters, 'status', 'Status') }}</th>
            <th>{{ sorter.sort_link('admin_orders', filters, 'payment_status', 'Payment') }}</th>
            <th>Method</th>
            <th>{{ sorter.sort_link('admin_orders', filters, 'total_amount', 'Total') }}</th>
            <th>{{ sorter.sort_link('admin_orders', filters, 'created_at', 'Created') }}</th>
            <th>{{ sorter.sort_link('admin_orders', filters, 'paid_at', 'Paid') }}</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for order in orders %}
            {% set orderId = order.orderId ?? 0 %}
            <tr>
              <td>#{{ orderId }}</td>
              <td>{{ order.orderNumber }}</td>
              <td>{{ order.userId ? order.userId.username : '-' }}</td>
              <td>#{{ order.cartId ? order.cartId.cartId : '-' }}</td>
              <td><span class=\"badge badge--info\">{{ order.status }}</span></td>
              <td>{{ order.paymentStatus }}</td>
              <td>{{ order.paymentMethod ?: '-' }}</td>
              <td>{{ order.totalAmount }}</td>
              <td>{{ order.createdAt ? order.createdAt|date('d/m/Y H:i') : '-' }}</td>
              <td>{{ order.paidAt ? order.paidAt|date('d/m/Y H:i') : '-' }}</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_orders', {edit: orderId}) }}\">Update</a>
                  <form method=\"post\" action=\"{{ path('admin_order_delete', {id: orderId}) }}\" onsubmit=\"return confirm('Supprimer cette commande ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_order_' ~ orderId) }}\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"11\" class=\"listMeta\">Aucune commande trouvee.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/orders.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\admin\\pages\\orders.html.twig");
    }
}
