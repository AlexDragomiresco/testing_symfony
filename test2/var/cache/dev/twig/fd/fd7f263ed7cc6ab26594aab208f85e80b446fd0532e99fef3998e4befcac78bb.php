<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6f89148a1cfbf813db521034b48e5b148025fb2afb8c10f411b67f705ebed5a6 extends Twig_Template
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
        $__internal_22610402ca5275abce98db6f96cde7a774382ae60ace96d0b0f8d5fb7edcff9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22610402ca5275abce98db6f96cde7a774382ae60ace96d0b0f8d5fb7edcff9d->enter($__internal_22610402ca5275abce98db6f96cde7a774382ae60ace96d0b0f8d5fb7edcff9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_314d918b113eb60ec7b341bc319bece3ea35708fe525f4bc839e9ac32b4bd0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314d918b113eb60ec7b341bc319bece3ea35708fe525f4bc839e9ac32b4bd0da->enter($__internal_314d918b113eb60ec7b341bc319bece3ea35708fe525f4bc839e9ac32b4bd0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_22610402ca5275abce98db6f96cde7a774382ae60ace96d0b0f8d5fb7edcff9d->leave($__internal_22610402ca5275abce98db6f96cde7a774382ae60ace96d0b0f8d5fb7edcff9d_prof);

        
        $__internal_314d918b113eb60ec7b341bc319bece3ea35708fe525f4bc839e9ac32b4bd0da->leave($__internal_314d918b113eb60ec7b341bc319bece3ea35708fe525f4bc839e9ac32b4bd0da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
