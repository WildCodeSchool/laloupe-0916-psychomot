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
        $__internal_ac25559927c231d374ee347b2bcaa3549b6179da5ac26d694e20a5b1c1effea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac25559927c231d374ee347b2bcaa3549b6179da5ac26d694e20a5b1c1effea7->enter($__internal_ac25559927c231d374ee347b2bcaa3549b6179da5ac26d694e20a5b1c1effea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ac25559927c231d374ee347b2bcaa3549b6179da5ac26d694e20a5b1c1effea7->leave($__internal_ac25559927c231d374ee347b2bcaa3549b6179da5ac26d694e20a5b1c1effea7_prof);

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
