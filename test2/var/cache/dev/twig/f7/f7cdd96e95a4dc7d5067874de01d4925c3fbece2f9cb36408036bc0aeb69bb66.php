<?php

/* base.html.twig */
class __TwigTemplate_6b0d231c581218071ec0e227b7ea26dd4cd75190b2eaa8bf54dd4bca91871f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_271b876d4fef978b364f7eaaee5100a874cfa80d2726310c4ff25cb082a3f10e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271b876d4fef978b364f7eaaee5100a874cfa80d2726310c4ff25cb082a3f10e->enter($__internal_271b876d4fef978b364f7eaaee5100a874cfa80d2726310c4ff25cb082a3f10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6a9859eaf395e4c287ab3f2248499cdb4b057c6adc9d3816cf1a9ec825d6d107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9859eaf395e4c287ab3f2248499cdb4b057c6adc9d3816cf1a9ec825d6d107->enter($__internal_6a9859eaf395e4c287ab3f2248499cdb4b057c6adc9d3816cf1a9ec825d6d107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
";
        
        $__internal_271b876d4fef978b364f7eaaee5100a874cfa80d2726310c4ff25cb082a3f10e->leave($__internal_271b876d4fef978b364f7eaaee5100a874cfa80d2726310c4ff25cb082a3f10e_prof);

        
        $__internal_6a9859eaf395e4c287ab3f2248499cdb4b057c6adc9d3816cf1a9ec825d6d107->leave($__internal_6a9859eaf395e4c287ab3f2248499cdb4b057c6adc9d3816cf1a9ec825d6d107_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da39358982013ebae9bcf1d1b12888646e2a7fcc503c179db7a2c566ae7fd1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da39358982013ebae9bcf1d1b12888646e2a7fcc503c179db7a2c566ae7fd1d9->enter($__internal_da39358982013ebae9bcf1d1b12888646e2a7fcc503c179db7a2c566ae7fd1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_456952322feed6b0d6ce1a459d54a037e02addb29242f351fc6a8f58e6055071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456952322feed6b0d6ce1a459d54a037e02addb29242f351fc6a8f58e6055071->enter($__internal_456952322feed6b0d6ce1a459d54a037e02addb29242f351fc6a8f58e6055071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_456952322feed6b0d6ce1a459d54a037e02addb29242f351fc6a8f58e6055071->leave($__internal_456952322feed6b0d6ce1a459d54a037e02addb29242f351fc6a8f58e6055071_prof);

        
        $__internal_da39358982013ebae9bcf1d1b12888646e2a7fcc503c179db7a2c566ae7fd1d9->leave($__internal_da39358982013ebae9bcf1d1b12888646e2a7fcc503c179db7a2c566ae7fd1d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7dde2b16772e70f2aa202e591b9a43be4e8e822c355d2ee93f74efa78054ebd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dde2b16772e70f2aa202e591b9a43be4e8e822c355d2ee93f74efa78054ebd2->enter($__internal_7dde2b16772e70f2aa202e591b9a43be4e8e822c355d2ee93f74efa78054ebd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76810f961ad5dcaaf4d5853d29b5062e256a799a27c302d7e5047c26ea85bce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76810f961ad5dcaaf4d5853d29b5062e256a799a27c302d7e5047c26ea85bce8->enter($__internal_76810f961ad5dcaaf4d5853d29b5062e256a799a27c302d7e5047c26ea85bce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_76810f961ad5dcaaf4d5853d29b5062e256a799a27c302d7e5047c26ea85bce8->leave($__internal_76810f961ad5dcaaf4d5853d29b5062e256a799a27c302d7e5047c26ea85bce8_prof);

        
        $__internal_7dde2b16772e70f2aa202e591b9a43be4e8e822c355d2ee93f74efa78054ebd2->leave($__internal_7dde2b16772e70f2aa202e591b9a43be4e8e822c355d2ee93f74efa78054ebd2_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_518baf8f322a6fbcd4e6b8a87e0a14af89763a44ab2e2fb46a77992f0d425a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518baf8f322a6fbcd4e6b8a87e0a14af89763a44ab2e2fb46a77992f0d425a78->enter($__internal_518baf8f322a6fbcd4e6b8a87e0a14af89763a44ab2e2fb46a77992f0d425a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d220ceab79a37240ceaea57ffa8519707d441fb567d84e9397a4b52af260bbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d220ceab79a37240ceaea57ffa8519707d441fb567d84e9397a4b52af260bbc9->enter($__internal_d220ceab79a37240ceaea57ffa8519707d441fb567d84e9397a4b52af260bbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d220ceab79a37240ceaea57ffa8519707d441fb567d84e9397a4b52af260bbc9->leave($__internal_d220ceab79a37240ceaea57ffa8519707d441fb567d84e9397a4b52af260bbc9_prof);

        
        $__internal_518baf8f322a6fbcd4e6b8a87e0a14af89763a44ab2e2fb46a77992f0d425a78->leave($__internal_518baf8f322a6fbcd4e6b8a87e0a14af89763a44ab2e2fb46a77992f0d425a78_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa4925df0d56f1a869128cbfddac7f6dd24627702156e8b8ce6abddef212cab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4925df0d56f1a869128cbfddac7f6dd24627702156e8b8ce6abddef212cab3->enter($__internal_fa4925df0d56f1a869128cbfddac7f6dd24627702156e8b8ce6abddef212cab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_79b1d58c64d47a803a699870d1921f9f050be5270274ade497f01f5b4ca1bad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b1d58c64d47a803a699870d1921f9f050be5270274ade497f01f5b4ca1bad5->enter($__internal_79b1d58c64d47a803a699870d1921f9f050be5270274ade497f01f5b4ca1bad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_79b1d58c64d47a803a699870d1921f9f050be5270274ade497f01f5b4ca1bad5->leave($__internal_79b1d58c64d47a803a699870d1921f9f050be5270274ade497f01f5b4ca1bad5_prof);

        
        $__internal_fa4925df0d56f1a869128cbfddac7f6dd24627702156e8b8ce6abddef212cab3->leave($__internal_fa4925df0d56f1a869128cbfddac7f6dd24627702156e8b8ce6abddef212cab3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 45,  187 => 31,  170 => 6,  152 => 5,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  114 => 47,  109 => 46,  107 => 45,  92 => 32,  90 => 31,  78 => 22,  74 => 21,  70 => 20,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Landon Hotel App{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"{{ path(\"home\") }}\">Home</a></li>
            <li><a href=\"{{ path(\"index_clients\") }}\">Clients</a></li>
            <li><a href=\"{{ path(\"reservations\") }}\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    {% block body %}{% endblock %}
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
", "base.html.twig", "/var/www/erstesymf/test2/app/Resources/views/base.html.twig");
    }
}
