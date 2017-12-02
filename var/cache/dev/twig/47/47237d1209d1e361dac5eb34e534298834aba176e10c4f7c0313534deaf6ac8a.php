<?php

/* AppBundle:Task:list.html.twig */
class __TwigTemplate_fe0fa45974082fe27ef0d525a1d771f0d6e7d6c3fbd7c29c4466395d41dbc131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Task:list.html.twig", 1);
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
        $__internal_d6626f5185fd5ff29cb9ed6587db2b0cac2cd3d34735c75153b674ba742c83e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6626f5185fd5ff29cb9ed6587db2b0cac2cd3d34735c75153b674ba742c83e1->enter($__internal_d6626f5185fd5ff29cb9ed6587db2b0cac2cd3d34735c75153b674ba742c83e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:list.html.twig"));

        $__internal_bfa57f8e2e1b571e8813d325ba48defe098377d410b8c57b26cb5b5f2c8d7d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa57f8e2e1b571e8813d325ba48defe098377d410b8c57b26cb5b5f2c8d7d01->enter($__internal_bfa57f8e2e1b571e8813d325ba48defe098377d410b8c57b26cb5b5f2c8d7d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6626f5185fd5ff29cb9ed6587db2b0cac2cd3d34735c75153b674ba742c83e1->leave($__internal_d6626f5185fd5ff29cb9ed6587db2b0cac2cd3d34735c75153b674ba742c83e1_prof);

        
        $__internal_bfa57f8e2e1b571e8813d325ba48defe098377d410b8c57b26cb5b5f2c8d7d01->leave($__internal_bfa57f8e2e1b571e8813d325ba48defe098377d410b8c57b26cb5b5f2c8d7d01_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60ab754ce79fcc8a372ef530550497aec7a53fdaf96ba343b5969d0e2d595e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ab754ce79fcc8a372ef530550497aec7a53fdaf96ba343b5969d0e2d595e33->enter($__internal_60ab754ce79fcc8a372ef530550497aec7a53fdaf96ba343b5969d0e2d595e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9fef6d43b051a4080c56d4d362f2f028cab2a67f7372ea9e2015cd0cb583865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fef6d43b051a4080c56d4d362f2f028cab2a67f7372ea9e2015cd0cb583865->enter($__internal_b9fef6d43b051a4080c56d4d362f2f028cab2a67f7372ea9e2015cd0cb583865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:list";
        
        $__internal_b9fef6d43b051a4080c56d4d362f2f028cab2a67f7372ea9e2015cd0cb583865->leave($__internal_b9fef6d43b051a4080c56d4d362f2f028cab2a67f7372ea9e2015cd0cb583865_prof);

        
        $__internal_60ab754ce79fcc8a372ef530550497aec7a53fdaf96ba343b5969d0e2d595e33->leave($__internal_60ab754ce79fcc8a372ef530550497aec7a53fdaf96ba343b5969d0e2d595e33_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a804271446461b9f714d45a4712e87ad1ae8ce9c9d0eedcdff0e91b022497eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a804271446461b9f714d45a4712e87ad1ae8ce9c9d0eedcdff0e91b022497eef->enter($__internal_a804271446461b9f714d45a4712e87ad1ae8ce9c9d0eedcdff0e91b022497eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_573cc54d3c386b8bed8d5c84e80059cd3dde6b8a237602e09b1520572a619034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573cc54d3c386b8bed8d5c84e80059cd3dde6b8a237602e09b1520572a619034->enter($__internal_573cc54d3c386b8bed8d5c84e80059cd3dde6b8a237602e09b1520572a619034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <h1>Welcome to the Task:list page</h1>
  <table >
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Task"] ?? $this->getContext($context, "Task")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 9
            echo "      <tr style=\"border:1px\">
          <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "      <tr>
          <td>No hay resultados.</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </table>
";
        
        $__internal_573cc54d3c386b8bed8d5c84e80059cd3dde6b8a237602e09b1520572a619034->leave($__internal_573cc54d3c386b8bed8d5c84e80059cd3dde6b8a237602e09b1520572a619034_prof);

        
        $__internal_a804271446461b9f714d45a4712e87ad1ae8ce9c9d0eedcdff0e91b022497eef->leave($__internal_a804271446461b9f714d45a4712e87ad1ae8ce9c9d0eedcdff0e91b022497eef_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 19,  96 => 15,  88 => 12,  84 => 11,  80 => 10,  77 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Task:list{% endblock %}

{% block body %}
  <h1>Welcome to the Task:list page</h1>
  <table >
    {% for task in Task %}
      <tr style=\"border:1px\">
          <td>{{task.id}}</td>
          <td>{{task.title}}</td>
          <td>{{task.date|date('Y-m-d H:i:s')}}</td>
      </tr>
    {% else %}
      <tr>
          <td>No hay resultados.</td>
      </tr>
    {% endfor %}
  </table>
{% endblock %}
", "AppBundle:Task:list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/TodoList/src/AppBundle/Resources/views/Task/list.html.twig");
    }
}
