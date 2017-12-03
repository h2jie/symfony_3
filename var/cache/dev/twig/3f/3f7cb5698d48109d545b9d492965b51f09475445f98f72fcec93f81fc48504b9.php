<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0c33a369ff4379e84e79ca047a9bd0f8d25a0a2094943a9e180983137ce969ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1477870d47b1531552b8fe15bb36360ceef8f60fe8cf314d1b8b7a923bd3c641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1477870d47b1531552b8fe15bb36360ceef8f60fe8cf314d1b8b7a923bd3c641->enter($__internal_1477870d47b1531552b8fe15bb36360ceef8f60fe8cf314d1b8b7a923bd3c641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_dfd3cda2d1abf9a634bc3ec22f1c7d7aafcfd2546d78042f454ec7fbf4a89794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd3cda2d1abf9a634bc3ec22f1c7d7aafcfd2546d78042f454ec7fbf4a89794->enter($__internal_dfd3cda2d1abf9a634bc3ec22f1c7d7aafcfd2546d78042f454ec7fbf4a89794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1477870d47b1531552b8fe15bb36360ceef8f60fe8cf314d1b8b7a923bd3c641->leave($__internal_1477870d47b1531552b8fe15bb36360ceef8f60fe8cf314d1b8b7a923bd3c641_prof);

        
        $__internal_dfd3cda2d1abf9a634bc3ec22f1c7d7aafcfd2546d78042f454ec7fbf4a89794->leave($__internal_dfd3cda2d1abf9a634bc3ec22f1c7d7aafcfd2546d78042f454ec7fbf4a89794_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57203e36194dbc97b8680a362b6bda3cb02ee9907d47cf7a29f4d80deb808f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57203e36194dbc97b8680a362b6bda3cb02ee9907d47cf7a29f4d80deb808f82->enter($__internal_57203e36194dbc97b8680a362b6bda3cb02ee9907d47cf7a29f4d80deb808f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3b8eef4c60186dad51d0fc61679021e64b16b2b6fea6b6d48e5dd4dd8205732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b8eef4c60186dad51d0fc61679021e64b16b2b6fea6b6d48e5dd4dd8205732->enter($__internal_a3b8eef4c60186dad51d0fc61679021e64b16b2b6fea6b6d48e5dd4dd8205732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a3b8eef4c60186dad51d0fc61679021e64b16b2b6fea6b6d48e5dd4dd8205732->leave($__internal_a3b8eef4c60186dad51d0fc61679021e64b16b2b6fea6b6d48e5dd4dd8205732_prof);

        
        $__internal_57203e36194dbc97b8680a362b6bda3cb02ee9907d47cf7a29f4d80deb808f82->leave($__internal_57203e36194dbc97b8680a362b6bda3cb02ee9907d47cf7a29f4d80deb808f82_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d0ab63ae1e4fc2cd89b1285b90cde9882d1b4ac8cf175b8c0c92344b40e124d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0ab63ae1e4fc2cd89b1285b90cde9882d1b4ac8cf175b8c0c92344b40e124d->enter($__internal_7d0ab63ae1e4fc2cd89b1285b90cde9882d1b4ac8cf175b8c0c92344b40e124d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee7905831d27648faa0ae4292d2edb4e2279fbd1e1a595f0eee8490a0d8c9547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7905831d27648faa0ae4292d2edb4e2279fbd1e1a595f0eee8490a0d8c9547->enter($__internal_ee7905831d27648faa0ae4292d2edb4e2279fbd1e1a595f0eee8490a0d8c9547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ee7905831d27648faa0ae4292d2edb4e2279fbd1e1a595f0eee8490a0d8c9547->leave($__internal_ee7905831d27648faa0ae4292d2edb4e2279fbd1e1a595f0eee8490a0d8c9547_prof);

        
        $__internal_7d0ab63ae1e4fc2cd89b1285b90cde9882d1b4ac8cf175b8c0c92344b40e124d->leave($__internal_7d0ab63ae1e4fc2cd89b1285b90cde9882d1b4ac8cf175b8c0c92344b40e124d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
