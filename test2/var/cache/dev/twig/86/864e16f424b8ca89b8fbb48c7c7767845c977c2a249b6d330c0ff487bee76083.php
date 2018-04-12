<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_845ad58d494b942496f0a7a23d538a882c445bf00e3fcd38d3e13d9eba586c90 extends Twig_Template
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
        $__internal_e090791646ade5e39987be2695703d1dff628a6cadb2327c4a35f617ed509536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e090791646ade5e39987be2695703d1dff628a6cadb2327c4a35f617ed509536->enter($__internal_e090791646ade5e39987be2695703d1dff628a6cadb2327c4a35f617ed509536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_40e600782f7ecc1f8abe697c26f8af1aa307e7df929b1c018012c05be190681a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e600782f7ecc1f8abe697c26f8af1aa307e7df929b1c018012c05be190681a->enter($__internal_40e600782f7ecc1f8abe697c26f8af1aa307e7df929b1c018012c05be190681a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e090791646ade5e39987be2695703d1dff628a6cadb2327c4a35f617ed509536->leave($__internal_e090791646ade5e39987be2695703d1dff628a6cadb2327c4a35f617ed509536_prof);

        
        $__internal_40e600782f7ecc1f8abe697c26f8af1aa307e7df929b1c018012c05be190681a->leave($__internal_40e600782f7ecc1f8abe697c26f8af1aa307e7df929b1c018012c05be190681a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
