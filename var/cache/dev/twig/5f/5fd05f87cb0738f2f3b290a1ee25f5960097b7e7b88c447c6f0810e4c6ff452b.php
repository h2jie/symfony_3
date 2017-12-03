<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9c85e1c6dc6cd7fd4d29b0657daf3d563e349ecb6f696cf03a9b48e4804332a5 extends Twig_Template
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
        $__internal_ea5207a82f3229f4fed1b89dff1fe8736cca3bae8e0784073ce9fb06f20651f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5207a82f3229f4fed1b89dff1fe8736cca3bae8e0784073ce9fb06f20651f0->enter($__internal_ea5207a82f3229f4fed1b89dff1fe8736cca3bae8e0784073ce9fb06f20651f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_52f2541a8209407d2cc9bc6d603ac6b4f6414f2c8a71f572255e111a2af1d40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f2541a8209407d2cc9bc6d603ac6b4f6414f2c8a71f572255e111a2af1d40f->enter($__internal_52f2541a8209407d2cc9bc6d603ac6b4f6414f2c8a71f572255e111a2af1d40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ea5207a82f3229f4fed1b89dff1fe8736cca3bae8e0784073ce9fb06f20651f0->leave($__internal_ea5207a82f3229f4fed1b89dff1fe8736cca3bae8e0784073ce9fb06f20651f0_prof);

        
        $__internal_52f2541a8209407d2cc9bc6d603ac6b4f6414f2c8a71f572255e111a2af1d40f->leave($__internal_52f2541a8209407d2cc9bc6d603ac6b4f6414f2c8a71f572255e111a2af1d40f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
