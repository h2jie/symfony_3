<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd261761b9df5032b9aa3cb8b0af94d0d155b6dd5a02f66fcea2fc15316666b1 extends Twig_Template
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
        $__internal_f0e60c007b2c7b9c05c3c1adb321d22844e052f7e54c4119c38e39181e8d97fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e60c007b2c7b9c05c3c1adb321d22844e052f7e54c4119c38e39181e8d97fa->enter($__internal_f0e60c007b2c7b9c05c3c1adb321d22844e052f7e54c4119c38e39181e8d97fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5840f531a61a4044b75515dde02ed87f82f9c0783b743a914b012ece639c0e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5840f531a61a4044b75515dde02ed87f82f9c0783b743a914b012ece639c0e29->enter($__internal_5840f531a61a4044b75515dde02ed87f82f9c0783b743a914b012ece639c0e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f0e60c007b2c7b9c05c3c1adb321d22844e052f7e54c4119c38e39181e8d97fa->leave($__internal_f0e60c007b2c7b9c05c3c1adb321d22844e052f7e54c4119c38e39181e8d97fa_prof);

        
        $__internal_5840f531a61a4044b75515dde02ed87f82f9c0783b743a914b012ece639c0e29->leave($__internal_5840f531a61a4044b75515dde02ed87f82f9c0783b743a914b012ece639c0e29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
