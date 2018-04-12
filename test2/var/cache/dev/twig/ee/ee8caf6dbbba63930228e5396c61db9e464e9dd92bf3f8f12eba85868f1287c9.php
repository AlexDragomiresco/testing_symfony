<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e8ca5f52918fb2c39e0b276c3bb31624d65e2314a541ea988fc018e091337f70 extends Twig_Template
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
        $__internal_7b56783723026ba0266b6f0808076025fe458d67d96f21414afb6aa98456972e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b56783723026ba0266b6f0808076025fe458d67d96f21414afb6aa98456972e->enter($__internal_7b56783723026ba0266b6f0808076025fe458d67d96f21414afb6aa98456972e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_7e67d181d23cccf4992bbf4e9d95bf5e64bb78ef61dd6089129d49147c827a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e67d181d23cccf4992bbf4e9d95bf5e64bb78ef61dd6089129d49147c827a2b->enter($__internal_7e67d181d23cccf4992bbf4e9d95bf5e64bb78ef61dd6089129d49147c827a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7b56783723026ba0266b6f0808076025fe458d67d96f21414afb6aa98456972e->leave($__internal_7b56783723026ba0266b6f0808076025fe458d67d96f21414afb6aa98456972e_prof);

        
        $__internal_7e67d181d23cccf4992bbf4e9d95bf5e64bb78ef61dd6089129d49147c827a2b->leave($__internal_7e67d181d23cccf4992bbf4e9d95bf5e64bb78ef61dd6089129d49147c827a2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
