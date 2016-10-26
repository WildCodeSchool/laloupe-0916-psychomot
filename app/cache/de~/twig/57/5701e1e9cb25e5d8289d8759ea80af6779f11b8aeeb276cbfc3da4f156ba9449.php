<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_72ced5ba8e772fdb9b3467eabd8fb57c2354bbfbdac1561918c3f4601fa2394b extends Twig_Template
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
        $__internal_222f1dda6730e92ea170ce78e624478a73144ed4c294e2ba1fb52578b949443c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222f1dda6730e92ea170ce78e624478a73144ed4c294e2ba1fb52578b949443c->enter($__internal_222f1dda6730e92ea170ce78e624478a73144ed4c294e2ba1fb52578b949443c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_222f1dda6730e92ea170ce78e624478a73144ed4c294e2ba1fb52578b949443c->leave($__internal_222f1dda6730e92ea170ce78e624478a73144ed4c294e2ba1fb52578b949443c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
    }
}
