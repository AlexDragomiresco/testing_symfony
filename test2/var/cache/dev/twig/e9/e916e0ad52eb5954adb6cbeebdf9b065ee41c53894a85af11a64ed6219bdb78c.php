<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4f7197a3c6c96d1efe987a3d4c79fd2df7eaa3d0a592eb5a06abe9ce705d6851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0d9dbe725bc839ca86108b9f06df64c433a4d9223bee7002b7cc3cdb2c9566a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d9dbe725bc839ca86108b9f06df64c433a4d9223bee7002b7cc3cdb2c9566a->enter($__internal_f0d9dbe725bc839ca86108b9f06df64c433a4d9223bee7002b7cc3cdb2c9566a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a2a20a5e4fe3fc98a3b55b21ae3302fd2b16de903813d5e3614d097529ddf279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a20a5e4fe3fc98a3b55b21ae3302fd2b16de903813d5e3614d097529ddf279->enter($__internal_a2a20a5e4fe3fc98a3b55b21ae3302fd2b16de903813d5e3614d097529ddf279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f0d9dbe725bc839ca86108b9f06df64c433a4d9223bee7002b7cc3cdb2c9566a->leave($__internal_f0d9dbe725bc839ca86108b9f06df64c433a4d9223bee7002b7cc3cdb2c9566a_prof);

        
        $__internal_a2a20a5e4fe3fc98a3b55b21ae3302fd2b16de903813d5e3614d097529ddf279->leave($__internal_a2a20a5e4fe3fc98a3b55b21ae3302fd2b16de903813d5e3614d097529ddf279_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fcb33e61628118456719f2821f2ee3fe753993eae73c22f1b370784b1e1ba0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fcb33e61628118456719f2821f2ee3fe753993eae73c22f1b370784b1e1ba0a->enter($__internal_9fcb33e61628118456719f2821f2ee3fe753993eae73c22f1b370784b1e1ba0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_37f4734fa4d3007c224dab8bc41e71615dfb6e8f764b10c9b2f726fa0093dfb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f4734fa4d3007c224dab8bc41e71615dfb6e8f764b10c9b2f726fa0093dfb3->enter($__internal_37f4734fa4d3007c224dab8bc41e71615dfb6e8f764b10c9b2f726fa0093dfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_37f4734fa4d3007c224dab8bc41e71615dfb6e8f764b10c9b2f726fa0093dfb3->leave($__internal_37f4734fa4d3007c224dab8bc41e71615dfb6e8f764b10c9b2f726fa0093dfb3_prof);

        
        $__internal_9fcb33e61628118456719f2821f2ee3fe753993eae73c22f1b370784b1e1ba0a->leave($__internal_9fcb33e61628118456719f2821f2ee3fe753993eae73c22f1b370784b1e1ba0a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
