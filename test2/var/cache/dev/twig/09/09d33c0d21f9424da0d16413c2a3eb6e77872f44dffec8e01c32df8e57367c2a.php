<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_47391b45ff1b9c8ca762d889ecffabd16f5e72878ce9fb65e8136b16debee266 extends Twig_Template
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
        $__internal_29dff077a9bb55c2af3627d27966ddbf6ed2cbeeee9487c79d5bd5fc3300e0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29dff077a9bb55c2af3627d27966ddbf6ed2cbeeee9487c79d5bd5fc3300e0eb->enter($__internal_29dff077a9bb55c2af3627d27966ddbf6ed2cbeeee9487c79d5bd5fc3300e0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_aae75abfbd7f132256a4242b229618726895e4c76d50d33882bf96a99a3aa7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae75abfbd7f132256a4242b229618726895e4c76d50d33882bf96a99a3aa7be->enter($__internal_aae75abfbd7f132256a4242b229618726895e4c76d50d33882bf96a99a3aa7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_29dff077a9bb55c2af3627d27966ddbf6ed2cbeeee9487c79d5bd5fc3300e0eb->leave($__internal_29dff077a9bb55c2af3627d27966ddbf6ed2cbeeee9487c79d5bd5fc3300e0eb_prof);

        
        $__internal_aae75abfbd7f132256a4242b229618726895e4c76d50d33882bf96a99a3aa7be->leave($__internal_aae75abfbd7f132256a4242b229618726895e4c76d50d33882bf96a99a3aa7be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
