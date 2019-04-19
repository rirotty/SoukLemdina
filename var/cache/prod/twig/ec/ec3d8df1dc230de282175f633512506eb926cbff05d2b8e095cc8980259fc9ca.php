<?php

/* LocalBundle:Local:afficheUser.html.twig */
class __TwigTemplate_9327e2b14a0ef47f55fb5a8bc47c35afb62c6396a11f10dbfc72c986edcb7880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "LocalBundle:Local:afficheUser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9560635caa5a95120acec27ac7670f158e32cbdfe79117360923f170dbf4fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9560635caa5a95120acec27ac7670f158e32cbdfe79117360923f170dbf4fc9->enter($__internal_d9560635caa5a95120acec27ac7670f158e32cbdfe79117360923f170dbf4fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:afficheUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9560635caa5a95120acec27ac7670f158e32cbdfe79117360923f170dbf4fc9->leave($__internal_d9560635caa5a95120acec27ac7670f158e32cbdfe79117360923f170dbf4fc9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f9f2b4b6553238c33800a655ac86761b92fa90eb48dffea7c1b2cc11dca0428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9f2b4b6553238c33800a655ac86761b92fa90eb48dffea7c1b2cc11dca0428->enter($__internal_3f9f2b4b6553238c33800a655ac86761b92fa90eb48dffea7c1b2cc11dca0428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Local";
        
        $__internal_3f9f2b4b6553238c33800a655ac86761b92fa90eb48dffea7c1b2cc11dca0428->leave($__internal_3f9f2b4b6553238c33800a655ac86761b92fa90eb48dffea7c1b2cc11dca0428_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f6f1f37071b36e805010590ec8ecffb5f0761193222b67176576bc77fe3ec00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6f1f37071b36e805010590ec8ecffb5f0761193222b67176576bc77fe3ec00->enter($__internal_8f6f1f37071b36e805010590ec8ecffb5f0761193222b67176576bc77fe3ec00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8f6f1f37071b36e805010590ec8ecffb5f0761193222b67176576bc77fe3ec00->leave($__internal_8f6f1f37071b36e805010590ec8ecffb5f0761193222b67176576bc77fe3ec00_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6828b98d61ff8f4ea3c676aa33affb1ee01217c67b5f4df76287cb8e4cbd39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6828b98d61ff8f4ea3c676aa33affb1ee01217c67b5f4df76287cb8e4cbd39c->enter($__internal_d6828b98d61ff8f4ea3c676aa33affb1ee01217c67b5f4df76287cb8e4cbd39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Mes locaux</h1>
            <span></span>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_ajout");
        echo "\">Ajouter un espace</a></li>

            </ol>
        </div>

    </section>
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"container clearfix\">

                <!-- Shop
                ============================================= -->
                <div id=\"shop\" class=\"shop grid-container clearfix\" data-layout=\"fitRows\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 27
            echo "                        <div class=\"product clearfix\">
                            <div class=\"product-image\">
                                <a href=\"#\"><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["l"], "image", array()))), "html", null, true);
            echo "\"  style=\"height: 250px;\"></a>

                                <div class=\"product-overlay\">
                                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_supprime", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Supprimer</span></a>
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_modifie", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Modifier</span></a>
                                </div>
                            </div>
                            <div class=\"product-desc\">
                                <div class=\"product-title\"><h3><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_affiche", array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "type", array()), "html", null, true);
            echo "</a></h3></div>
                                <div class=\"product-price\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "prix", array()), "html", null, true);
            echo "DT</div>
                                <div class=\"product-price\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "superficie", array()), "html", null, true);
            echo "m²</div>
                                <div class=\"product-rating\">
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star-half-full\"></i>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </div>
            </div></div></section>

";
        
        $__internal_d6828b98d61ff8f4ea3c676aa33affb1ee01217c67b5f4df76287cb8e4cbd39c->leave($__internal_d6828b98d61ff8f4ea3c676aa33affb1ee01217c67b5f4df76287cb8e4cbd39c_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7ba403978933802357bea0812a689204c27a613274e9a299ec78941a348c9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ba403978933802357bea0812a689204c27a613274e9a299ec78941a348c9f2->enter($__internal_e7ba403978933802357bea0812a689204c27a613274e9a299ec78941a348c9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e7ba403978933802357bea0812a689204c27a613274e9a299ec78941a348c9f2->leave($__internal_e7ba403978933802357bea0812a689204c27a613274e9a299ec78941a348c9f2_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:afficheUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  144 => 50,  127 => 39,  123 => 38,  117 => 37,  110 => 33,  106 => 32,  100 => 29,  96 => 27,  92 => 26,  74 => 11,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SUserBundle::layout.html.twig' %}
  {% block title %}Local{% endblock %}
    {% block stylesheets %}{% endblock %}
{% block body %}
    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Mes locaux</h1>
            <span></span>
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('_ajout') }}\">Ajouter un espace</a></li>

            </ol>
        </div>

    </section>
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"container clearfix\">

                <!-- Shop
                ============================================= -->
                <div id=\"shop\" class=\"shop grid-container clearfix\" data-layout=\"fitRows\">
                    {% for l in local %}
                        <div class=\"product clearfix\">
                            <div class=\"product-image\">
                                <a href=\"#\"><img src=\"{{ asset ('uploads/images/' ~ l.image)}}\"  style=\"height: 250px;\"></a>

                                <div class=\"product-overlay\">
                                    <a href=\"{{ path('_supprime', {'id':l.id}) }}\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Supprimer</span></a>
                                    <a href=\"{{ path('_modifie', {'id':l.id}) }}\" class=\"add-to-cart\"><i class=\"icon-shopping-cart\"></i><span> Modifier</span></a>
                                </div>
                            </div>
                            <div class=\"product-desc\">
                                <div class=\"product-title\"><h3><a href=\"{{ path('_affiche',{'id':l.id}) }}\">{{ l.type }}</a></h3></div>
                                <div class=\"product-price\">{{ l.prix }}DT</div>
                                <div class=\"product-price\">{{ l.superficie }}m²</div>
                                <div class=\"product-rating\">
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star-half-full\"></i>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div></div></section>

{% endblock %}
{% block javascripts %}{% endblock %}

", "LocalBundle:Local:afficheUser.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/afficheUser.html.twig");
    }
}