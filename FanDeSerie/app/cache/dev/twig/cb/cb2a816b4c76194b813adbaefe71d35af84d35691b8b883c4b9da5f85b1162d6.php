<?php

/* ./serie/index-include.html.twig */
class __TwigTemplate_aee0433b1f2efb220ef93fe7dacfcf201723da9c03ae7076e3dadd5203d901d3 extends Twig_Template
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
        $__internal_77ab3f671ad2751d76dbb08cd8d5a78b76808e9f65d686d97b81d7fbb3bd9257 = $this->env->getExtension("native_profiler");
        $__internal_77ab3f671ad2751d76dbb08cd8d5a78b76808e9f65d686d97b81d7fbb3bd9257->enter($__internal_77ab3f671ad2751d76dbb08cd8d5a78b76808e9f65d686d97b81d7fbb3bd9257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./serie/index-include.html.twig"));

        // line 1
        echo "<h2>Toutes les séries</h2>
<table>
    <thead>
    <tr>
        ";
        // line 6
        echo "        <th>Nom</th>
        ";
        // line 8
        echo "        ";
        // line 9
        echo "        ";
        // line 10
        echo "        ";
        // line 11
        echo "    </tr>
    </thead>
    <tbody>

        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 16
            echo "            <tr>
                ";
            // line 18
            echo "                <td class=\"nomserie\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
            echo "</a> &nbsp;</td>
                <td> &nbsp;<img class=\"icone\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/poster/" . $this->getAttribute($context["serie"], "poster", array()))), "html", null, true);
            echo "\"/> &nbsp;</td>
                <td> &nbsp;";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "resume", array()), "html", null, true);
            echo " &nbsp;</td>
                ";
            // line 22
            echo "                <td class=\"btn-group\">
                    <a class=\"btn btn-default\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    </tbody>
</table>";
        
        $__internal_77ab3f671ad2751d76dbb08cd8d5a78b76808e9f65d686d97b81d7fbb3bd9257->leave($__internal_77ab3f671ad2751d76dbb08cd8d5a78b76808e9f65d686d97b81d7fbb3bd9257_prof);

    }

    public function getTemplateName()
    {
        return "./serie/index-include.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  68 => 23,  65 => 22,  61 => 20,  57 => 19,  50 => 18,  47 => 16,  43 => 15,  37 => 11,  35 => 10,  33 => 9,  31 => 8,  28 => 6,  22 => 1,);
    }
}
/* <h2>Toutes les séries</h2>*/
/* <table>*/
/*     <thead>*/
/*     <tr>*/
/*         {#<th>Id</th>#}*/
/*         <th>Nom</th>*/
/*         {#<th>Poster</th>#}*/
/*         {#<th>Resumé</th>#}*/
/*         {#<th>Starrate</th>#}*/
/*         {#<th> &nbsp;Actions</th>#}*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/*         {% for serie in series %}*/
/*             <tr>*/
/*                 {#<td>{{ serie.id }}</td>#}*/
/*                 <td class="nomserie"><a href="{{ path('serie_show', { 'id': serie.id }) }}">{{ serie.name }}</a> &nbsp;</td>*/
/*                 <td> &nbsp;<img class="icone" src="{{ asset('uploads/poster/' ~ serie.poster) }}"/> &nbsp;</td>*/
/*                 <td> &nbsp;{{ serie.resume }} &nbsp;</td>*/
/*                 {#<td>{{ serie.starRate }}</td>#}*/
/*                 <td class="btn-group">*/
/*                     <a class="btn btn-default" href="{{ path('serie_show', { 'id': serie.id }) }}">Voir</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/* */
/*     </tbody>*/
/* </table>*/
