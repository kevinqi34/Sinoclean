<?php

/* news.html.twig */
class __TwigTemplate_9af5a8229f631fa31c760a0811cdd9999e4e052f135a21c9e864b6ef54f60a20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "news.html.twig", 1);
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
<link href=\"/user/themes/sinoclean/css/news.css\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 8
    public function block_addjs($context, array $blocks = array())
    {
        // line 9
        echo "<script src=\"/user/themes/sinoclean/js/news.js\" type=\"text/javascript\" ></script>
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
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
  ";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 25
            echo "  <h1>新闻中心</h1>
  ";
        } else {
            // line 27
            echo "  <h1>News</h1>
  ";
        }
        // line 29
        echo "  <hr>
  ";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 31
            echo "  <h2>企业动态</h2>
  ";
        } else {
            // line 33
            echo "  <h2>Company News<h2>
  ";
        }
        // line 35
        echo "

  <div class=\"wrap_news\">
  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 39
            echo "  ";
            if (($this->getAttribute($this->getAttribute($context["p"], "header", array()), "type", array()) == "Company")) {
                // line 40
                echo "  <a href=\"./news/";
                echo $this->getAttribute($context["p"], "slug", array());
                echo "\">
  <div class=\"news_post\">
  <div class=\"news_img\">
  <img src=\"";
                // line 43
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "content_img", array());
                echo "\" />
  </div>
  ";
                // line 45
                if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
                    // line 46
                    echo "  <p>日期: ";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "date", array());
                    echo "</p>
  ";
                } else {
                    // line 48
                    echo "  <p>Date: ";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "date", array());
                    echo "</p>
  ";
                }
                // line 50
                echo "  <h3>";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</h3>
  </div>
  </a>
  ";
            }
            // line 54
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  </div>

  ";
        // line 57
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 58
            echo "  <h2>行业动态</h2>
  ";
        } else {
            // line 60
            echo "  <h2>Industry News<h2>
  ";
        }
        // line 62
        echo "
  <div class=\"wrap_news\">
  ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 65
            echo "  ";
            if (($this->getAttribute($this->getAttribute($context["p"], "header", array()), "type", array()) == "Industry")) {
                // line 66
                echo "  <a href=\"./news/";
                echo $this->getAttribute($context["p"], "slug", array());
                echo "\">
  <div class=\"news_post\">
  <div class=\"news_img\">
  <img src=\"";
                // line 69
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "content_img", array());
                echo "\" />
  </div>
  ";
                // line 71
                if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
                    // line 72
                    echo "  <p>日期: ";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "date", array());
                    echo "</p>
  ";
                } else {
                    // line 74
                    echo "  <p>Date: ";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "date", array());
                    echo "</p>
  ";
                }
                // line 76
                echo "
  <h3>";
                // line 77
                echo $this->getAttribute($context["p"], "title", array());
                echo "</h3>


  </div>
  ";
            }
            // line 82
            echo "  </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "  </div>




";
    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 84,  205 => 82,  197 => 77,  194 => 76,  188 => 74,  182 => 72,  180 => 71,  175 => 69,  168 => 66,  165 => 65,  161 => 64,  157 => 62,  153 => 60,  149 => 58,  147 => 57,  143 => 55,  137 => 54,  129 => 50,  123 => 48,  117 => 46,  115 => 45,  110 => 43,  103 => 40,  100 => 39,  96 => 38,  91 => 35,  87 => 33,  83 => 31,  81 => 30,  78 => 29,  74 => 27,  70 => 25,  68 => 24,  65 => 23,  62 => 22,  53 => 15,  51 => 14,  48 => 13,  43 => 9,  40 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block addcss %}*/
/* <link href="/user/themes/sinoclean/css/default.css" type="text/css" rel="stylesheet" />*/
/* <link href="/user/themes/sinoclean/css/news.css" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block addjs %}*/
/* <script src="/user/themes/sinoclean/js/news.js" type="text/javascript" ></script>*/
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
/* */
/*   {% if grav.language.getActive == 'zh' %}*/
/*   <h1>新闻中心</h1>*/
/*   {% else %}*/
/*   <h1>News</h1>*/
/*   {% endif %}*/
/*   <hr>*/
/*   {% if grav.language.getActive == 'zh' %}*/
/*   <h2>企业动态</h2>*/
/*   {% else %}*/
/*   <h2>Company News<h2>*/
/*   {% endif %}*/
/* */
/* */
/*   <div class="wrap_news">*/
/*   {% for p in page.collection %}*/
/*   {% if p.header.type == "Company" %}*/
/*   <a href="./news/{{ p.slug }}">*/
/*   <div class="news_post">*/
/*   <div class="news_img">*/
/*   <img src="{{ p.header.content_img }}" />*/
/*   </div>*/
/*   {% if grav.language.getActive == 'zh' %}*/
/*   <p>日期: {{ p.header.date }}</p>*/
/*   {% else %}*/
/*   <p>Date: {{ p.header.date }}</p>*/
/*   {% endif %}*/
/*   <h3>{{ p.title }}</h3>*/
/*   </div>*/
/*   </a>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/*   </div>*/
/* */
/*   {% if grav.language.getActive == 'zh' %}*/
/*   <h2>行业动态</h2>*/
/*   {% else %}*/
/*   <h2>Industry News<h2>*/
/*   {% endif %}*/
/* */
/*   <div class="wrap_news">*/
/*   {% for p in page.collection %}*/
/*   {% if p.header.type == "Industry" %}*/
/*   <a href="./news/{{ p.slug }}">*/
/*   <div class="news_post">*/
/*   <div class="news_img">*/
/*   <img src="{{ p.header.content_img }}" />*/
/*   </div>*/
/*   {% if grav.language.getActive == 'zh' %}*/
/*   <p>日期: {{ p.header.date }}</p>*/
/*   {% else %}*/
/*   <p>Date: {{ p.header.date }}</p>*/
/*   {% endif %}*/
/* */
/*   <h3>{{ p.title }}</h3>*/
/* */
/* */
/*   </div>*/
/*   {% endif %}*/
/*   </a>*/
/*   {% endfor %}*/
/*   </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
