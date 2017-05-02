<?php

/* Library/adminpanel.twig */
class __TwigTemplate_65c88bbdfd111729071e6611a013ef8635f10ce6bc3339ea3970c81086eae3ee extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/adminpanel.twig", 1)->display($context);
        // line 2
        echo twig_escape_filter($this->env, (isset($context["sucess"]) ? $context["sucess"] : null), "html", null, true);
        echo "

<div class=\"row\">
\t<div class=\"col-sm-6 col-sm-offset-3\">
\t\t<form action=\"/search\" class=\"form-horizontal\" method=\"post\" accept-charset=\"utf-8\">
\t\t\t<div class=\"input-group stylish-input-group\">
\t\t\t    <input name=\"search\" id=\"search\" class=\"form-control\" type=\"text\" placeholder=\"Search for a book...\">
\t\t\t        <span class=\"input-group-addon\" >
\t\t\t           \t<button type=\"submit\" id=\"button\" style=\"background:transparent;border:0;\">
\t\t\t            <span class=\"glyphicon glyphicon-search\"></span>
\t\t\t            </button>
\t\t\t        </span>
\t\t\t            
\t\t\t</div>
\t\t</form>
\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true);
        echo "

\t\t<div class=\"list-group\" >
\t\t\t<div id=\"results\" class=\"panel-heading\">\t\t
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["title"]) ? $context["title"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 22
            echo "\t\t\t\t\t\t<ul  class=\"panel panel-info\" align=\"center\">

\t\t\t\t\t\t\t<h4><b>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
            echo "</b></h4>\t\t\t
\t\t\t\t\t\t\t<h5>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "authors", array()), 0, array()), "html", null, true);
            echo " </h5>
\t\t\t\t\t\t\t<h5 >";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "authors", array()), 1, array()), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<!-- <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "publisher", array()), "html", null, true);
            echo "</p> -->
\t\t\t\t\t\t\t<p style=\"white-space: nowrap;overflow: hidden; text-overflow: ellipsis;\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "description", array()), "html", null, true);
            echo "</p>

\t\t\t\t\t\t\t<img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "imageLinks", array()), "thumbnail", array()), "html", null, true);
            echo "\"></img>
\t\t\t\t\t\t</ul>\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 37
        if (((isset($context["countItems"]) ? $context["countItems"] : null) > 1)) {
            // line 38
            echo "\t\t\t";
            $context["limit"] = 5;
            // line 39
            echo "    \t\t\t<div class=\"pagination\">
            \t\t";
            // line 40
            if (((isset($context["countItems"]) ? $context["countItems"] : null) > 1)) {
                // line 41
                echo "            \t\t<li><a href=\"";
                echo twig_escape_filter($this->env, ((isset($context["countItems"]) ? $context["countItems"] : null) - 1), "html", null, true);
                echo "\">Previous</a></li>
            \t\t";
            }
            // line 43
            echo "
            \t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["lastPage"]) ? $context["lastPage"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["start"]) {
                // line 45
                echo "
            \t\t";
                // line 46
                $context["start"] = 1;
                // line 47
                echo "\t\t\t\t\t\t<li ";
                echo twig_escape_filter($this->env, ((isset($context["countItems"]) ? $context["countItems"] : null) == 1), "html", null, true);
                echo ">
\t\t\t\t\t\t<a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                echo "</a>
\t\t\t\t\t\t</li>
            \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['start'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
            \t\t";
            // line 52
            if (((isset($context["countItems"]) ? $context["countItems"] : null) < (isset($context["lastPage"]) ? $context["lastPage"] : null))) {
                // line 53
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, ((isset($context["countItems"]) ? $context["countItems"] : null) + 1), "html", null, true);
                echo "\">Next</a></li>
            \t\t";
            }
            // line 55
            echo "            \t</div>
    \t";
        }
        // line 57
        echo "</div>

\t


 
";
        // line 63
        $this->loadTemplate("/Library/common/footer.twig", "Library/adminpanel.twig", 63)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/adminpanel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 63,  149 => 57,  145 => 55,  139 => 53,  137 => 52,  134 => 51,  123 => 48,  118 => 47,  116 => 46,  113 => 45,  109 => 44,  106 => 43,  100 => 41,  98 => 40,  95 => 39,  92 => 38,  90 => 37,  84 => 33,  75 => 30,  70 => 28,  66 => 27,  62 => 26,  58 => 25,  54 => 24,  50 => 22,  46 => 21,  39 => 17,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* {{sucess}}*/
/* */
/* <div class="row">*/
/* 	<div class="col-sm-6 col-sm-offset-3">*/
/* 		<form action="/search" class="form-horizontal" method="post" accept-charset="utf-8">*/
/* 			<div class="input-group stylish-input-group">*/
/* 			    <input name="search" id="search" class="form-control" type="text" placeholder="Search for a book...">*/
/* 			        <span class="input-group-addon" >*/
/* 			           	<button type="submit" id="button" style="background:transparent;border:0;">*/
/* 			            <span class="glyphicon glyphicon-search"></span>*/
/* 			            </button>*/
/* 			        </span>*/
/* 			            */
/* 			</div>*/
/* 		</form>*/
/* 			{{empty}}*/
/* */
/* 		<div class="list-group" >*/
/* 			<div id="results" class="panel-heading">		*/
/* 				{% for result in title %}*/
/* 						<ul  class="panel panel-info" align="center">*/
/* */
/* 							<h4><b>{{ result.title }}</b></h4>			*/
/* 							<h5>{{result.authors.0}} </h5>*/
/* 							<h5 >{{ result.authors.1}}</h5>*/
/* 							<!-- <p>{{ result.publisher }}</p> -->*/
/* 							<p style="white-space: nowrap;overflow: hidden; text-overflow: ellipsis;">{{ result.description}}</p>*/
/* */
/* 							<img src="{{result.imageLinks.thumbnail }}"></img>*/
/* 						</ul>	*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{% if countItems > 1 %}*/
/* 			{% set limit = 5 %}*/
/*     			<div class="pagination">*/
/*             		{% if countItems > 1 %}*/
/*             		<li><a href="{{countItems-1}}">Previous</a></li>*/
/*             		{% endif %}*/
/* */
/*             		{% for start in 1..lastPage %}*/
/* */
/*             		{% set start = 1 %}*/
/* 						<li {{ countItems == 1 }}>*/
/* 						<a href="{{ start }}">{{ start }}</a>*/
/* 						</li>*/
/*             		{% endfor %}*/
/* */
/*             		{% if countItems < lastPage %}*/
/* 					<li><a href="{{countItems+1}}">Next</a></li>*/
/*             		{% endif %}*/
/*             	</div>*/
/*     	{% endif %}*/
/* </div>*/
/* */
/* 	*/
/* */
/* */
/*  */
/* {% include '/Library/common/footer.twig' %}*/
