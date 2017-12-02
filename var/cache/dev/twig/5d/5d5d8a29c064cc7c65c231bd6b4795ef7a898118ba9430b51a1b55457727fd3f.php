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
        $__internal_62068d7a8df8ab52106dc98a54b4c811a6951ccf4195b6bbb6432ffdd8dc3b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62068d7a8df8ab52106dc98a54b4c811a6951ccf4195b6bbb6432ffdd8dc3b88->enter($__internal_62068d7a8df8ab52106dc98a54b4c811a6951ccf4195b6bbb6432ffdd8dc3b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:update.html.twig"));

        $__internal_db2d4f9f49b3ea61dd22705f4ee3172b3d90482b6ba27b9d794a4e44e6e821bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2d4f9f49b3ea61dd22705f4ee3172b3d90482b6ba27b9d794a4e44e6e821bf->enter($__internal_db2d4f9f49b3ea61dd22705f4ee3172b3d90482b6ba27b9d794a4e44e6e821bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62068d7a8df8ab52106dc98a54b4c811a6951ccf4195b6bbb6432ffdd8dc3b88->leave($__internal_62068d7a8df8ab52106dc98a54b4c811a6951ccf4195b6bbb6432ffdd8dc3b88_prof);

        
        $__internal_db2d4f9f49b3ea61dd22705f4ee3172b3d90482b6ba27b9d794a4e44e6e821bf->leave($__internal_db2d4f9f49b3ea61dd22705f4ee3172b3d90482b6ba27b9d794a4e44e6e821bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3991f72411000eeaf1877e0413454e1dbb8d982e27a4dc61477ac66a86c53838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3991f72411000eeaf1877e0413454e1dbb8d982e27a4dc61477ac66a86c53838->enter($__internal_3991f72411000eeaf1877e0413454e1dbb8d982e27a4dc61477ac66a86c53838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64fbc17bf3a9316e717222b5131d4ba04bde720e0323d00fc9f635cd45427857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fbc17bf3a9316e717222b5131d4ba04bde720e0323d00fc9f635cd45427857->enter($__internal_64fbc17bf3a9316e717222b5131d4ba04bde720e0323d00fc9f635cd45427857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:update";
        
        $__internal_64fbc17bf3a9316e717222b5131d4ba04bde720e0323d00fc9f635cd45427857->leave($__internal_64fbc17bf3a9316e717222b5131d4ba04bde720e0323d00fc9f635cd45427857_prof);

        
        $__internal_3991f72411000eeaf1877e0413454e1dbb8d982e27a4dc61477ac66a86c53838->leave($__internal_3991f72411000eeaf1877e0413454e1dbb8d982e27a4dc61477ac66a86c53838_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e332ca61d42967c6014ecdba514f8a222d191d4ab1d9964712d57afe1a613ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e332ca61d42967c6014ecdba514f8a222d191d4ab1d9964712d57afe1a613ad4->enter($__internal_e332ca61d42967c6014ecdba514f8a222d191d4ab1d9964712d57afe1a613ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b28777f822c1fb73b17536ed537724908136f1d8f8a424d66e73b05a6cc0ec30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28777f822c1fb73b17536ed537724908136f1d8f8a424d66e73b05a6cc0ec30->enter($__internal_b28777f822c1fb73b17536ed537724908136f1d8f8a424d66e73b05a6cc0ec30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b28777f822c1fb73b17536ed537724908136f1d8f8a424d66e73b05a6cc0ec30->leave($__internal_b28777f822c1fb73b17536ed537724908136f1d8f8a424d66e73b05a6cc0ec30_prof);

        
        $__internal_e332ca61d42967c6014ecdba514f8a222d191d4ab1d9964712d57afe1a613ad4->leave($__internal_e332ca61d42967c6014ecdba514f8a222d191d4ab1d9964712d57afe1a613ad4_prof);

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
", "AppBundle:Task:update.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/TodoList/src/AppBundle/Resources/views/Task/update.html.twig");
    }
}
