<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0f4f64ccbd172132e07170db21a66b6f749339c7e4b17b2f70e096a538425849 extends Twig_Template
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
        $__internal_d9b14cd6db10f4f40cda33e788eb41789372efc6b47c79f0f13f3365a5c82c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b14cd6db10f4f40cda33e788eb41789372efc6b47c79f0f13f3365a5c82c74->enter($__internal_d9b14cd6db10f4f40cda33e788eb41789372efc6b47c79f0f13f3365a5c82c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_74e8e0c3047722fffbce947b3b3e92dbaab9e949f84de0e1898c34762f34e0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e8e0c3047722fffbce947b3b3e92dbaab9e949f84de0e1898c34762f34e0cb->enter($__internal_74e8e0c3047722fffbce947b3b3e92dbaab9e949f84de0e1898c34762f34e0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d9b14cd6db10f4f40cda33e788eb41789372efc6b47c79f0f13f3365a5c82c74->leave($__internal_d9b14cd6db10f4f40cda33e788eb41789372efc6b47c79f0f13f3365a5c82c74_prof);

        
        $__internal_74e8e0c3047722fffbce947b3b3e92dbaab9e949f84de0e1898c34762f34e0cb->leave($__internal_74e8e0c3047722fffbce947b3b3e92dbaab9e949f84de0e1898c34762f34e0cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
