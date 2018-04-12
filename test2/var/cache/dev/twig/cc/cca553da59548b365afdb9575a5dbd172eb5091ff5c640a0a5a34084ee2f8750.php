<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_997b6cc8a20d5fef2c3b9de921e38c04155463c2355e42b6ab97ff4ece95d95a extends Twig_Template
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
        $__internal_ed6e6b3a5cac17ce393ca8d28b78258fc2b88753034ae81708dd9d18a1f08194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6e6b3a5cac17ce393ca8d28b78258fc2b88753034ae81708dd9d18a1f08194->enter($__internal_ed6e6b3a5cac17ce393ca8d28b78258fc2b88753034ae81708dd9d18a1f08194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_53038b3e44c716ff3e1f0137005227dc7af47edcfbba18dc13004be4ddc9fdc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53038b3e44c716ff3e1f0137005227dc7af47edcfbba18dc13004be4ddc9fdc8->enter($__internal_53038b3e44c716ff3e1f0137005227dc7af47edcfbba18dc13004be4ddc9fdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ed6e6b3a5cac17ce393ca8d28b78258fc2b88753034ae81708dd9d18a1f08194->leave($__internal_ed6e6b3a5cac17ce393ca8d28b78258fc2b88753034ae81708dd9d18a1f08194_prof);

        
        $__internal_53038b3e44c716ff3e1f0137005227dc7af47edcfbba18dc13004be4ddc9fdc8->leave($__internal_53038b3e44c716ff3e1f0137005227dc7af47edcfbba18dc13004be4ddc9fdc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
