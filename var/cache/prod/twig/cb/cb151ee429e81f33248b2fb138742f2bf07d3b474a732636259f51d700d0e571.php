<?php

/* ::base.html.twig */
class __TwigTemplate_6894db751d72c5581793812eb59aa8bb95f84c39e851ae5ee9c79e6435b8d2bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <nav>
        <ul style=\"list-style-type: none;\">
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px;\">
                <a href=\"create\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Crear Datos</p>
                </a>
            </li>
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px\">
                <a href=\"update\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Modificar Datos</p>
                </a>
            </li>
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px\">
                <a href=\"list\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Llistar Datos</p>
                </a>
            </li>
            <li style=\"display:inline-block;margin-left:30px;margin-right:30px\">
                <a href=\"delete\" style=\"text-decoration:none; color:black\">
                    <p style=\"font-size:20px;background-color:#990000;border-radius:10px;padding:20px\">Eliminar Datos</p>
                </a>
            </li>
        </ul>
      </nav>
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  88 => 34,  83 => 6,  77 => 5,  71 => 36,  68 => 35,  66 => 34,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/app/Resources/views/base.html.twig");
    }
}
