<?php

/* Library/displayuser.twig */
class __TwigTemplate_452de2be2f1c3a6d6c08ffbc5a248122918b25ec3a461cfa78e6da50b6b5a6f7 extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/displayuser.twig", 1)->display($context);
        // line 2
        echo "<div class=\"table-responsive\">
\t<div class=\"container-fluid\">
\t";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["sucess"]) ? $context["sucess"] : null), "html", null, true);
        echo "
\t";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
        echo "
\t\t<table class=\"table table-bordered\">
\t\t\t<thead class=\"thead-inverse\">
\t\t\t\t<tr class=\"info\">
\t\t\t\t\t<th>ID</th>
\t\t\t\t\t<th>Firstname</th>
\t\t\t\t\t<th>Lastname</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Acess Level</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 18
            echo "\t\t<tbody>
\t\t\t<tr class=\"success\">
\t\t\t    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "user_id", array()), "html", null, true);
            echo "</td>
\t\t\t    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "firstname", array()), "html", null, true);
            echo "</td>
\t\t\t    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "lastname", array()), "html", null, true);
            echo "</td>
\t\t\t    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "access_level", array()), "html", null, true);
            echo "</td>
\t\t\t    <td>
\t\t\t\t\t<a href=\"/edit/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "user_id", array()), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"color:black;\"></a>
\t  \t\t\t\t<a href=\"/delete/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "user_id", array()), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-trash\" onclick=\"return confirm('Are you sure you want to delete?');\" aria-hidden=\"true\" style=\"color:black;\"></a>
\t  \t\t\t\t<input type=\"hidden\" name=\"user_id\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["user_id"]) ? $context["user_id"] : null), "html", null, true);
            echo "\" />

\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t</table>

    \t\t";
        // line 36
        if (((isset($context["lastPage"]) ? $context["lastPage"] : null) > 1)) {
            // line 37
            echo "
    \t\t\t";
            // line 38
            $context["extremePagesLimit"] = 3;
            // line 39
            echo "
    \t\t\t";
            // line 40
            $context["nearbyPagesLimit"] = 2;
            // line 41
            echo "
    \t\t\t<div class=\"pagination\">
            \t\t";
            // line 43
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) > 1)) {
                // line 44
                echo "            \t\t<li><a href=\"";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1), "html", null, true);
                echo "\">Previous</a></li>
            \t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t
            \t\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["lastPage"]) ? $context["lastPage"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["start"]) {
                // line 48
                echo "\t\t\t\t\t\t<li ";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) == 1), "html", null, true);
                echo ">
\t\t\t\t\t\t<a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                echo "</a></li>
            \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['start'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
            \t\t";
            // line 52
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) < (isset($context["lastPage"]) ? $context["lastPage"] : null))) {
                // line 53
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1), "html", null, true);
                echo "\">Next</a></li>
            \t\t";
            }
            // line 55
            echo "            \t</div>
    \t    ";
        }
        // line 57
        echo "\t\t
\t</div>
</div>
 
";
        // line 61
        $this->loadTemplate("/Library/common/footer.twig", "Library/displayuser.twig", 61)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/displayuser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 61,  158 => 57,  154 => 55,  148 => 53,  146 => 52,  143 => 51,  133 => 49,  128 => 48,  124 => 47,  121 => 46,  115 => 44,  113 => 43,  109 => 41,  107 => 40,  104 => 39,  102 => 38,  99 => 37,  97 => 36,  93 => 34,  81 => 28,  77 => 27,  73 => 26,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 18,  44 => 17,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* <div class="table-responsive">*/
/* 	<div class="container-fluid">*/
/* 	{{sucess}}*/
/* 	{{success}}*/
/* 		<table class="table table-bordered">*/
/* 			<thead class="thead-inverse">*/
/* 				<tr class="info">*/
/* 					<th>ID</th>*/
/* 					<th>Firstname</th>*/
/* 					<th>Lastname</th>*/
/* 					<th>Email</th>*/
/* 					<th>Acess Level</th>*/
/* 					<th></th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 		{% for row in users %}*/
/* 		<tbody>*/
/* 			<tr class="success">*/
/* 			    <td>{{row.user_id}}</td>*/
/* 			    <td>{{row.firstname}}</td>*/
/* 			    <td>{{row.lastname}}</td>*/
/* 			    <td>{{row.email}}</td>*/
/* 			    <td>{{row.access_level}}</td>*/
/* 			    <td>*/
/* 					<a href="/edit/{{row.user_id}}" class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:black;"></a>*/
/* 	  				<a href="/delete/{{row.user_id}}" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure you want to delete?');" aria-hidden="true" style="color:black;"></a>*/
/* 	  				<input type="hidden" name="user_id" value="{{user_id}}" />*/
/* */
/* 				</td>*/
/* 			</tr>*/
/* 		</tbody>*/
/* 		{% endfor %}*/
/* 		</table>*/
/* */
/*     		{% if lastPage > 1 %}*/
/* */
/*     			{% set extremePagesLimit = 3 %}*/
/* */
/*     			{% set nearbyPagesLimit = 2 %}*/
/* */
/*     			<div class="pagination">*/
/*             		{% if currentPage > 1 %}*/
/*             		<li><a href="{{currentPage-1}}">Previous</a></li>*/
/*             		{% endif %}*/
/* 						*/
/*             		{% for start in 1..lastPage %}*/
/* 						<li {{ currentPage == 1 }}>*/
/* 						<a href="{{ start }}">{{ start }}</a></li>*/
/*             		{% endfor %}*/
/* */
/*             		{% if currentPage < lastPage %}*/
/* 					<li><a href="{{currentPage+1}}">Next</a></li>*/
/*             		{% endif %}*/
/*             	</div>*/
/*     	    {% endif %}*/
/* 		*/
/* 	</div>*/
/* </div>*/
/*  */
/* {% include '/Library/common/footer.twig' %}*/
