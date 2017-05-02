<?php

/* EditDepartment.twig */
class __TwigTemplate_436909b3a73924920a5bc92118382d3523cc8e5eb27cd30639fb25ce43736668 extends Twig_Template
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
        echo "<html>
<head>\t
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"/css/login/formstyle.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/login/bootstrap.min.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
\t\t<link href=\"/css/login/bootstrap-responsive.min.css\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"/css/login/font-awesome.css\">
\t\t<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
\t\t<title>Form</title>
</head>
<body>
\t<form id=\"editdept\" method=\"post\" action=\"/depttable1/";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
    \t  Name: <input type=\"text\" name=\"Name\"><br>
    \t  <input type=\"submit\" value=\"Add\" id=\"button\" /><br>
\t</form>
\t";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
\t<form id=\"goback\" method=\"post\" action=\"/depttable\">
\t\t<input type=\"submit\" value=\"Go back\">
\t</form>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "EditDepartment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  33 => 13,  19 => 1,);
    }
}
/* <html>*/
/* <head>	*/
/* 		<meta charset="utf-8">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 		<link rel="stylesheet" href="/css/login/formstyle.css">*/
/* 		<link rel="stylesheet" href="/css/login/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />*/
/* 		<link href="/css/login/bootstrap-responsive.min.css" rel="stylesheet">*/
/* 		<link rel="stylesheet" href="/css/login/font-awesome.css">*/
/* 		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>*/
/* 		<title>Form</title>*/
/* </head>*/
/* <body>*/
/* 	<form id="editdept" method="post" action="/depttable1/{{id}}">*/
/*     	  Name: <input type="text" name="Name"><br>*/
/*     	  <input type="submit" value="Add" id="button" /><br>*/
/* 	</form>*/
/* 	{{ error }}*/
/* 	<form id="goback" method="post" action="/depttable">*/
/* 		<input type="submit" value="Go back">*/
/* 	</form>*/
/* </body>*/
/* */
/* </html>*/
