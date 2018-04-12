<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_61f059149e891146b800a0d8203bd825fcbbebd9a0b770d816b82a68c4bc570d extends Twig_Template
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
        $__internal_2d1a3608ebe3203dc9213a854ff621af0920131b7b0f0e5a92625c3fc1e60e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1a3608ebe3203dc9213a854ff621af0920131b7b0f0e5a92625c3fc1e60e16->enter($__internal_2d1a3608ebe3203dc9213a854ff621af0920131b7b0f0e5a92625c3fc1e60e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ff1e372e6b9f3a8e804cca8a4ba4b465c13477bc43fbd60778520904a23a1577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1e372e6b9f3a8e804cca8a4ba4b465c13477bc43fbd60778520904a23a1577->enter($__internal_ff1e372e6b9f3a8e804cca8a4ba4b465c13477bc43fbd60778520904a23a1577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2d1a3608ebe3203dc9213a854ff621af0920131b7b0f0e5a92625c3fc1e60e16->leave($__internal_2d1a3608ebe3203dc9213a854ff621af0920131b7b0f0e5a92625c3fc1e60e16_prof);

        
        $__internal_ff1e372e6b9f3a8e804cca8a4ba4b465c13477bc43fbd60778520904a23a1577->leave($__internal_ff1e372e6b9f3a8e804cca8a4ba4b465c13477bc43fbd60778520904a23a1577_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
