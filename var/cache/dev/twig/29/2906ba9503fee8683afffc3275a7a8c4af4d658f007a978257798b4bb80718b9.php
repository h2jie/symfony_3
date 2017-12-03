<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2c98d7dda513a28e40954cf0fe4f994038abd57bf1c7e44dd11bb7e023e5e1e0 extends Twig_Template
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
        $__internal_6d62ca38bc6da15b6c0173debb2f0f74097ec912802b6a6332dd52459ce160ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d62ca38bc6da15b6c0173debb2f0f74097ec912802b6a6332dd52459ce160ec->enter($__internal_6d62ca38bc6da15b6c0173debb2f0f74097ec912802b6a6332dd52459ce160ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6c2e04172b664dc28844eabbb8abacb17bc8b389c17c6ff88d0147f140d9cab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2e04172b664dc28844eabbb8abacb17bc8b389c17c6ff88d0147f140d9cab4->enter($__internal_6c2e04172b664dc28844eabbb8abacb17bc8b389c17c6ff88d0147f140d9cab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6d62ca38bc6da15b6c0173debb2f0f74097ec912802b6a6332dd52459ce160ec->leave($__internal_6d62ca38bc6da15b6c0173debb2f0f74097ec912802b6a6332dd52459ce160ec_prof);

        
        $__internal_6c2e04172b664dc28844eabbb8abacb17bc8b389c17c6ff88d0147f140d9cab4->leave($__internal_6c2e04172b664dc28844eabbb8abacb17bc8b389c17c6ff88d0147f140d9cab4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
