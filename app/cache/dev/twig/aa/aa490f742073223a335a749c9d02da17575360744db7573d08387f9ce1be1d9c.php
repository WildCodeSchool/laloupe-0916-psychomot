<?php

/* PsychomotBundle:psychomot:new.html.twig */
class __TwigTemplate_70040b5bea3019978baa9de12d9f463971ce4a2d7327b458e0f4051ccaafbe42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PsychomotBundle:psychomot:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09635ebd93ab3a2ea7318cb24d555dd006fb08092e4e4ae2ef548a9f03360ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09635ebd93ab3a2ea7318cb24d555dd006fb08092e4e4ae2ef548a9f03360ece->enter($__internal_09635ebd93ab3a2ea7318cb24d555dd006fb08092e4e4ae2ef548a9f03360ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychomotBundle:psychomot:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09635ebd93ab3a2ea7318cb24d555dd006fb08092e4e4ae2ef548a9f03360ece->leave($__internal_09635ebd93ab3a2ea7318cb24d555dd006fb08092e4e4ae2ef548a9f03360ece_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62649c05b1b2aaf0f9766a096585bc993a777f1b4a2f709139ce8317d6e14357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62649c05b1b2aaf0f9766a096585bc993a777f1b4a2f709139ce8317d6e14357->enter($__internal_62649c05b1b2aaf0f9766a096585bc993a777f1b4a2f709139ce8317d6e14357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Psychomot creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psychomot_index");
        echo "\">Back to the list</a>
        </li>
    </ul>

";
        
        $__internal_62649c05b1b2aaf0f9766a096585bc993a777f1b4a2f709139ce8317d6e14357->leave($__internal_62649c05b1b2aaf0f9766a096585bc993a777f1b4a2f709139ce8317d6e14357_prof);

    }

    public function getTemplateName()
    {
        return "PsychomotBundle:psychomot:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Psychomot creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}


    <ul>
        <li>
            <a href=\"{{ path('psychomot_index') }}\">Back to the list</a>
        </li>
    </ul>

{% endblock %}
";
    }
}
