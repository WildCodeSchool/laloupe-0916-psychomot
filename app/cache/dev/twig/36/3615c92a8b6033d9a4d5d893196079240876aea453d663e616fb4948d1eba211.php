<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_d6a6ad58ac10e7081372f0f65a3e2fb80116cd9b5f3f936e639095691b8f6a69 extends Twig_Template
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
        $__internal_f3fba613ad59e4a376b0d8cdd63ea007db30ca8d237e1852dbb735b9f9b949b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fba613ad59e4a376b0d8cdd63ea007db30ca8d237e1852dbb735b9f9b949b3->enter($__internal_f3fba613ad59e4a376b0d8cdd63ea007db30ca8d237e1852dbb735b9f9b949b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f3fba613ad59e4a376b0d8cdd63ea007db30ca8d237e1852dbb735b9f9b949b3->leave($__internal_f3fba613ad59e4a376b0d8cdd63ea007db30ca8d237e1852dbb735b9f9b949b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
