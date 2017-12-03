<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c4d66944aea51659b6b00039ae5048a9ac015d831b9ceab291319131e0ef243d extends Twig_Template
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
        $__internal_7f429040f6a7ad58015dbe89f8a8b0d29120db63fd220b4dd7d7899b2e1b6c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f429040f6a7ad58015dbe89f8a8b0d29120db63fd220b4dd7d7899b2e1b6c03->enter($__internal_7f429040f6a7ad58015dbe89f8a8b0d29120db63fd220b4dd7d7899b2e1b6c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_6815dca7170e4ac8dd862bfb330cd2d6a7a986f0df3bc06a53dcd3c4883e2d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6815dca7170e4ac8dd862bfb330cd2d6a7a986f0df3bc06a53dcd3c4883e2d70->enter($__internal_6815dca7170e4ac8dd862bfb330cd2d6a7a986f0df3bc06a53dcd3c4883e2d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7f429040f6a7ad58015dbe89f8a8b0d29120db63fd220b4dd7d7899b2e1b6c03->leave($__internal_7f429040f6a7ad58015dbe89f8a8b0d29120db63fd220b4dd7d7899b2e1b6c03_prof);

        
        $__internal_6815dca7170e4ac8dd862bfb330cd2d6a7a986f0df3bc06a53dcd3c4883e2d70->leave($__internal_6815dca7170e4ac8dd862bfb330cd2d6a7a986f0df3bc06a53dcd3c4883e2d70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
