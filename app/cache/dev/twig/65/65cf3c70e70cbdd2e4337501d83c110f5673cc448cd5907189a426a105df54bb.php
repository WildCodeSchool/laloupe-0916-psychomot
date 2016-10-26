<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_1a5e6455d8641bb8914810e08b4ca40c19c9b18757a373304c14c02ba57654e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_71f2ae6bde63e3c69de4bb6142330665a045d319faab3b09ceb4d1f2cbec0ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f2ae6bde63e3c69de4bb6142330665a045d319faab3b09ceb4d1f2cbec0ab9->enter($__internal_71f2ae6bde63e3c69de4bb6142330665a045d319faab3b09ceb4d1f2cbec0ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71f2ae6bde63e3c69de4bb6142330665a045d319faab3b09ceb4d1f2cbec0ab9->leave($__internal_71f2ae6bde63e3c69de4bb6142330665a045d319faab3b09ceb4d1f2cbec0ab9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7fcc1abb136510b34f3b6d9c2b2aa650a25919bd2ebc56c3d7b8e0078c05111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fcc1abb136510b34f3b6d9c2b2aa650a25919bd2ebc56c3d7b8e0078c05111->enter($__internal_e7fcc1abb136510b34f3b6d9c2b2aa650a25919bd2ebc56c3d7b8e0078c05111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e7fcc1abb136510b34f3b6d9c2b2aa650a25919bd2ebc56c3d7b8e0078c05111->leave($__internal_e7fcc1abb136510b34f3b6d9c2b2aa650a25919bd2ebc56c3d7b8e0078c05111_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
";
    }
}
