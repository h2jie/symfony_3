<?php

/* AppBundle:Task:fail.html.twig */
class __TwigTemplate_a158cbc442f8116af665964d8b94b9acf9d91f2f1a911e76fb9327aff75f0ecf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Task:fail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2118e97538efc9f22c6298defab2401c3805063b5745027d051e292c492bb4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2118e97538efc9f22c6298defab2401c3805063b5745027d051e292c492bb4b2->enter($__internal_2118e97538efc9f22c6298defab2401c3805063b5745027d051e292c492bb4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:fail.html.twig"));

        $__internal_5d1b12c69c68042e28d6dde28386f0a5ad22489b3c68ca4cae728aaf8eb21e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1b12c69c68042e28d6dde28386f0a5ad22489b3c68ca4cae728aaf8eb21e96->enter($__internal_5d1b12c69c68042e28d6dde28386f0a5ad22489b3c68ca4cae728aaf8eb21e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:fail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2118e97538efc9f22c6298defab2401c3805063b5745027d051e292c492bb4b2->leave($__internal_2118e97538efc9f22c6298defab2401c3805063b5745027d051e292c492bb4b2_prof);

        
        $__internal_5d1b12c69c68042e28d6dde28386f0a5ad22489b3c68ca4cae728aaf8eb21e96->leave($__internal_5d1b12c69c68042e28d6dde28386f0a5ad22489b3c68ca4cae728aaf8eb21e96_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_945014da106389e3ce49a018ee1fbbd68d99d0711ccf140404df1cf0c569edbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945014da106389e3ce49a018ee1fbbd68d99d0711ccf140404df1cf0c569edbe->enter($__internal_945014da106389e3ce49a018ee1fbbd68d99d0711ccf140404df1cf0c569edbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_982e0ad9e3e3e4eb15b5e49ca718117db739205225f7ebc57eba7dde0a5d914a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982e0ad9e3e3e4eb15b5e49ca718117db739205225f7ebc57eba7dde0a5d914a->enter($__internal_982e0ad9e3e3e4eb15b5e49ca718117db739205225f7ebc57eba7dde0a5d914a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:create";
        
        $__internal_982e0ad9e3e3e4eb15b5e49ca718117db739205225f7ebc57eba7dde0a5d914a->leave($__internal_982e0ad9e3e3e4eb15b5e49ca718117db739205225f7ebc57eba7dde0a5d914a_prof);

        
        $__internal_945014da106389e3ce49a018ee1fbbd68d99d0711ccf140404df1cf0c569edbe->leave($__internal_945014da106389e3ce49a018ee1fbbd68d99d0711ccf140404df1cf0c569edbe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a94c58cc4af502fd02c9fde6aaafc673f594b71f66637962622f73b3792f8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a94c58cc4af502fd02c9fde6aaafc673f594b71f66637962622f73b3792f8ee->enter($__internal_4a94c58cc4af502fd02c9fde6aaafc673f594b71f66637962622f73b3792f8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d999c6b2ae87d4bb9fe658026fb07c15910551d603a05715b91cab359bbc7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d999c6b2ae87d4bb9fe658026fb07c15910551d603a05715b91cab359bbc7fc->enter($__internal_6d999c6b2ae87d4bb9fe658026fb07c15910551d603a05715b91cab359bbc7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>No encontrado el elemento con el id</h1>

";
        
        $__internal_6d999c6b2ae87d4bb9fe658026fb07c15910551d603a05715b91cab359bbc7fc->leave($__internal_6d999c6b2ae87d4bb9fe658026fb07c15910551d603a05715b91cab359bbc7fc_prof);

        
        $__internal_4a94c58cc4af502fd02c9fde6aaafc673f594b71f66637962622f73b3792f8ee->leave($__internal_4a94c58cc4af502fd02c9fde6aaafc673f594b71f66637962622f73b3792f8ee_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:fail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Task:create{% endblock %}

{% block body %}

<h1>No encontrado el elemento con el id</h1>

{% endblock %}
", "AppBundle:Task:fail.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/src/AppBundle/Resources/views/Task/fail.html.twig");
    }
}
