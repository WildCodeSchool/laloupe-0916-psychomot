<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_1d788bf87bd7991c5478b6b9e089671c44cc1f910665311e2b8225a8278ca20f extends Twig_Template
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
        $__internal_b99b44df55eeeb6763e6b9e1b791d9f121ed21bc85a38fcf701a96c9a0bed8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99b44df55eeeb6763e6b9e1b791d9f121ed21bc85a38fcf701a96c9a0bed8ff->enter($__internal_b99b44df55eeeb6763e6b9e1b791d9f121ed21bc85a38fcf701a96c9a0bed8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));
=======
        $__internal_5fcc6c913d2438e8e36206f641c71d6f88bb0ff0613ad2898823b985d7dbef81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcc6c913d2438e8e36206f641c71d6f88bb0ff0613ad2898823b985d7dbef81->enter($__internal_5fcc6c913d2438e8e36206f641c71d6f88bb0ff0613ad2898823b985d7dbef81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));
>>>>>>> flo

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
<<<<<<< HEAD
        $__internal_b99b44df55eeeb6763e6b9e1b791d9f121ed21bc85a38fcf701a96c9a0bed8ff->leave($__internal_b99b44df55eeeb6763e6b9e1b791d9f121ed21bc85a38fcf701a96c9a0bed8ff_prof);
=======
        $__internal_5fcc6c913d2438e8e36206f641c71d6f88bb0ff0613ad2898823b985d7dbef81->leave($__internal_5fcc6c913d2438e8e36206f641c71d6f88bb0ff0613ad2898823b985d7dbef81_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
";
    }
}
