<?php

/* Library/index.twig */
class __TwigTemplate_9efc94bbf93d9591117ba2dbbaaf95c5d692f2810480ab819875a6b70d143bc2 extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/index.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
\t<div class=\"login-page\">
\t  \t<div class=\"form\">
\t\t  \t<h3 class=\"text-center\">Login</h3>
\t\t\t    <form class=\"login-form\" method=\"POST\" action=\"/login\">
\t\t\t      <input type=\"text\" name=\"email\" placeholder=\"email\"/>
\t\t\t      <input type=\"password\" name=\"password\" placeholder=\"password\"/>
\t\t\t      <input type=\"submit\" name=\"send\"/>
\t\t\t    </form>
\t\t\t    ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
\t\t\t    ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
        echo "
\t  \t</div>
\t</div>

";
        // line 17
        $this->loadTemplate("/Library/common/footer.twig", "Library/index.twig", 17)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 17,  40 => 13,  36 => 12,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* {{error}}*/
/* 	<div class="login-page">*/
/* 	  	<div class="form">*/
/* 		  	<h3 class="text-center">Login</h3>*/
/* 			    <form class="login-form" method="POST" action="/login">*/
/* 			      <input type="text" name="email" placeholder="email"/>*/
/* 			      <input type="password" name="password" placeholder="password"/>*/
/* 			      <input type="submit" name="send"/>*/
/* 			    </form>*/
/* 			    {{error}}*/
/* 			    {{success}}*/
/* 	  	</div>*/
/* 	</div>*/
/* */
/* {% include '/Library/common/footer.twig' %}*/
