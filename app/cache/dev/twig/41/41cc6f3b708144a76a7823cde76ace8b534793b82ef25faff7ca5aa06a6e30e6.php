<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_87937b583a489c21aacf214af2d2054d0f2ce50f53a27ca4cd627014abb41fa4 extends Twig_Template
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
        $__internal_e2464cd7a1b1549818fffd8e298ab23ea0f743c92ffd09fd44e4f0f5ac947187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2464cd7a1b1549818fffd8e298ab23ea0f743c92ffd09fd44e4f0f5ac947187->enter($__internal_e2464cd7a1b1549818fffd8e298ab23ea0f743c92ffd09fd44e4f0f5ac947187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e2464cd7a1b1549818fffd8e298ab23ea0f743c92ffd09fd44e4f0f5ac947187->leave($__internal_e2464cd7a1b1549818fffd8e298ab23ea0f743c92ffd09fd44e4f0f5ac947187_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
