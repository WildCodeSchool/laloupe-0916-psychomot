<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_4a45ed23ecae4280636a0dcaf3e32831bb53ed8784e6b24b86135b37dc37e649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
<<<<<<< HEAD
        $__internal_743594864b62fd0c02f1e3312de2f54f8a7a2dc4cf23663007d105b38fdfb831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743594864b62fd0c02f1e3312de2f54f8a7a2dc4cf23663007d105b38fdfb831->enter($__internal_743594864b62fd0c02f1e3312de2f54f8a7a2dc4cf23663007d105b38fdfb831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_743594864b62fd0c02f1e3312de2f54f8a7a2dc4cf23663007d105b38fdfb831->leave($__internal_743594864b62fd0c02f1e3312de2f54f8a7a2dc4cf23663007d105b38fdfb831_prof);
=======
        $__internal_478f61cb97b9c1b1528f7c5d8451103a9cbc6c8d0e6f48f91f868335019cd4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478f61cb97b9c1b1528f7c5d8451103a9cbc6c8d0e6f48f91f868335019cd4dd->enter($__internal_478f61cb97b9c1b1528f7c5d8451103a9cbc6c8d0e6f48f91f868335019cd4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_478f61cb97b9c1b1528f7c5d8451103a9cbc6c8d0e6f48f91f868335019cd4dd->leave($__internal_478f61cb97b9c1b1528f7c5d8451103a9cbc6c8d0e6f48f91f868335019cd4dd_prof);
>>>>>>> flo

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_9412fa176dcd371aac7f4b7791a8a5985f6f750a9e3e622f2b3a84cd0020eaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9412fa176dcd371aac7f4b7791a8a5985f6f750a9e3e622f2b3a84cd0020eaa9->enter($__internal_9412fa176dcd371aac7f4b7791a8a5985f6f750a9e3e622f2b3a84cd0020eaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));
=======
        $__internal_622c35682cbe1829390e3880ce821c80536432d4bfae0e45fed34da542288ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622c35682cbe1829390e3880ce821c80536432d4bfae0e45fed34da542288ed2->enter($__internal_622c35682cbe1829390e3880ce821c80536432d4bfae0e45fed34da542288ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));
>>>>>>> flo

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
<<<<<<< HEAD
        $__internal_9412fa176dcd371aac7f4b7791a8a5985f6f750a9e3e622f2b3a84cd0020eaa9->leave($__internal_9412fa176dcd371aac7f4b7791a8a5985f6f750a9e3e622f2b3a84cd0020eaa9_prof);
=======
        $__internal_622c35682cbe1829390e3880ce821c80536432d4bfae0e45fed34da542288ed2->leave($__internal_622c35682cbe1829390e3880ce821c80536432d4bfae0e45fed34da542288ed2_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
