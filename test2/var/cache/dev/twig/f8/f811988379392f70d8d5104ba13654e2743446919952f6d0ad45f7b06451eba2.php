<?php

/* reservations/index.html.twig */
class __TwigTemplate_ba27b6898c5803a4a62d58612b91e8625d4c54f3f3ad2dfe3851d7c636517c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7aa33d53eddd4489ba8b7b28b4884d90fa868e0b121f0fcddfa57ff551aa541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7aa33d53eddd4489ba8b7b28b4884d90fa868e0b121f0fcddfa57ff551aa541->enter($__internal_a7aa33d53eddd4489ba8b7b28b4884d90fa868e0b121f0fcddfa57ff551aa541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_435e810aaf61b01aea2873420ec74a253a9b28f507a0843c97944dd053a1e576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435e810aaf61b01aea2873420ec74a253a9b28f507a0843c97944dd053a1e576->enter($__internal_435e810aaf61b01aea2873420ec74a253a9b28f507a0843c97944dd053a1e576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7aa33d53eddd4489ba8b7b28b4884d90fa868e0b121f0fcddfa57ff551aa541->leave($__internal_a7aa33d53eddd4489ba8b7b28b4884d90fa868e0b121f0fcddfa57ff551aa541_prof);

        
        $__internal_435e810aaf61b01aea2873420ec74a253a9b28f507a0843c97944dd053a1e576->leave($__internal_435e810aaf61b01aea2873420ec74a253a9b28f507a0843c97944dd053a1e576_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_589e95d03fdcc196dea860c24b54e1a60c7e3cb0f64ccdbd67350f9343841685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589e95d03fdcc196dea860c24b54e1a60c7e3cb0f64ccdbd67350f9343841685->enter($__internal_589e95d03fdcc196dea860c24b54e1a60c7e3cb0f64ccdbd67350f9343841685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3e30b20711416b528976f9645ae178554040071baa19bf34194182eee6f1c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e30b20711416b528976f9645ae178554040071baa19bf34194182eee6f1c27->enter($__internal_f3e30b20711416b528976f9645ae178554040071baa19bf34194182eee6f1c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_f3e30b20711416b528976f9645ae178554040071baa19bf34194182eee6f1c27->leave($__internal_f3e30b20711416b528976f9645ae178554040071baa19bf34194182eee6f1c27_prof);

        
        $__internal_589e95d03fdcc196dea860c24b54e1a60c7e3cb0f64ccdbd67350f9343841685->leave($__internal_589e95d03fdcc196dea860c24b54e1a60c7e3cb0f64ccdbd67350f9343841685_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/index.html.twig", "/var/www/erstesymf/test2/app/Resources/views/reservations/index.html.twig");
    }
}
