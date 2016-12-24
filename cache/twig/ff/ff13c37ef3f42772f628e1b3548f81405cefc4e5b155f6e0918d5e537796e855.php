<?php

/* partials/navigation.html.twig */
class __TwigTemplate_1eda37e72df7f153f4128346ff961dd8edcf2869187908c531656e4795f84c79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"header\">
    <div class=\"wrapper padding\">
        <a href=\"";
        // line 4
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
            <img class=\"header_logo\" src=\"";
        // line 5
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "sinoclean", array()), "top_menu", array()), "img_url", array());
        echo "\" />
        </a>


        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "sinoclean", array()), "top_menu", array()), "menu_items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 10
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
                // line 11
                echo "            <a class=\"right-menu\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo $this->getAttribute($context["items"], "url_zh", array());
                echo "\">";
                echo $this->getAttribute($context["items"], "name_zh", array());
                echo "</a>
          ";
            } else {
                // line 13
                echo "            <a class=\"right-menu\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo $this->getAttribute($context["items"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["items"], "name", array());
                echo "</a>
          ";
            }
            // line 15
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "




        <div class=\"mob-header\">
          <img id=\"mob-nav\" src=\"";
        // line 23
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "sinoclean", array()), "mob_menu", array()), "button", array());
        echo "\"/>
        </div>

        <div class=\"mob-elem\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "sinoclean", array()), "top_menu", array()), "menu_items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 28
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
                // line 29
                echo "            <a class=\"mob-menu-elem\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo $this->getAttribute($context["items"], "url_zh", array());
                echo "\">";
                echo $this->getAttribute($context["items"], "name_zh", array());
                echo "</a>
          ";
            } else {
                // line 31
                echo "            <a class=\"mob-menu-elem\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo $this->getAttribute($context["items"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["items"], "name", array());
                echo "</a>
          ";
            }
            // line 33
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>


    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 34,  109 => 33,  100 => 31,  91 => 29,  88 => 28,  84 => 27,  76 => 23,  68 => 17,  61 => 15,  52 => 13,  43 => 11,  40 => 10,  36 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* */
/* <div class="header">*/
/*     <div class="wrapper padding">*/
/*         <a href="{{ base_url == '' ? '/' : base_url }}">*/
/*             <img class="header_logo" src="{{ theme_url }}{{ config.sinoclean.top_menu.img_url }}" />*/
/*         </a>*/
/* */
/* */
/*         {% for items in config.sinoclean.top_menu.menu_items %}*/
/*           {% if grav.language.getActive == 'zh' %}*/
/*             <a class="right-menu" href="{{ base_url }}{{ items.url_zh }}">{{ items.name_zh }}</a>*/
/*           {% else %}*/
/*             <a class="right-menu" href="{{ base_url }}{{ items.url }}">{{ items.name }}</a>*/
/*           {% endif %}*/
/* */
/*         {% endfor %}*/
/* */
/* */
/* */
/* */
/* */
/*         <div class="mob-header">*/
/*           <img id="mob-nav" src="{{ theme_url }}{{ config.sinoclean.mob_menu.button }}"/>*/
/*         </div>*/
/* */
/*         <div class="mob-elem">*/
/*         {% for items in config.sinoclean.top_menu.menu_items %}*/
/*           {% if grav.language.getActive == "zh" %}*/
/*             <a class="mob-menu-elem" href="{{ base_url }}{{ items.url_zh }}">{{ items.name_zh }}</a>*/
/*           {% else %}*/
/*             <a class="mob-menu-elem" href="{{ base_url }}{{ items.url }}">{{ items.name }}</a>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* </div>*/
/* */
