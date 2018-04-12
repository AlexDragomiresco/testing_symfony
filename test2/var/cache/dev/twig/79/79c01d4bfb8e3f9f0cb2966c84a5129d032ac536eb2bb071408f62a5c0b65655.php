<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_05f3180986c9183e2d7b83a0a373ab4a857a0d58f1bbb91af636657ea0cd9581 extends Twig_Template
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
        $__internal_f04b9c0a72bf7b9880b43b077fcbe01e809c4ca7dbc615cbdca4571a586506d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04b9c0a72bf7b9880b43b077fcbe01e809c4ca7dbc615cbdca4571a586506d6->enter($__internal_f04b9c0a72bf7b9880b43b077fcbe01e809c4ca7dbc615cbdca4571a586506d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4030bad21cefe29c3df7b438017205512bd4da15d85c5d167b1b2bcb0084cb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4030bad21cefe29c3df7b438017205512bd4da15d85c5d167b1b2bcb0084cb2f->enter($__internal_4030bad21cefe29c3df7b438017205512bd4da15d85c5d167b1b2bcb0084cb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f04b9c0a72bf7b9880b43b077fcbe01e809c4ca7dbc615cbdca4571a586506d6->leave($__internal_f04b9c0a72bf7b9880b43b077fcbe01e809c4ca7dbc615cbdca4571a586506d6_prof);

        
        $__internal_4030bad21cefe29c3df7b438017205512bd4da15d85c5d167b1b2bcb0084cb2f->leave($__internal_4030bad21cefe29c3df7b438017205512bd4da15d85c5d167b1b2bcb0084cb2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
