<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9417f85038cb3d8f22f046026d8b84fc190e7ff0ef1ba4bff1f99c4787b3b265 extends Twig_Template
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
        $__internal_0944d421efba66a6bf43865e959075b37a057b6d4102000ac5783aefb659d5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0944d421efba66a6bf43865e959075b37a057b6d4102000ac5783aefb659d5a2->enter($__internal_0944d421efba66a6bf43865e959075b37a057b6d4102000ac5783aefb659d5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));
=======
        $__internal_e6e7276a14e758cab67caf38f0fa745e52ed42cc63445073a8487d839427dd8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e7276a14e758cab67caf38f0fa745e52ed42cc63445073a8487d839427dd8d->enter($__internal_e6e7276a14e758cab67caf38f0fa745e52ed42cc63445073a8487d839427dd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));
>>>>>>> flo

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_0944d421efba66a6bf43865e959075b37a057b6d4102000ac5783aefb659d5a2->leave($__internal_0944d421efba66a6bf43865e959075b37a057b6d4102000ac5783aefb659d5a2_prof);
=======
        $__internal_e6e7276a14e758cab67caf38f0fa745e52ed42cc63445073a8487d839427dd8d->leave($__internal_e6e7276a14e758cab67caf38f0fa745e52ed42cc63445073a8487d839427dd8d_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
