<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_84ec6622f87908a637974f9f00401264e4e193f3adccaf40a3d1581a3659f7c5 extends Twig_Template
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
        $__internal_51720a457063fb732b8a251580850e49e3242dec1b846b50ac0251a6b65664fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51720a457063fb732b8a251580850e49e3242dec1b846b50ac0251a6b65664fd->enter($__internal_51720a457063fb732b8a251580850e49e3242dec1b846b50ac0251a6b65664fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a347e0f86ec358329bc1eeb414e017a56b8e629ef8dbfbef43cb4fc7cfd9a941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a347e0f86ec358329bc1eeb414e017a56b8e629ef8dbfbef43cb4fc7cfd9a941->enter($__internal_a347e0f86ec358329bc1eeb414e017a56b8e629ef8dbfbef43cb4fc7cfd9a941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_51720a457063fb732b8a251580850e49e3242dec1b846b50ac0251a6b65664fd->leave($__internal_51720a457063fb732b8a251580850e49e3242dec1b846b50ac0251a6b65664fd_prof);

        
        $__internal_a347e0f86ec358329bc1eeb414e017a56b8e629ef8dbfbef43cb4fc7cfd9a941->leave($__internal_a347e0f86ec358329bc1eeb414e017a56b8e629ef8dbfbef43cb4fc7cfd9a941_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
