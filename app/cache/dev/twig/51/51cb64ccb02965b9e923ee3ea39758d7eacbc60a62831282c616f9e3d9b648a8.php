<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0675d94e3633231f00428ce1ed6c5735de3b0d938d591ff8294ace3cb6c253cd extends Twig_Template
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
        $__internal_c333d4b1632d8c99297626fd986ffa6696f4151c3ee4c94d492a2456a1e65693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c333d4b1632d8c99297626fd986ffa6696f4151c3ee4c94d492a2456a1e65693->enter($__internal_c333d4b1632d8c99297626fd986ffa6696f4151c3ee4c94d492a2456a1e65693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c333d4b1632d8c99297626fd986ffa6696f4151c3ee4c94d492a2456a1e65693->leave($__internal_c333d4b1632d8c99297626fd986ffa6696f4151c3ee4c94d492a2456a1e65693_prof);

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
