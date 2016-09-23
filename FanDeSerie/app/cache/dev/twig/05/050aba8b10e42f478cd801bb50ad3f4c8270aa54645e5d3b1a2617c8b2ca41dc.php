<?php

/* individual/index.html.twig */
class __TwigTemplate_cb6c29d5954cdac0d3ace4f8c861c36aa062fca5f043602a8618171b43944aee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "individual/index.html.twig", 1);
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
        $__internal_e2e2d0b16901292823160d9658ed2d99c8c68ec619ae08f6e266e00641711ea3 = $this->env->getExtension("native_profiler");
        $__internal_e2e2d0b16901292823160d9658ed2d99c8c68ec619ae08f6e266e00641711ea3->enter($__internal_e2e2d0b16901292823160d9658ed2d99c8c68ec619ae08f6e266e00641711ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "individual/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2e2d0b16901292823160d9658ed2d99c8c68ec619ae08f6e266e00641711ea3->leave($__internal_e2e2d0b16901292823160d9658ed2d99c8c68ec619ae08f6e266e00641711ea3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d19eb7a4465fd75339216c5124a9b66b926a22785a37531f937f9ed5f61d2b7 = $this->env->getExtension("native_profiler");
        $__internal_9d19eb7a4465fd75339216c5124a9b66b926a22785a37531f937f9ed5f61d2b7->enter($__internal_9d19eb7a4465fd75339216c5124a9b66b926a22785a37531f937f9ed5f61d2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_9d19eb7a4465fd75339216c5124a9b66b926a22785a37531f937f9ed5f61d2b7->leave($__internal_9d19eb7a4465fd75339216c5124a9b66b926a22785a37531f937f9ed5f61d2b7_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_e259cf2c5bc5e7301ee01db97f0725d7f7a2525c35d01cfb5b356418fd14022f = $this->env->getExtension("native_profiler");
        $__internal_e259cf2c5bc5e7301ee01db97f0725d7f7a2525c35d01cfb5b356418fd14022f->enter($__internal_e259cf2c5bc5e7301ee01db97f0725d7f7a2525c35d01cfb5b356418fd14022f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "


    ";
        
        $__internal_e259cf2c5bc5e7301ee01db97f0725d7f7a2525c35d01cfb5b356418fd14022f->leave($__internal_e259cf2c5bc5e7301ee01db97f0725d7f7a2525c35d01cfb5b356418fd14022f_prof);

    }

    // line 9
    public function block_container($context, array $blocks = array())
    {
        $__internal_2ab43a17f1eb65e7fe69ed86db5bed0460090ebd2d2793ee5333d24ee5fcb90c = $this->env->getExtension("native_profiler");
        $__internal_2ab43a17f1eb65e7fe69ed86db5bed0460090ebd2d2793ee5333d24ee5fcb90c->enter($__internal_2ab43a17f1eb65e7fe69ed86db5bed0460090ebd2d2793ee5333d24ee5fcb90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 55
        echo "    ";
        
        $__internal_2ab43a17f1eb65e7fe69ed86db5bed0460090ebd2d2793ee5333d24ee5fcb90c->leave($__internal_2ab43a17f1eb65e7fe69ed86db5bed0460090ebd2d2793ee5333d24ee5fcb90c_prof);

    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        $__internal_301d5f9164b6840a319ef09fc3db59d26a7ea76596381e4d6b8e262e2e7cc56e = $this->env->getExtension("native_profiler");
        $__internal_301d5f9164b6840a319ef09fc3db59d26a7ea76596381e4d6b8e262e2e7cc56e->enter($__internal_301d5f9164b6840a319ef09fc3db59d26a7ea76596381e4d6b8e262e2e7cc56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "            ";
        $this->displayBlock('section', $context, $blocks);
        // line 54
        echo "                ";
        
        $__internal_301d5f9164b6840a319ef09fc3db59d26a7ea76596381e4d6b8e262e2e7cc56e->leave($__internal_301d5f9164b6840a319ef09fc3db59d26a7ea76596381e4d6b8e262e2e7cc56e_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_2ba4fc7389a2bfcda5dbfaec3ff8f58abd1715e80664fecb5af90c748b81d46b = $this->env->getExtension("native_profiler");
        $__internal_2ba4fc7389a2bfcda5dbfaec3ff8f58abd1715e80664fecb5af90c748b81d46b->enter($__internal_2ba4fc7389a2bfcda5dbfaec3ff8f58abd1715e80664fecb5af90c748b81d46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "    <h1>Liste des Utilisateurs</h1>

    <table>
        <thead>
            <tr>
                ";
        // line 18
        echo "                <th>Pseudo &nbsp;</th>
                <th>Firstname &nbsp;</th>
                <th>Lastname &nbsp;</th>
                <th>Picture &nbsp;</th>
                ";
        // line 23
        echo "                <th>Dateregistration &nbsp;</th>
                <th>Birthdate &nbsp;</th>
                <th>Actions &nbsp;</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["individuals"]) ? $context["individuals"] : $this->getContext($context, "individuals")));
        foreach ($context['_seq'] as $context["_key"] => $context["individual"]) {
            // line 30
            echo "            <tr>
                ";
            // line 32
            echo "                <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("individual_show", array("id" => $this->getAttribute($context["individual"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["individual"], "username", array()), "html", null, true);
            echo "</a> &nbsp;</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["individual"], "firstName", array()), "html", null, true);
            echo " &nbsp;</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["individual"], "lastName", array()), "html", null, true);
            echo " &nbsp;</td>
                <td><img class=\"icone\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/picture/" . $this->getAttribute($context["individual"], "picture", array()))), "html", null, true);
            echo "\"/> &nbsp;</td>
                ";
            // line 37
            echo "                <td>";
            if ($this->getAttribute($context["individual"], "dateRegistration", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["individual"], "dateRegistration", array()), "Y-m-d"), "html", null, true);
            }
            echo " &nbsp;</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["individual"], "birthDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["individual"], "birthDate", array()), "Y-m-d"), "html", null, true);
            }
            echo " &nbsp;</td>
                <td>
                    <div class=\"btn-group\">
                            <a class=\"btn btn-default\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("individual_show", array("id" => $this->getAttribute($context["individual"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                            <a class=\"btn btn-default\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("individual_edit", array("id" => $this->getAttribute($context["individual"], "id", array()))), "html", null, true);
            echo "\">Editer</a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['individual'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

<div class=\"btn-group\">
    <a class=\"btn btn-default\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("individual_new");
        echo "\">Ajouter un utilisateur</a>
</div>
                    ";
        
        $__internal_2ba4fc7389a2bfcda5dbfaec3ff8f58abd1715e80664fecb5af90c748b81d46b->leave($__internal_2ba4fc7389a2bfcda5dbfaec3ff8f58abd1715e80664fecb5af90c748b81d46b_prof);

    }

    public function getTemplateName()
    {
        return "individual/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 51,  186 => 47,  175 => 42,  171 => 41,  163 => 38,  156 => 37,  152 => 35,  148 => 34,  144 => 33,  137 => 32,  134 => 30,  130 => 29,  122 => 23,  116 => 18,  109 => 12,  103 => 11,  96 => 54,  93 => 11,  87 => 10,  80 => 55,  77 => 10,  71 => 9,  61 => 5,  55 => 4,  47 => 9,  44 => 4,  38 => 3,  11 => 1,);
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
/*     <h1>Liste des Utilisateurs</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 {# <th>Id</th> #}*/
/*                 <th>Pseudo &nbsp;</th>*/
/*                 <th>Firstname &nbsp;</th>*/
/*                 <th>Lastname &nbsp;</th>*/
/*                 <th>Picture &nbsp;</th>*/
/*                 {#<th>Password</th>#}*/
/*                 <th>Dateregistration &nbsp;</th>*/
/*                 <th>Birthdate &nbsp;</th>*/
/*                 <th>Actions &nbsp;</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for individual in individuals %}*/
/*             <tr>*/
/*                 {# <td>{{ individual.id }}</td> #}*/
/*                 <td><a href="{{ path('individual_show', { 'id': individual.id }) }}">{{ individual.username }}</a> &nbsp;</td>*/
/*                 <td>{{ individual.firstName }} &nbsp;</td>*/
/*                 <td>{{ individual.lastName }} &nbsp;</td>*/
/*                 <td><img class="icone" src="{{ asset('uploads/picture/' ~ individual.picture) }}"/> &nbsp;</td>*/
/*                 {#<td>{{ individual.password }}</td>#}*/
/*                 <td>{% if individual.dateRegistration %}{{ individual.dateRegistration|date('Y-m-d') }}{% endif %} &nbsp;</td>*/
/*                 <td>{% if individual.birthDate %}{{ individual.birthDate|date('Y-m-d') }}{% endif %} &nbsp;</td>*/
/*                 <td>*/
/*                     <div class="btn-group">*/
/*                             <a class="btn btn-default" href="{{ path('individual_show', { 'id': individual.id }) }}">Voir</a>*/
/*                             <a class="btn btn-default" href="{{ path('individual_edit', { 'id': individual.id }) }}">Editer</a>*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* <div class="btn-group">*/
/*     <a class="btn btn-default" href="{{ path('individual_new') }}">Ajouter un utilisateur</a>*/
/* </div>*/
/*                     {% endblock %}*/
/*                 {% endblock %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
