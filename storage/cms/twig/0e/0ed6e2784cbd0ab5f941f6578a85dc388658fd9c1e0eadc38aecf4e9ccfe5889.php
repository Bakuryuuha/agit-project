<?php

/* C:\xampp\htdocs\agit-project/themes/rainlab-bonjour/pages/languages.htm */
class __TwigTemplate_f6d15042925e4989ccdd65233e7d3bd711c8a3fd3a5501ac2e91cf25ab74a7ac extends Twig_Template
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
        echo "<div class=\"container\">

    <div class=\"title-area\">
        <h3>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())));
        echo "</h3>
    </div>

    <div class=\"languages-list\">
        <div class=\"languages\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 10
            echo "                <a
                    href=\"javascript:;\"
                    data-request=\"onSwitchLocale\"
                    data-request-data=\"locale: '";
            // line 13
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "'\"
                    class=\"";
            // line 14
            echo (((($context["activeLocale"] ?? null) == $context["code"])) ? ("active") : (""));
            echo "\">
                    <span class=\"code\">";
            // line 15
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "</span>
                    <span class=\"name\">";
            // line 16
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</span>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>

        <div class=\"more-info\">
            <a href=\"javascript:toggleHelp('#localeSetup')\">
                ";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Learn more about setting up languages"));
        echo "
            </a>
        </div>
    </div>
</div>

";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('help'        );
        // line 30
        echo "    <div id=\"localeSetup\" class=\"help-popup\">
        <button class=\"setup-close\" type=\"button\" onclick=\"toggleHelp('#localeSetup')\">&times;</button>
        <div class=\"setup-content\">
            ";
        // line 33
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("locale-setup.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 34
        echo "        </div>
    </div>
";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\agit-project/themes/rainlab-bonjour/pages/languages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  88 => 34,  84 => 33,  79 => 30,  77 => 29,  68 => 23,  62 => 19,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

    <div class=\"title-area\">
        <h3>{{ this.page.meta_title|_ }}</h3>
    </div>

    <div class=\"languages-list\">
        <div class=\"languages\">
            {% for code, name in locales %}
                <a
                    href=\"javascript:;\"
                    data-request=\"onSwitchLocale\"
                    data-request-data=\"locale: '{{ code }}'\"
                    class=\"{{ activeLocale == code ? 'active' }}\">
                    <span class=\"code\">{{ code }}</span>
                    <span class=\"name\">{{ name }}</span>
                </a>
            {% endfor %}
        </div>

        <div class=\"more-info\">
            <a href=\"javascript:toggleHelp('#localeSetup')\">
                {{ 'Learn more about setting up languages'|_ }}
            </a>
        </div>
    </div>
</div>

{% put help %}
    <div id=\"localeSetup\" class=\"help-popup\">
        <button class=\"setup-close\" type=\"button\" onclick=\"toggleHelp('#localeSetup')\">&times;</button>
        <div class=\"setup-content\">
            {% content 'locale-setup.htm' %}
        </div>
    </div>
{% endput %}", "C:\\xampp\\htdocs\\agit-project/themes/rainlab-bonjour/pages/languages.htm", "");
    }
}
