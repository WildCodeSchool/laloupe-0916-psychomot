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
        $__internal_0982a8a64a2fb664a3e068c0348cd3205a58626143034ba3ad5052b8081bd96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0982a8a64a2fb664a3e068c0348cd3205a58626143034ba3ad5052b8081bd96c->enter($__internal_0982a8a64a2fb664a3e068c0348cd3205a58626143034ba3ad5052b8081bd96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0982a8a64a2fb664a3e068c0348cd3205a58626143034ba3ad5052b8081bd96c->leave($__internal_0982a8a64a2fb664a3e068c0348cd3205a58626143034ba3ad5052b8081bd96c_prof);

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
