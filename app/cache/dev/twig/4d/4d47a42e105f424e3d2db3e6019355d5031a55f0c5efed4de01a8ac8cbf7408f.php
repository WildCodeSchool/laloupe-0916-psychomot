<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_003573d78f04e08e6f5b410cb63bf0831de9ca89535b7d4a25bb7ba9e4720fbb extends Twig_Template
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
        $__internal_bc53e8805ec9ee31546380dfbe509010b448b192acf69e6f4b64151afd56ffd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc53e8805ec9ee31546380dfbe509010b448b192acf69e6f4b64151afd56ffd6->enter($__internal_bc53e8805ec9ee31546380dfbe509010b448b192acf69e6f4b64151afd56ffd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));
=======
        $__internal_2fd1665d64459703d73d62a745da0f0d5e61ab904474622685b3aea9365f254f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd1665d64459703d73d62a745da0f0d5e61ab904474622685b3aea9365f254f->enter($__internal_2fd1665d64459703d73d62a745da0f0d5e61ab904474622685b3aea9365f254f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));
>>>>>>> flo

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
<<<<<<< HEAD
        $__internal_bc53e8805ec9ee31546380dfbe509010b448b192acf69e6f4b64151afd56ffd6->leave($__internal_bc53e8805ec9ee31546380dfbe509010b448b192acf69e6f4b64151afd56ffd6_prof);
=======
        $__internal_2fd1665d64459703d73d62a745da0f0d5e61ab904474622685b3aea9365f254f->leave($__internal_2fd1665d64459703d73d62a745da0f0d5e61ab904474622685b3aea9365f254f_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
