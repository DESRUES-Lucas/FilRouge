<?php

/* includes/nav.html.twig */
class __TwigTemplate_47af24610e5b0013de9697203ffbe600090c6af5a6befb1c8d7cd737bd972bc3 extends Twig_Template
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
        $__internal_289e0b3550f57ed68448a9514550ee80bb1ea06850acbcd5ee7ab33b3e121efd = $this->env->getExtension("native_profiler");
        $__internal_289e0b3550f57ed68448a9514550ee80bb1ea06850acbcd5ee7ab33b3e121efd->enter($__internal_289e0b3550f57ed68448a9514550ee80bb1ea06850acbcd5ee7ab33b3e121efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar nav-tabs navbar-inverse\" style=\"border-top-right-radius:0px; border-top-left-radius:0px;\" role=\"navigation\">
    <div class=\"btn-group btn-group-justified\" role=\"group\">
        <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn btn-default ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "homepage")) {
            echo "active";
        }
        echo "\" type=\"button\" id = \"home\">Home</a><a href=\"";
        echo $this->env->getExtension('routing')->getPath("serie_index");
        echo "\" id = \"series\" class=\"btn btn-default ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "serie_index")) {
            echo "active";
        }
        echo "\" type=\"button\">Liste des Séries</a><a href=\"";
        echo $this->env->getExtension('routing')->getPath("individual_index");
        echo "\" id = \"next\" class=\"btn btn-default  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "individual_index")) {
            echo "active";
        }
        echo "\"  type=\"button\">Liste users</a>
    </div>
    <div class=\"date\">&nbsp;";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d . m . Y"), "html", null, true);
        echo "</div>




</nav>";
        
        $__internal_289e0b3550f57ed68448a9514550ee80bb1ea06850acbcd5ee7ab33b3e121efd->leave($__internal_289e0b3550f57ed68448a9514550ee80bb1ea06850acbcd5ee7ab33b3e121efd_prof);

    }

    public function getTemplateName()
    {
        return "includes/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  26 => 3,  22 => 1,);
    }
}
/* <nav class="navbar nav-tabs navbar-inverse" style="border-top-right-radius:0px; border-top-left-radius:0px;" role="navigation">*/
/*     <div class="btn-group btn-group-justified" role="group">*/
/*         <a href="{{ path('homepage') }}" class="btn btn-default {% if app.request.attributes.get('_route') == 'homepage' %}active{% endif %}" type="button" id = "home">Home</a><a href="{{ path('serie_index') }}" id = "series" class="btn btn-default {% if app.request.attributes.get('_route') == 'serie_index' %}active{% endif %}" type="button">Liste des Séries</a><a href="{{ path('individual_index') }}" id = "next" class="btn btn-default  {% if app.request.attributes.get('_route') == 'individual_index' %}active{% endif %}"  type="button">Liste users</a>*/
/*     </div>*/
/*     <div class="date">&nbsp;{{ "now"|date("d . m . Y") }}</div>*/
/* */
/* */
/* */
/* */
/* </nav>*/
