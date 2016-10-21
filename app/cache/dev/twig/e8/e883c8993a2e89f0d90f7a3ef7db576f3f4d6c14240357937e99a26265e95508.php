<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_eac702dc157636001ac7268369c7c71c12a5d41ecd368a89604500d4bcf9a7e4 extends Twig_Template
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
        $__internal_8aee0892de651be77aa31947c39e3a0defeb7b8ab5d6748a0f09bacf169785ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aee0892de651be77aa31947c39e3a0defeb7b8ab5d6748a0f09bacf169785ce->enter($__internal_8aee0892de651be77aa31947c39e3a0defeb7b8ab5d6748a0f09bacf169785ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8aee0892de651be77aa31947c39e3a0defeb7b8ab5d6748a0f09bacf169785ce->leave($__internal_8aee0892de651be77aa31947c39e3a0defeb7b8ab5d6748a0f09bacf169785ce_prof);

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
