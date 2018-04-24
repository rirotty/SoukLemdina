<?php

/* form_div_layout.html.twig */
class __TwigTemplate_b996bb99d3aba0875a5ca8edd104e103300cb689908505b8f31e4b95991794bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8280971bd75da13b95c0f8e8fb58cdc092ade405808a46d2fa89cfb8d23f2d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8280971bd75da13b95c0f8e8fb58cdc092ade405808a46d2fa89cfb8d23f2d19->enter($__internal_8280971bd75da13b95c0f8e8fb58cdc092ade405808a46d2fa89cfb8d23f2d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 244
        $this->displayBlock('form_label', $context, $blocks);
        // line 266
        $this->displayBlock('button_label', $context, $blocks);
        // line 270
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 278
        $this->displayBlock('form_row', $context, $blocks);
        // line 286
        $this->displayBlock('button_row', $context, $blocks);
        // line 292
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 298
        $this->displayBlock('form', $context, $blocks);
        // line 304
        $this->displayBlock('form_start', $context, $blocks);
        // line 318
        $this->displayBlock('form_end', $context, $blocks);
        // line 325
        $this->displayBlock('form_errors', $context, $blocks);
        // line 335
        $this->displayBlock('form_rest', $context, $blocks);
        // line 356
        echo "
";
        // line 359
        $this->displayBlock('form_rows', $context, $blocks);
        // line 365
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 372
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 377
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_8280971bd75da13b95c0f8e8fb58cdc092ade405808a46d2fa89cfb8d23f2d19->leave($__internal_8280971bd75da13b95c0f8e8fb58cdc092ade405808a46d2fa89cfb8d23f2d19_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_60eacd28d8575b5323b41035d7ca186d54577ca686b0860133a08338c19d702a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60eacd28d8575b5323b41035d7ca186d54577ca686b0860133a08338c19d702a->enter($__internal_60eacd28d8575b5323b41035d7ca186d54577ca686b0860133a08338c19d702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_60eacd28d8575b5323b41035d7ca186d54577ca686b0860133a08338c19d702a->leave($__internal_60eacd28d8575b5323b41035d7ca186d54577ca686b0860133a08338c19d702a_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f88f8b144637da8616434c5f11ceced5ebfd2ba7645b75e91bbc75d0850c000b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88f8b144637da8616434c5f11ceced5ebfd2ba7645b75e91bbc75d0850c000b->enter($__internal_f88f8b144637da8616434c5f11ceced5ebfd2ba7645b75e91bbc75d0850c000b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_f88f8b144637da8616434c5f11ceced5ebfd2ba7645b75e91bbc75d0850c000b->leave($__internal_f88f8b144637da8616434c5f11ceced5ebfd2ba7645b75e91bbc75d0850c000b_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_87c577bc48ba9929894458df7dcedacf94977b151f56168b7460254621c53012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c577bc48ba9929894458df7dcedacf94977b151f56168b7460254621c53012->enter($__internal_87c577bc48ba9929894458df7dcedacf94977b151f56168b7460254621c53012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_87c577bc48ba9929894458df7dcedacf94977b151f56168b7460254621c53012->leave($__internal_87c577bc48ba9929894458df7dcedacf94977b151f56168b7460254621c53012_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_eea8e65a94c89c7dc370143ec39fda0c212d1863d098a18cdc2847f9b4534d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea8e65a94c89c7dc370143ec39fda0c212d1863d098a18cdc2847f9b4534d61->enter($__internal_eea8e65a94c89c7dc370143ec39fda0c212d1863d098a18cdc2847f9b4534d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_eea8e65a94c89c7dc370143ec39fda0c212d1863d098a18cdc2847f9b4534d61->leave($__internal_eea8e65a94c89c7dc370143ec39fda0c212d1863d098a18cdc2847f9b4534d61_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_087cff8c82fd967ca6bab48acd65585a4a0d898688f8ef173e3cc28601b58fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087cff8c82fd967ca6bab48acd65585a4a0d898688f8ef173e3cc28601b58fe1->enter($__internal_087cff8c82fd967ca6bab48acd65585a4a0d898688f8ef173e3cc28601b58fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_087cff8c82fd967ca6bab48acd65585a4a0d898688f8ef173e3cc28601b58fe1->leave($__internal_087cff8c82fd967ca6bab48acd65585a4a0d898688f8ef173e3cc28601b58fe1_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_f104a013a188e7138968ddf9aed9060c6c077884e914155a7642296e0862745a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f104a013a188e7138968ddf9aed9060c6c077884e914155a7642296e0862745a->enter($__internal_f104a013a188e7138968ddf9aed9060c6c077884e914155a7642296e0862745a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_f104a013a188e7138968ddf9aed9060c6c077884e914155a7642296e0862745a->leave($__internal_f104a013a188e7138968ddf9aed9060c6c077884e914155a7642296e0862745a_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b2083e20f5a668bc26e1c6eccc38334c1ab5b138986be6f0a15654386a2bf4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2083e20f5a668bc26e1c6eccc38334c1ab5b138986be6f0a15654386a2bf4d0->enter($__internal_b2083e20f5a668bc26e1c6eccc38334c1ab5b138986be6f0a15654386a2bf4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_b2083e20f5a668bc26e1c6eccc38334c1ab5b138986be6f0a15654386a2bf4d0->leave($__internal_b2083e20f5a668bc26e1c6eccc38334c1ab5b138986be6f0a15654386a2bf4d0_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_528162641ccc916a63b03af89d79eb2ab43b5ab9aae3c7f921b66e346b7bbe0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528162641ccc916a63b03af89d79eb2ab43b5ab9aae3c7f921b66e346b7bbe0a->enter($__internal_528162641ccc916a63b03af89d79eb2ab43b5ab9aae3c7f921b66e346b7bbe0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_528162641ccc916a63b03af89d79eb2ab43b5ab9aae3c7f921b66e346b7bbe0a->leave($__internal_528162641ccc916a63b03af89d79eb2ab43b5ab9aae3c7f921b66e346b7bbe0a_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_d0e86575b39527043b6e1dcf0a05af95a21ab66081eb14afdd74f894b9bb21a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e86575b39527043b6e1dcf0a05af95a21ab66081eb14afdd74f894b9bb21a7->enter($__internal_d0e86575b39527043b6e1dcf0a05af95a21ab66081eb14afdd74f894b9bb21a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    $__internal_118e0dc7caabdac01d82124dd10c31157357094193dd84357a26b3272cf2918d = array("attr" => $this->getAttribute($context["choice"], "attr", array()));
                    if (!is_array($__internal_118e0dc7caabdac01d82124dd10c31157357094193dd84357a26b3272cf2918d)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_118e0dc7caabdac01d82124dd10c31157357094193dd84357a26b3272cf2918d);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d0e86575b39527043b6e1dcf0a05af95a21ab66081eb14afdd74f894b9bb21a7->leave($__internal_d0e86575b39527043b6e1dcf0a05af95a21ab66081eb14afdd74f894b9bb21a7_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f7480beb5f04026e7fc5d37af26e36f4eee42ddc97bcf34dde13ff3c8226d737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7480beb5f04026e7fc5d37af26e36f4eee42ddc97bcf34dde13ff3c8226d737->enter($__internal_f7480beb5f04026e7fc5d37af26e36f4eee42ddc97bcf34dde13ff3c8226d737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_f7480beb5f04026e7fc5d37af26e36f4eee42ddc97bcf34dde13ff3c8226d737->leave($__internal_f7480beb5f04026e7fc5d37af26e36f4eee42ddc97bcf34dde13ff3c8226d737_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_72ec7a1ec2f88244357ad44acd576b242b97c3de19369715fd269d3214ae3045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ec7a1ec2f88244357ad44acd576b242b97c3de19369715fd269d3214ae3045->enter($__internal_72ec7a1ec2f88244357ad44acd576b242b97c3de19369715fd269d3214ae3045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_72ec7a1ec2f88244357ad44acd576b242b97c3de19369715fd269d3214ae3045->leave($__internal_72ec7a1ec2f88244357ad44acd576b242b97c3de19369715fd269d3214ae3045_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4ff6dbb017ed7d87a26873fbb427f875c874d928b6cdaf4aecf3c018a2ac976d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff6dbb017ed7d87a26873fbb427f875c874d928b6cdaf4aecf3c018a2ac976d->enter($__internal_4ff6dbb017ed7d87a26873fbb427f875c874d928b6cdaf4aecf3c018a2ac976d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_4ff6dbb017ed7d87a26873fbb427f875c874d928b6cdaf4aecf3c018a2ac976d->leave($__internal_4ff6dbb017ed7d87a26873fbb427f875c874d928b6cdaf4aecf3c018a2ac976d_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3efd3355c0d245df1aeee1b59958bf86449b76d10a59054bf76f10e6b941ad76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efd3355c0d245df1aeee1b59958bf86449b76d10a59054bf76f10e6b941ad76->enter($__internal_3efd3355c0d245df1aeee1b59958bf86449b76d10a59054bf76f10e6b941ad76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_3efd3355c0d245df1aeee1b59958bf86449b76d10a59054bf76f10e6b941ad76->leave($__internal_3efd3355c0d245df1aeee1b59958bf86449b76d10a59054bf76f10e6b941ad76_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1bf173a0598d3abf9233823458a847f19715c1b5db05bf1599514caa0dabc535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf173a0598d3abf9233823458a847f19715c1b5db05bf1599514caa0dabc535->enter($__internal_1bf173a0598d3abf9233823458a847f19715c1b5db05bf1599514caa0dabc535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_1bf173a0598d3abf9233823458a847f19715c1b5db05bf1599514caa0dabc535->leave($__internal_1bf173a0598d3abf9233823458a847f19715c1b5db05bf1599514caa0dabc535_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_d94ff6361fffd124e8adb70b3c393f2c3626f74d802efce5fced3af2ca15bab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94ff6361fffd124e8adb70b3c393f2c3626f74d802efce5fced3af2ca15bab8->enter($__internal_d94ff6361fffd124e8adb70b3c393f2c3626f74d802efce5fced3af2ca15bab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_d94ff6361fffd124e8adb70b3c393f2c3626f74d802efce5fced3af2ca15bab8->leave($__internal_d94ff6361fffd124e8adb70b3c393f2c3626f74d802efce5fced3af2ca15bab8_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_a318d32b792eb1224b4fe90f72e3d037aed774c491b6b19ae6f388021fa8a7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a318d32b792eb1224b4fe90f72e3d037aed774c491b6b19ae6f388021fa8a7e9->enter($__internal_a318d32b792eb1224b4fe90f72e3d037aed774c491b6b19ae6f388021fa8a7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a318d32b792eb1224b4fe90f72e3d037aed774c491b6b19ae6f388021fa8a7e9->leave($__internal_a318d32b792eb1224b4fe90f72e3d037aed774c491b6b19ae6f388021fa8a7e9_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_455529608815d7df4eca96b769f64ec6cf8d0a4c9f613184abf508a6c653c77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455529608815d7df4eca96b769f64ec6cf8d0a4c9f613184abf508a6c653c77f->enter($__internal_455529608815d7df4eca96b769f64ec6cf8d0a4c9f613184abf508a6c653c77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_455529608815d7df4eca96b769f64ec6cf8d0a4c9f613184abf508a6c653c77f->leave($__internal_455529608815d7df4eca96b769f64ec6cf8d0a4c9f613184abf508a6c653c77f_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_dd0eeb60c1cbe7bfa3b032209c375be6cb4869bce59723fecf92f8d5b9f01fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0eeb60c1cbe7bfa3b032209c375be6cb4869bce59723fecf92f8d5b9f01fed->enter($__internal_dd0eeb60c1cbe7bfa3b032209c375be6cb4869bce59723fecf92f8d5b9f01fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_dd0eeb60c1cbe7bfa3b032209c375be6cb4869bce59723fecf92f8d5b9f01fed->leave($__internal_dd0eeb60c1cbe7bfa3b032209c375be6cb4869bce59723fecf92f8d5b9f01fed_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_1ef746c0d8ee99493f9395926ea1371f0e765ccc7f25523f7fc3ffe2f4ec5af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef746c0d8ee99493f9395926ea1371f0e765ccc7f25523f7fc3ffe2f4ec5af3->enter($__internal_1ef746c0d8ee99493f9395926ea1371f0e765ccc7f25523f7fc3ffe2f4ec5af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1ef746c0d8ee99493f9395926ea1371f0e765ccc7f25523f7fc3ffe2f4ec5af3->leave($__internal_1ef746c0d8ee99493f9395926ea1371f0e765ccc7f25523f7fc3ffe2f4ec5af3_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_97e2884a6f7feeba26615c90e9cfd1dea0c13533ba55603d0863e7e09d40faac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e2884a6f7feeba26615c90e9cfd1dea0c13533ba55603d0863e7e09d40faac->enter($__internal_97e2884a6f7feeba26615c90e9cfd1dea0c13533ba55603d0863e7e09d40faac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_97e2884a6f7feeba26615c90e9cfd1dea0c13533ba55603d0863e7e09d40faac->leave($__internal_97e2884a6f7feeba26615c90e9cfd1dea0c13533ba55603d0863e7e09d40faac_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_22faf1c173cb1a07c692d784fed5cf949ed9c900e095200c5fcfc26a1efc794a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22faf1c173cb1a07c692d784fed5cf949ed9c900e095200c5fcfc26a1efc794a->enter($__internal_22faf1c173cb1a07c692d784fed5cf949ed9c900e095200c5fcfc26a1efc794a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_22faf1c173cb1a07c692d784fed5cf949ed9c900e095200c5fcfc26a1efc794a->leave($__internal_22faf1c173cb1a07c692d784fed5cf949ed9c900e095200c5fcfc26a1efc794a_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_4b22a9723798040933411e6e06c1dd3996952e78362276579ae7adb26e7e9758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b22a9723798040933411e6e06c1dd3996952e78362276579ae7adb26e7e9758->enter($__internal_4b22a9723798040933411e6e06c1dd3996952e78362276579ae7adb26e7e9758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4b22a9723798040933411e6e06c1dd3996952e78362276579ae7adb26e7e9758->leave($__internal_4b22a9723798040933411e6e06c1dd3996952e78362276579ae7adb26e7e9758_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_1cbb35135820ce15bc757595da2d1243bb55b606f8a0bedfa85960c912183a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbb35135820ce15bc757595da2d1243bb55b606f8a0bedfa85960c912183a19->enter($__internal_1cbb35135820ce15bc757595da2d1243bb55b606f8a0bedfa85960c912183a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1cbb35135820ce15bc757595da2d1243bb55b606f8a0bedfa85960c912183a19->leave($__internal_1cbb35135820ce15bc757595da2d1243bb55b606f8a0bedfa85960c912183a19_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_88a6f3889ad6c00bd731bb26236a4d3448990b8d9ed8cd4580aa2040c72bea9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a6f3889ad6c00bd731bb26236a4d3448990b8d9ed8cd4580aa2040c72bea9a->enter($__internal_88a6f3889ad6c00bd731bb26236a4d3448990b8d9ed8cd4580aa2040c72bea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_88a6f3889ad6c00bd731bb26236a4d3448990b8d9ed8cd4580aa2040c72bea9a->leave($__internal_88a6f3889ad6c00bd731bb26236a4d3448990b8d9ed8cd4580aa2040c72bea9a_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_d29465749f4aba5ad9ac4c8123a766f4be6b9017ad29fd29f04bff5bbbada326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29465749f4aba5ad9ac4c8123a766f4be6b9017ad29fd29f04bff5bbbada326->enter($__internal_d29465749f4aba5ad9ac4c8123a766f4be6b9017ad29fd29f04bff5bbbada326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d29465749f4aba5ad9ac4c8123a766f4be6b9017ad29fd29f04bff5bbbada326->leave($__internal_d29465749f4aba5ad9ac4c8123a766f4be6b9017ad29fd29f04bff5bbbada326_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_df1d09e5f0bba967daa2cb24d209917f71cfe9d7592f9342e3e71711e5d10c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1d09e5f0bba967daa2cb24d209917f71cfe9d7592f9342e3e71711e5d10c60->enter($__internal_df1d09e5f0bba967daa2cb24d209917f71cfe9d7592f9342e3e71711e5d10c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 222
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 223
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_df1d09e5f0bba967daa2cb24d209917f71cfe9d7592f9342e3e71711e5d10c60->leave($__internal_df1d09e5f0bba967daa2cb24d209917f71cfe9d7592f9342e3e71711e5d10c60_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_83e34e550f30d5f304a0859095e448c3c021af113492a45ef82eccc17ab6ec8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e34e550f30d5f304a0859095e448c3c021af113492a45ef82eccc17ab6ec8e->enter($__internal_83e34e550f30d5f304a0859095e448c3c021af113492a45ef82eccc17ab6ec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_83e34e550f30d5f304a0859095e448c3c021af113492a45ef82eccc17ab6ec8e->leave($__internal_83e34e550f30d5f304a0859095e448c3c021af113492a45ef82eccc17ab6ec8e_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_565a0813c34cd6c678ead0f4aafcff1a179006cbf93f9787c1dfb359f296e1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565a0813c34cd6c678ead0f4aafcff1a179006cbf93f9787c1dfb359f296e1d4->enter($__internal_565a0813c34cd6c678ead0f4aafcff1a179006cbf93f9787c1dfb359f296e1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_565a0813c34cd6c678ead0f4aafcff1a179006cbf93f9787c1dfb359f296e1d4->leave($__internal_565a0813c34cd6c678ead0f4aafcff1a179006cbf93f9787c1dfb359f296e1d4_prof);

    }

    // line 244
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_630945da3820215c052f3ccaea49d1de33a574d943594d569b9ab98f9b788756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630945da3820215c052f3ccaea49d1de33a574d943594d569b9ab98f9b788756->enter($__internal_630945da3820215c052f3ccaea49d1de33a574d943594d569b9ab98f9b788756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 245
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 246
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 247
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 249
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 250
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 252
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 253
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 254
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 255
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 256
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 259
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 262
            echo "<label";
            if ((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr"))) {
                $__internal_34546c633809148fec5568890a864e232f2c3948c7714f2c4d4926678df7c54f = array("attr" => (isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                if (!is_array($__internal_34546c633809148fec5568890a864e232f2c3948c7714f2c4d4926678df7c54f)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_34546c633809148fec5568890a864e232f2c3948c7714f2c4d4926678df7c54f);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_630945da3820215c052f3ccaea49d1de33a574d943594d569b9ab98f9b788756->leave($__internal_630945da3820215c052f3ccaea49d1de33a574d943594d569b9ab98f9b788756_prof);

    }

    // line 266
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_f18de841e9e5840ec0ddeeb98d33c9b89fd52754ad31d4136b3bb5b907f61b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18de841e9e5840ec0ddeeb98d33c9b89fd52754ad31d4136b3bb5b907f61b24->enter($__internal_f18de841e9e5840ec0ddeeb98d33c9b89fd52754ad31d4136b3bb5b907f61b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_f18de841e9e5840ec0ddeeb98d33c9b89fd52754ad31d4136b3bb5b907f61b24->leave($__internal_f18de841e9e5840ec0ddeeb98d33c9b89fd52754ad31d4136b3bb5b907f61b24_prof);

    }

    // line 270
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_5cb69dfe53077a6317fb4fffdf3a98ee03775631a26581fcda5a112867c22fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb69dfe53077a6317fb4fffdf3a98ee03775631a26581fcda5a112867c22fc9->enter($__internal_5cb69dfe53077a6317fb4fffdf3a98ee03775631a26581fcda5a112867c22fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 275
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_5cb69dfe53077a6317fb4fffdf3a98ee03775631a26581fcda5a112867c22fc9->leave($__internal_5cb69dfe53077a6317fb4fffdf3a98ee03775631a26581fcda5a112867c22fc9_prof);

    }

    // line 278
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_94c5d39e82941ac8843e125be85b870362f3fbd20caf2b7ce8c5b2645f99c915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c5d39e82941ac8843e125be85b870362f3fbd20caf2b7ce8c5b2645f99c915->enter($__internal_94c5d39e82941ac8843e125be85b870362f3fbd20caf2b7ce8c5b2645f99c915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 279
        echo "<div>";
        // line 280
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 281
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 282
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 283
        echo "</div>";
        
        $__internal_94c5d39e82941ac8843e125be85b870362f3fbd20caf2b7ce8c5b2645f99c915->leave($__internal_94c5d39e82941ac8843e125be85b870362f3fbd20caf2b7ce8c5b2645f99c915_prof);

    }

    // line 286
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a3a8100ac610b99a2c2ab90a38abed5d93097aeffd94ff9bcf7382a3d2b26c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a8100ac610b99a2c2ab90a38abed5d93097aeffd94ff9bcf7382a3d2b26c48->enter($__internal_a3a8100ac610b99a2c2ab90a38abed5d93097aeffd94ff9bcf7382a3d2b26c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 287
        echo "<div>";
        // line 288
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 289
        echo "</div>";
        
        $__internal_a3a8100ac610b99a2c2ab90a38abed5d93097aeffd94ff9bcf7382a3d2b26c48->leave($__internal_a3a8100ac610b99a2c2ab90a38abed5d93097aeffd94ff9bcf7382a3d2b26c48_prof);

    }

    // line 292
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_81068d1f1d89f9a3c222f53f117c5f3ef0107aef1eaf736845af2cbc14c8b140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81068d1f1d89f9a3c222f53f117c5f3ef0107aef1eaf736845af2cbc14c8b140->enter($__internal_81068d1f1d89f9a3c222f53f117c5f3ef0107aef1eaf736845af2cbc14c8b140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 293
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_81068d1f1d89f9a3c222f53f117c5f3ef0107aef1eaf736845af2cbc14c8b140->leave($__internal_81068d1f1d89f9a3c222f53f117c5f3ef0107aef1eaf736845af2cbc14c8b140_prof);

    }

    // line 298
    public function block_form($context, array $blocks = array())
    {
        $__internal_a8cb331c253dc5eb67ef69951e22b1cad213ef0a06d62a18016c92352fcd5179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cb331c253dc5eb67ef69951e22b1cad213ef0a06d62a18016c92352fcd5179->enter($__internal_a8cb331c253dc5eb67ef69951e22b1cad213ef0a06d62a18016c92352fcd5179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 299
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 300
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 301
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_a8cb331c253dc5eb67ef69951e22b1cad213ef0a06d62a18016c92352fcd5179->leave($__internal_a8cb331c253dc5eb67ef69951e22b1cad213ef0a06d62a18016c92352fcd5179_prof);

    }

    // line 304
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_dd6ee9d491a33a4530e3217303f3a82915854e8807fbbb6003f85b4a08b3be94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6ee9d491a33a4530e3217303f3a82915854e8807fbbb6003f85b4a08b3be94->enter($__internal_dd6ee9d491a33a4530e3217303f3a82915854e8807fbbb6003f85b4a08b3be94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 305
        $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "setMethodRendered", array(), "method");
        // line 306
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 307
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 308
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 310
            $context["form_method"] = "POST";
        }
        // line 312
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
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
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 313
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 314
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_dd6ee9d491a33a4530e3217303f3a82915854e8807fbbb6003f85b4a08b3be94->leave($__internal_dd6ee9d491a33a4530e3217303f3a82915854e8807fbbb6003f85b4a08b3be94_prof);

    }

    // line 318
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_147c6a2effd43a9692bd872018ec16244678861821efc5d99832c2555b4b774a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147c6a2effd43a9692bd872018ec16244678861821efc5d99832c2555b4b774a->enter($__internal_147c6a2effd43a9692bd872018ec16244678861821efc5d99832c2555b4b774a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 319
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 320
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 322
        echo "</form>";
        
        $__internal_147c6a2effd43a9692bd872018ec16244678861821efc5d99832c2555b4b774a->leave($__internal_147c6a2effd43a9692bd872018ec16244678861821efc5d99832c2555b4b774a_prof);

    }

    // line 325
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_36b6997baced8bc55782cb2acb59038c3f9073b5efff91b88b2ac69eabd8c9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b6997baced8bc55782cb2acb59038c3f9073b5efff91b88b2ac69eabd8c9c4->enter($__internal_36b6997baced8bc55782cb2acb59038c3f9073b5efff91b88b2ac69eabd8c9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 326
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 327
            echo "<ul>";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 329
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "</ul>";
        }
        
        $__internal_36b6997baced8bc55782cb2acb59038c3f9073b5efff91b88b2ac69eabd8c9c4->leave($__internal_36b6997baced8bc55782cb2acb59038c3f9073b5efff91b88b2ac69eabd8c9c4_prof);

    }

    // line 335
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_e410179d57370b2a96488a9e199069b0da27677c33182992bfe24ebe90d40f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e410179d57370b2a96488a9e199069b0da27677c33182992bfe24ebe90d40f85->enter($__internal_e410179d57370b2a96488a9e199069b0da27677c33182992bfe24ebe90d40f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 337
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 338
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        if (( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))))) {
            // line 343
            $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "setMethodRendered", array(), "method");
            // line 344
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
            // line 345
            if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
                // line 346
                $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
            } else {
                // line 348
                $context["form_method"] = "POST";
            }
            // line 351
            if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
                // line 352
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_e410179d57370b2a96488a9e199069b0da27677c33182992bfe24ebe90d40f85->leave($__internal_e410179d57370b2a96488a9e199069b0da27677c33182992bfe24ebe90d40f85_prof);

    }

    // line 359
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_706721c7ea40001b54f0b6d2bacb3ab3f2199f1d4114ff5afa0df123950292aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706721c7ea40001b54f0b6d2bacb3ab3f2199f1d4114ff5afa0df123950292aa->enter($__internal_706721c7ea40001b54f0b6d2bacb3ab3f2199f1d4114ff5afa0df123950292aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 361
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_706721c7ea40001b54f0b6d2bacb3ab3f2199f1d4114ff5afa0df123950292aa->leave($__internal_706721c7ea40001b54f0b6d2bacb3ab3f2199f1d4114ff5afa0df123950292aa_prof);

    }

    // line 365
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_9e9b827277913ed47c06d0910297c75f9555e9e7a624e0c9eeb7d8608bed6398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9b827277913ed47c06d0910297c75f9555e9e7a624e0c9eeb7d8608bed6398->enter($__internal_9e9b827277913ed47c06d0910297c75f9555e9e7a624e0c9eeb7d8608bed6398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 366
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 367
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 368
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 369
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_9e9b827277913ed47c06d0910297c75f9555e9e7a624e0c9eeb7d8608bed6398->leave($__internal_9e9b827277913ed47c06d0910297c75f9555e9e7a624e0c9eeb7d8608bed6398_prof);

    }

    // line 372
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_1b727dd54d9b84ec4de06f8b8db7d191d23b8456c9db3ef0fb2af1e2836007bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b727dd54d9b84ec4de06f8b8db7d191d23b8456c9db3ef0fb2af1e2836007bf->enter($__internal_1b727dd54d9b84ec4de06f8b8db7d191d23b8456c9db3ef0fb2af1e2836007bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 373
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 374
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_1b727dd54d9b84ec4de06f8b8db7d191d23b8456c9db3ef0fb2af1e2836007bf->leave($__internal_1b727dd54d9b84ec4de06f8b8db7d191d23b8456c9db3ef0fb2af1e2836007bf_prof);

    }

    // line 377
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_3b1ab3eecfbddf902f89ba01146a334f746583c67a57d456cfef28b25c92b953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1ab3eecfbddf902f89ba01146a334f746583c67a57d456cfef28b25c92b953->enter($__internal_3b1ab3eecfbddf902f89ba01146a334f746583c67a57d456cfef28b25c92b953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 378
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_3b1ab3eecfbddf902f89ba01146a334f746583c67a57d456cfef28b25c92b953->leave($__internal_3b1ab3eecfbddf902f89ba01146a334f746583c67a57d456cfef28b25c92b953_prof);

    }

    // line 382
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_19674ccb85f67150bce7cc74b8bb31bc1b1e6ee991fc7e81b56e9f271a4bd84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19674ccb85f67150bce7cc74b8bb31bc1b1e6ee991fc7e81b56e9f271a4bd84e->enter($__internal_19674ccb85f67150bce7cc74b8bb31bc1b1e6ee991fc7e81b56e9f271a4bd84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 383
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 384
            echo " ";
            // line 385
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 386
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 387
$context["attrvalue"] === true)) {
                // line 388
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 389
$context["attrvalue"] === false)) {
                // line 390
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_19674ccb85f67150bce7cc74b8bb31bc1b1e6ee991fc7e81b56e9f271a4bd84e->leave($__internal_19674ccb85f67150bce7cc74b8bb31bc1b1e6ee991fc7e81b56e9f271a4bd84e_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1336 => 390,  1334 => 389,  1329 => 388,  1327 => 387,  1322 => 386,  1320 => 385,  1318 => 384,  1314 => 383,  1308 => 382,  1301 => 379,  1292 => 378,  1286 => 377,  1279 => 374,  1273 => 373,  1267 => 372,  1260 => 369,  1256 => 368,  1252 => 367,  1246 => 366,  1240 => 365,  1229 => 361,  1225 => 360,  1219 => 359,  1208 => 352,  1206 => 351,  1203 => 348,  1200 => 346,  1198 => 345,  1196 => 344,  1194 => 343,  1192 => 342,  1185 => 338,  1183 => 337,  1179 => 336,  1173 => 335,  1165 => 331,  1157 => 329,  1153 => 328,  1151 => 327,  1149 => 326,  1143 => 325,  1136 => 322,  1133 => 320,  1131 => 319,  1125 => 318,  1115 => 314,  1113 => 313,  1086 => 312,  1083 => 310,  1080 => 308,  1078 => 307,  1076 => 306,  1074 => 305,  1068 => 304,  1061 => 301,  1059 => 300,  1057 => 299,  1051 => 298,  1044 => 293,  1038 => 292,  1031 => 289,  1029 => 288,  1027 => 287,  1021 => 286,  1014 => 283,  1012 => 282,  1010 => 281,  1008 => 280,  1006 => 279,  1000 => 278,  993 => 275,  987 => 270,  976 => 266,  955 => 262,  951 => 259,  948 => 256,  947 => 255,  946 => 254,  944 => 253,  942 => 252,  939 => 250,  937 => 249,  934 => 247,  932 => 246,  930 => 245,  924 => 244,  917 => 239,  915 => 238,  909 => 237,  902 => 234,  900 => 233,  894 => 232,  881 => 229,  877 => 226,  874 => 223,  873 => 222,  872 => 221,  870 => 220,  868 => 219,  862 => 218,  855 => 215,  853 => 214,  847 => 213,  840 => 210,  838 => 209,  832 => 208,  825 => 205,  823 => 204,  817 => 203,  810 => 200,  808 => 199,  802 => 198,  794 => 195,  792 => 194,  786 => 193,  779 => 190,  777 => 189,  771 => 188,  764 => 185,  762 => 184,  756 => 183,  749 => 180,  743 => 179,  736 => 176,  734 => 175,  728 => 174,  721 => 171,  719 => 170,  713 => 168,  705 => 164,  701 => 163,  697 => 160,  691 => 159,  685 => 158,  679 => 157,  673 => 156,  667 => 155,  661 => 154,  655 => 153,  650 => 149,  644 => 148,  638 => 147,  632 => 146,  626 => 145,  620 => 144,  614 => 143,  608 => 142,  602 => 139,  600 => 138,  596 => 137,  593 => 135,  591 => 134,  585 => 133,  577 => 129,  567 => 128,  562 => 127,  560 => 126,  557 => 124,  555 => 123,  549 => 122,  541 => 118,  539 => 116,  538 => 115,  537 => 114,  536 => 113,  532 => 112,  529 => 110,  527 => 109,  521 => 108,  513 => 104,  511 => 103,  509 => 102,  507 => 101,  505 => 100,  501 => 99,  498 => 97,  496 => 96,  490 => 95,  473 => 92,  467 => 91,  450 => 88,  444 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 382,  153 => 377,  151 => 372,  149 => 365,  147 => 359,  144 => 356,  142 => 335,  140 => 325,  138 => 318,  136 => 304,  134 => 298,  132 => 292,  130 => 286,  128 => 278,  126 => 270,  124 => 266,  122 => 244,  120 => 237,  118 => 232,  116 => 218,  114 => 213,  112 => 208,  110 => 203,  108 => 198,  106 => 193,  104 => 188,  102 => 183,  100 => 179,  98 => 174,  96 => 168,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
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
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}