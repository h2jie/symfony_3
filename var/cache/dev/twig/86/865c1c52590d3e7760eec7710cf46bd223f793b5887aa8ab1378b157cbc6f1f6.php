<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8cba4d8c56d1e4991c23cc1477f5459f59937e35b927e867aebfdc320978f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8cba4d8c56d1e4991c23cc1477f5459f59937e35b927e867aebfdc320978f25->enter($__internal_e8cba4d8c56d1e4991c23cc1477f5459f59937e35b927e867aebfdc320978f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_38cf4efc79b74b27cd0491f3d19b9373b3bb2cf9060ce667cf117d87652eff5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cf4efc79b74b27cd0491f3d19b9373b3bb2cf9060ce667cf117d87652eff5b->enter($__internal_38cf4efc79b74b27cd0491f3d19b9373b3bb2cf9060ce667cf117d87652eff5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8cba4d8c56d1e4991c23cc1477f5459f59937e35b927e867aebfdc320978f25->leave($__internal_e8cba4d8c56d1e4991c23cc1477f5459f59937e35b927e867aebfdc320978f25_prof);

        
        $__internal_38cf4efc79b74b27cd0491f3d19b9373b3bb2cf9060ce667cf117d87652eff5b->leave($__internal_38cf4efc79b74b27cd0491f3d19b9373b3bb2cf9060ce667cf117d87652eff5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38276c8042a56a9066b441ff06507a278e30c53ae405ff20c2ccf4c61d6bddd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38276c8042a56a9066b441ff06507a278e30c53ae405ff20c2ccf4c61d6bddd6->enter($__internal_38276c8042a56a9066b441ff06507a278e30c53ae405ff20c2ccf4c61d6bddd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_060e767db7000c7bf438c42077e7438cbbb9d264423bbeb726aff608527ffbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060e767db7000c7bf438c42077e7438cbbb9d264423bbeb726aff608527ffbbc->enter($__internal_060e767db7000c7bf438c42077e7438cbbb9d264423bbeb726aff608527ffbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_060e767db7000c7bf438c42077e7438cbbb9d264423bbeb726aff608527ffbbc->leave($__internal_060e767db7000c7bf438c42077e7438cbbb9d264423bbeb726aff608527ffbbc_prof);

        
        $__internal_38276c8042a56a9066b441ff06507a278e30c53ae405ff20c2ccf4c61d6bddd6->leave($__internal_38276c8042a56a9066b441ff06507a278e30c53ae405ff20c2ccf4c61d6bddd6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b5c8ca066f90cc48184e2ee29bdf543e9e586e43bfda84b968d9423dad9de3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5c8ca066f90cc48184e2ee29bdf543e9e586e43bfda84b968d9423dad9de3e->enter($__internal_6b5c8ca066f90cc48184e2ee29bdf543e9e586e43bfda84b968d9423dad9de3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9f8e31e12550dfa5c1f1781b564003f40e20ec1ca3d2340a038ce5591109e6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8e31e12550dfa5c1f1781b564003f40e20ec1ca3d2340a038ce5591109e6da->enter($__internal_9f8e31e12550dfa5c1f1781b564003f40e20ec1ca3d2340a038ce5591109e6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f8e31e12550dfa5c1f1781b564003f40e20ec1ca3d2340a038ce5591109e6da->leave($__internal_9f8e31e12550dfa5c1f1781b564003f40e20ec1ca3d2340a038ce5591109e6da_prof);

        
        $__internal_6b5c8ca066f90cc48184e2ee29bdf543e9e586e43bfda84b968d9423dad9de3e->leave($__internal_6b5c8ca066f90cc48184e2ee29bdf543e9e586e43bfda84b968d9423dad9de3e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45449e923ea0c5ce404cfc94a9b5b60d3583213d4d3b82788c93d045c8d34cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45449e923ea0c5ce404cfc94a9b5b60d3583213d4d3b82788c93d045c8d34cab->enter($__internal_45449e923ea0c5ce404cfc94a9b5b60d3583213d4d3b82788c93d045c8d34cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06cb8d6d0affac4dcbf42b5b71670d783f88a264f7cdfbc9ae5287abf2b10eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cb8d6d0affac4dcbf42b5b71670d783f88a264f7cdfbc9ae5287abf2b10eec->enter($__internal_06cb8d6d0affac4dcbf42b5b71670d783f88a264f7cdfbc9ae5287abf2b10eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_06cb8d6d0affac4dcbf42b5b71670d783f88a264f7cdfbc9ae5287abf2b10eec->leave($__internal_06cb8d6d0affac4dcbf42b5b71670d783f88a264f7cdfbc9ae5287abf2b10eec_prof);

        
        $__internal_45449e923ea0c5ce404cfc94a9b5b60d3583213d4d3b82788c93d045c8d34cab->leave($__internal_45449e923ea0c5ce404cfc94a9b5b60d3583213d4d3b82788c93d045c8d34cab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
