<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3caf6e65f122c85d80570a97d8460867e5eab2af60bd6b4a0da35d6c33fadfda extends Twig_Template
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
        $__internal_b81ac1afbfc639db5609ce9e2580fc8b8c745f0ed0643154dbd7467135da1b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b81ac1afbfc639db5609ce9e2580fc8b8c745f0ed0643154dbd7467135da1b14->enter($__internal_b81ac1afbfc639db5609ce9e2580fc8b8c745f0ed0643154dbd7467135da1b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6da598560329d3f824fcda5a6b48b759a7008f54328d47a46aca6f65103cf8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da598560329d3f824fcda5a6b48b759a7008f54328d47a46aca6f65103cf8d6->enter($__internal_6da598560329d3f824fcda5a6b48b759a7008f54328d47a46aca6f65103cf8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b81ac1afbfc639db5609ce9e2580fc8b8c745f0ed0643154dbd7467135da1b14->leave($__internal_b81ac1afbfc639db5609ce9e2580fc8b8c745f0ed0643154dbd7467135da1b14_prof);

        
        $__internal_6da598560329d3f824fcda5a6b48b759a7008f54328d47a46aca6f65103cf8d6->leave($__internal_6da598560329d3f824fcda5a6b48b759a7008f54328d47a46aca6f65103cf8d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
