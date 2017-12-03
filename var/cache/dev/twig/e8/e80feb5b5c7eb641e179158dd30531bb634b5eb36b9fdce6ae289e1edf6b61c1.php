<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_aa83498be161242a9f91d6a22df145b34e65dacd1633e3e28a2baeb8081b4468 extends Twig_Template
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
        $__internal_c6e226c038249309c55582cbd5f12902f9afde6fb6d3aba9723a5f136992bd3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e226c038249309c55582cbd5f12902f9afde6fb6d3aba9723a5f136992bd3f->enter($__internal_c6e226c038249309c55582cbd5f12902f9afde6fb6d3aba9723a5f136992bd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ac32110f86fdef6c7b6e12d084f09efe7c46214b3cc7cb6b09cddd5a8b8ff46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac32110f86fdef6c7b6e12d084f09efe7c46214b3cc7cb6b09cddd5a8b8ff46a->enter($__internal_ac32110f86fdef6c7b6e12d084f09efe7c46214b3cc7cb6b09cddd5a8b8ff46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c6e226c038249309c55582cbd5f12902f9afde6fb6d3aba9723a5f136992bd3f->leave($__internal_c6e226c038249309c55582cbd5f12902f9afde6fb6d3aba9723a5f136992bd3f_prof);

        
        $__internal_ac32110f86fdef6c7b6e12d084f09efe7c46214b3cc7cb6b09cddd5a8b8ff46a->leave($__internal_ac32110f86fdef6c7b6e12d084f09efe7c46214b3cc7cb6b09cddd5a8b8ff46a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
