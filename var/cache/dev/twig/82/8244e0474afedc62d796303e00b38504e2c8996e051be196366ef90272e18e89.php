<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_103e10cc104c0b40daf4b4fe99961f77bd9645f170ff7cb7bad7d4b8e86ad26c extends Twig_Template
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
        $__internal_3feb5e4523a5b7d6d2c2eac5cab8d543dfc4e58766bdcb37287bfcb2086f6bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3feb5e4523a5b7d6d2c2eac5cab8d543dfc4e58766bdcb37287bfcb2086f6bd3->enter($__internal_3feb5e4523a5b7d6d2c2eac5cab8d543dfc4e58766bdcb37287bfcb2086f6bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b30ef86b102d2186e9551c033f8d3f8df8cf60877ad138fbb8c0e7ff4e97a0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30ef86b102d2186e9551c033f8d3f8df8cf60877ad138fbb8c0e7ff4e97a0c3->enter($__internal_b30ef86b102d2186e9551c033f8d3f8df8cf60877ad138fbb8c0e7ff4e97a0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3feb5e4523a5b7d6d2c2eac5cab8d543dfc4e58766bdcb37287bfcb2086f6bd3->leave($__internal_3feb5e4523a5b7d6d2c2eac5cab8d543dfc4e58766bdcb37287bfcb2086f6bd3_prof);

        
        $__internal_b30ef86b102d2186e9551c033f8d3f8df8cf60877ad138fbb8c0e7ff4e97a0c3->leave($__internal_b30ef86b102d2186e9551c033f8d3f8df8cf60877ad138fbb8c0e7ff4e97a0c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
