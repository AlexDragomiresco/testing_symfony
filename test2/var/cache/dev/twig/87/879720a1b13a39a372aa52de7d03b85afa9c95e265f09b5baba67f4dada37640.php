<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_abafe6d28f8fb1b36979869609f58d710c3ae066f691616682056bda547c0ed8 extends Twig_Template
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
        $__internal_8d117a25552f89d0c3f3060a5118b3c2e80c53cc8c0049c87e44ee7811c60efc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d117a25552f89d0c3f3060a5118b3c2e80c53cc8c0049c87e44ee7811c60efc->enter($__internal_8d117a25552f89d0c3f3060a5118b3c2e80c53cc8c0049c87e44ee7811c60efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_875e84373899a2b8261a8b96345b459f1afd163ee7fcb354fbac3818189fe390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875e84373899a2b8261a8b96345b459f1afd163ee7fcb354fbac3818189fe390->enter($__internal_875e84373899a2b8261a8b96345b459f1afd163ee7fcb354fbac3818189fe390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8d117a25552f89d0c3f3060a5118b3c2e80c53cc8c0049c87e44ee7811c60efc->leave($__internal_8d117a25552f89d0c3f3060a5118b3c2e80c53cc8c0049c87e44ee7811c60efc_prof);

        
        $__internal_875e84373899a2b8261a8b96345b459f1afd163ee7fcb354fbac3818189fe390->leave($__internal_875e84373899a2b8261a8b96345b459f1afd163ee7fcb354fbac3818189fe390_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
