<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e94fbc4a5be293f624c0852d2baf5f7191a00f402897901110a33176af4d1ec6 extends Twig_Template
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
        $__internal_134997437878e3efa4c9dc9f5cd3c4ae286a9a830568ae3616ac3a31a760c7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134997437878e3efa4c9dc9f5cd3c4ae286a9a830568ae3616ac3a31a760c7cf->enter($__internal_134997437878e3efa4c9dc9f5cd3c4ae286a9a830568ae3616ac3a31a760c7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_5d67c2994c304f74d1e4c76fd86e5f15934e247c4d33b07fcc0674e6ee123e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d67c2994c304f74d1e4c76fd86e5f15934e247c4d33b07fcc0674e6ee123e58->enter($__internal_5d67c2994c304f74d1e4c76fd86e5f15934e247c4d33b07fcc0674e6ee123e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_134997437878e3efa4c9dc9f5cd3c4ae286a9a830568ae3616ac3a31a760c7cf->leave($__internal_134997437878e3efa4c9dc9f5cd3c4ae286a9a830568ae3616ac3a31a760c7cf_prof);

        
        $__internal_5d67c2994c304f74d1e4c76fd86e5f15934e247c4d33b07fcc0674e6ee123e58->leave($__internal_5d67c2994c304f74d1e4c76fd86e5f15934e247c4d33b07fcc0674e6ee123e58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
