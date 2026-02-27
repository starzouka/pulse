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

/* front/pages/player-profile.html.twig */
class __TwigTemplate_3cc0d1401d92a8a29eaefffdc9347b01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/player-profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pages/player-profile.html.twig"));

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

        yield "PULSE - Profil joueur";
        
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
        yield from $this->load("front/partials/_hero_mini.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["hero_kicker" => "JOUEUR", "hero_title" => "Profil joueur", "hero_sub" => "Vue publique du profil, des equipes et des publications.", "breadcrumb_current" => "Profil joueur"]));
        // line 12
        yield "
  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        ";
        // line 16
        yield from $this->load("front/partials/_player_side_nav.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["active" => "player_profile"]));
        // line 17
        yield "
        <div class=\"socialStack\">
          <section class=\"panel\">
            <div class=\"coverBlock\" data-bg=\"https://picsum.photos/seed/pulse_public_cover/1200/420\"></div>
            <div class=\"profileHeader\" style=\"margin-top: -34px;\">
              <div class=\"avatarLg\" data-avatar=\"https://picsum.photos/seed/pulse_public_avatar/200/200\"></div>
              <div>
                <h3 style=\"margin:0;\">FrostByte</h3>
                <div class=\"muted\">Capitaine � FR � @FrostByte</div>
                <div class=\"profileHeader__actions\">
                  <a class=\"btn btn--primary\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Ajouter ami</a>
                  <a class=\"btn btn--ghost\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Envoyer message</a>
                  <a class=\"btn btn--ghost\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Inviter en equipe</a>
                </div>
              </div>
            </div>
          </section>

          <div class=\"socialShell\">
            <aside class=\"socialStack\">
              <section class=\"panel\">
                <h3 class=\"panel__title\">DETAILS</h3>
                <div class=\"list\">
                  <div class=\"listItem\"><span>Pays</span><span class=\"listItem__meta\">France</span></div>
                  <div class=\"listItem\"><span>Role principal</span><span class=\"listItem__meta\">Capitaine / IGL</span></div>
                  <div class=\"listItem\"><span>Disponibilite</span><span class=\"listItem__meta\">Soir 20h-23h</span></div>
                </div>
              </section>

              <section class=\"panel\">
                <h3 class=\"panel__title\">EQUIPES</h3>
                <div class=\"socialQuickList\">
                  <a class=\"listItem\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
        yield "\"><span>North Hydra</span><span class=\"listItem__meta\">Capitaine</span></a>
                  <a class=\"listItem\" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_team_detail");
        yield "\"><span>Hydra Academy</span><span class=\"listItem__meta\">Coach</span></a>
                </div>
              </section>
            </aside>

            <div class=\"socialStack\">
              <section class=\"panel\">
                <h3 class=\"panel__title\">PUBLICATIONS PUBLIQUES</h3>

                <article class=\"panel\">
                  <div class=\"postCard__head\">
                    <div class=\"postCard__author\">
                      <div class=\"avatarMd\" data-avatar=\"https://picsum.photos/seed/pulse_public_avatar/200/200\"></div>
                      <div>
                        <div class=\"name\">FrostByte</div>
                        <div class=\"sub\">Il y a 3 h � Public</div>
                      </div>
                    </div>
                    <span class=\"badge\">54 J'aime</span>
                  </div>
                  <div class=\"postCard__body\">North Hydra passe en finale regionale. Merci pour le soutien de la communaute.</div>
                  <div class=\"postCard__actions\">
                    <a class=\"btn btn--ghost\" href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">J'aime</a>
                    <a class=\"btn btn--ghost\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Commenter</a>
                  </div>
                </article>

                <article class=\"panel\">
                  <div class=\"postCard__head\">
                    <div class=\"postCard__author\">
                      <div class=\"avatarMd\" data-avatar=\"https://picsum.photos/seed/pulse_public_avatar/200/200\"></div>
                      <div>
                        <div class=\"name\">FrostByte</div>
                        <div class=\"sub\">Hier � Public</div>
                      </div>
                    </div>
                    <span class=\"badge\">32 J'aime</span>
                  </div>
                  <div class=\"postCard__body\">Recherche analyste video pour review post-match. Contact en message prive.</div>
                  <div class=\"postCard__actions\">
                    <a class=\"btn btn--ghost\" href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_login");
        yield "\">Contacter</a>
                  </div>
                </article>
              </section>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 99
        yield from $this->load("front/partials/_footer.html.twig", 99)->unwrap()->yield($context);
        // line 100
        yield "    </section>
  </main>

  ";
        // line 103
        yield from $this->load("front/partials/_auth_modal.html.twig", 103)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/pages/player-profile.html.twig";
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
        return array (  226 => 103,  221 => 100,  219 => 99,  207 => 90,  187 => 73,  183 => 72,  158 => 50,  154 => 49,  131 => 29,  127 => 28,  123 => 27,  111 => 17,  109 => 16,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PULSE - Profil joueur{% endblock %}

{% block body %}
  {% include 'front/partials/_hero_mini.html.twig' with {
    hero_kicker: 'JOUEUR',
    hero_title: 'Profil joueur',
    hero_sub: 'Vue publique du profil, des equipes et des publications.',
    breadcrumb_current: 'Profil joueur'
  } %}

  <main class=\"page\">
    <section class=\"belowHero\">
      <div class=\"layout\">
        {% include 'front/partials/_player_side_nav.html.twig' with { active: 'player_profile' } %}

        <div class=\"socialStack\">
          <section class=\"panel\">
            <div class=\"coverBlock\" data-bg=\"https://picsum.photos/seed/pulse_public_cover/1200/420\"></div>
            <div class=\"profileHeader\" style=\"margin-top: -34px;\">
              <div class=\"avatarLg\" data-avatar=\"https://picsum.photos/seed/pulse_public_avatar/200/200\"></div>
              <div>
                <h3 style=\"margin:0;\">FrostByte</h3>
                <div class=\"muted\">Capitaine � FR � @FrostByte</div>
                <div class=\"profileHeader__actions\">
                  <a class=\"btn btn--primary\" href=\"{{ path('front_login') }}\">Ajouter ami</a>
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_login') }}\">Envoyer message</a>
                  <a class=\"btn btn--ghost\" href=\"{{ path('front_login') }}\">Inviter en equipe</a>
                </div>
              </div>
            </div>
          </section>

          <div class=\"socialShell\">
            <aside class=\"socialStack\">
              <section class=\"panel\">
                <h3 class=\"panel__title\">DETAILS</h3>
                <div class=\"list\">
                  <div class=\"listItem\"><span>Pays</span><span class=\"listItem__meta\">France</span></div>
                  <div class=\"listItem\"><span>Role principal</span><span class=\"listItem__meta\">Capitaine / IGL</span></div>
                  <div class=\"listItem\"><span>Disponibilite</span><span class=\"listItem__meta\">Soir 20h-23h</span></div>
                </div>
              </section>

              <section class=\"panel\">
                <h3 class=\"panel__title\">EQUIPES</h3>
                <div class=\"socialQuickList\">
                  <a class=\"listItem\" href=\"{{ path('front_team_detail') }}\"><span>North Hydra</span><span class=\"listItem__meta\">Capitaine</span></a>
                  <a class=\"listItem\" href=\"{{ path('front_team_detail') }}\"><span>Hydra Academy</span><span class=\"listItem__meta\">Coach</span></a>
                </div>
              </section>
            </aside>

            <div class=\"socialStack\">
              <section class=\"panel\">
                <h3 class=\"panel__title\">PUBLICATIONS PUBLIQUES</h3>

                <article class=\"panel\">
                  <div class=\"postCard__head\">
                    <div class=\"postCard__author\">
                      <div class=\"avatarMd\" data-avatar=\"https://picsum.photos/seed/pulse_public_avatar/200/200\"></div>
                      <div>
                        <div class=\"name\">FrostByte</div>
                        <div class=\"sub\">Il y a 3 h � Public</div>
                      </div>
                    </div>
                    <span class=\"badge\">54 J'aime</span>
                  </div>
                  <div class=\"postCard__body\">North Hydra passe en finale regionale. Merci pour le soutien de la communaute.</div>
                  <div class=\"postCard__actions\">
                    <a class=\"btn btn--ghost\" href=\"{{ path('front_login') }}\">J'aime</a>
                    <a class=\"btn btn--ghost\" href=\"{{ path('front_login') }}\">Commenter</a>
                  </div>
                </article>

                <article class=\"panel\">
                  <div class=\"postCard__head\">
                    <div class=\"postCard__author\">
                      <div class=\"avatarMd\" data-avatar=\"https://picsum.photos/seed/pulse_public_avatar/200/200\"></div>
                      <div>
                        <div class=\"name\">FrostByte</div>
                        <div class=\"sub\">Hier � Public</div>
                      </div>
                    </div>
                    <span class=\"badge\">32 J'aime</span>
                  </div>
                  <div class=\"postCard__body\">Recherche analyste video pour review post-match. Contact en message prive.</div>
                  <div class=\"postCard__actions\">
                    <a class=\"btn btn--ghost\" href=\"{{ path('front_login') }}\">Contacter</a>
                  </div>
                </article>
              </section>
            </div>
          </div>
        </div>
      </div>

      {% include 'front/partials/_footer.html.twig' %}
    </section>
  </main>

  {% include 'front/partials/_auth_modal.html.twig' %}
{% endblock %}
", "front/pages/player-profile.html.twig", "C:\\Users\\ilyes\\OneDrive\\Bureau\\PULSE\\PULSE\\templates\\front\\pages\\player-profile.html.twig");
    }
}
