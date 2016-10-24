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
        $__internal_d9d9d2d02c22bfbe1f70b6a4a4581c2ae13582996f082caf327626b2716d291a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d9d2d02c22bfbe1f70b6a4a4581c2ae13582996f082caf327626b2716d291a->enter($__internal_d9d9d2d02c22bfbe1f70b6a4a4581c2ae13582996f082caf327626b2716d291a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d9d9d2d02c22bfbe1f70b6a4a4581c2ae13582996f082caf327626b2716d291a->leave($__internal_d9d9d2d02c22bfbe1f70b6a4a4581c2ae13582996f082caf327626b2716d291a_prof);

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
