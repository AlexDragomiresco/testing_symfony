<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_fd7171824f165e008cc28a72ea395b8289ada3bb38a192d6444b496126ede722 extends Twig_Template
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
        $__internal_05fe2dbdba6ba3c16a3c7d37a56d607c574eefc6f3148384680948058bd3130d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05fe2dbdba6ba3c16a3c7d37a56d607c574eefc6f3148384680948058bd3130d->enter($__internal_05fe2dbdba6ba3c16a3c7d37a56d607c574eefc6f3148384680948058bd3130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_c3e90cbdc6001972fc39a5b63144a3e5bcf5d2500053b0b3a3badece5632120b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e90cbdc6001972fc39a5b63144a3e5bcf5d2500053b0b3a3badece5632120b->enter($__internal_c3e90cbdc6001972fc39a5b63144a3e5bcf5d2500053b0b3a3badece5632120b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_05fe2dbdba6ba3c16a3c7d37a56d607c574eefc6f3148384680948058bd3130d->leave($__internal_05fe2dbdba6ba3c16a3c7d37a56d607c574eefc6f3148384680948058bd3130d_prof);

        
        $__internal_c3e90cbdc6001972fc39a5b63144a3e5bcf5d2500053b0b3a3badece5632120b->leave($__internal_c3e90cbdc6001972fc39a5b63144a3e5bcf5d2500053b0b3a3badece5632120b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
