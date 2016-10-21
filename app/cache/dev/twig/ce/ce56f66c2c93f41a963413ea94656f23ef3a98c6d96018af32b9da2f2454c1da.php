<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bd64c69c3e6f19cc02bca4b9ec1f6f9e87c696e83d9d12dc134e20aa6b6eecd6 extends Twig_Template
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
        $__internal_54fabf605a3baa3e48bc9857adc0c3c45807db5db13ef31b885e24bc4152599b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fabf605a3baa3e48bc9857adc0c3c45807db5db13ef31b885e24bc4152599b->enter($__internal_54fabf605a3baa3e48bc9857adc0c3c45807db5db13ef31b885e24bc4152599b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_54fabf605a3baa3e48bc9857adc0c3c45807db5db13ef31b885e24bc4152599b->leave($__internal_54fabf605a3baa3e48bc9857adc0c3c45807db5db13ef31b885e24bc4152599b_prof);

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
