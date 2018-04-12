<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e43b40da99d2fcafe05120332a8395c7da00107bb2c6e3bd2677d25d8bc05706 extends Twig_Template
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
        $__internal_53d8913a390260dd64838cab0b0c0a8667599c7c71b700414b4c719f06b917f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d8913a390260dd64838cab0b0c0a8667599c7c71b700414b4c719f06b917f0->enter($__internal_53d8913a390260dd64838cab0b0c0a8667599c7c71b700414b4c719f06b917f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2ad6092c36a743b9cd9bd6a649ac10b4ec7c1385495b5b2850e9c8d10c32e163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad6092c36a743b9cd9bd6a649ac10b4ec7c1385495b5b2850e9c8d10c32e163->enter($__internal_2ad6092c36a743b9cd9bd6a649ac10b4ec7c1385495b5b2850e9c8d10c32e163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_53d8913a390260dd64838cab0b0c0a8667599c7c71b700414b4c719f06b917f0->leave($__internal_53d8913a390260dd64838cab0b0c0a8667599c7c71b700414b4c719f06b917f0_prof);

        
        $__internal_2ad6092c36a743b9cd9bd6a649ac10b4ec7c1385495b5b2850e9c8d10c32e163->leave($__internal_2ad6092c36a743b9cd9bd6a649ac10b4ec7c1385495b5b2850e9c8d10c32e163_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
