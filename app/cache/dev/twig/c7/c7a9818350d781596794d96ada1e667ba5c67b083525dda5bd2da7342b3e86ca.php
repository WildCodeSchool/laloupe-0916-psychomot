<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_ea20c4b88090efd73bd68e7df3c6c79f15710358a37ee0176a79e8c02cbed56a extends Twig_Template
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
        $__internal_7da8b6a3f6ab48e43a65d6d44c741737f1fc13dd10a928da4c774566a8a9988b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da8b6a3f6ab48e43a65d6d44c741737f1fc13dd10a928da4c774566a8a9988b->enter($__internal_7da8b6a3f6ab48e43a65d6d44c741737f1fc13dd10a928da4c774566a8a9988b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));
=======
        $__internal_5c4b3c9e88f8fae57d12c533a722895708099912bf9070b4ec3da957443b4708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4b3c9e88f8fae57d12c533a722895708099912bf9070b4ec3da957443b4708->enter($__internal_5c4b3c9e88f8fae57d12c533a722895708099912bf9070b4ec3da957443b4708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
>>>>>>> flo

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
<<<<<<< HEAD
        $__internal_7da8b6a3f6ab48e43a65d6d44c741737f1fc13dd10a928da4c774566a8a9988b->leave($__internal_7da8b6a3f6ab48e43a65d6d44c741737f1fc13dd10a928da4c774566a8a9988b_prof);
=======
        $__internal_5c4b3c9e88f8fae57d12c533a722895708099912bf9070b4ec3da957443b4708->leave($__internal_5c4b3c9e88f8fae57d12c533a722895708099912bf9070b4ec3da957443b4708_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  32 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
";
    }
}
