<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_d74e587f42409b48045745c886b5d25596f9c5a22994c2df23d0db95d163727f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59001a4e9e547b94d431939b20260ba87a100d8e33accef6d13b2748b5919f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59001a4e9e547b94d431939b20260ba87a100d8e33accef6d13b2748b5919f84->enter($__internal_59001a4e9e547b94d431939b20260ba87a100d8e33accef6d13b2748b5919f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_8a0d79f2e0daf2db5f0788b192c0ed888205fc5e562e67be2963bac6419220c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0d79f2e0daf2db5f0788b192c0ed888205fc5e562e67be2963bac6419220c0->enter($__internal_8a0d79f2e0daf2db5f0788b192c0ed888205fc5e562e67be2963bac6419220c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59001a4e9e547b94d431939b20260ba87a100d8e33accef6d13b2748b5919f84->leave($__internal_59001a4e9e547b94d431939b20260ba87a100d8e33accef6d13b2748b5919f84_prof);

        
        $__internal_8a0d79f2e0daf2db5f0788b192c0ed888205fc5e562e67be2963bac6419220c0->leave($__internal_8a0d79f2e0daf2db5f0788b192c0ed888205fc5e562e67be2963bac6419220c0_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9450bfdad7ee127168a5887f614e1604e22f03732d64a736658d25ca0f31de27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9450bfdad7ee127168a5887f614e1604e22f03732d64a736658d25ca0f31de27->enter($__internal_9450bfdad7ee127168a5887f614e1604e22f03732d64a736658d25ca0f31de27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_58f802d28ee4cc840499f71cb9b8e739cf93dabfbda315cdc138d23b4f3c791e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f802d28ee4cc840499f71cb9b8e739cf93dabfbda315cdc138d23b4f3c791e->enter($__internal_58f802d28ee4cc840499f71cb9b8e739cf93dabfbda315cdc138d23b4f3c791e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_58f802d28ee4cc840499f71cb9b8e739cf93dabfbda315cdc138d23b4f3c791e->leave($__internal_58f802d28ee4cc840499f71cb9b8e739cf93dabfbda315cdc138d23b4f3c791e_prof);

        
        $__internal_9450bfdad7ee127168a5887f614e1604e22f03732d64a736658d25ca0f31de27->leave($__internal_9450bfdad7ee127168a5887f614e1604e22f03732d64a736658d25ca0f31de27_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_678658b7953b3cb12c6e734b37f52807a6db897556e866d9e7160fe11fd41f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678658b7953b3cb12c6e734b37f52807a6db897556e866d9e7160fe11fd41f65->enter($__internal_678658b7953b3cb12c6e734b37f52807a6db897556e866d9e7160fe11fd41f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_b033baf50bdb391fb446ed738eaaf9cb86ddc8f519fbe280ec319e6340996e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b033baf50bdb391fb446ed738eaaf9cb86ddc8f519fbe280ec319e6340996e94->enter($__internal_b033baf50bdb391fb446ed738eaaf9cb86ddc8f519fbe280ec319e6340996e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_b033baf50bdb391fb446ed738eaaf9cb86ddc8f519fbe280ec319e6340996e94->leave($__internal_b033baf50bdb391fb446ed738eaaf9cb86ddc8f519fbe280ec319e6340996e94_prof);

        
        $__internal_678658b7953b3cb12c6e734b37f52807a6db897556e866d9e7160fe11fd41f65->leave($__internal_678658b7953b3cb12c6e734b37f52807a6db897556e866d9e7160fe11fd41f65_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a258b5336f3bee314e7b3b1067b766785c12a0d322731a4dcb29951e8a29f633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a258b5336f3bee314e7b3b1067b766785c12a0d322731a4dcb29951e8a29f633->enter($__internal_a258b5336f3bee314e7b3b1067b766785c12a0d322731a4dcb29951e8a29f633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_3fbcc9ce6dc47f73dcf17ea4e052561743a0e8237471ec27b791a66823ced47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbcc9ce6dc47f73dcf17ea4e052561743a0e8237471ec27b791a66823ced47f->enter($__internal_3fbcc9ce6dc47f73dcf17ea4e052561743a0e8237471ec27b791a66823ced47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_3fbcc9ce6dc47f73dcf17ea4e052561743a0e8237471ec27b791a66823ced47f->leave($__internal_3fbcc9ce6dc47f73dcf17ea4e052561743a0e8237471ec27b791a66823ced47f_prof);

        
        $__internal_a258b5336f3bee314e7b3b1067b766785c12a0d322731a4dcb29951e8a29f633->leave($__internal_a258b5336f3bee314e7b3b1067b766785c12a0d322731a4dcb29951e8a29f633_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d5214bbbeef9838df8ebb86709099068652ac53bb435fd3a3aa3c652d35cd948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5214bbbeef9838df8ebb86709099068652ac53bb435fd3a3aa3c652d35cd948->enter($__internal_d5214bbbeef9838df8ebb86709099068652ac53bb435fd3a3aa3c652d35cd948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_635213fd51fdce1c1f66a20490c01132d1b2c8e9c0dc0e52dffc202ba643924f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635213fd51fdce1c1f66a20490c01132d1b2c8e9c0dc0e52dffc202ba643924f->enter($__internal_635213fd51fdce1c1f66a20490c01132d1b2c8e9c0dc0e52dffc202ba643924f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_635213fd51fdce1c1f66a20490c01132d1b2c8e9c0dc0e52dffc202ba643924f->leave($__internal_635213fd51fdce1c1f66a20490c01132d1b2c8e9c0dc0e52dffc202ba643924f_prof);

        
        $__internal_d5214bbbeef9838df8ebb86709099068652ac53bb435fd3a3aa3c652d35cd948->leave($__internal_d5214bbbeef9838df8ebb86709099068652ac53bb435fd3a3aa3c652d35cd948_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_884240d03dab3ed744a696f7d1f37fd84be876c285cf9089bcf6842e2180e6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884240d03dab3ed744a696f7d1f37fd84be876c285cf9089bcf6842e2180e6d7->enter($__internal_884240d03dab3ed744a696f7d1f37fd84be876c285cf9089bcf6842e2180e6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_811f535bc567549d1d77952d19d73c34e612e5c178b4977a28a5e011aea90d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811f535bc567549d1d77952d19d73c34e612e5c178b4977a28a5e011aea90d80->enter($__internal_811f535bc567549d1d77952d19d73c34e612e5c178b4977a28a5e011aea90d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_811f535bc567549d1d77952d19d73c34e612e5c178b4977a28a5e011aea90d80->leave($__internal_811f535bc567549d1d77952d19d73c34e612e5c178b4977a28a5e011aea90d80_prof);

        
        $__internal_884240d03dab3ed744a696f7d1f37fd84be876c285cf9089bcf6842e2180e6d7->leave($__internal_884240d03dab3ed744a696f7d1f37fd84be876c285cf9089bcf6842e2180e6d7_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_da197d5519320244e2c721cffb210cfb53fd29a9ba127d0d709a028e07cfeb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da197d5519320244e2c721cffb210cfb53fd29a9ba127d0d709a028e07cfeb2d->enter($__internal_da197d5519320244e2c721cffb210cfb53fd29a9ba127d0d709a028e07cfeb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_c228213970be7f8d30f37b71451bf26d5592f70b416186f1cc87d1111fbc42ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c228213970be7f8d30f37b71451bf26d5592f70b416186f1cc87d1111fbc42ff->enter($__internal_c228213970be7f8d30f37b71451bf26d5592f70b416186f1cc87d1111fbc42ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_c228213970be7f8d30f37b71451bf26d5592f70b416186f1cc87d1111fbc42ff->leave($__internal_c228213970be7f8d30f37b71451bf26d5592f70b416186f1cc87d1111fbc42ff_prof);

        
        $__internal_da197d5519320244e2c721cffb210cfb53fd29a9ba127d0d709a028e07cfeb2d->leave($__internal_da197d5519320244e2c721cffb210cfb53fd29a9ba127d0d709a028e07cfeb2d_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_72c57ee83d671b66afe9b4233d9938ccd39e6ebf638cbb539436793c0a83cd79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c57ee83d671b66afe9b4233d9938ccd39e6ebf638cbb539436793c0a83cd79->enter($__internal_72c57ee83d671b66afe9b4233d9938ccd39e6ebf638cbb539436793c0a83cd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_91c4d2391a1352017eea038a7fe4660765e866f531d4e890488d27466edc1be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c4d2391a1352017eea038a7fe4660765e866f531d4e890488d27466edc1be0->enter($__internal_91c4d2391a1352017eea038a7fe4660765e866f531d4e890488d27466edc1be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_91c4d2391a1352017eea038a7fe4660765e866f531d4e890488d27466edc1be0->leave($__internal_91c4d2391a1352017eea038a7fe4660765e866f531d4e890488d27466edc1be0_prof);

        
        $__internal_72c57ee83d671b66afe9b4233d9938ccd39e6ebf638cbb539436793c0a83cd79->leave($__internal_72c57ee83d671b66afe9b4233d9938ccd39e6ebf638cbb539436793c0a83cd79_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1f66933d53d74812ddafacabc6b886eb5119cc0d1831b7653e6d6cd55390fc64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f66933d53d74812ddafacabc6b886eb5119cc0d1831b7653e6d6cd55390fc64->enter($__internal_1f66933d53d74812ddafacabc6b886eb5119cc0d1831b7653e6d6cd55390fc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7dabe587a56e987685e70d41dac67654569995e5276f21ec34383754f1d4479c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dabe587a56e987685e70d41dac67654569995e5276f21ec34383754f1d4479c->enter($__internal_7dabe587a56e987685e70d41dac67654569995e5276f21ec34383754f1d4479c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_7dabe587a56e987685e70d41dac67654569995e5276f21ec34383754f1d4479c->leave($__internal_7dabe587a56e987685e70d41dac67654569995e5276f21ec34383754f1d4479c_prof);

        
        $__internal_1f66933d53d74812ddafacabc6b886eb5119cc0d1831b7653e6d6cd55390fc64->leave($__internal_1f66933d53d74812ddafacabc6b886eb5119cc0d1831b7653e6d6cd55390fc64_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_21cdaf11324a8f831c95df9c4554a6f51f1fd7885f5f25fff81c3f7a7a99acfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21cdaf11324a8f831c95df9c4554a6f51f1fd7885f5f25fff81c3f7a7a99acfb->enter($__internal_21cdaf11324a8f831c95df9c4554a6f51f1fd7885f5f25fff81c3f7a7a99acfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2a2c235e902426bdc8808951555175f5c4932af63c0c2acba9c74973c35a09cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2c235e902426bdc8808951555175f5c4932af63c0c2acba9c74973c35a09cb->enter($__internal_2a2c235e902426bdc8808951555175f5c4932af63c0c2acba9c74973c35a09cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_2a2c235e902426bdc8808951555175f5c4932af63c0c2acba9c74973c35a09cb->leave($__internal_2a2c235e902426bdc8808951555175f5c4932af63c0c2acba9c74973c35a09cb_prof);

        
        $__internal_21cdaf11324a8f831c95df9c4554a6f51f1fd7885f5f25fff81c3f7a7a99acfb->leave($__internal_21cdaf11324a8f831c95df9c4554a6f51f1fd7885f5f25fff81c3f7a7a99acfb_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fac867c8e8042897066c3c6e099334431ecc0a9e0e31e384cff47e3569952c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac867c8e8042897066c3c6e099334431ecc0a9e0e31e384cff47e3569952c0e->enter($__internal_fac867c8e8042897066c3c6e099334431ecc0a9e0e31e384cff47e3569952c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_9ba39d30b3513d8a36e059a7ac2e4750d58339a232e1579d3060e3afe91e16fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba39d30b3513d8a36e059a7ac2e4750d58339a232e1579d3060e3afe91e16fb->enter($__internal_9ba39d30b3513d8a36e059a7ac2e4750d58339a232e1579d3060e3afe91e16fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_9ba39d30b3513d8a36e059a7ac2e4750d58339a232e1579d3060e3afe91e16fb->leave($__internal_9ba39d30b3513d8a36e059a7ac2e4750d58339a232e1579d3060e3afe91e16fb_prof);

        
        $__internal_fac867c8e8042897066c3c6e099334431ecc0a9e0e31e384cff47e3569952c0e->leave($__internal_fac867c8e8042897066c3c6e099334431ecc0a9e0e31e384cff47e3569952c0e_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8ddb9c4ca41913d28bc60400ef64a852ca0f0f011fe9693ce6a3b0962febe26a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ddb9c4ca41913d28bc60400ef64a852ca0f0f011fe9693ce6a3b0962febe26a->enter($__internal_8ddb9c4ca41913d28bc60400ef64a852ca0f0f011fe9693ce6a3b0962febe26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_485c15f952a861d83229730bd5643c45b9420408a3896928096fd3dba5331a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485c15f952a861d83229730bd5643c45b9420408a3896928096fd3dba5331a7c->enter($__internal_485c15f952a861d83229730bd5643c45b9420408a3896928096fd3dba5331a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_485c15f952a861d83229730bd5643c45b9420408a3896928096fd3dba5331a7c->leave($__internal_485c15f952a861d83229730bd5643c45b9420408a3896928096fd3dba5331a7c_prof);

        
        $__internal_8ddb9c4ca41913d28bc60400ef64a852ca0f0f011fe9693ce6a3b0962febe26a->leave($__internal_8ddb9c4ca41913d28bc60400ef64a852ca0f0f011fe9693ce6a3b0962febe26a_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_5a14d7c86d0b684d2559aea33b4035ff5588565e282a949d3616f58183c72c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a14d7c86d0b684d2559aea33b4035ff5588565e282a949d3616f58183c72c60->enter($__internal_5a14d7c86d0b684d2559aea33b4035ff5588565e282a949d3616f58183c72c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7c4665088443ae90a002718271f330912466bc9b8b314dd0e0b61fa8775f68de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4665088443ae90a002718271f330912466bc9b8b314dd0e0b61fa8775f68de->enter($__internal_7c4665088443ae90a002718271f330912466bc9b8b314dd0e0b61fa8775f68de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_7c4665088443ae90a002718271f330912466bc9b8b314dd0e0b61fa8775f68de->leave($__internal_7c4665088443ae90a002718271f330912466bc9b8b314dd0e0b61fa8775f68de_prof);

        
        $__internal_5a14d7c86d0b684d2559aea33b4035ff5588565e282a949d3616f58183c72c60->leave($__internal_5a14d7c86d0b684d2559aea33b4035ff5588565e282a949d3616f58183c72c60_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_78d0adc1852b87d7951c583a30800cd448881b1f5c156de3bc5131076640a21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d0adc1852b87d7951c583a30800cd448881b1f5c156de3bc5131076640a21e->enter($__internal_78d0adc1852b87d7951c583a30800cd448881b1f5c156de3bc5131076640a21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_21c095b6e1c2644c8ecbe5da2e2d4ef6ca8dc299bd23732f42306322a6ee3c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c095b6e1c2644c8ecbe5da2e2d4ef6ca8dc299bd23732f42306322a6ee3c81->enter($__internal_21c095b6e1c2644c8ecbe5da2e2d4ef6ca8dc299bd23732f42306322a6ee3c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_21c095b6e1c2644c8ecbe5da2e2d4ef6ca8dc299bd23732f42306322a6ee3c81->leave($__internal_21c095b6e1c2644c8ecbe5da2e2d4ef6ca8dc299bd23732f42306322a6ee3c81_prof);

        
        $__internal_78d0adc1852b87d7951c583a30800cd448881b1f5c156de3bc5131076640a21e->leave($__internal_78d0adc1852b87d7951c583a30800cd448881b1f5c156de3bc5131076640a21e_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_1f415c52612928481faf741a6f44056812284d151814246b3a14075f4be49254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f415c52612928481faf741a6f44056812284d151814246b3a14075f4be49254->enter($__internal_1f415c52612928481faf741a6f44056812284d151814246b3a14075f4be49254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_8ac6aee771ba9f3d43259a4ec4f3897aaeee8db733c6cc7d368e05f1d03b1ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac6aee771ba9f3d43259a4ec4f3897aaeee8db733c6cc7d368e05f1d03b1ab1->enter($__internal_8ac6aee771ba9f3d43259a4ec4f3897aaeee8db733c6cc7d368e05f1d03b1ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_8ac6aee771ba9f3d43259a4ec4f3897aaeee8db733c6cc7d368e05f1d03b1ab1->leave($__internal_8ac6aee771ba9f3d43259a4ec4f3897aaeee8db733c6cc7d368e05f1d03b1ab1_prof);

        
        $__internal_1f415c52612928481faf741a6f44056812284d151814246b3a14075f4be49254->leave($__internal_1f415c52612928481faf741a6f44056812284d151814246b3a14075f4be49254_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_92c33337e32392f8514c4bb48887516c9b991b2c17500f43b6ab75c0295b64f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c33337e32392f8514c4bb48887516c9b991b2c17500f43b6ab75c0295b64f9->enter($__internal_92c33337e32392f8514c4bb48887516c9b991b2c17500f43b6ab75c0295b64f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_044c6fcf1b651c56028706aa0a9fd4139689d2c84b9ace25a6902e03938bc0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044c6fcf1b651c56028706aa0a9fd4139689d2c84b9ace25a6902e03938bc0d8->enter($__internal_044c6fcf1b651c56028706aa0a9fd4139689d2c84b9ace25a6902e03938bc0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_044c6fcf1b651c56028706aa0a9fd4139689d2c84b9ace25a6902e03938bc0d8->leave($__internal_044c6fcf1b651c56028706aa0a9fd4139689d2c84b9ace25a6902e03938bc0d8_prof);

        
        $__internal_92c33337e32392f8514c4bb48887516c9b991b2c17500f43b6ab75c0295b64f9->leave($__internal_92c33337e32392f8514c4bb48887516c9b991b2c17500f43b6ab75c0295b64f9_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_36ba2e62764c70173fe09a3ecec1f0d499bddae36b50084eab76d5be18c73a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ba2e62764c70173fe09a3ecec1f0d499bddae36b50084eab76d5be18c73a81->enter($__internal_36ba2e62764c70173fe09a3ecec1f0d499bddae36b50084eab76d5be18c73a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_aa735c9c3468f2cf36a8304a91d4252a2c9f06db7774f8c7930964d3b027214f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa735c9c3468f2cf36a8304a91d4252a2c9f06db7774f8c7930964d3b027214f->enter($__internal_aa735c9c3468f2cf36a8304a91d4252a2c9f06db7774f8c7930964d3b027214f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_aa735c9c3468f2cf36a8304a91d4252a2c9f06db7774f8c7930964d3b027214f->leave($__internal_aa735c9c3468f2cf36a8304a91d4252a2c9f06db7774f8c7930964d3b027214f_prof);

        
        $__internal_36ba2e62764c70173fe09a3ecec1f0d499bddae36b50084eab76d5be18c73a81->leave($__internal_36ba2e62764c70173fe09a3ecec1f0d499bddae36b50084eab76d5be18c73a81_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_896398d4d1935d64fb72da69155e5b9d5c53ac9c0e6a71b176515508afac3d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896398d4d1935d64fb72da69155e5b9d5c53ac9c0e6a71b176515508afac3d15->enter($__internal_896398d4d1935d64fb72da69155e5b9d5c53ac9c0e6a71b176515508afac3d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ddd21b556d16023b8483680c46234de19e7321b6702eb4fd1b142dd33329d3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd21b556d16023b8483680c46234de19e7321b6702eb4fd1b142dd33329d3fa->enter($__internal_ddd21b556d16023b8483680c46234de19e7321b6702eb4fd1b142dd33329d3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_ddd21b556d16023b8483680c46234de19e7321b6702eb4fd1b142dd33329d3fa->leave($__internal_ddd21b556d16023b8483680c46234de19e7321b6702eb4fd1b142dd33329d3fa_prof);

        
        $__internal_896398d4d1935d64fb72da69155e5b9d5c53ac9c0e6a71b176515508afac3d15->leave($__internal_896398d4d1935d64fb72da69155e5b9d5c53ac9c0e6a71b176515508afac3d15_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_21f70258238e56567c947547fa931d7e257cd2de393b7a7088acc0a0bb455060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f70258238e56567c947547fa931d7e257cd2de393b7a7088acc0a0bb455060->enter($__internal_21f70258238e56567c947547fa931d7e257cd2de393b7a7088acc0a0bb455060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_90df3e2f4a1e282b0536d11a2909afcbdd853a399f1bdd9e1852fc34a6dd97fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90df3e2f4a1e282b0536d11a2909afcbdd853a399f1bdd9e1852fc34a6dd97fd->enter($__internal_90df3e2f4a1e282b0536d11a2909afcbdd853a399f1bdd9e1852fc34a6dd97fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_90df3e2f4a1e282b0536d11a2909afcbdd853a399f1bdd9e1852fc34a6dd97fd->leave($__internal_90df3e2f4a1e282b0536d11a2909afcbdd853a399f1bdd9e1852fc34a6dd97fd_prof);

        
        $__internal_21f70258238e56567c947547fa931d7e257cd2de393b7a7088acc0a0bb455060->leave($__internal_21f70258238e56567c947547fa931d7e257cd2de393b7a7088acc0a0bb455060_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_970018cfc046c6cb414c7b9236e6c8f8654fef4abbc2e0006943b6b58346009d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970018cfc046c6cb414c7b9236e6c8f8654fef4abbc2e0006943b6b58346009d->enter($__internal_970018cfc046c6cb414c7b9236e6c8f8654fef4abbc2e0006943b6b58346009d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7724139418dfaa5a7ce738bfe1853bea73a6adc53da190545550ff15ba8cc4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7724139418dfaa5a7ce738bfe1853bea73a6adc53da190545550ff15ba8cc4fb->enter($__internal_7724139418dfaa5a7ce738bfe1853bea73a6adc53da190545550ff15ba8cc4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7724139418dfaa5a7ce738bfe1853bea73a6adc53da190545550ff15ba8cc4fb->leave($__internal_7724139418dfaa5a7ce738bfe1853bea73a6adc53da190545550ff15ba8cc4fb_prof);

        
        $__internal_970018cfc046c6cb414c7b9236e6c8f8654fef4abbc2e0006943b6b58346009d->leave($__internal_970018cfc046c6cb414c7b9236e6c8f8654fef4abbc2e0006943b6b58346009d_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3c434e47055a9593bb8074cd0a223899dab78fb1ced8787cdffa8b5043a509ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c434e47055a9593bb8074cd0a223899dab78fb1ced8787cdffa8b5043a509ab->enter($__internal_3c434e47055a9593bb8074cd0a223899dab78fb1ced8787cdffa8b5043a509ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_3e47ebd3536f24a0080e063c010e060931a9d991ff1484e4c11b1cebc49846b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e47ebd3536f24a0080e063c010e060931a9d991ff1484e4c11b1cebc49846b0->enter($__internal_3e47ebd3536f24a0080e063c010e060931a9d991ff1484e4c11b1cebc49846b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3e47ebd3536f24a0080e063c010e060931a9d991ff1484e4c11b1cebc49846b0->leave($__internal_3e47ebd3536f24a0080e063c010e060931a9d991ff1484e4c11b1cebc49846b0_prof);

        
        $__internal_3c434e47055a9593bb8074cd0a223899dab78fb1ced8787cdffa8b5043a509ab->leave($__internal_3c434e47055a9593bb8074cd0a223899dab78fb1ced8787cdffa8b5043a509ab_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_03d89aee86349853c35ffe7af0916da41420fc4f25597898f5e6f09df9a6be4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d89aee86349853c35ffe7af0916da41420fc4f25597898f5e6f09df9a6be4a->enter($__internal_03d89aee86349853c35ffe7af0916da41420fc4f25597898f5e6f09df9a6be4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_a7a202c99f69ef00e9ef78be04c7765dc2413e035ee9abd7e8f3ffa2979d9ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a202c99f69ef00e9ef78be04c7765dc2413e035ee9abd7e8f3ffa2979d9ab3->enter($__internal_a7a202c99f69ef00e9ef78be04c7765dc2413e035ee9abd7e8f3ffa2979d9ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a7a202c99f69ef00e9ef78be04c7765dc2413e035ee9abd7e8f3ffa2979d9ab3->leave($__internal_a7a202c99f69ef00e9ef78be04c7765dc2413e035ee9abd7e8f3ffa2979d9ab3_prof);

        
        $__internal_03d89aee86349853c35ffe7af0916da41420fc4f25597898f5e6f09df9a6be4a->leave($__internal_03d89aee86349853c35ffe7af0916da41420fc4f25597898f5e6f09df9a6be4a_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_cac2114be2144baa09730a351f613963881f27c2f044d99df83a2c02c5484ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac2114be2144baa09730a351f613963881f27c2f044d99df83a2c02c5484ceb->enter($__internal_cac2114be2144baa09730a351f613963881f27c2f044d99df83a2c02c5484ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_d8fad76bea15aaf26dd048da17c9dab0e059b4e3103a3fc9e06cbbd2b1b2eb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fad76bea15aaf26dd048da17c9dab0e059b4e3103a3fc9e06cbbd2b1b2eb05->enter($__internal_d8fad76bea15aaf26dd048da17c9dab0e059b4e3103a3fc9e06cbbd2b1b2eb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d8fad76bea15aaf26dd048da17c9dab0e059b4e3103a3fc9e06cbbd2b1b2eb05->leave($__internal_d8fad76bea15aaf26dd048da17c9dab0e059b4e3103a3fc9e06cbbd2b1b2eb05_prof);

        
        $__internal_cac2114be2144baa09730a351f613963881f27c2f044d99df83a2c02c5484ceb->leave($__internal_cac2114be2144baa09730a351f613963881f27c2f044d99df83a2c02c5484ceb_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_07721bf1492f1d4adc700d76755f599a93430f09f45e86d744b3314cf945263a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07721bf1492f1d4adc700d76755f599a93430f09f45e86d744b3314cf945263a->enter($__internal_07721bf1492f1d4adc700d76755f599a93430f09f45e86d744b3314cf945263a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_1c80bd4d1a93144cdc10ada6e118bb965d0acd3930113ad58304e389f7349050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c80bd4d1a93144cdc10ada6e118bb965d0acd3930113ad58304e389f7349050->enter($__internal_1c80bd4d1a93144cdc10ada6e118bb965d0acd3930113ad58304e389f7349050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_1c80bd4d1a93144cdc10ada6e118bb965d0acd3930113ad58304e389f7349050->leave($__internal_1c80bd4d1a93144cdc10ada6e118bb965d0acd3930113ad58304e389f7349050_prof);

        
        $__internal_07721bf1492f1d4adc700d76755f599a93430f09f45e86d744b3314cf945263a->leave($__internal_07721bf1492f1d4adc700d76755f599a93430f09f45e86d744b3314cf945263a_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6637a586ecaba68211a7850135a06b0d55451318d2ec2ca404d76b13b4aeee39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6637a586ecaba68211a7850135a06b0d55451318d2ec2ca404d76b13b4aeee39->enter($__internal_6637a586ecaba68211a7850135a06b0d55451318d2ec2ca404d76b13b4aeee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_bc3aff68c40541c21f5c7befaf4384b4a250cbf5bc9fb62a2c38ef2c45d8ccd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3aff68c40541c21f5c7befaf4384b4a250cbf5bc9fb62a2c38ef2c45d8ccd9->enter($__internal_bc3aff68c40541c21f5c7befaf4384b4a250cbf5bc9fb62a2c38ef2c45d8ccd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_bc3aff68c40541c21f5c7befaf4384b4a250cbf5bc9fb62a2c38ef2c45d8ccd9->leave($__internal_bc3aff68c40541c21f5c7befaf4384b4a250cbf5bc9fb62a2c38ef2c45d8ccd9_prof);

        
        $__internal_6637a586ecaba68211a7850135a06b0d55451318d2ec2ca404d76b13b4aeee39->leave($__internal_6637a586ecaba68211a7850135a06b0d55451318d2ec2ca404d76b13b4aeee39_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6177ddcc16f1cbf450e4ed3c2063615810d74db8e49e2e1a867747390b53111c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6177ddcc16f1cbf450e4ed3c2063615810d74db8e49e2e1a867747390b53111c->enter($__internal_6177ddcc16f1cbf450e4ed3c2063615810d74db8e49e2e1a867747390b53111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d5ed621c52e49e3b8827c2162b7c63383e890c561e2973f5a33d142af28d58cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ed621c52e49e3b8827c2162b7c63383e890c561e2973f5a33d142af28d58cb->enter($__internal_d5ed621c52e49e3b8827c2162b7c63383e890c561e2973f5a33d142af28d58cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_d5ed621c52e49e3b8827c2162b7c63383e890c561e2973f5a33d142af28d58cb->leave($__internal_d5ed621c52e49e3b8827c2162b7c63383e890c561e2973f5a33d142af28d58cb_prof);

        
        $__internal_6177ddcc16f1cbf450e4ed3c2063615810d74db8e49e2e1a867747390b53111c->leave($__internal_6177ddcc16f1cbf450e4ed3c2063615810d74db8e49e2e1a867747390b53111c_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form.parent %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
