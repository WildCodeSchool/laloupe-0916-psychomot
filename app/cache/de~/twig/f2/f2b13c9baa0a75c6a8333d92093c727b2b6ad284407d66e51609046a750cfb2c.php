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
        $__internal_6ce8bdd7e493e8e710013547a036e49e86cfe4f87b67c96857f64fbb8e37247a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce8bdd7e493e8e710013547a036e49e86cfe4f87b67c96857f64fbb8e37247a->enter($__internal_6ce8bdd7e493e8e710013547a036e49e86cfe4f87b67c96857f64fbb8e37247a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6ce8bdd7e493e8e710013547a036e49e86cfe4f87b67c96857f64fbb8e37247a->leave($__internal_6ce8bdd7e493e8e710013547a036e49e86cfe4f87b67c96857f64fbb8e37247a_prof);

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
