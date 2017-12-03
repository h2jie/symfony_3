<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_69534a2d66bd4b96efa0ed47832a6ea15b47d4ea4188b6185b595ff799b6ced5 extends Twig_Template
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
        $__internal_ab9139df2f3a3e4392180f49f7b5c349c7459643bea1447951abdc262e2aaebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9139df2f3a3e4392180f49f7b5c349c7459643bea1447951abdc262e2aaebf->enter($__internal_ab9139df2f3a3e4392180f49f7b5c349c7459643bea1447951abdc262e2aaebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_7724b0861a8b1c01ecf78ff475332839dbe0f018a67f0bceda2a2fa61a2fced1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7724b0861a8b1c01ecf78ff475332839dbe0f018a67f0bceda2a2fa61a2fced1->enter($__internal_7724b0861a8b1c01ecf78ff475332839dbe0f018a67f0bceda2a2fa61a2fced1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ab9139df2f3a3e4392180f49f7b5c349c7459643bea1447951abdc262e2aaebf->leave($__internal_ab9139df2f3a3e4392180f49f7b5c349c7459643bea1447951abdc262e2aaebf_prof);

        
        $__internal_7724b0861a8b1c01ecf78ff475332839dbe0f018a67f0bceda2a2fa61a2fced1->leave($__internal_7724b0861a8b1c01ecf78ff475332839dbe0f018a67f0bceda2a2fa61a2fced1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
