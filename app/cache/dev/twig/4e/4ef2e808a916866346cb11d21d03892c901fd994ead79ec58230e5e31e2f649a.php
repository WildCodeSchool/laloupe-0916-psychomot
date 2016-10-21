<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_92b027b362d4e007400875ee8b7677e8fff267519fbc31b2f95a95c588094de2 extends Twig_Template
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
        $__internal_421c65ac7391727a8848d36a228177b54d610bd6d9d8e37d0a2aa90f0385d2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421c65ac7391727a8848d36a228177b54d610bd6d9d8e37d0a2aa90f0385d2f5->enter($__internal_421c65ac7391727a8848d36a228177b54d610bd6d9d8e37d0a2aa90f0385d2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_421c65ac7391727a8848d36a228177b54d610bd6d9d8e37d0a2aa90f0385d2f5->leave($__internal_421c65ac7391727a8848d36a228177b54d610bd6d9d8e37d0a2aa90f0385d2f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
