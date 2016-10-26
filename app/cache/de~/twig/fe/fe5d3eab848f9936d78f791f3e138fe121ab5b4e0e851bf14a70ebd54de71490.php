<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ee80818f1ee7b90a61351e59e2de47346231c489806d014030b99535de15853f extends Twig_Template
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
        $__internal_ee8dfc9bf9e3a09dae48cef04186886c95163b2f8b96e947e3026a4921fdde9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8dfc9bf9e3a09dae48cef04186886c95163b2f8b96e947e3026a4921fdde9e->enter($__internal_ee8dfc9bf9e3a09dae48cef04186886c95163b2f8b96e947e3026a4921fdde9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ee8dfc9bf9e3a09dae48cef04186886c95163b2f8b96e947e3026a4921fdde9e->leave($__internal_ee8dfc9bf9e3a09dae48cef04186886c95163b2f8b96e947e3026a4921fdde9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
