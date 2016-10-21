<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_90f58f50fa40bf910a756d3ea86f70c00a84730967eda691193d6f4a90a92818 extends Twig_Template
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
        $__internal_572bdd3b0a7db211947fac085770ede4f3d61a178e50bca8ccc06ca52d6bf79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572bdd3b0a7db211947fac085770ede4f3d61a178e50bca8ccc06ca52d6bf79f->enter($__internal_572bdd3b0a7db211947fac085770ede4f3d61a178e50bca8ccc06ca52d6bf79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_572bdd3b0a7db211947fac085770ede4f3d61a178e50bca8ccc06ca52d6bf79f->leave($__internal_572bdd3b0a7db211947fac085770ede4f3d61a178e50bca8ccc06ca52d6bf79f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
