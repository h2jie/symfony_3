<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5f485990e19975f2fc49879b76b3dbef14e71bbc44366a68a96b2e5ff040571b extends Twig_Template
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
        $__internal_20ce67b5182738224b75cb02a7898ab95c489a8f50da96a6333a268c0619c8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ce67b5182738224b75cb02a7898ab95c489a8f50da96a6333a268c0619c8e9->enter($__internal_20ce67b5182738224b75cb02a7898ab95c489a8f50da96a6333a268c0619c8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f146ad9be38d859d8060a6295586aa4e5c550d18f499c04cc841dd0122f84047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f146ad9be38d859d8060a6295586aa4e5c550d18f499c04cc841dd0122f84047->enter($__internal_f146ad9be38d859d8060a6295586aa4e5c550d18f499c04cc841dd0122f84047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_20ce67b5182738224b75cb02a7898ab95c489a8f50da96a6333a268c0619c8e9->leave($__internal_20ce67b5182738224b75cb02a7898ab95c489a8f50da96a6333a268c0619c8e9_prof);

        
        $__internal_f146ad9be38d859d8060a6295586aa4e5c550d18f499c04cc841dd0122f84047->leave($__internal_f146ad9be38d859d8060a6295586aa4e5c550d18f499c04cc841dd0122f84047_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
