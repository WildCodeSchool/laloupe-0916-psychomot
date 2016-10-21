<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_48e9ece7855d55e23c414df44afe2e2ae0918d8b8cbd58d15b3008cc2a19808e extends Twig_Template
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
        $__internal_7e38be3adb2e7402e2eaef10b168ea97525063df6e75cc996075909da3a9ae13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e38be3adb2e7402e2eaef10b168ea97525063df6e75cc996075909da3a9ae13->enter($__internal_7e38be3adb2e7402e2eaef10b168ea97525063df6e75cc996075909da3a9ae13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7e38be3adb2e7402e2eaef10b168ea97525063df6e75cc996075909da3a9ae13->leave($__internal_7e38be3adb2e7402e2eaef10b168ea97525063df6e75cc996075909da3a9ae13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
