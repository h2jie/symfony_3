<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e526a4760453f6c6676b5d80c638a6194d6338df4b7c9d318dd80806995a51e6 extends Twig_Template
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
        $__internal_b213e6a235008bbcfe5dbf1af1c866870c572f334dae83c38858fbb466df3110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b213e6a235008bbcfe5dbf1af1c866870c572f334dae83c38858fbb466df3110->enter($__internal_b213e6a235008bbcfe5dbf1af1c866870c572f334dae83c38858fbb466df3110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_00a59c62303ace8d5f44e136e541d3e475273303168cd7a6df740ab95a951e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a59c62303ace8d5f44e136e541d3e475273303168cd7a6df740ab95a951e00->enter($__internal_00a59c62303ace8d5f44e136e541d3e475273303168cd7a6df740ab95a951e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b213e6a235008bbcfe5dbf1af1c866870c572f334dae83c38858fbb466df3110->leave($__internal_b213e6a235008bbcfe5dbf1af1c866870c572f334dae83c38858fbb466df3110_prof);

        
        $__internal_00a59c62303ace8d5f44e136e541d3e475273303168cd7a6df740ab95a951e00->leave($__internal_00a59c62303ace8d5f44e136e541d3e475273303168cd7a6df740ab95a951e00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
