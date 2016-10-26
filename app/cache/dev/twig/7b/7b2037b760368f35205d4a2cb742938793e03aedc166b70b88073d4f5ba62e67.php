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
        $__internal_d6395c0ea5f7fdb39e1bcd3b658c6f8e5432a38fed3e2b0c99b54d9a2f204253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6395c0ea5f7fdb39e1bcd3b658c6f8e5432a38fed3e2b0c99b54d9a2f204253->enter($__internal_d6395c0ea5f7fdb39e1bcd3b658c6f8e5432a38fed3e2b0c99b54d9a2f204253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d6395c0ea5f7fdb39e1bcd3b658c6f8e5432a38fed3e2b0c99b54d9a2f204253->leave($__internal_d6395c0ea5f7fdb39e1bcd3b658c6f8e5432a38fed3e2b0c99b54d9a2f204253_prof);

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
