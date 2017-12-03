<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_32e3a8b09ed4e8b9ee90d157b50a9da3e653fb7ae8b7dc69517f72419dbfecd7 extends Twig_Template
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
        $__internal_fb2560b2650ecfc0828ad120bf146631119e0a11dcb141cbb3e6c362f7cba0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2560b2650ecfc0828ad120bf146631119e0a11dcb141cbb3e6c362f7cba0fb->enter($__internal_fb2560b2650ecfc0828ad120bf146631119e0a11dcb141cbb3e6c362f7cba0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_158bbd34ccb708e2086e5fddd010263b506edecbb7a17d6057045ea4713c0968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158bbd34ccb708e2086e5fddd010263b506edecbb7a17d6057045ea4713c0968->enter($__internal_158bbd34ccb708e2086e5fddd010263b506edecbb7a17d6057045ea4713c0968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fb2560b2650ecfc0828ad120bf146631119e0a11dcb141cbb3e6c362f7cba0fb->leave($__internal_fb2560b2650ecfc0828ad120bf146631119e0a11dcb141cbb3e6c362f7cba0fb_prof);

        
        $__internal_158bbd34ccb708e2086e5fddd010263b506edecbb7a17d6057045ea4713c0968->leave($__internal_158bbd34ccb708e2086e5fddd010263b506edecbb7a17d6057045ea4713c0968_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
