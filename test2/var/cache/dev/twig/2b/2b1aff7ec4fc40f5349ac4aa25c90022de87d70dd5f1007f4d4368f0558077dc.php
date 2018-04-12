<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_507220d63f628e9e1495b541701a93cd193d395232c60fbed190b340cf7134a4 extends Twig_Template
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
        $__internal_6ffaef7b3bb38ed5a5058d637f0b8f84b9bfa6a367629fea599a07484db931e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ffaef7b3bb38ed5a5058d637f0b8f84b9bfa6a367629fea599a07484db931e9->enter($__internal_6ffaef7b3bb38ed5a5058d637f0b8f84b9bfa6a367629fea599a07484db931e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8183754b3e25dbf5fefd7d02942f141564da05f28649caefb67a2af039ce0b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8183754b3e25dbf5fefd7d02942f141564da05f28649caefb67a2af039ce0b8a->enter($__internal_8183754b3e25dbf5fefd7d02942f141564da05f28649caefb67a2af039ce0b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6ffaef7b3bb38ed5a5058d637f0b8f84b9bfa6a367629fea599a07484db931e9->leave($__internal_6ffaef7b3bb38ed5a5058d637f0b8f84b9bfa6a367629fea599a07484db931e9_prof);

        
        $__internal_8183754b3e25dbf5fefd7d02942f141564da05f28649caefb67a2af039ce0b8a->leave($__internal_8183754b3e25dbf5fefd7d02942f141564da05f28649caefb67a2af039ce0b8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
