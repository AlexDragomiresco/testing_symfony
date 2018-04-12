<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_91266fd7e763bde0a12923e6f8cedb33eea1da0ec4fe121f82909a401e27d52d extends Twig_Template
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
        $__internal_5399580cdc7b59a11d26ea589088b3220ee448aba504a21ac49e747adbf343f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5399580cdc7b59a11d26ea589088b3220ee448aba504a21ac49e747adbf343f4->enter($__internal_5399580cdc7b59a11d26ea589088b3220ee448aba504a21ac49e747adbf343f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1876b8a990ff35b2320b5374d5d9b822d9c5ac6c2817fc0259546c32233a0732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1876b8a990ff35b2320b5374d5d9b822d9c5ac6c2817fc0259546c32233a0732->enter($__internal_1876b8a990ff35b2320b5374d5d9b822d9c5ac6c2817fc0259546c32233a0732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5399580cdc7b59a11d26ea589088b3220ee448aba504a21ac49e747adbf343f4->leave($__internal_5399580cdc7b59a11d26ea589088b3220ee448aba504a21ac49e747adbf343f4_prof);

        
        $__internal_1876b8a990ff35b2320b5374d5d9b822d9c5ac6c2817fc0259546c32233a0732->leave($__internal_1876b8a990ff35b2320b5374d5d9b822d9c5ac6c2817fc0259546c32233a0732_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
