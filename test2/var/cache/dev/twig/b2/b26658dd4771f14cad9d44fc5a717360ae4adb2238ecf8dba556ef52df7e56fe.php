<?php

/* admin/index.html.twig */
class __TwigTemplate_e421a33b296724f37edb5f3784b44ca0e7d2011e538668d62e06348c76739910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7594eee7cbafe62780e17b6f75d6a9bc0c6acbd25bcb71e46ab763c06541e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7594eee7cbafe62780e17b6f75d6a9bc0c6acbd25bcb71e46ab763c06541e59->enter($__internal_d7594eee7cbafe62780e17b6f75d6a9bc0c6acbd25bcb71e46ab763c06541e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_f87cdb549f089b85ead7b0c4a9ae4413167e3af1287c28366848d92baa04a88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87cdb549f089b85ead7b0c4a9ae4413167e3af1287c28366848d92baa04a88b->enter($__internal_f87cdb549f089b85ead7b0c4a9ae4413167e3af1287c28366848d92baa04a88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7594eee7cbafe62780e17b6f75d6a9bc0c6acbd25bcb71e46ab763c06541e59->leave($__internal_d7594eee7cbafe62780e17b6f75d6a9bc0c6acbd25bcb71e46ab763c06541e59_prof);

        
        $__internal_f87cdb549f089b85ead7b0c4a9ae4413167e3af1287c28366848d92baa04a88b->leave($__internal_f87cdb549f089b85ead7b0c4a9ae4413167e3af1287c28366848d92baa04a88b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0408482002186959a72cf01daa66defda8dc3780e000aba262df6a33463456d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0408482002186959a72cf01daa66defda8dc3780e000aba262df6a33463456d6->enter($__internal_0408482002186959a72cf01daa66defda8dc3780e000aba262df6a33463456d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8393ca3cad00c0fe8e552f686fa2e52f0a0881f642534d04be0c53454f58b862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8393ca3cad00c0fe8e552f686fa2e52f0a0881f642534d04be0c53454f58b862->enter($__internal_8393ca3cad00c0fe8e552f686fa2e52f0a0881f642534d04be0c53454f58b862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_8393ca3cad00c0fe8e552f686fa2e52f0a0881f642534d04be0c53454f58b862->leave($__internal_8393ca3cad00c0fe8e552f686fa2e52f0a0881f642534d04be0c53454f58b862_prof);

        
        $__internal_0408482002186959a72cf01daa66defda8dc3780e000aba262df6a33463456d6->leave($__internal_0408482002186959a72cf01daa66defda8dc3780e000aba262df6a33463456d6_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "/var/www/erstesymf/test2/app/Resources/views/admin/index.html.twig");
    }
}
