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
        $__internal_db551ff7b968a14bb161aaea6010f65b4b754eb7d2150dc70659ea81ea6da462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db551ff7b968a14bb161aaea6010f65b4b754eb7d2150dc70659ea81ea6da462->enter($__internal_db551ff7b968a14bb161aaea6010f65b4b754eb7d2150dc70659ea81ea6da462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:list.html.twig"));

        $__internal_6d24382e10a9694972402693b4824ceca833c7ad8ff012910cd11650ac2812bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d24382e10a9694972402693b4824ceca833c7ad8ff012910cd11650ac2812bc->enter($__internal_6d24382e10a9694972402693b4824ceca833c7ad8ff012910cd11650ac2812bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db551ff7b968a14bb161aaea6010f65b4b754eb7d2150dc70659ea81ea6da462->leave($__internal_db551ff7b968a14bb161aaea6010f65b4b754eb7d2150dc70659ea81ea6da462_prof);

        
        $__internal_6d24382e10a9694972402693b4824ceca833c7ad8ff012910cd11650ac2812bc->leave($__internal_6d24382e10a9694972402693b4824ceca833c7ad8ff012910cd11650ac2812bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af6809dbf432017f6a7ffbdf48edc4959e032f1ee2e052e8fac1d079ecb856dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6809dbf432017f6a7ffbdf48edc4959e032f1ee2e052e8fac1d079ecb856dd->enter($__internal_af6809dbf432017f6a7ffbdf48edc4959e032f1ee2e052e8fac1d079ecb856dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5138f0d942fa36f0d190859881657c67b2505e7e49a486fdad1d59f25101822a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5138f0d942fa36f0d190859881657c67b2505e7e49a486fdad1d59f25101822a->enter($__internal_5138f0d942fa36f0d190859881657c67b2505e7e49a486fdad1d59f25101822a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:list";
        
        $__internal_5138f0d942fa36f0d190859881657c67b2505e7e49a486fdad1d59f25101822a->leave($__internal_5138f0d942fa36f0d190859881657c67b2505e7e49a486fdad1d59f25101822a_prof);

        
        $__internal_af6809dbf432017f6a7ffbdf48edc4959e032f1ee2e052e8fac1d079ecb856dd->leave($__internal_af6809dbf432017f6a7ffbdf48edc4959e032f1ee2e052e8fac1d079ecb856dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_483b74315bb5ba2a3d3bbf6f78a853910964d9e1349dde795e03862e92a4c474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483b74315bb5ba2a3d3bbf6f78a853910964d9e1349dde795e03862e92a4c474->enter($__internal_483b74315bb5ba2a3d3bbf6f78a853910964d9e1349dde795e03862e92a4c474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a9cb1bd77859b8143bbefcb0402e17a0af477b4e01ac25a328f4be3f656c5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9cb1bd77859b8143bbefcb0402e17a0af477b4e01ac25a328f4be3f656c5e6->enter($__internal_0a9cb1bd77859b8143bbefcb0402e17a0af477b4e01ac25a328f4be3f656c5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a9cb1bd77859b8143bbefcb0402e17a0af477b4e01ac25a328f4be3f656c5e6->leave($__internal_0a9cb1bd77859b8143bbefcb0402e17a0af477b4e01ac25a328f4be3f656c5e6_prof);

        
        $__internal_483b74315bb5ba2a3d3bbf6f78a853910964d9e1349dde795e03862e92a4c474->leave($__internal_483b74315bb5ba2a3d3bbf6f78a853910964d9e1349dde795e03862e92a4c474_prof);

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
", "AppBundle:Task:list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/src/AppBundle/Resources/views/Task/list.html.twig");
    }
}
