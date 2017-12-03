<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e6342a1f73361c9ac04ec31f753d13a30e7133a91be4fe72e146dc47514a08b5 extends Twig_Template
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
        $__internal_867a02bd70455b5ecff972ef9c6b3f65c153fd143299dfa0455072613d7d0682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867a02bd70455b5ecff972ef9c6b3f65c153fd143299dfa0455072613d7d0682->enter($__internal_867a02bd70455b5ecff972ef9c6b3f65c153fd143299dfa0455072613d7d0682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_04e52f5f435a0e3993616167c3f5f8ab7eb81c8a7677918fdd3572a1af9239b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e52f5f435a0e3993616167c3f5f8ab7eb81c8a7677918fdd3572a1af9239b6->enter($__internal_04e52f5f435a0e3993616167c3f5f8ab7eb81c8a7677918fdd3572a1af9239b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_867a02bd70455b5ecff972ef9c6b3f65c153fd143299dfa0455072613d7d0682->leave($__internal_867a02bd70455b5ecff972ef9c6b3f65c153fd143299dfa0455072613d7d0682_prof);

        
        $__internal_04e52f5f435a0e3993616167c3f5f8ab7eb81c8a7677918fdd3572a1af9239b6->leave($__internal_04e52f5f435a0e3993616167c3f5f8ab7eb81c8a7677918fdd3572a1af9239b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
