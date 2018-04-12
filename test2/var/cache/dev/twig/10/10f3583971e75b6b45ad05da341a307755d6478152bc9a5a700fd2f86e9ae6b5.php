<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8eb9d9b14afe7c67ff357a08c9fc20e88a8a7a794ca653783c8ba3dacc1863e0 extends Twig_Template
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
        $__internal_f53c8191b245dca165cfd68236edef4de7aab7fa49a3c098b7c77c42c56cca96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53c8191b245dca165cfd68236edef4de7aab7fa49a3c098b7c77c42c56cca96->enter($__internal_f53c8191b245dca165cfd68236edef4de7aab7fa49a3c098b7c77c42c56cca96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_408fe088f2f2f11026a1809e7de5e3625092510c116891df24818e732061ce32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408fe088f2f2f11026a1809e7de5e3625092510c116891df24818e732061ce32->enter($__internal_408fe088f2f2f11026a1809e7de5e3625092510c116891df24818e732061ce32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f53c8191b245dca165cfd68236edef4de7aab7fa49a3c098b7c77c42c56cca96->leave($__internal_f53c8191b245dca165cfd68236edef4de7aab7fa49a3c098b7c77c42c56cca96_prof);

        
        $__internal_408fe088f2f2f11026a1809e7de5e3625092510c116891df24818e732061ce32->leave($__internal_408fe088f2f2f11026a1809e7de5e3625092510c116891df24818e732061ce32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
