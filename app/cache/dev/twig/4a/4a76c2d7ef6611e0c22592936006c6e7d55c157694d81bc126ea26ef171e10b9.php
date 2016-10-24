<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_854a4a797c35e7acee38c08079e9753be8837861e8af1e7d405013151befb359 extends Twig_Template
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
        $__internal_89899fe67aa12705ff49e9fc02365321499532984c27c26bf06ae830204859dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89899fe67aa12705ff49e9fc02365321499532984c27c26bf06ae830204859dd->enter($__internal_89899fe67aa12705ff49e9fc02365321499532984c27c26bf06ae830204859dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_89899fe67aa12705ff49e9fc02365321499532984c27c26bf06ae830204859dd->leave($__internal_89899fe67aa12705ff49e9fc02365321499532984c27c26bf06ae830204859dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->widget(\$form) ?>
";
    }
}
