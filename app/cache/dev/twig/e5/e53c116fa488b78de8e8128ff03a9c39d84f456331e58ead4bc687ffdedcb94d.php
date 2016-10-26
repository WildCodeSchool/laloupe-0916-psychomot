<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_92b0802d14583f09a39581261079bd917f861e65822e83d2c835fd330785023e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4e5a5091075fa8ae5387fb2fedf2a31f4adb038b6747494246941ec2df482ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5a5091075fa8ae5387fb2fedf2a31f4adb038b6747494246941ec2df482ff4->enter($__internal_4e5a5091075fa8ae5387fb2fedf2a31f4adb038b6747494246941ec2df482ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e5a5091075fa8ae5387fb2fedf2a31f4adb038b6747494246941ec2df482ff4->leave($__internal_4e5a5091075fa8ae5387fb2fedf2a31f4adb038b6747494246941ec2df482ff4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_207d9f156dc9467abd797c680b757e9f7052c929e3198b83dca535f65b21fa5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207d9f156dc9467abd797c680b757e9f7052c929e3198b83dca535f65b21fa5b->enter($__internal_207d9f156dc9467abd797c680b757e9f7052c929e3198b83dca535f65b21fa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_207d9f156dc9467abd797c680b757e9f7052c929e3198b83dca535f65b21fa5b->leave($__internal_207d9f156dc9467abd797c680b757e9f7052c929e3198b83dca535f65b21fa5b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff8c7523817e83611b1998d9b9cb217e4e069db118f8f04c6a73828cc1c7c7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8c7523817e83611b1998d9b9cb217e4e069db118f8f04c6a73828cc1c7c7a8->enter($__internal_ff8c7523817e83611b1998d9b9cb217e4e069db118f8f04c6a73828cc1c7c7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ff8c7523817e83611b1998d9b9cb217e4e069db118f8f04c6a73828cc1c7c7a8->leave($__internal_ff8c7523817e83611b1998d9b9cb217e4e069db118f8f04c6a73828cc1c7c7a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
