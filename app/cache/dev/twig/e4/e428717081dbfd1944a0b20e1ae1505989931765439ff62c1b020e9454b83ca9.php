<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_603f51d761faac076f0255bee80746190b1e15deb24b1c75bc21b7cf515fe184 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96cc605a58a20ad91c842d3cbdae4db31d5e3ed8789d8b0c139f8a001bfed05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cc605a58a20ad91c842d3cbdae4db31d5e3ed8789d8b0c139f8a001bfed05d->enter($__internal_96cc605a58a20ad91c842d3cbdae4db31d5e3ed8789d8b0c139f8a001bfed05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_96cc605a58a20ad91c842d3cbdae4db31d5e3ed8789d8b0c139f8a001bfed05d->leave($__internal_96cc605a58a20ad91c842d3cbdae4db31d5e3ed8789d8b0c139f8a001bfed05d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
";
    }
}
