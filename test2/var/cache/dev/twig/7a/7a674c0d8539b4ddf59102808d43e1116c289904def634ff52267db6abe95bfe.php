<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_16eabbc24f8ef83d5e585c3936bc8f975480896c7651bb323819317f763adce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31656e7a7ab1258f26fb4e68080f2cb03faf4729d74417c3cd980ea0f88f0e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31656e7a7ab1258f26fb4e68080f2cb03faf4729d74417c3cd980ea0f88f0e29->enter($__internal_31656e7a7ab1258f26fb4e68080f2cb03faf4729d74417c3cd980ea0f88f0e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_df0145eb810c51c9f2c58a2e24dac9334c02ea6f593bc4346797a64a45b285ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0145eb810c51c9f2c58a2e24dac9334c02ea6f593bc4346797a64a45b285ac->enter($__internal_df0145eb810c51c9f2c58a2e24dac9334c02ea6f593bc4346797a64a45b285ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31656e7a7ab1258f26fb4e68080f2cb03faf4729d74417c3cd980ea0f88f0e29->leave($__internal_31656e7a7ab1258f26fb4e68080f2cb03faf4729d74417c3cd980ea0f88f0e29_prof);

        
        $__internal_df0145eb810c51c9f2c58a2e24dac9334c02ea6f593bc4346797a64a45b285ac->leave($__internal_df0145eb810c51c9f2c58a2e24dac9334c02ea6f593bc4346797a64a45b285ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74cbd59f98fb085e763916aff2d2a14c1871a8baa2a1fb732c051ab5fa2b1545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74cbd59f98fb085e763916aff2d2a14c1871a8baa2a1fb732c051ab5fa2b1545->enter($__internal_74cbd59f98fb085e763916aff2d2a14c1871a8baa2a1fb732c051ab5fa2b1545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b7509537e3223ca89c52d2fd232f5bfb9951aebce0a6ccccc41cfbf438af5417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7509537e3223ca89c52d2fd232f5bfb9951aebce0a6ccccc41cfbf438af5417->enter($__internal_b7509537e3223ca89c52d2fd232f5bfb9951aebce0a6ccccc41cfbf438af5417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b7509537e3223ca89c52d2fd232f5bfb9951aebce0a6ccccc41cfbf438af5417->leave($__internal_b7509537e3223ca89c52d2fd232f5bfb9951aebce0a6ccccc41cfbf438af5417_prof);

        
        $__internal_74cbd59f98fb085e763916aff2d2a14c1871a8baa2a1fb732c051ab5fa2b1545->leave($__internal_74cbd59f98fb085e763916aff2d2a14c1871a8baa2a1fb732c051ab5fa2b1545_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
