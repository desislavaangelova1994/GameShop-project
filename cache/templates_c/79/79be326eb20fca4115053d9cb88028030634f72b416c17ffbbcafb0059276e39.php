<?php

/* departmentdb.twig */
class __TwigTemplate_0e69d8853dfd09efd5db5965b41383ff302e6a98187ebca18489ad48d1243a36 extends Twig_Template
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
\t<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
\t<title>Welcome</title>
</head>
<body>
    <header>
        <div id=\"headerSection\">
            <div class=\"container\">
                <h1 class=\"brand cntr\">Department Table</h1>
            </div>
        </div>
    </header>
\t    <table>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>  </td>
                                    <td>  </td>
                                </tr>  
                                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 28
            echo "                                <tr>
                                    <td>
                                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ID", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "Name", array()), "html", null, true);
            echo "
                                    </td>
                                     <td>
                                        <a href='/depttable/";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ID", array()), "html", null, true);
            echo "'>EDIT</a>
                                    </td>
                                     <td>
                                        <a href='/depttable1/";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ID", array()), "html", null, true);
            echo "'>DELETE</a>
                                     </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </table>
<div id=\"addnew\"><a href=\"/depttableadd\">Add new...</a></div>
<div><a href=\"/log1\">Go Back ....</a></div>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "departmentdb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 43,  73 => 39,  67 => 36,  61 => 33,  55 => 30,  51 => 28,  47 => 27,  19 => 1,);
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
/* 	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>*/
/* 	<title>Welcome</title>*/
/* </head>*/
/* <body>*/
/*     <header>*/
/*         <div id="headerSection">*/
/*             <div class="container">*/
/*                 <h1 class="brand cntr">Department Table</h1>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* 	    <table>*/
/*                                 <tr>*/
/*                                     <td>ID</td>*/
/*                                     <td>Name</td>*/
/*                                     <td>  </td>*/
/*                                     <td>  </td>*/
/*                                 </tr>  */
/*                                 {% for row in content %}*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         {{row.ID}}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         {{row.Name}}*/
/*                                     </td>*/
/*                                      <td>*/
/*                                         <a href='/depttable/{{row.ID}}'>EDIT</a>*/
/*                                     </td>*/
/*                                      <td>*/
/*                                         <a href='/depttable1/{{row.ID}}'>DELETE</a>*/
/*                                      </td>*/
/*                                 </tr>*/
/*                                 {% endfor %}*/
/*         </table>*/
/* <div id="addnew"><a href="/depttableadd">Add new...</a></div>*/
/* <div><a href="/log1">Go Back ....</a></div>*/
/* */
/* */
/* </body>*/
/* </html>*/
