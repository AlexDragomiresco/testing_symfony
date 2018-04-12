<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_32e4c020114ce5c7810299837e8e90538e2e091135ade3d720a029c2918bffed extends Twig_Template
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
        $__internal_98998dd3bcca9eb93645c052cde6ac5ceef6c51069ebbb469741844a03a2f783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98998dd3bcca9eb93645c052cde6ac5ceef6c51069ebbb469741844a03a2f783->enter($__internal_98998dd3bcca9eb93645c052cde6ac5ceef6c51069ebbb469741844a03a2f783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0b98f12198e33e8b82679f382177c23f2d79ed108a653585c04312362282e618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b98f12198e33e8b82679f382177c23f2d79ed108a653585c04312362282e618->enter($__internal_0b98f12198e33e8b82679f382177c23f2d79ed108a653585c04312362282e618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_98998dd3bcca9eb93645c052cde6ac5ceef6c51069ebbb469741844a03a2f783->leave($__internal_98998dd3bcca9eb93645c052cde6ac5ceef6c51069ebbb469741844a03a2f783_prof);

        
        $__internal_0b98f12198e33e8b82679f382177c23f2d79ed108a653585c04312362282e618->leave($__internal_0b98f12198e33e8b82679f382177c23f2d79ed108a653585c04312362282e618_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
