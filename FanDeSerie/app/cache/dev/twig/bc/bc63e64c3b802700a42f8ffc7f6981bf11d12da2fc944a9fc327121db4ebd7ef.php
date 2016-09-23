<?php

/* index.html.twig */
class __TwigTemplate_8f2a136aa346a47068d6c15c2136cdff633208074cbe5b9bb2d8f30d8cf1a31b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("template.html.twig", "index.html.twig", 6);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
            'main' => array($this, 'block_main'),
            'section' => array($this, 'block_section'),
            'aside' => array($this, 'block_aside'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fa876bc37aa0ebcc57273f9269871f642a4d045e941ca8cb6543b0c7fa1c36f = $this->env->getExtension("native_profiler");
        $__internal_9fa876bc37aa0ebcc57273f9269871f642a4d045e941ca8cb6543b0c7fa1c36f->enter($__internal_9fa876bc37aa0ebcc57273f9269871f642a4d045e941ca8cb6543b0c7fa1c36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fa876bc37aa0ebcc57273f9269871f642a4d045e941ca8cb6543b0c7fa1c36f->leave($__internal_9fa876bc37aa0ebcc57273f9269871f642a4d045e941ca8cb6543b0c7fa1c36f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ad20d9a8a16a3a7579604865b08c67d1cdecfdbd3f6121f13500a98e9ae4394 = $this->env->getExtension("native_profiler");
        $__internal_5ad20d9a8a16a3a7579604865b08c67d1cdecfdbd3f6121f13500a98e9ae4394->enter($__internal_5ad20d9a8a16a3a7579604865b08c67d1cdecfdbd3f6121f13500a98e9ae4394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
        // line 28
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5ad20d9a8a16a3a7579604865b08c67d1cdecfdbd3f6121f13500a98e9ae4394->leave($__internal_5ad20d9a8a16a3a7579604865b08c67d1cdecfdbd3f6121f13500a98e9ae4394_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_4fd0d3ca1b2b83b074431bf037fb54d8b3735716fe196b59f63a52173ff042bd = $this->env->getExtension("native_profiler");
        $__internal_4fd0d3ca1b2b83b074431bf037fb54d8b3735716fe196b59f63a52173ff042bd->enter($__internal_4fd0d3ca1b2b83b074431bf037fb54d8b3735716fe196b59f63a52173ff042bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "


    ";
        
        $__internal_4fd0d3ca1b2b83b074431bf037fb54d8b3735716fe196b59f63a52173ff042bd->leave($__internal_4fd0d3ca1b2b83b074431bf037fb54d8b3735716fe196b59f63a52173ff042bd_prof);

    }

    // line 14
    public function block_container($context, array $blocks = array())
    {
        $__internal_7c5b1ffaf16a3f8949ab563327fc11e08b1851787ccf37203af97b62fb0e82e6 = $this->env->getExtension("native_profiler");
        $__internal_7c5b1ffaf16a3f8949ab563327fc11e08b1851787ccf37203af97b62fb0e82e6->enter($__internal_7c5b1ffaf16a3f8949ab563327fc11e08b1851787ccf37203af97b62fb0e82e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 15
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 26
        echo "
    ";
        
        $__internal_7c5b1ffaf16a3f8949ab563327fc11e08b1851787ccf37203af97b62fb0e82e6->leave($__internal_7c5b1ffaf16a3f8949ab563327fc11e08b1851787ccf37203af97b62fb0e82e6_prof);

    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        $__internal_cdf54dd63b644d4b3d8986585a01dd8df8473b3595c336d1955c6a2b8e2712a3 = $this->env->getExtension("native_profiler");
        $__internal_cdf54dd63b644d4b3d8986585a01dd8df8473b3595c336d1955c6a2b8e2712a3->enter($__internal_cdf54dd63b644d4b3d8986585a01dd8df8473b3595c336d1955c6a2b8e2712a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "            ";
        $this->displayBlock('section', $context, $blocks);
        // line 21
        echo "            ";
        $this->displayBlock('aside', $context, $blocks);
        // line 25
        echo "        ";
        
        $__internal_cdf54dd63b644d4b3d8986585a01dd8df8473b3595c336d1955c6a2b8e2712a3->leave($__internal_cdf54dd63b644d4b3d8986585a01dd8df8473b3595c336d1955c6a2b8e2712a3_prof);

    }

    // line 16
    public function block_section($context, array $blocks = array())
    {
        $__internal_4792fefd1c90edcc853052ea131f896e99dd68c26c6c4cb23d8f67f64ad6b60d = $this->env->getExtension("native_profiler");
        $__internal_4792fefd1c90edcc853052ea131f896e99dd68c26c6c4cb23d8f67f64ad6b60d->enter($__internal_4792fefd1c90edcc853052ea131f896e99dd68c26c6c4cb23d8f67f64ad6b60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 17
        echo "                <h1 class=\"h1\">Fans de séries</h1>
                <h2>L'édito de l'admin</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis erat ac aliquam feugiat. Quisque aliquam ornare faucibus. Cras efficitur ut nulla in scelerisque. Etiam et elit euismod, interdum neque gravida, tempus lectus. Nunc porttitor leo mauris, ac lacinia elit venenatis sit amet. Donec vitae lobortis nulla, pulvinar viverra felis. In ac purus malesuada, scelerisque nisl quis, gravida purus. Ut elementum sed sem ut congue. Vivamus tempor orci et erat interdum, in molestie magna fermentum. Nullam pharetra, est sit amet vestibulum condimentum, mauris magna lacinia urna, in interdum augue ipsum sit amet leo. Nunc dictum odio enim, nec posuere nunc venenatis a. Vestibulum hendrerit ullamcorper lacus ullamcorper viverra. Vestibulum lobortis velit eget mi congue scelerisque. Etiam eu dolor dapibus, ultricies justo a, dapibus purus. Maecenas mollis tristique pellentesque.</p>
            ";
        
        $__internal_4792fefd1c90edcc853052ea131f896e99dd68c26c6c4cb23d8f67f64ad6b60d->leave($__internal_4792fefd1c90edcc853052ea131f896e99dd68c26c6c4cb23d8f67f64ad6b60d_prof);

    }

    // line 21
    public function block_aside($context, array $blocks = array())
    {
        $__internal_efc85b063fc9275b677c137d75eeb0c8284ac932f75e5300e51647cf9f1624c4 = $this->env->getExtension("native_profiler");
        $__internal_efc85b063fc9275b677c137d75eeb0c8284ac932f75e5300e51647cf9f1624c4->enter($__internal_efc85b063fc9275b677c137d75eeb0c8284ac932f75e5300e51647cf9f1624c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 22
        echo "                ";
        // line 23
        echo "                ";
        $this->loadTemplate("./serie/index-include.html.twig", "index.html.twig", 23)->display(array_merge($context, array("series" => "[serie.id, serie.name, serie.poster]")));
        // line 24
        echo "            ";
        
        $__internal_efc85b063fc9275b677c137d75eeb0c8284ac932f75e5300e51647cf9f1624c4->leave($__internal_efc85b063fc9275b677c137d75eeb0c8284ac932f75e5300e51647cf9f1624c4_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d9db519a37b57508f2cb31c348b74b7cada3cdc76987736d2bd5354b4f1ad07 = $this->env->getExtension("native_profiler");
        $__internal_5d9db519a37b57508f2cb31c348b74b7cada3cdc76987736d2bd5354b4f1ad07->enter($__internal_5d9db519a37b57508f2cb31c348b74b7cada3cdc76987736d2bd5354b4f1ad07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        
        $__internal_5d9db519a37b57508f2cb31c348b74b7cada3cdc76987736d2bd5354b4f1ad07->leave($__internal_5d9db519a37b57508f2cb31c348b74b7cada3cdc76987736d2bd5354b4f1ad07_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 29,  146 => 28,  139 => 24,  136 => 23,  134 => 22,  128 => 21,  118 => 17,  112 => 16,  105 => 25,  102 => 21,  99 => 16,  93 => 15,  85 => 26,  82 => 15,  76 => 14,  66 => 10,  60 => 9,  52 => 28,  49 => 14,  46 => 9,  40 => 8,  11 => 6,);
    }
}
/* {#*/
/* Created by Emmanuel Delépine*/
/* * Date: 14/09/2016*/
/* app/Resources/views/user/user.html.twig*/
/* #}*/
/* {% extends 'template.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% block header %}*/
/* */
/* */
/* */
/*     {% endblock %}*/
/*     {% block container %}*/
/*         {% block main %}*/
/*             {% block section %}*/
/*                 <h1 class="h1">Fans de séries</h1>*/
/*                 <h2>L'édito de l'admin</h2>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis erat ac aliquam feugiat. Quisque aliquam ornare faucibus. Cras efficitur ut nulla in scelerisque. Etiam et elit euismod, interdum neque gravida, tempus lectus. Nunc porttitor leo mauris, ac lacinia elit venenatis sit amet. Donec vitae lobortis nulla, pulvinar viverra felis. In ac purus malesuada, scelerisque nisl quis, gravida purus. Ut elementum sed sem ut congue. Vivamus tempor orci et erat interdum, in molestie magna fermentum. Nullam pharetra, est sit amet vestibulum condimentum, mauris magna lacinia urna, in interdum augue ipsum sit amet leo. Nunc dictum odio enim, nec posuere nunc venenatis a. Vestibulum hendrerit ullamcorper lacus ullamcorper viverra. Vestibulum lobortis velit eget mi congue scelerisque. Etiam eu dolor dapibus, ultricies justo a, dapibus purus. Maecenas mollis tristique pellentesque.</p>*/
/*             {% endblock %}*/
/*             {% block aside %}*/
/*                 {#{% import './serie/index-include.html.twig' as series %}#}*/
/*                 {% include './serie/index-include.html.twig' with {'series': '[serie.id, serie.name, serie.poster]' }  %}*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/* */
/*     {% endblock %}*/
/*     {% block javascripts %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
