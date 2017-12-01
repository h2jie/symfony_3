<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_d067bf3f873691f7689711d8d6d414c47ea571e3eef82a1f51f26cf08ceddce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d067bf3f873691f7689711d8d6d414c47ea571e3eef82a1f51f26cf08ceddce7->enter($__internal_d067bf3f873691f7689711d8d6d414c47ea571e3eef82a1f51f26cf08ceddce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_aeba4fddaf4325727692b8c7d33b0cbe04a2a23d374579d1651ff5ca1e1a11e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeba4fddaf4325727692b8c7d33b0cbe04a2a23d374579d1651ff5ca1e1a11e2->enter($__internal_aeba4fddaf4325727692b8c7d33b0cbe04a2a23d374579d1651ff5ca1e1a11e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d067bf3f873691f7689711d8d6d414c47ea571e3eef82a1f51f26cf08ceddce7->leave($__internal_d067bf3f873691f7689711d8d6d414c47ea571e3eef82a1f51f26cf08ceddce7_prof);

        
        $__internal_aeba4fddaf4325727692b8c7d33b0cbe04a2a23d374579d1651ff5ca1e1a11e2->leave($__internal_aeba4fddaf4325727692b8c7d33b0cbe04a2a23d374579d1651ff5ca1e1a11e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e8f302369cddb4479ca9117f4b2c8d47d984e56281341608db03356bc3853b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8f302369cddb4479ca9117f4b2c8d47d984e56281341608db03356bc3853b3->enter($__internal_9e8f302369cddb4479ca9117f4b2c8d47d984e56281341608db03356bc3853b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf673990db0e4d201fd9420232814f67650a1ae0e45db6918c434696bd787775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf673990db0e4d201fd9420232814f67650a1ae0e45db6918c434696bd787775->enter($__internal_cf673990db0e4d201fd9420232814f67650a1ae0e45db6918c434696bd787775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cf673990db0e4d201fd9420232814f67650a1ae0e45db6918c434696bd787775->leave($__internal_cf673990db0e4d201fd9420232814f67650a1ae0e45db6918c434696bd787775_prof);

        
        $__internal_9e8f302369cddb4479ca9117f4b2c8d47d984e56281341608db03356bc3853b3->leave($__internal_9e8f302369cddb4479ca9117f4b2c8d47d984e56281341608db03356bc3853b3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46dcb017d2060d09bb6b21c6c1087b00176f4442b088863deb1a019296165f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46dcb017d2060d09bb6b21c6c1087b00176f4442b088863deb1a019296165f89->enter($__internal_46dcb017d2060d09bb6b21c6c1087b00176f4442b088863deb1a019296165f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1bc1de2fb0e45cd4629c9ac5ac4a361835af910b63c0f68a78564ed91f9b3d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc1de2fb0e45cd4629c9ac5ac4a361835af910b63c0f68a78564ed91f9b3d1b->enter($__internal_1bc1de2fb0e45cd4629c9ac5ac4a361835af910b63c0f68a78564ed91f9b3d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1bc1de2fb0e45cd4629c9ac5ac4a361835af910b63c0f68a78564ed91f9b3d1b->leave($__internal_1bc1de2fb0e45cd4629c9ac5ac4a361835af910b63c0f68a78564ed91f9b3d1b_prof);

        
        $__internal_46dcb017d2060d09bb6b21c6c1087b00176f4442b088863deb1a019296165f89->leave($__internal_46dcb017d2060d09bb6b21c6c1087b00176f4442b088863deb1a019296165f89_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a5373f051abd181bffe4ac3b94b6c7eaa4fd14672b5edfc5c189999d9679345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5373f051abd181bffe4ac3b94b6c7eaa4fd14672b5edfc5c189999d9679345->enter($__internal_7a5373f051abd181bffe4ac3b94b6c7eaa4fd14672b5edfc5c189999d9679345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45c6e4b332b64c11b8d6c7b750db5a93fe71f1a12d84a86728548f8816a44c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c6e4b332b64c11b8d6c7b750db5a93fe71f1a12d84a86728548f8816a44c49->enter($__internal_45c6e4b332b64c11b8d6c7b750db5a93fe71f1a12d84a86728548f8816a44c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_45c6e4b332b64c11b8d6c7b750db5a93fe71f1a12d84a86728548f8816a44c49->leave($__internal_45c6e4b332b64c11b8d6c7b750db5a93fe71f1a12d84a86728548f8816a44c49_prof);

        
        $__internal_7a5373f051abd181bffe4ac3b94b6c7eaa4fd14672b5edfc5c189999d9679345->leave($__internal_7a5373f051abd181bffe4ac3b94b6c7eaa4fd14672b5edfc5c189999d9679345_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/TodoList/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
