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
        $__internal_b64ed16bce1094a06d0a7efaab6f1151ae2c3a6587877e8b98e6a9199b0adbb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64ed16bce1094a06d0a7efaab6f1151ae2c3a6587877e8b98e6a9199b0adbb5->enter($__internal_b64ed16bce1094a06d0a7efaab6f1151ae2c3a6587877e8b98e6a9199b0adbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b64ed16bce1094a06d0a7efaab6f1151ae2c3a6587877e8b98e6a9199b0adbb5->leave($__internal_b64ed16bce1094a06d0a7efaab6f1151ae2c3a6587877e8b98e6a9199b0adbb5_prof);

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
