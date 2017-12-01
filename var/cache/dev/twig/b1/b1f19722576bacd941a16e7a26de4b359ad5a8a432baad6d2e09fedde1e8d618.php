<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_925acae38ca4f429c96024999cd61f696bb3f0ac18effa0a1e39f21590629cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925acae38ca4f429c96024999cd61f696bb3f0ac18effa0a1e39f21590629cd8->enter($__internal_925acae38ca4f429c96024999cd61f696bb3f0ac18effa0a1e39f21590629cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_59b7c5a17e0144267718803d82767eccf7cc320181eca4d53a8548625c8b838d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b7c5a17e0144267718803d82767eccf7cc320181eca4d53a8548625c8b838d->enter($__internal_59b7c5a17e0144267718803d82767eccf7cc320181eca4d53a8548625c8b838d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_925acae38ca4f429c96024999cd61f696bb3f0ac18effa0a1e39f21590629cd8->leave($__internal_925acae38ca4f429c96024999cd61f696bb3f0ac18effa0a1e39f21590629cd8_prof);

        
        $__internal_59b7c5a17e0144267718803d82767eccf7cc320181eca4d53a8548625c8b838d->leave($__internal_59b7c5a17e0144267718803d82767eccf7cc320181eca4d53a8548625c8b838d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_08ad055f88d168169a862121360e3b2ff5ceab1eeb1e2b41d0d52b6f733f8b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ad055f88d168169a862121360e3b2ff5ceab1eeb1e2b41d0d52b6f733f8b77->enter($__internal_08ad055f88d168169a862121360e3b2ff5ceab1eeb1e2b41d0d52b6f733f8b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39231f674cc7dcc2480c7e7cf4fed550d7f15b384cb2bb2b7ad06e774a80a2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39231f674cc7dcc2480c7e7cf4fed550d7f15b384cb2bb2b7ad06e774a80a2c6->enter($__internal_39231f674cc7dcc2480c7e7cf4fed550d7f15b384cb2bb2b7ad06e774a80a2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_39231f674cc7dcc2480c7e7cf4fed550d7f15b384cb2bb2b7ad06e774a80a2c6->leave($__internal_39231f674cc7dcc2480c7e7cf4fed550d7f15b384cb2bb2b7ad06e774a80a2c6_prof);

        
        $__internal_08ad055f88d168169a862121360e3b2ff5ceab1eeb1e2b41d0d52b6f733f8b77->leave($__internal_08ad055f88d168169a862121360e3b2ff5ceab1eeb1e2b41d0d52b6f733f8b77_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89ea9642696ad231abde993dee24efe1cc57ffaf09c58df667866cfdae1d4ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ea9642696ad231abde993dee24efe1cc57ffaf09c58df667866cfdae1d4ff1->enter($__internal_89ea9642696ad231abde993dee24efe1cc57ffaf09c58df667866cfdae1d4ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a64c42ab581e0047bb25fc212962cd44a342a4d24b2c0184e018d7ee2782c261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64c42ab581e0047bb25fc212962cd44a342a4d24b2c0184e018d7ee2782c261->enter($__internal_a64c42ab581e0047bb25fc212962cd44a342a4d24b2c0184e018d7ee2782c261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a64c42ab581e0047bb25fc212962cd44a342a4d24b2c0184e018d7ee2782c261->leave($__internal_a64c42ab581e0047bb25fc212962cd44a342a4d24b2c0184e018d7ee2782c261_prof);

        
        $__internal_89ea9642696ad231abde993dee24efe1cc57ffaf09c58df667866cfdae1d4ff1->leave($__internal_89ea9642696ad231abde993dee24efe1cc57ffaf09c58df667866cfdae1d4ff1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d17e02b495d9c381fd60e69b0569c3cb728e95452610a981aaa77984da2f2214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17e02b495d9c381fd60e69b0569c3cb728e95452610a981aaa77984da2f2214->enter($__internal_d17e02b495d9c381fd60e69b0569c3cb728e95452610a981aaa77984da2f2214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a23a9ebbd0400ae453027e3007449a05e6367824303579aa97fb972c600615b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a23a9ebbd0400ae453027e3007449a05e6367824303579aa97fb972c600615b->enter($__internal_4a23a9ebbd0400ae453027e3007449a05e6367824303579aa97fb972c600615b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a23a9ebbd0400ae453027e3007449a05e6367824303579aa97fb972c600615b->leave($__internal_4a23a9ebbd0400ae453027e3007449a05e6367824303579aa97fb972c600615b_prof);

        
        $__internal_d17e02b495d9c381fd60e69b0569c3cb728e95452610a981aaa77984da2f2214->leave($__internal_d17e02b495d9c381fd60e69b0569c3cb728e95452610a981aaa77984da2f2214_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8585205d7dbb2d402ef6f1438b4e48215c508047dfc1bebe91df1e99f2ef076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8585205d7dbb2d402ef6f1438b4e48215c508047dfc1bebe91df1e99f2ef076->enter($__internal_b8585205d7dbb2d402ef6f1438b4e48215c508047dfc1bebe91df1e99f2ef076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2d83e94bc7d0f34d80b1af9d12e2071e129c4a2953970f6c95eeda9699b06129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d83e94bc7d0f34d80b1af9d12e2071e129c4a2953970f6c95eeda9699b06129->enter($__internal_2d83e94bc7d0f34d80b1af9d12e2071e129c4a2953970f6c95eeda9699b06129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2d83e94bc7d0f34d80b1af9d12e2071e129c4a2953970f6c95eeda9699b06129->leave($__internal_2d83e94bc7d0f34d80b1af9d12e2071e129c4a2953970f6c95eeda9699b06129_prof);

        
        $__internal_b8585205d7dbb2d402ef6f1438b4e48215c508047dfc1bebe91df1e99f2ef076->leave($__internal_b8585205d7dbb2d402ef6f1438b4e48215c508047dfc1bebe91df1e99f2ef076_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/TodoList/app/Resources/views/base.html.twig");
    }
}
