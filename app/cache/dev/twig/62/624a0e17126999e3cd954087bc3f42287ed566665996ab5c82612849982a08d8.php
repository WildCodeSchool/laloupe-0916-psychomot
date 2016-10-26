<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d1ca36699702e333b41e8185cb8573da9ce0de8f12c9f75c208158aa074acbda extends Twig_Template
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
        $__internal_9cdda6a12fe9a51ffee31bf62e64bddf1208277350b8f80018b37eddb1cd35e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cdda6a12fe9a51ffee31bf62e64bddf1208277350b8f80018b37eddb1cd35e6->enter($__internal_9cdda6a12fe9a51ffee31bf62e64bddf1208277350b8f80018b37eddb1cd35e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9cdda6a12fe9a51ffee31bf62e64bddf1208277350b8f80018b37eddb1cd35e6->leave($__internal_9cdda6a12fe9a51ffee31bf62e64bddf1208277350b8f80018b37eddb1cd35e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
