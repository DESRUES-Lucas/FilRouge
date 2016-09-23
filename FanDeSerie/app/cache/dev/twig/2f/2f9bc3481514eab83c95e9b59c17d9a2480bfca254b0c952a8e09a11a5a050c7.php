<?php

/* serie/index.html.twig */
class __TwigTemplate_235a0fc00ca31c8565191eb492775cbf865f02ad444c0ddfb2d192b51e5a6913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("template.html.twig", "serie/index.html.twig", 6);
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
        $__internal_b33a25cffd949e1851ea91a567fbf608b8def29978d37106ee04c03fd33f4498 = $this->env->getExtension("native_profiler");
        $__internal_b33a25cffd949e1851ea91a567fbf608b8def29978d37106ee04c03fd33f4498->enter($__internal_b33a25cffd949e1851ea91a567fbf608b8def29978d37106ee04c03fd33f4498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b33a25cffd949e1851ea91a567fbf608b8def29978d37106ee04c03fd33f4498->leave($__internal_b33a25cffd949e1851ea91a567fbf608b8def29978d37106ee04c03fd33f4498_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cedaaea0ffb24a66fc326a741ecc143909d47b578e4265df9279c11865df7cbc = $this->env->getExtension("native_profiler");
        $__internal_cedaaea0ffb24a66fc326a741ecc143909d47b578e4265df9279c11865df7cbc->enter($__internal_cedaaea0ffb24a66fc326a741ecc143909d47b578e4265df9279c11865df7cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_cedaaea0ffb24a66fc326a741ecc143909d47b578e4265df9279c11865df7cbc->leave($__internal_cedaaea0ffb24a66fc326a741ecc143909d47b578e4265df9279c11865df7cbc_prof);

    }

    public function block_container($context, array $blocks = array())
    {
        $__internal_666c2ef51ee4490dd30c08256a7b0d83d8db508c4c9d0f15342f31c35fb1ae54 = $this->env->getExtension("native_profiler");
        $__internal_666c2ef51ee4490dd30c08256a7b0d83d8db508c4c9d0f15342f31c35fb1ae54->enter($__internal_666c2ef51ee4490dd30c08256a7b0d83d8db508c4c9d0f15342f31c35fb1ae54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 51
        echo "    ";
        
        $__internal_666c2ef51ee4490dd30c08256a7b0d83d8db508c4c9d0f15342f31c35fb1ae54->leave($__internal_666c2ef51ee4490dd30c08256a7b0d83d8db508c4c9d0f15342f31c35fb1ae54_prof);

    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        $__internal_86aa41a2d7ff74e103ef0401301a3bc37230ae9d098a0d0b4ccc25c0f72e3529 = $this->env->getExtension("native_profiler");
        $__internal_86aa41a2d7ff74e103ef0401301a3bc37230ae9d098a0d0b4ccc25c0f72e3529->enter($__internal_86aa41a2d7ff74e103ef0401301a3bc37230ae9d098a0d0b4ccc25c0f72e3529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "            ";
        $this->displayBlock('section', $context, $blocks);
        // line 50
        echo "        ";
        
        $__internal_86aa41a2d7ff74e103ef0401301a3bc37230ae9d098a0d0b4ccc25c0f72e3529->leave($__internal_86aa41a2d7ff74e103ef0401301a3bc37230ae9d098a0d0b4ccc25c0f72e3529_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_092f15ee45a0c956c583bfcbb839fae9307a1d26cb43c7392cb010dc5b5f8cf1 = $this->env->getExtension("native_profiler");
        $__internal_092f15ee45a0c956c583bfcbb839fae9307a1d26cb43c7392cb010dc5b5f8cf1->enter($__internal_092f15ee45a0c956c583bfcbb839fae9307a1d26cb43c7392cb010dc5b5f8cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "
    <h1 class=\"h1\">Liste des Series</h1>

    <table>
        <thead>
            <tr>
                ";
        // line 19
        echo "                <th>Nom</th>
                <th>Poster</th>
                <th>Resumé</th>
                ";
        // line 23
        echo "                <th> &nbsp;Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 28
            echo "            <tr>
                ";
            // line 30
            echo "                <td class=\"nomserie\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
            echo "</a> &nbsp;</td>
                <td> &nbsp;<img class=\"icone\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/poster/" . $this->getAttribute($context["serie"], "poster", array()))), "html", null, true);
            echo "\"/> &nbsp;</td>
                <td> &nbsp;";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "resume", array()), "html", null, true);
            echo " &nbsp;</td>
                ";
            // line 34
            echo "                <td class=\"btn-group\">

                        <a class=\"btn btn-default\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">show</a>

                        <a class=\"btn btn-default\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serie_edit", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">edit</a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <p><br/>
            <a class=\"btn btn-default\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("serie_new");
        echo "\">Ajouter une série</a>
    </p>
            ";
        
        $__internal_092f15ee45a0c956c583bfcbb839fae9307a1d26cb43c7392cb010dc5b5f8cf1->leave($__internal_092f15ee45a0c956c583bfcbb839fae9307a1d26cb43c7392cb010dc5b5f8cf1_prof);

    }

    public function getTemplateName()
    {
        return "serie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 47,  149 => 43,  138 => 38,  133 => 36,  129 => 34,  125 => 32,  121 => 31,  114 => 30,  111 => 28,  107 => 27,  101 => 23,  96 => 19,  88 => 12,  82 => 11,  75 => 50,  72 => 11,  66 => 10,  59 => 51,  56 => 10,  43 => 9,  37 => 8,  11 => 6,);
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
/* */
/*     <h1 class="h1">Liste des Series</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 {#<th>Id</th>#}*/
/*                 <th>Nom</th>*/
/*                 <th>Poster</th>*/
/*                 <th>Resumé</th>*/
/*                 {#<th>Starrate</th>#}*/
/*                 <th> &nbsp;Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for serie in series %}*/
/*             <tr>*/
/*                 {#<td>{{ serie.id }}</td>#}*/
/*                 <td class="nomserie"><a href="{{ path('serie_show', { 'id': serie.id }) }}">{{ serie.name }}</a> &nbsp;</td>*/
/*                 <td> &nbsp;<img class="icone" src="{{ asset('uploads/poster/' ~ serie.poster) }}"/> &nbsp;</td>*/
/*                 <td> &nbsp;{{ serie.resume }} &nbsp;</td>*/
/*                 {#<td>{{ serie.starRate }}</td>#}*/
/*                 <td class="btn-group">*/
/* */
/*                         <a class="btn btn-default" href="{{ path('serie_show', { 'id': serie.id }) }}">show</a>*/
/* */
/*                         <a class="btn btn-default" href="{{ path('serie_edit', { 'id': serie.id }) }}">edit</a>*/
/* */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <p><br/>*/
/*             <a class="btn btn-default" href="{{ path('serie_new') }}">Ajouter une série</a>*/
/*     </p>*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
