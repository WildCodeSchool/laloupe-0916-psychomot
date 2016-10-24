<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4fbd1bec92ba974ee2dc657a76cd2f8257f9fe66c26fdd0c35b4292c0804337d extends Twig_Template
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
        $__internal_c45dab362598b2e7820469d1fb49f0432c956624e8c5cac5bdfa645a5c87eab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45dab362598b2e7820469d1fb49f0432c956624e8c5cac5bdfa645a5c87eab0->enter($__internal_c45dab362598b2e7820469d1fb49f0432c956624e8c5cac5bdfa645a5c87eab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c45dab362598b2e7820469d1fb49f0432c956624e8c5cac5bdfa645a5c87eab0->leave($__internal_c45dab362598b2e7820469d1fb49f0432c956624e8c5cac5bdfa645a5c87eab0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
