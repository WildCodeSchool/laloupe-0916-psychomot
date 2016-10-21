<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_28a086d37f3fad1a5e2fd49dd9703a2abdba412c1bbaae686173e35be6f1d7dc extends Twig_Template
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
        $__internal_73aa6aa5b8e316ed24e62a628f37bbf278c6e31dee3aebe1d3509adf048c3e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73aa6aa5b8e316ed24e62a628f37bbf278c6e31dee3aebe1d3509adf048c3e57->enter($__internal_73aa6aa5b8e316ed24e62a628f37bbf278c6e31dee3aebe1d3509adf048c3e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_73aa6aa5b8e316ed24e62a628f37bbf278c6e31dee3aebe1d3509adf048c3e57->leave($__internal_73aa6aa5b8e316ed24e62a628f37bbf278c6e31dee3aebe1d3509adf048c3e57_prof);

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
