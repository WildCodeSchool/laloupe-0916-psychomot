<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_57356102fa71be1f51ea7b000d12aacd4cbcafe51c0f305e329cb1526c1fc068 extends Twig_Template
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
        $__internal_eea693133b9b4e17a2534de058b2b0ab1a2de26c73567e0cb896ce6dfb0370f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea693133b9b4e17a2534de058b2b0ab1a2de26c73567e0cb896ce6dfb0370f2->enter($__internal_eea693133b9b4e17a2534de058b2b0ab1a2de26c73567e0cb896ce6dfb0370f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_eea693133b9b4e17a2534de058b2b0ab1a2de26c73567e0cb896ce6dfb0370f2->leave($__internal_eea693133b9b4e17a2534de058b2b0ab1a2de26c73567e0cb896ce6dfb0370f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
