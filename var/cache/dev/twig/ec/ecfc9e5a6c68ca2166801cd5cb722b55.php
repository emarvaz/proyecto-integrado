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

/* index.html.twig */
class __TwigTemplate_f8408a5c8cb158ec11c25e21a164e3a3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es-ES\">
    <head>
        <title>Web Components</title>

        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <meta name=\"author\" content=\"Eduardo Martínez Vázquez\" />

        <link rel=\"stylesheet\" href=\"assets/styles/index.css\" />

        <script type=\"importmap\">
            {
                \"imports\": {
                    \"art\": \"/core/art.js\",
                    \"board\": \"/components/board.js\",
                    \"card-deck\": \"/components/card-deck.js\",
                    \"card\": \"/components/card.js\"
                }
            }
        </script>
        <script type=\"module\" src=\"index.js\"></script>
    </head>
    
    <body>
        <header>
            <nav>
                <ul>
                    <li data-path=\"/\">Mazo</li>
                    <li data-path=\"/board\">Carta</li>
                </ul>
            </nav>
        </header>

        <main>
            <art-board art-width=\"5\" art-height=\"5\"></art-board>
            <art-router></art-router>
        </main>
        
        <footer>
            <ul>
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
                <li>Link 4</li>
                <li>Link 5</li>
            </ul>
        </footer>
    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es-ES\">
    <head>
        <title>Web Components</title>

        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <meta name=\"author\" content=\"Eduardo Martínez Vázquez\" />

        <link rel=\"stylesheet\" href=\"assets/styles/index.css\" />

        <script type=\"importmap\">
            {
                \"imports\": {
                    \"art\": \"/core/art.js\",
                    \"board\": \"/components/board.js\",
                    \"card-deck\": \"/components/card-deck.js\",
                    \"card\": \"/components/card.js\"
                }
            }
        </script>
        <script type=\"module\" src=\"index.js\"></script>
    </head>
    
    <body>
        <header>
            <nav>
                <ul>
                    <li data-path=\"/\">Mazo</li>
                    <li data-path=\"/board\">Carta</li>
                </ul>
            </nav>
        </header>

        <main>
            <art-board art-width=\"5\" art-height=\"5\"></art-board>
            <art-router></art-router>
        </main>
        
        <footer>
            <ul>
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
                <li>Link 4</li>
                <li>Link 5</li>
            </ul>
        </footer>
    </body>
</html>
", "index.html.twig", "C:\\Users\\eduar\\Documents\\GitHub\\proyecto-integrado\\templates\\index.html.twig");
    }
}
