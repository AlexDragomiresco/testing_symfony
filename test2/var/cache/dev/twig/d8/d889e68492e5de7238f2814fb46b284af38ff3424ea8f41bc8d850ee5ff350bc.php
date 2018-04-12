<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_51084a78ee66f49634e5cd4c3edf9a2f396c375b34c67d3b164046f67c43bb40 extends Twig_Template
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
        $__internal_9e8bb23c8553e834aec977eb82e42df27ec34b07895d4863f07b28069d180077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8bb23c8553e834aec977eb82e42df27ec34b07895d4863f07b28069d180077->enter($__internal_9e8bb23c8553e834aec977eb82e42df27ec34b07895d4863f07b28069d180077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_07ddcd638a0343aa3b96f833ce89df2c1fdb73a842e531efd8413a6bcb658d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ddcd638a0343aa3b96f833ce89df2c1fdb73a842e531efd8413a6bcb658d0e->enter($__internal_07ddcd638a0343aa3b96f833ce89df2c1fdb73a842e531efd8413a6bcb658d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9e8bb23c8553e834aec977eb82e42df27ec34b07895d4863f07b28069d180077->leave($__internal_9e8bb23c8553e834aec977eb82e42df27ec34b07895d4863f07b28069d180077_prof);

        
        $__internal_07ddcd638a0343aa3b96f833ce89df2c1fdb73a842e531efd8413a6bcb658d0e->leave($__internal_07ddcd638a0343aa3b96f833ce89df2c1fdb73a842e531efd8413a6bcb658d0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
