<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e929bec2e6a149b6930b05325c178490343a7a918507da619e91abbae1879c4e extends Twig_Template
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
        $__internal_c096857e13f875ad4fe49ccc7975c0e5cf3db348329c80416c5eec7ea8e1421b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c096857e13f875ad4fe49ccc7975c0e5cf3db348329c80416c5eec7ea8e1421b->enter($__internal_c096857e13f875ad4fe49ccc7975c0e5cf3db348329c80416c5eec7ea8e1421b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_bc02a4aaa0b5bf90a1274cd7091bc4cf07a459d7ca62b73bb988716095850f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc02a4aaa0b5bf90a1274cd7091bc4cf07a459d7ca62b73bb988716095850f45->enter($__internal_bc02a4aaa0b5bf90a1274cd7091bc4cf07a459d7ca62b73bb988716095850f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c096857e13f875ad4fe49ccc7975c0e5cf3db348329c80416c5eec7ea8e1421b->leave($__internal_c096857e13f875ad4fe49ccc7975c0e5cf3db348329c80416c5eec7ea8e1421b_prof);

        
        $__internal_bc02a4aaa0b5bf90a1274cd7091bc4cf07a459d7ca62b73bb988716095850f45->leave($__internal_bc02a4aaa0b5bf90a1274cd7091bc4cf07a459d7ca62b73bb988716095850f45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
