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
        echo "<div class=\"container\">
    <div id=\"homeGreetings\" class=\"home-greetings\">
        <h1>Hello</h1>
        <h1>Bonjour</h1>
        <h1>Hola</h1>
        <h1>Привет</h1>
        <h1>Hallo</h1>
        <h1>Ahoj</h1>
        <h1>Χαίρετε</h1>
        <h1>Olá</h1>
        <h1>Ciao</h1>
        <h1>Salut</h1>
        <h1>こんにちは</h1>
        <h1>Sveiki</h1>
        <h1>Cześć</h1>
        <h1>Buna</h1>
        <h1>你好</h1>
        <h1>Hallå</h1>
        <h1>Merhaba</h1>
    </div>
</div>

";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 24
        echo "    <script>
        function swap() {
            \$('#homeGreetings h1:visible').each(function(){
                \$(this).fadeOut(500);
                if (\$(this).next().length > 0) \$(this).next().fadeIn(1000);
                else \$('#homeGreetings h1:first').fadeIn(1000)
            });
        }

        \$('#homeGreetings')
            .find('h1:not(:first)')
            .hide()
            .end()
            .addClass('is-loaded');

        setTimeout(function() {
            setInterval(swap, 2000);
        }, 1000)

    </script>
";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
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
        return array (  67 => 23,  45 => 24,  43 => 23,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div id=\"homeGreetings\" class=\"home-greetings\">
        <h1>Hello</h1>
        <h1>Bonjour</h1>
        <h1>Hola</h1>
        <h1>Привет</h1>
        <h1>Hallo</h1>
        <h1>Ahoj</h1>
        <h1>Χαίρετε</h1>
        <h1>Olá</h1>
        <h1>Ciao</h1>
        <h1>Salut</h1>
        <h1>こんにちは</h1>
        <h1>Sveiki</h1>
        <h1>Cześć</h1>
        <h1>Buna</h1>
        <h1>你好</h1>
        <h1>Hallå</h1>
        <h1>Merhaba</h1>
    </div>
</div>

{% put scripts %}
    <script>
        function swap() {
            \$('#homeGreetings h1:visible').each(function(){
                \$(this).fadeOut(500);
                if (\$(this).next().length > 0) \$(this).next().fadeIn(1000);
                else \$('#homeGreetings h1:first').fadeIn(1000)
            });
        }

        \$('#homeGreetings')
            .find('h1:not(:first)')
            .hide()
            .end()
            .addClass('is-loaded');

        setTimeout(function() {
            setInterval(swap, 2000);
        }, 1000)

    </script>
{% endput %}", "C:\\xampp\\htdocs\\agit-project/themes/rainlab-bonjour/pages/home.htm", "");
    }
}
