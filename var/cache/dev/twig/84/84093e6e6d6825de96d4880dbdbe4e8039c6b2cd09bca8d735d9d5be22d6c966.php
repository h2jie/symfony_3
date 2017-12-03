<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b790b556d58827420fdcc2bef1b5d2eca9c8fb56c50a3e391e0f0475be3dd7f4 extends Twig_Template
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
        $__internal_e336638790547adab527c7f9e30ad57652d283f368814acefcfb1ab2cbf2d3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e336638790547adab527c7f9e30ad57652d283f368814acefcfb1ab2cbf2d3c0->enter($__internal_e336638790547adab527c7f9e30ad57652d283f368814acefcfb1ab2cbf2d3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f2a44ac29930273c8c7538f8e1cb4082290693299fcc012071892754450c8272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a44ac29930273c8c7538f8e1cb4082290693299fcc012071892754450c8272->enter($__internal_f2a44ac29930273c8c7538f8e1cb4082290693299fcc012071892754450c8272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e336638790547adab527c7f9e30ad57652d283f368814acefcfb1ab2cbf2d3c0->leave($__internal_e336638790547adab527c7f9e30ad57652d283f368814acefcfb1ab2cbf2d3c0_prof);

        
        $__internal_f2a44ac29930273c8c7538f8e1cb4082290693299fcc012071892754450c8272->leave($__internal_f2a44ac29930273c8c7538f8e1cb4082290693299fcc012071892754450c8272_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
