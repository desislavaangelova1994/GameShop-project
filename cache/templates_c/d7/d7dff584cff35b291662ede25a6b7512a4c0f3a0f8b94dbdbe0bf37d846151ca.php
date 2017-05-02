<?php

/* form.twig */
class __TwigTemplate_fe6271b6183126680446986a9c3396e0b04a9b1fbdc84820698f9d47caafe63d extends Twig_Template
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
\t<head>
\t\t<title>Form</title>
<!-- \t<script src=\"/js/jquery-3.1.1.min.js\"></script>
\t<script src=\"/js/form.js\"></script> -->
\t</head>
\t<body>
\t\t<form id=\"form\" method=\"post\">
\t\t\t\tName:<input type=\"text\" name=\"myname\" id=\"inputname\" /><br>
\t\t\t\t<input type=\"submit\" name=\"send\" value=\"SEND\" id=\"button\" /><br>
\t\t</form>
\t\t<p id=\"p1\"></p>
\t\t<p id =\"p2\"></p>
\t\t";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
        echo "
\t\t<script src = \"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["jquery"]) ? $context["jquery"] : null), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
        echo "\"></script>
\t\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Form</title>*/
/* <!-- 	<script src="/js/jquery-3.1.1.min.js"></script>*/
/* 	<script src="/js/form.js"></script> -->*/
/* 	</head>*/
/* 	<body>*/
/* 		<form id="form" method="post">*/
/* 				Name:<input type="text" name="myname" id="inputname" /><br>*/
/* 				<input type="submit" name="send" value="SEND" id="button" /><br>*/
/* 		</form>*/
/* 		<p id="p1"></p>*/
/* 		<p id ="p2"></p>*/
/* 		{{ success }}*/
/* 		<script src = "{{jquery}}"></script>*/
/* 		<script src="{{js}}"></script>*/
/* 		</body>*/
/* </html>*/
