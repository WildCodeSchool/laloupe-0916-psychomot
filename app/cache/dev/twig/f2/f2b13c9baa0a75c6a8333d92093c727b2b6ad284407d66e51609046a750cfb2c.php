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
        $__internal_e5be0fd61f04dff2adb5c96bd386cf18ac37233c095b561282c7e8ab88897e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5be0fd61f04dff2adb5c96bd386cf18ac37233c095b561282c7e8ab88897e06->enter($__internal_e5be0fd61f04dff2adb5c96bd386cf18ac37233c095b561282c7e8ab88897e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e5be0fd61f04dff2adb5c96bd386cf18ac37233c095b561282c7e8ab88897e06->leave($__internal_e5be0fd61f04dff2adb5c96bd386cf18ac37233c095b561282c7e8ab88897e06_prof);

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
