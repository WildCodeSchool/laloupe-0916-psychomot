<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f0e008b79c2cec319a698160efecc1299674c7cdbaddf8dcb26fb4828dace8c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6af676e86f7e8ec300d4d756aefb62706dd853a35e24228d78972e976a5ae6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af676e86f7e8ec300d4d756aefb62706dd853a35e24228d78972e976a5ae6ec->enter($__internal_6af676e86f7e8ec300d4d756aefb62706dd853a35e24228d78972e976a5ae6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6af676e86f7e8ec300d4d756aefb62706dd853a35e24228d78972e976a5ae6ec->leave($__internal_6af676e86f7e8ec300d4d756aefb62706dd853a35e24228d78972e976a5ae6ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca0d2cc07af57c8245299f6d527bed134151889df0545e1af7690f5dc1ddc3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0d2cc07af57c8245299f6d527bed134151889df0545e1af7690f5dc1ddc3cf->enter($__internal_ca0d2cc07af57c8245299f6d527bed134151889df0545e1af7690f5dc1ddc3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ca0d2cc07af57c8245299f6d527bed134151889df0545e1af7690f5dc1ddc3cf->leave($__internal_ca0d2cc07af57c8245299f6d527bed134151889df0545e1af7690f5dc1ddc3cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d54ba435f8edc9e864ff798c8a5a8d19bb81b5ca62be4bc3d07b43dfaedc8208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54ba435f8edc9e864ff798c8a5a8d19bb81b5ca62be4bc3d07b43dfaedc8208->enter($__internal_d54ba435f8edc9e864ff798c8a5a8d19bb81b5ca62be4bc3d07b43dfaedc8208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d54ba435f8edc9e864ff798c8a5a8d19bb81b5ca62be4bc3d07b43dfaedc8208->leave($__internal_d54ba435f8edc9e864ff798c8a5a8d19bb81b5ca62be4bc3d07b43dfaedc8208_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d30a89ffa26dbecd704db8f1897475e2be02a232cfe715e23c54cb3e61735733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30a89ffa26dbecd704db8f1897475e2be02a232cfe715e23c54cb3e61735733->enter($__internal_d30a89ffa26dbecd704db8f1897475e2be02a232cfe715e23c54cb3e61735733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d30a89ffa26dbecd704db8f1897475e2be02a232cfe715e23c54cb3e61735733->leave($__internal_d30a89ffa26dbecd704db8f1897475e2be02a232cfe715e23c54cb3e61735733_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
