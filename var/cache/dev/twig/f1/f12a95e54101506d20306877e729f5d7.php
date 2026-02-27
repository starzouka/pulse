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

/* front/pages/captain-invite.html.twig */
class __TwigTemplate_ee28ec49d00175498ceb514390f37dc3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-invite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-invite.html.twig"));

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

        yield "PULSE - Inviter joueurs";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Inviter", "hero_sub" => "Recherche de joueurs et envoi des invitations.", "breadcrumb_current" => "Inviter"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "invite", "active_team" =>         // line 18
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 18, $this->source); })())]));
        // line 20
        yield "
        <div>
          ";
        // line 22
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 23
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 23, $this->source); })()), "active_team" =>         // line 24
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 24, $this->source); })()), "selector_route" => "front_captain_invite"]));
        // line 27
        yield "
          <form class=\"panel\" method=\"get\" action=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_invite");
        yield "\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 30, $this->source); })()), "teamId", [], "any", false, false, false, 30), "html", null, true);
        yield "\">
              <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_query"]) || array_key_exists("search_query", $context) ? $context["search_query"] : (function () { throw new RuntimeError('Variable "search_query" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Rechercher par username ou nom\">
              <button class=\"btn btn--primary\" type=\"submit\">Rechercher</button>
            </div>
          </form>

          ";
        // line 36
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 36, $this->source); })()))) {
            // line 37
            yield "            <div class=\"listItem\">
              <span>reCAPTCHA n'est pas configuree. Ajoutez vos cles Google dans <code>.env.local</code>.</span>
              <span class=\"badge badge--warning\">CONFIG</span>
            </div>
          ";
        }
        // line 42
        yield "
          <section class=\"panel\">
            <h3 class=\"panel__title\">RESULTATS RECHERCHE</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Role</th>
                    <th>Pays</th>
                    <th>Invitation</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["search_results"]) || array_key_exists("search_results", $context) ? $context["search_results"] : (function () { throw new RuntimeError('Variable "search_results" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 57
            yield "                    <tr>
                      <td>";
            // line 58
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "displayName", [], "any", false, false, false, 58)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "displayName", [], "any", false, false, false, 58), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "username", [], "any", false, false, false, 58), "html", null, true)));
            yield " <span class=\"muted\">@";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "username", [], "any", false, false, false, 58), "html", null, true);
            yield "</span></td>
                      <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "role", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                      <td>";
            // line 60
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "country", [], "any", false, false, false, 60)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "country", [], "any", false, false, false, 60), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        <form method=\"post\" action=\"";
            // line 62
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_invite_send");
            yield "\" data-invite-form=\"1\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("captain_invite_send"), "html", null, true);
            yield "\">
                          <input type=\"hidden\" name=\"team_id\" value=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 64, $this->source); })()), "teamId", [], "any", false, false, false, 64), "html", null, true);
            yield "\">
                          <input type=\"hidden\" name=\"invited_user_id\" value=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "userId", [], "any", false, false, false, 65), "html", null, true);
            yield "\">
                          <input type=\"hidden\" name=\"g_recaptcha_token\" value=\"\">
                          <input class=\"input\" type=\"text\" name=\"message\" placeholder=\"Message optionnel\" maxlength=\"255\" style=\"max-width:220px;\">
                          ";
            // line 68
            if ((($tmp = (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 68, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "                            <div class=\"js-recaptcha-container\" style=\"display:none; margin-top:8px;\"></div>
                            <div class=\"muted js-recaptcha-status\" style=\"display:none; margin-top:6px;\"></div>
                            <button
                              class=\"btn btn--ghost js-invite-recaptcha-btn\"
                              type=\"button\"
                              data-sitekey=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 74, $this->source); })()), "html", null, true);
                yield "\"
                              data-default-label=\"Inviter\"
                            >
                              Inviter
                            </button>
                          ";
            } else {
                // line 80
                yield "                            <button class=\"btn btn--ghost\" type=\"submit\">Inviter</button>
                          ";
            }
            // line 82
            yield "                        </form>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 85
        if (!$context['_iterated']) {
            // line 86
            yield "                    <tr>
                      <td colspan=\"4\">
                        ";
            // line 88
            if ((($tmp = (isset($context["search_query"]) || array_key_exists("search_query", $context) ? $context["search_query"] : (function () { throw new RuntimeError('Variable "search_query" does not exist.', 88, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 89
                yield "                          Aucun joueur disponible pour cette recherche.
                        ";
            } else {
                // line 91
                yield "                          Lancez une recherche pour inviter un joueur.
                        ";
            }
            // line 93
            yield "                      </td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidate'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                </tbody>
              </table>
            </div>
          </section>

          <section class=\"panel\">
            <h3 class=\"panel__title\">HISTORIQUE INVITATIONS</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur invite</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Statut</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latest_invites"]) || array_key_exists("latest_invites", $context) ? $context["latest_invites"] : (function () { throw new RuntimeError('Variable "latest_invites" does not exist.', 114, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invite"]) {
            // line 115
            yield "                    ";
            $context["invitedUser"] = CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "invitedUserId", [], "any", false, false, false, 115);
            // line 116
            yield "                    <tr>
                      <td>";
            // line 117
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedUser"]) || array_key_exists("invitedUser", $context) ? $context["invitedUser"] : (function () { throw new RuntimeError('Variable "invitedUser" does not exist.', 117, $this->source); })()), "displayName", [], "any", false, false, false, 117)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedUser"]) || array_key_exists("invitedUser", $context) ? $context["invitedUser"] : (function () { throw new RuntimeError('Variable "invitedUser" does not exist.', 117, $this->source); })()), "displayName", [], "any", false, false, false, 117), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedUser"]) || array_key_exists("invitedUser", $context) ? $context["invitedUser"] : (function () { throw new RuntimeError('Variable "invitedUser" does not exist.', 117, $this->source); })()), "username", [], "any", false, false, false, 117), "html", null, true)));
            yield "</td>
                      <td>";
            // line 118
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "message", [], "any", false, false, false, 118)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "message", [], "any", false, false, false, 118), "html", null, true)) : ("-"));
            yield "</td>
                      <td>";
            // line 119
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "createdAt", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "createdAt", [], "any", false, false, false, 119), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        ";
            // line 121
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "status", [], "any", false, false, false, 121)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "status", [], "any", false, false, false, 121)) : ("PENDING"));
            // line 122
            yield "                        <span class=\"badge ";
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 122, $this->source); })()) == "ACCEPTED")) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 122, $this->source); })()) == "REFUSED")) ? ("badge--danger") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 122, $this->source); })()) == "PENDING")) ? ("badge--info") : (""))))));
            yield "\">
                          ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 123, $this->source); })()), "html", null, true);
            yield "
                        </span>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 127
        if (!$context['_iterated']) {
            // line 128
            yield "                    <tr>
                      <td colspan=\"4\">Aucune invitation pour le moment.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['invite'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 139
        yield from $this->load("front/partials/_footer.html.twig", 139)->unwrap()->yield($context);
        // line 140
        yield "    </section>
  </main>

  ";
        // line 143
        yield from $this->load("front/partials/_auth_modal.html.twig", 143)->unwrap()->yield($context);
        // line 144
        yield "
  ";
        // line 145
        if ((($tmp = (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 145, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 146
            yield "    <script src=\"https://www.google.com/recaptcha/api.js?render=explicit\" async defer></script>
    <script>
      (function () {
        const formSelector = 'form[data-invite-form=\"1\"]';

        const setStatus = function (form, text) {
          const statusNode = form.querySelector('.js-recaptcha-status');
          if (!statusNode) {
            return;
          }

          statusNode.textContent = text;
          statusNode.style.display = text ? 'block' : 'none';
        };

        const renderWidget = function (form, button) {
          const container = form.querySelector('.js-recaptcha-container');
          if (!container) {
            return null;
          }

          container.style.display = 'block';

          const existingWidgetId = container.getAttribute('data-widget-id');
          if (existingWidgetId !== null) {
            return Number(existingWidgetId);
          }

          if (typeof grecaptcha === 'undefined' || typeof grecaptcha.render !== 'function') {
            setStatus(form, 'reCAPTCHA est en cours de chargement. Reessayez dans 1 seconde.');
            return null;
          }

          const tokenInput = form.querySelector('input[name=\"g_recaptcha_token\"]');
          const defaultLabel = button.getAttribute('data-default-label') || 'Inviter';
          const siteKey = button.getAttribute('data-sitekey') || '';

          const widgetId = grecaptcha.render(container, {
            sitekey: siteKey,
            callback: function (token) {
              if (tokenInput) {
                tokenInput.value = token;
              }
              setStatus(form, '');
              form.submit();
            },
            'expired-callback': function () {
              if (tokenInput) {
                tokenInput.value = '';
              }
              button.disabled = false;
              button.textContent = defaultLabel;
              setStatus(form, 'Le captcha a expire. Validez-le de nouveau.');
            },
            'error-callback': function () {
              if (tokenInput) {
                tokenInput.value = '';
              }
              button.disabled = false;
              button.textContent = defaultLabel;
              setStatus(form, 'Erreur reCAPTCHA. Reessayez.');
            }
          });

          container.setAttribute('data-widget-id', String(widgetId));

          return widgetId;
        };

        const bindButtons = function () {
          const buttons = document.querySelectorAll('.js-invite-recaptcha-btn');
          buttons.forEach(function (button) {
            if (button.dataset.bound === '1') {
              return;
            }
            button.dataset.bound = '1';

            button.addEventListener('click', function () {
              const form = button.closest(formSelector);
              if (!form) {
                return;
              }

              const tokenInput = form.querySelector('input[name=\"g_recaptcha_token\"]');
              if (tokenInput) {
                tokenInput.value = '';
              }

              const widgetId = renderWidget(form, button);
              if (widgetId === null) {
                return;
              }

              button.disabled = true;
              button.textContent = 'Confirmez reCAPTCHA';
              setStatus(form, 'Cochez la case reCAPTCHA pour confirmer.');
            });
          });
        };

        if (document.readyState === 'loading') {
          document.addEventListener('DOMContentLoaded', bindButtons);
        } else {
          bindButtons();
        }
      })();
    </script>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/captain-invite.html.twig";
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
        return array (  353 => 146,  351 => 145,  348 => 144,  346 => 143,  341 => 140,  339 => 139,  330 => 132,  321 => 128,  319 => 127,  310 => 123,  305 => 122,  303 => 121,  298 => 119,  294 => 118,  290 => 117,  287 => 116,  284 => 115,  279 => 114,  259 => 96,  251 => 93,  247 => 91,  243 => 89,  241 => 88,  237 => 86,  235 => 85,  228 => 82,  224 => 80,  215 => 74,  208 => 69,  206 => 68,  200 => 65,  196 => 64,  192 => 63,  188 => 62,  183 => 60,  179 => 59,  173 => 58,  170 => 57,  165 => 56,  149 => 42,  142 => 37,  140 => 36,  132 => 31,  128 => 30,  123 => 28,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Inviter joueurs{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'CAPITAINE',
    hero_title: 'Inviter',
    hero_sub: 'Recherche de joueurs et envoi des invitations.',
    breadcrumb_current: 'Inviter'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_captain_side_nav.html.twig' with {
          active: 'invite',
          active_team: active_team
        } %}

        <div>
          {% include 'front/partials/_captain_team_selector.html.twig' with {
            captain_teams: captain_teams,
            active_team: active_team,
            selector_route: 'front_captain_invite'
          } %}

          <form class=\"panel\" method=\"get\" action=\"{{ path('front_captain_invite') }}\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"{{ active_team.teamId }}\">
              <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ search_query }}\" placeholder=\"Rechercher par username ou nom\">
              <button class=\"btn btn--primary\" type=\"submit\">Rechercher</button>
            </div>
          </form>

          {% if recaptcha_site_key is empty %}
            <div class=\"listItem\">
              <span>reCAPTCHA n'est pas configuree. Ajoutez vos cles Google dans <code>.env.local</code>.</span>
              <span class=\"badge badge--warning\">CONFIG</span>
            </div>
          {% endif %}

          <section class=\"panel\">
            <h3 class=\"panel__title\">RESULTATS RECHERCHE</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur</th>
                    <th>Role</th>
                    <th>Pays</th>
                    <th>Invitation</th>
                  </tr>
                </thead>
                <tbody>
                  {% for candidate in search_results %}
                    <tr>
                      <td>{{ candidate.displayName ?: candidate.username }} <span class=\"muted\">@{{ candidate.username }}</span></td>
                      <td>{{ candidate.role }}</td>
                      <td>{{ candidate.country ?: '-' }}</td>
                      <td>
                        <form method=\"post\" action=\"{{ path('front_captain_invite_send') }}\" data-invite-form=\"1\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_invite_send') }}\">
                          <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
                          <input type=\"hidden\" name=\"invited_user_id\" value=\"{{ candidate.userId }}\">
                          <input type=\"hidden\" name=\"g_recaptcha_token\" value=\"\">
                          <input class=\"input\" type=\"text\" name=\"message\" placeholder=\"Message optionnel\" maxlength=\"255\" style=\"max-width:220px;\">
                          {% if recaptcha_site_key %}
                            <div class=\"js-recaptcha-container\" style=\"display:none; margin-top:8px;\"></div>
                            <div class=\"muted js-recaptcha-status\" style=\"display:none; margin-top:6px;\"></div>
                            <button
                              class=\"btn btn--ghost js-invite-recaptcha-btn\"
                              type=\"button\"
                              data-sitekey=\"{{ recaptcha_site_key }}\"
                              data-default-label=\"Inviter\"
                            >
                              Inviter
                            </button>
                          {% else %}
                            <button class=\"btn btn--ghost\" type=\"submit\">Inviter</button>
                          {% endif %}
                        </form>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"4\">
                        {% if search_query %}
                          Aucun joueur disponible pour cette recherche.
                        {% else %}
                          Lancez une recherche pour inviter un joueur.
                        {% endif %}
                      </td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </section>

          <section class=\"panel\">
            <h3 class=\"panel__title\">HISTORIQUE INVITATIONS</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Joueur invite</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Statut</th>
                  </tr>
                </thead>
                <tbody>
                  {% for invite in latest_invites %}
                    {% set invitedUser = invite.invitedUserId %}
                    <tr>
                      <td>{{ invitedUser.displayName ?: invitedUser.username }}</td>
                      <td>{{ invite.message ?: '-' }}</td>
                      <td>{{ invite.createdAt ? invite.createdAt|date('d/m/Y H:i') : '-' }}</td>
                      <td>
                        {% set status = invite.status ?: 'PENDING' %}
                        <span class=\"badge {{ status == 'ACCEPTED' ? 'badge--success' : (status == 'REFUSED' ? 'badge--danger' : (status == 'PENDING' ? 'badge--info' : '')) }}\">
                          {{ status }}
                        </span>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"4\">Aucune invitation pour le moment.</td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}

  {% if recaptcha_site_key %}
    <script src=\"https://www.google.com/recaptcha/api.js?render=explicit\" async defer></script>
    <script>
      (function () {
        const formSelector = 'form[data-invite-form=\"1\"]';

        const setStatus = function (form, text) {
          const statusNode = form.querySelector('.js-recaptcha-status');
          if (!statusNode) {
            return;
          }

          statusNode.textContent = text;
          statusNode.style.display = text ? 'block' : 'none';
        };

        const renderWidget = function (form, button) {
          const container = form.querySelector('.js-recaptcha-container');
          if (!container) {
            return null;
          }

          container.style.display = 'block';

          const existingWidgetId = container.getAttribute('data-widget-id');
          if (existingWidgetId !== null) {
            return Number(existingWidgetId);
          }

          if (typeof grecaptcha === 'undefined' || typeof grecaptcha.render !== 'function') {
            setStatus(form, 'reCAPTCHA est en cours de chargement. Reessayez dans 1 seconde.');
            return null;
          }

          const tokenInput = form.querySelector('input[name=\"g_recaptcha_token\"]');
          const defaultLabel = button.getAttribute('data-default-label') || 'Inviter';
          const siteKey = button.getAttribute('data-sitekey') || '';

          const widgetId = grecaptcha.render(container, {
            sitekey: siteKey,
            callback: function (token) {
              if (tokenInput) {
                tokenInput.value = token;
              }
              setStatus(form, '');
              form.submit();
            },
            'expired-callback': function () {
              if (tokenInput) {
                tokenInput.value = '';
              }
              button.disabled = false;
              button.textContent = defaultLabel;
              setStatus(form, 'Le captcha a expire. Validez-le de nouveau.');
            },
            'error-callback': function () {
              if (tokenInput) {
                tokenInput.value = '';
              }
              button.disabled = false;
              button.textContent = defaultLabel;
              setStatus(form, 'Erreur reCAPTCHA. Reessayez.');
            }
          });

          container.setAttribute('data-widget-id', String(widgetId));

          return widgetId;
        };

        const bindButtons = function () {
          const buttons = document.querySelectorAll('.js-invite-recaptcha-btn');
          buttons.forEach(function (button) {
            if (button.dataset.bound === '1') {
              return;
            }
            button.dataset.bound = '1';

            button.addEventListener('click', function () {
              const form = button.closest(formSelector);
              if (!form) {
                return;
              }

              const tokenInput = form.querySelector('input[name=\"g_recaptcha_token\"]');
              if (tokenInput) {
                tokenInput.value = '';
              }

              const widgetId = renderWidget(form, button);
              if (widgetId === null) {
                return;
              }

              button.disabled = true;
              button.textContent = 'Confirmez reCAPTCHA';
              setStatus(form, 'Cochez la case reCAPTCHA pour confirmer.');
            });
          });
        };

        if (document.readyState === 'loading') {
          document.addEventListener('DOMContentLoaded', bindButtons);
        } else {
          bindButtons();
        }
      })();
    </script>
  {% endif %}
{% endblock %}

", "front/pages/captain-invite.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\captain-invite.html.twig");
    }
}
