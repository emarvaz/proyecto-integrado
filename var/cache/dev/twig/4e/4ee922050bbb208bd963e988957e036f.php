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
class __TwigTemplate_52a3cb611d0cdb3770e55e6ca016fae4 extends Template
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
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/card-deck.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/card.css"), "html", null, true);
        yield "\">
    <style>
        /* Estilo simple para el tab activo */
        .card-deck__list__tab.is-active a {
            font-weight: bold;
            color: #007bff; /* Un color de ejemplo */
            text-decoration: none;
        }
        .card-deck__list__tab a {
            display: block; /* Para que el enlace ocupe todo el li si quieres */
            padding: 10px 15px; /* Ajusta según tu CSS */
            text-decoration: none;
            color: inherit; /* Hereda el color del texto del li */
        }
        .card-deck__list__tab:hover a {
            background-color: #f0f0f0; /* Efecto hover */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 28
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

        // line 29
        yield "    <main class=\"card-deck__layout\">
        <ul class=\"card-deck__list\">
            ";
        // line 32
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cardDecks"]) || array_key_exists("cardDecks", $context) ? $context["cardDecks"] : (function () { throw new RuntimeError('Variable "cardDecks" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["deck"]) {
            // line 33
            yield "                ";
            // line 34
            yield "                <li class=\"card-deck__list__tab ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["deck"], "id", [], "any", false, false, false, 34) == (isset($context["currentCardDeckId"]) || array_key_exists("currentCardDeckId", $context) ? $context["currentCardDeckId"] : (function () { throw new RuntimeError('Variable "currentCardDeckId" does not exist.', 34, $this->source); })()))) {
                yield "is-active";
            }
            yield "\">
                    ";
            // line 36
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck__list", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["deck"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["deck"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['deck'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            ";
        // line 40
        yield "            <li class=\"card-deck__list__tab ";
        if ((($tmp =  !(isset($context["currentCardDeckId"]) || array_key_exists("currentCardDeckId", $context) ? $context["currentCardDeckId"] : (function () { throw new RuntimeError('Variable "currentCardDeckId" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-active";
        }
        yield "\">
                <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck__list");
        yield "\">Crear Nuevo Mazo</a> ";
        // line 42
        yield "            </li>
        </ul>

        <section class=\"card-deck__list__content\">
            ";
        // line 47
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 48
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 49
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\"> ";
                // line 50
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "
            ";
        // line 55
        if ((array_key_exists("form", $context) &&  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })())))) {
            // line 56
            yield "                ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_start');
            yield "
                ";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), 'row');
            yield "

                ";
            // line 60
            yield "                ";
            // line 61
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cards", [], "any", true, true, false, 61)) {
                // line 62
                yield "                    <section class=\"cards__container\">
                        <p>Selecciona las cartas para este mazo:</p> ";
                // line 64
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "cards", [], "any", false, false, false, 64));
                foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                    // line 65
                    yield "                            <label class=\"card\" for=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
                    yield "\">
                                ";
                    // line 66
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget');
                    yield "
                                <figure class=\"card__image\" role=\"img\">
                                    ";
                    // line 69
                    yield "                                    ";
                    // line 70
                    yield "                                    <data class=\"card__index\"></data> ";
                    // line 71
                    yield "                                </figure>
                                ";
                    // line 72
                    yield " ";
                    // line 73
                    yield "                                <h4 class=\"card__name\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "vars", [], "any", false, false, false, 73), "label", [], "any", false, false, false, 73), "html", null, true);
                    yield "</h4> ";
                    // line 74
                    yield "                            </label>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                yield "                    </section>
                ";
            }
            // line 78
            yield "
                <input type=\"submit\" value=\"Guardar Mazo\">
                ";
            // line 80
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
            yield "
            ";
        } else {
            // line 82
            yield "                <p>Selecciona un mazo de la lista o crea uno nuevo.</p>
            ";
        }
        // line 84
        yield "        </section>
    </main>
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
        return array (  306 => 84,  302 => 82,  297 => 80,  293 => 78,  289 => 76,  282 => 74,  278 => 73,  276 => 72,  273 => 71,  271 => 70,  269 => 69,  264 => 66,  259 => 65,  254 => 64,  251 => 62,  248 => 61,  246 => 60,  241 => 57,  236 => 56,  234 => 55,  231 => 54,  225 => 53,  215 => 50,  211 => 49,  206 => 48,  201 => 47,  195 => 42,  192 => 41,  185 => 40,  183 => 39,  171 => 36,  164 => 34,  162 => 33,  157 => 32,  153 => 29,  140 => 28,  110 => 8,  106 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mis Mazos{% endblock %}

{% block styles %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/card-deck.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/card.css') }}\">
    <style>
        /* Estilo simple para el tab activo */
        .card-deck__list__tab.is-active a {
            font-weight: bold;
            color: #007bff; /* Un color de ejemplo */
            text-decoration: none;
        }
        .card-deck__list__tab a {
            display: block; /* Para que el enlace ocupe todo el li si quieres */
            padding: 10px 15px; /* Ajusta según tu CSS */
            text-decoration: none;
            color: inherit; /* Hereda el color del texto del li */
        }
        .card-deck__list__tab:hover a {
            background-color: #f0f0f0; /* Efecto hover */
        }
    </style>
{% endblock %}

{% block main %}
    <main class=\"card-deck__layout\">
        <ul class=\"card-deck__list\">
            {# Iteramos sobre todos los mazos disponibles para crear los tabs #}
            {% for deck in cardDecks %}
                {# Añadimos la clase 'is-active' si el ID del deck actual coincide con currentCardDeckId #}
                <li class=\"card-deck__list__tab {% if deck.id == currentCardDeckId %}is-active{% endif %}\">
                    {# Cada tab es un enlace a la ruta card_deck__list con el ID del deck #}
                    <a href=\"{{ path('card_deck__list', {'id': deck.id}) }}\">{{ deck.name }}</a>
                </li>
            {% endfor %}
            {# Opcional: Tab para crear un nuevo mazo #}
            <li class=\"card-deck__list__tab {% if not currentCardDeckId %}is-active{% endif %}\">
                <a href=\"{{ path('card_deck__list') }}\">Crear Nuevo Mazo</a> {# Sin ID, el controlador creará uno nuevo #}
            </li>
        </ul>

        <section class=\"card-deck__list__content\">
            {# Mensajes flash para feedback al usuario #}
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }}\"> {# Adapta las clases a tu framework CSS si usas uno #}
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}

            {% if form is defined and form is not null %}
                {{ form_start(form) }}
                {{ form_row(form.name) }}

                {# El campo 'cards' (si es un EntityType con multiple=true y expanded=true) se renderizará aquí #}
                {# Si tienes un campo llamado 'cards' en tu CardDeckForm #}
                {% if form.cards is defined %}
                    <section class=\"cards__container\">
                        <p>Selecciona las cartas para este mazo:</p> {# O un título mejor #}
                        {% for choice in form.cards %}
                            <label class=\"card\" for=\"{{ choice.vars.id }}\">
                                {{ form_widget(choice) }}
                                <figure class=\"card__image\" role=\"img\">
                                    {# Aquí podrías querer mostrar la imagen de la carta si la tienes #}
                                    {# <img src=\"{{ asset('path/to/card/image/' ~ choice.vars.data.imageFilename) }}\" alt=\"{{ choice.vars.label }}\"> #}
                                    <data class=\"card__index\"></data> {# No sé qué es esto, lo dejo por si lo usas #}
                                </figure>
                                {# <data class=\"card__health\">{{ choice.vars.data.health }}</data> #} {# Asumiendo que choice.vars.data es tu entidad Card #}
                                <h4 class=\"card__name\">{{ choice.vars.label }}</h4> {# El label por defecto es el __toString de la entidad Card o lo que definas en 'choice_label' #}
                            </label>
                        {% endfor %}
                    </section>
                {% endif %}

                <input type=\"submit\" value=\"Guardar Mazo\">
                {{ form_end(form) }}
            {% else %}
                <p>Selecciona un mazo de la lista o crea uno nuevo.</p>
            {% endif %}
        </section>
    </main>
{% endblock %}", "card-deck/list.html.twig", "C:\\Users\\eduar\\Documents\\GitHub\\proyecto-integrado\\templates\\card-deck\\list.html.twig");
    }
}
