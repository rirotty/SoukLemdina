<?php

/* WorkshopBundle:Workshop:AjoutWorkshop.html.twig */
class __TwigTemplate_16f31ce614c2be257180eef6b78457d339ed71b2f7c4d082435c0f292dd734da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "WorkshopBundle:Workshop:AjoutWorkshop.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e12426473091f88163ee1a0978bf2a73562e7aaa94f91d140e3b2eeac804c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e12426473091f88163ee1a0978bf2a73562e7aaa94f91d140e3b2eeac804c0b->enter($__internal_2e12426473091f88163ee1a0978bf2a73562e7aaa94f91d140e3b2eeac804c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:AjoutWorkshop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e12426473091f88163ee1a0978bf2a73562e7aaa94f91d140e3b2eeac804c0b->leave($__internal_2e12426473091f88163ee1a0978bf2a73562e7aaa94f91d140e3b2eeac804c0b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c3a0493fbfd6350396e4526c7a5eaa6c6d50f771c55c611301f55ba5515cb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3a0493fbfd6350396e4526c7a5eaa6c6d50f771c55c611301f55ba5515cb8c->enter($__internal_6c3a0493fbfd6350396e4526c7a5eaa6c6d50f771c55c611301f55ba5515cb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"content-wrap\">
        <div class=\"container clearfix\">
            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\" >
                    <div class=\"tab-content clearfix\" id=\"tab-login\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">

                                <h3>Ajouter  Votre Workshop</h3>
                                ";
        // line 14
        if (array_key_exists("fdate", $context)) {
            // line 15
            echo "                                    <script>alert(\"La date de début doit précéder la date de fin\")</script>
                                ";
        }
        // line 17
        echo "                                ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_6c3a0493fbfd6350396e4526c7a5eaa6c6d50f771c55c611301f55ba5515cb8c->leave($__internal_6c3a0493fbfd6350396e4526c7a5eaa6c6d50f771c55c611301f55ba5515cb8c_prof);

    }

    public function getTemplateName()
    {
        return "WorkshopBundle:Workshop:AjoutWorkshop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  58 => 17,  54 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SUserBundle::layout.html.twig\" %}

{% block body %}

    <div class=\"content-wrap\">
        <div class=\"container clearfix\">
            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\" >
                    <div class=\"tab-content clearfix\" id=\"tab-login\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">

                                <h3>Ajouter  Votre Workshop</h3>
                                {% if fdate is defined %}
                                    <script>alert(\"La date de début doit précéder la date de fin\")</script>
                                {% endif %}
                                {{ form_start(form) }}
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}", "WorkshopBundle:Workshop:AjoutWorkshop.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/WorkshopBundle/Resources/views/Workshop/AjoutWorkshop.html.twig");
    }
}