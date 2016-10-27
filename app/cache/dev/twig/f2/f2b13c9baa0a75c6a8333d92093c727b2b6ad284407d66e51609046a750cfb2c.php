<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7cc7fce320ccdb25a84e99f2ed4d592e71ce8413f6edc665545faf020aabb5d7 extends Twig_Template
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
        $__internal_beb3658b37949544ba9de2d7628f4869c2adace6da53118749f5a0b077657dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb3658b37949544ba9de2d7628f4869c2adace6da53118749f5a0b077657dea->enter($__internal_beb3658b37949544ba9de2d7628f4869c2adace6da53118749f5a0b077657dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_beb3658b37949544ba9de2d7628f4869c2adace6da53118749f5a0b077657dea->leave($__internal_beb3658b37949544ba9de2d7628f4869c2adace6da53118749f5a0b077657dea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
