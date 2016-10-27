<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a6b64a53a30742083e0b16bed0ef9b0f87283bde88836578e74d7e39f3b1d50e extends Twig_Template
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
<<<<<<< HEAD
        $__internal_2090b59e6fd4f3ffe7ba338b9ee527c5328dea8a8c1891c80f2293b6ee489c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2090b59e6fd4f3ffe7ba338b9ee527c5328dea8a8c1891c80f2293b6ee489c3d->enter($__internal_2090b59e6fd4f3ffe7ba338b9ee527c5328dea8a8c1891c80f2293b6ee489c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));
=======
        $__internal_5935c313383272cc6d4e7dc4e230ddbcdb320d01a4656f17556cf79fa5c35943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5935c313383272cc6d4e7dc4e230ddbcdb320d01a4656f17556cf79fa5c35943->enter($__internal_5935c313383272cc6d4e7dc4e230ddbcdb320d01a4656f17556cf79fa5c35943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));
>>>>>>> flo

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
<<<<<<< HEAD
        $__internal_2090b59e6fd4f3ffe7ba338b9ee527c5328dea8a8c1891c80f2293b6ee489c3d->leave($__internal_2090b59e6fd4f3ffe7ba338b9ee527c5328dea8a8c1891c80f2293b6ee489c3d_prof);
=======
        $__internal_5935c313383272cc6d4e7dc4e230ddbcdb320d01a4656f17556cf79fa5c35943->leave($__internal_5935c313383272cc6d4e7dc4e230ddbcdb320d01a4656f17556cf79fa5c35943_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
