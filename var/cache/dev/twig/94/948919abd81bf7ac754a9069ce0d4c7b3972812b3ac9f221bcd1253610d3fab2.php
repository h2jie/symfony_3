<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_22b1ee51354d38bbec455b13ce2f0c8f15d791a7a7830730ca0c6e67d5856847 extends Twig_Template
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
        $__internal_1f32963c8cf30ae6f9f3051f3cbce9fb2f1470941d926a0cd2d1431f3548a1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f32963c8cf30ae6f9f3051f3cbce9fb2f1470941d926a0cd2d1431f3548a1c7->enter($__internal_1f32963c8cf30ae6f9f3051f3cbce9fb2f1470941d926a0cd2d1431f3548a1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d02ab556f2ba002a29a0b55fccaa50590f316a8b9e938f6db6048cfecd4b5b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02ab556f2ba002a29a0b55fccaa50590f316a8b9e938f6db6048cfecd4b5b44->enter($__internal_d02ab556f2ba002a29a0b55fccaa50590f316a8b9e938f6db6048cfecd4b5b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1f32963c8cf30ae6f9f3051f3cbce9fb2f1470941d926a0cd2d1431f3548a1c7->leave($__internal_1f32963c8cf30ae6f9f3051f3cbce9fb2f1470941d926a0cd2d1431f3548a1c7_prof);

        
        $__internal_d02ab556f2ba002a29a0b55fccaa50590f316a8b9e938f6db6048cfecd4b5b44->leave($__internal_d02ab556f2ba002a29a0b55fccaa50590f316a8b9e938f6db6048cfecd4b5b44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
