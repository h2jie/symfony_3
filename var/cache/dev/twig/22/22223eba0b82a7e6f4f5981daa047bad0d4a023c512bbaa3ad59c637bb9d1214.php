<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_775d9db8afc98a86adcf98226ce6e6b6996eacc4b800f5c411bd915966d82200 extends Twig_Template
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
        $__internal_3b46dd504c9c10c434e77c2d39a331b0423bb62c7195812288c58a12e9da322d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b46dd504c9c10c434e77c2d39a331b0423bb62c7195812288c58a12e9da322d->enter($__internal_3b46dd504c9c10c434e77c2d39a331b0423bb62c7195812288c58a12e9da322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_70cac5ec2a758cf7dd3fa0255b7b29dfdb0362809ece467bcb28da6f478854db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cac5ec2a758cf7dd3fa0255b7b29dfdb0362809ece467bcb28da6f478854db->enter($__internal_70cac5ec2a758cf7dd3fa0255b7b29dfdb0362809ece467bcb28da6f478854db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3b46dd504c9c10c434e77c2d39a331b0423bb62c7195812288c58a12e9da322d->leave($__internal_3b46dd504c9c10c434e77c2d39a331b0423bb62c7195812288c58a12e9da322d_prof);

        
        $__internal_70cac5ec2a758cf7dd3fa0255b7b29dfdb0362809ece467bcb28da6f478854db->leave($__internal_70cac5ec2a758cf7dd3fa0255b7b29dfdb0362809ece467bcb28da6f478854db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
