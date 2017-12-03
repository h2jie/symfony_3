<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_693ce7bb96d9146ba67ab268f7a81cdf4f1608e56b661641748f705c7b7a2e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bc4a228fa0de1366c204924cc9858c38053010d86c01e1042e51e9315d581c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc4a228fa0de1366c204924cc9858c38053010d86c01e1042e51e9315d581c4->enter($__internal_0bc4a228fa0de1366c204924cc9858c38053010d86c01e1042e51e9315d581c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3c1212aa08abce481cc1ba95cfe8d46a652e7d6a12c30ceb2ce4337f13096e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1212aa08abce481cc1ba95cfe8d46a652e7d6a12c30ceb2ce4337f13096e38->enter($__internal_3c1212aa08abce481cc1ba95cfe8d46a652e7d6a12c30ceb2ce4337f13096e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0bc4a228fa0de1366c204924cc9858c38053010d86c01e1042e51e9315d581c4->leave($__internal_0bc4a228fa0de1366c204924cc9858c38053010d86c01e1042e51e9315d581c4_prof);

        
        $__internal_3c1212aa08abce481cc1ba95cfe8d46a652e7d6a12c30ceb2ce4337f13096e38->leave($__internal_3c1212aa08abce481cc1ba95cfe8d46a652e7d6a12c30ceb2ce4337f13096e38_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbab0baba8614bf33904e627cf2504ed75cbd507da7d7867522434a7c69088c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbab0baba8614bf33904e627cf2504ed75cbd507da7d7867522434a7c69088c9->enter($__internal_cbab0baba8614bf33904e627cf2504ed75cbd507da7d7867522434a7c69088c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e8941b4147e9ff31e22abd5c69904787ecaf129a97c17132321ce5f7e75c7940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8941b4147e9ff31e22abd5c69904787ecaf129a97c17132321ce5f7e75c7940->enter($__internal_e8941b4147e9ff31e22abd5c69904787ecaf129a97c17132321ce5f7e75c7940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e8941b4147e9ff31e22abd5c69904787ecaf129a97c17132321ce5f7e75c7940->leave($__internal_e8941b4147e9ff31e22abd5c69904787ecaf129a97c17132321ce5f7e75c7940_prof);

        
        $__internal_cbab0baba8614bf33904e627cf2504ed75cbd507da7d7867522434a7c69088c9->leave($__internal_cbab0baba8614bf33904e627cf2504ed75cbd507da7d7867522434a7c69088c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
