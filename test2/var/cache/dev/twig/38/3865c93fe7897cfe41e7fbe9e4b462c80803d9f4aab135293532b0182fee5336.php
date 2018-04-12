<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e90777f9a00f51a92c69cb01603fdeef509e850f092307b722b104989634487f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98e42e52068f3937c433fe5a08f57c7e609cdd3e137bb376fb5691822372cf02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e42e52068f3937c433fe5a08f57c7e609cdd3e137bb376fb5691822372cf02->enter($__internal_98e42e52068f3937c433fe5a08f57c7e609cdd3e137bb376fb5691822372cf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3fdac2226190b5a967c0f85f933805d1aec6c11ad56abd19e4db0bbfab488358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdac2226190b5a967c0f85f933805d1aec6c11ad56abd19e4db0bbfab488358->enter($__internal_3fdac2226190b5a967c0f85f933805d1aec6c11ad56abd19e4db0bbfab488358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e42e52068f3937c433fe5a08f57c7e609cdd3e137bb376fb5691822372cf02->leave($__internal_98e42e52068f3937c433fe5a08f57c7e609cdd3e137bb376fb5691822372cf02_prof);

        
        $__internal_3fdac2226190b5a967c0f85f933805d1aec6c11ad56abd19e4db0bbfab488358->leave($__internal_3fdac2226190b5a967c0f85f933805d1aec6c11ad56abd19e4db0bbfab488358_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c44babb94c2a9800e4d33bf678027946a6456bdea6d003ca56a6bcd589e7c490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44babb94c2a9800e4d33bf678027946a6456bdea6d003ca56a6bcd589e7c490->enter($__internal_c44babb94c2a9800e4d33bf678027946a6456bdea6d003ca56a6bcd589e7c490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe3ea79c71a5f7449ce583aaaa14dfd7b8d092825d4be9acdf321e84584487ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3ea79c71a5f7449ce583aaaa14dfd7b8d092825d4be9acdf321e84584487ac->enter($__internal_fe3ea79c71a5f7449ce583aaaa14dfd7b8d092825d4be9acdf321e84584487ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_fe3ea79c71a5f7449ce583aaaa14dfd7b8d092825d4be9acdf321e84584487ac->leave($__internal_fe3ea79c71a5f7449ce583aaaa14dfd7b8d092825d4be9acdf321e84584487ac_prof);

        
        $__internal_c44babb94c2a9800e4d33bf678027946a6456bdea6d003ca56a6bcd589e7c490->leave($__internal_c44babb94c2a9800e4d33bf678027946a6456bdea6d003ca56a6bcd589e7c490_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb79dbef22db7d4428ffbe9eebd41cfa1cb159d1b8553d9f1f190a6d74896804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb79dbef22db7d4428ffbe9eebd41cfa1cb159d1b8553d9f1f190a6d74896804->enter($__internal_fb79dbef22db7d4428ffbe9eebd41cfa1cb159d1b8553d9f1f190a6d74896804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93e0ef419df9b64a226ab9ddc92c4ebec6e3a31e9052d471ee3ccf36d3ce35e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e0ef419df9b64a226ab9ddc92c4ebec6e3a31e9052d471ee3ccf36d3ce35e1->enter($__internal_93e0ef419df9b64a226ab9ddc92c4ebec6e3a31e9052d471ee3ccf36d3ce35e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93e0ef419df9b64a226ab9ddc92c4ebec6e3a31e9052d471ee3ccf36d3ce35e1->leave($__internal_93e0ef419df9b64a226ab9ddc92c4ebec6e3a31e9052d471ee3ccf36d3ce35e1_prof);

        
        $__internal_fb79dbef22db7d4428ffbe9eebd41cfa1cb159d1b8553d9f1f190a6d74896804->leave($__internal_fb79dbef22db7d4428ffbe9eebd41cfa1cb159d1b8553d9f1f190a6d74896804_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_563cd82108201a6022e12bbf7033242f12288d9abdfa14c1c7e2269b28170ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563cd82108201a6022e12bbf7033242f12288d9abdfa14c1c7e2269b28170ea5->enter($__internal_563cd82108201a6022e12bbf7033242f12288d9abdfa14c1c7e2269b28170ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26ed6f06e9c674142b1a2180b0ea78d347b7a23ebbf2fffcf56094e2ec41fa11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ed6f06e9c674142b1a2180b0ea78d347b7a23ebbf2fffcf56094e2ec41fa11->enter($__internal_26ed6f06e9c674142b1a2180b0ea78d347b7a23ebbf2fffcf56094e2ec41fa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_26ed6f06e9c674142b1a2180b0ea78d347b7a23ebbf2fffcf56094e2ec41fa11->leave($__internal_26ed6f06e9c674142b1a2180b0ea78d347b7a23ebbf2fffcf56094e2ec41fa11_prof);

        
        $__internal_563cd82108201a6022e12bbf7033242f12288d9abdfa14c1c7e2269b28170ea5->leave($__internal_563cd82108201a6022e12bbf7033242f12288d9abdfa14c1c7e2269b28170ea5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
