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
        $__internal_bc6feedb740c3230769b588f25b309b63cf40d51f1f0a1910f4571cab2ae949f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6feedb740c3230769b588f25b309b63cf40d51f1f0a1910f4571cab2ae949f->enter($__internal_bc6feedb740c3230769b588f25b309b63cf40d51f1f0a1910f4571cab2ae949f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bc6feedb740c3230769b588f25b309b63cf40d51f1f0a1910f4571cab2ae949f->leave($__internal_bc6feedb740c3230769b588f25b309b63cf40d51f1f0a1910f4571cab2ae949f_prof);

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
