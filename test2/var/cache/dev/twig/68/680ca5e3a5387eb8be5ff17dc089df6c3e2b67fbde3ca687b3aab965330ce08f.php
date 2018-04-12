<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_56644d9ab1a72a70e37063aff9729d62f999487ceffa3a9e038a3fc5d2f1b08b extends Twig_Template
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
        $__internal_3dbf08e41a76fbead9df095f395c8e6918426116128ab2d3720da77694ccc878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbf08e41a76fbead9df095f395c8e6918426116128ab2d3720da77694ccc878->enter($__internal_3dbf08e41a76fbead9df095f395c8e6918426116128ab2d3720da77694ccc878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_3932f287047f17c5ca3ed688c4062acbb6d91199ce6ae791bd165db108993629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3932f287047f17c5ca3ed688c4062acbb6d91199ce6ae791bd165db108993629->enter($__internal_3932f287047f17c5ca3ed688c4062acbb6d91199ce6ae791bd165db108993629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3dbf08e41a76fbead9df095f395c8e6918426116128ab2d3720da77694ccc878->leave($__internal_3dbf08e41a76fbead9df095f395c8e6918426116128ab2d3720da77694ccc878_prof);

        
        $__internal_3932f287047f17c5ca3ed688c4062acbb6d91199ce6ae791bd165db108993629->leave($__internal_3932f287047f17c5ca3ed688c4062acbb6d91199ce6ae791bd165db108993629_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
