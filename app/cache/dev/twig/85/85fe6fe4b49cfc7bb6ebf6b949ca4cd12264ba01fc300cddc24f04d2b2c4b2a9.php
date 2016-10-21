<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9f3217119adc3eae3f320fc773c772d41025937e147ab9e68180a6d1e46016ce extends Twig_Template
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
        $__internal_dd4e2ae732630aa1df0090b38de54fc82f2701beb5b5b5fc0087b23a52f16c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4e2ae732630aa1df0090b38de54fc82f2701beb5b5b5fc0087b23a52f16c5b->enter($__internal_dd4e2ae732630aa1df0090b38de54fc82f2701beb5b5b5fc0087b23a52f16c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_dd4e2ae732630aa1df0090b38de54fc82f2701beb5b5b5fc0087b23a52f16c5b->leave($__internal_dd4e2ae732630aa1df0090b38de54fc82f2701beb5b5b5fc0087b23a52f16c5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
