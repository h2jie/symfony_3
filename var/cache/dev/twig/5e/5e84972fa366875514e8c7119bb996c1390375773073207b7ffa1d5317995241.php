<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8a862fb6d30ff5910b1b3bef696c4f28b770c900dd3f91037dd793d5bcc44567 extends Twig_Template
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
        $__internal_3489bdb3299480a3f5e1db9aa8267fa767f023a96471de684bc938fa8b425f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3489bdb3299480a3f5e1db9aa8267fa767f023a96471de684bc938fa8b425f50->enter($__internal_3489bdb3299480a3f5e1db9aa8267fa767f023a96471de684bc938fa8b425f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1c2abbd3fbd41f587fa0dc120aab48bd062d6f372ceeb7903bbaf553f8d823ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2abbd3fbd41f587fa0dc120aab48bd062d6f372ceeb7903bbaf553f8d823ff->enter($__internal_1c2abbd3fbd41f587fa0dc120aab48bd062d6f372ceeb7903bbaf553f8d823ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3489bdb3299480a3f5e1db9aa8267fa767f023a96471de684bc938fa8b425f50->leave($__internal_3489bdb3299480a3f5e1db9aa8267fa767f023a96471de684bc938fa8b425f50_prof);

        
        $__internal_1c2abbd3fbd41f587fa0dc120aab48bd062d6f372ceeb7903bbaf553f8d823ff->leave($__internal_1c2abbd3fbd41f587fa0dc120aab48bd062d6f372ceeb7903bbaf553f8d823ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
