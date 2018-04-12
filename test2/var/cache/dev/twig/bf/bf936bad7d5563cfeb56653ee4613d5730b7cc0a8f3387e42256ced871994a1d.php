<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f16e39a7891f946dc63fb6323979c289bffcabe0ab6cdaf80051f5950c3423a7 extends Twig_Template
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
        $__internal_99c678755cf38f36121384841b93aba3b2a1dbc617472e1e29dbaed8337b4ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c678755cf38f36121384841b93aba3b2a1dbc617472e1e29dbaed8337b4ee4->enter($__internal_99c678755cf38f36121384841b93aba3b2a1dbc617472e1e29dbaed8337b4ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5040ad1dafa0db5e9ebb9c68e1ee74d6bcbda3e945e8512b7de16060ee450c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5040ad1dafa0db5e9ebb9c68e1ee74d6bcbda3e945e8512b7de16060ee450c01->enter($__internal_5040ad1dafa0db5e9ebb9c68e1ee74d6bcbda3e945e8512b7de16060ee450c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_99c678755cf38f36121384841b93aba3b2a1dbc617472e1e29dbaed8337b4ee4->leave($__internal_99c678755cf38f36121384841b93aba3b2a1dbc617472e1e29dbaed8337b4ee4_prof);

        
        $__internal_5040ad1dafa0db5e9ebb9c68e1ee74d6bcbda3e945e8512b7de16060ee450c01->leave($__internal_5040ad1dafa0db5e9ebb9c68e1ee74d6bcbda3e945e8512b7de16060ee450c01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
