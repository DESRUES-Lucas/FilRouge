<?php

/* serie/show.html.twig */
class __TwigTemplate_97e321aac1b4b313b3d16f1394764bb6abcc68eb1c100b5957dfdbe6032e402c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("template.html.twig", "serie/show.html.twig", 6);
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
        $__internal_e3349e7a81817491e738c5d9d96eede7725d2bb6360cb207e341d7cf573bb592 = $this->env->getExtension("native_profiler");
        $__internal_e3349e7a81817491e738c5d9d96eede7725d2bb6360cb207e341d7cf573bb592->enter($__internal_e3349e7a81817491e738c5d9d96eede7725d2bb6360cb207e341d7cf573bb592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3349e7a81817491e738c5d9d96eede7725d2bb6360cb207e341d7cf573bb592->leave($__internal_e3349e7a81817491e738c5d9d96eede7725d2bb6360cb207e341d7cf573bb592_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcf2b3cb81601351d24058d1e4c9651f4edff11f0b4d61054857f9610b276614 = $this->env->getExtension("native_profiler");
        $__internal_dcf2b3cb81601351d24058d1e4c9651f4edff11f0b4d61054857f9610b276614->enter($__internal_dcf2b3cb81601351d24058d1e4c9651f4edff11f0b4d61054857f9610b276614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_dcf2b3cb81601351d24058d1e4c9651f4edff11f0b4d61054857f9610b276614->leave($__internal_dcf2b3cb81601351d24058d1e4c9651f4edff11f0b4d61054857f9610b276614_prof);

    }

    public function block_container($context, array $blocks = array())
    {
        $__internal_6a695673e88bbda93f4df66f6255e4d9d7b8a4133945632390be704e6bf439a8 = $this->env->getExtension("native_profiler");
        $__internal_6a695673e88bbda93f4df66f6255e4d9d7b8a4133945632390be704e6bf439a8->enter($__internal_6a695673e88bbda93f4df66f6255e4d9d7b8a4133945632390be704e6bf439a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 49
        echo "    ";
        
        $__internal_6a695673e88bbda93f4df66f6255e4d9d7b8a4133945632390be704e6bf439a8->leave($__internal_6a695673e88bbda93f4df66f6255e4d9d7b8a4133945632390be704e6bf439a8_prof);

    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        $__internal_1e8b6ac7d86226e77f84f70e511c2a818dacb387f8a9661ae657800f99dc7d38 = $this->env->getExtension("native_profiler");
        $__internal_1e8b6ac7d86226e77f84f70e511c2a818dacb387f8a9661ae657800f99dc7d38->enter($__internal_1e8b6ac7d86226e77f84f70e511c2a818dacb387f8a9661ae657800f99dc7d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "            ";
        $this->displayBlock('section', $context, $blocks);
        // line 48
        echo "        ";
        
        $__internal_1e8b6ac7d86226e77f84f70e511c2a818dacb387f8a9661ae657800f99dc7d38->leave($__internal_1e8b6ac7d86226e77f84f70e511c2a818dacb387f8a9661ae657800f99dc7d38_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_66d997ed033d5b77dfd4f7419b232520b8f5d753cb386bdd90d75eb1c1878a35 = $this->env->getExtension("native_profiler");
        $__internal_66d997ed033d5b77dfd4f7419b232520b8f5d753cb386bdd90d75eb1c1878a35->enter($__internal_66d997ed033d5b77dfd4f7419b232520b8f5d753cb386bdd90d75eb1c1878a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "    <h1>Serie</h1>

    <table>
        <tbody>
            ";
        // line 20
        echo "            <tr>
                <th>Titre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Poster</th>
                <td><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/poster/" . $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "poster", array()))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/poster/" . $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "poster", array()))), "html", null, true);
        echo "\"/></a></td>
            </tr>
            <tr>
                <th>Resumé</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "resume", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>
                ";
        // line 36
        echo "                ";
        // line 37
        echo "                ";
        // line 38
        echo "
<div class=\"btn-group\">
    ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <a class=\"btn btn-default\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("season_show", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
        echo "\">Saisons</a>
    <a class=\"btn btn-default\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("serie_index");
        echo "\">Retour à la liste</a>
    <a class=\"btn btn-default\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serie_edit", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
        echo "\">Edition</a>
    <input class=\"btn btn-default\" type=\"submit\" value=\"Delete\">
    ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</div>
            ";
        
        $__internal_66d997ed033d5b77dfd4f7419b232520b8f5d753cb386bdd90d75eb1c1878a35->leave($__internal_66d997ed033d5b77dfd4f7419b232520b8f5d753cb386bdd90d75eb1c1878a35_prof);

    }

    public function getTemplateName()
    {
        return "serie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  142 => 43,  138 => 42,  134 => 41,  130 => 40,  126 => 38,  124 => 37,  122 => 36,  114 => 30,  105 => 26,  98 => 22,  94 => 20,  88 => 12,  82 => 11,  75 => 48,  72 => 11,  66 => 10,  59 => 49,  56 => 10,  43 => 9,  37 => 8,  11 => 6,);
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
/*     <h1>Serie</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             {#<tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ serie.id }}</td>*/
/*             </tr>#}*/
/*             <tr>*/
/*                 <th>Titre</th>*/
/*                 <td>{{ serie.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Poster</th>*/
/*                 <td><a href="{{ asset('uploads/poster/' ~ serie.poster) }}"><img src="{{ asset('uploads/poster/' ~ serie.poster) }}"/></a></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Resumé</th>*/
/*                 <td>{{ serie.resume }}</td>*/
/*             </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/*                 {#{% render "AppBundle:StarRateController:show" %}#}*/
/*                 {#{% render "AppBundle:CommentController:show" %}#}*/
/*                 {#{% render "FanDeSerie:src:AppBundle:Controller:CommentController:comment_edit" %}#}*/
/* */
/* <div class="btn-group">*/
/*     {{ form_start(delete_form) }}*/
/*     <a class="btn btn-default" href="{{ path('season_show', { 'id': serie.id }) }}">Saisons</a>*/
/*     <a class="btn btn-default" href="{{ path('serie_index') }}">Retour à la liste</a>*/
/*     <a class="btn btn-default" href="{{ path('serie_edit', { 'id': serie.id }) }}">Edition</a>*/
/*     <input class="btn btn-default" type="submit" value="Delete">*/
/*     {{ form_end(delete_form) }}*/
/* </div>*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
