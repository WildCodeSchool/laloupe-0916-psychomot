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
        $__internal_ba85ea326abc84fe4d573c6264c205eb6935d272cac7c96b1a4ab2665e26e1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba85ea326abc84fe4d573c6264c205eb6935d272cac7c96b1a4ab2665e26e1e7->enter($__internal_ba85ea326abc84fe4d573c6264c205eb6935d272cac7c96b1a4ab2665e26e1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ba85ea326abc84fe4d573c6264c205eb6935d272cac7c96b1a4ab2665e26e1e7->leave($__internal_ba85ea326abc84fe4d573c6264c205eb6935d272cac7c96b1a4ab2665e26e1e7_prof);

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
