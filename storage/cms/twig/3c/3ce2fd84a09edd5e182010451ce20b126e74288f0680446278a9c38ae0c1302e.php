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

/* /home/kabbogorpsi/public_html/themes/jtherczeg-grill/partials/about/intro.htm */
class __TwigTemplate_2c78465f06e267e1d115084d8e5a840759c97313efcc9723827187bb54c0cb3b extends \Twig\Template
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
        echo "<div class=\"container kanggotaan\">
<div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>KEANGGOTAAN</h2>
                <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 col-sm-12\">
            <div class=\"service-item\">
                <h4>INGIN MENJADI ANGGOTA ?</h4>
                <p>Belum mendaftar dan ingin menjadi anggota ? <a href=\"https://psi.id/menjadi-anggota\">Klik disini untuk mendaftar !</a></p>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12\">
            <div class=\"service-item\">
                <h4>SUDAH MENJADI ANGGOTA</h4>
                <p>Setelah Mendaftar Cek akun mu, kamu akan dapat melihat E-KTA setelah berhasil login, <a href=\"https://siap.psi.id/\">Klik disini untuk Login!</a> </p>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12\">
            <div class=\"service-item\">
                <h4>VERIFIKASI KEANGGOTAAN</h4>
                <p>Setelah mendaftar dan berhasil login di Portal Utama Akun, Silahkan lakukan verifikasi dan kami akan segera menghubungimu <a href=\"https://forms.gle/gjnzJq5MbCnRf4VG9\">Klik disini !</a></p>
            </div>
        </div>
    </div>
    <div class=\"space50\"></div>  
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/partials/about/intro.htm";
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
        return new Source("<div class=\"container kanggotaan\">
<div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>KEANGGOTAAN</h2>
                <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 col-sm-12\">
            <div class=\"service-item\">
                <h4>INGIN MENJADI ANGGOTA ?</h4>
                <p>Belum mendaftar dan ingin menjadi anggota ? <a href=\"https://psi.id/menjadi-anggota\">Klik disini untuk mendaftar !</a></p>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12\">
            <div class=\"service-item\">
                <h4>SUDAH MENJADI ANGGOTA</h4>
                <p>Setelah Mendaftar Cek akun mu, kamu akan dapat melihat E-KTA setelah berhasil login, <a href=\"https://siap.psi.id/\">Klik disini untuk Login!</a> </p>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12\">
            <div class=\"service-item\">
                <h4>VERIFIKASI KEANGGOTAAN</h4>
                <p>Setelah mendaftar dan berhasil login di Portal Utama Akun, Silahkan lakukan verifikasi dan kami akan segera menghubungimu <a href=\"https://forms.gle/gjnzJq5MbCnRf4VG9\">Klik disini !</a></p>
            </div>
        </div>
    </div>
    <div class=\"space50\"></div>  
</div>", "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/partials/about/intro.htm", "");
    }
}
