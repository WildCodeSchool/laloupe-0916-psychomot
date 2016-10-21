<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b08e57962e066e82cf33b4228055ee6d219532a8984639cd0d331b6c83218a19 extends Twig_Template
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
        $__internal_8f8fe308852fe03a38a2f4f24e9149d08d2c9369a0a8f0d987d706cd3428ac8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8fe308852fe03a38a2f4f24e9149d08d2c9369a0a8f0d987d706cd3428ac8b->enter($__internal_8f8fe308852fe03a38a2f4f24e9149d08d2c9369a0a8f0d987d706cd3428ac8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8f8fe308852fe03a38a2f4f24e9149d08d2c9369a0a8f0d987d706cd3428ac8b->leave($__internal_8f8fe308852fe03a38a2f4f24e9149d08d2c9369a0a8f0d987d706cd3428ac8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
