<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_535e804eb73c0f6d56d1729deb7c37cfe71f0e4374b6b28c41afa70e4432e483 extends Twig_Template
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
        $__internal_c388d7c47261efd0c4f5ecbc481c580183eea7d06879347b7ee19d7e2eddb27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c388d7c47261efd0c4f5ecbc481c580183eea7d06879347b7ee19d7e2eddb27f->enter($__internal_c388d7c47261efd0c4f5ecbc481c580183eea7d06879347b7ee19d7e2eddb27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c388d7c47261efd0c4f5ecbc481c580183eea7d06879347b7ee19d7e2eddb27f->leave($__internal_c388d7c47261efd0c4f5ecbc481c580183eea7d06879347b7ee19d7e2eddb27f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
