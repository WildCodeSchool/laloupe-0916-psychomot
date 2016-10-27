<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_723423c9d34331c901a4212d8626ea87ffaceddf8250ef5af5826440fdc03b2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_ce3448d9ff88e6c660809deb80ec93dbc4f53594a9452682ba324b92b74205cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3448d9ff88e6c660809deb80ec93dbc4f53594a9452682ba324b92b74205cf->enter($__internal_ce3448d9ff88e6c660809deb80ec93dbc4f53594a9452682ba324b92b74205cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce3448d9ff88e6c660809deb80ec93dbc4f53594a9452682ba324b92b74205cf->leave($__internal_ce3448d9ff88e6c660809deb80ec93dbc4f53594a9452682ba324b92b74205cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f37d193d223afee37e761ba8c4246bf56ac02313e807cbaf08932c15240eb5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37d193d223afee37e761ba8c4246bf56ac02313e807cbaf08932c15240eb5a0->enter($__internal_f37d193d223afee37e761ba8c4246bf56ac02313e807cbaf08932c15240eb5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_f37d193d223afee37e761ba8c4246bf56ac02313e807cbaf08932c15240eb5a0->leave($__internal_f37d193d223afee37e761ba8c4246bf56ac02313e807cbaf08932c15240eb5a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
