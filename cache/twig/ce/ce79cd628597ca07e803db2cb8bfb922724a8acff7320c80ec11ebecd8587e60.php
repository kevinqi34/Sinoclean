<?php

/* partials/langswitcher.html.twig */
class __TwigTemplate_71ada6abcdf44da98d902e1fc90491ab0d6a8067bb4f9d5646978dc21cc901ab extends Twig_Template
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
<div class=\"lang\">

<div class=\"wrap\">

";
        // line 6
        $context["langobj"] = $this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array(), "array");
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "languages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 9
            echo "
    ";
            // line 10
            if (($context["key"] == $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "current", array()))) {
                // line 11
                echo "        ";
                $context["lang_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                // line 12
                echo "        ";
                $context["active_class"] = " active";
                // line 13
                echo "    ";
            } else {
                // line 14
                echo "        ";
                $context["lang_url"] = (((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . $this->getAttribute((isset($context["langobj"]) ? $context["langobj"] : null), "getLanguageURLPrefix", array(0 => $context["key"]), "method")) . $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "page_route", array()))) ? ((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . $this->getAttribute((isset($context["langobj"]) ? $context["langobj"] : null), "getLanguageURLPrefix", array(0 => $context["key"]), "method")) . $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "page_route", array()))) : ("/"));
                // line 15
                echo "        ";
                $context["active_class"] = "";
                // line 16
                echo "    ";
            }
            // line 17
            echo "
  <a href=\"";
            // line 18
            echo ((isset($context["lang_url"]) ? $context["lang_url"] : null) . $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "params", array()));
            echo "\" class=\"external";
            echo (isset($context["active_class"]) ? $context["active_class"] : null);
            echo "\">";
            echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($context["key"])));
            echo "</a>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/langswitcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  43 => 12,  40 => 11,  38 => 10,  35 => 9,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* */
/* <div class="lang">*/
/* */
/* <div class="wrap">*/
/* */
/* {% set langobj = grav['language'] %}*/
/* */
/* {% for key in langswitcher.languages %}*/
/* */
/*     {% if key == langswitcher.current %}*/
/*         {% set lang_url = page.url %}*/
/*         {% set active_class = ' active' %}*/
/*     {% else %}*/
/*         {% set lang_url = base_url_simple ~ langobj.getLanguageURLPrefix(key)~langswitcher.page_route ?: '/' %}*/
/*         {% set active_class = '' %}*/
/*     {% endif %}*/
/* */
/*   <a href="{{ lang_url ~ uri.params }}" class="external{{ active_class }}">{{  native_name(key)|capitalize }}</a>*/
/* */
/* {% endfor %}*/
/* </div>*/
/* </div>*/
/* */
