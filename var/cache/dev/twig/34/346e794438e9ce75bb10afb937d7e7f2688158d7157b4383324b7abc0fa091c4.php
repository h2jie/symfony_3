<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_152be14bf245dde0993fee44ab57b03b6f71fae4ee64224036a160eba6407aa6 extends Twig_Template
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
        $__internal_e6424e6874de00d723ed25a5e42caf6f49d313444bd314357822d7858e3bda53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6424e6874de00d723ed25a5e42caf6f49d313444bd314357822d7858e3bda53->enter($__internal_e6424e6874de00d723ed25a5e42caf6f49d313444bd314357822d7858e3bda53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4ec5b4698ad59f5f3e6c7946273e4ee3d246588ed43035a7407ea12ec8c263e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec5b4698ad59f5f3e6c7946273e4ee3d246588ed43035a7407ea12ec8c263e1->enter($__internal_4ec5b4698ad59f5f3e6c7946273e4ee3d246588ed43035a7407ea12ec8c263e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e6424e6874de00d723ed25a5e42caf6f49d313444bd314357822d7858e3bda53->leave($__internal_e6424e6874de00d723ed25a5e42caf6f49d313444bd314357822d7858e3bda53_prof);

        
        $__internal_4ec5b4698ad59f5f3e6c7946273e4ee3d246588ed43035a7407ea12ec8c263e1->leave($__internal_4ec5b4698ad59f5f3e6c7946273e4ee3d246588ed43035a7407ea12ec8c263e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
