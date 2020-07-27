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

/* /home/onetechlabs/Public/Programming-Projects/Web/dpd_psi_kabupaten_bogor_versi_2/themes/jtherczeg-grill/partials/footer.htm */
class __TwigTemplate_56a20f85c904586af371833310d253e6b15cc5f9483d9f1b33604ca8cc4a2c9f extends \Twig\Template
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
        return "/home/onetechlabs/Public/Programming-Projects/Web/dpd_psi_kabupaten_bogor_versi_2/themes/jtherczeg-grill/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bottom-footer\">
    <p>Copyright &copy; 2020 <a href=\"#\">DEWAN PIMPINAN DAERAH PARTAI SOLIDARITAS INDONESIA KABUPATEN BOGOR</a></p>
</div>", "/home/onetechlabs/Public/Programming-Projects/Web/dpd_psi_kabupaten_bogor_versi_2/themes/jtherczeg-grill/partials/footer.htm", "");
    }
}
