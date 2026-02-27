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
class __TwigTemplate_1cec5acfda6e581e19c8abdad0d1f16a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <style>
    .captainManageMode {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }

    .captainManageHero {
      padding: 18px;
      border-radius: 28px;
      border: 1px solid rgba(255, 255, 255, 0.12);
      background:
        radial-gradient(900px 260px at 80% 20%, rgba(43, 210, 255, 0.14), transparent 60%),
        linear-gradient(145deg, rgba(9, 28, 47, 0.92), rgba(6, 20, 38, 0.92));
      box-shadow: 0 26px 60px rgba(0, 0, 0, 0.35);
    }

    .captainManageIdentity {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 12px;
      flex-wrap: wrap;
    }

    .captainManageAvatar {
      width: 96px;
      height: 96px;
      border-radius: 24px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
      flex: 0 0 auto;
    }

    .captainManageName {
      margin: 0;
      font-size: clamp(24px, 4vw, 34px);
      line-height: 1.05;
    }

    .captainManageStats {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 12px;
    }

    .captainManageStat {
      border-radius: 18px;
      border: 1px solid rgba(255, 255, 255, 0.15);
      background: rgba(255, 255, 255, 0.03);
      padding: 12px 14px;
      min-height: 84px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .captainManageStatValue {
      font-size: 30px;
      font-weight: 900;
      line-height: 1;
    }

    .captainManageStatLabel {
      color: var(--muted);
      font-size: 12px;
      letter-spacing: 0.04em;
    }

    .captainManageEditor {
      border-radius: 28px;
      border: 1px solid rgba(255, 255, 255, 0.14);
      background:
        radial-gradient(1000px 400px at 74% 12%, rgba(43, 210, 255, 0.14), transparent 60%),
        radial-gradient(760px 340px at 20% 20%, rgba(43, 210, 255, 0.06), transparent 65%),
        linear-gradient(165deg, rgba(7, 22, 40, 0.95), rgba(5, 18, 34, 0.95));
      box-shadow: 0 28px 62px rgba(0, 0, 0, 0.38);
      padding: 16px;
    }

    .captainManageGrid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 14px;
    }

    .captainManageField {
      display: flex;
      flex-direction: column;
      gap: 6px;
      min-width: 0;
    }

    .captainManageField .textarea {
      min-height: 136px;
    }

    .captainManageRegionInline {
      display: grid;
      grid-template-columns: minmax(0, 1fr) auto;
      gap: 10px;
      align-items: center;
    }

    .captainManageRegionInline .btn {
      white-space: nowrap;
    }

    .captainManageAiMeta {
      margin-top: 10px;
      border: 1px solid rgba(255, 255, 255, 0.12);
      background: rgba(255, 255, 255, 0.02);
      border-radius: 14px;
      padding: 10px 12px;
      color: var(--muted);
      font-size: 12px;
    }

    .captainManageActions {
      margin-top: 10px;
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }

    .captainManageStatus {
      margin-top: 6px;
      min-height: 16px;
      font-size: 12px;
      color: var(--muted);
    }

    @media (max-width: 980px) {
      .captainManageStats {
        grid-template-columns: 1fr;
      }

      .captainManageGrid {
        grid-template-columns: 1fr;
      }

      .captainManageRegionInline {
        grid-template-columns: 1fr;
      }
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
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

        // line 159
        yield "  ";
        yield from $this->load("front/partials/_hero_mini.html.twig", 159)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "CAPITAINE", "hero_title" => "Mon equipe", "hero_sub" => "Creation et modification dans une seule page.", "breadcrumb_current" => "Mon equipe"]));
        // line 165
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "flashes", [], "any", false, false, false, 168));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 169
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 170
                yield "          <div class=\"listItem\">
            <span>";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
            <span class=\"badge ";
                // line 172
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
            // line 175
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "
      <div class=\"layout\">
        ";
        // line 178
        yield from $this->load("front/partials/_captain_side_nav.html.twig", 178)->unwrap()->yield(CoreExtension::merge($context, ["active" => "team", "active_team" =>         // line 180
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 180, $this->source); })())]));
        // line 182
        yield "
        <div>
          ";
        // line 184
        yield from $this->load("front/partials/_captain_team_selector.html.twig", 184)->unwrap()->yield(CoreExtension::merge($context, ["captain_teams" =>         // line 185
(isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 185, $this->source); })()), "active_team" =>         // line 186
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 186, $this->source); })()), "selector_route" => "front_captain_team_manage"]));
        // line 189
        yield "
          <section class=\"panel captainManageMode\">
            <div>
              <h3 class=\"panel__title\">MODE ACTUEL</h3>
              <div class=\"panel__desc\">
                ";
        // line 194
        if (((isset($context["team_form_mode"]) || array_key_exists("team_form_mode", $context) ? $context["team_form_mode"] : (function () { throw new RuntimeError('Variable "team_form_mode" does not exist.', 194, $this->source); })()) == "create")) {
            // line 195
            yield "                  Creation d'une nouvelle equipe.
                ";
        } else {
            // line 197
            yield "                  Modification de l'equipe active.
                ";
        }
        // line 199
        yield "              </div>
            </div>
            <div class=\"panel__actions\">
              <a class=\"btn btn--ghost\" href=\"";
        // line 202
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage", ["mode" => "create"]);
        yield "\">Nouvelle equipe</a>
              ";
        // line 203
        if ((($tmp = (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 203, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 204
            yield "                <a class=\"btn btn--ghost\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage", ["team" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 204, $this->source); })()), "teamId", [], "any", false, false, false, 204)]), "html", null, true);
            yield "\">Modifier active</a>
              ";
        }
        // line 206
        yield "            </div>
          </section>

          ";
        // line 209
        if ((($tmp = (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 209, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 210
            yield "            ";
            $context["teamLogoPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 210, $this->source); })()), "logoImageId", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 210, $this->source); })()), "logoImageId", [], "any", false, false, false, 210), "fileUrl", [], "any", false, false, false, 210)) : (""));
            // line 211
            yield "            ";
            if (((isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 211, $this->source); })()) && (is_string($_v0 = (isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 211, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1)))) {
                // line 212
                yield "              ";
                $context["teamLogoUrl"] = (isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 212, $this->source); })());
                // line 213
                yield "            ";
            } elseif ((($tmp = (isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 213, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 214
                yield "              ";
                $context["teamLogoUrl"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["teamLogoPath"]) || array_key_exists("teamLogoPath", $context) ? $context["teamLogoPath"] : (function () { throw new RuntimeError('Variable "teamLogoPath" does not exist.', 214, $this->source); })())), "team_logo");
                // line 215
                yield "            ";
            } else {
                // line 216
                yield "              ";
                $context["teamLogoUrl"] = (("https://picsum.photos/seed/captain_team_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 216, $this->source); })()), "teamId", [], "any", false, false, false, 216)) . "/320/320");
                // line 217
                yield "            ";
            }
            // line 218
            yield "
            <section class=\"captainManageHero\">
              <div class=\"captainManageIdentity\">
                <div class=\"captainManageAvatar avatarLg\" data-avatar=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamLogoUrl"]) || array_key_exists("teamLogoUrl", $context) ? $context["teamLogoUrl"] : (function () { throw new RuntimeError('Variable "teamLogoUrl" does not exist.', 221, $this->source); })()), "html", null, true);
            yield "\" aria-hidden=\"true\"></div>
                <div>
                  <h2 class=\"captainManageName\">";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 223, $this->source); })()), "name", [], "any", false, false, false, 223), "html", null, true);
            yield "</h2>
                  <div class=\"muted\">";
            // line 224
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 224, $this->source); })()), "region", [], "any", false, false, false, 224)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 224, $this->source); })()), "region", [], "any", false, false, false, 224), "html", null, true)) : ("Region non definie"));
            yield "</div>
                </div>
              </div>

              <div class=\"captainManageStats\">
                <article class=\"captainManageStat\">
                  <div class=\"captainManageStatValue\">";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team_stats"]) || array_key_exists("team_stats", $context) ? $context["team_stats"] : (function () { throw new RuntimeError('Variable "team_stats" does not exist.', 230, $this->source); })()), "members", [], "any", false, false, false, 230), "html", null, true);
            yield "</div>
                  <div class=\"captainManageStatLabel\">Membres actifs</div>
                </article>
                <article class=\"captainManageStat\">
                  <div class=\"captainManageStatValue\">";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team_stats"]) || array_key_exists("team_stats", $context) ? $context["team_stats"] : (function () { throw new RuntimeError('Variable "team_stats" does not exist.', 234, $this->source); })()), "products", [], "any", false, false, false, 234), "html", null, true);
            yield "</div>
                  <div class=\"captainManageStatLabel\">Produits</div>
                </article>
                <article class=\"captainManageStat\">
                  <div class=\"captainManageStatValue\">";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team_stats"]) || array_key_exists("team_stats", $context) ? $context["team_stats"] : (function () { throw new RuntimeError('Variable "team_stats" does not exist.', 238, $this->source); })()), "tournaments", [], "any", false, false, false, 238), "html", null, true);
            yield "</div>
                  <div class=\"captainManageStatLabel\">Inscriptions tournoi</div>
                </article>
              </div>
            </section>
          ";
        }
        // line 244
        yield "
          ";
        // line 245
        if (((isset($context["team_form_mode"]) || array_key_exists("team_form_mode", $context) ? $context["team_form_mode"] : (function () { throw new RuntimeError('Variable "team_form_mode" does not exist.', 245, $this->source); })()) == "create")) {
            // line 246
            yield "            <section class=\"captainManageEditor\">
              <h3 class=\"panel__title\">CREER UNE EQUIPE</h3>
              <form method=\"post\" action=\"";
            // line 248
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage_create");
            yield "\" enctype=\"multipart/form-data\">
                <div class=\"captainManageGrid\" style=\"margin-top:12px;\">
                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Nom de l'equipe *</span>
                    <input class=\"input\" type=\"text\" name=\"name\" required maxlength=\"100\">
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Region</span>
                    <input class=\"input\" type=\"text\" name=\"region\" maxlength=\"80\" placeholder=\"Ex: Tunis\">
                    <span class=\"muted\">Saisie libre normalisee via OpenStreetMap.</span>
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Description</span>
                    <textarea class=\"textarea\" name=\"description\" rows=\"5\"></textarea>
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Logo equipe</span>
                    <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                  </label>
                </div>

                <div class=\"captainManageActions\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("captain_team_create"), "html", null, true);
            yield "\">
                  <button class=\"btn btn--primary\" type=\"submit\">Creer equipe</button>
                </div>
              </form>
            </section>
          ";
        } elseif ((($tmp =         // line 278
(isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 278, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 279
            yield "            ";
            $context["aiSuggestedBio"] = ((((isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 279, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 279, $this->source); })()), "bio", [], "any", false, false, false, 279))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 279, $this->source); })()), "bio", [], "any", false, false, false, 279)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 279, $this->source); })()), "description", [], "any", false, false, false, 279)));
            // line 280
            yield "            ";
            $context["aiSuggestedSlogan"] = ((((isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 280, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 280, $this->source); })()), "slogan", [], "any", false, false, false, 280))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 280, $this->source); })()), "slogan", [], "any", false, false, false, 280)) : (""));
            // line 281
            yield "            ";
            $context["aiStyleHint"] = ((((isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 281, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 281, $this->source); })()), "style_hint", [], "any", false, false, false, 281))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 281, $this->source); })()), "style_hint", [], "any", false, false, false, 281)) : (""));
            // line 282
            yield "
            <section class=\"captainManageEditor\">
              <h3 class=\"panel__title\">MODIFIER L'EQUIPE ACTIVE</h3>

              <form id=\"captainTeamUpdateForm\" method=\"post\" action=\"";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 286, $this->source); })()), "teamId", [], "any", false, false, false, 286)]), "html", null, true);
            yield "\" enctype=\"multipart/form-data\">
                <div class=\"captainManageGrid\" style=\"margin-top:12px;\">
                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Nom de l'equipe *</span>
                    <input class=\"input\" type=\"text\" name=\"name\" value=\"";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 290, $this->source); })()), "name", [], "any", false, false, false, 290), "html", null, true);
            yield "\" required maxlength=\"100\">
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Region</span>
                    <div class=\"captainManageRegionInline\">
                      <input class=\"input\" id=\"captainTeamRegion\" type=\"text\" name=\"region\" value=\"";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 296, $this->source); })()), "region", [], "any", false, false, false, 296), "html", null, true);
            yield "\" maxlength=\"80\" placeholder=\"Ex: Tunis\">
                      <button class=\"btn btn--ghost\" type=\"button\" id=\"captainRegionLocate\">Ma position</button>
                    </div>
                    <span class=\"muted\">Saisie libre normalisee via OpenStreetMap.</span>
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Description</span>
                    <textarea class=\"textarea\" name=\"description\" rows=\"6\">";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiSuggestedBio"]) || array_key_exists("aiSuggestedBio", $context) ? $context["aiSuggestedBio"] : (function () { throw new RuntimeError('Variable "aiSuggestedBio" does not exist.', 304, $this->source); })()), "html", null, true);
            yield "</textarea>
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Style IA (optionnel)</span>
                    <input class=\"input\" id=\"captainBrandingStyleHint\" type=\"text\" value=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiStyleHint"]) || array_key_exists("aiStyleHint", $context) ? $context["aiStyleHint"] : (function () { throw new RuntimeError('Variable "aiStyleHint" does not exist.', 309, $this->source); })()), "html", null, true);
            yield "\" placeholder=\"ex: agressif, pro, tactique...\">
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Slogan IA (apercu)</span>
                    <input class=\"input\" type=\"text\" value=\"";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiSuggestedSlogan"]) || array_key_exists("aiSuggestedSlogan", $context) ? $context["aiSuggestedSlogan"] : (function () { throw new RuntimeError('Variable "aiSuggestedSlogan" does not exist.', 314, $this->source); })()), "html", null, true);
            yield "\" placeholder=\"Generer via IA\" readonly>
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Changer le logo</span>
                    <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                  </label>
                </div>

                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("captain_team_update_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 323, $this->source); })()), "teamId", [], "any", false, false, false, 323))), "html", null, true);
            yield "\">
              </form>

              <form id=\"captainTeamBrandingForm\" method=\"post\" action=\"";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage_generate_branding", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 326, $this->source); })()), "teamId", [], "any", false, false, false, 326)]), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("captain_team_manage_generate_branding_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["active_team"]) || array_key_exists("active_team", $context) ? $context["active_team"] : (function () { throw new RuntimeError('Variable "active_team" does not exist.', 327, $this->source); })()), "teamId", [], "any", false, false, false, 327))), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"style_hint\" id=\"captainBrandingStyleHintMirror\" value=\"";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiStyleHint"]) || array_key_exists("aiStyleHint", $context) ? $context["aiStyleHint"] : (function () { throw new RuntimeError('Variable "aiStyleHint" does not exist.', 328, $this->source); })()), "html", null, true);
            yield "\">
              </form>

              ";
            // line 331
            if ((($tmp = (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 331, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 332
                yield "                <div class=\"captainManageAiMeta\">
                  Source IA: ";
                // line 333
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 333, $this->source); })()), "provider", [], "any", false, false, false, 333), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 333, $this->source); })()), "source", [], "any", false, false, false, 333), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 333, $this->source); })()), "model", [], "any", false, false, false, 333), "html", null, true);
                yield ")";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 333, $this->source); })()), "generated_at", [], "any", false, false, false, 333)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ai_team_branding"]) || array_key_exists("ai_team_branding", $context) ? $context["ai_team_branding"] : (function () { throw new RuntimeError('Variable "ai_team_branding" does not exist.', 333, $this->source); })()), "generated_at", [], "any", false, false, false, 333), "html", null, true);
                }
                // line 334
                yield "                </div>
              ";
            }
            // line 336
            yield "
              <div class=\"captainManageActions\">
                <button class=\"btn btn--soft\" type=\"submit\" form=\"captainTeamBrandingForm\">Generer bio + slogan (IA)</button>
                <button class=\"btn btn--primary\" type=\"submit\" form=\"captainTeamUpdateForm\">Enregistrer</button>
              </div>
              <div class=\"captainManageStatus\" id=\"captainRegionLocateStatus\"></div>
            </section>
          ";
        }
        // line 344
        yield "
          <section class=\"panel\">
            <h3 class=\"panel__title\">MES EQUIPES</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Logo</th>
                    <th>Equipe</th>
                    <th>Region</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 358
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["captain_teams"]) || array_key_exists("captain_teams", $context) ? $context["captain_teams"] : (function () { throw new RuntimeError('Variable "captain_teams" does not exist.', 358, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 359
            yield "                    ";
            $context["listLogoPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "logoImageId", [], "any", false, false, false, 359)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["team"], "logoImageId", [], "any", false, false, false, 359), "fileUrl", [], "any", false, false, false, 359)) : (""));
            // line 360
            yield "                    ";
            if (((isset($context["listLogoPath"]) || array_key_exists("listLogoPath", $context) ? $context["listLogoPath"] : (function () { throw new RuntimeError('Variable "listLogoPath" does not exist.', 360, $this->source); })()) && (is_string($_v2 = (isset($context["listLogoPath"]) || array_key_exists("listLogoPath", $context) ? $context["listLogoPath"] : (function () { throw new RuntimeError('Variable "listLogoPath" does not exist.', 360, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3)))) {
                // line 361
                yield "                      ";
                $context["listLogoUrl"] = (isset($context["listLogoPath"]) || array_key_exists("listLogoPath", $context) ? $context["listLogoPath"] : (function () { throw new RuntimeError('Variable "listLogoPath" does not exist.', 361, $this->source); })());
                // line 362
                yield "                    ";
            } elseif ((($tmp = (isset($context["listLogoPath"]) || array_key_exists("listLogoPath", $context) ? $context["listLogoPath"] : (function () { throw new RuntimeError('Variable "listLogoPath" does not exist.', 362, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 363
                yield "                      ";
                $context["listLogoUrl"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["listLogoPath"]) || array_key_exists("listLogoPath", $context) ? $context["listLogoPath"] : (function () { throw new RuntimeError('Variable "listLogoPath" does not exist.', 363, $this->source); })())), "team_thumbnail");
                // line 364
                yield "                    ";
            } else {
                // line 365
                yield "                      ";
                $context["listLogoUrl"] = (("https://picsum.photos/seed/captain_team_list_" . (((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", true, true, false, 365) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 365)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 365)) : (0))) . "/96/96");
                // line 366
                yield "                    ";
            }
            // line 367
            yield "                    <tr>
                      <td><div class=\"avatar\" data-avatar=\"";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["listLogoUrl"]) || array_key_exists("listLogoUrl", $context) ? $context["listLogoUrl"] : (function () { throw new RuntimeError('Variable "listLogoUrl" does not exist.', 368, $this->source); })()), "html", null, true);
            yield "\" aria-hidden=\"true\"></div></td>
                      <td>";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 369), "html", null, true);
            yield "</td>
                      <td>";
            // line 370
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 370)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 370), "html", null, true)) : ("-"));
            yield "</td>
                      <td>
                        <a class=\"btn btn--ghost\" href=\"";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_captain_team_manage", ["team" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 372)]), "html", null, true);
            yield "\">Gerer</a>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
        }
        // line 375
        if (!$context['_iterated']) {
            // line 376
            yield "                    <tr>
                      <td colspan=\"4\">Aucune equipe pour le moment.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 380
        yield "                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

      ";
        // line 387
        yield from $this->load("front/partials/_footer.html.twig", 387)->unwrap()->yield($context);
        // line 388
        yield "    </section>
  </main>

  ";
        // line 391
        yield from $this->load("front/partials/_auth_modal.html.twig", 391)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 394
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

        // line 395
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script>
    (function () {
      var styleHintInput = document.getElementById('captainBrandingStyleHint');
      var styleHintMirror = document.getElementById('captainBrandingStyleHintMirror');
      var syncStyleHint = function () {
        if (!styleHintInput || !styleHintMirror) {
          return;
        }

        styleHintMirror.value = styleHintInput.value.trim();
      };

      if (styleHintInput && styleHintMirror) {
        styleHintInput.addEventListener('input', syncStyleHint);
        syncStyleHint();
      }

      var locateButton = document.getElementById('captainRegionLocate');
      var regionInput = document.getElementById('captainTeamRegion');
      var locateStatus = document.getElementById('captainRegionLocateStatus');

      var setLocateStatus = function (message) {
        if (!locateStatus) {
          return;
        }

        locateStatus.textContent = message;
      };

      if (!locateButton || !regionInput) {
        return;
      }

      locateButton.addEventListener('click', function () {
        if (!('geolocation' in navigator)) {
          setLocateStatus('Geolocalisation indisponible sur ce navigateur.');
          return;
        }

        locateButton.disabled = true;
        setLocateStatus('Localisation en cours...');

        navigator.geolocation.getCurrentPosition(
          function (position) {
            var lat = String(position.coords.latitude || '');
            var lon = String(position.coords.longitude || '');

            fetch('https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=' + encodeURIComponent(lat) + '&lon=' + encodeURIComponent(lon), {
              headers: {
                'Accept': 'application/json'
              }
            })
              .then(function (response) { return response.json(); })
              .then(function (payload) {
                var address = payload && payload.address ? payload.address : {};
                var city = String(address.city || address.town || address.village || address.state || '').trim();
                var country = String(address.country || '').trim();
                var resolvedRegion = '';

                if (city !== '' && country !== '' && city.toLowerCase() !== country.toLowerCase()) {
                  resolvedRegion = city + ', ' + country;
                } else if (city !== '') {
                  resolvedRegion = city;
                } else if (country !== '') {
                  resolvedRegion = country;
                } else {
                  resolvedRegion = String(payload && payload.display_name ? payload.display_name : '').split(',').slice(0, 2).join(',').trim();
                }

                if (resolvedRegion !== '') {
                  regionInput.value = resolvedRegion;
                  setLocateStatus('Position detectee via OpenStreetMap.');
                } else {
                  setLocateStatus('Position detectee, region non resolue.');
                }
              })
              .catch(function () {
                setLocateStatus('Impossible de resoudre la position OpenStreetMap.');
              })
              .finally(function () {
                locateButton.disabled = false;
              });
          },
          function () {
            locateButton.disabled = false;
            setLocateStatus('Autorisez la geolocalisation pour remplir la region.');
          },
          {
            enableHighAccuracy: true,
            timeout: 10000,
            maximumAge: 0
          }
        );
      });
    })();
  </script>
";
        
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
        return array (  732 => 395,  719 => 394,  708 => 391,  703 => 388,  701 => 387,  692 => 380,  683 => 376,  681 => 375,  673 => 372,  668 => 370,  664 => 369,  660 => 368,  657 => 367,  654 => 366,  651 => 365,  648 => 364,  645 => 363,  642 => 362,  639 => 361,  636 => 360,  633 => 359,  628 => 358,  612 => 344,  602 => 336,  598 => 334,  587 => 333,  584 => 332,  582 => 331,  576 => 328,  572 => 327,  568 => 326,  562 => 323,  550 => 314,  542 => 309,  534 => 304,  523 => 296,  514 => 290,  507 => 286,  501 => 282,  498 => 281,  495 => 280,  492 => 279,  490 => 278,  482 => 273,  454 => 248,  450 => 246,  448 => 245,  445 => 244,  436 => 238,  429 => 234,  422 => 230,  413 => 224,  409 => 223,  404 => 221,  399 => 218,  396 => 217,  393 => 216,  390 => 215,  387 => 214,  384 => 213,  381 => 212,  378 => 211,  375 => 210,  373 => 209,  368 => 206,  362 => 204,  360 => 203,  356 => 202,  351 => 199,  347 => 197,  343 => 195,  341 => 194,  334 => 189,  332 => 186,  331 => 185,  330 => 184,  326 => 182,  324 => 180,  323 => 178,  319 => 176,  313 => 175,  302 => 172,  298 => 171,  295 => 170,  290 => 169,  286 => 168,  281 => 165,  278 => 159,  265 => 158,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Mon equipe{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <style>
    .captainManageMode {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }

    .captainManageHero {
      padding: 18px;
      border-radius: 28px;
      border: 1px solid rgba(255, 255, 255, 0.12);
      background:
        radial-gradient(900px 260px at 80% 20%, rgba(43, 210, 255, 0.14), transparent 60%),
        linear-gradient(145deg, rgba(9, 28, 47, 0.92), rgba(6, 20, 38, 0.92));
      box-shadow: 0 26px 60px rgba(0, 0, 0, 0.35);
    }

    .captainManageIdentity {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 12px;
      flex-wrap: wrap;
    }

    .captainManageAvatar {
      width: 96px;
      height: 96px;
      border-radius: 24px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
      flex: 0 0 auto;
    }

    .captainManageName {
      margin: 0;
      font-size: clamp(24px, 4vw, 34px);
      line-height: 1.05;
    }

    .captainManageStats {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 12px;
    }

    .captainManageStat {
      border-radius: 18px;
      border: 1px solid rgba(255, 255, 255, 0.15);
      background: rgba(255, 255, 255, 0.03);
      padding: 12px 14px;
      min-height: 84px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .captainManageStatValue {
      font-size: 30px;
      font-weight: 900;
      line-height: 1;
    }

    .captainManageStatLabel {
      color: var(--muted);
      font-size: 12px;
      letter-spacing: 0.04em;
    }

    .captainManageEditor {
      border-radius: 28px;
      border: 1px solid rgba(255, 255, 255, 0.14);
      background:
        radial-gradient(1000px 400px at 74% 12%, rgba(43, 210, 255, 0.14), transparent 60%),
        radial-gradient(760px 340px at 20% 20%, rgba(43, 210, 255, 0.06), transparent 65%),
        linear-gradient(165deg, rgba(7, 22, 40, 0.95), rgba(5, 18, 34, 0.95));
      box-shadow: 0 28px 62px rgba(0, 0, 0, 0.38);
      padding: 16px;
    }

    .captainManageGrid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 14px;
    }

    .captainManageField {
      display: flex;
      flex-direction: column;
      gap: 6px;
      min-width: 0;
    }

    .captainManageField .textarea {
      min-height: 136px;
    }

    .captainManageRegionInline {
      display: grid;
      grid-template-columns: minmax(0, 1fr) auto;
      gap: 10px;
      align-items: center;
    }

    .captainManageRegionInline .btn {
      white-space: nowrap;
    }

    .captainManageAiMeta {
      margin-top: 10px;
      border: 1px solid rgba(255, 255, 255, 0.12);
      background: rgba(255, 255, 255, 0.02);
      border-radius: 14px;
      padding: 10px 12px;
      color: var(--muted);
      font-size: 12px;
    }

    .captainManageActions {
      margin-top: 10px;
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }

    .captainManageStatus {
      margin-top: 6px;
      min-height: 16px;
      font-size: 12px;
      color: var(--muted);
    }

    @media (max-width: 980px) {
      .captainManageStats {
        grid-template-columns: 1fr;
      }

      .captainManageGrid {
        grid-template-columns: 1fr;
      }

      .captainManageRegionInline {
        grid-template-columns: 1fr;
      }
    }
  </style>
{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'CAPITAINE',
    hero_title: 'Mon equipe',
    hero_sub: 'Creation et modification dans une seule page.',
    breadcrumb_current: 'Mon equipe'
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
          active: 'team',
          active_team: active_team
        } %}

        <div>
          {% include 'front/partials/_captain_team_selector.html.twig' with {
            captain_teams: captain_teams,
            active_team: active_team,
            selector_route: 'front_captain_team_manage'
          } %}

          <section class=\"panel captainManageMode\">
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
          </section>

          {% if active_team %}
            {% set teamLogoPath = active_team.logoImageId ? active_team.logoImageId.fileUrl : '' %}
            {% if teamLogoPath and (teamLogoPath starts with 'http') %}
              {% set teamLogoUrl = teamLogoPath %}
            {% elseif teamLogoPath %}
              {% set teamLogoUrl = asset(teamLogoPath)|imagine_filter('team_logo') %}
            {% else %}
              {% set teamLogoUrl = 'https://picsum.photos/seed/captain_team_' ~ active_team.teamId ~ '/320/320' %}
            {% endif %}

            <section class=\"captainManageHero\">
              <div class=\"captainManageIdentity\">
                <div class=\"captainManageAvatar avatarLg\" data-avatar=\"{{ teamLogoUrl }}\" aria-hidden=\"true\"></div>
                <div>
                  <h2 class=\"captainManageName\">{{ active_team.name }}</h2>
                  <div class=\"muted\">{{ active_team.region ?: 'Region non definie' }}</div>
                </div>
              </div>

              <div class=\"captainManageStats\">
                <article class=\"captainManageStat\">
                  <div class=\"captainManageStatValue\">{{ team_stats.members }}</div>
                  <div class=\"captainManageStatLabel\">Membres actifs</div>
                </article>
                <article class=\"captainManageStat\">
                  <div class=\"captainManageStatValue\">{{ team_stats.products }}</div>
                  <div class=\"captainManageStatLabel\">Produits</div>
                </article>
                <article class=\"captainManageStat\">
                  <div class=\"captainManageStatValue\">{{ team_stats.tournaments }}</div>
                  <div class=\"captainManageStatLabel\">Inscriptions tournoi</div>
                </article>
              </div>
            </section>
          {% endif %}

          {% if team_form_mode == 'create' %}
            <section class=\"captainManageEditor\">
              <h3 class=\"panel__title\">CREER UNE EQUIPE</h3>
              <form method=\"post\" action=\"{{ path('front_captain_team_manage_create') }}\" enctype=\"multipart/form-data\">
                <div class=\"captainManageGrid\" style=\"margin-top:12px;\">
                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Nom de l'equipe *</span>
                    <input class=\"input\" type=\"text\" name=\"name\" required maxlength=\"100\">
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Region</span>
                    <input class=\"input\" type=\"text\" name=\"region\" maxlength=\"80\" placeholder=\"Ex: Tunis\">
                    <span class=\"muted\">Saisie libre normalisee via OpenStreetMap.</span>
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Description</span>
                    <textarea class=\"textarea\" name=\"description\" rows=\"5\"></textarea>
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Logo equipe</span>
                    <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                  </label>
                </div>

                <div class=\"captainManageActions\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_team_create') }}\">
                  <button class=\"btn btn--primary\" type=\"submit\">Creer equipe</button>
                </div>
              </form>
            </section>
          {% elseif active_team %}
            {% set aiSuggestedBio = ai_team_branding and ai_team_branding.bio ? ai_team_branding.bio : active_team.description %}
            {% set aiSuggestedSlogan = ai_team_branding and ai_team_branding.slogan ? ai_team_branding.slogan : '' %}
            {% set aiStyleHint = ai_team_branding and ai_team_branding.style_hint ? ai_team_branding.style_hint : '' %}

            <section class=\"captainManageEditor\">
              <h3 class=\"panel__title\">MODIFIER L'EQUIPE ACTIVE</h3>

              <form id=\"captainTeamUpdateForm\" method=\"post\" action=\"{{ path('front_captain_team_manage_update', {id: active_team.teamId}) }}\" enctype=\"multipart/form-data\">
                <div class=\"captainManageGrid\" style=\"margin-top:12px;\">
                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Nom de l'equipe *</span>
                    <input class=\"input\" type=\"text\" name=\"name\" value=\"{{ active_team.name }}\" required maxlength=\"100\">
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Region</span>
                    <div class=\"captainManageRegionInline\">
                      <input class=\"input\" id=\"captainTeamRegion\" type=\"text\" name=\"region\" value=\"{{ active_team.region }}\" maxlength=\"80\" placeholder=\"Ex: Tunis\">
                      <button class=\"btn btn--ghost\" type=\"button\" id=\"captainRegionLocate\">Ma position</button>
                    </div>
                    <span class=\"muted\">Saisie libre normalisee via OpenStreetMap.</span>
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Description</span>
                    <textarea class=\"textarea\" name=\"description\" rows=\"6\">{{ aiSuggestedBio }}</textarea>
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Style IA (optionnel)</span>
                    <input class=\"input\" id=\"captainBrandingStyleHint\" type=\"text\" value=\"{{ aiStyleHint }}\" placeholder=\"ex: agressif, pro, tactique...\">
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Slogan IA (apercu)</span>
                    <input class=\"input\" type=\"text\" value=\"{{ aiSuggestedSlogan }}\" placeholder=\"Generer via IA\" readonly>
                  </label>

                  <label class=\"captainManageField\">
                    <span class=\"field__label\">Changer le logo</span>
                    <input class=\"input\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\">
                  </label>
                </div>

                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_team_update_' ~ active_team.teamId) }}\">
              </form>

              <form id=\"captainTeamBrandingForm\" method=\"post\" action=\"{{ path('front_captain_team_manage_generate_branding', {id: active_team.teamId}) }}\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('captain_team_manage_generate_branding_' ~ active_team.teamId) }}\">
                <input type=\"hidden\" name=\"style_hint\" id=\"captainBrandingStyleHintMirror\" value=\"{{ aiStyleHint }}\">
              </form>

              {% if ai_team_branding %}
                <div class=\"captainManageAiMeta\">
                  Source IA: {{ ai_team_branding.provider }}/{{ ai_team_branding.source }} ({{ ai_team_branding.model }}){% if ai_team_branding.generated_at %} - {{ ai_team_branding.generated_at }}{% endif %}
                </div>
              {% endif %}

              <div class=\"captainManageActions\">
                <button class=\"btn btn--soft\" type=\"submit\" form=\"captainTeamBrandingForm\">Generer bio + slogan (IA)</button>
                <button class=\"btn btn--primary\" type=\"submit\" form=\"captainTeamUpdateForm\">Enregistrer</button>
              </div>
              <div class=\"captainManageStatus\" id=\"captainRegionLocateStatus\"></div>
            </section>
          {% endif %}

          <section class=\"panel\">
            <h3 class=\"panel__title\">MES EQUIPES</h3>
            <div class=\"tableWrap\" style=\"margin-top:10px;\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Logo</th>
                    <th>Equipe</th>
                    <th>Region</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {% for team in captain_teams %}
                    {% set listLogoPath = team.logoImageId ? team.logoImageId.fileUrl : '' %}
                    {% if listLogoPath and (listLogoPath starts with 'http') %}
                      {% set listLogoUrl = listLogoPath %}
                    {% elseif listLogoPath %}
                      {% set listLogoUrl = asset(listLogoPath)|imagine_filter('team_thumbnail') %}
                    {% else %}
                      {% set listLogoUrl = 'https://picsum.photos/seed/captain_team_list_' ~ (team.teamId ?? 0) ~ '/96/96' %}
                    {% endif %}
                    <tr>
                      <td><div class=\"avatar\" data-avatar=\"{{ listLogoUrl }}\" aria-hidden=\"true\"></div></td>
                      <td>{{ team.name }}</td>
                      <td>{{ team.region ?: '-' }}</td>
                      <td>
                        <a class=\"btn btn--ghost\" href=\"{{ path('front_captain_team_manage', {team: team.teamId}) }}\">Gerer</a>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"4\">Aucune equipe pour le moment.</td>
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
  <script>
    (function () {
      var styleHintInput = document.getElementById('captainBrandingStyleHint');
      var styleHintMirror = document.getElementById('captainBrandingStyleHintMirror');
      var syncStyleHint = function () {
        if (!styleHintInput || !styleHintMirror) {
          return;
        }

        styleHintMirror.value = styleHintInput.value.trim();
      };

      if (styleHintInput && styleHintMirror) {
        styleHintInput.addEventListener('input', syncStyleHint);
        syncStyleHint();
      }

      var locateButton = document.getElementById('captainRegionLocate');
      var regionInput = document.getElementById('captainTeamRegion');
      var locateStatus = document.getElementById('captainRegionLocateStatus');

      var setLocateStatus = function (message) {
        if (!locateStatus) {
          return;
        }

        locateStatus.textContent = message;
      };

      if (!locateButton || !regionInput) {
        return;
      }

      locateButton.addEventListener('click', function () {
        if (!('geolocation' in navigator)) {
          setLocateStatus('Geolocalisation indisponible sur ce navigateur.');
          return;
        }

        locateButton.disabled = true;
        setLocateStatus('Localisation en cours...');

        navigator.geolocation.getCurrentPosition(
          function (position) {
            var lat = String(position.coords.latitude || '');
            var lon = String(position.coords.longitude || '');

            fetch('https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=' + encodeURIComponent(lat) + '&lon=' + encodeURIComponent(lon), {
              headers: {
                'Accept': 'application/json'
              }
            })
              .then(function (response) { return response.json(); })
              .then(function (payload) {
                var address = payload && payload.address ? payload.address : {};
                var city = String(address.city || address.town || address.village || address.state || '').trim();
                var country = String(address.country || '').trim();
                var resolvedRegion = '';

                if (city !== '' && country !== '' && city.toLowerCase() !== country.toLowerCase()) {
                  resolvedRegion = city + ', ' + country;
                } else if (city !== '') {
                  resolvedRegion = city;
                } else if (country !== '') {
                  resolvedRegion = country;
                } else {
                  resolvedRegion = String(payload && payload.display_name ? payload.display_name : '').split(',').slice(0, 2).join(',').trim();
                }

                if (resolvedRegion !== '') {
                  regionInput.value = resolvedRegion;
                  setLocateStatus('Position detectee via OpenStreetMap.');
                } else {
                  setLocateStatus('Position detectee, region non resolue.');
                }
              })
              .catch(function () {
                setLocateStatus('Impossible de resoudre la position OpenStreetMap.');
              })
              .finally(function () {
                locateButton.disabled = false;
              });
          },
          function () {
            locateButton.disabled = false;
            setLocateStatus('Autorisez la geolocalisation pour remplir la region.');
          },
          {
            enableHighAccuracy: true,
            timeout: 10000,
            maximumAge: 0
          }
        );
      });
    })();
  </script>
{% endblock %}

", "front/pages/captain-team-manage.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\front\\pages\\captain-team-manage.html.twig");
    }
}
