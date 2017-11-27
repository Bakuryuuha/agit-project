<?php

/* C:\xampp\htdocs\agit/themes/rainlab-bonjour/content/static-pages/content-pages.htm */
class __TwigTemplate_f7d44c12dea8507ead11ced5ce89615af0f5243e55b6a20cf1860c427692f7e6 extends Twig_Template
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
        echo "<p>When editing this page you should notice a second tab called <strong>Extra content</strong>, that's where this content is sourced from. It can be translated just like any other content!​</p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\agit/themes/rainlab-bonjour/content/static-pages/content-pages.htm";
    }

    public function getDebugInfo()
    {
        return array (  24 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put extraContent %}
<p>When editing this page you should notice a second tab called <strong>Extra content</strong>, that's where this content is sourced from. It can be translated just like any other content!​</p>
{% endput %}", "C:\\xampp\\htdocs\\agit/themes/rainlab-bonjour/content/static-pages/content-pages.htm", "");
    }
}
