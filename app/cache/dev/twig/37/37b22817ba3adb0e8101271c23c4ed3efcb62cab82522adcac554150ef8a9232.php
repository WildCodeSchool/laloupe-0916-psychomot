<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1901a1224ad6b2fc7ad6d96bdc8a6105cb2f6dd6970fb2235cf0389892c6298c extends Twig_Template
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
        $__internal_1f988a5469538ab2d873ae1ad04ebf9169deab7f4d336cb6684950f494b2b0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f988a5469538ab2d873ae1ad04ebf9169deab7f4d336cb6684950f494b2b0a0->enter($__internal_1f988a5469538ab2d873ae1ad04ebf9169deab7f4d336cb6684950f494b2b0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1f988a5469538ab2d873ae1ad04ebf9169deab7f4d336cb6684950f494b2b0a0->leave($__internal_1f988a5469538ab2d873ae1ad04ebf9169deab7f4d336cb6684950f494b2b0a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
