<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1d8e8ae06916a070feb73d168d9d971703f99ac85507717df7ca879c1a6216f1 extends Twig_Template
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
        $__internal_4ed0713b20071ee09a875b5bd5c706f32c98bd12ac2b41278fcc358f37ed38c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed0713b20071ee09a875b5bd5c706f32c98bd12ac2b41278fcc358f37ed38c4->enter($__internal_4ed0713b20071ee09a875b5bd5c706f32c98bd12ac2b41278fcc358f37ed38c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));
=======
        $__internal_dc0386fd6e0a1a36a30610b8186114b378c5b9d93cfd8a079fa281e847a99ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0386fd6e0a1a36a30610b8186114b378c5b9d93cfd8a079fa281e847a99ddb->enter($__internal_dc0386fd6e0a1a36a30610b8186114b378c5b9d93cfd8a079fa281e847a99ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));
>>>>>>> flo

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
<<<<<<< HEAD
        $__internal_4ed0713b20071ee09a875b5bd5c706f32c98bd12ac2b41278fcc358f37ed38c4->leave($__internal_4ed0713b20071ee09a875b5bd5c706f32c98bd12ac2b41278fcc358f37ed38c4_prof);
=======
        $__internal_dc0386fd6e0a1a36a30610b8186114b378c5b9d93cfd8a079fa281e847a99ddb->leave($__internal_dc0386fd6e0a1a36a30610b8186114b378c5b9d93cfd8a079fa281e847a99ddb_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
