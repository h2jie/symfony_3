<?php

/* AppBundle:Task:list.html.twig */
class __TwigTemplate_0ef2e428d6a97f4c0c136674474103769c63a60f0e5f51184db2fcdfa15d5e96 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AppBundle:Task:list";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <h1>Welcome to the Task:list page</h1>
  <table >
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Task"] ?? null));
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
        return array (  75 => 19,  66 => 15,  58 => 12,  54 => 11,  50 => 10,  47 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Task:list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/src/AppBundle/Resources/views/Task/list.html.twig");
    }
}
