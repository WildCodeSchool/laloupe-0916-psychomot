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
        $__internal_1989a6bbfc53ab3442a61164d4a1f137baf5183058dbd69b8a50baeb63eb22dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1989a6bbfc53ab3442a61164d4a1f137baf5183058dbd69b8a50baeb63eb22dc->enter($__internal_1989a6bbfc53ab3442a61164d4a1f137baf5183058dbd69b8a50baeb63eb22dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1989a6bbfc53ab3442a61164d4a1f137baf5183058dbd69b8a50baeb63eb22dc->leave($__internal_1989a6bbfc53ab3442a61164d4a1f137baf5183058dbd69b8a50baeb63eb22dc_prof);

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
