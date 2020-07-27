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

/* /home/kabbogorpsi/public_html/themes/jtherczeg-grill/partials/footer.htm */
class __TwigTemplate_cc336a06841347b46e2a2cdd0be0457bb3eda2dd3d41e0895c1ab454d3ee0013 extends \Twig\Template
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
        echo "<div class=\"bottom-footer\">
    <p>Copyright &copy; 2020 <a href=\"#\">DEWAN PIMPINAN DAERAH PARTAI SOLIDARITAS INDONESIA KABUPATEN BOGOR</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bottom-footer\">
    <p>Copyright &copy; 2020 <a href=\"#\">DEWAN PIMPINAN DAERAH PARTAI SOLIDARITAS INDONESIA KABUPATEN BOGOR</a></p>
</div>", "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/partials/footer.htm", "");
    }
}
