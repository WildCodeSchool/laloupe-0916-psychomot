<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_b5c1f47cfd0409d862f00ba053ae3487f76a1357d40029777176dbdcacd3c114 extends Twig_Template
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
        $__internal_5a1d1d3596f9c85de3b490876e87c15a9fd80621ac35b84a73814417ea57369b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1d1d3596f9c85de3b490876e87c15a9fd80621ac35b84a73814417ea57369b->enter($__internal_5a1d1d3596f9c85de3b490876e87c15a9fd80621ac35b84a73814417ea57369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_5a1d1d3596f9c85de3b490876e87c15a9fd80621ac35b84a73814417ea57369b->leave($__internal_5a1d1d3596f9c85de3b490876e87c15a9fd80621ac35b84a73814417ea57369b_prof);

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
