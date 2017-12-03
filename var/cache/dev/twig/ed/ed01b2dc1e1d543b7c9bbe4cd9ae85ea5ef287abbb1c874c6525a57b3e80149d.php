<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d9f0a8f7487f9d67c4017661dc9ac6bdf13d8bca12e387ec8356865926ebac4c extends Twig_Template
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
        $__internal_6da1c84393dfa3dea04718e31978313c75aaab18387b68e10ee925ae85f94129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da1c84393dfa3dea04718e31978313c75aaab18387b68e10ee925ae85f94129->enter($__internal_6da1c84393dfa3dea04718e31978313c75aaab18387b68e10ee925ae85f94129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e87486907a9e5e43ef2dbeb09bc39eeedb691e80329dc70669f7f2904f35ebd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87486907a9e5e43ef2dbeb09bc39eeedb691e80329dc70669f7f2904f35ebd4->enter($__internal_e87486907a9e5e43ef2dbeb09bc39eeedb691e80329dc70669f7f2904f35ebd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6da1c84393dfa3dea04718e31978313c75aaab18387b68e10ee925ae85f94129->leave($__internal_6da1c84393dfa3dea04718e31978313c75aaab18387b68e10ee925ae85f94129_prof);

        
        $__internal_e87486907a9e5e43ef2dbeb09bc39eeedb691e80329dc70669f7f2904f35ebd4->leave($__internal_e87486907a9e5e43ef2dbeb09bc39eeedb691e80329dc70669f7f2904f35ebd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
