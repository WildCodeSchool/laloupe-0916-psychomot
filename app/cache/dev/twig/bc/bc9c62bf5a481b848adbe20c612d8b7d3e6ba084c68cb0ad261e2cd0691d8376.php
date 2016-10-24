<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7c91be3a53a3046b9868344610b3846ef2f57d3d4db2f5e2755735f578665445 extends Twig_Template
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
        $__internal_9063232b740b72ff5d6ec01a4ba792069a5ff030aae1ef09a88f1f687375efd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9063232b740b72ff5d6ec01a4ba792069a5ff030aae1ef09a88f1f687375efd0->enter($__internal_9063232b740b72ff5d6ec01a4ba792069a5ff030aae1ef09a88f1f687375efd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9063232b740b72ff5d6ec01a4ba792069a5ff030aae1ef09a88f1f687375efd0->leave($__internal_9063232b740b72ff5d6ec01a4ba792069a5ff030aae1ef09a88f1f687375efd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
