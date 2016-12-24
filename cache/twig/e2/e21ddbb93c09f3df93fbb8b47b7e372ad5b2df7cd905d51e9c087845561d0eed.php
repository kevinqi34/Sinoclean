<?php

/* engineering.html.twig */
class __TwigTemplate_bb42a0a451492858f5d3751ae577462aec6d1bbfe07561a6e3afa0794b265c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "engineering.html.twig", 1);
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
        echo "<link href=\"/user/themes/sinoclean/css/default.css\" type=\"text/css\" rel=\"stylesheet\" />
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
        echo "<script src=\"/user/themes/sinoclean/js/default.js\" type=\"text/javascript\" ></script>
";
        // line 10
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "js", array());
        echo "
";
    }

    // line 14
    public function block_head_img($context, array $blocks = array())
    {
        // line 15
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "background_pic", array())) {
            // line 16
            echo "  <div class=\"head_img\" style=\"background: url(";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "background_pic", array());
            echo ") no-repeat center;\" >
  </div>
";
        }
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "


    <!-- Projects -->

    <div class=\"engin_fields\">
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 31
            echo "      <a href=\"./";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "slug", array());
            echo "/";
            echo $this->getAttribute($context["p"], "slug", array());
            echo "\">
      <div class=\"button_field\">
        <div class=\"img\">
        <img src=\"";
            // line 34
            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "content_img", array());
            echo "\" />
        </div>
        <h3>";
            // line 36
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h3>
      </div>
      </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "


    </div>

";
    }

    public function getTemplateName()
    {
        return "engineering.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  100 => 36,  95 => 34,  86 => 31,  82 => 30,  72 => 24,  69 => 23,  60 => 16,  58 => 15,  55 => 14,  49 => 10,  46 => 9,  43 => 8,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block addcss %}*/
/* <link href="/user/themes/sinoclean/css/default.css" type="text/css" rel="stylesheet" />*/
/* {{ header.css }}*/
/* {% endblock %}*/
/* */
/* {% block addjs %}*/
/* <script src="/user/themes/sinoclean/js/default.js" type="text/javascript" ></script>*/
/* {{ header.js }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block head_img %}*/
/* {% if header.background_pic %}*/
/*   <div class="head_img" style="background: url({{header.background_pic }}) no-repeat center;" >*/
/*   </div>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block content %}*/
/*     {{ page.content }}*/
/* */
/* */
/*     <!-- Projects -->*/
/* */
/*     <div class="engin_fields">*/
/*       {% for p in page.collection %}*/
/*       <a href="./{{ header.slug }}/{{ p.slug }}">*/
/*       <div class="button_field">*/
/*         <div class="img">*/
/*         <img src="{{ p.header.content_img }}" />*/
/*         </div>*/
/*         <h3>{{ p.title }}</h3>*/
/*       </div>*/
/*       </a>*/
/*       {% endfor %}*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
