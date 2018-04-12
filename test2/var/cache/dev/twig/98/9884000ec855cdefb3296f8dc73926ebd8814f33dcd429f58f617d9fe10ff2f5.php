<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_6d361037ab995804a70f3bdb5cb9772fd3e0d3d831ecc067df55760adb085205 extends Twig_Template
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
        $__internal_72b6e239cba5676f934e41c347dba2bd6619f5934c386736d91e91ca74a8f921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b6e239cba5676f934e41c347dba2bd6619f5934c386736d91e91ca74a8f921->enter($__internal_72b6e239cba5676f934e41c347dba2bd6619f5934c386736d91e91ca74a8f921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_16e89a02b9ac2d706e11e48b405b36f3e39dba5885cb8bcb6fcb783ac6693802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e89a02b9ac2d706e11e48b405b36f3e39dba5885cb8bcb6fcb783ac6693802->enter($__internal_16e89a02b9ac2d706e11e48b405b36f3e39dba5885cb8bcb6fcb783ac6693802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_72b6e239cba5676f934e41c347dba2bd6619f5934c386736d91e91ca74a8f921->leave($__internal_72b6e239cba5676f934e41c347dba2bd6619f5934c386736d91e91ca74a8f921_prof);

        
        $__internal_16e89a02b9ac2d706e11e48b405b36f3e39dba5885cb8bcb6fcb783ac6693802->leave($__internal_16e89a02b9ac2d706e11e48b405b36f3e39dba5885cb8bcb6fcb783ac6693802_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
