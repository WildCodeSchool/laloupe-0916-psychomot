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
        $__internal_6fe33c56901ae149ba743f4fb5ea79b0489771590b53a922037ea43b65e89260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe33c56901ae149ba743f4fb5ea79b0489771590b53a922037ea43b65e89260->enter($__internal_6fe33c56901ae149ba743f4fb5ea79b0489771590b53a922037ea43b65e89260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6fe33c56901ae149ba743f4fb5ea79b0489771590b53a922037ea43b65e89260->leave($__internal_6fe33c56901ae149ba743f4fb5ea79b0489771590b53a922037ea43b65e89260_prof);

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
