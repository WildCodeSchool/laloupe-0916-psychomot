<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f19024e10ec6e67a957a96b02004975ad5394108ac2e940ba9b9e5c8bc508ca8 extends Twig_Template
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
        $__internal_3afbf6d312775969262d9276e04edd0cf1a607e559d0bedb2b4595c2ec54452c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afbf6d312775969262d9276e04edd0cf1a607e559d0bedb2b4595c2ec54452c->enter($__internal_3afbf6d312775969262d9276e04edd0cf1a607e559d0bedb2b4595c2ec54452c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3afbf6d312775969262d9276e04edd0cf1a607e559d0bedb2b4595c2ec54452c->leave($__internal_3afbf6d312775969262d9276e04edd0cf1a607e559d0bedb2b4595c2ec54452c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
