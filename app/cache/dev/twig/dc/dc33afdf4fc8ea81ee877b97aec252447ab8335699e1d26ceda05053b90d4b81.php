<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_72718a0f91bc5f5539f8ccc1951424a003530898720c090afd5795cdadc6bb87 extends Twig_Template
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
        $__internal_edd64de7be60bd72ee07708afd429d47b296963ba2f263dcb35573636ed0e7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd64de7be60bd72ee07708afd429d47b296963ba2f263dcb35573636ed0e7b4->enter($__internal_edd64de7be60bd72ee07708afd429d47b296963ba2f263dcb35573636ed0e7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_edd64de7be60bd72ee07708afd429d47b296963ba2f263dcb35573636ed0e7b4->leave($__internal_edd64de7be60bd72ee07708afd429d47b296963ba2f263dcb35573636ed0e7b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
