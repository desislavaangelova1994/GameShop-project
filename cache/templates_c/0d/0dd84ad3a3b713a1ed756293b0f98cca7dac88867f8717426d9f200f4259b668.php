<?php

/* beating.twig */
class __TwigTemplate_7043002dd770973c47ddd8a05587bb84e1803c20342b67fce7ac75b5ac4e58fe extends Twig_Template
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
        $this->loadTemplate("/common/header.twig", "beating.twig", 1)->display($context);
        // line 2
        echo "<div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">Game Shop</p>
                <div class=\"list-group\">
                    <a href=\"/action\" class=\"list-group-item\">Action</a>
                    <a href=\"/fantasy\" class=\"list-group-item\">Fantasy</a>
                    <a href=\"/beating\" class=\"list-group-item\">Beat'em up</a>
                </div>
        \t</div>

            <div class=\"col-md-9\">

                <div class=\"row carousel-holder\">

                    <div class=\"col-md-12\">
                        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <img class=\"slide-image\" src=\"images/gameshop/beating1.jpg\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"slide-image\" src=\"images/gameshop/game1.jpg\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"slide-image\" src=\"images/gameshop/game2.jpg\" alt=\"\">
                                </div>
                            </div>
                            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                            </a>
                        </div>
                    </div>

                </div>

                
               <div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"images/gameshop/image2.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4 class=\"pull-right\">\$64.99</h4>
                                <h4><a href=\"#\">Counter Strike</a>
                                </h4>
                                <p>Counter-Strike: Global Offensive (CS: GO) ...</p>
                                <button type=\"button\">Add to cart</button>
                            </div>
                            <div class=\"ratings\">
                                <p class=\"pull-right\">12 reviews</p>
                                <p>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star-empty\"></span>
                                </p>
                            </div>
                        </div>
                    </div>

               



            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class=\"container\">


";
        // line 86
        $this->loadTemplate("/common/footer.twig", "beating.twig", 86)->display($context);
    }

    public function getTemplateName()
    {
        return "beating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 86,  21 => 2,  19 => 1,);
    }
}
/* {% include '/common/header.twig' %}*/
/* <div class="container">*/
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-md-3">*/
/*                 <p class="lead">Game Shop</p>*/
/*                 <div class="list-group">*/
/*                     <a href="/action" class="list-group-item">Action</a>*/
/*                     <a href="/fantasy" class="list-group-item">Fantasy</a>*/
/*                     <a href="/beating" class="list-group-item">Beat'em up</a>*/
/*                 </div>*/
/*         	</div>*/
/* */
/*             <div class="col-md-9">*/
/* */
/*                 <div class="row carousel-holder">*/
/* */
/*                     <div class="col-md-12">*/
/*                         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/*                             <ol class="carousel-indicators">*/
/*                                 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*                                 <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*                                 <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*                             </ol>*/
/*                             <div class="carousel-inner">*/
/*                                 <div class="item active">*/
/*                                     <img class="slide-image" src="images/gameshop/beating1.jpg" alt="">*/
/*                                 </div>*/
/*                                 <div class="item">*/
/*                                     <img class="slide-image" src="images/gameshop/game1.jpg" alt="">*/
/*                                 </div>*/
/*                                 <div class="item">*/
/*                                     <img class="slide-image" src="images/gameshop/game2.jpg" alt="">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">*/
/*                                 <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                             </a>*/
/*                             <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">*/
/*                                 <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 */
/*                <div class="col-sm-4 col-lg-4 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <img src="images/gameshop/image2.jpg" alt="">*/
/*                             <div class="caption">*/
/*                                 <h4 class="pull-right">$64.99</h4>*/
/*                                 <h4><a href="#">Counter Strike</a>*/
/*                                 </h4>*/
/*                                 <p>Counter-Strike: Global Offensive (CS: GO) ...</p>*/
/*                                 <button type="button">Add to cart</button>*/
/*                             </div>*/
/*                             <div class="ratings">*/
/*                                 <p class="pull-right">12 reviews</p>*/
/*                                 <p>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star-empty"></span>*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                */
/* */
/* */
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/*     <div class="container">*/
/* */
/* */
/* {% include '/common/footer.twig' %}*/
