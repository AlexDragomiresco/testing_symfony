<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_31d245428952f41c310878754613f2645e18a560ccf77cc0adb4939970cb8ca4 extends Twig_Template
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
        $__internal_0b29cbc903c73acdc3f6d4fd056dd35d44e3b2417110f262d0cb754451a0242c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b29cbc903c73acdc3f6d4fd056dd35d44e3b2417110f262d0cb754451a0242c->enter($__internal_0b29cbc903c73acdc3f6d4fd056dd35d44e3b2417110f262d0cb754451a0242c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_6f0f08076b74d098edc36b7f843bbb93a8166cb7faeab6b25ab80bb641ee820e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0f08076b74d098edc36b7f843bbb93a8166cb7faeab6b25ab80bb641ee820e->enter($__internal_6f0f08076b74d098edc36b7f843bbb93a8166cb7faeab6b25ab80bb641ee820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0b29cbc903c73acdc3f6d4fd056dd35d44e3b2417110f262d0cb754451a0242c->leave($__internal_0b29cbc903c73acdc3f6d4fd056dd35d44e3b2417110f262d0cb754451a0242c_prof);

        
        $__internal_6f0f08076b74d098edc36b7f843bbb93a8166cb7faeab6b25ab80bb641ee820e->leave($__internal_6f0f08076b74d098edc36b7f843bbb93a8166cb7faeab6b25ab80bb641ee820e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
