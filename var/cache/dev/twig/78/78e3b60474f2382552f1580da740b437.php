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
class __TwigTemplate_3ecfcc9857d337a7a33f0c46614ffd47 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["active" => "invite", "active_team" =>         // line 27
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 27, $this->source); })())]));
        // line 29
        yield "
        <div>
          ";
        // line 31
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 32
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 32, $this->source); })()), "active_team" =>         // line 33
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 33, $this->source); })()), "selector_route" => "front_captain_invite"]));
        // line 36
        yield "
          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">MESSAGERIE SECURISEE</h3>
                <div class=\"panel__desc\">Modération intelligente des messages d'invitation et de conversation.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\"><span>Analyse automatique</span><span class=\"listItem__meta\">Detection spam + toxicite par score/signaux.</span></div>
              <div class=\"listItem\"><span>Categories risque</span><span class=\"listItem__meta\">scam_recruitment, harassment, aggressive_tone.</span></div>
              <div class=\"listItem\"><span>Decision metier</span><span class=\"listItem__meta\">Autorisation, avertissement ou blocage selon le niveau de risque.</span></div>
            </div>
          </section>

          <form class=\"panel\" method=\"get\" action=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_invite");
        yield "\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 53, $this->source); })()), "teamId", [], "any", false, false, false, 53), "html", null, true);
        yield "\">
              <input class=\"input\" type=\"search\" name=\"q\" value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_query"]) || array_key_exists("search_query", $context) ? $context["search_query"] : (function () { throw new RuntimeError('Variable "search_query" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Rechercher par username ou nom\">
              <button class=\"btn btn--primary\" type=\"submit\">Rechercher</button>
            </div>
          </form>

          <section class=\"panel\">
            <h3 class=\"panel__title\">RESULTATS RECHERCHE</h3>
            ";
        // line 61
        if ((($tmp = (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "              <div class=\"panel__desc\" style=\"margin-top:6px;\">Validation reCAPTCHA requise avant envoi d'une invitation.</div>
              <div style=\"margin-top:10px;\">
                <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 64, $this->source); })()), "html", null, true);
            yield "\" data-callback=\"onCaptainInviteCaptcha\" data-expired-callback=\"onCaptainInviteCaptchaExpired\"></div>
              </div>
            ";
        }
        // line 67
        yield "            <div class=\"tableWrap\" style=\"margin-top:10px;\">
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
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["search_results"]) || array_key_exists("search_results", $context) ? $context["search_results"] : (function () { throw new RuntimeError('Variable "search_results" does not exist.', 78, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 79
            yield "                    <tr>
                      <td>";
            // line 80
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "displayName", [], "any", false, false, false, 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "displayName", [], "any", false, false, false, 80), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "username", [], "any", false, false, false, 80), "html", null, true)));
            yield " <span class=\"muted\">@";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "username", [], "any", false, false, false, 80), "html", null, true);
            yield "</span></td>
                      <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "role", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                      <td>";
            // line 82
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "country", [], "any", false, false, false, 82)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "country", [], "any", false, false, false, 82), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        ";
            // line 84
            $context["aiSuggestion"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ai_invite_suggestions"] ?? null), (CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "userId", [], "any", false, false, false, 84) . ""), [], "array", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_invite_suggestions"]) || array_key_exists("ai_invite_suggestions", $context) ? $context["ai_invite_suggestions"] : (function () { throw new RuntimeError('Variable "ai_invite_suggestions" does not exist.', 84, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "userId", [], "any", false, false, false, 84) . ""), [], "array", false, false, false, 84), "")) : (""));
            // line 85
            yield "                        <div style=\"display:flex; flex-direction:column; gap:8px;\">
                          <form method=\"post\" action=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_invite_generate_message");
            yield "\" style=\"display:flex; gap:8px; align-items:center;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("captain_invite_generate_message"), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"team_id\" value=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 88, $this->source); })()), "teamId", [], "any", false, false, false, 88), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"invited_user_id\" value=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "userId", [], "any", false, false, false, 89), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"q\" value=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_query"]) || array_key_exists("search_query", $context) ? $context["search_query"] : (function () { throw new RuntimeError('Variable "search_query" does not exist.', 90, $this->source); })()), "html", null, true);
            yield "\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Generer message IA</button>
                          </form>

                          <form method=\"post\" action=\"";
            // line 94
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_invite_send");
            yield "\" style=\"display:flex; gap:8px; align-items:center; flex-wrap:wrap;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("captain_invite_send"), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"team_id\" value=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 96, $this->source); })()), "teamId", [], "any", false, false, false, 96), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"invited_user_id\" value=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "userId", [], "any", false, false, false, 97), "html", null, true);
            yield "\">
                            ";
            // line 98
            if ((($tmp = (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 98, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 99
                yield "                              <input type=\"hidden\" name=\"g-recaptcha-response\" value=\"\">
                            ";
            }
            // line 101
            yield "                            <input class=\"input\" type=\"text\" name=\"message\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiSuggestion"]) || array_key_exists("aiSuggestion", $context) ? $context["aiSuggestion"] : (function () { throw new RuntimeError('Variable "aiSuggestion" does not exist.', 101, $this->source); })()), "html", null, true);
            yield "\" placeholder=\"Message optionnel (auto IA si vide)\" maxlength=\"255\" style=\"max-width:320px;\">
                            <button class=\"btn btn--primary\" type=\"submit\">Inviter</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 107
        if (!$context['_iterated']) {
            // line 108
            yield "                    <tr>
                      <td colspan=\"4\">
                        ";
            // line 110
            if ((($tmp = (isset($context["search_query"]) || array_key_exists("search_query", $context) ? $context["search_query"] : (function () { throw new RuntimeError('Variable "search_query" does not exist.', 110, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 111
                yield "                          Aucun joueur disponible pour cette recherche.
                        ";
            } else {
                // line 113
                yield "                          Lancez une recherche pour inviter un joueur.
                        ";
            }
            // line 115
            yield "                      </td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidate'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
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
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latest_invites"]) || array_key_exists("latest_invites", $context) ? $context["latest_invites"] : (function () { throw new RuntimeError('Variable "latest_invites" does not exist.', 136, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invite"]) {
            // line 137
            yield "                    ";
            $context["invitedUser"] = CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "invitedUserId", [], "any", false, false, false, 137);
            // line 138
            yield "                    <tr>
                      <td>";
            // line 139
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedUser"]) || array_key_exists("invitedUser", $context) ? $context["invitedUser"] : (function () { throw new RuntimeError('Variable "invitedUser" does not exist.', 139, $this->source); })()), "displayName", [], "any", false, false, false, 139)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedUser"]) || array_key_exists("invitedUser", $context) ? $context["invitedUser"] : (function () { throw new RuntimeError('Variable "invitedUser" does not exist.', 139, $this->source); })()), "displayName", [], "any", false, false, false, 139), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitedUser"]) || array_key_exists("invitedUser", $context) ? $context["invitedUser"] : (function () { throw new RuntimeError('Variable "invitedUser" does not exist.', 139, $this->source); })()), "username", [], "any", false, false, false, 139), "html", null, true)));
            yield "</td>
                      <td>";
            // line 140
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "message", [], "any", false, false, false, 140)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "message", [], "any", false, false, false, 140), "html", null, true)) : ("-"));
            yield "</td>
                      <td>";
            // line 141
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "createdAt", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "createdAt", [], "any", false, false, false, 141), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        ";
            // line 143
            $context["status"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "status", [], "any", false, false, false, 143)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["invite"], "status", [], "any", false, false, false, 143)) : ("PENDING"));
            // line 144
            yield "                        <span class=\"badge ";
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 144, $this->source); })()) == "ACCEPTED")) ? ("badge--success") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 144, $this->source); })()) == "REFUSED")) ? ("badge--danger") : (((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 144, $this->source); })()) == "PENDING")) ? ("badge--info") : (""))))));
            yield "\">
                          ";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 145, $this->source); })()), "html", null, true);
            yield "
                        </span>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 149
        if (!$context['_iterated']) {
            // line 150
            yield "                    <tr>
                      <td colspan=\"4\">Aucune invitation pour le moment.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['invite'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 161
        yield from $this->load("front/partials/_footer.html.twig", 161)->unwrap()->yield($context);
        // line 162
        yield "    </section>
  </main>

  ";
        // line 165
        yield from $this->load("front/partials/_auth_modal.html.twig", 165)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 169
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  ";
        // line 170
        if ((($tmp = (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 170, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 171
            yield "    <script>
      function onCaptainInviteCaptcha(token) {
        document.querySelectorAll('input[name=\"g-recaptcha-response\"]').forEach(function (field) {
          field.value = token;
        });
      }

      function onCaptainInviteCaptchaExpired() {
        document.querySelectorAll('input[name=\"g-recaptcha-response\"]').forEach(function (field) {
          field.value = '';
        });
      }
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?hl=fr\" async defer></script>
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
        return array (  445 => 171,  443 => 170,  438 => 169,  425 => 168,  414 => 165,  409 => 162,  407 => 161,  398 => 154,  389 => 150,  387 => 149,  378 => 145,  373 => 144,  371 => 143,  366 => 141,  362 => 140,  358 => 139,  355 => 138,  352 => 137,  347 => 136,  327 => 118,  319 => 115,  315 => 113,  311 => 111,  309 => 110,  305 => 108,  303 => 107,  291 => 101,  287 => 99,  285 => 98,  281 => 97,  277 => 96,  273 => 95,  269 => 94,  262 => 90,  258 => 89,  254 => 88,  250 => 87,  246 => 86,  243 => 85,  241 => 84,  236 => 82,  232 => 81,  226 => 80,  223 => 79,  218 => 78,  205 => 67,  199 => 64,  195 => 62,  193 => 61,  183 => 54,  179 => 53,  174 => 51,  157 => 36,  155 => 33,  154 => 32,  153 => 31,  149 => 29,  147 => 27,  146 => 25,  142 => 23,  136 => 22,  125 => 19,  121 => 18,  118 => 17,  113 => 16,  109 => 15,  104 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
      {% for label, messages in app.flashes %}
        {% for message in messages %}
          <div class=\"listItem\">
            <span>{{ message }}</span>
            <span class=\"badge {{ label == 'error' ? 'badge--danger' : (label == 'warning' ? 'badge--warning' : (label == 'info' ? 'badge--info' : 'badge--success')) }}\">{{ label|upper }}</span>
          </div>
        {% endfor %}
      {% endfor %}

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

          <section class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">MESSAGERIE SECURISEE</h3>
                <div class=\"panel__desc\">Modération intelligente des messages d'invitation et de conversation.</div>
              </div>
            </div>
            <div class=\"list\">
              <div class=\"listItem\"><span>Analyse automatique</span><span class=\"listItem__meta\">Detection spam + toxicite par score/signaux.</span></div>
              <div class=\"listItem\"><span>Categories risque</span><span class=\"listItem__meta\">scam_recruitment, harassment, aggressive_tone.</span></div>
              <div class=\"listItem\"><span>Decision metier</span><span class=\"listItem__meta\">Autorisation, avertissement ou blocage selon le niveau de risque.</span></div>
            </div>
          </section>

          <form class=\"panel\" method=\"get\" action=\"{{ path('front_captain_invite') }}\">
            <div class=\"filtersRow\">
              <input type=\"hidden\" name=\"team\" value=\"{{ active_team.teamId }}\">
              <input class=\"input\" type=\"search\" name=\"q\" value=\"{{ search_query }}\" placeholder=\"Rechercher par username ou nom\">
              <button class=\"btn btn--primary\" type=\"submit\">Rechercher</button>
            </div>
          </form>

          <section class=\"panel\">
            <h3 class=\"panel__title\">RESULTATS RECHERCHE</h3>
            {% if recaptcha_site_key %}
              <div class=\"panel__desc\" style=\"margin-top:6px;\">Validation reCAPTCHA requise avant envoi d'une invitation.</div>
              <div style=\"margin-top:10px;\">
                <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha_site_key }}\" data-callback=\"onCaptainInviteCaptcha\" data-expired-callback=\"onCaptainInviteCaptchaExpired\"></div>
              </div>
            {% endif %}
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
                        {% set aiSuggestion = ai_invite_suggestions[candidate.userId ~ '']|default('') %}
                        <div style=\"display:flex; flex-direction:column; gap:8px;\">
                          <form method=\"post\" action=\"{{ path('front_captain_invite_generate_message') }}\" style=\"display:flex; gap:8px; align-items:center;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_invite_generate_message') }}\">
                            <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
                            <input type=\"hidden\" name=\"invited_user_id\" value=\"{{ candidate.userId }}\">
                            <input type=\"hidden\" name=\"q\" value=\"{{ search_query }}\">
                            <button class=\"btn btn--ghost\" type=\"submit\">Generer message IA</button>
                          </form>

                          <form method=\"post\" action=\"{{ path('front_captain_invite_send') }}\" style=\"display:flex; gap:8px; align-items:center; flex-wrap:wrap;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_invite_send') }}\">
                            <input type=\"hidden\" name=\"team_id\" value=\"{{ active_team.teamId }}\">
                            <input type=\"hidden\" name=\"invited_user_id\" value=\"{{ candidate.userId }}\">
                            {% if recaptcha_site_key %}
                              <input type=\"hidden\" name=\"g-recaptcha-response\" value=\"\">
                            {% endif %}
                            <input class=\"input\" type=\"text\" name=\"message\" value=\"{{ aiSuggestion }}\" placeholder=\"Message optionnel (auto IA si vide)\" maxlength=\"255\" style=\"max-width:320px;\">
                            <button class=\"btn btn--primary\" type=\"submit\">Inviter</button>
                          </form>
                        </div>
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
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  {% if recaptcha_site_key %}
    <script>
      function onCaptainInviteCaptcha(token) {
        document.querySelectorAll('input[name=\"g-recaptcha-response\"]').forEach(function (field) {
          field.value = token;
        });
      }

      function onCaptainInviteCaptchaExpired() {
        document.querySelectorAll('input[name=\"g-recaptcha-response\"]').forEach(function (field) {
          field.value = '';
        });
      }
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?hl=fr\" async defer></script>
  {% endif %}
{% endblock %}

", "front/pages/captain-invite.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\captain-invite.html.twig");
    }
}
