<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c8948eab21f13e8d1a5944c9aa6a68b35a475a21ebdbde87d9199569f7b41d48 extends Twig_Template
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
        $__internal_cacd43c1ceb99938844b6629cfc6dffde6cfcf9ba51cb7b3409e3424ebcf5d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacd43c1ceb99938844b6629cfc6dffde6cfcf9ba51cb7b3409e3424ebcf5d5c->enter($__internal_cacd43c1ceb99938844b6629cfc6dffde6cfcf9ba51cb7b3409e3424ebcf5d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_047aaf366d29e979cde5bddc461c2db57414413c3e0a57228f475b40f8aecebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047aaf366d29e979cde5bddc461c2db57414413c3e0a57228f475b40f8aecebe->enter($__internal_047aaf366d29e979cde5bddc461c2db57414413c3e0a57228f475b40f8aecebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cacd43c1ceb99938844b6629cfc6dffde6cfcf9ba51cb7b3409e3424ebcf5d5c->leave($__internal_cacd43c1ceb99938844b6629cfc6dffde6cfcf9ba51cb7b3409e3424ebcf5d5c_prof);

        
        $__internal_047aaf366d29e979cde5bddc461c2db57414413c3e0a57228f475b40f8aecebe->leave($__internal_047aaf366d29e979cde5bddc461c2db57414413c3e0a57228f475b40f8aecebe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
