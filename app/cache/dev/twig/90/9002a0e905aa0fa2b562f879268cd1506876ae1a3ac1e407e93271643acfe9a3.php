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
        $__internal_61125ff73993407b76133d6122ca06eb014541aaff1dab2354831676201f9b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61125ff73993407b76133d6122ca06eb014541aaff1dab2354831676201f9b52->enter($__internal_61125ff73993407b76133d6122ca06eb014541aaff1dab2354831676201f9b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_61125ff73993407b76133d6122ca06eb014541aaff1dab2354831676201f9b52->leave($__internal_61125ff73993407b76133d6122ca06eb014541aaff1dab2354831676201f9b52_prof);

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
