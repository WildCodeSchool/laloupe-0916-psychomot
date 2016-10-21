<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_be1c69a42cc9c6e9a98da46b2dbd43ada0128a69ddb522b3bb4dfe2c35d86693 extends Twig_Template
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
        $__internal_851c6b42df9a2316c4c199846760cff67e325c07647d346e45e701393fa8d901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851c6b42df9a2316c4c199846760cff67e325c07647d346e45e701393fa8d901->enter($__internal_851c6b42df9a2316c4c199846760cff67e325c07647d346e45e701393fa8d901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_851c6b42df9a2316c4c199846760cff67e325c07647d346e45e701393fa8d901->leave($__internal_851c6b42df9a2316c4c199846760cff67e325c07647d346e45e701393fa8d901_prof);

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
