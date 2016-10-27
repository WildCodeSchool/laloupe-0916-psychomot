<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e95e27e42fefdd9e40c6412ef384ea2cb0f8ad2b84fd8b1131bdba1d6293e391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd6a43a2ac2c844abfd7dda6cc9b09ef277c9b970b7d071f1b4fd4bb545fb9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6a43a2ac2c844abfd7dda6cc9b09ef277c9b970b7d071f1b4fd4bb545fb9cc->enter($__internal_bd6a43a2ac2c844abfd7dda6cc9b09ef277c9b970b7d071f1b4fd4bb545fb9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd6a43a2ac2c844abfd7dda6cc9b09ef277c9b970b7d071f1b4fd4bb545fb9cc->leave($__internal_bd6a43a2ac2c844abfd7dda6cc9b09ef277c9b970b7d071f1b4fd4bb545fb9cc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f54c7a46544666caf4d99f97943e6fb2b809f77d3fad7e6e1995fbe0175a24b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54c7a46544666caf4d99f97943e6fb2b809f77d3fad7e6e1995fbe0175a24b9->enter($__internal_f54c7a46544666caf4d99f97943e6fb2b809f77d3fad7e6e1995fbe0175a24b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_f54c7a46544666caf4d99f97943e6fb2b809f77d3fad7e6e1995fbe0175a24b9->leave($__internal_f54c7a46544666caf4d99f97943e6fb2b809f77d3fad7e6e1995fbe0175a24b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
";
    }
}
