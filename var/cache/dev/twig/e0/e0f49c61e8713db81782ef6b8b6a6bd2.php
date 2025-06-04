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

/* _footer.html.twig */
class __TwigTemplate_ada9d9759fde8dc9eb744fb95eb7b046 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        // line 1
        yield "<footer class=\"bg-white dark:bg-gray-800 flex-1\">
    <div class=\"max-w-screen-xl mx-auto px-4 py-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-sm text-gray-600 dark:text-gray-300\">
        <div>
            <h3 class=\"font-semibold text-gray-800 dark:text-white mb-2 uppercase\">Compañía</h3>

            <ul class=\"space-y-1\">
                <li><a href=\"#\" class=\"hover:underline\">Inicio</a></li>
                <li><a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_list");
        yield "\" class=\"hover:underline\">Cartas</a></li>
                <li><a href=\"#\" class=\"hover:underline\">Sobre nosotros</a></li>
            </ul>
        </div>
    </div>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_footer.html.twig";
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
        return array (  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"bg-white dark:bg-gray-800 flex-1\">
    <div class=\"max-w-screen-xl mx-auto px-4 py-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-sm text-gray-600 dark:text-gray-300\">
        <div>
            <h3 class=\"font-semibold text-gray-800 dark:text-white mb-2 uppercase\">Compañía</h3>

            <ul class=\"space-y-1\">
                <li><a href=\"#\" class=\"hover:underline\">Inicio</a></li>
                <li><a href=\"{{ path('card_list') }}\" class=\"hover:underline\">Cartas</a></li>
                <li><a href=\"#\" class=\"hover:underline\">Sobre nosotros</a></li>
            </ul>
        </div>
    </div>
</footer>
", "_footer.html.twig", "/Users/ulises/PhpstormProjects/proyecto-integrado/templates/_footer.html.twig");
    }
}
