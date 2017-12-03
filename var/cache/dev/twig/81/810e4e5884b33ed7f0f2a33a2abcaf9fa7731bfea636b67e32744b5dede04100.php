<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_23d2a24170420de7d4c3e5aed4a2f763687bcaa704969614733b72bfc477a56d extends Twig_Template
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
        $__internal_cfafc96589cb5083de3a299787bf23dafce5c9ae19c8cf9c50c2a9e29e4dee9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfafc96589cb5083de3a299787bf23dafce5c9ae19c8cf9c50c2a9e29e4dee9c->enter($__internal_cfafc96589cb5083de3a299787bf23dafce5c9ae19c8cf9c50c2a9e29e4dee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0ec583e6f3c76ba188cef55679910b9d8bd0625fc69383cd50552ac4aab7fc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec583e6f3c76ba188cef55679910b9d8bd0625fc69383cd50552ac4aab7fc0b->enter($__internal_0ec583e6f3c76ba188cef55679910b9d8bd0625fc69383cd50552ac4aab7fc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cfafc96589cb5083de3a299787bf23dafce5c9ae19c8cf9c50c2a9e29e4dee9c->leave($__internal_cfafc96589cb5083de3a299787bf23dafce5c9ae19c8cf9c50c2a9e29e4dee9c_prof);

        
        $__internal_0ec583e6f3c76ba188cef55679910b9d8bd0625fc69383cd50552ac4aab7fc0b->leave($__internal_0ec583e6f3c76ba188cef55679910b9d8bd0625fc69383cd50552ac4aab7fc0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
