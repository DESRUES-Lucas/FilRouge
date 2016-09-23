<?php

/* template.html.twig */
class __TwigTemplate_47558a059990977dd94047f91ee24a0335b228ae4a812bd1e09d9409f1c4c6f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'section' => array($this, 'block_section'),
            'aside' => array($this, 'block_aside'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ba752353852ee1501fad5c62f162d2594ab560bbe823e6a1d9ba5ab1017cb7d = $this->env->getExtension("native_profiler");
        $__internal_9ba752353852ee1501fad5c62f162d2594ab560bbe823e6a1d9ba5ab1017cb7d->enter($__internal_9ba752353852ee1501fad5c62f162d2594ab560bbe823e6a1d9ba5ab1017cb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template.html.twig"));

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
        // line 30
        echo "    <main class=\"row\">
        ";
        // line 32
        echo "        <section  class=\"col-xs-12 col-sm-9 col-md-9 col-lg-6 col-lg-offset-1\">
            ";
        // line 33
        $this->displayBlock('section', $context, $blocks);
        // line 36
        echo "        </section>


        <aside class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 col-lg-offset-0\">
            ";
        // line 40
        $this->displayBlock('aside', $context, $blocks);
        // line 42
        echo "        </aside>
        ";
        // line 44
        echo "    </main>
        ";
        // line 46
        echo "</div>
    <footer>
        ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "    </footer>

";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</body>
</html>";
        
        $__internal_9ba752353852ee1501fad5c62f162d2594ab560bbe823e6a1d9ba5ab1017cb7d->leave($__internal_9ba752353852ee1501fad5c62f162d2594ab560bbe823e6a1d9ba5ab1017cb7d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3479478e7f84ad87bd2c260e76d8a281f0ba2e51a99295ffa58fde4aa5a3bc77 = $this->env->getExtension("native_profiler");
        $__internal_3479478e7f84ad87bd2c260e76d8a281f0ba2e51a99295ffa58fde4aa5a3bc77->enter($__internal_3479478e7f84ad87bd2c260e76d8a281f0ba2e51a99295ffa58fde4aa5a3bc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fan de séries";
        
        $__internal_3479478e7f84ad87bd2c260e76d8a281f0ba2e51a99295ffa58fde4aa5a3bc77->leave($__internal_3479478e7f84ad87bd2c260e76d8a281f0ba2e51a99295ffa58fde4aa5a3bc77_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b7e83dbf24a8ca206d884d3d7b7f71468ce98125497e6c678f47fd0d3beb859 = $this->env->getExtension("native_profiler");
        $__internal_4b7e83dbf24a8ca206d884d3d7b7f71468ce98125497e6c678f47fd0d3beb859->enter($__internal_4b7e83dbf24a8ca206d884d3d7b7f71468ce98125497e6c678f47fd0d3beb859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4b7e83dbf24a8ca206d884d3d7b7f71468ce98125497e6c678f47fd0d3beb859->leave($__internal_4b7e83dbf24a8ca206d884d3d7b7f71468ce98125497e6c678f47fd0d3beb859_prof);

    }

    // line 33
    public function block_section($context, array $blocks = array())
    {
        $__internal_05748a95b0b3baa3b7acc560d5b3ee83ebb6480829a7a81a86a2eae7b6259170 = $this->env->getExtension("native_profiler");
        $__internal_05748a95b0b3baa3b7acc560d5b3ee83ebb6480829a7a81a86a2eae7b6259170->enter($__internal_05748a95b0b3baa3b7acc560d5b3ee83ebb6480829a7a81a86a2eae7b6259170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 34
        echo "
            ";
        
        $__internal_05748a95b0b3baa3b7acc560d5b3ee83ebb6480829a7a81a86a2eae7b6259170->leave($__internal_05748a95b0b3baa3b7acc560d5b3ee83ebb6480829a7a81a86a2eae7b6259170_prof);

    }

    // line 40
    public function block_aside($context, array $blocks = array())
    {
        $__internal_77cb6166cf81dd61dd0268513e164347da4cc9fdfbd74154f881c0abf6460ac3 = $this->env->getExtension("native_profiler");
        $__internal_77cb6166cf81dd61dd0268513e164347da4cc9fdfbd74154f881c0abf6460ac3->enter($__internal_77cb6166cf81dd61dd0268513e164347da4cc9fdfbd74154f881c0abf6460ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 41
        echo "            ";
        
        $__internal_77cb6166cf81dd61dd0268513e164347da4cc9fdfbd74154f881c0abf6460ac3->leave($__internal_77cb6166cf81dd61dd0268513e164347da4cc9fdfbd74154f881c0abf6460ac3_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e7cc2540f04a770ec7e01b2088776499479bfb83c22f0a8c14738f31435c4c16 = $this->env->getExtension("native_profiler");
        $__internal_e7cc2540f04a770ec7e01b2088776499479bfb83c22f0a8c14738f31435c4c16->enter($__internal_e7cc2540f04a770ec7e01b2088776499479bfb83c22f0a8c14738f31435c4c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "        ";
        
        $__internal_e7cc2540f04a770ec7e01b2088776499479bfb83c22f0a8c14738f31435c4c16->leave($__internal_e7cc2540f04a770ec7e01b2088776499479bfb83c22f0a8c14738f31435c4c16_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d67a121be6b93a1f237b3c8aca6c23a3719d668d94f1d9ac7619836107116f12 = $this->env->getExtension("native_profiler");
        $__internal_d67a121be6b93a1f237b3c8aca6c23a3719d668d94f1d9ac7619836107116f12->enter($__internal_d67a121be6b93a1f237b3c8aca6c23a3719d668d94f1d9ac7619836107116f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        // line 54
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d67a121be6b93a1f237b3c8aca6c23a3719d668d94f1d9ac7619836107116f12->leave($__internal_d67a121be6b93a1f237b3c8aca6c23a3719d668d94f1d9ac7619836107116f12_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 54,  191 => 53,  185 => 52,  178 => 49,  172 => 48,  165 => 41,  159 => 40,  151 => 34,  145 => 33,  135 => 13,  131 => 12,  128 => 11,  122 => 10,  110 => 5,  102 => 56,  100 => 52,  96 => 50,  94 => 48,  90 => 46,  87 => 44,  84 => 42,  82 => 40,  76 => 36,  74 => 33,  71 => 32,  68 => 30,  62 => 26,  57 => 24,  47 => 17,  44 => 16,  42 => 10,  34 => 5,  28 => 1,);
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
/*     {#{% block container %}#}*/
/*     <main class="row">*/
/*         {#{% block main %}#}*/
/*         <section  class="col-xs-12 col-sm-9 col-md-9 col-lg-6 col-lg-offset-1">*/
/*             {% block section %}*/
/* */
/*             {% endblock %}*/
/*         </section>*/
/* */
/* */
/*         <aside class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-lg-offset-0">*/
/*             {% block aside %}*/
/*             {% endblock %}*/
/*         </aside>*/
/*         {#{% endblock %}#}*/
/*     </main>*/
/*         {#{% endblock %}#}*/
/* </div>*/
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
