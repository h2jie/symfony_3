<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c23ca9f22ed00e48e7dc54bb4272e9abad87680fc001638199a83a6562b06463 extends Twig_Template
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
        $__internal_d659aeb6b8abb0175c50bdd8f71dbfaa097e0202ab5d7c451a659b4ec6910629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d659aeb6b8abb0175c50bdd8f71dbfaa097e0202ab5d7c451a659b4ec6910629->enter($__internal_d659aeb6b8abb0175c50bdd8f71dbfaa097e0202ab5d7c451a659b4ec6910629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f80b40c9e578b0307f9373a06eb2e08cffc31efdb7097193707b4ad34b014b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80b40c9e578b0307f9373a06eb2e08cffc31efdb7097193707b4ad34b014b6a->enter($__internal_f80b40c9e578b0307f9373a06eb2e08cffc31efdb7097193707b4ad34b014b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d659aeb6b8abb0175c50bdd8f71dbfaa097e0202ab5d7c451a659b4ec6910629->leave($__internal_d659aeb6b8abb0175c50bdd8f71dbfaa097e0202ab5d7c451a659b4ec6910629_prof);

        
        $__internal_f80b40c9e578b0307f9373a06eb2e08cffc31efdb7097193707b4ad34b014b6a->leave($__internal_f80b40c9e578b0307f9373a06eb2e08cffc31efdb7097193707b4ad34b014b6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
