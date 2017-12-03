<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_175b6ce867f5a90d57d065b2e25b22389265e3d6d895c4b5f249ac7ce76d5f66 extends Twig_Template
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
        $__internal_96ac0cc199fccf1e1a42e72101085165d7e1210cbc6726883ba8d1e0bb610b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ac0cc199fccf1e1a42e72101085165d7e1210cbc6726883ba8d1e0bb610b23->enter($__internal_96ac0cc199fccf1e1a42e72101085165d7e1210cbc6726883ba8d1e0bb610b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_dcc72782dc2b97729f9a0b975aacde49356cabf95da9845226820e41d1b0cbcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc72782dc2b97729f9a0b975aacde49356cabf95da9845226820e41d1b0cbcd->enter($__internal_dcc72782dc2b97729f9a0b975aacde49356cabf95da9845226820e41d1b0cbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_96ac0cc199fccf1e1a42e72101085165d7e1210cbc6726883ba8d1e0bb610b23->leave($__internal_96ac0cc199fccf1e1a42e72101085165d7e1210cbc6726883ba8d1e0bb610b23_prof);

        
        $__internal_dcc72782dc2b97729f9a0b975aacde49356cabf95da9845226820e41d1b0cbcd->leave($__internal_dcc72782dc2b97729f9a0b975aacde49356cabf95da9845226820e41d1b0cbcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
