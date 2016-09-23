<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_941c2fa36bcbcfc57fc2d79231b29ebd161add51aae6b5ad50e9f5d619cf8362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d14635eceed639681000526d94d9b74b6964fd202f77e268e7834cc41306fc2 = $this->env->getExtension("native_profiler");
        $__internal_8d14635eceed639681000526d94d9b74b6964fd202f77e268e7834cc41306fc2->enter($__internal_8d14635eceed639681000526d94d9b74b6964fd202f77e268e7834cc41306fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d14635eceed639681000526d94d9b74b6964fd202f77e268e7834cc41306fc2->leave($__internal_8d14635eceed639681000526d94d9b74b6964fd202f77e268e7834cc41306fc2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_965fdb7e59590aca587c61ff1faffffc3864e7dfc46a8ed56dac020cd9699c09 = $this->env->getExtension("native_profiler");
        $__internal_965fdb7e59590aca587c61ff1faffffc3864e7dfc46a8ed56dac020cd9699c09->enter($__internal_965fdb7e59590aca587c61ff1faffffc3864e7dfc46a8ed56dac020cd9699c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_965fdb7e59590aca587c61ff1faffffc3864e7dfc46a8ed56dac020cd9699c09->leave($__internal_965fdb7e59590aca587c61ff1faffffc3864e7dfc46a8ed56dac020cd9699c09_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
