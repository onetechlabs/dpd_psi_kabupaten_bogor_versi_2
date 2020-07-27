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

/* /home/kabbogorpsi/public_html/themes/jtherczeg-grill/pages/samples/single-post.htm */
class __TwigTemplate_8d32c20e038e168c423c886c29b43a05cab253e7a19ee3eb5ec12e7c38151e93 extends \Twig\Template
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
        if (($context["post"] ?? null)) {
            // line 2
            echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
            echo "</h2>
                    <span>Home / <a href=\"";
            // line 8
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/single-post");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</a></span>
                </div>
            </div>
        </div>
    </div>
</div>


<div id=\"product-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</h2>
                    <img src=\"";
            // line 22
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
            echo "\" alt=\"\" />
                </div>
            </div>
        </div>
        <div id=\"single-blog\" class=\"page-section first-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"product-item col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                              <div class=\"product-content\">
                                  <div class=\"product-title\">
                                       <h3>Posted by ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 34), "first_name", [], "any", false, false, false, 34), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 34), "last_name", [], "any", false, false, false, 34), "html", null, true);
            echo "</h3>
                                       <span class=\"subtitle\">Posted at ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 35), "M d, Y"), "html", null, true);
            echo "</span>
                                       ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 36), "count", [], "any", false, false, false, 36)) {
                echo " in ";
            }
            // line 37
            echo "                                       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 37));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 38
                echo "                                           <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "</i> ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 38)) {
                    echo ", ";
                }
                // line 39
                echo "                                       ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                  </div>
                                  <p>";
            // line 41
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 41);
            echo "</p>
                              </div>
                              <div class=\"divide-line\">
                              <center><img src=\"";
            // line 44
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/div-line.png");
            echo "\" alt=\"\" /></center>
                              </div>
\t\t\t\t\t\t\t\t         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        } else {
            // line 56
            echo "<h2>Post not found</h2>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/pages/samples/single-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 56,  149 => 44,  143 => 41,  140 => 40,  126 => 39,  119 => 38,  101 => 37,  97 => 36,  93 => 35,  87 => 34,  72 => 22,  68 => 21,  50 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if post %}
<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>{{ post.title }}</h2>
                    <span>Home / <a href=\"{{ 'samples/single-post'|page }}\">{{ post.title }}</a></span>
                </div>
            </div>
        </div>
    </div>
</div>


<div id=\"product-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>{{ post.title }}</h2>
                    <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" />
                </div>
            </div>
        </div>
        <div id=\"single-blog\" class=\"page-section first-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"product-item col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                              <div class=\"product-content\">
                                  <div class=\"product-title\">
                                       <h3>Posted by {{post.user.first_name}} {{post.user.last_name}}</h3>
                                       <span class=\"subtitle\">Posted at {{ post.published_at|date('M d, Y') }}</span>
                                       {% if post.categories.count %} in {% endif %}
                                       {% for category in post.categories %}
                                           <i>{{ category.name }}</i> {% if not loop.last %}, {% endif %}
                                       {% endfor %}
                                  </div>
                                  <p>{{ post.content_html|raw }}</p>
                              </div>
                              <div class=\"divide-line\">
                              <center><img src=\"{{ 'assets/images/div-line.png'|theme }}\" alt=\"\" /></center>
                              </div>
\t\t\t\t\t\t\t\t         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% else %}
<h2>Post not found</h2>
{% endif %}", "/home/kabbogorpsi/public_html/themes/jtherczeg-grill/pages/samples/single-post.htm", "");
    }
}
