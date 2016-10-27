<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a8905e4b62580e18419d6771bd38a50546ef0a2723db3dc0af44ff3867795d15 extends Twig_Template
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
        $__internal_613d6735d81b9790c1ac8ad073da8405f574f89a863a33259c3d7267dab20118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613d6735d81b9790c1ac8ad073da8405f574f89a863a33259c3d7267dab20118->enter($__internal_613d6735d81b9790c1ac8ad073da8405f574f89a863a33259c3d7267dab20118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_613d6735d81b9790c1ac8ad073da8405f574f89a863a33259c3d7267dab20118->leave($__internal_613d6735d81b9790c1ac8ad073da8405f574f89a863a33259c3d7267dab20118_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
