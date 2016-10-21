<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5bd13f8d939813845f499dc19f0c19dbc5094bf921576e0b5be5da1937febbd9 extends Twig_Template
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
        $__internal_ad6e75546005c1c0614fe1bc8be67c7fa49ddd9d39593e8632a74e4320dc3b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6e75546005c1c0614fe1bc8be67c7fa49ddd9d39593e8632a74e4320dc3b66->enter($__internal_ad6e75546005c1c0614fe1bc8be67c7fa49ddd9d39593e8632a74e4320dc3b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_ad6e75546005c1c0614fe1bc8be67c7fa49ddd9d39593e8632a74e4320dc3b66->leave($__internal_ad6e75546005c1c0614fe1bc8be67c7fa49ddd9d39593e8632a74e4320dc3b66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
