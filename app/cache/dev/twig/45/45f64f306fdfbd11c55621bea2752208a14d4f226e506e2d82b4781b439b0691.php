<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_c9769f37e1e65f9cc6a011e7f551324cbc00d6a04543a2fef036f9304d1dba16 extends Twig_Template
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
        $__internal_b3e12a2221845029890241c59f443567a00bcdddc8a208f35f257ebf61129748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e12a2221845029890241c59f443567a00bcdddc8a208f35f257ebf61129748->enter($__internal_b3e12a2221845029890241c59f443567a00bcdddc8a208f35f257ebf61129748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));
=======
        $__internal_6d0a07d147cdaf23ac666581d4846048bd762b90b074e01fa0d5cbbb381fbc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0a07d147cdaf23ac666581d4846048bd762b90b074e01fa0d5cbbb381fbc8d->enter($__internal_6d0a07d147cdaf23ac666581d4846048bd762b90b074e01fa0d5cbbb381fbc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
>>>>>>> flo

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
<<<<<<< HEAD
        $__internal_b3e12a2221845029890241c59f443567a00bcdddc8a208f35f257ebf61129748->leave($__internal_b3e12a2221845029890241c59f443567a00bcdddc8a208f35f257ebf61129748_prof);
=======
        $__internal_6d0a07d147cdaf23ac666581d4846048bd762b90b074e01fa0d5cbbb381fbc8d->leave($__internal_6d0a07d147cdaf23ac666581d4846048bd762b90b074e01fa0d5cbbb381fbc8d_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
";
    }
}
