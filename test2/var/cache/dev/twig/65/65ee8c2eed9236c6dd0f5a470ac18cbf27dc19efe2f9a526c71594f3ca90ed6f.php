<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_559ca469cbefd9cc3e2a6f8cf431908a422d6721a82c77a7898a580ae3aefa11 extends Twig_Template
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
        $__internal_38ccbb1cc2b20a19d571c0f23b5485f57718a3c7b3a8b7ea48af467650a75104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ccbb1cc2b20a19d571c0f23b5485f57718a3c7b3a8b7ea48af467650a75104->enter($__internal_38ccbb1cc2b20a19d571c0f23b5485f57718a3c7b3a8b7ea48af467650a75104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a05c7f9852603f36a7d6ae61419373f5522daff376fb739878db13f78d2d4a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05c7f9852603f36a7d6ae61419373f5522daff376fb739878db13f78d2d4a3c->enter($__internal_a05c7f9852603f36a7d6ae61419373f5522daff376fb739878db13f78d2d4a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_38ccbb1cc2b20a19d571c0f23b5485f57718a3c7b3a8b7ea48af467650a75104->leave($__internal_38ccbb1cc2b20a19d571c0f23b5485f57718a3c7b3a8b7ea48af467650a75104_prof);

        
        $__internal_a05c7f9852603f36a7d6ae61419373f5522daff376fb739878db13f78d2d4a3c->leave($__internal_a05c7f9852603f36a7d6ae61419373f5522daff376fb739878db13f78d2d4a3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
