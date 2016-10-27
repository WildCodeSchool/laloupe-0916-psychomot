<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0b0502142737f9f4a0dd9bdedc437dfd84802ec0d0fbbeff3296fa322ea2f1b8 extends Twig_Template
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
        $__internal_8c046bcc9e2a9c29a806f65b6074d2ba3b05976fd621a64e4e2677f1ed374ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c046bcc9e2a9c29a806f65b6074d2ba3b05976fd621a64e4e2677f1ed374ae3->enter($__internal_8c046bcc9e2a9c29a806f65b6074d2ba3b05976fd621a64e4e2677f1ed374ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));
=======
        $__internal_70e99bf69cc0b4e4327811b430dc47b362cd2ccd0c3153bb0b22bffa107a49c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e99bf69cc0b4e4327811b430dc47b362cd2ccd0c3153bb0b22bffa107a49c2->enter($__internal_70e99bf69cc0b4e4327811b430dc47b362cd2ccd0c3153bb0b22bffa107a49c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));
>>>>>>> flo

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
<<<<<<< HEAD
        $__internal_8c046bcc9e2a9c29a806f65b6074d2ba3b05976fd621a64e4e2677f1ed374ae3->leave($__internal_8c046bcc9e2a9c29a806f65b6074d2ba3b05976fd621a64e4e2677f1ed374ae3_prof);
=======
        $__internal_70e99bf69cc0b4e4327811b430dc47b362cd2ccd0c3153bb0b22bffa107a49c2->leave($__internal_70e99bf69cc0b4e4327811b430dc47b362cd2ccd0c3153bb0b22bffa107a49c2_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
