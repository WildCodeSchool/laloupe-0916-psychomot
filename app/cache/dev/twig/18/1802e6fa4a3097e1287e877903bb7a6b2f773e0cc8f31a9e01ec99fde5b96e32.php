<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c132f7ff27527d218162711718b617eb522a0a268cce1572f2604db1f97fab9d extends Twig_Template
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
        $__internal_a51ac0b9d19e29ca98f78327990b4ef9aa5fe51917b5ac6abaaede51cfddadb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51ac0b9d19e29ca98f78327990b4ef9aa5fe51917b5ac6abaaede51cfddadb0->enter($__internal_a51ac0b9d19e29ca98f78327990b4ef9aa5fe51917b5ac6abaaede51cfddadb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a51ac0b9d19e29ca98f78327990b4ef9aa5fe51917b5ac6abaaede51cfddadb0->leave($__internal_a51ac0b9d19e29ca98f78327990b4ef9aa5fe51917b5ac6abaaede51cfddadb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
