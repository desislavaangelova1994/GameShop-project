<?php

/* Library/adduser.twig */
class __TwigTemplate_32be04854dc5726fbcc1f97b25692694a01d67816632b60dacf23cfa6df948bb extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/adduser.twig", 1)->display($context);
        // line 2
        echo "
    <div id=\"add\" style=\" margin-top:50px\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">Add User</div>
                <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"></div>
            </div>  
                <div class=\"panel-body\" >
                    <form  class=\"form-horizontal\" method=\"post\" action=\"/adding\">

                        <div id=\"div_firstname\" class=\"form-group required\">
                            <label for=\"fisrt name\" class=\"control-label col-md-4  requiredField\"> First Name<span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \">
                                <input  id=\"firstname\" maxlength=\"30\" name=\"firstname\" placeholder=\"Add First Name\" style=\"margin-bottom: 10px\" type=\"text\" />
                            </div>
                        </div>

                        <div id=\"div_lastname\" class=\"form-group required\">
                            <label for=\"lastname\" class=\"control-label col-md-4  requiredField\"> Last Name <span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \">
                                <input  id=\"lastname\" name=\"lastname\" placeholder=\"Add Last Name\" style=\"margin-bottom: 10px\" type=\"text\" />
                            </div>     
                        </div>

                        <div id=\"div_email\" class=\"form-group required\">
                            <label for=\"email\" class=\"control-label col-md-4  requiredField\">Email<span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \"> 
                                <input id=\"email\" name=\"email\" placeholder=\"Add Email\" style=\"margin-bottom: 10px\" type=\"email\" />
                            </div>
                        </div>

                        <div id=\"div_password\" class=\"form-group required\">
                             <label for=\"author\" class=\"control-label col-md-4  requiredField\"> Password <span class=\"asteriskField\">*</span> </label>
                             <div class=\"controls col-md-8 \">
                                <input id=\"password\" name=\"password\" placeholder=\"Add Password\" style=\"margin-bottom: 10px\" type=\"password\" />
                            </div>
                        </div>

                        <div id=\"div_accesslevel\" class=\"form-group required\"> 
                            <label for=\"acesslevel\" class=\"control-label col-md-4  requiredField\"><span class=\"asteriskField\">*</span> </label> 
                            <div class=\"controls col-md-8 \">
                                <div class=\"btn-group\">                                
                                    <select name=\"access\">
                                        <option value=\"1\">Administrator</option>
                                        <option value=\"0\">User</option>
                                    </select>                               
                                </div>
                            </div>
                        </div>
              
                        <div class=\"form-group\"> 
                            <div class=\"aab controls col-md-4 \"></div>
                            <div class=\"controls col-md-8 \">
                                <input type=\"submit\" name=\"AddBook\" value=\"Add\" id=\"Add\" />
                            </div>
                        </div> 
                        <div class=\"form-group\"> 
                            <div class=\"aab controls col-md-4 \"></div>
                            
                            ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
        echo "
                            ";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo " 
                            
                        </div>
                    </form> 
                    <form action=\"/adminpanel\">
                        <button type=\"submit\" class=\"btn btn-default\">Go back</button>
                    </form>
                </div>  
        </div>
    </div>

";
        // line 73
        $this->loadTemplate("/Library/common/footer.twig", "Library/adduser.twig", 73)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/adduser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 73,  86 => 62,  82 => 61,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/*     <div id="add" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">*/
/*         <div class="panel panel-info">*/
/*             <div class="panel-heading">*/
/*                 <div class="panel-title">Add User</div>*/
/*                 <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>*/
/*             </div>  */
/*                 <div class="panel-body" >*/
/*                     <form  class="form-horizontal" method="post" action="/adding">*/
/* */
/*                         <div id="div_firstname" class="form-group required">*/
/*                             <label for="fisrt name" class="control-label col-md-4  requiredField"> First Name<span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input  id="firstname" maxlength="30" name="firstname" placeholder="Add First Name" style="margin-bottom: 10px" type="text" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_lastname" class="form-group required">*/
/*                             <label for="lastname" class="control-label col-md-4  requiredField"> Last Name <span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input  id="lastname" name="lastname" placeholder="Add Last Name" style="margin-bottom: 10px" type="text" />*/
/*                             </div>     */
/*                         </div>*/
/* */
/*                         <div id="div_email" class="form-group required">*/
/*                             <label for="email" class="control-label col-md-4  requiredField">Email<span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 "> */
/*                                 <input id="email" name="email" placeholder="Add Email" style="margin-bottom: 10px" type="email" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_password" class="form-group required">*/
/*                              <label for="author" class="control-label col-md-4  requiredField"> Password <span class="asteriskField">*</span> </label>*/
/*                              <div class="controls col-md-8 ">*/
/*                                 <input id="password" name="password" placeholder="Add Password" style="margin-bottom: 10px" type="password" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_accesslevel" class="form-group required"> */
/*                             <label for="acesslevel" class="control-label col-md-4  requiredField"><span class="asteriskField">*</span> </label> */
/*                             <div class="controls col-md-8 ">*/
/*                                 <div class="btn-group">                                */
/*                                     <select name="access">*/
/*                                         <option value="1">Administrator</option>*/
/*                                         <option value="0">User</option>*/
/*                                     </select>                               */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*               */
/*                         <div class="form-group"> */
/*                             <div class="aab controls col-md-4 "></div>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input type="submit" name="AddBook" value="Add" id="Add" />*/
/*                             </div>*/
/*                         </div> */
/*                         <div class="form-group"> */
/*                             <div class="aab controls col-md-4 "></div>*/
/*                             */
/*                             {{success}}*/
/*                             {{error}} */
/*                             */
/*                         </div>*/
/*                     </form> */
/*                     <form action="/adminpanel">*/
/*                         <button type="submit" class="btn btn-default">Go back</button>*/
/*                     </form>*/
/*                 </div>  */
/*         </div>*/
/*     </div>*/
/* */
/* {% include '/Library/common/footer.twig' %}*/
