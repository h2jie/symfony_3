<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_7445b66dc37bb3fb69c8be1cbeea860b05b9b9d22aefc5879b2a04a2c9182bcd extends Twig_Template
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
        $__internal_cffed7b3162150bff2353ea48b3b7ccdbf53939e19e4a8e3c1897327abc5a778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffed7b3162150bff2353ea48b3b7ccdbf53939e19e4a8e3c1897327abc5a778->enter($__internal_cffed7b3162150bff2353ea48b3b7ccdbf53939e19e4a8e3c1897327abc5a778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_12c2d9fe30202d18c5b66499fb81ea0d3c718dc5b87b962aa44c334362c3afe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c2d9fe30202d18c5b66499fb81ea0d3c718dc5b87b962aa44c334362c3afe7->enter($__internal_12c2d9fe30202d18c5b66499fb81ea0d3c718dc5b87b962aa44c334362c3afe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_cffed7b3162150bff2353ea48b3b7ccdbf53939e19e4a8e3c1897327abc5a778->leave($__internal_cffed7b3162150bff2353ea48b3b7ccdbf53939e19e4a8e3c1897327abc5a778_prof);

        
        $__internal_12c2d9fe30202d18c5b66499fb81ea0d3c718dc5b87b962aa44c334362c3afe7->leave($__internal_12c2d9fe30202d18c5b66499fb81ea0d3c718dc5b87b962aa44c334362c3afe7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "TwigBundle:Exception:error.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.html.twig");
    }
}
