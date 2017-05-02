<?php

/* store.twig */
class __TwigTemplate_0d97bd9e68d86ae47e66f48f11a74fa5a6e9a54bd3277884c47734a0f0582269 extends Twig_Template
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
        $this->loadTemplate("/common/header.twig", "store.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container\">
 ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["Success"]) ? $context["Success"] : null), "html", null, true);
        echo "

        <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">Game Shop</p>
                <div class=\"list-group\">
                    <a href=\"/action\" class=\"list-group-item\">Action</a>
                    <a href=\"/fantasy\" class=\"list-group-item\">Fantasy</a>
                    <a href=\"/beating\" class=\"list-group-item\">Beat'em up</a>
                </div>
            </div>
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
                                    <img class=\"slide-image\" src=\"images/gameshop/game.jpg\" alt=\"\">
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

               <div class=\"row\">
                        
                    <div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"images/gameshop/image1.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4 class=\"pull-right\">\$24.99</h4>
                                <h4><a href=\"#\">League of legends</a>
                                </h4>
                                <p>League of Legends features an ever-expanding ....</p>
                                <!-- <img src=\"images/gameshop/cart.png\" alt=\"\" style=\"width:20px;height:20px;\"> -->
                                ";
        // line 60
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "islogged", array()) == true)) {
            // line 61
            echo "                                <form method=\"POST\" action=\"/cart/1\"> 
                                
                                <input type=\"submit\" name=\"1\" value=\"Add to cart\" /> 
                                
                                </form>
                                ";
        }
        // line 67
        echo "                            </div> 
                            <div class=\"ratings\"> 
                                <p class=\"pull-right\">15 reviews</p> 
                                <p> 
                                    <span class=\"glyphicon glyphicon-star\"></span> 
                                    <span class=\"glyphicon glyphicon-star\"></span> 
                                     <span class=\"glyphicon glyphicon-star\"></span> 
                                     <span class=\"glyphicon glyphicon-star\"></span> 
                                     <span class=\"glyphicon glyphicon-star\"></span> 
                                 </p>
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

                                ";
        // line 90
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "islogged", array()) == true)) {
            // line 91
            echo "                                <form method=\"POST\" action=\"/cart/2\"> 
                                
                                <input type=\"submit\" id= \"2\" name=\"2\" value=\"Add to cart\" /> 

                                </form>
                             
                                ";
        }
        // line 98
        echo "                                
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

                    <div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"images/gameshop/image3.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4 class=\"pull-right\">\$74.99</h4>
                                <h4><a href=\"#\">Angry Birds</a>
                                </h4>
                                <p>Angry Birds Blast has blasted into the  ...</p>
                                ";
        // line 121
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "islogged", array()) == true)) {
            // line 122
            echo "                                <form method=\"POST\" action=\"/cart/3\"> 
                                
                                <input type=\"submit\" name=\"3\" value=\"Add to cart\" /> 
                                
                                </form>
                                ";
        }
        // line 128
        echo "                            </div>
                            <div class=\"ratings\">
                                <p class=\"pull-right\">31 reviews</p>
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

                    <div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"images/gameshop/image4.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4 class=\"pull-right\">\$84.99</h4>
                                <h4><a href=\"#\">Call of Duty Black Ops</a>
                                </h4>
                                <p>The Call of Duty®: Infinite Warfare  ...</p>
                                ";
        // line 150
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "islogged", array()) == true)) {
            // line 151
            echo "                                <form method=\"POST\" action=\"/cart/4\"> 
                                
                                <input type=\"submit\" name=\"4\" value=\"Add to cart\" /> 
                                
                                </form>
                                ";
        }
        // line 157
        echo "                            </div>
                            <div class=\"ratings\">
                                <p class=\"pull-right\">6 reviews</p>
                                <p>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star-empty\"></span>
                                    <span class=\"glyphicon glyphicon-star-empty\"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"images/gameshop/image5.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4 class=\"pull-right\">\$94.99</h4>
                                <h4><a href=\"#\">Super Mario </a>
                                </h4>
                                <p>We've got the Biggest collection of...</p>
                                ";
        // line 179
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "islogged", array()) == true)) {
            // line 180
            echo "                                <form method=\"POST\" action=\"/cart/5\"> 
                                
                                <input type=\"submit\" name=\"5\" value=\"Add to cart\" /> 
                                
                                </form>
                                ";
        }
        // line 186
        echo "                            </div>
                            <div class=\"ratings\">
                                <p class=\"pull-right\">18 reviews</p>
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

    </div>
    <!-- /.container -->

    <div class=\"container\">

";
        // line 211
        $this->loadTemplate("/common/footer.twig", "store.twig", 211)->display($context);
    }

    public function getTemplateName()
    {
        return "store.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 211,  233 => 186,  225 => 180,  223 => 179,  199 => 157,  191 => 151,  189 => 150,  165 => 128,  157 => 122,  155 => 121,  130 => 98,  121 => 91,  119 => 90,  94 => 67,  86 => 61,  84 => 60,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% include '/common/header.twig' %}*/
/* */
/* <div class="container">*/
/*  {{Success}}*/
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
/*             </div>*/
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
/*                                     <img class="slide-image" src="images/gameshop/game.jpg" alt="">*/
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
/*                 </div>              */
/* */
/*                <div class="row">*/
/*                         */
/*                     <div class="col-sm-4 col-lg-4 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <img src="images/gameshop/image1.jpg" alt="">*/
/*                             <div class="caption">*/
/*                                 <h4 class="pull-right">$24.99</h4>*/
/*                                 <h4><a href="#">League of legends</a>*/
/*                                 </h4>*/
/*                                 <p>League of Legends features an ever-expanding ....</p>*/
/*                                 <!-- <img src="images/gameshop/cart.png" alt="" style="width:20px;height:20px;"> -->*/
/*                                 {% if session.islogged == true %}*/
/*                                 <form method="POST" action="/cart/1"> */
/*                                 */
/*                                 <input type="submit" name="1" value="Add to cart" /> */
/*                                 */
/*                                 </form>*/
/*                                 {% endif %}*/
/*                             </div> */
/*                             <div class="ratings"> */
/*                                 <p class="pull-right">15 reviews</p> */
/*                                 <p> */
/*                                     <span class="glyphicon glyphicon-star"></span> */
/*                                     <span class="glyphicon glyphicon-star"></span> */
/*                                      <span class="glyphicon glyphicon-star"></span> */
/*                                      <span class="glyphicon glyphicon-star"></span> */
/*                                      <span class="glyphicon glyphicon-star"></span> */
/*                                  </p>*/
/*                             </div>*/
/*                         </div>*/
/*                      </div> */
/* */
/*                     <div class="col-sm-4 col-lg-4 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <img src="images/gameshop/image2.jpg" alt="">*/
/*                             <div class="caption">*/
/*                                 <h4 class="pull-right">$64.99</h4>*/
/*                                 <h4><a href="#">Counter Strike</a>*/
/*                                 </h4>*/
/*                                 <p>Counter-Strike: Global Offensive (CS: GO) ...</p>*/
/* */
/*                                 {% if session.islogged == true %}*/
/*                                 <form method="POST" action="/cart/2"> */
/*                                 */
/*                                 <input type="submit" id= "2" name="2" value="Add to cart" /> */
/* */
/*                                 </form>*/
/*                              */
/*                                 {% endif %}*/
/*                                 */
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
/*                     <div class="col-sm-4 col-lg-4 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <img src="images/gameshop/image3.jpg" alt="">*/
/*                             <div class="caption">*/
/*                                 <h4 class="pull-right">$74.99</h4>*/
/*                                 <h4><a href="#">Angry Birds</a>*/
/*                                 </h4>*/
/*                                 <p>Angry Birds Blast has blasted into the  ...</p>*/
/*                                 {% if session.islogged == true %}*/
/*                                 <form method="POST" action="/cart/3"> */
/*                                 */
/*                                 <input type="submit" name="3" value="Add to cart" /> */
/*                                 */
/*                                 </form>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             <div class="ratings">*/
/*                                 <p class="pull-right">31 reviews</p>*/
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
/*                     <div class="col-sm-4 col-lg-4 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <img src="images/gameshop/image4.jpg" alt="">*/
/*                             <div class="caption">*/
/*                                 <h4 class="pull-right">$84.99</h4>*/
/*                                 <h4><a href="#">Call of Duty Black Ops</a>*/
/*                                 </h4>*/
/*                                 <p>The Call of Duty®: Infinite Warfare  ...</p>*/
/*                                 {% if session.islogged == true %}*/
/*                                 <form method="POST" action="/cart/4"> */
/*                                 */
/*                                 <input type="submit" name="4" value="Add to cart" /> */
/*                                 */
/*                                 </form>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             <div class="ratings">*/
/*                                 <p class="pull-right">6 reviews</p>*/
/*                                 <p>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star-empty"></span>*/
/*                                     <span class="glyphicon glyphicon-star-empty"></span>*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-4 col-lg-4 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <img src="images/gameshop/image5.jpg" alt="">*/
/*                             <div class="caption">*/
/*                                 <h4 class="pull-right">$94.99</h4>*/
/*                                 <h4><a href="#">Super Mario </a>*/
/*                                 </h4>*/
/*                                 <p>We've got the Biggest collection of...</p>*/
/*                                 {% if session.islogged == true %}*/
/*                                 <form method="POST" action="/cart/5"> */
/*                                 */
/*                                 <input type="submit" name="5" value="Add to cart" /> */
/*                                 */
/*                                 </form>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             <div class="ratings">*/
/*                                 <p class="pull-right">18 reviews</p>*/
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
/*                 </div>*/
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
/* {% include '/common/footer.twig' %}*/
