<?php

/* AppBundle:Task:list.html.twig */
class __TwigTemplate_fe0fa45974082fe27ef0d525a1d771f0d6e7d6c3fbd7c29c4466395d41dbc131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Task:list.html.twig", 1);
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
        $__internal_6c729e9640bf8d1d8b433a5d87ba95f9745cd8bd460f248679ef2ded82903e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c729e9640bf8d1d8b433a5d87ba95f9745cd8bd460f248679ef2ded82903e21->enter($__internal_6c729e9640bf8d1d8b433a5d87ba95f9745cd8bd460f248679ef2ded82903e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:list.html.twig"));

        $__internal_0219a88a798a541b0fea09e5d5dd0517846e27883eb192f6050418d5ae160476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0219a88a798a541b0fea09e5d5dd0517846e27883eb192f6050418d5ae160476->enter($__internal_0219a88a798a541b0fea09e5d5dd0517846e27883eb192f6050418d5ae160476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c729e9640bf8d1d8b433a5d87ba95f9745cd8bd460f248679ef2ded82903e21->leave($__internal_6c729e9640bf8d1d8b433a5d87ba95f9745cd8bd460f248679ef2ded82903e21_prof);

        
        $__internal_0219a88a798a541b0fea09e5d5dd0517846e27883eb192f6050418d5ae160476->leave($__internal_0219a88a798a541b0fea09e5d5dd0517846e27883eb192f6050418d5ae160476_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a5fc56c42f98d3928b349d8ef5b4da2a6fd955304951e82bf1c31de47b78a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5fc56c42f98d3928b349d8ef5b4da2a6fd955304951e82bf1c31de47b78a6d->enter($__internal_4a5fc56c42f98d3928b349d8ef5b4da2a6fd955304951e82bf1c31de47b78a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa53b0b5a02a51105a9b9b5182dbe5c340945d7e38b1832a6bc17ddedeb9a00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa53b0b5a02a51105a9b9b5182dbe5c340945d7e38b1832a6bc17ddedeb9a00d->enter($__internal_fa53b0b5a02a51105a9b9b5182dbe5c340945d7e38b1832a6bc17ddedeb9a00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:list";
        
        $__internal_fa53b0b5a02a51105a9b9b5182dbe5c340945d7e38b1832a6bc17ddedeb9a00d->leave($__internal_fa53b0b5a02a51105a9b9b5182dbe5c340945d7e38b1832a6bc17ddedeb9a00d_prof);

        
        $__internal_4a5fc56c42f98d3928b349d8ef5b4da2a6fd955304951e82bf1c31de47b78a6d->leave($__internal_4a5fc56c42f98d3928b349d8ef5b4da2a6fd955304951e82bf1c31de47b78a6d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f321cfb5ca9fee5674d6af7fa684025ad24583c843e4592080b81d17d0c8ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f321cfb5ca9fee5674d6af7fa684025ad24583c843e4592080b81d17d0c8ea9->enter($__internal_8f321cfb5ca9fee5674d6af7fa684025ad24583c843e4592080b81d17d0c8ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dcd505c996edfdf158ad304364f1e1e57e8515054a8b37dae154843a21b6804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcd505c996edfdf158ad304364f1e1e57e8515054a8b37dae154843a21b6804->enter($__internal_2dcd505c996edfdf158ad304364f1e1e57e8515054a8b37dae154843a21b6804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Task:list page</h1>
<table>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Task"] ?? $this->getContext($context, "Task")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 9
            echo "    <tr>
        <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
    </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "    <tr>
        <td>No hay resultados.</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>
";
        
        $__internal_2dcd505c996edfdf158ad304364f1e1e57e8515054a8b37dae154843a21b6804->leave($__internal_2dcd505c996edfdf158ad304364f1e1e57e8515054a8b37dae154843a21b6804_prof);

        
        $__internal_8f321cfb5ca9fee5674d6af7fa684025ad24583c843e4592080b81d17d0c8ea9->leave($__internal_8f321cfb5ca9fee5674d6af7fa684025ad24583c843e4592080b81d17d0c8ea9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 19,  96 => 15,  88 => 12,  84 => 11,  80 => 10,  77 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Task:list{% endblock %}

{% block body %}
<h1>Welcome to the Task:list page</h1>
<table>
{% for task in Task %}
    <tr>
        <td>{{task.id}}</td>
        <td>{{task.title}}</td>
        <td>{{task.date|date('Y-m-d H:i:s')}}</td>
    </tr>
{% else %}
    <tr>
        <td>No hay resultados.</td>
    </tr>
{% endfor %}
</table>
{% endblock %}
", "AppBundle:Task:list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/TodoList/src/AppBundle/Resources/views/Task/list.html.twig");
    }
}
