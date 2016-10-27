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
        $__internal_c1125e15a41984171c213a25cea3b65be048db2ea8c42950126f4f327480877a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1125e15a41984171c213a25cea3b65be048db2ea8c42950126f4f327480877a->enter($__internal_c1125e15a41984171c213a25cea3b65be048db2ea8c42950126f4f327480877a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c1125e15a41984171c213a25cea3b65be048db2ea8c42950126f4f327480877a->leave($__internal_c1125e15a41984171c213a25cea3b65be048db2ea8c42950126f4f327480877a_prof);

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
