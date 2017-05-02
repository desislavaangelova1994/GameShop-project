<?php

/* register.twig */
class __TwigTemplate_1cfcac2829969bd149dfc2a4791e177f1ab40e206b1f14241b7a6ad65d0eed6a extends Twig_Template
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
        $this->loadTemplate("/common/header.twig", "register.twig", 1)->display($context);
        // line 2
        echo "
<body>

\t<div class=\"row\">
  \t\t<div class=\"col-md-3 offset-md-3\"></div>
  \t\t<div class=\"col-md-3 offset-md-3\">

  \t\t<form method=\"POST\" action=\"/registration\">

\t\t\t\tИме:<input type=\"name\" name=\"name\"  /><br>
\t\t\t\tEмайл:<input type=\"text\" name=\"email\"  /><br>
\t\t\t\tUsername:<input type=\"username\" name=\"username\"  /><br>
\t\t\t\tПарола:<input type=\"password\" name=\"password\" /><br>
\t\t\t
\t\t\t<input type=\"submit\" name=\"send\" /><br>
\t\t</form>
\t\t";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["Error"]) ? $context["Error"] : null), "html", null, true);
        echo "
\t</div>
</div>
\t\t
</body>


";
        // line 25
        $this->loadTemplate("/common/footer.twig", "register.twig", 25)->display($context);
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 25,  39 => 18,  21 => 2,  19 => 1,);
    }
}
/* {% include '/common/header.twig' %}*/
/* */
/* <body>*/
/* */
/* 	<div class="row">*/
/*   		<div class="col-md-3 offset-md-3"></div>*/
/*   		<div class="col-md-3 offset-md-3">*/
/* */
/*   		<form method="POST" action="/registration">*/
/* */
/* 				Име:<input type="name" name="name"  /><br>*/
/* 				Eмайл:<input type="text" name="email"  /><br>*/
/* 				Username:<input type="username" name="username"  /><br>*/
/* 				Парола:<input type="password" name="password" /><br>*/
/* 			*/
/* 			<input type="submit" name="send" /><br>*/
/* 		</form>*/
/* 		{{Error}}*/
/* 	</div>*/
/* </div>*/
/* 		*/
/* </body>*/
/* */
/* */
/* {% include '/common/footer.twig' %}*/
