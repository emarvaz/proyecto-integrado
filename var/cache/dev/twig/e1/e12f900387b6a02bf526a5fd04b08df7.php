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

/* _header.html.twig */
class __TwigTemplate_eb026bd0355213761897903cf738be29 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        // line 1
        yield "<header class=\"bg-white dark:bg-gray-800 shadow sticky top-0 z-50\">
    <div class=\"max-w-screen-xl mx-auto px-4 py-4 flex items-center justify-between\">
        <a href=\"/\" class=\"flex items-center gap-2\">
            <img src=\"https://flowbite.com/docs/images/logo.svg\" alt=\"Logo\" class=\"h-8\" />
            <span class=\"text-2xl font-semibold\">World of Cards</span>
        </a>

        <button id=\"menu-toggle\" class=\"md:hidden p-2 rounded text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700\">
            <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\"></path></svg>
        </button>

        <nav class=\"hidden md:flex gap-6\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_list");
        yield "\" class=\"hover:text-blue-600\">Cartas</a>
            <a href=\"#\" class=\"hover:text-blue-600\">Sobre nosotros</a>
            ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck__list");
            yield "\" class=\"hover:text-blue-600\">Mis mazos</a>
            ";
        }
        // line 18
        yield "        </nav>

        <div class=\"hidden md:flex gap-4\">
            ";
        // line 21
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\" class=\"text-blue-600 hover:underline\">Iniciar sesión</a>
                <a href=\"";
            // line 23
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sign_in");
            yield "\" class=\"bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700\">Registrarse</a>
            ";
        } else {
            // line 25
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            yield "\" class=\"hover:text-blue-600\">Perfil</a>
                <a href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\" class=\"hover:text-red-600\">Cerrar sesión</a>
            ";
        }
        // line 28
        yield "        </div>
    </div>

    <div id=\"mobile-menu\" class=\"hidden md:hidden bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700\">
        <nav class=\"px-4 py-2 flex flex-col gap-2\">
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_list");
        yield "\" class=\"hover:text-blue-600\">Cartas</a>
            <a href=\"#\" class=\"hover:text-blue-600\">Sobre nosotros</a>
            ";
        // line 35
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck__list");
            yield "\" class=\"hover:text-blue-600\">Mis mazos</a>
            ";
        }
        // line 38
        yield "            ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\" class=\"hover:text-blue-600\">Iniciar sesión</a>
                <a href=\"";
            // line 40
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sign_in");
            yield "\" class=\"hover:text-blue-600\">Registrarse</a>
            ";
        } else {
            // line 42
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            yield "\" class=\"hover:text-blue-600\">Perfil</a>
                <a href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\" class=\"hover:text-red-600\">Cerrar sesión</a>
            ";
        }
        // line 45
        yield "        </nav>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_header.html.twig";
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
        return array (  145 => 45,  140 => 43,  135 => 42,  130 => 40,  125 => 39,  122 => 38,  116 => 36,  114 => 35,  109 => 33,  102 => 28,  97 => 26,  92 => 25,  87 => 23,  82 => 22,  80 => 21,  75 => 18,  69 => 16,  67 => 15,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"bg-white dark:bg-gray-800 shadow sticky top-0 z-50\">
    <div class=\"max-w-screen-xl mx-auto px-4 py-4 flex items-center justify-between\">
        <a href=\"/\" class=\"flex items-center gap-2\">
            <img src=\"https://flowbite.com/docs/images/logo.svg\" alt=\"Logo\" class=\"h-8\" />
            <span class=\"text-2xl font-semibold\">World of Cards</span>
        </a>

        <button id=\"menu-toggle\" class=\"md:hidden p-2 rounded text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700\">
            <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\"></path></svg>
        </button>

        <nav class=\"hidden md:flex gap-6\">
            <a href=\"{{ path('card_list') }}\" class=\"hover:text-blue-600\">Cartas</a>
            <a href=\"#\" class=\"hover:text-blue-600\">Sobre nosotros</a>
            {% if app.user %}
                <a href=\"{{ path('card_deck__list') }}\" class=\"hover:text-blue-600\">Mis mazos</a>
            {% endif %}
        </nav>

        <div class=\"hidden md:flex gap-4\">
            {% if not app.user %}
                <a href=\"{{ path('login') }}\" class=\"text-blue-600 hover:underline\">Iniciar sesión</a>
                <a href=\"{{ path('sign_in') }}\" class=\"bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700\">Registrarse</a>
            {% else %}
                <a href=\"{{ path('profile') }}\" class=\"hover:text-blue-600\">Perfil</a>
                <a href=\"{{ path('logout') }}\" class=\"hover:text-red-600\">Cerrar sesión</a>
            {% endif %}
        </div>
    </div>

    <div id=\"mobile-menu\" class=\"hidden md:hidden bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700\">
        <nav class=\"px-4 py-2 flex flex-col gap-2\">
            <a href=\"{{ path('card_list') }}\" class=\"hover:text-blue-600\">Cartas</a>
            <a href=\"#\" class=\"hover:text-blue-600\">Sobre nosotros</a>
            {% if app.user %}
                <a href=\"{{ path('card_deck__list') }}\" class=\"hover:text-blue-600\">Mis mazos</a>
            {% endif %}
            {% if not app.user %}
                <a href=\"{{ path('login') }}\" class=\"hover:text-blue-600\">Iniciar sesión</a>
                <a href=\"{{ path('sign_in') }}\" class=\"hover:text-blue-600\">Registrarse</a>
            {% else %}
                <a href=\"{{ path('profile') }}\" class=\"hover:text-blue-600\">Perfil</a>
                <a href=\"{{ path('logout') }}\" class=\"hover:text-red-600\">Cerrar sesión</a>
            {% endif %}
        </nav>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</header>", "_header.html.twig", "C:\\Users\\eduar\\Documents\\GitHub\\proyecto-integrado\\templates\\_header.html.twig");
    }
}
