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

/* front/pages/captain-team-manage.html.twig */
class __TwigTemplate_111d920d6737529bcd5df3f4c6a5080d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-team-manage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/captain-team-manage.html.twig"));

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

        yield "PULSE - Mon equipe";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Mon equipe", "hero_sub" => "Creation et modification dans une seule page.", "breadcrumb_current" => "Mon equipe"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "team", "active_team" =>         // line 18
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 18, $this->source); })())]));
        // line 20
        yield "
        <div>
          ";
        // line 22
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 23
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 23, $this->source); })()), "active_team" =>         // line 24
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 24, $this->source); })()), "selector_route" => "front_captain_team_manage"]));
        // line 27
        yield "
          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">MODE ACTUEL</h3>
                <div class=\"panel__desc\">
                  ";
        // line 33
        if (((isset($context["team_form_mode"]) || array_key_exists("team_form_mode", $context) ? $context["team_form_mode"] : (function () { throw new RuntimeError('Variable "team_form_mode" does not exist.', 33, $this->source); })()) == "create")) {
            // line 34
            yield "                    Creation d'une nouvelle equipe.
                  ";
        } else {
            // line 36
            yield "                    Modification de l'equipe active.
                  ";
        }
        // line 38
        yield "                </div>
              </div>
              <div class=\"panel__actions\">
                <a class=\"btn btn--ghost\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage", ["mode" => "create"]);
        yield "\">Nouvelle equipe</a>
                ";
        // line 42
        if ((($tmp = (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 42, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "                  <a class=\"btn btn--ghost\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage", ["team" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 43, $this->source); })()), "teamId", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\">Modifier active</a>
                ";
        }
        // line 45
        yield "              </div>
            </div>
          </div>

          ";
        // line 49
        if ((($tmp = (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "            ";
            $context["teamLogoPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 50, $this->source); })()), "logoImageId", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 50, $this->source); })()), "logoImageId", [], "any", false, false, false, 50), "fileUrl", [], "any", false, false, false, 50)) : (""));
            // line 51
            yield "            ";
            $context["teamLogoUrl"] = (((($tmp = (isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 51, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 51, $this->source); })())) : ($this->env->getRuntime('Liip\ImagineBundle\Templating\LazyFilterRuntime')->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 51, $this->source); })())), "team_logo_thumb")))) : ((("https://picsum.photos/seed/captain_team_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 51, $this->source); })()), "teamId", [], "any", false, false, false, 51)) . "/320/320")));
            // line 52
            yield "            <section class=\"panel\">
              <div class=\"profileHeader\">
                <div class=\"avatarLg\" data-avatar=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamLogoUrl"]) || array_key_exists("teamLogoUrl", $context) ? $context["teamLogoUrl"] : (function () { throw new RuntimeError('Variable "teamLogoUrl" does not exist.', 54, $this->source); })()), "html", null, true);
            yield "\"></div>
                <div>
                  <h3 style=\"margin:0;\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "html", null, true);
            yield "</h3>
                  <div class=\"muted\">";
            // line 57
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 57, $this->source); })()), "region", [], "any", false, false, false, 57)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 57, $this->source); })()), "region", [], "any", false, false, false, 57), "html", null, true)) : ("Region non definie"));
            yield "</div>
                </div>
              </div>

              <div class=\"statsRow\" style=\"margin-top:12px;\">
                <div class=\"statCard\">
                  <div class=\"statCard__value\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team_stats"]) || array_key_exists("team_stats", $context) ? $context["team_stats"] : (function () { throw new RuntimeError('Variable "team_stats" does not exist.', 63, $this->source); })()), "members", [], "any", false, false, false, 63), "html", null, true);
            yield "</div>
                  <div class=\"statCard__label\">Membres actifs</div>
                </div>
                <div class=\"statCard\">
                  <div class=\"statCard__value\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team_stats"]) || array_key_exists("team_stats", $context) ? $context["team_stats"] : (function () { throw new RuntimeError('Variable "team_stats" does not exist.', 67, $this->source); })()), "products", [], "any", false, false, false, 67), "html", null, true);
            yield "</div>
                  <div class=\"statCard__label\">Produits</div>
                </div>
                <div class=\"statCard\">
                  <div class=\"statCard__value\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team_stats"]) || array_key_exists("team_stats", $context) ? $context["team_stats"] : (function () { throw new RuntimeError('Variable "team_stats" does not exist.', 71, $this->source); })()), "tournaments", [], "any", false, false, false, 71), "html", null, true);
            yield "</div>
                  <div class=\"statCard__label\">Inscriptions tournoi</div>
                </div>
              </div>
            </section>
          ";
        }
        // line 77
        yield "
          ";
        // line 78
        if (((isset($context["team_form_mode"]) || array_key_exists("team_form_mode", $context) ? $context["team_form_mode"] : (function () { throw new RuntimeError('Variable "team_form_mode" does not exist.', 78, $this->source); })()) == "create")) {
            // line 79
            yield "            <form class=\"panel\" method=\"post\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage_create");
            yield "\" enctype=\"multipart/form-data\" data-team-manage-form>
              <h3 class=\"panel__title\">CREER UNE EQUIPE</h3>

              <div class=\"formGrid\" style=\"margin-top:12px;\">
                <label class=\"field\">
                  <span class=\"field__label\">Nom de l'equipe *</span>
                  <input class=\"input\" type=\"text\" name=\"name\" required maxlength=\"100\" data-team-name-input>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Region</span>
                  <div style=\"display:flex; gap:8px; align-items:center;\">
                    <input class=\"input\" type=\"text\" name=\"region\" maxlength=\"80\" data-team-region-input style=\"flex:1;\">
                    <button class=\"btn btn--ghost\" type=\"button\" data-geo-fill-region>Ma position</button>
                  </div>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Description</span>
                  <textarea class=\"textarea\" name=\"description\" rows=\"5\" data-team-description-input></textarea>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Style IA (optionnel)</span>
                  <input class=\"input\" type=\"text\" name=\"style_hint\" placeholder=\"ex: agressif, pro, tactique...\" data-team-style-input>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Slogan IA (aperçu)</span>
                  <input class=\"input\" type=\"text\" value=\"\" readonly data-team-slogan-output placeholder=\"Générer via IA\">
                  <div style=\"margin-top:8px; display:flex; gap:8px; align-items:center;\">
                    <button class=\"btn btn--soft\" type=\"button\" data-generate-team-branding data-branding-url=\"";
            // line 110
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage_ai_branding");
            yield "\" data-branding-csrf=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("captain_team_branding_ai"), "html", null, true);
            yield "\">Générer bio + slogan (IA)</button>
                    <span class=\"muted\" data-branding-source></span>
                  </div>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Logo equipe</span>
                  <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("captain_team_create"), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"g-recaptcha-response\" data-recaptcha-token>
                <button class=\"btn btn--primary\" type=\"submit\">Creer equipe</button>
              </div>
            </form>
          ";
        } elseif ((($tmp =         // line 127
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 127, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 128
            yield "            <form class=\"panel\" method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 128, $this->source); })()), "teamId", [], "any", false, false, false, 128)]), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-team-manage-form>
              <h3 class=\"panel__title\">MODIFIER L'EQUIPE ACTIVE</h3>

              <div class=\"formGrid\" style=\"margin-top:12px;\">
                <label class=\"field\">
                  <span class=\"field__label\">Nom de l'equipe *</span>
                  <input class=\"input\" type=\"text\" name=\"name\" value=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 134, $this->source); })()), "name", [], "any", false, false, false, 134), "html", null, true);
            yield "\" required maxlength=\"100\" data-team-name-input>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Region</span>
                  <div style=\"display:flex; gap:8px; align-items:center;\">
                    <input class=\"input\" type=\"text\" name=\"region\" value=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 140, $this->source); })()), "region", [], "any", false, false, false, 140), "html", null, true);
            yield "\" maxlength=\"80\" data-team-region-input style=\"flex:1;\">
                    <button class=\"btn btn--ghost\" type=\"button\" data-geo-fill-region>Ma position</button>
                  </div>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Description</span>
                  <textarea class=\"textarea\" name=\"description\" rows=\"5\" data-team-description-input>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 147, $this->source); })()), "description", [], "any", false, false, false, 147), "html", null, true);
            yield "</textarea>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Style IA (optionnel)</span>
                  <input class=\"input\" type=\"text\" name=\"style_hint\" placeholder=\"ex: agressif, pro, tactique...\" data-team-style-input>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Slogan IA (aperçu)</span>
                  <input class=\"input\" type=\"text\" value=\"\" readonly data-team-slogan-output placeholder=\"Générer via IA\">
                  <div style=\"margin-top:8px; display:flex; gap:8px; align-items:center;\">
                    <button class=\"btn btn--soft\" type=\"button\" data-generate-team-branding data-branding-url=\"";
            // line 159
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage_ai_branding");
            yield "\" data-branding-csrf=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("captain_team_branding_ai"), "html", null, true);
            yield "\">Générer bio + slogan (IA)</button>
                    <span class=\"muted\" data-branding-source></span>
                  </div>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Changer le logo</span>
                  <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("captain_team_update_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 171, $this->source); })()), "teamId", [], "any", false, false, false, 171))), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"g-recaptcha-response\" data-recaptcha-token>
                <button class=\"btn btn--primary\" type=\"submit\">Enregistrer</button>
              </div>
            </form>
          ";
        }
        // line 177
        yield "
          <section class=\"panel\">
            <h3 class=\"panel__title\">MES EQUIPES</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Equipe</th>
                    <th>Region</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 190, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 191
            yield "                    <tr>
                      <td>";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 192), "html", null, true);
            yield "</td>
                      <td>";
            // line 193
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 193)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 193), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        <a class=\"btn btn--ghost\" href=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage", ["team" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 195)]), "html", null, true);
            yield "\">Gerer</a>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 198
        if (!$context['_iterated']) {
            // line 199
            yield "                    <tr>
                      <td colspan=\"3\">Aucune equipe pour le moment.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        yield "                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 210
        yield from $this->load("front/partials/_footer.html.twig", 210)->unwrap()->yield($context);
        // line 211
        yield "    </section>
  </main>

  ";
        // line 214
        yield from $this->load("front/partials/_auth_modal.html.twig", 214)->unwrap()->yield($context);
        // line 215
        yield "  <script>
    (() => {
      const forms = document.querySelectorAll('[data-team-manage-form]');
      if (!forms.length) return;

      forms.forEach((form) => {
        const regionInput = form.querySelector('[data-team-region-input]');
        const nameInput = form.querySelector('[data-team-name-input]');
        const descriptionInput = form.querySelector('[data-team-description-input]');
        const styleInput = form.querySelector('[data-team-style-input]');
        const sloganOutput = form.querySelector('[data-team-slogan-output]');
        const brandingSource = form.querySelector('[data-branding-source]');

        const geoButton = form.querySelector('[data-geo-fill-region]');
        if (geoButton && regionInput) {
          geoButton.addEventListener('click', async () => {
            if (!navigator.geolocation) {
              alert('Géolocalisation non supportée par le navigateur.');
              return;
            }
            geoButton.disabled = true;
            geoButton.textContent = 'Localisation...';
            navigator.geolocation.getCurrentPosition(async (position) => {
              try {
                const url = new URL('";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_location_reverse_geocode");
        yield "', window.location.origin);
                url.searchParams.set('lat', String(position.coords.latitude));
                url.searchParams.set('lon', String(position.coords.longitude));
                const resp = await fetch(url.toString(), { headers: { 'Accept': 'application/json' } });
                const payload = await resp.json();
                if (payload && payload.ok && payload.data && payload.data.normalized_region) {
                  regionInput.value = payload.data.normalized_region;
                } else {
                  alert((payload && payload.message) || 'Localisation introuvable.');
                }
              } catch (e) {
                alert('Erreur API géolocalisation.');
              } finally {
                geoButton.disabled = false;
                geoButton.textContent = 'Ma position';
              }
            }, () => {
              geoButton.disabled = false;
              geoButton.textContent = 'Ma position';
              alert('Accès à la position refusé.');
            }, { enableHighAccuracy: true, timeout: 10000 });
          });
        }

        const brandingButton = form.querySelector('[data-generate-team-branding]');
        if (brandingButton && nameInput && descriptionInput && sloganOutput) {
          brandingButton.addEventListener('click', async () => {
            brandingButton.disabled = true;
            brandingButton.textContent = 'Génération...';
            try {
              const body = new URLSearchParams();
              body.set('_token', brandingButton.dataset.brandingCsrf || '');
              body.set('name', nameInput.value || '');
              body.set('region', regionInput ? regionInput.value || '' : '');
              body.set('style_hint', styleInput ? styleInput.value || '' : '');

              const resp = await fetch(brandingButton.dataset.brandingUrl, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded', 'Accept': 'application/json' },
                body: body.toString(),
              });
              const payload = await resp.json();
              if (payload && payload.ok && payload.data) {
                if (!descriptionInput.value.trim()) {
                  descriptionInput.value = payload.data.bio || '';
                } else {
                  descriptionInput.value = (descriptionInput.value.trim() + \"\\\\n\\\\n\" + (payload.data.bio || '')).trim();
                }
                sloganOutput.value = payload.data.slogan || '';
                if (brandingSource) {
                  brandingSource.textContent = 'Source: ' + (payload.data.source || 'IA');
                }
              } else {
                alert((payload && payload.message) || 'Erreur génération IA.');
              }
            } catch (e) {
              alert('Erreur génération IA.');
            } finally {
              brandingButton.disabled = false;
              brandingButton.textContent = 'Générer bio + slogan (IA)';
            }
          });
        }
      });
    })();
  </script>
  ";
        // line 305
        if ((($tmp = (isset($context["google_recaptcha_site_key"]) || array_key_exists("google_recaptcha_site_key", $context) ? $context["google_recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "google_recaptcha_site_key" does not exist.', 305, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 306
            yield "    <script src=\"https://www.google.com/recaptcha/api.js?render=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["google_recaptcha_site_key"]) || array_key_exists("google_recaptcha_site_key", $context) ? $context["google_recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "google_recaptcha_site_key" does not exist.', 306, $this->source); })()), "html", null, true);
            yield "\"></script>
    <script>
      (() => {
        const forms = document.querySelectorAll('[data-team-manage-form]');
        if (!forms.length || !window.grecaptcha) return;
        forms.forEach((form) => {
          form.addEventListener('submit', async (event) => {
            const tokenInput = form.querySelector('[data-recaptcha-token]');
            if (!tokenInput || tokenInput.value) return;
            event.preventDefault();
            const action = form.action.includes('/update') ? 'captain_team_update' : 'captain_team_create';
            try {
              tokenInput.value = await window.grecaptcha.execute('";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["google_recaptcha_site_key"]) || array_key_exists("google_recaptcha_site_key", $context) ? $context["google_recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "google_recaptcha_site_key" does not exist.', 318, $this->source); })()), "js"), "html", null, true);
            yield "', { action });
            } catch (e) {
              tokenInput.value = '';
            }
            form.submit();
          });
        });
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
        return "front/pages/captain-team-manage.html.twig";
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
        return array (  533 => 318,  517 => 306,  515 => 305,  446 => 239,  420 => 215,  418 => 214,  413 => 211,  411 => 210,  402 => 203,  393 => 199,  391 => 198,  383 => 195,  378 => 193,  374 => 192,  371 => 191,  366 => 190,  351 => 177,  342 => 171,  325 => 159,  310 => 147,  300 => 140,  291 => 134,  281 => 128,  279 => 127,  271 => 122,  254 => 110,  219 => 79,  217 => 78,  214 => 77,  205 => 71,  198 => 67,  191 => 63,  182 => 57,  178 => 56,  173 => 54,  169 => 52,  166 => 51,  163 => 50,  161 => 49,  155 => 45,  149 => 43,  147 => 42,  143 => 41,  138 => 38,  134 => 36,  130 => 34,  128 => 33,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Mon equipe{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'CAPITAINE',
    hero_title: 'Mon equipe',
    hero_sub: 'Creation et modification dans une seule page.',
    breadcrumb_current: 'Mon equipe'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_captain_side_nav.html.twig' with {
          active: 'team',
          active_team: active_team
        } %}

        <div>
          {% include 'front/partials/_captain_team_selector.html.twig' with {
            captain_teams: captain_teams,
            active_team: active_team,
            selector_route: 'front_captain_team_manage'
          } %}

          <div class=\"panel\">
            <div class=\"panel__head\">
              <div>
                <h3 class=\"panel__title\">MODE ACTUEL</h3>
                <div class=\"panel__desc\">
                  {% if team_form_mode == 'create' %}
                    Creation d'une nouvelle equipe.
                  {% else %}
                    Modification de l'equipe active.
                  {% endif %}
                </div>
              </div>
              <div class=\"panel__actions\">
                <a class=\"btn btn--ghost\" href=\"{{ path('front_captain_team_manage', {mode: 'create'}) }}\">Nouvelle equipe</a>
                {% if active_team %}
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_captain_team_manage', {team: active_team.teamId}) }}\">Modifier active</a>
                {% endif %}
              </div>
            </div>
          </div>

          {% if active_team %}
            {% set teamLogoPath = active_team.logoImageId ? active_team.logoImageId.fileUrl : '' %}
            {% set teamLogoUrl = teamLogoPath ? (teamLogoPath starts with 'http' ? teamLogoPath : (asset(teamLogoPath)|imagine_filter('team_logo_thumb'))) : 'https://picsum.photos/seed/captain_team_' ~ active_team.teamId ~ '/320/320' %}
            <section class=\"panel\">
              <div class=\"profileHeader\">
                <div class=\"avatarLg\" data-avatar=\"{{ teamLogoUrl }}\"></div>
                <div>
                  <h3 style=\"margin:0;\">{{ active_team.name }}</h3>
                  <div class=\"muted\">{{ active_team.region ?: 'Region non definie' }}</div>
                </div>
              </div>

              <div class=\"statsRow\" style=\"margin-top:12px;\">
                <div class=\"statCard\">
                  <div class=\"statCard__value\">{{ team_stats.members }}</div>
                  <div class=\"statCard__label\">Membres actifs</div>
                </div>
                <div class=\"statCard\">
                  <div class=\"statCard__value\">{{ team_stats.products }}</div>
                  <div class=\"statCard__label\">Produits</div>
                </div>
                <div class=\"statCard\">
                  <div class=\"statCard__value\">{{ team_stats.tournaments }}</div>
                  <div class=\"statCard__label\">Inscriptions tournoi</div>
                </div>
              </div>
            </section>
          {% endif %}

          {% if team_form_mode == 'create' %}
            <form class=\"panel\" method=\"post\" action=\"{{ path('front_captain_team_manage_create') }}\" enctype=\"multipart/form-data\" data-team-manage-form>
              <h3 class=\"panel__title\">CREER UNE EQUIPE</h3>

              <div class=\"formGrid\" style=\"margin-top:12px;\">
                <label class=\"field\">
                  <span class=\"field__label\">Nom de l'equipe *</span>
                  <input class=\"input\" type=\"text\" name=\"name\" required maxlength=\"100\" data-team-name-input>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Region</span>
                  <div style=\"display:flex; gap:8px; align-items:center;\">
                    <input class=\"input\" type=\"text\" name=\"region\" maxlength=\"80\" data-team-region-input style=\"flex:1;\">
                    <button class=\"btn btn--ghost\" type=\"button\" data-geo-fill-region>Ma position</button>
                  </div>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Description</span>
                  <textarea class=\"textarea\" name=\"description\" rows=\"5\" data-team-description-input></textarea>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Style IA (optionnel)</span>
                  <input class=\"input\" type=\"text\" name=\"style_hint\" placeholder=\"ex: agressif, pro, tactique...\" data-team-style-input>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Slogan IA (aperçu)</span>
                  <input class=\"input\" type=\"text\" value=\"\" readonly data-team-slogan-output placeholder=\"Générer via IA\">
                  <div style=\"margin-top:8px; display:flex; gap:8px; align-items:center;\">
                    <button class=\"btn btn--soft\" type=\"button\" data-generate-team-branding data-branding-url=\"{{ path('front_captain_team_manage_ai_branding') }}\" data-branding-csrf=\"{{ csrf_token('captain_team_branding_ai') }}\">Générer bio + slogan (IA)</button>
                    <span class=\"muted\" data-branding-source></span>
                  </div>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Logo equipe</span>
                  <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_team_create') }}\">
                <input type=\"hidden\" name=\"g-recaptcha-response\" data-recaptcha-token>
                <button class=\"btn btn--primary\" type=\"submit\">Creer equipe</button>
              </div>
            </form>
          {% elseif active_team %}
            <form class=\"panel\" method=\"post\" action=\"{{ path('front_captain_team_manage_update', {id: active_team.teamId}) }}\" enctype=\"multipart/form-data\" data-team-manage-form>
              <h3 class=\"panel__title\">MODIFIER L'EQUIPE ACTIVE</h3>

              <div class=\"formGrid\" style=\"margin-top:12px;\">
                <label class=\"field\">
                  <span class=\"field__label\">Nom de l'equipe *</span>
                  <input class=\"input\" type=\"text\" name=\"name\" value=\"{{ active_team.name }}\" required maxlength=\"100\" data-team-name-input>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Region</span>
                  <div style=\"display:flex; gap:8px; align-items:center;\">
                    <input class=\"input\" type=\"text\" name=\"region\" value=\"{{ active_team.region }}\" maxlength=\"80\" data-team-region-input style=\"flex:1;\">
                    <button class=\"btn btn--ghost\" type=\"button\" data-geo-fill-region>Ma position</button>
                  </div>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Description</span>
                  <textarea class=\"textarea\" name=\"description\" rows=\"5\" data-team-description-input>{{ active_team.description }}</textarea>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Style IA (optionnel)</span>
                  <input class=\"input\" type=\"text\" name=\"style_hint\" placeholder=\"ex: agressif, pro, tactique...\" data-team-style-input>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Slogan IA (aperçu)</span>
                  <input class=\"input\" type=\"text\" value=\"\" readonly data-team-slogan-output placeholder=\"Générer via IA\">
                  <div style=\"margin-top:8px; display:flex; gap:8px; align-items:center;\">
                    <button class=\"btn btn--soft\" type=\"button\" data-generate-team-branding data-branding-url=\"{{ path('front_captain_team_manage_ai_branding') }}\" data-branding-csrf=\"{{ csrf_token('captain_team_branding_ai') }}\">Générer bio + slogan (IA)</button>
                    <span class=\"muted\" data-branding-source></span>
                  </div>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Changer le logo</span>
                  <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_team_update_' ~ active_team.teamId) }}\">
                <input type=\"hidden\" name=\"g-recaptcha-response\" data-recaptcha-token>
                <button class=\"btn btn--primary\" type=\"submit\">Enregistrer</button>
              </div>
            </form>
          {% endif %}

          <section class=\"panel\">
            <h3 class=\"panel__title\">MES EQUIPES</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Equipe</th>
                    <th>Region</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {% for team in captain_teams %}
                    <tr>
                      <td>{{ team.name }}</td>
                      <td>{{ team.region ?: '-' }}</td>
                      <td>
                        <a class=\"btn btn--ghost\" href=\"{{ path('front_captain_team_manage', {team: team.teamId}) }}\">Gerer</a>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"3\">Aucune equipe pour le moment.</td>
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
  <script>
    (() => {
      const forms = document.querySelectorAll('[data-team-manage-form]');
      if (!forms.length) return;

      forms.forEach((form) => {
        const regionInput = form.querySelector('[data-team-region-input]');
        const nameInput = form.querySelector('[data-team-name-input]');
        const descriptionInput = form.querySelector('[data-team-description-input]');
        const styleInput = form.querySelector('[data-team-style-input]');
        const sloganOutput = form.querySelector('[data-team-slogan-output]');
        const brandingSource = form.querySelector('[data-branding-source]');

        const geoButton = form.querySelector('[data-geo-fill-region]');
        if (geoButton && regionInput) {
          geoButton.addEventListener('click', async () => {
            if (!navigator.geolocation) {
              alert('Géolocalisation non supportée par le navigateur.');
              return;
            }
            geoButton.disabled = true;
            geoButton.textContent = 'Localisation...';
            navigator.geolocation.getCurrentPosition(async (position) => {
              try {
                const url = new URL('{{ path('api_location_reverse_geocode') }}', window.location.origin);
                url.searchParams.set('lat', String(position.coords.latitude));
                url.searchParams.set('lon', String(position.coords.longitude));
                const resp = await fetch(url.toString(), { headers: { 'Accept': 'application/json' } });
                const payload = await resp.json();
                if (payload && payload.ok && payload.data && payload.data.normalized_region) {
                  regionInput.value = payload.data.normalized_region;
                } else {
                  alert((payload && payload.message) || 'Localisation introuvable.');
                }
              } catch (e) {
                alert('Erreur API géolocalisation.');
              } finally {
                geoButton.disabled = false;
                geoButton.textContent = 'Ma position';
              }
            }, () => {
              geoButton.disabled = false;
              geoButton.textContent = 'Ma position';
              alert('Accès à la position refusé.');
            }, { enableHighAccuracy: true, timeout: 10000 });
          });
        }

        const brandingButton = form.querySelector('[data-generate-team-branding]');
        if (brandingButton && nameInput && descriptionInput && sloganOutput) {
          brandingButton.addEventListener('click', async () => {
            brandingButton.disabled = true;
            brandingButton.textContent = 'Génération...';
            try {
              const body = new URLSearchParams();
              body.set('_token', brandingButton.dataset.brandingCsrf || '');
              body.set('name', nameInput.value || '');
              body.set('region', regionInput ? regionInput.value || '' : '');
              body.set('style_hint', styleInput ? styleInput.value || '' : '');

              const resp = await fetch(brandingButton.dataset.brandingUrl, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded', 'Accept': 'application/json' },
                body: body.toString(),
              });
              const payload = await resp.json();
              if (payload && payload.ok && payload.data) {
                if (!descriptionInput.value.trim()) {
                  descriptionInput.value = payload.data.bio || '';
                } else {
                  descriptionInput.value = (descriptionInput.value.trim() + \"\\\\n\\\\n\" + (payload.data.bio || '')).trim();
                }
                sloganOutput.value = payload.data.slogan || '';
                if (brandingSource) {
                  brandingSource.textContent = 'Source: ' + (payload.data.source || 'IA');
                }
              } else {
                alert((payload && payload.message) || 'Erreur génération IA.');
              }
            } catch (e) {
              alert('Erreur génération IA.');
            } finally {
              brandingButton.disabled = false;
              brandingButton.textContent = 'Générer bio + slogan (IA)';
            }
          });
        }
      });
    })();
  </script>
  {% if google_recaptcha_site_key %}
    <script src=\"https://www.google.com/recaptcha/api.js?render={{ google_recaptcha_site_key }}\"></script>
    <script>
      (() => {
        const forms = document.querySelectorAll('[data-team-manage-form]');
        if (!forms.length || !window.grecaptcha) return;
        forms.forEach((form) => {
          form.addEventListener('submit', async (event) => {
            const tokenInput = form.querySelector('[data-recaptcha-token]');
            if (!tokenInput || tokenInput.value) return;
            event.preventDefault();
            const action = form.action.includes('/update') ? 'captain_team_update' : 'captain_team_create';
            try {
              tokenInput.value = await window.grecaptcha.execute('{{ google_recaptcha_site_key|e('js') }}', { action });
            } catch (e) {
              tokenInput.value = '';
            }
            form.submit();
          });
        });
      })();
    </script>
  {% endif %}
{% endblock %}

", "front/pages/captain-team-manage.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\front\\pages\\captain-team-manage.html.twig");
    }
}
