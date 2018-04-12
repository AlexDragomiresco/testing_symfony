<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9234d20095487773e2f5bc5dbd83bfe55d66abd1e95287bf57525bce65cf79b0 extends Twig_Template
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
        $__internal_b967573b08dfa214c4dc74d7f7a940ce844b41ac44c582088694a8d4eeb83b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b967573b08dfa214c4dc74d7f7a940ce844b41ac44c582088694a8d4eeb83b14->enter($__internal_b967573b08dfa214c4dc74d7f7a940ce844b41ac44c582088694a8d4eeb83b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4892ad0ff0291bfa4704c2b02ea5b62c51c32d109a65ec4b9ffa9dd887183654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4892ad0ff0291bfa4704c2b02ea5b62c51c32d109a65ec4b9ffa9dd887183654->enter($__internal_4892ad0ff0291bfa4704c2b02ea5b62c51c32d109a65ec4b9ffa9dd887183654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b967573b08dfa214c4dc74d7f7a940ce844b41ac44c582088694a8d4eeb83b14->leave($__internal_b967573b08dfa214c4dc74d7f7a940ce844b41ac44c582088694a8d4eeb83b14_prof);

        
        $__internal_4892ad0ff0291bfa4704c2b02ea5b62c51c32d109a65ec4b9ffa9dd887183654->leave($__internal_4892ad0ff0291bfa4704c2b02ea5b62c51c32d109a65ec4b9ffa9dd887183654_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
