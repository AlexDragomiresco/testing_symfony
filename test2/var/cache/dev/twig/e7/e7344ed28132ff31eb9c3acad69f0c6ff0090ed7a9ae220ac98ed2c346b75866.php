<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0999de698cdbaf8119dfdf8d308b2089f9788967ca244a0be03783bce10bfd49 extends Twig_Template
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
        $__internal_107b93404844c2432da56209a0dbfdb96427125902b9b8ccb2ec7d39f0add982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107b93404844c2432da56209a0dbfdb96427125902b9b8ccb2ec7d39f0add982->enter($__internal_107b93404844c2432da56209a0dbfdb96427125902b9b8ccb2ec7d39f0add982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_853308fde7cfaa31f02649b394dd14645c5320852f3e8e0b2d88a666bbe05b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853308fde7cfaa31f02649b394dd14645c5320852f3e8e0b2d88a666bbe05b46->enter($__internal_853308fde7cfaa31f02649b394dd14645c5320852f3e8e0b2d88a666bbe05b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_107b93404844c2432da56209a0dbfdb96427125902b9b8ccb2ec7d39f0add982->leave($__internal_107b93404844c2432da56209a0dbfdb96427125902b9b8ccb2ec7d39f0add982_prof);

        
        $__internal_853308fde7cfaa31f02649b394dd14645c5320852f3e8e0b2d88a666bbe05b46->leave($__internal_853308fde7cfaa31f02649b394dd14645c5320852f3e8e0b2d88a666bbe05b46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
