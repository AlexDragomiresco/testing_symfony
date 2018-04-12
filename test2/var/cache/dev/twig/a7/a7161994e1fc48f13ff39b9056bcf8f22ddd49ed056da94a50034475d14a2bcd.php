<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4958619e237ddc68d2bd3d939007e2be1352a1d57e68da034ab8c719df2eb2ac extends Twig_Template
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
        $__internal_36771cc4b2fbd217b2cb7d1d6bc43a0238c5f8fbff6d6355873789d4bb087e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36771cc4b2fbd217b2cb7d1d6bc43a0238c5f8fbff6d6355873789d4bb087e1d->enter($__internal_36771cc4b2fbd217b2cb7d1d6bc43a0238c5f8fbff6d6355873789d4bb087e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_4189c09f6624801122d66a0381cb01fbe1e96e4ab71c7d677559d601520fdea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4189c09f6624801122d66a0381cb01fbe1e96e4ab71c7d677559d601520fdea8->enter($__internal_4189c09f6624801122d66a0381cb01fbe1e96e4ab71c7d677559d601520fdea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_36771cc4b2fbd217b2cb7d1d6bc43a0238c5f8fbff6d6355873789d4bb087e1d->leave($__internal_36771cc4b2fbd217b2cb7d1d6bc43a0238c5f8fbff6d6355873789d4bb087e1d_prof);

        
        $__internal_4189c09f6624801122d66a0381cb01fbe1e96e4ab71c7d677559d601520fdea8->leave($__internal_4189c09f6624801122d66a0381cb01fbe1e96e4ab71c7d677559d601520fdea8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
