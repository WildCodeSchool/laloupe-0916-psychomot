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
        $__internal_c030d1fca4a3cdc3e27aabc4f8211cb657ce050e5c98bfa2858f4e67e4615520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c030d1fca4a3cdc3e27aabc4f8211cb657ce050e5c98bfa2858f4e67e4615520->enter($__internal_c030d1fca4a3cdc3e27aabc4f8211cb657ce050e5c98bfa2858f4e67e4615520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c030d1fca4a3cdc3e27aabc4f8211cb657ce050e5c98bfa2858f4e67e4615520->leave($__internal_c030d1fca4a3cdc3e27aabc4f8211cb657ce050e5c98bfa2858f4e67e4615520_prof);

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
