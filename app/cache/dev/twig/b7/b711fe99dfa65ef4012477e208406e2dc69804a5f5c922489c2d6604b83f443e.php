<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_57356102fa71be1f51ea7b000d12aacd4cbcafe51c0f305e329cb1526c1fc068 extends Twig_Template
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
        $__internal_b38f6f4faecbd349eb3f856d42709bbb212a9ef395eb4c023df799f7286053a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38f6f4faecbd349eb3f856d42709bbb212a9ef395eb4c023df799f7286053a5->enter($__internal_b38f6f4faecbd349eb3f856d42709bbb212a9ef395eb4c023df799f7286053a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b38f6f4faecbd349eb3f856d42709bbb212a9ef395eb4c023df799f7286053a5->leave($__internal_b38f6f4faecbd349eb3f856d42709bbb212a9ef395eb4c023df799f7286053a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
