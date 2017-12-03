<?php

/* form_table_layout.html.twig */
class __TwigTemplate_c5def86c74746c0ec34e153f54b6ccdddc0f4cf9b9c2adf4fef6d8954bca903a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e836a6c8f5d425be2855cb4b1f841fee2e3f79072ee9a294966dc7e5bdb96a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e836a6c8f5d425be2855cb4b1f841fee2e3f79072ee9a294966dc7e5bdb96a19->enter($__internal_e836a6c8f5d425be2855cb4b1f841fee2e3f79072ee9a294966dc7e5bdb96a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_6b8e762c4ec5460cfc49d715c4f59709598a5169af6d13d3a62d8f4b4989578e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8e762c4ec5460cfc49d715c4f59709598a5169af6d13d3a62d8f4b4989578e->enter($__internal_6b8e762c4ec5460cfc49d715c4f59709598a5169af6d13d3a62d8f4b4989578e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_e836a6c8f5d425be2855cb4b1f841fee2e3f79072ee9a294966dc7e5bdb96a19->leave($__internal_e836a6c8f5d425be2855cb4b1f841fee2e3f79072ee9a294966dc7e5bdb96a19_prof);

        
        $__internal_6b8e762c4ec5460cfc49d715c4f59709598a5169af6d13d3a62d8f4b4989578e->leave($__internal_6b8e762c4ec5460cfc49d715c4f59709598a5169af6d13d3a62d8f4b4989578e_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f6230dee6eed249953d6afe3969020f95217a614f8d93127a06ddc5a982faf42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6230dee6eed249953d6afe3969020f95217a614f8d93127a06ddc5a982faf42->enter($__internal_f6230dee6eed249953d6afe3969020f95217a614f8d93127a06ddc5a982faf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_790e959a600e8da8891a28cba05a2202450e1c6c67732981ca7f9cff9b410620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790e959a600e8da8891a28cba05a2202450e1c6c67732981ca7f9cff9b410620->enter($__internal_790e959a600e8da8891a28cba05a2202450e1c6c67732981ca7f9cff9b410620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_790e959a600e8da8891a28cba05a2202450e1c6c67732981ca7f9cff9b410620->leave($__internal_790e959a600e8da8891a28cba05a2202450e1c6c67732981ca7f9cff9b410620_prof);

        
        $__internal_f6230dee6eed249953d6afe3969020f95217a614f8d93127a06ddc5a982faf42->leave($__internal_f6230dee6eed249953d6afe3969020f95217a614f8d93127a06ddc5a982faf42_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0feef83c54a10c2aa7df49f4002e245f8cacda62e5b7f73aaec11c8ebff11065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0feef83c54a10c2aa7df49f4002e245f8cacda62e5b7f73aaec11c8ebff11065->enter($__internal_0feef83c54a10c2aa7df49f4002e245f8cacda62e5b7f73aaec11c8ebff11065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b17564900b4454b7dae2078783833974358a88d55beda3037006aeb872a133fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17564900b4454b7dae2078783833974358a88d55beda3037006aeb872a133fb->enter($__internal_b17564900b4454b7dae2078783833974358a88d55beda3037006aeb872a133fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_b17564900b4454b7dae2078783833974358a88d55beda3037006aeb872a133fb->leave($__internal_b17564900b4454b7dae2078783833974358a88d55beda3037006aeb872a133fb_prof);

        
        $__internal_0feef83c54a10c2aa7df49f4002e245f8cacda62e5b7f73aaec11c8ebff11065->leave($__internal_0feef83c54a10c2aa7df49f4002e245f8cacda62e5b7f73aaec11c8ebff11065_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_c1dc8d8ce1282c0253c3add9924aa806b3b474af17cb413a7f498a1927f49163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1dc8d8ce1282c0253c3add9924aa806b3b474af17cb413a7f498a1927f49163->enter($__internal_c1dc8d8ce1282c0253c3add9924aa806b3b474af17cb413a7f498a1927f49163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_58ba21151948f584241cf4c4d788f4b50cff29a58af5d9c61b65ee525ce36a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ba21151948f584241cf4c4d788f4b50cff29a58af5d9c61b65ee525ce36a63->enter($__internal_58ba21151948f584241cf4c4d788f4b50cff29a58af5d9c61b65ee525ce36a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_58ba21151948f584241cf4c4d788f4b50cff29a58af5d9c61b65ee525ce36a63->leave($__internal_58ba21151948f584241cf4c4d788f4b50cff29a58af5d9c61b65ee525ce36a63_prof);

        
        $__internal_c1dc8d8ce1282c0253c3add9924aa806b3b474af17cb413a7f498a1927f49163->leave($__internal_c1dc8d8ce1282c0253c3add9924aa806b3b474af17cb413a7f498a1927f49163_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_29a5f9f851e176ee86e8ea8df051832f127cb21bd4afa2bb551ca712309d1fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a5f9f851e176ee86e8ea8df051832f127cb21bd4afa2bb551ca712309d1fd4->enter($__internal_29a5f9f851e176ee86e8ea8df051832f127cb21bd4afa2bb551ca712309d1fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_2f5c61157dd410f9ec141643cb3348b40426cb077bd63ba41bea463277ad839a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5c61157dd410f9ec141643cb3348b40426cb077bd63ba41bea463277ad839a->enter($__internal_2f5c61157dd410f9ec141643cb3348b40426cb077bd63ba41bea463277ad839a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_2f5c61157dd410f9ec141643cb3348b40426cb077bd63ba41bea463277ad839a->leave($__internal_2f5c61157dd410f9ec141643cb3348b40426cb077bd63ba41bea463277ad839a_prof);

        
        $__internal_29a5f9f851e176ee86e8ea8df051832f127cb21bd4afa2bb551ca712309d1fd4->leave($__internal_29a5f9f851e176ee86e8ea8df051832f127cb21bd4afa2bb551ca712309d1fd4_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
