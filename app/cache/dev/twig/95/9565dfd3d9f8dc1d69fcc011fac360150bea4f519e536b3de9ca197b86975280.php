<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d136d03d9b5b99f2311de77a56b7f61f64fb8bbe4091c4be65080bc17c9adee2 extends Twig_Template
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
        $__internal_2a964fb2da18b5aeef4a9b6d08e98caf627398c5af8a38dd6bcdb6337a6399d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a964fb2da18b5aeef4a9b6d08e98caf627398c5af8a38dd6bcdb6337a6399d5->enter($__internal_2a964fb2da18b5aeef4a9b6d08e98caf627398c5af8a38dd6bcdb6337a6399d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2a964fb2da18b5aeef4a9b6d08e98caf627398c5af8a38dd6bcdb6337a6399d5->leave($__internal_2a964fb2da18b5aeef4a9b6d08e98caf627398c5af8a38dd6bcdb6337a6399d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
