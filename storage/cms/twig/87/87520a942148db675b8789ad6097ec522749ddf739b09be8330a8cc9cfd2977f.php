<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/kabbogorpsi/public_html/themes/jtherczeg-grill/pages/404.htm */
class __TwigTemplate_090bf0f9ac84df35827674e6db94a16dd4aeb4929309a7b4c344ddd06613caa8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>404 Page Not Found</h2>
                    <span>The page you are looking for doesn't exist or another error occurred.</span>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>404 Page Not Found</h2>
                    <span>The page you are looking for doesn't exist or another error occurred.</span>
                </div>
            </div>
        </div>
    </div>
</div>", "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/pages/404.htm", "");
    }
}
