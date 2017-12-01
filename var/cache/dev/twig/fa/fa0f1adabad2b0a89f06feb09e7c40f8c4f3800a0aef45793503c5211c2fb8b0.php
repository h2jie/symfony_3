<?php

/* AppBundle:Task:create.html.twig */
class __TwigTemplate_5ce26344d52798466d39481b989bd8a2209d822111ab11133942880f5a123e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Task:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ac76a4774661fbd65f5f987f2caab2e28f8e0c29cee769bdf46df26b9ee71cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac76a4774661fbd65f5f987f2caab2e28f8e0c29cee769bdf46df26b9ee71cf->enter($__internal_0ac76a4774661fbd65f5f987f2caab2e28f8e0c29cee769bdf46df26b9ee71cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:create.html.twig"));

        $__internal_7aaf7f8fbf0ff0d2be5b8b72f40fdfcad0b79bf6c9ac7152342851504ff0ad2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aaf7f8fbf0ff0d2be5b8b72f40fdfcad0b79bf6c9ac7152342851504ff0ad2e->enter($__internal_7aaf7f8fbf0ff0d2be5b8b72f40fdfcad0b79bf6c9ac7152342851504ff0ad2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ac76a4774661fbd65f5f987f2caab2e28f8e0c29cee769bdf46df26b9ee71cf->leave($__internal_0ac76a4774661fbd65f5f987f2caab2e28f8e0c29cee769bdf46df26b9ee71cf_prof);

        
        $__internal_7aaf7f8fbf0ff0d2be5b8b72f40fdfcad0b79bf6c9ac7152342851504ff0ad2e->leave($__internal_7aaf7f8fbf0ff0d2be5b8b72f40fdfcad0b79bf6c9ac7152342851504ff0ad2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f34963eb6aa7fbd0500515a64e24fb77916f0d252b21428cff701ade7a737d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f34963eb6aa7fbd0500515a64e24fb77916f0d252b21428cff701ade7a737d9->enter($__internal_6f34963eb6aa7fbd0500515a64e24fb77916f0d252b21428cff701ade7a737d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_093101f615e0dc5714db8ca6c5c01ab9aaf76f0d6eaf1451f7e24814beb05e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093101f615e0dc5714db8ca6c5c01ab9aaf76f0d6eaf1451f7e24814beb05e3a->enter($__internal_093101f615e0dc5714db8ca6c5c01ab9aaf76f0d6eaf1451f7e24814beb05e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:create";
        
        $__internal_093101f615e0dc5714db8ca6c5c01ab9aaf76f0d6eaf1451f7e24814beb05e3a->leave($__internal_093101f615e0dc5714db8ca6c5c01ab9aaf76f0d6eaf1451f7e24814beb05e3a_prof);

        
        $__internal_6f34963eb6aa7fbd0500515a64e24fb77916f0d252b21428cff701ade7a737d9->leave($__internal_6f34963eb6aa7fbd0500515a64e24fb77916f0d252b21428cff701ade7a737d9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d25474307ce87e1ef522ccec42a3f3daa122f079c0811fe2149758eb33a392bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25474307ce87e1ef522ccec42a3f3daa122f079c0811fe2149758eb33a392bf->enter($__internal_d25474307ce87e1ef522ccec42a3f3daa122f079c0811fe2149758eb33a392bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_672a53bf968acd3fd78dfe4400bb8ea0930d3ac3b49aaccba129fbe91833c65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672a53bf968acd3fd78dfe4400bb8ea0930d3ac3b49aaccba129fbe91833c65a->enter($__internal_672a53bf968acd3fd78dfe4400bb8ea0930d3ac3b49aaccba129fbe91833c65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Task:create page</h1>

";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_672a53bf968acd3fd78dfe4400bb8ea0930d3ac3b49aaccba129fbe91833c65a->leave($__internal_672a53bf968acd3fd78dfe4400bb8ea0930d3ac3b49aaccba129fbe91833c65a_prof);

        
        $__internal_d25474307ce87e1ef522ccec42a3f3daa122f079c0811fe2149758eb33a392bf->leave($__internal_d25474307ce87e1ef522ccec42a3f3daa122f079c0811fe2149758eb33a392bf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Task:create{% endblock %}

{% block body %}
<h1>Welcome to the Task:create page</h1>

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
{% endblock %}
", "AppBundle:Task:create.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/TodoList/src/AppBundle/Resources/views/Task/create.html.twig");
    }
}
