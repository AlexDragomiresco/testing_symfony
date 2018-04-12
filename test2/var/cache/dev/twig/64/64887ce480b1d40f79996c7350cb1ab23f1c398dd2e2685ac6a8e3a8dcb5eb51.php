<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_aed95722f5b8a09916068df5eebfd2513fa6f1503e90987bf857e523eb0832f8 extends Twig_Template
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
        $__internal_2bd26f157372aef53e63ebb0fdbbc7066e91a5cbf1489bd9f9088db9c0784948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd26f157372aef53e63ebb0fdbbc7066e91a5cbf1489bd9f9088db9c0784948->enter($__internal_2bd26f157372aef53e63ebb0fdbbc7066e91a5cbf1489bd9f9088db9c0784948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_1e04c0d7804bed1f170648ddceeaf15bd11bda982d8a880f283859751cfd04ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e04c0d7804bed1f170648ddceeaf15bd11bda982d8a880f283859751cfd04ca->enter($__internal_1e04c0d7804bed1f170648ddceeaf15bd11bda982d8a880f283859751cfd04ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2bd26f157372aef53e63ebb0fdbbc7066e91a5cbf1489bd9f9088db9c0784948->leave($__internal_2bd26f157372aef53e63ebb0fdbbc7066e91a5cbf1489bd9f9088db9c0784948_prof);

        
        $__internal_1e04c0d7804bed1f170648ddceeaf15bd11bda982d8a880f283859751cfd04ca->leave($__internal_1e04c0d7804bed1f170648ddceeaf15bd11bda982d8a880f283859751cfd04ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
