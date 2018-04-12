<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4f24449de0dcea6ad2be0254aef089ca2feccdd44b067280fa97210cdb14557b extends Twig_Template
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
        $__internal_c5e2079d0c3b01b338065e6fddb2fdd025a1c6e09fccde174a34ad6ce1b0e888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e2079d0c3b01b338065e6fddb2fdd025a1c6e09fccde174a34ad6ce1b0e888->enter($__internal_c5e2079d0c3b01b338065e6fddb2fdd025a1c6e09fccde174a34ad6ce1b0e888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e698dc7da8584404785d302c4907e74a6e6774676f7a1789c7fc5fec9dcc1cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e698dc7da8584404785d302c4907e74a6e6774676f7a1789c7fc5fec9dcc1cd9->enter($__internal_e698dc7da8584404785d302c4907e74a6e6774676f7a1789c7fc5fec9dcc1cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c5e2079d0c3b01b338065e6fddb2fdd025a1c6e09fccde174a34ad6ce1b0e888->leave($__internal_c5e2079d0c3b01b338065e6fddb2fdd025a1c6e09fccde174a34ad6ce1b0e888_prof);

        
        $__internal_e698dc7da8584404785d302c4907e74a6e6774676f7a1789c7fc5fec9dcc1cd9->leave($__internal_e698dc7da8584404785d302c4907e74a6e6774676f7a1789c7fc5fec9dcc1cd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
