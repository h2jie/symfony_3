<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_440052636673501027f2ccee8006eb2f949d3bfff4de277fc05e94b3b877842d extends Twig_Template
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
        $__internal_017cad6cce2fa5b89a63741f154d6171189e8753a9543177b6fa418dcd75ad7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017cad6cce2fa5b89a63741f154d6171189e8753a9543177b6fa418dcd75ad7b->enter($__internal_017cad6cce2fa5b89a63741f154d6171189e8753a9543177b6fa418dcd75ad7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_956a8d730522e5369fb07c7a65b2ba368ae229336f4b18a5c40fe0ad656a1b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956a8d730522e5369fb07c7a65b2ba368ae229336f4b18a5c40fe0ad656a1b13->enter($__internal_956a8d730522e5369fb07c7a65b2ba368ae229336f4b18a5c40fe0ad656a1b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_017cad6cce2fa5b89a63741f154d6171189e8753a9543177b6fa418dcd75ad7b->leave($__internal_017cad6cce2fa5b89a63741f154d6171189e8753a9543177b6fa418dcd75ad7b_prof);

        
        $__internal_956a8d730522e5369fb07c7a65b2ba368ae229336f4b18a5c40fe0ad656a1b13->leave($__internal_956a8d730522e5369fb07c7a65b2ba368ae229336f4b18a5c40fe0ad656a1b13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
