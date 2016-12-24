<?php

/* partials/base.html.twig */
class __TwigTemplate_1d9ade693176a4c3495c4e8aa11f123632050a855a582c82f79f65a8e0909e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'addcss' => array($this, 'block_addcss'),
            'javascripts' => array($this, 'block_javascripts'),
            'addjs' => array($this, 'block_addjs'),
            'header' => array($this, 'block_header'),
            'head_img' => array($this, 'block_head_img'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "</head>

<body>


<!-- Navigation -->
";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "

<!-- Header Image -->
";
        // line 49
        $this->displayBlock('head_img', $context, $blocks);
        // line 52
        echo "
<!-- Content Body -->
";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "

<!-- Footer -->
";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "


</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/sinoclean_favicon.ico");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "Css", array(), "method");
        echo "
    ";
        // line 20
        $this->displayBlock('addcss', $context, $blocks);
        // line 23
        echo "

    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
        // line 30
        $this->displayBlock('addjs', $context, $blocks);
        // line 33
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/theme.css", 1 => 98), "method");
        // line 18
        echo "    ";
    }

    // line 20
    public function block_addcss($context, array $blocks = array())
    {
        // line 21
        echo "
    ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/theme.js"), "method");
        // line 28
        echo "    ";
    }

    // line 30
    public function block_addjs($context, array $blocks = array())
    {
        // line 31
        echo "
    ";
    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        // line 43
        echo "  ";
        $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "  ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 44)->display($context);
    }

    // line 49
    public function block_head_img($context, array $blocks = array())
    {
        // line 50
        echo "
";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "    <div id=\"body\">";
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
";
    }

    public function block_content($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "  ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 61)->display($context);
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 61,  211 => 60,  200 => 55,  197 => 54,  192 => 50,  189 => 49,  184 => 44,  181 => 43,  178 => 42,  173 => 31,  170 => 30,  166 => 28,  163 => 27,  160 => 26,  157 => 25,  152 => 21,  149 => 20,  145 => 18,  142 => 17,  139 => 16,  133 => 33,  131 => 30,  126 => 29,  124 => 25,  120 => 23,  118 => 20,  113 => 19,  111 => 16,  107 => 15,  103 => 14,  100 => 13,  98 => 12,  87 => 8,  84 => 7,  81 => 6,  72 => 63,  70 => 60,  65 => 57,  63 => 54,  59 => 52,  57 => 49,  52 => 46,  50 => 42,  42 => 36,  40 => 6,  35 => 4,  31 => 2,  29 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* */
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* <head>*/
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/* */
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     {% include 'partials/metadata.html.twig' %}*/
/* */
/*     <link rel="shortcut icon" type="image/x-icon" href="{{ url('theme://images/sinoclean_favicon.ico') }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/*     {% block stylesheets %}*/
/*       {% do assets.addCss('theme://css/theme.css', 98) %}*/
/*     {% endblock %}*/
/*     {{ assets.Css() }}*/
/*     {% block addcss %}*/
/* */
/*     {% endblock %}*/
/* */
/* */
/*     {% block javascripts %}*/
/*         {% do assets.addJs('jquery', 100) %}*/
/*         {% do assets.addJs('theme://js/theme.js') %}*/
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/*     {% block addjs %}*/
/* */
/*     {% endblock %}*/
/* */
/* */
/* {% endblock head%}*/
/* </head>*/
/* */
/* <body>*/
/* */
/* */
/* <!-- Navigation -->*/
/* {% block header %}*/
/*   {% include 'partials/langswitcher.html.twig' %}*/
/*   {% include 'partials/navigation.html.twig' %}*/
/* {% endblock %}*/
/* */
/* */
/* <!-- Header Image -->*/
/* {% block head_img %}*/
/* */
/* {% endblock %}*/
/* */
/* <!-- Content Body -->*/
/* {% block body %}*/
/*     <div id="body">{% block content %}{% endblock %}</div>*/
/* {% endblock %}*/
/* */
/* */
/* <!-- Footer -->*/
/* {% block footer %}*/
/*   {% include 'partials/footer.html.twig' %}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* </body>*/
/* </html>*/
/* */
