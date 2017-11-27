<?php

/* C:\xampp\htdocs\agit/themes/rainlab-bonjour/content/static-pages/content-urls.htm */
class __TwigTemplate_f2a1e4b79e1ba0a81426088dd4a00525946968f2b7cb2454c36c46066631119c extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('extraContent'        );
        // line 2
        echo "<p>
    This theme has two layouts that use this component, so to test it out you should enable the setting on the <strong>default.htm</strong> layout and the <strong>content.htm</strong> layout.
</p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\agit/themes/rainlab-bonjour/content/static-pages/content-urls.htm";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put extraContent %}
<p>
    This theme has two layouts that use this component, so to test it out you should enable the setting on the <strong>default.htm</strong> layout and the <strong>content.htm</strong> layout.
</p>
{% endput %}", "C:\\xampp\\htdocs\\agit/themes/rainlab-bonjour/content/static-pages/content-urls.htm", "");
    }
}
