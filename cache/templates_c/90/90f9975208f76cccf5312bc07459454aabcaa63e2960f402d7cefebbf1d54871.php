<?php

/* cart.twig */
class __TwigTemplate_2bea3024333f24e3f57405fd61b92a0d8b290365e92a5286c7d8b28c71f44351 extends Twig_Template
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
        $this->loadTemplate("/common/header.twig", "cart.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"main-container\">
    <section class=\"hero-divider\">
        <div class=\"col-sm-12 text-center\">
            <div class=\"photo-form-wrapper\">
                <div class=\"container\">
                    <div class=\"row\">\t
                        <div class=\"col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center\">
                            <table class=\"table\" >
                                <tr class=\"border\">
                                    <td class=\"border\">Name</td>
                                    <td class=\"border\"\">Price</td>
                                    <td class=\"border\">ID</td>
                                    <td class=\"border\">Image</td>

                                </tr>  
                                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 19
            echo "                                <tr>
                                    <td>
                                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        \$";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "price", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"\">DELETE</a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                            </table>
                        </div>
                    </div>
                </div>
            </div>    
        </div>  
        <a href=\"/gameshop\"> Continue Shopping</a>
    </section>
</div>





<!-- <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-8\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <h5><span class=\"glyphicon glyphicon-shopping-cart\"></span> Shopping Cart</h5>
                            </div>
                            <div class=\"col-xs-6\">
                                <button type=\"button\" class=\"btn btn-primary btn-sm btn-block\">
                                    <span class=\"glyphicon glyphicon-share-alt\"></span> Continue shopping
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-xs-2\"><img class=\"img-responsive\" src=\"http://placehold.it/100x70\">
                        </div>
                        <div class=\"col-xs-4\">
                            <h4 class=\"product-name\"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
                        </div>
                        <div class=\"col-xs-6\">
                            <div class=\"col-xs-6 text-right\">
                                <h6><strong>25.00 <span class=\"text-muted\">x</span></strong></h6>
                            </div>
                            <div class=\"col-xs-4\">
                                <input type=\"text\" class=\"form-control input-sm\" value=\"1\">
                            </div>
                            <div class=\"col-xs-2\">
                                <button type=\"button\" class=\"btn btn-link btn-xs\">
                                    <span class=\"glyphicon glyphicon-trash\"> </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class=\"row\">
                        <div class=\"col-xs-2\"><img class=\"img-responsive\" src=\"http://placehold.it/100x70\">
                        </div>
                        <div class=\"col-xs-4\">
                            <h4 class=\"product-name\"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
                        </div>
                        <div class=\"col-xs-6\">
                            <div class=\"col-xs-6 text-right\">
                                <h6><strong>25.00 <span class=\"text-muted\">x</span></strong></h6>
                            </div>
                            <div class=\"col-xs-4\">
                                <input type=\"text\" class=\"form-control input-sm\" value=\"1\">
                            </div>
                            <div class=\"col-xs-2\">
                                <button type=\"button\" class=\"btn btn-link btn-xs\">
                                    <span class=\"glyphicon glyphicon-trash\"> </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class=\"row\">
                        <div class=\"text-center\">
                            <div class=\"col-xs-9\">
                                <h6 class=\"text-right\">Added items?</h6>
                            </div>
                            <div class=\"col-xs-3\">
                                <button type=\"button\" class=\"btn btn-default btn-sm btn-block\">
                                    Update cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"panel-footer\">
                    <div class=\"row text-center\">
                        <div class=\"col-xs-9\">
                            <h4 class=\"text-right\">Total <strong>\$50.00</strong></h4>
                        </div>
                        <div class=\"col-xs-3\">
                            <button type=\"button\" class=\"btn btn-success btn-block\">
                                Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


";
        // line 140
        $this->loadTemplate("/common/footer.twig", "cart.twig", 140)->display($context);
    }

    public function getTemplateName()
    {
        return "cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 140,  72 => 34,  59 => 27,  53 => 24,  47 => 21,  43 => 19,  39 => 18,  21 => 2,  19 => 1,);
    }
}
/* {% include '/common/header.twig' %}*/
/* */
/* <div class="main-container">*/
/*     <section class="hero-divider">*/
/*         <div class="col-sm-12 text-center">*/
/*             <div class="photo-form-wrapper">*/
/*                 <div class="container">*/
/*                     <div class="row">	*/
/*                         <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">*/
/*                             <table class="table" >*/
/*                                 <tr class="border">*/
/*                                     <td class="border">Name</td>*/
/*                                     <td class="border"">Price</td>*/
/*                                     <td class="border">ID</td>*/
/*                                     <td class="border">Image</td>*/
/* */
/*                                 </tr>  */
/*                                 {% for row in content %}*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         {{row.name}}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         ${{row.price}}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         {{row.id}}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <a href="">DELETE</a>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 {% endfor %}*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>    */
/*         </div>  */
/*         <a href="/gameshop"> Continue Shopping</a>*/
/*     </section>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* <!-- <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-xs-8">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     <div class="panel-title">*/
/*                         <div class="row">*/
/*                             <div class="col-xs-6">*/
/*                                 <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>*/
/*                             </div>*/
/*                             <div class="col-xs-6">*/
/*                                 <button type="button" class="btn btn-primary btn-sm btn-block">*/
/*                                     <span class="glyphicon glyphicon-share-alt"></span> Continue shopping*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>*/
/*                         </div>*/
/*                         <div class="col-xs-6">*/
/*                             <div class="col-xs-6 text-right">*/
/*                                 <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>*/
/*                             </div>*/
/*                             <div class="col-xs-4">*/
/*                                 <input type="text" class="form-control input-sm" value="1">*/
/*                             </div>*/
/*                             <div class="col-xs-2">*/
/*                                 <button type="button" class="btn btn-link btn-xs">*/
/*                                     <span class="glyphicon glyphicon-trash"> </span>*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <hr>*/
/*                     <div class="row">*/
/*                         <div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>*/
/*                         </div>*/
/*                         <div class="col-xs-6">*/
/*                             <div class="col-xs-6 text-right">*/
/*                                 <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>*/
/*                             </div>*/
/*                             <div class="col-xs-4">*/
/*                                 <input type="text" class="form-control input-sm" value="1">*/
/*                             </div>*/
/*                             <div class="col-xs-2">*/
/*                                 <button type="button" class="btn btn-link btn-xs">*/
/*                                     <span class="glyphicon glyphicon-trash"> </span>*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <hr>*/
/*                     <div class="row">*/
/*                         <div class="text-center">*/
/*                             <div class="col-xs-9">*/
/*                                 <h6 class="text-right">Added items?</h6>*/
/*                             </div>*/
/*                             <div class="col-xs-3">*/
/*                                 <button type="button" class="btn btn-default btn-sm btn-block">*/
/*                                     Update cart*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     <div class="row text-center">*/
/*                         <div class="col-xs-9">*/
/*                             <h4 class="text-right">Total <strong>$50.00</strong></h4>*/
/*                         </div>*/
/*                         <div class="col-xs-3">*/
/*                             <button type="button" class="btn btn-success btn-block">*/
/*                                 Checkout*/
/*                             </button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div> -->*/
/* */
/* */
/* {% include '/common/footer.twig' %}*/
