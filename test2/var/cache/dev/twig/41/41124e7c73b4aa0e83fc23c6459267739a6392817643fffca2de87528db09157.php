<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_767b3ebe2710d660b8e2af70d5b28674a2294a3cb7adec2f4c9cdee825baeebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_921d34d45c7abd436094049d4239917ac0c4ec758072e4ff13b829451812a148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921d34d45c7abd436094049d4239917ac0c4ec758072e4ff13b829451812a148->enter($__internal_921d34d45c7abd436094049d4239917ac0c4ec758072e4ff13b829451812a148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d0b09fba6304526d88c47e7384e21168c008e10925e96715fc0e9b11d468fb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b09fba6304526d88c47e7384e21168c008e10925e96715fc0e9b11d468fb44->enter($__internal_d0b09fba6304526d88c47e7384e21168c008e10925e96715fc0e9b11d468fb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921d34d45c7abd436094049d4239917ac0c4ec758072e4ff13b829451812a148->leave($__internal_921d34d45c7abd436094049d4239917ac0c4ec758072e4ff13b829451812a148_prof);

        
        $__internal_d0b09fba6304526d88c47e7384e21168c008e10925e96715fc0e9b11d468fb44->leave($__internal_d0b09fba6304526d88c47e7384e21168c008e10925e96715fc0e9b11d468fb44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9c00db9f5e332f05d8e38da2526c69bd392a5de83997963df2f7839f20f69b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c00db9f5e332f05d8e38da2526c69bd392a5de83997963df2f7839f20f69b8->enter($__internal_f9c00db9f5e332f05d8e38da2526c69bd392a5de83997963df2f7839f20f69b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_02bb1814ee02e66f85beacab0d638912291ff8f216179f0f0b793f541000fb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bb1814ee02e66f85beacab0d638912291ff8f216179f0f0b793f541000fb48->enter($__internal_02bb1814ee02e66f85beacab0d638912291ff8f216179f0f0b793f541000fb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_02bb1814ee02e66f85beacab0d638912291ff8f216179f0f0b793f541000fb48->leave($__internal_02bb1814ee02e66f85beacab0d638912291ff8f216179f0f0b793f541000fb48_prof);

        
        $__internal_f9c00db9f5e332f05d8e38da2526c69bd392a5de83997963df2f7839f20f69b8->leave($__internal_f9c00db9f5e332f05d8e38da2526c69bd392a5de83997963df2f7839f20f69b8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f93dc510a427f0b123d0b1491325af9a1d3fdca61f179d81603c7c8a873df90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93dc510a427f0b123d0b1491325af9a1d3fdca61f179d81603c7c8a873df90a->enter($__internal_f93dc510a427f0b123d0b1491325af9a1d3fdca61f179d81603c7c8a873df90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4417b0d8c243163e17f1ebf353466cf335343557f2b776d2a8775f3fd8fd51f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4417b0d8c243163e17f1ebf353466cf335343557f2b776d2a8775f3fd8fd51f6->enter($__internal_4417b0d8c243163e17f1ebf353466cf335343557f2b776d2a8775f3fd8fd51f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4417b0d8c243163e17f1ebf353466cf335343557f2b776d2a8775f3fd8fd51f6->leave($__internal_4417b0d8c243163e17f1ebf353466cf335343557f2b776d2a8775f3fd8fd51f6_prof);

        
        $__internal_f93dc510a427f0b123d0b1491325af9a1d3fdca61f179d81603c7c8a873df90a->leave($__internal_f93dc510a427f0b123d0b1491325af9a1d3fdca61f179d81603c7c8a873df90a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6d3a4f51d1841955f5964216529128673e920580002f1d616c70148ba4fa402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d3a4f51d1841955f5964216529128673e920580002f1d616c70148ba4fa402->enter($__internal_d6d3a4f51d1841955f5964216529128673e920580002f1d616c70148ba4fa402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b10d4da962fd346afc7602ba2df1565e457936606b8f6448cab5caf2f43cbff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10d4da962fd346afc7602ba2df1565e457936606b8f6448cab5caf2f43cbff2->enter($__internal_b10d4da962fd346afc7602ba2df1565e457936606b8f6448cab5caf2f43cbff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b10d4da962fd346afc7602ba2df1565e457936606b8f6448cab5caf2f43cbff2->leave($__internal_b10d4da962fd346afc7602ba2df1565e457936606b8f6448cab5caf2f43cbff2_prof);

        
        $__internal_d6d3a4f51d1841955f5964216529128673e920580002f1d616c70148ba4fa402->leave($__internal_d6d3a4f51d1841955f5964216529128673e920580002f1d616c70148ba4fa402_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
