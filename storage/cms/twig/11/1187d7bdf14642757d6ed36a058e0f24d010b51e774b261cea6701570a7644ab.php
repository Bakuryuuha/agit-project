<?php

/* C:\xampp\htdocs\agit-project/themes/sunilchaulagain-ramro/layouts/default.htm */
class __TwigTemplate_4cdfca9eac952a55c4420fc9f434f353bcf872fa09e4de1d66dd5a8e43e1cab7 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/apple-icon.png");
        echo "\">
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.png");
        echo "\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t<title>Landing Page - Ramro Theme by Creative Tim</title>

\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

\t<!--     Fonts and icons     -->
\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" />
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" />

\t<!-- CSS Files -->
    <link href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/material-kit.css"));
        // line 22
        echo "\" rel=\"stylesheet\">

</head>

<body class=\"landing-page\">
    
    ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "
    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
\t<div class=\"main main-raised\">
\t\t<div class=\"container\">
\t    \t";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 35
        echo "        </div>
\t</div>
\t
    ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "\t    

\t</div>
</body>

\t<!--   Core JS Files   -->
\t
\t<script src=\"";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery.min.js", 1 => "assets/js/bootstrap.min.js", 2 => "assets/js/material.min.js", 3 => "assets/js/nouislider.min.js", 4 => "assets/js/bootstrap-datepicker.js", 5 => "assets/js/material-kit.js"));
        // line 53
        echo "\"></script> 

        ";
        // line 55
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 56
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 57
        echo "        

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\agit-project/themes/sunilchaulagain-ramro/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 57,  104 => 56,  97 => 55,  93 => 53,  91 => 46,  82 => 39,  78 => 38,  73 => 35,  71 => 34,  66 => 31,  62 => 30,  59 => 29,  55 => 28,  47 => 22,  45 => 19,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ 'assets/images/apple-icon.png'|theme }}\">
\t<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon.png'|theme }}\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t<title>Landing Page - Ramro Theme by Creative Tim</title>

\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

\t<!--     Fonts and icons     -->
\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" />
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" />

\t<!-- CSS Files -->
    <link href=\"{{ [
            'assets/css/bootstrap.min.css',
            'assets/css/material-kit.css',
        ]|theme }}\" rel=\"stylesheet\">

</head>

<body class=\"landing-page\">
    
    {% partial 'Menu' %}

    {% partial 'Header' %}

\t<div class=\"main main-raised\">
\t\t<div class=\"container\">
\t    \t{% page %}
        </div>
\t</div>
\t
    {% partial 'Footer' %}
\t    

\t</div>
</body>

\t<!--   Core JS Files   -->
\t
\t<script src=\"{{ [
            'assets/js/jquery.min.js',
            'assets/js/bootstrap.min.js',
            'assets/js/material.min.js',
            'assets/js/nouislider.min.js',
            'assets/js/bootstrap-datepicker.js',
            'assets/js/material-kit.js'
        ]|theme }}\"></script> 

        {% framework extras %}
        {% scripts %}
        

</html>", "C:\\xampp\\htdocs\\agit-project/themes/sunilchaulagain-ramro/layouts/default.htm", "");
    }
}
