<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_fe49b519c47e36f9aa909139b43daaed969549701cd5e46b5cf777ff52f00037 extends Twig_Template
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
        $__internal_bcf8eadb03378ba4da6224adb7b1842f2532df76dbc40fd4d80ddb8bf59d3395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf8eadb03378ba4da6224adb7b1842f2532df76dbc40fd4d80ddb8bf59d3395->enter($__internal_bcf8eadb03378ba4da6224adb7b1842f2532df76dbc40fd4d80ddb8bf59d3395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4c2fe5af993bd5a3e95e2533ca91e24209ca78e9c64c626284b9b82bbbe36150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2fe5af993bd5a3e95e2533ca91e24209ca78e9c64c626284b9b82bbbe36150->enter($__internal_4c2fe5af993bd5a3e95e2533ca91e24209ca78e9c64c626284b9b82bbbe36150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bcf8eadb03378ba4da6224adb7b1842f2532df76dbc40fd4d80ddb8bf59d3395->leave($__internal_bcf8eadb03378ba4da6224adb7b1842f2532df76dbc40fd4d80ddb8bf59d3395_prof);

        
        $__internal_4c2fe5af993bd5a3e95e2533ca91e24209ca78e9c64c626284b9b82bbbe36150->leave($__internal_4c2fe5af993bd5a3e95e2533ca91e24209ca78e9c64c626284b9b82bbbe36150_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
