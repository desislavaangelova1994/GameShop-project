<?php

/* Library/searchresult.twig */
class __TwigTemplate_ed6370246eccce54613aedad8e709b5e14055ca568c0839526454166e6c9dfa7 extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/searchresult.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"row\">

            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Thumbnail Gallery</h1>
            </div>

            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/400x300\" alt=\"\">
                </a>
            </div>
</div>

";
        // line 16
        $this->loadTemplate("/Library/common/footer.twig", "Library/searchresult.twig", 16)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/searchresult.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 16,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* <div class="row">*/
/* */
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">Thumbnail Gallery</h1>*/
/*             </div>*/
/* */
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="http://placehold.it/400x300" alt="">*/
/*                 </a>*/
/*             </div>*/
/* </div>*/
/* */
/* {% include '/Library/common/footer.twig' %}*/
