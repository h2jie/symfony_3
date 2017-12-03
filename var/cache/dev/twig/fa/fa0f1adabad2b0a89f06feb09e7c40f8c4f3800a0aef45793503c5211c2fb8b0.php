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
        $__internal_9b17a0d9fa4fcada0cedcf38bfeacd9c5272c9e44d34030e33c0766b18008bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b17a0d9fa4fcada0cedcf38bfeacd9c5272c9e44d34030e33c0766b18008bb4->enter($__internal_9b17a0d9fa4fcada0cedcf38bfeacd9c5272c9e44d34030e33c0766b18008bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:create.html.twig"));

        $__internal_d3aa677b8b75bd4c65ec81ed6a0a010149ffc41a26573d3b6519f3a10451fb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3aa677b8b75bd4c65ec81ed6a0a010149ffc41a26573d3b6519f3a10451fb48->enter($__internal_d3aa677b8b75bd4c65ec81ed6a0a010149ffc41a26573d3b6519f3a10451fb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b17a0d9fa4fcada0cedcf38bfeacd9c5272c9e44d34030e33c0766b18008bb4->leave($__internal_9b17a0d9fa4fcada0cedcf38bfeacd9c5272c9e44d34030e33c0766b18008bb4_prof);

        
        $__internal_d3aa677b8b75bd4c65ec81ed6a0a010149ffc41a26573d3b6519f3a10451fb48->leave($__internal_d3aa677b8b75bd4c65ec81ed6a0a010149ffc41a26573d3b6519f3a10451fb48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac98eda5b31096b6a96494ec7a05b79e8f772da63e18ef25bdad10df4334b55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac98eda5b31096b6a96494ec7a05b79e8f772da63e18ef25bdad10df4334b55c->enter($__internal_ac98eda5b31096b6a96494ec7a05b79e8f772da63e18ef25bdad10df4334b55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e564b816c7d8c9399b01a9bd4808a5df4cd5beaeac92b899e7b2c883310ee081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e564b816c7d8c9399b01a9bd4808a5df4cd5beaeac92b899e7b2c883310ee081->enter($__internal_e564b816c7d8c9399b01a9bd4808a5df4cd5beaeac92b899e7b2c883310ee081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:create";
        
        $__internal_e564b816c7d8c9399b01a9bd4808a5df4cd5beaeac92b899e7b2c883310ee081->leave($__internal_e564b816c7d8c9399b01a9bd4808a5df4cd5beaeac92b899e7b2c883310ee081_prof);

        
        $__internal_ac98eda5b31096b6a96494ec7a05b79e8f772da63e18ef25bdad10df4334b55c->leave($__internal_ac98eda5b31096b6a96494ec7a05b79e8f772da63e18ef25bdad10df4334b55c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f1fb4b29a54a98966d2999c273f1db0490b395ddc61dc63f98feba7595a4925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1fb4b29a54a98966d2999c273f1db0490b395ddc61dc63f98feba7595a4925->enter($__internal_5f1fb4b29a54a98966d2999c273f1db0490b395ddc61dc63f98feba7595a4925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9bb33264dbda239eb294b7ccc9be5669f74f2a7a1c27f94307fe0b2b7155883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bb33264dbda239eb294b7ccc9be5669f74f2a7a1c27f94307fe0b2b7155883->enter($__internal_a9bb33264dbda239eb294b7ccc9be5669f74f2a7a1c27f94307fe0b2b7155883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a9bb33264dbda239eb294b7ccc9be5669f74f2a7a1c27f94307fe0b2b7155883->leave($__internal_a9bb33264dbda239eb294b7ccc9be5669f74f2a7a1c27f94307fe0b2b7155883_prof);

        
        $__internal_5f1fb4b29a54a98966d2999c273f1db0490b395ddc61dc63f98feba7595a4925->leave($__internal_5f1fb4b29a54a98966d2999c273f1db0490b395ddc61dc63f98feba7595a4925_prof);

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
", "AppBundle:Task:create.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/src/AppBundle/Resources/views/Task/create.html.twig");
    }
}
