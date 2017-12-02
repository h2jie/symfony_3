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
        $__internal_8a0f7268fe39df213c6fa997ff4737f62f6589202f64e740ac3522bc5e02f3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0f7268fe39df213c6fa997ff4737f62f6589202f64e740ac3522bc5e02f3f5->enter($__internal_8a0f7268fe39df213c6fa997ff4737f62f6589202f64e740ac3522bc5e02f3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:delete.html.twig"));

        $__internal_b5f5f2be1279eb1c198b19d010b396c8bd9bdeefda3c5fe0414d2bfdf3bbb32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f5f2be1279eb1c198b19d010b396c8bd9bdeefda3c5fe0414d2bfdf3bbb32b->enter($__internal_b5f5f2be1279eb1c198b19d010b396c8bd9bdeefda3c5fe0414d2bfdf3bbb32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0f7268fe39df213c6fa997ff4737f62f6589202f64e740ac3522bc5e02f3f5->leave($__internal_8a0f7268fe39df213c6fa997ff4737f62f6589202f64e740ac3522bc5e02f3f5_prof);

        
        $__internal_b5f5f2be1279eb1c198b19d010b396c8bd9bdeefda3c5fe0414d2bfdf3bbb32b->leave($__internal_b5f5f2be1279eb1c198b19d010b396c8bd9bdeefda3c5fe0414d2bfdf3bbb32b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_13c29fee82b6a3b0009d68e8e780b780d094e8cc1a6e3ecafd182665497527c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c29fee82b6a3b0009d68e8e780b780d094e8cc1a6e3ecafd182665497527c1->enter($__internal_13c29fee82b6a3b0009d68e8e780b780d094e8cc1a6e3ecafd182665497527c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a8f8379c0e70e10bb1e3208a6ae619b17f48192dfc22538c04646e5e361bcf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8f8379c0e70e10bb1e3208a6ae619b17f48192dfc22538c04646e5e361bcf9->enter($__internal_1a8f8379c0e70e10bb1e3208a6ae619b17f48192dfc22538c04646e5e361bcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:delete";
        
        $__internal_1a8f8379c0e70e10bb1e3208a6ae619b17f48192dfc22538c04646e5e361bcf9->leave($__internal_1a8f8379c0e70e10bb1e3208a6ae619b17f48192dfc22538c04646e5e361bcf9_prof);

        
        $__internal_13c29fee82b6a3b0009d68e8e780b780d094e8cc1a6e3ecafd182665497527c1->leave($__internal_13c29fee82b6a3b0009d68e8e780b780d094e8cc1a6e3ecafd182665497527c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_39ec82048d024ba2ddd610e6962718195cc1fb240a4a25681faf29a48749f11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ec82048d024ba2ddd610e6962718195cc1fb240a4a25681faf29a48749f11c->enter($__internal_39ec82048d024ba2ddd610e6962718195cc1fb240a4a25681faf29a48749f11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f1dbb62438828ca838209c8a41c41c32a6c5f5615627898b1e7fc912e87234a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1dbb62438828ca838209c8a41c41c32a6c5f5615627898b1e7fc912e87234a->enter($__internal_0f1dbb62438828ca838209c8a41c41c32a6c5f5615627898b1e7fc912e87234a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f1dbb62438828ca838209c8a41c41c32a6c5f5615627898b1e7fc912e87234a->leave($__internal_0f1dbb62438828ca838209c8a41c41c32a6c5f5615627898b1e7fc912e87234a_prof);

        
        $__internal_39ec82048d024ba2ddd610e6962718195cc1fb240a4a25681faf29a48749f11c->leave($__internal_39ec82048d024ba2ddd610e6962718195cc1fb240a4a25681faf29a48749f11c_prof);

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
", "AppBundle:Task:delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/TodoList/src/AppBundle/Resources/views/Task/delete.html.twig");
    }
}
