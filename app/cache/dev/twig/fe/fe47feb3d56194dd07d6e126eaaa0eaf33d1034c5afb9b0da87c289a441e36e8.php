<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9072c45a00b18b6a4bd0e8f1391c9af7d73483c2ed2883cd89afb96034e0628f extends Twig_Template
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
        $__internal_77fc79841413e92d9b15244d123797fca8d0ec1b762f95d494a9caa8789a1096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fc79841413e92d9b15244d123797fca8d0ec1b762f95d494a9caa8789a1096->enter($__internal_77fc79841413e92d9b15244d123797fca8d0ec1b762f95d494a9caa8789a1096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_77fc79841413e92d9b15244d123797fca8d0ec1b762f95d494a9caa8789a1096->leave($__internal_77fc79841413e92d9b15244d123797fca8d0ec1b762f95d494a9caa8789a1096_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
