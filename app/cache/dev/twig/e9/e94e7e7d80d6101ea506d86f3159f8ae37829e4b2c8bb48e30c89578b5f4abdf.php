<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fa6977c61837771a2ca090128970a53b00790b3d22143e30849cc41cec38e365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8910c4bcb838e188c64c2388d6699c831d69c1d4ae17579254badea6389b1d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8910c4bcb838e188c64c2388d6699c831d69c1d4ae17579254badea6389b1d87->enter($__internal_8910c4bcb838e188c64c2388d6699c831d69c1d4ae17579254badea6389b1d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8910c4bcb838e188c64c2388d6699c831d69c1d4ae17579254badea6389b1d87->leave($__internal_8910c4bcb838e188c64c2388d6699c831d69c1d4ae17579254badea6389b1d87_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e71d115bb0ef44df144db2a9fe50f5f7ae46bd1d4ad8251cb622966a58d56b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71d115bb0ef44df144db2a9fe50f5f7ae46bd1d4ad8251cb622966a58d56b30->enter($__internal_e71d115bb0ef44df144db2a9fe50f5f7ae46bd1d4ad8251cb622966a58d56b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e71d115bb0ef44df144db2a9fe50f5f7ae46bd1d4ad8251cb622966a58d56b30->leave($__internal_e71d115bb0ef44df144db2a9fe50f5f7ae46bd1d4ad8251cb622966a58d56b30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dad7c20dd8a4500302585b4669d478aefcb1eab64b6590c43a35f3a197d8aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dad7c20dd8a4500302585b4669d478aefcb1eab64b6590c43a35f3a197d8aac->enter($__internal_4dad7c20dd8a4500302585b4669d478aefcb1eab64b6590c43a35f3a197d8aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4dad7c20dd8a4500302585b4669d478aefcb1eab64b6590c43a35f3a197d8aac->leave($__internal_4dad7c20dd8a4500302585b4669d478aefcb1eab64b6590c43a35f3a197d8aac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fe0a2dc42e71a3d7d546f21be6709e76af540018ff3126ddd3dd521a5d32325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe0a2dc42e71a3d7d546f21be6709e76af540018ff3126ddd3dd521a5d32325->enter($__internal_4fe0a2dc42e71a3d7d546f21be6709e76af540018ff3126ddd3dd521a5d32325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4fe0a2dc42e71a3d7d546f21be6709e76af540018ff3126ddd3dd521a5d32325->leave($__internal_4fe0a2dc42e71a3d7d546f21be6709e76af540018ff3126ddd3dd521a5d32325_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
