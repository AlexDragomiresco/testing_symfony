<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e63fff6fe2bd479c78134be491a0204dc04c11405922dfa0f19187f2d1375887 extends Twig_Template
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
        $__internal_640986395504d7f923f87a717492576c332f4f36bb0f959c5b5131e5d8b5c397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640986395504d7f923f87a717492576c332f4f36bb0f959c5b5131e5d8b5c397->enter($__internal_640986395504d7f923f87a717492576c332f4f36bb0f959c5b5131e5d8b5c397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_43eb568f85d7f7c73e2647f80402d15b406eb11fd4f5fe1bf45cf5d3bca75e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43eb568f85d7f7c73e2647f80402d15b406eb11fd4f5fe1bf45cf5d3bca75e1c->enter($__internal_43eb568f85d7f7c73e2647f80402d15b406eb11fd4f5fe1bf45cf5d3bca75e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_640986395504d7f923f87a717492576c332f4f36bb0f959c5b5131e5d8b5c397->leave($__internal_640986395504d7f923f87a717492576c332f4f36bb0f959c5b5131e5d8b5c397_prof);

        
        $__internal_43eb568f85d7f7c73e2647f80402d15b406eb11fd4f5fe1bf45cf5d3bca75e1c->leave($__internal_43eb568f85d7f7c73e2647f80402d15b406eb11fd4f5fe1bf45cf5d3bca75e1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
