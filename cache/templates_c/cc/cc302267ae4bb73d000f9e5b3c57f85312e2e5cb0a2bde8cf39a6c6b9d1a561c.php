<?php

/* Library/registerform.twig */
class __TwigTemplate_96d4b2079ff9e369b5c324ab40a05c673cd88c014e62223c272c2fedd47b8fbb extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/registerform.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"login-page\">
    <div class=\"form\">
      <h3 class=\"text-center\">Register</h3>
          <form method=\"POST\" action=\"/signup2\">
              <input type=\"firstname\" name=\"firstname\" placeholder=\"first name\"/>
              <input type=\"lastname\" name=\"lastname\" placeholder=\"last name\"/>
              <input type=\"password\" name=\"password\" placeholder=\"password\"/>
              <input type=\"email\" name=\"email\" placeholder=\"email address\"/>
              <input type=\"submit\" name=\"send\" />
              <p class=\"message\">Already registered? <a href=\"/home\">Sign In</a></p>
          </form>
          ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["Error"]) ? $context["Error"] : null), "html", null, true);
        echo "
          ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["Success"]) ? $context["Success"] : null), "html", null, true);
        echo "
    </div>
</div>


";
        // line 20
        $this->loadTemplate("/Library/common/footer.twig", "Library/registerform.twig", 20)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/registerform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  39 => 15,  35 => 14,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* <div class="login-page">*/
/*     <div class="form">*/
/*       <h3 class="text-center">Register</h3>*/
/*           <form method="POST" action="/signup2">*/
/*               <input type="firstname" name="firstname" placeholder="first name"/>*/
/*               <input type="lastname" name="lastname" placeholder="last name"/>*/
/*               <input type="password" name="password" placeholder="password"/>*/
/*               <input type="email" name="email" placeholder="email address"/>*/
/*               <input type="submit" name="send" />*/
/*               <p class="message">Already registered? <a href="/home">Sign In</a></p>*/
/*           </form>*/
/*           {{Error}}*/
/*           {{Success}}*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* {% include '/Library/common/footer.twig' %}*/
