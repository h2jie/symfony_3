<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b02dfd81140eb2a24a8fb18cd6332cff44805b1d92cb2302754604add0b319f9 extends Twig_Template
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
        $__internal_fd57f110ca2d5b8f80f0d61cb570c0cef38e777d5bce544adde3db008af04eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd57f110ca2d5b8f80f0d61cb570c0cef38e777d5bce544adde3db008af04eba->enter($__internal_fd57f110ca2d5b8f80f0d61cb570c0cef38e777d5bce544adde3db008af04eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c45cf95bc87a70afeece38b9d44753a8c9fbb4ee017326201868693b71a26275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45cf95bc87a70afeece38b9d44753a8c9fbb4ee017326201868693b71a26275->enter($__internal_c45cf95bc87a70afeece38b9d44753a8c9fbb4ee017326201868693b71a26275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fd57f110ca2d5b8f80f0d61cb570c0cef38e777d5bce544adde3db008af04eba->leave($__internal_fd57f110ca2d5b8f80f0d61cb570c0cef38e777d5bce544adde3db008af04eba_prof);

        
        $__internal_c45cf95bc87a70afeece38b9d44753a8c9fbb4ee017326201868693b71a26275->leave($__internal_c45cf95bc87a70afeece38b9d44753a8c9fbb4ee017326201868693b71a26275_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
