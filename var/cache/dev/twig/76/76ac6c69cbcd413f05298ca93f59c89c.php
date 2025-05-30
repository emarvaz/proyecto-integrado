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

/* card/index.html.twig */
class __TwigTemplate_03946dc900b36f2357c3ca7bedbc5e74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

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

        yield "Cartas";
        
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    <article class=\"w-full px-6 py-8 flex flex-col gap-8 md:flex-row max-w-6xl mx-auto bg-white dark:bg-gray-800 rounded-xl border border-gray-300 dark:border-gray-700 shadow-md overflow-hidden\">
        <figure class=\"rounded-lg w-full md:w-2/5 bg-black bg-center bg-no-repeat bg-contain min-h-[400px]\"
                style=\"background-image: url('";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/images/content/cards/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12))), "html", null, true);
        yield "');\"
                role=\"img\">
        </figure>

        <section class=\"w-full md:w-3/5 flex flex-col gap-6\">
            <section class=\"flex justify-between items-center border-gray-300 dark:border-gray-600 pb-4\">
                <h1 class=\"text-2xl font-bold text-gray-800 dark:text-gray-100\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "</h1>

                <data class=\"flex flex-row gap-2 items-center text-xl font-semibold text-black-600 dark:white\">
                    <span>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 21, $this->source); })()), "health", [], "any", false, false, false, 21), "html", null, true);
        yield "</span>

                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                        <path d=\"m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z\" />
                    </svg>
                </data>
            </section>

            <section>
                <h2 class=\"text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4\">Habilidades</h2>

                <dl class=\"space-y-4\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 33, $this->source); })()), "abilities", [], "any", false, false, false, 33));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
            // line 34
            yield "                        <dt class=\"grid grid-cols-[1fr_0.5fr] text-md font-semibold text-gray-800 dark:text-gray-100 mb-2\">
                            <span>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "name", [], "any", false, false, false, 35), "html", null, true);
            yield "</span>

                            <div class=\"grid grid-cols-2 gap-8 justify-self-end\">
                                <data class=\"flex flex-row gap-2 items-center text-xl font-semibold text-black-600 dark:text-white-400\">
                                    <span>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "cost", [], "any", false, false, false, 39), "html", null, true);
            yield "</span>

                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                        <path fill-rule=\"evenodd\" d=\"M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z\" clip-rule=\"evenodd\" />
                                    </svg>
                                </data>

                                <data class=\"flex flex-row gap-2 items-center text-xl font-semibold text-black-600 dark:text-white-400\">
                                    <span>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "value", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>

                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                        <path fill-rule=\"evenodd\" d=\"M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036-.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0 1 16.5 15Z\" clip-rule=\"evenodd\" />
                                    </svg>
                                </data>
                            </div>
                        </dt>
                        <dd class=\"grid grid-cols-1 md:grid-cols-5 gap-2\">
                            <p class=\"col-span-3 text-sm text-gray-600 dark:text-gray-300\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "description", [], "any", false, false, false, 56), "html", null, true);
            yield "</p>

                            <span class=\"col-span-2 justify-self-end\">
                                <button onclick=\"document.getElementById('dialog-";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59), "html", null, true);
            yield "').showModal()\"
                                        class=\"text-blue-600 dark:text-blue-400 hover:text-blue-400 cursor-pointer text-sm font-medium\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "category", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
            yield "</button>

                                <dialog id=\"dialog-";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62), "html", null, true);
            yield "\"
                                        class=\"fixed inset-0 m-auto w-full max-w-md rounded-lg p-6 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-700 backdrop:bg-black/30\">
                                    <h1 class=\"text-lg font-bold text-gray-900 dark:text-white mb-2\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "category", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            yield "</h1>

                                    <p class=\"text-sm text-gray-700 dark:text-gray-300\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "category", [], "any", false, false, false, 66), "description", [], "any", false, false, false, 66), "html", null, true);
            yield "</p>
                                </dialog>
                            </span>
                        </dd>
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
        unset($context['_seq'], $context['_key'], $context['ability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                </dl>
            </section>

            <section>
                <h2 class=\"text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4\">Descripción</h2>

                <p class=\"text-sm text-gray-600 dark:text-gray-400 leading-relaxed\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), "html", null, true);
        yield "</p>
            </section>
        </section>

        <script>
            document.querySelectorAll(\"dialog\").forEach((dialog) => {
                dialog.addEventListener(\"click\", (e) => {
                    const dialogRect = dialog.getBoundingClientRect();
                    const clickedOutside =
                        e.clientX < dialogRect.left ||
                        e.clientX > dialogRect.right ||
                        e.clientY < dialogRect.top ||
                        e.clientY > dialogRect.bottom;

                    if (clickedOutside) {
                        dialog.close();
                    }
                });
            });
        </script>
    </article>
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
        return "card/index.html.twig";
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
        return array (  264 => 77,  256 => 71,  237 => 66,  232 => 64,  227 => 62,  222 => 60,  218 => 59,  212 => 56,  200 => 47,  189 => 39,  182 => 35,  179 => 34,  162 => 33,  147 => 21,  141 => 18,  132 => 12,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cartas{% endblock %}

{% block styles %}
    {{ parent() }}
{% endblock %}

{% block main %}
    <article class=\"w-full px-6 py-8 flex flex-col gap-8 md:flex-row max-w-6xl mx-auto bg-white dark:bg-gray-800 rounded-xl border border-gray-300 dark:border-gray-700 shadow-md overflow-hidden\">
        <figure class=\"rounded-lg w-full md:w-2/5 bg-black bg-center bg-no-repeat bg-contain min-h-[400px]\"
                style=\"background-image: url('{{ asset('/assets/images/content/cards/' ~ card.image) }}');\"
                role=\"img\">
        </figure>

        <section class=\"w-full md:w-3/5 flex flex-col gap-6\">
            <section class=\"flex justify-between items-center border-gray-300 dark:border-gray-600 pb-4\">
                <h1 class=\"text-2xl font-bold text-gray-800 dark:text-gray-100\">{{ card.name }}</h1>

                <data class=\"flex flex-row gap-2 items-center text-xl font-semibold text-black-600 dark:white\">
                    <span>{{ card.health }}</span>

                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                        <path d=\"m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z\" />
                    </svg>
                </data>
            </section>

            <section>
                <h2 class=\"text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4\">Habilidades</h2>

                <dl class=\"space-y-4\">
                    {% for ability in card.abilities %}
                        <dt class=\"grid grid-cols-[1fr_0.5fr] text-md font-semibold text-gray-800 dark:text-gray-100 mb-2\">
                            <span>{{ ability.name }}</span>

                            <div class=\"grid grid-cols-2 gap-8 justify-self-end\">
                                <data class=\"flex flex-row gap-2 items-center text-xl font-semibold text-black-600 dark:text-white-400\">
                                    <span>{{ ability.cost }}</span>

                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                        <path fill-rule=\"evenodd\" d=\"M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z\" clip-rule=\"evenodd\" />
                                    </svg>
                                </data>

                                <data class=\"flex flex-row gap-2 items-center text-xl font-semibold text-black-600 dark:text-white-400\">
                                    <span>{{ ability.value }}</span>

                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"size-6\">
                                        <path fill-rule=\"evenodd\" d=\"M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036-.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0 1 16.5 15Z\" clip-rule=\"evenodd\" />
                                    </svg>
                                </data>
                            </div>
                        </dt>
                        <dd class=\"grid grid-cols-1 md:grid-cols-5 gap-2\">
                            <p class=\"col-span-3 text-sm text-gray-600 dark:text-gray-300\">{{ ability.description }}</p>

                            <span class=\"col-span-2 justify-self-end\">
                                <button onclick=\"document.getElementById('dialog-{{ loop.index }}').showModal()\"
                                        class=\"text-blue-600 dark:text-blue-400 hover:text-blue-400 cursor-pointer text-sm font-medium\">{{ ability.category.name }}</button>

                                <dialog id=\"dialog-{{ loop.index }}\"
                                        class=\"fixed inset-0 m-auto w-full max-w-md rounded-lg p-6 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-700 backdrop:bg-black/30\">
                                    <h1 class=\"text-lg font-bold text-gray-900 dark:text-white mb-2\">{{ ability.category.name }}</h1>

                                    <p class=\"text-sm text-gray-700 dark:text-gray-300\">{{ ability.category.description }}</p>
                                </dialog>
                            </span>
                        </dd>
                    {% endfor %}
                </dl>
            </section>

            <section>
                <h2 class=\"text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4\">Descripción</h2>

                <p class=\"text-sm text-gray-600 dark:text-gray-400 leading-relaxed\">{{ card.description }}</p>
            </section>
        </section>

        <script>
            document.querySelectorAll(\"dialog\").forEach((dialog) => {
                dialog.addEventListener(\"click\", (e) => {
                    const dialogRect = dialog.getBoundingClientRect();
                    const clickedOutside =
                        e.clientX < dialogRect.left ||
                        e.clientX > dialogRect.right ||
                        e.clientY < dialogRect.top ||
                        e.clientY > dialogRect.bottom;

                    if (clickedOutside) {
                        dialog.close();
                    }
                });
            });
        </script>
    </article>
{% endblock %}
", "card/index.html.twig", "/Users/ulises/Documents/workspaces/php/2025/proyecto-integrado/templates/card/index.html.twig");
    }
}
