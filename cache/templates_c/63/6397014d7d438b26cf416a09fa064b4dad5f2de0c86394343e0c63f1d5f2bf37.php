<?php

/* /common/menu.twig */
class __TwigTemplate_d3d8c23662c430c99c78ab561b6c0a4e95a28b74e23bbfb29806786208ba5d5e extends Twig_Template
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
        echo " <!-- Navigation -->
    <a id=\"menu-toggle\" href=\"#\" class=\"btn btn-dark btn-lg toggle\"><i class=\"fa fa-bars\"></i></a>
    <nav id=\"sidebar-wrapper\">
        <ul class=\"sidebar-nav\">
            <a id=\"menu-close\" href=\"#\" class=\"btn btn-light btn-lg pull-right toggle\"><i class=\"fa fa-times\"></i></a>
            <li class=\"sidebar-brand\">
                <a href=\"#top\" onclick=\$(\"#menu-close\").click();>Меню</a>
            </li>
            <li>
                <a href=\"#top\" onclick=\$(\"#menu-close\").click();>Начало</a>
            </li>
            <li>
                <a href=\"#about\" id=\"menu-about\">За нас</a>
            </li>
            <li>
                <a href=\"#services\" onclick=\$(\"#menu-close\").click();>Услуги</a>
            </li>
            <li>
                <a href=\"#portfolio\" onclick=\$(\"#menu-close\").click();>Каталог</a>
            </li>
            <li>
                <a href=\"#contact\" onclick=\$(\"#menu-close\").click();>Контакти</a>
            </li>
        </ul>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "/common/menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/*  <!-- Navigation -->*/
/*     <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>*/
/*     <nav id="sidebar-wrapper">*/
/*         <ul class="sidebar-nav">*/
/*             <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>*/
/*             <li class="sidebar-brand">*/
/*                 <a href="#top" onclick=$("#menu-close").click();>Меню</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#top" onclick=$("#menu-close").click();>Начало</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#about" id="menu-about">За нас</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#services" onclick=$("#menu-close").click();>Услуги</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#portfolio" onclick=$("#menu-close").click();>Каталог</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#contact" onclick=$("#menu-close").click();>Контакти</a>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/* */
