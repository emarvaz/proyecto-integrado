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

/* administration/card/list.html.twig */
class __TwigTemplate_c973f673f490a2156af8c03125b731cf extends Template
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
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "administration/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/card/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/card/list.html.twig"));

        $this->parent = $this->load("administration/index.html.twig", 1);
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

        yield "Listado de cartas";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <section class=\"mx-auto px-4 py-6\">
        <form method=\"get\" action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_card_list");
        yield "\"
              class=\"flex flex-wrap items-center gap-2 bg-[#fdfcfa] dark:bg-[#1e1e2f] px-4 py-3 rounded-lg border
           border-gray-300 dark:border-gray-600 mb-6 w-full max-w-full\">

            <input type=\"text\" id=\"filter\" name=\"filter\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["activeFilters"] ?? null), "filter", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 11, $this->source); })()), "filter", [], "any", false, false, false, 11), "")) : ("")), "html", null, true);
        yield "\"
                   placeholder=\"Buscar carta...\"
                   class=\"flex-1 min-w-[180px] sm:min-w-[240px] text-sm px-3 py-1.5 border border-gray-300
               dark:border-gray-500 rounded-md bg-white dark:bg-[#2c2c44] text-[#1e1e1e] dark:text-[#f1f1f1]
               focus:ring-1 focus:ring-[#4a3aff] focus:outline-none\">

            <button type=\"submit\"
                    class=\"text-sm px-3 py-1.5 rounded-md text-white bg-[#4a3aff] hover:bg-[#3a2aff] transition\">
                Filtrar
            </button>

            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_card_list");
        yield "\"
               class=\"text-sm text-[#4a3aff] dark:text-[#7f70ff] hover:underline transition\">Limpiar</a>
        </form>

        <section class=\"overflow-x-auto rounded-lg ring-1 ring-gray-300 dark:ring-gray-600\">
            <table class=\"min-w-full text-sm text-left text-[#1e1e1e] dark:text-[#f1f1f1] bg-[#fdfcfa] dark:bg-[#1e1e2f]\">
                <thead class=\"bg-[#eeeafc] dark:bg-[#2c2c44] uppercase text-xs text-[#4a3aff] dark:text-[#7f70ff] tracking-wider\">
                <tr>
                    <th class=\"px-4 py-3\">";
        // line 30
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 30, $this->source); })()), "Nombre", "card.name");
        yield "</th>
                    <th class=\"px-4 py-3\">";
        // line 31
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 31, $this->source); })()), "Descripción", "card.description");
        yield "</th>
                    <th class=\"px-4 py-3\">";
        // line 32
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 32, $this->source); })()), "Puntos de vida", "card.health");
        yield "</th>
                    <th class=\"px-4 py-3\">Habilidades</th>
                    <th class=\"px-4 py-3\">Imagen</th>
                    <th class=\"px-4 py-3 flex flex-row items-center justify-between\">
                        <span>Acciones</span>
                        <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_card_create");
        yield "\"
                           class=\"ml-2 inline-flex items-center justify-center text-sm font-semibold w-8 h-8
                              rounded-full bg-[#4a3aff] hover:bg-[#3a2aff] text-white dark:bg-[#7f70ff]
                              dark:hover:bg-[#6e60ff]\"
                           title=\"Crear nueva carta\">+</a>
                    </th>
                </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-200 dark:divide-gray-700\">
                    ";
        // line 46
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 46, $this->source); })())) > 0)) {
            // line 47
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 48
                yield "                            <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f] transition\">
                                <td class=\"px-4 py-2\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "name", [], "any", false, false, false, 49), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-2\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, false, 50), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-2\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "health", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-2\">
                                    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "abilities", [], "any", false, false, false, 53));
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
                    // line 54
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "name", [], "any", false, false, false, 54), "html", null, true);
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield ", ";
                    }
                    // line 55
                    yield "                                    ";
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
                // line 56
                yield "                                </td>
                                <td class=\"px-4 py-2\">";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, false, 57), "html", null, true);
                yield "</td>
                                <td class=\"flex flex-row justify-end px-4 py-2 space-x-2 whitespace-nowrap\">
                                    <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_card_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\"
                                       class=\"text-[#4a3aff] dark:text-[#7f70ff] hover:underline\" title=\"Editar carta\">
                                        <img src=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/boton-editar.png"), "html", null, true);
                yield "\" alt=\"Editar\" class=\"w-4\" />
                                    </a>
                                    <a href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_card_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\"
                                       class=\"text-[#ff4a4a] dark:text-[#ff7373] hover:underline\" title=\"Eliminar carta\">
                                        <img src=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/boton-eliminar.png"), "html", null, true);
                yield "\" alt=\"Eliminar\" class=\"w-4\" />
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['card'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "                    ";
        } else {
            // line 71
            yield "                        <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f] transition\">
                            <td colspan=\"6\" class=\"flex flex-row justify-end px-4 py-2 space-x-2 whitespace-nowrap\">No hay cartas registradas.</td>
                        </tr>
                    ";
        }
        // line 75
        yield "                </tbody>
            </table>
        </section>

        <div class=\"mt-4\">
            ";
        // line 80
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 80, $this->source); })()));
        yield "
        </div>
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
        return "administration/card/list.html.twig";
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
        return array (  273 => 80,  266 => 75,  260 => 71,  257 => 70,  246 => 65,  241 => 63,  236 => 61,  231 => 59,  226 => 57,  223 => 56,  209 => 55,  203 => 54,  186 => 53,  181 => 51,  177 => 50,  173 => 49,  170 => 48,  165 => 47,  163 => 46,  151 => 37,  143 => 32,  139 => 31,  135 => 30,  124 => 22,  110 => 11,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'administration/index.html.twig' %}

{% block title %}Listado de cartas{% endblock %}

{% block main %}
    <section class=\"mx-auto px-4 py-6\">
        <form method=\"get\" action=\"{{ path('administration_card_list') }}\"
              class=\"flex flex-wrap items-center gap-2 bg-[#fdfcfa] dark:bg-[#1e1e2f] px-4 py-3 rounded-lg border
           border-gray-300 dark:border-gray-600 mb-6 w-full max-w-full\">

            <input type=\"text\" id=\"filter\" name=\"filter\" value=\"{{ activeFilters.filter|default('') }}\"
                   placeholder=\"Buscar carta...\"
                   class=\"flex-1 min-w-[180px] sm:min-w-[240px] text-sm px-3 py-1.5 border border-gray-300
               dark:border-gray-500 rounded-md bg-white dark:bg-[#2c2c44] text-[#1e1e1e] dark:text-[#f1f1f1]
               focus:ring-1 focus:ring-[#4a3aff] focus:outline-none\">

            <button type=\"submit\"
                    class=\"text-sm px-3 py-1.5 rounded-md text-white bg-[#4a3aff] hover:bg-[#3a2aff] transition\">
                Filtrar
            </button>

            <a href=\"{{ path('administration_card_list') }}\"
               class=\"text-sm text-[#4a3aff] dark:text-[#7f70ff] hover:underline transition\">Limpiar</a>
        </form>

        <section class=\"overflow-x-auto rounded-lg ring-1 ring-gray-300 dark:ring-gray-600\">
            <table class=\"min-w-full text-sm text-left text-[#1e1e1e] dark:text-[#f1f1f1] bg-[#fdfcfa] dark:bg-[#1e1e2f]\">
                <thead class=\"bg-[#eeeafc] dark:bg-[#2c2c44] uppercase text-xs text-[#4a3aff] dark:text-[#7f70ff] tracking-wider\">
                <tr>
                    <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Nombre', 'card.name') }}</th>
                    <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Descripción', 'card.description') }}</th>
                    <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Puntos de vida', 'card.health') }}</th>
                    <th class=\"px-4 py-3\">Habilidades</th>
                    <th class=\"px-4 py-3\">Imagen</th>
                    <th class=\"px-4 py-3 flex flex-row items-center justify-between\">
                        <span>Acciones</span>
                        <a href=\"{{ path('administration_card_create') }}\"
                           class=\"ml-2 inline-flex items-center justify-center text-sm font-semibold w-8 h-8
                              rounded-full bg-[#4a3aff] hover:bg-[#3a2aff] text-white dark:bg-[#7f70ff]
                              dark:hover:bg-[#6e60ff]\"
                           title=\"Crear nueva carta\">+</a>
                    </th>
                </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-200 dark:divide-gray-700\">
                    {% if pagination|length > 0 %}
                        {% for card in pagination %}
                            <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f] transition\">
                                <td class=\"px-4 py-2\">{{ card.name }}</td>
                                <td class=\"px-4 py-2\">{{ card.description }}</td>
                                <td class=\"px-4 py-2\">{{ card.health }}</td>
                                <td class=\"px-4 py-2\">
                                    {% for ability in card.abilities %}
                                        {{ ability.name }}{% if not loop.last %}, {% endif %}
                                    {% endfor %}
                                </td>
                                <td class=\"px-4 py-2\">{{ card.image }}</td>
                                <td class=\"flex flex-row justify-end px-4 py-2 space-x-2 whitespace-nowrap\">
                                    <a href=\"{{ path('administration_card_edit', { id: card.id }) }}\"
                                       class=\"text-[#4a3aff] dark:text-[#7f70ff] hover:underline\" title=\"Editar carta\">
                                        <img src=\"{{ asset('assets/images/icons/boton-editar.png') }}\" alt=\"Editar\" class=\"w-4\" />
                                    </a>
                                    <a href=\"{{ path('administration_card_delete', { id: card.id }) }}\"
                                       class=\"text-[#ff4a4a] dark:text-[#ff7373] hover:underline\" title=\"Eliminar carta\">
                                        <img src=\"{{ asset('assets/images/icons/boton-eliminar.png') }}\" alt=\"Eliminar\" class=\"w-4\" />
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    {% else %}
                        <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f] transition\">
                            <td colspan=\"6\" class=\"flex flex-row justify-end px-4 py-2 space-x-2 whitespace-nowrap\">No hay cartas registradas.</td>
                        </tr>
                    {% endif %}
                </tbody>
            </table>
        </section>

        <div class=\"mt-4\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </section>
{% endblock %}
", "administration/card/list.html.twig", "/Users/ulises/PhpstormProjects/proyecto-integrado/templates/administration/card/list.html.twig");
    }
}
