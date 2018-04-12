<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a37dd1cbcff3a0260e46ec0c22757cacf81c24807e1a7ad075927f9f7e277a34 extends Twig_Template
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
        $__internal_23d52dfead0c9dce8f6fb1c0fb716d0de9706527fbbd4a979a116a426d65e124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d52dfead0c9dce8f6fb1c0fb716d0de9706527fbbd4a979a116a426d65e124->enter($__internal_23d52dfead0c9dce8f6fb1c0fb716d0de9706527fbbd4a979a116a426d65e124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_bb3b90c657d34d4da92190c0d422854bcf354e05e71bf8bf61392b1ec7e7808b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3b90c657d34d4da92190c0d422854bcf354e05e71bf8bf61392b1ec7e7808b->enter($__internal_bb3b90c657d34d4da92190c0d422854bcf354e05e71bf8bf61392b1ec7e7808b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_23d52dfead0c9dce8f6fb1c0fb716d0de9706527fbbd4a979a116a426d65e124->leave($__internal_23d52dfead0c9dce8f6fb1c0fb716d0de9706527fbbd4a979a116a426d65e124_prof);

        
        $__internal_bb3b90c657d34d4da92190c0d422854bcf354e05e71bf8bf61392b1ec7e7808b->leave($__internal_bb3b90c657d34d4da92190c0d422854bcf354e05e71bf8bf61392b1ec7e7808b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
