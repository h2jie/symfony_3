<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c90bb60ee7e39ceadc9027a4f93417cf1e414564460c46b6079701f480f248d6 extends Twig_Template
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
        $__internal_3eaa761d4ceb4d0c40e81f5426d12798d0bb89655ad56ad9057091adb678ca41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eaa761d4ceb4d0c40e81f5426d12798d0bb89655ad56ad9057091adb678ca41->enter($__internal_3eaa761d4ceb4d0c40e81f5426d12798d0bb89655ad56ad9057091adb678ca41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_d652938def7d986b2c8208a6dcdd34479135c209dd6915eea5f61bd44936a541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d652938def7d986b2c8208a6dcdd34479135c209dd6915eea5f61bd44936a541->enter($__internal_d652938def7d986b2c8208a6dcdd34479135c209dd6915eea5f61bd44936a541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3eaa761d4ceb4d0c40e81f5426d12798d0bb89655ad56ad9057091adb678ca41->leave($__internal_3eaa761d4ceb4d0c40e81f5426d12798d0bb89655ad56ad9057091adb678ca41_prof);

        
        $__internal_d652938def7d986b2c8208a6dcdd34479135c209dd6915eea5f61bd44936a541->leave($__internal_d652938def7d986b2c8208a6dcdd34479135c209dd6915eea5f61bd44936a541_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
