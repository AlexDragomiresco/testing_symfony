<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_520c2cf91277cd618d296cd64e9ffa212bcc6b9e7049056f63a66fd6058ebb0d extends Twig_Template
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
        $__internal_a50722cc53e4f9e4bb27b4c94533e473708e1b5044fa0fad0eb201d8c86dc32c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50722cc53e4f9e4bb27b4c94533e473708e1b5044fa0fad0eb201d8c86dc32c->enter($__internal_a50722cc53e4f9e4bb27b4c94533e473708e1b5044fa0fad0eb201d8c86dc32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_2c93b5d7b23c10217c9e9678895a4eed7723fedc1f306cea1591f5289b69bb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c93b5d7b23c10217c9e9678895a4eed7723fedc1f306cea1591f5289b69bb62->enter($__internal_2c93b5d7b23c10217c9e9678895a4eed7723fedc1f306cea1591f5289b69bb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a50722cc53e4f9e4bb27b4c94533e473708e1b5044fa0fad0eb201d8c86dc32c->leave($__internal_a50722cc53e4f9e4bb27b4c94533e473708e1b5044fa0fad0eb201d8c86dc32c_prof);

        
        $__internal_2c93b5d7b23c10217c9e9678895a4eed7723fedc1f306cea1591f5289b69bb62->leave($__internal_2c93b5d7b23c10217c9e9678895a4eed7723fedc1f306cea1591f5289b69bb62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
