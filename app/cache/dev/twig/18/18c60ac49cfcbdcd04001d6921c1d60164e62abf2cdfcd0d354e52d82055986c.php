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
        $__internal_2ce2e692d621e528eb5b588cc120c53220927a69965df8b20459a93a234a51aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce2e692d621e528eb5b588cc120c53220927a69965df8b20459a93a234a51aa->enter($__internal_2ce2e692d621e528eb5b588cc120c53220927a69965df8b20459a93a234a51aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 20
        echo "<div class=\"card col-xs-offset-4 col-xs-4\">
    <img class=\"card-img-top col-xs-offset-2\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/Logo250.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
    <div class=\"card-block\">
        <form action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 24
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 25
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 27
        echo "
            <div class=\"form-group row\">
                <label for=\"username\" class=\"col-xs-5 col-form-label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Votre nom d'utilisateur", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class=\"col-xs-7\">
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                </div>
            </div>


            <div class=\"form-group row\">
                <label for=\"password\" class=\"col-xs-5 col-form-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Votre mot de passe", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class=\"col-xs-7\">
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                </div>
            </div>

                <div class=\"col-xs-12\">
                    <input type=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se rappeller de moi", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <button type=\"submit\" class=\"btn btn-primary col-xs-offset-3\" id=\"_submit\" name=\"_submit\" >";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se connecter", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>

                </div>
            </div>




        </form>
    </div>
</div>
";
        
        $__internal_2ce2e692d621e528eb5b588cc120c53220927a69965df8b20459a93a234a51aa->leave($__internal_2ce2e692d621e528eb5b588cc120c53220927a69965df8b20459a93a234a51aa_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3683fb33cc3ed326bdb5f07eb39963b5557735a23f6e3ee57f93607541a37696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3683fb33cc3ed326bdb5f07eb39963b5557735a23f6e3ee57f93607541a37696->enter($__internal_3683fb33cc3ed326bdb5f07eb39963b5557735a23f6e3ee57f93607541a37696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/css/style.css"), "html", null, true);
        echo "\">
    <style>
        .btn-primary {
            background-color: #82bdb5 ;
            color: lightblue;
        }
        .card-img-top{
            margin-bottom: 25px;
        }

    </style>
";
        
        $__internal_3683fb33cc3ed326bdb5f07eb39963b5557735a23f6e3ee57f93607541a37696->leave($__internal_3683fb33cc3ed326bdb5f07eb39963b5557735a23f6e3ee57f93607541a37696_prof);

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
        return array (  117 => 4,  114 => 3,  108 => 2,  89 => 46,  85 => 45,  74 => 37,  65 => 31,  60 => 29,  56 => 27,  50 => 25,  48 => 24,  44 => 23,  39 => 21,  36 => 20,  30 => 18,  28 => 17,  25 => 16,  23 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/psychomot/css/style.css') }}\">
    <style>
        .btn-primary {
            background-color: #82bdb5 ;
            color: lightblue;
        }
        .card-img-top{
            margin-bottom: 25px;
        }

    </style>
{% endblock %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"card col-xs-offset-4 col-xs-4\">
    <img class=\"card-img-top col-xs-offset-2\" src=\"{{ asset('bundles/psychomot/img/Logo250.png') }}\" alt=\"Card image cap\">
    <div class=\"card-block\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}

            <div class=\"form-group row\">
                <label for=\"username\" class=\"col-xs-5 col-form-label\">{{ 'Votre nom d\\'utilisateur'|trans }}</label>
                <div class=\"col-xs-7\">
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                </div>
            </div>


            <div class=\"form-group row\">
                <label for=\"password\" class=\"col-xs-5 col-form-label\">{{ 'Votre mot de passe'|trans }}</label>
                <div class=\"col-xs-7\">
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                </div>
            </div>

                <div class=\"col-xs-12\">
                    <input type=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'se rappeller de moi'|trans }}</label>
                    <button type=\"submit\" class=\"btn btn-primary col-xs-offset-3\" id=\"_submit\" name=\"_submit\" >{{ 'se connecter'|trans }}</button>

                </div>
            </div>




        </form>
    </div>
</div>
";
    }
}
