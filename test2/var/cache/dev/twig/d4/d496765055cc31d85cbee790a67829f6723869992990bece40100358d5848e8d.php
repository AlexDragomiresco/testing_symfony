<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8dba1145fe96b63210fc3f36ae8e235164bcf101e5edd6dc5c583d5c1abcff8e extends Twig_Template
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
        $__internal_bd67f61f990f1f5f2f89251f7fb897af3e87b298fd041c6f4d1247930fb2ef98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd67f61f990f1f5f2f89251f7fb897af3e87b298fd041c6f4d1247930fb2ef98->enter($__internal_bd67f61f990f1f5f2f89251f7fb897af3e87b298fd041c6f4d1247930fb2ef98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ecb57db9c0c1912fa7bbda88b3a4eda247fe5dc3e3448334eab16dc4e6744300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb57db9c0c1912fa7bbda88b3a4eda247fe5dc3e3448334eab16dc4e6744300->enter($__internal_ecb57db9c0c1912fa7bbda88b3a4eda247fe5dc3e3448334eab16dc4e6744300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bd67f61f990f1f5f2f89251f7fb897af3e87b298fd041c6f4d1247930fb2ef98->leave($__internal_bd67f61f990f1f5f2f89251f7fb897af3e87b298fd041c6f4d1247930fb2ef98_prof);

        
        $__internal_ecb57db9c0c1912fa7bbda88b3a4eda247fe5dc3e3448334eab16dc4e6744300->leave($__internal_ecb57db9c0c1912fa7bbda88b3a4eda247fe5dc3e3448334eab16dc4e6744300_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
