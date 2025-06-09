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

/* administration/user/list.html.twig */
class __TwigTemplate_df7a17136426e0625045abd9ee75b2f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/user/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/user/list.html.twig"));

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

        yield "Listado de usuarios";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_user_list");
        yield "\"
              class=\"flex flex-wrap items-center gap-2 bg-[#fdfcfa] dark:bg-[#1e1e2f] px-4 py-3 rounded-lg border
               border-gray-300 dark:border-gray-600 mb-6 w-full max-w-full\">

            <input type=\"text\" id=\"filter\" name=\"filter\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["activeFilters"] ?? null), "filter", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 11, $this->source); })()), "filter", [], "any", false, false, false, 11), "")) : ("")), "html", null, true);
        yield "\"
                   placeholder=\"Buscar usuario...\"
                   class=\"flex-1 min-w-[180px] sm:min-w-[240px] text-sm px-3 py-1.5 border border-gray-300
                   dark:border-gray-500 rounded-md bg-white dark:bg-[#2c2c44] text-[#1e1e1e] dark:text-[#f1f1f1]
                   focus:ring-1 focus:ring-[#4a3aff] focus:outline-none\">

            <button type=\"submit\"
                    class=\"text-sm px-3 py-1.5 rounded-md text-white\">Filtrar</button>

            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_user_list");
        yield "\"
               class=\"text-sm text-[#4a3aff] dark:text-[#7f70ff] hover:underline\">Limpiar</a>
        </form>

        <section class=\"overflow-x-auto rounded-lg ring-1 ring-gray-300 dark:ring-gray-600\">
            <table class=\"min-w-full text-sm text-left text-[#1e1e1e] dark:text-[#f1f1f1] bg-[#fdfcfa]
                          dark:bg-[#1e1e2f]\">
                <thead class=\"bg-[#eeeafc] dark:bg-[#2c2c44] uppercase text-xs text-[#4a3aff] dark:text-[#7f70ff]
                              tracking-wider\">
                <tr>
                    <th class=\"px-4 py-3\">";
        // line 30
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 30, $this->source); })()), "Nombre de usuario", "user.username");
        yield "</th>
                    <th class=\"px-4 py-3\">";
        // line 31
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 31, $this->source); })()), "Correo electrónico", "user.email");
        yield "</th>
                    <th class=\"px-4 py-3\">";
        // line 32
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 32, $this->source); })()), "Nombre", "user.name");
        yield "</th>
                    <th class=\"px-4 py-3\">";
        // line 33
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 33, $this->source); })()), "Apellidos", "user.lastname");
        yield "</th>
                    <th class=\"px-4 py-3\">";
        // line 34
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()), "Foto de perfil", "user.profilePic");
        yield "</th>
                    <th class=\"px-4 py-3\">Roles</th>
                    <th class=\"px-4 py-3 flex flex-row items-center\">
                        <span>Acciones</span>

                        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_user_create");
        yield "\"
                           class=\"ml-2 inline-flex items-center justify-center text-sm font-semibold w-8 h-8
                                  rounded-full bg-[#4a3aff] hover:bg-[#3a2aff] text-white dark:bg-[#7f70ff]
                                  dark:hover:bg-[#6e60ff]\"
                           title=\"Crear nuevo usuario\">+</a>
                    </th>
                </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-200 dark:divide-gray-700\">
                    ";
        // line 48
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 48, $this->source); })())) > 0)) {
            // line 49
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 50
                yield "                            <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f]\">
                                <td class=\"px-4 py-2\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-2\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 52), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-2\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 53), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-2\">";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 54), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-2\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePic", [], "any", false, false, false, 55), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-2 space-x-1\">
                                    ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 57));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 58
                    yield "                                        <span class=\"inline-block text-[#333] dark:text-white px-2 py-0.5 rounded text-xs font-medium\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                    yield "</span>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                yield "                                </td>
                                <td class=\"flex flex-row justify-end px-4 py-2 space-x-2 whitespace-nowrap\">
                                    <a href=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\"
                                       class=\"text-[#4a3aff] dark:text-[#7f70ff] hover:underline\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10\" />
                                        </svg>
                                    </a>
                                    <a href=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                yield "\"
                                       class=\"table__cell__delete text-[#ff4a4a] dark:text-[#ff7373] hover:underline\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0\" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "                    ";
        } else {
            // line 78
            yield "                    <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f]\">
                        <td colspan=\"6\" class=\"px-4 py-2\">No hay usuarios registrados.</td>
                    </tr>
                    ";
        }
        // line 82
        yield "                </tbody>
            </table>
        </section>
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
        return "administration/user/list.html.twig";
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
        return array (  252 => 82,  246 => 78,  243 => 77,  228 => 68,  219 => 62,  215 => 60,  206 => 58,  202 => 57,  197 => 55,  193 => 54,  189 => 53,  185 => 52,  181 => 51,  178 => 50,  173 => 49,  171 => 48,  159 => 39,  151 => 34,  147 => 33,  143 => 32,  139 => 31,  135 => 30,  122 => 20,  110 => 11,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'administration/index.html.twig' %}

{% block title %}Listado de usuarios{% endblock %}

{% block main %}
    <section class=\"mx-auto px-4 py-6\">
        <form method=\"get\" action=\"{{ path('administration_user_list') }}\"
              class=\"flex flex-wrap items-center gap-2 bg-[#fdfcfa] dark:bg-[#1e1e2f] px-4 py-3 rounded-lg border
               border-gray-300 dark:border-gray-600 mb-6 w-full max-w-full\">

            <input type=\"text\" id=\"filter\" name=\"filter\" value=\"{{ activeFilters.filter|default('') }}\"
                   placeholder=\"Buscar usuario...\"
                   class=\"flex-1 min-w-[180px] sm:min-w-[240px] text-sm px-3 py-1.5 border border-gray-300
                   dark:border-gray-500 rounded-md bg-white dark:bg-[#2c2c44] text-[#1e1e1e] dark:text-[#f1f1f1]
                   focus:ring-1 focus:ring-[#4a3aff] focus:outline-none\">

            <button type=\"submit\"
                    class=\"text-sm px-3 py-1.5 rounded-md text-white\">Filtrar</button>

            <a href=\"{{ path('administration_user_list') }}\"
               class=\"text-sm text-[#4a3aff] dark:text-[#7f70ff] hover:underline\">Limpiar</a>
        </form>

        <section class=\"overflow-x-auto rounded-lg ring-1 ring-gray-300 dark:ring-gray-600\">
            <table class=\"min-w-full text-sm text-left text-[#1e1e1e] dark:text-[#f1f1f1] bg-[#fdfcfa]
                          dark:bg-[#1e1e2f]\">
                <thead class=\"bg-[#eeeafc] dark:bg-[#2c2c44] uppercase text-xs text-[#4a3aff] dark:text-[#7f70ff]
                              tracking-wider\">
                <tr>
                    <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Nombre de usuario', 'user.username') }}</th>
                    <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Correo electrónico', 'user.email') }}</th>
                    <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Nombre', 'user.name') }}</th>
                    <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Apellidos', 'user.lastname') }}</th>
                    <th class=\"px-4 py-3\">{{ knp_pagination_sortable(pagination, 'Foto de perfil', 'user.profilePic') }}</th>
                    <th class=\"px-4 py-3\">Roles</th>
                    <th class=\"px-4 py-3 flex flex-row items-center\">
                        <span>Acciones</span>

                        <a href=\"{{ path('administration_user_create') }}\"
                           class=\"ml-2 inline-flex items-center justify-center text-sm font-semibold w-8 h-8
                                  rounded-full bg-[#4a3aff] hover:bg-[#3a2aff] text-white dark:bg-[#7f70ff]
                                  dark:hover:bg-[#6e60ff]\"
                           title=\"Crear nuevo usuario\">+</a>
                    </th>
                </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-200 dark:divide-gray-700\">
                    {% if pagination|length > 0 %}
                        {% for user in pagination %}
                            <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f]\">
                                <td class=\"px-4 py-2\">{{ user.username }}</td>
                                <td class=\"px-4 py-2\">{{ user.email }}</td>
                                <td class=\"px-4 py-2\">{{ user.name }}</td>
                                <td class=\"px-4 py-2\">{{ user.lastname }}</td>
                                <td class=\"px-4 py-2\">{{ user.profilePic }}</td>
                                <td class=\"px-4 py-2 space-x-1\">
                                    {% for role in user.roles %}
                                        <span class=\"inline-block text-[#333] dark:text-white px-2 py-0.5 rounded text-xs font-medium\">{{ role }}</span>
                                    {% endfor %}
                                </td>
                                <td class=\"flex flex-row justify-end px-4 py-2 space-x-2 whitespace-nowrap\">
                                    <a href=\"{{ path('administration_user_edit', { id: user.id }) }}\"
                                       class=\"text-[#4a3aff] dark:text-[#7f70ff] hover:underline\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10\" />
                                        </svg>
                                    </a>
                                    <a href=\"{{ path('administration_user_delete', { id: user.id }) }}\"
                                       class=\"table__cell__delete text-[#ff4a4a] dark:text-[#ff7373] hover:underline\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0\" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    {% else %}
                    <tr class=\"hover:bg-[#f2f0ff] dark:hover:bg-[#2a2a3f]\">
                        <td colspan=\"6\" class=\"px-4 py-2\">No hay usuarios registrados.</td>
                    </tr>
                    {% endif %}
                </tbody>
            </table>
        </section>
    </section>
{% endblock %}", "administration/user/list.html.twig", "C:\\Users\\eduar\\Documents\\GitHub\\proyecto-integrado\\templates\\administration\\user\\list.html.twig");
    }
}
