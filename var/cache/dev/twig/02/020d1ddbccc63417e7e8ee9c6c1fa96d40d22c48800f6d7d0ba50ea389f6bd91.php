<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_682a6f2685a1f9a57c3913a162d4f951d6bb029b0554f223078fa00bc8307222 extends Twig_Template
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
        $__internal_c8dc4d0c5dc5847505ec5d9dce2c50680f398f5dd06d5e597802362b822d13d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8dc4d0c5dc5847505ec5d9dce2c50680f398f5dd06d5e597802362b822d13d5->enter($__internal_c8dc4d0c5dc5847505ec5d9dce2c50680f398f5dd06d5e597802362b822d13d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_300800553ea670b0e7aaec42d248cf0edc320866b450d202688123560be578d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300800553ea670b0e7aaec42d248cf0edc320866b450d202688123560be578d4->enter($__internal_300800553ea670b0e7aaec42d248cf0edc320866b450d202688123560be578d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c8dc4d0c5dc5847505ec5d9dce2c50680f398f5dd06d5e597802362b822d13d5->leave($__internal_c8dc4d0c5dc5847505ec5d9dce2c50680f398f5dd06d5e597802362b822d13d5_prof);

        
        $__internal_300800553ea670b0e7aaec42d248cf0edc320866b450d202688123560be578d4->leave($__internal_300800553ea670b0e7aaec42d248cf0edc320866b450d202688123560be578d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
