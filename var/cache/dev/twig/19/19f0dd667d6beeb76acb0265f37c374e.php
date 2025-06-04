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
class __TwigTemplate_52cdb2d24c080ad92964c411af275890 extends Template
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
        <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_list");
        yield "\" class=\"flex items-center gap-2\">
            <img src=\"https://flowbite.com/docs/images/logo.svg\" alt=\"Logo\" class=\"h-8\" />
            <span class=\"text-2xl font-semibold\">World of Cards</span>
        </a>

        <button id=\"menu-toggle\" class=\"md:hidden p-2 rounded text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700\">
            <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\"></path>
            </svg>
        </button>

        <nav class=\"hidden md:flex gap-6\">
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_list");
        yield "\" class=\"hover:text-blue-600\">Comunidad</a>
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_list");
        yield "\" class=\"hover:text-blue-600\">Cartas</a>
            ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_edit");
            yield "\" class=\"hover:text-blue-600\">Mis mazos</a>
            ";
        }
        // line 20
        yield "        </nav>

        <div class=\"hidden md:flex gap-4\">
            ";
        // line 23
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\" class=\"text-blue-600 hover:underline\">Iniciar sesión</a>
                <a href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sign_in");
            yield "\" class=\"bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700\">Registrarse</a>
            ";
        } else {
            // line 27
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"hover:text-blue-600\">Perfil</a>
                <a href=\"";
            // line 28
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\" class=\"hover:text-red-600\">Cerrar sesión</a>
            ";
        }
        // line 30
        yield "        </div>
    </div>

    <div id=\"mobile-menu\" class=\"hidden md:hidden bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700\">
        <nav class=\"px-4 py-2 flex flex-col gap-2\">
            <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_list");
        yield "\" class=\"hover:text-blue-600\">Sobre nosotros</a>
            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_list");
        yield "\" class=\"hover:text-blue-600\">Cartas</a>
            ";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_edit");
            yield "\" class=\"hover:text-blue-600\">Mis mazos</a>
            ";
        }
        // line 40
        yield "            ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\" class=\"hover:text-blue-600\">Iniciar sesión</a>
                <a href=\"";
            // line 42
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sign_in");
            yield "\" class=\"hover:text-blue-600\">Registrarse</a>
            ";
        } else {
            // line 44
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"hover:text-blue-600\">Perfil</a>
                <a href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\" class=\"hover:text-red-600\">Cerrar sesión</a>
            ";
        }
        // line 47
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
        return array (  156 => 47,  151 => 45,  146 => 44,  141 => 42,  136 => 41,  133 => 40,  127 => 38,  125 => 37,  121 => 36,  117 => 35,  110 => 30,  105 => 28,  100 => 27,  95 => 25,  90 => 24,  88 => 23,  83 => 20,  77 => 18,  75 => 17,  71 => 16,  67 => 15,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"bg-white dark:bg-gray-800 shadow sticky top-0 z-50\">
    <div class=\"max-w-screen-xl mx-auto px-4 py-4 flex items-center justify-between\">
        <a href=\"{{ path('card_deck_list') }}\" class=\"flex items-center gap-2\">
            <img src=\"https://flowbite.com/docs/images/logo.svg\" alt=\"Logo\" class=\"h-8\" />
            <span class=\"text-2xl font-semibold\">World of Cards</span>
        </a>

        <button id=\"menu-toggle\" class=\"md:hidden p-2 rounded text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700\">
            <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\"></path>
            </svg>
        </button>

        <nav class=\"hidden md:flex gap-6\">
            <a href=\"{{ path('card_deck_list') }}\" class=\"hover:text-blue-600\">Comunidad</a>
            <a href=\"{{ path('card_list') }}\" class=\"hover:text-blue-600\">Cartas</a>
            {% if app.user %}
                <a href=\"{{ path('card_deck_edit') }}\" class=\"hover:text-blue-600\">Mis mazos</a>
            {% endif %}
        </nav>

        <div class=\"hidden md:flex gap-4\">
            {% if not app.user %}
                <a href=\"{{ path('login') }}\" class=\"text-blue-600 hover:underline\">Iniciar sesión</a>
                <a href=\"{{ path('sign_in') }}\" class=\"bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700\">Registrarse</a>
            {% else %}
                <a href=\"{{ path('profile', { 'id': app.user.id }) }}\" class=\"hover:text-blue-600\">Perfil</a>
                <a href=\"{{ path('logout') }}\" class=\"hover:text-red-600\">Cerrar sesión</a>
            {% endif %}
        </div>
    </div>

    <div id=\"mobile-menu\" class=\"hidden md:hidden bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700\">
        <nav class=\"px-4 py-2 flex flex-col gap-2\">
            <a href=\"{{ path('card_deck_list') }}\" class=\"hover:text-blue-600\">Sobre nosotros</a>
            <a href=\"{{ path('card_list') }}\" class=\"hover:text-blue-600\">Cartas</a>
            {% if app.user %}
                <a href=\"{{ path('card_deck_edit') }}\" class=\"hover:text-blue-600\">Mis mazos</a>
            {% endif %}
            {% if not app.user %}
                <a href=\"{{ path('login') }}\" class=\"hover:text-blue-600\">Iniciar sesión</a>
                <a href=\"{{ path('sign_in') }}\" class=\"hover:text-blue-600\">Registrarse</a>
            {% else %}
                <a href=\"{{ path('profile', { 'id': app.user.id }) }}\" class=\"hover:text-blue-600\">Perfil</a>
                <a href=\"{{ path('logout') }}\" class=\"hover:text-red-600\">Cerrar sesión</a>
            {% endif %}
        </nav>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</header>", "_header.html.twig", "/Users/ulises/PhpstormProjects/proyecto-integrado/templates/_header.html.twig");
    }
}
