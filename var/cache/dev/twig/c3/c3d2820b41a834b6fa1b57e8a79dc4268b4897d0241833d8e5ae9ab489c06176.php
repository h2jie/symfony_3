<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5c060836cae49a47269375db264f99d66a38d16e07ebf891f345d4cc2de7bff2 extends Twig_Template
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
        $__internal_5e6f532b7189373f0d19d484beca8719f3d7cd1b6b1c7e720212cb93d24ccc35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6f532b7189373f0d19d484beca8719f3d7cd1b6b1c7e720212cb93d24ccc35->enter($__internal_5e6f532b7189373f0d19d484beca8719f3d7cd1b6b1c7e720212cb93d24ccc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5169ae69fbf18d0d96ee90fec63c9c55b59bf5626574de3628277b4fa8c61b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5169ae69fbf18d0d96ee90fec63c9c55b59bf5626574de3628277b4fa8c61b81->enter($__internal_5169ae69fbf18d0d96ee90fec63c9c55b59bf5626574de3628277b4fa8c61b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5e6f532b7189373f0d19d484beca8719f3d7cd1b6b1c7e720212cb93d24ccc35->leave($__internal_5e6f532b7189373f0d19d484beca8719f3d7cd1b6b1c7e720212cb93d24ccc35_prof);

        
        $__internal_5169ae69fbf18d0d96ee90fec63c9c55b59bf5626574de3628277b4fa8c61b81->leave($__internal_5169ae69fbf18d0d96ee90fec63c9c55b59bf5626574de3628277b4fa8c61b81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
