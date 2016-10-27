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
        $__internal_365b098f47e457ffd9f77af07c6210bcf75884a0b3a61aeaf3b6b8cabb80eb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365b098f47e457ffd9f77af07c6210bcf75884a0b3a61aeaf3b6b8cabb80eb91->enter($__internal_365b098f47e457ffd9f77af07c6210bcf75884a0b3a61aeaf3b6b8cabb80eb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_365b098f47e457ffd9f77af07c6210bcf75884a0b3a61aeaf3b6b8cabb80eb91->leave($__internal_365b098f47e457ffd9f77af07c6210bcf75884a0b3a61aeaf3b6b8cabb80eb91_prof);

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
