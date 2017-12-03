<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9fd947dfeb27cabacb19dc46a8c20221a9abec13052f6fef0f527f842fb0c385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd947dfeb27cabacb19dc46a8c20221a9abec13052f6fef0f527f842fb0c385->enter($__internal_9fd947dfeb27cabacb19dc46a8c20221a9abec13052f6fef0f527f842fb0c385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_7578fe61be4fe2cc4e5dd1a09a71dbe8b522f454f3d4988cb9292e8133fcc40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7578fe61be4fe2cc4e5dd1a09a71dbe8b522f454f3d4988cb9292e8133fcc40f->enter($__internal_7578fe61be4fe2cc4e5dd1a09a71dbe8b522f454f3d4988cb9292e8133fcc40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fd947dfeb27cabacb19dc46a8c20221a9abec13052f6fef0f527f842fb0c385->leave($__internal_9fd947dfeb27cabacb19dc46a8c20221a9abec13052f6fef0f527f842fb0c385_prof);

        
        $__internal_7578fe61be4fe2cc4e5dd1a09a71dbe8b522f454f3d4988cb9292e8133fcc40f->leave($__internal_7578fe61be4fe2cc4e5dd1a09a71dbe8b522f454f3d4988cb9292e8133fcc40f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_413ea572e2636b91499582899799636cecb80d94d347b300dffed6b28c709b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413ea572e2636b91499582899799636cecb80d94d347b300dffed6b28c709b91->enter($__internal_413ea572e2636b91499582899799636cecb80d94d347b300dffed6b28c709b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_87dd5ed50f16c38dec733b18c2a255dbb7d94ac40988faec09561c895ef14e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dd5ed50f16c38dec733b18c2a255dbb7d94ac40988faec09561c895ef14e7c->enter($__internal_87dd5ed50f16c38dec733b18c2a255dbb7d94ac40988faec09561c895ef14e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_87dd5ed50f16c38dec733b18c2a255dbb7d94ac40988faec09561c895ef14e7c->leave($__internal_87dd5ed50f16c38dec733b18c2a255dbb7d94ac40988faec09561c895ef14e7c_prof);

        
        $__internal_413ea572e2636b91499582899799636cecb80d94d347b300dffed6b28c709b91->leave($__internal_413ea572e2636b91499582899799636cecb80d94d347b300dffed6b28c709b91_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bac69a3d49e362fb9c597f20ed6c1002f9a95965d58c850f47301da367dd448f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac69a3d49e362fb9c597f20ed6c1002f9a95965d58c850f47301da367dd448f->enter($__internal_bac69a3d49e362fb9c597f20ed6c1002f9a95965d58c850f47301da367dd448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_305e9c26e9153856c4a7320ec1ba48c33f20d736b34611307797a53a84abb0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305e9c26e9153856c4a7320ec1ba48c33f20d736b34611307797a53a84abb0d7->enter($__internal_305e9c26e9153856c4a7320ec1ba48c33f20d736b34611307797a53a84abb0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_305e9c26e9153856c4a7320ec1ba48c33f20d736b34611307797a53a84abb0d7->leave($__internal_305e9c26e9153856c4a7320ec1ba48c33f20d736b34611307797a53a84abb0d7_prof);

        
        $__internal_bac69a3d49e362fb9c597f20ed6c1002f9a95965d58c850f47301da367dd448f->leave($__internal_bac69a3d49e362fb9c597f20ed6c1002f9a95965d58c850f47301da367dd448f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b572ed32b31caa612b50d7fc23ec332e7618aad245c43bbe569a65ae2391df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b572ed32b31caa612b50d7fc23ec332e7618aad245c43bbe569a65ae2391df9->enter($__internal_3b572ed32b31caa612b50d7fc23ec332e7618aad245c43bbe569a65ae2391df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6c24aa9cf113854841b462c32c3136f3619f1a9304d08348446d07cb08712d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c24aa9cf113854841b462c32c3136f3619f1a9304d08348446d07cb08712d9->enter($__internal_a6c24aa9cf113854841b462c32c3136f3619f1a9304d08348446d07cb08712d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a6c24aa9cf113854841b462c32c3136f3619f1a9304d08348446d07cb08712d9->leave($__internal_a6c24aa9cf113854841b462c32c3136f3619f1a9304d08348446d07cb08712d9_prof);

        
        $__internal_3b572ed32b31caa612b50d7fc23ec332e7618aad245c43bbe569a65ae2391df9->leave($__internal_3b572ed32b31caa612b50d7fc23ec332e7618aad245c43bbe569a65ae2391df9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
