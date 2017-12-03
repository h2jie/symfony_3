<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_cd665b4961e8ff189fad7ba52230790b95be514d9def5f1d7c72958f14873073 extends Twig_Template
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
        $__internal_42c786d20981e940d17d1f6eed870025c029829dff2dfb8dd94dee5a02ac1b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c786d20981e940d17d1f6eed870025c029829dff2dfb8dd94dee5a02ac1b31->enter($__internal_42c786d20981e940d17d1f6eed870025c029829dff2dfb8dd94dee5a02ac1b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_aac382ed6a48d202592634dcbe5c4624716f72a1578c8f6e45c13eb7d6abb130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac382ed6a48d202592634dcbe5c4624716f72a1578c8f6e45c13eb7d6abb130->enter($__internal_aac382ed6a48d202592634dcbe5c4624716f72a1578c8f6e45c13eb7d6abb130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_42c786d20981e940d17d1f6eed870025c029829dff2dfb8dd94dee5a02ac1b31->leave($__internal_42c786d20981e940d17d1f6eed870025c029829dff2dfb8dd94dee5a02ac1b31_prof);

        
        $__internal_aac382ed6a48d202592634dcbe5c4624716f72a1578c8f6e45c13eb7d6abb130->leave($__internal_aac382ed6a48d202592634dcbe5c4624716f72a1578c8f6e45c13eb7d6abb130_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
