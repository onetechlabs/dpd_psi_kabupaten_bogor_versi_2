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

/* /home/onetechlabs/Public/Programming-Projects/Web/dpd_psi_kabupaten_bogor_versi_2/themes/jtherczeg-grill/partials/top.htm */
class __TwigTemplate_9f0fe45a2238f799552db343eaa60a3bc2464bae1965b04989ebf8405e0bac4d extends \Twig\Template
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
        echo "<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"home-account\">
                    <a href=\"/\">DPD PSI KABUPATEN BOGOR</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"cart-info\">
                    <i class=\"fa fa-mobile-phone\"></i>
                    (<a href=\"https://api.whatsapp.com/send?phone=";
        // line 12
        echo twig_escape_filter($this->env, ($context["Contact"] ?? null), "html", null, true);
        echo "&text=Hallo,%20saya%20tertarik%20dengan%20PSI%20nih.%20Boleh%20tanya-tanya%20dulu%3F%20%3A%29\">Tanyakan via Whatsapp</a>) ";
        echo twig_escape_filter($this->env, ($context["ContactDisplay"] ?? null), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/onetechlabs/Public/Programming-Projects/Web/dpd_psi_kabupaten_bogor_versi_2/themes/jtherczeg-grill/partials/top.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"home-account\">
                    <a href=\"/\">DPD PSI KABUPATEN BOGOR</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"cart-info\">
                    <i class=\"fa fa-mobile-phone\"></i>
                    (<a href=\"https://api.whatsapp.com/send?phone={{Contact}}&text=Hallo,%20saya%20tertarik%20dengan%20PSI%20nih.%20Boleh%20tanya-tanya%20dulu%3F%20%3A%29\">Tanyakan via Whatsapp</a>) {{ContactDisplay}}
                </div>
            </div>
        </div>
    </div>
</div>", "/home/onetechlabs/Public/Programming-Projects/Web/dpd_psi_kabupaten_bogor_versi_2/themes/jtherczeg-grill/partials/top.htm", "");
    }
}
