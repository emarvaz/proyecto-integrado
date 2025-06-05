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

/* card-deck/list.html.twig */
class __TwigTemplate_347afff7bd1784853a1be7f584e2ce3a extends Template
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
            'styles' => [$this, 'block_styles'],
            'main' => [$this, 'block_main'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card-deck/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card-deck/list.html.twig"));

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

        yield "Comunidad";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("styles", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/card-deck.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/card.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 12
        yield "    <section class=\"flex flex-col gap-8 py-8\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cardDecks"]) || array_key_exists("cardDecks", $context) ? $context["cardDecks"] : (function () { throw new RuntimeError('Variable "cardDecks" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cardDeck"]) {
            // line 14
            yield "            <article class=\"rounded-2xl border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 p-6 flex flex-col gap-4\">
                <header class=\"flex items-center gap-4\">
                    <section>
                        <a href=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "user", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\">
                            <img src=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/user/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "user", [], "any", false, false, false, 18), "profilePic", [], "any", false, false, false, 18))), "html", null, true);
            yield "\"
                                 alt=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "user", [], "any", false, false, false, 19), "username", [], "any", false, false, false, 19), "html", null, true);
            yield "\"
                                 class=\"w-12 h-12 rounded-full border border-gray-400 object-cover\">
                        </a>

                        <section class=\"flex flex-col\">
                            <h3 class=\"text-lg font-semibold text-gray-900 dark:text-white\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "name", [], "any", false, false, false, 24), "html", null, true);
            yield "</h3>

                            <span class=\"text-sm text-gray-600 dark:text-gray-400\">@";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "user", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26), "html", null, true);
            yield "</span>
                        </section>
                    </section>

                    <section>
                        ";
            // line 31
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "                            <p>Inicia sesión para acceder a todas las funcionalidades.</p>
                        ";
            } else {
                // line 34
                yield "                                ";
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["copyForms"]) || array_key_exists("copyForms", $context) ? $context["copyForms"] : (function () { throw new RuntimeError('Variable "copyForms" does not exist.', 34, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "id", [], "any", false, false, false, 34), [], "array", false, false, false, 34), 'form_start');
                yield "
                                    ";
                // line 35
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["copyForms"]) || array_key_exists("copyForms", $context) ? $context["copyForms"] : (function () { throw new RuntimeError('Variable "copyForms" does not exist.', 35, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "id", [], "any", false, false, false, 35), [], "array", false, false, false, 35), "targetDeck", [], "any", false, false, false, 35), 'row');
                yield "
                                    ";
                // line 36
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["copyForms"]) || array_key_exists("copyForms", $context) ? $context["copyForms"] : (function () { throw new RuntimeError('Variable "copyForms" does not exist.', 36, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "id", [], "any", false, false, false, 36), [], "array", false, false, false, 36), "submit", [], "any", false, false, false, 36), 'widget');
                yield "
                                ";
                // line 37
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["copyForms"]) || array_key_exists("copyForms", $context) ? $context["copyForms"] : (function () { throw new RuntimeError('Variable "copyForms" does not exist.', 37, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "id", [], "any", false, false, false, 37), [], "array", false, false, false, 37), 'form_end');
                yield "

                            <a href=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_export_json", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                yield "\"
                               class=\"inline-block px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded
                                      hover:bg-blue-700 transition\">Exportar JSON</a>
                        ";
            }
            // line 43
            yield "                    </section>
                </header>

                <section class=\"grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4\">
                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "cards", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 48
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                yield "\">
                            <article class=\"card p-1 aspect-[0.7] grid grid-rows-[1fr_2fr] bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-300 dark:border-gray-700\">
                                <figure class=\"flex flex-row justify-end rounded-lg px-4 py-2 h-52 bg-black bg-center bg-no-repeat bg-contain\"
                                        style=\"background-image: url('";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/images/content/card/" . CoreExtension::getAttribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, false, 51))), "html", null, true);
                yield "');\">
                                    <data class=\"flex flex-row gap-2 text-xl font-semibold text-black-600 dark:white\">
                                        <span>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "health", [], "any", false, false, false, 53), "html", null, true);
                yield "</span>
                                        <!-- Icono de vida -->
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                            <path d=\"m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z\" />
                                        </svg>
                                    </data>
                                </figure>

                                <section class=\"p-3 grid grid-rows-[0.5fr_1.5fr] gap-2\">
                                    <h4 class=\"text-lg font-bold text-gray-800 dark:text-gray-100\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "name", [], "any", false, false, false, 62), "html", null, true);
                yield "</h4>

                                    <ul class=\"flex flex-col\">
                                        ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "abilities", [], "any", false, false, false, 65));
                foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
                    // line 66
                    yield "                                            <li class=\"flex-1 grid grid-cols-2 items-center\">
                                                <span>";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "name", [], "any", false, false, false, 67), "html", null, true);
                    yield "</span>

                                                <div class=\"grid grid-cols-2 gap-8 justify-self-end text-xs\">
                                                    <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                        <span>";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "cost", [], "any", false, false, false, 71), "html", null, true);
                    yield "</span>
                                                        <!-- Icono de coste -->
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                            <path fill-rule=\"evenodd\" d=\"M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z\" clip-rule=\"evenodd\" />
                                                        </svg>
                                                    </data>

                                                    <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                        <span>";
                    // line 79
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "value", [], "any", false, false, false, 79), "html", null, true);
                    yield "</span>
                                                        <!-- Icono de poder -->
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                            <path fill-rule=\"evenodd\" d=\"M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5Z\" clip-rule=\"evenodd\" />
                                                        </svg>
                                                    </data>
                                                </div>
                                            </li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['ability'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                yield "                                    </ul>
                                </section>
                            </article>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['card'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                </section>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cardDeck'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "    </section>
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
        return "card-deck/list.html.twig";
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
        return array (  306 => 96,  298 => 93,  288 => 88,  273 => 79,  262 => 71,  255 => 67,  252 => 66,  248 => 65,  242 => 62,  230 => 53,  225 => 51,  218 => 48,  214 => 47,  208 => 43,  201 => 39,  196 => 37,  192 => 36,  188 => 35,  183 => 34,  179 => 32,  177 => 31,  169 => 26,  164 => 24,  156 => 19,  152 => 18,  148 => 17,  143 => 14,  139 => 13,  136 => 12,  123 => 11,  110 => 8,  106 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Comunidad{% endblock %}

{% block styles %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/card-deck.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/card.css') }}\">
{% endblock %}

{% block main %}
    <section class=\"flex flex-col gap-8 py-8\">
        {% for cardDeck in cardDecks %}
            <article class=\"rounded-2xl border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 p-6 flex flex-col gap-4\">
                <header class=\"flex items-center gap-4\">
                    <section>
                        <a href=\"{{ path('profile', { 'id': cardDeck.user.id }) }}\">
                            <img src=\"{{ asset('assets/images/user/' ~ cardDeck.user.profilePic) }}\"
                                 alt=\"{{ cardDeck.user.username }}\"
                                 class=\"w-12 h-12 rounded-full border border-gray-400 object-cover\">
                        </a>

                        <section class=\"flex flex-col\">
                            <h3 class=\"text-lg font-semibold text-gray-900 dark:text-white\">{{ cardDeck.name }}</h3>

                            <span class=\"text-sm text-gray-600 dark:text-gray-400\">@{{ cardDeck.user.username }}</span>
                        </section>
                    </section>

                    <section>
                        {% if not app.user %}
                            <p>Inicia sesión para acceder a todas las funcionalidades.</p>
                        {% else %}
                                {{ form_start(copyForms[cardDeck.id]) }}
                                    {{ form_row(copyForms[cardDeck.id].targetDeck) }}
                                    {{ form_widget(copyForms[cardDeck.id].submit) }}
                                {{ form_end(copyForms[cardDeck.id]) }}

                            <a href=\"{{ path('card_deck_export_json', { id: cardDeck.id }) }}\"
                               class=\"inline-block px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded
                                      hover:bg-blue-700 transition\">Exportar JSON</a>
                        {% endif %}
                    </section>
                </header>

                <section class=\"grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4\">
                    {% for card in cardDeck.cards %}
                        <a href=\"{{ path('card', { id: card.id }) }}\">
                            <article class=\"card p-1 aspect-[0.7] grid grid-rows-[1fr_2fr] bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-300 dark:border-gray-700\">
                                <figure class=\"flex flex-row justify-end rounded-lg px-4 py-2 h-52 bg-black bg-center bg-no-repeat bg-contain\"
                                        style=\"background-image: url('{{ asset('/assets/images/content/card/' ~ card.image) }}');\">
                                    <data class=\"flex flex-row gap-2 text-xl font-semibold text-black-600 dark:white\">
                                        <span>{{ card.health }}</span>
                                        <!-- Icono de vida -->
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                            <path d=\"m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z\" />
                                        </svg>
                                    </data>
                                </figure>

                                <section class=\"p-3 grid grid-rows-[0.5fr_1.5fr] gap-2\">
                                    <h4 class=\"text-lg font-bold text-gray-800 dark:text-gray-100\">{{ card.name }}</h4>

                                    <ul class=\"flex flex-col\">
                                        {% for ability in card.abilities %}
                                            <li class=\"flex-1 grid grid-cols-2 items-center\">
                                                <span>{{ ability.name }}</span>

                                                <div class=\"grid grid-cols-2 gap-8 justify-self-end text-xs\">
                                                    <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                        <span>{{ ability.cost }}</span>
                                                        <!-- Icono de coste -->
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                            <path fill-rule=\"evenodd\" d=\"M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z\" clip-rule=\"evenodd\" />
                                                        </svg>
                                                    </data>

                                                    <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                        <span>{{ ability.value }}</span>
                                                        <!-- Icono de poder -->
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                            <path fill-rule=\"evenodd\" d=\"M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5Z\" clip-rule=\"evenodd\" />
                                                        </svg>
                                                    </data>
                                                </div>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </section>
                            </article>
                        </a>
                    {% endfor %}
                </section>
            </article>
        {% endfor %}
    </section>
{% endblock %}
", "card-deck/list.html.twig", "C:\\Users\\eduar\\Documents\\GitHub\\proyecto-integrado\\templates\\card-deck\\list.html.twig");
    }
}
