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
        $__internal_4ad952588aaa7e251fbfebdeb75ba8a8aab6a1e2907d6a5474862b429195f871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad952588aaa7e251fbfebdeb75ba8a8aab6a1e2907d6a5474862b429195f871->enter($__internal_4ad952588aaa7e251fbfebdeb75ba8a8aab6a1e2907d6a5474862b429195f871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4ad952588aaa7e251fbfebdeb75ba8a8aab6a1e2907d6a5474862b429195f871->leave($__internal_4ad952588aaa7e251fbfebdeb75ba8a8aab6a1e2907d6a5474862b429195f871_prof);

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
