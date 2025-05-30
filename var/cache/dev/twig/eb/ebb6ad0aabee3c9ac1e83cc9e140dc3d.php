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
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/card.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "    <ul class=\"card-deck__list\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cardDecks"]) || array_key_exists("cardDecks", $context) ? $context["cardDecks"] : (function () { throw new RuntimeError('Variable "cardDecks" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["deck"]) {
            // line 15
            yield "            <li class=\"card-deck__list__tab ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["deck"], "id", [], "any", false, false, false, 15) == (isset($context["currentCardDeckId"]) || array_key_exists("currentCardDeckId", $context) ? $context["currentCardDeckId"] : (function () { throw new RuntimeError('Variable "currentCardDeckId" does not exist.', 15, $this->source); })()))) {
                yield "active";
            }
            yield "\">
                <a href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck__list", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["deck"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["deck"], "name", [], "any", false, false, false, 16), "html", null, true);
            yield "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['deck'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "    </ul>

    <section class=\"card-deck__list__content\">
        ";
        // line 22
        if ((array_key_exists("form", $context) &&  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })())))) {
            // line 23
            yield "            ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
            yield "

                ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'row');
            yield "
                ";
            // line 26
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "isFavorite", [], "any", false, false, false, 26), 'row');
            yield "

                <section class=\"card-deck__container\">
                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                yield "                        <article class=\"card-slot\"></article>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "                </section>

                <input type=\"submit\" value=\"Guardar\">

                ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cards", [], "any", true, true, false, 36)) {
                // line 37
                yield "                    <section class=\"cards__container grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 py-6\">
                        ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "cards", [], "any", false, false, false, 38));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["cardLabel"]) {
                    // line 39
                    yield "                            ";
                    $context["i"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 39);
                    // line 40
                    yield "                            ";
                    $context["card"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["cards"] ?? null), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 40, $this->source); })()), [], "array", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["cards"]) || array_key_exists("cards", $context) ? $context["cards"] : (function () { throw new RuntimeError('Variable "cards" does not exist.', 40, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 40, $this->source); })()), [], "array", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["cards"]) || array_key_exists("cards", $context) ? $context["cards"] : (function () { throw new RuntimeError('Variable "cards" does not exist.', 40, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 40, $this->source); })()), [], "array", false, false, false, 40)) : (null));
                    // line 41
                    yield "
                            <label for=\"";
                    // line 42
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cardLabel"], "vars", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
                    yield "\" class=\"card__label\">
                                ";
                    // line 43
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["cardLabel"], 'widget', ["attr" => ["class" => "hidden"]]);
                    yield "

                                <article class=\"card p-1 aspect-[0.7] grid grid-rows-[1fr_2fr] bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-300 dark:border-gray-700\">
                                    <figure class=\"flex flex-row justify-end rounded-lg px-4 py-2 h-52 bg-black bg-center bg-no-repeat bg-contain\" style=\"background-image: url('";
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/images/content/cards/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 46, $this->source); })()), "image", [], "any", false, false, false, 46))), "html", null, true);
                    yield "');\">
                                        <data class=\"flex flex-row gap-2 text-xl font-semibold text-black-600 dark:white\">
                                            <span>";
                    // line 48
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 48, $this->source); })()), "health", [], "any", false, false, false, 48), "html", null, true);
                    yield "</span>

                                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                <path d=\"m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z\" />
                                            </svg>
                                        </data>
                                    </figure>

                                    <section class=\"p-3 grid grid-rows-[0.5fr_1.5fr] gap-2\">
                                        <h4 class=\"text-lg font-bold text-gray-800 dark:text-gray-100\">";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
                    yield "</h4>

                                        <ul class=\"flex flex-col\">
                                            ";
                    // line 60
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 60, $this->source); })()), "abilities", [], "any", false, false, false, 60));
                    foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
                        // line 61
                        yield "                                                <li class=\"flex-1 grid grid-cols-2 items-center\">
                                                    <span>";
                        // line 62
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "name", [], "any", false, false, false, 62), "html", null, true);
                        yield "</span>

                                                    <div class=\"grid grid-cols-2 gap-8 justify-self-end text-xs\">
                                                        <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                            <span>";
                        // line 66
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "cost", [], "any", false, false, false, 66), "html", null, true);
                        yield "</span>

                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                                <path fill-rule=\"evenodd\" d=\"M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z\" clip-rule=\"evenodd\" />
                                                            </svg>
                                                        </data>

                                                        <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                            <span>";
                        // line 74
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "value", [], "any", false, false, false, 74), "html", null, true);
                        yield "</span>

                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                                <path fill-rule=\"evenodd\" d=\"M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036-.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0 1 16.5 15Z\" clip-rule=\"evenodd\" />
                                                            </svg>
                                                        </data>
                                                    </div>
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['ability'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    yield "                                        </ul>
                                    </section>
                                </article>
                            </label>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cardLabel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                yield "                    </section>
                ";
            }
            // line 90
            yield "            ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
            yield "
        ";
        }
        // line 92
        yield "
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const cardDeckContainer = document.querySelector('.card-deck__container');
                const cardsContainer = document.querySelector('.cards__container');
                const selectedClass = 'card-deck__card--selected';

                const cardLabels = cardsContainer.querySelectorAll('.card__label');

                cardLabels.forEach(function (cardLabel) {
                    const card = cardLabel.querySelector('.card');
                    const checkbox = cardLabel.querySelector('input[type=\"checkbox\"]');

                    if (checkbox.checked) {
                        const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
                        if (firstSlot) {
                            firstSlot.replaceWith(cardLabel);

                            card.classList.add(selectedClass);
                        }
                    }

                    checkbox.addEventListener('change', function (event) {
                        if (event.target.checked) {
                            const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');

                            if (firstSlot) {
                                firstSlot.replaceWith(cardLabel);
                                card.classList.add(selectedClass);
                            } else {
                                event.target.checked = false;
                            }
                        } else {
                            cardsContainer.prepend(cardLabel);
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
        return array (  334 => 92,  328 => 90,  324 => 88,  306 => 83,  291 => 74,  280 => 66,  273 => 62,  270 => 61,  266 => 60,  260 => 57,  248 => 48,  243 => 46,  237 => 43,  233 => 42,  230 => 41,  227 => 40,  224 => 39,  207 => 38,  204 => 37,  202 => 36,  196 => 32,  189 => 30,  185 => 29,  179 => 26,  175 => 25,  169 => 23,  167 => 22,  162 => 19,  151 => 16,  144 => 15,  140 => 14,  137 => 13,  124 => 12,  111 => 9,  107 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                {{ form_row(form.isFavorite) }}

                <section class=\"card-deck__container\">
                    {% for i in 1..8 %}
                        <article class=\"card-slot\"></article>
                    {% endfor %}
                </section>

                <input type=\"submit\" value=\"Guardar\">

                {% if form.cards is defined %}
                    <section class=\"cards__container grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 py-6\">
                        {% for cardLabel in form.cards %}
                            {% set i = loop.index0 %}
                            {% set card = cards[i] ?? null %}

                            <label for=\"{{ cardLabel.vars.id }}\" class=\"card__label\">
                                {{ form_widget(cardLabel, { attr: { class: 'hidden' } }) }}

                                <article class=\"card p-1 aspect-[0.7] grid grid-rows-[1fr_2fr] bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-300 dark:border-gray-700\">
                                    <figure class=\"flex flex-row justify-end rounded-lg px-4 py-2 h-52 bg-black bg-center bg-no-repeat bg-contain\" style=\"background-image: url('{{ asset('/assets/images/content/cards/' ~ card.image) }}');\">
                                        <data class=\"flex flex-row gap-2 text-xl font-semibold text-black-600 dark:white\">
                                            <span>{{ card.health }}</span>

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

                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                                <path fill-rule=\"evenodd\" d=\"M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z\" clip-rule=\"evenodd\" />
                                                            </svg>
                                                        </data>

                                                        <data class=\"flex flex-row gap-2 items-center font-semibold text-black-600 dark:text-white-400\">
                                                            <span>{{ ability.value }}</span>

                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                                                <path fill-rule=\"evenodd\" d=\"M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036-.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0 1 16.5 15Z\" clip-rule=\"evenodd\" />
                                                            </svg>
                                                        </data>
                                                    </div>
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </section>
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

                const cardLabels = cardsContainer.querySelectorAll('.card__label');

                cardLabels.forEach(function (cardLabel) {
                    const card = cardLabel.querySelector('.card');
                    const checkbox = cardLabel.querySelector('input[type=\"checkbox\"]');

                    if (checkbox.checked) {
                        const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
                        if (firstSlot) {
                            firstSlot.replaceWith(cardLabel);

                            card.classList.add(selectedClass);
                        }
                    }

                    checkbox.addEventListener('change', function (event) {
                        if (event.target.checked) {
                            const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');

                            if (firstSlot) {
                                firstSlot.replaceWith(cardLabel);
                                card.classList.add(selectedClass);
                            } else {
                                event.target.checked = false;
                            }
                        } else {
                            cardsContainer.prepend(cardLabel);
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
