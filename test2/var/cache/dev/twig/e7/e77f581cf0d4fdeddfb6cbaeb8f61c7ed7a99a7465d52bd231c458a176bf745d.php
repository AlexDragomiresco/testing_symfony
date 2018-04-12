<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_11bd1d08a29348b6022788119ef2e3d5d5a6844ca9e791601f5ad0ee5b3e4ece extends Twig_Template
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
        $__internal_00e94a3122e12ebec43ed5699d23390024e97e9731b131b082b1fdb36232994d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e94a3122e12ebec43ed5699d23390024e97e9731b131b082b1fdb36232994d->enter($__internal_00e94a3122e12ebec43ed5699d23390024e97e9731b131b082b1fdb36232994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_58f49c8b414658155f96574c5edac3d715d6d593ed852396136adbe6bcb95461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f49c8b414658155f96574c5edac3d715d6d593ed852396136adbe6bcb95461->enter($__internal_58f49c8b414658155f96574c5edac3d715d6d593ed852396136adbe6bcb95461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_00e94a3122e12ebec43ed5699d23390024e97e9731b131b082b1fdb36232994d->leave($__internal_00e94a3122e12ebec43ed5699d23390024e97e9731b131b082b1fdb36232994d_prof);

        
        $__internal_58f49c8b414658155f96574c5edac3d715d6d593ed852396136adbe6bcb95461->leave($__internal_58f49c8b414658155f96574c5edac3d715d6d593ed852396136adbe6bcb95461_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
