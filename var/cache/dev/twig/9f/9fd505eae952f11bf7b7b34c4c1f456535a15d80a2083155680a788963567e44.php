<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5a3f6cf6086d484b923836b0a12f513cb56c7628150a5bb964f028a5858c76b5 extends Twig_Template
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
        $__internal_a165db4144e863704ce48e37bb73f0797d17b31b91d4eb4570d4c79a33a1a03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a165db4144e863704ce48e37bb73f0797d17b31b91d4eb4570d4c79a33a1a03a->enter($__internal_a165db4144e863704ce48e37bb73f0797d17b31b91d4eb4570d4c79a33a1a03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_4594428101b2f7d7e227dfff7cf1155eea753fa18ab0dadab08f5a1de8f28247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4594428101b2f7d7e227dfff7cf1155eea753fa18ab0dadab08f5a1de8f28247->enter($__internal_4594428101b2f7d7e227dfff7cf1155eea753fa18ab0dadab08f5a1de8f28247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a165db4144e863704ce48e37bb73f0797d17b31b91d4eb4570d4c79a33a1a03a->leave($__internal_a165db4144e863704ce48e37bb73f0797d17b31b91d4eb4570d4c79a33a1a03a_prof);

        
        $__internal_4594428101b2f7d7e227dfff7cf1155eea753fa18ab0dadab08f5a1de8f28247->leave($__internal_4594428101b2f7d7e227dfff7cf1155eea753fa18ab0dadab08f5a1de8f28247_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
