<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aace9595513d8fd295bae5442f6c0b6ef387ecc4534b825dc51065f8b92adc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aace9595513d8fd295bae5442f6c0b6ef387ecc4534b825dc51065f8b92adc31->enter($__internal_aace9595513d8fd295bae5442f6c0b6ef387ecc4534b825dc51065f8b92adc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_05a0cbb7f7250647f4a480640aa368be54a34b0c6d3d585cc97981275033d0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a0cbb7f7250647f4a480640aa368be54a34b0c6d3d585cc97981275033d0f0->enter($__internal_05a0cbb7f7250647f4a480640aa368be54a34b0c6d3d585cc97981275033d0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_aace9595513d8fd295bae5442f6c0b6ef387ecc4534b825dc51065f8b92adc31->leave($__internal_aace9595513d8fd295bae5442f6c0b6ef387ecc4534b825dc51065f8b92adc31_prof);

        
        $__internal_05a0cbb7f7250647f4a480640aa368be54a34b0c6d3d585cc97981275033d0f0->leave($__internal_05a0cbb7f7250647f4a480640aa368be54a34b0c6d3d585cc97981275033d0f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_768383154430631fae33f69bb9cc2af0cde1328725b3086502bd2fc74f526434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768383154430631fae33f69bb9cc2af0cde1328725b3086502bd2fc74f526434->enter($__internal_768383154430631fae33f69bb9cc2af0cde1328725b3086502bd2fc74f526434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf4b36d69f22f063fa6eb2e4c729d1f15b0934bf79f1e2a6c89126b25fe68982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4b36d69f22f063fa6eb2e4c729d1f15b0934bf79f1e2a6c89126b25fe68982->enter($__internal_cf4b36d69f22f063fa6eb2e4c729d1f15b0934bf79f1e2a6c89126b25fe68982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cf4b36d69f22f063fa6eb2e4c729d1f15b0934bf79f1e2a6c89126b25fe68982->leave($__internal_cf4b36d69f22f063fa6eb2e4c729d1f15b0934bf79f1e2a6c89126b25fe68982_prof);

        
        $__internal_768383154430631fae33f69bb9cc2af0cde1328725b3086502bd2fc74f526434->leave($__internal_768383154430631fae33f69bb9cc2af0cde1328725b3086502bd2fc74f526434_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ccea416132081a488c4458f22922ff8f5faf078f87c687c5cbc2a25ad62be8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccea416132081a488c4458f22922ff8f5faf078f87c687c5cbc2a25ad62be8ab->enter($__internal_ccea416132081a488c4458f22922ff8f5faf078f87c687c5cbc2a25ad62be8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c4c91c72db3a3af0b1918a4d87ee51c8011453d35128044b53d103fc34464ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c91c72db3a3af0b1918a4d87ee51c8011453d35128044b53d103fc34464ece->enter($__internal_c4c91c72db3a3af0b1918a4d87ee51c8011453d35128044b53d103fc34464ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c4c91c72db3a3af0b1918a4d87ee51c8011453d35128044b53d103fc34464ece->leave($__internal_c4c91c72db3a3af0b1918a4d87ee51c8011453d35128044b53d103fc34464ece_prof);

        
        $__internal_ccea416132081a488c4458f22922ff8f5faf078f87c687c5cbc2a25ad62be8ab->leave($__internal_ccea416132081a488c4458f22922ff8f5faf078f87c687c5cbc2a25ad62be8ab_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_472683ee06ded4c235f6bfc684b1df0fba3603c025f8407c95f58209a102433d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472683ee06ded4c235f6bfc684b1df0fba3603c025f8407c95f58209a102433d->enter($__internal_472683ee06ded4c235f6bfc684b1df0fba3603c025f8407c95f58209a102433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6317620275d458191aea86a09e6a7576b32b6f7a80fb513edce3a1d0794c8d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6317620275d458191aea86a09e6a7576b32b6f7a80fb513edce3a1d0794c8d3a->enter($__internal_6317620275d458191aea86a09e6a7576b32b6f7a80fb513edce3a1d0794c8d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6317620275d458191aea86a09e6a7576b32b6f7a80fb513edce3a1d0794c8d3a->leave($__internal_6317620275d458191aea86a09e6a7576b32b6f7a80fb513edce3a1d0794c8d3a_prof);

        
        $__internal_472683ee06ded4c235f6bfc684b1df0fba3603c025f8407c95f58209a102433d->leave($__internal_472683ee06ded4c235f6bfc684b1df0fba3603c025f8407c95f58209a102433d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
