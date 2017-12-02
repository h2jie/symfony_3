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
        $__internal_404bf4225ad36e45eee329214452952df7b2dabdddc26efbd0c93169561d6b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404bf4225ad36e45eee329214452952df7b2dabdddc26efbd0c93169561d6b95->enter($__internal_404bf4225ad36e45eee329214452952df7b2dabdddc26efbd0c93169561d6b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:list.html.twig"));

        $__internal_bfb4f6b2588e6a6c71d478f88222271bd9b2c575ff8f094ec7ec1fdab2804234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb4f6b2588e6a6c71d478f88222271bd9b2c575ff8f094ec7ec1fdab2804234->enter($__internal_bfb4f6b2588e6a6c71d478f88222271bd9b2c575ff8f094ec7ec1fdab2804234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_404bf4225ad36e45eee329214452952df7b2dabdddc26efbd0c93169561d6b95->leave($__internal_404bf4225ad36e45eee329214452952df7b2dabdddc26efbd0c93169561d6b95_prof);

        
        $__internal_bfb4f6b2588e6a6c71d478f88222271bd9b2c575ff8f094ec7ec1fdab2804234->leave($__internal_bfb4f6b2588e6a6c71d478f88222271bd9b2c575ff8f094ec7ec1fdab2804234_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7a6ad7f6e1f565bfc0b3373c44337195dd557c8827c3d5ef8faf0168c1039e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a6ad7f6e1f565bfc0b3373c44337195dd557c8827c3d5ef8faf0168c1039e9->enter($__internal_b7a6ad7f6e1f565bfc0b3373c44337195dd557c8827c3d5ef8faf0168c1039e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97d153091bace91cf72b2a1641bce3763d8d9d0a1095574db841111ad07c310e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d153091bace91cf72b2a1641bce3763d8d9d0a1095574db841111ad07c310e->enter($__internal_97d153091bace91cf72b2a1641bce3763d8d9d0a1095574db841111ad07c310e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:list";
        
        $__internal_97d153091bace91cf72b2a1641bce3763d8d9d0a1095574db841111ad07c310e->leave($__internal_97d153091bace91cf72b2a1641bce3763d8d9d0a1095574db841111ad07c310e_prof);

        
        $__internal_b7a6ad7f6e1f565bfc0b3373c44337195dd557c8827c3d5ef8faf0168c1039e9->leave($__internal_b7a6ad7f6e1f565bfc0b3373c44337195dd557c8827c3d5ef8faf0168c1039e9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_888bb302e9d62254ec31920b64e7ae741a51012eadab43e1af22e538640e68c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888bb302e9d62254ec31920b64e7ae741a51012eadab43e1af22e538640e68c7->enter($__internal_888bb302e9d62254ec31920b64e7ae741a51012eadab43e1af22e538640e68c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db9448ec15b594c78684a5e95f847b7408c0503d1e7a41e92c88fc9e358e5cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9448ec15b594c78684a5e95f847b7408c0503d1e7a41e92c88fc9e358e5cd4->enter($__internal_db9448ec15b594c78684a5e95f847b7408c0503d1e7a41e92c88fc9e358e5cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "      <tr>
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
        
        $__internal_db9448ec15b594c78684a5e95f847b7408c0503d1e7a41e92c88fc9e358e5cd4->leave($__internal_db9448ec15b594c78684a5e95f847b7408c0503d1e7a41e92c88fc9e358e5cd4_prof);

        
        $__internal_888bb302e9d62254ec31920b64e7ae741a51012eadab43e1af22e538640e68c7->leave($__internal_888bb302e9d62254ec31920b64e7ae741a51012eadab43e1af22e538640e68c7_prof);

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
      <tr>
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
