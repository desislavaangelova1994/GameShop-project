<?php

/* department.twig */
class __TwigTemplate_9a33377fba4d9ec50f8ff89187a6e78135082cb627e17e6269dd838e912d26d5 extends Twig_Template
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
\t<meta charset=\"utf-8\">
 \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
 \t<link rel=\"stylesheet\" href=\"/css/login/formstyle.css\">
\t<link rel=\"stylesheet\" href=\"/css/login/bootstrap.min.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
\t<link href=\"/css/login/bootstrap-responsive.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"/css/login/font-awesome.min.css\">
\t<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
\t<title>Welcome</title>
</head>
<body>
\t<p>Welcome ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo " </p>
\t<form id=\"form\" method=\"post\" action=\"/department\">
\t\tDepartment:<input type=\"text\" name=\"depvalue\" id=\"inputname\" placeholder = \"Add new department...\" /><br>
\t\t<input type=\"submit\" name=\"Add\" value=\"Add\" id=\"button\" /><br>
\t</form>
\t";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
        echo "

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "department.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  34 => 14,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/*  	<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*  	<link rel="stylesheet" href="/css/login/formstyle.css">*/
/* 	<link rel="stylesheet" href="/css/login/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />*/
/* 	<link href="/css/login/bootstrap-responsive.min.css" rel="stylesheet">*/
/* 	<link rel="stylesheet" href="/css/login/font-awesome.min.css">*/
/* 	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>*/
/* 	<title>Welcome</title>*/
/* </head>*/
/* <body>*/
/* 	<p>Welcome {{username}} </p>*/
/* 	<form id="form" method="post" action="/department">*/
/* 		Department:<input type="text" name="depvalue" id="inputname" placeholder = "Add new department..." /><br>*/
/* 		<input type="submit" name="Add" value="Add" id="button" /><br>*/
/* 	</form>*/
/* 	{{ error }}{{ success }}*/
/* */
/* </body>*/
/* </html>*/
