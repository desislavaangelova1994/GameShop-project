<?php

/* body.twig */
class __TwigTemplate_0197cae1b4e3c8d225f61f3a710eb176df5c9c75cf9b2c77260ec35736907022 extends Twig_Template
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
        $this->loadTemplate("/com/header.twig", "body.twig", 1)->display($context);
        // line 2
        echo "
   <div class=\"container\">
   \t\t<div class=\"dropdown open\">

\t\t<form method=\"POST\" action=\"/display1\">
\t\t\t\tМарка: 
\t\t\t\t<select class=\"selectpicker\" id=\"value\" value=\"MarkaID\" name=\"marka\" >
\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marka"]) ? $context["marka"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "MarkaID", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "marka", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t\t</select><br>
\t\t\t\t<input type=\"submit\" name=\"submit\" id=\"button\" />
\t\t</form>

\t\t</div>
\t</div>
\t

<!-- 
        <div class=\"row\">

            <div class=\"col-lg-12\">
                <h1 class=\"page-header\"></h1>
            </div>

            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/alf.png\" alt=\"alfa romeo\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/audi.png\" alt=\"audi\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/bmw\" alt=\"bmw\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/buick\" alt=\"buick\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/Chrysler.png\" alt=\"chrysler\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/citroen.png\" alt=\"citroen\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/daewoo.png\" alt=\"daewoo\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/daihatsu.jpg\" alt=\"daihatsu\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/fiat.png\" alt=\"fiat\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/ford.png\" alt=\"ford\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/honda.png\" alt=\"honda\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/hyundai.png\" alt=\"hyundai\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/isuzu.png\" alt=\"isuzu\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/lada.png\" alt=\"lada\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/lancia.png\" alt=\"lancia\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/landrover.png\" alt=\"land rover\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/mazda.png\" alt=\"mazda\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/mercedes.png\" alt=\"mercedes\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/mitsubishi.png\" alt=\"mitsubishi\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/moskvitch.png\" alt=\"moskvich\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/nissan.png\" alt=\"nissan\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/opel.png\" alt=\"opel\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/peugeot.png\" alt=\"peugeot\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/pontiac.png\" alt=\"pontiac\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/renault.png\" alt=\"renault\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/rover.png\" alt=\"rover\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/saab.png\" alt=\"saab\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/seat.png\" alt=\"seat\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/skoda.png\" alt=\"scoda\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/subaru.png\" alt=\"subaru\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/toyota.png\" alt=\"toyota\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/volvo.png\" alt=\"volvo\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/vw.png\" alt=\"volkswagen\">
                </a>
            </div>
            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                <a class=\"thumbnail\" href=\"#\">
                    <img class=\"img-responsive\" src=\"detelina/img/wartburg.png\" alt=\"wartburg\">
                </a>
            </div>
        </div>
 -->
        <hr>
    <!-- /.container -->
";
        // line 201
        $this->loadTemplate("/com/footer.twig", "body.twig", 201)->display($context);
    }

    public function getTemplateName()
    {
        return "body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 201,  45 => 12,  34 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% include '/com/header.twig' %}*/
/* */
/*    <div class="container">*/
/*    		<div class="dropdown open">*/
/* */
/* 		<form method="POST" action="/display1">*/
/* 				Марка: */
/* 				<select class="selectpicker" id="value" value="MarkaID" name="marka" >*/
/* 					{% for row in marka %}*/
/* 					<option value="{{row.MarkaID}}" >{{row.marka}}</option>*/
/* 					{% endfor %}*/
/* 				</select><br>*/
/* 				<input type="submit" name="submit" id="button" />*/
/* 		</form>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* */
/* <!-- */
/*         <div class="row">*/
/* */
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header"></h1>*/
/*             </div>*/
/* */
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/alf.png" alt="alfa romeo">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/audi.png" alt="audi">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/bmw" alt="bmw">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/buick" alt="buick">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/Chrysler.png" alt="chrysler">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/citroen.png" alt="citroen">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/daewoo.png" alt="daewoo">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/daihatsu.jpg" alt="daihatsu">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/fiat.png" alt="fiat">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/ford.png" alt="ford">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/honda.png" alt="honda">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/hyundai.png" alt="hyundai">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/isuzu.png" alt="isuzu">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/lada.png" alt="lada">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/lancia.png" alt="lancia">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/landrover.png" alt="land rover">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/mazda.png" alt="mazda">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/mercedes.png" alt="mercedes">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/mitsubishi.png" alt="mitsubishi">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/moskvitch.png" alt="moskvich">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/nissan.png" alt="nissan">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/opel.png" alt="opel">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/peugeot.png" alt="peugeot">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/pontiac.png" alt="pontiac">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/renault.png" alt="renault">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/rover.png" alt="rover">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/saab.png" alt="saab">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/seat.png" alt="seat">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/skoda.png" alt="scoda">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/subaru.png" alt="subaru">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/toyota.png" alt="toyota">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/volvo.png" alt="volvo">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/vw.png" alt="volkswagen">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-4 col-xs-6 thumb">*/
/*                 <a class="thumbnail" href="#">*/
/*                     <img class="img-responsive" src="detelina/img/wartburg.png" alt="wartburg">*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*  -->*/
/*         <hr>*/
/*     <!-- /.container -->*/
/* {% include '/com/footer.twig' %}*/
/* */
