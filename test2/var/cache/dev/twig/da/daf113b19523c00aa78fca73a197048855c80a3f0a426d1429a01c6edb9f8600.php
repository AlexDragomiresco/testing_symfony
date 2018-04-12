<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_2e8e5b05ea47df6f0cc89c43fbb4aaf5e9067dd2784fd09a7a3e5c5ebb67a571 extends Twig_Template
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
        $__internal_d35bed0f05d9ff093ea6e5cd686413406b58ea11b770663ad0ea1654627157d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35bed0f05d9ff093ea6e5cd686413406b58ea11b770663ad0ea1654627157d9->enter($__internal_d35bed0f05d9ff093ea6e5cd686413406b58ea11b770663ad0ea1654627157d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_95b28771a88812032e30329487e9caaa60c52c6e90678ef46abe8d9f2af72efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b28771a88812032e30329487e9caaa60c52c6e90678ef46abe8d9f2af72efc->enter($__internal_95b28771a88812032e30329487e9caaa60c52c6e90678ef46abe8d9f2af72efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_d35bed0f05d9ff093ea6e5cd686413406b58ea11b770663ad0ea1654627157d9->leave($__internal_d35bed0f05d9ff093ea6e5cd686413406b58ea11b770663ad0ea1654627157d9_prof);

        
        $__internal_95b28771a88812032e30329487e9caaa60c52c6e90678ef46abe8d9f2af72efc->leave($__internal_95b28771a88812032e30329487e9caaa60c52c6e90678ef46abe8d9f2af72efc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
