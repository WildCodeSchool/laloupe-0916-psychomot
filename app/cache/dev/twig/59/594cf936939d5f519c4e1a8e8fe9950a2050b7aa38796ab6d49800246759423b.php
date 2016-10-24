<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4b5bf727bb342b11ab3156f73a0f73ddbe909c09d2e202381a21603fba31e1bc extends Twig_Template
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
        $__internal_5c15c341da4cfb63de188c566987c51276ffd8f2228b88c727255f29f62155cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c15c341da4cfb63de188c566987c51276ffd8f2228b88c727255f29f62155cd->enter($__internal_5c15c341da4cfb63de188c566987c51276ffd8f2228b88c727255f29f62155cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5c15c341da4cfb63de188c566987c51276ffd8f2228b88c727255f29f62155cd->leave($__internal_5c15c341da4cfb63de188c566987c51276ffd8f2228b88c727255f29f62155cd_prof);

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
