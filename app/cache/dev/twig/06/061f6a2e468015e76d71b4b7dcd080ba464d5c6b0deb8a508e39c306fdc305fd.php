<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b3c122f3b19a4b18a8ca80672f2a56944111f9442e0a13db81809287e186f947 extends Twig_Template
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
        $__internal_7a15d25bc6740b4cdd2c2767ca6d7a09801c2a7b5808be009a5590724eca895d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a15d25bc6740b4cdd2c2767ca6d7a09801c2a7b5808be009a5590724eca895d->enter($__internal_7a15d25bc6740b4cdd2c2767ca6d7a09801c2a7b5808be009a5590724eca895d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7a15d25bc6740b4cdd2c2767ca6d7a09801c2a7b5808be009a5590724eca895d->leave($__internal_7a15d25bc6740b4cdd2c2767ca6d7a09801c2a7b5808be009a5590724eca895d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
