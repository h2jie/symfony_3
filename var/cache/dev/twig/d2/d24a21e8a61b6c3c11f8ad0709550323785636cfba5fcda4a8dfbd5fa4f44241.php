<?php

/* AppBundle:Task:delete.html.twig */
class __TwigTemplate_8f807ab2e5b3204b0e9958bec61d8ac520a1cfcd123e56dd4bdfaa0eec0aeecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Task:delete.html.twig", 1);
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
        $__internal_0763f392b5da7230d4825e9d368371068997d1f2b7f438f5dca87c329c6844fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0763f392b5da7230d4825e9d368371068997d1f2b7f438f5dca87c329c6844fe->enter($__internal_0763f392b5da7230d4825e9d368371068997d1f2b7f438f5dca87c329c6844fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:delete.html.twig"));

        $__internal_1ff173bebe43873a9c80823186e3ac13cecda816c8594ef6b6208fa4a1452d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff173bebe43873a9c80823186e3ac13cecda816c8594ef6b6208fa4a1452d76->enter($__internal_1ff173bebe43873a9c80823186e3ac13cecda816c8594ef6b6208fa4a1452d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0763f392b5da7230d4825e9d368371068997d1f2b7f438f5dca87c329c6844fe->leave($__internal_0763f392b5da7230d4825e9d368371068997d1f2b7f438f5dca87c329c6844fe_prof);

        
        $__internal_1ff173bebe43873a9c80823186e3ac13cecda816c8594ef6b6208fa4a1452d76->leave($__internal_1ff173bebe43873a9c80823186e3ac13cecda816c8594ef6b6208fa4a1452d76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd0a9f1a667335c7c5ce59f74a79361069776561d489bd606f1b6d4843c6e21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0a9f1a667335c7c5ce59f74a79361069776561d489bd606f1b6d4843c6e21d->enter($__internal_cd0a9f1a667335c7c5ce59f74a79361069776561d489bd606f1b6d4843c6e21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cbc5a655a429171e3b38bddc6091cb9aeb9e8e978cf4623bbdf9859684918f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc5a655a429171e3b38bddc6091cb9aeb9e8e978cf4623bbdf9859684918f8e->enter($__internal_cbc5a655a429171e3b38bddc6091cb9aeb9e8e978cf4623bbdf9859684918f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Task:delete";
        
        $__internal_cbc5a655a429171e3b38bddc6091cb9aeb9e8e978cf4623bbdf9859684918f8e->leave($__internal_cbc5a655a429171e3b38bddc6091cb9aeb9e8e978cf4623bbdf9859684918f8e_prof);

        
        $__internal_cd0a9f1a667335c7c5ce59f74a79361069776561d489bd606f1b6d4843c6e21d->leave($__internal_cd0a9f1a667335c7c5ce59f74a79361069776561d489bd606f1b6d4843c6e21d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fd663ad107d36d64ddfa7907962968081f049ee94b326ec70a15da22c1bac12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd663ad107d36d64ddfa7907962968081f049ee94b326ec70a15da22c1bac12->enter($__internal_1fd663ad107d36d64ddfa7907962968081f049ee94b326ec70a15da22c1bac12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1802749510ad19b3f23c925428c315ae4473f0d6ea67c281eeb888540adcc479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1802749510ad19b3f23c925428c315ae4473f0d6ea67c281eeb888540adcc479->enter($__internal_1802749510ad19b3f23c925428c315ae4473f0d6ea67c281eeb888540adcc479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Task:delete page</h1>

";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_1802749510ad19b3f23c925428c315ae4473f0d6ea67c281eeb888540adcc479->leave($__internal_1802749510ad19b3f23c925428c315ae4473f0d6ea67c281eeb888540adcc479_prof);

        
        $__internal_1fd663ad107d36d64ddfa7907962968081f049ee94b326ec70a15da22c1bac12->leave($__internal_1fd663ad107d36d64ddfa7907962968081f049ee94b326ec70a15da22c1bac12_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Task:delete{% endblock %}

{% block body %}
<h1>Welcome to the Task:delete page</h1>

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "AppBundle:Task:delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/TodoList/src/AppBundle/Resources/views/Task/delete.html.twig");
    }
}
