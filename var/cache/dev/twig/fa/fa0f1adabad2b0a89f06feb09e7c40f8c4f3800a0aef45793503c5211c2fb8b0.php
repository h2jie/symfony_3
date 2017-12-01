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
        $__internal_f249e9ef862adc9f32888b89abb0f1c5972fb84f00783663a6317090f9c3b048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f249e9ef862adc9f32888b89abb0f1c5972fb84f00783663a6317090f9c3b048->enter($__internal_f249e9ef862adc9f32888b89abb0f1c5972fb84f00783663a6317090f9c3b048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:create.html.twig"));

        $__internal_3f81d67aca51d2d11869f950312192b13b3cac35fe64ef7588c0b29de276d9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f81d67aca51d2d11869f950312192b13b3cac35fe64ef7588c0b29de276d9d9->enter($__internal_3f81d67aca51d2d11869f950312192b13b3cac35fe64ef7588c0b29de276d9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f249e9ef862adc9f32888b89abb0f1c5972fb84f00783663a6317090f9c3b048->leave($__internal_f249e9ef862adc9f32888b89abb0f1c5972fb84f00783663a6317090f9c3b048_prof);

        
        $__internal_3f81d67aca51d2d11869f950312192b13b3cac35fe64ef7588c0b29de276d9d9->leave($__internal_3f81d67aca51d2d11869f950312192b13b3cac35fe64ef7588c0b29de276d9d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9741c721aace9944c56ecd72a581739bda071ffac6f6947aaea0cdc16e1e1d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9741c721aace9944c56ecd72a581739bda071ffac6f6947aaea0cdc16e1e1d5f->enter($__internal_9741c721aace9944c56ecd72a581739bda071ffac6f6947aaea0cdc16e1e1d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8e283fc426a79351e9bbe237334e9559b007e56bc98b23397af91b35b022b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e283fc426a79351e9bbe237334e9559b007e56bc98b23397af91b35b022b8c->enter($__internal_b8e283fc426a79351e9bbe237334e9559b007e56bc98b23397af91b35b022b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:create";
        
        $__internal_b8e283fc426a79351e9bbe237334e9559b007e56bc98b23397af91b35b022b8c->leave($__internal_b8e283fc426a79351e9bbe237334e9559b007e56bc98b23397af91b35b022b8c_prof);

        
        $__internal_9741c721aace9944c56ecd72a581739bda071ffac6f6947aaea0cdc16e1e1d5f->leave($__internal_9741c721aace9944c56ecd72a581739bda071ffac6f6947aaea0cdc16e1e1d5f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3ab83bb01d9f63d0d167742f07c18427035c8f2603db176f8f698b08ab41747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ab83bb01d9f63d0d167742f07c18427035c8f2603db176f8f698b08ab41747->enter($__internal_a3ab83bb01d9f63d0d167742f07c18427035c8f2603db176f8f698b08ab41747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0625ca6577ccb3264eae8947fcb01c8f5475a80a1cd885f28a19589061e2aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0625ca6577ccb3264eae8947fcb01c8f5475a80a1cd885f28a19589061e2aa4->enter($__internal_d0625ca6577ccb3264eae8947fcb01c8f5475a80a1cd885f28a19589061e2aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d0625ca6577ccb3264eae8947fcb01c8f5475a80a1cd885f28a19589061e2aa4->leave($__internal_d0625ca6577ccb3264eae8947fcb01c8f5475a80a1cd885f28a19589061e2aa4_prof);

        
        $__internal_a3ab83bb01d9f63d0d167742f07c18427035c8f2603db176f8f698b08ab41747->leave($__internal_a3ab83bb01d9f63d0d167742f07c18427035c8f2603db176f8f698b08ab41747_prof);

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
