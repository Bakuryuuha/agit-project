<?php

/* C:\xampp\htdocs\agit-project/themes/rainlab-bonjour/pages/home.htm */
class __TwigTemplate_b4a5121f267f54896617d3685f6b62cecff8c8e8382e2c3ee55ae031255971a1 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/1-Landing"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/2-Offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Home/3-News"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\agit-project/themes/rainlab-bonjour/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial \"Home/1-Landing\" %}
{% partial \"Home/2-Offer\" %}
{% partial \"Home/3-News\" %}", "C:\\xampp\\htdocs\\agit-project/themes/rainlab-bonjour/pages/home.htm", "");
    }
}
