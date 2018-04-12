<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cac8f83865a8388bebe30a5dd43ef6c84e08e29f13db28843d16ebdd751fa65d extends Twig_Template
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
        $__internal_fb1f9260c5919e4f593a75e6b2657d7115d2f84f02d86255ebb160b0c588f5ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1f9260c5919e4f593a75e6b2657d7115d2f84f02d86255ebb160b0c588f5ec->enter($__internal_fb1f9260c5919e4f593a75e6b2657d7115d2f84f02d86255ebb160b0c588f5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e125b225ab19e334467fe52f770b38457724a904e526f4218b47a254cda066e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e125b225ab19e334467fe52f770b38457724a904e526f4218b47a254cda066e3->enter($__internal_e125b225ab19e334467fe52f770b38457724a904e526f4218b47a254cda066e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fb1f9260c5919e4f593a75e6b2657d7115d2f84f02d86255ebb160b0c588f5ec->leave($__internal_fb1f9260c5919e4f593a75e6b2657d7115d2f84f02d86255ebb160b0c588f5ec_prof);

        
        $__internal_e125b225ab19e334467fe52f770b38457724a904e526f4218b47a254cda066e3->leave($__internal_e125b225ab19e334467fe52f770b38457724a904e526f4218b47a254cda066e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
