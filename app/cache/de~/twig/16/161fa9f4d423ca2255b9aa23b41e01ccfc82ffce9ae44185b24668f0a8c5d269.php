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
        $__internal_5f1e3d1b8a33f1317cf5e61d3ba38740a080249d2cbebaa86553e126214dd2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1e3d1b8a33f1317cf5e61d3ba38740a080249d2cbebaa86553e126214dd2a5->enter($__internal_5f1e3d1b8a33f1317cf5e61d3ba38740a080249d2cbebaa86553e126214dd2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5f1e3d1b8a33f1317cf5e61d3ba38740a080249d2cbebaa86553e126214dd2a5->leave($__internal_5f1e3d1b8a33f1317cf5e61d3ba38740a080249d2cbebaa86553e126214dd2a5_prof);

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
