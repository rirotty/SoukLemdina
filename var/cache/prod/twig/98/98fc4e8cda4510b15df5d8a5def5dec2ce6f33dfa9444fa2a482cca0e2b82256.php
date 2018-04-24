<?php

/* FOSMessageBundle::layout.html.twig */
class __TwigTemplate_748b551d186dd8c6dcddef94a375ccd0b944325d40b92f050cb1fc3840669aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "FOSMessageBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e345f23e70023cc564963cde562da381f5ed512df4386a7489f4bf0b8642f3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e345f23e70023cc564963cde562da381f5ed512df4386a7489f4bf0b8642f3b2->enter($__internal_e345f23e70023cc564963cde562da381f5ed512df4386a7489f4bf0b8642f3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e345f23e70023cc564963cde562da381f5ed512df4386a7489f4bf0b8642f3b2->leave($__internal_e345f23e70023cc564963cde562da381f5ed512df4386a7489f4bf0b8642f3b2_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_190ec2fc3807faf4b77304d999d921b207e2e69658cf23519b765d6482749519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190ec2fc3807faf4b77304d999d921b207e2e69658cf23519b765d6482749519->enter($__internal_190ec2fc3807faf4b77304d999d921b207e2e69658cf23519b765d6482749519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
        echo " - Messagerie</title>
";
        
        $__internal_190ec2fc3807faf4b77304d999d921b207e2e69658cf23519b765d6482749519->leave($__internal_190ec2fc3807faf4b77304d999d921b207e2e69658cf23519b765d6482749519_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_90f7e596804a22f0fcd5b7a776fcf6b49b1f4636e21599342b7d6eaa80b49bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f7e596804a22f0fcd5b7a776fcf6b49b1f4636e21599342b7d6eaa80b49bdc->enter($__internal_90f7e596804a22f0fcd5b7a776fcf6b49b1f4636e21599342b7d6eaa80b49bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container clearfix\">
                <div class=\"col-md-12\">
                            ";
        // line 11
        echo "
                            <div align=\"center\">
                                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_inbox");
        echo "\" class=\"button button-3d button-black\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Reçus", array(), "FOSMessageBundle");
        // line 14
        echo "</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_sent");
        echo "\" class=\"button button-3d button-black\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Envoyés", array(), "FOSMessageBundle");
        // line 16
        echo "</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_deleted");
        echo "\" class=\"button button-3d button-black\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Supprimés", array(), "FOSMessageBundle");
        // line 18
        echo "</a>
                            </div>
<br><br>
                            ";
        // line 21
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 22
        echo "
        </div>
    </div>
";
        
        $__internal_90f7e596804a22f0fcd5b7a776fcf6b49b1f4636e21599342b7d6eaa80b49bdc->leave($__internal_90f7e596804a22f0fcd5b7a776fcf6b49b1f4636e21599342b7d6eaa80b49bdc_prof);

    }

    // line 21
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_87576b0737d694dfebe7d3c7d4b305def8ebbbd93de0b4fa8e94750112de414d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87576b0737d694dfebe7d3c7d4b305def8ebbbd93de0b4fa8e94750112de414d->enter($__internal_87576b0737d694dfebe7d3c7d4b305def8ebbbd93de0b4fa8e94750112de414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        
        $__internal_87576b0737d694dfebe7d3c7d4b305def8ebbbd93de0b4fa8e94750112de414d->leave($__internal_87576b0737d694dfebe7d3c7d4b305def8ebbbd93de0b4fa8e94750112de414d_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  97 => 22,  95 => 21,  90 => 18,  86 => 17,  83 => 16,  79 => 15,  76 => 14,  72 => 13,  68 => 11,  64 => 8,  58 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
{% block head %}
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset={{ _charset }}\"/>
    <title>{{ app.user.firstname }} {{  app.user.lastname }} - Messagerie</title>
{% endblock %}

{% block body %}
    <div class=\"container clearfix\">
                <div class=\"col-md-12\">
                            {#<h1>{% trans from 'FOSMessageBundle' %}messenger{% endtrans %}</h1>#}

                            <div align=\"center\">
                                <a href=\"{{ url('fos_message_inbox') }}\" class=\"button button-3d button-black\">{% trans from 'FOSMessageBundle' %}
                                        Reçus{% endtrans %}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"{{ url('fos_message_sent') }}\" class=\"button button-3d button-black\">{% trans from 'FOSMessageBundle' %}
                                        Envoyés{% endtrans %}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"{{ url('fos_message_deleted') }}\" class=\"button button-3d button-black\">{% trans from 'FOSMessageBundle' %}
                                        Supprimés{% endtrans %}</a>
                            </div>
<br><br>
                            {% block fos_message_content %}{% endblock %}

        </div>
    </div>
{% endblock %}", "FOSMessageBundle::layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/layout.html.twig");
    }
}