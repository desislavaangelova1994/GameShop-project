<?php

/* log.twig */
class __TwigTemplate_7a6918880d3e86d8266e0a1979716f30517540914c674adbc0b2e48fc6472cb0 extends Twig_Template
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
        $this->loadTemplate("/common/header.twig", "log.twig", 1)->display($context);
        // line 2
        echo "<body>
\t<form method=\"POST\" action=\"/logged\">
\t\t\tИме:<input type=\"text\" name=\"user\" /><br>
\t\t\tПарола:<input type=\"password\" name=\"pass\"/><br>
\t\t\t<input type=\"submit\" name=\"send\" /><br>
\t</form>
\t<div><a href=\"/gameshop\">Go back....</a></div>
\t";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
\t";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "
</body>

";
        // line 13
        $this->loadTemplate("/common/footer.twig", "log.twig", 13)->display($context);
    }

    public function getTemplateName()
    {
        return "log.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 13,  34 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% include '/common/header.twig' %}*/
/* <body>*/
/* 	<form method="POST" action="/logged">*/
/* 			Име:<input type="text" name="user" /><br>*/
/* 			Парола:<input type="password" name="pass"/><br>*/
/* 			<input type="submit" name="send" /><br>*/
/* 	</form>*/
/* 	<div><a href="/gameshop">Go back....</a></div>*/
/* 	{{error}}*/
/* 	{{user}}*/
/* </body>*/
/* */
/* {% include '/common/footer.twig' %}*/
