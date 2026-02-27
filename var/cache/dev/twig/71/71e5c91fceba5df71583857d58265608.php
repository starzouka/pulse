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

/* front/pages/orders.html.twig */
class __TwigTemplate_4291a55c6a8e30d11770f6d6b8363ccf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/orders.html.twig"));

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

        yield "PULSE - Mes commandes";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Mes commandes", "hero_sub" => "Historique, statuts et acces detail commande.", "breadcrumb_current" => "Mes commandes"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "orders"]));
        // line 17
        yield "
        <div class=\"socialShell\">
          <div class=\"socialStack\">
            <section class=\"panel\">
              <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "q", [], "any", false, false, false, 22), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Numero, adresse, paiement...\" />
                <div class=\"select\">
                  <select name=\"status\">
                    <option value=\"\" ";
        // line 25
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), "status", [], "any", false, false, false, 25))) ? ("selected") : (""));
        yield ">Tous statuts</option>
                    <option value=\"PENDING\" ";
        // line 26
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26) == "PENDING")) ? ("selected") : (""));
        yield ">PENDING</option>
                    <option value=\"PAID\" ";
        // line 27
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })()), "status", [], "any", false, false, false, 27) == "PAID")) ? ("selected") : (""));
        yield ">PAID</option>
                    <option value=\"CANCELLED\" ";
        // line 28
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28) == "CANCELLED")) ? ("selected") : (""));
        yield ">CANCELLED</option>
                    <option value=\"SHIPPED\" ";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "status", [], "any", false, false, false, 29) == "SHIPPED")) ? ("selected") : (""));
        yield ">SHIPPED</option>
                    <option value=\"DELIVERED\" ";
        // line 30
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30) == "DELIVERED")) ? ("selected") : (""));
        yield ">DELIVERED</option>
                  </select>
                </div>
                <input class=\"input\" type=\"date\" name=\"from\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "from", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 33, $this->source); })()), "from", [], "any", false, false, false, 33), "")) : ("")), "html", null, true);
        yield "\" />
                <input class=\"input\" type=\"date\" name=\"to\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "to", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 34, $this->source); })()), "to", [], "any", false, false, false, 34), "")) : ("")), "html", null, true);
        yield "\" />
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"latest\" ";
        // line 37
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 37, $this->source); })()), "sort", [], "any", false, false, false, 37), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recentes</option>
                    <option value=\"oldest\" ";
        // line 38
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 38, $this->source); })()), "sort", [], "any", false, false, false, 38), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciennes</option>
                    <option value=\"amount_high\" ";
        // line 39
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 39, $this->source); })()), "sort", [], "any", false, false, false, 39), "latest")) : ("latest")) == "amount_high")) ? ("selected") : (""));
        yield ">Montant DESC</option>
                    <option value=\"amount_low\" ";
        // line 40
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 40, $this->source); })()), "sort", [], "any", false, false, false, 40), "latest")) : ("latest")) == "amount_low")) ? ("selected") : (""));
        yield ">Montant ASC</option>
                    <option value=\"status\" ";
        // line 41
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 41, $this->source); })()), "sort", [], "any", false, false, false, 41), "latest")) : ("latest")) == "status")) ? ("selected") : (""));
        yield ">Statut</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_orders");
        yield "\">Reset</a>
              </form>
            </section>

            <section class=\"panel\">
              ";
        // line 50
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 50, $this->source); })()))) {
            // line 51
            yield "                <div class=\"emptyState\">Aucune commande pour ces filtres.</div>
              ";
        } else {
            // line 53
            yield "                <div class=\"tableWrap\">
                  <table class=\"table\">
                    <thead>
                      <tr>
                        <th>Commande</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Paiement</th>
                        <th>Statut</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 66, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 67
                yield "                        ";
                $context["orderId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderId", [], "any", true, true, false, 67) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 67)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 67)) : (0));
                // line 68
                yield "                        ";
                $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 68), "PENDING")) : ("PENDING"));
                // line 69
                yield "                        ";
                $context["statusClass"] = (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 69, $this->source); })()) == "PAID") || ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 69, $this->source); })()) == "DELIVERED"))) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 69, $this->source); })()) == "SHIPPED")) ? ("badge--warning") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 69, $this->source); })()) == "CANCELLED")) ? ("badge--danger") : (""))))));
                // line 70
                yield "                        <tr>
                          <td>";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 71), "html", null, true);
                yield "</td>
                          <td>";
                // line 72
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 72), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</td>
                          <td>";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalAmount", [], "any", false, false, false, 73), 2, ".", " "), "html", null, true);
                yield " DT</td>
                          <td>";
                // line 74
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentStatus", [], "any", true, true, false, 74) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentStatus", [], "any", false, false, false, 74)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentStatus", [], "any", false, false, false, 74), "html", null, true)) : ("-"));
                yield "</td>
                          <td><span class=\"badge ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 75, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 75, $this->source); })()), "html", null, true);
                yield "</span></td>
                          <td>
                            ";
                // line 77
                if (((isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 77, $this->source); })()) > 0)) {
                    // line 78
                    yield "                              <a class=\"btn btn--ghost\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_order_detail", ["id" => (isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 78, $this->source); })())]), "html", null, true);
                    yield "\">Detail</a>
                            ";
                } else {
                    // line 80
                    yield "                              <a class=\"btn btn--ghost\" href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_order_detail");
                    yield "\">Detail</a>
                            ";
                }
                // line 82
                yield "                          </td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "                    </tbody>
                  </table>
                </div>
              ";
        }
        // line 89
        yield "            </section>

            ";
        // line 91
        yield from $this->load("front/partials/_pagination.html.twig", 91)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 92
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 92, $this->source); })()), "route_name" => "front_orders"]));
        // line 95
        yield "          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">RESUME COMMANDES</h3>
              <div class=\"statsRow\">
                <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "total", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 101, $this->source); })()), "total", [], "any", false, false, false, 101), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">Totales</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "shipping", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 102, $this->source); })()), "shipping", [], "any", false, false, false, 102), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">En livraison</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "pending", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 103, $this->source); })()), "pending", [], "any", false, false, false, 103), 0)) : (0)), "html", null, true);
        yield "</div><div class=\"statCard__label\">En attente</div></div>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart");
        yield "\"><span>Ouvrir panier</span><span class=\"listItem__meta\">Panier</span></a>
                <a class=\"listItem\" href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_shop");
        yield "\"><span>Retour boutique</span><span class=\"listItem__meta\">Explorer</span></a>
                <a class=\"listItem\" href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_notifications");
        yield "\"><span>Notifications</span><span class=\"listItem__meta\">Alertes</span></a>
              </div>
            </section>
          </aside>
        </div>
      </div>

      ";
        // line 119
        yield from $this->load("front/partials/_footer.html.twig", 119)->unwrap()->yield($context);
        // line 120
        yield "    </section>
  </main>

  ";
        // line 123
        yield from $this->load("front/partials/_auth_modal.html.twig", 123)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/orders.html.twig";
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
        return array (  340 => 123,  335 => 120,  333 => 119,  323 => 112,  319 => 111,  315 => 110,  305 => 103,  301 => 102,  297 => 101,  289 => 95,  287 => 92,  286 => 91,  282 => 89,  276 => 85,  268 => 82,  262 => 80,  256 => 78,  254 => 77,  247 => 75,  243 => 74,  239 => 73,  235 => 72,  231 => 71,  228 => 70,  225 => 69,  222 => 68,  219 => 67,  215 => 66,  200 => 53,  196 => 51,  194 => 50,  186 => 45,  179 => 41,  175 => 40,  171 => 39,  167 => 38,  163 => 37,  157 => 34,  153 => 33,  147 => 30,  143 => 29,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  121 => 22,  117 => 21,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Mes commandes{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Mes commandes',
    hero_sub: 'Historique, statuts et acces detail commande.',
    breadcrumb_current: 'Mes commandes'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'orders' } %}

        <div class=\"socialShell\">
          <div class=\"socialStack\">
            <section class=\"panel\">
              <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_orders') }}\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default('') }}\" placeholder=\"Numero, adresse, paiement...\" />
                <div class=\"select\">
                  <select name=\"status\">
                    <option value=\"\" {{ filters.status is empty ? 'selected' : '' }}>Tous statuts</option>
                    <option value=\"PENDING\" {{ filters.status == 'PENDING' ? 'selected' : '' }}>PENDING</option>
                    <option value=\"PAID\" {{ filters.status == 'PAID' ? 'selected' : '' }}>PAID</option>
                    <option value=\"CANCELLED\" {{ filters.status == 'CANCELLED' ? 'selected' : '' }}>CANCELLED</option>
                    <option value=\"SHIPPED\" {{ filters.status == 'SHIPPED' ? 'selected' : '' }}>SHIPPED</option>
                    <option value=\"DELIVERED\" {{ filters.status == 'DELIVERED' ? 'selected' : '' }}>DELIVERED</option>
                  </select>
                </div>
                <input class=\"input\" type=\"date\" name=\"from\" value=\"{{ filters.from|default('') }}\" />
                <input class=\"input\" type=\"date\" name=\"to\" value=\"{{ filters.to|default('') }}\" />
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"latest\" {{ (filters.sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recentes</option>
                    <option value=\"oldest\" {{ (filters.sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciennes</option>
                    <option value=\"amount_high\" {{ (filters.sort|default('latest')) == 'amount_high' ? 'selected' : '' }}>Montant DESC</option>
                    <option value=\"amount_low\" {{ (filters.sort|default('latest')) == 'amount_low' ? 'selected' : '' }}>Montant ASC</option>
                    <option value=\"status\" {{ (filters.sort|default('latest')) == 'status' ? 'selected' : '' }}>Statut</option>
                  </select>
                </div>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_orders') }}\">Reset</a>
              </form>
            </section>

            <section class=\"panel\">
              {% if orders is empty %}
                <div class=\"emptyState\">Aucune commande pour ces filtres.</div>
              {% else %}
                <div class=\"tableWrap\">
                  <table class=\"table\">
                    <thead>
                      <tr>
                        <th>Commande</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Paiement</th>
                        <th>Statut</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for order in orders %}
                        {% set orderId = order.orderId ?? 0 %}
                        {% set status = order.status|default('PENDING') %}
                        {% set statusClass = status == 'PAID' or status == 'DELIVERED' ? 'badge--success' : (status == 'SHIPPED' ? 'badge--warning' : (status == 'CANCELLED' ? 'badge--danger' : '')) %}
                        <tr>
                          <td>{{ order.orderNumber }}</td>
                          <td>{{ order.createdAt ? order.createdAt|date('d/m/Y') : '-' }}</td>
                          <td>{{ order.totalAmount|number_format(2, '.', ' ') }} DT</td>
                          <td>{{ order.paymentStatus ?? '-' }}</td>
                          <td><span class=\"badge {{ statusClass }}\">{{ status }}</span></td>
                          <td>
                            {% if orderId > 0 %}
                              <a class=\"btn btn--ghost\" href=\"{{ path('front_order_detail', {id: orderId}) }}\">Detail</a>
                            {% else %}
                              <a class=\"btn btn--ghost\" href=\"{{ path('front_order_detail') }}\">Detail</a>
                            {% endif %}
                          </td>
                        </tr>
                      {% endfor %}
                    </tbody>
                  </table>
                </div>
              {% endif %}
            </section>

            {% include 'front/partials/_pagination.html.twig' with {
              pagination: pagination,
              route_name: 'front_orders'
            } %}
          </div>

          <aside class=\"socialStack\">
            <section class=\"panel\">
              <h3 class=\"panel__title\">RESUME COMMANDES</h3>
              <div class=\"statsRow\">
                <div class=\"statCard\"><div class=\"statCard__value\">{{ summary.total|default(0) }}</div><div class=\"statCard__label\">Totales</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">{{ summary.shipping|default(0) }}</div><div class=\"statCard__label\">En livraison</div></div>
                <div class=\"statCard\"><div class=\"statCard__value\">{{ summary.pending|default(0) }}</div><div class=\"statCard__label\">En attente</div></div>
              </div>
            </section>

            <section class=\"panel\">
              <h3 class=\"panel__title\">RACCOURCIS</h3>
              <div class=\"socialQuickList\">
                <a class=\"listItem\" href=\"{{ path('front_cart') }}\"><span>Ouvrir panier</span><span class=\"listItem__meta\">Panier</span></a>
                <a class=\"listItem\" href=\"{{ path('front_shop') }}\"><span>Retour boutique</span><span class=\"listItem__meta\">Explorer</span></a>
                <a class=\"listItem\" href=\"{{ path('front_notifications') }}\"><span>Notifications</span><span class=\"listItem__meta\">Alertes</span></a>
              </div>
            </section>
          </aside>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/orders.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\orders.html.twig");
    }
}
