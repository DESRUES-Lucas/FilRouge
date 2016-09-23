<?php

/* individual/show.html.twig */
class __TwigTemplate_4daabd1f1a44338aa30d7fa20bd0c46822c3f35fc49e5a5263ba2f608e8aca3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "individual/show.html.twig", 1);
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
        $__internal_1fe61c5aaa95627f6aaa9aecf61e95f84f4c67da1857ad9dfeed8009859c07b6 = $this->env->getExtension("native_profiler");
        $__internal_1fe61c5aaa95627f6aaa9aecf61e95f84f4c67da1857ad9dfeed8009859c07b6->enter($__internal_1fe61c5aaa95627f6aaa9aecf61e95f84f4c67da1857ad9dfeed8009859c07b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "individual/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe61c5aaa95627f6aaa9aecf61e95f84f4c67da1857ad9dfeed8009859c07b6->leave($__internal_1fe61c5aaa95627f6aaa9aecf61e95f84f4c67da1857ad9dfeed8009859c07b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c03ec33302097ff43e8dad593006b7585bbd5bc1f1e406ac8c4c5cb9b9f72a3 = $this->env->getExtension("native_profiler");
        $__internal_3c03ec33302097ff43e8dad593006b7585bbd5bc1f1e406ac8c4c5cb9b9f72a3->enter($__internal_3c03ec33302097ff43e8dad593006b7585bbd5bc1f1e406ac8c4c5cb9b9f72a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_3c03ec33302097ff43e8dad593006b7585bbd5bc1f1e406ac8c4c5cb9b9f72a3->leave($__internal_3c03ec33302097ff43e8dad593006b7585bbd5bc1f1e406ac8c4c5cb9b9f72a3_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_e6c1cd9fd723136abf914f78ab5efbde8c71ee9b6e89bee025ff18fd37e4ee33 = $this->env->getExtension("native_profiler");
        $__internal_e6c1cd9fd723136abf914f78ab5efbde8c71ee9b6e89bee025ff18fd37e4ee33->enter($__internal_e6c1cd9fd723136abf914f78ab5efbde8c71ee9b6e89bee025ff18fd37e4ee33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "


    ";
        
        $__internal_e6c1cd9fd723136abf914f78ab5efbde8c71ee9b6e89bee025ff18fd37e4ee33->leave($__internal_e6c1cd9fd723136abf914f78ab5efbde8c71ee9b6e89bee025ff18fd37e4ee33_prof);

    }

    // line 9
    public function block_container($context, array $blocks = array())
    {
        $__internal_50d8d396f7ed13494325cad54de1b385f18cedc83015a886b5f65d3950202428 = $this->env->getExtension("native_profiler");
        $__internal_50d8d396f7ed13494325cad54de1b385f18cedc83015a886b5f65d3950202428->enter($__internal_50d8d396f7ed13494325cad54de1b385f18cedc83015a886b5f65d3950202428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 64
        echo "    ";
        
        $__internal_50d8d396f7ed13494325cad54de1b385f18cedc83015a886b5f65d3950202428->leave($__internal_50d8d396f7ed13494325cad54de1b385f18cedc83015a886b5f65d3950202428_prof);

    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        $__internal_f34ed63c3396a29c3205d1223977efeea3799b4aa2623ef985a9b75f87dd92ae = $this->env->getExtension("native_profiler");
        $__internal_f34ed63c3396a29c3205d1223977efeea3799b4aa2623ef985a9b75f87dd92ae->enter($__internal_f34ed63c3396a29c3205d1223977efeea3799b4aa2623ef985a9b75f87dd92ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "            ";
        $this->displayBlock('section', $context, $blocks);
        // line 63
        echo "            ";
        
        $__internal_f34ed63c3396a29c3205d1223977efeea3799b4aa2623ef985a9b75f87dd92ae->leave($__internal_f34ed63c3396a29c3205d1223977efeea3799b4aa2623ef985a9b75f87dd92ae_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_cd9528d677ddf5c9b2ae5c286e91d47604a753fd79486726fde0dc4aa1dc5ec1 = $this->env->getExtension("native_profiler");
        $__internal_cd9528d677ddf5c9b2ae5c286e91d47604a753fd79486726fde0dc4aa1dc5ec1->enter($__internal_cd9528d677ddf5c9b2ae5c286e91d47604a753fd79486726fde0dc4aa1dc5ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "    <h1>Utilisateur</h1>

    <table>
        <tbody>
            ";
        // line 22
        echo "            <tr>
                <th>Pseudo: &nbsp;</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["individual"]) ? $context["individual"] : $this->getContext($context, "individual")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prénom: &nbsp;</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["individual"]) ? $context["individual"] : $this->getContext($context, "individual")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom: &nbsp;</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["individual"]) ? $context["individual"] : $this->getContext($context, "individual")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo: &nbsp;</th>
                <td><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/picture/" . $this->getAttribute((isset($context["individual"]) ? $context["individual"] : $this->getContext($context, "individual")), "picture", array()))), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr>
                <th>Password: &nbsp;</th>
                <td>Vous seul le connaissez.";
        // line 40
        echo "</td>
            </tr>
            <tr>
                <th>Date d'inscription: &nbsp;</th>
                <td>";
        // line 44
        if ($this->getAttribute((isset($context["individual"]) ? $context["individual"] : $this->getContext($context, "individual")), "dateRegistration", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["individual"]) ? $context["individual"] : $this->getContext($context, "individual")), "dateRegistration", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>";
        // line 48
        if ($this->getAttribute((isset($context["individual"]) ? $context["individual"] : $this->getContext($context, "individual")), "birthDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["individual"]) ? $context["individual"] : $this->getContext($context, "individual")), "birthDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"btn-group\">

            <a class=\"btn btn-default\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("individual_index");
        echo "\">Liste des utilisateurs</a>
            <a class=\"btn btn-default\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("individual_edit", array("id" => $this->getAttribute((isset($context["individual"]) ? $context["individual"] : $this->getContext($context, "individual")), "id", array()))), "html", null, true);
        echo "\">Editer le profil</a>
            ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-default\" type=\"submit\" value=\"Delete\">
            ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </div>
                ";
        
        $__internal_cd9528d677ddf5c9b2ae5c286e91d47604a753fd79486726fde0dc4aa1dc5ec1->leave($__internal_cd9528d677ddf5c9b2ae5c286e91d47604a753fd79486726fde0dc4aa1dc5ec1_prof);

    }

    public function getTemplateName()
    {
        return "individual/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 59,  182 => 57,  178 => 56,  174 => 55,  162 => 48,  153 => 44,  147 => 40,  140 => 36,  133 => 32,  126 => 28,  119 => 24,  115 => 22,  109 => 12,  103 => 11,  96 => 63,  93 => 11,  87 => 10,  80 => 64,  77 => 10,  71 => 9,  61 => 5,  55 => 4,  47 => 9,  44 => 4,  38 => 3,  11 => 1,);
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
/*     <h1>Utilisateur</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             {#*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ individual.id }}</td>*/
/*             </tr>*/
/*             #}*/
/*             <tr>*/
/*                 <th>Pseudo: &nbsp;</th>*/
/*                 <td>{{ individual.username }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prénom: &nbsp;</th>*/
/*                 <td>{{ individual.firstName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom: &nbsp;</th>*/
/*                 <td>{{ individual.lastName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Photo: &nbsp;</th>*/
/*                 <td><img src="{{ asset('uploads/picture/' ~ individual.picture) }}"/></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Password: &nbsp;</th>*/
/*                 <td>Vous seul le connaissez.{#{{ individual.password }}#}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date d'inscription: &nbsp;</th>*/
/*                 <td>{% if individual.dateRegistration %}{{ individual.dateRegistration|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date de naissance</th>*/
/*                 <td>{% if individual.birthDate %}{{ individual.birthDate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <div class="btn-group">*/
/* */
/*             <a class="btn btn-default" href="{{ path('individual_index') }}">Liste des utilisateurs</a>*/
/*             <a class="btn btn-default" href="{{ path('individual_edit', { 'id': individual.id }) }}">Editer le profil</a>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-default" type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/* */
/*     </div>*/
/*                 {% endblock %}*/
/*             {% endblock %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
