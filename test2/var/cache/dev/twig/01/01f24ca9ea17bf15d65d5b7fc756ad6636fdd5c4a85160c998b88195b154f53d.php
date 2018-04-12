<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e3da130f16b174c7339000939ff627cb20c79577e5dfcfd9fdcbd0a6d24fcac9 extends Twig_Template
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
        $__internal_fae1bc6077a0f9ff90bb098d7ab416d8230a0ca140adbc1ebc9d7bc380dd1a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae1bc6077a0f9ff90bb098d7ab416d8230a0ca140adbc1ebc9d7bc380dd1a6e->enter($__internal_fae1bc6077a0f9ff90bb098d7ab416d8230a0ca140adbc1ebc9d7bc380dd1a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_992ab1ad60c3eb1c8ddfea882a2f60343a7d6355d86cbb9b3defff975c1d6bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992ab1ad60c3eb1c8ddfea882a2f60343a7d6355d86cbb9b3defff975c1d6bdf->enter($__internal_992ab1ad60c3eb1c8ddfea882a2f60343a7d6355d86cbb9b3defff975c1d6bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_fae1bc6077a0f9ff90bb098d7ab416d8230a0ca140adbc1ebc9d7bc380dd1a6e->leave($__internal_fae1bc6077a0f9ff90bb098d7ab416d8230a0ca140adbc1ebc9d7bc380dd1a6e_prof);

        
        $__internal_992ab1ad60c3eb1c8ddfea882a2f60343a7d6355d86cbb9b3defff975c1d6bdf->leave($__internal_992ab1ad60c3eb1c8ddfea882a2f60343a7d6355d86cbb9b3defff975c1d6bdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
