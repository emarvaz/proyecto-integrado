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

/* administration/_cards-per-ability.html.twig */
class __TwigTemplate_ebed9dea44c016a54aabac3adf4a3f7b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/_cards-per-ability.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/_cards-per-ability.html.twig"));

        // line 1
        yield "<section class=\"chart-container w-full max-w-full rounded-lg relative\">
    <canvas id=\"ability-category-chart\" class=\"w-full h-full\"></canvas>
</section>

<script type=\"text/javascript\" src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/resources/package/dist/chart.umd.js"), "html", null, true);
        yield "\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const context = document.getElementById('ability-category-chart').getContext('2d');

        const chartData = ";
        // line 10
        yield json_encode((isset($context["cardsPerAbilityChartData"]) || array_key_exists("cardsPerAbilityChartData", $context) ? $context["cardsPerAbilityChartData"] : (function () { throw new RuntimeError('Variable "cardsPerAbilityChartData" does not exist.', 10, $this->source); })()));
        yield ";

        if (chartData.labels.length > 0) {
            new Chart(context, {
                type: 'bar',
                data: chartData,
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: 'Número de cartas por habilidad'
                        }
                    },
                    scales: {
                        x: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "administration/_cards-per-ability.html.twig";
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
        return array (  62 => 10,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"chart-container w-full max-w-full rounded-lg relative\">
    <canvas id=\"ability-category-chart\" class=\"w-full h-full\"></canvas>
</section>

<script type=\"text/javascript\" src=\"{{ asset('/resources/package/dist/chart.umd.js') }}\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const context = document.getElementById('ability-category-chart').getContext('2d');

        const chartData = {{ cardsPerAbilityChartData|json_encode|raw }};

        if (chartData.labels.length > 0) {
            new Chart(context, {
                type: 'bar',
                data: chartData,
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: 'Número de cartas por habilidad'
                        }
                    },
                    scales: {
                        x: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    });
</script>", "administration/_cards-per-ability.html.twig", "C:\\Users\\eduar\\Documents\\GitHub\\proyecto-integrado\\templates\\administration\\_cards-per-ability.html.twig");
    }
}
