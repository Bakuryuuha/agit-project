<?php

/* C:\xampp\htdocs\agit-project/themes/rainlab-bonjour/layouts/master.htm */
class __TwigTemplate_825aea2119d4aa077128ad845ce252f4fdd0b78ab156365825dce359975397cc extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>
        ";
        // line 7
        $context["hasChildren"] = twig_get_attribute($this->env, $this->getSourceContext(), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticPage"] ?? null), "parent", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticPage"] ?? null), "parent", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticPage"] ?? null), "page", array()))), "children", array());
        // line 8
        echo "
        <!-- Header -->
        <header id=\"layout-header\">
          <div class=\"container p-0\">
            <div class=\"navbar navbar-top\">
              <div class=\"mr-auto\">
                  <a class=\"nav-lang mr-2\" href=\"#\">English</a> | <a class=\"nav-lang ml-2\" href=\"#\">Indonesia</a>
              </div>
              <form class=\"form-inline\">
                <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn my-2 my-sm-0\" type=\"submit\"><i class=\"fa fa-search fa-fw\"></i></button>
              </form>
            </div>
          </div>
        </header>

        <!-- Nav -->
        ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "
        <!-- Content -->
        ";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 29
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "
        <!-- Help Popups -->
        ";
        // line 32
        $context['__placeholder_help_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('help', $context['__placeholder_help_default_contents']);
        unset($context['__placeholder_help_default_contents']);        // line 33
        echo "
        <!-- Scripts -->
        ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "
        <footer>

        </footer>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\agit-project/themes/rainlab-bonjour/layouts/master.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 36,  78 => 35,  74 => 33,  72 => 32,  68 => 30,  63 => 29,  61 => 28,  57 => 26,  53 => 25,  34 => 8,  32 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body>
        {% set hasChildren = (staticPage.parent ?: staticPage.page).children %}

        <!-- Header -->
        <header id=\"layout-header\">
          <div class=\"container p-0\">
            <div class=\"navbar navbar-top\">
              <div class=\"mr-auto\">
                  <a class=\"nav-lang mr-2\" href=\"#\">English</a> | <a class=\"nav-lang ml-2\" href=\"#\">Indonesia</a>
              </div>
              <form class=\"form-inline\">
                <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn my-2 my-sm-0\" type=\"submit\"><i class=\"fa fa-search fa-fw\"></i></button>
              </form>
            </div>
          </div>
        </header>

        <!-- Nav -->
        {% partial 'site/navbar' %}

        <!-- Content -->
        {% page %}
        {% partial 'site/footer' %}

        <!-- Help Popups -->
        {% placeholder help ignore=true %}

        <!-- Scripts -->
        {% partial 'site/scripts' %}

        <footer>

        </footer>
    </body>
</html>", "C:\\xampp\\htdocs\\agit-project/themes/rainlab-bonjour/layouts/master.htm", "");
    }
}
