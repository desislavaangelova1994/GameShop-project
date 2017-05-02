<?php

/* log1.twig */
class __TwigTemplate_c1d34ba87f16abe9bb11b3e3653ee0cb6244b803851f958b4f6654b3cfe62302 extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"css/login/formstyle.css\">
 \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"css/login/bootstrap.min.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
\t<link href=\"css/login/bootstrap-responsive.min.css\" rel=\"stylesheet\">
\t<title>Welcome</title>
</head>
<body>
<header>
\t<div id=\"headerSection\">
\t\t<div class=\"container\">
\t\t\t
\t\t
\t\t</div>
\t</div>
\t\t
\t</header>
\t<p>Welcome ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo " !</p>
\t<form method=\"post\" action=\"/emptable\">
\t<input type=\"submit\" name=\"showemployee\" value=\"Show employee database\" /><br />
\t</form>

\t<form method=\"post\" action=\"/depttable\">
\t\t<input type=\"submit\" name=\"showdept\" value=\"Show department database\" /><br />
\t</form>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "log1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 21,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<link rel="stylesheet" href="css/login/formstyle.css">*/
/*  	<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 	<link rel="stylesheet" href="css/login/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />*/
/* 	<link href="css/login/bootstrap-responsive.min.css" rel="stylesheet">*/
/* 	<title>Welcome</title>*/
/* </head>*/
/* <body>*/
/* <header>*/
/* 	<div id="headerSection">*/
/* 		<div class="container">*/
/* 			*/
/* 		*/
/* 		</div>*/
/* 	</div>*/
/* 		*/
/* 	</header>*/
/* 	<p>Welcome {{username}} !</p>*/
/* 	<form method="post" action="/emptable">*/
/* 	<input type="submit" name="showemployee" value="Show employee database" /><br />*/
/* 	</form>*/
/* */
/* 	<form method="post" action="/depttable">*/
/* 		<input type="submit" name="showdept" value="Show department database" /><br />*/
/* 	</form>*/
/* */
/* </body>*/
/* </html>*/
