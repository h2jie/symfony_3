<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2911652c367fa8c463fb5e758f16f977e427495afe595ef7f817423d0a9174a9 extends Twig_Template
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
        $__internal_24566a0ff42a44b9fdbb6622926a2c86066938270a2c02882f14801a192552e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24566a0ff42a44b9fdbb6622926a2c86066938270a2c02882f14801a192552e6->enter($__internal_24566a0ff42a44b9fdbb6622926a2c86066938270a2c02882f14801a192552e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_478987576b1c93ffc040caccc1193c3ff44519ff10ccf2764fa7424ca8ba1084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478987576b1c93ffc040caccc1193c3ff44519ff10ccf2764fa7424ca8ba1084->enter($__internal_478987576b1c93ffc040caccc1193c3ff44519ff10ccf2764fa7424ca8ba1084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_24566a0ff42a44b9fdbb6622926a2c86066938270a2c02882f14801a192552e6->leave($__internal_24566a0ff42a44b9fdbb6622926a2c86066938270a2c02882f14801a192552e6_prof);

        
        $__internal_478987576b1c93ffc040caccc1193c3ff44519ff10ccf2764fa7424ca8ba1084->leave($__internal_478987576b1c93ffc040caccc1193c3ff44519ff10ccf2764fa7424ca8ba1084_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
