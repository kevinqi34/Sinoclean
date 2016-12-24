<?php

/* homepage.html.twig */
class __TwigTemplate_2996db301f8d3cbd02765645ee43159896681f62f6739bb6da4dae62cf8a5d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "homepage.html.twig", 1);
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
        echo "<link href=\"/user/themes/sinoclean/css/index.css\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 7
    public function block_addjs($context, array $blocks = array())
    {
        // line 8
        echo "<script src=\"/user/themes/sinoclean/js/homepage.js\" type=\"text/javascript\" ></script>
";
    }

    // line 12
    public function block_head_img($context, array $blocks = array())
    {
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "slider", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 14
            echo "    <img id=\"";
            echo $this->getAttribute($context["items"], "id", array());
            echo "\" class=\"background\" src=\"";
            echo $this->getAttribute($context["items"], "url", array());
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "
<div class=\"content-block\">
  <div class=\"content-wrap\">
  ";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 24
            echo "    <a href=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link1", array()), "url_zh", array());
            echo "\">
  ";
        } else {
            // line 26
            echo "    <a href=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link1", array()), "url", array());
            echo "\">
  ";
        }
        // line 28
        echo "    <div class=\"next-block left button\">
    <div class=\"next-block-wrap\">
      ";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 31
            echo "      <h1>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link1", array()), "zh", array());
            echo "</h1>
      ";
        } else {
            // line 33
            echo "      <h1>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link1", array()), "en", array());
            echo "</h1>
      ";
        }
        // line 35
        echo "    </div>
    </div>
    </a>
    <div class=\"next-block right1 right\">
      <div class=\"next-block-wrap\">
      <div class=\"link-wrap\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "enginlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["links"]) {
            // line 42
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
                // line 43
                echo "              <a href=\"";
                echo $this->getAttribute($context["links"], "url_zh", array());
                echo "\">";
                echo $this->getAttribute($context["links"], "zh", array());
                echo "</a>
            ";
            } else {
                // line 45
                echo "              <a href=\"";
                echo $this->getAttribute($context["links"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["links"], "en", array());
                echo "</a>
            ";
            }
            // line 47
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['links'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      </div>
      </div>
    </div>
  </div>
</div>


<div class=\"content-block\">
  <div class=\"content-wrap\">
    <div class=\"next-block left left2\">
      <div class=\"next-block-wrap\">
      <div class=\"txt-block\">
        <img id=\"img-content1\" src=\"";
        // line 60
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "header1", array()), "img", array());
        echo "\" />
        ";
        // line 61
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 62
            echo "        <h2>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "header1", array()), "zh", array());
            echo "</h2>
        ";
        } else {
            // line 64
            echo "        <h2>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "header1", array()), "en", array());
            echo "</h2>
        ";
        }
        // line 66
        echo "      </div>
      <div class=\"txt-block\">
        <img id=\"img-content3\" src=\"";
        // line 68
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "header2", array()), "img", array());
        echo "\" />
        ";
        // line 69
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 70
            echo "        <h2>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "header2", array()), "zh", array());
            echo "</h2>
        ";
        } else {
            // line 72
            echo "        <h2>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "header2", array()), "en", array());
            echo "</h2>
        ";
        }
        // line 74
        echo "      </div>
      </div>
    </div>
    ";
        // line 77
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 78
            echo "      <a href=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link2", array()), "url_zh", array());
            echo "\">
    ";
        } else {
            // line 80
            echo "      <a href=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link2", array()), "url", array());
            echo "\">
    ";
        }
        // line 82
        echo "    <div class=\"next-block right button2\">
    <div class=\"next-block-wrap\">
    ";
        // line 84
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 85
            echo "    <h1>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link2", array()), "zh", array());
            echo "</h1>
    ";
        } else {
            // line 87
            echo "    <h1>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link2", array()), "en", array());
            echo "</h1>
    ";
        }
        // line 89
        echo "    </div>
    </div>
    </a>
  </div>
</div>



<div class=\"content-block\">
  <div class=\"content-wrap\">
  ";
        // line 99
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 100
            echo "    <a href=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link3", array()), "url_zh", array());
            echo "\">
  ";
        } else {
            // line 102
            echo "    <a href=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link3", array()), "url", array());
            echo "\">
  ";
        }
        // line 104
        echo "    <div class=\"next-block left button\">
      <div class=\"next-block-wrap\">
      ";
        // line 106
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 107
            echo "      <h1>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link3", array()), "zh", array());
            echo "</h1>
      ";
        } else {
            // line 109
            echo "      <h1>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "link3", array()), "en", array());
            echo "</h1>
      ";
        }
        // line 111
        echo "      </div>
    </div>
    </a>
    <div class=\"next-block right\">
    <iframe
      width=\"100%\"
      height=\"100%\"
      frameborder=\"0\" style=\"border:0\"
      src=\"https://www.google.com/maps/embed/v1/place?key=AIzaSyAN3hkeeg1tLgPFSwMyF3woo9sPU31wOss
        &q=";
        // line 120
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "homepage", array()), "location", array());
        echo "\" allowfullscreen>
      </iframe>
    </div>
  </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 120,  280 => 111,  274 => 109,  268 => 107,  266 => 106,  262 => 104,  256 => 102,  250 => 100,  248 => 99,  236 => 89,  230 => 87,  224 => 85,  222 => 84,  218 => 82,  212 => 80,  206 => 78,  204 => 77,  199 => 74,  193 => 72,  187 => 70,  185 => 69,  181 => 68,  177 => 66,  171 => 64,  165 => 62,  163 => 61,  159 => 60,  145 => 48,  139 => 47,  131 => 45,  123 => 43,  120 => 42,  116 => 41,  108 => 35,  102 => 33,  96 => 31,  94 => 30,  90 => 28,  84 => 26,  78 => 24,  76 => 23,  71 => 20,  68 => 19,  55 => 14,  50 => 13,  47 => 12,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block addcss %}*/
/* <link href="/user/themes/sinoclean/css/index.css" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block addjs %}*/
/* <script src="/user/themes/sinoclean/js/homepage.js" type="text/javascript" ></script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block head_img %}*/
/*   {% for items in config.homepage.slider %}*/
/*     <img id="{{ items.id }}" class="background" src="{{ items.url }}" />*/
/*   {% endfor %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* <div class="content-block">*/
/*   <div class="content-wrap">*/
/*   {% if grav.language.getActive == 'zh' %}*/
/*     <a href="{{ config.homepage.link1.url_zh }}">*/
/*   {% else %}*/
/*     <a href="{{ config.homepage.link1.url }}">*/
/*   {% endif %}*/
/*     <div class="next-block left button">*/
/*     <div class="next-block-wrap">*/
/*       {% if grav.language.getActive == 'zh' %}*/
/*       <h1>{{ config.homepage.link1.zh }}</h1>*/
/*       {% else %}*/
/*       <h1>{{ config.homepage.link1.en }}</h1>*/
/*       {% endif %}*/
/*     </div>*/
/*     </div>*/
/*     </a>*/
/*     <div class="next-block right1 right">*/
/*       <div class="next-block-wrap">*/
/*       <div class="link-wrap">*/
/*         {% for links in config.homepage.enginlinks %}*/
/*             {% if grav.language.getActive == 'zh' %}*/
/*               <a href="{{ links.url_zh }}">{{ links.zh }}</a>*/
/*             {% else %}*/
/*               <a href="{{ links.url }}">{{ links.en }}</a>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* <div class="content-block">*/
/*   <div class="content-wrap">*/
/*     <div class="next-block left left2">*/
/*       <div class="next-block-wrap">*/
/*       <div class="txt-block">*/
/*         <img id="img-content1" src="{{ config.homepage.header1.img }}" />*/
/*         {% if grav.language.getActive == 'zh' %}*/
/*         <h2>{{ config.homepage.header1.zh }}</h2>*/
/*         {% else %}*/
/*         <h2>{{ config.homepage.header1.en }}</h2>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="txt-block">*/
/*         <img id="img-content3" src="{{ config.homepage.header2.img }}" />*/
/*         {% if grav.language.getActive == 'zh' %}*/
/*         <h2>{{ config.homepage.header2.zh }}</h2>*/
/*         {% else %}*/
/*         <h2>{{ config.homepage.header2.en }}</h2>*/
/*         {% endif %}*/
/*       </div>*/
/*       </div>*/
/*     </div>*/
/*     {% if grav.language.getActive == 'zh' %}*/
/*       <a href="{{ config.homepage.link2.url_zh }}">*/
/*     {% else %}*/
/*       <a href="{{ config.homepage.link2.url }}">*/
/*     {% endif %}*/
/*     <div class="next-block right button2">*/
/*     <div class="next-block-wrap">*/
/*     {% if grav.language.getActive == 'zh' %}*/
/*     <h1>{{ config.homepage.link2.zh }}</h1>*/
/*     {% else %}*/
/*     <h1>{{ config.homepage.link2.en }}</h1>*/
/*     {% endif %}*/
/*     </div>*/
/*     </div>*/
/*     </a>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* */
/* <div class="content-block">*/
/*   <div class="content-wrap">*/
/*   {% if grav.language.getActive == 'zh' %}*/
/*     <a href="{{ config.homepage.link3.url_zh }}">*/
/*   {% else %}*/
/*     <a href="{{ config.homepage.link3.url }}">*/
/*   {% endif %}*/
/*     <div class="next-block left button">*/
/*       <div class="next-block-wrap">*/
/*       {% if grav.language.getActive == 'zh' %}*/
/*       <h1>{{ config.homepage.link3.zh }}</h1>*/
/*       {% else %}*/
/*       <h1>{{ config.homepage.link3.en }}</h1>*/
/*       {% endif %}*/
/*       </div>*/
/*     </div>*/
/*     </a>*/
/*     <div class="next-block right">*/
/*     <iframe*/
/*       width="100%"*/
/*       height="100%"*/
/*       frameborder="0" style="border:0"*/
/*       src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAN3hkeeg1tLgPFSwMyF3woo9sPU31wOss*/
/*         &q={{ config.homepage.location }}" allowfullscreen>*/
/*       </iframe>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
