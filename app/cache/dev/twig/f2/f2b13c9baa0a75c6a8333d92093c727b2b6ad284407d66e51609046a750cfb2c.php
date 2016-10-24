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
        $__internal_22b2fb7ad63f46096ac48e9e81014ca2ae6185ac7b6f9d0d2d182a2a73fea630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b2fb7ad63f46096ac48e9e81014ca2ae6185ac7b6f9d0d2d182a2a73fea630->enter($__internal_22b2fb7ad63f46096ac48e9e81014ca2ae6185ac7b6f9d0d2d182a2a73fea630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_22b2fb7ad63f46096ac48e9e81014ca2ae6185ac7b6f9d0d2d182a2a73fea630->leave($__internal_22b2fb7ad63f46096ac48e9e81014ca2ae6185ac7b6f9d0d2d182a2a73fea630_prof);

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
