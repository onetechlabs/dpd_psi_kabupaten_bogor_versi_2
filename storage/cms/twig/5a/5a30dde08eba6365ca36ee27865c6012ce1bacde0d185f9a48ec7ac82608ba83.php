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

/* /home/onetechlabs/Public/Programming-Projects/Web/dpd_psi_kabupaten_bogor_versi_2/themes/jtherczeg-grill/partials/services.htm */
class __TwigTemplate_121ff4427ade7fbe450d134e9f18db830cd27ffb1c3534a509f9db7546e41fa5 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>Apa yang Akan Kami Perjuangkan ?</h2>
                <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"service-item\">
                <h4>PEMBERDAYAAN PEREMPUAN</h4>
                <p>Partai ini akan berjuang membantu perempuan Indonesia memaksimalkan potensi terbaik mereka</p>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"service-item\">
                <h4>PEMBERDAYAAN PEMUDA</h4>
                <p>Partai ini akan memperjuangkan sejumlah hal untuk masa depan anak muda Indonesia</p>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"service-item\">
                <h4>MEMPERJUANGKAN KESETARAAN</h4>
                <p>Partai ini akan memperjuangkan Kesetaraan bagi semua rakyat indonesia</p>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"service-item\">
                <h4>POLITIK BERSIH & ANTI INTOLERANSI</h4>
                <p>Memperjuangkan transparansi dan anti korupsi, juga merawat keberagaman nusantara</p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/onetechlabs/Public/Programming-Projects/Web/dpd_psi_kabupaten_bogor_versi_2/themes/jtherczeg-grill/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>Apa yang Akan Kami Perjuangkan ?</h2>
                <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"service-item\">
                <h4>PEMBERDAYAAN PEREMPUAN</h4>
                <p>Partai ini akan berjuang membantu perempuan Indonesia memaksimalkan potensi terbaik mereka</p>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"service-item\">
                <h4>PEMBERDAYAAN PEMUDA</h4>
                <p>Partai ini akan memperjuangkan sejumlah hal untuk masa depan anak muda Indonesia</p>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"service-item\">
                <h4>MEMPERJUANGKAN KESETARAAN</h4>
                <p>Partai ini akan memperjuangkan Kesetaraan bagi semua rakyat indonesia</p>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"service-item\">
                <h4>POLITIK BERSIH & ANTI INTOLERANSI</h4>
                <p>Memperjuangkan transparansi dan anti korupsi, juga merawat keberagaman nusantara</p>
            </div>
        </div>
    </div>
</div>", "/home/onetechlabs/Public/Programming-Projects/Web/dpd_psi_kabupaten_bogor_versi_2/themes/jtherczeg-grill/partials/services.htm", "");
    }
}
