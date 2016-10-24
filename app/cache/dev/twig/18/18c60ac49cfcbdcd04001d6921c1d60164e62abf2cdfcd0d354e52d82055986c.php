<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_3e074b839a6387912e40bffb061815b2b0d639854d824aa79b96e1aa763c4ff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a197d7d13d315e2457a91dc9c6964e7e78616053e571bbb9f74206f329936e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a197d7d13d315e2457a91dc9c6964e7e78616053e571bbb9f74206f329936e67->enter($__internal_a197d7d13d315e2457a91dc9c6964e7e78616053e571bbb9f74206f329936e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 12
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 13
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 15
        echo "
    <div class=\"form-group row\">
        <label for=\"username\" class=\"col-xs-2 col-form-label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-xs-3\">
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
        </div>
    </div>


    <div class=\"form-group row\">
        <label for=\"password\" class=\"col-xs-2 col-form-label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-xs-3\">
            <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
        </div>
    </div>

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_a197d7d13d315e2457a91dc9c6964e7e78616053e571bbb9f74206f329936e67->leave($__internal_a197d7d13d315e2457a91dc9c6964e7e78616053e571bbb9f74206f329936e67_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c94dcd61cee02bd4910bb02113b07abc6152ca3bcb29f92d2263e99d0b4b0ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94dcd61cee02bd4910bb02113b07abc6152ca3bcb29f92d2263e99d0b4b0ad1->enter($__internal_c94dcd61cee02bd4910bb02113b07abc6152ca3bcb29f92d2263e99d0b4b0ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

";
        
        $__internal_c94dcd61cee02bd4910bb02113b07abc6152ca3bcb29f92d2263e99d0b4b0ad1->leave($__internal_c94dcd61cee02bd4910bb02113b07abc6152ca3bcb29f92d2263e99d0b4b0ad1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 3,  94 => 2,  84 => 34,  79 => 32,  69 => 25,  60 => 19,  55 => 17,  51 => 15,  45 => 13,  43 => 12,  39 => 11,  36 => 10,  30 => 8,  28 => 7,  25 => 6,  23 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

{% endblock %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <div class=\"form-group row\">
        <label for=\"username\" class=\"col-xs-2 col-form-label\">{{ 'security.login.username'|trans }}</label>
        <div class=\"col-xs-3\">
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
        </div>
    </div>


    <div class=\"form-group row\">
        <label for=\"password\" class=\"col-xs-2 col-form-label\">{{ 'security.login.password'|trans }}</label>
        <div class=\"col-xs-3\">
            <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
        </div>
    </div>

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
</form>
";
    }
}
