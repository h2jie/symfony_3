<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d96076d79fbf313c8b8f450a4a206e0c094386269a4623ee5ef26412f5c1406c extends Twig_Template
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
        $__internal_f68fdcb72fd7b89b90e79d667860360f0cea2d78372eaaa41162fdd9a0af0aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68fdcb72fd7b89b90e79d667860360f0cea2d78372eaaa41162fdd9a0af0aa0->enter($__internal_f68fdcb72fd7b89b90e79d667860360f0cea2d78372eaaa41162fdd9a0af0aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1a69908b90d65bc6f8f19ac7ead5118db7d4ede4a6da8efaeb438d872b291769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a69908b90d65bc6f8f19ac7ead5118db7d4ede4a6da8efaeb438d872b291769->enter($__internal_1a69908b90d65bc6f8f19ac7ead5118db7d4ede4a6da8efaeb438d872b291769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f68fdcb72fd7b89b90e79d667860360f0cea2d78372eaaa41162fdd9a0af0aa0->leave($__internal_f68fdcb72fd7b89b90e79d667860360f0cea2d78372eaaa41162fdd9a0af0aa0_prof);

        
        $__internal_1a69908b90d65bc6f8f19ac7ead5118db7d4ede4a6da8efaeb438d872b291769->leave($__internal_1a69908b90d65bc6f8f19ac7ead5118db7d4ede4a6da8efaeb438d872b291769_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
