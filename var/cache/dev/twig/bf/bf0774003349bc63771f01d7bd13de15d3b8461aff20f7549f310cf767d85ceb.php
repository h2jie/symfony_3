<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1ba13413b4ed4f06f8ac2c03afa72d1213546ef5b2ae1d318b812ffacc9119d1 extends Twig_Template
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
        $__internal_f3d2d2a19df145c3fd110b54df33a1b500a233aeb5fb8f5c42045f0790d8b8ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d2d2a19df145c3fd110b54df33a1b500a233aeb5fb8f5c42045f0790d8b8ec->enter($__internal_f3d2d2a19df145c3fd110b54df33a1b500a233aeb5fb8f5c42045f0790d8b8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_fd04b3166ac90bdb32f68586844d9632ab93dee33694b333d1179205e8403bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd04b3166ac90bdb32f68586844d9632ab93dee33694b333d1179205e8403bac->enter($__internal_fd04b3166ac90bdb32f68586844d9632ab93dee33694b333d1179205e8403bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_f3d2d2a19df145c3fd110b54df33a1b500a233aeb5fb8f5c42045f0790d8b8ec->leave($__internal_f3d2d2a19df145c3fd110b54df33a1b500a233aeb5fb8f5c42045f0790d8b8ec_prof);

        
        $__internal_fd04b3166ac90bdb32f68586844d9632ab93dee33694b333d1179205e8403bac->leave($__internal_fd04b3166ac90bdb32f68586844d9632ab93dee33694b333d1179205e8403bac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
