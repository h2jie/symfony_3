<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_295cf4d1232de5526216ca5e347ec33fadab247a9776f06a354337f61068f495 extends Twig_Template
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
        $__internal_e9f89a5c63badd93052aac601da876414cb5a5a017bfb7d2b5ac30d7952b85f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f89a5c63badd93052aac601da876414cb5a5a017bfb7d2b5ac30d7952b85f7->enter($__internal_e9f89a5c63badd93052aac601da876414cb5a5a017bfb7d2b5ac30d7952b85f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b51a029ddc6ce669d72d87b187ae74d7fd371f916eb4acc2b1bf2927abafd730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51a029ddc6ce669d72d87b187ae74d7fd371f916eb4acc2b1bf2927abafd730->enter($__internal_b51a029ddc6ce669d72d87b187ae74d7fd371f916eb4acc2b1bf2927abafd730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e9f89a5c63badd93052aac601da876414cb5a5a017bfb7d2b5ac30d7952b85f7->leave($__internal_e9f89a5c63badd93052aac601da876414cb5a5a017bfb7d2b5ac30d7952b85f7_prof);

        
        $__internal_b51a029ddc6ce669d72d87b187ae74d7fd371f916eb4acc2b1bf2927abafd730->leave($__internal_b51a029ddc6ce669d72d87b187ae74d7fd371f916eb4acc2b1bf2927abafd730_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
