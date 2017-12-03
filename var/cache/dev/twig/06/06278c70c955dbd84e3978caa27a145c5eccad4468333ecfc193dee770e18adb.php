<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a6a635858d4bb3ab38b30071a9daa1b633dc74026ba4f0fa14d3c39eb77a4952 extends Twig_Template
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
        $__internal_f81d5d469112c8bc2dac11c1093c2bd1751a47e8fdfb40a4836d6a384ea7b72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81d5d469112c8bc2dac11c1093c2bd1751a47e8fdfb40a4836d6a384ea7b72f->enter($__internal_f81d5d469112c8bc2dac11c1093c2bd1751a47e8fdfb40a4836d6a384ea7b72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_0d249e757ac0d198e79ec447e2694492d0e6a2f2c9d3fb9e6f7c878d98ac374b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d249e757ac0d198e79ec447e2694492d0e6a2f2c9d3fb9e6f7c878d98ac374b->enter($__internal_0d249e757ac0d198e79ec447e2694492d0e6a2f2c9d3fb9e6f7c878d98ac374b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f81d5d469112c8bc2dac11c1093c2bd1751a47e8fdfb40a4836d6a384ea7b72f->leave($__internal_f81d5d469112c8bc2dac11c1093c2bd1751a47e8fdfb40a4836d6a384ea7b72f_prof);

        
        $__internal_0d249e757ac0d198e79ec447e2694492d0e6a2f2c9d3fb9e6f7c878d98ac374b->leave($__internal_0d249e757ac0d198e79ec447e2694492d0e6a2f2c9d3fb9e6f7c878d98ac374b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
