<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_56bbe92ff196dc33737c257fe117a945121b8c4cb8721b83465ba04ae818b095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5ee4fbd5d17efc88bf99006e98337864581f3f93a6557a41b50f1801ee22816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ee4fbd5d17efc88bf99006e98337864581f3f93a6557a41b50f1801ee22816->enter($__internal_c5ee4fbd5d17efc88bf99006e98337864581f3f93a6557a41b50f1801ee22816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ed43ed1f28464519b9a333ff21cbc4bd0dc383bc3e67444240d531140b949707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed43ed1f28464519b9a333ff21cbc4bd0dc383bc3e67444240d531140b949707->enter($__internal_ed43ed1f28464519b9a333ff21cbc4bd0dc383bc3e67444240d531140b949707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5ee4fbd5d17efc88bf99006e98337864581f3f93a6557a41b50f1801ee22816->leave($__internal_c5ee4fbd5d17efc88bf99006e98337864581f3f93a6557a41b50f1801ee22816_prof);

        
        $__internal_ed43ed1f28464519b9a333ff21cbc4bd0dc383bc3e67444240d531140b949707->leave($__internal_ed43ed1f28464519b9a333ff21cbc4bd0dc383bc3e67444240d531140b949707_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2c4f6c27fe80eca3553742abf70ac1ac149076c3da9f27da3900e9b8f68c90d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4f6c27fe80eca3553742abf70ac1ac149076c3da9f27da3900e9b8f68c90d3->enter($__internal_2c4f6c27fe80eca3553742abf70ac1ac149076c3da9f27da3900e9b8f68c90d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e23b56d704536b8746bd5d9eed96f6992163678d16f4868c43a3912f2bf97db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23b56d704536b8746bd5d9eed96f6992163678d16f4868c43a3912f2bf97db8->enter($__internal_e23b56d704536b8746bd5d9eed96f6992163678d16f4868c43a3912f2bf97db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e23b56d704536b8746bd5d9eed96f6992163678d16f4868c43a3912f2bf97db8->leave($__internal_e23b56d704536b8746bd5d9eed96f6992163678d16f4868c43a3912f2bf97db8_prof);

        
        $__internal_2c4f6c27fe80eca3553742abf70ac1ac149076c3da9f27da3900e9b8f68c90d3->leave($__internal_2c4f6c27fe80eca3553742abf70ac1ac149076c3da9f27da3900e9b8f68c90d3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07118b7d5209d1fa86948d20b087e2095c323167182373876a813c3ad73b9647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07118b7d5209d1fa86948d20b087e2095c323167182373876a813c3ad73b9647->enter($__internal_07118b7d5209d1fa86948d20b087e2095c323167182373876a813c3ad73b9647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6fc7b8e697b90ac9d33bb022462762f1eb7d7ef1336576145c9bc1754b0f785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fc7b8e697b90ac9d33bb022462762f1eb7d7ef1336576145c9bc1754b0f785->enter($__internal_f6fc7b8e697b90ac9d33bb022462762f1eb7d7ef1336576145c9bc1754b0f785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f6fc7b8e697b90ac9d33bb022462762f1eb7d7ef1336576145c9bc1754b0f785->leave($__internal_f6fc7b8e697b90ac9d33bb022462762f1eb7d7ef1336576145c9bc1754b0f785_prof);

        
        $__internal_07118b7d5209d1fa86948d20b087e2095c323167182373876a813c3ad73b9647->leave($__internal_07118b7d5209d1fa86948d20b087e2095c323167182373876a813c3ad73b9647_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
