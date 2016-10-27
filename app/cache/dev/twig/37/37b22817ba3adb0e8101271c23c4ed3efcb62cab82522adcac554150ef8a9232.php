<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1901a1224ad6b2fc7ad6d96bdc8a6105cb2f6dd6970fb2235cf0389892c6298c extends Twig_Template
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
<<<<<<< HEAD
        $__internal_1c6e0004107f7476926b0de962718a5b3a8244eb01e999992df159b3de6378a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6e0004107f7476926b0de962718a5b3a8244eb01e999992df159b3de6378a9->enter($__internal_1c6e0004107f7476926b0de962718a5b3a8244eb01e999992df159b3de6378a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));
=======
        $__internal_835aed8d89075d1da4f3979ff4544ad244c18e7bf035ff0d60f255f2036bfc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835aed8d89075d1da4f3979ff4544ad244c18e7bf035ff0d60f255f2036bfc88->enter($__internal_835aed8d89075d1da4f3979ff4544ad244c18e7bf035ff0d60f255f2036bfc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));
>>>>>>> flo

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
<<<<<<< HEAD
        $__internal_1c6e0004107f7476926b0de962718a5b3a8244eb01e999992df159b3de6378a9->leave($__internal_1c6e0004107f7476926b0de962718a5b3a8244eb01e999992df159b3de6378a9_prof);
=======
        $__internal_835aed8d89075d1da4f3979ff4544ad244c18e7bf035ff0d60f255f2036bfc88->leave($__internal_835aed8d89075d1da4f3979ff4544ad244c18e7bf035ff0d60f255f2036bfc88_prof);
>>>>>>> flo

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
