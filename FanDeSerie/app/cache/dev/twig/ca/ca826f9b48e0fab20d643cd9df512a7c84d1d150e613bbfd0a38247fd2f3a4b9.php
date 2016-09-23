<?php

/* serie/new.html.twig */
class __TwigTemplate_ac702c2ee42bfb1ccbb41f5ace10509446fa75523757c315f6cf9d4b69999628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("template.html.twig", "serie/new.html.twig", 6);
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
        $__internal_913a21c1e6eea13b62e4313d706f0bc202bb415584f0dcc8e4a314ad3b20f8da = $this->env->getExtension("native_profiler");
        $__internal_913a21c1e6eea13b62e4313d706f0bc202bb415584f0dcc8e4a314ad3b20f8da->enter($__internal_913a21c1e6eea13b62e4313d706f0bc202bb415584f0dcc8e4a314ad3b20f8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_913a21c1e6eea13b62e4313d706f0bc202bb415584f0dcc8e4a314ad3b20f8da->leave($__internal_913a21c1e6eea13b62e4313d706f0bc202bb415584f0dcc8e4a314ad3b20f8da_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b40c1ac90dc290759a55350006fdfd963b73f4a3c441f87846354e828ca8f383 = $this->env->getExtension("native_profiler");
        $__internal_b40c1ac90dc290759a55350006fdfd963b73f4a3c441f87846354e828ca8f383->enter($__internal_b40c1ac90dc290759a55350006fdfd963b73f4a3c441f87846354e828ca8f383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_b40c1ac90dc290759a55350006fdfd963b73f4a3c441f87846354e828ca8f383->leave($__internal_b40c1ac90dc290759a55350006fdfd963b73f4a3c441f87846354e828ca8f383_prof);

    }

    public function block_container($context, array $blocks = array())
    {
        $__internal_5c39d5f216a70647b866c23b705e3542429fae7883b4571d99af51e477d7f6e8 = $this->env->getExtension("native_profiler");
        $__internal_5c39d5f216a70647b866c23b705e3542429fae7883b4571d99af51e477d7f6e8->enter($__internal_5c39d5f216a70647b866c23b705e3542429fae7883b4571d99af51e477d7f6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "    ";
        
        $__internal_5c39d5f216a70647b866c23b705e3542429fae7883b4571d99af51e477d7f6e8->leave($__internal_5c39d5f216a70647b866c23b705e3542429fae7883b4571d99af51e477d7f6e8_prof);

    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        $__internal_52b7e758541986196ca519e436084aa10428a1b9976cbbdee8b71d2dbf246f57 = $this->env->getExtension("native_profiler");
        $__internal_52b7e758541986196ca519e436084aa10428a1b9976cbbdee8b71d2dbf246f57->enter($__internal_52b7e758541986196ca519e436084aa10428a1b9976cbbdee8b71d2dbf246f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "            ";
        $this->displayBlock('section', $context, $blocks);
        // line 44
        echo "        ";
        
        $__internal_52b7e758541986196ca519e436084aa10428a1b9976cbbdee8b71d2dbf246f57->leave($__internal_52b7e758541986196ca519e436084aa10428a1b9976cbbdee8b71d2dbf246f57_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_dcf33b5513e1a704c2fa29878382900d4b956a6c46887594807c4beb8419eff1 = $this->env->getExtension("native_profiler");
        $__internal_dcf33b5513e1a704c2fa29878382900d4b956a6c46887594807c4beb8419eff1->enter($__internal_dcf33b5513e1a704c2fa29878382900d4b956a6c46887594807c4beb8419eff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "                <div class=\"serie-form\">

                    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div >
                        <div class= \"form-text\">
                            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                        </div>
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                    </div>
                    <div>
                        <div class= \"form-text\">
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'label');
        echo "
                        </div>
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'errors');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'widget');
        echo "
                    </div>
                    <div>
                        <div class= \"form-text\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poster", array()), 'label');
        echo "
                        </div>
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poster", array()), 'errors');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poster", array()), 'widget');
        echo "
                    </div>

                    <div class=\"btn-group\">
                        <input type=\"submit\" class=\"btn btn-default\" value=\"Créer\" />
                    </div>
                    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            ";
        
        $__internal_dcf33b5513e1a704c2fa29878382900d4b956a6c46887594807c4beb8419eff1->leave($__internal_dcf33b5513e1a704c2fa29878382900d4b956a6c46887594807c4beb8419eff1_prof);

    }

    public function getTemplateName()
    {
        return "serie/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 41,  143 => 35,  139 => 34,  134 => 32,  127 => 28,  123 => 27,  118 => 25,  111 => 21,  107 => 20,  102 => 18,  96 => 15,  92 => 14,  88 => 12,  82 => 11,  75 => 44,  72 => 11,  66 => 10,  59 => 45,  56 => 10,  43 => 9,  37 => 8,  11 => 6,);
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
/*                 <div class="serie-form">*/
/* */
/*                     {{ form_start(form) }}*/
/*                     {{ form_errors(form) }}*/
/*                     <div >*/
/*                         <div class= "form-text">*/
/*                             {{ form_label(form.name) }}*/
/*                         </div>*/
/*                         {{ form_errors(form.name) }}*/
/*                         {{ form_widget(form.name) }}*/
/*                     </div>*/
/*                     <div>*/
/*                         <div class= "form-text">*/
/*                             {{ form_label(form.resume) }}*/
/*                         </div>*/
/*                         {{ form_errors(form.resume) }}*/
/*                         {{ form_widget(form.resume) }}*/
/*                     </div>*/
/*                     <div>*/
/*                         <div class= "form-text">*/
/*                             {{ form_label(form.poster) }}*/
/*                         </div>*/
/*                         {{ form_errors(form.poster) }}*/
/*                         {{ form_widget(form.poster) }}*/
/*                     </div>*/
/* */
/*                     <div class="btn-group">*/
/*                         <input type="submit" class="btn btn-default" value="Créer" />*/
/*                     </div>*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
