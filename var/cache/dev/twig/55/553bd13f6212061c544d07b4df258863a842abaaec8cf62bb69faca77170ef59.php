<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_102b9f0600ae7dffa1e6cfef2661902e0f33827312a7b37369632ebb95f503d5 extends Twig_Template
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
        $__internal_d7917d8089109b44cebbab644370f711e1b27d2c6626651bb552927d0773c0ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7917d8089109b44cebbab644370f711e1b27d2c6626651bb552927d0773c0ab->enter($__internal_d7917d8089109b44cebbab644370f711e1b27d2c6626651bb552927d0773c0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_338d4943994db9d0588220b86503c548f3256d2f6b10cda6314b0756d35214f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338d4943994db9d0588220b86503c548f3256d2f6b10cda6314b0756d35214f3->enter($__internal_338d4943994db9d0588220b86503c548f3256d2f6b10cda6314b0756d35214f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d7917d8089109b44cebbab644370f711e1b27d2c6626651bb552927d0773c0ab->leave($__internal_d7917d8089109b44cebbab644370f711e1b27d2c6626651bb552927d0773c0ab_prof);

        
        $__internal_338d4943994db9d0588220b86503c548f3256d2f6b10cda6314b0756d35214f3->leave($__internal_338d4943994db9d0588220b86503c548f3256d2f6b10cda6314b0756d35214f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
