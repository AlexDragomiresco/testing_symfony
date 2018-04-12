<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_da98aba8983400fc7681c7b1817afa81a91ee9c430d2be9d22c95729a468151e extends Twig_Template
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
        $__internal_bd8ea6915157409858855d35645e57bfef4b5b37d0a33478ccb98397271bd220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8ea6915157409858855d35645e57bfef4b5b37d0a33478ccb98397271bd220->enter($__internal_bd8ea6915157409858855d35645e57bfef4b5b37d0a33478ccb98397271bd220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_7848061e89612508d37851002562379f4fb985c16a8711055fbd8496b2f88f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7848061e89612508d37851002562379f4fb985c16a8711055fbd8496b2f88f24->enter($__internal_7848061e89612508d37851002562379f4fb985c16a8711055fbd8496b2f88f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_bd8ea6915157409858855d35645e57bfef4b5b37d0a33478ccb98397271bd220->leave($__internal_bd8ea6915157409858855d35645e57bfef4b5b37d0a33478ccb98397271bd220_prof);

        
        $__internal_7848061e89612508d37851002562379f4fb985c16a8711055fbd8496b2f88f24->leave($__internal_7848061e89612508d37851002562379f4fb985c16a8711055fbd8496b2f88f24_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
