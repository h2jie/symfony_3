<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_64372ec0c3594942c0d4c852b69f635b1becbc9c7e8e1115139c40e559327468 extends Twig_Template
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
        $__internal_308eea5471ce175f02899ab68d13a93e2efaac3f228347857e74b0fbc761c3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308eea5471ce175f02899ab68d13a93e2efaac3f228347857e74b0fbc761c3c1->enter($__internal_308eea5471ce175f02899ab68d13a93e2efaac3f228347857e74b0fbc761c3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_28f8b21e73da41b06523a4aa389fe6e2daf54149d2824eb4d4e71cab02064e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f8b21e73da41b06523a4aa389fe6e2daf54149d2824eb4d4e71cab02064e73->enter($__internal_28f8b21e73da41b06523a4aa389fe6e2daf54149d2824eb4d4e71cab02064e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_308eea5471ce175f02899ab68d13a93e2efaac3f228347857e74b0fbc761c3c1->leave($__internal_308eea5471ce175f02899ab68d13a93e2efaac3f228347857e74b0fbc761c3c1_prof);

        
        $__internal_28f8b21e73da41b06523a4aa389fe6e2daf54149d2824eb4d4e71cab02064e73->leave($__internal_28f8b21e73da41b06523a4aa389fe6e2daf54149d2824eb4d4e71cab02064e73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
