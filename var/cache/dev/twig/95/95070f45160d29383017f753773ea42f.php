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

/* card-deck/edit.html.twig */
class __TwigTemplate_f5e1fe332a9a54e084fdc6e6b88c7a2c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card-deck/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card-deck/edit.html.twig"));

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
        yield "    ";
        // line 13
        yield "    <ul class=\"flex flex-wrap gap-6 mb-6\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cardDecks"]) || array_key_exists("cardDecks", $context) ? $context["cardDecks"] : (function () { throw new RuntimeError('Variable "cardDecks" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cardDeck"]) {
            // line 15
            yield "            <li>
                <a href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\"
                   class=\"px-4 py-2 rounded-tl-sm rounded-tr-sm font-semibold transition-colors duration-300 border-t border-r border-l
                      ";
            // line 18
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "id", [], "any", false, false, false, 18) == (isset($context["currentCardDeckId"]) || array_key_exists("currentCardDeckId", $context) ? $context["currentCardDeckId"] : (function () { throw new RuntimeError('Variable "currentCardDeckId" does not exist.', 18, $this->source); })()))) {
                // line 19
                yield "                          bg-grey-600 text-white
                      ";
            } else {
                // line 21
                yield "                          bg-grey-200 text-gray-800 hover:bg-grey-100 hover:text-blue-600
                      ";
            }
            // line 22
            yield "\">
                    ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "name", [], "any", false, false, false, 23), "html", null, true);
            yield "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cardDeck'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    </ul>


    ";
        // line 30
        if ((array_key_exists("form", $context) &&  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })())))) {
            // line 31
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
            yield "
        <article class=\"rounded-2xl border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 p-6 flex flex-col gap-4\">
            <header class=\"flex flex-col md:flex-row items-start md:items-center justify-between gap-4 p-4 bg-gray-100 dark:bg-gray-800 rounded-xl shadow-sm\">
                <section class=\"w-full md:w-1/3\">
                    ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"]]);
            // line 39
            yield "
                </section>

                <label class=\"flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300\">
                    ¿Favorito?
                    ";
            // line 44
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "isFavorite", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "rounded text-blue-600 focus:ring-blue-500"]]);
            // line 48
            yield "
                </label>

                <section class=\"flex items-center gap-2\"> ";
            // line 52
            yield "                    <input type=\"submit\" value=\"Guardar\"
                           class=\"px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold transition shadow-sm cursor-pointer\">

                    ";
            // line 56
            yield "                    <input id=\"import-deck-json\" type=\"file\" accept=\"application/json\"
                           class=\"text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0
                                      file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700\">

                    <button type=\"button\" id=\"load-json-btn\" ";
            // line 61
            yield "                            class=\"px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white text-sm
                                       font-semibold transition shadow-sm cursor-pointer\">Importar mazo</button>
                </section>
            </header>

            <section class=\"card-deck__container grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4\">
                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                yield " ";
                // line 68
                yield "                    <article class=\"card-slot\"></article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "            </section>
        </article>

        ";
            // line 73
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cards", [], "any", true, true, false, 73)) {
                // line 74
                yield "            <section class=\"cards__container grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 py-6\">
                ";
                // line 76
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "cards", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "choices", [], "any", false, false, false, 76));
                foreach ($context['_seq'] as $context["_key"] => $context["choice_view"]) {
                    // line 77
                    yield "                    ";
                    // line 78
                    yield "                    ";
                    $context["card_entity"] = CoreExtension::getAttribute($this->env, $this->source, $context["choice_view"], "data", [], "any", false, false, false, 78);
                    // line 79
                    yield "                    ";
                    // line 80
                    yield "                    ";
                    $context["card_checkbox_widget"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "cards", [], "any", false, false, false, 80), CoreExtension::getAttribute($this->env, $this->source, $context["choice_view"], "value", [], "any", false, false, false, 80), [], "array", false, false, false, 80);
                    // line 81
                    yield "
                    ";
                    // line 82
                    if (( !(null === (isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 82, $this->source); })())) &&  !((isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 82, $this->source); })()) === false))) {
                        yield " ";
                        // line 83
                        yield "                        <label for=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["card_checkbox_widget"]) || array_key_exists("card_checkbox_widget", $context) ? $context["card_checkbox_widget"] : (function () { throw new RuntimeError('Variable "card_checkbox_widget" does not exist.', 83, $this->source); })()), "vars", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83), "html", null, true);
                        yield "\" class=\"card__label\">
                            ";
                        // line 84
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["card_checkbox_widget"]) || array_key_exists("card_checkbox_widget", $context) ? $context["card_checkbox_widget"] : (function () { throw new RuntimeError('Variable "card_checkbox_widget" does not exist.', 84, $this->source); })()), 'widget', ["attr" => ["class" => "hidden"]]);
                        yield " ";
                        // line 85
                        yield "
                            <article class=\"card p-1 aspect-[0.7] grid grid-rows-[1fr_2fr] bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-300 dark:border-gray-700\">
                                ";
                        // line 88
                        yield "                                <figure class=\"flex flex-row justify-end rounded-lg px-4 py-2 h-52 bg-black bg-center bg-no-repeat bg-contain\" style=\"background-image: url('";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/images/card/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 88, $this->source); })()), "image", [], "any", false, false, false, 88))), "html", null, true);
                        yield "');\">
                                    <data class=\"flex flex-row gap-2 text-xl font-semibold text-black-600 dark:white\">
                                        <span>";
                        // line 90
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 90, $this->source); })()), "health", [], "any", false, false, false, 90), "html", null, true);
                        yield "</span>
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                            <path d=\"m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z\" />
                                        </svg>
                                    </data>
                                </figure>
                                <section class=\"p-3 grid grid-rows-[0.5fr_1.5fr] gap-2\">
                                    <h4 class=\"text-lg font-bold text-gray-800 dark:text-gray-100\">";
                        // line 97
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), "html", null, true);
                        yield "</h4>
                                    <ul class=\"flex flex-col\">
                                        ";
                        // line 99
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 99, $this->source); })()), "abilities", [], "any", false, false, false, 99));
                        foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
                            // line 100
                            yield "                                            <li class=\"flex-1 grid grid-cols-2 items-center\">
                                                <span>";
                            // line 101
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "name", [], "any", false, false, false, 101), "html", null, true);
                            yield "</span>
                                                <div class=\"grid grid-cols-2 gap-8 justify-self-end text-xs\">
                                                    <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                        <span>";
                            // line 104
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "cost", [], "any", false, false, false, 104), "html", null, true);
                            yield "</span>
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                            <path fill-rule=\"evenodd\" d=\"M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z\" clip-rule=\"evenodd\" />
                                                        </svg>
                                                    </data>
                                                    <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                        <span>";
                            // line 110
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "value", [], "any", false, false, false, 110), "html", null, true);
                            yield "</span>
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                            <path fill-rule=\"evenodd\" d=\"M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183.395c.447-.15.799.5.948.948l.395-1.183A.75.75 0 0 1 16.5 15Z\" clip-rule=\"evenodd\" />
                                                        </svg>
                                                    </data>
                                                </div>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['ability'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 118
                        yield "                                    </ul>
                                </section>
                            </article>
                        </label>
                    ";
                    }
                    // line 123
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['choice_view'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                yield "            </section>
        ";
            }
            // line 126
            yield "
        ";
            // line 128
            yield "        ";
            // line 129
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), 'form_end');
            yield "
    ";
        }
        // line 131
        yield "
    <script>
        // Ya no necesitas esta función si EntityType maneja la selección
        /*
        function updateSelectedCardsInput() {
            const selectedCardsInput = document.getElementById('selected-cards-input'); // Este ID ya no existiría
            const checkboxes = document.querySelectorAll('.cards__container input[type=\"checkbox\"]');
            const selectedIds = [];

            checkboxes.forEach(cb => {
                if (cb.checked) {
                    selectedIds.push(parseInt(cb.value));
                }
            });

            selectedCardsInput.value = JSON.stringify(selectedIds);
        }
        */

        document.getElementById('load-json-btn').addEventListener('click', function () {
            const fileInput = document.getElementById('import-deck-json');
            const file = fileInput.files[0];

            if (!file) {
                alert('Por favor selecciona un archivo JSON.');
                return;
            }

            const reader = new FileReader();

            reader.onload = function (event) {
                try {
                    const data = JSON.parse(event.target.result);

                    if (!Array.isArray(data.cards)) {
                        alert('El archivo JSON debe contener una propiedad \"cards\" con un array de IDs.');
                        return;
                    }

                    const selectedCardIdsFromJson = data.cards;
                    // Obtén todos los checkboxes que Symfony renderizó para 'form.cards'
                    const allCardCheckboxes = document.querySelectorAll('input[name=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "cards", [], "any", false, false, false, 172), "vars", [], "any", false, false, false, 172), "full_name", [], "any", false, false, false, 172), "html", null, true);
        yield "[]\"]');

                    // Desmarcar todos primero
                    allCardCheckboxes.forEach(cb => {
                        if (cb.checked) {
                            cb.checked = false;
                            // Disparar evento change para que tu otra lógica de UI reaccione si es necesario
                            cb.dispatchEvent(new Event('change', { bubbles: true }));
                        }
                    });

                    // Marcar los que vienen del JSON
                    selectedCardIdsFromJson.forEach(cardId => {
                        // Encuentra el checkbox por su valor (que debería ser el ID de la carta)
                        const checkboxToSelect = Array.from(allCardCheckboxes).find(cb => parseInt(cb.value) === cardId);
                        if (checkboxToSelect && !checkboxToSelect.checked) {
                            checkboxToSelect.checked = true;
                            // Disparar evento change para que tu otra lógica de UI reaccione
                            checkboxToSelect.dispatchEvent(new Event('change', { bubbles: true }));
                        }
                    });

                    // Ya no es necesario llamar a updateSelectedCardsInput()
                    // updateSelectedCardsInput();

                    // Actualizar el nombre del mazo si viene en el JSON
                    if (data.name) {
                        // El nombre del input de Symfony para 'name' es 'card_deck_form[name]'
                        const nameInput = document.querySelector('input[name=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "name", [], "any", false, false, false, 200), "vars", [], "any", false, false, false, 200), "full_name", [], "any", false, false, false, 200), "html", null, true);
        yield "\"]');
                        if (nameInput) {
                            nameInput.value = data.name;
                        }
                    }

                    // Actualizar isFavorite si viene en el JSON
                    if (data.isFavorite !== undefined) {
                        const favoriteInput = document.querySelector('input[name=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "isFavorite", [], "any", false, false, false, 208), "vars", [], "any", false, false, false, 208), "full_name", [], "any", false, false, false, 208), "html", null, true);
        yield "\"]');
                        if (favoriteInput) {
                            favoriteInput.checked = data.isFavorite;
                        }
                    }


                } catch (e) {
                    alert('El archivo no contiene un JSON válido.');
                    console.error(e);
                }
            };

            reader.readAsText(file);
        });

        // Tu script para mover cartas seleccionadas al \"deck container\"
        // Asegúrate de que los selectores siguen siendo válidos
        document.addEventListener('DOMContentLoaded', function () {
            const cardDeckContainer = document.querySelector('.card-deck__container');
            const cardsContainer = document.querySelector('.cards__container'); // Contenedor de todas las cartas disponibles
            const selectedClass = 'card-deck__card--selected'; // Clase para la carta cuando está en el mazo visual

            // Es importante que esto se ejecute después de que Symfony haya renderizado los checkboxes
            // y después de que el script de importación de JSON pueda haber modificado su estado.
            // Esta lógica es para la UI inicial y para cuando el usuario hace clic manualmente.

            function moveCardToDeck(cardLabelElement) {
                const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
                if (firstSlot) {
                    firstSlot.replaceWith(cardLabelElement);
                    cardLabelElement.querySelector('.card').classList.add(selectedClass);
                } else {
                    // No hay slots, ¿qué hacer? Podrías desmarcar el checkbox.
                    const checkbox = cardLabelElement.querySelector('input[type=\"checkbox\"]');
                    if (checkbox) checkbox.checked = false;
                }
            }

            function moveCardToAvailable(cardLabelElement) {
                cardsContainer.prepend(cardLabelElement); // O append, como prefieras
                cardLabelElement.querySelector('.card').classList.remove(selectedClass);

                const newSlot = document.createElement('article');
                newSlot.classList.add('card-slot');
                cardDeckContainer.appendChild(newSlot); // Añadir un slot vacío al final
            }

            // Inicializar la UI basada en los checkboxes marcados
            const allCardCheckboxes = document.querySelectorAll('input[name=\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "cards", [], "any", false, false, false, 257), "vars", [], "any", false, false, false, 257), "full_name", [], "any", false, false, false, 257), "html", null, true);
        yield "[]\"]');
            allCardCheckboxes.forEach(checkbox => {
                const cardLabel = checkbox.closest('.card__label');
                if (checkbox.checked) {
                    moveCardToDeck(cardLabel);
                }

                // Escuchar cambios en CADA checkbox
                checkbox.addEventListener('change', function (event) {
                    const currentCardLabel = event.target.closest('.card__label');
                    if (event.target.checked) {
                        moveCardToDeck(currentCardLabel);
                    } else {
                        moveCardToAvailable(currentCardLabel);
                    }
                });
            });
        });
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
        return "card-deck/edit.html.twig";
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
        return array (  503 => 257,  451 => 208,  440 => 200,  409 => 172,  366 => 131,  360 => 129,  358 => 128,  355 => 126,  351 => 124,  345 => 123,  338 => 118,  324 => 110,  315 => 104,  309 => 101,  306 => 100,  302 => 99,  297 => 97,  287 => 90,  281 => 88,  277 => 85,  274 => 84,  269 => 83,  266 => 82,  263 => 81,  260 => 80,  258 => 79,  255 => 78,  253 => 77,  248 => 76,  245 => 74,  243 => 73,  238 => 70,  231 => 68,  226 => 67,  218 => 61,  212 => 56,  207 => 52,  202 => 48,  200 => 44,  193 => 39,  191 => 35,  183 => 31,  181 => 30,  176 => 27,  166 => 23,  163 => 22,  159 => 21,  155 => 19,  153 => 18,  148 => 16,  145 => 15,  141 => 14,  138 => 13,  136 => 12,  123 => 11,  110 => 8,  106 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mis Mazos{% endblock %}

{% block styles %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/card-deck.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/card.css') }}\">
{% endblock %}

{% block main %}
    {# ... (código de selección de mazos sin cambios) ... #}
    <ul class=\"flex flex-wrap gap-6 mb-6\">
        {% for cardDeck in cardDecks %}
            <li>
                <a href=\"{{ path('card_deck_edit', {'id': cardDeck.id}) }}\"
                   class=\"px-4 py-2 rounded-tl-sm rounded-tr-sm font-semibold transition-colors duration-300 border-t border-r border-l
                      {% if cardDeck.id == currentCardDeckId %}
                          bg-grey-600 text-white
                      {% else %}
                          bg-grey-200 text-gray-800 hover:bg-grey-100 hover:text-blue-600
                      {% endif %}\">
                    {{ cardDeck.name }}
                </a>
            </li>
        {% endfor %}
    </ul>


    {% if form is defined and form is not null %}
        {{ form_start(form) }}
        <article class=\"rounded-2xl border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 p-6 flex flex-col gap-4\">
            <header class=\"flex flex-col md:flex-row items-start md:items-center justify-between gap-4 p-4 bg-gray-100 dark:bg-gray-800 rounded-xl shadow-sm\">
                <section class=\"w-full md:w-1/3\">
                    {{ form_row(form.name, {
                        attr: {
                            class: \"w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500\"
                        }
                    }) }}
                </section>

                <label class=\"flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300\">
                    ¿Favorito?
                    {{ form_widget(form.isFavorite, {
                        attr: {
                            class: \"rounded text-blue-600 focus:ring-blue-500\"
                        }
                    }) }}
                </label>

                <section class=\"flex items-center gap-2\"> {# Agrupado para mejor layout #}
                    <input type=\"submit\" value=\"Guardar\"
                           class=\"px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold transition shadow-sm cursor-pointer\">

                    {# Sección de importación #}
                    <input id=\"import-deck-json\" type=\"file\" accept=\"application/json\"
                           class=\"text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0
                                      file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700\">

                    <button type=\"button\" id=\"load-json-btn\" {# Importante: type=\"button\" para no enviar el form #}
                            class=\"px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white text-sm
                                       font-semibold transition shadow-sm cursor-pointer\">Importar mazo</button>
                </section>
            </header>

            <section class=\"card-deck__container grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4\">
                {% for i in 1..8 %} {# Asumo que estos son placeholders para las cartas seleccionadas #}
                    <article class=\"card-slot\"></article>
                {% endfor %}
            </section>
        </article>

        {% if form.cards is defined %}
            <section class=\"cards__container grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 py-6\">
                {# Iterar sobre las 'choices' del campo 'cards' para obtener la entidad #}
                {% for choice_view in form.cards.vars.choices %}
                    {# 'choice_view.data' ES la entidad Card real #}
                    {% set card_entity = choice_view.data %}
                    {# 'form.cards[choice_view.value]' te da el FormFieldView para el widget del checkbox específico #}
                    {% set card_checkbox_widget = form.cards[choice_view.value] %}

                    {% if card_entity is not null and card_entity is not same as(false) %} {# Comprobación más robusta #}
                        <label for=\"{{ card_checkbox_widget.vars.id }}\" class=\"card__label\">
                            {{ form_widget(card_checkbox_widget, { attr: { class: 'hidden' } }) }} {# El checkbox real, oculto #}

                            <article class=\"card p-1 aspect-[0.7] grid grid-rows-[1fr_2fr] bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-300 dark:border-gray-700\">
                                {# Ahora card_entity SÍ es un objeto Card #}
                                <figure class=\"flex flex-row justify-end rounded-lg px-4 py-2 h-52 bg-black bg-center bg-no-repeat bg-contain\" style=\"background-image: url('{{ asset('/assets/images/card/' ~ card_entity.image) }}');\">
                                    <data class=\"flex flex-row gap-2 text-xl font-semibold text-black-600 dark:white\">
                                        <span>{{ card_entity.health }}</span>
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                            <path d=\"m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z\" />
                                        </svg>
                                    </data>
                                </figure>
                                <section class=\"p-3 grid grid-rows-[0.5fr_1.5fr] gap-2\">
                                    <h4 class=\"text-lg font-bold text-gray-800 dark:text-gray-100\">{{ card_entity.name }}</h4>
                                    <ul class=\"flex flex-col\">
                                        {% for ability in card_entity.abilities %}
                                            <li class=\"flex-1 grid grid-cols-2 items-center\">
                                                <span>{{ ability.name }}</span>
                                                <div class=\"grid grid-cols-2 gap-8 justify-self-end text-xs\">
                                                    <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                        <span>{{ ability.cost }}</span>
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                            <path fill-rule=\"evenodd\" d=\"M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z\" clip-rule=\"evenodd\" />
                                                        </svg>
                                                    </data>
                                                    <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                        <span>{{ ability.value }}</span>
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                            <path fill-rule=\"evenodd\" d=\"M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183.395c.447-.15.799.5.948.948l.395-1.183A.75.75 0 0 1 16.5 15Z\" clip-rule=\"evenodd\" />
                                                        </svg>
                                                    </data>
                                                </div>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </section>
                            </article>
                        </label>
                    {% endif %}
                {% endfor %}
            </section>
        {% endif %}

        {# Ya no necesitas este input oculto manual si 'form.cards' maneja la selección #}
        {# <input type=\"hidden\" id=\"selected-cards-input\" name=\"selectedCards\" value=\"\"> #}
        {{ form_end(form) }}
    {% endif %}

    <script>
        // Ya no necesitas esta función si EntityType maneja la selección
        /*
        function updateSelectedCardsInput() {
            const selectedCardsInput = document.getElementById('selected-cards-input'); // Este ID ya no existiría
            const checkboxes = document.querySelectorAll('.cards__container input[type=\"checkbox\"]');
            const selectedIds = [];

            checkboxes.forEach(cb => {
                if (cb.checked) {
                    selectedIds.push(parseInt(cb.value));
                }
            });

            selectedCardsInput.value = JSON.stringify(selectedIds);
        }
        */

        document.getElementById('load-json-btn').addEventListener('click', function () {
            const fileInput = document.getElementById('import-deck-json');
            const file = fileInput.files[0];

            if (!file) {
                alert('Por favor selecciona un archivo JSON.');
                return;
            }

            const reader = new FileReader();

            reader.onload = function (event) {
                try {
                    const data = JSON.parse(event.target.result);

                    if (!Array.isArray(data.cards)) {
                        alert('El archivo JSON debe contener una propiedad \"cards\" con un array de IDs.');
                        return;
                    }

                    const selectedCardIdsFromJson = data.cards;
                    // Obtén todos los checkboxes que Symfony renderizó para 'form.cards'
                    const allCardCheckboxes = document.querySelectorAll('input[name=\"{{ form.cards.vars.full_name }}[]\"]');

                    // Desmarcar todos primero
                    allCardCheckboxes.forEach(cb => {
                        if (cb.checked) {
                            cb.checked = false;
                            // Disparar evento change para que tu otra lógica de UI reaccione si es necesario
                            cb.dispatchEvent(new Event('change', { bubbles: true }));
                        }
                    });

                    // Marcar los que vienen del JSON
                    selectedCardIdsFromJson.forEach(cardId => {
                        // Encuentra el checkbox por su valor (que debería ser el ID de la carta)
                        const checkboxToSelect = Array.from(allCardCheckboxes).find(cb => parseInt(cb.value) === cardId);
                        if (checkboxToSelect && !checkboxToSelect.checked) {
                            checkboxToSelect.checked = true;
                            // Disparar evento change para que tu otra lógica de UI reaccione
                            checkboxToSelect.dispatchEvent(new Event('change', { bubbles: true }));
                        }
                    });

                    // Ya no es necesario llamar a updateSelectedCardsInput()
                    // updateSelectedCardsInput();

                    // Actualizar el nombre del mazo si viene en el JSON
                    if (data.name) {
                        // El nombre del input de Symfony para 'name' es 'card_deck_form[name]'
                        const nameInput = document.querySelector('input[name=\"{{ form.name.vars.full_name }}\"]');
                        if (nameInput) {
                            nameInput.value = data.name;
                        }
                    }

                    // Actualizar isFavorite si viene en el JSON
                    if (data.isFavorite !== undefined) {
                        const favoriteInput = document.querySelector('input[name=\"{{ form.isFavorite.vars.full_name }}\"]');
                        if (favoriteInput) {
                            favoriteInput.checked = data.isFavorite;
                        }
                    }


                } catch (e) {
                    alert('El archivo no contiene un JSON válido.');
                    console.error(e);
                }
            };

            reader.readAsText(file);
        });

        // Tu script para mover cartas seleccionadas al \"deck container\"
        // Asegúrate de que los selectores siguen siendo válidos
        document.addEventListener('DOMContentLoaded', function () {
            const cardDeckContainer = document.querySelector('.card-deck__container');
            const cardsContainer = document.querySelector('.cards__container'); // Contenedor de todas las cartas disponibles
            const selectedClass = 'card-deck__card--selected'; // Clase para la carta cuando está en el mazo visual

            // Es importante que esto se ejecute después de que Symfony haya renderizado los checkboxes
            // y después de que el script de importación de JSON pueda haber modificado su estado.
            // Esta lógica es para la UI inicial y para cuando el usuario hace clic manualmente.

            function moveCardToDeck(cardLabelElement) {
                const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
                if (firstSlot) {
                    firstSlot.replaceWith(cardLabelElement);
                    cardLabelElement.querySelector('.card').classList.add(selectedClass);
                } else {
                    // No hay slots, ¿qué hacer? Podrías desmarcar el checkbox.
                    const checkbox = cardLabelElement.querySelector('input[type=\"checkbox\"]');
                    if (checkbox) checkbox.checked = false;
                }
            }

            function moveCardToAvailable(cardLabelElement) {
                cardsContainer.prepend(cardLabelElement); // O append, como prefieras
                cardLabelElement.querySelector('.card').classList.remove(selectedClass);

                const newSlot = document.createElement('article');
                newSlot.classList.add('card-slot');
                cardDeckContainer.appendChild(newSlot); // Añadir un slot vacío al final
            }

            // Inicializar la UI basada en los checkboxes marcados
            const allCardCheckboxes = document.querySelectorAll('input[name=\"{{ form.cards.vars.full_name }}[]\"]');
            allCardCheckboxes.forEach(checkbox => {
                const cardLabel = checkbox.closest('.card__label');
                if (checkbox.checked) {
                    moveCardToDeck(cardLabel);
                }

                // Escuchar cambios en CADA checkbox
                checkbox.addEventListener('change', function (event) {
                    const currentCardLabel = event.target.closest('.card__label');
                    if (event.target.checked) {
                        moveCardToDeck(currentCardLabel);
                    } else {
                        moveCardToAvailable(currentCardLabel);
                    }
                });
            });
        });
    </script>
{% endblock %}", "card-deck/edit.html.twig", "C:\\Users\\eduar\\Documents\\GitHub\\proyecto-integrado\\templates\\card-deck\\edit.html.twig");
    }
}
