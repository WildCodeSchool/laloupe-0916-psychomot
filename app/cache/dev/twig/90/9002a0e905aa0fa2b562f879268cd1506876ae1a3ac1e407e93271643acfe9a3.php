<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6cabf2a37aa5345e96af600812839159c74effc84d2931fe9de2276a26c02548 extends Twig_Template
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
        $__internal_c56b18d7c7cd2023add196464b644d4656397f79e81e6111b6928f9089830ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56b18d7c7cd2023add196464b644d4656397f79e81e6111b6928f9089830ab5->enter($__internal_c56b18d7c7cd2023add196464b644d4656397f79e81e6111b6928f9089830ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c56b18d7c7cd2023add196464b644d4656397f79e81e6111b6928f9089830ab5->leave($__internal_c56b18d7c7cd2023add196464b644d4656397f79e81e6111b6928f9089830ab5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
