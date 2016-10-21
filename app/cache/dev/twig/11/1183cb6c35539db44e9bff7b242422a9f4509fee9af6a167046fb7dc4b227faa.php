<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cd4bfffd5f96365ee62412adad2a8fd81002009998993f93ead80193fb2bdec1 extends Twig_Template
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
        $__internal_d67fdbe193474159a778b3aa2bf68853b6bef351dfa9dbfc3487dc3ccd5c1094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67fdbe193474159a778b3aa2bf68853b6bef351dfa9dbfc3487dc3ccd5c1094->enter($__internal_d67fdbe193474159a778b3aa2bf68853b6bef351dfa9dbfc3487dc3ccd5c1094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d67fdbe193474159a778b3aa2bf68853b6bef351dfa9dbfc3487dc3ccd5c1094->leave($__internal_d67fdbe193474159a778b3aa2bf68853b6bef351dfa9dbfc3487dc3ccd5c1094_prof);

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
