<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dc877f7ddd8612200a865db254dea07957d021e8dc53252cc566674c569806b6 extends Twig_Template
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
        $__internal_b4aeecda9d3c4285f3b65c78e4a63167631a5496d9c59d7b7f313168068acbec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4aeecda9d3c4285f3b65c78e4a63167631a5496d9c59d7b7f313168068acbec->enter($__internal_b4aeecda9d3c4285f3b65c78e4a63167631a5496d9c59d7b7f313168068acbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_74438363e34e563a3fe8a43b8ba21b4c2f704fe85c71f87f7dad5f40aafe31e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74438363e34e563a3fe8a43b8ba21b4c2f704fe85c71f87f7dad5f40aafe31e4->enter($__internal_74438363e34e563a3fe8a43b8ba21b4c2f704fe85c71f87f7dad5f40aafe31e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b4aeecda9d3c4285f3b65c78e4a63167631a5496d9c59d7b7f313168068acbec->leave($__internal_b4aeecda9d3c4285f3b65c78e4a63167631a5496d9c59d7b7f313168068acbec_prof);

        
        $__internal_74438363e34e563a3fe8a43b8ba21b4c2f704fe85c71f87f7dad5f40aafe31e4->leave($__internal_74438363e34e563a3fe8a43b8ba21b4c2f704fe85c71f87f7dad5f40aafe31e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
