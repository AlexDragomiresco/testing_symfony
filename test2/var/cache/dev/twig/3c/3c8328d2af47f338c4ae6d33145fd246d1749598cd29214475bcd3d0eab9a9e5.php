<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e8fd1ed0621ab0cb30b11d4c1862513053289c390ac18a53712dccd07001e6de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_798936ef28c35124d8c9cf3b53c68a9ff5405bcad12bebdf07890d9f573603b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798936ef28c35124d8c9cf3b53c68a9ff5405bcad12bebdf07890d9f573603b2->enter($__internal_798936ef28c35124d8c9cf3b53c68a9ff5405bcad12bebdf07890d9f573603b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_9c7cdd3b5dcae14045455090648d08564c27d61180e471829246d051df47f641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7cdd3b5dcae14045455090648d08564c27d61180e471829246d051df47f641->enter($__internal_9c7cdd3b5dcae14045455090648d08564c27d61180e471829246d051df47f641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_798936ef28c35124d8c9cf3b53c68a9ff5405bcad12bebdf07890d9f573603b2->leave($__internal_798936ef28c35124d8c9cf3b53c68a9ff5405bcad12bebdf07890d9f573603b2_prof);

        
        $__internal_9c7cdd3b5dcae14045455090648d08564c27d61180e471829246d051df47f641->leave($__internal_9c7cdd3b5dcae14045455090648d08564c27d61180e471829246d051df47f641_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
