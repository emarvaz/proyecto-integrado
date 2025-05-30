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

/* administration/ability/list.html.twig */
class __TwigTemplate_858d1b356949d722432e1530217f5294 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/ability/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/ability/list.html.twig"));

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

        yield "Listado de habilidades";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_ability_list");
        yield "\"
              class=\"flex flex-wrap items-center gap-2 bg-[#fdfcfa] dark:bg-[#1e1e2f] px-4 py-3 rounded-lg border
                 border-gray-300 dark:border-gray-600 mb-6 w-full max-w-full\">

            <input type=\"text\" id=\"filter\" name=\"filter\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["activeFilters"] ?? null), "filter", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 11, $this->source); })()), "filter", [], "any", false, false, false, 11), "")) : ("")), "html", null, true);
        yield "\"
                   placeholder=\"Buscar habilidad...\"
                   class=\"flex-1 min-w-[180px] sm:min-w-[240px] text-sm px-3 py-1.5 border border-gray-300
               dark:border-gray-500 rounded-md bg-white dark:bg-[#2c2c44] text-[#1e1e1e] dark:text-[#f1f1f1]
               focus:ring-1 focus:ring-[#4a3aff] focus:outline-none\">

            <button type=\"submit\"
                    class=\"text-sm px-3 py-1.5 rounded-md text-white bg-[#4a3aff] hover:bg-[#3a2aff] transition\">
                Filtrar
            </button>

            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_ability_list");
        yield "\"
               class=\"text-sm text-[#4a3aff] dark:text-[#7f70ff] hover:underline transition\">Limpiar</a>
        </form>

        <section class=\"overflow-x-auto rounded-lg ring-1 ring-gray-300 dark:ring-gray-600\">
            <table class=\"min-w-full text-sm text-left text-[#1e1e1e] dark:text-[#f1f1f1] bg-[#fdfcfa]
                      dark:bg-[#1e1e2f]\">
                <thead class=\"bg-[#eeeafc] dark:bg-[#2c2c44] uppercase text-xs text-[#4a3aff] dark:text-[#7f70ff] tracking-wider\">
                    <tr>
                        <th class=\"px-4 py-3\">";
        // line 31
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 31, $this->source); })()), "Nombre", "ability.name");
        yield "</th>
                        <th class=\"px-4 py-3\">";
        // line 32
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 32, $this->source); })()), "Descripción", "ability.description");
        yield "</th>
                        <th class=\"px-4 py-3\">";
        // line 33
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 33, $this->source); })()), "Coste", "ability.cost");
        yield "</th>
                        <th class=\"px-4 py-3\">";
        // line 34
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()), "Valor", "ability.value");
        yield "</th>
                        <th class=\"px-4 py-3\">";
        // line 35
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 35, $this->source); })()), "Categoría", "ability.category.name");
        yield "</th>
                        <th class=\"px-4 py-3 flex flex-row items-center\">
                            <span>Acciones</span>
                            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_ability_create");
        yield "\"
                               class=\"ml-2 inline-flex items-center justify-center text-sm font-semibold w-8 h-8 rounded-full bg-[#4a3aff] hover:bg-[#3a2aff] text-white dark:bg-[#7f70ff] dark:hover:bg-[#6e60ff]\"
                               title=\"Crear nueva habilidad\">+</a>
                        </th>
                    </tr>
                </thead>

                <tbody class=\"divide-y divide-gray-200 dark:divide-gray-700\">
                ";
        // line 46
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 46, $this->source); })())) > 0)) {
            // line 47
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
                // line 48
                yield "                        <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f] transition\">
                            <td class=\"px-4 py-2\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "name", [], "any", false, false, false, 49), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-2\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "description", [], "any", false, false, false, 50), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-2\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "cost", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-2\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "value", [], "any", false, false, false, 52), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-2\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "category", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
                yield "</td>
                            <td class=\"flex flex-row justify-end px-4 py-2 space-x-2 whitespace-nowrap\">
                                <a href=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_ability_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\"
                                   class=\"text-[#4a3aff] dark:text-[#7f70ff] hover:underline\" title=\"Editar habilidad\">
                                    <img src=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/boton-editar.png"), "html", null, true);
                yield "\" alt=\"Editar\" class=\"w-4\" />
                                </a>
                                <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_ability_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ability"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\"
                                   class=\"text-[#ff4a4a] dark:text-[#ff7373] hover:underline\" title=\"Eliminar habilidad\">
                                    <img src=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/boton-eliminar.png"), "html", null, true);
                yield "\" alt=\"Eliminar\" class=\"w-4\" />
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ability'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "                ";
        } else {
            // line 67
            yield "                    <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f]\">
                        <td colspan=\"5\" class=\"px-4 py-2\">No hay usuarios registrados.</td>
                    </tr>
                ";
        }
        // line 71
        yield "                </tbody>
            </table>
        </section>

        <div class=\"mt-4\">
            ";
        // line 76
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 76, $this->source); })()));
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
        return "administration/ability/list.html.twig";
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
        return array (  242 => 76,  235 => 71,  229 => 67,  226 => 66,  215 => 61,  210 => 59,  205 => 57,  200 => 55,  195 => 53,  191 => 52,  187 => 51,  183 => 50,  179 => 49,  176 => 48,  171 => 47,  169 => 46,  158 => 38,  152 => 35,  148 => 34,  144 => 33,  140 => 32,  136 => 31,  124 => 22,  110 => 11,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'administration/index.html.twig' %}

{% block title %}Listado de habilidades{% endblock %}

{% block main %}
    <section class=\"mx-auto px-4 py-6\">
        <form method=\"get\" action=\"{{ path('administration_ability_list') }}\"
              class=\"flex flex-wrap items-center gap-2 bg-[#fdfcfa] dark:bg-[#1e1e2f] px-4 py-3 rounded-lg border
                 border-gray-300 dark:border-gray-600 mb-6 w-full max-w-full\">

            <input type=\"text\" id=\"filter\" name=\"filter\" value=\"{{ activeFilters.filter|default('') }}\"
                   placeholder=\"Buscar habilidad...\"
                   class=\"flex-1 min-w-[180px] sm:min-w-[240px] text-sm px-3 py-1.5 border border-gray-300
               dark:border-gray-500 rounded-md bg-white dark:bg-[#2c2c44] text-[#1e1e1e] dark:text-[#f1f1f1]
               focus:ring-1 focus:ring-[#4a3aff] focus:outline-none\">

            <button type=\"submit\"
                    class=\"text-sm px-3 py-1.5 rounded-md text-white bg-[#4a3aff] hover:bg-[#3a2aff] transition\">
                Filtrar
            </button>

            <a href=\"{{ path('administration_ability_list') }}\"
               class=\"text-sm text-[#4a3aff] dark:text-[#7f70ff] hover:underline transition\">Limpiar</a>
        </form>

        <section class=\"overflow-x-auto rounded-lg ring-1 ring-gray-300 dark:ring-gray-600\">
            <table class=\"min-w-full text-sm text-left text-[#1e1e1e] dark:text-[#f1f1f1] bg-[#fdfcfa]
                      dark:bg-[#1e1e2f]\">
                <thead class=\"bg-[#eeeafc] dark:bg-[#2c2c44] uppercase text-xs text-[#4a3aff] dark:text-[#7f70ff] tracking-wider\">
                    <tr>
                        <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Nombre', 'ability.name') }}</th>
                        <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Descripción', 'ability.description') }}</th>
                        <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Coste', 'ability.cost') }}</th>
                        <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Valor', 'ability.value') }}</th>
                        <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Categoría', 'ability.category.name') }}</th>
                        <th class=\"px-4 py-3 flex flex-row items-center\">
                            <span>Acciones</span>
                            <a href=\"{{ path('administration_ability_create') }}\"
                               class=\"ml-2 inline-flex items-center justify-center text-sm font-semibold w-8 h-8 rounded-full bg-[#4a3aff] hover:bg-[#3a2aff] text-white dark:bg-[#7f70ff] dark:hover:bg-[#6e60ff]\"
                               title=\"Crear nueva habilidad\">+</a>
                        </th>
                    </tr>
                </thead>

                <tbody class=\"divide-y divide-gray-200 dark:divide-gray-700\">
                {% if pagination|length > 0 %}
                    {% for ability in pagination %}
                        <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f] transition\">
                            <td class=\"px-4 py-2\">{{ ability.name }}</td>
                            <td class=\"px-4 py-2\">{{ ability.description }}</td>
                            <td class=\"px-4 py-2\">{{ ability.cost }}</td>
                            <td class=\"px-4 py-2\">{{ ability.value }}</td>
                            <td class=\"px-4 py-2\">{{ ability.category.name }}</td>
                            <td class=\"flex flex-row justify-end px-4 py-2 space-x-2 whitespace-nowrap\">
                                <a href=\"{{ path('administration_ability_edit', { id: ability.id }) }}\"
                                   class=\"text-[#4a3aff] dark:text-[#7f70ff] hover:underline\" title=\"Editar habilidad\">
                                    <img src=\"{{ asset('assets/images/icons/boton-editar.png') }}\" alt=\"Editar\" class=\"w-4\" />
                                </a>
                                <a href=\"{{ path('administration_ability_delete', { id: ability.id }) }}\"
                                   class=\"text-[#ff4a4a] dark:text-[#ff7373] hover:underline\" title=\"Eliminar habilidad\">
                                    <img src=\"{{ asset('assets/images/icons/boton-eliminar.png') }}\" alt=\"Eliminar\" class=\"w-4\" />
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                {% else %}
                    <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f]\">
                        <td colspan=\"5\" class=\"px-4 py-2\">No hay usuarios registrados.</td>
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
", "administration/ability/list.html.twig", "/Users/ulises/Documents/workspaces/php/2025/proyecto-integrado/templates/administration/ability/list.html.twig");
    }
}
