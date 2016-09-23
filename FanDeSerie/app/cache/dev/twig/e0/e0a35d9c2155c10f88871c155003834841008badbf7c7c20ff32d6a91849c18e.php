<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9989a9999a1da6cf6d9c0a29545aa9de261dcc180c9a1e37391df3b576a243d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5df95e4f32ca89e5b6af5789a940b0d759098c8d4944f296fac1f81f6c4e2fec = $this->env->getExtension("native_profiler");
        $__internal_5df95e4f32ca89e5b6af5789a940b0d759098c8d4944f296fac1f81f6c4e2fec->enter($__internal_5df95e4f32ca89e5b6af5789a940b0d759098c8d4944f296fac1f81f6c4e2fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5df95e4f32ca89e5b6af5789a940b0d759098c8d4944f296fac1f81f6c4e2fec->leave($__internal_5df95e4f32ca89e5b6af5789a940b0d759098c8d4944f296fac1f81f6c4e2fec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8de284975d37205f5782a78a76f631a97612dba1fb38fcddc938c03c6fa09ec5 = $this->env->getExtension("native_profiler");
        $__internal_8de284975d37205f5782a78a76f631a97612dba1fb38fcddc938c03c6fa09ec5->enter($__internal_8de284975d37205f5782a78a76f631a97612dba1fb38fcddc938c03c6fa09ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_8de284975d37205f5782a78a76f631a97612dba1fb38fcddc938c03c6fa09ec5->leave($__internal_8de284975d37205f5782a78a76f631a97612dba1fb38fcddc938c03c6fa09ec5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "template.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
