<?php

/* login.twig */
class __TwigTemplate_a0b843a82a404873b1e49de15d6f0bfe566e5937f71bfe4d9a58b9084edd4b57 extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"/css/login/font-awesome.css\">
\t<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
\t<title>Form</title>
</head>
\t<body>
\t\t<form method=\"POST\" action=\"/log\">
\t\t\t
\t\t\tИме:<input type=\"text\" name=\"name\" required=\"*\" /><br>
\t\t\tЕГН:<input type=\"text\" name=\"egn\" required=\"*\" /><br>
\t\t\t<input type=\"submit\" name=\"send\" /><br>
\t\t</form>
";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["correct"]) ? $context["correct"] : null), "html", null, true);
        echo "
";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
        echo "
";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 22,  44 => 21,  40 => 20,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 	<link rel="stylesheet" href="/css/login/formstyle.css">*/
/* 	<link rel="stylesheet" href="/css/login/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />*/
/* 	<link href="/css/login/bootstrap-responsive.min.css" rel="stylesheet">*/
/* 	<link rel="stylesheet" href="/css/login/font-awesome.css">*/
/* 	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>*/
/* 	<title>Form</title>*/
/* </head>*/
/* 	<body>*/
/* 		<form method="POST" action="/log">*/
/* 			*/
/* 			Име:<input type="text" name="name" required="*" /><br>*/
/* 			ЕГН:<input type="text" name="egn" required="*" /><br>*/
/* 			<input type="submit" name="send" /><br>*/
/* 		</form>*/
/* {{correct}}*/
/* {{success}}*/
/* {{error}}*/
/* 	</body>*/
/* </html>*/
