<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_2955bad52c9bf62557f552bbfdeaec2ca9ee57822d0a7746a35c577cb2b4cd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2955bad52c9bf62557f552bbfdeaec2ca9ee57822d0a7746a35c577cb2b4cd02->enter($__internal_2955bad52c9bf62557f552bbfdeaec2ca9ee57822d0a7746a35c577cb2b4cd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8757965ddb2fd463cf4c72414d19a4b1be870f353d2e61c55d48578947b3b732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8757965ddb2fd463cf4c72414d19a4b1be870f353d2e61c55d48578947b3b732->enter($__internal_8757965ddb2fd463cf4c72414d19a4b1be870f353d2e61c55d48578947b3b732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2955bad52c9bf62557f552bbfdeaec2ca9ee57822d0a7746a35c577cb2b4cd02->leave($__internal_2955bad52c9bf62557f552bbfdeaec2ca9ee57822d0a7746a35c577cb2b4cd02_prof);

        
        $__internal_8757965ddb2fd463cf4c72414d19a4b1be870f353d2e61c55d48578947b3b732->leave($__internal_8757965ddb2fd463cf4c72414d19a4b1be870f353d2e61c55d48578947b3b732_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_390d366f2993048d8c0731a6525757dc2893f20f403b858adff807d91f6308b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390d366f2993048d8c0731a6525757dc2893f20f403b858adff807d91f6308b9->enter($__internal_390d366f2993048d8c0731a6525757dc2893f20f403b858adff807d91f6308b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cf7d3b816a19f49ff5ce2a3a7689356605520933b36b1292383ca83a12d55a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7d3b816a19f49ff5ce2a3a7689356605520933b36b1292383ca83a12d55a5e->enter($__internal_cf7d3b816a19f49ff5ce2a3a7689356605520933b36b1292383ca83a12d55a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cf7d3b816a19f49ff5ce2a3a7689356605520933b36b1292383ca83a12d55a5e->leave($__internal_cf7d3b816a19f49ff5ce2a3a7689356605520933b36b1292383ca83a12d55a5e_prof);

        
        $__internal_390d366f2993048d8c0731a6525757dc2893f20f403b858adff807d91f6308b9->leave($__internal_390d366f2993048d8c0731a6525757dc2893f20f403b858adff807d91f6308b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40d7c62093b829ed1b3ae1aa5e2a8345e279190d743f78b6bebc1288dc3f09a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d7c62093b829ed1b3ae1aa5e2a8345e279190d743f78b6bebc1288dc3f09a7->enter($__internal_40d7c62093b829ed1b3ae1aa5e2a8345e279190d743f78b6bebc1288dc3f09a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81e1f826c6b94a1e4e93eb7bc4788399b114f6345ec56aea274647821dc756eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e1f826c6b94a1e4e93eb7bc4788399b114f6345ec56aea274647821dc756eb->enter($__internal_81e1f826c6b94a1e4e93eb7bc4788399b114f6345ec56aea274647821dc756eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_81e1f826c6b94a1e4e93eb7bc4788399b114f6345ec56aea274647821dc756eb->leave($__internal_81e1f826c6b94a1e4e93eb7bc4788399b114f6345ec56aea274647821dc756eb_prof);

        
        $__internal_40d7c62093b829ed1b3ae1aa5e2a8345e279190d743f78b6bebc1288dc3f09a7->leave($__internal_40d7c62093b829ed1b3ae1aa5e2a8345e279190d743f78b6bebc1288dc3f09a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c8c4da8ad829c451b19f64b2a7f08d5aa3bf158a12a43028ea68642abd52bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c8c4da8ad829c451b19f64b2a7f08d5aa3bf158a12a43028ea68642abd52bc3->enter($__internal_3c8c4da8ad829c451b19f64b2a7f08d5aa3bf158a12a43028ea68642abd52bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d03de556463186147f2241cf04f7bc855cf6a32724a939574a9d86c74787d11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03de556463186147f2241cf04f7bc855cf6a32724a939574a9d86c74787d11f->enter($__internal_d03de556463186147f2241cf04f7bc855cf6a32724a939574a9d86c74787d11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d03de556463186147f2241cf04f7bc855cf6a32724a939574a9d86c74787d11f->leave($__internal_d03de556463186147f2241cf04f7bc855cf6a32724a939574a9d86c74787d11f_prof);

        
        $__internal_3c8c4da8ad829c451b19f64b2a7f08d5aa3bf158a12a43028ea68642abd52bc3->leave($__internal_3c8c4da8ad829c451b19f64b2a7f08d5aa3bf158a12a43028ea68642abd52bc3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/TodoList/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
