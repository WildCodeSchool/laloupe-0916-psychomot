<?php

/* FOSUserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_3c970ce3cbc485bf5628024b2069cd6a5ff63f86444b4d864bf4bbb33e21a72c extends Twig_Template
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
        $__internal_a7ec27a05d55fa96b421b260242f34d9c6b41df97db172df980cf0a91f32d370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ec27a05d55fa96b421b260242f34d9c6b41df97db172df980cf0a91f32d370->enter($__internal_a7ec27a05d55fa96b421b260242f34d9c6b41df97db172df980cf0a91f32d370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));
=======
        $__internal_eb5eb8468abea3c715b22c57d53f76d9a5fdf70668360cfee4e80272f20b74be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5eb8468abea3c715b22c57d53f76d9a5fdf70668360cfee4e80272f20b74be->enter($__internal_eb5eb8468abea3c715b22c57d53f76d9a5fdf70668360cfee4e80272f20b74be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));
>>>>>>> flo

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
<<<<<<< HEAD
        $__internal_a7ec27a05d55fa96b421b260242f34d9c6b41df97db172df980cf0a91f32d370->leave($__internal_a7ec27a05d55fa96b421b260242f34d9c6b41df97db172df980cf0a91f32d370_prof);
=======
        $__internal_eb5eb8468abea3c715b22c57d53f76d9a5fdf70668360cfee4e80272f20b74be->leave($__internal_eb5eb8468abea3c715b22c57d53f76d9a5fdf70668360cfee4e80272f20b74be_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
";
    }
}
