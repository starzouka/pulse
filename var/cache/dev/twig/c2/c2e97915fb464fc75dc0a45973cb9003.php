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
class __TwigTemplate_be8c6f543f720deb8d4169661264a061 extends Template
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
      <div class=\"pageSub\">CRUD + filtres DB + export.</div>
    </div>
    <div class=\"formActions\">
      <a class=\"btn btnGhost\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), ["format" => "pdf"])), "html", null, true);
        yield "\">Exporter PDF</a>
      <a class=\"btn btnGhost\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games_export", Twig\Extension\CoreExtension::merge((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 26, $this->source); })()), ["format" => "excel"])), "html", null, true);
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
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("MODIFIER JEU #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 41, $this->source); })()), "gameId", [], "any", false, false, false, 41)), "html", null, true)) : ("NOUVEAU JEU"));
        yield "</h3>
    </div>

    <form method=\"post\" enctype=\"multipart/form-data\">
      <input type=\"hidden\" name=\"_token\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_game_form"), "html", null, true);
        yield "\" />
      <input type=\"hidden\" name=\"game_id\" value=\"";
        // line 46
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 46, $this->source); })()), "gameId", [], "any", false, false, false, 46), "html", null, true)) : (""));
        yield "\" />

      <div class=\"formGrid\">
        <div class=\"field\">
          <label for=\"game_name\">Nom jeu *</label>
          <input id=\"game_name\" type=\"text\" name=\"name\" required value=\"";
        // line 51
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"game_category_id\">Categorie *</label>
          <select id=\"game_category_id\" name=\"category_id\" required>
            <option value=\"\">Selectionner</option>
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 59
            yield "              ";
            $context["categoryId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 59)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 59)) : (0));
            // line 60
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoryId"]) || array_key_exists("categoryId", $context) ? $context["categoryId"] : (function () { throw new RuntimeError('Variable "categoryId" does not exist.', 60, $this->source); })()), "html", null, true);
            yield "\" ";
            yield (((((isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 60, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 60, $this->source); })()), "categoryId", [], "any", false, false, false, 60)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 60, $this->source); })()), "categoryId", [], "any", false, false, false, 60), "categoryId", [], "any", false, false, false, 60) == (isset($context["categoryId"]) || array_key_exists("categoryId", $context) ? $context["categoryId"] : (function () { throw new RuntimeError('Variable "categoryId" does not exist.', 60, $this->source); })())))) ? ("selected") : (""));
            yield ">
                ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 61), "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "          </select>
        </div>

        <div class=\"field\">
          <label for=\"game_publisher\">Publisher</label>
          <input id=\"game_publisher\" type=\"text\" name=\"publisher\" value=\"";
        // line 69
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 69, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 69, $this->source); })()), "publisher", [], "any", false, false, false, 69), "html", null, true)) : (""));
        yield "\" />
        </div>

        <div class=\"field\">
          <label for=\"game_cover_file\">Cover (fichier)</label>
          <input id=\"game_cover_file\" type=\"file\" name=\"cover_file\" accept=\"image/png,image/jpeg,image/webp,image/gif\" />
          ";
        // line 75
        if (((isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 75, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 75, $this->source); })()), "coverImageId", [], "any", false, false, false, 75))) {
            // line 76
            yield "            ";
            $context["currentCoverUrl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 76, $this->source); })()), "coverImageId", [], "any", false, false, false, 76), "fileUrl", [], "any", false, false, false, 76);
            // line 77
            yield "            <div class=\"listMeta\">Cover actuelle</div>
            <img src=\"";
            // line 78
            yield (((is_string($_v0 = (isset($context["currentCoverUrl"]) || array_key_exists("currentCoverUrl", $context) ? $context["currentCoverUrl"] : (function () { throw new RuntimeError('Variable "currentCoverUrl" does not exist.', 78, $this->source); })())) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentCoverUrl"]) || array_key_exists("currentCoverUrl", $context) ? $context["currentCoverUrl"] : (function () { throw new RuntimeError('Variable "currentCoverUrl" does not exist.', 78, $this->source); })()), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["currentCoverUrl"]) || array_key_exists("currentCoverUrl", $context) ? $context["currentCoverUrl"] : (function () { throw new RuntimeError('Variable "currentCoverUrl" does not exist.', 78, $this->source); })())), "html", null, true)));
            yield "\" alt=\"cover actuelle\" style=\"width:56px;height:56px;border-radius:12px;object-fit:cover;border:1px solid rgba(255,255,255,.12);\" />
          ";
        }
        // line 80
        yield "        </div>

        <div class=\"field\" style=\"grid-column: 1 / -1;\">
          <label for=\"game_description\">Description</label>
          <textarea id=\"game_description\" name=\"description\">";
        // line 84
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), "html", null, true)) : (""));
        yield "</textarea>
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
        <button class=\"btn btnPrimary\" type=\"submit\">";
        // line 89
        yield (((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 89, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre a jour") : ("Creer jeu"));
        yield "</button>
        ";
        // line 90
        if ((($tmp = (isset($context["editingGame"]) || array_key_exists("editingGame", $context) ? $context["editingGame"] : (function () { throw new RuntimeError('Variable "editingGame" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "          <a class=\"btn btnGhost\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games");
            yield "\">Annuler edition</a>
        ";
        }
        // line 93
        yield "      </div>
    </form>
  </section>

  <form class=\"filtersBar js-live-filters\" method=\"get\" action=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games");
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
        yield "\" placeholder=\"name, desc, publisher\" />
    </div>

    <div class=\"filterGroup\">
      <label>Categorie</label>
      <select name=\"category_id\">
        <option value=\"\" ";
        // line 109
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 109, $this->source); })()), "category_id", [], "any", false, false, false, 109) == "")) ? ("selected") : (""));
        yield ">ALL</option>
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 111
            yield "          ";
            $context["categoryId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", true, true, false, 111) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 111)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 111)) : (0));
            // line 112
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoryId"]) || array_key_exists("categoryId", $context) ? $context["categoryId"] : (function () { throw new RuntimeError('Variable "categoryId" does not exist.', 112, $this->source); })()), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 112, $this->source); })()), "category_id", [], "any", false, false, false, 112) == (isset($context["categoryId"]) || array_key_exists("categoryId", $context) ? $context["categoryId"] : (function () { throw new RuntimeError('Variable "categoryId" does not exist.', 112, $this->source); })()))) ? ("selected") : (""));
            yield ">
            ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 113), "html", null, true);
            yield "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "      </select>
    </div>

    <div class=\"filterGroup\">
      <label>Publisher</label>
      <input type=\"text\" name=\"publisher\" value=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 121, $this->source); })()), "publisher", [], "any", false, false, false, 121), "html", null, true);
        yield "\" placeholder=\"Riot, Valve, ...\" />
    </div>

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games");
        yield "\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE JEUX</h3>
      <span class=\"listMeta\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 133, $this->source); })())), "html", null, true);
        yield " resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Cover</th>
            <th>";
        // line 141
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 141, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 141, $this->source); })()), "id", "ID"]);
        yield "</th>
            <th>";
        // line 142
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 142, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 142, $this->source); })()), "name", "Nom"]);
        yield "</th>
            <th>";
        // line 143
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 143, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 143, $this->source); })()), "category", "Categorie"]);
        yield "</th>
            <th>";
        // line 144
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 144, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 144, $this->source); })()), "publisher", "Publisher"]);
        yield "</th>
            <th>";
        // line 145
        yield $macros["sorter"]->getTemplateForMacro("macro_sort_link", $context, 145, $this->getSourceContext())->macro_sort_link(...["admin_games", (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 145, $this->source); })()), "created_at", "Cree le"]);
        yield "</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 150, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 151
            yield "            ";
            $context["gameId"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", true, true, false, 151) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 151)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["game"], "gameId", [], "any", false, false, false, 151)) : (0));
            // line 152
            yield "            <tr>
              <td>
                ";
            // line 154
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["game"], "coverImageId", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 155
                yield "                  ";
                $context["coverUrl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["game"], "coverImageId", [], "any", false, false, false, 155), "fileUrl", [], "any", false, false, false, 155);
                // line 156
                yield "                  <img src=\"";
                yield (((is_string($_v2 = (isset($context["coverUrl"]) || array_key_exists("coverUrl", $context) ? $context["coverUrl"] : (function () { throw new RuntimeError('Variable "coverUrl" does not exist.', 156, $this->source); })())) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coverUrl"]) || array_key_exists("coverUrl", $context) ? $context["coverUrl"] : (function () { throw new RuntimeError('Variable "coverUrl" does not exist.', 156, $this->source); })()), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["coverUrl"]) || array_key_exists("coverUrl", $context) ? $context["coverUrl"] : (function () { throw new RuntimeError('Variable "coverUrl" does not exist.', 156, $this->source); })())), "html", null, true)));
                yield "\" alt=\"cover\" style=\"width:34px;height:34px;border-radius:8px;object-fit:cover;\" />
                ";
            } else {
                // line 158
                yield "                  <span class=\"avatarSmall\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 158), 0, 1)), "html", null, true);
                yield "</span>
                ";
            }
            // line 160
            yield "              </td>
              <td>#";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 161, $this->source); })()), "html", null, true);
            yield "</td>
              <td>";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 162), "html", null, true);
            yield "</td>
              <td>";
            // line 163
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["game"], "categoryId", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["game"], "categoryId", [], "any", false, false, false, 163), "name", [], "any", false, false, false, 163), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 164
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["game"], "publisher", [], "any", false, false, false, 164)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "publisher", [], "any", false, false, false, 164), "html", null, true)) : ("-"));
            yield "</td>
              <td>";
            // line 165
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["game"], "createdAt", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["game"], "createdAt", [], "any", false, false, false, 165), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
              <td>
                <div class=\"formActions\">
                  <a class=\"btn btnTiny\" href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_games", ["edit" => (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 168, $this->source); })())]), "html", null, true);
            yield "\">Update</a>
                  <form method=\"post\" action=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_game_delete", ["id" => (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 169, $this->source); })())]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce jeu ?');\" style=\"display:inline-block;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_game_" . (isset($context["gameId"]) || array_key_exists("gameId", $context) ? $context["gameId"] : (function () { throw new RuntimeError('Variable "gameId" does not exist.', 170, $this->source); })()))), "html", null, true);
            yield "\" />
                    <button class=\"btn btnTiny\" type=\"submit\">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 176
        if (!$context['_iterated']) {
            // line 177
            yield "            <tr>
              <td colspan=\"7\" class=\"listMeta\">Aucun jeu trouve.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['game'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
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
        return array (  524 => 10,  519 => 9,  516 => 8,  513 => 7,  510 => 6,  507 => 5,  504 => 4,  483 => 3,  468 => 181,  459 => 177,  457 => 176,  446 => 170,  442 => 169,  438 => 168,  432 => 165,  428 => 164,  424 => 163,  420 => 162,  416 => 161,  413 => 160,  407 => 158,  401 => 156,  398 => 155,  396 => 154,  392 => 152,  389 => 151,  384 => 150,  376 => 145,  372 => 144,  368 => 143,  364 => 142,  360 => 141,  349 => 133,  339 => 126,  331 => 121,  324 => 116,  315 => 113,  308 => 112,  305 => 111,  301 => 110,  297 => 109,  288 => 103,  281 => 99,  277 => 98,  273 => 97,  267 => 93,  261 => 91,  259 => 90,  255 => 89,  247 => 84,  241 => 80,  236 => 78,  233 => 77,  230 => 76,  228 => 75,  219 => 69,  212 => 64,  203 => 61,  196 => 60,  193 => 59,  189 => 58,  179 => 51,  171 => 46,  167 => 45,  160 => 41,  155 => 38,  149 => 37,  138 => 34,  134 => 33,  131 => 32,  126 => 31,  122 => 30,  115 => 26,  111 => 25,  103 => 19,  90 => 18,  67 => 16,  56 => 1,  54 => 14,  41 => 1,);
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

{% block title %}PULSE - Gestion jeux{% endblock %}

{% block admin_content %}
  <div class=\"pageHeader\">
    <div>
      <h2>Gestion jeux</h2>
      <div class=\"pageSub\">CRUD + filtres DB + export.</div>
    </div>
    <div class=\"formActions\">
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

    <form method=\"post\" enctype=\"multipart/form-data\">
      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_game_form') }}\" />
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
        </div>
      </div>

      <div class=\"formActions\" style=\"margin-top:12px;\">
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
      <input type=\"search\" name=\"q\" value=\"{{ filters.q }}\" placeholder=\"name, desc, publisher\" />
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

    <div class=\"formActions\">
      <button class=\"btn btnPrimary\" type=\"submit\">Filtrer</button>
      <a class=\"btn btnGhost\" href=\"{{ path('admin_games') }}\">Reset</a>
    </div>
  </form>

  <section class=\"panel\">
    <div class=\"panelHeader\">
      <h3 class=\"panelTitle\">LISTE JEUX</h3>
      <span class=\"listMeta\">{{ games|length }} resultat(s)</span>
    </div>

    <div class=\"dataTableWrap\">
      <table class=\"dataTable\">
        <thead>
          <tr>
            <th>Cover</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'id', 'ID') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'name', 'Nom') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'category', 'Categorie') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'publisher', 'Publisher') }}</th>
            <th>{{ sorter.sort_link('admin_games', filters, 'created_at', 'Cree le') }}</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for game in games %}
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
              <td>{{ game.categoryId ? game.categoryId.name : '-' }}</td>
              <td>{{ game.publisher ?: '-' }}</td>
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
              <td colspan=\"7\" class=\"listMeta\">Aucun jeu trouve.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>
{% endblock %}
", "admin/pages/games.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE - Copie\\PULSE\\templates\\admin\\pages\\games.html.twig");
    }
}
