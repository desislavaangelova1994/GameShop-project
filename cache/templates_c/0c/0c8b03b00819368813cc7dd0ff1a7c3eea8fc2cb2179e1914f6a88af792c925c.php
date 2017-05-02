<?php

/* AddEmployee.twig */
class __TwigTemplate_caf918b2de93ba7222395186ed87cd5d1aade7d8c3b543c3470e5149fa82b7aa extends Twig_Template
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
\t<form id=\"addemployee\" method=\"post\" action=\"/ok\">
    \tFirst name: * <input type=\"text\" name=\"FirstName\" required=\"*\"><br>
    \tLast name: * <input type=\"text\" name=\"LastName\" required=\"*\"><br>
    \tDepartment ID:* <select value=\"Department\" name=\"DepID\">
\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Name"]) ? $context["Name"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 18
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "Name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "Name", array()), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</select><br>
    \tEGN : * <input type=\"text\" name=\"EGN\" maxlength=\"10\" required=\"*\"><br>
    \t<button type=\"submit\">Submit</button>
\t</form>
\t
\t<form id=\"goback\" method=\"post\" action=\"/emptable\">
\t<input type=\"submit\" name=\"GoBack\" value=\"GO BACK\">
\t</form>
\t";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
\t";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "AddEmployee.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 29,  62 => 28,  52 => 20,  41 => 18,  37 => 17,  19 => 1,);
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
/* 	<form id="addemployee" method="post" action="/ok">*/
/*     	First name: * <input type="text" name="FirstName" required="*"><br>*/
/*     	Last name: * <input type="text" name="LastName" required="*"><br>*/
/*     	Department ID:* <select value="Department" name="DepID">*/
/* 		{% for row in Name %}*/
/* 			<option value="{{row.Name}}">{{row.Name}}</option>*/
/* 		{% endfor %}*/
/* 		</select><br>*/
/*     	EGN : * <input type="text" name="EGN" maxlength="10" required="*"><br>*/
/*     	<button type="submit">Submit</button>*/
/* 	</form>*/
/* 	*/
/* 	<form id="goback" method="post" action="/emptable">*/
/* 	<input type="submit" name="GoBack" value="GO BACK">*/
/* 	</form>*/
/* 	{{ error }}*/
/* 	{{ content }}*/
/* </body>*/
/* */
/* </html>*/
