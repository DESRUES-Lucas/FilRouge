<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_23beb02384728468753bca778f1f7613e0426edf035e8cbdac6b5e42fd956c7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::template.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33df601df770cb84afef4fbb044e0ba474244a5f77070a2d191ed1d017816aaa = $this->env->getExtension("native_profiler");
        $__internal_33df601df770cb84afef4fbb044e0ba474244a5f77070a2d191ed1d017816aaa->enter($__internal_33df601df770cb84afef4fbb044e0ba474244a5f77070a2d191ed1d017816aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33df601df770cb84afef4fbb044e0ba474244a5f77070a2d191ed1d017816aaa->leave($__internal_33df601df770cb84afef4fbb044e0ba474244a5f77070a2d191ed1d017816aaa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef24e7498e5c3ef9dcaa6c0c29bf6a04d3d26b2cd886c1c5863451685e7359dc = $this->env->getExtension("native_profiler");
        $__internal_ef24e7498e5c3ef9dcaa6c0c29bf6a04d3d26b2cd886c1c5863451685e7359dc->enter($__internal_ef24e7498e5c3ef9dcaa6c0c29bf6a04d3d26b2cd886c1c5863451685e7359dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "

";
        
        $__internal_ef24e7498e5c3ef9dcaa6c0c29bf6a04d3d26b2cd886c1c5863451685e7359dc->leave($__internal_ef24e7498e5c3ef9dcaa6c0c29bf6a04d3d26b2cd886c1c5863451685e7359dc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::template.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
