<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_703c317d26af740af2227c554a3d75d37e779abc788bc63d2da6b19e95720e29 extends Twig_Template
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
        $__internal_0cecc919fad3af2c608c800510b60fb49ced8922c875168cf72156a8c286f112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cecc919fad3af2c608c800510b60fb49ced8922c875168cf72156a8c286f112->enter($__internal_0cecc919fad3af2c608c800510b60fb49ced8922c875168cf72156a8c286f112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_bf0a6ae1b68fa102e3296e109b3d9ce34d22b303ac086351c2d9fad1a56da978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0a6ae1b68fa102e3296e109b3d9ce34d22b303ac086351c2d9fad1a56da978->enter($__internal_bf0a6ae1b68fa102e3296e109b3d9ce34d22b303ac086351c2d9fad1a56da978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0cecc919fad3af2c608c800510b60fb49ced8922c875168cf72156a8c286f112->leave($__internal_0cecc919fad3af2c608c800510b60fb49ced8922c875168cf72156a8c286f112_prof);

        
        $__internal_bf0a6ae1b68fa102e3296e109b3d9ce34d22b303ac086351c2d9fad1a56da978->leave($__internal_bf0a6ae1b68fa102e3296e109b3d9ce34d22b303ac086351c2d9fad1a56da978_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
