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

/* card-deck/index.html.twig */
class __TwigTemplate_0121fe598e60dd4fa69527b364f2d86b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card-deck/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card-deck/index.html.twig"));

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

        yield "Mis Mazos";
        
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
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/card-deck.css"), "html", null, true);
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
        yield "    <ul class=\"card-deck__list\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cardDecks"]) || array_key_exists("cardDecks", $context) ? $context["cardDecks"] : (function () { throw new RuntimeError('Variable "cardDecks" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["deck"]) {
            // line 14
            yield "            <li class=\"card-deck__list__tab ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["deck"], "id", [], "any", false, false, false, 14) == (isset($context["currentCardDeckId"]) || array_key_exists("currentCardDeckId", $context) ? $context["currentCardDeckId"] : (function () { throw new RuntimeError('Variable "currentCardDeckId" does not exist.', 14, $this->source); })()))) {
                yield "active";
            }
            yield "\">
                <a href=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck__list", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["deck"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["deck"], "name", [], "any", false, false, false, 15), "html", null, true);
            yield "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['deck'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    </ul>

    <section class=\"card-deck__list__content\">
        ";
        // line 21
        if ((array_key_exists("form", $context) &&  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })())))) {
            // line 22
            yield "            ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
            yield "

                ";
            // line 24
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), 'row');
            yield "

                <section class=\"card-deck__container\">
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["cardSlotIterator"]) {
                // line 28
                yield "                        <article class=\"card-slot\"></article>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cardSlotIterator'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "                </section>

                <input type=\"submit\" value=\"Guardar\">

                ";
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cards", [], "any", true, true, false, 34)) {
                // line 35
                yield "                    <section class=\"cards__container grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 py-6\">
                        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "cards", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 37
                    yield "                            <label for=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["card"], "vars", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
                    yield "\" class=\"card relative cursor-pointer\">
                                ";
                    // line 38
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["card"], 'widget', ["attr" => ["class" => "hidden"]]);
                    yield "

                                <article class=\"aspect-[0.7] flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-300 dark:border-gray-700 transition-shadow hover:shadow-lg\">
";
                    // line 44
                    yield "
                                    <div class=\"p-4 flex flex-col gap-2\">
                                        <data class=\"text-sm font-semibold text-red-600 dark:text-red-400 bg-red-100
                                                     dark:bg-red-900 px-2 py-1 rounded-full self-start\">❤️</data>

                                        <h4 class=\"text-lg font-bold text-gray-800 dark:text-gray-100\">";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["card"], "vars", [], "any", false, false, false, 49), "label", [], "any", false, false, false, 49), "html", null, true);
                    yield "</h4>
                                    </div>
                                </article>
                            </label>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['card'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                yield "                    </section>
                ";
            }
            // line 56
            yield "            ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
            yield "
        ";
        }
        // line 58
        yield "
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const cardDeckContainer = document.querySelector('.card-deck__container');
                const cardsContainer = document.querySelector('.cards__container');
                const selectedClass = 'card-deck__card--selected';

                const cards = cardsContainer.querySelectorAll('.card');

                cards.forEach((card) => {
                    const checkbox = card.querySelector('input[type=\"checkbox\"]');

                    if (checkbox.checked) {
                        const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
                        if (firstSlot) {
                            firstSlot.replaceWith(card);
                            card.classList.add(selectedClass);
                        }
                    }

                    checkbox.addEventListener('change', function (event) {
                        if (event.target.checked) {
                            const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
                            if (firstSlot) {
                                firstSlot.replaceWith(card);
                                card.classList.add(selectedClass);
                            } else {
                                event.target.checked = false;
                            }
                        } else {
                            cardsContainer.prepend(card);
                            card.classList.remove(selectedClass);

                            const newSlot = document.createElement('article');
                            newSlot.classList.add('card-slot');
                            cardDeckContainer.appendChild(newSlot);
                        }
                    });
                });
            });
        </script>
    </section>
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
        return "card-deck/index.html.twig";
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
        return array (  242 => 58,  236 => 56,  232 => 54,  221 => 49,  214 => 44,  208 => 38,  203 => 37,  199 => 36,  196 => 35,  194 => 34,  188 => 30,  181 => 28,  177 => 27,  171 => 24,  165 => 22,  163 => 21,  158 => 18,  147 => 15,  140 => 14,  136 => 13,  133 => 12,  120 => 11,  107 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mis Mazos{% endblock %}

{% block styles %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/card-deck.css') }}\">
{% endblock %}

{% block main %}
    <ul class=\"card-deck__list\">
        {% for deck in cardDecks %}
            <li class=\"card-deck__list__tab {% if deck.id == currentCardDeckId %}active{% endif %}\">
                <a href=\"{{ path('card_deck__list', {'id': deck.id}) }}\">{{ deck.name }}</a>
            </li>
        {% endfor %}
    </ul>

    <section class=\"card-deck__list__content\">
        {% if form is defined and form is not null %}
            {{ form_start(form) }}

                {{ form_row(form.name) }}

                <section class=\"card-deck__container\">
                    {% for cardSlotIterator in 1..8 %}
                        <article class=\"card-slot\"></article>
                    {% endfor %}
                </section>

                <input type=\"submit\" value=\"Guardar\">

                {% if form.cards is defined %}
                    <section class=\"cards__container grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 py-6\">
                        {% for card in form.cards %}
                            <label for=\"{{ card.vars.id }}\" class=\"card relative cursor-pointer\">
                                {{ form_widget(card, { attr: { class: 'hidden' } }) }}

                                <article class=\"aspect-[0.7] flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-300 dark:border-gray-700 transition-shadow hover:shadow-lg\">
{#                                    <figure class=\"h-52 bg-black bg-center bg-no-repeat bg-contain\" style=\"background-image: url('{{ asset('/assets/images/content/cards/' ~ card.image) }}');\">#}
{#                                        <data class=\"block p-1 text-xs text-white\"></data>#}
{#                                    </figure>#}

                                    <div class=\"p-4 flex flex-col gap-2\">
                                        <data class=\"text-sm font-semibold text-red-600 dark:text-red-400 bg-red-100
                                                     dark:bg-red-900 px-2 py-1 rounded-full self-start\">❤️</data>

                                        <h4 class=\"text-lg font-bold text-gray-800 dark:text-gray-100\">{{ card.vars.label }}</h4>
                                    </div>
                                </article>
                            </label>
                        {% endfor %}
                    </section>
                {% endif %}
            {{ form_end(form) }}
        {% endif %}

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const cardDeckContainer = document.querySelector('.card-deck__container');
                const cardsContainer = document.querySelector('.cards__container');
                const selectedClass = 'card-deck__card--selected';

                const cards = cardsContainer.querySelectorAll('.card');

                cards.forEach((card) => {
                    const checkbox = card.querySelector('input[type=\"checkbox\"]');

                    if (checkbox.checked) {
                        const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
                        if (firstSlot) {
                            firstSlot.replaceWith(card);
                            card.classList.add(selectedClass);
                        }
                    }

                    checkbox.addEventListener('change', function (event) {
                        if (event.target.checked) {
                            const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
                            if (firstSlot) {
                                firstSlot.replaceWith(card);
                                card.classList.add(selectedClass);
                            } else {
                                event.target.checked = false;
                            }
                        } else {
                            cardsContainer.prepend(card);
                            card.classList.remove(selectedClass);

                            const newSlot = document.createElement('article');
                            newSlot.classList.add('card-slot');
                            cardDeckContainer.appendChild(newSlot);
                        }
                    });
                });
            });
        </script>
    </section>
{% endblock %}", "card-deck/index.html.twig", "C:\\Users\\eduar\\Documents\\GitHub\\proyecto-integrado\\templates\\card-deck\\index.html.twig");
    }
}
