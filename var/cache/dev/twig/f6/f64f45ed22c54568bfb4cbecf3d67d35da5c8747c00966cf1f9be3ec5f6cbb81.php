<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_54b6547e40b9ce73ef24dcf5c8031c850416d5d0645041032368b1bc5f84ea31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7ed1b096d8bb927de151bcbb5c8ef00770497c4d833817546684b07d556f974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ed1b096d8bb927de151bcbb5c8ef00770497c4d833817546684b07d556f974->enter($__internal_a7ed1b096d8bb927de151bcbb5c8ef00770497c4d833817546684b07d556f974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_2b492d3c2e4a13ef8e427878c9e8ae7c03d14bbf37e701724df0da3257b5024b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b492d3c2e4a13ef8e427878c9e8ae7c03d14bbf37e701724df0da3257b5024b->enter($__internal_2b492d3c2e4a13ef8e427878c9e8ae7c03d14bbf37e701724df0da3257b5024b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_a7ed1b096d8bb927de151bcbb5c8ef00770497c4d833817546684b07d556f974->leave($__internal_a7ed1b096d8bb927de151bcbb5c8ef00770497c4d833817546684b07d556f974_prof);

        
        $__internal_2b492d3c2e4a13ef8e427878c9e8ae7c03d14bbf37e701724df0da3257b5024b->leave($__internal_2b492d3c2e4a13ef8e427878c9e8ae7c03d14bbf37e701724df0da3257b5024b_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_3fc5701e8ab86bf8a4c411d0182cee56cd08dba40e65674d0efdbd1b2ccc0144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc5701e8ab86bf8a4c411d0182cee56cd08dba40e65674d0efdbd1b2ccc0144->enter($__internal_3fc5701e8ab86bf8a4c411d0182cee56cd08dba40e65674d0efdbd1b2ccc0144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_a5460563e5e0ade91b4537291e3f98267f31e637832df784ef915fb4f78f8ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5460563e5e0ade91b4537291e3f98267f31e637832df784ef915fb4f78f8ac9->enter($__internal_a5460563e5e0ade91b4537291e3f98267f31e637832df784ef915fb4f78f8ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_a5460563e5e0ade91b4537291e3f98267f31e637832df784ef915fb4f78f8ac9->leave($__internal_a5460563e5e0ade91b4537291e3f98267f31e637832df784ef915fb4f78f8ac9_prof);

        
        $__internal_3fc5701e8ab86bf8a4c411d0182cee56cd08dba40e65674d0efdbd1b2ccc0144->leave($__internal_3fc5701e8ab86bf8a4c411d0182cee56cd08dba40e65674d0efdbd1b2ccc0144_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7c1831abb29d6337d140b637a0c5577939052e98b3e344812d19d90a8f02a418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1831abb29d6337d140b637a0c5577939052e98b3e344812d19d90a8f02a418->enter($__internal_7c1831abb29d6337d140b637a0c5577939052e98b3e344812d19d90a8f02a418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_adbf727590e7cec36d9125ac900163933ecd190b2c55b1f97267d97c5272c587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbf727590e7cec36d9125ac900163933ecd190b2c55b1f97267d97c5272c587->enter($__internal_adbf727590e7cec36d9125ac900163933ecd190b2c55b1f97267d97c5272c587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_adbf727590e7cec36d9125ac900163933ecd190b2c55b1f97267d97c5272c587->leave($__internal_adbf727590e7cec36d9125ac900163933ecd190b2c55b1f97267d97c5272c587_prof);

        
        $__internal_7c1831abb29d6337d140b637a0c5577939052e98b3e344812d19d90a8f02a418->leave($__internal_7c1831abb29d6337d140b637a0c5577939052e98b3e344812d19d90a8f02a418_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ea83588a107cc07000a22c8b22e3e0b896e5f7782e1e5f2320275fa19b9ef521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea83588a107cc07000a22c8b22e3e0b896e5f7782e1e5f2320275fa19b9ef521->enter($__internal_ea83588a107cc07000a22c8b22e3e0b896e5f7782e1e5f2320275fa19b9ef521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d9e74fd5c94dcaad3c66d92c9c4029fcd4a564aa631429e338e0d800372c2543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e74fd5c94dcaad3c66d92c9c4029fcd4a564aa631429e338e0d800372c2543->enter($__internal_d9e74fd5c94dcaad3c66d92c9c4029fcd4a564aa631429e338e0d800372c2543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_d9e74fd5c94dcaad3c66d92c9c4029fcd4a564aa631429e338e0d800372c2543->leave($__internal_d9e74fd5c94dcaad3c66d92c9c4029fcd4a564aa631429e338e0d800372c2543_prof);

        
        $__internal_ea83588a107cc07000a22c8b22e3e0b896e5f7782e1e5f2320275fa19b9ef521->leave($__internal_ea83588a107cc07000a22c8b22e3e0b896e5f7782e1e5f2320275fa19b9ef521_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_678d29a87e3969100139d0ce44cb6b910b30ab8e1d130cafc1cab22fd0327b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678d29a87e3969100139d0ce44cb6b910b30ab8e1d130cafc1cab22fd0327b32->enter($__internal_678d29a87e3969100139d0ce44cb6b910b30ab8e1d130cafc1cab22fd0327b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a5e63d1b553f5ae1029b2152653b9aa459dc216b34150ad1dd613c6d123c36fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e63d1b553f5ae1029b2152653b9aa459dc216b34150ad1dd613c6d123c36fe->enter($__internal_a5e63d1b553f5ae1029b2152653b9aa459dc216b34150ad1dd613c6d123c36fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_a5e63d1b553f5ae1029b2152653b9aa459dc216b34150ad1dd613c6d123c36fe->leave($__internal_a5e63d1b553f5ae1029b2152653b9aa459dc216b34150ad1dd613c6d123c36fe_prof);

        
        $__internal_678d29a87e3969100139d0ce44cb6b910b30ab8e1d130cafc1cab22fd0327b32->leave($__internal_678d29a87e3969100139d0ce44cb6b910b30ab8e1d130cafc1cab22fd0327b32_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c4a7cd81151f4b7cbe7efe270f4a0c79b684169b2953c23b36b66d58b4c4a7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a7cd81151f4b7cbe7efe270f4a0c79b684169b2953c23b36b66d58b4c4a7f2->enter($__internal_c4a7cd81151f4b7cbe7efe270f4a0c79b684169b2953c23b36b66d58b4c4a7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e292a7517a08929971a8c4ff4fd3b10c8c1c06b2563795d2ef1261751bbfff1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e292a7517a08929971a8c4ff4fd3b10c8c1c06b2563795d2ef1261751bbfff1d->enter($__internal_e292a7517a08929971a8c4ff4fd3b10c8c1c06b2563795d2ef1261751bbfff1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e292a7517a08929971a8c4ff4fd3b10c8c1c06b2563795d2ef1261751bbfff1d->leave($__internal_e292a7517a08929971a8c4ff4fd3b10c8c1c06b2563795d2ef1261751bbfff1d_prof);

        
        $__internal_c4a7cd81151f4b7cbe7efe270f4a0c79b684169b2953c23b36b66d58b4c4a7f2->leave($__internal_c4a7cd81151f4b7cbe7efe270f4a0c79b684169b2953c23b36b66d58b4c4a7f2_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_66305e3a898e47e0f1d27581e58b8ea803326f245a372926dcc9debf1688957d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66305e3a898e47e0f1d27581e58b8ea803326f245a372926dcc9debf1688957d->enter($__internal_66305e3a898e47e0f1d27581e58b8ea803326f245a372926dcc9debf1688957d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3218e63059d87f4a316957e199803f87e5b76be41d923c0d5ca558556e60aee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3218e63059d87f4a316957e199803f87e5b76be41d923c0d5ca558556e60aee2->enter($__internal_3218e63059d87f4a316957e199803f87e5b76be41d923c0d5ca558556e60aee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3218e63059d87f4a316957e199803f87e5b76be41d923c0d5ca558556e60aee2->leave($__internal_3218e63059d87f4a316957e199803f87e5b76be41d923c0d5ca558556e60aee2_prof);

        
        $__internal_66305e3a898e47e0f1d27581e58b8ea803326f245a372926dcc9debf1688957d->leave($__internal_66305e3a898e47e0f1d27581e58b8ea803326f245a372926dcc9debf1688957d_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_9fb8eea4dd623ede62c31e2eb0a4cf92a9d2a2639b3f16528bcf608bf748428b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb8eea4dd623ede62c31e2eb0a4cf92a9d2a2639b3f16528bcf608bf748428b->enter($__internal_9fb8eea4dd623ede62c31e2eb0a4cf92a9d2a2639b3f16528bcf608bf748428b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_6cb36b2c3ae08ff01cdb84bfc59b5ca9126f3b4a538e919b9686a12453f1e297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb36b2c3ae08ff01cdb84bfc59b5ca9126f3b4a538e919b9686a12453f1e297->enter($__internal_6cb36b2c3ae08ff01cdb84bfc59b5ca9126f3b4a538e919b9686a12453f1e297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6cb36b2c3ae08ff01cdb84bfc59b5ca9126f3b4a538e919b9686a12453f1e297->leave($__internal_6cb36b2c3ae08ff01cdb84bfc59b5ca9126f3b4a538e919b9686a12453f1e297_prof);

        
        $__internal_9fb8eea4dd623ede62c31e2eb0a4cf92a9d2a2639b3f16528bcf608bf748428b->leave($__internal_9fb8eea4dd623ede62c31e2eb0a4cf92a9d2a2639b3f16528bcf608bf748428b_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f0818b0f9cb887c8a51d4b551ed1ff2eb94dea061e16a29b2b0f9594e2b7b587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0818b0f9cb887c8a51d4b551ed1ff2eb94dea061e16a29b2b0f9594e2b7b587->enter($__internal_f0818b0f9cb887c8a51d4b551ed1ff2eb94dea061e16a29b2b0f9594e2b7b587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_07be4a3e083f11dc6f638972271d179fdfc2dec2783470fdd790a3207310aa34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07be4a3e083f11dc6f638972271d179fdfc2dec2783470fdd790a3207310aa34->enter($__internal_07be4a3e083f11dc6f638972271d179fdfc2dec2783470fdd790a3207310aa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_07be4a3e083f11dc6f638972271d179fdfc2dec2783470fdd790a3207310aa34->leave($__internal_07be4a3e083f11dc6f638972271d179fdfc2dec2783470fdd790a3207310aa34_prof);

        
        $__internal_f0818b0f9cb887c8a51d4b551ed1ff2eb94dea061e16a29b2b0f9594e2b7b587->leave($__internal_f0818b0f9cb887c8a51d4b551ed1ff2eb94dea061e16a29b2b0f9594e2b7b587_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_00f7f631246c482549d7bd7ad870a0f04a54a7495f5628fd9b9011ebabb91846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f7f631246c482549d7bd7ad870a0f04a54a7495f5628fd9b9011ebabb91846->enter($__internal_00f7f631246c482549d7bd7ad870a0f04a54a7495f5628fd9b9011ebabb91846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_569598a1e59ccacdba360c1895323767581fd21cf191ae4ed57e538767ae4ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569598a1e59ccacdba360c1895323767581fd21cf191ae4ed57e538767ae4ee2->enter($__internal_569598a1e59ccacdba360c1895323767581fd21cf191ae4ed57e538767ae4ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_569598a1e59ccacdba360c1895323767581fd21cf191ae4ed57e538767ae4ee2->leave($__internal_569598a1e59ccacdba360c1895323767581fd21cf191ae4ed57e538767ae4ee2_prof);

        
        $__internal_00f7f631246c482549d7bd7ad870a0f04a54a7495f5628fd9b9011ebabb91846->leave($__internal_00f7f631246c482549d7bd7ad870a0f04a54a7495f5628fd9b9011ebabb91846_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_574f5c0f79703c3148344c805b0294b1bd41076950716cd09368025dfd9ea3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574f5c0f79703c3148344c805b0294b1bd41076950716cd09368025dfd9ea3fa->enter($__internal_574f5c0f79703c3148344c805b0294b1bd41076950716cd09368025dfd9ea3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_3b034bd618fad3e9be52ab0d4e48e9704fa8f4e3fe411ec6ed1bd809e72d42de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b034bd618fad3e9be52ab0d4e48e9704fa8f4e3fe411ec6ed1bd809e72d42de->enter($__internal_3b034bd618fad3e9be52ab0d4e48e9704fa8f4e3fe411ec6ed1bd809e72d42de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_3b034bd618fad3e9be52ab0d4e48e9704fa8f4e3fe411ec6ed1bd809e72d42de->leave($__internal_3b034bd618fad3e9be52ab0d4e48e9704fa8f4e3fe411ec6ed1bd809e72d42de_prof);

        
        $__internal_574f5c0f79703c3148344c805b0294b1bd41076950716cd09368025dfd9ea3fa->leave($__internal_574f5c0f79703c3148344c805b0294b1bd41076950716cd09368025dfd9ea3fa_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony_3/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
