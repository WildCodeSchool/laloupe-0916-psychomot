<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_cb15cec4c4e28acf8f6133ecab093e81f8352d93f7cd7242daa2e7471c86d4df extends Twig_Template
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
        $__internal_a35de7c8137306171863687a296bf728a81aabe9d1b50c09c50d9f9dbf17f7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35de7c8137306171863687a296bf728a81aabe9d1b50c09c50d9f9dbf17f7ef->enter($__internal_a35de7c8137306171863687a296bf728a81aabe9d1b50c09c50d9f9dbf17f7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));
=======
        $__internal_693e3c573474c8c35513aa435a9d3896186c3accfc0cca9659fa410ee8ca061b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693e3c573474c8c35513aa435a9d3896186c3accfc0cca9659fa410ee8ca061b->enter($__internal_693e3c573474c8c35513aa435a9d3896186c3accfc0cca9659fa410ee8ca061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));
>>>>>>> flo

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
<<<<<<< HEAD
        $__internal_a35de7c8137306171863687a296bf728a81aabe9d1b50c09c50d9f9dbf17f7ef->leave($__internal_a35de7c8137306171863687a296bf728a81aabe9d1b50c09c50d9f9dbf17f7ef_prof);
=======
        $__internal_693e3c573474c8c35513aa435a9d3896186c3accfc0cca9659fa410ee8ca061b->leave($__internal_693e3c573474c8c35513aa435a9d3896186c3accfc0cca9659fa410ee8ca061b_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
";
    }
}
