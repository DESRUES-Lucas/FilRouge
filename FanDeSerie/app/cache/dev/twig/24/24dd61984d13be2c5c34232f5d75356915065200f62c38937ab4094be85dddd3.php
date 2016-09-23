<?php

/* individual/new.html.twig */
class __TwigTemplate_5399b79a954885b7b5469fb0b7c584dd9f643dc8f01fa211438b251ef8db0102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "individual/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
            'main' => array($this, 'block_main'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a1478b6ec46f386ea905adc8356f33bbacb606d25626a49cda54137da70f3c9 = $this->env->getExtension("native_profiler");
        $__internal_0a1478b6ec46f386ea905adc8356f33bbacb606d25626a49cda54137da70f3c9->enter($__internal_0a1478b6ec46f386ea905adc8356f33bbacb606d25626a49cda54137da70f3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "individual/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a1478b6ec46f386ea905adc8356f33bbacb606d25626a49cda54137da70f3c9->leave($__internal_0a1478b6ec46f386ea905adc8356f33bbacb606d25626a49cda54137da70f3c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3477efc3d286a9ba33186bbfab8a9fe3ab23e2c8321e099e5eb308f1ad1ff904 = $this->env->getExtension("native_profiler");
        $__internal_3477efc3d286a9ba33186bbfab8a9fe3ab23e2c8321e099e5eb308f1ad1ff904->enter($__internal_3477efc3d286a9ba33186bbfab8a9fe3ab23e2c8321e099e5eb308f1ad1ff904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_3477efc3d286a9ba33186bbfab8a9fe3ab23e2c8321e099e5eb308f1ad1ff904->leave($__internal_3477efc3d286a9ba33186bbfab8a9fe3ab23e2c8321e099e5eb308f1ad1ff904_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_ed3125bcf8b8b647a587f0613a32944193cf1f5d0dfdbd8e8d165de42f406a26 = $this->env->getExtension("native_profiler");
        $__internal_ed3125bcf8b8b647a587f0613a32944193cf1f5d0dfdbd8e8d165de42f406a26->enter($__internal_ed3125bcf8b8b647a587f0613a32944193cf1f5d0dfdbd8e8d165de42f406a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "


    ";
        
        $__internal_ed3125bcf8b8b647a587f0613a32944193cf1f5d0dfdbd8e8d165de42f406a26->leave($__internal_ed3125bcf8b8b647a587f0613a32944193cf1f5d0dfdbd8e8d165de42f406a26_prof);

    }

    // line 9
    public function block_container($context, array $blocks = array())
    {
        $__internal_b5eb2800551f3ad2826514711782de35552c6ae79474b095b81e9cda3b045042 = $this->env->getExtension("native_profiler");
        $__internal_b5eb2800551f3ad2826514711782de35552c6ae79474b095b81e9cda3b045042->enter($__internal_b5eb2800551f3ad2826514711782de35552c6ae79474b095b81e9cda3b045042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 24
        echo "    ";
        
        $__internal_b5eb2800551f3ad2826514711782de35552c6ae79474b095b81e9cda3b045042->leave($__internal_b5eb2800551f3ad2826514711782de35552c6ae79474b095b81e9cda3b045042_prof);

    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        $__internal_a619657d165cfb66a60fed02e4247ff8ce36eb181f8e7dfd58d784da890f34ec = $this->env->getExtension("native_profiler");
        $__internal_a619657d165cfb66a60fed02e4247ff8ce36eb181f8e7dfd58d784da890f34ec->enter($__internal_a619657d165cfb66a60fed02e4247ff8ce36eb181f8e7dfd58d784da890f34ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "            ";
        $this->displayBlock('section', $context, $blocks);
        // line 23
        echo "            ";
        
        $__internal_a619657d165cfb66a60fed02e4247ff8ce36eb181f8e7dfd58d784da890f34ec->leave($__internal_a619657d165cfb66a60fed02e4247ff8ce36eb181f8e7dfd58d784da890f34ec_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_acc5805596e71bfc6ddf2c884f23922b603c24821cdbe7fe83c453ae9f2c5fc2 = $this->env->getExtension("native_profiler");
        $__internal_acc5805596e71bfc6ddf2c884f23922b603c24821cdbe7fe83c453ae9f2c5fc2->enter($__internal_acc5805596e71bfc6ddf2c884f23922b603c24821cdbe7fe83c453ae9f2c5fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "    <h1>Ajout d'un utilistaeur</h1>

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <div class=\"btn-group\">
        <a class=\"btn btn-default\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("individual_index");
        echo "\">Liste des utilisateurs</a>
    </div>
                ";
        
        $__internal_acc5805596e71bfc6ddf2c884f23922b603c24821cdbe7fe83c453ae9f2c5fc2->leave($__internal_acc5805596e71bfc6ddf2c884f23922b603c24821cdbe7fe83c453ae9f2c5fc2_prof);

    }

    public function getTemplateName()
    {
        return "individual/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 20,  122 => 17,  117 => 15,  113 => 14,  109 => 12,  103 => 11,  96 => 23,  93 => 11,  87 => 10,  80 => 24,  77 => 10,  71 => 9,  61 => 5,  55 => 4,  47 => 9,  44 => 4,  38 => 3,  11 => 1,);
    }
}
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
/*     <h1>Ajout d'un utilistaeur</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <div class="btn-group">*/
/*         <a class="btn btn-default" href="{{ path('individual_index') }}">Liste des utilisateurs</a>*/
/*     </div>*/
/*                 {% endblock %}*/
/*             {% endblock %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
