<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a9d7fbb6193aa9cd195d98e3306a0408ecccbcdec9db6201189e950fd07fd107 extends Twig_Template
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
        $__internal_e6b13318860da9958b14d888960631b5ec670bf14a18af8aef0292f5cbee4060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b13318860da9958b14d888960631b5ec670bf14a18af8aef0292f5cbee4060->enter($__internal_e6b13318860da9958b14d888960631b5ec670bf14a18af8aef0292f5cbee4060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e6b13318860da9958b14d888960631b5ec670bf14a18af8aef0292f5cbee4060->leave($__internal_e6b13318860da9958b14d888960631b5ec670bf14a18af8aef0292f5cbee4060_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
