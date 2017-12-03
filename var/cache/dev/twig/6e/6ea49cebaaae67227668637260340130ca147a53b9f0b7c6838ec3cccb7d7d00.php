<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f52bdca62a5473a7fd94aa25b31fb4737d0bb6c811af47339e502ba9f8d44684 extends Twig_Template
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
        $__internal_5f831d0c53254afd0d5c7654abe878b27ed542a6bd58610ba72ed4204ef9c543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f831d0c53254afd0d5c7654abe878b27ed542a6bd58610ba72ed4204ef9c543->enter($__internal_5f831d0c53254afd0d5c7654abe878b27ed542a6bd58610ba72ed4204ef9c543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_349f6a7ab1662379e810feb7d7165d5ae0b974c7d5d1fb988d5848491ff64c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349f6a7ab1662379e810feb7d7165d5ae0b974c7d5d1fb988d5848491ff64c43->enter($__internal_349f6a7ab1662379e810feb7d7165d5ae0b974c7d5d1fb988d5848491ff64c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5f831d0c53254afd0d5c7654abe878b27ed542a6bd58610ba72ed4204ef9c543->leave($__internal_5f831d0c53254afd0d5c7654abe878b27ed542a6bd58610ba72ed4204ef9c543_prof);

        
        $__internal_349f6a7ab1662379e810feb7d7165d5ae0b974c7d5d1fb988d5848491ff64c43->leave($__internal_349f6a7ab1662379e810feb7d7165d5ae0b974c7d5d1fb988d5848491ff64c43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
