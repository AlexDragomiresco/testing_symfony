<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_75245bb8e1897c9469388a8b8a0812b280087ac5140c8d02d4d4bc5545796ccd extends Twig_Template
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
        $__internal_91e87609a5a38cfc3feeeaa6f3cb16268edd5641b3ace8bf0dc5b246b8606432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e87609a5a38cfc3feeeaa6f3cb16268edd5641b3ace8bf0dc5b246b8606432->enter($__internal_91e87609a5a38cfc3feeeaa6f3cb16268edd5641b3ace8bf0dc5b246b8606432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_88ef6fca8a960f2650ecdc3d9f9a5c384e2d5d39a8965d7a171f73b6fa0c96cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ef6fca8a960f2650ecdc3d9f9a5c384e2d5d39a8965d7a171f73b6fa0c96cd->enter($__internal_88ef6fca8a960f2650ecdc3d9f9a5c384e2d5d39a8965d7a171f73b6fa0c96cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_91e87609a5a38cfc3feeeaa6f3cb16268edd5641b3ace8bf0dc5b246b8606432->leave($__internal_91e87609a5a38cfc3feeeaa6f3cb16268edd5641b3ace8bf0dc5b246b8606432_prof);

        
        $__internal_88ef6fca8a960f2650ecdc3d9f9a5c384e2d5d39a8965d7a171f73b6fa0c96cd->leave($__internal_88ef6fca8a960f2650ecdc3d9f9a5c384e2d5d39a8965d7a171f73b6fa0c96cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
