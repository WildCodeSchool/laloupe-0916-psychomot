<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_605539d61a9330a25b5dd4a5a54d7266979e535f76c9a1761b8047562181ea01 extends Twig_Template
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
        $__internal_4628d0b8028f23176c6a3a6b297f4d787a355af98efac8eeed5bc6ef5a105c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4628d0b8028f23176c6a3a6b297f4d787a355af98efac8eeed5bc6ef5a105c83->enter($__internal_4628d0b8028f23176c6a3a6b297f4d787a355af98efac8eeed5bc6ef5a105c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));
=======
        $__internal_224fe777065b25da3f240454df400e2aafc59f1d50d579b7390067ded13c704f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224fe777065b25da3f240454df400e2aafc59f1d50d579b7390067ded13c704f->enter($__internal_224fe777065b25da3f240454df400e2aafc59f1d50d579b7390067ded13c704f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));
>>>>>>> flo

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
<<<<<<< HEAD
        $__internal_4628d0b8028f23176c6a3a6b297f4d787a355af98efac8eeed5bc6ef5a105c83->leave($__internal_4628d0b8028f23176c6a3a6b297f4d787a355af98efac8eeed5bc6ef5a105c83_prof);
=======
        $__internal_224fe777065b25da3f240454df400e2aafc59f1d50d579b7390067ded13c704f->leave($__internal_224fe777065b25da3f240454df400e2aafc59f1d50d579b7390067ded13c704f_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
