<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_780c8018814dd5bfdabd9d3ffccf215057c82c1a0d20a608b943bc7eb029cba2 extends Twig_Template
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
        $__internal_ce04a3c33a94e4ea19e364e697309b47c1111d2ae201186af173c008c967aedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce04a3c33a94e4ea19e364e697309b47c1111d2ae201186af173c008c967aedf->enter($__internal_ce04a3c33a94e4ea19e364e697309b47c1111d2ae201186af173c008c967aedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ce04a3c33a94e4ea19e364e697309b47c1111d2ae201186af173c008c967aedf->leave($__internal_ce04a3c33a94e4ea19e364e697309b47c1111d2ae201186af173c008c967aedf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
