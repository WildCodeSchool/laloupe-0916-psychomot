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
        $__internal_8b16937f2b739d264368b302e527c2def91c092c18bf1290ddd0b25c40c81753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b16937f2b739d264368b302e527c2def91c092c18bf1290ddd0b25c40c81753->enter($__internal_8b16937f2b739d264368b302e527c2def91c092c18bf1290ddd0b25c40c81753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8b16937f2b739d264368b302e527c2def91c092c18bf1290ddd0b25c40c81753->leave($__internal_8b16937f2b739d264368b302e527c2def91c092c18bf1290ddd0b25c40c81753_prof);

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
