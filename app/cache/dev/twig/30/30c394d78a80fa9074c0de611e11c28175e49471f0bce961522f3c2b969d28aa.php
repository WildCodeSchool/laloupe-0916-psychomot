<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_997e0d8c9de991251948f3831ffdecd5c21d71b48a7ad049153d1d6595611e2b extends Twig_Template
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
        $__internal_b4cdccbfa78d80adbba717c52e8c6045e6cce4b48d689726ccdc3adbcb882958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cdccbfa78d80adbba717c52e8c6045e6cce4b48d689726ccdc3adbcb882958->enter($__internal_b4cdccbfa78d80adbba717c52e8c6045e6cce4b48d689726ccdc3adbcb882958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_b4cdccbfa78d80adbba717c52e8c6045e6cce4b48d689726ccdc3adbcb882958->leave($__internal_b4cdccbfa78d80adbba717c52e8c6045e6cce4b48d689726ccdc3adbcb882958_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
