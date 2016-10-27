<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_94193e6c731a781a29683b271d755603b629ccc6240324153cbc3ce6f5459540 extends Twig_Template
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
        $__internal_6ef8907fd0675c68298abea9c64545dc182a26d89f7ce20ca5a71d95affe4870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef8907fd0675c68298abea9c64545dc182a26d89f7ce20ca5a71d95affe4870->enter($__internal_6ef8907fd0675c68298abea9c64545dc182a26d89f7ce20ca5a71d95affe4870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));
=======
        $__internal_16efb0ad51f6f7b566d01b427ea3f07d05324674596c5842790b85f86789a10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16efb0ad51f6f7b566d01b427ea3f07d05324674596c5842790b85f86789a10d->enter($__internal_16efb0ad51f6f7b566d01b427ea3f07d05324674596c5842790b85f86789a10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));
>>>>>>> flo

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_6ef8907fd0675c68298abea9c64545dc182a26d89f7ce20ca5a71d95affe4870->leave($__internal_6ef8907fd0675c68298abea9c64545dc182a26d89f7ce20ca5a71d95affe4870_prof);
=======
        $__internal_16efb0ad51f6f7b566d01b427ea3f07d05324674596c5842790b85f86789a10d->leave($__internal_16efb0ad51f6f7b566d01b427ea3f07d05324674596c5842790b85f86789a10d_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
    }
}
