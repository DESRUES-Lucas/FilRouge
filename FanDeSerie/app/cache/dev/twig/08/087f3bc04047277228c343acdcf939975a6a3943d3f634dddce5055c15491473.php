<?php

/* FOSUserBundle::template.html.twig */
class __TwigTemplate_453eb66a481c1eb72e671a4064969785eb95d76020aee53ec116ead6ba70b504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'main' => array($this, 'block_main'),
            'section' => array($this, 'block_section'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'aside' => array($this, 'block_aside'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a06331d3494be0b8cf067b3d7a4301c2ac8391033fdbb68d825484c0afd83f90 = $this->env->getExtension("native_profiler");
        $__internal_a06331d3494be0b8cf067b3d7a4301c2ac8391033fdbb68d825484c0afd83f90->enter($__internal_a06331d3494be0b8cf067b3d7a4301c2ac8391033fdbb68d825484c0afd83f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Fan de séries\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"author\" content=\"Emmanuel Delépine\">
    <link rel=\"canonical\" href=\"localhost/NewFilRouge/FanDeSerie<?=.\$_SERVER['PHP_SELF']; ?>\"/>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body class=\"body\">

    <header>


        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/series-tv.jpg"), "html", null, true);
        echo "\" />

        ";
        // line 26
        echo twig_include($this->env, $context, "includes/nav.html.twig");
        echo "
    </header>
<div  class=\"container-fluid\" >
    ";
        // line 29
        $this->displayBlock('container', $context, $blocks);
        // line 53
        echo "</div>

    <footer>
        ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "    </footer>

";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "</body>
</html>";
        
        $__internal_a06331d3494be0b8cf067b3d7a4301c2ac8391033fdbb68d825484c0afd83f90->leave($__internal_a06331d3494be0b8cf067b3d7a4301c2ac8391033fdbb68d825484c0afd83f90_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4cf94948d7d5f0d507935fd8b65733a4e862fbb32cf7634e33cf6a48cb9d7a2 = $this->env->getExtension("native_profiler");
        $__internal_b4cf94948d7d5f0d507935fd8b65733a4e862fbb32cf7634e33cf6a48cb9d7a2->enter($__internal_b4cf94948d7d5f0d507935fd8b65733a4e862fbb32cf7634e33cf6a48cb9d7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fan de séries";
        
        $__internal_b4cf94948d7d5f0d507935fd8b65733a4e862fbb32cf7634e33cf6a48cb9d7a2->leave($__internal_b4cf94948d7d5f0d507935fd8b65733a4e862fbb32cf7634e33cf6a48cb9d7a2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e469a57d2a6a357843e75a3e9afdae6f4a679aa17d747d1df647d4399b13570 = $this->env->getExtension("native_profiler");
        $__internal_3e469a57d2a6a357843e75a3e9afdae6f4a679aa17d747d1df647d4399b13570->enter($__internal_3e469a57d2a6a357843e75a3e9afdae6f4a679aa17d747d1df647d4399b13570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <META HTTP-EQUIV=\"Content-Style-Type\" CONTENT=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_3e469a57d2a6a357843e75a3e9afdae6f4a679aa17d747d1df647d4399b13570->leave($__internal_3e469a57d2a6a357843e75a3e9afdae6f4a679aa17d747d1df647d4399b13570_prof);

    }

    // line 29
    public function block_container($context, array $blocks = array())
    {
        $__internal_8ef451140a7a0d5cd741752bcc32eaaf6d00f02418dc31d077320a81dc800957 = $this->env->getExtension("native_profiler");
        $__internal_8ef451140a7a0d5cd741752bcc32eaaf6d00f02418dc31d077320a81dc800957->enter($__internal_8ef451140a7a0d5cd741752bcc32eaaf6d00f02418dc31d077320a81dc800957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 30
        echo "    <main class=\"row\">
        ";
        // line 31
        $this->displayBlock('main', $context, $blocks);
        // line 50
        echo "
    </main>
    ";
        
        $__internal_8ef451140a7a0d5cd741752bcc32eaaf6d00f02418dc31d077320a81dc800957->leave($__internal_8ef451140a7a0d5cd741752bcc32eaaf6d00f02418dc31d077320a81dc800957_prof);

    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        $__internal_9bb92eef82cc4481df89514a92a70a2965ef8e4d1ef0ce026ff5f676c4130300 = $this->env->getExtension("native_profiler");
        $__internal_9bb92eef82cc4481df89514a92a70a2965ef8e4d1ef0ce026ff5f676c4130300->enter($__internal_9bb92eef82cc4481df89514a92a70a2965ef8e4d1ef0ce026ff5f676c4130300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 32
        echo "        <section  class=\"col-ml-4 col-p-l-4\">

            ";
        // line 34
        $this->displayBlock('section', $context, $blocks);
        // line 37
        echo "
        </section>
            <div>
                ";
        // line 40
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 43
        echo "            </div>

        <aside>
            ";
        // line 46
        $this->displayBlock('aside', $context, $blocks);
        // line 48
        echo "        </aside>
        ";
        
        $__internal_9bb92eef82cc4481df89514a92a70a2965ef8e4d1ef0ce026ff5f676c4130300->leave($__internal_9bb92eef82cc4481df89514a92a70a2965ef8e4d1ef0ce026ff5f676c4130300_prof);

    }

    // line 34
    public function block_section($context, array $blocks = array())
    {
        $__internal_43ac2db888f3a6279faee4a0b7b582ac977922d90ff128229170f0587a18f255 = $this->env->getExtension("native_profiler");
        $__internal_43ac2db888f3a6279faee4a0b7b582ac977922d90ff128229170f0587a18f255->enter($__internal_43ac2db888f3a6279faee4a0b7b582ac977922d90ff128229170f0587a18f255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 35
        echo "
            ";
        
        $__internal_43ac2db888f3a6279faee4a0b7b582ac977922d90ff128229170f0587a18f255->leave($__internal_43ac2db888f3a6279faee4a0b7b582ac977922d90ff128229170f0587a18f255_prof);

    }

    // line 40
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7b7aa903bfb9c8105ebcb76463bf38803073d7a9231e113fd83302cbf7df03e = $this->env->getExtension("native_profiler");
        $__internal_e7b7aa903bfb9c8105ebcb76463bf38803073d7a9231e113fd83302cbf7df03e->enter($__internal_e7b7aa903bfb9c8105ebcb76463bf38803073d7a9231e113fd83302cbf7df03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 41
        echo "
                ";
        
        $__internal_e7b7aa903bfb9c8105ebcb76463bf38803073d7a9231e113fd83302cbf7df03e->leave($__internal_e7b7aa903bfb9c8105ebcb76463bf38803073d7a9231e113fd83302cbf7df03e_prof);

    }

    // line 46
    public function block_aside($context, array $blocks = array())
    {
        $__internal_aeaaa754460f830b4a3e199527223e4cdc4ba893b15fb24da3e213e248191051 = $this->env->getExtension("native_profiler");
        $__internal_aeaaa754460f830b4a3e199527223e4cdc4ba893b15fb24da3e213e248191051->enter($__internal_aeaaa754460f830b4a3e199527223e4cdc4ba893b15fb24da3e213e248191051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 47
        echo "            ";
        
        $__internal_aeaaa754460f830b4a3e199527223e4cdc4ba893b15fb24da3e213e248191051->leave($__internal_aeaaa754460f830b4a3e199527223e4cdc4ba893b15fb24da3e213e248191051_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_252985fc187cc6e044564d4b94c21cf54c2a20b141be3c8db75667ca4bf1bac6 = $this->env->getExtension("native_profiler");
        $__internal_252985fc187cc6e044564d4b94c21cf54c2a20b141be3c8db75667ca4bf1bac6->enter($__internal_252985fc187cc6e044564d4b94c21cf54c2a20b141be3c8db75667ca4bf1bac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "        ";
        
        $__internal_252985fc187cc6e044564d4b94c21cf54c2a20b141be3c8db75667ca4bf1bac6->leave($__internal_252985fc187cc6e044564d4b94c21cf54c2a20b141be3c8db75667ca4bf1bac6_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1a5346f31f7c6e5f3220fd4f4547d759fb85cfe860f7e53540e32144f7afc94 = $this->env->getExtension("native_profiler");
        $__internal_b1a5346f31f7c6e5f3220fd4f4547d759fb85cfe860f7e53540e32144f7afc94->enter($__internal_b1a5346f31f7c6e5f3220fd4f4547d759fb85cfe860f7e53540e32144f7afc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    ";
        // line 62
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b1a5346f31f7c6e5f3220fd4f4547d759fb85cfe860f7e53540e32144f7afc94->leave($__internal_b1a5346f31f7c6e5f3220fd4f4547d759fb85cfe860f7e53540e32144f7afc94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 62,  243 => 61,  237 => 60,  230 => 57,  224 => 56,  217 => 47,  211 => 46,  203 => 41,  197 => 40,  189 => 35,  183 => 34,  175 => 48,  173 => 46,  168 => 43,  166 => 40,  161 => 37,  159 => 34,  155 => 32,  149 => 31,  140 => 50,  138 => 31,  135 => 30,  129 => 29,  119 => 13,  115 => 12,  112 => 11,  106 => 10,  94 => 5,  86 => 64,  84 => 60,  80 => 58,  78 => 56,  73 => 53,  71 => 29,  65 => 26,  60 => 24,  50 => 17,  47 => 16,  45 => 10,  37 => 5,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Fan de séries{% endblock %}</title>*/
/*     <meta name="description" content="Fan de séries"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="author" content="Emmanuel Delépine">*/
/*     <link rel="canonical" href="localhost/NewFilRouge/FanDeSerie<?=.$_SERVER['PHP_SELF']; ?>"/>*/
/*     {% block stylesheets  %}*/
/*         <META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/* */
/*     {% endblock %}*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body class="body">*/
/* */
/*     <header>*/
/* */
/* */
/*         <img src="{{ asset('img/series-tv.jpg') }}" />*/
/* */
/*         {{ include('includes/nav.html.twig') }}*/
/*     </header>*/
/* <div  class="container-fluid" >*/
/*     {% block container %}*/
/*     <main class="row">*/
/*         {% block main %}*/
/*         <section  class="col-ml-4 col-p-l-4">*/
/* */
/*             {% block section %}*/
/* */
/*             {% endblock %}*/
/* */
/*         </section>*/
/*             <div>*/
/*                 {% block fos_user_content %}*/
/* */
/*                 {% endblock fos_user_content %}*/
/*             </div>*/
/* */
/*         <aside>*/
/*             {% block aside %}*/
/*             {% endblock %}*/
/*         </aside>*/
/*         {% endblock %}*/
/* */
/*     </main>*/
/*     {% endblock %}*/
/* </div>*/
/* */
/*     <footer>*/
/*         {% block footer %}*/
/*         {% endblock %}*/
/*     </footer>*/
/* */
/* {% block javascripts %}*/
/*     {#<script src="{{ asset('js/jquery.min.js') }}"></script>#}*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
