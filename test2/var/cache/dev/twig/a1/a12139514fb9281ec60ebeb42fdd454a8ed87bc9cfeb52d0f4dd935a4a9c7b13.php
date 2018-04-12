<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ef31191359db8293f9dbf78828febdfc09db65f3895676876ba5bddb987ea897 extends Twig_Template
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
        $__internal_63a2a5dc6a30b5a986bf5b1c31dae5ee61ccf179034b61f84b72d6730cb5b472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a2a5dc6a30b5a986bf5b1c31dae5ee61ccf179034b61f84b72d6730cb5b472->enter($__internal_63a2a5dc6a30b5a986bf5b1c31dae5ee61ccf179034b61f84b72d6730cb5b472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_0b53e005690c0e3c60fa81e36fa4e3b7c846dd28c1e87aca24cc9755b3a5c618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b53e005690c0e3c60fa81e36fa4e3b7c846dd28c1e87aca24cc9755b3a5c618->enter($__internal_0b53e005690c0e3c60fa81e36fa4e3b7c846dd28c1e87aca24cc9755b3a5c618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_63a2a5dc6a30b5a986bf5b1c31dae5ee61ccf179034b61f84b72d6730cb5b472->leave($__internal_63a2a5dc6a30b5a986bf5b1c31dae5ee61ccf179034b61f84b72d6730cb5b472_prof);

        
        $__internal_0b53e005690c0e3c60fa81e36fa4e3b7c846dd28c1e87aca24cc9755b3a5c618->leave($__internal_0b53e005690c0e3c60fa81e36fa4e3b7c846dd28c1e87aca24cc9755b3a5c618_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
