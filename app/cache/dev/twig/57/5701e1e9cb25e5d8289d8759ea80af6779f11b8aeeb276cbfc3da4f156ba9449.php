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
        $__internal_7d495fd1d8555c2b865355f492a236b583b96717748df6b3ae336b4076903814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d495fd1d8555c2b865355f492a236b583b96717748df6b3ae336b4076903814->enter($__internal_7d495fd1d8555c2b865355f492a236b583b96717748df6b3ae336b4076903814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7d495fd1d8555c2b865355f492a236b583b96717748df6b3ae336b4076903814->leave($__internal_7d495fd1d8555c2b865355f492a236b583b96717748df6b3ae336b4076903814_prof);

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
