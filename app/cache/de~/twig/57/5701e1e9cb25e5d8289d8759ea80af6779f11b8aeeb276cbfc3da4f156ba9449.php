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
        $__internal_61806d810beedc6b0a3903c24e1eff5538469de23fb29f77a3d9d92a786577e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61806d810beedc6b0a3903c24e1eff5538469de23fb29f77a3d9d92a786577e3->enter($__internal_61806d810beedc6b0a3903c24e1eff5538469de23fb29f77a3d9d92a786577e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_61806d810beedc6b0a3903c24e1eff5538469de23fb29f77a3d9d92a786577e3->leave($__internal_61806d810beedc6b0a3903c24e1eff5538469de23fb29f77a3d9d92a786577e3_prof);

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
