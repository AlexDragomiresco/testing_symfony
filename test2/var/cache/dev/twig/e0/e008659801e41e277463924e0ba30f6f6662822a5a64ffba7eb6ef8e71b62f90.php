<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_589e8edd129e16ffb62c3245b4e8f733aecf886c987cf2cc128112945d148b9f extends Twig_Template
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
        $__internal_21a598b0b2bcb9e17b72aff2c648114451ba00b460c76883b4e1269dde6520ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a598b0b2bcb9e17b72aff2c648114451ba00b460c76883b4e1269dde6520ce->enter($__internal_21a598b0b2bcb9e17b72aff2c648114451ba00b460c76883b4e1269dde6520ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4ce21195f199382a8aaa85f1acc4326fa973bfba510a5eeadeff9830cdf6190a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce21195f199382a8aaa85f1acc4326fa973bfba510a5eeadeff9830cdf6190a->enter($__internal_4ce21195f199382a8aaa85f1acc4326fa973bfba510a5eeadeff9830cdf6190a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a598b0b2bcb9e17b72aff2c648114451ba00b460c76883b4e1269dde6520ce->leave($__internal_21a598b0b2bcb9e17b72aff2c648114451ba00b460c76883b4e1269dde6520ce_prof);

        
        $__internal_4ce21195f199382a8aaa85f1acc4326fa973bfba510a5eeadeff9830cdf6190a->leave($__internal_4ce21195f199382a8aaa85f1acc4326fa973bfba510a5eeadeff9830cdf6190a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_71dc17f2b9085aa1c2f73b737bb20b50244c6073944ecb25c75a6099f7861f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71dc17f2b9085aa1c2f73b737bb20b50244c6073944ecb25c75a6099f7861f38->enter($__internal_71dc17f2b9085aa1c2f73b737bb20b50244c6073944ecb25c75a6099f7861f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2aa7dbace27c1c1c4c0b3a1b7c274f8a0eaa7a1f0c0c476f0e01e4660c5f05c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa7dbace27c1c1c4c0b3a1b7c274f8a0eaa7a1f0c0c476f0e01e4660c5f05c3->enter($__internal_2aa7dbace27c1c1c4c0b3a1b7c274f8a0eaa7a1f0c0c476f0e01e4660c5f05c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2aa7dbace27c1c1c4c0b3a1b7c274f8a0eaa7a1f0c0c476f0e01e4660c5f05c3->leave($__internal_2aa7dbace27c1c1c4c0b3a1b7c274f8a0eaa7a1f0c0c476f0e01e4660c5f05c3_prof);

        
        $__internal_71dc17f2b9085aa1c2f73b737bb20b50244c6073944ecb25c75a6099f7861f38->leave($__internal_71dc17f2b9085aa1c2f73b737bb20b50244c6073944ecb25c75a6099f7861f38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61c7826d06a8cb7182873a5000e2fa1836e70e9c69b365dec15a4aabb2543dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c7826d06a8cb7182873a5000e2fa1836e70e9c69b365dec15a4aabb2543dd8->enter($__internal_61c7826d06a8cb7182873a5000e2fa1836e70e9c69b365dec15a4aabb2543dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_44da74e7972fb7742bc4bcdc5a729ad5a2134f939e9dd357c05a5d77b6a2b628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44da74e7972fb7742bc4bcdc5a729ad5a2134f939e9dd357c05a5d77b6a2b628->enter($__internal_44da74e7972fb7742bc4bcdc5a729ad5a2134f939e9dd357c05a5d77b6a2b628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_44da74e7972fb7742bc4bcdc5a729ad5a2134f939e9dd357c05a5d77b6a2b628->leave($__internal_44da74e7972fb7742bc4bcdc5a729ad5a2134f939e9dd357c05a5d77b6a2b628_prof);

        
        $__internal_61c7826d06a8cb7182873a5000e2fa1836e70e9c69b365dec15a4aabb2543dd8->leave($__internal_61c7826d06a8cb7182873a5000e2fa1836e70e9c69b365dec15a4aabb2543dd8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63f773625b565a979cb2559aadb8764076ba4f819ae1c0a90a7690f8803077bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f773625b565a979cb2559aadb8764076ba4f819ae1c0a90a7690f8803077bb->enter($__internal_63f773625b565a979cb2559aadb8764076ba4f819ae1c0a90a7690f8803077bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fa643f0a5e97f8a9787f6bd277144b46f374d4999c1e4fd097e2f3e0b89e7544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa643f0a5e97f8a9787f6bd277144b46f374d4999c1e4fd097e2f3e0b89e7544->enter($__internal_fa643f0a5e97f8a9787f6bd277144b46f374d4999c1e4fd097e2f3e0b89e7544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa643f0a5e97f8a9787f6bd277144b46f374d4999c1e4fd097e2f3e0b89e7544->leave($__internal_fa643f0a5e97f8a9787f6bd277144b46f374d4999c1e4fd097e2f3e0b89e7544_prof);

        
        $__internal_63f773625b565a979cb2559aadb8764076ba4f819ae1c0a90a7690f8803077bb->leave($__internal_63f773625b565a979cb2559aadb8764076ba4f819ae1c0a90a7690f8803077bb_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
