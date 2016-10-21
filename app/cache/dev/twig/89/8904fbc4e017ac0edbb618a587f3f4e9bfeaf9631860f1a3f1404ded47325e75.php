<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b9088cec47a0c437e1b6b7b49591570af92cfc26c3b52488bbcec44674345308 extends Twig_Template
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
        $__internal_a9efd5a54f79f4251363b9c70a33c4b1c32191ebfbfebddca4da8d62b7e77910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9efd5a54f79f4251363b9c70a33c4b1c32191ebfbfebddca4da8d62b7e77910->enter($__internal_a9efd5a54f79f4251363b9c70a33c4b1c32191ebfbfebddca4da8d62b7e77910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a9efd5a54f79f4251363b9c70a33c4b1c32191ebfbfebddca4da8d62b7e77910->leave($__internal_a9efd5a54f79f4251363b9c70a33c4b1c32191ebfbfebddca4da8d62b7e77910_prof);

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
