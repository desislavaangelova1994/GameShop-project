<?php

/* Library/displaybook.twig */
class __TwigTemplate_883f315d912c90765773ed29e66aeedc466aeb40a5416ad8b7535484a6a9ed6c extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/displaybook.twig", 1)->display($context);
        // line 2
        echo "<div class=\"table-responsive\">
\t<div class=\"container-fluid\">
\t";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["sucess"]) ? $context["sucess"] : null), "html", null, true);
        echo "
\t\t<table class=\"table table-bordered\">
\t\t\t<thead class=\"thead-inverse\">
\t\t\t\t<tr class=\"info\">
\t\t\t\t\t<th>ID</th>
\t\t\t\t\t<th>ISBN</th>
\t\t\t\t\t<th>Category</th>
\t\t\t\t\t<th>Format</th>
\t\t\t\t\t<th>Author</th>
\t\t\t\t\t<th>Title</th>
\t\t\t\t\t<th>Description</th>
\t\t\t\t\t<th>Status</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 20
            echo "\t\t\t<tbody>
\t\t\t\t<tr class=\"success\">
\t\t\t\t    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "book_id", array()), "html", null, true);
            echo "</td>
\t\t\t\t    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ISBN", array()), "html", null, true);
            echo "</td>
\t\t\t\t    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category", array()), "html", null, true);
            echo "</td>
\t\t\t\t    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "format", array()), "html", null, true);
            echo "</td>
\t\t\t\t    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "author", array()), "html", null, true);
            echo "</td>
\t\t\t\t    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
            echo "</td>
\t\t\t\t    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "status", array()), "html", null, true);
            echo "</td>
\t\t\t\t    <td>
\t\t\t\t\t\t<a href=\"/bookedit/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "book_id", array()), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"color:black;\"></a>
\t\t  \t\t\t\t<a href=\"/deletebook/";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "book_id", array()), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-trash\" onclick=\"return confirm('Are you sure you want to delete?');\" aria-hidden=\"true\" style=\"color:black;\"></a>
\t\t  \t\t\t\t<input type=\"hidden\" name=\"user_id\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["user_id"]) ? $context["user_id"] : null), "html", null, true);
            echo "\" />

\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t</table>
\t\t";
        // line 40
        if (((isset($context["lastPage"]) ? $context["lastPage"] : null) > 1)) {
            // line 41
            echo "
    \t\t\t";
            // line 42
            $context["extremePagesLimit"] = 3;
            // line 43
            echo "
    \t\t\t";
            // line 44
            $context["nearbyPagesLimit"] = 2;
            // line 45
            echo "
    \t\t\t<div class=\"pagination\">
            \t\t";
            // line 47
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) > 1)) {
                // line 48
                echo "            \t\t<li><a href=\"";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1), "html", null, true);
                echo "\">Previous</a></li>
            \t\t";
            }
            // line 50
            echo "
            \t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["lastPage"]) ? $context["lastPage"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["start"]) {
                // line 52
                echo "\t\t\t\t\t\t<li ";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) == 1), "html", null, true);
                echo ">
\t\t\t\t\t\t<a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                echo "</a></li>
            \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['start'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
            \t\t";
            // line 56
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) < (isset($context["lastPage"]) ? $context["lastPage"] : null))) {
                // line 57
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1), "html", null, true);
                echo "\">Next</a></li>
            \t\t";
            }
            // line 59
            echo "            \t</div>
    \t";
        }
        // line 61
        echo "\t</div>
</div>
 
";
        // line 64
        $this->loadTemplate("/Library/common/footer.twig", "Library/displaybook.twig", 64)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/displaybook.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 64,  168 => 61,  164 => 59,  158 => 57,  156 => 56,  153 => 55,  143 => 53,  138 => 52,  134 => 51,  131 => 50,  125 => 48,  123 => 47,  119 => 45,  117 => 44,  114 => 43,  112 => 42,  109 => 41,  107 => 40,  104 => 39,  92 => 33,  88 => 32,  84 => 31,  79 => 29,  75 => 28,  71 => 27,  67 => 26,  63 => 25,  59 => 24,  55 => 23,  51 => 22,  47 => 20,  43 => 19,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* <div class="table-responsive">*/
/* 	<div class="container-fluid">*/
/* 	{{sucess}}*/
/* 		<table class="table table-bordered">*/
/* 			<thead class="thead-inverse">*/
/* 				<tr class="info">*/
/* 					<th>ID</th>*/
/* 					<th>ISBN</th>*/
/* 					<th>Category</th>*/
/* 					<th>Format</th>*/
/* 					<th>Author</th>*/
/* 					<th>Title</th>*/
/* 					<th>Description</th>*/
/* 					<th>Status</th>*/
/* 					<th></th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 		{% for row in books %}*/
/* 			<tbody>*/
/* 				<tr class="success">*/
/* 				    <td>{{row.book_id}}</td>*/
/* 				    <td>{{row.ISBN}}</td>*/
/* 				    <td>{{row.category}}</td>*/
/* 				    <td>{{row.format}}</td>*/
/* 				    <td>{{row.author}}</td>*/
/* 				    <td>{{row.title}}</td>*/
/* 				    <td>{{row.description}}</td>*/
/* 				    <td>{{row.status}}</td>*/
/* 				    <td>*/
/* 						<a href="/bookedit/{{row.book_id}}" class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:black;"></a>*/
/* 		  				<a href="/deletebook/{{row.book_id}}" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure you want to delete?');" aria-hidden="true" style="color:black;"></a>*/
/* 		  				<input type="hidden" name="user_id" value="{{user_id}}" />*/
/* */
/* 					</td>*/
/* 				</tr>*/
/* 			</tbody>*/
/* 		{% endfor %}*/
/* 		</table>*/
/* 		{% if lastPage > 1 %}*/
/* */
/*     			{% set extremePagesLimit = 3 %}*/
/* */
/*     			{% set nearbyPagesLimit = 2 %}*/
/* */
/*     			<div class="pagination">*/
/*             		{% if currentPage > 1 %}*/
/*             		<li><a href="{{currentPage-1}}">Previous</a></li>*/
/*             		{% endif %}*/
/* */
/*             		{% for start in 1..lastPage %}*/
/* 						<li {{ currentPage == 1 }}>*/
/* 						<a href="{{ start }}">{{ start }}</a></li>*/
/*             		{% endfor %}*/
/* */
/*             		{% if currentPage < lastPage %}*/
/* 					<li><a href="{{currentPage+1}}">Next</a></li>*/
/*             		{% endif %}*/
/*             	</div>*/
/*     	{% endif %}*/
/* 	</div>*/
/* </div>*/
/*  */
/* {% include '/Library/common/footer.twig' %}*/
