<?php

/* loged.twig */
class __TwigTemplate_ea5311a7c6acb48aa2e6a01c33f1bb9f605d0ecf846a4d5bd1eac07dc375e2b5 extends Twig_Template
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
        $this->loadTemplate("/common/header.twig", "loged.twig", 1)->display($context);
        // line 2
        echo "<body>
<div class=\"row\">
  \t<div class=\"col-md-4\"></div>
\t  \t<div class=\"row\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\tHello ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "  <br>
\t\t\t\t<a href=#>My Orders</a><br>
\t\t\t\t<a href=\"/cart\">Shopping cart</a><br>
\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["output"]) ? $context["output"] : null), "html", null, true);
        echo "
\t\t\t</div>
\t    </div>
    <div class=\"col-xs-6\"></div>
</div>
<div class=\"col-md-4 col-md-offset-4\"></div>
</body>
\t

";
        // line 19
        $this->loadTemplate("/common/footer.twig", "loged.twig", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "loged.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 19,  34 => 10,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '/common/header.twig' %}*/
/* <body>*/
/* <div class="row">*/
/*   	<div class="col-md-4"></div>*/
/* 	  	<div class="row">*/
/* 			<div class="col-xs-6">*/
/* 				Hello {{user.username}}  <br>*/
/* 				<a href=#>My Orders</a><br>*/
/* 				<a href="/cart">Shopping cart</a><br>*/
/* 				{{output}}*/
/* 			</div>*/
/* 	    </div>*/
/*     <div class="col-xs-6"></div>*/
/* </div>*/
/* <div class="col-md-4 col-md-offset-4"></div>*/
/* </body>*/
/* 	*/
/* */
/* {% include '/common/footer.twig' %}*/
