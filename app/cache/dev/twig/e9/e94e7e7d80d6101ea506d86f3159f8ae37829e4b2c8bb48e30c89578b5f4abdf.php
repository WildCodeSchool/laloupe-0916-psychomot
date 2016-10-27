<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fa6977c61837771a2ca090128970a53b00790b3d22143e30849cc41cec38e365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
<<<<<<< HEAD
        $__internal_b096137e0be938cc4fc64bbba60002f72e6d70c07238465f81966780d6407bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b096137e0be938cc4fc64bbba60002f72e6d70c07238465f81966780d6407bbe->enter($__internal_b096137e0be938cc4fc64bbba60002f72e6d70c07238465f81966780d6407bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b096137e0be938cc4fc64bbba60002f72e6d70c07238465f81966780d6407bbe->leave($__internal_b096137e0be938cc4fc64bbba60002f72e6d70c07238465f81966780d6407bbe_prof);
=======
        $__internal_91a01f3b3926420302ed74bbdb52f6e48cb52976c8a903c85ead01c4bd812b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a01f3b3926420302ed74bbdb52f6e48cb52976c8a903c85ead01c4bd812b89->enter($__internal_91a01f3b3926420302ed74bbdb52f6e48cb52976c8a903c85ead01c4bd812b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a01f3b3926420302ed74bbdb52f6e48cb52976c8a903c85ead01c4bd812b89->leave($__internal_91a01f3b3926420302ed74bbdb52f6e48cb52976c8a903c85ead01c4bd812b89_prof);
>>>>>>> flo

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_d3b50ca6c89fcc83877ac7d217962ca91448bf74e429bc082cfc52bbb7da298f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b50ca6c89fcc83877ac7d217962ca91448bf74e429bc082cfc52bbb7da298f->enter($__internal_d3b50ca6c89fcc83877ac7d217962ca91448bf74e429bc082cfc52bbb7da298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
=======
        $__internal_cbdb71f20e1bded350a9fd71f0228f970dab32119fcb2d4538f6468386d25b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdb71f20e1bded350a9fd71f0228f970dab32119fcb2d4538f6468386d25b7c->enter($__internal_cbdb71f20e1bded350a9fd71f0228f970dab32119fcb2d4538f6468386d25b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
>>>>>>> flo

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
<<<<<<< HEAD
        $__internal_d3b50ca6c89fcc83877ac7d217962ca91448bf74e429bc082cfc52bbb7da298f->leave($__internal_d3b50ca6c89fcc83877ac7d217962ca91448bf74e429bc082cfc52bbb7da298f_prof);
=======
        $__internal_cbdb71f20e1bded350a9fd71f0228f970dab32119fcb2d4538f6468386d25b7c->leave($__internal_cbdb71f20e1bded350a9fd71f0228f970dab32119fcb2d4538f6468386d25b7c_prof);
>>>>>>> flo

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_5d7cae5e34b76a83f2b7e4985242ad105cad8aeb1072e3258a8cc1d14ffbfded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7cae5e34b76a83f2b7e4985242ad105cad8aeb1072e3258a8cc1d14ffbfded->enter($__internal_5d7cae5e34b76a83f2b7e4985242ad105cad8aeb1072e3258a8cc1d14ffbfded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));
=======
        $__internal_cb354bc56c62f832a11b3c00afdf08c9cbd13722b998d11eaa5369af5a6c595f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb354bc56c62f832a11b3c00afdf08c9cbd13722b998d11eaa5369af5a6c595f->enter($__internal_cb354bc56c62f832a11b3c00afdf08c9cbd13722b998d11eaa5369af5a6c595f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));
>>>>>>> flo

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
<<<<<<< HEAD
        $__internal_5d7cae5e34b76a83f2b7e4985242ad105cad8aeb1072e3258a8cc1d14ffbfded->leave($__internal_5d7cae5e34b76a83f2b7e4985242ad105cad8aeb1072e3258a8cc1d14ffbfded_prof);
=======
        $__internal_cb354bc56c62f832a11b3c00afdf08c9cbd13722b998d11eaa5369af5a6c595f->leave($__internal_cb354bc56c62f832a11b3c00afdf08c9cbd13722b998d11eaa5369af5a6c595f_prof);
>>>>>>> flo

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_294e859e81cf654540286b7d8f6727f303599314b13ea1a687cc0ca91f6757ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294e859e81cf654540286b7d8f6727f303599314b13ea1a687cc0ca91f6757ad->enter($__internal_294e859e81cf654540286b7d8f6727f303599314b13ea1a687cc0ca91f6757ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
=======
        $__internal_3fbcb3c30d19e99e182fcaad6a46a76e8aabb8c36f59e7ab204b7fb56569d36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbcb3c30d19e99e182fcaad6a46a76e8aabb8c36f59e7ab204b7fb56569d36e->enter($__internal_3fbcb3c30d19e99e182fcaad6a46a76e8aabb8c36f59e7ab204b7fb56569d36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
>>>>>>> flo

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
<<<<<<< HEAD
        $__internal_294e859e81cf654540286b7d8f6727f303599314b13ea1a687cc0ca91f6757ad->leave($__internal_294e859e81cf654540286b7d8f6727f303599314b13ea1a687cc0ca91f6757ad_prof);
=======
        $__internal_3fbcb3c30d19e99e182fcaad6a46a76e8aabb8c36f59e7ab204b7fb56569d36e->leave($__internal_3fbcb3c30d19e99e182fcaad6a46a76e8aabb8c36f59e7ab204b7fb56569d36e_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
