<?php

/* serie/edit.html.twig */
class __TwigTemplate_33f2a44d85b737748dd0bd9428cab634d75e91762429205a13830d85343c1f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("template.html.twig", "serie/edit.html.twig", 6);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        $__internal_7dfb576f2db58734394b74e20b26710970ee68c5a21c1066136f0f7be0d32d6a = $this->env->getExtension("native_profiler");
        $__internal_7dfb576f2db58734394b74e20b26710970ee68c5a21c1066136f0f7be0d32d6a->enter($__internal_7dfb576f2db58734394b74e20b26710970ee68c5a21c1066136f0f7be0d32d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dfb576f2db58734394b74e20b26710970ee68c5a21c1066136f0f7be0d32d6a->leave($__internal_7dfb576f2db58734394b74e20b26710970ee68c5a21c1066136f0f7be0d32d6a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d8a9ff154a8f1e62e33eb8e236d83cc0082181bba1e51951a38e1793b885666 = $this->env->getExtension("native_profiler");
        $__internal_0d8a9ff154a8f1e62e33eb8e236d83cc0082181bba1e51951a38e1793b885666->enter($__internal_0d8a9ff154a8f1e62e33eb8e236d83cc0082181bba1e51951a38e1793b885666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_0d8a9ff154a8f1e62e33eb8e236d83cc0082181bba1e51951a38e1793b885666->leave($__internal_0d8a9ff154a8f1e62e33eb8e236d83cc0082181bba1e51951a38e1793b885666_prof);

    }

    public function block_container($context, array $blocks = array())
    {
        $__internal_d9725f01699d7d20f731fce8c5a442f9d901029bac79160de0da25cb9681d34d = $this->env->getExtension("native_profiler");
        $__internal_d9725f01699d7d20f731fce8c5a442f9d901029bac79160de0da25cb9681d34d->enter($__internal_d9725f01699d7d20f731fce8c5a442f9d901029bac79160de0da25cb9681d34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 29
        echo "    ";
        
        $__internal_d9725f01699d7d20f731fce8c5a442f9d901029bac79160de0da25cb9681d34d->leave($__internal_d9725f01699d7d20f731fce8c5a442f9d901029bac79160de0da25cb9681d34d_prof);

    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        $__internal_9eb22e9be289c78cfccf9d72891e1339a3fc1af49fd0e59fe1dbc0cac92419e7 = $this->env->getExtension("native_profiler");
        $__internal_9eb22e9be289c78cfccf9d72891e1339a3fc1af49fd0e59fe1dbc0cac92419e7->enter($__internal_9eb22e9be289c78cfccf9d72891e1339a3fc1af49fd0e59fe1dbc0cac92419e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "            ";
        $this->displayBlock('section', $context, $blocks);
        // line 28
        echo "        ";
        
        $__internal_9eb22e9be289c78cfccf9d72891e1339a3fc1af49fd0e59fe1dbc0cac92419e7->leave($__internal_9eb22e9be289c78cfccf9d72891e1339a3fc1af49fd0e59fe1dbc0cac92419e7_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_c90e5a97f07ea88d204b65c812f05211a9a3ef2f644b1fe61937f190362f3649 = $this->env->getExtension("native_profiler");
        $__internal_c90e5a97f07ea88d204b65c812f05211a9a3ef2f644b1fe61937f190362f3649->enter($__internal_c90e5a97f07ea88d204b65c812f05211a9a3ef2f644b1fe61937f190362f3649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "    <h1>EDITION de Serie</h1>

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input class=\"btn btn-default\" type=\"submit\" value=\"Edit\" />
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        // line 21
        echo "<div class=\"btn-group\">
            ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-default\" type=\"submit\" value=\"Delete\">
                <a class=\"btn btn-default\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("serie_index");
        echo "\">Retour à la liste</a>
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</div>
            ";
        
        $__internal_c90e5a97f07ea88d204b65c812f05211a9a3ef2f644b1fe61937f190362f3649->leave($__internal_c90e5a97f07ea88d204b65c812f05211a9a3ef2f644b1fe61937f190362f3649_prof);

    }

    public function getTemplateName()
    {
        return "serie/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  113 => 24,  108 => 22,  105 => 21,  101 => 17,  96 => 15,  92 => 14,  88 => 12,  82 => 11,  75 => 28,  72 => 11,  66 => 10,  59 => 29,  56 => 10,  43 => 9,  37 => 8,  11 => 6,);
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
/*     {% block container %}*/
/*         {% block main %}*/
/*             {% block section %}*/
/*     <h1>EDITION de Serie</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input class="btn btn-default" type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* {#*/
/*                 {% include './season/newInclude.html.twig' %}*/
/* #}*/
/* <div class="btn-group">*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-default" type="submit" value="Delete">*/
/*                 <a class="btn btn-default" href="{{ path('serie_index') }}">Retour à la liste</a>*/
/*             {{ form_end(delete_form) }}*/
/* </div>*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
