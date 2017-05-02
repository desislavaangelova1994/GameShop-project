<?php

/* Library/editbooks.twig */
class __TwigTemplate_67e69b3c5ac1d1225e666182d844093a69a41c1b803f8bf5f45301cca7fd40ca extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/editbooks.twig", 1)->display($context);
        // line 2
        echo "
    <div id=\"add\" style=\" margin-top:50px\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">Edit User</div>
                <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"></div>
            </div>  

            <div class=\"panel-body\" >

                  
                    <form  class=\"form-horizontal\" method=\"post\" action=\"/bookedit1/";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["book_id"]) ? $context["book_id"] : null), "html", null, true);
        echo "\" >
                    
                        <input type=\"hidden\" name=\"book_id\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["book_id"]) ? $context["book_id"] : null), "html", null, true);
        echo "\" />
                       
                        <div id=\"div_ISBN\" class=\"form-group required\">
                            <label for=\"ISBN\" class=\"control-label col-md-4  requiredField\">ISBN: <span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \">
                                                 
                            <input  id=\"ISBN\" maxlength=\"30\" name=\"isbn\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "ISBN", array()), "html", null, true);
        echo "\" style=\"margin-bottom: 10px\" type=\"text\" />   
                            </div>
                        </div>

                        <div id=\"div_category\" class=\"form-group required\">
                            <label for=\"category\" class=\"control-label col-md-4  requiredField\"> Category <span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \">
                                <input  id=\"category\" name=\"category\" style=\"margin-bottom: 10px\" type=\"text\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "category", array()), "html", null, true);
        echo "\" />
                            </div>     
                        </div>

                       <div id=\"div_format\" class=\"form-group required\"> 
                            <label for=\"format\" class=\"control-label col-md-4  requiredField\">Format<span class=\"asteriskField\"></span> </label> 
                            <div class=\"controls col-md-8 \">
                                <div class=\"btn-group\">       
                                    <select name=\"format\">
                                        <option value=\"paper\">Paper</option>
                                        <option value=\"pdf\">Pdf</option>
                                    </select>                               
                                </div>
                            </div>
                        </div>

                        <div id=\"div_author\" class=\"form-group required\">
                            <label for=\"author\" class=\"control-label col-md-4  requiredField\">Author<span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \"> 
                                <input id=\"author\" name=\"author\" style=\"margin-bottom: 10px\" type=\"author\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "author", array()), "html", null, true);
        echo "\" />
                            </div>
                        </div>

                        <div id=\"div_title\" class=\"form-group required\">
                            <label for=\"title\" class=\"control-label col-md-4  requiredField\">Title<span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \"> 
                                <input id=\"title\" name=\"title\" style=\"margin-bottom: 10px\" type=\"title\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "title", array()), "html", null, true);
        echo "\" />
                            </div>
                        </div>

                        <div id=\"div_description\" class=\"form-group required\">
                            <label for=\"format\" class=\"control-label col-md-4  requiredField\">Description<span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \"> 
                                <input id=\"description\" name=\"description\" style=\"margin-bottom: 10px\" type=\"description\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "description", array()), "html", null, true);
        echo "\" />
                            </div>
                        </div>
                        
                        <div id=\"div_status\" class=\"form-group required\"> 
                            <label for=\"status\" class=\"control-label col-md-4  requiredField\">Status<span class=\"asteriskField\"></span> </label> 
                            <div class=\"controls col-md-8 \">
                                <div class=\"btn-group\">       
                                    <select name=\"status\">
                                        <option value=\"Available\">Available</option>
                                        <option value=\"Not Available\">Not Available</option>
                                    </select>                               
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class=\"form-group\"> 
                            <div class=\"aab controls col-md-4 \"></div>
                            <div class=\"controls col-md-8 \">
                                <input type=\"submit\" name=\"editbook\" value=\"Edit\" id=\"edit\" />
                            </div>
                        </div>

                        <div class=\"form-group\"> 
                            <div class=\"aab controls col-md-4 \"></div>
                        </div> 
                         
                    </form>
                    
                <form action=\"/books\">
                    <button type=\"submit\" class=\"btn btn-default\">Go back</button>
                </form>
            </div>
                

        </div>
    </div> 


";
        // line 101
        $this->loadTemplate("/Library/common/footer.twig", "Library/editbooks.twig", 101)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/editbooks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 101,  100 => 61,  90 => 54,  80 => 47,  58 => 28,  48 => 21,  39 => 15,  34 => 13,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/*     <div id="add" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">*/
/*         <div class="panel panel-info">*/
/*             <div class="panel-heading">*/
/*                 <div class="panel-title">Edit User</div>*/
/*                 <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>*/
/*             </div>  */
/* */
/*             <div class="panel-body" >*/
/* */
/*                   */
/*                     <form  class="form-horizontal" method="post" action="/bookedit1/{{book_id}}" >*/
/*                     */
/*                         <input type="hidden" name="book_id" value="{{book_id}}" />*/
/*                        */
/*                         <div id="div_ISBN" class="form-group required">*/
/*                             <label for="ISBN" class="control-label col-md-4  requiredField">ISBN: <span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 ">*/
/*                                                  */
/*                             <input  id="ISBN" maxlength="30" name="isbn" value="{{getRow.ISBN}}" style="margin-bottom: 10px" type="text" />   */
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_category" class="form-group required">*/
/*                             <label for="category" class="control-label col-md-4  requiredField"> Category <span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input  id="category" name="category" style="margin-bottom: 10px" type="text" value="{{getRow.category}}" />*/
/*                             </div>     */
/*                         </div>*/
/* */
/*                        <div id="div_format" class="form-group required"> */
/*                             <label for="format" class="control-label col-md-4  requiredField">Format<span class="asteriskField"></span> </label> */
/*                             <div class="controls col-md-8 ">*/
/*                                 <div class="btn-group">       */
/*                                     <select name="format">*/
/*                                         <option value="paper">Paper</option>*/
/*                                         <option value="pdf">Pdf</option>*/
/*                                     </select>                               */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_author" class="form-group required">*/
/*                             <label for="author" class="control-label col-md-4  requiredField">Author<span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 "> */
/*                                 <input id="author" name="author" style="margin-bottom: 10px" type="author" value="{{getRow.author}}" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_title" class="form-group required">*/
/*                             <label for="title" class="control-label col-md-4  requiredField">Title<span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 "> */
/*                                 <input id="title" name="title" style="margin-bottom: 10px" type="title" value="{{getRow.title}}" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_description" class="form-group required">*/
/*                             <label for="format" class="control-label col-md-4  requiredField">Description<span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 "> */
/*                                 <input id="description" name="description" style="margin-bottom: 10px" type="description" value="{{getRow.description}}" />*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div id="div_status" class="form-group required"> */
/*                             <label for="status" class="control-label col-md-4  requiredField">Status<span class="asteriskField"></span> </label> */
/*                             <div class="controls col-md-8 ">*/
/*                                 <div class="btn-group">       */
/*                                     <select name="status">*/
/*                                         <option value="Available">Available</option>*/
/*                                         <option value="Not Available">Not Available</option>*/
/*                                     </select>                               */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         */
/*                         <div class="form-group"> */
/*                             <div class="aab controls col-md-4 "></div>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input type="submit" name="editbook" value="Edit" id="edit" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group"> */
/*                             <div class="aab controls col-md-4 "></div>*/
/*                         </div> */
/*                          */
/*                     </form>*/
/*                     */
/*                 <form action="/books">*/
/*                     <button type="submit" class="btn btn-default">Go back</button>*/
/*                 </form>*/
/*             </div>*/
/*                 */
/* */
/*         </div>*/
/*     </div> */
/* */
/* */
/* {% include '/Library/common/footer.twig' %}*/
