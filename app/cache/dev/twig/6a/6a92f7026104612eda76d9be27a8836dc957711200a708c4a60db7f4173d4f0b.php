<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3349513523e1181b72ee282380744203583183d43c959259e5fab4901bdbb19a extends Twig_Template
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
        $__internal_84f45dfbae2fe5076ae26a0f666896411b9111013905fe9aef72ea80dc1cf6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f45dfbae2fe5076ae26a0f666896411b9111013905fe9aef72ea80dc1cf6ff->enter($__internal_84f45dfbae2fe5076ae26a0f666896411b9111013905fe9aef72ea80dc1cf6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_84f45dfbae2fe5076ae26a0f666896411b9111013905fe9aef72ea80dc1cf6ff->leave($__internal_84f45dfbae2fe5076ae26a0f666896411b9111013905fe9aef72ea80dc1cf6ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
