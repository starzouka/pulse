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

/* admin/pages/teams.html.twig */
class __TwigTemplate_262be1bd917900d7fe270e3cdeb22b06 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/teams.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/teams.html.twig"));

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

        yield "PULSE - Gestion equipes";
        
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
      <h2>Gestion equipes</h2>
      <div class=\"pageSub\">CRUD complet + filtres DB + export.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_teams_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), ["format" => "pdf"])), "html", null, true);
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_teams_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), ["format" => "excel"])), "html", null, true);
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
        yield (((($tmp = (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("MODIFIER EQUIPE #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 41, $this->source); })()), "teamId", [], "any", false, false, false, 41)), "html", null, true)) : ("NOUVELLE EQUIPE"));
        yield "</h3>
    </div>

    <form method=\"post\" enctype=\"multipart/form-data\">
      <input type=\"hidden\" name=\"_token\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_team_form"), "html", null, true);
        yield "\" />
      <input type=\"hidden\" name=\"team_id\" value=\"";
        // line 46
        yield (((($tmp = (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 46, $this->source); })()), "teamId", [], "any", false, false, false, 46), "html", null, true)) : (""));
        yield "\" />

      <div class=\"formGrid\">
        <div class=\"field\">
          <label for=\"team_name\">Nom equipe *</label>
          <input id=\"team_name\" type=\"text\" name=\"name\" required value=\"";
        // line 51
        yield (((($tmp = (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"team_region\">Region</label>
          <input id=\"team_region\" type=\"text\" name=\"region\" value=\"";
        // line 56
        yield (((($tmp = (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 56, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 56, $this->source); })()), "region", [], "any", false, false, false, 56), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"team_captain\">Capitaine *</label>
          <select id=\"team_captain\" name=\"captain_user_id\" required>
            <option value=\"\">Selectionner</option>
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["captains"]) || array_key_exists("captains", $context) ? $context["captains"] : (function () { throw new RuntimeError('Variable "captains" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["captain"]) {
            // line 64
            yield "              ";
            $context["captainId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["captain"], "userId", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["captain"], "userId", [], "any", false, false, false, 64)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["captain"], "userId", [], "any", false, false, false, 64)) : (0));
            // line 65
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["captainId"]) || array_key_exists("captainId", $context) ? $context["captainId"] : (function () { throw new RuntimeError('Variable "captainId" does not exist.', 65, $this->source); })()), "html", null, true);
            yield "\" ";
            yield (((((isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 65, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 65, $this->source); })()), "captainUserId", [], "any", false, false, false, 65)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 65, $this->source); })()), "captainUserId", [], "any", false, false, false, 65), "userId", [], "any", false, false, false, 65) == (isset($context["captainId"]) || array_key_exists("captainId", $context) ? $context["captainId"] : (function () { throw new RuntimeError('Variable "captainId" does not exist.', 65, $this->source); })())))) ? ("selected") : (""));
            yield ">
                ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["captain"], "username", [], "any", false, false, false, 66), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["captain"], "email", [], "any", false, false, false, 66), "html", null, true);
            yield ")
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "          </select>
        </div>

        <div class=\"field\">
          <label for=\"team_logo_file\">Logo (fichier)</label>
          <input id=\"team_logo_file\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\" />
          ";
        // line 75
        if (((isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 75, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 75, $this->source); })()), "logoImageId", [], "any", false, false, false, 75))) {
            // line 76
            yield "            ";
            $context["currentLogoUrl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 76, $this->source); })()), "logoImageId", [], "any", false, false, false, 76), "fileUrl", [], "any", false, false, false, 76);
            // line 77
            yield "            <div class=\"listMeta\">Logo actuel</div>
            <img src=\"";
            // line 78
            yield (((is_string($_v0 = (isset($context["currentLogoUrl"]) || array_key_exists("currentLogoUrl", $context) ? $context["currentLogoUrl"] : (function () { throw new RuntimeError('Variable "currentLogoUrl" does not exist.', 78, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentLogoUrl"]) || array_key_exists("currentLogoUrl", $context) ? $context["currentLogoUrl"] : (function () { throw new RuntimeError('Variable "currentLogoUrl" does not exist.', 78, $this->source); })()), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["currentLogoUrl"]) || array_key_exists("currentLogoUrl", $context) ? $context["currentLogoUrl"] : (function () { throw new RuntimeError('Variable "currentLogoUrl" does not exist.', 78, $this->source); })())), "html", null, true)));
            yield "\" alt=\"logo actuel\" style=\"width:56px;height:56px;border-radius:12px;object-fit:cover;border:1px solid rgba(255,255,255,.12);\" />
          ";
        }
        // line 80
        yield "        </div>

        <div class=\"field\" style=\"grid-column: 1 / -1;\">
          <label for=\"team_description\">Description</label>
          <textarea id=\"team_description\" name=\"description\">";
        // line 84
        yield (((($tmp = (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), "html", null, true)) : (""));
        yield "</textarea>
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 89
        yield (((($tmp = (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 89, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer equipe"));
        yield "</button>
        ";
        // line 90
        if ((($tmp = (isset($context["editingTeam"]) || array_key_exists("editingTeam", $context) ? $context["editingTeam"] : (function () { throw new RuntimeError('Variable "editingTeam" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "          <a class=\"btn btnGhost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_teams");
            yield "\">Annuler edition</a>
        ";
        }
        // line 93
        yield "      </div>
    </form>
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_teams");
        yield "\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 98)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 98, $this->source); })()), "sort", [], "any", false, false, false, 98), "created_at")) : ("created_at")), "html", null, true);
        yield "\" />
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 99)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 99, $this->source); })()), "direction", [], "any", false, false, false, 99), "desc")) : ("desc")), "html", null, true);
        yield "\" />

    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 103, $this->source); })()), "q", [], "any", false, false, false, 103), "html", null, true);
        yield "\" placeholder=\"nom, desc, captain\" />
    </div>

    <div class=\"filterGroup\">
      <label>Region</label>
      <input type=\"text\" name=\"region\" value=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 108, $this->source); })()), "region", [], "any", false, false, false, 108), "html", null, true);
        yield "\" placeholder=\"EU, NA, ...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Capitaine</label>
      <input type=\"search\" name=\"captain\" value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 113, $this->source); })()), "captain", [], "any", false, false, false, 113), "html", null, true);
        yield "\" placeholder=\"username/email\" />
    </div>

    <div class=\"filterGroup\">
      <label>Avec produits</label>
      <select name=\"with_products\">
        <option value=\"\" ";
        // line 119
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 119, $this->source); })()), "with_products", [], "any", false, false, false, 119) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        <option value=\"1\" ";
        // line 120
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 120, $this->source); })()), "with_products", [], "any", false, false, false, 120) == "1")) ? ("selected") : (""));
        yield ">Oui</option>
        <option value=\"0\" ";
        // line 121
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 121, $this->source); })()), "with_products", [], "any", false, false, false, 121) == "0")) ? ("selected") : (""));
        yield ">Non</option>
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_teams");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE</h3>
      <span class=\"listMeta\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 134, $this->source); })())), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Logo</th>
            <th>";
        // line 142
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 142, $this->getSourceContext())->macro_sort_link(...["admin_teams", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 142, $this->source); })()), "id", "ID"]);
        yield "</th>
            <th>";
        // line 143
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 143, $this->getSourceContext())->macro_sort_link(...["admin_teams", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 143, $this->source); })()), "name", "Nom"]);
        yield "</th>
            <th>";
        // line 144
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 144, $this->getSourceContext())->macro_sort_link(...["admin_teams", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 144, $this->source); })()), "region", "Region"]);
        yield "</th>
            <th>";
        // line 145
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 145, $this->getSourceContext())->macro_sort_link(...["admin_teams", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 145, $this->source); })()), "captain", "Capitaine"]);
        yield "</th>
            <th>";
        // line 146
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 146, $this->getSourceContext())->macro_sort_link(...["admin_teams", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 146, $this->source); })()), "members", "Membres"]);
        yield "</th>
            <th>";
        // line 147
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 147, $this->getSourceContext())->macro_sort_link(...["admin_teams", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 147, $this->source); })()), "products", "Produits"]);
        yield "</th>
            <th>";
        // line 148
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 148, $this->getSourceContext())->macro_sort_link(...["admin_teams", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 148, $this->source); })()), "created_at", "Cree le"]);
        yield "</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 153, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 154
            yield "            ";
            $context["teamId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", true, true, false, 154) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 154)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["team"], "teamId", [], "any", false, false, false, 154)) : (0));
            // line 155
            yield "            <tr>
              <td>
                ";
            // line 157
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "logoImageId", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 158
                yield "                  ";
                $context["logoUrl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["team"], "logoImageId", [], "any", false, false, false, 158), "fileUrl", [], "any", false, false, false, 158);
                // line 159
                yield "                  <img src=\"";
                yield (((is_string($_v2 = (isset($context["logoUrl"]) || array_key_exists("logoUrl", $context) ? $context["logoUrl"] : (function () { throw new RuntimeError('Variable "logoUrl" does not exist.', 159, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logoUrl"]) || array_key_exists("logoUrl", $context) ? $context["logoUrl"] : (function () { throw new RuntimeError('Variable "logoUrl" does not exist.', 159, $this->source); })()), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logoUrl"]) || array_key_exists("logoUrl", $context) ? $context["logoUrl"] : (function () { throw new RuntimeError('Variable "logoUrl" does not exist.', 159, $this->source); })())), "html", null, true)));
                yield "\" alt=\"logo\" style=\"width:28px;height:28px;border-radius:999px;object-fit:cover;\" />
                ";
            } else {
                // line 161
                yield "                  <span class=\"avatarSmall\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 161), 0, 1)), "html", null, true);
                yield "</span>
                ";
            }
            // line 163
            yield "              </td>
              <td>#";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 164, $this->source); })()), "html", null, true);
            yield "</td>
              <td>";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 165), "html", null, true);
            yield "</td>
              <td>";
            // line 166
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 166)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "region", [], "any", false, false, false, 166), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 167
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "captainUserId", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["team"], "captainUserId", [], "any", false, false, false, 167), "username", [], "any", false, false, false, 167), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["membersByTeamId"] ?? null), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 168, $this->source); })()), [], "array", true, true, false, 168)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membersByTeamId"]) || array_key_exists("membersByTeamId", $context) ? $context["membersByTeamId"] : (function () { throw new RuntimeError('Variable "membersByTeamId" does not exist.', 168, $this->source); })()), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 168, $this->source); })()), [], "array", false, false, false, 168), 0)) : (0)), "html", null, true);
            yield "</td>
              <td>";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["productsByTeamId"] ?? null), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 169, $this->source); })()), [], "array", true, true, false, 169)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["productsByTeamId"]) || array_key_exists("productsByTeamId", $context) ? $context["productsByTeamId"] : (function () { throw new RuntimeError('Variable "productsByTeamId" does not exist.', 169, $this->source); })()), (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 169, $this->source); })()), [], "array", false, false, false, 169), 0)) : (0)), "html", null, true);
            yield "</td>
              <td>";
            // line 170
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "createdAt", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "createdAt", [], "any", false, false, false, 170), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_teams", ["edit" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 173, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_team_delete", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 174, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer cette equipe ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_team_" . (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 175, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 181
        if (!$context['_iterated']) {
            // line 182
            yield "            <tr>
              <td colspan=\"9\" class=\"listMeta\">Aucune equipe trouvee.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
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
        return "admin/pages/teams.html.twig";
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
        return array (  533 => 10,  528 => 9,  525 => 8,  522 => 7,  519 => 6,  516 => 5,  513 => 4,  492 => 3,  477 => 186,  468 => 182,  466 => 181,  455 => 175,  451 => 174,  447 => 173,  441 => 170,  437 => 169,  433 => 168,  429 => 167,  425 => 166,  421 => 165,  417 => 164,  414 => 163,  408 => 161,  402 => 159,  399 => 158,  397 => 157,  393 => 155,  390 => 154,  385 => 153,  377 => 148,  373 => 147,  369 => 146,  365 => 145,  361 => 144,  357 => 143,  353 => 142,  342 => 134,  332 => 127,  323 => 121,  319 => 120,  315 => 119,  306 => 113,  298 => 108,  290 => 103,  283 => 99,  279 => 98,  275 => 97,  269 => 93,  263 => 91,  261 => 90,  257 => 89,  249 => 84,  243 => 80,  238 => 78,  235 => 77,  232 => 76,  230 => 75,  222 => 69,  211 => 66,  204 => 65,  201 => 64,  197 => 63,  187 => 56,  179 => 51,  171 => 46,  167 => 45,  160 => 41,  155 => 38,  149 => 37,  138 => 34,  134 => 33,  131 => 32,  126 => 31,  122 => 30,  115 => 26,  111 => 25,  103 => 19,  90 => 18,  67 => 16,  56 => 1,  54 => 14,  41 => 1,);
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

{% block title %}PULSE - Gestion equipes{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion equipes</h2>
      <div class=\"pageSub\">CRUD complet + filtres DB + export.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_teams_export', filters|merge({format: 'pdf'})) }}\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_teams_export', filters|merge({format: 'excel'})) }}\">Exporter Excel</a>
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
      <h3 class=\"panelTitle\">{{ editingTeam ? 'MODIFIER EQUIPE #' ~ editingTeam.teamId : 'NOUVELLE EQUIPE' }}</h3>
    </div>

    <form method=\"post\" enctype=\"multipart/form-data\">
      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_team_form') }}\" />
      <input type=\"hidden\" name=\"team_id\" value=\"{{ editingTeam ? editingTeam.teamId : '' }}\" />

      <div class=\"formGrid\">
        <div class=\"field\">
          <label for=\"team_name\">Nom equipe *</label>
          <input id=\"team_name\" type=\"text\" name=\"name\" required value=\"{{ editingTeam ? editingTeam.name : '' }}\" />
        </div>

        <div class=\"field\">
          <label for=\"team_region\">Region</label>
          <input id=\"team_region\" type=\"text\" name=\"region\" value=\"{{ editingTeam ? editingTeam.region : '' }}\" />
        </div>

        <div class=\"field\">
          <label for=\"team_captain\">Capitaine *</label>
          <select id=\"team_captain\" name=\"captain_user_id\" required>
            <option value=\"\">Selectionner</option>
            {% for captain in captains %}
              {% set captainId = captain.userId ?? 0 %}
              <option value=\"{{ captainId }}\" {{ editingTeam and editingTeam.captainUserId and editingTeam.captainUserId.userId == captainId ? 'selected' : '' }}>
                {{ captain.username }} ({{ captain.email }})
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"field\">
          <label for=\"team_logo_file\">Logo (fichier)</label>
          <input id=\"team_logo_file\" type=\"file\" name=\"logo_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\" />
          {% if editingTeam and editingTeam.logoImageId %}
            {% set currentLogoUrl = editingTeam.logoImageId.fileUrl %}
            <div class=\"listMeta\">Logo actuel</div>
            <img src=\"{{ currentLogoUrl starts with 'http' ? currentLogoUrl : asset(currentLogoUrl) }}\" alt=\"logo actuel\" style=\"width:56px;height:56px;border-radius:12px;object-fit:cover;border:1px solid rgba(255,255,255,.12);\" />
          {% endif %}
        </div>

        <div class=\"field\" style=\"grid-column: 1 / -1;\">
          <label for=\"team_description\">Description</label>
          <textarea id=\"team_description\" name=\"description\">{{ editingTeam ? editingTeam.description : '' }}</textarea>
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">{{ editingTeam ? 'Mettre a jour' : 'Creer equipe' }}</button>
        {% if editingTeam %}
          <a class=\"btn btnGhost\" href=\"{{ path('admin_teams') }}\">Annuler edition</a>
        {% endif %}
      </div>
    </form>
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"{{ path('admin_teams') }}\">
    <input type=\"hidden\" name=\"sort\" value=\"{{ filters.sort|default('created_at') }}\" />
    <input type=\"hidden\" name=\"direction\" value=\"{{ filters.direction|default('desc') }}\" />

    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"nom, desc, captain\" />
    </div>

    <div class=\"filterGroup\">
      <label>Region</label>
      <input type=\"text\" name=\"region\" value=\"{{ filters.region }}\" placeholder=\"EU, NA, ...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Capitaine</label>
      <input type=\"search\" name=\"captain\" value=\"{{ filters.captain }}\" placeholder=\"username/email\" />
    </div>

    <div class=\"filterGroup\">
      <label>Avec produits</label>
      <select name=\"with_products\">
        <option value=\"\" {{ filters.with_products == '' ? 'selected' : '' }}>ALL</option>
        <option value=\"1\" {{ filters.with_products == '1' ? 'selected' : '' }}>Oui</option>
        <option value=\"0\" {{ filters.with_products == '0' ? 'selected' : '' }}>Non</option>
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_teams') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE</h3>
      <span class=\"listMeta\">{{ teams|length }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Logo</th>
            <th>{{ sorter.sort_link('admin_teams', filters, 'id', 'ID') }}</th>
            <th>{{ sorter.sort_link('admin_teams', filters, 'name', 'Nom') }}</th>
            <th>{{ sorter.sort_link('admin_teams', filters, 'region', 'Region') }}</th>
            <th>{{ sorter.sort_link('admin_teams', filters, 'captain', 'Capitaine') }}</th>
            <th>{{ sorter.sort_link('admin_teams', filters, 'members', 'Membres') }}</th>
            <th>{{ sorter.sort_link('admin_teams', filters, 'products', 'Produits') }}</th>
            <th>{{ sorter.sort_link('admin_teams', filters, 'created_at', 'Cree le') }}</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for team in teams %}
            {% set teamId = team.teamId ?? 0 %}
            <tr>
              <td>
                {% if team.logoImageId %}
                  {% set logoUrl = team.logoImageId.fileUrl %}
                  <img src=\"{{ logoUrl starts with 'http' ? logoUrl : asset(logoUrl) }}\" alt=\"logo\" style=\"width:28px;height:28px;border-radius:999px;object-fit:cover;\" />
                {% else %}
                  <span class=\"avatarSmall\">{{ team.name|slice(0, 1)|upper }}</span>
                {% endif %}
              </td>
              <td>#{{ teamId }}</td>
              <td>{{ team.name }}</td>
              <td>{{ team.region ?: '-' }}</td>
              <td>{{ team.captainUserId ? team.captainUserId.username : '-' }}</td>
              <td>{{ membersByTeamId[teamId]|default(0) }}</td>
              <td>{{ productsByTeamId[teamId]|default(0) }}</td>
              <td>{{ team.createdAt ? team.createdAt|date('d/m/Y H:i') : '-' }}</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_teams', {edit: teamId}) }}\">Update</a>
                  <form method=\"post\" action=\"{{ path('admin_team_delete', {id: teamId}) }}\" onsubmit=\"return confirm('Supprimer cette equipe ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_team_' ~ teamId) }}\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"9\" class=\"listMeta\">Aucune equipe trouvee.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/teams.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\admin\\pages\\teams.html.twig");
    }
}
