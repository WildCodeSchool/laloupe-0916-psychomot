<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_f7264f333bdf2e6cec535ad2a5184e2bc02901f2831c17898e55e8686c0a5b2b extends Twig_Template
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
        $__internal_c7e0d3f978557c15831d2d95d068c149da44ebd7fc93bfa539dc0649add8234f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e0d3f978557c15831d2d95d068c149da44ebd7fc93bfa539dc0649add8234f->enter($__internal_c7e0d3f978557c15831d2d95d068c149da44ebd7fc93bfa539dc0649add8234f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c7e0d3f978557c15831d2d95d068c149da44ebd7fc93bfa539dc0649add8234f->leave($__internal_c7e0d3f978557c15831d2d95d068c149da44ebd7fc93bfa539dc0649add8234f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
