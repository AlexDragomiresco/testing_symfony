<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_fcaa40908a8399388d38eca22c3260300a046c6d3da9d89e24956308642aa372 extends Twig_Template
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
        $__internal_05160d50599973e93533f49b90e149ac160b6027008d595af9ad0136ce66d246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05160d50599973e93533f49b90e149ac160b6027008d595af9ad0136ce66d246->enter($__internal_05160d50599973e93533f49b90e149ac160b6027008d595af9ad0136ce66d246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9ffde9a44aa309625bf111c2fe51b830187f4d4c69633f6d82fdc1dbd034cd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffde9a44aa309625bf111c2fe51b830187f4d4c69633f6d82fdc1dbd034cd3a->enter($__internal_9ffde9a44aa309625bf111c2fe51b830187f4d4c69633f6d82fdc1dbd034cd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_05160d50599973e93533f49b90e149ac160b6027008d595af9ad0136ce66d246->leave($__internal_05160d50599973e93533f49b90e149ac160b6027008d595af9ad0136ce66d246_prof);

        
        $__internal_9ffde9a44aa309625bf111c2fe51b830187f4d4c69633f6d82fdc1dbd034cd3a->leave($__internal_9ffde9a44aa309625bf111c2fe51b830187f4d4c69633f6d82fdc1dbd034cd3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
