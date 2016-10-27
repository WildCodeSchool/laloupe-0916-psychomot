<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_603f51d761faac076f0255bee80746190b1e15deb24b1c75bc21b7cf515fe184 extends Twig_Template
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
        $__internal_08e94d3d2f2d7a154e763e1ab5a8b2e4036ef1facb1ba4cf50279a6d7af199a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e94d3d2f2d7a154e763e1ab5a8b2e4036ef1facb1ba4cf50279a6d7af199a3->enter($__internal_08e94d3d2f2d7a154e763e1ab5a8b2e4036ef1facb1ba4cf50279a6d7af199a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));
=======
        $__internal_0ded2aca0ab35700858cc617b8b6951c33cde4fc08a4746372776426a95613c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ded2aca0ab35700858cc617b8b6951c33cde4fc08a4746372776426a95613c0->enter($__internal_0ded2aca0ab35700858cc617b8b6951c33cde4fc08a4746372776426a95613c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));
>>>>>>> flo

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
<<<<<<< HEAD
        $__internal_08e94d3d2f2d7a154e763e1ab5a8b2e4036ef1facb1ba4cf50279a6d7af199a3->leave($__internal_08e94d3d2f2d7a154e763e1ab5a8b2e4036ef1facb1ba4cf50279a6d7af199a3_prof);
=======
        $__internal_0ded2aca0ab35700858cc617b8b6951c33cde4fc08a4746372776426a95613c0->leave($__internal_0ded2aca0ab35700858cc617b8b6951c33cde4fc08a4746372776426a95613c0_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
";
    }
}
