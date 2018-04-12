<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_920aa2e5e272eab232ffca63c983ce13242233f0e356a3f940b7bead25c37205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a11c8a1406c16d4c4d56f9797cfaaee28883be598af6b015f497eafaf2bff1d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11c8a1406c16d4c4d56f9797cfaaee28883be598af6b015f497eafaf2bff1d7->enter($__internal_a11c8a1406c16d4c4d56f9797cfaaee28883be598af6b015f497eafaf2bff1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_1e437e62a5cf1dc35bbf6ec22c6a4b1c6ccb935f21af9661c1eca23490a705aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e437e62a5cf1dc35bbf6ec22c6a4b1c6ccb935f21af9661c1eca23490a705aa->enter($__internal_1e437e62a5cf1dc35bbf6ec22c6a4b1c6ccb935f21af9661c1eca23490a705aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a11c8a1406c16d4c4d56f9797cfaaee28883be598af6b015f497eafaf2bff1d7->leave($__internal_a11c8a1406c16d4c4d56f9797cfaaee28883be598af6b015f497eafaf2bff1d7_prof);

        
        $__internal_1e437e62a5cf1dc35bbf6ec22c6a4b1c6ccb935f21af9661c1eca23490a705aa->leave($__internal_1e437e62a5cf1dc35bbf6ec22c6a4b1c6ccb935f21af9661c1eca23490a705aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39be6d9c188b3737b5803d0f7d93cfe6f31c9d0beebe9518c73c27d094647564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39be6d9c188b3737b5803d0f7d93cfe6f31c9d0beebe9518c73c27d094647564->enter($__internal_39be6d9c188b3737b5803d0f7d93cfe6f31c9d0beebe9518c73c27d094647564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b00d784248829ed43b51532c701d459283f7f26c8d05ff91a8ab532073014972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00d784248829ed43b51532c701d459283f7f26c8d05ff91a8ab532073014972->enter($__internal_b00d784248829ed43b51532c701d459283f7f26c8d05ff91a8ab532073014972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b00d784248829ed43b51532c701d459283f7f26c8d05ff91a8ab532073014972->leave($__internal_b00d784248829ed43b51532c701d459283f7f26c8d05ff91a8ab532073014972_prof);

        
        $__internal_39be6d9c188b3737b5803d0f7d93cfe6f31c9d0beebe9518c73c27d094647564->leave($__internal_39be6d9c188b3737b5803d0f7d93cfe6f31c9d0beebe9518c73c27d094647564_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ca0c487fabb63db73631f9203663a09df8fec2e0ccb6b8c2e9860ae35b2ca21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca0c487fabb63db73631f9203663a09df8fec2e0ccb6b8c2e9860ae35b2ca21->enter($__internal_3ca0c487fabb63db73631f9203663a09df8fec2e0ccb6b8c2e9860ae35b2ca21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01c92b89ef45185aff1e5540c81202d603d99d521c6be0c6fe294e17c58cc643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c92b89ef45185aff1e5540c81202d603d99d521c6be0c6fe294e17c58cc643->enter($__internal_01c92b89ef45185aff1e5540c81202d603d99d521c6be0c6fe294e17c58cc643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_01c92b89ef45185aff1e5540c81202d603d99d521c6be0c6fe294e17c58cc643->leave($__internal_01c92b89ef45185aff1e5540c81202d603d99d521c6be0c6fe294e17c58cc643_prof);

        
        $__internal_3ca0c487fabb63db73631f9203663a09df8fec2e0ccb6b8c2e9860ae35b2ca21->leave($__internal_3ca0c487fabb63db73631f9203663a09df8fec2e0ccb6b8c2e9860ae35b2ca21_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
