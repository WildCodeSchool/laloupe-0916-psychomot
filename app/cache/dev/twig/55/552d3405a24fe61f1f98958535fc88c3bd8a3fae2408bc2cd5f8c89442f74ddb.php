<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_bad470e8dff08ea788eff752c878a1a23b5d108eabbe1a0efad3f1a1991531a2 extends Twig_Template
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
        $__internal_ef795f067946b764565a19ef9363cddbe57ffb8a9b8ca07e3269e0a59cb1f49b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef795f067946b764565a19ef9363cddbe57ffb8a9b8ca07e3269e0a59cb1f49b->enter($__internal_ef795f067946b764565a19ef9363cddbe57ffb8a9b8ca07e3269e0a59cb1f49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));
=======
        $__internal_9685e461ec460b26be8504a70ab062b6644ae96f24164a7001a8a4f7fece8e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9685e461ec460b26be8504a70ab062b6644ae96f24164a7001a8a4f7fece8e8d->enter($__internal_9685e461ec460b26be8504a70ab062b6644ae96f24164a7001a8a4f7fece8e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));
>>>>>>> flo

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
<<<<<<< HEAD
        $__internal_ef795f067946b764565a19ef9363cddbe57ffb8a9b8ca07e3269e0a59cb1f49b->leave($__internal_ef795f067946b764565a19ef9363cddbe57ffb8a9b8ca07e3269e0a59cb1f49b_prof);
=======
        $__internal_9685e461ec460b26be8504a70ab062b6644ae96f24164a7001a8a4f7fece8e8d->leave($__internal_9685e461ec460b26be8504a70ab062b6644ae96f24164a7001a8a4f7fece8e8d_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
    }
}
