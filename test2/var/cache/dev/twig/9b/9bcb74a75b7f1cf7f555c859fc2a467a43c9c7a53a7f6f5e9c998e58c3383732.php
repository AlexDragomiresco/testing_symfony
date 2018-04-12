<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_861753a6966c253eeb80d055c624345a508a37920d4e880f1aa89ddcbba46149 extends Twig_Template
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
        $__internal_ea378f2c2f0338d4879f7e00dd15c72cd34f7df8ef7b3d6ed478487697ee2660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea378f2c2f0338d4879f7e00dd15c72cd34f7df8ef7b3d6ed478487697ee2660->enter($__internal_ea378f2c2f0338d4879f7e00dd15c72cd34f7df8ef7b3d6ed478487697ee2660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b1599136be49231afd4a27ff6f01b222ac8f38478de5ffdb92f9d37b01368c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1599136be49231afd4a27ff6f01b222ac8f38478de5ffdb92f9d37b01368c68->enter($__internal_b1599136be49231afd4a27ff6f01b222ac8f38478de5ffdb92f9d37b01368c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ea378f2c2f0338d4879f7e00dd15c72cd34f7df8ef7b3d6ed478487697ee2660->leave($__internal_ea378f2c2f0338d4879f7e00dd15c72cd34f7df8ef7b3d6ed478487697ee2660_prof);

        
        $__internal_b1599136be49231afd4a27ff6f01b222ac8f38478de5ffdb92f9d37b01368c68->leave($__internal_b1599136be49231afd4a27ff6f01b222ac8f38478de5ffdb92f9d37b01368c68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
