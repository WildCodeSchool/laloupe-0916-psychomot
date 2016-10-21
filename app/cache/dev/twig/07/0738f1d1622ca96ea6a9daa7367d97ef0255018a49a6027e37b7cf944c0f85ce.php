<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4b5576d6bc2c9d03a3beded984d272d8dc7114428fca9c740b5910dd8f08aafd extends Twig_Template
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
        $__internal_82d5f0e38aad2a48b46b2e3517ab72c88524250c1184c2d22383618f1f036d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d5f0e38aad2a48b46b2e3517ab72c88524250c1184c2d22383618f1f036d8f->enter($__internal_82d5f0e38aad2a48b46b2e3517ab72c88524250c1184c2d22383618f1f036d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_82d5f0e38aad2a48b46b2e3517ab72c88524250c1184c2d22383618f1f036d8f->leave($__internal_82d5f0e38aad2a48b46b2e3517ab72c88524250c1184c2d22383618f1f036d8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
