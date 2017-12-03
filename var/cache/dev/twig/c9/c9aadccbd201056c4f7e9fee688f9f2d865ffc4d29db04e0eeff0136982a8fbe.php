<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fd9884ea6e69926d08e06aa018a95bc85a683fa90791ffcd74a6d168addbfc0c extends Twig_Template
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
        $__internal_6489f998de36e10765a2d823b13652d049319abd461311147f4d9ab6c013a95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6489f998de36e10765a2d823b13652d049319abd461311147f4d9ab6c013a95e->enter($__internal_6489f998de36e10765a2d823b13652d049319abd461311147f4d9ab6c013a95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_88d84dbe61eb3dc26bf26f4b2593089a1e53041e5c04e339c7e15ca7b9e7fe2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d84dbe61eb3dc26bf26f4b2593089a1e53041e5c04e339c7e15ca7b9e7fe2d->enter($__internal_88d84dbe61eb3dc26bf26f4b2593089a1e53041e5c04e339c7e15ca7b9e7fe2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6489f998de36e10765a2d823b13652d049319abd461311147f4d9ab6c013a95e->leave($__internal_6489f998de36e10765a2d823b13652d049319abd461311147f4d9ab6c013a95e_prof);

        
        $__internal_88d84dbe61eb3dc26bf26f4b2593089a1e53041e5c04e339c7e15ca7b9e7fe2d->leave($__internal_88d84dbe61eb3dc26bf26f4b2593089a1e53041e5c04e339c7e15ca7b9e7fe2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
