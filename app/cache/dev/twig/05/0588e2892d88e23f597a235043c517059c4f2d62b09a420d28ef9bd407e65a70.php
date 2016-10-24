<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_80e1685e690a657ead2e87e1f8fccfa1a3cbedcc3d55173e8efa1bc20dee8287 extends Twig_Template
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
        $__internal_f5eba32e327f91e5dfa91e3c2ffda455f638f05cb365df3aa13e4686c1fd0f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5eba32e327f91e5dfa91e3c2ffda455f638f05cb365df3aa13e4686c1fd0f09->enter($__internal_f5eba32e327f91e5dfa91e3c2ffda455f638f05cb365df3aa13e4686c1fd0f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f5eba32e327f91e5dfa91e3c2ffda455f638f05cb365df3aa13e4686c1fd0f09->leave($__internal_f5eba32e327f91e5dfa91e3c2ffda455f638f05cb365df3aa13e4686c1fd0f09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
