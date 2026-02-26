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

/* shared/_organizer_match_form_fields.html.twig */
class __TwigTemplate_fea4aa85cd88396be2e7205c89a7e727 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_organizer_match_form_fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_organizer_match_form_fields.html.twig"));

        // line 1
        yield "<div class=\"formGrid\">
  <div class=\"field\">
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "tournamentId", [], "any", false, false, false, 3), 'label', ["label" => "tournoi*"]);
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "tournamentId", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "input", "data-participant-endpoint" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lookup_tournament_participants")]]);
        // line 9
        yield "
    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "tournamentId", [], "any", false, false, false, 10), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "roundName", [], "any", false, false, false, 14), 'label', ["label" => "round_name"]);
        yield "
    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "roundName", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "input", "placeholder" => "Quarterfinal / Group A..."]]);
        yield "
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "roundName", [], "any", false, false, false, 16), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "scheduledAt", [], "any", false, false, false, 20), 'label', ["label" => "scheduled_at"]);
        yield "
    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "scheduledAt", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "scheduledAt", [], "any", false, false, false, 22), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "bestOf", [], "any", false, false, false, 26), 'label', ["label" => "best_of"]);
        yield "
    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "bestOf", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "bestOf", [], "any", false, false, false, 28), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32), 'label', ["label" => "status*"]);
        yield "
    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "input"]]);
        yield "
    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34), 'errors');
        yield "
  </div>

  <div class=\"field\">
    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "participantTeams", [], "any", false, false, false, 38), 'label', ["label" => "equipes_participantes*"]);
        yield "
    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "participantTeams", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "input", "size" => 8, "data-auto-refresh-participants" => "1"]]);
        // line 45
        yield "
    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "participantTeams", [], "any", false, false, false, 46), 'errors');
        yield "
    <div class=\"panelDesc\">Utilisez Ctrl/Cmd + clic pour selection multiple.</div>
    <div
      class=\"panelDesc\"
      data-participant-count-for=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "participantTeams", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
        yield "\"
      style=\"margin-top:6px;\"
    >
      Equipes disponibles pour le tournoi selectionne: ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "participantTeams", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "choices", [], "any", false, false, false, 53)), "html", null, true);
        yield "
    </div>
  </div>
</div>

<script>
  (function () {
    const tournamentSelect = document.getElementById('";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "tournamentId", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "');
    const participantSelect = document.getElementById('";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "participantTeams", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        yield "');
    if (!tournamentSelect || !participantSelect) {
      return;
    }

    if (participantSelect.dataset.participantRefreshBound === '1') {
      return;
    }
    participantSelect.dataset.participantRefreshBound = '1';

    if (tournamentSelect.disabled) {
      return;
    }

    const endpoint = tournamentSelect.dataset.participantEndpoint || '';
    if (!endpoint) {
      return;
    }

    const countTargets = document.querySelectorAll('[data-participant-count-for=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "participantTeams", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
        yield "\"]');

    const setCount = (count) => {
      countTargets.forEach((target) => {
        target.textContent = 'Equipes disponibles pour le tournoi selectionne: ' + String(count);
      });
    };

    const renderTeams = (teams, keepSelectedValues) => {
      participantSelect.innerHTML = '';
      const selectedSet = new Set(keepSelectedValues);

      if (!Array.isArray(teams) || teams.length === 0) {
        setCount(0);
        return;
      }

      teams.forEach((team) => {
        if (!team || typeof team.id === 'undefined') {
          return;
        }

        const value = String(team.id);
        const option = new Option(String(team.name || ('Equipe #' + value)), value);
        option.selected = selectedSet.has(value);
        participantSelect.add(option);
      });

      setCount(participantSelect.options.length);
    };

    const fetchTeams = async () => {
      const tournamentId = parseInt(tournamentSelect.value || '0', 10);
      if (!Number.isFinite(tournamentId) || tournamentId <= 0) {
        renderTeams([], []);
        return;
      }

      const selectedValues = Array.from(participantSelect.selectedOptions).map((option) => option.value);
      participantSelect.disabled = true;

      try {
        const url = new URL(endpoint, window.location.origin);
        url.searchParams.set('tournamentId', String(tournamentId));

        const response = await fetch(url.toString(), {
          method: 'GET',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
          }
        });

        if (!response.ok) {
          throw new Error('Participant teams lookup failed with status ' + response.status);
        }

        const payload = await response.json();
        const teams = Array.isArray(payload.teams) ? payload.teams : [];
        renderTeams(teams, selectedValues);
      } catch (error) {
        console.error(error);
      } finally {
        participantSelect.disabled = false;
      }
    };

    tournamentSelect.addEventListener('change', fetchTeams);
    fetchTeams();
  })();
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shared/_organizer_match_form_fields.html.twig";
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
        return array (  186 => 80,  164 => 61,  160 => 60,  150 => 53,  144 => 50,  137 => 46,  134 => 45,  132 => 39,  128 => 38,  121 => 34,  117 => 33,  113 => 32,  106 => 28,  102 => 27,  98 => 26,  91 => 22,  87 => 21,  83 => 20,  76 => 16,  72 => 15,  68 => 14,  61 => 10,  58 => 9,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"formGrid\">
  <div class=\"field\">
    {{ form_label(form.tournamentId, 'tournoi*') }}
    {{ form_widget(form.tournamentId, {
      attr: {
        class: 'input',
        'data-participant-endpoint': path('lookup_tournament_participants')
      }
    }) }}
    {{ form_errors(form.tournamentId) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.roundName, 'round_name') }}
    {{ form_widget(form.roundName, {attr: {class: 'input', placeholder: 'Quarterfinal / Group A...'}}) }}
    {{ form_errors(form.roundName) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.scheduledAt, 'scheduled_at') }}
    {{ form_widget(form.scheduledAt, {attr: {class: 'input'}}) }}
    {{ form_errors(form.scheduledAt) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.bestOf, 'best_of') }}
    {{ form_widget(form.bestOf, {attr: {class: 'input'}}) }}
    {{ form_errors(form.bestOf) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.status, 'status*') }}
    {{ form_widget(form.status, {attr: {class: 'input'}}) }}
    {{ form_errors(form.status) }}
  </div>

  <div class=\"field\">
    {{ form_label(form.participantTeams, 'equipes_participantes*') }}
    {{ form_widget(form.participantTeams, {
      attr: {
        class: 'input',
        size: 8,
        'data-auto-refresh-participants': '1'
      }
    }) }}
    {{ form_errors(form.participantTeams) }}
    <div class=\"panelDesc\">Utilisez Ctrl/Cmd + clic pour selection multiple.</div>
    <div
      class=\"panelDesc\"
      data-participant-count-for=\"{{ form.participantTeams.vars.id }}\"
      style=\"margin-top:6px;\"
    >
      Equipes disponibles pour le tournoi selectionne: {{ form.participantTeams.vars.choices|length }}
    </div>
  </div>
</div>

<script>
  (function () {
    const tournamentSelect = document.getElementById('{{ form.tournamentId.vars.id }}');
    const participantSelect = document.getElementById('{{ form.participantTeams.vars.id }}');
    if (!tournamentSelect || !participantSelect) {
      return;
    }

    if (participantSelect.dataset.participantRefreshBound === '1') {
      return;
    }
    participantSelect.dataset.participantRefreshBound = '1';

    if (tournamentSelect.disabled) {
      return;
    }

    const endpoint = tournamentSelect.dataset.participantEndpoint || '';
    if (!endpoint) {
      return;
    }

    const countTargets = document.querySelectorAll('[data-participant-count-for=\"{{ form.participantTeams.vars.id }}\"]');

    const setCount = (count) => {
      countTargets.forEach((target) => {
        target.textContent = 'Equipes disponibles pour le tournoi selectionne: ' + String(count);
      });
    };

    const renderTeams = (teams, keepSelectedValues) => {
      participantSelect.innerHTML = '';
      const selectedSet = new Set(keepSelectedValues);

      if (!Array.isArray(teams) || teams.length === 0) {
        setCount(0);
        return;
      }

      teams.forEach((team) => {
        if (!team || typeof team.id === 'undefined') {
          return;
        }

        const value = String(team.id);
        const option = new Option(String(team.name || ('Equipe #' + value)), value);
        option.selected = selectedSet.has(value);
        participantSelect.add(option);
      });

      setCount(participantSelect.options.length);
    };

    const fetchTeams = async () => {
      const tournamentId = parseInt(tournamentSelect.value || '0', 10);
      if (!Number.isFinite(tournamentId) || tournamentId <= 0) {
        renderTeams([], []);
        return;
      }

      const selectedValues = Array.from(participantSelect.selectedOptions).map((option) => option.value);
      participantSelect.disabled = true;

      try {
        const url = new URL(endpoint, window.location.origin);
        url.searchParams.set('tournamentId', String(tournamentId));

        const response = await fetch(url.toString(), {
          method: 'GET',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
          }
        });

        if (!response.ok) {
          throw new Error('Participant teams lookup failed with status ' + response.status);
        }

        const payload = await response.json();
        const teams = Array.isArray(payload.teams) ? payload.teams : [];
        renderTeams(teams, selectedValues);
      } catch (error) {
        console.error(error);
      } finally {
        participantSelect.disabled = false;
      }
    };

    tournamentSelect.addEventListener('change', fetchTeams);
    fetchTeams();
  })();
</script>
", "shared/_organizer_match_form_fields.html.twig", "C:\\Users\\MiaMaria\\Desktop\\pulse\\pulse\\templates\\shared\\_organizer_match_form_fields.html.twig");
    }
}
