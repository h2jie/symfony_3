<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_90c515f661ba0957029f62e7816d6064d95afb900007341e45d52ce01e9b60ac extends Twig_Template
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
        $__internal_75fdc8ba3f3be75bb387c523c4b417ff9c582b30b1a52a2b62c06bbcc9076c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fdc8ba3f3be75bb387c523c4b417ff9c582b30b1a52a2b62c06bbcc9076c86->enter($__internal_75fdc8ba3f3be75bb387c523c4b417ff9c582b30b1a52a2b62c06bbcc9076c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_334c0c77b5f0926f6cc5efab0d3f6ad26a59bb8f1f5a5a52130ca7c714c1a5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334c0c77b5f0926f6cc5efab0d3f6ad26a59bb8f1f5a5a52130ca7c714c1a5f5->enter($__internal_334c0c77b5f0926f6cc5efab0d3f6ad26a59bb8f1f5a5a52130ca7c714c1a5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_75fdc8ba3f3be75bb387c523c4b417ff9c582b30b1a52a2b62c06bbcc9076c86->leave($__internal_75fdc8ba3f3be75bb387c523c4b417ff9c582b30b1a52a2b62c06bbcc9076c86_prof);

        
        $__internal_334c0c77b5f0926f6cc5efab0d3f6ad26a59bb8f1f5a5a52130ca7c714c1a5f5->leave($__internal_334c0c77b5f0926f6cc5efab0d3f6ad26a59bb8f1f5a5a52130ca7c714c1a5f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
