<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_991ecedd3b42766376ec1564d1b612e429b0927c374c42c806924bc58a6db9b7 extends Twig_Template
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
        $__internal_cb374e8248e5cfaf44ac91dd39047a754d31cd463838e70431bbabec3cf636ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb374e8248e5cfaf44ac91dd39047a754d31cd463838e70431bbabec3cf636ff->enter($__internal_cb374e8248e5cfaf44ac91dd39047a754d31cd463838e70431bbabec3cf636ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e009386bee9fb04d94cc47fe43834eb48001964904e55fba1434be5045b6ecc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e009386bee9fb04d94cc47fe43834eb48001964904e55fba1434be5045b6ecc3->enter($__internal_e009386bee9fb04d94cc47fe43834eb48001964904e55fba1434be5045b6ecc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cb374e8248e5cfaf44ac91dd39047a754d31cd463838e70431bbabec3cf636ff->leave($__internal_cb374e8248e5cfaf44ac91dd39047a754d31cd463838e70431bbabec3cf636ff_prof);

        
        $__internal_e009386bee9fb04d94cc47fe43834eb48001964904e55fba1434be5045b6ecc3->leave($__internal_e009386bee9fb04d94cc47fe43834eb48001964904e55fba1434be5045b6ecc3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
