<?php

/* partials/footer.html.twig */
class __TwigTemplate_9f92c0cc00ec32af1ab3efffd2161c98ac8613efda4552524aca010f92e0c63a extends Twig_Template
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
        echo "<div class=\"footer\">
";
        // line 2
        if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array()) == "zh")) {
            // line 3
            echo "  <p>";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "sinoclean", array()), "footer_txt_zh", array());
            echo "</p>
";
        } else {
            // line 5
            echo "  <p>";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "sinoclean", array()), "footer_txt", array());
            echo "</p>
";
        }
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="footer">*/
/* {% if grav.language.getActive == 'zh' %}*/
/*   <p>{{ config.sinoclean.footer_txt_zh }}</p>*/
/* {% else %}*/
/*   <p>{{ config.sinoclean.footer_txt }}</p>*/
/* {% endif %}*/
/* </div>*/
/* */
