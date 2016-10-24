<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a8905e4b62580e18419d6771bd38a50546ef0a2723db3dc0af44ff3867795d15 extends Twig_Template
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
        $__internal_6959be4381b174f806d519014e64c8bef00013e5a1a3774c5326be78a761533d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6959be4381b174f806d519014e64c8bef00013e5a1a3774c5326be78a761533d->enter($__internal_6959be4381b174f806d519014e64c8bef00013e5a1a3774c5326be78a761533d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6959be4381b174f806d519014e64c8bef00013e5a1a3774c5326be78a761533d->leave($__internal_6959be4381b174f806d519014e64c8bef00013e5a1a3774c5326be78a761533d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
