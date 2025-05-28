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
class __TwigTemplate_8f38ecbc4a7eb8a42d6848d16074236e extends Template
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
        yield "    <section class=\"w-full px-4 py-8 flex flex-col md:flex-row max-w-6xl mx-auto bg-white dark:bg-gray-800 rounded-xl border border-gray-300 dark:border-gray-700 shadow-md overflow-hidden\">
        <figure class=\"w-full md:w-2/5 bg-black bg-center bg-no-repeat bg-contain min-h-[400px]\"
                style=\"background-image: url('";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/images/content/cards/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12))), "html", null, true);
        yield "');\"
                role=\"img\">
        </figure>

        <section class=\"w-full md:w-3/5 p-6 flex flex-col gap-6\">

            <div class=\"flex justify-between items-center border-b border-gray-300 dark:border-gray-600 pb-4\">
                <h1 class=\"text-2xl font-bold text-gray-800 dark:text-gray-100\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</h1>

                <data class=\"text-xl font-semibold text-red-600 dark:text-red-400 bg-red-100 dark:bg-red-900 px-3 py-1 rounded-full border border-red-300 dark:border-red-600\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 21, $this->source); })()), "health", [], "any", false, false, false, 21), "html", null, true);
        yield " ❤️</data>
            </div>

            <section>
                <h2 class=\"text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2\">Habilidades</h2>

                <dl class=\"space-y-4\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 28, $this->source); })()), "abilities", [], "any", false, false, false, 28));
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
            // line 29
            yield "                        <div>
                            <dt class=\"text-md font-semibold text-gray-800 dark:text-gray-100\">
                                ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "name", [], "any", false, false, false, 31), "html", null, true);
            yield "
                            </dt>
                            <dd class=\"grid grid-cols-1 md:grid-cols-5 gap-2\">
                                <div class=\"col-span-3 text-sm text-gray-600 dark:text-gray-300\">
                                    ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "description", [], "any", false, false, false, 35), "html", null, true);
            yield "
                                </div>

                                <div class=\"col-span-2 text-right\">
                                    <button onclick=\"document.getElementById('dialog-";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 39), "html", null, true);
            yield "').showModal()\"
                                            class=\"text-blue-600 dark:text-blue-400 hover:underline text-sm
                                                   font-medium\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "category", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
            yield "</button>

                                    <dialog id=\"dialog-";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
            yield "\"
                                            class=\"fixed inset-0 m-auto w-full max-w-md rounded-lg p-6 bg-white
                                                   dark:bg-gray-900 border border-gray-300 dark:border-gray-700
                                                   shadow-xl backdrop:bg-black/30\">
                                        <h1 class=\"text-lg font-bold text-gray-900 dark:text-white mb-2\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "category", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
            yield "</h1>

                                        <p class=\"text-sm text-gray-700 dark:text-gray-300\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "category", [], "any", false, false, false, 49), "description", [], "any", false, false, false, 49), "html", null, true);
            yield "</p>
                                    </dialog>
                                </div>
                            </dd>
                        </div>
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
        // line 55
        yield "                </dl>
            </section>

            <section>
                <h2 class=\"text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2\">Descripción</h2>

                <p class=\"text-sm text-gray-600 dark:text-gray-400 leading-relaxed\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["card"]) || array_key_exists("card", $context) ? $context["card"] : (function () { throw new RuntimeError('Variable "card" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), "html", null, true);
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
        return array (  242 => 61,  234 => 55,  214 => 49,  209 => 47,  202 => 43,  197 => 41,  192 => 39,  185 => 35,  178 => 31,  174 => 29,  157 => 28,  147 => 21,  142 => 19,  132 => 12,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cartas{% endblock %}

{% block styles %}
    {{ parent() }}
{% endblock %}

{% block main %}
    <section class=\"w-full px-4 py-8 flex flex-col md:flex-row max-w-6xl mx-auto bg-white dark:bg-gray-800 rounded-xl border border-gray-300 dark:border-gray-700 shadow-md overflow-hidden\">
        <figure class=\"w-full md:w-2/5 bg-black bg-center bg-no-repeat bg-contain min-h-[400px]\"
                style=\"background-image: url('{{ asset('/assets/images/content/cards/' ~ card.image) }}');\"
                role=\"img\">
        </figure>

        <section class=\"w-full md:w-3/5 p-6 flex flex-col gap-6\">

            <div class=\"flex justify-between items-center border-b border-gray-300 dark:border-gray-600 pb-4\">
                <h1 class=\"text-2xl font-bold text-gray-800 dark:text-gray-100\">{{ card.name }}</h1>

                <data class=\"text-xl font-semibold text-red-600 dark:text-red-400 bg-red-100 dark:bg-red-900 px-3 py-1 rounded-full border border-red-300 dark:border-red-600\">{{ card.health }} ❤️</data>
            </div>

            <section>
                <h2 class=\"text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2\">Habilidades</h2>

                <dl class=\"space-y-4\">
                    {% for ability in card.abilities %}
                        <div>
                            <dt class=\"text-md font-semibold text-gray-800 dark:text-gray-100\">
                                {{ ability.name }}
                            </dt>
                            <dd class=\"grid grid-cols-1 md:grid-cols-5 gap-2\">
                                <div class=\"col-span-3 text-sm text-gray-600 dark:text-gray-300\">
                                    {{ ability.description }}
                                </div>

                                <div class=\"col-span-2 text-right\">
                                    <button onclick=\"document.getElementById('dialog-{{ loop.index }}').showModal()\"
                                            class=\"text-blue-600 dark:text-blue-400 hover:underline text-sm
                                                   font-medium\">{{ ability.category.name }}</button>

                                    <dialog id=\"dialog-{{ loop.index }}\"
                                            class=\"fixed inset-0 m-auto w-full max-w-md rounded-lg p-6 bg-white
                                                   dark:bg-gray-900 border border-gray-300 dark:border-gray-700
                                                   shadow-xl backdrop:bg-black/30\">
                                        <h1 class=\"text-lg font-bold text-gray-900 dark:text-white mb-2\">{{ ability.category.name }}</h1>

                                        <p class=\"text-sm text-gray-700 dark:text-gray-300\">{{ ability.category.description }}</p>
                                    </dialog>
                                </div>
                            </dd>
                        </div>
                    {% endfor %}
                </dl>
            </section>

            <section>
                <h2 class=\"text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2\">Descripción</h2>

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
    </section>
{% endblock %}
", "card/index.html.twig", "C:\\Users\\eduar\\Documents\\GitHub\\proyecto-integrado\\templates\\card\\index.html.twig");
    }
}
