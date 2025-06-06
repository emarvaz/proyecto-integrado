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
        yield "    <ul class=\"flex flex-wrap gap-6\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cardDecks"]) || array_key_exists("cardDecks", $context) ? $context["cardDecks"] : (function () { throw new RuntimeError('Variable "cardDecks" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cardDeck"]) {
            // line 14
            yield "            <li>
                <a href=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            yield "\"
                   class=\"px-4 font-semibold py-4 border-t rounded-t-2xl border-r border-l bg-white dark:bg-gray-800
                      ";
            // line 17
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "id", [], "any", false, false, false, 17) == (isset($context["currentCardDeckId"]) || array_key_exists("currentCardDeckId", $context) ? $context["currentCardDeckId"] : (function () { throw new RuntimeError('Variable "currentCardDeckId" does not exist.', 17, $this->source); })()))) {
                // line 18
                yield "                          text-white
                      ";
            } else {
                // line 20
                yield "                          text-gray-800 hover:text-blue-600
                      ";
            }
            // line 21
            yield "\">
                    ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cardDeck"], "name", [], "any", false, false, false, 22), "html", null, true);
            yield "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cardDeck'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "    </ul>


    ";
        // line 29
        if ((array_key_exists("form", $context) &&  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })())))) {
            // line 30
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
            yield "
            <article class=\"rounded-2xl border rounded-tl-none border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 p-6 flex flex-col gap-4\">
                <header class=\"flex flex-col md:flex-row items-start md:items-center justify-between gap-4 p-4 bg-gray-100 dark:bg-gray-800 rounded-xl shadow-sm\">
                    <section class=\"w-full md:w-1/3\">
                        ";
            // line 34
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"]]);
            // line 38
            yield "
                    </section>

                    <label class=\"flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300\">
                        ¿Favorito?
                        ";
            // line 43
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "isFavorite", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "rounded text-blue-600 focus:ring-blue-500"]]);
            // line 47
            yield "
                    </label>

                    <section class=\"flex items-center gap-2\">
                        <input type=\"submit\" value=\"Guardar\"
                               class=\"px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold transition shadow-sm cursor-pointer\">

                        <input id=\"import-deck-json\" type=\"file\" accept=\"application/json\"
                               class=\"text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700\">

                        <button type=\"button\" id=\"load-json-btn\"
                                class=\"px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white text-sm font-semibold transition shadow-sm cursor-pointer\">Importar mazo</button>
                    </section>
                </header>

                <section class=\"card-deck__container grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4\">
                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 64
                yield "                        <article class=\"card-slot\"></article>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "                </section>
            </article>

            ";
            // line 69
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cards", [], "any", true, true, false, 69)) {
                // line 70
                yield "                <section class=\"cards__container grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 py-6\">
                    ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "cards", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "choices", [], "any", false, false, false, 71));
                foreach ($context['_seq'] as $context["_key"] => $context["choice_view"]) {
                    // line 72
                    yield "                        ";
                    $context["card_entity"] = CoreExtension::getAttribute($this->env, $this->source, $context["choice_view"], "data", [], "any", false, false, false, 72);
                    // line 73
                    yield "                        ";
                    $context["card_checkbox_widget"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "cards", [], "any", false, false, false, 73), CoreExtension::getAttribute($this->env, $this->source, $context["choice_view"], "value", [], "any", false, false, false, 73), [], "array", false, false, false, 73);
                    // line 74
                    yield "
                        ";
                    // line 75
                    if (( !(null === (isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 75, $this->source); })())) &&  !((isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 75, $this->source); })()) === false))) {
                        // line 76
                        yield "                            <label for=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["card_checkbox_widget"]) || array_key_exists("card_checkbox_widget", $context) ? $context["card_checkbox_widget"] : (function () { throw new RuntimeError('Variable "card_checkbox_widget" does not exist.', 76, $this->source); })()), "vars", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true);
                        yield "\" class=\"card__label\">
                                ";
                        // line 77
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["card_checkbox_widget"]) || array_key_exists("card_checkbox_widget", $context) ? $context["card_checkbox_widget"] : (function () { throw new RuntimeError('Variable "card_checkbox_widget" does not exist.', 77, $this->source); })()), 'widget', ["attr" => ["class" => "hidden"]]);
                        yield "

                                <article class=\"card p-1 aspect-[0.7] grid grid-rows-[1fr_2fr] bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-300 dark:border-gray-700\">
                                    <figure class=\"flex flex-row justify-end rounded-lg px-4 py-2 h-52 bg-black bg-center bg-no-repeat bg-contain\" style=\"background-image: url('";
                        // line 80
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/images/card/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 80, $this->source); })()), "image", [], "any", false, false, false, 80))), "html", null, true);
                        yield "');\">
                                        <data class=\"flex flex-row gap-2 text-xl font-semibold text-black-600 dark:white\">
                                            <span>";
                        // line 82
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 82, $this->source); })()), "health", [], "any", false, false, false, 82), "html", null, true);
                        yield "</span>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                <path d=\"m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z\" />
                                            </svg>
                                        </data>
                                    </figure>
                                    <section class=\"p-3 grid grid-rows-[0.5fr_1.5fr] gap-2\">
                                        <h4 class=\"text-lg font-bold text-gray-800 dark:text-gray-100\">";
                        // line 89
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), "html", null, true);
                        yield "</h4>
                                        <ul class=\"flex flex-col\">
                                            ";
                        // line 91
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card_entity"]) || array_key_exists("card_entity", $context) ? $context["card_entity"] : (function () { throw new RuntimeError('Variable "card_entity" does not exist.', 91, $this->source); })()), "abilities", [], "any", false, false, false, 91));
                        foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
                            // line 92
                            yield "                                                <li class=\"flex-1 grid grid-cols-2 items-center\">
                                                    <span>";
                            // line 93
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "name", [], "any", false, false, false, 93), "html", null, true);
                            yield "</span>
                                                    <div class=\"grid grid-cols-2 gap-8 justify-self-end text-xs\">
                                                        <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                            <span>";
                            // line 96
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "cost", [], "any", false, false, false, 96), "html", null, true);
                            yield "</span>
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                                <path fill-rule=\"evenodd\" d=\"M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z\" clip-rule=\"evenodd\" />
                                                            </svg>
                                                        </data>
                                                        <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                            <span>";
                            // line 102
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "value", [], "any", false, false, false, 102), "html", null, true);
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
                        // line 110
                        yield "                                        </ul>
                                    </section>
                                </article>
                            </label>
                        ";
                    }
                    // line 115
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['choice_view'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                yield "                </section>
            ";
            }
            // line 118
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_end');
            yield "
    ";
        }
        // line 120
        yield "
    <script>
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
                    const allCardCheckboxes = document.querySelectorAll('input[name=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "cards", [], "any", false, false, false, 143), "vars", [], "any", false, false, false, 143), "full_name", [], "any", false, false, false, 143), "html", null, true);
        yield "[]\"]');

                    allCardCheckboxes.forEach(cb => {
                        if (cb.checked) {
                            cb.checked = false;
                            cb.dispatchEvent(new Event('change', { bubbles: true }));
                        }
                    });

                    selectedCardIdsFromJson.forEach(cardId => {
                        const checkboxToSelect = Array.from(allCardCheckboxes).find(cb => parseInt(cb.value) === cardId);
                        if (checkboxToSelect && !checkboxToSelect.checked) {
                            checkboxToSelect.checked = true;
                            checkboxToSelect.dispatchEvent(new Event('change', { bubbles: true }));
                        }
                    });

                    if (data.name) {
                        const nameInput = document.querySelector('input[name=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "name", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "full_name", [], "any", false, false, false, 161), "html", null, true);
        yield "\"]');
                        if (nameInput) {
                            nameInput.value = data.name;
                        }
                    }

                    if (data.isFavorite !== undefined) {
                        const favoriteInput = document.querySelector('input[name=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "isFavorite", [], "any", false, false, false, 168), "vars", [], "any", false, false, false, 168), "full_name", [], "any", false, false, false, 168), "html", null, true);
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

        document.addEventListener('DOMContentLoaded', function () {
            const cardDeckContainer = document.querySelector('.card-deck__container');
            const cardsContainer = document.querySelector('.cards__container');
            const selectedClass = 'card-deck__card--selected';

            function moveCardToDeck(cardLabelElement) {
                const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
                if (firstSlot) {
                    firstSlot.replaceWith(cardLabelElement);
                    cardLabelElement.querySelector('.card').classList.add(selectedClass);
                } else {
                    const checkbox = cardLabelElement.querySelector('input[type=\"checkbox\"]');
                    if (checkbox) checkbox.checked = false;
                }
            }

            function moveCardToAvailable(cardLabelElement) {
                cardsContainer.prepend(cardLabelElement);
                cardLabelElement.querySelector('.card').classList.remove(selectedClass);

                const newSlot = document.createElement('article');
                newSlot.classList.add('card-slot');
                cardDeckContainer.appendChild(newSlot);
            }

            const allCardCheckboxes = document.querySelectorAll('input[name=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "cards", [], "any", false, false, false, 209), "vars", [], "any", false, false, false, 209), "full_name", [], "any", false, false, false, 209), "html", null, true);
        yield "[]\"]');
            allCardCheckboxes.forEach(checkbox => {
                const cardLabel = checkbox.closest('.card__label');
                if (checkbox.checked) {
                    moveCardToDeck(cardLabel);
                }

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
        return array (  444 => 209,  400 => 168,  390 => 161,  369 => 143,  344 => 120,  338 => 118,  334 => 116,  328 => 115,  321 => 110,  307 => 102,  298 => 96,  292 => 93,  289 => 92,  285 => 91,  280 => 89,  270 => 82,  265 => 80,  259 => 77,  254 => 76,  252 => 75,  249 => 74,  246 => 73,  243 => 72,  239 => 71,  236 => 70,  234 => 69,  229 => 66,  222 => 64,  218 => 63,  200 => 47,  198 => 43,  191 => 38,  189 => 34,  181 => 30,  179 => 29,  174 => 26,  164 => 22,  161 => 21,  157 => 20,  153 => 18,  151 => 17,  146 => 15,  143 => 14,  139 => 13,  136 => 12,  123 => 11,  110 => 8,  106 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
    <ul class=\"flex flex-wrap gap-6\">
        {% for cardDeck in cardDecks %}
            <li>
                <a href=\"{{ path('card_deck_edit', {'id': cardDeck.id}) }}\"
                   class=\"px-4 font-semibold py-4 border-t rounded-t-2xl border-r border-l bg-white dark:bg-gray-800
                      {% if cardDeck.id == currentCardDeckId %}
                          text-white
                      {% else %}
                          text-gray-800 hover:text-blue-600
                      {% endif %}\">
                    {{ cardDeck.name }}
                </a>
            </li>
        {% endfor %}
    </ul>


    {% if form is defined and form is not null %}
        {{ form_start(form) }}
            <article class=\"rounded-2xl border rounded-tl-none border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 p-6 flex flex-col gap-4\">
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

                    <section class=\"flex items-center gap-2\">
                        <input type=\"submit\" value=\"Guardar\"
                               class=\"px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold transition shadow-sm cursor-pointer\">

                        <input id=\"import-deck-json\" type=\"file\" accept=\"application/json\"
                               class=\"text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700\">

                        <button type=\"button\" id=\"load-json-btn\"
                                class=\"px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white text-sm font-semibold transition shadow-sm cursor-pointer\">Importar mazo</button>
                    </section>
                </header>

                <section class=\"card-deck__container grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4\">
                    {% for i in 1..8 %}
                        <article class=\"card-slot\"></article>
                    {% endfor %}
                </section>
            </article>

            {% if form.cards is defined %}
                <section class=\"cards__container grid xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 py-6\">
                    {% for choice_view in form.cards.vars.choices %}
                        {% set card_entity = choice_view.data %}
                        {% set card_checkbox_widget = form.cards[choice_view.value] %}

                        {% if card_entity is not null and card_entity is not same as(false) %}
                            <label for=\"{{ card_checkbox_widget.vars.id }}\" class=\"card__label\">
                                {{ form_widget(card_checkbox_widget, { attr: { class: 'hidden' } }) }}

                                <article class=\"card p-1 aspect-[0.7] grid grid-rows-[1fr_2fr] bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-300 dark:border-gray-700\">
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
        {{ form_end(form) }}
    {% endif %}

    <script>
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
                    const allCardCheckboxes = document.querySelectorAll('input[name=\"{{ form.cards.vars.full_name }}[]\"]');

                    allCardCheckboxes.forEach(cb => {
                        if (cb.checked) {
                            cb.checked = false;
                            cb.dispatchEvent(new Event('change', { bubbles: true }));
                        }
                    });

                    selectedCardIdsFromJson.forEach(cardId => {
                        const checkboxToSelect = Array.from(allCardCheckboxes).find(cb => parseInt(cb.value) === cardId);
                        if (checkboxToSelect && !checkboxToSelect.checked) {
                            checkboxToSelect.checked = true;
                            checkboxToSelect.dispatchEvent(new Event('change', { bubbles: true }));
                        }
                    });

                    if (data.name) {
                        const nameInput = document.querySelector('input[name=\"{{ form.name.vars.full_name }}\"]');
                        if (nameInput) {
                            nameInput.value = data.name;
                        }
                    }

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

        document.addEventListener('DOMContentLoaded', function () {
            const cardDeckContainer = document.querySelector('.card-deck__container');
            const cardsContainer = document.querySelector('.cards__container');
            const selectedClass = 'card-deck__card--selected';

            function moveCardToDeck(cardLabelElement) {
                const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
                if (firstSlot) {
                    firstSlot.replaceWith(cardLabelElement);
                    cardLabelElement.querySelector('.card').classList.add(selectedClass);
                } else {
                    const checkbox = cardLabelElement.querySelector('input[type=\"checkbox\"]');
                    if (checkbox) checkbox.checked = false;
                }
            }

            function moveCardToAvailable(cardLabelElement) {
                cardsContainer.prepend(cardLabelElement);
                cardLabelElement.querySelector('.card').classList.remove(selectedClass);

                const newSlot = document.createElement('article');
                newSlot.classList.add('card-slot');
                cardDeckContainer.appendChild(newSlot);
            }

            const allCardCheckboxes = document.querySelectorAll('input[name=\"{{ form.cards.vars.full_name }}[]\"]');
            allCardCheckboxes.forEach(checkbox => {
                const cardLabel = checkbox.closest('.card__label');
                if (checkbox.checked) {
                    moveCardToDeck(cardLabel);
                }

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
