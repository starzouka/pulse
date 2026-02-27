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

/* admin/pages/games.html.twig */
class __TwigTemplate_03651ebc6890e6b9649fb7af995d633a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/games.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/games.html.twig"));

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

        yield "PULSE - Gestion jeux";
        
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
      <h2>Gestion jeux</h2>
      <div class=\"pageSub\">CRUD + IA + slug SEO + score intelligent.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalog_dashboard");
        yield "\">KPI Catalogue</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), ["format" => "pdf"])), "html", null, true);
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })()), ["format" => "excel"])), "html", null, true);
        yield "\">Exporter Excel</a>
    </div>
  </div>

  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 32
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                yield "      <div class=\"listItem\">
        <span>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
        <span class=\"badge ";
                // line 35
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
            // line 38
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">";
        // line 42
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 42, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("MODIFIER JEU #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 42, $this->source); })()), "gameId", [], "any", false, false, false, 42)), "html", null, true)) : ("NOUVEAU JEU"));
        yield "</h3>
    </div>

    <form method=\"post\" enctype=\"multipart/form-data\" id=\"adminGameForm\">
      <input type=\"hidden\" name=\"_token\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_game_form"), "html", null, true);
        yield "\" />
      <input type=\"hidden\" id=\"adminGameAiToken\" value=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_game_ai"), "html", null, true);
        yield "\" />
      <input type=\"hidden\" name=\"game_id\" value=\"";
        // line 48
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 48, $this->source); })()), "gameId", [], "any", false, false, false, 48), "html", null, true)) : (""));
        yield "\" />

      <div class=\"formGrid\">
        <div class=\"field\">
          <label for=\"game_name\">Nom jeu *</label>
          <input id=\"game_name\" type=\"text\" name=\"name\" required value=\"";
        // line 53
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"game_category_id\">Categorie *</label>
          <select id=\"game_category_id\" name=\"category_id\" required>
            <option value=\"\">Selectionner</option>
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 61
            yield "              ";
            $context["categoryId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 61)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 61)) : (0));
            // line 62
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoryId"]) || array_key_exists("categoryId", $context) ? $context["categoryId"] : (function () { throw new RuntimeError('Variable "categoryId" does not exist.', 62, $this->source); })()), "html", null, true);
            yield "\" ";
            yield (((((isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 62, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 62, $this->source); })()), "categoryId", [], "any", false, false, false, 62)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 62, $this->source); })()), "categoryId", [], "any", false, false, false, 62), "categoryId", [], "any", false, false, false, 62) == (isset($context["categoryId"]) || array_key_exists("categoryId", $context) ? $context["categoryId"] : (function () { throw new RuntimeError('Variable "categoryId" does not exist.', 62, $this->source); })())))) ? ("selected") : (""));
            yield ">
                ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 63), "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "          </select>
        </div>

        <div class=\"field\">
          <label for=\"game_publisher\">Publisher</label>
          <input id=\"game_publisher\" type=\"text\" name=\"publisher\" value=\"";
        // line 71
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 71, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 71, $this->source); })()), "publisher", [], "any", false, false, false, 71), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"game_status\">Statut *</label>
          <select id=\"game_status\" name=\"status\">
            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 78
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\" ";
            yield ((((((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 78, $this->source); })()), "status", [], "any", false, false, false, 78)) : ("DRAFT")) == $context["status"])) ? ("selected") : (""));
            yield ">
                ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "          </select>
        </div>

        <div class=\"field\">
          <label for=\"game_cover_name\">Nom cover (métier)</label>
          <input id=\"game_cover_name\" type=\"text\" name=\"cover_name\" value=\"";
        // line 87
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 87, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 87, $this->source); })()), "coverName", [], "any", false, false, false, 87), "html", null, true)) : (""));
        yield "\" placeholder=\"cover-free-fire-season-7\" />
        </div>

        <div class=\"field\">
          <label for=\"game_cover_file\">Cover (fichier)</label>
          <input id=\"game_cover_file\" type=\"file\" name=\"cover_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\" />
          ";
        // line 93
        if (((isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 93, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 93, $this->source); })()), "coverImageId", [], "any", false, false, false, 93))) {
            // line 94
            yield "            ";
            $context["currentCoverUrl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 94, $this->source); })()), "coverImageId", [], "any", false, false, false, 94), "fileUrl", [], "any", false, false, false, 94);
            // line 95
            yield "            <div class=\"listMeta\">Cover actuelle</div>
            <img src=\"";
            // line 96
            yield (((is_string($_v0 = (isset($context["currentCoverUrl"]) || array_key_exists("currentCoverUrl", $context) ? $context["currentCoverUrl"] : (function () { throw new RuntimeError('Variable "currentCoverUrl" does not exist.', 96, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentCoverUrl"]) || array_key_exists("currentCoverUrl", $context) ? $context["currentCoverUrl"] : (function () { throw new RuntimeError('Variable "currentCoverUrl" does not exist.', 96, $this->source); })()), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["currentCoverUrl"]) || array_key_exists("currentCoverUrl", $context) ? $context["currentCoverUrl"] : (function () { throw new RuntimeError('Variable "currentCoverUrl" does not exist.', 96, $this->source); })())), "html", null, true)));
            yield "\" alt=\"cover actuelle\" style=\"width:56px;height:56px;border-radius:12px;object-fit:cover;border:1px solid rgba(255,255,255,.12);\" />
          ";
        }
        // line 98
        yield "        </div>

        <div class=\"field\" style=\"grid-column: 1 / -1;\">
          <label for=\"game_description\">Description</label>
          <textarea id=\"game_description\" name=\"description\">";
        // line 102
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 102, $this->source); })()), "description", [], "any", false, false, false, 102), "html", null, true)) : (""));
        yield "</textarea>
          <div id=\"gameAiMeta\" class=\"listMeta\" style=\"margin-top:8px;\">IA: non utilisee</div>
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnGhost\" type=\"button\" id=\"btnGameAiSuggest\">AI Suggestion</button>
        <button class=\"btn btnGhost\" type=\"button\" id=\"btnGameAiAutofill\">AI AutoFill</button>
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 110
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 110, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer jeu"));
        yield "</button>
        ";
        // line 111
        if ((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 111, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "          <a class=\"btn btnGhost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games");
            yield "\">Annuler edition</a>
        ";
        }
        // line 114
        yield "      </div>
    </form>
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games");
        yield "\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 119)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 119, $this->source); })()), "sort", [], "any", false, false, false, 119), "created_at")) : ("created_at")), "html", null, true);
        yield "\" />
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 120, $this->source); })()), "direction", [], "any", false, false, false, 120), "desc")) : ("desc")), "html", null, true);
        yield "\" />

    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 124, $this->source); })()), "q", [], "any", false, false, false, 124), "html", null, true);
        yield "\" placeholder=\"name, slug, desc, publisher\" />
    </div>

    <div class=\"filterGroup\">
      <label>Categorie</label>
      <select name=\"category_id\">
        <option value=\"\" ";
        // line 130
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 130, $this->source); })()), "category_id", [], "any", false, false, false, 130) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 132
            yield "          ";
            $context["categoryId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", true, true, false, 132) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 132)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 132)) : (0));
            // line 133
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoryId"]) || array_key_exists("categoryId", $context) ? $context["categoryId"] : (function () { throw new RuntimeError('Variable "categoryId" does not exist.', 133, $this->source); })()), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 133, $this->source); })()), "category_id", [], "any", false, false, false, 133) == (isset($context["categoryId"]) || array_key_exists("categoryId", $context) ? $context["categoryId"] : (function () { throw new RuntimeError('Variable "categoryId" does not exist.', 133, $this->source); })()))) ? ("selected") : (""));
            yield ">
            ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 134), "html", null, true);
            yield "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Publisher</label>
      <input type=\"text\" name=\"publisher\" value=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 142, $this->source); })()), "publisher", [], "any", false, false, false, 142), "html", null, true);
        yield "\" placeholder=\"Riot, Valve, ...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Statut</label>
      <select name=\"status\">
        <option value=\"\" ";
        // line 148
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 148, $this->source); })()), "status", [], "any", false, false, false, 148) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 149, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 150
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 150, $this->source); })()), "status", [], "any", false, false, false, 150) == $context["status"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE JEUX</h3>
      <span class=\"listMeta\">";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["gamesPagination"] ?? null), "getTotalItemCount", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamesPagination"]) || array_key_exists("gamesPagination", $context) ? $context["gamesPagination"] : (function () { throw new RuntimeError('Variable "gamesPagination" does not exist.', 164, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 164), 0)) : (0)), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Cover</th>
            <th>";
        // line 172
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 172, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 172, $this->source); })()), "id", "ID"]);
        yield "</th>
            <th>";
        // line 173
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 173, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 173, $this->source); })()), "name", "Nom"]);
        yield "</th>
            <th>";
        // line 174
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 174, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 174, $this->source); })()), "slug", "Slug"]);
        yield "</th>
            <th>";
        // line 175
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 175, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 175, $this->source); })()), "category", "Categorie"]);
        yield "</th>
            <th>";
        // line 176
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 176, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 176, $this->source); })()), "status", "Statut"]);
        yield "</th>
            <th>";
        // line 177
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 177, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 177, $this->source); })()), "publisher", "Publisher"]);
        yield "</th>
            <th>";
        // line 178
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 178, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 178, $this->source); })()), "views", "Vues"]);
        yield "</th>
            <th>";
        // line 179
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 179, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 179, $this->source); })()), "favorites", "Favoris"]);
        yield "</th>
            <th>";
        // line 180
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 180, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 180, $this->source); })()), "score", "Score"]);
        yield "</th>
            <th>";
        // line 181
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 181, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 181, $this->source); })()), "created_at", "Cree le"]);
        yield "</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["gamesPagination"]) || array_key_exists("gamesPagination", $context) ? $context["gamesPagination"] : (function () { throw new RuntimeError('Variable "gamesPagination" does not exist.', 186, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 187
            yield "            ";
            $context["gameId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", true, true, false, 187) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 187)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 187)) : (0));
            // line 188
            yield "            <tr>
              <td>
                ";
            // line 190
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["game"], "coverImageId", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 191
                yield "                  ";
                $context["coverUrl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["game"], "coverImageId", [], "any", false, false, false, 191), "fileUrl", [], "any", false, false, false, 191);
                // line 192
                yield "                  <img src=\"";
                yield (((is_string($_v2 = (isset($context["coverUrl"]) || array_key_exists("coverUrl", $context) ? $context["coverUrl"] : (function () { throw new RuntimeError('Variable "coverUrl" does not exist.', 192, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coverUrl"]) || array_key_exists("coverUrl", $context) ? $context["coverUrl"] : (function () { throw new RuntimeError('Variable "coverUrl" does not exist.', 192, $this->source); })()), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["coverUrl"]) || array_key_exists("coverUrl", $context) ? $context["coverUrl"] : (function () { throw new RuntimeError('Variable "coverUrl" does not exist.', 192, $this->source); })())), "html", null, true)));
                yield "\" alt=\"cover\" style=\"width:34px;height:34px;border-radius:8px;object-fit:cover;\" />
                ";
            } else {
                // line 194
                yield "                  <span class=\"avatarSmall\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 194), 0, 1)), "html", null, true);
                yield "</span>
                ";
            }
            // line 196
            yield "              </td>
              <td>#";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 197, $this->source); })()), "html", null, true);
            yield "</td>
              <td>";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 198), "html", null, true);
            yield "</td>
              <td><span class=\"listMeta\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "slug", [], "any", false, false, false, 199), "html", null, true);
            yield "</span></td>
              <td>";
            // line 200
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["game"], "categoryId", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["game"], "categoryId", [], "any", false, false, false, 200), "name", [], "any", false, false, false, 200), "html", null, true)) : ("-"));
            yield "</td>
              <td><span class=\"badge badge--info\">";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "status", [], "any", false, false, false, 201), "html", null, true);
            yield "</span></td>
              <td>";
            // line 202
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["game"], "publisher", [], "any", false, false, false, 202)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "publisher", [], "any", false, false, false, 202), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "viewsCount", [], "any", false, false, false, 203), "html", null, true);
            yield "</td>
              <td>";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "favoritesCount", [], "any", false, false, false, 204), "html", null, true);
            yield "</td>
              <td><b>";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "popularityScore", [], "any", false, false, false, 205), "html", null, true);
            yield "</b></td>
              <td>";
            // line 206
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["game"], "createdAt", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "createdAt", [], "any", false, false, false, 206), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games", ["edit" => (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 209, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_game_delete", ["id" => (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 210, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce jeu ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_game_" . (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 211, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 217
        if (!$context['_iterated']) {
            // line 218
            yield "            <tr>
              <td colspan=\"12\" class=\"listMeta\">Aucun jeu trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        yield "        </tbody>
      </table>
    </div>

    <div style=\"margin-top:12px;\">
      ";
        // line 227
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["gamesPagination"]) || array_key_exists("gamesPagination", $context) ? $context["gamesPagination"] : (function () { throw new RuntimeError('Variable "gamesPagination" does not exist.', 227, $this->source); })()));
        yield "
    </div>
  </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 232
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

        // line 233
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script>
    (() => {
      const suggestBtn = document.getElementById('btnGameAiSuggest');
      const autofillBtn = document.getElementById('btnGameAiAutofill');
      const aiMeta = document.getElementById('gameAiMeta');
      const token = document.getElementById('adminGameAiToken')?.value || '';

      const nameField = document.getElementById('game_name');
      const descField = document.getElementById('game_description');
      const publisherField = document.getElementById('game_publisher');
      const statusField = document.getElementById('game_status');
      const categoryField = document.getElementById('game_category_id');

      const toBody = () => {
        const categoryName = categoryField && categoryField.selectedOptions.length > 0
          ? (categoryField.selectedOptions[0].textContent || '').trim()
          : '';

        return new URLSearchParams({
          _token: token,
          name: nameField?.value || '',
          description: descField?.value || '',
          publisher: publisherField?.value || '',
          category: categoryName,
        });
      };

      const callAi = async (url) => {
        const response = await fetch(url, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
            'X-Requested-With': 'XMLHttpRequest',
          },
          body: toBody().toString(),
        });

        return response.json();
      };

      suggestBtn?.addEventListener('click', async () => {
        try {
          suggestBtn.disabled = true;
          const payload = await callAi('";
        // line 277
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games_ai_suggest");
        yield "');
          if (!payload?.ok || !payload?.data) {
            throw new Error('Suggestion IA impossible.');
          }

          const suggestion = String(payload.data.suggestion || '').trim();
          if (suggestion !== '') {
            descField.value = suggestion;
          }

          aiMeta.textContent = `IA Suggestion: \${payload.data.provider}/\${payload.data.source}`;
        } catch (error) {
          aiMeta.textContent = 'IA Suggestion indisponible, fallback local applique.';
        } finally {
          suggestBtn.disabled = false;
        }
      });

      autofillBtn?.addEventListener('click', async () => {
        try {
          autofillBtn.disabled = true;
          const payload = await callAi('";
        // line 298
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games_ai_autofill");
        yield "');
          if (!payload?.ok || !payload?.data) {
            throw new Error('AutoFill IA impossible.');
          }

          if (String(payload.data.name || '').trim() !== '') {
            nameField.value = payload.data.name;
          }
          if (String(payload.data.description || '').trim() !== '') {
            descField.value = payload.data.description;
          }
          if (String(payload.data.publisher || '').trim() !== '') {
            publisherField.value = payload.data.publisher;
          }
          if (statusField && String(payload.data.status || '') !== '') {
            statusField.value = payload.data.status;
          }

          aiMeta.textContent = `IA AutoFill: \${payload.data.provider}/\${payload.data.source}`;
        } catch (error) {
          aiMeta.textContent = 'IA AutoFill indisponible, fallback local applique.';
        } finally {
          autofillBtn.disabled = false;
        }
      });
    })();
  </script>
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 9, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 9, $this->source); })()), ["sort" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "direction" => (isset($context["next_direction"]) || array_key_exists("next_direction", $context) ? $context["next_direction"] : (function () { throw new RuntimeError('Variable "next_direction" does not exist.', 9, $this->source); })()), "page" => 1])), "html", null, true);
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
        return "admin/pages/games.html.twig";
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
        return array (  772 => 10,  767 => 9,  764 => 8,  761 => 7,  758 => 6,  755 => 5,  752 => 4,  731 => 3,  692 => 298,  668 => 277,  620 => 233,  607 => 232,  592 => 227,  585 => 222,  576 => 218,  574 => 217,  563 => 211,  559 => 210,  555 => 209,  549 => 206,  545 => 205,  541 => 204,  537 => 203,  533 => 202,  529 => 201,  525 => 200,  521 => 199,  517 => 198,  513 => 197,  510 => 196,  504 => 194,  498 => 192,  495 => 191,  493 => 190,  489 => 188,  486 => 187,  481 => 186,  473 => 181,  469 => 180,  465 => 179,  461 => 178,  457 => 177,  453 => 176,  449 => 175,  445 => 174,  441 => 173,  437 => 172,  426 => 164,  416 => 157,  409 => 152,  396 => 150,  392 => 149,  388 => 148,  379 => 142,  372 => 137,  363 => 134,  356 => 133,  353 => 132,  349 => 131,  345 => 130,  336 => 124,  329 => 120,  325 => 119,  321 => 118,  315 => 114,  309 => 112,  307 => 111,  303 => 110,  292 => 102,  286 => 98,  281 => 96,  278 => 95,  275 => 94,  273 => 93,  264 => 87,  257 => 82,  248 => 79,  241 => 78,  237 => 77,  228 => 71,  221 => 66,  212 => 63,  205 => 62,  202 => 61,  198 => 60,  188 => 53,  180 => 48,  176 => 47,  172 => 46,  165 => 42,  160 => 39,  154 => 38,  143 => 35,  139 => 34,  136 => 33,  131 => 32,  127 => 31,  120 => 27,  116 => 26,  112 => 25,  104 => 19,  91 => 18,  68 => 16,  57 => 1,  55 => 14,  42 => 1,);
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
  <a href=\"{{ path(route_name, filters|merge({sort: field, direction: next_direction, page: 1})) }}\" style=\"color:inherit;text-decoration:none;\">
    {{ label }}{{ marker }}
  </a>
{% endmacro %}

{% import _self as sorter %}

{% block title %}PULSE - Gestion jeux{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion jeux</h2>
      <div class=\"pageSub\">CRUD + IA + slug SEO + score intelligent.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"{{ path('admin_catalog_dashboard') }}\">KPI Catalogue</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_games_export', filters|merge({format: 'pdf'})) }}\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_games_export', filters|merge({format: 'excel'})) }}\">Exporter Excel</a>
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
      <h3 class=\"panelTitle\">{{ editingGame ? 'MODIFIER JEU #' ~ editingGame.gameId : 'NOUVEAU JEU' }}</h3>
    </div>

    <form method=\"post\" enctype=\"multipart/form-data\" id=\"adminGameForm\">
      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_game_form') }}\" />
      <input type=\"hidden\" id=\"adminGameAiToken\" value=\"{{ csrf_token('admin_game_ai') }}\" />
      <input type=\"hidden\" name=\"game_id\" value=\"{{ editingGame ? editingGame.gameId : '' }}\" />

      <div class=\"formGrid\">
        <div class=\"field\">
          <label for=\"game_name\">Nom jeu *</label>
          <input id=\"game_name\" type=\"text\" name=\"name\" required value=\"{{ editingGame ? editingGame.name : '' }}\" />
        </div>

        <div class=\"field\">
          <label for=\"game_category_id\">Categorie *</label>
          <select id=\"game_category_id\" name=\"category_id\" required>
            <option value=\"\">Selectionner</option>
            {% for category in categories %}
              {% set categoryId = category.categoryId ?? 0 %}
              <option value=\"{{ categoryId }}\" {{ editingGame and editingGame.categoryId and editingGame.categoryId.categoryId == categoryId ? 'selected' : '' }}>
                {{ category.name }}
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"field\">
          <label for=\"game_publisher\">Publisher</label>
          <input id=\"game_publisher\" type=\"text\" name=\"publisher\" value=\"{{ editingGame ? editingGame.publisher : '' }}\" />
        </div>

        <div class=\"field\">
          <label for=\"game_status\">Statut *</label>
          <select id=\"game_status\" name=\"status\">
            {% for status in statuses %}
              <option value=\"{{ status }}\" {{ (editingGame ? editingGame.status : 'DRAFT') == status ? 'selected' : '' }}>
                {{ status }}
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"field\">
          <label for=\"game_cover_name\">Nom cover (métier)</label>
          <input id=\"game_cover_name\" type=\"text\" name=\"cover_name\" value=\"{{ editingGame ? editingGame.coverName : '' }}\" placeholder=\"cover-free-fire-season-7\" />
        </div>

        <div class=\"field\">
          <label for=\"game_cover_file\">Cover (fichier)</label>
          <input id=\"game_cover_file\" type=\"file\" name=\"cover_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\" />
          {% if editingGame and editingGame.coverImageId %}
            {% set currentCoverUrl = editingGame.coverImageId.fileUrl %}
            <div class=\"listMeta\">Cover actuelle</div>
            <img src=\"{{ currentCoverUrl starts with 'http' ? currentCoverUrl : asset(currentCoverUrl) }}\" alt=\"cover actuelle\" style=\"width:56px;height:56px;border-radius:12px;object-fit:cover;border:1px solid rgba(255,255,255,.12);\" />
          {% endif %}
        </div>

        <div class=\"field\" style=\"grid-column: 1 / -1;\">
          <label for=\"game_description\">Description</label>
          <textarea id=\"game_description\" name=\"description\">{{ editingGame ? editingGame.description : '' }}</textarea>
          <div id=\"gameAiMeta\" class=\"listMeta\" style=\"margin-top:8px;\">IA: non utilisee</div>
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnGhost\" type=\"button\" id=\"btnGameAiSuggest\">AI Suggestion</button>
        <button class=\"btn btnGhost\" type=\"button\" id=\"btnGameAiAutofill\">AI AutoFill</button>
        <button class=\"btn btnPrimary\" type=\"submit\">{{ editingGame ? 'Mettre a jour' : 'Creer jeu' }}</button>
        {% if editingGame %}
          <a class=\"btn btnGhost\" href=\"{{ path('admin_games') }}\">Annuler edition</a>
        {% endif %}
      </div>
    </form>
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"{{ path('admin_games') }}\">
    <input type=\"hidden\" name=\"sort\" value=\"{{ filters.sort|default('created_at') }}\" />
    <input type=\"hidden\" name=\"direction\" value=\"{{ filters.direction|default('desc') }}\" />

    <div class=\"filterGroup\">
      <label>Recherche</label>
      <input type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"name, slug, desc, publisher\" />
    </div>

    <div class=\"filterGroup\">
      <label>Categorie</label>
      <select name=\"category_id\">
        <option value=\"\" {{ filters.category_id == '' ? 'selected' : '' }}>ALL</option>
        {% for category in categories %}
          {% set categoryId = category.categoryId ?? 0 %}
          <option value=\"{{ categoryId }}\" {{ filters.category_id == categoryId ? 'selected' : '' }}>
            {{ category.name }}
          </option>
        {% endfor %}
      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Publisher</label>
      <input type=\"text\" name=\"publisher\" value=\"{{ filters.publisher }}\" placeholder=\"Riot, Valve, ...\" />
    </div>

    <div class=\"filterGroup\">
      <label>Statut</label>
      <select name=\"status\">
        <option value=\"\" {{ filters.status == '' ? 'selected' : '' }}>ALL</option>
        {% for status in statuses %}
          <option value=\"{{ status }}\" {{ filters.status == status ? 'selected' : '' }}>{{ status }}</option>
        {% endfor %}
      </select>
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_games') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE JEUX</h3>
      <span class=\"listMeta\">{{ gamesPagination.getTotalItemCount|default(0) }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Cover</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'id', 'ID') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'name', 'Nom') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'slug', 'Slug') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'category', 'Categorie') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'status', 'Statut') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'publisher', 'Publisher') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'views', 'Vues') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'favorites', 'Favoris') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'score', 'Score') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'created_at', 'Cree le') }}</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for game in gamesPagination %}
            {% set gameId = game.gameId ?? 0 %}
            <tr>
              <td>
                {% if game.coverImageId %}
                  {% set coverUrl = game.coverImageId.fileUrl %}
                  <img src=\"{{ coverUrl starts with 'http' ? coverUrl : asset(coverUrl) }}\" alt=\"cover\" style=\"width:34px;height:34px;border-radius:8px;object-fit:cover;\" />
                {% else %}
                  <span class=\"avatarSmall\">{{ game.name|slice(0, 1)|upper }}</span>
                {% endif %}
              </td>
              <td>#{{ gameId }}</td>
              <td>{{ game.name }}</td>
              <td><span class=\"listMeta\">{{ game.slug }}</span></td>
              <td>{{ game.categoryId ? game.categoryId.name : '-' }}</td>
              <td><span class=\"badge badge--info\">{{ game.status }}</span></td>
              <td>{{ game.publisher ?: '-' }}</td>
              <td>{{ game.viewsCount }}</td>
              <td>{{ game.favoritesCount }}</td>
              <td><b>{{ game.popularityScore }}</b></td>
              <td>{{ game.createdAt ? game.createdAt|date('d/m/Y H:i') : '-' }}</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"{{ path('admin_games', {edit: gameId}) }}\">Update</a>
                  <form method=\"post\" action=\"{{ path('admin_game_delete', {id: gameId}) }}\" onsubmit=\"return confirm('Supprimer ce jeu ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_game_' ~ gameId) }}\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"12\" class=\"listMeta\">Aucun jeu trouve.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>

    <div style=\"margin-top:12px;\">
      {{ knp_pagination_render(gamesPagination) }}
    </div>
  </section>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script>
    (() => {
      const suggestBtn = document.getElementById('btnGameAiSuggest');
      const autofillBtn = document.getElementById('btnGameAiAutofill');
      const aiMeta = document.getElementById('gameAiMeta');
      const token = document.getElementById('adminGameAiToken')?.value || '';

      const nameField = document.getElementById('game_name');
      const descField = document.getElementById('game_description');
      const publisherField = document.getElementById('game_publisher');
      const statusField = document.getElementById('game_status');
      const categoryField = document.getElementById('game_category_id');

      const toBody = () => {
        const categoryName = categoryField && categoryField.selectedOptions.length > 0
          ? (categoryField.selectedOptions[0].textContent || '').trim()
          : '';

        return new URLSearchParams({
          _token: token,
          name: nameField?.value || '',
          description: descField?.value || '',
          publisher: publisherField?.value || '',
          category: categoryName,
        });
      };

      const callAi = async (url) => {
        const response = await fetch(url, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
            'X-Requested-With': 'XMLHttpRequest',
          },
          body: toBody().toString(),
        });

        return response.json();
      };

      suggestBtn?.addEventListener('click', async () => {
        try {
          suggestBtn.disabled = true;
          const payload = await callAi('{{ path('admin_games_ai_suggest') }}');
          if (!payload?.ok || !payload?.data) {
            throw new Error('Suggestion IA impossible.');
          }

          const suggestion = String(payload.data.suggestion || '').trim();
          if (suggestion !== '') {
            descField.value = suggestion;
          }

          aiMeta.textContent = `IA Suggestion: \${payload.data.provider}/\${payload.data.source}`;
        } catch (error) {
          aiMeta.textContent = 'IA Suggestion indisponible, fallback local applique.';
        } finally {
          suggestBtn.disabled = false;
        }
      });

      autofillBtn?.addEventListener('click', async () => {
        try {
          autofillBtn.disabled = true;
          const payload = await callAi('{{ path('admin_games_ai_autofill') }}');
          if (!payload?.ok || !payload?.data) {
            throw new Error('AutoFill IA impossible.');
          }

          if (String(payload.data.name || '').trim() !== '') {
            nameField.value = payload.data.name;
          }
          if (String(payload.data.description || '').trim() !== '') {
            descField.value = payload.data.description;
          }
          if (String(payload.data.publisher || '').trim() !== '') {
            publisherField.value = payload.data.publisher;
          }
          if (statusField && String(payload.data.status || '') !== '') {
            statusField.value = payload.data.status;
          }

          aiMeta.textContent = `IA AutoFill: \${payload.data.provider}/\${payload.data.source}`;
        } catch (error) {
          aiMeta.textContent = 'IA AutoFill indisponible, fallback local applique.';
        } finally {
          autofillBtn.disabled = false;
        }
      });
    })();
  </script>
{% endblock %}
", "admin/pages/games.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\games.html.twig");
    }
}
