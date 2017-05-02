<?php

/* userlogin.twig */
class __TwigTemplate_91a167a268562b86515bfa853f112af7947505ed6a02f55c396211674fda5206 extends Twig_Template
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
\t<head>\t
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"css/login/formstyle.css\">
\t\t<link rel=\"stylesheet\" href=\"css/login/bootstrap.min.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
\t\t<link href=\"css/login/bootstrap-responsive.min.css\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" href=\"css/login/font-awesome.css\">
\t\t<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
\t\t<title>Form</title>

\t</head>

\t<body data-spy=\"scroll\" data-target=\".navbar\">
\t<header>
\t<div id=\"headerSection\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"brand cntr\">Contact Form</h1>
\t\t
\t\t</div>
\t</div>
\t\t
\t</header>
\t<!--------Header ends------>

\t<div id=\"carouselSection\" class=\"cntr\"> 
\t\t<div id=\"myCarousel\" class=\"carousel slide\">
\t\t\t<div class=\"carousel-inner\" id=\"smt\">
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<a class=\"cntr\" href=\"#\"><img src=\"images/carousel/1.png\" alt=\"\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a class=\"cntr\" href=\"#\"><img src=\"images/carousel/2.png\" alt=\"\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a class=\"cntr\" href=\"#\"><img src=\"images/carousel/3.png\" alt=\"\"></a>
\t\t\t\t</div>
\t\t\t\t<div  class=\"item\">
\t\t\t\t\t<a class=\"cntr\" href=\"#\"><img src=\"images/carousel/4.png\" alt=\"\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a class=\"cntr\" href=\"#\"><img src=\"images/carousel/5.png\" alt=\"\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
\t\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
\t\t</div>
</div>

<!---------------Section Block Ends-------------------------------->
\t\t
\t\t<h2>Welcome!</h2>
\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
\t<form method=\"post\" action=\"/users\">
\t\tName:<input type=\"text\" name=\"myname\" id=\"inputname\" placeholder = \"Please enter username...\" /><br>
\t\tPassword:<input type=\"password\" name=\"mypassword\" id = \"pass\" /><br>
\t\t<input type=\"submit\" name=\"send\" value=\"SEND\" id=\"button\" /><br>
\t</form>

\t</div>
</div>

<!---------------------------------->

\t
\t<footer>

<a href=\"#\" class=\"go-top\" style=\"display: none;\"><i class=\"icon-double-angle-up\"></i></a>

<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

\t<script src=\"js/js/jquery-1.9.1.min.js\"></script>
\t<script src=\"js/js/bootstrap.min.js\" type=\"text/javascript\"></script>
\t<script src=\"js/js/jquery.scrollTo-1.4.3.1-min.js\" type=\"text/javascript\"></script>
\t<script src=\"js/js/jquery.easing-1.3.min.js\"></script>
\t<script src=\"js/js/jquery.scrollTo-1.4.3.1-min.js\"></script>
\t<script src=\"js/js/default.js\"></script> 
\t<script type=\"text/javascript\">

\t\t\$('#testimonial').carousel({
\t\t  interval: 10000
\t\t})
\t\t\$('#myCarousel').carousel({
\t\t  interval: 7000
\t\t})
\t</script>

\t\t
\t</footer>
\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "userlogin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 53,  19 => 1,);
    }
}
/* <html>*/
/* 	<head>	*/
/* 		<meta charset="utf-8">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 		<link rel="stylesheet" href="css/login/formstyle.css">*/
/* 		<link rel="stylesheet" href="css/login/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />*/
/* 		<link href="css/login/bootstrap-responsive.min.css" rel="stylesheet">*/
/* 		<link rel="stylesheet" href="css/login/font-awesome.css">*/
/* 		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>*/
/* 		<title>Form</title>*/
/* */
/* 	</head>*/
/* */
/* 	<body data-spy="scroll" data-target=".navbar">*/
/* 	<header>*/
/* 	<div id="headerSection">*/
/* 		<div class="container">*/
/* 			<h1 class="brand cntr">Contact Form</h1>*/
/* 		*/
/* 		</div>*/
/* 	</div>*/
/* 		*/
/* 	</header>*/
/* 	<!--------Header ends------>*/
/* */
/* 	<div id="carouselSection" class="cntr"> */
/* 		<div id="myCarousel" class="carousel slide">*/
/* 			<div class="carousel-inner" id="smt">*/
/* 				<div class="item active">*/
/* 					<a class="cntr" href="#"><img src="images/carousel/1.png" alt=""></a>*/
/* 				</div>*/
/* 				<div class="item">*/
/* 					<a class="cntr" href="#"><img src="images/carousel/2.png" alt=""></a>*/
/* 				</div>*/
/* 				<div class="item">*/
/* 					<a class="cntr" href="#"><img src="images/carousel/3.png" alt=""></a>*/
/* 				</div>*/
/* 				<div  class="item">*/
/* 					<a class="cntr" href="#"><img src="images/carousel/4.png" alt=""></a>*/
/* 				</div>*/
/* 				<div class="item">*/
/* 					<a class="cntr" href="#"><img src="images/carousel/5.png" alt=""></a>*/
/* 				</div>*/
/* 			</div>*/
/* 			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>*/
/* 			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>*/
/* 		</div>*/
/* </div>*/
/* */
/* <!---------------Section Block Ends-------------------------------->*/
/* 		*/
/* 		<h2>Welcome!</h2>*/
/* 			{{ error }}*/
/* 	<form method="post" action="/users">*/
/* 		Name:<input type="text" name="myname" id="inputname" placeholder = "Please enter username..." /><br>*/
/* 		Password:<input type="password" name="mypassword" id = "pass" /><br>*/
/* 		<input type="submit" name="send" value="SEND" id="button" /><br>*/
/* 	</form>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!---------------------------------->*/
/* */
/* 	*/
/* 	<footer>*/
/* */
/* <a href="#" class="go-top" style="display: none;"><i class="icon-double-angle-up"></i></a>*/
/* */
/* <!-- Javascript*/
/*     ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/* */
/* 	<script src="js/js/jquery-1.9.1.min.js"></script>*/
/* 	<script src="js/js/bootstrap.min.js" type="text/javascript"></script>*/
/* 	<script src="js/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>*/
/* 	<script src="js/js/jquery.easing-1.3.min.js"></script>*/
/* 	<script src="js/js/jquery.scrollTo-1.4.3.1-min.js"></script>*/
/* 	<script src="js/js/default.js"></script> */
/* 	<script type="text/javascript">*/
/* */
/* 		$('#testimonial').carousel({*/
/* 		  interval: 10000*/
/* 		})*/
/* 		$('#myCarousel').carousel({*/
/* 		  interval: 7000*/
/* 		})*/
/* 	</script>*/
/* */
/* 		*/
/* 	</footer>*/
/* 	</body>*/
/* */
/* </html>*/
