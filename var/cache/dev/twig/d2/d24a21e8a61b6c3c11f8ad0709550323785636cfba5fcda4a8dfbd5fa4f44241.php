<?php

/* AppBundle:Task:delete.html.twig */
class __TwigTemplate_8f807ab2e5b3204b0e9958bec61d8ac520a1cfcd123e56dd4bdfaa0eec0aeecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Task:delete.html.twig", 1);
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
        $__internal_64b3bc09d4d481c4ec8c0ce78f26b3842be7c53c680e06c55751f009fae0ba61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b3bc09d4d481c4ec8c0ce78f26b3842be7c53c680e06c55751f009fae0ba61->enter($__internal_64b3bc09d4d481c4ec8c0ce78f26b3842be7c53c680e06c55751f009fae0ba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:delete.html.twig"));

        $__internal_3a2909fdd0a8d3af47db5ee9066ef1f5ff42cf10db26193420e9e3efb87f1cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2909fdd0a8d3af47db5ee9066ef1f5ff42cf10db26193420e9e3efb87f1cfe->enter($__internal_3a2909fdd0a8d3af47db5ee9066ef1f5ff42cf10db26193420e9e3efb87f1cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64b3bc09d4d481c4ec8c0ce78f26b3842be7c53c680e06c55751f009fae0ba61->leave($__internal_64b3bc09d4d481c4ec8c0ce78f26b3842be7c53c680e06c55751f009fae0ba61_prof);

        
        $__internal_3a2909fdd0a8d3af47db5ee9066ef1f5ff42cf10db26193420e9e3efb87f1cfe->leave($__internal_3a2909fdd0a8d3af47db5ee9066ef1f5ff42cf10db26193420e9e3efb87f1cfe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbff53db1c967c59fc6552f45ea6eca2f153a963084ca21f0545f1856ed65ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbff53db1c967c59fc6552f45ea6eca2f153a963084ca21f0545f1856ed65ab9->enter($__internal_dbff53db1c967c59fc6552f45ea6eca2f153a963084ca21f0545f1856ed65ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4901a30ff56782715813d3235e33171c7e3f1192d80230715fe61dafb29a5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4901a30ff56782715813d3235e33171c7e3f1192d80230715fe61dafb29a5e1->enter($__internal_d4901a30ff56782715813d3235e33171c7e3f1192d80230715fe61dafb29a5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:delete";
        
        $__internal_d4901a30ff56782715813d3235e33171c7e3f1192d80230715fe61dafb29a5e1->leave($__internal_d4901a30ff56782715813d3235e33171c7e3f1192d80230715fe61dafb29a5e1_prof);

        
        $__internal_dbff53db1c967c59fc6552f45ea6eca2f153a963084ca21f0545f1856ed65ab9->leave($__internal_dbff53db1c967c59fc6552f45ea6eca2f153a963084ca21f0545f1856ed65ab9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_48e836d948f2fa9fd3d6b46b260b0051b005df022467a8ea3466ecb6faac4c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e836d948f2fa9fd3d6b46b260b0051b005df022467a8ea3466ecb6faac4c48->enter($__internal_48e836d948f2fa9fd3d6b46b260b0051b005df022467a8ea3466ecb6faac4c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4264b2958fa0d05287680efb150ae5797aefbf0489846a3068e6dc3a08998605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4264b2958fa0d05287680efb150ae5797aefbf0489846a3068e6dc3a08998605->enter($__internal_4264b2958fa0d05287680efb150ae5797aefbf0489846a3068e6dc3a08998605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Task:delete page</h1>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_4264b2958fa0d05287680efb150ae5797aefbf0489846a3068e6dc3a08998605->leave($__internal_4264b2958fa0d05287680efb150ae5797aefbf0489846a3068e6dc3a08998605_prof);

        
        $__internal_48e836d948f2fa9fd3d6b46b260b0051b005df022467a8ea3466ecb6faac4c48->leave($__internal_48e836d948f2fa9fd3d6b46b260b0051b005df022467a8ea3466ecb6faac4c48_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Task:delete{% endblock %}

{% block body %}
<h1>Welcome to the Task:delete page</h1>
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "AppBundle:Task:delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/src/AppBundle/Resources/views/Task/delete.html.twig");
    }
}
