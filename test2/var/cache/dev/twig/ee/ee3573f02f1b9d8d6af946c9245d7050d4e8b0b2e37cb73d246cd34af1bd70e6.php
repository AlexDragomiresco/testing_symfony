<?php

/* reservations/book.html.twig */
class __TwigTemplate_de2765168c6ec18e6f7d1dd426e01c61cc8c3d9bc274fa471fe86a8bea43c728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
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
        $__internal_dca098e07e8adc6c615d2df97a6b748f82ac47e895e623d9349ee6cd33f7ed23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca098e07e8adc6c615d2df97a6b748f82ac47e895e623d9349ee6cd33f7ed23->enter($__internal_dca098e07e8adc6c615d2df97a6b748f82ac47e895e623d9349ee6cd33f7ed23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_1fcbc857ae5311e4d5b53298a277c7265866995f1db0eee742db4b0a1b7fe47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcbc857ae5311e4d5b53298a277c7265866995f1db0eee742db4b0a1b7fe47d->enter($__internal_1fcbc857ae5311e4d5b53298a277c7265866995f1db0eee742db4b0a1b7fe47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dca098e07e8adc6c615d2df97a6b748f82ac47e895e623d9349ee6cd33f7ed23->leave($__internal_dca098e07e8adc6c615d2df97a6b748f82ac47e895e623d9349ee6cd33f7ed23_prof);

        
        $__internal_1fcbc857ae5311e4d5b53298a277c7265866995f1db0eee742db4b0a1b7fe47d->leave($__internal_1fcbc857ae5311e4d5b53298a277c7265866995f1db0eee742db4b0a1b7fe47d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ce0a65455a565f083ffc0b6b40cbd50acb0dfc2b397450955eba7fdd9320c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce0a65455a565f083ffc0b6b40cbd50acb0dfc2b397450955eba7fdd9320c40->enter($__internal_9ce0a65455a565f083ffc0b6b40cbd50acb0dfc2b397450955eba7fdd9320c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01066213ce2e7e0e95792d369c0412519ca3077fb4901251e0fb18e158c1bcaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01066213ce2e7e0e95792d369c0412519ca3077fb4901251e0fb18e158c1bcaf->enter($__internal_01066213ce2e7e0e95792d369c0412519ca3077fb4901251e0fb18e158c1bcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:  ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id_client"]) ? $context["id_client"] : $this->getContext($context, "id_client")), "html", null, true);
        echo "</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_01066213ce2e7e0e95792d369c0412519ca3077fb4901251e0fb18e158c1bcaf->leave($__internal_01066213ce2e7e0e95792d369c0412519ca3077fb4901251e0fb18e158c1bcaf_prof);

        
        $__internal_9ce0a65455a565f083ffc0b6b40cbd50acb0dfc2b397450955eba7fdd9320c40->leave($__internal_9ce0a65455a565f083ffc0b6b40cbd50acb0dfc2b397450955eba7fdd9320c40_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
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
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:  {{ id_client }}</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "/var/www/erstesymf/test2/app/Resources/views/reservations/book.html.twig");
    }
}
