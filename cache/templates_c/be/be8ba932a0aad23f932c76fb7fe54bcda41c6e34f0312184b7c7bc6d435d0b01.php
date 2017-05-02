<?php

/* Catalog.twig */
class __TwigTemplate_99c6112aa2f3cd61ec1cc75351d5df21484ff2ec36da3d7e0d7d19838bc3092e extends Twig_Template
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
\t<head>
    \t<meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    \t<link rel=\"stylesheet\" href=\"avtomorga/css/bootstrap.min.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
        <link rel=\"stylesheet\" href=\"avtomorga/css/photogallery.css\" type=\"text/css\">
    \t<!-- <link href=\"avtomorga/css/bootstrap-responsive.min.css\" rel=\"stylesheet\"> -->
    \t<!-- <link rel=\"stylesheet\" href=\"avtomorga/login/font-awesome.css\" />
    \t<link rel=\"stylesheet\" href=\"css/login/font-awesome-ie7.css\" /> -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link href=\"avtomorga/css/stylish-portfolio.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    \t
    \t<title>Автоморга Детелина</title>
\t</head>
\t<body>
    ";
        // line 21
        $this->loadTemplate("/common/menu.twig", "Catalog.twig", 21)->display($context);
        // line 22
        echo "    <header id=\"top\" class=\"header\">
        <div class=\"text-vertical-center\">
            <h1>Автоморга Детелина </h1>
            <h3>Авточасти на ниски цени ! </h3>
            <br>
            <a href=\"/avtomorgadetelina\" class=\"btn btn-dark btn-lg\">За Нас</a>
        </div>
    </header>

<body>

<h2>Responsive Image Gallery</h2>
<h4>Resize the browser window to see the effect.</h4>

<div class=\"responsive\">
  <div class=\"img\">
    <a target=\"_blank\" href=\"avtomorga/img/photo1.jpg\">
      <img src=\"avtomorga/img/photo1.jpg\" alt=\"Photo1\" width=\"300\" height=\"200\">
    </a>
    <div class=\"desc\">Add a description of the image here</div>
  </div>
</div>


<div class=\"responsive\">
  <div class=\"img\">
    <a target=\"_blank\" href=\"avtomorga/img/photo2.jpg\">
      <img src=\"avtomorga/img/photo2.jpg\" alt=\"Photo2\" width=\"600\" height=\"400\">
    </a>
    <div class=\"desc\">Add a description of the image here</div>
  </div>
</div>

<div class=\"responsive\">
  <div class=\"img\">
    <a target=\"_blank\" href=\"avtomorga/img/photo3.jpg\">
      <img src=\"avtomorga/img/photo3.jpg\" alt=\"photo3\" width=\"600\" height=\"400\">
    </a>
    <div class=\"desc\">Add a description of the image here</div>
  </div>
</div>

<div class=\"responsive\">
  <div class=\"img\">
    <a target=\"_blank\" href=\"avtomorga/img/photo4.jpg\">
      <img src=\"avtomorga/img/photo4.jpg\" alt=\"photo4\" width=\"600\" height=\"400\">
    </a>
    <div class=\"desc\">Add a description of the image here</div>
  </div>
</div>

<div class=\"clearfix\"></div>

<div style=\"padding:6px;\">
  <p></p>
</div>

</body>

";
        // line 81
        $this->loadTemplate("/common/footer.twig", "Catalog.twig", 81)->display($context);
    }

    public function getTemplateName()
    {
        return "Catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 81,  43 => 22,  41 => 21,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* 	<head>*/
/*     	<meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*     	<link rel="stylesheet" href="avtomorga/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />*/
/*         <link rel="stylesheet" href="avtomorga/css/photogallery.css" type="text/css">*/
/*     	<!-- <link href="avtomorga/css/bootstrap-responsive.min.css" rel="stylesheet"> -->*/
/*     	<!-- <link rel="stylesheet" href="avtomorga/login/font-awesome.css" />*/
/*     	<link rel="stylesheet" href="css/login/font-awesome-ie7.css" /> -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">*/
/*         <link href="avtomorga/css/stylish-portfolio.css" rel="stylesheet">*/
/*         <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">*/
/*     	*/
/*     	<title>Автоморга Детелина</title>*/
/* 	</head>*/
/* 	<body>*/
/*     {% include '/common/menu.twig' %}*/
/*     <header id="top" class="header">*/
/*         <div class="text-vertical-center">*/
/*             <h1>Автоморга Детелина </h1>*/
/*             <h3>Авточасти на ниски цени ! </h3>*/
/*             <br>*/
/*             <a href="/avtomorgadetelina" class="btn btn-dark btn-lg">За Нас</a>*/
/*         </div>*/
/*     </header>*/
/* */
/* <body>*/
/* */
/* <h2>Responsive Image Gallery</h2>*/
/* <h4>Resize the browser window to see the effect.</h4>*/
/* */
/* <div class="responsive">*/
/*   <div class="img">*/
/*     <a target="_blank" href="avtomorga/img/photo1.jpg">*/
/*       <img src="avtomorga/img/photo1.jpg" alt="Photo1" width="300" height="200">*/
/*     </a>*/
/*     <div class="desc">Add a description of the image here</div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* <div class="responsive">*/
/*   <div class="img">*/
/*     <a target="_blank" href="avtomorga/img/photo2.jpg">*/
/*       <img src="avtomorga/img/photo2.jpg" alt="Photo2" width="600" height="400">*/
/*     </a>*/
/*     <div class="desc">Add a description of the image here</div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="responsive">*/
/*   <div class="img">*/
/*     <a target="_blank" href="avtomorga/img/photo3.jpg">*/
/*       <img src="avtomorga/img/photo3.jpg" alt="photo3" width="600" height="400">*/
/*     </a>*/
/*     <div class="desc">Add a description of the image here</div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="responsive">*/
/*   <div class="img">*/
/*     <a target="_blank" href="avtomorga/img/photo4.jpg">*/
/*       <img src="avtomorga/img/photo4.jpg" alt="photo4" width="600" height="400">*/
/*     </a>*/
/*     <div class="desc">Add a description of the image here</div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="clearfix"></div>*/
/* */
/* <div style="padding:6px;">*/
/*   <p></p>*/
/* </div>*/
/* */
/* </body>*/
/* */
/* {% include '/common/footer.twig' %}*/
