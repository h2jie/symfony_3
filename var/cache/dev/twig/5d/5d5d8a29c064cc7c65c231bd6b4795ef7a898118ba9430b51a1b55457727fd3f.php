<?php

/* AppBundle:Task:update.html.twig */
class __TwigTemplate_a53edf7509cd34418785df1f9535facb98dc5d7a0e06990d6f2ae9af57503faf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Task:update.html.twig", 1);
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
        $__internal_f31fde63ed0d4132fa23c88c3ae88d6eeee0461205506e6abcc68464db4b6c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31fde63ed0d4132fa23c88c3ae88d6eeee0461205506e6abcc68464db4b6c7c->enter($__internal_f31fde63ed0d4132fa23c88c3ae88d6eeee0461205506e6abcc68464db4b6c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:update.html.twig"));

        $__internal_9a1a2814eaba0ddf177db6f4eb6b045e736c8dce16749956041ccbbf83d200e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1a2814eaba0ddf177db6f4eb6b045e736c8dce16749956041ccbbf83d200e6->enter($__internal_9a1a2814eaba0ddf177db6f4eb6b045e736c8dce16749956041ccbbf83d200e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f31fde63ed0d4132fa23c88c3ae88d6eeee0461205506e6abcc68464db4b6c7c->leave($__internal_f31fde63ed0d4132fa23c88c3ae88d6eeee0461205506e6abcc68464db4b6c7c_prof);

        
        $__internal_9a1a2814eaba0ddf177db6f4eb6b045e736c8dce16749956041ccbbf83d200e6->leave($__internal_9a1a2814eaba0ddf177db6f4eb6b045e736c8dce16749956041ccbbf83d200e6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_faa5f3de5cbf9a6e3ce3098b1365aeeb43a37db76809227d3ab8824bad0d0e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa5f3de5cbf9a6e3ce3098b1365aeeb43a37db76809227d3ab8824bad0d0e63->enter($__internal_faa5f3de5cbf9a6e3ce3098b1365aeeb43a37db76809227d3ab8824bad0d0e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f6341a55514a69a3995eb960a9ecb4a6b91d1be1ea07c5e90a0cde5df67aa06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6341a55514a69a3995eb960a9ecb4a6b91d1be1ea07c5e90a0cde5df67aa06->enter($__internal_8f6341a55514a69a3995eb960a9ecb4a6b91d1be1ea07c5e90a0cde5df67aa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:update";
        
        $__internal_8f6341a55514a69a3995eb960a9ecb4a6b91d1be1ea07c5e90a0cde5df67aa06->leave($__internal_8f6341a55514a69a3995eb960a9ecb4a6b91d1be1ea07c5e90a0cde5df67aa06_prof);

        
        $__internal_faa5f3de5cbf9a6e3ce3098b1365aeeb43a37db76809227d3ab8824bad0d0e63->leave($__internal_faa5f3de5cbf9a6e3ce3098b1365aeeb43a37db76809227d3ab8824bad0d0e63_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1a616e59e12e7b58e82c045c84a597584cf31c7eaebfb806d663379d7655238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a616e59e12e7b58e82c045c84a597584cf31c7eaebfb806d663379d7655238->enter($__internal_f1a616e59e12e7b58e82c045c84a597584cf31c7eaebfb806d663379d7655238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_935272fc41bf0c6b7c893a4d210754099f1245b451187ca16285f3ef5afadcee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935272fc41bf0c6b7c893a4d210754099f1245b451187ca16285f3ef5afadcee->enter($__internal_935272fc41bf0c6b7c893a4d210754099f1245b451187ca16285f3ef5afadcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Task:update page</h1>

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
        
        $__internal_935272fc41bf0c6b7c893a4d210754099f1245b451187ca16285f3ef5afadcee->leave($__internal_935272fc41bf0c6b7c893a4d210754099f1245b451187ca16285f3ef5afadcee_prof);

        
        $__internal_f1a616e59e12e7b58e82c045c84a597584cf31c7eaebfb806d663379d7655238->leave($__internal_f1a616e59e12e7b58e82c045c84a597584cf31c7eaebfb806d663379d7655238_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:update.html.twig";
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

{% block title %}AppBundle:Task:update{% endblock %}

{% block body %}
<h1>Welcome to the Task:update page</h1>

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "AppBundle:Task:update.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/src/AppBundle/Resources/views/Task/update.html.twig");
    }
}
