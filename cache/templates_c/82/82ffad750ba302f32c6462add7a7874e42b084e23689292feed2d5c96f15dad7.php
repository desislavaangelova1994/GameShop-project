<?php

/* EditEmployee.twig */
class __TwigTemplate_f22fdafe11949905076491910244d23a9cc0fd04e6565e1f61ff55df47c78371 extends Twig_Template
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
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"/css/login/formstyle.css\">
\t<link rel=\"stylesheet\" href=\"/css/login/bootstrap.min.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
\t<link href=\"/css/login/bootstrap-responsive.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"/css/login/font-awesome.css\">
\t<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
\t<title>Form</title>
</head>
<body>
 <header>
     <div id=\"headerSection\">
       <div class=\"container\">
               
       </div>
    </div>
 </header>
\t<form method=\"post\" action=\"/emptable2/";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["emp_id"]) ? $context["emp_id"] : null), "html", null, true);
        echo "\">
\t  \tFirst name:* <input type=\"text\" name=\"FirstName\" required=\"*\" ><br>
\t  \tLast name:* <input type=\"text\" name=\"LastName\" required=\"*\"><br>
 \t \tDepartment ID:* <select value=\"Department\" name=\"DepID\">
\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Name"]) ? $context["Name"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
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
        // line 27
        echo "\t\t</select><br>

\t  \tEGN : *<input type=\"text\" name=\"EGN\" maxlength=\"10\" required=\"*\"><br>
\t  \t<input type=\"submit\" value=\"Add\" id=\"button\" /><br>
\t</form>
\t";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
\t<form id=\"goback\" method=\"post\" action=\"/emptable\">
\t<input type=\"submit\" name=\"GoBack\" value=\"GO BACK\">
\t</form>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "EditEmployee.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 32,  62 => 27,  51 => 25,  47 => 24,  40 => 20,  19 => 1,);
    }
}
/* <html>*/
/* <head>	*/
/* 	<meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 	<link rel="stylesheet" href="/css/login/formstyle.css">*/
/* 	<link rel="stylesheet" href="/css/login/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />*/
/* 	<link href="/css/login/bootstrap-responsive.min.css" rel="stylesheet">*/
/* 	<link rel="stylesheet" href="/css/login/font-awesome.css">*/
/* 	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>*/
/* 	<title>Form</title>*/
/* </head>*/
/* <body>*/
/*  <header>*/
/*      <div id="headerSection">*/
/*        <div class="container">*/
/*                */
/*        </div>*/
/*     </div>*/
/*  </header>*/
/* 	<form method="post" action="/emptable2/{{emp_id}}">*/
/* 	  	First name:* <input type="text" name="FirstName" required="*" ><br>*/
/* 	  	Last name:* <input type="text" name="LastName" required="*"><br>*/
/*  	 	Department ID:* <select value="Department" name="DepID">*/
/* 		{% for row in Name %}*/
/* 			<option value="{{row.Name}}">{{row.Name}}</option>*/
/* 		{% endfor %}*/
/* 		</select><br>*/
/* */
/* 	  	EGN : *<input type="text" name="EGN" maxlength="10" required="*"><br>*/
/* 	  	<input type="submit" value="Add" id="button" /><br>*/
/* 	</form>*/
/* 	{{ error }}*/
/* 	<form id="goback" method="post" action="/emptable">*/
/* 	<input type="submit" name="GoBack" value="GO BACK">*/
/* 	</form>*/
/* </body>*/
/* */
/* </html>*/
/* */
