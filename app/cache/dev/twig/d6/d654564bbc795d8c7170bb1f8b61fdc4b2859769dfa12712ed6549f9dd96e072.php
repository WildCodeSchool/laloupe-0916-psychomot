<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_748e19ab1d019a3d6714c0a9ce8af2e001a3cbea8e81b6bd1f367017c98198fa extends Twig_Template
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
<<<<<<< HEAD
        $__internal_3964489275d53ad1f421aca28c8976d448c48b6718fa57ba0ff341255bfa5e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3964489275d53ad1f421aca28c8976d448c48b6718fa57ba0ff341255bfa5e19->enter($__internal_3964489275d53ad1f421aca28c8976d448c48b6718fa57ba0ff341255bfa5e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));
=======
        $__internal_af09f200425b99c646103d6e65216b55d8f29e4845c99d5242e4e015bfac453d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af09f200425b99c646103d6e65216b55d8f29e4845c99d5242e4e015bfac453d->enter($__internal_af09f200425b99c646103d6e65216b55d8f29e4845c99d5242e4e015bfac453d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));
>>>>>>> flo

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
<<<<<<< HEAD
        $__internal_3964489275d53ad1f421aca28c8976d448c48b6718fa57ba0ff341255bfa5e19->leave($__internal_3964489275d53ad1f421aca28c8976d448c48b6718fa57ba0ff341255bfa5e19_prof);
=======
        $__internal_af09f200425b99c646103d6e65216b55d8f29e4845c99d5242e4e015bfac453d->leave($__internal_af09f200425b99c646103d6e65216b55d8f29e4845c99d5242e4e015bfac453d_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
";
    }
}
