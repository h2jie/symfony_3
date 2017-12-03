<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_a2b079f00ea46b0ca523b1c68a813c5faf2b958c961375da2754bf79afa549a0 extends Twig_Template
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
        $__internal_06dc623991afbb77c1d113a72c185f48059b0286a8636d8d30edc0269d1e3fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06dc623991afbb77c1d113a72c185f48059b0286a8636d8d30edc0269d1e3fcd->enter($__internal_06dc623991afbb77c1d113a72c185f48059b0286a8636d8d30edc0269d1e3fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_6093359358e23f57ca96d0e11894909ad26089a319ddf660e571a7196b7ebd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6093359358e23f57ca96d0e11894909ad26089a319ddf660e571a7196b7ebd31->enter($__internal_6093359358e23f57ca96d0e11894909ad26089a319ddf660e571a7196b7ebd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_06dc623991afbb77c1d113a72c185f48059b0286a8636d8d30edc0269d1e3fcd->leave($__internal_06dc623991afbb77c1d113a72c185f48059b0286a8636d8d30edc0269d1e3fcd_prof);

        
        $__internal_6093359358e23f57ca96d0e11894909ad26089a319ddf660e571a7196b7ebd31->leave($__internal_6093359358e23f57ca96d0e11894909ad26089a319ddf660e571a7196b7ebd31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
