<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_06f317cedc812a292eb54544487c39f2a96df7bac800f17d7263c59a268d13e5 extends Twig_Template
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
        $__internal_60f2b30912b8fc981907784f7ecb20a3a55349a92fc41e2f399c960a5df4cd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f2b30912b8fc981907784f7ecb20a3a55349a92fc41e2f399c960a5df4cd33->enter($__internal_60f2b30912b8fc981907784f7ecb20a3a55349a92fc41e2f399c960a5df4cd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_60f2b30912b8fc981907784f7ecb20a3a55349a92fc41e2f399c960a5df4cd33->leave($__internal_60f2b30912b8fc981907784f7ecb20a3a55349a92fc41e2f399c960a5df4cd33_prof);

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
