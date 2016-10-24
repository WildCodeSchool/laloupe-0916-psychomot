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
        $__internal_ac74032b8cf0a02d9804719bf79073b3e8c2941265570a50e7dcca13fd6a5c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac74032b8cf0a02d9804719bf79073b3e8c2941265570a50e7dcca13fd6a5c7b->enter($__internal_ac74032b8cf0a02d9804719bf79073b3e8c2941265570a50e7dcca13fd6a5c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ac74032b8cf0a02d9804719bf79073b3e8c2941265570a50e7dcca13fd6a5c7b->leave($__internal_ac74032b8cf0a02d9804719bf79073b3e8c2941265570a50e7dcca13fd6a5c7b_prof);

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
