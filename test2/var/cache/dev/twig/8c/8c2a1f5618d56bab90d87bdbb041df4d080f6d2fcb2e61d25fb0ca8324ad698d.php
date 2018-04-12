<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_45e521c1f2ba760c33d098dc9662ad2572165a33d15957a32aefec4f00d28f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_776488582143defd1eda697c43a7443f8aa823c811b473898700b45d71f7cfdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776488582143defd1eda697c43a7443f8aa823c811b473898700b45d71f7cfdc->enter($__internal_776488582143defd1eda697c43a7443f8aa823c811b473898700b45d71f7cfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_ebdc5f602884ddf8594da3ae90df2f4ca0bbeb95463ce39c3c905acb7e656b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdc5f602884ddf8594da3ae90df2f4ca0bbeb95463ce39c3c905acb7e656b31->enter($__internal_ebdc5f602884ddf8594da3ae90df2f4ca0bbeb95463ce39c3c905acb7e656b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_776488582143defd1eda697c43a7443f8aa823c811b473898700b45d71f7cfdc->leave($__internal_776488582143defd1eda697c43a7443f8aa823c811b473898700b45d71f7cfdc_prof);

        
        $__internal_ebdc5f602884ddf8594da3ae90df2f4ca0bbeb95463ce39c3c905acb7e656b31->leave($__internal_ebdc5f602884ddf8594da3ae90df2f4ca0bbeb95463ce39c3c905acb7e656b31_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_382e2faf826f1741bf2ea15ba08caba777815526f0ff8dbbd7dbf97c8b9bb9fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382e2faf826f1741bf2ea15ba08caba777815526f0ff8dbbd7dbf97c8b9bb9fc->enter($__internal_382e2faf826f1741bf2ea15ba08caba777815526f0ff8dbbd7dbf97c8b9bb9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72be064dede90acfd2645369c589e9acdf2ac2a0161be69cfd29b5897eb07eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72be064dede90acfd2645369c589e9acdf2ac2a0161be69cfd29b5897eb07eb8->enter($__internal_72be064dede90acfd2645369c589e9acdf2ac2a0161be69cfd29b5897eb07eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_72be064dede90acfd2645369c589e9acdf2ac2a0161be69cfd29b5897eb07eb8->leave($__internal_72be064dede90acfd2645369c589e9acdf2ac2a0161be69cfd29b5897eb07eb8_prof);

        
        $__internal_382e2faf826f1741bf2ea15ba08caba777815526f0ff8dbbd7dbf97c8b9bb9fc->leave($__internal_382e2faf826f1741bf2ea15ba08caba777815526f0ff8dbbd7dbf97c8b9bb9fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8213d42a9cbf0f90acd0a33865d12aee6969cef8fdbf47fe493b44bd59feab43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8213d42a9cbf0f90acd0a33865d12aee6969cef8fdbf47fe493b44bd59feab43->enter($__internal_8213d42a9cbf0f90acd0a33865d12aee6969cef8fdbf47fe493b44bd59feab43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22036978f6aa9e5e3e80b5119ccefc23838ce3e67d28f6862db9860b600ed33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22036978f6aa9e5e3e80b5119ccefc23838ce3e67d28f6862db9860b600ed33d->enter($__internal_22036978f6aa9e5e3e80b5119ccefc23838ce3e67d28f6862db9860b600ed33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_22036978f6aa9e5e3e80b5119ccefc23838ce3e67d28f6862db9860b600ed33d->leave($__internal_22036978f6aa9e5e3e80b5119ccefc23838ce3e67d28f6862db9860b600ed33d_prof);

        
        $__internal_8213d42a9cbf0f90acd0a33865d12aee6969cef8fdbf47fe493b44bd59feab43->leave($__internal_8213d42a9cbf0f90acd0a33865d12aee6969cef8fdbf47fe493b44bd59feab43_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
