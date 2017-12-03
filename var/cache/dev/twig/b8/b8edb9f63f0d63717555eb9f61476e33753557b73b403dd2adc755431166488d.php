<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5fc722d62ca28f285b606fe786535b6a2c11de849e5659f523da67b1533eb6bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_860b4976b75e559c05a93f842313267964d0dcdc68d131b77b89fee317ae0a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860b4976b75e559c05a93f842313267964d0dcdc68d131b77b89fee317ae0a15->enter($__internal_860b4976b75e559c05a93f842313267964d0dcdc68d131b77b89fee317ae0a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_39d1ca3cae7077033e87fe907ea1efddb57d415ac5a2215abe2e87f4f7acb7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d1ca3cae7077033e87fe907ea1efddb57d415ac5a2215abe2e87f4f7acb7e4->enter($__internal_39d1ca3cae7077033e87fe907ea1efddb57d415ac5a2215abe2e87f4f7acb7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_860b4976b75e559c05a93f842313267964d0dcdc68d131b77b89fee317ae0a15->leave($__internal_860b4976b75e559c05a93f842313267964d0dcdc68d131b77b89fee317ae0a15_prof);

        
        $__internal_39d1ca3cae7077033e87fe907ea1efddb57d415ac5a2215abe2e87f4f7acb7e4->leave($__internal_39d1ca3cae7077033e87fe907ea1efddb57d415ac5a2215abe2e87f4f7acb7e4_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8feea5e4720dd72145795659a670e79b52123139dce298e05faa08db41059dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8feea5e4720dd72145795659a670e79b52123139dce298e05faa08db41059dde->enter($__internal_8feea5e4720dd72145795659a670e79b52123139dce298e05faa08db41059dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9e60cc01e99bd02d484ff87d1116f821e861b371bcb70feff6f57163ba5f4394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e60cc01e99bd02d484ff87d1116f821e861b371bcb70feff6f57163ba5f4394->enter($__internal_9e60cc01e99bd02d484ff87d1116f821e861b371bcb70feff6f57163ba5f4394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_9e60cc01e99bd02d484ff87d1116f821e861b371bcb70feff6f57163ba5f4394->leave($__internal_9e60cc01e99bd02d484ff87d1116f821e861b371bcb70feff6f57163ba5f4394_prof);

        
        $__internal_8feea5e4720dd72145795659a670e79b52123139dce298e05faa08db41059dde->leave($__internal_8feea5e4720dd72145795659a670e79b52123139dce298e05faa08db41059dde_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c21d5c12430ba04b3c0a197701db3fabfc4f5438ef6ed73d225308cad89face6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21d5c12430ba04b3c0a197701db3fabfc4f5438ef6ed73d225308cad89face6->enter($__internal_c21d5c12430ba04b3c0a197701db3fabfc4f5438ef6ed73d225308cad89face6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ac52f06c811d12c19e21711a167a2dd12ad4d46c97529655da87672987e8c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac52f06c811d12c19e21711a167a2dd12ad4d46c97529655da87672987e8c2f->enter($__internal_6ac52f06c811d12c19e21711a167a2dd12ad4d46c97529655da87672987e8c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6ac52f06c811d12c19e21711a167a2dd12ad4d46c97529655da87672987e8c2f->leave($__internal_6ac52f06c811d12c19e21711a167a2dd12ad4d46c97529655da87672987e8c2f_prof);

        
        $__internal_c21d5c12430ba04b3c0a197701db3fabfc4f5438ef6ed73d225308cad89face6->leave($__internal_c21d5c12430ba04b3c0a197701db3fabfc4f5438ef6ed73d225308cad89face6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
