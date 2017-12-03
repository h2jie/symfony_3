<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_41beac728198993731c562523c12cd3b20e7bb3d2627b8faff2ebf8f3db45573 extends Twig_Template
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
        $__internal_c772414dc51a3946354f8b8027da6c5e7b76c2ce2e02e1dcbbfcdcf2a6cac249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c772414dc51a3946354f8b8027da6c5e7b76c2ce2e02e1dcbbfcdcf2a6cac249->enter($__internal_c772414dc51a3946354f8b8027da6c5e7b76c2ce2e02e1dcbbfcdcf2a6cac249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5dae3b5eb60cead6fd29ecbde699652c0302b5ec305e880ed82294cfa9db24aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dae3b5eb60cead6fd29ecbde699652c0302b5ec305e880ed82294cfa9db24aa->enter($__internal_5dae3b5eb60cead6fd29ecbde699652c0302b5ec305e880ed82294cfa9db24aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c772414dc51a3946354f8b8027da6c5e7b76c2ce2e02e1dcbbfcdcf2a6cac249->leave($__internal_c772414dc51a3946354f8b8027da6c5e7b76c2ce2e02e1dcbbfcdcf2a6cac249_prof);

        
        $__internal_5dae3b5eb60cead6fd29ecbde699652c0302b5ec305e880ed82294cfa9db24aa->leave($__internal_5dae3b5eb60cead6fd29ecbde699652c0302b5ec305e880ed82294cfa9db24aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
