<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4cd888d1b03cbc165948dcb738f4c53805e27412230bc82355457287fdeb984a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f23d9279d5c46aa3dccd40c15dd5867a83f50eece61ae66a01670cb8e53a329f = $this->env->getExtension("native_profiler");
        $__internal_f23d9279d5c46aa3dccd40c15dd5867a83f50eece61ae66a01670cb8e53a329f->enter($__internal_f23d9279d5c46aa3dccd40c15dd5867a83f50eece61ae66a01670cb8e53a329f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f23d9279d5c46aa3dccd40c15dd5867a83f50eece61ae66a01670cb8e53a329f->leave($__internal_f23d9279d5c46aa3dccd40c15dd5867a83f50eece61ae66a01670cb8e53a329f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37f34907f7b2dccc234194794dae2891bae5adffc2dac312a0ffc83d863b62bb = $this->env->getExtension("native_profiler");
        $__internal_37f34907f7b2dccc234194794dae2891bae5adffc2dac312a0ffc83d863b62bb->enter($__internal_37f34907f7b2dccc234194794dae2891bae5adffc2dac312a0ffc83d863b62bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_37f34907f7b2dccc234194794dae2891bae5adffc2dac312a0ffc83d863b62bb->leave($__internal_37f34907f7b2dccc234194794dae2891bae5adffc2dac312a0ffc83d863b62bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_159dbc17bceef96511458ed973a3ccd04cb7b9b2264bd889d80cf0a0e9e9fe5e = $this->env->getExtension("native_profiler");
        $__internal_159dbc17bceef96511458ed973a3ccd04cb7b9b2264bd889d80cf0a0e9e9fe5e->enter($__internal_159dbc17bceef96511458ed973a3ccd04cb7b9b2264bd889d80cf0a0e9e9fe5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_159dbc17bceef96511458ed973a3ccd04cb7b9b2264bd889d80cf0a0e9e9fe5e->leave($__internal_159dbc17bceef96511458ed973a3ccd04cb7b9b2264bd889d80cf0a0e9e9fe5e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0584ed57b1c229d9f6d08c45e48d7e8ddf5197e08cc58b1260c95fc0f657f326 = $this->env->getExtension("native_profiler");
        $__internal_0584ed57b1c229d9f6d08c45e48d7e8ddf5197e08cc58b1260c95fc0f657f326->enter($__internal_0584ed57b1c229d9f6d08c45e48d7e8ddf5197e08cc58b1260c95fc0f657f326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0584ed57b1c229d9f6d08c45e48d7e8ddf5197e08cc58b1260c95fc0f657f326->leave($__internal_0584ed57b1c229d9f6d08c45e48d7e8ddf5197e08cc58b1260c95fc0f657f326_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
