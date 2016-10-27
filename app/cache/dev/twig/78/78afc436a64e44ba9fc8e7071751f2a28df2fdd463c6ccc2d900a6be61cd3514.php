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
<<<<<<< HEAD
        $__internal_6a13b70512705f691d9f536b64c73e5bb060548079b78668b01d3add22e82c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a13b70512705f691d9f536b64c73e5bb060548079b78668b01d3add22e82c8c->enter($__internal_6a13b70512705f691d9f536b64c73e5bb060548079b78668b01d3add22e82c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a13b70512705f691d9f536b64c73e5bb060548079b78668b01d3add22e82c8c->leave($__internal_6a13b70512705f691d9f536b64c73e5bb060548079b78668b01d3add22e82c8c_prof);
=======
        $__internal_c777f5aa81dcaacb30f83c24215a2a8de80fd3d25a057fd02b3e5e81a10068fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c777f5aa81dcaacb30f83c24215a2a8de80fd3d25a057fd02b3e5e81a10068fb->enter($__internal_c777f5aa81dcaacb30f83c24215a2a8de80fd3d25a057fd02b3e5e81a10068fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c777f5aa81dcaacb30f83c24215a2a8de80fd3d25a057fd02b3e5e81a10068fb->leave($__internal_c777f5aa81dcaacb30f83c24215a2a8de80fd3d25a057fd02b3e5e81a10068fb_prof);
>>>>>>> flo

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f1e08ab2509dc2424d9fcbd4a4a6ad904be6d7ce58a9c286c256f7266feb73ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e08ab2509dc2424d9fcbd4a4a6ad904be6d7ce58a9c286c256f7266feb73ab->enter($__internal_f1e08ab2509dc2424d9fcbd4a4a6ad904be6d7ce58a9c286c256f7266feb73ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f1e08ab2509dc2424d9fcbd4a4a6ad904be6d7ce58a9c286c256f7266feb73ab->leave($__internal_f1e08ab2509dc2424d9fcbd4a4a6ad904be6d7ce58a9c286c256f7266feb73ab_prof);
=======
        $__internal_ad190e3e9c8fb8e0aa76bc4b4e7ef500a96e359a75ed728c6128c801d45e8eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad190e3e9c8fb8e0aa76bc4b4e7ef500a96e359a75ed728c6128c801d45e8eab->enter($__internal_ad190e3e9c8fb8e0aa76bc4b4e7ef500a96e359a75ed728c6128c801d45e8eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad190e3e9c8fb8e0aa76bc4b4e7ef500a96e359a75ed728c6128c801d45e8eab->leave($__internal_ad190e3e9c8fb8e0aa76bc4b4e7ef500a96e359a75ed728c6128c801d45e8eab_prof);
>>>>>>> flo

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_cb1af0b1262f56fa86dd23b89da5ee547adfec30977301c64a2cb1ec2433a971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1af0b1262f56fa86dd23b89da5ee547adfec30977301c64a2cb1ec2433a971->enter($__internal_cb1af0b1262f56fa86dd23b89da5ee547adfec30977301c64a2cb1ec2433a971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
=======
        $__internal_87c060f6ccc4f03d83c47c5a3d24bff2a3685f8f036a6507acf6844767c3b1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c060f6ccc4f03d83c47c5a3d24bff2a3685f8f036a6507acf6844767c3b1ed->enter($__internal_87c060f6ccc4f03d83c47c5a3d24bff2a3685f8f036a6507acf6844767c3b1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
>>>>>>> flo

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
<<<<<<< HEAD
        $__internal_cb1af0b1262f56fa86dd23b89da5ee547adfec30977301c64a2cb1ec2433a971->leave($__internal_cb1af0b1262f56fa86dd23b89da5ee547adfec30977301c64a2cb1ec2433a971_prof);
=======
        $__internal_87c060f6ccc4f03d83c47c5a3d24bff2a3685f8f036a6507acf6844767c3b1ed->leave($__internal_87c060f6ccc4f03d83c47c5a3d24bff2a3685f8f036a6507acf6844767c3b1ed_prof);
>>>>>>> flo

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_76a8e97400f413482eb32945e2ad054c30ccdbecd283bb760c878fa8ec152cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a8e97400f413482eb32945e2ad054c30ccdbecd283bb760c878fa8ec152cca->enter($__internal_76a8e97400f413482eb32945e2ad054c30ccdbecd283bb760c878fa8ec152cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
=======
        $__internal_d876430718190d81bf60a6def1f89aba689e20b24911170240337b2e1dcf209a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d876430718190d81bf60a6def1f89aba689e20b24911170240337b2e1dcf209a->enter($__internal_d876430718190d81bf60a6def1f89aba689e20b24911170240337b2e1dcf209a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
>>>>>>> flo

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
<<<<<<< HEAD
        $__internal_76a8e97400f413482eb32945e2ad054c30ccdbecd283bb760c878fa8ec152cca->leave($__internal_76a8e97400f413482eb32945e2ad054c30ccdbecd283bb760c878fa8ec152cca_prof);
=======
        $__internal_d876430718190d81bf60a6def1f89aba689e20b24911170240337b2e1dcf209a->leave($__internal_d876430718190d81bf60a6def1f89aba689e20b24911170240337b2e1dcf209a_prof);
>>>>>>> flo

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
