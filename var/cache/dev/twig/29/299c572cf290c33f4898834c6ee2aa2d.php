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

/* front/pages/messages.html.twig */
class __TwigTemplate_fb59e2b8dc6d2a1a10c3119fbf6f7c1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/messages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/messages.html.twig"));

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

        yield "PULSE - Messagerie";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Messagerie", "hero_sub" => "Vue inbox sociale de vos conversations privees.", "breadcrumb_current" => "Messagerie"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "messages"]));
        // line 17
        yield "
        <div class=\"socialShell--chat\">
          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <form class=\"filtersRow\" method=\"get\" action=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages");
        yield "\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "q", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "q", [], "any", false, false, false, 22), (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 22, $this->source); })()))) : ((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 22, $this->source); })()))), "html", null, true);
        yield "\" placeholder=\"Rechercher une conversation...\" />
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"latest\" ";
        // line 25
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), "sort", [], "any", false, false, false, 25), "latest")) : ("latest")) == "latest")) ? ("selected") : (""));
        yield ">Plus recentes</option>
                    <option value=\"oldest\" ";
        // line 26
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), "sort", [], "any", false, false, false, 26), "latest")) : ("latest")) == "oldest")) ? ("selected") : (""));
        yield ">Plus anciennes</option>
                    <option value=\"unread\" ";
        // line 27
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })()), "sort", [], "any", false, false, false, 27), "latest")) : ("latest")) == "unread")) ? ("selected") : (""));
        yield ">Priorite non lues</option>
                  </select>
                </div>
                <label class=\"listItem__meta\" style=\"display:flex; align-items:center; gap:6px;\">
                  <input type=\"checkbox\" name=\"unread\" value=\"1\" ";
        // line 31
        yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "unread", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 31, $this->source); })()), "unread", [], "any", false, false, false, 31), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                  Non lues
                </label>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_messages");
        yield "\">Reset</a>
              </form>

              <div class=\"socialQuickList\" style=\"margin-top:10px;\">
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 40
            yield "                  ";
            $context["partner"] = CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "partner", [], "any", false, false, false, 40);
            // line 41
            yield "                  ";
            $context["partnerId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["partner"] ?? null), "userId", [], "any", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 41, $this->source); })()), "userId", [], "any", false, false, false, 41)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 41, $this->source); })()), "userId", [], "any", false, false, false, 41)) : (0));
            // line 42
            yield "                  ";
            $context["active"] = ((isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 42, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 42, $this->source); })()), "userId", [], "any", false, false, false, 42) == (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 42, $this->source); })())));
            // line 43
            yield "                  <a class=\"listItem ";
            yield (((($tmp = (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-active") : (""));
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_conversation", ["id" => (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 43, $this->source); })())]), "html", null, true);
            yield "\">
                    <span>";
            // line 44
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["partner"] ?? null), "displayName", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 44, $this->source); })()), "displayName", [], "any", false, false, false, 44)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 44, $this->source); })()), "displayName", [], "any", false, false, false, 44), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 44, $this->source); })()), "username", [], "any", false, false, false, 44), "html", null, true)));
            yield "</span>
                    ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "unread_count", [], "any", false, false, false, 45) > 0)) {
                // line 46
                yield "                      <span class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "unread_count", [], "any", false, false, false, 46), "html", null, true);
                yield " non lu(s)</span>
                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 47
$context["conversation"], "latest_message", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "                      <span class=\"listItem__meta\">";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "latest_message", [], "any", false, false, false, 48), "createdAt", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "latest_message", [], "any", false, false, false, 48), "createdAt", [], "any", false, false, false, 48), "d/m H:i"), "html", null, true)) : (""));
                yield "</span>
                    ";
            } else {
                // line 50
                yield "                      <span class=\"listItem__meta\">Aucun message</span>
                    ";
            }
            // line 52
            yield "                  </a>
                ";
            $context['_iterated'] = true;
        }
        // line 53
        if (!$context['_iterated']) {
            // line 54
            yield "                  <div class=\"emptyState\">Aucune conversation.</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conversation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "              </div>

              ";
        // line 58
        yield from $this->load("front/partials/_pagination.html.twig", 58)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 59
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 59, $this->source); })()), "route_name" => "front_messages"]));
        // line 62
        yield "            </section>
          </aside>

          <div class=\"socialStack\">
            <section class=\"panel gadget\">
              ";
        // line 67
        if ((($tmp = (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 67, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "                ";
            $context["partnerId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["selected_partner"] ?? null), "userId", [], "any", true, true, false, 68) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 68, $this->source); })()), "userId", [], "any", false, false, false, 68)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 68, $this->source); })()), "userId", [], "any", false, false, false, 68)) : (0));
            // line 69
            yield "                <div class=\"panel__head\">
                  <div>
                    <h3 class=\"panel__title\">APERCU CONVERSATION</h3>
                    <div class=\"panel__desc\">Avec ";
            // line 72
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["selected_partner"] ?? null), "displayName", [], "any", true, true, false, 72) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 72, $this->source); })()), "displayName", [], "any", false, false, false, 72)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 72, $this->source); })()), "displayName", [], "any", false, false, false, 72), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 72, $this->source); })()), "username", [], "any", false, false, false, 72), "html", null, true)));
            yield "</div>
                  </div>
                  <a class=\"btn btn--ghost\" href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_conversation", ["id" => (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 74, $this->source); })())]), "html", null, true);
            yield "\">Ouvrir</a>
                </div>

                <div class=\"list\">
                  ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preview_messages"]) || array_key_exists("preview_messages", $context) ? $context["preview_messages"] : (function () { throw new RuntimeError('Variable "preview_messages" does not exist.', 78, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 79
                yield "                    <div class=\"listItem\">
                      <span>
                        ";
                // line 81
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 81) && (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 81, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 81), "userId", [], "any", false, false, false, 81) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 81, $this->source); })()), "userId", [], "any", false, false, false, 81)))) ? ("Moi") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, true, false, 81), "displayName", [], "any", true, true, false, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 81), "displayName", [], "any", false, false, false, 81)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 81), "displayName", [], "any", false, false, false, 81), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 81), "username", [], "any", false, false, false, 81), "html", null, true)))) : ("User"))));
                yield ":
                        ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "bodyText", [], "any", false, false, false, 82), "html", null, true);
                yield "
                      </span>
                      <span class=\"listItem__meta\">";
                // line 84
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 84), "H:i"), "html", null, true)) : (""));
                yield "</span>
                    </div>
                  ";
                $context['_iterated'] = true;
            }
            // line 86
            if (!$context['_iterated']) {
                // line 87
                yield "                    <div class=\"emptyState\">Aucun message dans cette conversation.</div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "                </div>

                <div class=\"postCard__actions\" style=\"margin-top:10px;\">
                  <a class=\"btn btn--primary\" href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_conversation", ["id" => (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 92, $this->source); })())]), "html", null, true);
            yield "\">Continuer la conversation</a>
                </div>
              ";
        } else {
            // line 95
            yield "                <div class=\"emptyState\">Selectionnez une conversation.</div>
              ";
        }
        // line 97
        yield "            </section>
          </div>
        </div>
      </div>

      ";
        // line 102
        yield from $this->load("front/partials/_footer.html.twig", 102)->unwrap()->yield($context);
        // line 103
        yield "    </section>
  </main>

  ";
        // line 106
        yield from $this->load("front/partials/_auth_modal.html.twig", 106)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/messages.html.twig";
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
        return array (  313 => 106,  308 => 103,  306 => 102,  299 => 97,  295 => 95,  289 => 92,  284 => 89,  277 => 87,  275 => 86,  268 => 84,  263 => 82,  259 => 81,  255 => 79,  250 => 78,  243 => 74,  238 => 72,  233 => 69,  230 => 68,  228 => 67,  221 => 62,  219 => 59,  218 => 58,  214 => 56,  207 => 54,  205 => 53,  200 => 52,  196 => 50,  190 => 48,  188 => 47,  183 => 46,  181 => 45,  177 => 44,  170 => 43,  167 => 42,  164 => 41,  161 => 40,  156 => 39,  149 => 35,  142 => 31,  135 => 27,  131 => 26,  127 => 25,  121 => 22,  117 => 21,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Messagerie{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Messagerie',
    hero_sub: 'Vue inbox sociale de vos conversations privees.',
    breadcrumb_current: 'Messagerie'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'messages' } %}

        <div class=\"socialShell--chat\">
          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <form class=\"filtersRow\" method=\"get\" action=\"{{ path('front_messages') }}\" data-auto-submit=\"1\">
                <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ filters.q|default(search) }}\" placeholder=\"Rechercher une conversation...\" />
                <div class=\"select\">
                  <select name=\"sort\">
                    <option value=\"latest\" {{ (filters.sort|default('latest')) == 'latest' ? 'selected' : '' }}>Plus recentes</option>
                    <option value=\"oldest\" {{ (filters.sort|default('latest')) == 'oldest' ? 'selected' : '' }}>Plus anciennes</option>
                    <option value=\"unread\" {{ (filters.sort|default('latest')) == 'unread' ? 'selected' : '' }}>Priorite non lues</option>
                  </select>
                </div>
                <label class=\"listItem__meta\" style=\"display:flex; align-items:center; gap:6px;\">
                  <input type=\"checkbox\" name=\"unread\" value=\"1\" {{ filters.unread|default(false) ? 'checked' : '' }}>
                  Non lues
                </label>
                <button class=\"btn btn--ghost\" type=\"submit\">Filtrer</button>
                <a class=\"btn btn--ghost\" href=\"{{ path('front_messages') }}\">Reset</a>
              </form>

              <div class=\"socialQuickList\" style=\"margin-top:10px;\">
                {% for conversation in conversations %}
                  {% set partner = conversation.partner %}
                  {% set partnerId = partner.userId ?? 0 %}
                  {% set active = selected_partner and selected_partner.userId == partnerId %}
                  <a class=\"listItem {{ active ? 'is-active' : '' }}\" href=\"{{ path('front_conversation', {id: partnerId}) }}\">
                    <span>{{ partner.displayName ?? partner.username }}</span>
                    {% if conversation.unread_count > 0 %}
                      <span class=\"badge\">{{ conversation.unread_count }} non lu(s)</span>
                    {% elseif conversation.latest_message %}
                      <span class=\"listItem__meta\">{{ conversation.latest_message.createdAt ? conversation.latest_message.createdAt|date('d/m H:i') : '' }}</span>
                    {% else %}
                      <span class=\"listItem__meta\">Aucun message</span>
                    {% endif %}
                  </a>
                {% else %}
                  <div class=\"emptyState\">Aucune conversation.</div>
                {% endfor %}
              </div>

              {% include 'front/partials/_pagination.html.twig' with {
                pagination: pagination,
                route_name: 'front_messages'
              } %}
            </section>
          </aside>

          <div class=\"socialStack\">
            <section class=\"panel gadget\">
              {% if selected_partner %}
                {% set partnerId = selected_partner.userId ?? 0 %}
                <div class=\"panel__head\">
                  <div>
                    <h3 class=\"panel__title\">APERCU CONVERSATION</h3>
                    <div class=\"panel__desc\">Avec {{ selected_partner.displayName ?? selected_partner.username }}</div>
                  </div>
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_conversation', {id: partnerId}) }}\">Ouvrir</a>
                </div>

                <div class=\"list\">
                  {% for message in preview_messages %}
                    <div class=\"listItem\">
                      <span>
                        {{ message.senderUserId and viewer_user and message.senderUserId.userId == viewer_user.userId ? 'Moi' : (message.senderUserId ? (message.senderUserId.displayName ?? message.senderUserId.username) : 'User') }}:
                        {{ message.bodyText }}
                      </span>
                      <span class=\"listItem__meta\">{{ message.createdAt ? message.createdAt|date('H:i') : '' }}</span>
                    </div>
                  {% else %}
                    <div class=\"emptyState\">Aucun message dans cette conversation.</div>
                  {% endfor %}
                </div>

                <div class=\"postCard__actions\" style=\"margin-top:10px;\">
                  <a class=\"btn btn--primary\" href=\"{{ path('front_conversation', {id: partnerId}) }}\">Continuer la conversation</a>
                </div>
              {% else %}
                <div class=\"emptyState\">Selectionnez une conversation.</div>
              {% endif %}
            </section>
          </div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/messages.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\messages.html.twig");
    }
}
