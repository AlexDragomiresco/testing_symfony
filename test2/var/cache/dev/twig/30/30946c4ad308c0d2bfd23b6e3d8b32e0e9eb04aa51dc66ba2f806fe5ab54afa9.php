<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_da0c0937483562fd24f27ef32a02d14d883d786ba8f653a4a4edeab8acea78f5 extends Twig_Template
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
        $__internal_c05304aff7e609c15a79e2cf6dfc5dddf631872e109326804ecb74db802531ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05304aff7e609c15a79e2cf6dfc5dddf631872e109326804ecb74db802531ba->enter($__internal_c05304aff7e609c15a79e2cf6dfc5dddf631872e109326804ecb74db802531ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_85c0901a8f73c86cbac83b49e84600e4f4e6dfd660e2488daa7b9c437ce82d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c0901a8f73c86cbac83b49e84600e4f4e6dfd660e2488daa7b9c437ce82d14->enter($__internal_85c0901a8f73c86cbac83b49e84600e4f4e6dfd660e2488daa7b9c437ce82d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c05304aff7e609c15a79e2cf6dfc5dddf631872e109326804ecb74db802531ba->leave($__internal_c05304aff7e609c15a79e2cf6dfc5dddf631872e109326804ecb74db802531ba_prof);

        
        $__internal_85c0901a8f73c86cbac83b49e84600e4f4e6dfd660e2488daa7b9c437ce82d14->leave($__internal_85c0901a8f73c86cbac83b49e84600e4f4e6dfd660e2488daa7b9c437ce82d14_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
