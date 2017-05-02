<?php

/* welcome.twig */
class __TwigTemplate_c6148391d522068a699c1172780051c513abf687a20d97978b3e152725031097 extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"css/formstyle.css\">
\t<title>Welcome</title>
</head>
<body>
<header>
</header>
\t<p>Welcome </p> ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "

<footer>
\t<p>copyright</p>
</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<link rel="stylesheet" href="css/formstyle.css">*/
/* 	<title>Welcome</title>*/
/* </head>*/
/* <body>*/
/* <header>*/
/* </header>*/
/* 	<p>Welcome </p> {{ user }}*/
/* */
/* <footer>*/
/* 	<p>copyright</p>*/
/* </footer>*/
/* </body>*/
/* </html>*/
