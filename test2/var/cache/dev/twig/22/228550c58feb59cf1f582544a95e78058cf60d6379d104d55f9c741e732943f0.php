<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c26471d4f2b1df5f29085ed7129687dfd278250b1e785d60a9b581dffd7027c3 extends Twig_Template
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
        $__internal_f32d436864327a29a31ea2c7517e4ecca6ac6c9a1a62f3d6de79256f10a3a99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32d436864327a29a31ea2c7517e4ecca6ac6c9a1a62f3d6de79256f10a3a99f->enter($__internal_f32d436864327a29a31ea2c7517e4ecca6ac6c9a1a62f3d6de79256f10a3a99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7bbfbfd73426a5227b08875e783c27ff2f7b8230c60561fe771c43ea773f7da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbfbfd73426a5227b08875e783c27ff2f7b8230c60561fe771c43ea773f7da8->enter($__internal_7bbfbfd73426a5227b08875e783c27ff2f7b8230c60561fe771c43ea773f7da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f32d436864327a29a31ea2c7517e4ecca6ac6c9a1a62f3d6de79256f10a3a99f->leave($__internal_f32d436864327a29a31ea2c7517e4ecca6ac6c9a1a62f3d6de79256f10a3a99f_prof);

        
        $__internal_7bbfbfd73426a5227b08875e783c27ff2f7b8230c60561fe771c43ea773f7da8->leave($__internal_7bbfbfd73426a5227b08875e783c27ff2f7b8230c60561fe771c43ea773f7da8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
