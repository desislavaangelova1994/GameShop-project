<?php

/* /Library/common/header.twig */
class __TwigTemplate_0a4ea53389301c0e93874ead725b65a37e127095bed8c4c23fb50cdc1402838b extends Twig_Template
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
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Library Management\">
    <meta name=\"author\" content=\"Desislava Angelova\">

    <title>Library Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"/Library/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"/Library/css/form.css\" rel=\"stylesheet\">

    <!--FONTS-->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]> -->
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <!-- <![endif] -->

</head>

<body>

    ";
        // line 35
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "admin", array()) == true)) {
            // line 36
            echo "     <!-- Navigation -->
    <nav class=\"navbar navbar-inverse\" role=\"navigation\" >
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/adminpanel\">Library Management</a>
                </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Add
                    <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/adduser\">Add User</a></li>
                            <li><a href=\"/addbook\">Add Book</a></li>
                            <!-- <li><a href=\"#\">Add Category</a></li> -->
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Manage
                    <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/users/1\">Users</a></li>
                            <li><a href=\"/books/1\">Books</a></li>
                            <!-- <li><a href=\"#\">Categories</a></li> -->
                        </ul>
                    </li>
                    <li><a href=\"/logout\">Logout</a></li>
                    </ul>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    ";
        }
        // line 77
        echo "
";
    }

    public function getTemplateName()
    {
        return "/Library/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 77,  57 => 36,  55 => 35,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="Library Management">*/
/*     <meta name="author" content="Desislava Angelova">*/
/* */
/*     <title>Library Management System</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="/Library/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="/Library/css/form.css" rel="stylesheet">*/
/* */
/*     <!--FONTS-->*/
/*     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">*/
/*     <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!-- [if lt IE 9]> -->*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <!-- <![endif] -->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     {% if session.admin == true %}*/
/*      <!-- Navigation -->*/
/*     <nav class="navbar navbar-inverse" role="navigation" >*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="/adminpanel">Library Management</a>*/
/*                 </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Add*/
/*                     <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="/adduser">Add User</a></li>*/
/*                             <li><a href="/addbook">Add Book</a></li>*/
/*                             <!-- <li><a href="#">Add Category</a></li> -->*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage*/
/*                     <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="/users/1">Users</a></li>*/
/*                             <li><a href="/books/1">Books</a></li>*/
/*                             <!-- <li><a href="#">Categories</a></li> -->*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li><a href="/logout">Logout</a></li>*/
/*                     </ul>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/*     {% endif %}*/
/* */
/* */
