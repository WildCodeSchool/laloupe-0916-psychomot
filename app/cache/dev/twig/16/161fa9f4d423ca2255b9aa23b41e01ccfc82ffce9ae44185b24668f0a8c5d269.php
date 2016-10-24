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
        $__internal_c60a0a9a17229aefdf83062d34b0cbb246db2f0789a86ea6b0ea82a6c06a7b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60a0a9a17229aefdf83062d34b0cbb246db2f0789a86ea6b0ea82a6c06a7b53->enter($__internal_c60a0a9a17229aefdf83062d34b0cbb246db2f0789a86ea6b0ea82a6c06a7b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c60a0a9a17229aefdf83062d34b0cbb246db2f0789a86ea6b0ea82a6c06a7b53->leave($__internal_c60a0a9a17229aefdf83062d34b0cbb246db2f0789a86ea6b0ea82a6c06a7b53_prof);

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
