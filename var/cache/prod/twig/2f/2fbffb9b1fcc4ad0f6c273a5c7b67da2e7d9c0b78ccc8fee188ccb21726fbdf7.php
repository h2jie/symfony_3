<?php

/* AppBundle:Task:fail.html.twig */
class __TwigTemplate_c5235740b2c2d370f7b7cbefbb21590121a30be946810bf56ab25923fc36b8c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Task:fail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AppBundle:Task:create";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>No encontrado el elemento con el id</h1>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Task:fail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Task:fail.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/src/AppBundle/Resources/views/Task/fail.html.twig");
    }
}
