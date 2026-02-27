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

/* front/pages/conversation.html.twig */
class __TwigTemplate_a6c5463fa1f129f4ee7a34e068efd79b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/conversation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/conversation.html.twig"));

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

        yield "PULSE - Conversation";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Conversation", "hero_sub" => "Discussion privee en temps reel.", "breadcrumb_current" => "Conversation"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 16
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                yield "          <div class=\"listItem\">
            <span>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
            <span class=\"badge ";
                // line 19
                yield ((($context["label"] == "error")) ? ("badge--danger") : (((($context["label"] == "warning")) ? ("badge--warning") : (((($context["label"] == "info")) ? ("badge--info") : ("badge--success"))))));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</span>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
      <div class=\"layout\">
        ";
        // line 25
        yield from $this->load("front/partials/_player_side_nav.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["active" => "conversation"]));
        // line 26
        yield "
        <div class=\"socialShell--chat\">
          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">CONVERSATIONS</h3>
              <div class=\"socialQuickList\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 33
            yield "                  ";
            $context["partner"] = CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "partner", [], "any", false, false, false, 33);
            // line 34
            yield "                  ";
            $context["partnerId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["partner"] ?? null), "userId", [], "any", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 34, $this->source); })()), "userId", [], "any", false, false, false, 34)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 34, $this->source); })()), "userId", [], "any", false, false, false, 34)) : (0));
            // line 35
            yield "                  ";
            $context["active"] = ((isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 35, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 35, $this->source); })()), "userId", [], "any", false, false, false, 35) == (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 35, $this->source); })())));
            // line 36
            yield "                  <a class=\"listItem ";
            yield (((($tmp = (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-active") : (""));
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_conversation", ["id" => (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 36, $this->source); })())]), "html", null, true);
            yield "\">
                    <span>";
            // line 37
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["partner"] ?? null), "displayName", [], "any", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 37, $this->source); })()), "displayName", [], "any", false, false, false, 37)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 37, $this->source); })()), "displayName", [], "any", false, false, false, 37), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 37, $this->source); })()), "username", [], "any", false, false, false, 37), "html", null, true)));
            yield "</span>
                    ";
            // line 38
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "unread_count", [], "any", false, false, false, 38) > 0)) {
                // line 39
                yield "                      <span class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "unread_count", [], "any", false, false, false, 39), "html", null, true);
                yield "</span>
                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 40
$context["conversation"], "latest_message", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "                      <span class=\"listItem__meta\">";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "latest_message", [], "any", false, false, false, 41), "createdAt", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "latest_message", [], "any", false, false, false, 41), "createdAt", [], "any", false, false, false, 41), "d/m H:i"), "html", null, true)) : (""));
                yield "</span>
                    ";
            } else {
                // line 43
                yield "                      <span class=\"listItem__meta\">-</span>
                    ";
            }
            // line 45
            yield "                  </a>
                ";
            $context['_iterated'] = true;
        }
        // line 46
        if (!$context['_iterated']) {
            // line 47
            yield "                  <div class=\"emptyState\">Aucune conversation disponible.</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conversation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "              </div>
            </section>
          </aside>

          <div class=\"socialStack\">
            <section class=\"panel gadget\">
              ";
        // line 55
        if ((($tmp = (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 55, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "                ";
            $context["partnerId"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["selected_partner"] ?? null), "userId", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 56, $this->source); })()), "userId", [], "any", false, false, false, 56)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 56, $this->source); })()), "userId", [], "any", false, false, false, 56)) : (0));
            // line 57
            yield "                <div class=\"panel__head\">
                  <div>
                    <h3 class=\"panel__title\">CHAT AVEC ";
            // line 59
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["selected_partner"] ?? null), "displayName", [], "any", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 59, $this->source); })()), "displayName", [], "any", false, false, false, 59)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 59, $this->source); })()), "displayName", [], "any", false, false, false, 59), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_partner"]) || array_key_exists("selected_partner", $context) ? $context["selected_partner"] : (function () { throw new RuntimeError('Variable "selected_partner" does not exist.', 59, $this->source); })()), "username", [], "any", false, false, false, 59), "html", null, true)));
            yield "</h3>
                    <div class=\"panel__desc\">Messages les plus recents</div>
                  </div>
                  <a class=\"btn btn--ghost\" href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_player_profile", ["id" => (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 62, $this->source); })())]), "html", null, true);
            yield "\">Voir profil</a>
                </div>

                <div class=\"list\" style=\"max-height: 420px; overflow:auto;\">
                  ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 66, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 67
                yield "                    ";
                $context["mine"] = (((isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 67, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 67)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 67), "userId", [], "any", false, false, false, 67) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewer_user"]) || array_key_exists("viewer_user", $context) ? $context["viewer_user"] : (function () { throw new RuntimeError('Variable "viewer_user" does not exist.', 67, $this->source); })()), "userId", [], "any", false, false, false, 67)));
                // line 68
                yield "                    <div class=\"listItem ";
                yield (((($tmp = (isset($context["mine"]) || array_key_exists("mine", $context) ? $context["mine"] : (function () { throw new RuntimeError('Variable "mine" does not exist.', 68, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-mine") : (""));
                yield "\">
                      <span>
                        <b>";
                // line 70
                yield (((($tmp = (isset($context["mine"]) || array_key_exists("mine", $context) ? $context["mine"] : (function () { throw new RuntimeError('Variable "mine" does not exist.', 70, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Moi") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, true, false, 70), "displayName", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 70), "displayName", [], "any", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 70), "displayName", [], "any", false, false, false, 70), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderUserId", [], "any", false, false, false, 70), "username", [], "any", false, false, false, 70), "html", null, true)))) : ("User"))));
                yield ":</b>
                        ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "bodyText", [], "any", false, false, false, 71), "html", null, true);
                yield "
                      </span>
                      <span class=\"listItem__meta\">";
                // line 73
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 73), "d/m H:i"), "html", null, true)) : (""));
                yield "</span>
                    </div>
                  ";
                $context['_iterated'] = true;
            }
            // line 75
            if (!$context['_iterated']) {
                // line 76
                yield "                    <div class=\"emptyState\">Aucun message.</div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "                </div>

                <form method=\"post\" action=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_conversation", ["id" => (isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 80, $this->source); })())]), "html", null, true);
            yield "\" style=\"margin-top:10px; display:flex; gap:8px; align-items:flex-start;\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("conversation_send"), "html", null, true);
            yield "\">
                  <textarea class=\"textarea\" name=\"body_text\" placeholder=\"Ecrire un message...\" style=\"min-height: 70px; flex:1;\" required></textarea>
                  <button class=\"btn btn--primary\" type=\"submit\">Envoyer</button>
                </form>
              ";
        } else {
            // line 86
            yield "                <div class=\"emptyState\">Aucun destinataire selectionne.</div>
              ";
        }
        // line 88
        yield "            </section>
          </div>
        </div>
      </div>

      ";
        // line 93
        yield from $this->load("front/partials/_footer.html.twig", 93)->unwrap()->yield($context);
        // line 94
        yield "    </section>
  </main>

  ";
        // line 97
        yield from $this->load("front/partials/_auth_modal.html.twig", 97)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/conversation.html.twig";
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
        return array (  316 => 97,  311 => 94,  309 => 93,  302 => 88,  298 => 86,  290 => 81,  286 => 80,  282 => 78,  275 => 76,  273 => 75,  266 => 73,  261 => 71,  257 => 70,  251 => 68,  248 => 67,  243 => 66,  236 => 62,  230 => 59,  226 => 57,  223 => 56,  221 => 55,  213 => 49,  206 => 47,  204 => 46,  199 => 45,  195 => 43,  189 => 41,  187 => 40,  182 => 39,  180 => 38,  176 => 37,  169 => 36,  166 => 35,  163 => 34,  160 => 33,  155 => 32,  147 => 26,  145 => 25,  141 => 23,  135 => 22,  124 => 19,  120 => 18,  117 => 17,  112 => 16,  108 => 15,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block title %}PULSE - Conversation{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Conversation',
    hero_sub: 'Discussion privee en temps reel.',
    breadcrumb_current: 'Conversation'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      {% for label, messages in app.flashes %}
        {% for message in messages %}
          <div class=\"listItem\">
            <span>{{ message }}</span>
            <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'warning' ? 'badge--warning' : (label == 'info' ? 'badge--info' : 'badge--success')) }}\">{{ label|upper }}</span>
          </div>
        {% endfor %}
      {% endfor %}

      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'conversation' } %}

        <div class=\"socialShell--chat\">
          <aside class=\"socialStack\">
            <section class=\"panel gadget\">
              <h3 class=\"panel__title\">CONVERSATIONS</h3>
              <div class=\"socialQuickList\">
                {% for conversation in conversations %}
                  {% set partner = conversation.partner %}
                  {% set partnerId = partner.userId ?? 0 %}
                  {% set active = selected_partner and selected_partner.userId == partnerId %}
                  <a class=\"listItem {{ active ? 'is-active' : '' }}\" href=\"{{ path('front_conversation', {id: partnerId}) }}\">
                    <span>{{ partner.displayName ?? partner.username }}</span>
                    {% if conversation.unread_count > 0 %}
                      <span class=\"badge\">{{ conversation.unread_count }}</span>
                    {% elseif conversation.latest_message %}
                      <span class=\"listItem__meta\">{{ conversation.latest_message.createdAt ? conversation.latest_message.createdAt|date('d/m H:i') : '' }}</span>
                    {% else %}
                      <span class=\"listItem__meta\">-</span>
                    {% endif %}
                  </a>
                {% else %}
                  <div class=\"emptyState\">Aucune conversation disponible.</div>
                {% endfor %}
              </div>
            </section>
          </aside>

          <div class=\"socialStack\">
            <section class=\"panel gadget\">
              {% if selected_partner %}
                {% set partnerId = selected_partner.userId ?? 0 %}
                <div class=\"panel__head\">
                  <div>
                    <h3 class=\"panel__title\">CHAT AVEC {{ selected_partner.displayName ?? selected_partner.username }}</h3>
                    <div class=\"panel__desc\">Messages les plus recents</div>
                  </div>
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_player_profile', {id: partnerId}) }}\">Voir profil</a>
                </div>

                <div class=\"list\" style=\"max-height: 420px; overflow:auto;\">
                  {% for message in messages %}
                    {% set mine = viewer_user and message.senderUserId and message.senderUserId.userId == viewer_user.userId %}
                    <div class=\"listItem {{ mine ? 'is-mine' : '' }}\">
                      <span>
                        <b>{{ mine ? 'Moi' : (message.senderUserId ? (message.senderUserId.displayName ?? message.senderUserId.username) : 'User') }}:</b>
                        {{ message.bodyText }}
                      </span>
                      <span class=\"listItem__meta\">{{ message.createdAt ? message.createdAt|date('d/m H:i') : '' }}</span>
                    </div>
                  {% else %}
                    <div class=\"emptyState\">Aucun message.</div>
                  {% endfor %}
                </div>

                <form method=\"post\" action=\"{{ path('front_conversation', {id: partnerId}) }}\" style=\"margin-top:10px; display:flex; gap:8px; align-items:flex-start;\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('conversation_send') }}\">
                  <textarea class=\"textarea\" name=\"body_text\" placeholder=\"Ecrire un message...\" style=\"min-height: 70px; flex:1;\" required></textarea>
                  <button class=\"btn btn--primary\" type=\"submit\">Envoyer</button>
                </form>
              {% else %}
                <div class=\"emptyState\">Aucun destinataire selectionne.</div>
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
", "front/pages/conversation.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\conversation.html.twig");
    }
}
