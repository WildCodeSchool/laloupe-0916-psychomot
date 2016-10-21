<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f8e5c3e440eab87d2e771c96ddf62f089a8c8c1b0ecf88945daaf623e06551be extends Twig_Template
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
        $__internal_47855e0a7616b0ad06caac38eb44e5195635f5400d6f1e196c0af3f115bca73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47855e0a7616b0ad06caac38eb44e5195635f5400d6f1e196c0af3f115bca73e->enter($__internal_47855e0a7616b0ad06caac38eb44e5195635f5400d6f1e196c0af3f115bca73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_47855e0a7616b0ad06caac38eb44e5195635f5400d6f1e196c0af3f115bca73e->leave($__internal_47855e0a7616b0ad06caac38eb44e5195635f5400d6f1e196c0af3f115bca73e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
