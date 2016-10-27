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
        $__internal_aea09752c6ebfbb36ce64f65c7837b5247d3a6a1a90c92cd35283500438b3f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea09752c6ebfbb36ce64f65c7837b5247d3a6a1a90c92cd35283500438b3f1a->enter($__internal_aea09752c6ebfbb36ce64f65c7837b5247d3a6a1a90c92cd35283500438b3f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_aea09752c6ebfbb36ce64f65c7837b5247d3a6a1a90c92cd35283500438b3f1a->leave($__internal_aea09752c6ebfbb36ce64f65c7837b5247d3a6a1a90c92cd35283500438b3f1a_prof);

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
