<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2dfd8aa918acdb0aa52d5b841fa5ef084d9174251fd0f26610a58ce9eca8d635 extends Twig_Template
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
        $__internal_067461c0ed42052e6d4db126baeb56a9a4d26ba2b56db4f354119e728118e6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067461c0ed42052e6d4db126baeb56a9a4d26ba2b56db4f354119e728118e6b5->enter($__internal_067461c0ed42052e6d4db126baeb56a9a4d26ba2b56db4f354119e728118e6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_cd632e7a97fb459f57bc5f63927c81731f6edb052b34919d7f1fa058ec64a621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd632e7a97fb459f57bc5f63927c81731f6edb052b34919d7f1fa058ec64a621->enter($__internal_cd632e7a97fb459f57bc5f63927c81731f6edb052b34919d7f1fa058ec64a621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_067461c0ed42052e6d4db126baeb56a9a4d26ba2b56db4f354119e728118e6b5->leave($__internal_067461c0ed42052e6d4db126baeb56a9a4d26ba2b56db4f354119e728118e6b5_prof);

        
        $__internal_cd632e7a97fb459f57bc5f63927c81731f6edb052b34919d7f1fa058ec64a621->leave($__internal_cd632e7a97fb459f57bc5f63927c81731f6edb052b34919d7f1fa058ec64a621_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
