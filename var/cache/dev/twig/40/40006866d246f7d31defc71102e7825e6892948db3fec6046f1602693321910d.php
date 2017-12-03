<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_19dfb68d851ddd05e5bd3f446c5cecc8ca30befd0bb86cee9a5c57f648f371d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_755414d1ca155ae73151886c4281472973462a0905a82e3d58b7e274e480927c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755414d1ca155ae73151886c4281472973462a0905a82e3d58b7e274e480927c->enter($__internal_755414d1ca155ae73151886c4281472973462a0905a82e3d58b7e274e480927c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5d0b30bf1bf24ddd90005195a8a1838b323b01d24cc482556bdb2e5af27bf282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0b30bf1bf24ddd90005195a8a1838b323b01d24cc482556bdb2e5af27bf282->enter($__internal_5d0b30bf1bf24ddd90005195a8a1838b323b01d24cc482556bdb2e5af27bf282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_755414d1ca155ae73151886c4281472973462a0905a82e3d58b7e274e480927c->leave($__internal_755414d1ca155ae73151886c4281472973462a0905a82e3d58b7e274e480927c_prof);

        
        $__internal_5d0b30bf1bf24ddd90005195a8a1838b323b01d24cc482556bdb2e5af27bf282->leave($__internal_5d0b30bf1bf24ddd90005195a8a1838b323b01d24cc482556bdb2e5af27bf282_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_800703df380d7387f9866e24fe23fd65feea55ab70f01ad9c94c51d7ee4577ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800703df380d7387f9866e24fe23fd65feea55ab70f01ad9c94c51d7ee4577ee->enter($__internal_800703df380d7387f9866e24fe23fd65feea55ab70f01ad9c94c51d7ee4577ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7db9d1abb9a89fe13d94fd0fea3202ffd4475c988530b0867c698443bb2dad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7db9d1abb9a89fe13d94fd0fea3202ffd4475c988530b0867c698443bb2dad7->enter($__internal_b7db9d1abb9a89fe13d94fd0fea3202ffd4475c988530b0867c698443bb2dad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b7db9d1abb9a89fe13d94fd0fea3202ffd4475c988530b0867c698443bb2dad7->leave($__internal_b7db9d1abb9a89fe13d94fd0fea3202ffd4475c988530b0867c698443bb2dad7_prof);

        
        $__internal_800703df380d7387f9866e24fe23fd65feea55ab70f01ad9c94c51d7ee4577ee->leave($__internal_800703df380d7387f9866e24fe23fd65feea55ab70f01ad9c94c51d7ee4577ee_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ed40af9f0349241480a45ee748a5ee6b427e6a92ea185f3fb11a27ecb815515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed40af9f0349241480a45ee748a5ee6b427e6a92ea185f3fb11a27ecb815515->enter($__internal_5ed40af9f0349241480a45ee748a5ee6b427e6a92ea185f3fb11a27ecb815515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dde00443fa27f4c3dc6fd873c82de86488046eddc38d5f62ce6bdacc49226f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde00443fa27f4c3dc6fd873c82de86488046eddc38d5f62ce6bdacc49226f79->enter($__internal_dde00443fa27f4c3dc6fd873c82de86488046eddc38d5f62ce6bdacc49226f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_dde00443fa27f4c3dc6fd873c82de86488046eddc38d5f62ce6bdacc49226f79->leave($__internal_dde00443fa27f4c3dc6fd873c82de86488046eddc38d5f62ce6bdacc49226f79_prof);

        
        $__internal_5ed40af9f0349241480a45ee748a5ee6b427e6a92ea185f3fb11a27ecb815515->leave($__internal_5ed40af9f0349241480a45ee748a5ee6b427e6a92ea185f3fb11a27ecb815515_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
