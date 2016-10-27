<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e7a3a43a6deb620cba367f6fb2f1e7ad21e2d0a1e283b216788c51b733ee741f extends Twig_Template
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
        $__internal_628f69b3e41f1a6fd35326df6f86031040a94059449fae9f6a56c0fd5c5abea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628f69b3e41f1a6fd35326df6f86031040a94059449fae9f6a56c0fd5c5abea1->enter($__internal_628f69b3e41f1a6fd35326df6f86031040a94059449fae9f6a56c0fd5c5abea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_628f69b3e41f1a6fd35326df6f86031040a94059449fae9f6a56c0fd5c5abea1->leave($__internal_628f69b3e41f1a6fd35326df6f86031040a94059449fae9f6a56c0fd5c5abea1_prof);

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
