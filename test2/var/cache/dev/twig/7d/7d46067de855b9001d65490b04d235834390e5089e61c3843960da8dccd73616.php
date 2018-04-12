<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_09648a1e3b80c08f9463001db2bc051637e8103c5bb849d7d84e9c391260c559 extends Twig_Template
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
        $__internal_b903e55fb206c9cb19bcb718f4f38b7a3d80ffe0afd1ebaf760accc810c0b2d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b903e55fb206c9cb19bcb718f4f38b7a3d80ffe0afd1ebaf760accc810c0b2d9->enter($__internal_b903e55fb206c9cb19bcb718f4f38b7a3d80ffe0afd1ebaf760accc810c0b2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_da147c25c08a7b8e63ea71db7701d4d4081ba25359ca0391add610e1fdfc5e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da147c25c08a7b8e63ea71db7701d4d4081ba25359ca0391add610e1fdfc5e85->enter($__internal_da147c25c08a7b8e63ea71db7701d4d4081ba25359ca0391add610e1fdfc5e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b903e55fb206c9cb19bcb718f4f38b7a3d80ffe0afd1ebaf760accc810c0b2d9->leave($__internal_b903e55fb206c9cb19bcb718f4f38b7a3d80ffe0afd1ebaf760accc810c0b2d9_prof);

        
        $__internal_da147c25c08a7b8e63ea71db7701d4d4081ba25359ca0391add610e1fdfc5e85->leave($__internal_da147c25c08a7b8e63ea71db7701d4d4081ba25359ca0391add610e1fdfc5e85_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
