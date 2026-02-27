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
class __TwigTemplate_9fad02c62ab92bad9d4f7909cd43a2cf extends Template
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
            $context["teamLogoUrl"] = (((($tmp = (isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = (isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 51, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ((isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 51, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 51, $this->source); })()))))) : ((("https://picsum.photos/seed/captain_team_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 51, $this->source); })()), "teamId", [], "any", false, false, false, 51)) . "/320/320")));
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
            yield "\" enctype=\"multipart/form-data\">
              <h3 class=\"panel__title\">CREER UNE EQUIPE</h3>

              <div class=\"formGrid\" style=\"margin-top:12px;\">
                <label class=\"field\">
                  <span class=\"field__label\">Nom de l'equipe *</span>
                  <input class=\"input\" type=\"text\" name=\"name\" required maxlength=\"100\">
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Region</span>
                  <input class=\"input\" type=\"text\" name=\"region\" maxlength=\"80\">
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Description</span>
                  <textarea class=\"textarea\" name=\"description\" rows=\"5\"></textarea>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Logo equipe</span>
                  <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("captain_team_create"), "html", null, true);
            yield "\">
                <button class=\"btn btn--primary\" type=\"submit\">Creer equipe</button>
              </div>
            </form>
          ";
        } elseif ((($tmp =         // line 109
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 109, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 110
            yield "            <form class=\"panel\" method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 110, $this->source); })()), "teamId", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\" enctype=\"multipart/form-data\">
              <h3 class=\"panel__title\">MODIFIER L'EQUIPE ACTIVE</h3>

              <div class=\"formGrid\" style=\"margin-top:12px;\">
                <label class=\"field\">
                  <span class=\"field__label\">Nom de l'equipe *</span>
                  <input class=\"input\" type=\"text\" name=\"name\" value=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 116, $this->source); })()), "name", [], "any", false, false, false, 116), "html", null, true);
            yield "\" required maxlength=\"100\">
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Region</span>
                  <input class=\"input\" type=\"text\" name=\"region\" value=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 121, $this->source); })()), "region", [], "any", false, false, false, 121), "html", null, true);
            yield "\" maxlength=\"80\">
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Description</span>
                  <textarea class=\"textarea\" name=\"description\" rows=\"5\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 126, $this->source); })()), "description", [], "any", false, false, false, 126), "html", null, true);
            yield "</textarea>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Changer le logo</span>
                  <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("captain_team_update_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 136, $this->source); })()), "teamId", [], "any", false, false, false, 136))), "html", null, true);
            yield "\">
                <button class=\"btn btn--primary\" type=\"submit\">Enregistrer</button>
              </div>
            </form>
          ";
        }
        // line 141
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
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 154, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 155
            yield "                    <tr>
                      <td>";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 156), "html", null, true);
            yield "</td>
                      <td>";
            // line 157
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 157)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 157), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        <a class=\"btn btn--ghost\" href=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage", ["team" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\">Gerer</a>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 162
        if (!$context['_iterated']) {
            // line 163
            yield "                    <tr>
                      <td colspan=\"3\">Aucune equipe pour le moment.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 174
        yield from $this->load("front/partials/_footer.html.twig", 174)->unwrap()->yield($context);
        // line 175
        yield "    </section>
  </main>

  ";
        // line 178
        yield from $this->load("front/partials/_auth_modal.html.twig", 178)->unwrap()->yield($context);
        
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
        return array (  372 => 178,  367 => 175,  365 => 174,  356 => 167,  347 => 163,  345 => 162,  337 => 159,  332 => 157,  328 => 156,  325 => 155,  320 => 154,  305 => 141,  297 => 136,  284 => 126,  276 => 121,  268 => 116,  258 => 110,  256 => 109,  249 => 105,  219 => 79,  217 => 78,  214 => 77,  205 => 71,  198 => 67,  191 => 63,  182 => 57,  178 => 56,  173 => 54,  169 => 52,  166 => 51,  163 => 50,  161 => 49,  155 => 45,  149 => 43,  147 => 42,  143 => 41,  138 => 38,  134 => 36,  130 => 34,  128 => 33,  120 => 27,  118 => 24,  117 => 23,  116 => 22,  112 => 20,  110 => 18,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
            {% set teamLogoUrl = teamLogoPath ? (teamLogoPath starts with 'http' ? teamLogoPath : asset(teamLogoPath)) : 'https://picsum.photos/seed/captain_team_' ~ active_team.teamId ~ '/320/320' %}
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
            <form class=\"panel\" method=\"post\" action=\"{{ path('front_captain_team_manage_create') }}\" enctype=\"multipart/form-data\">
              <h3 class=\"panel__title\">CREER UNE EQUIPE</h3>

              <div class=\"formGrid\" style=\"margin-top:12px;\">
                <label class=\"field\">
                  <span class=\"field__label\">Nom de l'equipe *</span>
                  <input class=\"input\" type=\"text\" name=\"name\" required maxlength=\"100\">
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Region</span>
                  <input class=\"input\" type=\"text\" name=\"region\" maxlength=\"80\">
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Description</span>
                  <textarea class=\"textarea\" name=\"description\" rows=\"5\"></textarea>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Logo equipe</span>
                  <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_team_create') }}\">
                <button class=\"btn btn--primary\" type=\"submit\">Creer equipe</button>
              </div>
            </form>
          {% elseif active_team %}
            <form class=\"panel\" method=\"post\" action=\"{{ path('front_captain_team_manage_update', {id: active_team.teamId}) }}\" enctype=\"multipart/form-data\">
              <h3 class=\"panel__title\">MODIFIER L'EQUIPE ACTIVE</h3>

              <div class=\"formGrid\" style=\"margin-top:12px;\">
                <label class=\"field\">
                  <span class=\"field__label\">Nom de l'equipe *</span>
                  <input class=\"input\" type=\"text\" name=\"name\" value=\"{{ active_team.name }}\" required maxlength=\"100\">
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Region</span>
                  <input class=\"input\" type=\"text\" name=\"region\" value=\"{{ active_team.region }}\" maxlength=\"80\">
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Description</span>
                  <textarea class=\"textarea\" name=\"description\" rows=\"5\">{{ active_team.description }}</textarea>
                </label>

                <label class=\"field\">
                  <span class=\"field__label\">Changer le logo</span>
                  <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                </label>
              </div>

              <div class=\"formActions\" style=\"margin-top:12px;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_team_update_' ~ active_team.teamId) }}\">
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
{% endblock %}

", "front/pages/captain-team-manage.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\captain-team-manage.html.twig");
    }
}
