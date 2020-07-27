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

/* /home/kabbogorpsi/public_html/themes/jtherczeg-grill/partials/slider.htm */
class __TwigTemplate_8e209d2a9f84723a3a020f844ed524df3298c42c69425f22b55349b88c7e5817 extends \Twig\Template
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
        echo "<div class=\"flexslider\">
    <ul class=\"slides\">
        <li>
            <div class=\"slider-caption\">
                <center class=\"logo_in_slider\"><img src=\"http://localhost:8000/themes/jtherczeg-grill/assets/images/logo.png\" style=\"width:100px !important;\"/></center>
                <h2>Dewan Pimpinan Daerah<br>Partai Solidaritas Indonesia</h2>
                <p>Kabupaten Bogor</p>
            </div>
        <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background_slide.png");
        echo "\" alt=\"\" />
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flexslider\">
    <ul class=\"slides\">
        <li>
            <div class=\"slider-caption\">
                <center class=\"logo_in_slider\"><img src=\"http://localhost:8000/themes/jtherczeg-grill/assets/images/logo.png\" style=\"width:100px !important;\"/></center>
                <h2>Dewan Pimpinan Daerah<br>Partai Solidaritas Indonesia</h2>
                <p>Kabupaten Bogor</p>
            </div>
        <img src=\"{{ 'assets/images/background_slide.png'|theme }}\" alt=\"\" />
        </li>
    </ul>
</div>", "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/partials/slider.htm", "");
    }
}
