<?php

/* contact.twig */
class __TwigTemplate_7381df7a268c86fd853012bde8ef37d9265aed49e325764f05a203d9ff5d141a extends Twig_Template
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
        $this->loadTemplate("/com/header.twig", "contact.twig", 1)->display($context);
        // line 2
        echo "
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
        echo "
                    <hr>
                    <h2 class=\"intro-text text-center\">Как да намерите
                        <strong>Автоморга Детелина</strong>
                    </h2>
                    <hr>
                </div>
                <div class=\"col-md-8\">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width=\"100%\" height=\"400\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.102779574618!2d25.57206621513886!3d41.93364277921774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ad572e9c573877%3A0x9cbe31aab8ed53f2!2z0JDQstGC0L7QvNC-0YDQs9CwINCU0LXRgtC10LvQuNC90LA!5e0!3m2!1sbg!2sbg!4v1478766390101\"></iframe>
                  
                </div>
                <div class=\"col-md-4\">
                    <p>Телефон:
                        <strong>+359 885 37 3333</strong>
                    </p>
                    <!-- <p>Емайл:
                        <strong><a href=\"mailto:hi_clyb@abv.bg\">name@example.com</a></strong>
                    </p> -->
                    <p>Адрес:
                        <strong>6300 Хасково
                            <br>В двора на \"Топливо\"</strong>
                    </p>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>


        <!--FACEBOOK-->
              <!--  <div class=\"fb-page\" data-href=\"https://www.facebook.com/avtomorgadetelina/\" data-tabs=\"timeline\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\">
            <blockquote cite=\"https://www.facebook.com/avtomorgadetelina/\" class=\"fb-xfbml-parse-ignore\">
                <a href=\"https://www.facebook.com/avtomorgadetelina/\">Автоморга Детелина</a>
            </blockquote>
        </div> -->

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                
                 <div class=\"fb-page\" 
                    data-href=\"https://www.facebook.com/avtomorgadetelina\"
                    data-width=\"380\" 
                    data-hide-cover=\"false\"
                    data-show-facepile=\"false\" 
                    data-show-posts=\"false\">
                </div>


                    <hr>
                    <h2 class=\"intro-text text-center\">За
                        <strong>контакти</strong>
                    </h2>
                    <hr>
                    <p style=\"text-align: center;\">Работно време : <br>
\t\t\t\t\tПонеделник - Петък 8:00 - 18:00ч.<br>
\t\t\t\t\tСъбота 8:00 - 18:00 ч.<br>
\t\t\t\t\tНеделя - почивен ден.<br>
\t\t\t\t\tТелефон за връзка: 0885 37 3333</p>

                    <form role=\"form\" action=\"/contact1\" method=\"POST\">
                        <div class=\"row\">
                            <div class=\"form-group col-lg-4\">
                                <label>Име</label>
                                <input type=\"text\" class=\"form-control\" name=\"name\">
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Емайл</label>
                                <input type=\"email\" class=\"form-control\" name=\"email\">
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Телефон</label>
                                <input type=\"tel\" class=\"form-control\" name=\"phone\">
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"form-group col-lg-12\">
                                <label>Съобщение</label>
                                <textarea class=\"form-control\" rows=\"6\" name=\"subject\"></textarea>
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <input type=\"hidden\" name=\"save\" value=\"contact\">
                                <button type=\"submit\" class=\"btn btn-default\" style=\"margin:auto;display:block\">Изпрати</button>
                            </div>
                        </div>
                          
                    </form>
                </div>
            </div>
        </div>
        
        ";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
    </div>
    <!-- /.container -->

";
        // line 102
        $this->loadTemplate("/com/footer.twig", "contact.twig", 102)->display($context);
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 102,  122 => 98,  29 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% include '/com/header.twig' %}*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="box">*/
/*                 <div class="col-lg-12">*/
/*                     {{success}}*/
/*                     <hr>*/
/*                     <h2 class="intro-text text-center">Как да намерите*/
/*                         <strong>Автоморга Детелина</strong>*/
/*                     </h2>*/
/*                     <hr>*/
/*                 </div>*/
/*                 <div class="col-md-8">*/
/*                     <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->*/
/*                     <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.102779574618!2d25.57206621513886!3d41.93364277921774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ad572e9c573877%3A0x9cbe31aab8ed53f2!2z0JDQstGC0L7QvNC-0YDQs9CwINCU0LXRgtC10LvQuNC90LA!5e0!3m2!1sbg!2sbg!4v1478766390101"></iframe>*/
/*                   */
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <p>Телефон:*/
/*                         <strong>+359 885 37 3333</strong>*/
/*                     </p>*/
/*                     <!-- <p>Емайл:*/
/*                         <strong><a href="mailto:hi_clyb@abv.bg">name@example.com</a></strong>*/
/*                     </p> -->*/
/*                     <p>Адрес:*/
/*                         <strong>6300 Хасково*/
/*                             <br>В двора на "Топливо"</strong>*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <!--FACEBOOK-->*/
/*               <!--  <div class="fb-page" data-href="https://www.facebook.com/avtomorgadetelina/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">*/
/*             <blockquote cite="https://www.facebook.com/avtomorgadetelina/" class="fb-xfbml-parse-ignore">*/
/*                 <a href="https://www.facebook.com/avtomorgadetelina/">Автоморга Детелина</a>*/
/*             </blockquote>*/
/*         </div> -->*/
/* */
/*         <div class="row">*/
/*             <div class="box">*/
/*                 <div class="col-lg-12">*/
/*                 */
/*                  <div class="fb-page" */
/*                     data-href="https://www.facebook.com/avtomorgadetelina"*/
/*                     data-width="380" */
/*                     data-hide-cover="false"*/
/*                     data-show-facepile="false" */
/*                     data-show-posts="false">*/
/*                 </div>*/
/* */
/* */
/*                     <hr>*/
/*                     <h2 class="intro-text text-center">За*/
/*                         <strong>контакти</strong>*/
/*                     </h2>*/
/*                     <hr>*/
/*                     <p style="text-align: center;">Работно време : <br>*/
/* 					Понеделник - Петък 8:00 - 18:00ч.<br>*/
/* 					Събота 8:00 - 18:00 ч.<br>*/
/* 					Неделя - почивен ден.<br>*/
/* 					Телефон за връзка: 0885 37 3333</p>*/
/* */
/*                     <form role="form" action="/contact1" method="POST">*/
/*                         <div class="row">*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Име</label>*/
/*                                 <input type="text" class="form-control" name="name">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Емайл</label>*/
/*                                 <input type="email" class="form-control" name="email">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Телефон</label>*/
/*                                 <input type="tel" class="form-control" name="phone">*/
/*                             </div>*/
/*                             <div class="clearfix"></div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Съобщение</label>*/
/*                                 <textarea class="form-control" rows="6" name="subject"></textarea>*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <input type="hidden" name="save" value="contact">*/
/*                                 <button type="submit" class="btn btn-default" style="margin:auto;display:block">Изпрати</button>*/
/*                             </div>*/
/*                         </div>*/
/*                           */
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         {{content}}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/* {% include '/com/footer.twig' %}*/
/* */
