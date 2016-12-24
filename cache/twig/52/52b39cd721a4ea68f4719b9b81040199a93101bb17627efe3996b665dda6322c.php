<?php

/* default.html.twig */
class __TwigTemplate_29cd3e670800edd90304e51225b1aae8632513dcc5f82beb11e1687906193d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'addcss' => array($this, 'block_addcss'),
            'addjs' => array($this, 'block_addjs'),
            'head_img' => array($this, 'block_head_img'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_addcss($context, array $blocks = array())
    {
        // line 4
        echo "  <link href=\"/user/themes/sinoclean/css/default.css\" type=\"text/css\" rel=\"stylesheet\" />
  ";
        // line 5
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "css", array());
        echo "
";
    }

    // line 8
    public function block_addjs($context, array $blocks = array())
    {
        // line 9
        echo "  <script src=\"/user/themes/sinoclean/js/default.js\" type=\"text/javascript\" ></script>
 ";
        // line 10
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "js", array());
        echo "
";
    }

    // line 13
    public function block_head_img($context, array $blocks = array())
    {
        // line 14
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "background_pic", array())) {
            // line 15
            echo "  <div class=\"head_img\" style=\"background: url(";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "background_pic", array());
            echo ") no-repeat center;\" >
  </div>
";
        }
        // line 18
        if ((is_string($__internal_495fc879e59684a0ed35e483c738ea5041aa87b2c9fe4133bb070d2b3aa75108 = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array())) && is_string($__internal_55e96743d6d79abcd9b4a9b9d830012b91cdf4362f4ea1d39ffc14b237620bac = "project") && ('' === $__internal_55e96743d6d79abcd9b4a9b9d830012b91cdf4362f4ea1d39ffc14b237620bac || 0 === strpos($__internal_495fc879e59684a0ed35e483c738ea5041aa87b2c9fe4133bb070d2b3aa75108, $__internal_55e96743d6d79abcd9b4a9b9d830012b91cdf4362f4ea1d39ffc14b237620bac)))) {
            // line 19
            echo "<!-- Engineering Navigation -->
<div class=\"engin-nav\">
  <!-- English Version -->
  ";
            // line 22
            if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
                // line 23
                echo "    <h2>工程领域</h2>
  ";
            } else {
                // line 25
                echo "    <h2>Engineering Categories</h2>
  ";
            }
            // line 27
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "enginlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["links"]) {
                // line 28
                echo "      ";
                if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
                    // line 29
                    echo "        <a href=\"../../";
                    echo $this->getAttribute($context["links"], "url_zh", array());
                    echo "\">";
                    echo $this->getAttribute($context["links"], "zh", array());
                    echo "</a>
      ";
                } else {
                    // line 31
                    echo "        <a href=\"../.";
                    echo $this->getAttribute($context["links"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["links"], "en", array());
                    echo "</a>
      ";
                }
                // line 33
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "</div>

";
        }
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  121 => 40,  114 => 34,  108 => 33,  100 => 31,  92 => 29,  89 => 28,  84 => 27,  80 => 25,  76 => 23,  74 => 22,  69 => 19,  67 => 18,  60 => 15,  58 => 14,  55 => 13,  49 => 10,  46 => 9,  43 => 8,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block addcss %}*/
/*   <link href="/user/themes/sinoclean/css/default.css" type="text/css" rel="stylesheet" />*/
/*   {{ header.css }}*/
/* {% endblock %}*/
/* */
/* {% block addjs %}*/
/*   <script src="/user/themes/sinoclean/js/default.js" type="text/javascript" ></script>*/
/*  {{ header.js }}*/
/* {% endblock %}*/
/* */
/* {% block head_img %}*/
/* {% if header.background_pic %}*/
/*   <div class="head_img" style="background: url({{header.background_pic }}) no-repeat center;" >*/
/*   </div>*/
/* {% endif %}*/
/* {% if page.slug starts with 'project' %}*/
/* <!-- Engineering Navigation -->*/
/* <div class="engin-nav">*/
/*   <!-- English Version -->*/
/*   {% if grav.language.getActive == 'zh' %}*/
/*     <h2>工程领域</h2>*/
/*   {% else %}*/
/*     <h2>Engineering Categories</h2>*/
/*   {% endif %}*/
/*   {% for links in config.homepage.enginlinks %}*/
/*       {% if grav.language.getActive == 'zh' %}*/
/*         <a href="../../{{ links.url_zh }}">{{ links.zh }}</a>*/
/*       {% else %}*/
/*         <a href="../.{{ links.url }}">{{ links.en }}</a>*/
/*       {% endif %}*/
/*   {% endfor %}*/
/* </div>*/
/* */
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/*     {{ page.content }}*/
/* {% endblock %}*/
/* */
