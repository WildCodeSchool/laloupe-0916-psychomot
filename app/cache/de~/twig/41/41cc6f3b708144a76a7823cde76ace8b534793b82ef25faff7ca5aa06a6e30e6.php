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
        $__internal_aa868e475061dbef717d7754a8ba720228150b91789c164330be0524d37ddc63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa868e475061dbef717d7754a8ba720228150b91789c164330be0524d37ddc63->enter($__internal_aa868e475061dbef717d7754a8ba720228150b91789c164330be0524d37ddc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_aa868e475061dbef717d7754a8ba720228150b91789c164330be0524d37ddc63->leave($__internal_aa868e475061dbef717d7754a8ba720228150b91789c164330be0524d37ddc63_prof);

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
