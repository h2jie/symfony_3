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
        $__internal_f30fd0f7fb7957e3fbcb348658e9f782cdf6af7ef215bd53139216f72d78d667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30fd0f7fb7957e3fbcb348658e9f782cdf6af7ef215bd53139216f72d78d667->enter($__internal_f30fd0f7fb7957e3fbcb348658e9f782cdf6af7ef215bd53139216f72d78d667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5a2bb8161c366212855ec443453cfa3fb9876c805e2e9bc9a8cdcdd5833c9df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2bb8161c366212855ec443453cfa3fb9876c805e2e9bc9a8cdcdd5833c9df9->enter($__internal_5a2bb8161c366212855ec443453cfa3fb9876c805e2e9bc9a8cdcdd5833c9df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
      <nav>
        <ul style=\"list-style-type: none;\">
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px;\">
                <a href=\"create\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Crear Datos</p>
                </a>
            </li>
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px\">
                <a href=\"update\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Modificar Datos</p>
                </a>
            </li>
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px\">
                <a href=\"list\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Llistar Datos</p>
                </a>
            </li>
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px\">
                <a href=\"delete\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Eliminar Datos</p>
                </a>
            </li>
        </ul>
      </nav>
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_f30fd0f7fb7957e3fbcb348658e9f782cdf6af7ef215bd53139216f72d78d667->leave($__internal_f30fd0f7fb7957e3fbcb348658e9f782cdf6af7ef215bd53139216f72d78d667_prof);

        
        $__internal_5a2bb8161c366212855ec443453cfa3fb9876c805e2e9bc9a8cdcdd5833c9df9->leave($__internal_5a2bb8161c366212855ec443453cfa3fb9876c805e2e9bc9a8cdcdd5833c9df9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4154b873226dbe871102c9d770287e7f0d854aa7dbec31f449de38e62312c38b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4154b873226dbe871102c9d770287e7f0d854aa7dbec31f449de38e62312c38b->enter($__internal_4154b873226dbe871102c9d770287e7f0d854aa7dbec31f449de38e62312c38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18f0c7a41a31457f31366b5880cd730eb3e5b1719cf0a0f7b893eb47e6ddd41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f0c7a41a31457f31366b5880cd730eb3e5b1719cf0a0f7b893eb47e6ddd41e->enter($__internal_18f0c7a41a31457f31366b5880cd730eb3e5b1719cf0a0f7b893eb47e6ddd41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_18f0c7a41a31457f31366b5880cd730eb3e5b1719cf0a0f7b893eb47e6ddd41e->leave($__internal_18f0c7a41a31457f31366b5880cd730eb3e5b1719cf0a0f7b893eb47e6ddd41e_prof);

        
        $__internal_4154b873226dbe871102c9d770287e7f0d854aa7dbec31f449de38e62312c38b->leave($__internal_4154b873226dbe871102c9d770287e7f0d854aa7dbec31f449de38e62312c38b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c6a637ddc7acc41a712fee97e36dc365e3e927f3b544865f0dd6403bb0e36cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6a637ddc7acc41a712fee97e36dc365e3e927f3b544865f0dd6403bb0e36cd->enter($__internal_3c6a637ddc7acc41a712fee97e36dc365e3e927f3b544865f0dd6403bb0e36cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_da64aeaebfd0156a78a63ba80b3b9903fa2132accbe5e995b6adeeee9c265a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da64aeaebfd0156a78a63ba80b3b9903fa2132accbe5e995b6adeeee9c265a7b->enter($__internal_da64aeaebfd0156a78a63ba80b3b9903fa2132accbe5e995b6adeeee9c265a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da64aeaebfd0156a78a63ba80b3b9903fa2132accbe5e995b6adeeee9c265a7b->leave($__internal_da64aeaebfd0156a78a63ba80b3b9903fa2132accbe5e995b6adeeee9c265a7b_prof);

        
        $__internal_3c6a637ddc7acc41a712fee97e36dc365e3e927f3b544865f0dd6403bb0e36cd->leave($__internal_3c6a637ddc7acc41a712fee97e36dc365e3e927f3b544865f0dd6403bb0e36cd_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_c464ff0431637c0bb1795df3dd645232d3c9c8a1008beab27f2b5bed37263d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c464ff0431637c0bb1795df3dd645232d3c9c8a1008beab27f2b5bed37263d46->enter($__internal_c464ff0431637c0bb1795df3dd645232d3c9c8a1008beab27f2b5bed37263d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08ade43b68532c2851fa8e42c5179d577c16fb797a897492a27008b9cbeea131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ade43b68532c2851fa8e42c5179d577c16fb797a897492a27008b9cbeea131->enter($__internal_08ade43b68532c2851fa8e42c5179d577c16fb797a897492a27008b9cbeea131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08ade43b68532c2851fa8e42c5179d577c16fb797a897492a27008b9cbeea131->leave($__internal_08ade43b68532c2851fa8e42c5179d577c16fb797a897492a27008b9cbeea131_prof);

        
        $__internal_c464ff0431637c0bb1795df3dd645232d3c9c8a1008beab27f2b5bed37263d46->leave($__internal_c464ff0431637c0bb1795df3dd645232d3c9c8a1008beab27f2b5bed37263d46_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d723f04c05e87978e95f8f5b90dc7bd3076be4cde248917e640374a6c4c46565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d723f04c05e87978e95f8f5b90dc7bd3076be4cde248917e640374a6c4c46565->enter($__internal_d723f04c05e87978e95f8f5b90dc7bd3076be4cde248917e640374a6c4c46565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_95ef194cac98021f667ddc5a64df9acc3e4b11ec2b349764017585559851dcb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ef194cac98021f667ddc5a64df9acc3e4b11ec2b349764017585559851dcb7->enter($__internal_95ef194cac98021f667ddc5a64df9acc3e4b11ec2b349764017585559851dcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_95ef194cac98021f667ddc5a64df9acc3e4b11ec2b349764017585559851dcb7->leave($__internal_95ef194cac98021f667ddc5a64df9acc3e4b11ec2b349764017585559851dcb7_prof);

        
        $__internal_d723f04c05e87978e95f8f5b90dc7bd3076be4cde248917e640374a6c4c46565->leave($__internal_d723f04c05e87978e95f8f5b90dc7bd3076be4cde248917e640374a6c4c46565_prof);

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
        return array (  141 => 35,  124 => 34,  107 => 6,  89 => 5,  77 => 36,  74 => 35,  72 => 34,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
      <nav>
        <ul style=\"list-style-type: none;\">
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px;\">
                <a href=\"create\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Crear Datos</p>
                </a>
            </li>
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px\">
                <a href=\"update\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Modificar Datos</p>
                </a>
            </li>
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px\">
                <a href=\"list\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Llistar Datos</p>
                </a>
            </li>
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px\">
                <a href=\"delete\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Eliminar Datos</p>
                </a>
            </li>
        </ul>
      </nav>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/symfony_3/app/Resources/views/base.html.twig");
    }
}
