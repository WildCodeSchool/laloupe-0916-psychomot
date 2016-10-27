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
        $__internal_146bf25e07897393033eafd40d2a2b308e82fbfcffffef943969b0e20fb370a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146bf25e07897393033eafd40d2a2b308e82fbfcffffef943969b0e20fb370a5->enter($__internal_146bf25e07897393033eafd40d2a2b308e82fbfcffffef943969b0e20fb370a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_146bf25e07897393033eafd40d2a2b308e82fbfcffffef943969b0e20fb370a5->leave($__internal_146bf25e07897393033eafd40d2a2b308e82fbfcffffef943969b0e20fb370a5_prof);

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
