<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_14cf951bc5160dfd15515b1b6ccf742fbcca97c2984d22f628ec5b1f2912a28d extends Twig_Template
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
        $__internal_e3138bc9020b43d60373745164a2de6a7ea643601ee51233816c9fba536ef6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3138bc9020b43d60373745164a2de6a7ea643601ee51233816c9fba536ef6da->enter($__internal_e3138bc9020b43d60373745164a2de6a7ea643601ee51233816c9fba536ef6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_633294dcd34148e9db90a14f07b2766e4f1ebe71022349c93f286ec39fa2fe14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633294dcd34148e9db90a14f07b2766e4f1ebe71022349c93f286ec39fa2fe14->enter($__internal_633294dcd34148e9db90a14f07b2766e4f1ebe71022349c93f286ec39fa2fe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e3138bc9020b43d60373745164a2de6a7ea643601ee51233816c9fba536ef6da->leave($__internal_e3138bc9020b43d60373745164a2de6a7ea643601ee51233816c9fba536ef6da_prof);

        
        $__internal_633294dcd34148e9db90a14f07b2766e4f1ebe71022349c93f286ec39fa2fe14->leave($__internal_633294dcd34148e9db90a14f07b2766e4f1ebe71022349c93f286ec39fa2fe14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
