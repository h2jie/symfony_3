<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_39452b50f6ce2f90ce7e24558ebe75bdd1004890a919d234276f6f358c845606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_217081dd432eeee2881b5b1fbe807ff1f71ba4209c7e56e50c5b5679907ea41a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217081dd432eeee2881b5b1fbe807ff1f71ba4209c7e56e50c5b5679907ea41a->enter($__internal_217081dd432eeee2881b5b1fbe807ff1f71ba4209c7e56e50c5b5679907ea41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_bae664c361332a8e6b1d1a7d4f2ed3fd1e0bb0546d4c6c4e3d3828a2a71e0e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae664c361332a8e6b1d1a7d4f2ed3fd1e0bb0546d4c6c4e3d3828a2a71e0e68->enter($__internal_bae664c361332a8e6b1d1a7d4f2ed3fd1e0bb0546d4c6c4e3d3828a2a71e0e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_217081dd432eeee2881b5b1fbe807ff1f71ba4209c7e56e50c5b5679907ea41a->leave($__internal_217081dd432eeee2881b5b1fbe807ff1f71ba4209c7e56e50c5b5679907ea41a_prof);

        
        $__internal_bae664c361332a8e6b1d1a7d4f2ed3fd1e0bb0546d4c6c4e3d3828a2a71e0e68->leave($__internal_bae664c361332a8e6b1d1a7d4f2ed3fd1e0bb0546d4c6c4e3d3828a2a71e0e68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
