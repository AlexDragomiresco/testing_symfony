<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_838310dc963b2f89f96d25312ca2a1f9f9120ce82aa59aede8be2ed73e2072fb extends Twig_Template
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
        $__internal_99bdbec26fe9f9f826898cfc15ab353e41b4118334639545cd3a59fc54708257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99bdbec26fe9f9f826898cfc15ab353e41b4118334639545cd3a59fc54708257->enter($__internal_99bdbec26fe9f9f826898cfc15ab353e41b4118334639545cd3a59fc54708257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_39ca4ec92b1d53267dd820f99f184082474825b008ac2ec272d160ad9404c0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ca4ec92b1d53267dd820f99f184082474825b008ac2ec272d160ad9404c0b6->enter($__internal_39ca4ec92b1d53267dd820f99f184082474825b008ac2ec272d160ad9404c0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_99bdbec26fe9f9f826898cfc15ab353e41b4118334639545cd3a59fc54708257->leave($__internal_99bdbec26fe9f9f826898cfc15ab353e41b4118334639545cd3a59fc54708257_prof);

        
        $__internal_39ca4ec92b1d53267dd820f99f184082474825b008ac2ec272d160ad9404c0b6->leave($__internal_39ca4ec92b1d53267dd820f99f184082474825b008ac2ec272d160ad9404c0b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
