<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_a8d32c920b4cc6fcbf79e9be6935a6ce59ed1f411817bd0bc1db91cc552a8f6a extends Twig_Template
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
        $__internal_c35850f0587fa0a97a693a2f95e2b5302fb39007b65d5de6e94fc8809ae0dba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35850f0587fa0a97a693a2f95e2b5302fb39007b65d5de6e94fc8809ae0dba5->enter($__internal_c35850f0587fa0a97a693a2f95e2b5302fb39007b65d5de6e94fc8809ae0dba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));
=======
        $__internal_0c6dde21ecce33c4bc9cbbfd7423d59901871de5567fc08c491cd9ef967c8e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6dde21ecce33c4bc9cbbfd7423d59901871de5567fc08c491cd9ef967c8e15->enter($__internal_0c6dde21ecce33c4bc9cbbfd7423d59901871de5567fc08c491cd9ef967c8e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));
>>>>>>> flo

        // line 1
        echo "[exception] ";
        echo (((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) . " | ") . (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            $this->loadTemplate("@Twig/Exception/traces.txt.twig", "TwigBundle:Exception:exception.txt.twig", 5)->display(array("exception" => $context["e"]));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
<<<<<<< HEAD
        $__internal_c35850f0587fa0a97a693a2f95e2b5302fb39007b65d5de6e94fc8809ae0dba5->leave($__internal_c35850f0587fa0a97a693a2f95e2b5302fb39007b65d5de6e94fc8809ae0dba5_prof);
=======
        $__internal_0c6dde21ecce33c4bc9cbbfd7423d59901871de5567fc08c491cd9ef967c8e15->leave($__internal_0c6dde21ecce33c4bc9cbbfd7423d59901871de5567fc08c491cd9ef967c8e15_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  44 => 5,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{% include '@Twig/Exception/traces.txt.twig' with { 'exception': e } only %}

{% endfor %}
";
    }
}
