<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4c9ae3afad8e8a41b9902ec8276cd8fdc5001c44b0ae4d71154a66028044730d extends Twig_Template
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
        $__internal_1bb82a564998f9d145dd1e124bf879579043e212b8d149dd9904547adfa3980f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb82a564998f9d145dd1e124bf879579043e212b8d149dd9904547adfa3980f->enter($__internal_1bb82a564998f9d145dd1e124bf879579043e212b8d149dd9904547adfa3980f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1bb82a564998f9d145dd1e124bf879579043e212b8d149dd9904547adfa3980f->leave($__internal_1bb82a564998f9d145dd1e124bf879579043e212b8d149dd9904547adfa3980f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
