<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b9a8b3aae96006795a8f9657a7be7beccb63a9763f30729d3fb478441084bfb4 extends Twig_Template
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
        $__internal_b956609be3b631ec23a98b258d58faf86fceadf2258f229fa74af6b282bb38fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b956609be3b631ec23a98b258d58faf86fceadf2258f229fa74af6b282bb38fe->enter($__internal_b956609be3b631ec23a98b258d58faf86fceadf2258f229fa74af6b282bb38fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b956609be3b631ec23a98b258d58faf86fceadf2258f229fa74af6b282bb38fe->leave($__internal_b956609be3b631ec23a98b258d58faf86fceadf2258f229fa74af6b282bb38fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
