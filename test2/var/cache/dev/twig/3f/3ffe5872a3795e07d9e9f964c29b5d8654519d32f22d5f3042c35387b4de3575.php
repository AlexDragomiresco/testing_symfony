<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_451d5dfdc8c8901e876c743d93a66e05d977b2146489617e874fa95de44b694d extends Twig_Template
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
        $__internal_d95cff0fa8cb56ce670526f40f0352e658634339ba04ad99b415611f2e07a49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95cff0fa8cb56ce670526f40f0352e658634339ba04ad99b415611f2e07a49e->enter($__internal_d95cff0fa8cb56ce670526f40f0352e658634339ba04ad99b415611f2e07a49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_997847df2ac106b9a272624b81c186eaecf5ce5e6064059365988ab0d85a93ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997847df2ac106b9a272624b81c186eaecf5ce5e6064059365988ab0d85a93ea->enter($__internal_997847df2ac106b9a272624b81c186eaecf5ce5e6064059365988ab0d85a93ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d95cff0fa8cb56ce670526f40f0352e658634339ba04ad99b415611f2e07a49e->leave($__internal_d95cff0fa8cb56ce670526f40f0352e658634339ba04ad99b415611f2e07a49e_prof);

        
        $__internal_997847df2ac106b9a272624b81c186eaecf5ce5e6064059365988ab0d85a93ea->leave($__internal_997847df2ac106b9a272624b81c186eaecf5ce5e6064059365988ab0d85a93ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
