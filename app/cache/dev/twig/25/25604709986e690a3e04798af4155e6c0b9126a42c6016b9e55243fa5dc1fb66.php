<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7fa929d0f78521d3d0a9ef42b7c63eb581915c8d4677c50a7620662bb65bf4ae extends Twig_Template
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
        $__internal_32aa0af675ac42e4615497d7cccb101bc14c5b4a617b903744730dbfb104559a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32aa0af675ac42e4615497d7cccb101bc14c5b4a617b903744730dbfb104559a->enter($__internal_32aa0af675ac42e4615497d7cccb101bc14c5b4a617b903744730dbfb104559a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_32aa0af675ac42e4615497d7cccb101bc14c5b4a617b903744730dbfb104559a->leave($__internal_32aa0af675ac42e4615497d7cccb101bc14c5b4a617b903744730dbfb104559a_prof);

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
