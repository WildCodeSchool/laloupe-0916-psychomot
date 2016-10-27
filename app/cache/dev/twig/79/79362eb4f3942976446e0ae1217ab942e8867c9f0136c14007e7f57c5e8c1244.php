<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e1b1dd78b4bee36a4307d3c0b6ac3c3a510408d59dfba872cc286bb5fb00427f extends Twig_Template
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
        $__internal_4a2db51c951638072bb1cc8d1ea7eac8523ac7cb2532a66a6557761d12842fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2db51c951638072bb1cc8d1ea7eac8523ac7cb2532a66a6557761d12842fcb->enter($__internal_4a2db51c951638072bb1cc8d1ea7eac8523ac7cb2532a66a6557761d12842fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4a2db51c951638072bb1cc8d1ea7eac8523ac7cb2532a66a6557761d12842fcb->leave($__internal_4a2db51c951638072bb1cc8d1ea7eac8523ac7cb2532a66a6557761d12842fcb_prof);

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
