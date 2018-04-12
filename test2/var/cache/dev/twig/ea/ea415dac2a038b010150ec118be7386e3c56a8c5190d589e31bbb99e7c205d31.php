<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_521e8fb92ab0ce5d8e02d483868938bce560d978a2c9a2d637dc43ee77c7636a extends Twig_Template
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
        $__internal_a1f90cb7aefc6bf5a53a8b6ac91c6e7c9050e38d5ea6f24f853fb8af16885ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f90cb7aefc6bf5a53a8b6ac91c6e7c9050e38d5ea6f24f853fb8af16885ef1->enter($__internal_a1f90cb7aefc6bf5a53a8b6ac91c6e7c9050e38d5ea6f24f853fb8af16885ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_0c8f103f9283fef80f66227ed8a45667e446891b8920f8ad0bd41ecfc2c9c0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8f103f9283fef80f66227ed8a45667e446891b8920f8ad0bd41ecfc2c9c0fa->enter($__internal_0c8f103f9283fef80f66227ed8a45667e446891b8920f8ad0bd41ecfc2c9c0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_a1f90cb7aefc6bf5a53a8b6ac91c6e7c9050e38d5ea6f24f853fb8af16885ef1->leave($__internal_a1f90cb7aefc6bf5a53a8b6ac91c6e7c9050e38d5ea6f24f853fb8af16885ef1_prof);

        
        $__internal_0c8f103f9283fef80f66227ed8a45667e446891b8920f8ad0bd41ecfc2c9c0fa->leave($__internal_0c8f103f9283fef80f66227ed8a45667e446891b8920f8ad0bd41ecfc2c9c0fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
