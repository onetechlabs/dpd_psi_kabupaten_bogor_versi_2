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

/* /home/kabbogorpsi/public_html/themes/jtherczeg-grill/pages/home.htm */
class __TwigTemplate_33749282af27977944fb9510ca8b9e47e0aa998ccf8dab11d7d3097222bcecfc extends \Twig\Template
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
        echo "<div id=\"slider\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>
<div class=\"container beranda\">
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"heading-section\">
            <h2>Kenalan Yuk sama PSI</h2>
            <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
        </div>
    </div>
</div>
            
<div class=\"row\">
    <div class=\"col-md-6\">
        <h3>Apa itu PSI?</h3>
        <p><b>Partai Solidaritas Indonesia</b> adalah kekuatan politik baru yang ingin mengembalikan politik ke tempat yang terhormat. PSI lahir dari kesadaran bahwa politik adalah sebuah tugas mulia untuk mewujudkan kebahagiaan bagi semua orang. Atas dasar itulah kami bertekad mengakhiri sengkarut politik hari ini dengan mengembalikan politik kepada nilainya yang luhur. Kami ingin mendekatkan kembali politik dengan nilai-nilai kebajikan agar lahir NEGARAWAN yang seluruh pikiran dan tindakannya didasarkan atas kepentingan yang lebih besar untuk bangsa dan negara Indonesia, bukan sekadar kepentingan pribadi politik jangka pendek.
    <br><br>
    <i>Tunjukkan Solidaritasmu!</i></p>
    </div>
    <div class=\"col-md-6\">
        <h3>Mengapa PSI?</h3>
        <p>
        Hasil yang baru tidak mungkin dicapai melalui cara lama. PSI hadir bersama semua yang baru: ide baru, gagasan baru, cara baru, orang baru dan mesin yang baru. Tentu tidak mudah menjalankan hal yang baru.
        <br><br>
        Karenanya KAMI membutuhkan ANDA, terutama anak muda dan perempuan Indonesia yang selama ini merasa jauh dari politik. PSI kami persembahkan untuk ANDA… karena KAMI bukan siapa-siapa TANPA ANDA!
        <br><br>
        PSI sebagai partai baru tidak lagi tersandera dengan kepentingan politik lama, klientalisme, rekam jejak yang buruk, beban sejarah dan citra yang buruk terhadap partai politik sebelumnya.
        <br><br>
        PSI memberikan porsi yang besar pada perempuan, sehingga gerakan politik PSI tidak hanya sekedar memenuhi syarat 30% persen perempuan, tapi juga seluruh keputusan politiknya diambil melalui keterlibatan aktif perempuan di dalamnya.
        <br><br>
        PSI secara konsisten memisahkan antara dua hal yang selama ini kadang menjadi kabur, antara mengurus partai dan mengurus politik. Sejak awal PSI telah memisahkan struktur politik dengan struktur administratifnya. Tidak akan terjadi politisi mengurus administrasi partai lalu menggunakannya untuk kepentingan kekuasaan, karena partai akan diurus oleh orang-orang muda profesional yang paham betul bagaimana mengurus organisasi yang modern, profesional, bersih dan transparan.
        <br><br><br>
        <a class=\"button\" style=\"border: 1px solid red; padding:10px;\" href=\"https://psi.id/menjadi-anggota\" target=\"_blank\">Bergabunglah Bersama Kami</a></p>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"heading-section\">
            <h2>Profil Kami</h2>
            <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
        </div>
    </div>
</div>
            
<div class=\"row\">
    <div class=\"col-md-3\">
        <h3>Apa itu PSI: </h3>
        <p>
            <iframe src=\"https://www.youtube.com/embed/9WUk_0E-NSc\" width=\"100%\" height=\"200\"></iframe>
        </p>
    </div>
    <div class=\"col-md-3\">
        <h3>Mars: </h3>
        <p>
            <iframe src=\"https://www.youtube.com/embed/G6N7etttaAk\" width=\"100%\" height=\"200\"></iframe>
        </p>
    </div>
    <div class=\"col-md-3\">
        <h3>Hymne: </h3>
        <p>
            <iframe src=\"https://www.youtube.com/embed/NowozyJtfSo\" width=\"100%\" height=\"200\"></iframe>
        </p>
    </div>
    <div class=\"col-md-3\">
        <h3>Jingle: </h3>
        <p>
            <iframe src=\"https://www.youtube.com/embed/W0z6fEVhncQ\" width=\"100%\" height=\"200\"></iframe>
        </p>
    </div>
</div>
</div>

<div id=\"services\">
    ";
        // line 76
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 77
        echo "</div>

<div id=\"latest-blog\">
    ";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("latest-blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>Quote Tokoh</h2>
                <img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
            </div>
        </div>
    </div>
\t<div id=\"testimonails\">
\t\t";
        // line 93
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("testimonials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 94
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 94,  155 => 93,  147 => 88,  138 => 81,  134 => 80,  129 => 77,  125 => 76,  88 => 42,  52 => 9,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"slider\">
    {% partial \"slider\" %}
</div>
<div class=\"container beranda\">
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"heading-section\">
            <h2>Kenalan Yuk sama PSI</h2>
            <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
        </div>
    </div>
</div>
            
<div class=\"row\">
    <div class=\"col-md-6\">
        <h3>Apa itu PSI?</h3>
        <p><b>Partai Solidaritas Indonesia</b> adalah kekuatan politik baru yang ingin mengembalikan politik ke tempat yang terhormat. PSI lahir dari kesadaran bahwa politik adalah sebuah tugas mulia untuk mewujudkan kebahagiaan bagi semua orang. Atas dasar itulah kami bertekad mengakhiri sengkarut politik hari ini dengan mengembalikan politik kepada nilainya yang luhur. Kami ingin mendekatkan kembali politik dengan nilai-nilai kebajikan agar lahir NEGARAWAN yang seluruh pikiran dan tindakannya didasarkan atas kepentingan yang lebih besar untuk bangsa dan negara Indonesia, bukan sekadar kepentingan pribadi politik jangka pendek.
    <br><br>
    <i>Tunjukkan Solidaritasmu!</i></p>
    </div>
    <div class=\"col-md-6\">
        <h3>Mengapa PSI?</h3>
        <p>
        Hasil yang baru tidak mungkin dicapai melalui cara lama. PSI hadir bersama semua yang baru: ide baru, gagasan baru, cara baru, orang baru dan mesin yang baru. Tentu tidak mudah menjalankan hal yang baru.
        <br><br>
        Karenanya KAMI membutuhkan ANDA, terutama anak muda dan perempuan Indonesia yang selama ini merasa jauh dari politik. PSI kami persembahkan untuk ANDA… karena KAMI bukan siapa-siapa TANPA ANDA!
        <br><br>
        PSI sebagai partai baru tidak lagi tersandera dengan kepentingan politik lama, klientalisme, rekam jejak yang buruk, beban sejarah dan citra yang buruk terhadap partai politik sebelumnya.
        <br><br>
        PSI memberikan porsi yang besar pada perempuan, sehingga gerakan politik PSI tidak hanya sekedar memenuhi syarat 30% persen perempuan, tapi juga seluruh keputusan politiknya diambil melalui keterlibatan aktif perempuan di dalamnya.
        <br><br>
        PSI secara konsisten memisahkan antara dua hal yang selama ini kadang menjadi kabur, antara mengurus partai dan mengurus politik. Sejak awal PSI telah memisahkan struktur politik dengan struktur administratifnya. Tidak akan terjadi politisi mengurus administrasi partai lalu menggunakannya untuk kepentingan kekuasaan, karena partai akan diurus oleh orang-orang muda profesional yang paham betul bagaimana mengurus organisasi yang modern, profesional, bersih dan transparan.
        <br><br><br>
        <a class=\"button\" style=\"border: 1px solid red; padding:10px;\" href=\"https://psi.id/menjadi-anggota\" target=\"_blank\">Bergabunglah Bersama Kami</a></p>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"heading-section\">
            <h2>Profil Kami</h2>
            <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
        </div>
    </div>
</div>
            
<div class=\"row\">
    <div class=\"col-md-3\">
        <h3>Apa itu PSI: </h3>
        <p>
            <iframe src=\"https://www.youtube.com/embed/9WUk_0E-NSc\" width=\"100%\" height=\"200\"></iframe>
        </p>
    </div>
    <div class=\"col-md-3\">
        <h3>Mars: </h3>
        <p>
            <iframe src=\"https://www.youtube.com/embed/G6N7etttaAk\" width=\"100%\" height=\"200\"></iframe>
        </p>
    </div>
    <div class=\"col-md-3\">
        <h3>Hymne: </h3>
        <p>
            <iframe src=\"https://www.youtube.com/embed/NowozyJtfSo\" width=\"100%\" height=\"200\"></iframe>
        </p>
    </div>
    <div class=\"col-md-3\">
        <h3>Jingle: </h3>
        <p>
            <iframe src=\"https://www.youtube.com/embed/W0z6fEVhncQ\" width=\"100%\" height=\"200\"></iframe>
        </p>
    </div>
</div>
</div>

<div id=\"services\">
    {% partial \"services\" %}
</div>

<div id=\"latest-blog\">
    {% partial \"latest-blog\" %}
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>Quote Tokoh</h2>
                <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
            </div>
        </div>
    </div>
\t<div id=\"testimonails\">
\t\t{% partial \"testimonials\" %}
\t</div>
</div>", "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/pages/home.htm", "");
    }
}
