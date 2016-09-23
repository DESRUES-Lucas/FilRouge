<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_53c2000db13a8d0e3b393416c65aa35ef37977b1bdcbb95e2d7d7726c3bbca23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73655fe183c539447ccb41911d24984d0436516b80d2fefb566b3b26a4a1a7e8 = $this->env->getExtension("native_profiler");
        $__internal_73655fe183c539447ccb41911d24984d0436516b80d2fefb566b3b26a4a1a7e8->enter($__internal_73655fe183c539447ccb41911d24984d0436516b80d2fefb566b3b26a4a1a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73655fe183c539447ccb41911d24984d0436516b80d2fefb566b3b26a4a1a7e8->leave($__internal_73655fe183c539447ccb41911d24984d0436516b80d2fefb566b3b26a4a1a7e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e21c74c2ee5d16093c22affa17b9e15edbc519e857c46c1c4de82475e0735c00 = $this->env->getExtension("native_profiler");
        $__internal_e21c74c2ee5d16093c22affa17b9e15edbc519e857c46c1c4de82475e0735c00->enter($__internal_e21c74c2ee5d16093c22affa17b9e15edbc519e857c46c1c4de82475e0735c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e21c74c2ee5d16093c22affa17b9e15edbc519e857c46c1c4de82475e0735c00->leave($__internal_e21c74c2ee5d16093c22affa17b9e15edbc519e857c46c1c4de82475e0735c00_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21d50560fd9df44b51d5749d02ce676df4662f8830c7835054244fff964a943e = $this->env->getExtension("native_profiler");
        $__internal_21d50560fd9df44b51d5749d02ce676df4662f8830c7835054244fff964a943e->enter($__internal_21d50560fd9df44b51d5749d02ce676df4662f8830c7835054244fff964a943e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21d50560fd9df44b51d5749d02ce676df4662f8830c7835054244fff964a943e->leave($__internal_21d50560fd9df44b51d5749d02ce676df4662f8830c7835054244fff964a943e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fcde19dc5c128bef1bbd82299ff7da2fe64fefc672ec4ee3758b990a715dc08 = $this->env->getExtension("native_profiler");
        $__internal_0fcde19dc5c128bef1bbd82299ff7da2fe64fefc672ec4ee3758b990a715dc08->enter($__internal_0fcde19dc5c128bef1bbd82299ff7da2fe64fefc672ec4ee3758b990a715dc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0fcde19dc5c128bef1bbd82299ff7da2fe64fefc672ec4ee3758b990a715dc08->leave($__internal_0fcde19dc5c128bef1bbd82299ff7da2fe64fefc672ec4ee3758b990a715dc08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
