<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6617c35e4b163bb5fa72e904f99f2d36ff92926e7d3b72951b8daaeb4b58cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_226ef1881f9870c06d3603f61aa8cca1e27b693834b49bfa1dba73c1dee7fce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226ef1881f9870c06d3603f61aa8cca1e27b693834b49bfa1dba73c1dee7fce0->enter($__internal_226ef1881f9870c06d3603f61aa8cca1e27b693834b49bfa1dba73c1dee7fce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_74212f45929391736d4b9c7cb9ab70b68e0f6201eae96bff4b7e6280ddbf4ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74212f45929391736d4b9c7cb9ab70b68e0f6201eae96bff4b7e6280ddbf4ce4->enter($__internal_74212f45929391736d4b9c7cb9ab70b68e0f6201eae96bff4b7e6280ddbf4ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_226ef1881f9870c06d3603f61aa8cca1e27b693834b49bfa1dba73c1dee7fce0->leave($__internal_226ef1881f9870c06d3603f61aa8cca1e27b693834b49bfa1dba73c1dee7fce0_prof);

        
        $__internal_74212f45929391736d4b9c7cb9ab70b68e0f6201eae96bff4b7e6280ddbf4ce4->leave($__internal_74212f45929391736d4b9c7cb9ab70b68e0f6201eae96bff4b7e6280ddbf4ce4_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8d147af3c900572be97384cb45b966b74b40dc92eeda947e10e98f6bb1765c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d147af3c900572be97384cb45b966b74b40dc92eeda947e10e98f6bb1765c1f->enter($__internal_8d147af3c900572be97384cb45b966b74b40dc92eeda947e10e98f6bb1765c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5781c6b48bca70c79d9d271ae6155840d498009f3dc437e7da0b9d106bf480e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5781c6b48bca70c79d9d271ae6155840d498009f3dc437e7da0b9d106bf480e5->enter($__internal_5781c6b48bca70c79d9d271ae6155840d498009f3dc437e7da0b9d106bf480e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5781c6b48bca70c79d9d271ae6155840d498009f3dc437e7da0b9d106bf480e5->leave($__internal_5781c6b48bca70c79d9d271ae6155840d498009f3dc437e7da0b9d106bf480e5_prof);

        
        $__internal_8d147af3c900572be97384cb45b966b74b40dc92eeda947e10e98f6bb1765c1f->leave($__internal_8d147af3c900572be97384cb45b966b74b40dc92eeda947e10e98f6bb1765c1f_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0d9769cd633fc41adfcefc04af0e9529f5afcf3aad7743b4b5ba60cfb73d4e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9769cd633fc41adfcefc04af0e9529f5afcf3aad7743b4b5ba60cfb73d4e07->enter($__internal_0d9769cd633fc41adfcefc04af0e9529f5afcf3aad7743b4b5ba60cfb73d4e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d702d6b79a0f3e3914e8c9233b02806c301cbb93ffc3dc6dd3112286de49ec7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d702d6b79a0f3e3914e8c9233b02806c301cbb93ffc3dc6dd3112286de49ec7b->enter($__internal_d702d6b79a0f3e3914e8c9233b02806c301cbb93ffc3dc6dd3112286de49ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d702d6b79a0f3e3914e8c9233b02806c301cbb93ffc3dc6dd3112286de49ec7b->leave($__internal_d702d6b79a0f3e3914e8c9233b02806c301cbb93ffc3dc6dd3112286de49ec7b_prof);

        
        $__internal_0d9769cd633fc41adfcefc04af0e9529f5afcf3aad7743b4b5ba60cfb73d4e07->leave($__internal_0d9769cd633fc41adfcefc04af0e9529f5afcf3aad7743b4b5ba60cfb73d4e07_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b09c1040695795c95339a1890050a003d942f30c06795e74c061be74a63b4939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09c1040695795c95339a1890050a003d942f30c06795e74c061be74a63b4939->enter($__internal_b09c1040695795c95339a1890050a003d942f30c06795e74c061be74a63b4939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c2b624fdc9b67466d89546db8bc07b0aa5bcd136be358efd71fcdae163a0d27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b624fdc9b67466d89546db8bc07b0aa5bcd136be358efd71fcdae163a0d27c->enter($__internal_c2b624fdc9b67466d89546db8bc07b0aa5bcd136be358efd71fcdae163a0d27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c2b624fdc9b67466d89546db8bc07b0aa5bcd136be358efd71fcdae163a0d27c->leave($__internal_c2b624fdc9b67466d89546db8bc07b0aa5bcd136be358efd71fcdae163a0d27c_prof);

        
        $__internal_b09c1040695795c95339a1890050a003d942f30c06795e74c061be74a63b4939->leave($__internal_b09c1040695795c95339a1890050a003d942f30c06795e74c061be74a63b4939_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ce41e75f2fec85630da89becab7311f60ca8ee429e263a96ce32bee74d5f1ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce41e75f2fec85630da89becab7311f60ca8ee429e263a96ce32bee74d5f1ba0->enter($__internal_ce41e75f2fec85630da89becab7311f60ca8ee429e263a96ce32bee74d5f1ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3ed56b49d47d963eda25c0d8a6c3666daa919e27c54434eee8504d67de1200b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed56b49d47d963eda25c0d8a6c3666daa919e27c54434eee8504d67de1200b5->enter($__internal_3ed56b49d47d963eda25c0d8a6c3666daa919e27c54434eee8504d67de1200b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_3eea3f76aae40c0d8d0a898941667f1d4f2a1fb4df271f3fdcf73d3a08ad588b = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_3b0a3fb7e80aa642a252aa7f99c220caa6396b0ed430dfc729048baf4d376c1d = "{{") && ('' === $__internal_3b0a3fb7e80aa642a252aa7f99c220caa6396b0ed430dfc729048baf4d376c1d || 0 === strpos($__internal_3eea3f76aae40c0d8d0a898941667f1d4f2a1fb4df271f3fdcf73d3a08ad588b, $__internal_3b0a3fb7e80aa642a252aa7f99c220caa6396b0ed430dfc729048baf4d376c1d)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_3ed56b49d47d963eda25c0d8a6c3666daa919e27c54434eee8504d67de1200b5->leave($__internal_3ed56b49d47d963eda25c0d8a6c3666daa919e27c54434eee8504d67de1200b5_prof);

        
        $__internal_ce41e75f2fec85630da89becab7311f60ca8ee429e263a96ce32bee74d5f1ba0->leave($__internal_ce41e75f2fec85630da89becab7311f60ca8ee429e263a96ce32bee74d5f1ba0_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e8e8a0ff259d2a9ed15cfb8189f96a616be0ee1c7940e0ff7a6ce42a38b4a823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e8a0ff259d2a9ed15cfb8189f96a616be0ee1c7940e0ff7a6ce42a38b4a823->enter($__internal_e8e8a0ff259d2a9ed15cfb8189f96a616be0ee1c7940e0ff7a6ce42a38b4a823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_73da58f240d71ddc9c5b68008a5b57083f6e8613787312f3ad033f41025b4b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73da58f240d71ddc9c5b68008a5b57083f6e8613787312f3ad033f41025b4b42->enter($__internal_73da58f240d71ddc9c5b68008a5b57083f6e8613787312f3ad033f41025b4b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_73da58f240d71ddc9c5b68008a5b57083f6e8613787312f3ad033f41025b4b42->leave($__internal_73da58f240d71ddc9c5b68008a5b57083f6e8613787312f3ad033f41025b4b42_prof);

        
        $__internal_e8e8a0ff259d2a9ed15cfb8189f96a616be0ee1c7940e0ff7a6ce42a38b4a823->leave($__internal_e8e8a0ff259d2a9ed15cfb8189f96a616be0ee1c7940e0ff7a6ce42a38b4a823_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_c6d619d34e57f6864775f1358252136eff32e8d17e917812f804fec815711157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d619d34e57f6864775f1358252136eff32e8d17e917812f804fec815711157->enter($__internal_c6d619d34e57f6864775f1358252136eff32e8d17e917812f804fec815711157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6c1c8f63ab1dc4d9aae4682a7aa1879f4ca3c30f03da31423e2fce649c741775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1c8f63ab1dc4d9aae4682a7aa1879f4ca3c30f03da31423e2fce649c741775->enter($__internal_6c1c8f63ab1dc4d9aae4682a7aa1879f4ca3c30f03da31423e2fce649c741775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_6c1c8f63ab1dc4d9aae4682a7aa1879f4ca3c30f03da31423e2fce649c741775->leave($__internal_6c1c8f63ab1dc4d9aae4682a7aa1879f4ca3c30f03da31423e2fce649c741775_prof);

        
        $__internal_c6d619d34e57f6864775f1358252136eff32e8d17e917812f804fec815711157->leave($__internal_c6d619d34e57f6864775f1358252136eff32e8d17e917812f804fec815711157_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6e92a3df5eeb4d194a721474a30f9a7c73d4780ea2174a4b24a0c46d8c15dc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e92a3df5eeb4d194a721474a30f9a7c73d4780ea2174a4b24a0c46d8c15dc75->enter($__internal_6e92a3df5eeb4d194a721474a30f9a7c73d4780ea2174a4b24a0c46d8c15dc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_483d551d34fe5b44f9cd7753f281ef67f1b641c56a7884d25eac98dad662051e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483d551d34fe5b44f9cd7753f281ef67f1b641c56a7884d25eac98dad662051e->enter($__internal_483d551d34fe5b44f9cd7753f281ef67f1b641c56a7884d25eac98dad662051e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_483d551d34fe5b44f9cd7753f281ef67f1b641c56a7884d25eac98dad662051e->leave($__internal_483d551d34fe5b44f9cd7753f281ef67f1b641c56a7884d25eac98dad662051e_prof);

        
        $__internal_6e92a3df5eeb4d194a721474a30f9a7c73d4780ea2174a4b24a0c46d8c15dc75->leave($__internal_6e92a3df5eeb4d194a721474a30f9a7c73d4780ea2174a4b24a0c46d8c15dc75_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7876bc2e67b2d920c3bc96534d891a16d3e4dbd4d898b56764d9b93bd1dbd0ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7876bc2e67b2d920c3bc96534d891a16d3e4dbd4d898b56764d9b93bd1dbd0ea->enter($__internal_7876bc2e67b2d920c3bc96534d891a16d3e4dbd4d898b56764d9b93bd1dbd0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_328ac41186faed739e702a2d947204e288d1aa2b6a165dd36b64a177583f976f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328ac41186faed739e702a2d947204e288d1aa2b6a165dd36b64a177583f976f->enter($__internal_328ac41186faed739e702a2d947204e288d1aa2b6a165dd36b64a177583f976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_328ac41186faed739e702a2d947204e288d1aa2b6a165dd36b64a177583f976f->leave($__internal_328ac41186faed739e702a2d947204e288d1aa2b6a165dd36b64a177583f976f_prof);

        
        $__internal_7876bc2e67b2d920c3bc96534d891a16d3e4dbd4d898b56764d9b93bd1dbd0ea->leave($__internal_7876bc2e67b2d920c3bc96534d891a16d3e4dbd4d898b56764d9b93bd1dbd0ea_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_86f2bd6bbe4747e9cf8402f0ca9bef6e4dfae745050145dbfee18367208c41ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f2bd6bbe4747e9cf8402f0ca9bef6e4dfae745050145dbfee18367208c41ec->enter($__internal_86f2bd6bbe4747e9cf8402f0ca9bef6e4dfae745050145dbfee18367208c41ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_7de083f52a154de0d12b155bc56e19f614530f9b0c7335af78f8a11adb77f35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de083f52a154de0d12b155bc56e19f614530f9b0c7335af78f8a11adb77f35e->enter($__internal_7de083f52a154de0d12b155bc56e19f614530f9b0c7335af78f8a11adb77f35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_7de083f52a154de0d12b155bc56e19f614530f9b0c7335af78f8a11adb77f35e->leave($__internal_7de083f52a154de0d12b155bc56e19f614530f9b0c7335af78f8a11adb77f35e_prof);

        
        $__internal_86f2bd6bbe4747e9cf8402f0ca9bef6e4dfae745050145dbfee18367208c41ec->leave($__internal_86f2bd6bbe4747e9cf8402f0ca9bef6e4dfae745050145dbfee18367208c41ec_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_59d0d52d5f68bca7404245eeefc5f9d929ab5bd336ac0e7820c80542362555e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d0d52d5f68bca7404245eeefc5f9d929ab5bd336ac0e7820c80542362555e9->enter($__internal_59d0d52d5f68bca7404245eeefc5f9d929ab5bd336ac0e7820c80542362555e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_bb56c87f55a0bb02b264e67b047da2d4db277e1c5fb6708532b1d270071eb684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb56c87f55a0bb02b264e67b047da2d4db277e1c5fb6708532b1d270071eb684->enter($__internal_bb56c87f55a0bb02b264e67b047da2d4db277e1c5fb6708532b1d270071eb684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_bb56c87f55a0bb02b264e67b047da2d4db277e1c5fb6708532b1d270071eb684->leave($__internal_bb56c87f55a0bb02b264e67b047da2d4db277e1c5fb6708532b1d270071eb684_prof);

        
        $__internal_59d0d52d5f68bca7404245eeefc5f9d929ab5bd336ac0e7820c80542362555e9->leave($__internal_59d0d52d5f68bca7404245eeefc5f9d929ab5bd336ac0e7820c80542362555e9_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d4cf39dd0e9d442ba7bdc60b41f8af6a38751467670814b4468a902531ba87e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4cf39dd0e9d442ba7bdc60b41f8af6a38751467670814b4468a902531ba87e5->enter($__internal_d4cf39dd0e9d442ba7bdc60b41f8af6a38751467670814b4468a902531ba87e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ba4af1ab0f2e89e292583228dc64c791a308a997db0f65a71fb9febe1c0f25e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4af1ab0f2e89e292583228dc64c791a308a997db0f65a71fb9febe1c0f25e5->enter($__internal_ba4af1ab0f2e89e292583228dc64c791a308a997db0f65a71fb9febe1c0f25e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_ba4af1ab0f2e89e292583228dc64c791a308a997db0f65a71fb9febe1c0f25e5->leave($__internal_ba4af1ab0f2e89e292583228dc64c791a308a997db0f65a71fb9febe1c0f25e5_prof);

        
        $__internal_d4cf39dd0e9d442ba7bdc60b41f8af6a38751467670814b4468a902531ba87e5->leave($__internal_d4cf39dd0e9d442ba7bdc60b41f8af6a38751467670814b4468a902531ba87e5_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ad90479f8d41ed03f8749d83edaf974e73da0936e8b46e07c98d004769c066ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad90479f8d41ed03f8749d83edaf974e73da0936e8b46e07c98d004769c066ba->enter($__internal_ad90479f8d41ed03f8749d83edaf974e73da0936e8b46e07c98d004769c066ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c25340c412b8627361fb4ead7453ec1b0c5c14543f89613d55bdb8c89dd46e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25340c412b8627361fb4ead7453ec1b0c5c14543f89613d55bdb8c89dd46e53->enter($__internal_c25340c412b8627361fb4ead7453ec1b0c5c14543f89613d55bdb8c89dd46e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_c25340c412b8627361fb4ead7453ec1b0c5c14543f89613d55bdb8c89dd46e53->leave($__internal_c25340c412b8627361fb4ead7453ec1b0c5c14543f89613d55bdb8c89dd46e53_prof);

        
        $__internal_ad90479f8d41ed03f8749d83edaf974e73da0936e8b46e07c98d004769c066ba->leave($__internal_ad90479f8d41ed03f8749d83edaf974e73da0936e8b46e07c98d004769c066ba_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_da41f06bfa3538beeda24e7d361c7d82a187a9b74ac9518dc1246c261d9ef8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da41f06bfa3538beeda24e7d361c7d82a187a9b74ac9518dc1246c261d9ef8c5->enter($__internal_da41f06bfa3538beeda24e7d361c7d82a187a9b74ac9518dc1246c261d9ef8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7551271147ffa52fdc96dd43118bbbd8d1092aa8a8634f0fde01f4c05ce67ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7551271147ffa52fdc96dd43118bbbd8d1092aa8a8634f0fde01f4c05ce67ff8->enter($__internal_7551271147ffa52fdc96dd43118bbbd8d1092aa8a8634f0fde01f4c05ce67ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_7551271147ffa52fdc96dd43118bbbd8d1092aa8a8634f0fde01f4c05ce67ff8->leave($__internal_7551271147ffa52fdc96dd43118bbbd8d1092aa8a8634f0fde01f4c05ce67ff8_prof);

        
        $__internal_da41f06bfa3538beeda24e7d361c7d82a187a9b74ac9518dc1246c261d9ef8c5->leave($__internal_da41f06bfa3538beeda24e7d361c7d82a187a9b74ac9518dc1246c261d9ef8c5_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4c1a9f59a3e59ee3c1eb61077653f13193f247ce5416c4989d6fb67be9b456c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1a9f59a3e59ee3c1eb61077653f13193f247ce5416c4989d6fb67be9b456c2->enter($__internal_4c1a9f59a3e59ee3c1eb61077653f13193f247ce5416c4989d6fb67be9b456c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3c0eb2f677eee28252214c9681bd477ea8de4dbff174e30bc41290dd0fc4d14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0eb2f677eee28252214c9681bd477ea8de4dbff174e30bc41290dd0fc4d14a->enter($__internal_3c0eb2f677eee28252214c9681bd477ea8de4dbff174e30bc41290dd0fc4d14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3c0eb2f677eee28252214c9681bd477ea8de4dbff174e30bc41290dd0fc4d14a->leave($__internal_3c0eb2f677eee28252214c9681bd477ea8de4dbff174e30bc41290dd0fc4d14a_prof);

        
        $__internal_4c1a9f59a3e59ee3c1eb61077653f13193f247ce5416c4989d6fb67be9b456c2->leave($__internal_4c1a9f59a3e59ee3c1eb61077653f13193f247ce5416c4989d6fb67be9b456c2_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a4e07da682c63bfbd2f659619eb400cadf158a3cfa90d4eb44d66fdf054163f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e07da682c63bfbd2f659619eb400cadf158a3cfa90d4eb44d66fdf054163f4->enter($__internal_a4e07da682c63bfbd2f659619eb400cadf158a3cfa90d4eb44d66fdf054163f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_d08436a8d54d61700e4b12e8965b33aa98252caec7dce8e6ed1b77bda90374d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08436a8d54d61700e4b12e8965b33aa98252caec7dce8e6ed1b77bda90374d9->enter($__internal_d08436a8d54d61700e4b12e8965b33aa98252caec7dce8e6ed1b77bda90374d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d08436a8d54d61700e4b12e8965b33aa98252caec7dce8e6ed1b77bda90374d9->leave($__internal_d08436a8d54d61700e4b12e8965b33aa98252caec7dce8e6ed1b77bda90374d9_prof);

        
        $__internal_a4e07da682c63bfbd2f659619eb400cadf158a3cfa90d4eb44d66fdf054163f4->leave($__internal_a4e07da682c63bfbd2f659619eb400cadf158a3cfa90d4eb44d66fdf054163f4_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_50abd19c041bb9cede18f5490d6cb217543e348d9b51bc13db89c71e57c79193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50abd19c041bb9cede18f5490d6cb217543e348d9b51bc13db89c71e57c79193->enter($__internal_50abd19c041bb9cede18f5490d6cb217543e348d9b51bc13db89c71e57c79193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_1d6cc94c8e401dc42ff5d1c589942d805ce5a898e9ed3e0b8d379401ec1ea1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6cc94c8e401dc42ff5d1c589942d805ce5a898e9ed3e0b8d379401ec1ea1ce->enter($__internal_1d6cc94c8e401dc42ff5d1c589942d805ce5a898e9ed3e0b8d379401ec1ea1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1d6cc94c8e401dc42ff5d1c589942d805ce5a898e9ed3e0b8d379401ec1ea1ce->leave($__internal_1d6cc94c8e401dc42ff5d1c589942d805ce5a898e9ed3e0b8d379401ec1ea1ce_prof);

        
        $__internal_50abd19c041bb9cede18f5490d6cb217543e348d9b51bc13db89c71e57c79193->leave($__internal_50abd19c041bb9cede18f5490d6cb217543e348d9b51bc13db89c71e57c79193_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_dddf52410a04e6661f6af5a373af2a3f472e6f8efe47b46b972c38aeed0d048d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dddf52410a04e6661f6af5a373af2a3f472e6f8efe47b46b972c38aeed0d048d->enter($__internal_dddf52410a04e6661f6af5a373af2a3f472e6f8efe47b46b972c38aeed0d048d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_ef1ce2156e6458a6640d05ea3a77a2b72d4df919dd8cf3f22a8023a3cf93d05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1ce2156e6458a6640d05ea3a77a2b72d4df919dd8cf3f22a8023a3cf93d05e->enter($__internal_ef1ce2156e6458a6640d05ea3a77a2b72d4df919dd8cf3f22a8023a3cf93d05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ef1ce2156e6458a6640d05ea3a77a2b72d4df919dd8cf3f22a8023a3cf93d05e->leave($__internal_ef1ce2156e6458a6640d05ea3a77a2b72d4df919dd8cf3f22a8023a3cf93d05e_prof);

        
        $__internal_dddf52410a04e6661f6af5a373af2a3f472e6f8efe47b46b972c38aeed0d048d->leave($__internal_dddf52410a04e6661f6af5a373af2a3f472e6f8efe47b46b972c38aeed0d048d_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e1ad121283737a525ca75d51592bf67d4c44ccff149ef01f2d37c597d9ca631e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ad121283737a525ca75d51592bf67d4c44ccff149ef01f2d37c597d9ca631e->enter($__internal_e1ad121283737a525ca75d51592bf67d4c44ccff149ef01f2d37c597d9ca631e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3fb12d428269f94bafcf5ca8eefa11a9482b5a5cc59b3c5895d35b730952f55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb12d428269f94bafcf5ca8eefa11a9482b5a5cc59b3c5895d35b730952f55b->enter($__internal_3fb12d428269f94bafcf5ca8eefa11a9482b5a5cc59b3c5895d35b730952f55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_3fb12d428269f94bafcf5ca8eefa11a9482b5a5cc59b3c5895d35b730952f55b->leave($__internal_3fb12d428269f94bafcf5ca8eefa11a9482b5a5cc59b3c5895d35b730952f55b_prof);

        
        $__internal_e1ad121283737a525ca75d51592bf67d4c44ccff149ef01f2d37c597d9ca631e->leave($__internal_e1ad121283737a525ca75d51592bf67d4c44ccff149ef01f2d37c597d9ca631e_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ddb5a4ee431ebfb8d4ca9b115b80622d37ff8c34edd4f10c994eaabb4e8d148c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb5a4ee431ebfb8d4ca9b115b80622d37ff8c34edd4f10c994eaabb4e8d148c->enter($__internal_ddb5a4ee431ebfb8d4ca9b115b80622d37ff8c34edd4f10c994eaabb4e8d148c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_384e1b676b6c0f2b18318175e50c01d6b7e6a64c1255fc729d98ab6e590f55d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384e1b676b6c0f2b18318175e50c01d6b7e6a64c1255fc729d98ab6e590f55d6->enter($__internal_384e1b676b6c0f2b18318175e50c01d6b7e6a64c1255fc729d98ab6e590f55d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_384e1b676b6c0f2b18318175e50c01d6b7e6a64c1255fc729d98ab6e590f55d6->leave($__internal_384e1b676b6c0f2b18318175e50c01d6b7e6a64c1255fc729d98ab6e590f55d6_prof);

        
        $__internal_ddb5a4ee431ebfb8d4ca9b115b80622d37ff8c34edd4f10c994eaabb4e8d148c->leave($__internal_ddb5a4ee431ebfb8d4ca9b115b80622d37ff8c34edd4f10c994eaabb4e8d148c_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_14a448321b391d74dd6f33f49de9f4f75e08b8014058b32b0bff906fca032159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a448321b391d74dd6f33f49de9f4f75e08b8014058b32b0bff906fca032159->enter($__internal_14a448321b391d74dd6f33f49de9f4f75e08b8014058b32b0bff906fca032159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6fb53e7395bb0dbc396d3c2bab061a520597768cfb8e505758e9961d5c5c09d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb53e7395bb0dbc396d3c2bab061a520597768cfb8e505758e9961d5c5c09d2->enter($__internal_6fb53e7395bb0dbc396d3c2bab061a520597768cfb8e505758e9961d5c5c09d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_6fb53e7395bb0dbc396d3c2bab061a520597768cfb8e505758e9961d5c5c09d2->leave($__internal_6fb53e7395bb0dbc396d3c2bab061a520597768cfb8e505758e9961d5c5c09d2_prof);

        
        $__internal_14a448321b391d74dd6f33f49de9f4f75e08b8014058b32b0bff906fca032159->leave($__internal_14a448321b391d74dd6f33f49de9f4f75e08b8014058b32b0bff906fca032159_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_ea3d89c581bf670060abdfacf07f314894edd3fd1348ee763ed9c2b7e2c796ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3d89c581bf670060abdfacf07f314894edd3fd1348ee763ed9c2b7e2c796ed->enter($__internal_ea3d89c581bf670060abdfacf07f314894edd3fd1348ee763ed9c2b7e2c796ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_c433eba037afe5e535a417b438d287e1f7084f68f5b7a15cd4082662fef25bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c433eba037afe5e535a417b438d287e1f7084f68f5b7a15cd4082662fef25bd9->enter($__internal_c433eba037afe5e535a417b438d287e1f7084f68f5b7a15cd4082662fef25bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c433eba037afe5e535a417b438d287e1f7084f68f5b7a15cd4082662fef25bd9->leave($__internal_c433eba037afe5e535a417b438d287e1f7084f68f5b7a15cd4082662fef25bd9_prof);

        
        $__internal_ea3d89c581bf670060abdfacf07f314894edd3fd1348ee763ed9c2b7e2c796ed->leave($__internal_ea3d89c581bf670060abdfacf07f314894edd3fd1348ee763ed9c2b7e2c796ed_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_65f363efd9dbedf95affab7c07c55704aa9010104f158dc7d5a763f8329af3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f363efd9dbedf95affab7c07c55704aa9010104f158dc7d5a763f8329af3a4->enter($__internal_65f363efd9dbedf95affab7c07c55704aa9010104f158dc7d5a763f8329af3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_94abdfecb7bb3d5fdb60af2b1c38707a0ae52dbc78abdffad0f94535de2087ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94abdfecb7bb3d5fdb60af2b1c38707a0ae52dbc78abdffad0f94535de2087ab->enter($__internal_94abdfecb7bb3d5fdb60af2b1c38707a0ae52dbc78abdffad0f94535de2087ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_94abdfecb7bb3d5fdb60af2b1c38707a0ae52dbc78abdffad0f94535de2087ab->leave($__internal_94abdfecb7bb3d5fdb60af2b1c38707a0ae52dbc78abdffad0f94535de2087ab_prof);

        
        $__internal_65f363efd9dbedf95affab7c07c55704aa9010104f158dc7d5a763f8329af3a4->leave($__internal_65f363efd9dbedf95affab7c07c55704aa9010104f158dc7d5a763f8329af3a4_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_74ba5efa3574fe652de43d1e0b79885a7c9f9c64a2f2b4cd9766e928df0398f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ba5efa3574fe652de43d1e0b79885a7c9f9c64a2f2b4cd9766e928df0398f2->enter($__internal_74ba5efa3574fe652de43d1e0b79885a7c9f9c64a2f2b4cd9766e928df0398f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_fe44397f16f811b201e04f5f723128284e8b2bd8e2137a89b1067a000eabe01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe44397f16f811b201e04f5f723128284e8b2bd8e2137a89b1067a000eabe01b->enter($__internal_fe44397f16f811b201e04f5f723128284e8b2bd8e2137a89b1067a000eabe01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fe44397f16f811b201e04f5f723128284e8b2bd8e2137a89b1067a000eabe01b->leave($__internal_fe44397f16f811b201e04f5f723128284e8b2bd8e2137a89b1067a000eabe01b_prof);

        
        $__internal_74ba5efa3574fe652de43d1e0b79885a7c9f9c64a2f2b4cd9766e928df0398f2->leave($__internal_74ba5efa3574fe652de43d1e0b79885a7c9f9c64a2f2b4cd9766e928df0398f2_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d0dfc7801e817b8634aa76ad7ae597af0a188304fff7b30d18c09c8d9e5e8f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0dfc7801e817b8634aa76ad7ae597af0a188304fff7b30d18c09c8d9e5e8f58->enter($__internal_d0dfc7801e817b8634aa76ad7ae597af0a188304fff7b30d18c09c8d9e5e8f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_97a236962336c23d6c4f3c09a9a30f4a961585959e41ce2fa8e2fd6de3548b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a236962336c23d6c4f3c09a9a30f4a961585959e41ce2fa8e2fd6de3548b09->enter($__internal_97a236962336c23d6c4f3c09a9a30f4a961585959e41ce2fa8e2fd6de3548b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_97a236962336c23d6c4f3c09a9a30f4a961585959e41ce2fa8e2fd6de3548b09->leave($__internal_97a236962336c23d6c4f3c09a9a30f4a961585959e41ce2fa8e2fd6de3548b09_prof);

        
        $__internal_d0dfc7801e817b8634aa76ad7ae597af0a188304fff7b30d18c09c8d9e5e8f58->leave($__internal_d0dfc7801e817b8634aa76ad7ae597af0a188304fff7b30d18c09c8d9e5e8f58_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a8e235e563813a7b56386d1dcb48ab64375d3da5e0ac63d4688f7d360998c521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e235e563813a7b56386d1dcb48ab64375d3da5e0ac63d4688f7d360998c521->enter($__internal_a8e235e563813a7b56386d1dcb48ab64375d3da5e0ac63d4688f7d360998c521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_de521fc98d7eaeab986193ed39f6896166ecb505c67e59de74dae87a187fc2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de521fc98d7eaeab986193ed39f6896166ecb505c67e59de74dae87a187fc2ea->enter($__internal_de521fc98d7eaeab986193ed39f6896166ecb505c67e59de74dae87a187fc2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_de521fc98d7eaeab986193ed39f6896166ecb505c67e59de74dae87a187fc2ea->leave($__internal_de521fc98d7eaeab986193ed39f6896166ecb505c67e59de74dae87a187fc2ea_prof);

        
        $__internal_a8e235e563813a7b56386d1dcb48ab64375d3da5e0ac63d4688f7d360998c521->leave($__internal_a8e235e563813a7b56386d1dcb48ab64375d3da5e0ac63d4688f7d360998c521_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_328056545b73f9a1c510a06a3e40d87a0b44c74625b040cdbbb9dae7fed48e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328056545b73f9a1c510a06a3e40d87a0b44c74625b040cdbbb9dae7fed48e95->enter($__internal_328056545b73f9a1c510a06a3e40d87a0b44c74625b040cdbbb9dae7fed48e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_31b409cd14be4caf7872c7a701e210ca12908756308ee7ee2fd635da66f55749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b409cd14be4caf7872c7a701e210ca12908756308ee7ee2fd635da66f55749->enter($__internal_31b409cd14be4caf7872c7a701e210ca12908756308ee7ee2fd635da66f55749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_31b409cd14be4caf7872c7a701e210ca12908756308ee7ee2fd635da66f55749->leave($__internal_31b409cd14be4caf7872c7a701e210ca12908756308ee7ee2fd635da66f55749_prof);

        
        $__internal_328056545b73f9a1c510a06a3e40d87a0b44c74625b040cdbbb9dae7fed48e95->leave($__internal_328056545b73f9a1c510a06a3e40d87a0b44c74625b040cdbbb9dae7fed48e95_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_62992f7fc5e711404b99918355476825cedecbad9558541a2fcaeb4ffe884958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62992f7fc5e711404b99918355476825cedecbad9558541a2fcaeb4ffe884958->enter($__internal_62992f7fc5e711404b99918355476825cedecbad9558541a2fcaeb4ffe884958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c672c727b34b6cfb209e4472f61ccf20ae13dcb1385b25d6cb6fb95c3c3e5261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c672c727b34b6cfb209e4472f61ccf20ae13dcb1385b25d6cb6fb95c3c3e5261->enter($__internal_c672c727b34b6cfb209e4472f61ccf20ae13dcb1385b25d6cb6fb95c3c3e5261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_c672c727b34b6cfb209e4472f61ccf20ae13dcb1385b25d6cb6fb95c3c3e5261->leave($__internal_c672c727b34b6cfb209e4472f61ccf20ae13dcb1385b25d6cb6fb95c3c3e5261_prof);

        
        $__internal_62992f7fc5e711404b99918355476825cedecbad9558541a2fcaeb4ffe884958->leave($__internal_62992f7fc5e711404b99918355476825cedecbad9558541a2fcaeb4ffe884958_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
