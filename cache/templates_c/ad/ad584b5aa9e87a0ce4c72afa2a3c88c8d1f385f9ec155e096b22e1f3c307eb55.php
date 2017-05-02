<?php

/* about1.twig */
class __TwigTemplate_4a773c9087943042136714b44743011f2127948dbbe21454ea1be81fcd23c7d0 extends Twig_Template
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
        $this->loadTemplate("/common/header.twig", "about1.twig", 1)->display($context);
        // line 2
        echo "
<body>

<p class=\"text-center\">This is GameShop where you can find all the latest games at the best prices!</p>
</body>


";
        // line 9
        $this->loadTemplate("/common/footer.twig", "about1.twig", 9)->display($context);
    }

    public function getTemplateName()
    {
        return "about1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% include '/common/header.twig' %}*/
/* */
/* <body>*/
/* */
/* <p class="text-center">This is GameShop where you can find all the latest games at the best prices!</p>*/
/* </body>*/
/* */
/* */
/* {% include '/common/footer.twig' %}*/
/* */
