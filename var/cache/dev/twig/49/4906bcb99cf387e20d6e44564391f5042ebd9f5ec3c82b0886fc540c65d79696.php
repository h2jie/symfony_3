<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_cf81ec3092be0f0084facd9830a10688cc18b459082fade1c92fda720aeace07 extends Twig_Template
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
        $__internal_90243761f1b2bcada38e08da28a289d6dc97c13b0c50f4ff8157180169395e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90243761f1b2bcada38e08da28a289d6dc97c13b0c50f4ff8157180169395e94->enter($__internal_90243761f1b2bcada38e08da28a289d6dc97c13b0c50f4ff8157180169395e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_41138a42a6deeb69b864766da448018e5db95711f2c273193827c81271479198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41138a42a6deeb69b864766da448018e5db95711f2c273193827c81271479198->enter($__internal_41138a42a6deeb69b864766da448018e5db95711f2c273193827c81271479198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_90243761f1b2bcada38e08da28a289d6dc97c13b0c50f4ff8157180169395e94->leave($__internal_90243761f1b2bcada38e08da28a289d6dc97c13b0c50f4ff8157180169395e94_prof);

        
        $__internal_41138a42a6deeb69b864766da448018e5db95711f2c273193827c81271479198->leave($__internal_41138a42a6deeb69b864766da448018e5db95711f2c273193827c81271479198_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
