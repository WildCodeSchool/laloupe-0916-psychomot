<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_805e7ce0c92761eb6aac7375459bf14c30ea46c9c4adba1c190ec526be68021a extends Twig_Template
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
        $__internal_133e636b849b8417c2bd985aebb15fc6e51cab843c17bff34f1564cdf4749f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133e636b849b8417c2bd985aebb15fc6e51cab843c17bff34f1564cdf4749f5c->enter($__internal_133e636b849b8417c2bd985aebb15fc6e51cab843c17bff34f1564cdf4749f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_133e636b849b8417c2bd985aebb15fc6e51cab843c17bff34f1564cdf4749f5c->leave($__internal_133e636b849b8417c2bd985aebb15fc6e51cab843c17bff34f1564cdf4749f5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
