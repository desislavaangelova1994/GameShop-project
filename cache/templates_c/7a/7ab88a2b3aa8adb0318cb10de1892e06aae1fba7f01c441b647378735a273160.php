<?php

/* Library/addbook.twig */
class __TwigTemplate_0ccf8e1af333f4068aa8a67994bc00eda56cc287dd7c4b424eb5adf451658c3b extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/addbook.twig", 1)->display($context);
        // line 2
        echo "    
            
    <div id=\"addbookbox\" style=\" margin-top:50px\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">Add Book</div>
                <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"></div>
            </div>  
            <div class=\"panel-body\" >
                    <form  class=\"form-horizontal\" method=\"post\" action=\"/addbookdatabase\">

                        <div id=\"div_isbn\" class=\"form-group required\">
                            <label for=\"isbn\" class=\"control-label col-md-4  requiredField\">ISBN<span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \">
                                <input  id=\"isbn\" maxlength=\"30\" name=\"isbn\" placeholder=\"Add ISBN\" style=\"margin-bottom: 10px\" type=\"text\" />
                            </div>
                        </div>

                        <div id=\"div_category\" class=\"form-group required\">
                            <label for=\"category\" class=\"control-label col-md-4  requiredField\"> Category <span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \">
                                <input  id=\"category\" name=\"category\" placeholder=\"Add Category\" style=\"margin-bottom: 10px\" type=\"text\" />
                            </div>     
                        </div>

                        <div id=\"div_format\" class=\"form-group required\">
                            <label for=\"format\" class=\"control-label col-md-4  requiredField\"> Format <span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \"> 
                                <select name=\"format\">
                                        <option value=\"paper\">Paper</option>
                                        <option value=\"pdf\">Pdf</option>
                                </select>   
                            </div>
                        </div>

                        <div id=\"div_author\" class=\"form-group required\">
                             <label for=\"author\" class=\"control-label col-md-4  requiredField\"> Author <span class=\"asteriskField\">*</span> </label>
                             <div class=\"controls col-md-8 \">
                                <input id=\"author\" name=\"author\" placeholder=\"Add Author\" style=\"margin-bottom: 10px\" type=\"text\" />
                            </div>
                        </div>

                        <div id=\"div_title\" class=\"form-group required\"> 
                            <label for=\"title\" class=\"control-label col-md-4  requiredField\"> Add Title <span class=\"asteriskField\">*</span> </label> 
                            <div class=\"controls col-md-8 \"> 
                                <input id=\"title\" name=\"title\" placeholder=\"Add Title of Book\" style=\"margin-bottom: 10px\" type=\"text\" />
                            </div>
                        </div>

                        <div id=\"div_status\" class=\"form-group required\"> 
                            <label for=\"title\" class=\"control-label col-md-4  requiredField\">Status<span class=\"asteriskField\">*</span> </label> 
                            <div class=\"controls col-md-8 \"> 
                                <select name=\"status\">
                                        <option value=\"available\">Available</option>
                                        <option value=\"notavailable\">Not Available</option>
                                </select>  
                        </div>

                        </div>
                        <div id=\"div_description\" class=\"form-group required\"> 
                            <label for=\"description\" class=\"control-label col-md-4 \"> Description <span class=\"asteriskField\"></span> </label>
                            <div class=\"controls col-md-8 \"> 
                                <div id=\"description-message\" class=\"form-row\">
\t\t\t\t\t\t\t\t\t<textarea name = \"description\" placeholder = \"Description\" id = \"description\" ></textarea>
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div> 
              
                        <div class=\"form-group\"> 
                            <div class=\"aab controls col-md-4 \"></div>
                            <div class=\"controls col-md-8 \">
                                <input type=\"submit\" name=\"submit\" value=\"Add\" id=\"Add\" />
                            </div>
                        </div> 
                            ";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
        echo "
                            ";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
                    </form>
                    <form action=\"/adminpanel\">
                        <button type=\"submit\" class=\"btn btn-default\">Go back</button>
                    </form>
            </div>
        </div>
    </div>
    


";
        // line 88
        $this->loadTemplate("/Library/common/footer.twig", "Library/addbook.twig", 88)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/addbook.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 88,  101 => 77,  97 => 76,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/*     */
/*             */
/*     <div id="addbookbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">*/
/*         <div class="panel panel-info">*/
/*             <div class="panel-heading">*/
/*                 <div class="panel-title">Add Book</div>*/
/*                 <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>*/
/*             </div>  */
/*             <div class="panel-body" >*/
/*                     <form  class="form-horizontal" method="post" action="/addbookdatabase">*/
/* */
/*                         <div id="div_isbn" class="form-group required">*/
/*                             <label for="isbn" class="control-label col-md-4  requiredField">ISBN<span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input  id="isbn" maxlength="30" name="isbn" placeholder="Add ISBN" style="margin-bottom: 10px" type="text" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_category" class="form-group required">*/
/*                             <label for="category" class="control-label col-md-4  requiredField"> Category <span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input  id="category" name="category" placeholder="Add Category" style="margin-bottom: 10px" type="text" />*/
/*                             </div>     */
/*                         </div>*/
/* */
/*                         <div id="div_format" class="form-group required">*/
/*                             <label for="format" class="control-label col-md-4  requiredField"> Format <span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 "> */
/*                                 <select name="format">*/
/*                                         <option value="paper">Paper</option>*/
/*                                         <option value="pdf">Pdf</option>*/
/*                                 </select>   */
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_author" class="form-group required">*/
/*                              <label for="author" class="control-label col-md-4  requiredField"> Author <span class="asteriskField">*</span> </label>*/
/*                              <div class="controls col-md-8 ">*/
/*                                 <input id="author" name="author" placeholder="Add Author" style="margin-bottom: 10px" type="text" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_title" class="form-group required"> */
/*                             <label for="title" class="control-label col-md-4  requiredField"> Add Title <span class="asteriskField">*</span> </label> */
/*                             <div class="controls col-md-8 "> */
/*                                 <input id="title" name="title" placeholder="Add Title of Book" style="margin-bottom: 10px" type="text" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_status" class="form-group required"> */
/*                             <label for="title" class="control-label col-md-4  requiredField">Status<span class="asteriskField">*</span> </label> */
/*                             <div class="controls col-md-8 "> */
/*                                 <select name="status">*/
/*                                         <option value="available">Available</option>*/
/*                                         <option value="notavailable">Not Available</option>*/
/*                                 </select>  */
/*                         </div>*/
/* */
/*                         </div>*/
/*                         <div id="div_description" class="form-group required"> */
/*                             <label for="description" class="control-label col-md-4 "> Description <span class="asteriskField"></span> </label>*/
/*                             <div class="controls col-md-8 "> */
/*                                 <div id="description-message" class="form-row">*/
/* 									<textarea name = "description" placeholder = "Description" id = "description" ></textarea>*/
/* 								</div>*/
/*                             </div>*/
/*                         </div> */
/*               */
/*                         <div class="form-group"> */
/*                             <div class="aab controls col-md-4 "></div>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input type="submit" name="submit" value="Add" id="Add" />*/
/*                             </div>*/
/*                         </div> */
/*                             {{success}}*/
/*                             {{error}}*/
/*                     </form>*/
/*                     <form action="/adminpanel">*/
/*                         <button type="submit" class="btn btn-default">Go back</button>*/
/*                     </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/* */
/* */
/* {% include '/Library/common/footer.twig' %}*/
