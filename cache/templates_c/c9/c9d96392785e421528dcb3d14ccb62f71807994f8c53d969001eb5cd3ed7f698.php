<?php

/* employeedb.twig */
class __TwigTemplate_b60905145c8bb51ad23fe277165b9ae460d3371cec2bf7a9d5ac375ae8625923 extends Twig_Template
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
<head>  
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"/css/login/formstyle.css\">
        <link rel=\"stylesheet\" href=\"/css/login/bootstrap.min.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\"/>
        <link href=\"/css/login/bootstrap-responsive.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"/css/login/font-awesome.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'>
        <title>Form</title>
</head>
<body>
    <header>
     <div id=\"headerSection\">
        <div class=\"container\">
            <h1 class=\"brand cntr\">Employee Table</h1>
        
        </div>
    </div>
        
    </header>
\t<table>
                                <tr>
                                    <td text-center>Employee ID</td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>Department ID</td>
                                    <td>EGN</td>
                                    <td>            </td>
                                    <td>            </td>
                                </tr>  
                                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 33
            echo "                                <tr>
                                    <td>
                                        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "EmployeeID", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "FirstName", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "LastName", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "DepID", array()), "html", null, true);
            echo "
                                    </td>
                                     <td>
                                        ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "EGN", array()), "html", null, true);
            echo "
                                    </td>
                                     <td>
                                        <a href='/emptable/";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "EmployeeID", array()), "html", null, true);
            echo "'>EDIT</a>
                                    </td>
                                     <td>
                                        <a href='/emptable1/";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "EmployeeID", array()), "html", null, true);
            echo "'>DELETE</a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </table>
<div id=\"addnew\"><a href=\"/emptable1\">Add new...</a></div>
<div><a href=\"/log1\">Go back....</a></div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "employeedb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 57,  96 => 53,  90 => 50,  84 => 47,  78 => 44,  72 => 41,  66 => 38,  60 => 35,  56 => 33,  52 => 32,  19 => 1,);
    }
}
/* <html>*/
/* <head>  */
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link rel="stylesheet" href="/css/login/formstyle.css">*/
/*         <link rel="stylesheet" href="/css/login/bootstrap.min.css" type="text/css" media="screen" charset="utf-8"/>*/
/*         <link href="/css/login/bootstrap-responsive.min.css" rel="stylesheet">*/
/*         <link rel="stylesheet" href="/css/login/font-awesome.css">*/
/*         <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'>*/
/*         <title>Form</title>*/
/* </head>*/
/* <body>*/
/*     <header>*/
/*      <div id="headerSection">*/
/*         <div class="container">*/
/*             <h1 class="brand cntr">Employee Table</h1>*/
/*         */
/*         </div>*/
/*     </div>*/
/*         */
/*     </header>*/
/* 	<table>*/
/*                                 <tr>*/
/*                                     <td text-center>Employee ID</td>*/
/*                                     <td>First Name</td>*/
/*                                     <td>Last Name</td>*/
/*                                     <td>Department ID</td>*/
/*                                     <td>EGN</td>*/
/*                                     <td>            </td>*/
/*                                     <td>            </td>*/
/*                                 </tr>  */
/*                                 {% for row in content %}*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         {{row.EmployeeID}}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         {{row.FirstName}}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         {{row.LastName}}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         {{row.DepID}}*/
/*                                     </td>*/
/*                                      <td>*/
/*                                         {{row.EGN}}*/
/*                                     </td>*/
/*                                      <td>*/
/*                                         <a href='/emptable/{{row.EmployeeID}}'>EDIT</a>*/
/*                                     </td>*/
/*                                      <td>*/
/*                                         <a href='/emptable1/{{row.EmployeeID}}'>DELETE</a>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 {% endfor %}*/
/*     </table>*/
/* <div id="addnew"><a href="/emptable1">Add new...</a></div>*/
/* <div><a href="/log1">Go back....</a></div>*/
/* */
/* </body>*/
/* </html>*/
