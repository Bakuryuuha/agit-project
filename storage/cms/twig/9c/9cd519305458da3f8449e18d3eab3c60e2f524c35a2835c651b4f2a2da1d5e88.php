<?php

/* C:\xampp\htdocs\agit-project/themes/rainlab-bonjour/pages/messages.htm */
class __TwigTemplate_d0d720bdfe74022f904055b5f76aa0aaab7b1a2ae241d9a487c764955b802c59 extends Twig_Template
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

    <div class=\"messages-list\">
        <div class=\"header\">
            <span class=\"code\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Code"));
        echo "</span>
            <span class=\"value\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["activeLocaleName"] ?? null), "html", null, true);
        echo "</span>
        </div>
        <div class=\"messages\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "                <div class=\"message\">
                    <span class=\"code\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "code", array()), "html", null, true);
            echo "</span>
                    <span class=\"value\">
                        ";
            // line 17
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "content", array())) {
                // line 18
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "content", array()), "html", null, true);
                echo "
                        ";
            } else {
                // line 20
                echo "                            <em>";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Undefined"));
                echo "</em>
                        ";
            }
            // line 22
            echo "                    </span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>

        <div class=\"more-info\">
            <a href=\"javascript:toggleHelp('#messagesHelp')\">
                ";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Instructions for translating these messages"));
        echo "
            </a>
        </div>
    </div>

</div>

";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('help'        );
        // line 37
        echo "    <div id=\"messagesHelp\" class=\"help-popup\">
        <button class=\"setup-close\" type=\"button\" onclick=\"toggleHelp('#messagesHelp')\">&times;</button>
        <div class=\"setup-content\">
            ";
        // line 40
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("messages-help.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 41
        echo "        </div>
    </div>
";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\agit-project/themes/rainlab-bonjour/pages/messages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  103 => 41,  99 => 40,  94 => 37,  92 => 36,  82 => 29,  76 => 25,  68 => 22,  62 => 20,  56 => 18,  54 => 17,  49 => 15,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

    <div class=\"title-area\">
        <h3>{{ this.page.meta_title|_ }}</h3>
    </div>

    <div class=\"messages-list\">
        <div class=\"header\">
            <span class=\"code\">{{ 'Code'|_ }}</span>
            <span class=\"value\">{{ activeLocaleName }}</span>
        </div>
        <div class=\"messages\">
            {% for message in messages %}
                <div class=\"message\">
                    <span class=\"code\">{{ message.code }}</span>
                    <span class=\"value\">
                        {% if message.content %}
                            {{ message.content }}
                        {% else %}
                            <em>{{ 'Undefined'|_ }}</em>
                        {% endif %}
                    </span>
                </div>
            {% endfor %}
        </div>

        <div class=\"more-info\">
            <a href=\"javascript:toggleHelp('#messagesHelp')\">
                {{ 'Instructions for translating these messages'|_ }}
            </a>
        </div>
    </div>

</div>

{% put help %}
    <div id=\"messagesHelp\" class=\"help-popup\">
        <button class=\"setup-close\" type=\"button\" onclick=\"toggleHelp('#messagesHelp')\">&times;</button>
        <div class=\"setup-content\">
            {% content 'messages-help.htm' %}
        </div>
    </div>
{% endput %}", "C:\\xampp\\htdocs\\agit-project/themes/rainlab-bonjour/pages/messages.htm", "");
    }
}
