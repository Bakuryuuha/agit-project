<?php

/* C:\xampp\htdocs\agit/themes/rainlab-bonjour/pages/video.htm */
class __TwigTemplate_422b0091e59676b670a497149d786d7e68062543f45689aae0e1d6c27d8577c3 extends Twig_Template
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

    <div class=\"text-center\">
        <iframe src=\"https://player.vimeo.com/video/102449697?color=0483d9&title=0&byline=0&portrait=0\" width=\"800\" height=\"450\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\agit/themes/rainlab-bonjour/pages/video.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

    <div class=\"title-area\">
        <h3>{{ this.page.meta_title|_ }}</h3>
    </div>

    <div class=\"text-center\">
        <iframe src=\"https://player.vimeo.com/video/102449697?color=0483d9&title=0&byline=0&portrait=0\" width=\"800\" height=\"450\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

</div>", "C:\\xampp\\htdocs\\agit/themes/rainlab-bonjour/pages/video.htm", "");
    }
}
