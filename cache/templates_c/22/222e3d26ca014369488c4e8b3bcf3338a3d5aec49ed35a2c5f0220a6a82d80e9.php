<?php

/* services.twig */
class __TwigTemplate_a37962c3f1538bb3fbeced4e0a1614847900b69a6e9a582615b4465f4b778960 extends Twig_Template
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
        $this->loadTemplate("/common/header.twig", "services.twig", 1)->display($context);
        // line 2
        echo "
    <h3>Contacts</h3>

    <p class=\"text-left\">Adress: ул. „Владая“ 3, 4003 Пловдив</p>
    <p class=\"text-left\">Phone: 0899123456</p>
    <div id=\"map\"></div>
    <div class=\"col-md-8\">
        <iframe width=\"100%\" height=\"400\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d94665.21987511973!2d24.74087425!3d42.1441209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sbg!2sbg!4v1489398770866\"></iframe>
                  
    </div>

";
        // line 13
        $this->loadTemplate("/common/footer.twig", "services.twig", 13)->display($context);
    }

    public function getTemplateName()
    {
        return "services.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 13,  21 => 2,  19 => 1,);
    }
}
/* {% include '/common/header.twig' %}*/
/* */
/*     <h3>Contacts</h3>*/
/* */
/*     <p class="text-left">Adress: ул. „Владая“ 3, 4003 Пловдив</p>*/
/*     <p class="text-left">Phone: 0899123456</p>*/
/*     <div id="map"></div>*/
/*     <div class="col-md-8">*/
/*         <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d94665.21987511973!2d24.74087425!3d42.1441209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sbg!2sbg!4v1489398770866"></iframe>*/
/*                   */
/*     </div>*/
/* */
/* {% include '/common/footer.twig' %}*/
/* */
