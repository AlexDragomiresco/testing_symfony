<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8b951b01dc8ad244304427dc12b03428ca0d071538be06998c357f4c4f20752e extends Twig_Template
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
        $__internal_0aacd0de786beaa8dc0b446eae2f577c99402c34683250a4c7ff1a641402ef3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aacd0de786beaa8dc0b446eae2f577c99402c34683250a4c7ff1a641402ef3b->enter($__internal_0aacd0de786beaa8dc0b446eae2f577c99402c34683250a4c7ff1a641402ef3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_610ecae304342d7919967b269962ba703d3e7fcf895211bbcd908414bd58f92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610ecae304342d7919967b269962ba703d3e7fcf895211bbcd908414bd58f92b->enter($__internal_610ecae304342d7919967b269962ba703d3e7fcf895211bbcd908414bd58f92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0aacd0de786beaa8dc0b446eae2f577c99402c34683250a4c7ff1a641402ef3b->leave($__internal_0aacd0de786beaa8dc0b446eae2f577c99402c34683250a4c7ff1a641402ef3b_prof);

        
        $__internal_610ecae304342d7919967b269962ba703d3e7fcf895211bbcd908414bd58f92b->leave($__internal_610ecae304342d7919967b269962ba703d3e7fcf895211bbcd908414bd58f92b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
