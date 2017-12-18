<?php

/* C:\Users\Bayu\Downloads\htdocstemp\agit/themes/rainlab-bonjour/partials/site/meta.htm */
class __TwigTemplate_72567a65ea078de80bec4fcdd9ab57a5d308c74f98cac70d593d3cc10cfba5cc extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
";
        // line 2
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())) {
            // line 3
            echo "    <title>";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())));
            echo " - ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("site.name"));
            echo "</title>
    <meta name=\"title\" content=\"";
            // line 4
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())));
            echo "\">
";
        } else {
            // line 6
            echo "    <title>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
            echo " - ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("site.name"));
            echo "</title>
";
        }
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array())) {
            // line 9
            echo "    <meta name=\"description\" content=\"";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array())));
            echo "\">
";
        }
        // line 11
        echo "<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"OctoberCMS\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\" />
";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "<link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/theme.css"));
        // line 18
        echo "\" rel=\"stylesheet\">";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Bayu\\Downloads\\htdocstemp\\agit/themes/rainlab-bonjour/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  64 => 16,  61 => 15,  57 => 14,  52 => 11,  46 => 9,  44 => 8,  36 => 6,  31 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
{% if this.page.meta_title %}
    <title>{{ this.page.meta_title|_ }} - {{ 'site.name'|_ }}</title>
    <meta name=\"title\" content=\"{{ this.page.meta_title|_ }}\">
{% else %}
    <title>{{ this.page.title }} - {{ 'site.name'|_ }}</title>
{% endif %}
{% if this.page.meta_description %}
    <meta name=\"description\" content=\"{{ this.page.meta_description|_ }}\">
{% endif %}
<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"OctoberCMS\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
{% styles %}
<link href=\"{{ [
    'assets/css/theme.css'
]|theme }}\" rel=\"stylesheet\">", "C:\\Users\\Bayu\\Downloads\\htdocstemp\\agit/themes/rainlab-bonjour/partials/site/meta.htm", "");
    }
}
