<?php

/* @Twig/layout.html.twig */
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
        $__internal_6ce779649d019f0e78ec55a6cc04bf7f371256c779b87f6c649a8273547fa113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce779649d019f0e78ec55a6cc04bf7f371256c779b87f6c649a8273547fa113->enter($__internal_6ce779649d019f0e78ec55a6cc04bf7f371256c779b87f6c649a8273547fa113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5e6c68cb54c78a882f4c40772b7ad5e9ff1324d161b5bd010c1464e33fb979a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6c68cb54c78a882f4c40772b7ad5e9ff1324d161b5bd010c1464e33fb979a9->enter($__internal_5e6c68cb54c78a882f4c40772b7ad5e9ff1324d161b5bd010c1464e33fb979a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6ce779649d019f0e78ec55a6cc04bf7f371256c779b87f6c649a8273547fa113->leave($__internal_6ce779649d019f0e78ec55a6cc04bf7f371256c779b87f6c649a8273547fa113_prof);

        
        $__internal_5e6c68cb54c78a882f4c40772b7ad5e9ff1324d161b5bd010c1464e33fb979a9->leave($__internal_5e6c68cb54c78a882f4c40772b7ad5e9ff1324d161b5bd010c1464e33fb979a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_567078cc1e0bb7eb179467fa4b19b2619abf2930474757753f69f025e91b62cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567078cc1e0bb7eb179467fa4b19b2619abf2930474757753f69f025e91b62cf->enter($__internal_567078cc1e0bb7eb179467fa4b19b2619abf2930474757753f69f025e91b62cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe3f3abaafe0626822603dbc8447715ba9cd4e024f57c7558d245cbde5e2298f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3f3abaafe0626822603dbc8447715ba9cd4e024f57c7558d245cbde5e2298f->enter($__internal_fe3f3abaafe0626822603dbc8447715ba9cd4e024f57c7558d245cbde5e2298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fe3f3abaafe0626822603dbc8447715ba9cd4e024f57c7558d245cbde5e2298f->leave($__internal_fe3f3abaafe0626822603dbc8447715ba9cd4e024f57c7558d245cbde5e2298f_prof);

        
        $__internal_567078cc1e0bb7eb179467fa4b19b2619abf2930474757753f69f025e91b62cf->leave($__internal_567078cc1e0bb7eb179467fa4b19b2619abf2930474757753f69f025e91b62cf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_adeea6bdb680f17abae88bf65835605f5fa3b45a7ccda73ea83a6d5c56a7055c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adeea6bdb680f17abae88bf65835605f5fa3b45a7ccda73ea83a6d5c56a7055c->enter($__internal_adeea6bdb680f17abae88bf65835605f5fa3b45a7ccda73ea83a6d5c56a7055c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce1522f48c22a9d97b5a526ad492b37970c3caa833fdef00f8e54232c14bc929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1522f48c22a9d97b5a526ad492b37970c3caa833fdef00f8e54232c14bc929->enter($__internal_ce1522f48c22a9d97b5a526ad492b37970c3caa833fdef00f8e54232c14bc929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ce1522f48c22a9d97b5a526ad492b37970c3caa833fdef00f8e54232c14bc929->leave($__internal_ce1522f48c22a9d97b5a526ad492b37970c3caa833fdef00f8e54232c14bc929_prof);

        
        $__internal_adeea6bdb680f17abae88bf65835605f5fa3b45a7ccda73ea83a6d5c56a7055c->leave($__internal_adeea6bdb680f17abae88bf65835605f5fa3b45a7ccda73ea83a6d5c56a7055c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe3f1033531f9c403a85806dd4430659ef338d3a4f0636280a8f3e432be5f533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3f1033531f9c403a85806dd4430659ef338d3a4f0636280a8f3e432be5f533->enter($__internal_fe3f1033531f9c403a85806dd4430659ef338d3a4f0636280a8f3e432be5f533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64fe3b51bddf1ac742163e826ed634aa5c3531c3bd012d3f6178e131b3cd7ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fe3b51bddf1ac742163e826ed634aa5c3531c3bd012d3f6178e131b3cd7ebc->enter($__internal_64fe3b51bddf1ac742163e826ed634aa5c3531c3bd012d3f6178e131b3cd7ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64fe3b51bddf1ac742163e826ed634aa5c3531c3bd012d3f6178e131b3cd7ebc->leave($__internal_64fe3b51bddf1ac742163e826ed634aa5c3531c3bd012d3f6178e131b3cd7ebc_prof);

        
        $__internal_fe3f1033531f9c403a85806dd4430659ef338d3a4f0636280a8f3e432be5f533->leave($__internal_fe3f1033531f9c403a85806dd4430659ef338d3a4f0636280a8f3e432be5f533_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/TodoList/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
