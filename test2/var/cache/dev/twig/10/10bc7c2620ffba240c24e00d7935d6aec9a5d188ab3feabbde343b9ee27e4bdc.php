<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_cac8969eaab7f99645df78c50c94b517f518dbc6d9902eb1c0cf9a5d036a5afb extends Twig_Template
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
        $__internal_78612841280ebd89ae933b3e07d01c8e3d829dc6acecbb5157a20d22602d96dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78612841280ebd89ae933b3e07d01c8e3d829dc6acecbb5157a20d22602d96dc->enter($__internal_78612841280ebd89ae933b3e07d01c8e3d829dc6acecbb5157a20d22602d96dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_aff0dfb869ed0b13d85a02ee026f0ccae42b70c0f452d3c194a0ece536b77ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff0dfb869ed0b13d85a02ee026f0ccae42b70c0f452d3c194a0ece536b77ac4->enter($__internal_aff0dfb869ed0b13d85a02ee026f0ccae42b70c0f452d3c194a0ece536b77ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_78612841280ebd89ae933b3e07d01c8e3d829dc6acecbb5157a20d22602d96dc->leave($__internal_78612841280ebd89ae933b3e07d01c8e3d829dc6acecbb5157a20d22602d96dc_prof);

        
        $__internal_aff0dfb869ed0b13d85a02ee026f0ccae42b70c0f452d3c194a0ece536b77ac4->leave($__internal_aff0dfb869ed0b13d85a02ee026f0ccae42b70c0f452d3c194a0ece536b77ac4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
