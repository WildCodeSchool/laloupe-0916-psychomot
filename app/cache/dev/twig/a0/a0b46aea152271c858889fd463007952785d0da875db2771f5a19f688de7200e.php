<?php

/* PsychomotBundle:psychomot:new.html.twig */
class __TwigTemplate_70f773193d14fb9f99620186e29a40ea41505faa185c592aede185e415c8b07b extends Twig_Template
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
        $__internal_2b7a64a2d212c1445ef40675138fa6e81163aa5cf68228816823c2f9894e5179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7a64a2d212c1445ef40675138fa6e81163aa5cf68228816823c2f9894e5179->enter($__internal_2b7a64a2d212c1445ef40675138fa6e81163aa5cf68228816823c2f9894e5179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychomotBundle:psychomot:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7a64a2d212c1445ef40675138fa6e81163aa5cf68228816823c2f9894e5179->leave($__internal_2b7a64a2d212c1445ef40675138fa6e81163aa5cf68228816823c2f9894e5179_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_964e2eb1ffc564702da2aa82443816bdb3e4dcd8456d394dc5dfa40250057f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964e2eb1ffc564702da2aa82443816bdb3e4dcd8456d394dc5dfa40250057f1b->enter($__internal_964e2eb1ffc564702da2aa82443816bdb3e4dcd8456d394dc5dfa40250057f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psychomot_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_964e2eb1ffc564702da2aa82443816bdb3e4dcd8456d394dc5dfa40250057f1b->leave($__internal_964e2eb1ffc564702da2aa82443816bdb3e4dcd8456d394dc5dfa40250057f1b_prof);

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
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
