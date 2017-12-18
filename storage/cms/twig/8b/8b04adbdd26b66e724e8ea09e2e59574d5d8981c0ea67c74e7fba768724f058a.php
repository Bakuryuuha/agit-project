<?php

/* C:\xampp\htdocs\agit-project/themes/rainlab-bonjour/partials/site/navbar.htm */
class __TwigTemplate_0088e2580ffc7f7e6f9d67f9baaf8b0944502a5961532341bdaadaf88cbd267b extends Twig_Template
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
        $context["nav"] = $this;
        // line 2
        echo "
";
        // line 23
        echo "
<nav id=\"layout-nav\" class=\"navbar navbar-light navbar-expand-lg\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">
              <img src=\"/agit-project/themes/rainlab-bonjour/assets/images/agit-logo.png\" alt=\"logo\">
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 33
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["mainMenu"] ?? null), "menuItems", array())) {
            // line 34
            echo "                    ";
            echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->getSourceContext(), ($context["mainMenu"] ?? null), "menuItems", array()));
            echo "
                ";
        }
        // line 36
        echo "            </ul>
            <form class=\"form-inline my-2 ml-3 my-lg-0\">
                ";
        // line 38
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 39
        echo "            </form>
        </div>
    </div>
</nav>";
    }

    // line 3
    public function macro_render_menu($__items__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["nav"] = $this;
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    // line 8
                    echo "            <li role=\"presentation\" class=\"nav-item dropdown ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">
                    ";
                    // line 10
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array())) ? (call_user_func_array($this->env->getFilter('_')->getCallable(), array(("nav." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array()))))) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()))), "html", null, true);
                    echo " <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 13
                    echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array()));
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 17
                    echo "            <li role=\"presentation\" class=\"nav-item ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a class=\"nav-link\" href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array())) ? (call_user_func_array($this->env->getFilter('_')->getCallable(), array(("nav." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array()))))) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()))), "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                // line 21
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\agit-project/themes/rainlab-bonjour/partials/site/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 21,  118 => 18,  111 => 17,  104 => 13,  98 => 10,  94 => 9,  87 => 8,  84 => 7,  80 => 6,  77 => 5,  74 => 4,  62 => 3,  55 => 39,  51 => 38,  47 => 36,  41 => 34,  39 => 33,  30 => 27,  24 => 23,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as nav %}

{% macro render_menu(items) %}
    {% import _self as nav %}

    {% for item in items %}
        {% if item.items %}
            <li role=\"presentation\" class=\"nav-item dropdown {{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                <a href=\"{{ item.url }}\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">
                    {{ item.code ? ('nav.'~item.code)|_ : item.title }} <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    {{ nav.render_menu(item.items) }}
                </ul>
            </li>
        {% else %}
            <li role=\"presentation\" class=\"nav-item {{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                <a class=\"nav-link\" href=\"{{ item.url }}\">{{ item.code ? ('nav.'~item.code)|_ : item.title }}</a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<nav id=\"layout-nav\" class=\"navbar navbar-light navbar-expand-lg\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
              <img src=\"/agit-project/themes/rainlab-bonjour/assets/images/agit-logo.png\" alt=\"logo\">
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"navbar-nav ml-auto\">
                {% if mainMenu.menuItems %}
                    {{ nav.render_menu(mainMenu.menuItems) }}
                {% endif %}
            </ul>
            <form class=\"form-inline my-2 ml-3 my-lg-0\">
                {% component 'localePicker' %}
            </form>
        </div>
    </div>
</nav>", "C:\\xampp\\htdocs\\agit-project/themes/rainlab-bonjour/partials/site/navbar.htm", "");
    }
}
