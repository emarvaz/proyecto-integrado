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

/* administration/ability-category/list.html.twig */
class __TwigTemplate_e1e244b1a8b724d4b3517889aeaea943 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/ability-category/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/ability-category/list.html.twig"));

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

        yield "Listado de categorías de habilidad";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_ability_category_list");
        yield "\"
              class=\"flex flex-wrap items-center gap-2 bg-[#fdfcfa] dark:bg-[#1e1e2f] px-4 py-3 rounded-lg border
                 border-gray-300 dark:border-gray-600 mb-6 w-full max-w-full\">

            <input type=\"text\" id=\"filter\" name=\"filter\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["activeFilters"] ?? null), "filter", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 11, $this->source); })()), "filter", [], "any", false, false, false, 11), "")) : ("")), "html", null, true);
        yield "\"
                   placeholder=\"Buscar categoría...\"
                   class=\"flex-1 min-w-[180px] sm:min-w-[240px] text-sm px-3 py-1.5 border border-gray-300
                      dark:border-gray-500 rounded-md bg-white dark:bg-[#2c2c44] text-[#1e1e1e] dark:text-[#f1f1f1]
                      focus:ring-1 focus:ring-[#4a3aff] focus:outline-none\">

            <button type=\"submit\"
                    class=\"text-sm px-3 py-1.5 rounded-md text-white bg-[#4a3aff] hover:bg-[#3a2aff] transition\">
                Filtrar
            </button>

            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_ability_category_list");
        yield "\"
               class=\"text-sm text-[#4a3aff] dark:text-[#7f70ff] hover:underline transition\">
                Limpiar
            </a>
        </form>

        <!-- ✅ Tabla responsive -->
        <div class=\"overflow-x-auto rounded-lg ring-1 ring-gray-300 dark:ring-gray-600\">
            <table class=\"min-w-[600px] w-full text-sm text-left text-[#1e1e1e] dark:text-[#f1f1f1]
                      bg-[#fdfcfa] dark:bg-[#1e1e2f]\">
                <thead class=\"bg-[#eeeafc] dark:bg-[#2c2c44] uppercase text-xs text-[#4a3aff] dark:text-[#7f70ff] tracking-wider\">
                <tr>
                    <th class=\"px-4 py-3\">";
        // line 34
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()), "Nombre", "abilityCategory.name");
        yield "</th>
                    <th class=\"px-4 py-3\">";
        // line 35
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 35, $this->source); })()), "Descripción", "abilityCategory.description");
        yield "</th>
                    <th class=\"flex flex-row px-4 py-3 items-center justify-between whitespace-nowrap\">
                        <span>Acciones</span>
                        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_ability_category_create");
        yield "\"
                           class=\"ml-2 inline-flex items-center justify-center text-sm font-semibold w-8 h-8
                                  rounded-full bg-[#4a3aff] hover:bg-[#3a2aff] text-white dark:bg-[#7f70ff]
                                  dark:hover:bg-[#6e60ff]\"
                           title=\"Crear nueva categoría\">+</a>
                    </th>
                </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-200 dark:divide-gray-700\">
                    ";
        // line 47
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 47, $this->source); })())) > 0)) {
            // line 48
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["abilityCategory"]) {
                // line 49
                yield "                            <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f] transition\">
                                <td class=\"px-4 py-2 whitespace-nowrap\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abilityCategory"], "name", [], "any", false, false, false, 50), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-2\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abilityCategory"], "description", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>
                                <td class=\"flex flex-row justify-end px-4 py-2 space-x-2 whitespace-nowrap\">
                                    <a href=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_ability_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["abilityCategory"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\"
                                       class=\"text-[#4a3aff] dark:text-[#7f70ff] hover:underline\" title=\"Editar categoría\">
                                        <img src=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/boton-editar.png"), "html", null, true);
                yield "\" alt=\"Editar\" class=\"w-4\" />
                                    </a>
                                    <a href=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_ability_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["abilityCategory"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\"
                                       class=\"text-[#ff4a4a] dark:text-[#ff7373] hover:underline\" title=\"Eliminar categoría\">
                                        <img src=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/boton-eliminar.png"), "html", null, true);
                yield "\" alt=\"Eliminar\" class=\"w-4\" />
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['abilityCategory'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "                    ";
        } else {
            // line 65
            yield "                        <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f]\">
                            <td colspan=\"5\" class=\"px-4 py-2\">No hay usuarios registrados.</td>
                        </tr>
                    ";
        }
        // line 69
        yield "                </tbody>
            </table>
        </div>

        <div class=\"mt-4\">
            ";
        // line 74
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 74, $this->source); })()));
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
        return "administration/ability-category/list.html.twig";
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
        return array (  222 => 74,  215 => 69,  209 => 65,  206 => 64,  195 => 59,  190 => 57,  185 => 55,  180 => 53,  175 => 51,  171 => 50,  168 => 49,  163 => 48,  161 => 47,  149 => 38,  143 => 35,  139 => 34,  124 => 22,  110 => 11,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'administration/index.html.twig' %}

{% block title %}Listado de categorías de habilidad{% endblock %}

{% block main %}
    <section class=\"mx-auto px-4 py-6\">
        <form method=\"get\" action=\"{{ path('administration_ability_category_list') }}\"
              class=\"flex flex-wrap items-center gap-2 bg-[#fdfcfa] dark:bg-[#1e1e2f] px-4 py-3 rounded-lg border
                 border-gray-300 dark:border-gray-600 mb-6 w-full max-w-full\">

            <input type=\"text\" id=\"filter\" name=\"filter\" value=\"{{ activeFilters.filter|default('') }}\"
                   placeholder=\"Buscar categoría...\"
                   class=\"flex-1 min-w-[180px] sm:min-w-[240px] text-sm px-3 py-1.5 border border-gray-300
                      dark:border-gray-500 rounded-md bg-white dark:bg-[#2c2c44] text-[#1e1e1e] dark:text-[#f1f1f1]
                      focus:ring-1 focus:ring-[#4a3aff] focus:outline-none\">

            <button type=\"submit\"
                    class=\"text-sm px-3 py-1.5 rounded-md text-white bg-[#4a3aff] hover:bg-[#3a2aff] transition\">
                Filtrar
            </button>

            <a href=\"{{ path('administration_ability_category_list') }}\"
               class=\"text-sm text-[#4a3aff] dark:text-[#7f70ff] hover:underline transition\">
                Limpiar
            </a>
        </form>

        <!-- ✅ Tabla responsive -->
        <div class=\"overflow-x-auto rounded-lg ring-1 ring-gray-300 dark:ring-gray-600\">
            <table class=\"min-w-[600px] w-full text-sm text-left text-[#1e1e1e] dark:text-[#f1f1f1]
                      bg-[#fdfcfa] dark:bg-[#1e1e2f]\">
                <thead class=\"bg-[#eeeafc] dark:bg-[#2c2c44] uppercase text-xs text-[#4a3aff] dark:text-[#7f70ff] tracking-wider\">
                <tr>
                    <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Nombre', 'abilityCategory.name') }}</th>
                    <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Descripción', 'abilityCategory.description') }}</th>
                    <th class=\"flex flex-row px-4 py-3 items-center justify-between whitespace-nowrap\">
                        <span>Acciones</span>
                        <a href=\"{{ path('administration_ability_category_create') }}\"
                           class=\"ml-2 inline-flex items-center justify-center text-sm font-semibold w-8 h-8
                                  rounded-full bg-[#4a3aff] hover:bg-[#3a2aff] text-white dark:bg-[#7f70ff]
                                  dark:hover:bg-[#6e60ff]\"
                           title=\"Crear nueva categoría\">+</a>
                    </th>
                </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-200 dark:divide-gray-700\">
                    {% if pagination|length > 0 %}
                        {% for abilityCategory in pagination %}
                            <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f] transition\">
                                <td class=\"px-4 py-2 whitespace-nowrap\">{{ abilityCategory.name }}</td>
                                <td class=\"px-4 py-2\">{{ abilityCategory.description }}</td>
                                <td class=\"flex flex-row justify-end px-4 py-2 space-x-2 whitespace-nowrap\">
                                    <a href=\"{{ path('administration_ability_category_edit', { id: abilityCategory.id }) }}\"
                                       class=\"text-[#4a3aff] dark:text-[#7f70ff] hover:underline\" title=\"Editar categoría\">
                                        <img src=\"{{ asset('assets/images/icons/boton-editar.png') }}\" alt=\"Editar\" class=\"w-4\" />
                                    </a>
                                    <a href=\"{{ path('administration_ability_category_delete', { id: abilityCategory.id }) }}\"
                                       class=\"text-[#ff4a4a] dark:text-[#ff7373] hover:underline\" title=\"Eliminar categoría\">
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
        </div>

        <div class=\"mt-4\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </section>
{% endblock %}
", "administration/ability-category/list.html.twig", "C:\\Users\\eduar\\Documents\\GitHub\\proyecto-integrado\\templates\\administration\\ability-category\\list.html.twig");
    }
}
