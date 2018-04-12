<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_90d9f70157482c0bb63090a94cd60325b75e6586500a846d90225d8edd0d67bb extends Twig_Template
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
        $__internal_164156cfcea7a460dff1d65bb7559f0a28bd4bfe25d153c2af3d335f59184127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164156cfcea7a460dff1d65bb7559f0a28bd4bfe25d153c2af3d335f59184127->enter($__internal_164156cfcea7a460dff1d65bb7559f0a28bd4bfe25d153c2af3d335f59184127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ff706c071a14f8defe4ea0c5d9528fc7b3dfa1f0a1a95bd63e404e59d4e31db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff706c071a14f8defe4ea0c5d9528fc7b3dfa1f0a1a95bd63e404e59d4e31db8->enter($__internal_ff706c071a14f8defe4ea0c5d9528fc7b3dfa1f0a1a95bd63e404e59d4e31db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_164156cfcea7a460dff1d65bb7559f0a28bd4bfe25d153c2af3d335f59184127->leave($__internal_164156cfcea7a460dff1d65bb7559f0a28bd4bfe25d153c2af3d335f59184127_prof);

        
        $__internal_ff706c071a14f8defe4ea0c5d9528fc7b3dfa1f0a1a95bd63e404e59d4e31db8->leave($__internal_ff706c071a14f8defe4ea0c5d9528fc7b3dfa1f0a1a95bd63e404e59d4e31db8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
